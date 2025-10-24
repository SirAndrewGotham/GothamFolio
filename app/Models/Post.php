<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Concerns\HasSlug;
use App\Concerns\HasCategories;
use App\Concerns\HasTags;
use App\Concerns\HasViews;
use App\Concerns\HasVotes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory, SoftDeletes, HasSlug, HasCategories, HasTags, HasViews, HasVotes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'toc',
        'content',
        'featured_image',
        'published_at',
        'is_published',
        'is_featured',
        'read_time',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'user_id',
        'post_id',
        'language_id',
        'allow_comments',
        'allow_anonymous_comments',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'allow_comments' => 'boolean',
        'allow_anonymous_comments' => 'boolean',
        'toc' => 'array',
    ];

    /**
     * Get the name of the field that should be used for slug generation.
     */
    public function getSluggableField(): string
    {
        return 'title';
    }

    /**
     * Relationship with the author (user).
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relationship with the original post (self-reference).
     */
    public function originalPost(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    /**
     * Relationship with language.
     */
    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    /**
     * Relationship with comments.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Scope for published posts.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /**
     * Scope for featured posts.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)
            ->published();
    }

    /**
     * Scope for draft posts.
     */
    public function scopeDraft($query)
    {
        return $query->where('is_published', false)
            ->orWhereNull('published_at');
    }

    /**
     * Scope for scheduled posts.
     */
    public function scopeScheduled($query)
    {
        return $query->where('is_published', true)
            ->where('published_at', '>', now());
    }

    /**
     * Get the estimated reading time.
     */
    public function calculateReadTime(): int
    {
        // Average reading speed: 200-250 words per minute
        $wordCount = str_word_count(strip_tags($this->content));
        return max(1, ceil($wordCount / 200));
    }

    /**
     * Automatically calculate read time before saving.
     */
    protected static function booted(): void
    {
        static::creating(function (Post $post) {
            /**
             * Automatically assign post_id - get the next available post_id
             * If this is a new post (not translation), assign next sequence value
             * If this is a translation, use the provided post_id
             */
            if (empty($post->post_id)) {
                $maxPostId = static::max('post_id') ?? 0;
                $post->post_id = $maxPostId + 1;
            }
        });

        static::saving(function (Post $post) {
            /**
             * Calculate read time before saving.
             */
            if ($post->isDirty('content') && $post->content) {
                $post->read_time = $post->calculateReadTime();
            }
            /**
             * Automatically generate TOC before saving.
             */
            if ($post->isDirty('content')) {
                $post->toc = $post->generateTableOfContents();
            }
        });
    }

    /**
     * Generate table of contents from post content.
     */
    public function generateTableOfContents(): array
    {
        if (empty($this->content)) {
            return [];
        }

        $toc = [];
        $dom = new \DOMDocument();

        // Suppress warnings for malformed HTML
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($this->content, 'HTML-ENTITIES', 'UTF-8'));
        libxml_clear_errors();

        $headings = $dom->getElementsByTagName('*');

        foreach ($headings as $heading) {
            if (in_array($heading->tagName, ['h2', 'h3', 'h4', 'h5', 'h6'])) {
                $id = $heading->getAttribute('id');
                $text = trim($heading->textContent);

                if (!empty($id) && !empty($text)) {
                    $toc[] = [
                        'id' => $id,
                        'text' => $text,
                        'level' => (int) substr($heading->tagName, 1),
                        'tag' => $heading->tagName
                    ];
                }
            }
        }

        return $toc;
    }

    /**
     * TOC attribute accessor.
     */
    protected function toc(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => is_string($value) ? json_decode($value, true) : $value,
        );
    }
}

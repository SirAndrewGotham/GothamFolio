<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Concerns\HasSlug;
use App\Concerns\HasCategories;
use App\Concerns\HasTags;
use App\Concerns\HasTranslations;
use App\Concerns\HasViews;
use App\Concerns\HasVotes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory, SoftDeletes, HasSlug, HasCategories, HasTags, HasTranslations, HasViews, HasVotes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'published_at',
        'is_published',
        'is_featured',
        'read_time',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'user_id'
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
    ];

    /**
     * The attributes that should be translatable.
     *
     * @var array<int, string>
     */
    protected array $translatableAttributes = [
        'title',
        'excerpt',
        'content',
        'meta_title',
        'meta_description'
    ];

    /**
     * Get the name of the field that should be used for slug generation.
     */
    public function getSluggableField(): string
    {
        return 'title';
    }

    /**
     * Title attribute with translation support.
     */
    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('title') ?? $value,
        );
    }

    /**
     * Excerpt attribute with translation support.
     */
    protected function excerpt(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('excerpt') ?? $value,
        );
    }

    /**
     * Content attribute with translation support.
     */
    protected function content(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('content') ?? $value,
        );
    }

    /**
     * Meta title attribute with translation support.
     */
    protected function metaTitle(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('meta_title') ?? $value,
        );
    }

    /**
     * Meta description attribute with translation support.
     */
    protected function metaDescription(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('meta_description') ?? $value,
        );
    }

    /**
     * Relationship with the author (user).
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
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
        static::saving(function (Post $post) {
            if ($post->isDirty('content') && $post->content) {
                $post->read_time = $post->calculateReadTime();
            }
        });
    }
}

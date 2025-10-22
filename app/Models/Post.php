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
     * Field name used to generate the model's slug.
     *
     * @return string The attribute name used for slug generation (e.g., 'title').
     */
    public function getSluggableField(): string
    {
        return 'title';
    }

    /**
     * Provides an Eloquent attribute accessor that returns the translated title when available, otherwise the original title.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute The attribute accessor for the `title` field.
     */
    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('title') ?? $value,
        );
    }

    /**
     * Return the excerpt attribute, preferring a translated value when available.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute The attribute accessor that yields the translated excerpt if present, otherwise the stored excerpt.
     */
    protected function excerpt(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('excerpt') ?? $value,
        );
    }

    /**
     * Provides the "content" attribute accessor that yields a translated value when available.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute The accessor that returns the translated `content` string if present, otherwise the original `content` value.
     */
    protected function content(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('content') ?? $value,
        );
    }

    /**
     * Accessor for the `meta_title` attribute that returns a translated value when present.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute The attribute accessor that yields the translated `meta_title` if available, otherwise the original stored value.
     */
    protected function metaTitle(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('meta_title') ?? $value,
        );
    }

    /**
     * Meta description attribute accessor that returns a translation-aware value.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute The attribute accessor which yields the translated `meta_description` when available, otherwise the stored `meta_description` value.
     */
    protected function metaDescription(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $this->getTranslatedAttribute('meta_description') ?? $value,
        );
    }

    /**
     * Get the author of the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo The user who authored the post.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get comments associated with the post.
     *
     * @return HasMany The has-many relation to Comment models.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Limit the query to posts marked published with a non-null published_at not later than now.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The modified query builder.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /**
     * Restricts the query to posts that are featured and published.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The query builder constrained to featured, published posts.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)
            ->published();
    }

    /**
     * Filter the query to posts that are drafts: either marked not published or with no `published_at`.
     *
     * @return \Illuminate\Database\Eloquent\Builder The query builder scoped to draft posts.
     */
    public function scopeDraft($query)
    {
        return $query->where('is_published', false)
            ->orWhereNull('published_at');
    }

    /**
     * Filter the query to posts that are published and have a published_at datetime in the future.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The Eloquent query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The query builder filtered to posts marked as published with a published_at in the future.
     */
    public function scopeScheduled($query)
    {
        return $query->where('is_published', true)
            ->where('published_at', '>', now());
    }

    / **
     * Estimate the post's reading time in minutes.
     *
     * Uses a baseline of 200 words per minute to convert the post content's word count into minutes.
     *
     * @return int The estimated reading time in minutes, at least 1.
     */
    public function calculateReadTime(): int
    {
        // Average reading speed: 200-250 words per minute
        $wordCount = str_word_count(strip_tags($this->content));
        return max(1, ceil($wordCount / 200));
    }

    /**
     * Recalculates and sets the model's read_time when content changes before persisting.
     *
     * Registers a saving model event that, if the `content` attribute was modified and is non-empty,
     * updates the post's `read_time` with the value returned by `calculateReadTime()`.
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
<?php

namespace App\Concerns;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait HasTags
{
    /**
     * Boot the HasTags trait for a model.
     */
    protected static function bootHasTags(): void
    {
        // Add any model event listeners here if needed
    }

    /**
     * Get all the tags for the model.
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    /**
     * Add a tag to the model.
     */
    public function addTag(Tag|int $tag): void
    {
        $this->tags()->attach($tag);
    }

    /**
     * Remove a tag from the model.
     */
    public function removeTag(Tag|int $tag): void
    {
        $this->tags()->detach($tag);
    }

    /**
     * Check if the model has a tag.
     */
    public function hasTag(Tag|int $tag): bool
    {
        return $this->tags->contains($tag);
    }

    /**
     * Sync tags to the model.
     *
     * @param  array<int, int|\App\Models\Tag>  $tags
     */
    public function syncTags(array $tags): void
    {
        $this->tags()->sync($tags);
    }
}

<?php

namespace App\Concerns;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait HasCategories
{
    /**
     * Boot the HasCategories trait for a model.
     */
    protected static function bootHasCategories(): void
    {
        // Add any model event listeners here if needed
    }

    /**
     * Get all the categories for the model.
     */
    public function categories(): MorphToMany
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    /**
     * Add a category to the model.
     */
    public function addCategory(Category|int $category): void
    {
        $this->categories()->attach($category);
    }

    /**
     * Remove a category from the model.
     */
    public function removeCategory(Category|int $category): void
    {
        $this->categories()->detach($category);
    }

    /**
     * Check if the model has a category.
     */
    public function hasCategory(Category|int $category): bool
    {
        return $this->categories->contains($category);
    }

    /**
     * Sync categories to the model.
     *
     * @param  array<int, int|\App\Models\Category>  $categories
     */
    public function syncCategories(array $categories): void
    {
        $this->categories()->sync($categories);
    }
}

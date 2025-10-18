<?php

declare(strict_types=1);

namespace App\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasSlug
{
    /**
     * Get the name of the field that should be used for slug generation.
     *
     * @return string
     */
    public function getSluggableField(): string
    {
        return 'title'; // Default sluggable field
    }

    protected static function bootHasSlug(): void
    {
        static::creating(function (Model $model) {
            if (empty($model->slug)) {
                $model->slug = $model->generateUniqueSlug();
            }
        });

        static::updating(function (Model $model) {
            // Only regenerate slug if the sluggable field has changed
            if ($model->isDirty($model->getSluggableField())) {
                $model->slug = $model->generateUniqueSlug();
            }
        });
    }

    /**
     * Generate a unique slug for the model.
     *
     * @return string
     */
    protected function generateUniqueSlug(): string
    {
        $slug = Str::slug($this->{$this->getSluggableField()});
        $originalSlug = $slug;
        $suffix = 1;

        // Check if the slug already exists and if so, append a suffix
        while (static::where('slug', $slug)
            ->where($this->getKeyName(), '!=', $this->getKey())
            ->exists()) {
            $slug = $originalSlug . '-' . $suffix++;
        }

        return $slug;
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}

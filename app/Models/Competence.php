<?php

namespace App\Models;

use App\Concerns\HasCategories;
use App\Concerns\HasSlug;
use App\Concerns\HasTags;
use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasCategories, HasFactory, HasSlug, HasTags, HasTranslations;

    protected $fillable = [
        'slug',
        'icon',
        'color',
        'proficiency',
        'years_experience',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'proficiency' => 'integer',
        'years_experience' => 'integer',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected array $translatableAttributes = ['name', 'description'];

    public function getSluggableField(): string
    {
        return 'name';
    }

    /**
     * Override the generateUniqueSlug method to handle translatable names
     */
    protected function generateUniqueSlug(): string
    {
        $name = $this->getSlugSourceName();
        $slug = \Illuminate\Support\Str::slug($name);
        $originalSlug = $slug;
        $suffix = 1;

        while (static::where('slug', $slug)
            ->where($this->getKeyName(), '!=', $this->getKey())
            ->exists()) {
            $slug = $originalSlug.'-'.$suffix++;
        }

        return $slug;
    }

    /**
     * Get the source name for slug generation, handling translations
     */
    protected function getSlugSourceName(): string
    {
        // If we're updating and translations exist, use English name
        if ($this->exists && $this->translations()->where('key', 'name')->where('locale', 'en')->exists()) {
            $name = $this->getTranslation('name', 'en');
            if ($name) {
                return $name;
            }
        }

        // Fallback: use a base name or the model ID if available
        return 'competence-'.($this->id ?? uniqid());
    }

    /**
     * Custom method to handle slug generation with translations
     * This should be called after translations are set
     */
    public function generateSlugFromTranslation(string $locale = 'en'): void
    {
        $name = $this->getTranslation('name', $locale);
        if ($name && empty($this->slug)) {
            $this->slug = $this->generateUniqueSlugFromString($name);
            $this->save();
        }
    }

    /**
     * Generate a unique slug from a given string
     */
    protected function generateUniqueSlugFromString(string $string): string
    {
        $slug = \Illuminate\Support\Str::slug($string);
        $originalSlug = $slug;
        $suffix = 1;

        while (static::where('slug', $slug)
            ->where($this->getKeyName(), '!=', $this->getKey())
            ->exists()) {
            $slug = $originalSlug.'-'.$suffix++;
        }

        return $slug;
    }
}

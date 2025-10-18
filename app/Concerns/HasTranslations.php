<?php

namespace App\Concerns;

use App\Models\Translation;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 *
 * @property array<int, string> $translatableAttributes The attributes that should be translatable for the model.
 *
 * ### Usage:
 * In your model, define the `$translatableAttributes` property and then create explicit accessors and mutators for each translatable attribute:
 * ```php
 * class MyTranslatableModel extends Model
 * {
 *     use HasTranslations;
 *
 *     protected array $translatableAttributes = ['title', 'description'];
 *
 *     public function getTitleAttribute(string $value): string
 *     {
 *         return $this->getTranslatedAttribute('title') ?? $value;
 *     }
 *
 *     public function setTitleAttribute(string $value): void
 *     {
 *         $this->setTranslatedAttribute('title', $value);
 *     }
 * }
 * ```
 */
trait HasTranslations
{
    /**
     * The attributes that should be translatable.
     *
     * @var array<int, string>
     */
    protected array $translatableAttributes = [];

    /**
     * Get all of the translations for the model.
     */
    public function translations(): MorphMany
    {
        return $this->morphMany(Translation::class, 'translatable');
    }

    /**
     * Get a translation for a given key and locale.
     */
    public function getTranslation(string $key, string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();

        if ($this->relationLoaded('translations')) {
            return $this->translations
                        ->where('key', $key)
                        ->where('locale', $locale)
                        ->first()
                        ?->value;
        }

        return $this->translations()
                    ->where('key', $key)
                    ->where('locale', $locale)
                    ->value('value');
    }

    /**
     * Set a translation for a given key and locale.
     */
    public function setTranslation(string $key, string $value, string $locale = null): void
    {
        $locale = $locale ?? app()->getLocale();

        $this->translations()->updateOrCreate(
            ['locale' => $locale, 'key' => $key],
            ['value' => $value]
        );
    }

    /**
     * Get a translated attribute.
     */
    public function getTranslatedAttribute(string $key, string $locale = null): ?string
    {
        if (! in_array($key, $this->translatableAttributes ?? [])) {
            return $this->getAttribute($key); // Return original attribute if not translatable
        }

        return $this->getTranslation($key, $locale);
    }

    /**
     * Set a translated attribute.
     */
    public function setTranslatedAttribute(string $key, string $value, string $locale = null): void
    {
        if (! in_array($key, $this->translatableAttributes ?? [])) {
            $this->setAttribute($key, $value); // Set original attribute if not translatable
            return;
        }

        $this->setTranslation($key, $value, $locale);
    }
}

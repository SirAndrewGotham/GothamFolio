<?php

namespace App\Concerns;

use App\Models\Translation;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait HasTranslations
{
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

        return $this->translations
                    ->where('key', $key)
                    ->where('locale', $locale)
                    ->first()
                    ?->value;
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

    /**
     * Automatically retrieve translated attributes.
     */
    public function __get($key)
    {
        if (in_array($key, $this->translatableAttributes ?? [])) {
            return $this->getTranslatedAttribute($key);
        }

        return $this->getAttribute($key);
    }

    /**
     * Automatically set translated attributes.
     */
    public function __set($key, $value)
    {
        if (in_array($key, $this->translatableAttributes ?? [])) {
            $this->setTranslatedAttribute($key, $value);
            return;
        }

        $this->setAttribute($key, $value);
    }
}

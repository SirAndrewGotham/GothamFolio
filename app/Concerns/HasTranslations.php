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
     * Boot the HasTranslations trait for a model.
     */
    protected static function bootHasTranslations(): void
    {
        static::deleted(function ($model) {
            if (method_exists($model, 'isForceDeleting') && $model->isForceDeleting()) {
                $model->translations()->delete();
            }
        });
    }

    /**
     * Get all translations for the model.
     */
    public function translations(): MorphMany
    {
        return $this->morphMany(Translation::class, 'translatable');
    }

    /**
     * Get a translation for a given key and locale.
     */
    public function getTranslation(string $key, ?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();

        if ($this->relationLoaded('translations')) {
            $translation = $this->translations
                ->where('key', $key)
                ->where('locale', $locale)
                ->first();

            if ($translation) {
                return $translation->value;
            }

            // Fallback to default locale if current locale translation doesn't exist
            $fallbackLocale = config('app.fallback_locale', 'en');
            if ($locale !== $fallbackLocale) {
                $fallbackTranslation = $this->translations
                    ->where('key', $key)
                    ->where('locale', $fallbackLocale)
                    ->first();

                if ($fallbackTranslation) {
                    return $fallbackTranslation->value;
                }
            }

            return null;
        }

        // Database query with fallback
        $translation = $this->translations()
            ->where('key', $key)
            ->where('locale', $locale)
            ->value('value');

        if (is_null($translation)) {
            $fallbackLocale = config('app.fallback_locale', 'en');
            if ($locale !== $fallbackLocale) {
                $translation = $this->translations()
                    ->where('key', $key)
                    ->where('locale', $fallbackLocale)
                    ->value('value');
            }
        }

        return $translation;
    }

    /**
     * Get all translations for a given key.
     */
    public function getTranslations(string $key): array
    {
        if ($this->relationLoaded('translations')) {
            return $this->translations
                ->where('key', $key)
                ->pluck('value', 'locale')
                ->toArray();
        }

        return $this->translations()
            ->where('key', $key)
            ->pluck('value', 'locale')
            ->toArray();
    }

    /**
     * Set a translation for a given key and locale.
     */
    public function setTranslation(string $key, string $value, ?string $locale = null): void
    {
        $locale = $locale ?? app()->getLocale();

        if (is_null($this->id)) {
            throw new \Exception('Model ID is null when attempting to set translation for key: '.$key);
        }

        // Manual implementation to avoid updateOrCreate issues
        $translation = $this->translations()
            ->where('locale', $locale)
            ->where('key', $key)
            ->first();

        if ($translation) {
            // Update existing translation
            $translation->update(['value' => $value]);
        } else {
            $newTranslation = new Translation;
            $newTranslation->locale = $locale;
            $newTranslation->key = $key;
            $newTranslation->value = $value;
            $newTranslation->translatable_id = $this->id;
            $newTranslation->translatable_type = $this->getMorphClass();
            $newTranslation->save();

            $translation = $newTranslation;
        }

        // Reload the translations relationship
        if ($this->relationLoaded('translations')) {
            $this->load('translations');
        }
    }

    /**
     * Get a translated attribute (for use in attribute casting).
     */
    public function getTranslatedAttribute(string $key, ?string $locale = null): ?string
    {
        // Check if the model has the translatableAttributes property
        if (! property_exists($this, 'translatableAttributes') ||
            ! in_array($key, $this->translatableAttributes ?? [])) {
            return $this->getAttributeFromArray($key);
        }

        $translation = $this->getTranslation($key, $locale);

        return $translation ?? $this->getAttributeFromArray($key);
    }

    /**
     * Set a translated attribute (for use in attribute casting).
     */
    public function setTranslatedAttribute(string $key, string $value, ?string $locale = null): void
    {
        // Check if the model has the translatableAttributes property
        if (! property_exists($this, 'translatableAttributes') ||
            ! in_array($key, $this->translatableAttributes ?? [])) {
            $this->attributes[$key] = $value;

            return;
        }

        $this->setTranslation($key, $value, $locale);
        $this->attributes[$key] = $value;
    }

    /**
     * Check if a translation exists for a given key and locale.
     */
    public function hasTranslation(string $key, ?string $locale = null): bool
    {
        $locale = $locale ?? app()->getLocale();

        return $this->translations()
            ->where('key', $key)
            ->where('locale', $locale)
            ->exists();
    }

    /**
     * Get the available locales for a given key.
     */
    public function getAvailableLocales(string $key): array
    {
        return $this->translations()
            ->where('key', $key)
            ->pluck('locale')
            ->toArray();
    }

    /**
     * Check if a translation exists in any locale for a given key.
     */
    public function hasAnyTranslation(string $key): bool
    {
        return $this->translations()
            ->where('key', $key)
            ->exists();
    }

    /**
     * Mass set translations for multiple keys.
     */
    public function setTranslations(array $translations, ?string $locale = null): void
    {
        $locale = $locale ?? app()->getLocale();

        foreach ($translations as $key => $value) {
            if (in_array($key, $this->translatableAttributes)) {
                $this->setTranslation($key, $value, $locale);
            }
        }
    }

    /**
     * Get all translations for the current locale.
     */
    public function getCurrentLocaleTranslations(): array
    {
        $locale = app()->getLocale();
        $translations = [];

        foreach ($this->translatableAttributes as $attribute) {
            $translations[$attribute] = $this->getTranslation($attribute, $locale);
        }

        return $translations;
    }

    /**
     * Get the fallback translation for a key.
     */
    public function getFallbackTranslation(string $key): ?string
    {
        $fallbackLocale = config('app.fallback_locale', 'en');

        // First try fallback locale
        $translation = $this->getTranslation($key, $fallbackLocale);

        // If no fallback translation, try any available translation
        if (is_null($translation)) {
            $translation = $this->translations()
                ->where('key', $key)
                ->value('value');
        }

        return $translation;
    }

    /**
     * Scope to filter by translation value.
     */
    public function scopeWhereTranslation($query, string $key, string $value, ?string $locale = null)
    {
        $locale = $locale ?? app()->getLocale();

        return $query->whereHas('translations', function ($q) use ($key, $value, $locale) {
            $q->where('key', $key)
                ->where('value', 'like', "%{$value}%")
                ->where('locale', $locale);
        });
    }

    /**
     * Eager load translations for specific locales.
     */
    public function scopeWithTranslations($query, ?array $locales = null)
    {
        $locales = $locales ?? [app()->getLocale()];

        return $query->with(['translations' => function ($q) use ($locales) {
            $q->whereIn('locale', $locales);
        }]);
    }

    /**
     * Check if the model has any translations.
     */
    public function hasTranslations(): bool
    {
        return $this->translations()->exists();
    }

    /**
     * Get the count of translations for this model.
     */
    public function getTranslationsCountAttribute(): int
    {
        return $this->translations()->count();
    }

    /**
     * Get translations grouped by locale.
     */
    public function getTranslationsByLocale(): array
    {
        return $this->translations()
            ->get()
            ->groupBy('locale')
            ->map(function ($translations) {
                return $translations->pluck('value', 'key');
            })
            ->toArray();
    }

    /**
     * Sync translations - remove any not in the provided array.
     */
    public function syncTranslations(array $translations, string $locale): void
    {
        // First, remove all existing translations for this locale
        $this->translations()->where('locale', $locale)->delete();

        // Then create new ones
        foreach ($translations as $key => $value) {
            if (in_array($key, $this->translatableAttributes)) {
                $this->setTranslation($key, $value, $locale);
            }
        }
    }
}

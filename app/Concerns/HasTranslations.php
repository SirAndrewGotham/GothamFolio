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
     * Register a model deleted event listener that removes related translations when the model is force-deleted.
     *
     * Attaches to the model's deleted event and deletes all associated translation records only if the model
     * reports a force delete via an isForceDeleting method.
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
     * Get all of the translations for the model.
     */
    public function translations(): MorphMany
    {
        return $this->morphMany(Translation::class, 'translatable');
    }

    /**
     * Retrieve the translation value for a specific key and locale.
     *
     * @param string $key The translation key to look up.
     * @param string|null $locale The locale to use; when null, the application's current locale is used.
     * @return string|null The translation value for the given key and locale, or `null` if no translation exists.
     */
    public function getTranslation(string $key, ?string $locale = null): ?string
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
     * Retrieve all translations for the given key as an associative array keyed by locale.
     *
     * @param string $key The translation key to retrieve values for.
     * @return array<string,string> An array mapping locale codes to translation values.
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
     * Create or update the translation for the given key in the specified locale.
     *
     * Throws if the model does not have an ID. When the model's `translations` relation is already loaded,
     * it will be reloaded after the change.
     *
     * @param string $key The translation key.
     * @param string $value The translation value.
     * @param string|null $locale The locale to set the translation for; defaults to the current application locale.
     * @throws \Exception If the model's ID is null.
     */
    public function setTranslation(string $key, string $value, ?string $locale = null): void
    {
        $locale = $locale ?? app()->getLocale();

        if (is_null($this->id)) {
            throw new \Exception('Model ID is null when attempting to set translation for key: ' . $key);
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
            $newTranslation = new Translation();
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
     * Retrieve the translated value for an attribute when available.
     *
     * If the model defines a `translatableAttributes` list and the attribute is listed, returns the translation for the specified locale (or the current locale when null); otherwise returns the model's raw attribute value.
     *
     * @param string $key The attribute name.
     * @param string|null $locale Locale to retrieve the translation for; when null the current application locale is used.
     * @return string|null The translated value if present, otherwise the raw attribute value or null.
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
     * Set a translated attribute value on the model, creating/updating the translation when appropriate.
     *
     * If the model does not define a translatableAttributes property or the given key is not listed there,
     * the value is stored directly on the model's raw attributes. Otherwise the value is saved as a translation
     * for the specified locale and the raw attribute is updated to the provided value.
     *
     * @param string $key The attribute/translation key.
     * @param string $value The value to set.
     * @param string|null $locale The locale for the translation; when null the current application locale is used.
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
     * Determine whether a translation exists for the given key in the specified locale.
     *
     * @param string $key The translation key to check.
     * @param string|null $locale The locale to check for; defaults to the current application locale.
     * @return bool `true` if a translation exists for the key in the locale, `false` otherwise.
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
     * Retrieve all locales that have a stored translation for the given key.
     *
     * @param string $key The translation key to look up.
     * @return string[] An array of locale codes that have a translation for the key.
     */
    public function getAvailableLocales(string $key): array
    {
        return $this->translations()
            ->where('key', $key)
            ->pluck('locale')
            ->toArray();
    }

    /**
     * Determines whether any translation exists for the given key across all locales.
     *
     * @param string $key The translation key to check.
     * @return bool `true` if at least one translation exists for the key, `false` otherwise.
     */
    public function hasAnyTranslation(string $key): bool
    {
        return $this->translations()
            ->where('key', $key)
            ->exists();
    }

    /**
     * Set multiple translations for the given locale.
     *
     * For each key in the provided array, creates or updates the translation for the specified locale (or the current app locale).
     * Keys not present in the model's `translatableAttributes` are ignored.
     *
     * @param array<string,string> $translations Associative array of attribute => translated value.
     * @param string|null $locale Locale to apply the translations to; defaults to the current application locale when null.
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
     * Get translations for all translatable attributes in the current application locale.
     *
     * @return array<string, string|null> An associative array mapping attribute names to their translation for the current locale, or `null` if no translation exists.
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
         * Retrieve a fallback translation for the given key.
         *
         * Attempts to return the translation for the application's configured fallback locale,
         * and if not available returns any available translation for the key.
         *
         * @param string $key The translation key to look up.
         * @return string|null The translation value from the fallback locale or any available locale, or `null` if none exists.
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
     * Filter the query to models that have a translation matching a given key and value for a locale.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @param string $key The translation key to match.
     * @param string $value A substring to search for within the translation value.
     * @param string|null $locale The locale to match; defaults to the application's current locale.
     * @return \Illuminate\Database\Eloquent\Builder The modified query builder.
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
     * Eager-load the `translations` relationship limited to the specified locales.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @param array|null $locales Locales to eager-load; when null the current app locale is used.
     * @return \Illuminate\Database\Eloquent\Builder The query builder with the `translations` relation constrained to the provided locales.
     */
    public function scopeWithTranslations($query, array $locales = null)
    {
        $locales = $locales ?? [app()->getLocale()];

        return $query->with(['translations' => function ($q) use ($locales) {
            $q->whereIn('locale', $locales);
        }]);
    }

    /**
     * Determine whether the model has any translations.
     *
     * @return bool `true` if the model has at least one translation, `false` otherwise.
     */
    public function hasTranslations(): bool
    {
        return $this->translations()->exists();
    }

    /**
     * Return the number of translations associated with the model.
     *
     * @return int The count of Translation records for this model.
     */
    public function getTranslationsCountAttribute(): int
    {
        return $this->translations()->count();
    }

    /**
     * Return translations grouped by locale.
     *
     * @return array Associative array where each key is a locale code and each value is an associative array mapping translation keys to their translated values.
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
     * Replace all translations for the given locale with the provided key=>value set.
     *
     * Existing translations for the locale are removed and new translations are created
     * only for keys listed in the model's translatableAttributes.
     *
     * @param array $translations Associative array of translation keys to values.
     * @param string $locale The locale to synchronize translations for (e.g., "en").
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
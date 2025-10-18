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
     * Boot the HasTranslations trait for a model.
     */
    protected static function bootHasTranslations(): void
    {
        // Add any model event listeners here if needed
    }

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
     * Get all translations for a given key.
     */
    public function getTranslations(string $key): array
    {
        return $this->translations
                    ->where('key', $key)
                    ->pluck('value', 'locale')
                    ->toArray();
    }

    /**
     * Set a translation for a given key and locale.
     */
    public function setTranslation(string $key, string $value, string $locale = null): void
    {
        $locale = $locale ?? app()->getLocale();

        // @phpstan-ignore-line
        $this->translations()->updateOrCreate(
            // @phpstan-ignore-line
            ['locale' => $locale, 'key' => $key],
            // @phpstan-ignore-line
            ['value' => $value, 'translatable_id' => $this->id, 'translatable_type' => $this->getMorphClass()]
        );

        // Reload the translations relationship to ensure it's fresh
        $this->load('translations');
    }

    /**
     * Get a translated attribute.
     */
    public function getTranslatedAttribute(string $key, string $locale = null): ?string
    {
        \Log::info('HasTranslations: getTranslatedAttribute called', ['key' => $key, 'locale' => $locale]);
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
        \Log::info('HasTranslations: setTranslatedAttribute called', ['key' => $key, 'value' => $value, 'locale' => $locale]);
        if (! in_array($key, $this->translatableAttributes ?? [])) {
            $this->setAttribute($key, $value); // Set original attribute if not translatable
            return;
        }

        $this->setTranslation($key, $value, $locale);
    }
}

<?php

namespace App\Concerns;

use App\Models\View;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait HasViews
{
    /**
     * Register model event listeners when the trait is booted.
     */
    protected static function bootHasViews(): void
    {
        // Add any model event listeners here if needed
    }

    /**
     * Define a polymorphic one-to-many relationship for the model's views.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany Collection of related View models.
     */
    public function views(): MorphMany
    {
        return $this->morphMany(View::class, 'viewable');
    }

    /**
     * Create and persist a new View record associated with this model.
     *
     * The created View will be associated to the model's morph class and id,
     * and will record request and authentication metadata (locale, IP address,
     * user agent, and authenticated user id).
     *
     * @param string|null $locale The locale to associate with the view; if null, uses the current application locale.
     * @return \App\Models\View The newly created View instance.
     */
    public function recordView(?string $locale = null): View
    {
        $view = new View();
        $view->viewable_type = $this->getMorphClass();
        $view->viewable_id = $this->id;
        $view->locale = $locale ?? app()->getLocale();
        $view->ip_address = request()->ip();
        $view->user_agent = request()->userAgent();
        $view->user_id = auth()->id();
        $view->save();

        return $view;
    }

    /**
     * Retrieve the total number of views recorded for the model.
     *
     * @return int The total count of related View records.
     */
    public function getViewsCountAttribute(): int
    {
        return $this->views()->count();
    }

    /**
     * Count views for the given locale.
     *
     * @param string $locale Locale identifier (e.g., "en", "fr").
     * @return int The number of related views recorded with the specified locale.
     */
    public function getViewsCountByLocale(string $locale): int
    {
        return $this->views()->where('locale', $locale)->count();
    }

    /**
     * Count unique views grouped by IP address.
     *
     * @return int The number of unique views determined by distinct `ip_address` values.
     */
    public function getUniqueViewsCountAttribute(): int
    {
        return $this->views()->distinct('ip_address')->count('ip_address');
    }

    /**
     * Determine whether a view from the given IP address exists for this model.
     *
     * @param string $ip The IP address to check.
     * @return bool `true` if a view from the IP exists, `false` otherwise.
     */
    public function hasBeenViewedByIp(string $ip): bool
    {
        return $this->views()->where('ip_address', $ip)->exists();
    }
}
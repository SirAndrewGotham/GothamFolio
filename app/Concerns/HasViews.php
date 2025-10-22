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
     * Boot the HasViews trait for a model.
     */
    protected static function bootHasViews(): void
    {
        // Add any model event listeners here if needed
    }

    /**
     * Get all the views for the model.
     */
    public function views(): MorphMany
    {
        return $this->morphMany(View::class, 'viewable');
    }

    /**
     * Record a view for this model.
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
     * Get the total views count.
     */
    public function getViewsCountAttribute(): int
    {
        return $this->views()->count();
    }

    /**
     * Get views count for a specific locale.
     */
    public function getViewsCountByLocale(string $locale): int
    {
        return $this->views()->where('locale', $locale)->count();
    }

    /**
     * Get unique views count (by IP address).
     */
    public function getUniqueViewsCountAttribute(): int
    {
        return $this->views()->distinct('ip_address')->count('ip_address');
    }

    /**
     * Check if an IP has already viewed this model.
     */
    public function hasBeenViewedByIp(string $ip): bool
    {
        return $this->views()->where('ip_address', $ip)->exists();
    }
}

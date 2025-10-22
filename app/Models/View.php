<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class View extends Model
{
    use HasFactory;

    protected $fillable = [
        'viewable_type',
        'viewable_id',
        'locale',
        'ip_address',
        'user_agent',
        'user_id'
    ];

    /**
     * Define a polymorphic relation to the model that was viewed.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo The polymorphic relation instance linking this view to its viewable model.
     */
    public function viewable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the user that owns the view.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo The associated User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Count views created within the past specified number of days.
     *
     * @param int $days Number of days to look back from now (default 30).
     * @return int The number of views created in the given time window.
     */
    public function getRecentViewsCount(int $days = 30): int
    {
        return $this->views()
            ->where('created_at', '>=', now()->subDays($days))
            ->count();
    }

    /**
     * Count views that are associated with authenticated users.
     *
     * @return int The number of views with a non-null `user_id`.
     */
    public function getAuthenticatedViewsCount(): int
    {
        return $this->views()->whereNotNull('user_id')->count();
    }
}
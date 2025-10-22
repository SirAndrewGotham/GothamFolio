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

    public function viewable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Get views in the last X days
    public function getRecentViewsCount(int $days = 30): int
    {
        return $this->views()
            ->where('created_at', '>=', now()->subDays($days))
            ->count();
    }

    // Get views by authenticated users
    public function getAuthenticatedViewsCount(): int
    {
        return $this->views()->whereNotNull('user_id')->count();
    }
}

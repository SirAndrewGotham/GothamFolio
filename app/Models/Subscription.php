<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Subscription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'email',
        'categories',
        'is_active',
        'token',
        'email_verified_at',
        'last_notified_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean',
        'categories' => 'array',
        'email_verified_at' => 'datetime',
        'last_notified_at' => 'datetime',
    ];

    /**
     * Relationship with the user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope for active subscriptions.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for verified email subscriptions.
     */
    public function scopeVerified($query)
    {
        return $query->whereNotNull('email_verified_at');
    }

    /**
     * Scope for global subscriptions (no specific categories).
     */
    public function scopeGlobal($query)
    {
        return $query->whereNull('categories')->orWhereJsonLength('categories', 0);
    }

    /**
     * Scope for category-specific subscriptions.
     */
    public function scopeWithCategories($query)
    {
        return $query->whereNotNull('categories')->whereJsonLength('categories', '>', 0);
    }

    /**
     * Scope for subscriptions that should be notified.
     */
    public function scopeShouldBeNotified($query)
    {
        return $query->active()->verified();
    }

    /**
     * Check if subscription is global (all categories).
     */
    public function getIsGlobalAttribute(): bool
    {
        return empty($this->categories);
    }

    /**
     * Check if subscription is for specific categories.
     */
    public function getIsCategorySpecificAttribute(): bool
    {
        return ! empty($this->categories);
    }

    /**
     * Check if email is verified.
     */
    public function getIsVerifiedAttribute(): bool
    {
        return ! is_null($this->email_verified_at);
    }

    /**
     * Get the subscription type.
     */
    public function getTypeAttribute(): string
    {
        return $this->is_global ? 'global' : 'category_specific';
    }

    /**
     * Verify the email address.
     */
    public function verifyEmail(): bool
    {
        return $this->update(['email_verified_at' => now()]);
    }

    /**
     * Unsubscribe.
     */
    public function unsubscribe(): bool
    {
        return $this->update(['is_active' => false]);
    }

    /**
     * Resubscribe.
     */
    public function resubscribe(): bool
    {
        return $this->update(['is_active' => true]);
    }

    /**
     * Update last notified timestamp.
     */
    public function markAsNotified(): bool
    {
        return $this->update(['last_notified_at' => now()]);
    }

    /**
     * Check if subscription includes a specific category.
     */
    public function includesCategory(int $categoryId): bool
    {
        if ($this->is_global) {
            return true;
        }

        return in_array($categoryId, $this->categories ?? []);
    }

    /**
     * Add categories to subscription.
     */
    public function addCategories(array $categoryIds): bool
    {
        $currentCategories = $this->categories ?? [];
        $newCategories = array_unique(array_merge($currentCategories, $categoryIds));

        return $this->update(['categories' => $newCategories]);
    }

    /**
     * Remove categories from subscription.
     */
    public function removeCategories(array $categoryIds): bool
    {
        $currentCategories = $this->categories ?? [];
        $newCategories = array_diff($currentCategories, $categoryIds);

        return $this->update(['categories' => ! empty($newCategories) ? $newCategories : null]);
    }

    /**
     * Generate a new unsubscribe token.
     */
    public function generateToken(): string
    {
        return Str::random(60);
    }

    /**
     * Automatically generate token before creating.
     */
    protected static function booted(): void
    {
        static::creating(function (Subscription $subscription) {
            if (empty($subscription->token)) {
                $subscription->token = $subscription->generateToken();
            }

            // If user_id is provided, use user's email
            if ($subscription->user_id && empty($subscription->email)) {
                $subscription->email = $subscription->user->email;
            }
        });
    }
}

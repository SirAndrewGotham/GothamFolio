<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'last_notified_at'
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
     * Belongs to the user that owns this subscription.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo The user relation.
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
     * Filter the query to subscriptions that are global (have no categories).
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The modified query builder.
     */
    public function scopeGlobal($query)
    {
        return $query->whereNull('categories')->orWhereJsonLength('categories', 0);
    }

    /**
     * Limit the query to subscriptions that are category-specific (have one or more categories).
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The query filtered to subscriptions with a non-empty `categories` array.
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
     * Indicates whether the subscription applies to all categories.
     *
     * @return bool `true` if the categories list is empty (subscription is global), `false` otherwise.
     */
    public function getIsGlobalAttribute(): bool
    {
        return empty($this->categories);
    }

    / **
         * Determines whether the subscription targets one or more specific categories.
         *
         * @return bool `true` if the subscription targets one or more categories, `false` otherwise.
         */
    public function getIsCategorySpecificAttribute(): bool
    {
        return !empty($this->categories);
    }

    /**
         * Indicates whether the subscription's email address has been verified.
         *
         * @return bool `true` if `email_verified_at` is not null, `false` otherwise.
         */
    public function getIsVerifiedAttribute(): bool
    {
        return !is_null($this->email_verified_at);
    }

    /**
     * Return the subscription type identifier.
     *
     * @return string `'global'` if the subscription covers all categories, `'category_specific'` otherwise.
     */
    public function getTypeAttribute(): string
    {
        return $this->is_global ? 'global' : 'category_specific';
    }

    /**
     * Mark the subscription's email as verified by setting its verified timestamp to the current time.
     *
     * @return bool True if the model was successfully updated, false otherwise.
     */
    public function verifyEmail(): bool
    {
        return $this->update(['email_verified_at' => now()]);
    }

    /**
     * Mark the subscription as inactive.
     *
     * @return bool `true` if the subscription was successfully updated, `false` otherwise.
     */
    public function unsubscribe(): bool
    {
        return $this->update(['is_active' => false]);
    }

    /**
     * Reactivates the subscription by setting its active flag to true.
     *
     * @return bool true if the model was successfully updated, false otherwise.
     */
    public function resubscribe(): bool
    {
        return $this->update(['is_active' => true]);
    }

    /**
     * Record the current time as the subscription's last notification timestamp.
     *
     * @return bool `true` if the model was successfully updated, `false` otherwise.
     */
    public function markAsNotified(): bool
    {
        return $this->update(['last_notified_at' => now()]);
    }

    /**
     * Determine whether the subscription applies to the given category.
     *
     * @param int $categoryId The category ID to check.
     * @return bool `true` if the subscription is global or includes the given category ID, `false` otherwise.
     */
    public function includesCategory(int $categoryId): bool
    {
        if ($this->is_global) {
            return true;
        }

        return in_array($categoryId, $this->categories ?? []);
    }

    /**
     * Add one or more category IDs to the subscription's categories, ensuring no duplicates.
     *
     * @param int[] $categoryIds Array of category IDs to add.
     * @return bool `true` if the subscription was updated successfully, `false` otherwise.
     */
    public function addCategories(array $categoryIds): bool
    {
        $currentCategories = $this->categories ?? [];
        $newCategories = array_unique(array_merge($currentCategories, $categoryIds));

        return $this->update(['categories' => $newCategories]);
    }

    /**
     * Remove the given category IDs from the subscription's categories.
     *
     * If the resulting category list is empty, the subscription's `categories` attribute is set to `null`.
     *
     * @param int[] $categoryIds Category IDs to remove.
     * @return bool `true` if the model was successfully updated, `false` otherwise.
     */
    public function removeCategories(array $categoryIds): bool
    {
        $currentCategories = $this->categories ?? [];
        $newCategories = array_diff($currentCategories, $categoryIds);

        return $this->update(['categories' => !empty($newCategories) ? $newCategories : null]);
    }

    /**
     * Create a new 60-character unsubscribe token.
     *
     * @return string A 60-character random string suitable for use as an unsubscribe token.
     */
    public function generateToken(): string
    {
        return Str::random(60);
    }

    /**
     * Register creating event handlers to ensure required fields are populated before a model is persisted.
     *
     * When a Subscription is being created, this will generate and assign a token if one is not present,
     * and will populate the `email` from the related `user` when `user_id` is set and `email` is empty.
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
<?php

namespace App\Policies;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SubscriptionPolicy
{
    /**
         * Determine if the given user is authorized to view any Subscription models.
         *
         * @param \App\Models\User $user The user performing the authorization check.
         * @return bool `true` if the user may view any Subscription models, `false` otherwise.
         */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
         * Determine whether the user can view the given subscription.
         *
         * @param \App\Models\User $user The user attempting to view the subscription.
         * @param \App\Models\Subscription $subscription The subscription to check access for.
         * @return bool `true` if the user is authorized to view the subscription, `false` otherwise.
         */
    public function view(User $user, Subscription $subscription): bool
    {
        return false;
    }

    /**
         * Determine whether the given user can create a Subscription.
         *
         * @param \App\Models\User $user The user attempting to create a subscription.
         * @return bool `true` if the user is allowed to create a Subscription, `false` otherwise.
         */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine if the given user is authorized to update the specified subscription.
     *
     * @param User $user The user performing the action.
     * @param Subscription $subscription The subscription instance to be updated.
     * @return bool `true` if the user may update the subscription, `false` otherwise.
     */
    public function update(User $user, Subscription $subscription): bool
    {
        return false;
    }

    /**
     * Determine whether the given user may delete the specified subscription.
     *
     * @param User $user The user attempting the deletion.
     * @param Subscription $subscription The subscription instance targeted for deletion.
     * @return bool `true` if the user is allowed to delete the subscription, `false` otherwise.
     */
    public function delete(User $user, Subscription $subscription): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the given subscription.
     *
     * @param \App\Models\User $user The user attempting the action.
     * @param \App\Models\Subscription $subscription The subscription to be restored.
     * @return bool `true` if the user is authorized to restore the subscription, `false` otherwise.
     */
    public function restore(User $user, Subscription $subscription): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the given subscription.
     *
     * @param \App\Models\User $user The authenticated user.
     * @param \App\Models\Subscription $subscription The subscription instance to permanently delete.
     * @return bool `true` if the user is authorized to permanently delete the subscription, `false` otherwise.
     */
    public function forceDelete(User $user, Subscription $subscription): bool
    {
        return false;
    }
}
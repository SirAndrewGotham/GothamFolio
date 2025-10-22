<?php

namespace App\Policies;

use App\Models\User;
use App\Models\View;
use Illuminate\Auth\Access\Response;

class ViewPolicy
{
    /**
     * Determine whether the given user is authorized to view any View models.
     *
     * @param User $user The authenticated user.
     * @return bool `true` if the user is authorized to view any View models, `false` otherwise.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
         * Determine whether the user is authorized to view the given View model.
         *
         * @param User $user The user attempting to perform the action.
         * @param View $view The View model instance being accessed.
         * @return bool `true` if the user is authorized to view the model, `false` otherwise.
         */
    public function view(User $user, View $view): bool
    {
        return false;
    }

    /**
     * Determine whether the given user is authorized to create View models.
     *
     * @param \App\Models\User $user The user attempting the action.
     * @return bool `true` if the user is authorized to create a View, `false` otherwise.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user is authorized to update the given View model.
     *
     * @param \App\Models\User $user The acting user.
     * @param \App\Models\View $view The View model instance to be updated.
     * @return bool `true` if the user is authorized to update the View, `false` otherwise.
     */
    public function update(User $user, View $view): bool
    {
        return false;
    }

    /**
     * Determine whether the given user can delete the specified View model.
     *
     * @param User $user The user performing the action.
     * @param View $view The View model instance to be deleted.
     * @return bool `true` if the user is allowed to delete the View, `false` otherwise.
     */
    public function delete(User $user, View $view): bool
    {
        return false;
    }

    /**
     * Determine whether the given user may restore the specified View model.
     *
     * @param \App\Models\User $user The user attempting the action.
     * @param \App\Models\View $view The View model instance to be restored.
     * @return bool `true` if the user may restore the View, `false` otherwise.
     */
    public function restore(User $user, View $view): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, View $view): bool
    {
        return false;
    }
}
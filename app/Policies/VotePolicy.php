<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Auth\Access\Response;

class VotePolicy
{
    /**
     * Determine whether the given user may view any Vote models.
     *
     * @param \App\Models\User $user The user performing the authorization check.
     * @return bool `true` if the user is allowed to view any Vote models, `false` otherwise.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine if a user is authorized to view a specific Vote.
     *
     * @param \App\Models\User $user The user performing the action.
     * @param \App\Models\Vote $vote The Vote model being viewed.
     * @return bool `true` if the user may view the vote, `false` otherwise.
     */
    public function view(User $user, Vote $vote): bool
    {
        return false;
    }

    /**
     * Determine whether the given user may create a Vote.
     *
     * @param \App\Models\User $user The user performing the action.
     * @return bool `true` if the user is allowed to create a Vote, `false` otherwise.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the given user is authorized to update the specified vote.
     *
     * @param User $user The user attempting the update.
     * @param Vote $vote The vote instance to be updated.
     * @return bool `true` if the user may update the vote, `false` otherwise.
     */
    public function update(User $user, Vote $vote): bool
    {
        return false;
    }

    /**
     * Determine whether the user is allowed to delete the given vote.
     *
     * @param \App\Models\User $user The user attempting the action.
     * @param \App\Models\Vote $vote The vote instance targeted for deletion.
     * @return bool `true` if the user is allowed to delete the given vote, `false` otherwise.
     */
    public function delete(User $user, Vote $vote): bool
    {
        return false;
    }

    /**
     * Determine whether the given user can restore the specified vote.
     *
     * @param \App\Models\User $user The user attempting the restore.
     * @param \App\Models\Vote $vote The vote instance to be restored.
     * @return bool `true` if the user is allowed to restore the vote, `false` otherwise.
     */
    public function restore(User $user, Vote $vote): bool
    {
        return false;
    }

    /**
     * Determine whether the user may permanently delete the given vote.
     *
     * @param User $user The user performing the action.
     * @param Vote $vote The vote instance to be permanently deleted.
     * @return bool `true` if the user may permanently delete the given vote, `false` otherwise.
     */
    public function forceDelete(User $user, Vote $vote): bool
    {
        return false;
    }
}
<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    /**
     * Determine whether the given user is allowed to view any Comment models.
     *
     * @param \App\Models\User $user The user attempting the action.
     * @return bool `true` if the user is allowed to view any comments, `false` otherwise.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine if the given user is authorized to view the specified comment.
     *
     * @param \App\Models\User $user The user performing the action.
     * @param \App\Models\Comment $comment The comment to be viewed.
     * @return bool `true` if the user is allowed to view the comment, `false` otherwise.
     */
    public function view(User $user, Comment $comment): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create a Comment.
     *
     * @param \App\Models\User $user The user attempting to create the comment.
     * @return bool `true` if the user may create a Comment, `false` otherwise.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine if the given user is allowed to update the specified comment.
     *
     * @param \App\Models\User $user The user performing the action.
     * @param \App\Models\Comment $comment The comment to be updated.
     * @return bool `true` if the user is authorized to update the comment, `false` otherwise.
     */
    public function update(User $user, Comment $comment): bool
    {
        return false;
    }

    /**
     * Determine whether the given user may delete the specified comment.
     *
     * @param \App\Models\User $user The user attempting the deletion.
     * @param \App\Models\Comment $comment The comment to be deleted.
     * @return bool `true` if the user is authorized to delete the comment, `false` otherwise.
     */
    public function delete(User $user, Comment $comment): bool
    {
        return false;
    }

    /**
     * Determine whether the given user may restore the specified comment.
     *
     * @param \App\Models\User $user The user performing the action.
     * @param \App\Models\Comment $comment The comment to be restored.
     * @return bool `true` if the user is allowed to restore the comment, `false` otherwise.
     */
    public function restore(User $user, Comment $comment): bool
    {
        return false;
    }

    /**
     * Determine whether the given user is allowed to permanently delete the specified comment.
     *
     * @param \App\Models\User $user The user attempting the action.
     * @param \App\Models\Comment $comment The comment to be permanently deleted.
     * @return bool `true` if the user may permanently delete the comment, `false` otherwise.
     */
    public function forceDelete(User $user, Comment $comment): bool
    {
        return false;
    }
}
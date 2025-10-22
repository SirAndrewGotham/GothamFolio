<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
         * Determine whether the given user may view any Post models.
         *
         * @param User $user The user performing the authorization check.
         * @return bool `true` if the user may view any posts, `false` otherwise.
         */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the given post.
     *
     * @return bool `true` if the user may view the given Post, `false` otherwise.
     */
    public function view(User $user, Post $post): bool
    {
        return false;
    }

    /**
         * Determine whether the user can create a Post.
         *
         * @param \App\Models\User $user The user attempting to create the post.
         * @return bool `true` if the user may create a Post, `false` otherwise.
         */
    public function create(User $user): bool
    {
        return false;
    }

    /**
         * Determine whether the user may update the given post.
         *
         * @param \App\Models\User $user The user attempting the action.
         * @param \App\Models\Post $post The post to be updated.
         * @return bool `true` if the user is authorized to update the post, `false` otherwise.
         */
    public function update(User $user, Post $post): bool
    {
        return false;
    }

    /**
         * Determine whether the given user is authorized to delete the specified post.
         *
         * @param \App\Models\User $user The user performing the action.
         * @param \App\Models\Post $post The post to be deleted.
         * @return bool `true` if the user can delete the post, `false` otherwise.
         */
    public function delete(User $user, Post $post): bool
    {
        return false;
    }

    /**
         * Determine whether the given user can restore the given Post.
         *
         * @param \App\Models\User $user The user attempting to restore the post.
         * @param \App\Models\Post $post The post instance to be restored.
         * @return bool `true` if the user can restore the given Post, `false` otherwise.
         */
    public function restore(User $user, Post $post): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the specified post.
     *
     * @return bool `true` if the user may permanently delete the post, `false` otherwise.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        return false;
    }
}
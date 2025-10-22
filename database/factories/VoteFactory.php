<?php

namespace Database\Factories;

use App\Models\Vote;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    protected $model = Vote::class;

    /**
     * Define the default attribute set for a Vote model instance.
     *
     * Chooses a votable (Post 70% / Comment 30%), ensures a votable and a user exist
     * (selecting random existing records or creating new ones), and picks a vote
     * type of 'upvote' or 'downvote'.
     *
     * @return array{
     *     votable_type: class-string,
     *     votable_id: int,
     *     user_id: int,
     *     type: 'upvote'|'downvote'
     * } Associative array of attributes to use when creating a Vote.
     */
    public function definition(): array
    {
        // 70% for posts, 30% for comments
        $votableType = $this->faker->boolean(70) ? Post::class : Comment::class;

        if ($votableType === Post::class) {
            $votable = Post::inRandomOrder()->first() ?? Post::factory()->create();
        } else {
            $votable = Comment::inRandomOrder()->first() ?? Comment::factory()->create();
        }

        $user = User::inRandomOrder()->first() ?? User::factory()->create();

        return [
            'votable_type' => $votableType,
            'votable_id' => $votable->id,
            'user_id' => $user->id,
            'type' => $this->faker->randomElement(['upvote', 'downvote']),
        ];
    }

    /**
     * Configure the factory to create a vote with the `type` set to "upvote".
     *
     * @return static The factory instance with the `type` attribute set to "upvote".
     */
    public function upvote(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'upvote',
        ]);
    }

    /**
     * Configure the factory to produce a vote with type 'downvote'.
     *
     * @return static The factory instance configured to create a downvote.
     */
    public function downvote(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'downvote',
        ]);
    }

    /**
     * Set the factory state to attach the generated vote to the given Post.
     *
     * @param Post $post The Post to attach the vote to.
     * @return static The factory instance configured to create votes for the given Post.
     */
    public function forPost(Post $post): static
    {
        return $this->state(fn (array $attributes) => [
            'votable_type' => Post::class,
            'votable_id' => $post->id,
        ]);
    }

    /**
     * Configure the factory to attach the created Vote to the given Comment.
     *
     * @param Comment $comment The Comment instance to attach the vote to.
     * @return static The factory configured to create a Vote for the provided Comment.
     */
    public function forComment(Comment $comment): static
    {
        return $this->state(fn (array $attributes) => [
            'votable_type' => Comment::class,
            'votable_id' => $comment->id,
        ]);
    }

    /**
     * Set the factory state to attach the generated vote to a specific user.
     *
     * @param User $user The user whose id will be used for the vote's `user_id`.
     * @return static A factory instance configured to set `user_id` to the given user's id.
     */
    public function fromUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $user->id,
        ]);
    }

    /**
     * Set the model's `created_at` and `updated_at` to a datetime between one week ago and now.
     *
     * @return static The factory instance with `created_at` and `updated_at` set to a datetime between 1 week ago and now.
     */
    public function recent(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
        ]);
    }

    /**
     * Set the factory's `created_at` and `updated_at` to a datetime between 1 year ago and 2 months ago.
     *
     * @return static The factory instance with `created_at` and `updated_at` set to an older datetime.
     */
    public function old(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-2 months'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', '-2 months'),
        ]);
    }
}
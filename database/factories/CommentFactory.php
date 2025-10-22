<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    /**
     * Provide default attributes for creating a Comment model instance.
     *
     * The generated array is suitable for Comment::factory()->create() and includes default
     * values for 'post_id' (null — should be provided explicitly), 'parent_id' (null),
     * 'name', 'email', 'content', 'is_approved' (boolean), and 'user_id' (int|null).
     *
     * @return array<string,mixed> Attribute values for a Comment model.
     */
    public function definition(): array
    {
        $isAuthenticated = $this->faker->boolean(30);

        if ($isAuthenticated) {
            $user = User::inRandomOrder()->first() ?? User::factory()->create();
            $name = $user->name;
            $email = $user->email;
            $userId = $user->id;
        } else {
            $name = $this->faker->name();
            $email = $this->faker->safeEmail();
            $userId = null;
        }

        return [
            'post_id' => null, // Post ID should always be explicitly provided
            'parent_id' => null, // Top-level by default
            'name' => $name,
            'email' => $email,
            'content' => $this->faker->paragraphs(rand(1, 3), true),
            'is_approved' => $this->faker->boolean(80),
            'user_id' => $userId,
        ];
    }

    /**
     * Configure the factory to produce comments with `is_approved` set to true.
     *
     * @return static A factory instance that will create comments where `is_approved` is `true`.
     */
    public function approved(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_approved' => true,
        ]);
    }

    /**
     * Configure the factory to produce unapproved comments.
     *
     * @return static The factory configured with `is_approved` set to `false`.
     */
    public function pending(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_approved' => false,
        ]);
    }

    /**
     * Configure the factory to create comments authored by the given user.
     *
     * @param User $user The user whose id, name, and email will be applied to generated comments.
     * @return static The factory instance with `user_id`, `name`, and `email` set from the provided user.
     */
    public function fromUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    /**
     * Configure the factory to create a comment that is a reply to the given parent comment.
     *
     * @param Comment $parent The parent comment whose `post_id` and `id` will be used for the reply.
     * @return static A factory instance configured with `post_id` set to the parent's `post_id` and `parent_id` set to the parent's `id`.
     */
    public function replyTo(Comment $parent): static
    {
        return $this->state(fn (array $attributes) => [
            'post_id' => $parent->post_id,
            'parent_id' => $parent->id,
        ]);
    }

    /**
     * Configure the factory to create reply comments after a comment is created.
     *
     * @param int $count Number of reply comments to create for each created comment.
     * @return static The factory instance configured with an after-creation callback that generates the replies.
     */
    public function withReplies(int $count = 2): static
    {
        return $this->afterCreating(function (Comment $comment) use ($count) {
            Comment::factory()
                ->count($count)
                ->replyTo($comment)
                ->create();
        });
    }
}
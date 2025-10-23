<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

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
            'post_id' => Post::factory(), // Post ID should always be explicitly provided
            'parent_id' => null, // Top-level by default
            'name' => $name,
            'email' => $email,
            'content' => $this->faker->paragraphs(rand(1, 3), true),
            'is_approved' => $this->faker->boolean(80),
            'user_id' => $userId,
        ];
    }

    public function approved(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_approved' => true,
        ]);
    }

    public function pending(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_approved' => false,
        ]);
    }

    public function fromUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    public function replyTo(Comment $parent): static
    {
        return $this->state(fn (array $attributes) => [
            'post_id' => $parent->post_id,
            'parent_id' => $parent->id,
        ]);
    }

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

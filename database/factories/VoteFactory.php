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

    public function upvote(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'upvote',
        ]);
    }

    public function downvote(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'downvote',
        ]);
    }

    public function forPost(Post $post): static
    {
        return $this->state(fn (array $attributes) => [
            'votable_type' => Post::class,
            'votable_id' => $post->id,
        ]);
    }

    public function forComment(Comment $comment): static
    {
        return $this->state(fn (array $attributes) => [
            'votable_type' => Comment::class,
            'votable_id' => $comment->id,
        ]);
    }

    public function fromUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $user->id,
        ]);
    }

    public function recent(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
        ]);
    }

    public function old(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-2 months'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', '-2 months'),
        ]);
    }
}

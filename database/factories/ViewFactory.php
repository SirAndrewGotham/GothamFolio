<?php

namespace Database\Factories;

use App\Models\View;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViewFactory extends Factory
{
    protected $model = View::class;

    public function definition(): array
    {
        $post = Post::inRandomOrder()->first() ?? Post::factory()->create();

        $isAuthenticated = $this->faker->boolean(30);
        $user = $isAuthenticated ? (User::inRandomOrder()->first() ?? User::factory()->create()) : null;

        $locales = ['en', 'ru', 'eo'];

        return [
            'viewable_type' => Post::class,
            'viewable_id' => $post->id,
            'locale' => $this->faker->randomElement($locales),
            'ip_address' => $this->faker->ipv4(),
            'user_agent' => $this->faker->userAgent(),
            'user_id' => $user?->id,
        ];
    }

    public function forPost(Post $post): static
    {
        return $this->state(fn (array $attributes) => [
            'viewable_type' => Post::class,
            'viewable_id' => $post->id,
        ]);
    }

    public function fromUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $user->id,
            'ip_address' => $this->faker->ipv4(), // Still track IP for analytics
        ]);
    }

    public function fromGuest(): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => null,
        ]);
    }

    public function withLocale(string $locale): static
    {
        return $this->state(fn (array $attributes) => [
            'locale' => $locale,
        ]);
    }

    public function recent(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
        ]);
    }

    public function old(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-6 months', '-1 month'),
        ]);
    }

    public function veryOld(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-2 years', '-7 months'),
        ]);
    }
}

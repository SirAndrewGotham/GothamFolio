<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubscriptionFactory extends Factory
{
    protected $model = Subscription::class;

    public function definition(): SubscriptionFactory
    {
        $isUserSubscription = $this->faker->boolean(40);

        if ($isUserSubscription) {
            $user = User::inRandomOrder()->first() ?? User::factory()->create();
            $email = $user->email;
            $userId = $user->id;
        } else {
            $email = $this->faker->unique()->safeEmail(); // Ensure unique email for guest subscriptions
            $userId = null;
        }

        // 60% global, 40% category-specific
        $isGlobal = $this->faker->boolean(60);

        return $this->state(fn (array $attributes) => [
            'user_id' => $userId,
            'email' => $email,
            'categories' => $isGlobal ? null : $this->getRandomCategoryIds(),
            'is_active' => $this->faker->boolean(90),
            'token' => Str::random(60),
            'email_verified_at' => $this->faker->optional(80)->dateTime(),
            'last_notified_at' => $this->faker->optional(50)->dateTimeBetween('-1 month', 'now'),
        ]);
    }

    protected function getRandomCategoryIds(): array
    {
        $categories = Category::inRandomOrder()->limit(rand(1, 3))->get();

        return $categories->pluck('id')->toArray();
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => true,
        ]);
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }

    public function verified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => now(),
        ]);
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function global(): static
    {
        return $this->state(fn (array $attributes) => [
            'categories' => null,
        ]);
    }

    public function categorySpecific(): static
    {
        return $this->state(fn (array $attributes) => [
            'categories' => $this->getRandomCategoryIds(),
        ]);
    }

    public function fromUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $user->id,
            'email' => $user->email,
        ]);
    }

    public function forCategories(array $categoryIds): static
    {
        return $this->state(fn (array $attributes) => [
            'categories' => $categoryIds,
        ]);
    }

    public function recentlyNotified(): static
    {
        return $this->state(fn (array $attributes) => [
            'last_notified_at' => now()->subDays(rand(1, 7)),
        ]);
    }

    public function neverNotified(): static
    {
        return $this->state(fn (array $attributes) => [
            'last_notified_at' => null,
        ]);
    }
}

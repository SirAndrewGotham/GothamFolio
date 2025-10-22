<?php

namespace Database\Factories;

use App\Models\Subscription;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubscriptionFactory extends Factory
{
    protected $model = Subscription::class;

    /**
     * Generate default attribute values for a Subscription model factory.
     *
     * The returned array contains realistic, randomized values suitable for creating
     * Subscription records for tests: it may represent a subscription tied to an
     * existing user or a guest email, and may be global (no categories) or scoped to
     * 1–3 random category IDs.
     *
     * @return array{
     *     user_id:int|null,
     *     email:string,
     *     categories:null|int[],
     *     is_active:bool,
     *     token:string,
     *     email_verified_at:\DateTimeInterface|null,
     *     last_notified_at:\DateTimeInterface|null
     * }
     */
    public function definition(): array
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

        return [
            'user_id' => $userId,
            'email' => $email,
            'categories' => $isGlobal ? null : $this->getRandomCategoryIds(),
            'is_active' => $this->faker->boolean(90),
            'token' => Str::random(60),
            'email_verified_at' => $this->faker->optional(80)->dateTime(),
            'last_notified_at' => $this->faker->optional(50)->dateTimeBetween('-1 month', 'now'),
        ];
    }

    /**
     * Select between 1 and 3 random category IDs from the database.
     *
     * May return an empty array if no Category records exist.
     *
     * @return int[] Array of Category IDs.
     */
    protected function getRandomCategoryIds(): array
    {
        $categories = Category::inRandomOrder()->limit(rand(1, 3))->get();
        return $categories->pluck('id')->toArray();
    }

    /**
     * Set the generated subscription to the active state.
     *
     * @return static The factory instance configured with `is_active` set to `true`.
     */
    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => true,
        ]);
    }

    /**
     * Configure the factory to produce inactive subscriptions.
     *
     * @return static Factory instance configured with `is_active` set to `false`.
     */
    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }

    /**
     * Configure the factory to produce a subscription with a verified email.
     *
     * @return static The factory instance configured to set `email_verified_at` to the current time.
     */
    public function verified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => now(),
        ]);
    }

    /**
     * Configure the factory to produce subscriptions with no email verification timestamp.
     *
     * @return static The factory instance with `email_verified_at` set to null.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     * Configure the factory to produce a global subscription with no category restrictions.
     *
     * @return static The factory state that sets `categories` to null.
     */
    public function global(): static
    {
        return $this->state(fn (array $attributes) => [
            'categories' => null,
        ]);
    }

    /**
     * Configure the factory to create a category-specific subscription.
     *
     * @return static The factory instance with `categories` set to an array of 1–3 random category IDs.
     */
    public function categorySpecific(): static
    {
        return $this->state(fn (array $attributes) => [
            'categories' => $this->getRandomCategoryIds(),
        ]);
    }

    /**
     * Configure the factory to create a subscription belonging to the given user.
     *
     * @param User $user The user whose `id` and `email` will be applied to the subscription.
     * @return static The factory instance with `user_id` and `email` set from the provided user.
     */
    public function fromUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $user->id,
            'email' => $user->email,
        ]);
    }

    /**
     * Restricts the generated subscription to the provided category IDs.
     *
     * @param int[] $categoryIds The category IDs to assign to the subscription.
     * @return static The factory configured to set `categories` to the given IDs.
     */
    public function forCategories(array $categoryIds): static
    {
        return $this->state(fn (array $attributes) => [
            'categories' => $categoryIds,
        ]);
    }

    /**
     * Set the factory state so `last_notified_at` is a timestamp between 1 and 7 days ago.
     *
     * @return static The factory instance with `last_notified_at` set to a time between 1 and 7 days ago.
     */
    public function recentlyNotified(): static
    {
        return $this->state(fn (array $attributes) => [
            'last_notified_at' => now()->subDays(rand(1, 7)),
        ]);
    }

    /**
     * Mark the generated subscription as never notified.
     *
     * @return static The factory instance with `last_notified_at` set to null.
     */
    public function neverNotified(): static
    {
        return $this->state(fn (array $attributes) => [
            'last_notified_at' => null,
        ]);
    }
}
<?php

namespace Database\Seeders;

use App\Models\Subscription;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubscriptionSeeder extends Seeder
{
    /**
     * Seed the database with a variety of Subscription records for users and guests.
     *
     * Creates verified and active subscriptions for a subset of up to 10 existing users (creates 5 users if none exist),
     * ensures categories exist (creates 3 if none exist) and then seeds:
     * - user-associated subscriptions (approximately half of selected users, if not already subscribed),
     * - 15 guest subscriptions (email-only),
     * - 5 inactive guest subscriptions,
     * - 3 unverified guest subscriptions.
     *
     * The subscription scope may be global or category-specific (randomly chosen). Outputs summary information
     * (total, active, verified, global, and category-specific counts) via the seeder command output.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get some users for authenticated subscriptions
        $users = User::limit(10)->get();

        if ($users->isEmpty()) {
            $this->command->warn('No users found. Creating some users first...');
            $users = User::factory()->count(5)->create();
        }

        // Get categories for category-specific subscriptions
        $categories = Category::all();

        if ($categories->isEmpty()) {
            $this->command->warn('No categories found. Creating some categories first...');
            $categories = Category::factory()->count(3)->create();
        }

        // Create subscriptions from real users
        foreach ($users as $user) {
            // Each user has 50% chance of having a subscription and does not have an existing subscription
            if (rand(0, 1) && !Subscription::where('user_id', $user->id)->exists()) {
                Subscription::factory()
                    ->fromUser($user)
                    ->verified()
                    ->active()
                    ->create([
                        'categories' => $this->getRandomSubscriptionType($categories),
                    ]);
            }
        }

        // Create guest subscriptions (no user account)
        for ($i = 0; $i < 15; $i++) {
            $email = $faker->unique()->safeEmail();
            Subscription::factory()
                ->create([
                    'email' => $email,
                    'categories' => $this->getRandomSubscriptionType($categories),
                ]);
        }

        // Create some inactive subscriptions
        for ($i = 0; $i < 5; $i++) {
            $email = $faker->unique()->safeEmail();
            Subscription::factory()
                ->inactive()
                ->create([
                    'email' => $email,
                    'categories' => $this->getRandomSubscriptionType($categories),
                ]);
        }

        // Create some unverified subscriptions
        for ($i = 0; $i < 3; $i++) {
            $email = $faker->unique()->safeEmail();
            Subscription::factory()
                ->unverified()
                ->create([
                    'email' => $email,
                    'categories' => $this->getRandomSubscriptionType($categories),
                ]);
        }

        $this->command->info('Subscriptions seeded successfully!');
        $this->command->info('Total subscriptions: ' . Subscription::count());
        $this->command->info('Active subscriptions: ' . Subscription::active()->count());
        $this->command->info('Verified subscriptions: ' . Subscription::verified()->count());
        $this->command->info('Global subscriptions: ' . Subscription::global()->count());
        $this->command->info('Category-specific subscriptions: ' . Subscription::withCategories()->count());
    }

    /**
     * Selects whether a subscription is global or category-specific and returns the corresponding category IDs.
     *
     * @param \Illuminate\Support\Collection $categories Collection of Category models to choose from.
     * @return int[]|null An array of 1–3 category IDs when category-specific, or `null` for a global subscription.
     */
    protected function getRandomSubscriptionType($categories): ?array
    {
        // 60% global, 40% category-specific
        if (rand(1, 100) <= 60) {
            return null; // Global subscription
        }

        // Return 1-3 random category IDs
        return $categories->random(rand(1, 3))->pluck('id')->toArray();
    }
}
<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subscription;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
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
            if (rand(0, 1) && ! Subscription::where('user_id', $user->id)->exists()) {
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
        $this->command->info('Total subscriptions: '.Subscription::count());
        $this->command->info('Active subscriptions: '.Subscription::active()->count());
        $this->command->info('Verified subscriptions: '.Subscription::verified()->count());
        $this->command->info('Global subscriptions: '.Subscription::global()->count());
        $this->command->info('Category-specific subscriptions: '.Subscription::withCategories()->count());

        $this->command->info('Subscriptions seeded successfully!');
    }

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

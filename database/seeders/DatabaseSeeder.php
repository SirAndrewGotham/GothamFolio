<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with initial test data.
     *
     * Creates a single test User with name "Test User" and email "test@example.com",
     * then runs the LanguageSeeder, UserSeeder, PostSeeder, CommentSeeder,
     * SubscriptionSeeder, VoteSeeder, and ViewSeeder in sequence.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            LanguageSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            SubscriptionSeeder::class,
            VoteSeeder::class,
            ViewSeeder::class,
        ]);
    }
}
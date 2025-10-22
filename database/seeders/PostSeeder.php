<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::factory()->count(5)->create();
        $tags = Tag::factory()->count(10)->create();

        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin User', 'password' => bcrypt('password')]
        );

        // Create posts first
        $posts = Post::factory()
            ->count(20)
            ->create(['user_id' => $admin->id]);

        // Then add relationships
        foreach ($posts as $post) {
            $post->categories()->attach($categories->random(rand(1, 3))->pluck('id'));
            $post->tags()->attach($tags->random(rand(2, 5))->pluck('id'));
        }

        $this->command->info('Posts seeded successfully!');
    }
}

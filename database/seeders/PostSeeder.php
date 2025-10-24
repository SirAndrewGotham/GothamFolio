<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Language;
use Illuminate\Database\Seeder;

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

        // Get all available languages
        $languages = Language::all();

        // Create original posts with translations
        $posts = collect();

        // Create 5 original posts (each gets unique post_id via model boot)
        for ($i = 0; $i < 5; $i++) {
            $originalPost = Post::factory()->create([
                'user_id' => $admin->id,
                'language_id' => $languages->random()->id,
            ]);
            $posts->push($originalPost);

            // Create translations for this post in other languages
            $otherLanguages = $languages->where('id', '!=', $originalPost->language_id);
            foreach ($otherLanguages as $language) {
                $translation = Post::factory()->create([
                    'user_id' => $admin->id,
                    'post_id' => $originalPost->post_id, // Use same post_id as original
                    'language_id' => $language->id,
                    'title' => $originalPost->title . " [{$language->code}]",
                ]);
                $posts->push($translation);
            }
        }

        // Create additional standalone posts (no translations)
        $standalonePosts = Post::factory()
            ->count(10)
            ->create(['user_id' => $admin->id]);

        $posts = $posts->merge($standalonePosts);

        // Then add relationships to all posts
        foreach ($posts as $post) {
            $post->categories()->attach($categories->random(rand(1, 3))->pluck('id'));
            $post->tags()->attach($tags->random(rand(2, 5))->pluck('id'));
        }

        $this->command->info('Posts seeded successfully!');
    }
}

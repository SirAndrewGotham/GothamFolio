<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Language;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Get admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin User', 'password' => bcrypt('password')]
        );

        // Read posts from JSON file
        $postsData = json_decode(File::get(base_path('database/seeders/data/posts.json')), true);
        $posts = $postsData['posts'];

        foreach ($posts as $postData) {
            $post = Post::create([
                'title' => $postData['title'],
                'slug' => $postData['slug'],
                'excerpt' => $postData['excerpt'],
                'content' => $postData['content'],
                'featured_image' => $postData['featured_image'],
                'published_at' => $postData['published_at']
                    ? Carbon::parse($postData['published_at'])
                    : null,
                'is_published' => $postData['is_published'],
                'is_featured' => $postData['is_featured'],
                'read_time' => $postData['read_time'],
                'user_id' => $admin->id,
                'post_id' => $postData['post_id'],
                'language_id' => $postData['language_id'],
                'meta_title' => $postData['meta_title'],
                'meta_description' => $postData['meta_description'],
                'meta_keywords' => $postData['meta_keywords'],
                'created_at' => $postData['created_at']
                    ? Carbon::parse($postData['created_at'])
                    : null,
                'updated_at' => $postData['updated_at']
                    ? Carbon::parse($postData['updated_at'])
                    : null
            ]);

            // Attach categories
            foreach ($postData['categories'] as $categorySlug) {
                $category = Category::firstOrCreate(
                    ['slug' => $categorySlug],
                    [
                        'name' => ucfirst(str_replace('-', ' ', $categorySlug)),
                        'description' => 'Articles about ' . str_replace('-', ' ', $categorySlug),
                        'is_active' => true,
                        'is_featured' => $categorySlug === 'web-development'
                    ]
                );
                $post->categories()->syncWithoutDetaching($category->id);
            }

            // Attach tags
            foreach ($postData['tags'] as $tagSlug) {
                $tag = Tag::firstOrCreate(
                    ['slug' => $tagSlug],
                    ['name' => ucfirst(str_replace('-', ' ', $tagSlug))]
                );
                $post->tags()->syncWithoutDetaching($tag->id);
            }
        }

        $this->command->info('Posts seeded successfully from JSON file!');
        $this->command->info('Total posts created: ' . count($posts));
    }
}

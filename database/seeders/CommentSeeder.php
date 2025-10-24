<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        // Get published posts that allow comments
        $posts = Post::published()->where('allow_comments', true)->get();

        if ($posts->isEmpty()) {
            $this->command->warn('No published posts with comments enabled found. Creating some posts first...');
            $posts = Post::factory()->count(5)->published()->withComments()->create();
        }

        // Get some users for authenticated comments
        $users = User::take(5)->get();
        if ($users->isEmpty()) {
            $users = User::factory()->count(3)->create();
        }

        // Create comments only for posts that allow them
        foreach ($posts as $post) {
            // Create 3-8 top-level comments per post
            $topLevelCount = rand(3, 8);

            $topLevelComments = Comment::factory()
                ->count($topLevelCount)
                ->create([
                    'post_id' => $post->id,
                    'parent_id' => null,
                ]);

            // For each top-level comment, create 0-3 replies
            foreach ($topLevelComments as $comment) {
                $replyCount = rand(0, 3);

                if ($replyCount > 0) {
                    Comment::factory()
                        ->count($replyCount)
                        ->replyTo($comment)
                        ->create([
                            'post_id' => $post->id,
                        ]);
                }
            }

            // Create some authenticated comments (from real users)
            $authenticatedCount = rand(1, 3);
            foreach ($users->random($authenticatedCount) as $user) {
                Comment::factory()
                    ->fromUser($user)
                    ->approved()
                    ->create([
                        'post_id' => $post->id,
                        'parent_id' => null,
                    ]);
            }

            // Create anonymous comments only if the post allows them
            if ($post->allow_anonymous_comments) {
                $anonymousCount = rand(1, 3);
                Comment::factory()
                    ->count($anonymousCount)
                    ->pending() // Anonymous comments start as pending
                    ->create([
                        'post_id' => $post->id,
                        'parent_id' => null,
                        'user_id' => null, // Ensure they're anonymous
                    ]);
            }
        }

        // Create some pending comments for moderation (only for posts that allow anonymous comments)
        $postsWithAnonymous = $posts->where('allow_anonymous_comments', true);
        if ($postsWithAnonymous->isNotEmpty()) {
            Comment::factory()
                ->count(5)
                ->pending()
                ->create(['post_id' => $postsWithAnonymous->random()->id]);
        }

        $this->command->info('Comments seeded successfully!');
    }
}

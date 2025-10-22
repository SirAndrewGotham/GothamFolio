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
        // Get published posts
        $posts = Post::published()->get();

        if ($posts->isEmpty()) {
            $this->command->warn('No published posts found. Creating some posts first...');
            $posts = Post::factory()->count(5)->published()->create();
        }

        // Get some users for authenticated comments
        $users = User::limit(5)->get();

        if ($users->isEmpty()) {
            $this->command->warn('No users found. Creating some users first...');
            $users = User::factory()->count(3)->create();
        }

        // Create top-level comments for each post
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
        }

        // Create some nested replies (replies to replies)
        $replies = Comment::whereNotNull('parent_id')->get();
        foreach ($replies->random(5) as $reply) {
            Comment::factory()
                ->count(rand(1, 2))
                ->replyTo($reply)
                ->create([
                    'post_id' => $reply->post_id,
                ]);
        }

        // Create some pending comments for moderation
        Comment::factory()
            ->count(5)
            ->pending()
            ->create(['post_id' => $posts->random()->id]);

        $this->command->info('Comments seeded successfully with nested structure!');
        $this->command->info('Total comments: ' . Comment::count());
        $this->command->info('Top-level comments: ' . Comment::topLevel()->count());
        $this->command->info('Replies: ' . Comment::isReply()->count());
        $this->command->info('Approved: ' . Comment::approved()->count());
        $this->command->info('Pending: ' . Comment::pending()->count());
    }
}

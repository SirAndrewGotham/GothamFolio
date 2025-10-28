<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Vote;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class VoteSeeder extends Seeder
{
    protected $faker;

    public function run(): void
    {
        $this->faker = Faker::create();

        // Get some content to vote on
        $posts = Post::published()->limit(20)->get();
        $comments = Comment::approved()->limit(30)->get();

        if ($posts->isEmpty()) {
            $this->command->warn('No published posts found. Creating some posts first...');
            $posts = Post::factory()->count(10)->published()->create();
        }

        if ($comments->isEmpty()) {
            $this->command->warn('No approved comments found. Creating some comments first...');
            $comments = Comment::factory()->count(15)->approved()->create();
        }

        // Get users to vote
        $users = User::limit(15)->get();

        if ($users->isEmpty()) {
            $this->command->warn('No users found. Creating some users first...');
            $users = User::factory()->count(8)->create();
        }

        // Create votes for posts
        foreach ($posts as $post) {
            $voterCount = rand(5, min(15, $users->count()));
            $voters = $users->random($voterCount);

            foreach ($voters as $user) {
                Vote::factory()
                    ->forPost($post)
                    ->fromUser($user)
                    ->create([
                        'type' => $this->getVoteTypeWithBias(), // More upvotes than downvotes
                    ]);
            }
        }

        // Create votes for comments
        foreach ($comments as $comment) {
            $voterCount = rand(2, min(8, $users->count()));
            $voters = $users->random($voterCount);

            foreach ($voters as $user) {
                Vote::factory()
                    ->forComment($comment)
                    ->fromUser($user)
                    ->create([
                        'type' => $this->getVoteTypeWithBias(),
                    ]);
            }
        }

        // Create some recent votes
        $maxRetries = 100; // Prevent infinite loops
        for ($i = 0; $i < 20; $i++) {
            $retries = 0;
            do {
                $votableType = rand(0, 1) === 0 ? Post::class : Comment::class;
                if ($votableType === Post::class) {
                    $votable = $posts->random();
                } else {
                    $votable = $comments->random();
                }
                $user = $users->random();

                $exists = Vote::where('votable_type', $votableType)
                    ->where('votable_id', $votable->id)
                    ->where('user_id', $user->id)
                    ->exists();

                $retries++;
            } while ($exists && $retries < $maxRetries);

            if (! $exists) {
                Vote::factory()
                    ->create([
                        'votable_type' => $votableType,
                        'votable_id' => $votable->id,
                        'user_id' => $user->id,
                        'type' => $this->getVoteTypeWithBias(),
                        'created_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
                        'updated_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
                    ]);
            } else {
                $this->command->warn('Could not create a unique recent vote after max retries.');
            }
        }

        $this->command->info('Votes seeded successfully!');
        $this->command->info('Total votes: '.Vote::count());
        $this->command->info('Post votes: '.Vote::where('votable_type', Post::class)->count());
        $this->command->info('Comment votes: '.Vote::where('votable_type', Comment::class)->count());
        $this->command->info('Upvotes: '.Vote::where('type', 'upvote')->count());
        $this->command->info('Downvotes: '.Vote::where('type', 'downvote')->count());

        $this->command->info('Votes seeded successfully!');
    }

    protected function getVoteTypeWithBias(): string
    {
        // 80% upvotes, 20% downvotes
        return rand(1, 100) <= 80 ? 'upvote' : 'downvote';
    }
}

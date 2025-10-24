// database/seeders/CommentScenarioSeeder.php (optional)
<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class CommentScenarioSeeder extends Seeder
{
    public function run(): void
    {
        // Create posts with different comment settings for testing
        Post::factory()
            ->published()
            ->withComments()
            ->withAnonymousComments()
            ->create(['title' => 'Post with Anonymous Comments Allowed']);

        Post::factory()
            ->published()
            ->withComments()
            ->withoutAnonymousComments()
            ->create(['title' => 'Post with Only Authenticated Comments']);

        Post::factory()
            ->published()
            ->withoutComments()
            ->create(['title' => 'Post with Comments Disabled']);
    }
}

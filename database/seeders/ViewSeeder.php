<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\View;
use Illuminate\Database\Seeder;

class ViewSeeder extends Seeder
{
    public function run(): void
    {
        // Get published posts to generate views for
        $posts = Post::published()->get();

        if ($posts->isEmpty()) {
            $this->command->warn('No published posts found. Creating some posts first...');
            $posts = Post::factory()->count(10)->published()->create();
        }

        // Get some users for authenticated views
        $users = User::limit(10)->get();

        if ($users->isEmpty()) {
            $this->command->warn('No users found. Creating some users first...');
            $users = User::factory()->count(5)->create();
        }

        $locales = ['en', 'ru', 'eo'];

        // Create views for each post with realistic distribution
        foreach ($posts as $post) {
            $totalViews = rand(50, 500); // Total views per post

            // Distribute views across time (some recent, some old)
            $this->createPostViews($post, $totalViews, $locales, $users);
        }

        // Create some very recent views (last 7 days)
        $recentPosts = $posts->random(3);
        foreach ($recentPosts as $post) {
            View::factory()
                ->count(rand(10, 30))
                ->forPost($post)
                ->recent()
                ->create();
        }

        $this->command->info('Views seeded successfully!');
        $this->command->info('Total views: '.View::count());

        // Show view statistics by locale
        foreach ($locales as $locale) {
            $count = View::where('locale', $locale)->count();
            $this->command->info("Views for {$locale}: ".$count);
        }

        $this->command->info('Authenticated views: '.View::whereNotNull('user_id')->count());
        $this->command->info('Guest views: '.View::whereNull('user_id')->count());

        $this->command->info('Views seeded successfully!');
    }

    protected function createPostViews(Post $post, int $totalViews, array $locales, $users): void
    {
        $localeDistribution = [
            'en' => 0.60, // 60% English
            'ru' => 0.30, // 30% Russian
            'eo' => 0.10, // 10% Esperanto
        ];

        $userPercentage = 0.25; // 25% of views from authenticated users

        for ($i = 0; $i < $totalViews; $i++) {
            $locale = $this->getRandomLocale($localeDistribution);
            $isAuthenticated = rand(1, 100) <= ($userPercentage * 100);

            $viewData = [
                'viewable_type' => Post::class,
                'viewable_id' => $post->id,
                'locale' => $locale,
            ];

            if ($isAuthenticated && ! $users->isEmpty()) {
                $viewData['user_id'] = $users->random()->id;
            }

            View::factory()->create($viewData);
        }
    }

    protected function getRandomLocale(array $distribution): string
    {
        $rand = rand(1, 100);
        $cumulative = 0;

        foreach ($distribution as $locale => $percentage) {
            $cumulative += $percentage * 100;
            if ($rand <= $cumulative) {
                return $locale;
            }
        }

        return 'en'; // Fallback
    }
}

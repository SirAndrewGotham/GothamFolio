<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $this->call([
            RoleSeeder::class,
            LanguageSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
//            SubscriptionSeeder::class,
            VoteSeeder::class,
//            ViewSeeder::class,
            ProjectTypeSeeder::class,
            ProjectSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            CompetenceSeeder::class,
            ProjectCompetenceSeeder::class,
            BannerSeeder::class,
            FeatureSeeder::class,
            ResumeSummarySeeder::class,
            GallerySeeder::class,
            ImageSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Tag::factory(10)->create();

        $totalTags = 10;

        $this->command->getOutput()->progressStart($totalTags);

        Tag::factory()->count($totalTags)->make()->each(function ($tag) {
            $tag->save();
            $this->command->getOutput()->progressAdvance();
        });

        $this->command->getOutput()->progressFinish();
        $this->command->info('Tags seeded successfully!');
    }
}

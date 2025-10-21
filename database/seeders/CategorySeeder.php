<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Category::factory(10)->create();

        $totalCategories = 10;

        $this->command->getOutput()->progressStart($totalCategories);

        Category::factory()->count($totalCategories)->make()->each(function ($category) {
            $category->save();
            $this->command->getOutput()->progressAdvance();
        });

        $this->command->getOutput()->progressFinish();
        $this->command->info('Categories seeded successfully!');
    }
}

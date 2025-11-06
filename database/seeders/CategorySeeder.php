<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/competences.json'));
        $data = json_decode($json, true);

        foreach ($data['categories'] as $categoryData) {
            $category = Category::firstOrCreate(
                ['slug' => $categoryData['slug']],
                [
                    'name' => $categoryData['name']['en'], // Set default name for firstOrCreate
                    'is_featured' => $categoryData['is_featured'] ?? false,
                    'is_active' => $categoryData['is_active'] ?? true,
                ]
            );

            foreach ($categoryData['name'] as $locale => $name) {
                $category->setTranslation('name', $name, $locale);
            }

            foreach ($categoryData['description'] as $locale => $description) {
                $category->setTranslation('description', $description, $locale);
            }
            $category->save();
        }
    }
}

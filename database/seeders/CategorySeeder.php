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
        $categories = [
            ['en' => 'Laravel', 'ru' => 'Laravel'],
            ['en' => 'API Development', 'ru' => 'API Разработка'],
            ['en' => 'Python', 'ru' => 'Python'],
            ['en' => 'Tools & Scripts', 'ru' => 'Инструменты и Скрипты'],
            ['en' => 'Frontend', 'ru' => 'Фронтенд'],
        ];

        foreach ($categories as $categoryData) {
            $category = new Category;
            $category->name = $categoryData['en'];
            $category->slug = \Illuminate\Support\Str::slug($categoryData['en']);
            $category->is_active = true;
            $category->save();

            $category->setTranslation('name', $categoryData['en'], 'en');
            $category->setTranslation('name', $categoryData['ru'], 'ru');
            $category->setTranslation('name', $categoryData['ru'], 'eo');
        }
    }
}

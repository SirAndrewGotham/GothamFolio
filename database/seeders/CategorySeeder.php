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
            ['en' => 'Backend', 'ru' => 'Бэкенд', 'eo' => 'Dorsflanko'],
            ['en' => 'Frontend', 'ru' => 'Фронтенд', 'eo' => 'Antaŭflanko'],
            ['en' => 'API Development', 'ru' => 'API Разработка', 'eo' => 'API-Disvolviĝo'],
            ['en' => 'Testing', 'ru' => 'Тестирование', 'eo' => 'Testado'],
            ['en' => 'DevOps', 'ru' => 'DevOps', 'eo' => 'DevOps'],
            ['en' => 'Tools', 'ru' => 'Инструменты', 'eo' => 'Iloj'],
        ];

        foreach ($categories as $categoryData) {
            $category = Category::create([
                'name' => $categoryData['en'], // Set the default name attribute
                'slug' => \Illuminate\Support\Str::slug($categoryData['en']),
                'is_active' => true,
                'is_featured' => fake()->boolean(30),
            ]);

            $category->setTranslation('name', $categoryData['en'], 'en');
            $category->setTranslation('name', $categoryData['ru'], 'ru');
            $category->setTranslation('name', $categoryData['eo'], 'eo'); // Use proper Esperanto translation or a placeholder
        }
    }
}

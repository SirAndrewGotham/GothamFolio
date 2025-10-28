<?php

namespace Database\Seeders;

use App\Models\Competence;
use Illuminate\Database\Seeder;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $competences = [
            ['en' => 'Laravel', 'ru' => 'Laravel', 'icon' => 'fab fa-laravel', 'description_en' => 'Full-stack PHP framework for elegant web development', 'description_ru' => 'Full-stack PHP фреймворк для элегантной веб-разработки'],
            ['en' => 'PHP', 'ru' => 'PHP', 'icon' => 'fab fa-php', 'description_en' => 'Server-side scripting language for web development', 'description_ru' => 'Серверный язык программирования для веб-разработки'],
            ['en' => 'JavaScript', 'ru' => 'JavaScript', 'icon' => 'fab fa-js', 'description_en' => 'Frontend programming language for interactive web pages', 'description_ru' => 'Фронтенд язык программирования для интерактивных веб-страниц'],
            ['en' => 'Python', 'ru' => 'Python', 'icon' => 'fab fa-python', 'description_en' => 'Versatile programming language for web development and data analysis', 'description_ru' => 'Универсальный язык программирования для веб-разработки и анализа данных'],
            ['en' => 'Tailwind CSS', 'ru' => 'Tailwind CSS', 'icon' => 'fab fa-css3-alt', 'description_en' => 'Utility-first CSS framework for rapid UI development', 'description_ru' => 'Utility-first CSS фреймворк для быстрой разработки UI'],
            ['en' => 'Alpine.js', 'ru' => 'Alpine.js', 'icon' => 'fas fa-mountain', 'description_en' => 'Minimalist JavaScript framework for adding interactivity', 'description_ru' => 'Минималистичный JavaScript фреймворк для добавления интерактивности'],
            ['en' => 'MySQL', 'ru' => 'MySQL', 'icon' => 'fas fa-database', 'description_en' => 'Relational database management system', 'description_ru' => 'Реляционная система управления базами данных'],
            ['en' => 'Livewire', 'ru' => 'Livewire', 'icon' => 'fas fa-bolt', 'description_en' => 'Full-stack framework for Laravel with dynamic UI', 'description_ru' => 'Full-stack фреймворк для Laravel с динамическим UI'],
            ['en' => 'Vue.js', 'ru' => 'Vue.js', 'icon' => 'fab fa-vuejs', 'description_en' => 'Progressive JavaScript framework for building user interfaces', 'description_ru' => 'Прогрессивный JavaScript фреймворк для создания пользовательских интерфейсов'],
            ['en' => 'REST API', 'ru' => 'REST API', 'icon' => 'fas fa-exchange-alt', 'description_en' => 'Designing and developing APIs for web services', 'description_ru' => 'Проектирование и разработка API для веб-сервисов'],
        ];

        foreach ($competences as $competenceData) {
            $competence = Competence::factory()->create([
                'slug' => \Illuminate\Support\Str::slug($competenceData['en']),
                'icon' => $competenceData['icon'],
                'is_active' => true,
                'is_featured' => false,
            ]);

            $competence->setTranslation('name', $competenceData['en'], 'en');
            $competence->setTranslation('name', $competenceData['ru'], 'ru');
            $competence->setTranslation('description', $competenceData['description_en'], 'en');
            $competence->setTranslation('description', $competenceData['description_ru'], 'ru');
        }
    }
}

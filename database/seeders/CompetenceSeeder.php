<?php

namespace Database\Seeders;

use App\Models\Competence;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();
        $allCategories = \App\Models\Category::all();

        $competences = [
            [
                'en' => 'Laravel', 'ru' => 'Laravel', 'eo' => 'Laravel',
                'icon' => 'fab fa-laravel', 'color' => '#ff2d20',
                'proficiency' => 95, 'years_experience' => 8,
                'description_en' => 'Full-stack PHP framework for elegant web development',
                'description_ru' => 'Full-stack PHP фреймворк для элегантной веб-разработки',
                'description_eo' => 'Full-stack PHP kadro por eleganta reta disvolviĝo'
            ],
            [
                'en' => 'PHP', 'ru' => 'PHP', 'eo' => 'PHP',
                'icon' => 'fab fa-php', 'color' => '#777bb4',
                'proficiency' => 90, 'years_experience' => 10,
                'description_en' => 'Server-side scripting language for web development',
                'description_ru' => 'Серверный язык программирования для веб-разработки',
                'description_eo' => 'Servflanka skriptlingvo por reta disvolviĝo'
            ],
            [
                'en' => 'JavaScript', 'ru' => 'JavaScript', 'eo' => 'JavaScript',
                'icon' => 'fab fa-js', 'color' => '#f7df1e',
                'proficiency' => 85, 'years_experience' => 9,
                'description_en' => 'Frontend programming language for interactive web pages',
                'description_ru' => 'Фронтенд язык программирования для интерактивных веб-страниц',
                'description_eo' => 'Frontenda programlingvo por interaktivaj retpaĝoj'
            ],
            [
                'en' => 'Python', 'ru' => 'Python', 'eo' => 'Python',
                'icon' => 'fab fa-python', 'color' => '#3776ab',
                'proficiency' => 80, 'years_experience' => 6,
                'description_en' => 'Versatile programming language for web development and data analysis',
                'description_ru' => 'Универсальный язык программирования для веб-разработки и анализа данных',
                'description_eo' => 'Multcela programlingvo por reta disvolviĝo kaj datumanalizo'
            ],
            [
                'en' => 'Tailwind CSS', 'ru' => 'Tailwind CSS', 'eo' => 'Tailwind CSS',
                'icon' => 'fab fa-css3-alt', 'color' => '#06b6d4',
                'proficiency' => 88, 'years_experience' => 4,
                'description_en' => 'Utility-first CSS framework for rapid UI development',
                'description_ru' => 'Utility-first CSS фреймворк для быстрой разработки UI',
                'description_eo' => 'Utility-unua CSS kadro por rapida UI-disvolviĝo'
            ],
            [
                'en' => 'Alpine.js', 'ru' => 'Alpine.js', 'eo' => 'Alpine.js',
                'icon' => 'fas fa-mountain', 'color' => '#8b5cf6',
                'proficiency' => 82, 'years_experience' => 3,
                'description_en' => 'Minimalist JavaScript framework for adding interactivity',
                'description_ru' => 'Минималистичный JavaScript фреймворк для добавления интерактивности',
                'description_eo' => 'Minimalisma JavaScript kadro por aldoni interaktivecon'
            ],
            [
                'en' => 'MySQL', 'ru' => 'MySQL', 'eo' => 'MySQL',
                'icon' => 'fas fa-database', 'color' => '#4479a1',
                'proficiency' => 87, 'years_experience' => 8,
                'description_en' => 'Relational database management system',
                'description_ru' => 'Реляционная система управления базами данных',
                'description_eo' => 'Rilata datumbaza administra sistemo'
            ],
            [
                'en' => 'Livewire', 'ru' => 'Livewire', 'eo' => 'Livewire',
                'icon' => 'fas fa-bolt', 'color' => '#fb7185',
                'proficiency' => 92, 'years_experience' => 3,
                'description_en' => 'Full-stack framework for Laravel with dynamic UI',
                'description_ru' => 'Full-stack фреймворк для Laravel с динамическим UI',
                'description_eo' => 'Full-stack kadro por Laravel kun dinamika UI'
            ],
            [
                'en' => 'Vue.js', 'ru' => 'Vue.js', 'eo' => 'Vue.js',
                'icon' => 'fab fa-vuejs', 'color' => '#4fc08d',
                'proficiency' => 78, 'years_experience' => 4,
                'description_en' => 'Progressive JavaScript framework for building user interfaces',
                'description_ru' => 'Прогрессивный JavaScript фреймворк для создания пользовательских интерфейсов',
                'description_eo' => 'Progresema JavaScript kadro por konstrui uzantinterfacojn'
            ],
            [
                'en' => 'REST API', 'ru' => 'REST API', 'eo' => 'REST API',
                'icon' => 'fas fa-exchange-alt', 'color' => '#10b981',
                'proficiency' => 85, 'years_experience' => 5,
                'description_en' => 'Designing and developing APIs for web services',
                'description_ru' => 'Проектирование и разработка API для веб-сервисов',
                'description_eo' => 'Projektado kaj disvolviĝo de API-oj por retservoj'
            ],
            [
                'en' => 'Git', 'ru' => 'Git', 'eo' => 'Git',
                'icon' => 'fab fa-git-alt', 'color' => '#f05032',
                'proficiency' => 90, 'years_experience' => 7,
                'description_en' => 'Distributed version control system for tracking changes',
                'description_ru' => 'Распределенная система контроля версий для отслеживания изменений',
                'description_eo' => 'Distribuita versia kontrolsistemo por spuri ŝanĝojn'
            ],
            [
                'en' => 'Docker', 'ru' => 'Docker', 'eo' => 'Docker',
                'icon' => 'fab fa-docker', 'color' => '#2496ed',
                'proficiency' => 75, 'years_experience' => 3,
                'description_en' => 'Containerization platform for application deployment',
                'description_ru' => 'Платформа контейнеризации для развертывания приложений',
                'description_eo' => 'Konteneriga platformo por aplikaĵa disvastigo'
            ]
        ];

        foreach ($competences as $competenceData) {
            $competence = Competence::create([
                'slug' => \Illuminate\Support\Str::slug($competenceData['en']),
                'icon' => $competenceData['icon'],
                'color' => $competenceData['color'],
                'proficiency' => $competenceData['proficiency'],
                'years_experience' => $competenceData['years_experience'],
                'is_active' => true,
                'is_featured' => $faker->boolean(30), // Use the local faker instance
            ]);

            // Set translations for all three languages
            $competence->setTranslation('name', $competenceData['en'], 'en');
            $competence->setTranslation('name', $competenceData['ru'], 'ru');
            $competence->setTranslation('name', $competenceData['eo'], 'eo');

            $competence->setTranslation('description', $competenceData['description_en'], 'en');
            $competence->setTranslation('description', $competenceData['description_ru'], 'ru');
            $competence->setTranslation('description', $competenceData['description_eo'], 'eo');

            // Attach categories (randomly, at least one)
            if ($allCategories->isNotEmpty()) {
                $randomCategories = $allCategories
                    ->random(rand(1, min(3, $allCategories->count())))
                    ->pluck('id');
                $competence->categories()->attach($randomCategories);
            }

            $competence->categories()->attach($randomCategories);
        }
    }
}

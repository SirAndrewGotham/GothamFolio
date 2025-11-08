<?php

namespace Database\Seeders;

use App\Models\ResumeSummary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResumeSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Experience items
        $exp1 = ResumeSummary::create([
            'type' => 'experience',
            'icon' => 'fa-briefcase',
            'duration' => '2020 - present',
            'order' => 0,
            'is_active' => true,
        ]);

        $exp1->setTranslation('title', 'Senior Web Developer', 'ru');
        $exp1->setTranslation('subtitle', 'TechSolutions Inc.', 'ru');
        $exp1->setTranslation('description', 'Разработка и поддержка высоконагруженных веб-приложений с использованием Laravel, Vue.js и Livewire.', 'ru');

        $exp1->setTranslation('title', 'Senior Web Developer', 'en');
        $exp1->setTranslation('subtitle', 'TechSolutions Inc.', 'en');
        $exp1->setTranslation('description', 'Development and support of high-load web applications using Laravel, Vue.js and Livewire.', 'en');

        $exp1->setTranslation('title', 'Ĉefa Retprogramisto', 'eo');
        $exp1->setTranslation('subtitle', 'TechSolutions Inc.', 'eo');
        $exp1->setTranslation('description', 'Disvolviĝo kaj subteno de altŝarĝaj retaj aplikoj uzante Laravel, Vue.js kaj Livewire.', 'eo');

        $exp2 = ResumeSummary::create([
            'type' => 'experience',
            'icon' => 'fa-briefcase',
            'duration' => '2018 - 2020',
            'order' => 1,
            'is_active' => true,
        ]);

        $exp2->setTranslation('title', 'Web Developer', 'ru');
        $exp2->setTranslation('subtitle', 'Digital Agency "WebArt"', 'ru');
        $exp2->setTranslation('description', 'Создание веб-сайтов и интернет-магазинов для клиентов различных отраслей.', 'ru');

        $exp2->setTranslation('title', 'Web Developer', 'en');
        $exp2->setTranslation('subtitle', 'Digital Agency "WebArt"', 'en');
        $exp2->setTranslation('description', 'Creating websites and online stores for clients in various industries.', 'en');

        $exp2->setTranslation('title', 'Retprogramisto', 'eo');
        $exp2->setTranslation('subtitle', 'Digitala Agentejo "WebArt"', 'eo');
        $exp2->setTranslation('description', 'Kreante retejojn kaj retbutikojn por klientoj en diversaj industrioj.', 'eo');

// Education items
        $edu1 = ResumeSummary::create([
            'type' => 'education',
            'icon' => 'fa-graduation-cap',
            'duration' => '2016 - 2018',
            'order' => 0,
            'is_active' => true,
        ]);

        $edu1->setTranslation('title', 'Магистр информатики', 'ru');
        $edu1->setTranslation('subtitle', 'МГУ им. Ломоносова', 'ru');
        $edu1->setTranslation('description', '', 'ru');

        $edu1->setTranslation('title', 'Master of Computer Science', 'en');
        $edu1->setTranslation('subtitle', 'Lomonosov Moscow State University', 'en');
        $edu1->setTranslation('description', '', 'en');

        $edu1->setTranslation('title', 'Majstro pri Komputiko', 'eo');
        $edu1->setTranslation('subtitle', 'Lomonosov Moskva Ŝtata Universitato', 'eo');
        $edu1->setTranslation('description', '', 'eo');

        $edu2 = ResumeSummary::create([
            'type' => 'education',
            'icon' => 'fa-graduation-cap',
            'duration' => '2012 - 2016',
            'order' => 1,
            'is_active' => true,
        ]);

        $edu2->setTranslation('title', 'Бакалавр компьютерных наук', 'ru');
        $edu2->setTranslation('subtitle', 'МГТУ им. Баумана', 'ru');
        $edu2->setTranslation('description', '', 'ru');

        $edu2->setTranslation('title', 'Bachelor of Computer Science', 'en');
        $edu2->setTranslation('subtitle', 'Bauman Moscow State Technical University', 'en');
        $edu2->setTranslation('description', '', 'en');

        $edu2->setTranslation('title', 'Bakalaŭro pri Komputiko', 'eo');
        $edu2->setTranslation('subtitle', 'Bauman Moskva Ŝtata Teknika Universitato', 'eo');
        $edu2->setTranslation('description', '', 'eo');

// Skill items
        $skill1 = ResumeSummary::create([
            'type' => 'skill',
            'icon' => 'fab fa-laravel',
            'percentage' => 95,
            'link' => '/competences/laravel',
            'order' => 0,
            'is_active' => true,
        ]);

        $skill1->setTranslation('title', 'Laravel', 'ru');
        $skill1->setTranslation('subtitle', '', 'ru');
        $skill1->setTranslation('description', 'Фреймворк для элегантной веб-разработки на PHP', 'ru');

        $skill1->setTranslation('title', 'Laravel', 'en');
        $skill1->setTranslation('subtitle', '', 'en');
        $skill1->setTranslation('description', 'Framework for elegant web development in PHP', 'en');

        $skill1->setTranslation('title', 'Laravel', 'eo');
        $skill1->setTranslation('subtitle', '', 'eo');
        $skill1->setTranslation('description', 'Kadro por eleganta reta disvolviĝo en PHP', 'eo');

        $skill2 = ResumeSummary::create([
            'type' => 'skill',
            'icon' => 'fab fa-php',
            'percentage' => 90,
            'link' => '/competences/php',
            'order' => 1,
            'is_active' => true,
        ]);

        $skill2->setTranslation('title', 'PHP', 'ru');
        $skill2->setTranslation('subtitle', '', 'ru');
        $skill2->setTranslation('description', 'Серверный язык программирования', 'ru');

        $skill2->setTranslation('title', 'PHP', 'en');
        $skill2->setTranslation('subtitle', '', 'en');
        $skill2->setTranslation('description', 'Server-side programming language', 'en');

        $skill2->setTranslation('title', 'PHP', 'eo');
        $skill2->setTranslation('subtitle', '', 'eo');
        $skill2->setTranslation('description', 'Servflanka programlingvo', 'eo');

        $skill3 = ResumeSummary::create([
            'type' => 'skill',
            'icon' => 'fab fa-vuejs',
            'percentage' => 85,
            'link' => '/competences/vue-livewire',
            'order' => 2,
            'is_active' => true,
        ]);

        $skill3->setTranslation('title', 'Vue.js / Livewire', 'ru');
        $skill3->setTranslation('subtitle', '', 'ru');
        $skill3->setTranslation('description', 'Фронтенд фреймворки для интерактивных интерфейсов', 'ru');

        $skill3->setTranslation('title', 'Vue.js / Livewire', 'en');
        $skill3->setTranslation('subtitle', '', 'en');
        $skill3->setTranslation('description', 'Frontend frameworks for interactive interfaces', 'en');

        $skill3->setTranslation('title', 'Vue.js / Livewire', 'eo');
        $skill3->setTranslation('subtitle', '', 'eo');
        $skill3->setTranslation('description', 'Frontend kadroj por interaktivaj interfacoj', 'eo');
    }
}

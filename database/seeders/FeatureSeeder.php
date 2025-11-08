<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feature1 = Feature::create([
            'icon' => 'fa-code',
            'order' => 0,
            'is_active' => true,
        ]);

// Feature 1 translations
        $feature1->setTranslation('title', 'Код - моя жизнь', 'ru');
        $feature1->setTranslation('description',
            'Я просто обожаю кодить. Писать программный код - это все, что я хочу, и я могу заниматься этим сутки напролет. Этот процесс сродни созданию новых миров и открытию неизведанных планет и целых вселенных. Я никогда не устаю от этого!<br>Воображение, планирование, строительство и разработка Веб-сайтов, что может быть интереснее и увлекательнее?<br>Я счастлив, что занимаюсь любимым делом.',
            'ru');

        $feature1->setTranslation('title', 'Code is My Life', 'en');
        $feature1->setTranslation('description',
            'I absolutely love coding. Writing program code is all I want, and I can do it around the clock. This process is akin to creating new worlds and discovering unexplored planets and entire universes. I never get tired of it!<br>Imagination, planning, construction and development of websites - what could be more interesting and exciting?<br>I am happy that I am doing what I love.',
            'en');

        $feature1->setTranslation('title', 'Kodo estas Mia Vivo', 'eo');
        $feature1->setTranslation('description',
            'Mi absolute amas kodadon. Skribi programan kodon estas ĉio, kion mi volas, kaj mi povas fari ĝin tage kaj nokte. Ĉi tiu procezo similas krei novajn mondojn kaj malkovri neesploritajn planedojn kaj tutajn universo. Mi neniam laciĝas pri ĝi!<br>Imagado, planado, konstruado kaj disvolviĝo de retejoj - kio povus esti pli interesa kaj fascina?<br>Mi estas feliĉa, ke mi faras tion, kion mi amas.',
            'eo');

        $feature2 = Feature::create([
            'icon' => 'fa-graduation-cap',
            'order' => 1,
            'is_active' => true,
        ]);

// Feature 2 translations
        $feature2->setTranslation('title', 'Никогда не перестаю учиться', 'ru');
        $feature2->setTranslation('description',
            'Современные технологии постоянно развиваются, и очень быстро. Что-то новое появляется каждый день: комплаенс, ISO-9000, Scrum, Agile, Git, Tailwind, Frontend, Backend, API, и многое другое...<br>Как это впечатляет и захватывакт! Изучение нового становится ежедневным приключением.',
            'ru');

        $feature2->setTranslation('title', 'Never Stop Learning', 'en');
        $feature2->setTranslation('description',
            'Modern technologies are constantly evolving, and very quickly. Something new appears every day: compliance, ISO-9000, Scrum, Agile, Git, Tailwind, Frontend, Backend, API, and much more...<br>How impressive and captivating it is! Learning new things becomes a daily adventure.',
            'en');

        $feature2->setTranslation('title', 'Neniam Ĉesu Lerni', 'eo');
        $feature2->setTranslation('description',
            'Modernaj teĥnologioj konstante evoluiĝas, kaj tre rapide. Io nova aperas ĉiutage: komplianco, ISO-9000, Scrum, Agile, Git, Tailwind, Frontend, Backend, API, kaj multe pli...<br>Kiel impona kaj kaptiva ĝi estas! Lerni novajn aferojn fariĝas ĉiutaga aventuro.',
            'eo');

        $feature3 = Feature::create([
            'icon' => 'fa-camera',
            'order' => 2,
            'is_active' => true,
        ]);

// Feature 3 translations
        $feature3->setTranslation('title', 'Фотография - мое второе имя', 'ru');
        $feature3->setTranslation('description',
            'Я фотографировал всегда. На фотографиях из моего раннего детства я уже вполне осознанно обращаюсь с фотоаппаратом. Позже, в школе, я был официальным фотографом школы. Затем... Все развивалось, и никогда не заканчивалось.<br>Посмотрите мои галереи, мне будет приятно, если вы увидите в них что-то, находящее в вас отклик.',
            'ru');

        $feature3->setTranslation('title', 'Photography is My Second Name', 'en');
        $feature3->setTranslation('description',
            'I have always photographed. In photos from my early childhood, I am already quite consciously handling a camera. Later, in school, I was the official school photographer. Then... Everything developed and never ended.<br>Check out my galleries, I would be pleased if you see something in them that resonates with you.',
            'en');

        $feature3->setTranslation('title', 'Fotografio estas Mia Dua Nomo', 'eo');
        $feature3->setTranslation('description',
            'Mi ĉiam fotis. En fotoj el mia frua infanaĝo, mi jam sufiĉe konscie pritraktas fotilon. Poste, en lernejo, mi estis la oficiala lernej-fotisto. Poste... Ĉio disvolviĝis kaj neniam finiĝis.<br>Rigardu miajn galeriojn, mi estos plezurita se vi vidos ion en ili, kio resonas kun vi.',
            'eo');
    }
}

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

        $exp1->setTranslation('title', 'Инженер-программист', 'ru');
        $exp1->setTranslation('subtitle', 'ООО "Тарис"', 'ru');
        $exp1->setTranslation('description', 'Разработка и поддержка высоконагруженного веб-приложения для гражданского строительства для городских коммунальных служб. Руководство командой из 5 разработчиков, внедрение современных практик разработки.', 'ru');

        $exp1->setTranslation('title', 'Programming Engineer', 'en');
        $exp1->setTranslation('subtitle', 'Taris, Inc.', 'en');
        $exp1->setTranslation('description', 'DDevelopment and support of high-load civil engineering web application for cities\' utilities services. Leading a team of 5 developers, implementing modern development practices.', 'en');

        $exp1->setTranslation('title', 'Programada Inĝeniero', 'eo');
        $exp1->setTranslation('subtitle', 'Taris, Inc.', 'eo');
        $exp1->setTranslation('description', 'Evoluigo kaj subteno de alteŝarĝa konstruinĝeniera reteja aplikaĵo por urbaj utilaj servoj. Gvidado de teamo de 5 programistoj, efektivigado de modernaj evoluigaj praktikoj.', 'eo');

        $exp2 = ResumeSummary::create([
            'type' => 'experience',
            'icon' => 'fa-briefcase',
            'duration' => '2018 - 2020',
            'order' => 1,
            'is_active' => true,
        ]);

        $exp2->setTranslation('title', 'Веб-разработчик', 'ru');
        $exp2->setTranslation('subtitle', 'Частные контракты', 'ru');
        $exp2->setTranslation('description', 'Создание веб-сайтов и интернет-магазинов для клиентов из различных отраслей. Работа над проектами от концепции до запуска и поддержки.', 'ru');

        $exp2->setTranslation('title', 'Web Developer', 'en');
        $exp2->setTranslation('subtitle', 'Private Contracts', 'en');
        $exp2->setTranslation('description', 'Creating websites and online stores for clients from various industries. Working on projects from concept to launch and support.', 'en');

        $exp2->setTranslation('title', 'Reteja Programisto', 'eo');
        $exp2->setTranslation('subtitle', 'Privataj Kontraktoj', 'eo');
        $exp2->setTranslation('description', 'Kreado de retejoj kaj retvendejoj por klientoj el diversaj industrioj. Laboro pri projektoj de koncepto ĝis lanĉo kaj subteno.', 'eo');

// Education items
        $edu1 = ResumeSummary::create([
            'type' => 'education',
            'icon' => 'fa-graduation-cap',
            'duration' => '2016 - 2018',
            'order' => 0,
            'is_active' => true,
        ]);

        $edu1->setTranslation('title', 'Data Scientist/Аналитик с Python', 'ru');
        $edu1->setTranslation('subtitle', 'ГБОУ ДПО "Центр Профессионал"', 'ru');
        $edu1->setTranslation('description', 'Государственное учреждение профессионального обучения. Сертификат: Data Scientist, Data Engineer, Data Analyst с Python.', 'ru');

        $edu1->setTranslation('title', 'Data Scientist/Analyst with Python', 'en');
        $edu1->setTranslation('subtitle', 'GBOU DPO "Center Professional"', 'en');
        $edu1->setTranslation('description', 'State-owned professional training school. Certificate: Data Scientist, Data Engineer, Data Analyst with Python.', 'en');

        $edu1->setTranslation('title', 'Data Scientist/Analizisto kun Python', 'eo');
        $edu1->setTranslation('subtitle', 'GBOU DPO "Centro Profesiulo"', 'eo');
        $edu1->setTranslation('description', 'Ŝtata profesia lernejo. Atestilo: Data Scientist, Data Engineer, Data Analyst kun Python.', 'eo');

        $edu2 = ResumeSummary::create([
            'type' => 'education',
            'icon' => 'fa-graduation-cap',
            'duration' => '2012 - 2016',
            'order' => 1,
            'is_active' => true,
        ]);

        $edu2->setTranslation('title', 'Full-stack веб-разработчик', 'ru');
        $edu2->setTranslation('subtitle', 'ГБОУ ДПО "Центр Профессионал"', 'ru');
        $edu2->setTranslation('description', 'Государственное учреждение профессионального обучения. Сертифицирован как full-stack веб-разработчик с компетенциями во фронтенд и бэкенд разработке, CSS фреймворках, программировании на PHP, процессе веб-разработки.', 'ru');

        $edu2->setTranslation('title', 'Full-stack Web Developer', 'en');
        $edu2->setTranslation('subtitle', 'BGBOU DPO "Center Professional"', 'en');
        $edu2->setTranslation('description', 'State-owned professional training school. Certified as a full-stack web developer with competences in frontend and backend development, css frameworks, php programming, web development process.', 'en');

        $edu2->setTranslation('title', 'Full-stack Reteja Programisto', 'eo');
        $edu2->setTranslation('subtitle', 'GBOU DPO "Centro Profesiulo"', 'eo');
        $edu2->setTranslation('description', 'Ŝtata profesia lernejo. Atestita kiel full-stack reteja programisto kun kompetentecoj en frontend kaj backend evoluigo, CSS kadroj, PHP programado, reteja evoluiga procezo.', 'eo');

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
        $skill1->setTranslation('description', 'Full-stack PHP фреймворк для элегантной веб-разработки с выразительным синтаксисом. Мой основной инструмент с 2015 года.', 'ru');

        $skill1->setTranslation('title', 'Laravel', 'en');
        $skill1->setTranslation('subtitle', '', 'en');
        $skill1->setTranslation('description', 'Full-stack PHP framework for elegant web development with expressive syntax. My primary tool since 2015.', 'en');

        $skill1->setTranslation('title', 'Laravel', 'eo');
        $skill1->setTranslation('subtitle', '', 'eo');
        $skill1->setTranslation('description', 'Full-stack PHP-kadro por eleganta reta disvolviĝo kun esprima sintakso. Mia ĉefa ilo ekde 2015.', 'eo');

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
        $skill2->setTranslation('description', 'Серверный язык программирования, прошедший путь от простых скриптов до современных enterprise-приложений', 'ru');

        $skill2->setTranslation('title', 'PHP', 'en');
        $skill2->setTranslation('subtitle', '', 'en');
        $skill2->setTranslation('description', 'Server-side programming language that has evolved from simple scripts to modern enterprise applications', 'en');

        $skill2->setTranslation('title', 'PHP', 'eo');
        $skill2->setTranslation('subtitle', '', 'eo');
        $skill2->setTranslation('description', 'Servila programlingvo, evoluiĝinta de simplaj skriptoj ĝis modernaj entreprenaj aplikoj', 'eo');

        $skill3 = ResumeSummary::create([
            'type' => 'skill',
            'icon' => 'fab fa-python',
            'percentage' => 85,
            'link' => '/competences/python',
            'order' => 2,
            'is_active' => true,
        ]);

        $skill3->setTranslation('title', 'Python', 'ru');
        $skill3->setTranslation('subtitle', '', 'ru');
        $skill3->setTranslation('description', 'Универсальный язык программирования для веб-разработки, анализа данных и автоматизации. Активно изучаю и применяю в проектах с 2023 года.', 'ru');

        $skill3->setTranslation('title', 'Python', 'en');
        $skill3->setTranslation('subtitle', '', 'en');
        $skill3->setTranslation('description', 'Versatile programming language for web development, data analysis, and automation. Actively learning and applying in projects since 2023.', 'en');

        $skill3->setTranslation('title', 'Pitono', 'eo');
        $skill3->setTranslation('subtitle', '', 'eo');
        $skill3->setTranslation('description', 'Multflanka programlingvo por reta disvolviĝo, datum-analizo kaj aŭtomatigo. Aktive lernas kaj aplikas en projektoj ekde 2023.', 'eo');
    }
}

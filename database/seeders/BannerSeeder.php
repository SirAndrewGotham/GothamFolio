<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banner1 = Banner::create([
            'image_path' => 'assets/frontend/img/carousel/bg1.png',
            'button_link' => '/resume',
            'is_active' => true,
            'order' => 0,
        ]);

        // Banner 1 translations
        $banner1->setTranslation('title', 'Любовь и забота', 'ru');
        $banner1->setTranslation('description', 'Должен сказать, я люблю то, что делаю. Я всегда интересовался компьютерами, и занимался ими, и уже в середине 1980-х начал программировать, перейдя к Веб-разработкам, когда родился Интернет. И с тех пор я постоянно впитываю и применяю на практике новые технологии и способы их использования.', 'ru');
        $banner1->setTranslation('button_text', 'Подробнее - в моем резюме', 'ru');

        $banner1->setTranslation('title', 'Love and Care', 'en');
        $banner1->setTranslation('description', 'I must say, I love what I do. I\'ve always been interested in computers and worked with them, and I started programming in the mid-1980s, moving to web development when the Internet was born. Since then, I\'ve been constantly absorbing and applying new technologies and ways to use them.', 'en');
        $banner1->setTranslation('button_text', 'More details in my resume', 'en');

        $banner1->setTranslation('title', 'Amo kaj Zorgo', 'eo');
        $banner1->setTranslation('description', 'Mi devas diri, ke mi amas tion, kion mi faras. Mi ĉiam interesiĝis pri komputiloj kaj laboris kun ili, kaj mi komencis programi en la mezo de la 1980-aj jaroj, transirante al reta disvolviĝo kiam naskiĝis la Interreto. Ekde tiam, mi konstante absorbas kaj aplikas novajn teĥnologiojn kaj manierojn uzi ilin.', 'eo');
        $banner1->setTranslation('button_text', 'Pli da detaloj en mia resumeo', 'eo');

        $banner2 = Banner::create([
            'image_path' => 'assets/frontend/img/carousel/bg2.jpg',
            'button_link' => '/portfolio',
            'is_active' => true,
            'order' => 1,
        ]);

        // Banner 2 translations
        $banner2->setTranslation('title', 'Laravel - мой выбор', 'ru');
        $banner2->setTranslation('description', 'Laravel - это фреймворк, который я выбрал для своих проектов. Его элегантный синтаксис, мощные возможности и активное сообщество делают его идеальным инструментом для создания современных веб-приложений.', 'ru');
        $banner2->setTranslation('button_text', 'Смотреть портфолио', 'ru');

        $banner2->setTranslation('title', 'Laravel - My Choice', 'en');
        $banner2->setTranslation('description', 'Laravel is the framework I\'ve chosen for my projects. Its elegant syntax, powerful capabilities, and active community make it the ideal tool for creating modern web applications.', 'en');
        $banner2->setTranslation('button_text', 'View portfolio', 'en');

        $banner2->setTranslation('title', 'Laravel - Mia Elekto', 'eo');
        $banner2->setTranslation('description', 'Laravel estas la kadro, kiun mi elektis por miaj projektoj. Ĝia eleganta sintakso, potencaj kapabloj kaj aktiva komunumo faras ĝin la ideala ilo por krei modernajn retajn aplikojn.', 'eo');
        $banner2->setTranslation('button_text', 'Rigardi portfolion', 'eo');

        $banner3 = Banner::create([
            'image_path' => 'assets/frontend/img/carousel/bg3.jpg',
            'button_link' => '/contact',
            'is_active' => true,
            'order' => 2,
        ]);

        // Banner 3 translations
        $banner3->setTranslation('title', 'Качество и надежность', 'ru');
        $banner3->setTranslation('description', 'Я стремлюсь создавать решения, которые не только красиво выглядят, но и работают безупречно. Каждый проект - это тщательно продуманная архитектура, чистый код и внимание к деталям.', 'ru');
        $banner3->setTranslation('button_text', 'Связаться со мной', 'ru');

        $banner3->setTranslation('title', 'Quality and Reliability', 'en');
        $banner3->setTranslation('description', 'I strive to create solutions that not only look beautiful but also work flawlessly. Every project is a carefully thought-out architecture, clean code, and attention to detail.', 'en');
        $banner3->setTranslation('button_text', 'Contact me', 'en');

        $banner3->setTranslation('title', 'Kvalito kaj Fidindeco', 'eo');
        $banner3->setTranslation('description', 'Mi strebas krei solvojn, kiuj ne nur belaspektas sed ankaŭ funkcias senmakule. Ĉiu projekto estas zorgeme pripensita arkitekturo, pura kodo kaj atento al detaloj.', 'eo');
        $banner3->setTranslation('button_text', 'Kontaktu min', 'eo');
    }
}

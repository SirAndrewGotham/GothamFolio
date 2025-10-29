<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            [
                'name' => 'Full-stack',
                'description' => 'Complete web applications with both frontend and backend',
                'icon' => 'fas fa-layer-group',
                'order' => 1,
                'translations' => [
                    'ru' => ['name' => 'Фулстек', 'description' => 'Полные веб-приложения с фронтендом и бэкендом'],
                    'eo' => ['name' => 'Plena-stako', 'description' => 'Kompletaj retaplikaĵoj kun antaŭaĵo kaj malantaŭaĵo'],
                ],
            ],
            [
                'name' => 'Frontend',
                'description' => 'User interface and client-side applications',
                'icon' => 'fas fa-paint-brush',
                'order' => 2,
                'translations' => [
                    'ru' => ['name' => 'Фронтенд', 'description' => 'Пользовательский интерфейс и клиентские приложения'],
                    'eo' => ['name' => 'Antaŭaĵo', 'description' => 'Uzantinterfaco kaj klientflankaj aplikaĵoj'],
                ],
            ],
            [
                'name' => 'Backend',
                'description' => 'Server-side applications and APIs',
                'icon' => 'fas fa-server',
                'order' => 3,
                'translations' => [
                    'ru' => ['name' => 'Бэкенд', 'description' => 'Серверные приложения и API'],
                    'eo' => ['name' => 'Malantaŭaĵo', 'description' => 'Servilflankaj aplikaĵoj kaj API'],
                ],
            ],
            [
                'name' => 'API',
                'description' => 'RESTful APIs and web services',
                'icon' => 'fas fa-code',
                'order' => 4,
                'translations' => [
                    'ru' => ['name' => 'API', 'description' => 'RESTful API и веб-сервисы'],
                    'eo' => ['name' => 'API', 'description' => 'RESTful API kaj retservoj'],
                ],
            ],
        ];

        foreach ($types as $typeData) {
            $projectType = ProjectType::create(collect($typeData)->except('translations')->toArray());

            // Use provided translations if present; otherwise fall back to EN from $typeData
            $translations = $typeData['translations'] ?? [
                'en' => [
                    'name' => $typeData['name'],
                    'description' => $typeData['description'],
                ],
            ];

            foreach ($translations as $locale => $t) {
                $projectType->setTranslation('name', $t['name'], $locale);
                $projectType->setTranslation('description', $t['description'], $locale);
            }
        }
    }
}

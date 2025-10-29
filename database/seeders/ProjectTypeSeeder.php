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
            ],
            [
                'name' => 'Frontend',
                'description' => 'User interface and client-side applications',
                'icon' => 'fas fa-paint-brush',
                'order' => 2,
            ],
            [
                'name' => 'Backend',
                'description' => 'Server-side applications and APIs',
                'icon' => 'fas fa-server',
                'order' => 3,
            ],
            [
                'name' => 'API',
                'description' => 'RESTful APIs and web services',
                'icon' => 'fas fa-code',
                'order' => 4,
            ],
        ];

        foreach ($types as $typeData) {
            $projectType = ProjectType::create($typeData);

            // Set proper translations
            $projectType->setTranslation('name', 'Full-stack', 'en');
            $projectType->setTranslation('name', 'Фулстек', 'ru');
            $projectType->setTranslation('name', 'Plena-stako', 'eo');

            $projectType->setTranslation('description', 'Complete web applications...', 'en');
            $projectType->setTranslation('description', 'Полные веб-приложения...', 'ru');
            $projectType->setTranslation('description', 'Kompletaj retaplikaĵoj...', 'eo');
        }
    }
}

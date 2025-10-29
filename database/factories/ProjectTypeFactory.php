<?php

namespace Database\Factories;

use App\Models\ProjectType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectType>
 */
class ProjectTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Full-stack', 'Frontend', 'Backend', 'API', 'Mobile', 'Desktop', 'Game'];
        $type = $this->faker->randomElement($types);

        $descriptions = [
            'Full-stack' => 'Complete web applications with both frontend and backend',
            'Frontend' => 'User interface and client-side applications',
            'Backend' => 'Server-side applications and APIs',
            'API' => 'RESTful APIs and web services',
            'Mobile' => 'Mobile applications for iOS and Android',
            'Desktop' => 'Desktop applications for Windows, macOS, and Linux',
            'Game' => 'Game development projects',
        ];

        $icons = [
            'Full-stack' => 'fas fa-layer-group',
            'Frontend' => 'fas fa-paint-brush',
            'Backend' => 'fas fa-server',
            'API' => 'fas fa-code',
            'Mobile' => 'fas fa-mobile-alt',
            'Desktop' => 'fas fa-desktop',
            'Game' => 'fas fa-gamepad',
        ];

        return [
            'name' => $type,
            'description' => $descriptions[$type] ?? 'Project type description',
            'icon' => $icons[$type] ?? 'fas fa-cube',
            'is_active' => $this->faker->boolean(90),
            'order' => $this->faker->numberBetween(1, 10),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (\App\Models\ProjectType $projectType) {
            // Simple translations - let the model handle complex translation logic
            $projectType->setTranslation('name', $projectType->name, 'en');
            $projectType->setTranslation('name', $projectType->name, 'ru'); // Use same for demo
            $projectType->setTranslation('name', $projectType->name, 'eo');

            $projectType->setTranslation('description', $projectType->description, 'en');
            $projectType->setTranslation('description', $projectType->description, 'ru');
            $projectType->setTranslation('description', $projectType->description, 'eo');
        });
    }

    private function getRussianTranslation(string $type): string
    {
        $translations = [
            'Full-stack' => 'Фулстек',
            'Frontend' => 'Фронтенд',
            'Backend' => 'Бэкенд',
            'API' => 'API',
            'Mobile' => 'Мобильный',
            'Desktop' => 'Десктоп',
            'Game' => 'Игра',
        ];

        return $translations[$type] ?? $type;
    }

    private function getEsperantoTranslation(string $type): string
    {
        $translations = [
            'Full-stack' => 'Plena-stako',
            'Frontend' => 'Antaŭaĵo',
            'Backend' => 'Malantaŭaĵo',
            'API' => 'API',
            'Mobile' => 'Poŝtelefona',
            'Desktop' => 'Labortabla',
            'Game' => 'Ludo',
        ];

        return $translations[$type] ?? $type;
    }

    private function getRussianDescription(string $type): string
    {
        $descriptions = [
            'Full-stack' => 'Полные веб-приложения с фронтендом и бэкендом',
            'Frontend' => 'Пользовательский интерфейс и клиентские приложения',
            'Backend' => 'Серверные приложения и API',
            'API' => 'RESTful API и веб-сервисы',
            'Mobile' => 'Мобильные приложения для iOS и Android',
            'Desktop' => 'Десктопные приложения для Windows, macOS и Linux',
            'Game' => 'Проекты по разработке игр',
        ];

        return $descriptions[$type] ?? 'Описание типа проекта';
    }

    private function getEsperantoDescription(string $type): string
    {
        $descriptions = [
            'Full-stack' => 'Kompletaj retaplikaĵoj kun antaŭaĵo kaj malantaŭaĵo',
            'Frontend' => 'Uzantinterfaco kaj klientflankaj aplikaĵoj',
            'Backend' => 'Servilflankaj aplikaĵoj kaj API',
            'API' => 'RESTful API kaj retservoj',
            'Mobile' => 'Poŝtelefonaj aplikaĵoj por iOS kaj Android',
            'Desktop' => 'Labortablaj aplikaĵoj por Windows, macOS kaj Linux',
            'Game' => 'Projektoj pri ludo-disvolviĝo',
        ];

        return $descriptions[$type] ?? 'Priskribo de projekta tipo';
    }
}

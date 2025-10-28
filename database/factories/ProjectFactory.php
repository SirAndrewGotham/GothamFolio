<?php

namespace Database\Factories;

use App\Models\Project as ProjectModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'category_id' => \App\Models\Category::factory(),
            'year' => $this->faker->year(),
            'status' => $this->faker->randomElement(['Active', 'Completed', 'In Development']),
            'duration' => $this->faker->randomElement(['1 month', '3 months', '6 months', '1 year']),
            'type' => $this->faker->randomElement(['Full-stack', 'Backend', 'Frontend', 'API']),
            'image' => $this->faker->imageUrl(400, 300, 'projects'),
            'demo_url' => $this->faker->url(),
            'github_url' => $this->faker->url(),
            'featured' => $this->faker->boolean(20),
            'is_active' => true,
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (\App\Models\Project $project) {
            $project->setTranslation('name', $this->faker->sentence(3), 'en');
            $project->setTranslation('name', $this->faker->sentence(3), 'ru');
            $project->setTranslation('description', $this->faker->paragraph(), 'en');
            $project->setTranslation('description', $this->faker->paragraph(), 'ru');
        });
    }

    public function withTranslations(): static
    {
        return $this->afterCreating(function (ProjectModel $project) {
            $project->setTranslation('name', 'Project ' . $project->id, 'en');
            $project->setTranslation('name', 'Проект ' . $project->id, 'ru');
            $project->setTranslation('description', 'Description for project ' . $project->id, 'en');
            $project->setTranslation('description', 'Описание проекта ' . $project->id, 'ru');
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Competence;
use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectTypes = ProjectType::all();
        $categories = Category::all();

        if ($categories->isEmpty()) {
            $this->call(CategorySeeder::class);
            $categories = Category::all();
        }

        if ($projectTypes->isEmpty()) {
            $this->call(ProjectTypeSeeder::class);
            $projectTypes = ProjectType::all();
        }

        Project::factory()->count(10)->create()->each(function ($project) use ($categories, $projectTypes) {
            $project->update(['project_type_id' => $projectTypes->random()->id]);
            $project->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );

            // Set translatable fields
            $project->setTranslation('name', 'Project '.$project->id, 'en');
            $project->setTranslation('name', 'Проект '.$project->id, 'ru');
            $project->setTranslation('name', 'Projeckto '.$project->id, 'eo');
            $project->setTranslation('description', 'Description for project '.$project->id, 'en');
            $project->setTranslation('description', 'Описание проекта '.$project->id, 'ru');
            $project->setTranslation('description', 'Projekta priskribo '.$project->id, 'eo');
        });
    }
}

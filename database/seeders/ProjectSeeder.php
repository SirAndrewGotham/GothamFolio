<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Competence;
use App\Models\Category;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $competences = Competence::all();

        if ($categories->isEmpty()) {
            $this->call(CategorySeeder::class);
            $categories = Category::all();
        }

        if ($competences->isEmpty()) {
            $this->call(CompetenceSeeder::class);
            $competences = Competence::all();
        }

        Project::factory()->count(10)->create(['category_id' => $categories->random()->id])->each(function ($project) use ($competences) {
            $project->competences()->attach(
                $competences->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}

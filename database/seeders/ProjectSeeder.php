<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Competence;
use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load project types and categories first
        $projectTypes = ProjectType::all()->keyBy('slug');
        $categories = Category::all()->keyBy('slug');
        $competences = Competence::all()->keyBy('slug');

        if ($categories->isEmpty()) {
            $this->call(CategorySeeder::class);
            $categories = Category::all()->keyBy('slug');
        }

        if ($projectTypes->isEmpty()) {
            $this->call(ProjectTypeSeeder::class);
            $projectTypes = ProjectType::all()->keyBy('slug');
        }

        // Load projects from JSON file
        $projectsData = $this->loadProjectsFromJson();

        foreach ($projectsData as $projectData) {
            try {
                $project = Project::create([
                    'uuid' => $projectData['uuid'],
                    'slug' => $projectData['slug'],
                    'project_type_id' => $projectTypes[$projectData['project_type']]->id,
                    'year' => $projectData['year'],
                    'status' => $projectData['status'],
                    'duration' => $projectData['duration'],
                    'image' => $projectData['image'],
                    'demo_url' => $projectData['demo_url'],
                    'github_url' => $projectData['github_url'],
                    'featured' => $projectData['featured'],
                    'is_active' => $projectData['is_active'],
                ]);

                // Set translations
                foreach ($projectData['translations'] as $locale => $translation) {
                    $project->setTranslation('name', $translation['name'], $locale);
                    $project->setTranslation('description', $translation['description'], $locale);
                }

                // Attach categories
                if (! empty($projectData['categories'])) {
                    $categoryIds = $categories->only($projectData['categories'])->pluck('id')->toArray();
                    $project->categories()->attach($categoryIds);
                }

                // Attach competences
                if (! empty($projectData['competences'])) {
                    $competenceIds = $competences->only($projectData['competences'])->pluck('id')->toArray();
                    $project->competences()->attach($competenceIds);
                }

            } catch (\Exception $e) {
                Log::error("Failed to create project {$projectData['slug']}: ".$e->getMessage());
            }
        }
    }

    /**
     * Load projects data from JSON file
     */
    protected function loadProjectsFromJson(): array
    {
        $jsonPath = database_path('seeders/data/projects.json');

        if (! File::exists($jsonPath)) {
            // Fallback to default data if JSON file doesn't exist
            return $this->getDefaultProjectsData();
        }

        try {
            $jsonContent = File::get($jsonPath);
            $data = json_decode($jsonContent, true);

            return $data['projects'] ?? [];
        } catch (\Exception $e) {
            Log::error('Failed to load projects.json: '.$e->getMessage());

            return $this->getDefaultProjectsData();
        }
    }

    /**
     * Default projects data as fallback
     */
    protected function getDefaultProjectsData(): array
    {
        return [
            [
                'uuid' => '550e8400-e29b-41d4-a716-446655440001',
                'slug' => 'gothamfolio-platform',
                'project_type' => 'full-stack',
                'year' => '2024',
                'status' => 'Active',
                'duration' => '3 months',
                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'demo_url' => 'https://gothamfolio.test',
                'github_url' => 'https://github.com/SirAndrewGotham/gothamfolio',
                'featured' => true,
                'is_active' => true,
                'translations' => [
                    'en' => [
                        'name' => 'GothamFolio Platform',
                        'description' => 'Full-featured personal portfolio management platform with integrated blogging system, galleries, and performance analytics.',
                    ],
                    'ru' => [
                        'name' => 'Платформа GothamFolio',
                        'description' => 'Полнофункциональная платформа для управления персональным портфолио с интегрированной системой блогинга, галереями и аналитикой производительности.',
                    ],
                ],
                'categories' => ['web-development', 'cms', 'portfolio'],
                'competences' => ['laravel', 'livewire', 'tailwind-css'],
            ],
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Competence;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProjectCompetenceSeeder extends Seeder
{
    public function run(): void
    {
        // Load project-competence relationships from JSON file
        $projectCompetences = json_decode(File::get(database_path('data/project-competences.json')), true);

        $competenceIds = Competence::pluck('id', 'slug')->toArray();

        foreach ($projectCompetences as $projectSlug => $competenceSlugs) {
            $project = Project::where('slug', $projectSlug)->first();

            if (!$project) {
                $this->command->warn("Project with slug '{$projectSlug}' not found.");
                continue;
            }

            $competenceIdsToAttach = [];

            foreach ($competenceSlugs as $competenceSlug) {
                if (isset($competenceIds[$competenceSlug])) {
                    $competenceIdsToAttach[] = $competenceIds[$competenceSlug];
                } else {
                    $this->command->warn("Competence with slug '{$competenceSlug}' not found for project '{$projectSlug}'.");
                }
            }

            if (!empty($competenceIdsToAttach)) {
                $project->competences()->sync($competenceIdsToAttach);
                $this->command->info("Attached " . count($competenceIdsToAttach) . " competences to project '{$projectSlug}'.");
            }
        }
    }
}

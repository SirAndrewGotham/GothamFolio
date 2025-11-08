<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Competence;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/competences.json'));
        $data = json_decode($json, true);

        foreach ($data['competences'] as $competenceData) {
            $competence = Competence::firstOrCreate(
                ['slug' => $competenceData['slug']],
                [
                    'icon' => $competenceData['icon'],
                    'color' => $competenceData['color'],
                    'proficiency' => $competenceData['proficiency'],
                    'years_experience' => $competenceData['years_experience'],
                    'is_featured' => $competenceData['is_featured'],
                    'is_active' => $competenceData['is_active'],
                ]
            );

            // Set translations for name and description
            foreach ($competenceData['translations']['name'] as $locale => $name) {
                $competence->setTranslation('name', $name, $locale);
            }
            foreach ($competenceData['translations']['description'] as $locale => $description) {
                $competence->setTranslation('description', $description, $locale);
            }
            $competence->save(); // Save translations

            // Attach categories
            if (! empty($competenceData['categories'])) {
                $categorySlugs = $competenceData['categories'];
                $categories = Category::whereIn('slug', $categorySlugs)->get();
                $competence->categories()->sync($categories->pluck('id'));
            }

            // Attach tags
            if (! empty($competenceData['tags'])) {
                $tagSlugs = $competenceData['tags'];
                $tags = Tag::whereIn('slug', $tagSlugs)->get();
                $competence->tags()->sync($tags->pluck('id'));
            }
        }
    }
}

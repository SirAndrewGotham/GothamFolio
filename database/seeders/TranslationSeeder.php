<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // For now, we'll create some generic translations.
        // In a real scenario, these would be linked to actual models.
        //        Translation::factory(10)->create();

        $totalTranslations = 10;

        $this->command->getOutput()->progressStart($totalTranslations);

        Translation::factory()->count($totalTranslations)->make()->each(function ($translation) {
            $translation->save();
            $this->command->getOutput()->progressAdvance();
        });

        $this->command->getOutput()->progressFinish();
        $this->command->info('Translations seeded successfully!');

    }
}

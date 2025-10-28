<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the table first
        Language::query()->delete();

        // Get languages from JSON file
        $languagesJson = File::get(database_path('seeders/data/languages.json'));
        // Temporarily dump the raw JSON string to inspect it
        // dd($languagesJson);
        $languages = json_decode($languagesJson, true);

        // Temporarily dump JSON decoding error if it fails
        if (json_last_error() !== JSON_ERROR_NONE) {
            dd('JSON Decode Error: '.json_last_error_msg());
        }

        foreach ($languages as $language) {
            Language::create($language);
        }

        $this->command->info('Languages seeded successfully!');
    }
}

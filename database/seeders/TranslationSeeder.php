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
        Translation::factory(10)->create();
    }
}

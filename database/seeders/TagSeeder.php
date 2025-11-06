<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/competences.json'));
        $data = json_decode($json, true);

        foreach ($data['tags'] as $tagData) {
            Tag::firstOrCreate(
                ['slug' => $tagData['slug']],
                ['name' => $tagData['name']]
            );
        }
    }
}

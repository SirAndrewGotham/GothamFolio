<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Backend', 'Frontend', 'Database', 'API', 'Deployment',
            'Testing', 'UI/UX', 'Version Control', 'Cloud', 'Frameworks',
            'JavaScript', 'PHP', 'Python', 'CSS', 'HTML', 'SQL',
        ];

        foreach ($tags as $tagName) {
            Tag::factory()->create([
                'name' => $tagName,
                'slug' => \Illuminate\Support\Str::slug($tagName),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    public function run(): void
    {
        Feedback::factory()->count(10)->create([
            'is_read' => false,
        ]);

        Feedback::factory()->count(5)->create([
            'is_read' => true,
        ]);
    }
}

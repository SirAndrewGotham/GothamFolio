<?php

namespace Database\Factories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'subject' => $this->faker->sentence,
            'category' => $this->faker->randomElement(['project', 'collaboration', 'question', 'feedback', 'other']),
            'message' => $this->faker->paragraphs(3, true),
            'ip_address' => $this->faker->ipv4,
            'is_read' => $this->faker->boolean(30), // 30% chance of being read
        ];
    }
}

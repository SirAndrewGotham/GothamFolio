<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'icon' => $this->faker->randomElement(['fa-code', 'fa-graduation-cap', 'fa-camera', 'fa-laptop', 'fa-lightbulb']),
            'order' => $this->faker->numberBetween(0, 10),
            'is_active' => true,
        ];
    }
}

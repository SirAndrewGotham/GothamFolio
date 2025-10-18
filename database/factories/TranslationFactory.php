<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Translation>
 */
class TranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'locale' => $this->faker->randomElement(['en', 'es', 'fr']),
            'key' => $this->faker->unique()->word(),
            'value' => $this->faker->sentence(),
            'translatable_id' => 0, // Placeholder, will be set when associated with a model
            'translatable_type' => 'App\\Models\\Post', // Placeholder
        ];
    }
}

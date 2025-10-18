<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

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
        ];
    }

    /**
     * Indicate that the translation belongs to a specific model.
     */
    public function forModel(Model $model): static
    {
        return $this->state(fn (array $attributes) => [
            'translatable_id' => $model->id,
            'translatable_type' => $model::class,
        ]);
    }
}

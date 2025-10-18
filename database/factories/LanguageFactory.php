<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->languageCode,
            'name_native' => $this->faker->word,
            'name_english' => $this->faker->word,
            'is_rtl' => false,
            'emoji' => $this->faker->randomElement(['🇺🇸', '🇬🇧', '🇩🇪', '🇫🇷']),
            'flag_svg' => null,
            'is_active' => true,
            'is_default' => false,
            'sort_order' => $this->faker->numberBetween(1, 100),
        ];
    }
}

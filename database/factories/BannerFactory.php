<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_path' => 'assets/frontend/img/carousel/bg'.rand(1,3).'.jpg',
            'button_link' => '#'.$this->faker->word,
            'is_active' => true,
            'order' => $this->faker->numberBetween(0, 10),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function ($banner) {
            // Add English translations
            $banner->setTranslation('title', $this->faker->sentence(3), 'en');
            $banner->setTranslation('description', $this->faker->paragraph(3), 'en');
            $banner->setTranslation('button_text', $this->faker->words(3, true), 'en');

            // Add Russian translations
            $banner->setTranslation('title', $this->faker->sentence(3), 'ru');
            $banner->setTranslation('description', $this->faker->paragraph(3), 'ru');
            $banner->setTranslation('button_text', $this->faker->words(3, true), 'ru');
        });
    }
}

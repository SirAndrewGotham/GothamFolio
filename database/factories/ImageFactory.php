<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(4, true),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(),
            'file_path' => 'images/galleries/',
            'file_name' => $this->faker->uuid().'.jpg',
            'file_size' => $this->faker->numberBetween(100000, 5000000),
            'mime_type' => 'image/jpeg',
            'width' => $this->faker->numberBetween(800, 4000),
            'height' => $this->faker->numberBetween(600, 3000),
            'camera_model' => $this->faker->randomElement(['Sony A7 III', 'Canon EOS R6', 'Fujifilm X-T4', 'Nikon Z6']),
            'camera_settings' => $this->faker->randomElement(['f/8, 1/200s, ISO 200', 'f/5.6, 1/500s, ISO 400', 'f/11, 1/125s, ISO 100']),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'year' => $this->faker->year(),
            'is_published' => $this->faker->boolean(90),
            'order' => $this->faker->numberBetween(0, 100),
            'gallery_id' => null, // Will be set in seeder
        ];
    }

    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => true,
        ]);
    }

    public function unpublished(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => false,
        ]);
    }

    public function withCamera(string $model, string $settings): static
    {
        return $this->state(fn (array $attributes) => [
            'camera_model' => $model,
            'camera_settings' => $settings,
        ]);
    }

    public function withDimensions(int $width, int $height): static
    {
        return $this->state(fn (array $attributes) => [
            'width' => $width,
            'height' => $height,
        ]);
    }
}

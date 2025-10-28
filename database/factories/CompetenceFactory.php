<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competence>
 */
class CompetenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'icon' => $this->faker->randomElement(['fab fa-laravel', 'fab fa-php', 'fab fa-js', 'fab fa-python', 'fab fa-html5', 'fab fa-css3', 'fab fa-react', 'fab fa-vuejs']),
            'is_featured' => $this->faker->boolean(),
            'is_active' => true,
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (\App\Models\Competence $competence) {
            $competence->setTranslation('name', $this->faker->unique()->word(), 'en');
            $competence->setTranslation('name', $this->faker->unique()->word(), 'ru');
            $competence->setTranslation('description', $this->faker->sentence(), 'en');
            $competence->setTranslation('description', $this->faker->sentence(), 'ru');

            $tagCount = \App\Models\Tag::count();
            if ($tagCount > 0) {
                $limit = min($this->faker->numberBetween(1, 3), $tagCount);
                $tags = \App\Models\Tag::inRandomOrder()->limit($limit)->get();
                $competence->tags()->attach($tags);
            }
        });
    }
}

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
            'color' => $this->faker->randomElement(['#3b82f6', '#ef4444', '#10b981', '#f59e0b', '#8b5cf6', '#ec4899', '#06b6d4']),
            'proficiency' => $this->faker->numberBetween(70, 100),
            'years_experience' => $this->faker->numberBetween(1, 12),
            'is_featured' => $this->faker->boolean(30), // 30% chance to be featured
            'is_active' => true,
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (\App\Models\Competence $competence) {
            $competence->setTranslation('name', $this->faker->unique()->word(), 'en');
            $competence->setTranslation('name', $this->faker->unique()->word(), 'ru');
            $competence->setTranslation('name', $this->faker->unique()->word(), 'eo');
            $competence->setTranslation('description', $this->faker->sentence(), 'en');
            $competence->setTranslation('description', $this->faker->sentence(), 'ru');
            $competence->setTranslation('description', $this->faker->sentence(), 'eo');

            $tagCount = \App\Models\Tag::count();
            if ($tagCount > 0) {
                $limit = min($this->faker->numberBetween(1, 3), $tagCount);
                $tags = \App\Models\Tag::inRandomOrder()->limit($limit)->get();
                $competence->tags()->attach($tags);
            }
        });
    }
}

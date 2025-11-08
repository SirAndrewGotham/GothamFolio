<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResumeSummary>
 */
class ResumeSummaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['experience', 'education', 'skill']),
            'icon' => $this->faker->randomElement(['fa-briefcase', 'fa-graduation-cap', 'fa-tools', 'fa-laravel', 'fa-php', 'fa-vuejs']),
            'duration' => $this->faker->date('Y') . ' - ' . $this->faker->randomElement(['Present', '2024', '2023']),
            'percentage' => $this->faker->numberBetween(70, 100),
            'link' => $this->faker->randomElement(['/competences/laravel', '/competences/php', '/competences/vue-livewire', null]),
            'order' => $this->faker->numberBetween(0, 10),
            'is_active' => true,
        ];
    }
}

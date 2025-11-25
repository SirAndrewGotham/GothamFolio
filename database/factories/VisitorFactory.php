<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitor>
 */
class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ip_address' => fake()->ipv4(),
            'user_agent' => fake()->userAgent(),
            'referrer' => fake()->optional()->url(),
            'path' => fake()->randomElement(['/', '/about', '/contact', '/blog', '/portfolio']),
            'country' => fake()->optional()->country(),
            'city' => fake()->optional()->city(),
            'device_type' => fake()->randomElement(['desktop', 'mobile', 'tablet']),
            'browser' => fake()->randomElement(['Chrome', 'Firefox', 'Safari', 'Edge', 'Opera']),
            'platform' => fake()->randomElement(['Windows', 'macOS', 'Linux', 'Android', 'iOS']),
            'is_bot' => fake()->boolean(10),
        ];
    }
}

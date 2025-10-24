<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(6);

        // Generate Dicebear avatar URL with random seed for each post
        $randomSeed = $this->faker->uuid;
        $featuredImage = "https://api.dicebear.com/7.x/avataaars/svg?seed={$randomSeed}&width=1200&height=630&radius=50";

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->paragraph(2),
            'content' => $this->faker->paragraphs(10, true),
            'featured_image' => $featuredImage,
            'published_at' => $this->faker->optional(0.8)->dateTimeBetween('-1 year', '+1 month'),
            'is_published' => $this->faker->boolean(80),
            'is_featured' => $this->faker->boolean(20),
            'read_time' => $this->faker->numberBetween(3, 15),
            'meta_title' => $title,
            'meta_description' => $this->faker->sentence(10),
            'meta_keywords' => implode(', ', $this->faker->words(5)),
            'user_id' => User::factory(),
            'post_id' => null,
            'language_id' => function () {
                return Language::inRandomOrder()->first()->id ?? Language::factory()->create()->id;
            },
            'allow_comments' => $this->faker->boolean(90),
            'allow_anonymous_comments' => $this->faker->boolean(70),
        ];
    }

    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => true,
            'published_at' => now()->subDays(rand(1, 365)),
        ]);
    }

    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => false,
            'published_at' => null,
        ]);
    }

    public function scheduled(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => true,
            'published_at' => now()->addDays(rand(1, 30)),
        ]);
    }

    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }

    public function withComments(): static
    {
        return $this->state(fn (array $attributes) => [
            'allow_comments' => true,
        ]);
    }

    public function withoutComments(): static
    {
        return $this->state(fn (array $attributes) => [
            'allow_comments' => false,
        ]);
    }

    public function withAnonymousComments(): static
    {
        return $this->state(fn (array $attributes) => [
            'allow_comments' => true,
            'allow_anonymous_comments' => true,
        ]);
    }

    public function withoutAnonymousComments(): static
    {
        return $this->state(fn (array $attributes) => [
            'allow_comments' => true,
            'allow_anonymous_comments' => false,
        ]);
    }
}

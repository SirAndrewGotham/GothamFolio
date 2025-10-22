<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function configure()
    {
        return $this->afterCreating(function (Post $post) {
            $locales = ['en', 'ru', 'eo'];

            foreach ($locales as $locale) {
                $post->setTranslation('title', str_replace(" [{$locale}]", '', $post->title) . " [{$locale}]", $locale);
                $post->setTranslation('excerpt', str_replace(" [{$locale}]", '', $post->excerpt) . " [{$locale}]", $locale);
                $post->setTranslation('content', str_replace(" [{$locale}]", '', $post->content) . " [{$locale}]", $locale);
                $post->setTranslation('meta_title', str_replace(" [{$locale}]", '', $post->meta_title) . " [{$locale}]", $locale);
                $post->setTranslation('meta_description', str_replace(" [{$locale}]", '', $post->meta_description) . " [{$locale}]", $locale);
            }
        });
    }

    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(6);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->paragraph(2),
            'content' => $this->faker->paragraphs(10, true),
            'featured_image' => $this->faker->imageUrl(1200, 630),
            'published_at' => $this->faker->optional(0.8)->dateTimeBetween('-1 year', '+1 month'),
            'is_published' => $this->faker->boolean(80),
            'is_featured' => $this->faker->boolean(20),
            'read_time' => $this->faker->numberBetween(3, 15),
            'meta_title' => $title,
            'meta_description' => $this->faker->sentence(10),
            'meta_keywords' => implode(', ', $this->faker->words(5)),
            'user_id' => User::factory(),
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
}

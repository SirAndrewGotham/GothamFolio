<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Register an after-creation hook that updates translatable Post fields with locale tags.
     *
     * For each locale in ['en', 'ru', 'eo'], removes any existing " [locale]" suffix from
     * the post's title, excerpt, content, meta_title, and meta_description, then sets the
     * translation for that locale by appending " [locale]" to each field.
     *
     * @return $this The factory instance with the afterCreating callback attached.
     */
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

    /**
     * Define the default attribute values used when creating a Post via the factory.
     *
     * @return array Associative array of Post attributes:
     *               - `title`: generated sentence (≈6 words).
     *               - `slug`: URL-friendly slug derived from `title`.
     *               - `excerpt`: short paragraph summary.
     *               - `content`: multi-paragraph article body.
     *               - `featured_image`: placeholder image URL (1200x630).
     *               - `published_at`: nullable DateTime between 1 year ago and 1 month ahead (present ~80% of the time).
     *               - `is_published`: boolean flag (≈80% true).
     *               - `is_featured`: boolean flag (≈20% true).
     *               - `read_time`: integer minutes between 3 and 15.
     *               - `meta_title`: same as `title`.
     *               - `meta_description`: generated sentence (≈10 words).
     *               - `meta_keywords`: five generated words joined by commas.
     *               - `user_id`: associated User factory instance.
     */
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

    /**
     * Configure the factory state to represent a published post.
     *
     * The state sets `is_published` to `true` and `published_at` to a past date between 1 and 365 days ago.
     *
     * @return static The factory with the published state applied.
     */
    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => true,
            'published_at' => now()->subDays(rand(1, 365)),
        ]);
    }

    /**
     * Configure the factory to produce a draft post.
     *
     * @return static The factory instance with `is_published` set to `false` and `published_at` set to `null`.
     */
    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => false,
            'published_at' => null,
        ]);
    }

    /**
     * Apply a factory state that schedules the post to be published in the future.
     *
     * @return static Factory instance with `is_published` set to `true` and `published_at` set to a date 1–30 days from now.
     */
    public function scheduled(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => true,
            'published_at' => now()->addDays(rand(1, 30)),
        ]);
    }

    /**
     * Mark generated posts as featured.
     *
     * @return static A factory state that sets `is_featured` to `true`.
     */
    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }
}
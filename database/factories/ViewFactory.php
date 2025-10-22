<?php

namespace Database\Factories;

use App\Models\View;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViewFactory extends Factory
{
    protected $model = View::class;

    /**
     * Generate default attributes for a View model.
     *
     * Produces an attribute array that references an existing Post for `viewable_type`/`viewable_id`, selects `locale` from ['en', 'ru', 'eo'], assigns a random IPv4 `ip_address` and `user_agent`, and sets `user_id` to an existing User's id approximately 30% of the time or `null` for a guest.
     *
     * @return array{viewable_type:string,viewable_id:int,locale:string,ip_address:string,user_agent:string,user_id:int|null} Associative array of attributes for creating a View model.
     */
    public function definition(): array
    {
        $post = Post::inRandomOrder()->first() ?? Post::factory()->create();

        $isAuthenticated = $this->faker->boolean(30);
        $user = $isAuthenticated ? (User::inRandomOrder()->first() ?? User::factory()->create()) : null;

        $locales = ['en', 'ru', 'eo'];

        return [
            'viewable_type' => Post::class,
            'viewable_id' => $post->id,
            'locale' => $this->faker->randomElement($locales),
            'ip_address' => $this->faker->ipv4(),
            'user_agent' => $this->faker->userAgent(),
            'user_id' => $user?->id,
        ];
    }

    /**
     * Set the factory state so the generated View is associated with the given Post.
     *
     * @param \App\Models\Post $post The Post to associate with the created View.
     * @return static The factory instance with the modified state.
     */
    public function forPost(Post $post): static
    {
        return $this->state(fn (array $attributes) => [
            'viewable_type' => Post::class,
            'viewable_id' => $post->id,
        ]);
    }

    /**
     * Configure the factory to create a view attributed to the given user while ensuring an IP address is recorded.
     *
     * @param \App\Models\User $user The user to associate with the view.
     * @return static A factory instance with `user_id` set to the user's id and `ip_address` populated.
     */
    public function fromUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $user->id,
            'ip_address' => $this->faker->ipv4(), // Still track IP for analytics
        ]);
    }

    /**
     * Configure the factory to create a view attributed to a guest (no authenticated user).
     *
     * @return static The factory instance configured with `user_id` set to null.
     */
    public function fromGuest(): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => null,
        ]);
    }

    /**
     * Force the view's locale to the provided value.
     *
     * @param string $locale The locale code to set (e.g., "en", "ru", "eo").
     * @return static The factory instance with the `locale` attribute set to the provided value.
     */
    public function withLocale(string $locale): static
    {
        return $this->state(fn (array $attributes) => [
            'locale' => $locale,
        ]);
    }

    /**
     * Mark the generated view as recently created.
     *
     * Sets `created_at` to a datetime between one week ago and now.
     *
     * @return static
     */
    public function recent(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
        ]);
    }

    /**
     * Set the factory state so the model's `created_at` is between six months ago and one month ago.
     *
     * @return static The factory instance with `created_at` set to a time between six months ago and one month ago.
     */
    public function old(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-6 months', '-1 month'),
        ]);
    }

    /**
     * Mark the generated view as created between two years ago and seven months ago.
     *
     * @return static The factory instance with `created_at` set to a datetime between 2 years ago and 7 months ago.
     */
    public function veryOld(): static
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => $this->faker->dateTimeBetween('-2 years', '-7 months'),
        ]);
    }
}
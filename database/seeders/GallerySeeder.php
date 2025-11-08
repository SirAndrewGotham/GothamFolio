<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        // First, ensure we have the required categories
        $this->ensureCategoriesExist();

        // Get categories for galleries
        $categories = Category::whereIn('name', [
            'Landscape', 'Portrait', 'Architecture', 'Street', 'Nature', 'Art', 'Travel', 'Macro'
        ])->get();

        // Get tags for images
        $tags = Tag::whereIn('name', [
            'sunset', 'mountains', 'urban', 'portrait', 'architecture', 'nature',
            'black-and-white', 'color', 'travel', 'macro', 'details', 'textures'
        ])->get();

        // If no tags exist, create some default ones
        if ($tags->isEmpty()) {
            $tagNames = ['sunset', 'mountains', 'urban', 'portrait', 'architecture', 'nature',
                'black-and-white', 'color', 'travel', 'macro', 'details', 'textures'];

            foreach ($tagNames as $tagName) {
                Tag::firstOrCreate(
                    ['name' => $tagName],
                    ['slug' => Str::slug($tagName)]
                );
            }

            $tags = Tag::whereIn('name', $tagNames)->get();
        }

        // Create galleries
        $galleries = Gallery::factory()
            ->count(8)
            ->create()
            ->each(function (Gallery $gallery) use ($categories, $tags) {
                // Only attach categories if we have them
                if ($categories->isNotEmpty()) {
                    $gallery->categories()->attach(
                        $categories->random(min(3, $categories->count()))->pluck('id')
                    );
                }

                // Create images for this gallery
                $images = Image::factory()
                    ->count(rand(5, 20))
                    ->create(['gallery_id' => $gallery->id])
                    ->each(function (Image $image) use ($tags) {
                        // Only attach tags if we have them
                        if ($tags->isNotEmpty()) {
                            $image->tags()->attach(
                                $tags->random(min(5, $tags->count()))->pluck('id')
                            );
                        }
                    });

                // Set cover image if not set
                if (empty($gallery->cover_image) && $images->isNotEmpty()) {
                    $gallery->update([
                        'cover_image' => $images->first()->file_path . $images->first()->file_name
                    ]);
                }

                // Create translations for each gallery
                $this->createTranslations($gallery);
            });

        // Create some images that belong to multiple galleries
        $sharedImages = Image::factory()
            ->count(10)
            ->create(['gallery_id' => null])
            ->each(function (Image $image) use ($galleries, $tags) {
                // Assign to 2-3 random galleries
                if ($galleries->isNotEmpty()) {
                    $image->galleries()->attach(
                        $galleries->random(min(3, $galleries->count()))->pluck('id'),
                        ['order' => rand(0, 50)]
                    );
                }

                // Assign random tags if available
                if ($tags->isNotEmpty()) {
                    $image->tags()->attach(
                        $tags->random(min(5, $tags->count()))->pluck('id')
                    );
                }

                // Create translations for each image
                $this->createTranslations($image);
            });
    }

    protected function ensureCategoriesExist(): void
    {
        $requiredCategories = [
            'Landscape', 'Portrait', 'Architecture', 'Street', 'Nature', 'Art', 'Travel', 'Macro'
        ];

        foreach ($requiredCategories as $categoryName) {
            Category::firstOrCreate(
                ['name' => $categoryName],
                [
                    'slug' => Str::slug($categoryName),
                    'description' => $this->getCategoryDescription($categoryName),
                    'is_active' => true
                ]
            );
        }
    }

    protected function getCategoryDescription(string $categoryName): string
    {
        $descriptions = [
            'Landscape' => 'Beautiful natural and urban landscapes from around the world',
            'Portrait' => 'Emotional human portraits in natural environments',
            'Architecture' => 'Modern and classical architecture from different countries',
            'Street' => 'Everyday life of cities and their inhabitants',
            'Nature' => 'Animals and nature in their natural habitat',
            'Art' => 'Monochromatic compositions focusing on form and light',
            'Travel' => 'Photographs from different countries and cultures',
            'Macro' => 'Amazing world of small details and textures hidden from ordinary view',
        ];

        return $descriptions[$categoryName] ?? 'Photography collection';
    }

    protected function createTranslations($model): void
    {
        $locales = ['en', 'ru', 'eo'];

        foreach ($locales as $locale) {
            if ($model instanceof Gallery) {
                $model->setTranslation('title', $this->getTranslatedTitle($model->title, $locale), $locale);
                $model->setTranslation('description', $this->getTranslatedDescription($model->description, $locale), $locale);
            } elseif ($model instanceof Image) {
                $model->setTranslation('title', $this->getTranslatedTitle($model->title, $locale), $locale);
                $model->setTranslation('description', $this->getTranslatedDescription($model->description, $locale), $locale);
            }
        }
    }

    protected function getTranslatedTitle(string $title, string $locale): string
    {
        $translations = [
            'en' => $title,
            'ru' => "[RU] $title",
            'eo' => "[EO] $title"
        ];

        return $translations[$locale] ?? $title;
    }

    protected function getTranslatedDescription(string $description, string $locale): string
    {
        $translations = [
            'en' => $description,
            'ru' => "[RU] $description",
            'eo' => "[EO] $description"
        ];

        return $translations[$locale] ?? $description;
    }
}

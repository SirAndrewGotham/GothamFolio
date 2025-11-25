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
        // Create empty categories for future use (optional)
        $this->ensureCategoriesExist();

        // Create unique tags with distinct slugs
        $this->ensureTagsExist();

        // Get all tags
        $tags = Tag::all();

        // Create specific galleries
        $this->createGalleries($tags);
    }

    protected function ensureCategoriesExist(): void
    {
        // Create empty categories for future use
        $optionalCategories = [
            'Photography', 'Art', 'Travel', 'Events'
        ];

        foreach ($optionalCategories as $categoryName) {
            Category::firstOrCreate(
                ['name' => $categoryName],
                [
                    'slug' => Str::slug($categoryName),
                    'description' => 'Category for future use',
                    'is_active' => false
                ]
            );
        }
    }

    protected function ensureTagsExist(): void
    {
        $tags = [
            // Nature & Landscape tags
            ['name' => 'Forest', 'slug' => 'forest'],
            ['name' => 'Mountains', 'slug' => 'mountains'],
            ['name' => 'Ocean', 'slug' => 'ocean'],
            ['name' => 'Sunset', 'slug' => 'sunset'],
            ['name' => 'Sunrise', 'slug' => 'sunrise'],
            ['name' => 'Water', 'slug' => 'water'],
            ['name' => 'Reflections', 'slug' => 'reflections'],
            ['name' => 'Trees', 'slug' => 'trees'],
            ['name' => 'Rivers', 'slug' => 'rivers'],

            // Wildlife & Birds tags
            ['name' => 'Wild Animals', 'slug' => 'wild-animals'],
            ['name' => 'Bird Species', 'slug' => 'bird-species'],
            ['name' => 'Animal Portraits', 'slug' => 'animal-portraits'],
            ['name' => 'In Flight', 'slug' => 'in-flight'],
            ['name' => 'Mammals', 'slug' => 'mammals'],
            ['name' => 'Feathers', 'slug' => 'feathers'],

            // Closeup & Macro tags
            ['name' => 'Macro Photography', 'slug' => 'macro-photography'],
            ['name' => 'Closeup Shots', 'slug' => 'closeup-shots'],
            ['name' => 'Fine Details', 'slug' => 'fine-details'],
            ['name' => 'Textures', 'slug' => 'textures'],
            ['name' => 'Flowers', 'slug' => 'flowers'],
            ['name' => 'Insects', 'slug' => 'insects'],
            ['name' => 'Patterns', 'slug' => 'patterns'],

            // City & Urban tags
            ['name' => 'Urban Life', 'slug' => 'urban-life'],
            ['name' => 'Cityscape', 'slug' => 'cityscape'],
            ['name' => 'Architecture', 'slug' => 'architecture'],
            ['name' => 'Street Photography', 'slug' => 'street-photography'],
            ['name' => 'Skyscrapers', 'slug' => 'skyscrapers'],
            ['name' => 'City Lights', 'slug' => 'city-lights'],

            // People tags
            ['name' => 'Portrait', 'slug' => 'portrait'],
            ['name' => 'People', 'slug' => 'people'],
            ['name' => 'Human Emotions', 'slug' => 'human-emotions'],
            ['name' => 'Faces', 'slug' => 'faces'],
            ['name' => 'Expressions', 'slug' => 'expressions'],

            // Theater & Performance tags
            ['name' => 'Live Performance', 'slug' => 'live-performance'],
            ['name' => 'Theater', 'slug' => 'theater'],
            ['name' => 'Drama', 'slug' => 'drama'],
            ['name' => 'Actors', 'slug' => 'actors'],
            ['name' => 'Stage Lighting', 'slug' => 'stage-lighting'],
            ['name' => 'Costumes', 'slug' => 'costumes'],

            // Rock music tags
            ['name' => 'Rock Concert', 'slug' => 'rock-concert'],
            ['name' => 'Music Show', 'slug' => 'music-show'],
            ['name' => 'Guitars', 'slug' => 'guitars'],
            ['name' => 'Drums', 'slug' => 'drums'],
            ['name' => 'Live Music', 'slug' => 'live-music'],
            ['name' => 'Crowd', 'slug' => 'crowd'],
            ['name' => 'Stage Energy', 'slug' => 'stage-energy'],

            // Seasonal tags
            ['name' => 'Winter', 'slug' => 'winter'],
            ['name' => 'Summer', 'slug' => 'summer'],
            ['name' => 'Spring', 'slug' => 'spring'],
            ['name' => 'Autumn', 'slug' => 'autumn'],
        ];

        foreach ($tags as $tag) {
            Tag::firstOrCreate(
                ['slug' => $tag['slug']],
                [
                    'name' => $tag['name'],
                    'slug' => $tag['slug']
                ]
            );
        }
    }

    protected function createGalleries($tags): void
    {
        $galleriesData = [
            'Nature' => [
                'en' => [
                    'title' => 'Nature',
                    'description' => 'The raw beauty of natural environments, flora, and untouched landscapes'
                ],
                'ru' => [
                    'title' => 'Природа',
                    'description' => 'Необработанная красота природных сред, флоры и нетронутых ландшафтов'
                ],
                'eo' => [
                    'title' => 'Naturo',
                    'description' => 'La kruda beleco de naturaj medioj, flaŭro kaj netuŝitaj pejzaĝoj'
                ]
            ],
            'Landscape' => [
                'en' => [
                    'title' => 'Landscape',
                    'description' => 'Breathtaking scenic views from around the world'
                ],
                'ru' => [
                    'title' => 'Пейзаж',
                    'description' => 'Захватывающие дух живописные виды со всего мира'
                ],
                'eo' => [
                    'title' => 'Pejzaĝo',
                    'description' => 'Spirforprenaj pitoreskaj vidajĵoj el la tuta mondo'
                ]
            ],
            'Wildlife' => [
                'en' => [
                    'title' => 'Wildlife',
                    'description' => 'Animals and creatures in their natural habitats and behaviors'
                ],
                'ru' => [
                    'title' => 'Дикая природа',
                    'description' => 'Животные и существа в их естественной среде обитания и поведении'
                ],
                'eo' => [
                    'title' => 'Sovaĝa vivo',
                    'description' => 'Animaloj kaj estaĵoj en iliaj naturaj vivejoj kaj kondutoj'
                ]
            ],
            'Birds' => [
                'en' => [
                    'title' => 'Birds',
                    'description' => 'Avian beauty captured in flight and natural environments'
                ],
                'ru' => [
                    'title' => 'Птицы',
                    'description' => 'Красота птиц, запечатленная в полете и естественной среде'
                ],
                'eo' => [
                    'title' => 'Birdoj',
                    'description' => 'Birda beleco kaptita en flugo kaj naturaj medioj'
                ]
            ],
            'Closeup & Macro' => [
                'en' => [
                    'title' => 'Closeup & Macro',
                    'description' => 'The hidden world revealed through detailed close-up photography'
                ],
                'ru' => [
                    'title' => 'Крупный план и Макро',
                    'description' => 'Скрытый мир, раскрытый через детальную крупноплановую съемку'
                ],
                'eo' => [
                    'title' => 'Proksimuma & Makro',
                    'description' => 'La kaŝita mondo malkaŝita per detala proksimuma fotado'
                ]
            ],
            'City' => [
                'en' => [
                    'title' => 'City',
                    'description' => 'Urban environments, architecture, and the rhythm of city life'
                ],
                'ru' => [
                    'title' => 'Город',
                    'description' => 'Городская среда, архитектура и ритм городской жизни'
                ],
                'eo' => [
                    'title' => 'Urbo',
                    'description' => 'Urbaj medioj, arkitekturo kaj la ritmo de urba vivo'
                ]
            ],
            'People' => [
                'en' => [
                    'title' => 'People',
                    'description' => 'Human portraits capturing emotions and everyday moments'
                ],
                'ru' => [
                    'title' => 'Люди',
                    'description' => 'Человеческие портреты, запечатлевающие эмоции и повседневные моменты'
                ],
                'eo' => [
                    'title' => 'Homoj',
                    'description' => 'Homaj portretoj kaptantaj emociojn kaj ĉiutagajn momentojn'
                ]
            ],
            'Theater' => [
                'en' => [
                    'title' => 'Theater',
                    'description' => 'The dramatic world of stage performances and theatrical expressions'
                ],
                'ru' => [
                    'title' => 'Театр',
                    'description' => 'Драматический мир сценических представлений и театральных выражений'
                ],
                'eo' => [
                    'title' => 'Teatro',
                    'description' => 'La drammondo de scenejaj prezentadoj kaj teatraj esprimoj'
                ]
            ],
            'Rock' => [
                'en' => [
                    'title' => 'Rock',
                    'description' => 'The raw energy and passion of rock music performances'
                ],
                'ru' => [
                    'title' => 'Рок',
                    'description' => 'Необузданная энергия и страсть рок-музыкальных выступлений'
                ],
                'eo' => [
                    'title' => 'Rokenrolo',
                    'description' => 'La kruda energio kaj pasio de rokmuzikaj prezentadoj'
                ]
            ]
        ];

        foreach ($galleriesData as $galleryName => $translations) {
            $gallery = Gallery::create([
                'title' => $translations['en']['title'],
                'description' => $translations['en']['description'],
                'is_active' => true,
                'cover_image' => null
            ]);

            // Add translations for all languages
            foreach ($translations as $locale => $translation) {
                $gallery->setTranslation('title', $translation['title'], $locale);
                $gallery->setTranslation('description', $translation['description'], $locale);
            }

            $gallery->save();

            // Assign relevant tags to each gallery
            $this->assignTagsToGallery($gallery, $galleryName, $tags);
        }
    }

    protected function assignTagsToGallery(Gallery $gallery, string $galleryName, $tags): void
    {
        $tagMapping = [
            'Nature' => ['forest', 'trees', 'rivers', 'water', 'flowers', 'mountains'],
            'Landscape' => ['mountains', 'ocean', 'sunset', 'sunrise', 'forest', 'reflections'],
            'Wildlife' => ['wild-animals', 'mammals', 'animal-portraits', 'forest'],
            'Birds' => ['bird-species', 'in-flight', 'feathers', 'animal-portraits'],
            'Closeup & Macro' => ['macro-photography', 'closeup-shots', 'fine-details', 'textures', 'flowers', 'insects', 'patterns'],
            'City' => ['urban-life', 'cityscape', 'architecture', 'street-photography', 'skyscrapers', 'city-lights'],
            'People' => ['portrait', 'people', 'human-emotions', 'faces', 'expressions'],
            'Theater' => ['live-performance', 'theater', 'drama', 'actors', 'stage-lighting', 'costumes'],
            'Rock' => ['rock-concert', 'music-show', 'live-music', 'guitars', 'drums', 'crowd', 'stage-energy']
        ];

        if (isset($tagMapping[$galleryName])) {
            $relevantTagSlugs = $tagMapping[$galleryName];
            $relevantTags = $tags->whereIn('slug', $relevantTagSlugs);

            if ($relevantTags->isNotEmpty()) {
                $gallery->tags()->attach($relevantTags->pluck('id'));
            }
        }
    }

    protected function createTranslations($model): void
    {
        // This method is kept for compatibility but not used in the new structure
        $locales = ['en', 'ru', 'eo'];

        foreach ($locales as $locale) {
            if ($model instanceof Gallery) {
                $model->setTranslation('title', $model->title, $locale);
                $model->setTranslation('description', $model->description, $locale);
            }
        }

        $model->save();
    }
}

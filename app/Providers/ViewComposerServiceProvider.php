<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Competence;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('pages.blog.*', function ($view) {
            $posts = \App\Models\Post::with(['author', 'categories', 'tags'])
                ->published()
                ->latest('published_at')
                ->paginate(6);

            $languageService = new \App\Services\LanguageService;
            $currentLocale = app()->getLocale();
            $direction = $languageService->isRtl($currentLocale) ? 'rtl' : 'ltr';
            $isRtl = $languageService->isRtl($currentLocale);

            $view->with(compact('posts', 'currentLocale', 'direction', 'isRtl'));
        });

        // Add competences view composer
        View::composer('pages.competences.index', function ($view) {
//            \Log::debug('ViewComposerServiceProvider: competences index called');
            $competences = Competence::with([
                'categories',
                'translations' => function ($query) {
                    $query->where('locale', app()->getLocale());
                },
                'tags'])
                ->where('is_active', true)
                ->orderBy('proficiency', 'desc')
                ->orderBy('years_experience', 'desc')
                ->get();

            $categories = Category::whereHas('competences')
                ->with('translations')
                ->get();

//            \Log::debug('Competences count: ' . $competences->count());
//            \Log::debug('Categories count: ' . $categories->count());

            // Map to the format expected by your Alpine.js component
            $mappedCompetences = $competences->map(function ($competence) {
                return [
                    'id' => $competence->id,
                    'slug' => $competence->slug,
                    'name' => $competence->getTranslation('name'),
                    'description' => $competence->getTranslation('description'),
                    'icon' => $competence->icon,
                    'color' => $competence->color,
                    'proficiency' => $competence->proficiency,
                    'years' => $competence->years_experience,
                    'is_featured' => $competence->is_featured,
                    'featured' => $competence->is_featured,
                    'category' => $competence->categories->first()?->slug ?? 'other',
                    'tags' => $competence->tags->pluck('name')->toArray() ?? [],
                    'link' => url('competences/competences/'.$competence->slug.'/'.app()->getLocale()),
                ];
            });

            $mappedCategories = $categories->map(function ($category) {
                return [
                    'slug' => $category->slug,
                    'name' => $category->getTranslation('name', app()->getLocale()),
                ];
            });

            $view->with([
                'competences' => $mappedCompetences,
                'categories' => $mappedCategories,
            ]);
        });
    }
}

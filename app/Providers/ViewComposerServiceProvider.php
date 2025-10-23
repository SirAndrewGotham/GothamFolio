<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('pages.blog.*', function ($view) {
            $posts = \App\Models\Post::with(['author', 'categories', 'tags'])
                ->published()
                ->latest('published_at')
                ->paginate(6);

            $languageService = new \App\Services\LanguageService();
            $currentLocale = app()->getLocale();
            $direction = $languageService->isRtl($currentLocale) ? 'rtl' : 'ltr';
            $isRtl = $languageService->isRtl($currentLocale);

            $view->with(compact('posts', 'currentLocale', 'direction', 'isRtl'));
        });

        View::composer('pages.blog.post.*', function ($view) {
            $post = \App\Models\Post::with(['author', 'categories', 'tags', 'comments' => function($query) {
                $query->whereNull('parent_id')->with(['replies', 'author', 'votes'])->latest();
            }])
                ->where('slug', $view->getData()['params']['slug'] ?? '')
                ->published()
                ->firstOrFail();

            $post->recordView();

            $relatedPosts = \App\Models\Post::with(['author', 'categories'])
                ->published()
                ->where('id', '!=', $post->id)
                ->whereHas('categories', function($query) use ($post) {
                    $query->whereIn('categories.id', $post->categories->pluck('id'));
                })
                ->latest('published_at')
                ->take(3)
                ->get();

            $languageService = new \App\Services\LanguageService();
            $currentLocale = app()->getLocale();
            $direction = $languageService->isRtl($currentLocale) ? 'rtl' : 'ltr';
            $isRtl = $languageService->isRtl($currentLocale);

            $view->with(compact('post', 'relatedPosts', 'currentLocale', 'direction', 'isRtl'));
        });
    }
}

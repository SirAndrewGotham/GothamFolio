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
    }
}

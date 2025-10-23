<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        View::composer('pages.blog.*', function ($view) {
//            $posts = Post::with(['author', 'categories', 'tags'])
//                ->published()
//                ->latest('published_at')
//                ->paginate(6);
//
//            $languageService = new LanguageService();
//            $currentLocale = app()->getLocale();
//            $direction = $languageService->isRtl($currentLocale) ? 'rtl' : 'ltr';
//            $isRtl = $languageService->isRtl($currentLocale);
//
//            $view->with(compact('posts', 'currentLocale', 'direction', 'isRtl'));
//        });
    }
}

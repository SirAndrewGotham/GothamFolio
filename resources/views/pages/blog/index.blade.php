@php
    use App\Models\Language;use App\Models\Post;
    use App\Services\LanguageService;

    $language = Language::whereCode(app()->getLocale())->first();
    $posts = Post::where('language_id', $language->id)->with(['author', 'categories', 'tags'])
        ->published()
        ->latest('published_at')
        ->paginate(6);

    $currentLocale = app()->getLocale();
    $baseLocale = explode('_', $currentLocale)[0]; // Extract base locale
    $languageService = new LanguageService();
    $direction = $languageService->isRtl($currentLocale) ? 'rtl' : 'ltr';
    $isRtl = $languageService->isRtl($currentLocale);

    // Store the view path in a variable
    $viewPath = 'pages.blog.' . $baseLocale;
@endphp

<x-frontend.layouts.app>
    @include($viewPath, compact('posts', 'currentLocale', 'direction', 'isRtl'))
</x-frontend.layouts.app>

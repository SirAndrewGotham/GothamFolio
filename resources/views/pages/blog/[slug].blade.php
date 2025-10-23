@php
    use App\Models\Post;
    use App\Services\LanguageService;

    // Simple test - just get any post
    $post = Post::published()->first();

    if (!$post) {
        abort(404, 'No published posts found');
    }

    $currentLocale = app()->getLocale();
    $baseLocale = explode('_', $currentLocale)[0];
    $languageService = new LanguageService();
    $direction = $languageService->isRtl($currentLocale) ? 'rtl' : 'ltr';
    $isRtl = $languageService->isRtl($currentLocale);
    $viewPath = 'pages.blog.post.' . $baseLocale;
@endphp

<x-frontend.layouts.app>
    @include($viewPath, [
        'post' => $post,
        'relatedPosts' => collect(),
        'currentLocale' => $currentLocale,
        'direction' => $direction,
        'isRtl' => $isRtl
    ])
</x-frontend.layouts.app>

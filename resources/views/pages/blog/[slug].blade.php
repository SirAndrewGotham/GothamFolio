@php
    use App\Models\Post;
    use App\Services\LanguageService;

    // Get the post by slug from the URL parameter
    $post = Post::published()->where('slug', $slug)->with('categories')->first();

    if (!$post) {
        abort(404, 'Post not found');
    }

    $categories = $post->categories;

    $currentLocale = app()->getLocale();
    $baseLocale = explode('_', $currentLocale)[0];
    $languageService = new LanguageService();
    $direction = $languageService->isRtl($currentLocale) ? 'rtl' : 'ltr';
    $isRtl = $languageService->isRtl($currentLocale);
//    $viewPath = 'pages.blog.post.' . $baseLocale;
    $viewPath = 'pages.blog.single-post';
@endphp

<x-frontend.layouts.app>
    @include($viewPath, [
        'post' => $post,
        'categories' => $categories,
        'relatedPosts' => collect(),
        'currentLocale' => $currentLocale,
        'direction' => $direction,
        'isRtl' => $isRtl
    ])
</x-frontend.layouts.app>

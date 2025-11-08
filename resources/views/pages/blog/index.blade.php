@php
    use App\Models\Language;
    use App\Models\Post;
    use App\Models\Category;

    $currentLocale = app()->getLocale();
    $language = \App\Models\Language::whereCode($currentLocale)->first();

    if (!$language) {
        $language = Language::whereCode('en')->first();
    }

    // Get categories that have posts for the current language
    // Using a simpler approach - get categories from existing posts
    $categories = \App\Models\Post::where('language_id', $language->id)
        ->published()
        ->with('categories')
        ->get()
        ->flatMap(fn($post) => $post->categories)
        ->unique('id')
        ->mapWithKeys(fn($category) => [$category->slug => $category->name])
        ->toArray();

    // Get featured posts
    $featuredPosts = \App\Models\Post::where('language_id', $language->id)
        ->with(['author', 'categories'])
        ->published()
        ->featured()
        ->latest('published_at')
        ->take(2)
        ->get();

    // Get all posts with pagination
    $posts = \App\Models\Post::where('language_id', $language->id)
        ->with(['author', 'categories', 'tags'])
        ->published()
        ->when($selectedCategory !== 'all', function ($query) use ($selectedCategory) {
            $query->whereHas('categories', fn ($categoryQuery) => $categoryQuery->where('slug', $selectedCategory));
        })
        ->latest('published_at')
        ->paginate(9);

    $selectedCategory = request()->input('category', 'all');
@endphp

<x-frontend.layouts.app>
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
        <div class="fluid-container">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ __('gothamfolio.blog.title') }}</h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                    {{ __('gothamfolio.blog.description') }}
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    @foreach(array_slice($categories, 0, 3) as $slug => $name)
                        <div class="flex items-center">
                            <i class="fas fa-{{ $slug === 'programming' ? 'code' : ($slug === 'photography' ? 'camera' : 'lightbulb') }} text-primary-500 mr-2"></i>
                            <span>{{ $name }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="py-16 w-full">
        <div class="fluid-container">
            <!-- Featured Posts -->
            @if($featuredPosts->count() > 0)
                <div class="mb-16 fade-in">
                    <h2 class="text-2xl md:text-3xl font-bold mb-8 flex items-center">
                        <i class="fas fa-star text-primary-500 mr-3"></i>
                        {{ __('gothamfolio.blog.featured_posts') }}
                    </h2>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        @foreach($featuredPosts as $post)
                            <a href="{{ url('/blog', $post->slug) }}"
                               class="blog-card bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                @if($post->featured_image)
                                    <div class="h-64 bg-cover bg-center w-full"
                                         style="background-image: url('{{ asset($post->featured_image) }}')"></div>
                                @else
                                    <div
                                        class="h-64 bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-white text-4xl"></i>
                                    </div>
                                @endif
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        @if($post->categories->count() > 0)
                                            <span
                                                class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm font-medium category-badge">
                                    {{ $post->categories->first()->name }}
                                </span>
                                        @endif
                                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                            <span>{{ $post->published_at->translatedFormat('F j, Y') }}</span>
                                            <span class="mx-2">•</span>
                                            <span>{{ $post->read_time }} {{ __('gothamfolio.blog.min_read') }}</span>
                                        </div>
                                    </div>
                                    <h3 class="text-xl font-bold mb-3">{{ $post->title }}</h3>
                                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}</p>
                                    @if($post->tags->count() > 0)
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($post->tags->take(3) as $tag)
                                                <span
                                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 rounded text-xs">{{ $tag->name }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Category Filter -->
            <div class="mb-12 fade-in">
                <h2 class="text-2xl md:text-3xl font-bold mb-6 flex items-center">
                    <i class="fas fa-filter text-primary-500 mr-3"></i>
                    {{ __('gothamfolio.blog.categories.title') }}
                </h2>

                <div class="flex flex-wrap gap-3">
                    <a href="?category=all"
                       class="px-4 py-2 rounded-lg font-medium transition-all duration-300 category-badge {{ $selectedCategory === 'all' ? 'bg-primary-500 text-white shadow-lg' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-primary-100 dark:hover:bg-primary-900/30 hover:text-primary-700 dark:hover:text-primary-300' }}">
                        {{ __('gothamfolio.blog.all_categories') }}
                    </a>
                    @foreach($categories as $slug => $name)
                        <a href="?category={{ $slug }}"
                           class="px-4 py-2 rounded-lg font-medium transition-all duration-300 category-badge {{ $selectedCategory === $slug ? 'bg-primary-500 text-white shadow-lg' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-primary-100 dark:hover:bg-primary-900/30 hover:text-primary-700 dark:hover:text-primary-300' }}">
                            {{ $name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- All Posts -->
            <div class="pt-8 fade-in">  <!-- Added pt-8 for top padding (2rem = 32px) -->
                <h2 class="text-2xl md:text-3xl font-bold mb-8 flex items-center">
                    <i class="fas fa-newspaper text-primary-500 mr-3"></i>
                    {{ $selectedCategory === 'all' ? __('gothamfolio.blog.all_posts') : ($categories[$selectedCategory] ?? __('gothamfolio.blog.all_posts')) }}
                    <span class="ml-2 text-lg text-gray-500 dark:text-gray-400">({{ $posts->total() }})</span>
                </h2>

                <!-- Blog Posts Grid -->
                @if($posts->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($posts as $post)
                            <a href="{{ url('/blog', $post->slug) }}"
                               class="blog-card bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                @if($post->featured_image)
                                    <div class="h-48 bg-cover bg-center w-full"
                                         style="background-image: url('{{ asset($post->featured_image) }}')"></div>
                                @else
                                    <div
                                        class="h-48 bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-white text-4xl"></i>
                                    </div>
                                @endif
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        @if($post->categories->count() > 0)
                                            <span
                                                class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm font-medium category-badge">
                                    {{ $post->categories->first()->name }}
                                </span>
                                        @endif
                                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                            <span>{{ $post->read_time }} {{ __('gothamfolio.blog.min_read') }}</span>
                                        </div>
                                    </div>
                                    <h3 class="text-xl font-bold mb-3">{{ $post->title }}</h3>
                                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}</p>
                                    <div class="flex items-center justify-between">
                                        <span
                                            class="text-sm text-gray-500 dark:text-gray-400">{{ $post->published_at->translatedFormat('F j, Y') }}</span>
                                        <span class="text-primary-500 font-medium flex items-center">
                                    {{ __('gothamfolio.blog.read_more') }}
                                    <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                </span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12 fade-in">
                        {{ $posts->links() }}
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="text-center py-12">
                        <div
                            class="w-24 h-24 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-400 mx-auto mb-4">
                            <i class="fas fa-search text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('gothamfolio.blog.no_posts_found') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">{{ __('gothamfolio.blog.try_another_category') }}</p>
                        <a href="?category=all"
                           class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                            {{ __('gothamfolio.blog.show_all_posts') }}
                        </a>
                    </div>
                @endif
            </div>

            <!-- Newsletter Subscription -->
            <div class="mt-16 fade-in">
                <div class="bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4">{{ __('gothamfolio.blog.newsletter_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-2xl mx-auto">
                        {{ __('gothamfolio.blog.newsletter_description') }}
                    </p>
                    <div class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="{{ __('gothamfolio.blog.newsletter_placeholder') }}"
                               class="flex-grow px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors">
                        <button
                            class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg whitespace-nowrap">
                            {{ __('gothamfolio.blog.newsletter_button') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.layouts.app>

@push('section-styles')
    <style>
        .blog-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
        }

        .category-badge {
            transition: all 0.3s ease;
        }

        .category-badge:hover {
            transform: scale(1.05);
        }

        .fluid-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        @media (min-width: 768px) {
            .fluid-container {
                padding: 0 2rem;
            }
        }
    </style>
@endpush

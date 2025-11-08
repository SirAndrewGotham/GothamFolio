@php
    use App\Models\Post;
    use App\Models\Language;
    use App\Models\Category;

    $currentLocale = app()->getLocale();
    $language = Language::whereCode($currentLocale)->first();

    if (!$language) {
        $language = Language::whereCode('en')->first();
    }

    // Get all categories for the sidebar - simplest approach
    $categories = Category::where('language_id', $language->id)
        ->get()
        ->mapWithKeys(fn($category) => [$category->slug => $category->name])
        ->toArray();

    // Get all categories for the sidebar - simplest approach
    $categories = Category::where('language_id', $language->id)
        ->get()
        ->mapWithKeys(fn($category) => [$category->slug => $category->name])
        ->toArray();

    // Check if we have categories
    $hasCategories = !empty($categories);

    // Get the post by slug for current language
    $post = Post::where('slug', $slug)
        ->where('language_id', $language->id)
        ->with(['author', 'categories', 'tags'])
        ->published()
        ->firstOrFail();

    // Increment views count
    $post->increment('views_count');

    // Get related posts (same category, same language)
    $relatedPosts = Post::where('language_id', $language->id)
        ->where('id', '!=', $post->id)
        ->whereHas('categories', function($query) use ($post) {
            $query->whereIn('categories.id', $post->categories->pluck('id'));
        })
        ->with(['author', 'categories'])
        ->published()
        ->latest('published_at')
        ->take(3)
        ->get();

    $formatDate = function ($dateString) {
        return \Carbon\Carbon::parse($dateString)->translatedFormat('F j, Y');
    };
@endphp

<x-frontend.layouts.app>
    <!-- Article Header -->
    <section class="py-16 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
        <div class="fluid-container">
            <div class="blog-content fade-in">
                <!-- Breadcrumbs -->
                <nav class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400 mb-6">
                    <a href="/" class="hover:text-primary-500 transition-colors">{{ __('gothamfolio.navigation.home') }}</a>
                    <span class="text-gray-400">/</span>
                    <a href="/blog" class="hover:text-primary-500 transition-colors">{{ __('gothamfolio.navigation.blog') }}</a>
                    @if($post->categories->count() > 0)
                        <span class="text-gray-400">/</span>
                        <a href="/blog?category={{ $post->categories->first()->slug }}" class="hover:text-primary-500 transition-colors">{{ $post->categories->first()->name }}</a>
                    @endif
                    <span class="text-gray-400">/</span>
                    <span class="text-primary-500">{{ __('gothamfolio.blog.article') }}</span>
                </nav>

                <!-- Article Meta -->
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    @if($post->categories->count() > 0)
                        <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm font-medium">
                        {{ $post->categories->first()->name }}
                    </span>
                    @endif
                    <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                        <i class="fas fa-calendar mr-2"></i>
                        <span>{{ $formatDate($post->published_at) }}</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                        <i class="fas fa-clock mr-2"></i>
                        <span>{{ $post->read_time }} {{ __('gothamfolio.blog.min_read') }}</span>
                    </div>
                    @if($post->views_count > 0)
                        <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                            <i class="fas fa-eye mr-2"></i>
                            <span>{{ $post->views_count }} {{ __('gothamfolio.blog.views') }}</span>
                        </div>
                    @endif
                </div>

                <!-- Article Title -->
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900 dark:text-white">
                    {{ $post->title }}
                </h1>

                <!-- Article Excerpt -->
                @if($post->excerpt)
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
                        {{ $post->excerpt }}
                    </p>
                @endif

                <!-- Author Info -->
                <div class="flex items-center space-x-4">
                    @if($post->author)
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-lg">
                            {{ substr($post->author->name, 0, 1) }}
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white">{{ $post->author->name }}</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">{{ $post->author->bio ?? __('gothamfolio.blog.default_bio') }}</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="py-16 w-full">
        <div class="fluid-container">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                <!-- Sidebar -->
                <div class="hidden lg:block fade-in">
                    <div class="sticky top-24 space-y-6">
                        <!-- Table of Contents -->
                        @if($post->toc && count($post->toc) > 0)
                            <div class="table-of-contents">
                                <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white flex items-center">
                                    <i class="fas fa-list-ul mr-2 text-primary-500"></i>
                                    {{ __('gothamfolio.blog.table_of_contents') }}
                                </h3>
                                <nav class="space-y-2">
                                    @foreach($post->toc as $item)
                                        <a href="#{{ $item['id'] }}" class="block text-sm text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1">
                                            {{ $item['text'] }}
                                        </a>
                                    @endforeach
                                </nav>
                            </div>
                        @endif

                        <!-- Categories Block -->
                        @if($post->categories->count() > 0)
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                                <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white flex items-center">
                                    <i class="fas fa-folder mr-2 text-primary-500"></i>
                                    {{ __('gothamfolio.blog.categories.title') }}
                                </h3>
                                <div class="space-y-2">
                                    <a href="/blog?category=all" class="block text-sm text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1">
                                        {{ __('gothamfolio.blog.all_categories') }}
                                    </a>
                                    @foreach($post->categories as $category)
                                        <a href="/blog?category={{ $category->slug }}" class="block text-sm text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1">
                                            {{ $category->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                                <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white flex items-center">
                                    <i class="fas fa-folder mr-2 text-primary-500"></i>
                                    {{ __('gothamfolio.blog.categories.title') }}
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('gothamfolio.blog.no_categories_yet') }}
                                </p>
                            </div>
                        @endif

                        <!-- Share Buttons -->
                        <div class="share-buttons">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-3">{{ __('gothamfolio.blog.share') }}</h4>
                            <div class="flex space-x-3">
                                <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                                <a href="https://vk.com/share.php?url={{ urlencode(url()->current()) }}&title={{ urlencode($post->title) }}" target="_blank" class="w-10 h-10 rounded-lg bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-vk"></i>
                                </a>
                                <a href="https://twitter.com/intent极tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" class="w-10 h-10 rounded-lg bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <button onclick="copyLink()" class="w-10 h-10 rounded-lg bg-gray-600 flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                    <i class="fas fa-link"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="lg:col-span-3">
                    <article class="blog-content fade-in">
                        <!-- Featured Image -->
                        @if($post->featured_image)
                            <div class="mb-8 rounded-xl overflow-hidden">
                                <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 md:h-96 object-cover">
                            </div>
                        @endif

                        <!-- Table of Contents (Mobile) -->
                        @if($post->toc && count($post->toc) > 0)
                            <div class="lg:hidden mb-8">
                                <button onclick="toggleTableOfContents()" class="w-full flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                    <span class="font-semibold">{{ __('gothamfolio.blog.article_contents') }}</span>
                                    <i class="fas fa-chevron-down" id="toc-arrow"></i>
                                </button>
                                <div id="mobile-toc" class="hidden mt-2 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                    <nav class="space-y-2">
                                        @foreach($post->toc as $item)
                                            <a href="#{{ $item['id'] }}" class="block text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1">
                                                {{ $item['text'] }}
                                            </a>
                                        @endforeach
                                    </nav>
                                </div>
                            </div>
                        @endif

                        <!-- Article Body -->
                        <div class="prose prose-lg max-w-none dark:prose-invert">
                            {!! $post->content !!}
                        </div>

                        <!-- Article Tags -->
                        @if($post->tags->count() > 0)
                            <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex flex-wrap gap-2">
                                    @foreach($post->tags as $tag)
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-sm">
                                    {{ $tag->name }}
                                </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Share Buttons (Mobile) -->
                        <div class="lg:hidden mt-8">
                            <div class="share-buttons">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-3 text-center">{{ __('gothamfolio.blog.share_article') }}</h4>
                                <div class="flex justify-center space-x-4">
                                    <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" class="w-12 h-12 rounded-lg bg-blue-500 flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                                        <i class="fab fa-telegram-plane"></i>
                                    </a>
                                    <a href="https://vk.com/share.php?url={{ urlencode(url()->current()) }}&title={{ urlencode($post->title) }}" target="_blank" class="w-12 h-12 rounded-lg bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                        <i class="fab fa-vk"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" class="w-12 h-12 rounded-lg bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <button onclick="copyLink()" class="w-12 h-12 rounded-lg bg-gray-600 flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-link"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Comments Section -->
                    <div class="mt-16">
{{--                        @livewire('blog-comments-volt', ['post' => $post])--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30 w-full">
            <div class="fluid-container">
                <div class="blog-content fade-in">
                    <h2 class="text-3xl font-bold mb-8 text-center">{{ __('gothamfolio.blog.related_posts.title') }}</h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach($relatedPosts as $relatedPost)
                            <a href="{{ url('/blog', $relatedPost->slug) }}" class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                @if($relatedPost->featured_image)
                                    <div class="h-48 bg-cover bg-center w-full" style="background-image: url('{{ asset($relatedPost->featured_image) }}')"></div>
                                @else
                                    <div class="h-48 bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-white text-4xl"></i>
                                    </div>
                                @endif
                                <div class="p-6">
                                    @if($relatedPost->categories->count() > 0)
                                        <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm font-medium mb-3 inline-block">
                                {{ $relatedPost->categories->first()->name }}
                            </span>
                                    @endif
                                    <h3 class="text-xl font-bold mb-3">{{ $relatedPost->title }}</h3>
                                    <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">
                                        {{ $relatedPost->excerpt ?? Str::limit(strip_tags($relatedPost->content), 100) }}
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                        <span>{{ $formatDate($relatedPost->published_at) }}</span>
                                        <span class="mx-2">•</span>
                                        <span>{{ $relatedPost->read_time }} {{ __('gothamfolio.blog.min_read') }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <div class="text-center mt-8">
                        <a href="/blog" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                            <span>{{ __('gothamfolio.blog.view_all_articles') }}</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif
</x-frontend.layouts.app>

@push('section-styles')
    <style>
        .blog-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .blog-content h2 {
            font-size: 1.875rem;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: #1f2937;
        }

        .dark .blog-content h2 {
            color: #f9fafb;
        }

        .blog-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
            color: #374151;
        }

        .dark .blog-content h3 {
            color: #e5e7eb;
        }

        .blog-content p {
            margin-bottom: 1.25rem;
            line-height: 1.7;
            color: #4b5563;
        }

        .dark .blog-content p {
            color: #d1d5db;
        }

        .blog-content ul, .blog-content ol {
            margin-bottom: 1.25rem;
            padding-left: 1.5rem;
        }

        .blog-content li {
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }

        .blog-content blockquote {
            border-left: 4px solid #0ea5e9;
            padding-left: 1.5rem;
            margin: 1.5rem 0;
            font-style: italic;
            color: #6b7280;
        }

        .dark .blog-content blockquote {
            color: #9ca3af;
        }

        .blog-content code {
            background-color: #f3f4f6;
            padding: 0.125rem 0.375rem;
            border-radius: 0.25rem;
            font-family: 'Monaco', 'Consolas', monospace;
            font-size: 0.875rem;
        }

        .dark .blog-content code {
            background-color: #374151;
            color: #e5e7eb;
        }

        .blog-content pre {
            background-color: #1f2937;
            color: #f9fafb;
            padding: 1.25rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin: 1.5rem 0;
        }

        .blog-content img {
            border-radius: 0.75rem;
            margin: 1.5rem 0;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .table-of-contents {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin: 2rem 0;
        }

        .dark .table-of-contents {
            background: linear-gradient(135deg, #1e3a5f 0%, #0c4a6e 100%);
        }

        .share-buttons a {
            transition: transform 0.3s ease;
        }

        .share-buttons a:hover {
            transform: translateY(-2px);
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

@push('scripts')
    <script>
        function toggleTableOfContents() {
            const toc = document.getElementById('mobile-toc');
            const arrow = document.getElementById('toc-arrow');
            toc.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }

        function copyLink() {
            navigator.clipboard.writeText('{{ url()->current() }}').then(() => {
                // Show success message
                const toast = document.createElement('div');
                toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';
                toast.textContent = '{{ __("gothamfolio.blog.link_copied") }}';
                document.body.appendChild(toast);

                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 2000);
            });
        }
    </script>
@endpush

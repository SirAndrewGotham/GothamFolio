<section class="py-16 bg-white dark:bg-gray-900 min-h-screen">
    <div class="fluid-container">
        <!-- Page Header -->
        <div class="text-center mb-12 fade-in">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">{{ __('gothamfolio.blog.title') }}</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                {{ __('gothamfolio.blog.description') }}
            </p>
        </div>

        <!-- Blog Posts Grid -->
        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($posts as $post)
                    <article class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 fade-in">
                        <!-- Featured Image -->
                        @if($post->featured_image)
                            <div class="h-48 bg-cover bg-center w-full" style="background-image: url('{{ asset($post->featured_image) }}')"></div>
                        @else
                            <div class="h-48 bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center">
                                <i class="fas fa-newspaper text-white text-4xl"></i>
                            </div>
                        @endif

                        <div class="p-6">
                            <!-- Meta Information -->
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-3 flex-wrap gap-2">
                                <time datetime="{{ $post->published_at->format('Y-m-d') }}">
                                    {{ $post->published_at->format('F j, Y') }}
                                </time>
                                <span class="mx-1">•</span>
                                <span>{{ $post->read_time }} {{ __('gothamfolio.blog.min_read') }}</span>

                                @if($post->views_count > 0)
                                    <span class="mx-1">•</span>
                                    <span>{{ $post->views_count }} {{ __('gothamfolio.blog.views') }}</span>
                                @endif
                            </div>

                            <!-- Categories -->
                            @if($post->categories->count() > 0)
                                <div class="flex flex-wrap gap-2 mb-3">
                                    @foreach($post->categories as $category)
                                        <span class="px-2 py-1 bg-primary-100 dark:bg-primary-900 text-primary-800 dark:text-primary-200 text-xs rounded-full">
                                            {{ $category->name }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Title -->
                            <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">
                                <a href="/blog/{{ $post->slug }}" class="hover:text-primary-600 transition-colors">
                                    {{ $post->title }}
                                </a>
                            </h2>

                            <!-- Excerpt -->
                            <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                                {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}
                            </p>

                            <!-- Author -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    @if($post->author?->profile_photo_path)
                                        <img src="{{ asset($post->author->profile_photo_path) }}" alt="{{ $post->author?->name ?? __('Anonymous') }}" class="w-8 h-8 rounded-full mr-3">
                                    @else
                                        <div class="w-8 h-8 bg-primary-500 rounded-full flex items-center justify-center text-white text-sm font-medium mr-3">
                                            {{ isset($post->author) ? substr($post->author->name, 0, 1) : 'A' }}
                                        </div>
                                    @endif
                                    <span class="text-sm text-gray-600 dark:text-gray-400">
                                        {{ $post->author->name ?? __('Anonymous') }}
                                    </span>
                                </div>

                                <!-- Read More -->
                                <a href="/blog/{{ $post->slug }}"
                                   class="text-primary-500 hover:text-primary-600 font-medium inline-flex items-center text-sm">
                                    {{ __('gothamfolio.blog.read_more') }}
                                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($posts->hasPages())
                <div class="flex justify-center mt-12">
                    <nav class="flex items-center space-x-2">
                        <!-- Previous Page Link -->
                        @if($posts->onFirstPage())
                            <span class="px-3 py-2 text-gray-400 dark:text-gray-600 border border-gray-300 dark:border-gray-700 rounded-md cursor-not-allowed">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                        @else
                            <a href="{{ $posts->previousPageUrl() }}"
                               class="px-3 py-2 text-primary-600 dark:text-primary-400 border border-primary-300 dark:border-primary-700 rounded-md hover:bg-primary-50 dark:hover:bg-primary-900/20 transition-colors">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        @endif

                        <!-- Page Numbers -->
                        @foreach($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                            @if($page == $posts->currentPage())
                                <span class="px-3 py-2 bg-primary-600 text-white rounded-md font-medium">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}"
                                   class="px-3 py-2 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-700 rounded-md hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach

                        <!-- Next Page Link -->
                        @if($posts->hasMorePages())
                            <a href="{{ $posts->nextPageUrl() }}"
                               class="px-3 py-2 text-primary-600 dark:text-primary-400 border border-primary-300 dark:border-primary-700 rounded-md hover:bg-primary-50 dark:hover:bg-primary-900/20 transition-colors">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        @else
                            <span class="px-3 py-2 text-gray-400 dark:text-gray-600 border border-gray-300 dark:border-gray-700 rounded-md cursor-not-allowed">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        @endif
                    </nav>
                </div>
            @endif

        @else
            <!-- No Posts Message -->
            <div class="text-center py-16 fade-in">
                <div class="w-24 h-24 bg-primary-100 dark:bg-primary-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-newspaper text-primary-600 dark:text-primary-400 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">{{ __('gothamfolio.blog.no_articles_yet') }}</h3>
                <p class="text-gray-600 dark:text-gray-400 max-w-md mx-auto">
                    {{ __('gothamfolio.blog.no_articles_description') }}
                </p>
            </div>
        @endif
    </div>
</section>

<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
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

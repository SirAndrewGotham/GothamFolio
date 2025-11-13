<x-frontend.layouts.app>
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
        <div class="fluid-container">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900 dark:text-white">
                    {{ __('gothamfolio.blog.title') }}
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                    {{ __('gothamfolio.blog.subtitle') }}
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="flex items-center text-gray-600 dark:text-gray-400">
                        <i class="fas fa-code text-primary-500 mr-2"></i>
                        <span>{{ __('gothamfolio.blog.categories.programming') }}</span>
                    </div>
                    <div class="flex items-center text-gray-600 dark:text-gray-400">
                        <i class="fas fa-camera text-primary-500 mr-2"></i>
                        <span>{{ __('gothamfolio.blog.categories.photography') }}</span>
                    </div>
                    <div class="flex items-center text-gray-600 dark:text-gray-400">
                        <i class="fas fa-lightbulb text-primary-500 mr-2"></i>
                        <span>{{ __('gothamfolio.blog.categories.tips') }}</span>
                    </div>
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
                    <h2 class="text-2xl md:text-3xl font-bold mb-8 flex items-center text-gray-900 dark:text-white">
                        <i class="fas fa-star text-primary-500 mr-3"></i>
                        {{ __('gothamfolio.blog.featured_posts') }}
                    </h2>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        @foreach($featuredPosts as $post)
                            <a href="{{ route('blog.show', $post->slug) }}" class="blog-card bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                @if($post->featured_image)
                                    <div class="h-64 bg-cover bg-center w-full" style="background-image: url('{{ asset($post->featured_image) }}')"></div>
                                @else
                                    <div class="h-64 bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-white text-4xl"></i>
                                    </div>
                                @endif
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        @if($post->categories->count() > 0)
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm font-medium category-badge">
                                    {{ $post->categories->first()->getTranslation('name') }}
                                </span>
                                        @endif
                                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                            <span>{{ $post->published_at->format('M j, Y') }}</span>
                                            <span class="mx-2">•</span>
                                            <span>{{ $post->read_time }} {{ __('gothamfolio.blog.min_read') }}</span>
                                        </div>
                                    </div>
                                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">{{ $post->title }}</h3>
                                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}</p>
                                    @if($post->tags->count() > 0)
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($post->tags->take(3) as $tag)
                                                <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 rounded text-xs">{{ $tag->name }}</span>
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
                <h2 class="text-2xl md:text-3xl font-bold mb-6 flex items-center text-gray-900 dark:text-white">
                    <i class="fas fa-filter text-primary-500 mr-3"></i>
                    {{ __('gothamfolio.blog.categories.title') }}
                </h2>

                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('blog.index') }}" class="px-4 py-2 rounded-lg font-medium transition-all duration-300 category-badge {{ !request()->has('category') ? 'bg-primary-500 text-white shadow-lg' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-primary-100 dark:hover:bg-primary-900/30 hover:text-primary-700 dark:hover:text-primary-300' }}">
                        {{ __('gothamfolio.blog.all_categories') }}
                    </a>
                    @foreach($categories as $slug => $name)
                        <a href="{{ route('blog.index', ['category' => $slug]) }}" class="px-4 py-2 rounded-lg font-medium transition-all duration-300 category-badge {{ request('category') == $slug ? 'bg-primary-500 text-white shadow-lg' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-primary-100 dark:hover:bg-primary-900/30 hover:text-primary-700 dark:hover:text-primary-300' }}">
                            {{ $name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- All Posts -->
            <div class="fade-in">
                <h2 class="text-2xl md:text-3xl font-bold mb-8 flex items-center text-gray-900 dark:text-white">
                    <i class="fas fa-newspaper text-primary-500 mr-3"></i>
                    @if(request()->has('category') && request('category') !== 'all')
                        {{ $categories[request('category')] ?? __('gothamfolio.blog.all_categories') }}
                    @else
                        {{ __('gothamfolio.blog.all_categories') }}
                    @endif
                    <span class="ml-2 text-lg text-gray-500 dark:text-gray-400">({{ $posts->total() }})</span>
                </h2>

                @if($posts->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($posts as $post)
                            <a href="{{ route('blog.show', $post->slug) }}" class="blog-card bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                @if($post->featured_image)
                                    <div class="h-48 bg-cover bg-center w-full" style="background-image: url('{{ asset($post->featured_image) }}')"></div>
                                @else
                                    <div class="h-48 bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-white text-4xl"></i>
                                    </div>
                                @endif
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        @if($post->categories->count() > 0)
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm font-medium category-badge">
                                                {{ $post->categories->first()->getTranslation('name') }}
                                            </span>
                                        @endif
                                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                            <span>{{ $post->read_time }} {{ __('gothamfolio.blog.min_read') }}</span>
                                        </div>
                                    </div>
                                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">{{ $post->title }}</h3>
                                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 100) }}</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $post->published_at->format('M j, Y') }}</span>
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
                    <div class="mt-12">
                        {{ $posts->links() }}
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="text-center py-12">
                        <div class="w-24 h-24 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-400 mx-auto mb-4">
                            <i class="fas fa-search text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">{{ __('gothamfolio.blog.no_posts_found') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">{{ __('gothamfolio.blog.try_another_category') }}</p>
                        <a href="{{ route('blog.index') }}" class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                            {{ __('gothamfolio.blog.show_all_posts') }}
                        </a>
                    </div>
                @endif
            </div>

            <!-- Newsletter Subscription -->
            <div class="mt-16 fade-in">
                <div class="bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">{{ __('gothamfolio.blog.newsletter.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-2xl mx-auto">
                        {{ __('gothamfolio.blog.newsletter.description') }}
                    </p>
                    <div class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="{{ __('gothamfolio.blog.newsletter.placeholder') }}" class="flex-grow px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors">
                        <button class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg whitespace-nowrap">
                            {{ __('gothamfolio.blog.newsletter.subscribe') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.layouts.app>

<x-frontend.layouts.app>
    <!-- Article Header -->
    <section class="py-16 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
        <div class="fluid-container">
            <div class="blog-content fade-in">
                <!-- Breadcrumbs -->
                <nav class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400 mb-6">
                    <a href="/" class="hover:text-primary-500 transition-colors">{{ __('gothamfolio.navigation.home') }}</a>
                    <span class="text-gray-400">/</span>
                    <a href="{{ route('blog.index') }}"
                       class="hover:text-primary-500 transition-colors">{{ __('gothamfolio.navigation.blog') }}</a>
                    @if($post->categories->count() > 0)
                        <span class="text-gray-400">/</span>
                        <a href="{{ route('blog.index', ['category' => $post->categories->first()->slug]) }}"
                           class="hover:text-primary-500 transition-colors">
                            {{ $post->categories->first()->getTranslation('name') }}
                        </a>
                    @endif
                    <span class="text-gray-400">/</span>
                    <span class="text-primary-500">{{ __('gothamfolio.blog.article') }}</span>
                </nav>

                <!-- Article Meta -->
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    @if($post->categories->count() > 0)
                        <span
                            class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm font-medium">
                        {{ $post->categories->first()->getTranslation('name') }}
                    </span>
                    @endif
                    <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                        <i class="fas fa-calendar mr-2"></i>
                        <span>{{ $post->published_at->format('F j, Y') }}</span>
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
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-lg">
                            {{ substr($post->author->name, 0, 1) }}
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white">{{ $post->author->name }}</div>
                            <div
                                class="text-sm text-gray-600 dark:text-gray-400">{{ $post->author->bio ?? __('gothamfolio.blog.default_bio') }}</div>
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
                        <!-- Table of Contents (Desktop) -->
                        @if($post->toc && count($post->toc) > 0)
                            <div class="table-of-contents">
                                <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white flex items-center">
                                    <i class="fas fa-list-ul mr-2 text-primary-500"></i>
                                    {{ __('gothamfolio.blog.table_of_contents') }}
                                </h3>
                                <nav class="space-y-2">
                                    @foreach($post->toc as $item)
                                        <a href="#{{ $item['id'] }}"
                                           class="block text-sm text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1">
                                            {{ $item['text'] }}
                                        </a>
                                    @endforeach
                                </nav>
                            </div>
                        @endif

                        <!-- Categories Block -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                            <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white flex items-center">
                                <i class="fas fa-folder mr-2 text-primary-500"></i>
                                {{ __('gothamfolio.blog.categories.title') }}
                            </h3>
                            <div class="space-y-2">
                                <a href="{{ route('blog.index') }}"
                                   class="block text-sm text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1">
                                    {{ __('gothamfolio.blog.all_categories') }}
                                </a>
                                @foreach($post->categories as $category)
                                    <a href="{{ route('blog.index', ['category' => $category->slug]) }}"
                                       class="block text-sm text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1">
                                        {{ $category->getTranslation('name') }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Share Buttons -->
                        <div class="share-buttons">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-3">{{ __('gothamfolio.blog.share') }}</h4>
                            <div class="flex space-x-3">
                                <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                   target="_blank"
                                   class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                                <a href="https://vk.com/share.php?url={{ urlencode(url()->current()) }}&title={{ urlencode($post->title) }}"
                                   target="_blank"
                                   class="w-10 h-10 rounded-lg bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-vk"></a>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                   target="_blank"
                                   class="w-10 h-10 rounded-lg bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <button onclick="copyLink()"
                                        class="w-10 h-10 rounded-lg bg-gray-600 flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
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
                                <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}"
                                     class="w-full h-64 md:h-96 object-cover">
                            </div>
                        @endif

                        <!-- Table of Contents (Mobile) - This should be the ONLY mobile TOC -->
                        @if($post->toc && count($post->toc) > 0)
                            <div class="lg:hidden mb-8">
                                <button
                                    class="w-full flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                    <span class="font-semibold">{{ __('gothamfolio.blog.article_contents') }}</span>
                                    <i class="fas fa-chevron-down transition-transform"></i>
                                </button>
                                <div class="mt-2 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                    <nav class="space-y-2">
                                        @foreach($post->toc as $item)
                                            <a href="#{{ $item['id'] }}"
                                               class="block text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1">
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
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-4">{{ __('gothamfolio.blog.tags') }}</h3>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($post->tags as $tag)
                                        <span
                                            class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-sm">
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
                                    <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                       target="_blank"
                                       class="w-12 h-12 rounded-lg bg-blue-500 flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                                        <i class="fab fa-telegram-plane"></i>
                                    </a>
                                    <a href="https://vk.com/share.php?url={{ urlencode(url()->current()) }}&title={{ urlencode($post->title) }}"
                                       target="_blank"
                                       class="w-12 h-12 rounded-lg bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                        <i class="fab fa-vk"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                       target="_blank"
                                       class="w-12 h-12 rounded-lg bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <button onclick="copyLink()"
                                            class="w-12 h-12 rounded-lg bg-gray-600 flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-link"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30 w-full">
            <div class="fluid-container">
                <div class="blog-content fade-in">
                    <h2 class="text-3xl font-bold mb-8 text-center text-gray-900 dark:text-white">{{ __('gothamfolio.blog.related_posts.title') }}</h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach($relatedPosts as $relatedPost)
                            <a href="{{ route('blog.show', $relatedPost->slug) }}"
                               class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                                @if($relatedPost->featured_image)
                                    <div class="h-48 bg-cover bg-center w-full"
                                         style="background-image: url('{{ asset($relatedPost->featured_image) }}')"></div>
                                @else
                                    <div
                                        class="h-48 bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-white text-4xl"></i>
                                    </div>
                                @endif

                                <div class="p-6">
                                    @if($relatedPost->categories->count() > 0)
                                        <span
                                            class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm font-medium mb-3 inline-block">
                                {{ $relatedPost->categories->first()->getTranslation('name') }}
                            </span>
                                    @endif

                                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">{{ $relatedPost->title }}</h3>

                                    <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">
                                        {{ $relatedPost->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($relatedPost->content), 100) }}
                                    </p>

                                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                        <span>{{ $relatedPost->published_at->format('M j, Y') }}</span>
                                        <span class="mx-2">•</span>
                                        <span>{{ $relatedPost->read_time }} {{ __('gothamfolio.blog.min_read') }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <div class="text-center mt-8">
                        <a href="{{ route('blog.index') }}"
                           class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                            <span>{{ __('gothamfolio.blog.view_all_articles') }}</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

{{--    @push('scripts')--}}
{{--        <script>--}}
{{--            // Add Alpine.js component for blog post functionality--}}
{{--            Alpine.data('blogPost', () => ({--}}

{{--            }));--}}

{{--            function copyLink() {--}}
{{--                navigator.clipboard.writeText('{{ url()->current() }}').then(() => {--}}
{{--                    // Show success message--}}
{{--                    const toast = document.createElement('div');--}}
{{--                    toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';--}}
{{--                    toast.textContent = '{{ __("gothamfolio.blog.link_copied") }}';--}}
{{--                    document.body.appendChild(toast);--}}

{{--                    setTimeout(() => {--}}
{{--                        document.body.removeChild(toast);--}}
{{--                    }, 2000);--}}
{{--                });--}}
{{--            }--}}
{{--        </script>--}}
{{--    @endpush--}}
</x-frontend.layouts.app>

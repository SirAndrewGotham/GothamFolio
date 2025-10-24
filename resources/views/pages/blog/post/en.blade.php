@php
    use App\Services\LanguageService;

    // DEBUG: Check what variables are received
//    error_log("DEBUG: In language view - post: " . (isset($post) ? 'EXISTS' : 'NULL'));
//    error_log("DEBUG: In language view - relatedPosts: " . (isset($relatedPosts) ? 'EXISTS' : 'NULL'));
//    error_log("DEBUG: In language view - currentLocale: " . (isset($currentLocale) ? $currentLocale : 'NULL'));

    $currentLocale = app()->getLocale();
    $baseLocale = explode('_', $currentLocale)[0];
    $languageService = new LanguageService();
    $direction = $languageService->isRtl($currentLocale) ? 'rtl' : 'ltr';
    $isRtl = $languageService->isRtl($currentLocale);
@endphp

<section class="py-12 bg-white dark:bg-gray-900 min-h-screen">
    <div class="fluid-container">
        <!-- Breadcrumb -->
        <nav class="flex mb-8 text-sm text-gray-600 dark:text-gray-400">
            <a href="/" class="hover:text-primary-600 transition-colors">Home</a>
            <span class="mx-2">/</span>
            <a href="/blog" class="hover:text-primary-600 transition-colors">Blog</a>
            <span class="mx-2">/</span>
            <span class="text-gray-900 dark:text-white">{{ $post?->title ?? 'Unknown Post' }}</span>
        </nav>

        <!-- Article Header -->
        <article class="max-w-4xl mx-auto">
            <!-- Featured Image -->
            @if($post->featured_image)
                <div class="rounded-xl overflow-hidden mb-8 fade-in">
                    <img src="{{ asset($post->featured_image) }}"
                         alt="{{ $post->title }}"
                         class="w-full h-64 md:h-96 object-cover">
                </div>
            @endif

            <!-- Meta Information -->
            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400 mb-6 flex-wrap gap-4">
                <time datetime="{{ $post->published_at->format('Y-m-d') }}" class="flex items-center">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    {{ $post->published_at->format('F j, Y') }}
                </time>

                <span class="flex items-center">
                    <i class="fas fa-clock mr-2"></i>
                    {{ $post->read_time }} min read
                </span>

                <span class="flex items-center">
                    <i class="fas fa-eye mr-2"></i>
                    {{ $post->views_count }} views
                </span>
            </div>

            <!-- Categories -->
            @if($post->categories->count() > 0)
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach($post->categories as $category)
                        <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900 text-primary-800 dark:text-primary-200 text-sm rounded-full">
                            {{ $category->name }}
                        </span>
                    @endforeach
                </div>
            @endif

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6 fade-in">
                {{ $post->title }}
            </h1>

            <!-- Author Info -->
            <div class="flex items-center mb-8 p-6 bg-gray-50 dark:bg-gray-800 rounded-xl fade-in">
                @if($post->author->profile_photo_path)
                    <img src="{{ asset($post->author->profile_photo_path) }}"
                         alt="{{ $post->author->name }}"
                         class="w-12 h-12 rounded-full mr-4">
                @else
                    <div class="w-12 h-12 bg-primary-500 rounded-full flex items-center justify-center text-white font-medium mr-4">
                        {{ substr($post->author->name, 0, 1) }}
                    </div>
                @endif
                <div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">{{ $post->author->name }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Article author</p>
                </div>
            </div>

            <!-- Article Content -->
            <div class="prose prose-lg dark:prose-invert max-w-none mb-12 fade-in">
                {!! $post->content !!}
            </div>

            <!-- Tags -->
            @if($post->tags->count() > 0)
                <div class="flex flex-wrap gap-2 mb-8 fade-in">
                    <span class="text-sm font-medium text-gray-900 dark:text-white mr-2">Tags:</span>
                    @foreach($post->tags as $tag)
                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm rounded">
                            #{{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            @endif

            <!-- Social Sharing -->
            <div class="flex items-center gap-4 mb-12 fade-in">
                <span class="text-sm font-medium text-gray-900 dark:text-white">Share:</span>
                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}"
                   target="_blank"
                   class="w-10 h-10 bg-blue-500 hover:bg-blue-600 text-white rounded-full flex items-center justify-center transition-colors">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                   target="_blank"
                   class="w-10 h-10 bg-blue-700 hover:bg-blue-800 text-white rounded-full flex items-center justify-center transition-colors">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                   target="_blank"
                   class="w-10 h-10 bg-blue-600 hover:bg-blue-700 text-white rounded-full flex items-center justify-center transition-colors">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </article>

        <!-- Related Posts -->
        @if($relatedPosts->count() > 0)
            <section class="mt-16 fade-in">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">
                    Related Articles
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedPosts as $relatedPost)
                        <article class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                            @if($relatedPost->featured_image)
                                <div class="h-40 bg-cover bg-center" style="background-image: url('{{ asset($relatedPost->featured_image) }}')"></div>
                            @endif
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2 line-clamp-2">
                                    <a href="/blog/{{ $relatedPost->slug }}" class="hover:text-primary-600 transition-colors">
                                        {{ $relatedPost->title }}
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-3 line-clamp-2">
                                    {{ $relatedPost->excerpt ?? Str::limit(strip_tags($relatedPost->content), 100) }}
                                </p>
                                <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                                    <time>{{ $relatedPost->published_at->format('M j, Y') }}</time>
                                    <span>{{ $relatedPost->read_time }} min read</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif

        <!-- Comments Section -->
        @if($post->allow_comments)
            <section class="mt-16 max-w-4xl mx-auto fade-in">
                @livewire('blog-comments-volt', ['post' => $post], key('comments-' . $post->id))
            </section>
        @endif
    </div>
</section>

<!-- JavaScript for Reply Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Reply button functionality
        document.querySelectorAll('.reply-btn').forEach(button => {
            button.addEventListener('click', function() {
                const commentId = this.getAttribute('data-comment-id');
                const replyForm = document.querySelector(`.reply-form[data-parent-id="${commentId}"]`);

                // Hide all other reply forms
                document.querySelectorAll('.reply-form').forEach(form => {
                    if (form !== replyForm) {
                        form.classList.add('hidden');
                    }
                });

                // Toggle current reply form
                replyForm.classList.toggle('hidden');
            });
        });

        // Cancel reply functionality
        document.querySelectorAll('.cancel-reply').forEach(button => {
            button.addEventListener('click', function() {
                const form = this.closest('.reply-form');
                form.classList.add('hidden');
            });
        });
    });
</script>

<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
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

    .prose {
        color: inherit;
    }

    .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
        color: inherit;
        margin-top: 1.5em;
        margin-bottom: 0.5em;
    }

    .prose p {
        margin-bottom: 1em;
        line-height: 1.7;
    }

    .prose ul, .prose ol {
        margin-bottom: 1em;
        padding-left: 1.5em;
    }

    .prose li {
        margin-bottom: 0.5em;
    }

    .prose blockquote {
        border-left: 4px solid #3b82f6;
        padding-left: 1em;
        margin: 1.5em 0;
        font-style: italic;
    }

    .prose code {
        background-color: #f3f4f6;
        padding: 0.2em 0.4em;
        border-radius: 0.25em;
        font-size: 0.9em;
    }

    .prose pre {
        background-color: #1f2937;
        color: #f9fafb;
        padding: 1em;
        border-radius: 0.5em;
        overflow-x: auto;
        margin: 1.5em 0;
    }

    .prose a {
        color: #3b82f6;
        text-decoration: underline;
    }

    /* Dark mode styles */
    .dark .prose code {
        background-color: #374151;
    }

    .fade-in {
        animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

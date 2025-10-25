@push('section-styles')
    <style>
        /* Blog content container */
        .blog-content {
            max-width: 800px;
            margin: 0 auto;
        }

        /* OVERRIDE: Ensure fade-in elements are visible even if JS fails */
        .fade-in {
            opacity: 1 !important; /* Force visibility */
            transform: translateY(0) !important; /* Remove initial transform */
            /* Keep transition for any JS that might work */
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        /* Blog typography */
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

        /* Blog blockquote */
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

        /* Blog code blocks */
        .blog-content code {
            background-color: #f3f4f6;
            padding: 0.125rem 0.375rem;
            border-radius: 0.25rem;
            font-family: 'Monaco', 'Consolas', 'Monaco', monospace;
            font-size: 0.875rem;
            color: #1f2937;
        }

        .dark .blog-content code {
            background-color: #374151;
            color: #e5e7eb;
        }

        .blog-content pre {
            background-color: #f8fafc;
            color: #1f2937;
            padding: 1.25rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin: 1.5rem 0;
            border: 1px solid #e5e7eb;
            font-family: 'Monaco', 'Consolas', 'Monaco', monospace;
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .dark .blog-content pre {
            background-color: #1f2937;
            color: #f9fafb;
            border: 1px solid #374151;
        }

        /* Blog images */
        .blog-content img {
            border-radius: 0.75rem;
            margin: 1.5rem 0;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        /* Table of contents */
        .table-of-contents {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin: 2rem 0;
        }

        .dark .table-of-contents {
            background: linear-gradient(135deg, #1e3a5f 0%, #0c4a6e 100%);
        }

        /* Ensure left column is always visible on large screens */
        @media (min-width: 1024px) {
            .toc-lg-visible .hidden.lg\:block {
                display: block !important;
            }
        }

        /* Make sure content has proper contrast */
        .table-of-contents,
        .bg-white,
        .bg-gray-50,
        .bg-gray-100 {
            color: #374151;
        }

        .dark .table-of-contents,
        .dark .bg-gray-800 {
            color: #e5e7eb;
        }
    </style>
@endpush

<div class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300">
    <div x-data="{
        darkMode: localStorage.getItem('darkMode') === 'true',
        mobileMenuOpen: false,
        activeSection: 'blog',
        showTableOfContents: false,
        replyForms: {},
        init() {
            // Set initial theme
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            }

            // Intersection Observer for fade-in animations
            const fadeElements = document.querySelectorAll('.fade-in');
            const fadeObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            fadeElements.forEach(el => fadeObserver.observe(el));
        },
        toggleDarkMode() {
            this.darkMode = !this.darkMode;
            localStorage.setItem('darkMode', this.darkMode);
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        },
        scrollToSection(sectionId) {
            this.mobileMenuOpen = false;
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        },
        shareOnSocial(platform) {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            let shareUrl = '';

            switch(platform) {
                case 'telegram':
                    shareUrl = `https://t.me/share/url?url=${url}&text=${title}`;
                    break;
                case 'vk':
                    shareUrl = `https://vk.com/share.php?url=${url}&title=${title}`;
                    break;
                case 'twitter':
                    shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                    break;
            }

            if (shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400,noopener,noreferrer');
            }
        },
        toggleReplyForm(commentId) {
            if (!this.replyForms[commentId]) {
                this.replyForms[commentId] = false;
            }
            this.replyForms[commentId] = !this.replyForms[commentId];
        },
        submitReply(commentId) {
            // In a real application, this would submit to a backend
            alert('Reply submitted! In a real application, this would be sent to the server.');
            this.replyForms[commentId] = false;
        },
        toggleLike(button) {
            const countElement = button.querySelector('span');
            const isActive = button.classList.contains('active');

            if (isActive) {
                button.classList.remove('active');
                countElement.textContent = parseInt(countElement.textContent) - 1;
            } else {
                button.classList.add('active');
                countElement.textContent = parseInt(countElement.textContent) + 1;
            }
        },
        copyLink() {
            navigator.clipboard.writeText(window.location.href).then(() => {
                alert('{{ __('gothamfolio.blog.link_copied') }}');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        },
        copyLinkMobile() {
            navigator.clipboard.writeText(window.location.href).then(() => {
                alert('{{ __('gothamfolio.blog.link_copied') }}');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
    }" class="min-h-screen">

        <!-- Main Content -->
        <main class="w-full pt-20">
            <!-- Article Header -->
            <section class="py-16 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="blog-content fade-in">
                        <!-- Breadcrumbs -->
                        <nav class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400 mb-6">
                            <a href="/" class="hover:text-primary-500 transition-colors">{{ __('gothamfolio.navigation.home') }}</a>
                            <span class="text-gray-400">/</span>
                            <a href="/blog" class="hover:text-primary-500 transition-colors">{{ __('gothamfolio.navigation.blog') }}</a>
                            <span class="text-gray-400">/</span>
                            <a href="/blog/category/{{ $post->categories->first()->slug ?? 'programming' }}"
                               class="hover:text-primary-500 transition-colors">{{ $post->categories->first()->name ?? __('gothamfolio.blog.categories.programming') }}</a>
                            <span class="text-gray-400">/</span>
                            <span class="text-primary-500">{{ __('gothamfolio.blog.article') }}</span>
                        </nav>

                        <!-- Article Meta -->
                        <div class="flex flex-wrap items-center gap-4 mb-6">
                            @foreach($post->categories as $category)
                                <span
                                    class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm font-medium">
                                {{ $category->name }}
                            </span>
                            @endforeach
                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-calendar mr-2"></i>
                                <span>{{ $post->published_at->translatedFormat(__('gothamfolio.blog.date_format')) }}</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-clock mr-2"></i>
                                <span>{{ $post->read_time }} {{ __('gothamfolio.blog.min_read') }}</span>
                            </div>
                        </div>

                        <!-- Article Title -->
                        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900 dark:text-white">
                            {{ $post->title }}
                        </h1>

                        <!-- Article Excerpt -->
                        <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
                            {{ $post->excerpt }}
                        </p>

                        <!-- Author Info -->
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-12 h-12 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-lg">
                                {{ substr($post->author->name, 0, 1) }}
                            </div>
                            <div>
                                <div
                                    class="font-semibold text-gray-900 dark:text-white">{{ $post->author->name }}</div>
                                <div
                                    class="text-sm text-gray-600 dark:text-gray-400">{{ $post->author->bio ?? __('gothamfolio.blog.default_bio') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Article Content -->
            <section class="py-16 w-full">
                <div class="fluid-container">
                    {{-- Left column --}}
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">

                        <!-- Table of Contents (Desktop) -->
                        <div class="hidden lg:block fade-in">
                            @if($post->toc && count($post->toc) > 0)
                                <div class="table-of-contents">
                                    <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white flex items-center">
                                        <i class="fas fa-list-ul mr-2 text-primary-500"></i>
                                        {{ __('gothamfolio.blog.table_of_contents') }}
                                    </h3>
                                    <nav class="space-y-2">
                                        @foreach($post->toc as $item)
                                            @php
                                                $pad = [
                                                  2 => 'pl-0', 3 => 'pl-2', 4 => 'pl-4', 5 => 'pl-6'
                                                ][$item['level']] ?? 'pl-0';
                                            @endphp
                                            <a href="#{{ $item['id'] }}" class="block text-sm text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1 {{ $pad }}">
                                                {{ $item['text'] }}
                                            </a>
                                        @endforeach
                                    </nav>
                                </div>
                            @else
                                {{--                                    <p class="text-sm text-gray-500 dark:text-gray-400 italic">--}}
                                {{--                                        No table of contents available--}}
                                {{--                                    </p>--}}
                                {{--                                            </nav>--}}
                            @endif

                            <!-- Categories Section -->
                            <div
                                class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-200 dark:border-gray-700">
                                <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white flex items-center">
                                    <i class="fas fa-folder mr-2 text-primary-500"></i>
                                    {{ __('gothamfolio.blog.categories.title') }}
                                </h3>
                                <div class="space-y-3">
                                    @foreach($categories as $category)
                                        <a href="/blog/category/{{ $category->slug }}"
                                           class="flex items-center justify-between group">
                                                <span
                                                    class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-primary-500 transition-colors">
                                                    {{ $category->name }}
                                                </span>
                                            <span
                                                class="text-xs bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 px-2 py-1 rounded-full">
                                                    {{ $category->posts_count }}
                                                </span>
                                        </a>
                                    @endforeach
                                </div>
                                <a href="/blog/categories"
                                   class="block mt-4 text-sm text-primary-500 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                    {{ __('gothamfolio.blog.view_all_categories') }} →
                                </a>
                            </div>

                            <!-- Share Buttons -->
                            <div class="mt-6 share-buttons">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-3">{{ __('gothamfolio.blog.share') }}</h4>
                                <div class="flex space-x-3">
                                    <button @click="shareOnSocial('telegram')"
                                            class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                                        <i class="fab fa-telegram-plane"></i>
                                    </button>
                                    <button @click="shareOnSocial('vk')"
                                            class="w-10 h-10 rounded-lg bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                        <i class="fab fa-vk"></i>
                                    </button>
                                    <button @click="shareOnSocial('twitter')"
                                            class="w-10 h-10 rounded-lg bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button @click="copyLink()" id="copy-link-btn"
                                            class="w-10 h-10 rounded-lg bg-gray-600 flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                        <i class="fas fa-link"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{--// Left column --}}

                        {{-- Right column --}}
                        <!-- Article Content -->
                        <div class="lg:col-span-3">
                            <article class="blog-content fade-in">
                                <!-- Featured Image -->
                                @if($post->featured_image)
                                    <div class="mb-8 rounded-xl overflow-hidden">
                                        <img src="{{ $post->featured_image }}"
                                             alt="{{ $post->title }}"
                                             class="w-full h-64 md:h-96 object-cover">
                                    </div>
                                @endif

                                <!-- Table of Contents (Mobile) -->
                                <div class="lg:hidden mb-8">
                                    <button @click="showTableOfContents = !showTableOfContents"
                                            class="w-full flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                        <span class="font-semibold">{{ __('gothamfolio.blog.article_contents') }}</span>
                                        <i class="fas fa-chevron-down transition-transform"
                                           :class="showTableOfContents ? 'rotate-180' : ''"></i>
                                    </button>
                                    <div x-show="showTableOfContents"
                                         class="mt-2 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                        <nav class="space-y-2">
                                            @if($post->toc && count($post->toc) > 0)
                                                @foreach($post->toc as $item)
                                                    @php
                                                        $pad = [
                                                          2 => 'pl-0', 3 => 'pl-2', 4 => 'pl-4', 5 => 'pl-6'
                                                        ][$item['level']] ?? 'pl-0';
                                                    @endphp
                                                    <a href="#{{ $item['id'] }}"
                                                       class="block text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors py-1 {{ $pad }}">
                                                        {{ $item['text'] }}
                                                    </a>
                                                @endforeach
                                            @else
                                                {{--                                                    <p class="text-sm text-gray-500 dark:text-gray-400 italic">--}}
                                                {{--                                                        No table of contents available--}}
                                                {{--                                                    </p>--}}
                                            @endif
                                        </nav>
                                    </div>
                                </div>

                                <!-- Article Body -->
                                <div class="prose prose-lg max-w-none dark:prose-invert">
                                    {!! $post->content !!}
                                </div>

                                <!-- Article Tags -->
                                <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($post->tags as $tag)
                                            <span
                                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-sm">
                                        {{ $tag->name }}
                                    </span>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Share Buttons (Mobile) -->
                                <div class="lg:hidden mt-8">
                                    <div class="share-buttons">
                                        <h4 class="font-semibold text-gray-900 dark:text-white mb-3 text-center">
                                            {{ __('gothamfolio.blog.share_article') }}</h4>
                                        <div class="flex justify-center space-x-4">
                                            <button @click="shareOnSocial('telegram')"
                                                    class="w-12 h-12 rounded-lg bg-blue-500 flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                                                <i class="fab fa-telegram-plane"></i>
                                            </button>
                                            <button @click="shareOnSocial('vk')"
                                                    class="w-12 h-12 rounded-lg bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                                <i class="fab fa-vk"></i>
                                            </button>
                                            <button @click="shareOnSocial('twitter')"
                                                    class="w-12 h-12 rounded-lg bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                                <i class="fab fa-twitter"></i>
                                            </button>
                                            <button @click="copyLinkMobile()" id="copy-link-btn-mobile"
                                                    class="w-12 h-12 rounded-lg bg-gray-600 flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                                <i class="fas fa-link"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--// Main Article Content -->

                            <!-- Comments Section -->
                            <section class="py-16 w-full" id="comments">
                                <div class="fluid-container">
                                    <div class="blog-content fade-in">
                                        <!-- Comments Header -->
                                        <div class="flex items-center justify-between mb-8">
                                            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">
                                                {{ __('gothamfolio.blog.comments.title') }}
                                            </h2>
                                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                                <i class="fas fa-comments mr-2"></i>
                                                <span
                                                    id="comments-count">{{ $post->comments->count() }} {{ __('gothamfolio.blog.comments.comments_count') }}</span>
                                            </div>
                                        </div>

                                        <!-- Comments Toggle (Admin Control) -->
                                        <div
                                            x-data="{ commentsEnabled: {{ config('gothamfolio.comments.allow_comments') ? 'true' : 'false' }} }"
                                            class="mb-8 p-6 bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <h3 class="font-semibold text-gray-900 dark:text-white mb-1">
                                                        {{ config('gothamfolio.comments.allow_comments') ? __('gothamfolio.blog.comments.enabled') : __('gothamfolio.blog.comments.disabled') }}
                                                    </h3>
                                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                                        {{ config('gothamfolio.comments.allow_comments') ? __('gothamfolio.blog.comments.enabled_description') : __('gothamfolio.blog.comments.disabled_description') }}
                                                    </p>
                                                </div>
                                                <div
                                                    class="px-3 py-1 {{ config('gothamfolio.comments.allow_comments') ? 'bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300' : 'bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300' }} rounded-full text-sm font-medium">
                                                    <i class="fas {{ config('gothamfolio.comments.allow_comments') ? 'fa-check-circle' : 'fa-times-circle' }} mr-1"></i>
                                                    {{ config('gothamfolio.comments.allow_comments') ? __('gothamfolio.blog.comments.enabled_status') : __('gothamfolio.blog.comments.disabled_status') }}
                                                </div>
                                            </div>
                                        </div>

                                        @if(config('gothamfolio.comments.allow_comments'))
                                            <!-- Comment Form -->
                                            <div class="mb-8">
                                                <form x-data="{
                            name: '',
                            email: '',
                            comment: '',
                            isSubmitting: false,
                            async submitComment() {
                                this.isSubmitting = true;
                                // Simulate API call
                                await new Promise(resolve => setTimeout(resolve, 1000));
                                // Reset form
                                this.name = '';
                                this.email = '';
                                this.comment = '';
                                this.isSubmitting = false;
                                // Show success message
                                alert('{{ __('gothamfolio.blog.comments.submit_success') }}');
                            }
                        }" @submit.prevent="submitComment" class="space-y-4">
                                                    <div class="grid md:grid-cols-2 gap-4">
                                                        <div>
                                                            <label for="name"
                                                                   class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                                                {{ __('gothamfolio.blog.comments.name_label') }} *
                                                            </label>
                                                            <input type="text" id="name" x-model="name" required
                                                                   class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                                                        </div>
                                                        <div>
                                                            <label for="email"
                                                                   class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                                                {{ __('gothamfolio.blog.comments.email_label') }} *
                                                            </label>
                                                            <input type="email" id="email" x-model="email" required
                                                                   class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="comment"
                                                               class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                                            {{ __('gothamfolio.blog.comments.comment_label') }} *
                                                        </label>
                                                        <textarea id="comment" x-model="comment" rows="5" required
                                                                  class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white"></textarea>
                                                    </div>
                                                    <div class="flex items-center justify-between">
                                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                                            {{ __('gothamfolio.blog.comments.privacy_notice') }}
                                                        </p>
                                                        <button type="submit"
                                                                :disabled="isSubmitting || !name || !email || !comment"
                                                                :class="{'opacity-50 cursor-not-allowed': isSubmitting || !name || !email || !comment}"
                                                                class="px-6 py-2 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                                                            <span x-show="!isSubmitting">{{ __('gothamfolio.blog.comments.submit_button') }}</span>
                                                            <span x-show="isSubmitting" class="flex items-center">
                                        <i class="fas fa-spinner fa-spin mr-2"></i>
                                        {{ __('gothamfolio.blog.comments.submitting') }}
                                    </span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif

                                        <!-- Comments List -->
                                        <div id="comments-list" class="space-y-6">
                                            @foreach($post->comments->whereNull('parent_id') as $comment)
                                                <div
                                                    class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
                                                    <div class="flex items-start space-x-4">
                                                        <img
                                                            src="https://ui-avatars.com/api/?name={{ urlencode($comment->author->name ?? $comment->name) }}&background=0ea5e9&color=fff"
                                                            alt="{{ $comment->author->name ?? $comment->name }}"
                                                            class="w-10 h-10 rounded-full">
                                                        <div class="flex-1">
                                                            <div class="flex items-center justify-between mb-2">
                                                                <div>
                                                                    <h4 class="font-semibold text-gray-900 dark:text-white">{{ $comment->author->name ?? $comment->name }}</h4>
                                                                    <div
                                                                        class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400">
                                                                        <span>{{ $comment->created_at->translatedFormat(__('gothamfolio.blog.date_format')) }}</span>
                                                                        <span>•</span>
                                                                        <span>{{ $comment->created_at->format('H:i') }}</span>
                                                                        @if($comment->author && $comment->author->id === $post->author_id)
                                                                            <span>•</span>
                                                                            <span
                                                                                class="text-primary-500">{{ __('gothamfolio.blog.comments.author_badge') }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <button
                                                                    class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                            </div>
                                                            <p class="text-gray-700 dark:text-gray-300 mb-3">
                                                                {{ $comment->content }}
                                                            </p>
                                                            <div
                                                                class="flex items-center space-x-4 comment-actions">
                                                                <button @click="toggleLike($el)"
                                                                        class="flex items-center space-x-1 text-sm text-gray-600 dark:text-gray-400 hover:text-primary-500 transition-colors">
                                                                    <i class="far fa-thumbs-up"></i>
                                                                    <span>{{ $comment->likes_count }}</span>
                                                                </button>
                                                                <button @click="toggleLike($el)"
                                                                        class="flex items-center space-x-1 text-sm text-gray-600 dark:text-gray-400 hover:text-red-500 transition-colors">
                                                                    <i class="far fa-thumbs-down"></i>
                                                                    <span>{{ $comment->dislikes_count }}</span>
                                                                </button>
                                                                @if(config('gothamfolio.comments.allow_comments'))
                                                                    <button
                                                                        @click="toggleReplyForm('comment{{ $comment->id }}')"
                                                                        class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-500 transition-colors">
                                                                        {{ __('gothamfolio.blog.comments.reply_button') }}
                                                                    </button>
                                                                @endif
                                                            </div>

                                                            <!-- Reply Form -->
                                                            @if(config('gothamfolio.comments.allow_comments'))
                                                                <div
                                                                    x-show="replyForms['comment{{ $comment->id }}']"
                                                                    class="mt-4 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                                                        <textarea placeholder="{{ __('gothamfolio.blog.comments.reply_placeholder') }}"
                                                                                  rows="3"
                                                                                  class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white mb-2"></textarea>
                                                                    <div class="flex justify-end space-x-2">
                                                                        <button
                                                                            @click="replyForms['comment{{ $comment->id }}'] = false"
                                                                            class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors">
                                                                            {{ __('gothamfolio.blog.comments.cancel_button') }}
                                                                        </button>
                                                                        <button
                                                                            @click="submitReply('comment{{ $comment->id }}')"
                                                                            class="px-4 py-2 bg-primary-500 hover:bg-primary-600 text-white rounded-lg transition-colors">
                                                                            {{ __('gothamfolio.blog.comments.submit_reply_button') }}
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <!-- Replies to Comment -->
                                                    @if($comment->replies->count() > 0)
                                                        <div
                                                            class="comment-reply mt-4 space-y-4 ml-4 pl-4 border-l-2 border-gray-200 dark:border-gray-600">
                                                            @foreach($comment->replies as $reply)
                                                                <div
                                                                    class="p-4 first:pt-0 bg-gray-50 dark:bg-gray-700 rounded-lg {{ !$loop->last ? 'mt-3' : '' }}">
                                                                    <div class="flex items-start space-x-3">
                                                                        <img
                                                                            src="https://ui-avatars.com/api/?name={{ urlencode($reply->author->name ?? $reply->name) }}&background=8b5cf6&color=fff"
                                                                            alt="{{ $reply->author->name ?? $reply->name }}"
                                                                            class="w-8 h-8 rounded-full">
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="flex items-center justify-between mb-1">
                                                                                <div>
                                                                                    <h5 class="font-semibold text-gray-900 dark:text-white">{{ $reply->author->name ?? $reply->name }}</h5>
                                                                                    <div
                                                                                        class="flex items-center space-x-2 text-xs text-gray-600 dark:text-gray-400">
                                                                                        <span>{{ $reply->created_at->translatedFormat(__('gothamfolio.blog.date_format')) }}</span>
                                                                                        <span>•</span>
                                                                                        <span>{{ $reply->created_at->format('H:i') }}</span>
                                                                                        @if($reply->author && $reply->author->id === $post->author_id)
                                                                                            <span>•</span>
                                                                                            <span
                                                                                                class="text-primary-500">{{ __('gothamfolio.blog.comments.author_badge') }}</span>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-gray-700 dark:text-gray-300 text-sm">
                                                                                {{ $reply->content }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach

                                            @if($post->comments->count() === 0)
                                                <div class="text-center py-12">
                                                    <i class="fas fa-comments text-4xl text-gray-300 dark:text-gray-600 mb-4"></i>
                                                    <h3 class="text-xl font-semibold text-gray-600 dark:text-gray-400 mb-2">
                                                        {{ __('gothamfolio.blog.comments.no_comments_yet') }}</h3>
                                                    <p class="text-gray-500 dark:text-gray-500">{{ __('gothamfolio.blog.comments.first_to_share') }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--// Comments Section -->
                        </div>
                        {{--// Right column --}}
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

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

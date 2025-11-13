<?php

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use function Livewire\Volt\{computed};

$recentPosts = computed(fn() => Post::published()
    ->with(['categories', 'author', 'language'])
    ->where(function ($query) {
        // Get posts in current language or fallback language
        // Get posts in current language or fallback language
        $languageService = app(\App\Services\LanguageService::class);
        $currentLanguage = $languageService->getCurrentLanguage();
        $fallbackLanguage = $languageService->getFallbackLanguage();

        $currentLanguageId = $currentLanguage ? $currentLanguage->id : null;
        $fallbackLanguageId = $fallbackLanguage ? $fallbackLanguage->id : null;

        $query->where('language_id', $currentLanguageId)
            ->orWhere(function ($q) use ($fallbackLanguageId, $currentLanguageId) {
                $q->where('language_id', $fallbackLanguageId)
                    ->whereNotExists(function ($existsQ) use ($currentLanguageId) {
                        $existsQ->select(DB::raw(1))
                            ->from('posts as p2')
                            ->whereRaw('p2.post_id = posts.post_id')
                            ->where('language_id', $currentLanguageId);
                    });
            });
    })
    ->orderBy('published_at', 'desc')
    ->limit(2)
    ->get());

?>

@volt('blog-component')
<section id="blog" class="py-16 bg-gray-50 dark:bg-gray-800/30 w-full">
    <div class="fluid-container">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 fade-in">{{ __('gothamfolio.blog.title') }}</h2>

        @if($this->recentPosts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($this->recentPosts as $post)
            <a href="{{ url('/blog/' . $post->slug) }}" class="group block bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg fade-in transition-transform hover:scale-105">
                <!-- Post Image -->
                <div class="h-48 bg-cover bg-center w-full" style="background-image: url('{{ $post->featured_image ?? asset('assets/frontend/img/blog/default.jpg') }}')">
                    @if(!$post->featured_image)
                    <div class="w-full h-full bg-gradient-to-r from-primary-400 to-purple-500 flex items-center justify-center">
                        <i class="fas fa-newspaper text-white text-5xl"></i>
                    </div>
                    @endif
                </div>

                <div class="p-6">
                    <!-- Post Meta -->
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-2">
                        <span>{{ $post->published_at?->format('d M Y') ?? $post->created_at->format('d M Y') }}</span>
                        @if($post->categories->count() > 0)
                        <span class="mx-2">•</span>
                        <span>{{ $post->categories->first()->name }}</span>
                        @endif
                    </div>

                    <!-- Post Title -->
                    <h3 class="text-xl font-bold mb-3 group-hover:text-primary-500 transition-colors">{{ $post->title }}</h3>

                    <!-- Post Excerpt -->
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        {{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}
                    </p>

                    <!-- Read More Link (now just decorative) -->
                    <div class="text-primary-500 font-medium inline-flex items-center">
                        <span>{{ __('gothamfolio.blog.read_more') }}</span>
                        <i class="fas fa-arrow-right ml-2 text-sm group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @else
        <!-- No Articles Placeholder -->
        <div class="text-center py-12 fade-in">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8">
                <i class="fas fa-newspaper text-5xl text-gray-400 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">{{ __('gothamfolio.blog.no_articles_yet') }}</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    {{ __('gothamfolio.blog.no_articles_description') }}
                </p>
            </div>
        </div>
        @endif

        <div class="text-center mt-12 fade-in">
            <a href="{{ url('/blog') }}" class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors inline-flex items-center">
                <span>{{ __('gothamfolio.blog.view_all_articles') }}</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endvolt

@volt('single-gallery')
<?php

//use App\Models\Gallery;
use function Livewire\Volt\{state, computed, mount};

state([
    'gallery' => null,
    'images' => [],
    'sortBy' => 'order',
    'lightboxOpen' => false,
    'currentImageIndex' => 0,
]);

$gallery = computed(function () {
    $slug = request()->route('slug');
    return App\Models\Gallery::with(['categories', 'translations', 'publishedImages.tags', 'publishedImages.translations'])
        ->where('slug', $slug)
        ->published()
        ->firstOrFail();
});

$images = computed(function () {
    return $this->gallery->publishedImages()
        ->with(['tags', 'translations'])
        ->ordered()
        ->get();
});

$sortedImages = computed(function () {
    $images = $this->images;

    switch ($this->sortBy) {
        case 'date':
            return $images->sortByDesc('year');
        case 'name':
            return $images->sortBy('title');
        case 'category':
            return $images->sortBy(function ($image) {
                return $image->tags->first()?->name ?? '';
            });
        default:
            return $images;
    }
});

$currentImage = computed(function () {
    return $this->sortedImages[$this->currentImageIndex] ?? null;
});

mount(function () {
    $this->gallery = $this->gallery();
    $this->images = $this->images();
});

$openLightbox = function ($image) {
    $this->currentImageIndex = $this->sortedImages->search(function ($img) use ($image) {
        return $img->id === $image->id;
    });
    $this->lightboxOpen = true;
};

$navigateLightbox = function ($direction) {
    $this->currentImageIndex = ($this->currentImageIndex + $direction + $this->sortedImages->count()) % $this->sortedImages->count();
};

?>

<x-frontend.layouts.app>

    <x-slot name="title">{{ $gallery()->getTranslation('title') }} - {{ __('gothamfolio.galleries.title') }}</x-slot>

    <div x-data="{
        lightboxOpen: {{ $lightboxOpen ? 'true' : 'false' }},
        currentImageIndex: {{ $currentImageIndex }},
        sortBy: '{{ $sortBy }}',
        images: @js($sortedImages),
        openLightbox(image) {
            this.currentImageIndex = this.images.findIndex(img => img.id === image.id);
            this.lightboxOpen = true;
            document.body.style.overflow = 'hidden';
        },
        navigateLightbox(direction) {
            this.currentImageIndex = (this.currentImageIndex + direction + this.images.length) % this.images.length;
        },
        closeLightbox() {
            this.lightboxOpen = false;
            document.body.style.overflow = '';
        },
        init() {
            // Keyboard navigation for lightbox
            document.addEventListener('keydown', (e) => {
                if (this.lightboxOpen) {
                    if (e.key === 'Escape') this.closeLightbox();
                    if (e.key === 'ArrowLeft') this.navigateLightbox(-1);
                    if (e.key === 'ArrowRight') this.navigateLightbox(1);
                }
            });

            // Setup animations
            this.setupAnimations();
        },
        setupAnimations() {
            const fadeElements = document.querySelectorAll('.fade-in');
            const fadeObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            fadeElements.forEach(el => fadeObserver.observe(el));
        }
    }" class="min-h-screen">

        <!-- Breadcrumbs -->
        <section class="py-6 bg-gray-50 dark:bg-gray-800/30 border-b border-gray-200 dark:border-gray-700">
            <div class="fluid-container">
                <nav class="flex fade-in" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="/" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/galleries" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    {{ __('gothamfolio.gallery.breadcrumb') }}
                                </a>
                            </div>
                        </li>
                        @if($gallery()->categories->isNotEmpty())
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <a href="/galleries?category={{ $gallery()->categories->first()->slug }}" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        {{ $gallery()->categories->first()->name }}
                                    </a>
                                </div>
                            </li>
                        @endif
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    {{ $gallery()->getTranslation('title') }}
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Gallery Hero Section -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Gallery Info -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">{{ $gallery()->getTranslation('title') }}</h1>
                                <div class="flex items-center space-x-4">
                                    @if($gallery()->categories->isNotEmpty())
                                        <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-leaf mr-1 text-xs"></i>
                                        {{ $gallery()->categories->first()->name }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                {{ $gallery()->getTranslation('description') }}
                            </p>

                            <!-- Gallery Stats -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-500 mr-3">
                                        <i class="fas fa-images"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">{{ $images()->count() }}</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.gallery.stats.photos') }}</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">{{ $gallery()->year }}</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.gallery.stats.year') }}</div>
                                    </div>
                                </div>
                                @if($gallery()->categories->isNotEmpty())
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-camera"></i>
                                        </div>
                                        <div>
                                            <div class="text-lg font-bold text-gray-800 dark:text-gray-200">{{ $gallery()->categories->first()->name }}</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.gallery.stats.style') }}</div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <!-- Gallery Description -->
                            <div class="mt-8 bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                                <h3 class="text-lg font-semibold mb-3 text-emerald-600 dark:text-emerald-400">{{ __('gothamfolio.gallery.about') }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">
                                    {{ $gallery()->getTranslation('description') }}
                                </p>
                                @if($images()->isNotEmpty() && $images()->first()->tags->isNotEmpty())
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($images()->first()->tags->take(4) as $tag)
                                            <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-lg text-sm">
                                        {{ $tag->name }}
                                    </span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Featured Photo -->
                        <div class="flex-shrink-0 lg:w-96">
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                                <img src="{{ $images()->isNotEmpty() ? $images()->first()->file_path . $images()->first()->file_name : $gallery()->cover_image }}"
                                     alt="{{ $images()->isNotEmpty() ? $images()->first()->getTranslation('title') : $gallery()->getTranslation('title') }}"
                                     class="w-full h-64 lg:h-96 object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                                    <div class="text-white">
                                        <h3 class="text-xl font-bold mb-2">{{ $images()->isNotEmpty() ? $images()->first()->getTranslation('title') : 'Featured Image' }}</h3>
                                        <p class="text-emerald-100 text-sm">{{ $images()->isNotEmpty() ? $images()->first()->getTranslation('description') : '' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Photography Techniques -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">{{ __('gothamfolio.gallery.techniques') }}</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-500 mx-auto mb-4">
                                <i class="fas fa-search-plus text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-3">{{ __('gothamfolio.galleries.techniques_magnification') }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                {{ __('gothamfolio.galleries.techniques_magnification_description') }}
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mx-auto mb-4">
                                <i class="fas fa-sun text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-3">{{ __('gothamfolio.galleries.techniques_lighting') }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                {{ __('gothamfolio.galleries.techniques_lighting_description') }}
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-4">
                                <i class="fas fa-ruler-combined text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-3">{{ __('gothamfolio.galleries.techniques_depth') }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                {{ __('gothamfolio.galleries.techniques_depth_description') }}
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mx-auto mb-4">
                                <i class="fas fa-hand-holding-usd text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-3">{{ __('gothamfolio.galleries.techniques_stability') }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                {{ __('gothamfolio.galleries.techniques_stability_description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Photo Gallery -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-12 fade-in">
                        <h2 class="text-3xl font-bold mb-4 lg:mb-0">{{ __('gothamfolio.galleries.title') }}</h2>
                        <div class="flex items-center space-x-4">
                            <span class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.galleries.sort_by') }}:</span>
                            <select x-model="sortBy" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-colors">
                                <option value="order">{{ __('gothamfolio.galleries.sort_options.order') }}</option>
                                <option value="date">{{ __('gothamfolio.galleries.sort_options.date') }}</option>
                                <option value="name">{{ __('gothamfolio.galleries.sort_options.name') }}</option>
                                <option value="category">{{ __('gothamfolio.galleries.sort_options.category') }}</option>
                            </select>
                        </div>
                    </div>

                    <!-- Masonry Photo Grid -->
                    <div class="masonry-grid fade-in">
                        <template x-for="(image, index) in images" :key="image.id">
                            <div class="masonry-item">
                                <div class="photo-card">
                                    <div class="relative overflow-hidden">
                                        <img :src="image.file_path + image.file_name" :alt="image.title" class="photo-image">
                                        <div class="photo-overlay text-white">
                                            <h3 class="text-lg font-bold mb-2" x-text="image.title"></h3>
                                            <p class="text-sm text-gray-200 mb-3" x-text="image.description"></p>
                                            <div class="flex items-center justify-between text-xs">
                                                <span x-text="image.tags[0]?.name || ''"></span>
                                                <span x-text="image.year"></span>
                                            </div>
                                        </div>
                                        <div class="absolute top-4 right-4">
                                            <button @click="openLightbox(image)" class="w-8 h-8 rounded-full bg-black/50 hover:bg-black/70 flex items-center justify-center text-white transition-colors">
                                                <i class="fas fa-expand text-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-semibold mb-2" x-text="image.title"></h3>
                                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-3" x-text="image.description"></p>
                                        <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                                            <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded text-xs"
                                                  x-text="image.tags[0]?.name || ''"></span>
                                            <span x-text="image.year"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </section>

        <!-- Equipment & Settings -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">{{ __('gothamfolio.galleries.equipment') }} & {{ __('gothamfolio.gallery.settings') }}</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <div class="fade-in">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-camera text-emerald-500 mr-3"></i>
                                {{ __('gothamfolio.gallery.equipment') }}
                            </h3>
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-500 mr-4 flex-shrink-0">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2">{{ __('gothamfolio.galleries.equipment_cameras') }}</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Sony A7 III — {{ __('gothamfolio.gallery.equipment_primary') }}</li>
                                            <li>• Canon EOS R6 — {{ __('gothamfolio.gallery.equipment_backup') }}</li>
                                            <li>• Fujifilm X-T4 — {{ __('gothamfolio.gallery.equipment_mobile') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-12 h-12 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-4 flex-shrink-0">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2">{{ __('gothamfolio.galleries.equipment_lenses') }}</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Sony 90mm f/2.8 Macro G OSS</li>
                                            <li>• Canon EF 100mm f/2.8L Macro IS USM</li>
                                            <li>• Laowa 100mm f/2.8 2X Ultra Macro APO</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-12 h-12 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-4 flex-shrink-0">
                                        <i class="fas fa-sliders-h"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2">{{ __('gothamfolio.galleries.equipment_accessories') }}</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• {{ __('gothamfolio.gallery.equipment_tripods') }}</li>
                                            <li>• {{ __('gothamfolio.gallery.equipment_flashes') }}</li>
                                            <li>• {{ __('gothamfolio.gallery.equipment_rails') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fade-in">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-orange-500 mr-3"></i>
                                {{ __('gothamfolio.gallery.typical_settings') }}
                            </h3>
                            <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6">
                                <div class="space-y-4">
                                    <div class="flex justify-between items-center py-2 border-b border-gray-200 dark:border-gray-600">
                                        <span class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.gallery.settings_aperture') }}</span>
                                        <span class="font-semibold">f/8 - f/16</span>
                                    </div>
                                    <div class="flex justify-between items-center py-2 border-b border-gray-200 dark:border-gray-600">
                                        <span class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.gallery.settings_shutter') }}</span>
                                        <span class="font-semibold">1/125 - 1/250 {{ __('gothamfolio.gallery.settings_seconds') }}</span>
                                    </div>
                                    <div class="flex justify-between items-center py-2 border-b border-gray-200 dark:border-gray-600">
                                        <span class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.gallery.settings_iso') }}</span>
                                        <span class="font-semibold">100 - 400</span>
                                    </div>
                                    <div class="flex justify-between items-center py-2 border-b border-gray-200 dark:border-gray-600">
                                        <span class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.gallery.settings_wb') }}</span>
                                        <span class="font-semibold">{{ __('gothamfolio.gallery.settings_auto') }} / {{ __('gothamfolio.gallery.settings_daylight') }}</span>
                                    </div>
                                    <div class="flex justify-between items-center py-2">
                                        <span class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.gallery.settings_focus') }}</span>
                                        <span class="font-semibold">{{ __('gothamfolio.gallery.settings_manual') }}</span>
                                    </div>
                                </div>
                                <div class="mt-6 p-4 bg-emerald-50 dark:bg-emerald-900/20 rounded-lg">
                                    <h4 class="font-semibold mb-2 text-emerald-700 dark:text-emerald-300">{{ __('gothamfolio.gallery.tip') }}</h4>
                                    <p class="text-sm text-emerald-600 dark:text-emerald-400">
                                        {{ __('gothamfolio.gallery.tip_description') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 bg-gradient-to-r from-emerald-500 to-green-500 text-white">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">{{ __('gothamfolio.galleries.community') }}</h2>
                    <p class="text-xl mb-8 opacity-90">
                        {{ __('gothamfolio.galleries.community_text') }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://t.me/FotoEsperanta" target="_blank" class="inline-flex items-center px-8 py-3 bg-white text-emerald-600 rounded-lg font-medium transition-colors shadow-lg hover:bg-gray-100">
                            <i class="fab fa-telegram mr-2"></i>
                            <span>Telegram Community</span>
                        </a>
                        <a href="/galleries" class="inline-flex items-center px-8 py-3 border border-white text-white hover:bg-white hover:text-emerald-600 rounded-lg font-medium transition-colors">
                            <i class="fas fa-images mr-2"></i>
                            <span>{{ __('gothamfolio.galleries.all_galleries') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lightbox Modal -->
        <div x-show="lightboxOpen" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 p-4" x-cloak>
            <div class="relative max-w-6xl max-h-full w-full">
                <button @click="closeLightbox()" class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors z-10">
                    <i class="fas fa-times text-2xl"></i>
                </button>

                <div class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden max-w-4xl mx-auto">
                    <img :src="images[currentImageIndex]?.file_path + images[currentImageIndex]?.file_name"
                         :alt="images[currentImageIndex]?.title"
                         class="w-full max-h-[70vh] object-contain">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2" x-text="images[currentImageIndex]?.title"></h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4" x-text="images[currentImageIndex]?.description"></p>
                        <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                            <div class="flex items-center space-x-4">
                                <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded"
                                      x-text="images[currentImageIndex]?.tags[0]?.name || ''"></span>
                                <span x-text="images[currentImageIndex]?.year"></span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span x-text="images[currentImageIndex]?.camera_model"></span>
                                <span x-text="images[currentImageIndex]?.camera_settings"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <button @click="navigateLightbox(-1)"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors z-10">
                    <i class="fas fa-chevron-left text-2xl"></i>
                </button>
                <button @click="navigateLightbox(1)"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors z-10">
                    <i class="fas fa-chevron-right text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
@endvolt

@push('section-styles')
    <style>
        /* Photo-specific styles for single gallery view */
        .photo-card {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .photo-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .photo-image {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .photo-card:hover .photo-image {
            transform: scale(1.05);
        }

        .photo-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 60%);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
        }

        .photo-card:hover .photo-overlay {
            opacity: 1;
        }

        /* Masonry grid styles (if not already included from index) */
        .masonry-grid {
            column-count: 3;
            column-gap: 1.5rem;
        }

        @media (max-width: 1024px) {
            .masonry-grid {
                column-count: 2;
            }
        }

        @media (max-width: 640px) {
            .masonry-grid {
                column-count: 1;
            }
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }

        /* Lightbox enhancements */
        .lightbox-image {
            max-height: 70vh;
            object-fit: contain;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Additional JavaScript for gallery functionality if needed
        document.addEventListener('DOMContentLoaded', function() {
            // Keyboard navigation for lightbox (already in Alpine, but backup)
            document.addEventListener('keydown', function(e) {
                const lightbox = document.querySelector('[x-show="lightboxOpen"]');
                if (lightbox && lightbox.__x.$data.lightboxOpen) {
                    if (e.key === 'Escape') {
                        lightbox.__x.$data.closeLightbox();
                    }
                    if (e.key === 'ArrowLeft') {
                        lightbox.__x.$data.navigateLightbox(-1);
                    }
                    if (e.key === 'ArrowRight') {
                        lightbox.__x.$data.navigateLightbox(1);
                    }
                }
            });
        });
    </script>
@endpush

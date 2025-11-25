@php
    use App\Models\Language;
    use App\Models\Gallery;
    use App\Models\Category;

    $currentLocale = app()->getLocale();
    $language = Language::whereCode($currentLocale)->first();

    if (!$language) {
        $language = Language::whereCode('en')->first();
    }

    // Get all published galleries with their images count
    $galleries = Gallery::active()
        ->with(['categories', 'translations'])
        ->published()
        ->ordered()
        ->withCount('publishedImages')
        ->get();

    // Get categories from existing galleries
    $categories = $galleries
        ->flatMap(fn($gallery) => $gallery->categories)
        ->unique('id')
        ->mapWithKeys(fn($category) => [$category->slug => $category->name])
        ->toArray();

    // Get featured gallery
    $featuredGallery = Gallery::with(['categories', 'translations'])
        ->published()
        ->featured()
        ->withCount('publishedImages')
        ->first();

    $selectedCategory = request()->input('category', 'all');

    // Filter galleries based on selected category
    $filteredGalleries = $selectedCategory === 'all'
        ? $galleries
        : $galleries->filter(fn($gallery) => $gallery->categories->contains('slug', $selectedCategory));

    $totalGalleries = $galleries->count();
    $totalPhotos = $galleries->sum('published_images_count');

    function getCategoryIcon($slug) {
        $icons = [
            'landscape' => 'mountain',
            'portrait' => 'user',
            'architecture' => 'building',
            'street' => 'city',
            'nature' => 'leaf',
            'art' => 'palette',
            'travel' => 'globe',
            'macro' => 'search-plus',
        ];
        return $icons[$slug] ?? 'image';
    }
@endphp

@push('styles')
    <style>
        .gallery-card {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-card:hover {
            transform: translateY(-8px);
        }

        .gallery-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-card:hover .gallery-image {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 50%);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
        }

        .gallery-card:hover .gallery-overlay {
            opacity: 1;
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
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

        /* Design Prototype Additional Styles */
        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .filter-btn {
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
        }

        .placeholder-image {
            background: linear-gradient(45deg, #f0f0f0 25%, transparent 25%),
            linear-gradient(-45deg, #f0f0f0 25%, transparent 25%),
            linear-gradient(45deg, transparent 75%, #f0f0f0 75%),
            linear-gradient(-45deg, transparent 75%, #f0f0f0 75%);
            background-size: 20px 20px;
            background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-weight: 500;
            position: relative;
        }

        .dark .placeholder-image {
            background: linear-gradient(45deg, #374151 25%, transparent 25%),
            linear-gradient(-45deg, #374151 25%, transparent 25%),
            linear-gradient(45deg, transparent 75%, #374151 75%),
            linear-gradient(-45deg, transparent 75%, #374151 75%);
            background-size: 20px 20px;
            background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
            color: #9ca3af;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
@endpush

@push('scripts')
    <!-- JavaScript from design prototype -->
    <script>
        function galleriesApp() {
            return {
                darkMode: localStorage.getItem('darkMode') === 'true',
                mobileMenuOpen: false,
                activeCategory: 'all',
                viewMode: localStorage.getItem('galleryViewMode') || 'grid',
                galleries: [
                    // Your gallery data from PHP will be injected via Alpine.js x-data
                ],
                categories: [
                    // Your categories data from PHP will be injected via Alpine.js x-data
                ],
                get filteredGalleries() {
                    if (this.activeCategory === 'all') {
                        return this.galleries;
                    }
                    return this.galleries.filter(gallery => gallery.category === this.activeCategory);
                },
                get totalGalleries() {
                    return this.galleries.length;
                },
                get totalPhotos() {
                    return this.galleries.reduce((total, gallery) => total + gallery.photosCount, 0);
                },
                getCategoryColor(category) {
                    const colors = {
                        'landscape': 'bg-green-500',
                        'portrait': 'bg-purple-500',
                        'architecture': 'bg-blue-500',
                        'street': 'bg-orange-500',
                        'nature': 'bg-emerald-500',
                        'art': 'bg-pink-500',
                        'travel': 'bg-red-500',
                        'macro': 'bg-indigo-500'
                    };
                    return colors[category] || 'bg-gray-500';
                },
                getCategoryName(category) {
                    const names = {
                        'landscape': '{{ __('gothamfolio.galleries.filters.landscape') }}',
                        'portrait': '{{ __('gothamfolio.galleries.filters.portrait') }}',
                        'architecture': '{{ __('gothamfolio.galleries.filters.architecture') }}',
                        'street': '{{ __('gothamfolio.galleries.filters.street') }}',
                        'nature': '{{ __('gothamfolio.galleries.filters.nature') }}',
                        'art': '{{ __('gothamfolio.galleries.filters.art') }}',
                        'travel': '{{ __('gothamfolio.galleries.filters.travel') }}',
                        'macro': '{{ __('gothamfolio.galleries.filters.macro') }}'
                    };
                    return names[category] || category;
                },
                setCategory(categoryId) {
                    this.activeCategory = categoryId;
                },
                setViewMode(mode) {
                    this.viewMode = mode;
                    localStorage.setItem('galleryViewMode', mode);
                },
                openGallery(galleryId) {
                    window.location.href = `/galleries/${galleryId}`;
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
                init() {
                    // Set initial view mode from localStorage
                    const savedViewMode = localStorage.getItem('galleryViewMode');
                    if (savedViewMode) {
                        this.viewMode = savedViewMode;
                    }

                    // Set dark mode
                    if (this.darkMode) {
                        document.documentElement.classList.add('dark');
                    }

                    // Setup intersection observer for fade-in animations
                    const fadeElements = document.querySelectorAll('.fade-in');
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('visible');
                            }
                        });
                    }, { threshold: 0.1 });

                    fadeElements.forEach(el => observer.observe(el));
                }
            }
        }
    </script>
@endpush

<x-frontend.layouts.app>
    <div x-data="{
        // State management
        activeCategory: '{{ $selectedCategory }}',
        viewMode: 'grid',

        // Gallery data
        galleries: @js($galleries->map(function($gallery) {
            return [
                'id' => $gallery->id,
                'title' => $gallery->getTranslation('title'),
                'description' => $gallery->getTranslation('description'),
                'cover_image' => $gallery->cover_image,
                'year' => $gallery->year,
                'slug' => $gallery->slug,
                'published_images_count' => $gallery->published_images_count,
                'categories' => $gallery->categories->map(function($category) {
                    return ['slug' => $category->slug, 'name' => $category->name];
                })->toArray()
            ];
        })),

        // Categories data
        categories: @js(array_merge(
            [['id' => 'all', 'name' => __('gothamfolio.galleries.filters.all'), 'count' => count($galleries), 'icon' => 'fas fa-star']],
            collect($categories)->map(function($name, $slug) use ($galleries) {
                return [
                    'id' => $slug,
                    'name' => $name,
                    'count' => $galleries->filter(fn($g) => $g->categories->contains('slug', $slug))->count(),
                    'icon' => 'fas fa-' . getCategoryIcon($slug)
                ];
            })->values()->toArray()
        )),

        // Computed properties
        get filteredGalleries() {
            if (this.activeCategory === 'all') {
                return this.galleries;
            }
            return this.galleries.filter(gallery =>
                gallery.categories.some(category => category.slug === this.activeCategory)
            );
        },

        get totalGalleries() {
            return this.galleries.length;
        },

        get totalPhotos() {
            return this.galleries.reduce((total, gallery) => total + gallery.published_images_count, 0);
        },

        // Methods
        getCategoryColor(categorySlug) {
            const colors = {
                'landscape': 'bg-green-500',
                'portrait': 'bg-purple-500',
                'architecture': 'bg-blue-500',
                'street': 'bg-orange-500',
                'nature': 'bg-emerald-500',
                'art': 'bg-pink-500',
                'travel': 'bg-red-500',
                'macro': 'bg-indigo-500'
            };
            return colors[categorySlug] || 'bg-gray-500';
        },

        getCategoryName(categorySlug) {
            const names = {
                'landscape': '{{ __('gothamfolio.galleries.filters.landscape') }}',
                'portrait': '{{ __('gothamfolio.galleries.filters.portrait') }}',
                'architecture': '{{ __('gothamfolio.galleries.filters.architecture') }}',
                'street': '{{ __('gothamfolio.galleries.filters.street') }}',
                'nature': '{{ __('gothamfolio.galleries.filters.nature') }}',
                'art': '{{ __('gothamfolio.galleries.filters.art') }}',
                'travel': '{{ __('gothamfolio.galleries.filters.travel') }}',
                'macro': '{{ __('gothamfolio.galleries.filters.macro') }}'
            };
            return names[categorySlug] || categorySlug;
        },

        setCategory(categoryId) {
            this.activeCategory = categoryId;
            // Update URL without page reload
            const url = new URL(window.location);
            url.searchParams.set('category', categoryId);
            window.history.replaceState({}, '', url);
        },

        setViewMode(mode) {
            this.viewMode = mode;
            localStorage.setItem('galleryViewMode', mode);
        },

        openGallery(gallerySlug) {
            window.location.href = `/galleries/${gallerySlug}`;
        },

        // Initialize
        init() {
            // Set initial view mode from localStorage
            const savedViewMode = localStorage.getItem('galleryViewMode');
            if (savedViewMode) {
                this.viewMode = savedViewMode;
            }

            // Setup intersection observer for fade-in animations
            this.setupAnimations();
        },

        setupAnimations() {
            const fadeElements = document.querySelectorAll('.fade-in');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            fadeElements.forEach(el => observer.observe(el));
        }
    }" class="min-h-screen">

        <!-- Main Content - Only the content area, no header/footer -->
        <main class="w-full">
            <!-- Hero Section -->
            <section class="py-16 bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto text-center fade-in">
                        <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ __('gothamfolio.galleries.title') }}</h1>
                        <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto">
                            {{ __('gothamfolio.galleries.description') }}
                        </p>
                        <div class="flex flex-wrap justify-center gap-6">
                            <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                                <i class="fas fa-camera text-purple-500 mr-2"></i>
                                <span>15+ {{ __('gothamfolio.galleries.stats.years_experience') }}</span>
                            </div>
                            <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                                <i class="fas fa-images text-purple-500 mr-2"></i>
                                <span>{{ $totalGalleries }} {{ __('gothamfolio.galleries.stats.total_galleries') }}</span>
                            </div>
                            <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                                <i class="fas fa-globe text-purple-500 mr-2"></i>
                                <span>12 {{ __('gothamfolio.galleries.stats.countries') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery Filters -->
            <section class="py-8 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-16 z-40">
                <div class="fluid-container">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                        <!-- Category Filters -->
                        <div class="flex flex-wrap gap-2">
                            <template x-for="category in categories" :key="category.id">
                                <button
                                    @click="setCategory(category.id)"
                                    :class="activeCategory === category.id
                                    ? 'filter-btn active text-white'
                                    : 'filter-btn bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600'"
                                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 flex items-center"
                                >
                                    <i :class="category.icon" class="mr-2 text-sm"></i>
                                    <span x-text="category.name"></span>
                                    <span class="ml-2 px-1.5 py-0.5 bg-white dark:bg-gray-800 text-xs rounded-full"
                                          :class="activeCategory === category.id ? 'text-purple-500' : 'text-gray-500'"
                                          x-text="category.count"></span>
                                </button>
                            </template>
                        </div>

                        <!-- View Toggle -->
                        <div class="flex items-center space-y-4">
                            <span class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.galleries.view_mode.label') }}:</span>
                            <div class="bg-gray-100 dark:bg-gray-700 rounded-lg p-1">
                                <button @click="setViewMode('grid')"
                                        :class="viewMode === 'grid' ? 'bg-white dark:bg-gray-600 shadow-sm' : 'text-gray-600 dark:text-gray-400'"
                                        class="p-2 rounded-md transition-all duration-200">
                                    <i class="fas fa-th"></i>
                                </button>
                                <button @click="setViewMode('masonry')"
                                        :class="viewMode === 'masonry' ? 'bg-white dark:bg-gray-600 shadow-sm' : 'text-gray-600 dark:text-gray-400'"
                                        class="p-2 rounded-md transition-all duration-200">
                                    <i class="fas fa-th-large"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Gallery -->
            @if($featuredGallery)
                <section class="py-16 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
                    <div class="fluid-container">
                        <div class="max-w-6xl mx-auto">
                            <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                                <div class="lg:w-1/2">
                                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                                        @if($featuredGallery->cover_image)
                                            <img src="{{ asset('storage/' . $featuredGallery->cover_image) }}"
                                                 alt="{{ $featuredGallery->getTranslation('title') }}"
                                                 class="w-full h-64 lg:h-96 object-cover">
                                        @else
                                            <div class="placeholder-image w-full h-64 lg:h-96 placeholder-landscape">
                                                <!-- CSS placeholder -->
                                            </div>
                                        @endif
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                                            <div class="text-white">
                                            <span class="px-3 py-1 bg-blue-500 rounded-full text-sm font-medium mb-2 inline-block">
                                                {{ __('gothamfolio.galleries.gallery_of_month') }}
                                            </span>
                                                <h3 class="text-2xl lg:text-3xl font-bold mb-2">{{ $featuredGallery->getTranslation('title') }}</h3>
                                                <p class="text-blue-100">{{ $featuredGallery->getTranslation('description') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:w-1/2">
                                    <h2 class="text-3xl font-bold mb-6">{{ __('gothamfolio.galleries.featured') }}</h2>
                                    <p class="text-gray-600 dark:text-gray-400 mb-6 text-lg">
                                        {{ $featuredGallery->getTranslation('description') }}
                                    </p>
                                    <div class="grid grid-cols-2 gap-4 mb-6">
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-blue-500 mb-1">{{ $featuredGallery->published_images_count }}</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.galleries.stats.total_photos') }}</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-blue-500 mb-1">{{ $featuredGallery->year }}</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.gallery.stats.year') }}</div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-4">
                                        <a href="{{ url('/galleries', $featuredGallery->slug) }}"
                                           class="inline-flex items-center px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-eye mr-2"></i>
                                            <span>{{ __('gothamfolio.galleries.view_gallery') }}</span>
                                        </a>
                                        <a href="https://t.me/FotoEsperanta" target="_blank"
                                           class="inline-flex items-center px-6 py-3 border border-blue-500 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg font-medium transition-colors">
                                            <i class="fab fa-telegram mr-2"></i>
                                            <span>Telegram Community</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            <!-- Galleries Grid -->
            <section class="py-16">
                <div class="fluid-container">
                    <!-- Stats Summary -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12 fade-in">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                            <div class="text-2xl font-bold text-purple-500 mb-2">{{ $totalGalleries }}</div>
                            <div class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.galleries.stats.total_galleries') }}</div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow text-center">
                            <div class="text-2xl font-bold text-blue-500 mb-2">{{ $totalPhotos }}</div>
                            <div class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.galleries.stats.total_photos') }}</div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                            <div class="text-2xl font-bold text-green-500 mb-2">15+</div>
                            <div class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.galleries.stats.years_experience') }}</div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                            <div class="text-3xl font-bold text-orange-500 mb-2">12</div>
                            <div class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.galleries.stats.countries') }}</div>
                        </div>
                    </div>

                    <!-- Grid View -->
                    <div x-show="viewMode === 'grid' && filteredGalleries.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 fade-in" x-cloak>
                        <template x-for="gallery in filteredGalleries" :key="gallery.id">
                            <div class="gallery-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300"
                                 @click="openGallery(gallery.slug)"
                                 style="cursor: pointer;">
                                <div class="relative h-64 overflow-hidden">
{{--                                    @if($gallery->cover_image)--}}
{{--                                        <img :src="gallery.cover_image" :alt="gallery.title" class="gallery-image w-full h-full object-cover">--}}
{{--                                    @else--}}
                                        <div class="placeholder-image gallery-image" :class="'placeholder-' + (gallery.categories[0]?.slug || 'landscape')">
                                            <!-- CSS placeholder for gallery image -->
                                        </div>
{{--                                    @endif--}}
                                    <div class="gallery-overlay text-white">
                                        <h3 class="text-xl font-bold mb-2" x-text="gallery.title"></h3>
                                        <p class="text-sm text-gray-200 mb-3" x-text="gallery.description"></p>
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm" x-text="gallery.published_images_count + ' {{ __('gothamfolio.galleries.photos_count', ['count' => '']) }}'"></span>
                                            <span class="text-sm" x-text="gallery.year"></span>
                                        </div>
                                    </div>
                                    <div class="absolute top-4 right-4" x-show="gallery.categories.length > 0">
                                    <span class="px-3 py-1 rounded-full text-xs font-medium text-white shadow-lg"
                                          :class="getCategoryColor(gallery.categories[0].slug)">
                                        <span x-text="getCategoryName(gallery.categories[0].slug)"></span>
                                    </span>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-semibold text-lg" x-text="gallery.title"></h3>
                                        <span class="text-sm text-gray-500 dark:text-gray-400" x-text="gallery.year"></span>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3" x-text="gallery.description"></p>
                                    <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                                        <span x-text="gallery.published_images_count + ' {{ __('gothamfolio.galleries.photos_count', ['count' => '']) }}'"></span>
                                        <button @click="openGallery(gallery.slug)" class="text-purple-500 hover:text-purple-600 font-medium transition-colors">
                                            {{ __('gothamfolio.galleries.view_gallery') }} →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Masonry View -->
                    <div x-show="viewMode === 'masonry' && filteredGalleries.length > 0" class="columns-1 md:columns-2 lg:columns-3 gap-6 fade-in" x-cloak>
                        <template x-for="gallery in filteredGalleries" :key="gallery.id">
                            <div class="break-inside-avoid mb-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                                <div class="relative">
                                    <div class="placeholder-image w-full h-64" :class="'placeholder-' + (gallery.categories[0]?.slug || 'landscape')">
                                        <!-- CSS placeholder for masonry image -->
                                    </div>
                                    <div class="absolute top-4 right-4" x-show="gallery.categories.length > 0">
                                    <span class="px-3 py-1 rounded-full text-xs font-medium text-white shadow-lg"
                                          :class="getCategoryColor(gallery.categories[0].slug)">
                                        <span x-text="getCategoryName(gallery.categories[0].slug)"></span>
                                    </span>
                                    </div>
                                    <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                                        <button @click="openGallery(gallery.slug)" class="opacity-0 hover:opacity-100 transition-opacity duration-300 transform scale-75 hover:scale-100">
                                            <div class="bg-white text-purple-600 px-6 py-3 rounded-lg font-semibold flex items-center">
                                                <i class="fas fa-eye mr-2"></i>
                                                <span>{{ __('gothamfolio.galleries.view_gallery') }}</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h3 class="font-semibold text-lg mb-2" x-text="gallery.title"></h3>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3" x-text="gallery.description"></p>
                                    <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                                        <span x-text="gallery.published_images_count + ' {{ __('gothamfolio.galleries.photos_count', ['count' => '']) }}'"></span>
                                        <span x-text="gallery.year"></span>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Empty State -->
                    <div x-show="filteredGalleries.length === 0" class="text-center py-12 fade-in" x-cloak>
                        <div class="w-24 h-24 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-400 mx-auto mb-4">
                            <i class="fas fa-camera text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ __('gothamfolio.galleries.empty_state') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">{{ __('gothamfolio.galleries.try_another_category') }}</p>
                        <button @click="setCategory('all')" class="px-6 py-3 bg-purple-500 hover:bg-purple-600 text-white rounded-lg font-medium transition-colors">
                            {{ __('gothamfolio.galleries.show_all') }}
                        </button>
                    </div>
                </div>
            </section>

            <!-- Photography Philosophy -->
            <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
                <div class="fluid-container">
                    <div class="max-w-4xl mx-auto text-center fade-in">
                        <h2 class="text-3xl font-bold mb-6">{{ __('gothamfolio.galleries.photography_philosophy') }}</h2>
                        <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                            {{ __('gothamfolio.galleries.philosophy_text') }}
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-4">
                                    <i class="fas fa-heart text-2xl"></i>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">{{ __('gothamfolio.galleries.philosophy_points.emotions') }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    {{ __('gothamfolio.galleries.philosophy_points.emotions_description') }}
                                </p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mx-auto mb-4">
                                    <i class="fas fa-lightbulb text-2xl"></i>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">{{ __('gothamfolio.galleries.philosophy_points.perspective') }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    {{ __('gothamfolio.galleries.philosophy_points.perspective_description') }}
                                </p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mx-auto mb-4">
                                    <i class="fas fa-history text-2xl"></i>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">{{ __('gothamfolio.galleries.philosophy_points.moment') }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    {{ __('gothamfolio.galleries.philosophy_points.moment_description') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Equipment & Techniques -->
            <section class="py-16">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="text-3xl font-bold mb-12 text-center fade-in">{{ __('gothamfolio.galleries.equipment') }} & {{ __('gothamfolio.galleries.techniques') }}</h2>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <div class="fade-in">
                                <h3 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-camera text-purple-500 mr-3"></i>
                                    {{ __('gothamfolio.galleries.equipment') }}
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-4 flex-shrink-0">
                                            <i class="fas fa-camera"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">{{ __('gothamfolio.galleries.equipment_cameras') }}</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                                {{ __('gothamfolio.galleries.equipment_cameras_description') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-4 flex-shrink-0">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">{{ __('gothamfolio.galleries.equipment_lenses') }}</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                                {{ __('gothamfolio.galleries.equipment_lenses_description') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-4 flex-shrink-0">
                                            <i class="fas fa-sliders-h"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">{{ __('gothamfolio.galleries.equipment_accessories') }}</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                                {{ __('gothamfolio.galleries.equipment_accessories_description') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fade-in">
                                <h3 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-magic text-orange-500 mr-3"></i>
                                    {{ __('gothamfolio.galleries.techniques') }}
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-4 flex-shrink-0">
                                            <i class="fas fa-sun"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">{{ __('gothamfolio.galleries.techniques_lighting') }}</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                                {{ __('gothamfolio.galleries.techniques_lighting_description') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-4 flex-shrink-0">
                                            <i class="fas fa-chess-board"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">{{ __('gothamfolio.galleries.techniques_composition') }}</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                                {{ __('gothamfolio.galleries.techniques_composition_description') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-4 flex-shrink-0">
                                            <i class="fas fa-edit"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">{{ __('gothamfolio.galleries.techniques_postprocessing') }}</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                                {{ __('gothamfolio.galleries.techniques_postprocessing_description') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="py-16 bg-gradient-to-r from-purple-500 to-pink-500 text-white">
                <div class="fluid-container">
                    <div class="max-w-4xl mx-auto text-center fade-in">
                        <h2 class="text-3xl font-bold mb-6">{{ __('gothamfolio.galleries.community') }}</h2>
                        <p class="text-xl mb-8 opacity-90">
                            {{ __('gothamfolio.galleries.community_text') }}
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="https://t.me/FotoEsperanta" target="_blank"
                               class="inline-flex items-center px-8 py-3 bg-white text-purple-600 rounded-lg font-medium transition-colors shadow-lg hover:bg-gray-100">
                                <i class="fab fa-telegram mr-2"></i>
                                <span>Telegram Community</span>
                            </a>
                            <a href="/contact"
                               class="inline-flex items-center px-8 py-3 border border-white text-white hover:bg-white hover:text-purple-600 rounded-lg font-medium transition-colors">
                                <i class="fas fa-envelope mr-2"></i>
                                <span>{{ __('gothamfolio.galleries.contact_me') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-frontend.layouts.app>


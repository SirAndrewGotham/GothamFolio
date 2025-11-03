<?php
use App\Models\Competence;
use App\Models\Category;
?>

<x-frontend.layouts.app>
    @volt('category-competences-page')
    @php
        // Get the slug from the route - this works in included views!
        $categorySlug = request()->route('slug');

        // Fetch the category
        $category = Category::whereHas('competences')
            ->where('slug', $categorySlug)
            ->with('translations')
            ->firstOrFail();

        // Get competences for this specific category
        $competences = Competence::with([
            'categories',
            'translations' => function($query) {
                $query->where('locale', app()->getLocale());
            },
            'tags'
        ])
        ->whereHas('categories', function($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        })
        ->where('is_active', true)
        ->orderBy('proficiency', 'desc')
        ->orderBy('years_experience', 'desc')
        ->get();

        // Map the data for Alpine.js
        $mappedCompetences = $competences->map(function ($competence) use ($categorySlug) {
            return [
                'id' => $competence->id,
                'slug' => $competence->slug,
                'name' => $competence->getTranslation('name'),
                'description' => $competence->getTranslation('description'),
                'icon' => $competence->icon,
                'color' => $competence->color,
                'proficiency' => $competence->proficiency,
                'years' => $competence->years_experience,
                'is_featured' => $competence->is_featured,
                'featured' => $competence->is_featured,
                'category' => $categorySlug,
                'tags' => $competence->tags->pluck('name')->toArray() ?? [],
                'link' => url('competences/competences/' . $competence->slug . '/' . app()->getLocale()),
            ];
        });

        // Debug: check what's in the mapped competences
//        \Log::info('Mapped competences:', $mappedCompetences->toArray());
//        \Log::info('Competences count: ' . $competences->count());
    @endphp
    <div x-data="competencesApp({{ $mappedCompetences }}, [])" x-init="init()" class="min-h-screen pt-20">
        <!-- Hero Section -->
        <section class="py-16 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $category->getTranslation('name') }}</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        {{ __('gothamfolio.competences.category_description', ['category' => $category->name]) }}
                    </p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-code text-primary-500 mr-2"></i>
                            <span>
                                {{ ($category->competences && (is_array($category->competences) || $category->competences instanceof Countable)) ? count($category->competences) : 0 }}+
                                {{ __('gothamfolio.competences.stats.competences_in_category') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Competences Grid -->
        <section class="py-16">
            <div class="fluid-container">
                <!-- Stats Summary -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                        <div class="text-2xl font-bold text-primary-500 mb-2" x-text="filteredCompetences.length"></div>
                        <div class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.competences.stats.found_competences') }}</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                        <div class="text-2xl font-bold text-green-500 mb-2" x-text="filteredCompetences.filter(c => c.proficiency >= 90).length"></div>
                        <div class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.competences.stats.expert_level') }}</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                        <div class="text-2xl font-bold text-blue-500 mb-2" x-text="filteredCompetences.length > 0 ? Math.max.apply(null, filteredCompetences.map(c => c.years)) : 0"></div>
                        <div class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.competences.stats.max_experience') }}</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                        <div class="text-2xl font-bold text-purple-500 mb-2" x-text="totalPages"></div>
                        <div class="text-gray-600 dark:text-gray-400">{{ __('gothamfolio.competences.stats.pages') }}</div>
                    </div>
                </div>

                <!-- Results Info -->
                <div class="flex justify-between items-center mb-6">
                    <div class="text-gray-600 dark:text-gray-400">
                        {{ __('gothamfolio.competences.showing') }} <span class="font-semibold" x-text="startIndex + 1"></span>-<span class="font-semibold" x-text="Math.min(endIndex, filteredCompetences.length)"></span> {{ __('gothamfolio.competences.of') }} <span class="font-semibold" x-text="filteredCompetences.length"></span> {{ __('gothamfolio.competences.competences_text') }}
                    </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400" x-show="searchQuery">
                        {{ __('gothamfolio.competences.search_for') }}: "<span class="font-semibold" x-text="searchQuery"></span>"
                    </div>
                </div>

                <!-- Competences Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-8" x-show="paginatedCompetences.length > 0">
                    <template x-for="competence in paginatedCompetences" :key="competence.id">
                        @include('pages.competences.partials.competence-card')
                    </template>
                </div>


                <!-- Empty State -->
                <div x-show="filteredCompetences.length === 0" class="text-center py-12">
                    <div class="w-24 h-24 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-400 mx-auto mb-4">
                        <i class="fas fa-search text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('gothamfolio.competences.empty.title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">{{ __('gothamfolio.competences.empty.description') }}</p>
                    <button @click="searchQuery = ''; activeCategory = 'all'; currentPage = 1" class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                        {{ __('gothamfolio.competences.empty.reset_filters') }}
                    </button>
                </div>

                <!-- Pagination -->
                <div x-show="totalPages > 1" class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-8">
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('gothamfolio.competences.page') }} <span class="font-semibold" x-text="currentPage"></span> {{ __('gothamfolio.competences.of') }} <span class="font-semibold" x-text="totalPages"></span>
                    </div>

                    <div class="flex items-center space-x-2">
                        <!-- First Page -->
                        <button
                            @click="goToFirstPage()"
                            :class="currentPage === 1 ? 'pagination-btn disabled' : 'pagination-btn'"
                            class="w-10 h-10 rounded-lg flex items-center justify-center bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 pagination-btn"
                            :disabled="currentPage === 1"
                        >
                            <i class="fas fa-angle-double-left text-xs"></i>
                        </button>

                        <!-- Previous Page -->
                        <button
                            @click="goToPreviousPage()"
                            :class="currentPage === 1 ? 'pagination-btn disabled' : 'pagination-btn'"
                            class="w-10 h-10 rounded-lg flex items-center justify-center bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 pagination-btn"
                            :disabled="currentPage === 1"
                        >
                            <i class="fas fa-angle-left"></i>
                        </button>

                        <!-- Page Numbers -->
                        <template x-for="page in visiblePages" :key="page">
                            <button
                                @click="currentPage = page"
                                :class="currentPage === page
                                ? 'bg-primary-500 text-white shadow-lg'
                                : 'bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-600'"
                                class="w-10 h-10 rounded-lg font-medium transition-all duration-300 pagination-btn"
                            >
                                <span x-text="page"></span>
                            </button>
                        </template>

                        <!-- Next Page -->
                        <button
                            @click="goToNextPage()"
                            :class="currentPage === totalPages ? 'pagination-btn disabled' : 'pagination-btn'"
                            class="w-10 h-10 rounded-lg flex items-center justify-center bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 pagination-btn"
                            :disabled="currentPage === totalPages"
                        >
                            <i class="fas fa-angle-right"></i>
                        </button>

                        <!-- Last Page -->
                        <button
                            @click="goToLastPage()"
                            :class="currentPage === totalPages ? 'pagination-btn disabled' : 'pagination-btn'"
                            class="w-10 h-10 rounded-lg flex items-center justify-center bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 pagination-btn"
                            :disabled="currentPage === totalPages"
                        >
                            <i class="fas fa-angle-double-right text-xs"></i>
                        </button>
                    </div>

                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        <span x-text="itemsPerPage"></span> {{ __('gothamfolio.competences.per_page') }}
                    </div>
                </div>
            </div>
        </section>

        <!-- Specialization Areas -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold mb-4">{{ __('gothamfolio.competences.specialization.title') }}</h2>
                        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                            {{ __('gothamfolio.competences.specialization.description') }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Performance & Scaling -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-purple-500 to-indigo-500 flex items-center justify-center text-white mr-4">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <h3 class="text-xl font-semibold">{{ __('gothamfolio.competences.specialization.performance.title') }}</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                {{ __('gothamfolio.competences.specialization.performance.description') }}
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded text-xs">Laravel Octane</span>
                                <span class="px-2 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded text-xs">Redis</span>
                                <span class="px-2 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded text-xs">Horizon</span>
                            </div>
                        </div>

                        <!-- Authentication & Security -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center text-white mr-4">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 class="text-xl font-semibold">{{ __('gothamfolio.competences.specialization.security.title') }}</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                {{ __('gothamfolio.competences.specialization.security.description') }}
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded text-xs">Sanctum</span>
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded text-xs">Fortify</span>
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded text-xs">Breeze</span>
                            </div>
                        </div>

                        <!-- API Development -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 flex items-center justify-center text-white mr-4">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h3 class="text-xl font-semibold">{{ __('gothamfolio.competences.specialization.api.title') }}</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                {{ __('gothamfolio.competences.specialization.api.description') }}
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded text-xs">REST API</span>
                                <span class="px-2 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded text-xs">GraphQL</span>
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded text-xs">Swagger</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-6">{{ __('gothamfolio.competences.cta.title') }}</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        {{ __('gothamfolio.competences.cta.description') }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/works" class="inline-flex items-center px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-eye mr-2"></i>
                            <span>{{ __('gothamfolio.competences.cta.view_projects') }}</span>
                        </a>
                        <a href="/feedback" class="inline-flex items-center px-8 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>{{ __('gothamfolio.competences.cta.discuss_project') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        function competencesApp(competencesData, categoriesData) {
            return {
                // State management
                activeCategory: 'all', // Set to 'all' since we're showing only one category
                searchQuery: '',
                sortBy: 'proficiency',
                itemsPerPage: 9,
                currentPage: 1,

                // Data from Livewire
                competences: competencesData,
                categories: categoriesData, // Empty array since we don't need categories for filtering

                // Computed properties (same as in index.blade.php)
                get filteredCompetences() {
                    if (!this.competences || !Array.isArray(this.competences)) return [];

                    let filtered = this.competences;

                    // Search filter only (category is already filtered by the middleware)
                    if (this.searchQuery) {
                        const query = this.searchQuery.toLowerCase();
                        filtered = filtered.filter(comp =>
                            comp.name.toLowerCase().includes(query) ||
                            comp.description.toLowerCase().includes(query) ||
                            (comp.tags && comp.tags.some(tag => tag.toLowerCase().includes(query)))
                        );
                    }

                    // Sorting
                    if (this.sortBy === 'proficiency') {
                        filtered.sort((a, b) => b.proficiency - a.proficiency);
                    } else if (this.sortBy === 'years') {
                        filtered.sort((a, b) => b.years - a.years);
                    } else if (this.sortBy === 'name') {
                        filtered.sort((a, b) => a.name.localeCompare(b.name));
                    }

                    return filtered;
                },

                get totalPages() {
                    return Math.ceil(this.filteredCompetences.length / this.itemsPerPage);
                },

                get paginatedCompetences() {
                    const startIndex = (this.currentPage - 1) * this.itemsPerPage;
                    const endIndex = startIndex + this.itemsPerPage;
                    return this.filteredCompetences.slice(startIndex, endIndex);
                },

                get startIndex() {
                    return (this.currentPage - 1) * this.itemsPerPage;
                },

                get endIndex() {
                    return Math.min(this.startIndex + this.itemsPerPage, this.filteredCompetences.length);
                },

                get visiblePages() {
                    const pages = [];
                    const maxVisible = 5;
                    let startPage = Math.max(1, this.currentPage - Math.floor(maxVisible / 2));
                    let endPage = Math.min(this.totalPages, startPage + maxVisible - 1);

                    if (endPage - startPage + 1 < maxVisible) {
                        startPage = Math.max(1, endPage - maxVisible + 1);
                    }

                    for (let i = startPage; i <= endPage; i++) {
                        pages.push(i);
                    }

                    return pages;
                },

                // Helper methods (same as in index.blade.php)
                getProficiencyColor(proficiency) {
                    if (proficiency >= 90) return 'text-green-500';
                    if (proficiency >= 80) return 'text-blue-500';
                    if (proficiency >= 70) return 'text-yellow-500';
                    return 'text-gray-500';
                },

                getProficiencyText(proficiency) {
                    if (proficiency >= 90) return '{{ __("gothamfolio.competences.proficiency_levels.expert") }}';
                    if (proficiency >= 80) return '{{ __("gothamfolio.competences.proficiency_levels.advanced") }}';
                    if (proficiency >= 70) return '{{ __("gothamfolio.competences.proficiency_levels.intermediate") }}';
                    return '{{ __("gothamfolio.competences.proficiency_levels.beginner") }}';
                },

                // Pagination methods (same as in index.blade.php)
                goToFirstPage() {
                    this.currentPage = 1;
                },

                goToPreviousPage() {
                    if (this.currentPage > 1) {
                        this.currentPage--;
                    }
                },

                goToNextPage() {
                    if (this.currentPage < this.totalPages) {
                        this.currentPage++;
                    }
                },

                goToLastPage() {
                    this.currentPage = this.totalPages;
                },

                init() {
                    // Initialization code
                }
            }
        }
    </script>
    @endvolt
</x-frontend.layouts.app>

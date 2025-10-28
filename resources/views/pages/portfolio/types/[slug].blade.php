<x-frontend.layouts.app>
    @volt('portfolio-type-page')
    @php
        use App\Models\Project;

        // Get projects for this specific type
        $projects = Project::with('competences')
            ->where('type', $slug)  // Filter by type field
            ->where('is_active', true)
            ->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
    @endphp

    <div x-data="portfolioApp()" class="w-full pt-20">
        <!-- Hero Section - Updated for Category -->
        <section class="py-16 bg-gradient-to-br from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    {{ ucfirst($slug) }} {{ __('gothamfolio.portfolio.hero.title') }}
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto">
                    {{ __('gothamfolio.portfolio.hero.description') }} - {{ ucfirst($slug) }}
                </p>
            </div>
        </section>

        <!-- The rest of your portfolio index code remains the same -->
        <!-- Portfolio Content -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                @if($projects->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($projects as $project)
                            <div class="relative"> <!-- Grid column -->
                                <a href="/portfolio/projects/{{ $project->slug }}/{{ app()->getLocale() }}"
                                   class="block project-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">

                                    <!-- Project Image -->
                                        <div class="relative overflow-hidden h-56">
                                            <div class="w-full h-full bg-cover bg-center"
                                                 style="background-image: url('{{ $project->image }}')">
                                            </div>
                                            <div class="absolute top-4 right-4">
                                        <span class="px-3 py-1 rounded-full text-xs font-medium text-white shadow-lg {{
                                            $project->status == 'Active' ? 'bg-green-500' :
                                            ($project->status == 'Completed' ? 'bg-blue-500' :
                                            ($project->status == 'In Development' ? 'bg-yellow-500' : 'bg-gray-500'))
                                        }}">
                                            {{ $project->status }}
                                        </span>
                                            </div>
                                            <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                                <div class="opacity-0 hover:opacity-100 transition-opacity duration-300 flex space-x-4">
                                                    @if($project->demo_url)
                                                        <div onclick="window.open('{{ $project->demo_url }}', '_blank')"
                                                             class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-primary-500 hover:bg-primary-500 hover:text-white transition-colors cursor-pointer">
                                                            <i class="fas fa-external-link-alt text-lg"></i>
                                                        </div>
                                                    @endif

                                                    @if($project->github_url)
                                                        <div onclick="window.open('{{ $project->github_url }}', '_blank')"
                                                             class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-gray-700 hover:bg-gray-800 hover:text-white transition-colors cursor-pointer">
                                                            <i class="fab fa-github text-lg"></i>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Project Content -->
                                        <div class="p-6">
                                            <div class="flex items-start justify-between mb-4">
                                                <!-- Increased margin -->
                                                <h3 class="text-xl font-bold">{{ $project->getTranslation('name') }}</h3>
                                                <span
                                                    class="text-xs text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">
                                            {{ $project->year }}
                                        </span>
                                            </div>

                                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">{{ $project->getTranslation('description') }}</p>
                                            <!-- Increased margin -->

                                            <!-- Competences -->
                                            @if($project->competences->count() > 0)
                                                <div class="flex flex-wrap gap-2 mb-6">
                                                    @foreach($project->competences->take(4) as $competence)
                                                        <a href="/competences/{{ $competence->slug }}/{{ app()->getLocale() }}"
                                                           class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded text-xs hover:scale-105 transition-transform hover:bg-primary-200 dark:hover:bg-primary-800/50">
                                                            {{ $competence->getTranslation('name') }}
                                                        </a>
                                                    @endforeach
                                                    @if($project->competences->count() > 4)
                                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 rounded text-xs">
                                                            +{{ $project->competences->count() - 4 }}
                                                        </span>
                                                    @endif
                                                </div>
                                            @endif

                                            <!-- Project Features -->
                                            <div
                                                class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                                                <div class="flex items-center">
                                                    <i class="fas fa-calendar mr-2"></i> <!-- Increased icon spacing -->
                                                    <span>{{ $project->duration ?? 'N/A' }}</span>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-layer-group mr-2"></i>
                                                    <a href="/portfolio/types/{{ strtolower($project->type) }}"
                                                       class="hover:text-primary-500 transition-colors">
                                                        {{ $project->type ?? 'N/A' }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <div
                            class="w-24 h-24 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-400 mx-auto mb-4">
                            <i class="fas fa-folder-open text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">No projects found</h3>
                        <p class="text-gray-600 dark:text-gray-400">There are no active projects in the database.</p>
                    </div>
                @endif
            </div>
        </section>
    </div>

    <script>
        function portfolioApp() {
            return {
                darkMode: localStorage.getItem('darkMode') === 'true',
                toggleDarkMode() {
                    this.darkMode = !this.darkMode;
                    localStorage.setItem('darkMode', this.darkMode);
                    document.documentElement.classList.toggle('dark', this.darkMode);
                }
            }
        }
    </script>
    @endvolt
</x-frontend.layouts.app>

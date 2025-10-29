<div> <!-- Grid column -->
    <a href="/portfolio/projects/{{ $project->slug }}/{{ app()->getLocale() }}"
       class="block">
        <div class="project-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
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
                    <div class="opacity-0 hover:opacity-100 transition-opacity duration-300 flex space-x-4" x-data>
                        @if($project->demo_url)
                            <button @click="window.open('{{ $project->demo_url }}', '_blank', 'noopener,noreferrer')"
                                    class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-primary-500 hover:bg-primary-500 hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"
                                    aria-label="{{ __('gothamfolio.portfolio.actions.view_demo') }}">
                                <i class="fas fa-external-link-alt text-lg"></i>
                            </button>
                        @endif

                        @if($project->github_url)
                            <button @click="window.open('{{ $project->github_url }}', '_blank', 'noopener,noreferrer')"
                                    class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-gray-700 hover:bg-gray-800 hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                                    aria-label="{{ __('gothamfolio.portfolio.actions.view_source') }}">
                                <i class="fab fa-github text-lg"></i>
                            </button>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Project Content -->
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold">{{ $project->getTranslation('name') }}</h3>
                    <span class="text-xs text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">
                        {{ $project->year }}
                    </span>
                </div>

                <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">{{ $project->getTranslation('description') }}</p>

                <!-- Categories (previously called competences) -->
                @if($project->categories->count() > 0)
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach($project->categories->take(4) as $category)
                    <a href="/portfolio/competences/{{ $category->slug }}"
                       class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded text-xs hover:scale-105 transition-transform hover:bg-primary-200 dark:hover:bg-primary-800/50">
                        {{ $category->getTranslation('name') }}
                    </a>
                    @endforeach
                    @if($project->categories->count() > 4)
                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 rounded text-xs">
                                +{{ $project->categories->count() - 4 }}
                            </span>
                    @endif
                </div>
                @endif

                <!-- Project Features -->
                <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                    <div class="flex items-center">
                        <i class="fas fa-calendar mr-2"></i>
                        <span>{{ $project->duration ?? 'N/A' }}</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-layer-group mr-2"></i>
                        <a href="/portfolio/types/{{ $project->projectType->slug }}"
                           class="hover:text-primary-500 transition-colors">
                            {{ $project->projectType->getTranslation('name') ?? 'N/A' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

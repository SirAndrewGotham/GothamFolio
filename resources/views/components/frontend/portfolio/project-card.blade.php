<div>
    <!-- Grid column -->
    <a href="/portfolio/{{ $project->slug }}" class="block">
        <div class="project-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
            <!-- Project Image with status badge -->
            <div class="h-56 relative">
                @if(!empty($project->image_urls))
                    <x-frontend.portfolio.project-image
                        :project="$project"
                        :alt="$project->getTranslation('name')"
                        class="w-full h-full object-cover"
                    />
                @else
                    <!-- Simple fallback -->
                    <div class="w-full h-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                        <i class="fas fa-image text-4xl text-gray-400"></i>
                    </div>
                @endif

                <!-- Status badge -->
                <div class="absolute top-4 right-4 z-10">
                    <span class="px-3 py-1 rounded-full text-xs font-medium text-white shadow-lg {{
                        $project->status == 'Active' ? 'bg-green-500' :
                        ($project->status == 'Completed' ? 'bg-blue-500' :
                        ($project->status == 'In Development' ? 'bg-yellow-500' : 'bg-gray-500'))
                    }}">
                        {{ $project->status }}
                    </span>
                </div>

                    <!-- Hover actions without overlay -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 z-1">
                        <div class="flex space-x-4">
                            @if($project->demo_url)
                                <button @click="window.open('{{ $project->demo_url }}', '_blank')"
                                        class="w-10 h-10 rounded-full bg-white/90 flex items-center justify-center text-primary-500 hover:bg-primary-500 hover:text-white transition-colors">
                                    <i class="fas fa-external-link-alt text-sm"></i>
                                </button>
                            @endif
                        </div>
                    </div>
            </div>

            <!-- Project Content -->
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <h3 class="text-xl font-bold">
                        {{ $project->getTranslation('name') ?? 'No name' }}
                    </h3>
                    <span class="text-xs text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">
                        {{ $project->year }}
                    </span>
                </div>

                <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">
                    {{ $project->getTranslation('description') ?? 'No description' }}
                </p>

                <!-- Categories (previously called competences) -->
                @if($project->categories->count() > 0)
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach($project->categories->take(4) as $category)
                        <a href="/portfolio/competences/{{ $category->slug }}"
                           class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded text-xs hover:scale-105 transition-transform hover:bg-primary-200 dark:hover:bg-primary-800/50">
                            {{ $category->getTranslation('name') ?? $category->name }}
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
                        <a href="/portfolio/{{ $project->projectType->slug }}"
                           class="hover:text-primary-500 transition-colors">
                            {{ $project->projectType->name ?? 'N/A' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<?php

use App\Models\Project;
use function Livewire\Volt\{computed};

$featuredProjects = computed(fn() => Project::active()
    ->featured()
    ->with(['projectType', 'competences' => function ($q) {
        $q->with(['translations' => function ($tq) {
            $tq->whereIn('locale', [app()->getLocale(), config('app.fallback_locale', 'en')]);
        }]);
    }])
    ->with(['translations' => function ($q) {
        $q->whereIn('locale', [app()->getLocale(), config('app.fallback_locale', 'en')]);
    }])
    ->ordered()
    ->limit(3)
    ->get());

?>

@volt('portfolio-component')
<section id="portfolio" class="py-16 bg-gray-50 dark:bg-gray-800/30 w-full">
    <div class="fluid-container">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 fade-in">{{ __('gothamfolio.portfolio.title') }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($this->featuredProjects as $project)
            <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg transition-transform hover:scale-105 fade-in">
                <!-- Project Image or Gradient Placeholder -->
                <div class="h-48 bg-gradient-to-r from-primary-400 to-purple-500 flex items-center justify-center">
                    @if($project->image)
                    <img src="{{ asset($project->image) }}" alt="{{ $project->getTranslation('name') ?? $project->name }}" class="w-full h-full object-cover">
                    @else
                    <i class="fas fa-{{ $project->projectType->icon ?? 'code' }} text-white text-5xl"></i>
                    @endif
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $project->getTranslation('name') ?? $project->name }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        {{ $project->getTranslation('description') ?? $project->description }}
                    </p>

                    <!-- Competence Tags -->
                    <div class="flex flex-wrap gap-2">
                        @foreach($project->competences->take(3) as $competence)
                        <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm">
                            {{ $competence->getTranslation('name') ?? $competence->name }}
                        </span>
                        @endforeach
                        @if($project->competences->count() > 3)
                        <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm">
                            +{{ $project->competences->count() - 3 }}
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12 fade-in">
            <a href="/portfolio" class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors inline-flex items-center">
                <span>{{ __('gothamfolio.portfolio.view_all_projects') }}</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endvolt

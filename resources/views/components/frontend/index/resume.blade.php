<?php

use App\Models\ResumeSummary;
use function Livewire\Volt\{computed};

$experiences = computed(fn() => ResumeSummary::active()
    ->type('experience')
    ->withCurrentTranslations()
    ->ordered()
    ->get());

$educations = computed(fn() => ResumeSummary::active()
    ->type('education')
    ->withCurrentTranslations()
    ->ordered()
    ->get());

$skills = computed(fn() => ResumeSummary::active()
    ->type('skill')
    ->withCurrentTranslations()
    ->ordered()
    ->get());

?>

@volt('resume-component')
<section id="resume" class="py-16 w-full">
    <div class="fluid-container">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 fade-in">{{ __('gothamfolio.resume.title') }}</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 fade-in">
            <!-- Experience Summary -->
            <div>
                <h3 class="text-2xl font-bold mb-6 flex items-center">
                    <i class="fas fa-briefcase text-primary-500 mr-3"></i>
                    {{ __('gothamfolio.resume.experience') }}
                </h3>

                <div class="space-y-6">
                    @foreach($this->experiences as $experience)
                    <div class="pl-6 border-l-2 border-primary-500">
                        <div class="text-lg font-semibold">{{ $experience->getTranslation('title') ?? $experience->title }}</div>
                        <div class="text-primary-500 mb-1">{{ $experience->getTranslation('subtitle') ?? $experience->subtitle }} | {{ $experience->duration }}</div>
                        @if($experience->getTranslation('description') ?? $experience->description)
                        <p class="text-gray-600 dark:text-gray-400">
                            {{ $experience->getTranslation('description') ?? $experience->description }}
                        </p>
                        @endif
                    </div>
                    @endforeach
                </div>

                <div class="mt-8 text-center">
                    <a href="/resume" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                        <span>{{ __('gothamfolio.resume.full_resume') }}</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Education & Skills Summary -->
            <div>
                <h3 class="text-2xl font-bold mb-6 flex items-center">
                    <i class="fas fa-graduation-cap text-primary-500 mr-3"></i>
                    {{ __('gothamfolio.resume.education') }}
                </h3>

                <div class="space-y-6 mb-8">
                    @foreach($this->educations as $education)
                    <div class="pl-6 border-l-2 border-primary-500">
                        <div class="text-lg font-semibold">{{ $education->getTranslation('title') ?? $education->title }}</div>
                        <div class="text-primary-500 mb-1">{{ $education->getTranslation('subtitle') ?? $education->subtitle }} | {{ $education->duration }}</div>
                        @if($education->getTranslation('description') ?? $education->description)
                        <p class="text-gray-600 dark:text-gray-400">
                            {{ $education->getTranslation('description') ?? $education->description }}
                        </p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Alternative Skills Section with Icons -->
        <div class="mt-16 fade-in">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold flex items-center">
                    <i class="fas fa-tools text-primary-500 mr-3"></i>
                    {{ __('gothamfolio.resume.key_skills') }}
                </h3>
                <a href="/competences" class="text-primary-500 hover:text-primary-600 font-medium flex items-center">
                    <span>{{ __('gothamfolio.resume.all_competences') }}</span>
                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($this->skills as $skill)
                <a href="{{ $skill->link ?? '#' }}" class="group bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500">
                            <i class="fas {{ $skill->icon }} text-xl"></i>
                        </div>
                        @if($skill->percentage)
                        <span class="text-2xl font-bold text-primary-500">{{ $skill->percentage }}%</span>
                        @endif
                    </div>
                    <h4 class="text-lg font-semibold mb-2 group-hover:text-primary-500 transition-colors">
                        {{ $skill->getTranslation('title') ?? $skill->title }}
                    </h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                        {{ $skill->getTranslation('description') ?? $skill->description }}
                    </p>
                </a>
                @endforeach
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-16 text-center fade-in">
            <div class="bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-8">
                <h3 class="text-2xl font-bold mb-4">{{ __('gothamfolio.resume.full_version') }}</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-2xl mx-auto">
                    {{ __('gothamfolio.resume.full_version_description') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/resume" class="inline-flex items-center px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                        <span>{{ __('gothamfolio.resume.open_full_resume') }}</span>
                        <i class="fas fa-external-link-alt ml-2"></i>
                    </a>
                    <a href="/competences" class="inline-flex items-center px-8 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                        <span>{{ __('gothamfolio.resume.all_competences') }}</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endvolt

<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('admin.portfolio.projects.view_project') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-zinc-800 sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-6">
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-gray">
                            {{ __('admin.portfolio.projects.back_to_list') }}
                        </a>
                    </div>

                    <!-- Project Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium mb-4">{{ __('admin.portfolio.projects.basic_information') }}</h3>
                            <dl class="space-y-4">
                                <div>
                                    <dt class="text-sm font-medium text-zinc-500">{{ __('admin.portfolio.projects.project_type') }}</dt>
                                    <dd class="mt-1 text-sm text-zinc-900">{{ $project->projectType->name ?? 'N/A' }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-zinc-500">{{ __('admin.portfolio.projects.year') }}</dt>
                                    <dd class="mt-1 text-sm text-zinc-900">{{ $project->year }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-zinc-500">{{ __('admin.portfolio.projects.status') }}</dt>
                                    <dd class="mt-1 text-sm text-zinc-900">{{ $project->status }}</dd>
                                </div>
                            </dl>
                        </div>

                        <!-- Translations -->
                        <div>
                            <h3 class="text-lg font-medium mb-4">{{ __('admin.portfolio.projects.translations') }}</h3>
                            @foreach($activeLanguages as $language)
                                <div class="mb-3 p-3 border rounded-lg {{ $existingTranslations->contains($language->code) ? 'bg-green-50 border-green-200' : 'bg-gray-50 border-gray-200' }}">
                                    <strong>{{ strtoupper($language->code) }}</strong>:
                                    {{ $existingTranslations->contains($language->code) ? 'Available' : 'Not translated' }}
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-8 pt-6 border-t border-zinc-200">
                        <div class="flex space-x-3">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">
                                {{ __('admin.general.edit') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>

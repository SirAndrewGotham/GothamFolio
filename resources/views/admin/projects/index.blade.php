<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('admin.portfolio.projects.title') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow dark:bg-zinc-800 sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-medium">{{ __('admin.portfolio.projects.title') }}</h3>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                            {{ __('admin.portfolio.projects.create_new') }}
                        </a>
                    </div>

                    @if($projects->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-700">
                                <thead class="bg-zinc-50 dark:bg-zinc-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-300 uppercase tracking-wider">{{ __('admin.general.project') }}</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-300 uppercase tracking-wider">{{ __('admin.portfolio.projects.project_type') }}</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-300 uppercase tracking-wider">{{ __('admin.portfolio.projects.year') }}</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-300 uppercase tracking-wider">{{ __('admin.portfolio.projects.status') }}</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-300 uppercase tracking-wider">{{ __('admin.general.actions') }}</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-zinc-800 divide-y divide-zinc-200 dark:divide-zinc-700">
                                @foreach($projects as $project)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                @if($project->image)
                                                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->name }}" class="w-12 h-12 object-cover rounded mr-3">
                                                @else
                                                    <div class="w-12 h-12 bg-zinc-200 dark:bg-zinc-700 rounded mr-3 flex items-center justify-center">
                                                        <i class="fas fa-briefcase text-zinc-400"></i>
                                                    </div>
                                                @endif
                                                <div>
                                                    <div class="text-sm font-medium text-zinc-900 dark:text-zinc-100">{{ $project->name }}</div>
                                                    <div class="text-sm text-zinc-500 dark:text-zinc-400">
                                                        {{ __('admin.portfolio.projects.categories_count', ['count' => $project->categories->count()]) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-900 dark:text-zinc-100">
                                            {{ $project->projectType->name ?? 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-900 dark:text-zinc-100">
                                            {{ $project->year }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $project->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $project->is_active ? __('admin.portfolio.projects.active') : __('admin.general.inactive') }}
                                                </span>
                                            @if($project->featured)
                                                <span class="ml-2 px-2 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded-full">{{ __('admin.portfolio.projects.featured') }}</span>
                                            @endif
                                            <span class="ml-2 px-2 py-1 text-xs font-semibold bg-gray-100 text-gray-800 rounded-full">
                                                    {{ ucfirst($project->status) }}
                                                </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('admin.projects.edit', $project) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">{{ __('admin.general.edit') }}</a>
                                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('{{ __('admin.portfolio.projects.confirm_delete') }}')">{{ __('admin.general.delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $projects->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <i class="fas fa-briefcase text-4xl text-zinc-400 mb-4"></i>
                            <h4 class="text-lg font-medium text-zinc-600 dark:text-zinc-400">{{ __('admin.portfolio.projects.no_projects') }}</h4>
                            <p class="text-zinc-500 dark:text-zinc-500 mt-2">{{ __('admin.portfolio.projects.create_first') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>

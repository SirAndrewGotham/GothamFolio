<x-backend.layouts.app title="{{ __('Resume Management') }}">
    <flux:header class="border-b border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800">
        <h1 class="text-xl font-semibold">{{ __('Resume Management') }}</h1>
        <flux:spacer />
        <flux:button :href="route('admin.resume.create')" icon="plus" variant="primary">
            {{ __('Add New Resume Item') }}
        </flux:button>
    </flux:header>

    <main class="p-6">
        @if($resumeItems->isEmpty())
            <div class="text-center py-12">
                <div class="mx-auto h-12 w-12 text-gray-400">
                    <i class="fas fa-graduation-cap text-3xl"></i>
                </div>
                <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('No resume items yet') }}</h3>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ __('Get started by creating your first resume item.') }}</p>
                <div class="mt-6">
                    <flux:button :href="route('admin.resume.create')" icon="plus" variant="primary">
                        {{ __('Create Resume Item') }}
                    </flux:button>
                </div>
            </div>
        @else
            @php
                $groupedItems = $resumeItems->groupBy('type');
                $types = ['experience' => ['icon' => 'fa-briefcase', 'color' => 'blue', 'label' => __('Experience')], 
                         'education' => ['icon' => 'fa-graduation-cap', 'color' => 'green', 'label' => __('Education')],
                         'skill' => ['icon' => 'fa-tools', 'color' => 'yellow', 'label' => __('Skills')]];
            @endphp

            <div class="space-y-6">
                @foreach($types as $type => $typeInfo)
                    @if($groupedItems->has($type))
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="bg-gray-50 dark:bg-gray-700 px-6 py-3 border-b border-gray-200 dark:border-gray-600">
                            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 flex items-center">
                                <i class="fas {{ $typeInfo['icon'] }} mr-2 text-{{ $typeInfo['color'] }}-500"></i>
                                {{ $typeInfo['label'] }}
                            </h2>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Title') }}</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Status') }}</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Order') }}</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach($groupedItems[$type] as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center gap-3">
                                            @if($item->icon)
                                                <i class="{{ $item->icon }} h-5 w-5 text-gray-400"></i>
                                            @endif
                                            <div>
                                                <div class="font-medium text-gray-900 dark:text-gray-100">{{ $item->getTranslation('title') }}</div>
                                                <div class="text-sm text-gray-500">{{ $item->getTranslation('subtitle') }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($item->is_active)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300">
                                                {{ __('Active') }}
                                            </span>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                                {{ __('Inactive') }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $item->order }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.resume.edit', $item) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">
                                                {{ __('Edit') }}
                                            </a>
                                            <form action="{{ route('admin.resume.destroy', $item) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300" onclick="return confirm('{{ __('Are you sure you want to delete this resume item?') }}')">
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                @endforeach
            </div>
        @endif
    </main>
</x-backend.layouts.app>

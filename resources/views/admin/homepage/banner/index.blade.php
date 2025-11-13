<x-backend.layouts.app title="{{ __('Banner Management') }}">
    <flux:header class="border-b border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800">
        <h1 class="text-xl font-semibold">{{ __('admin.homepage.banner.title') }}</h1>
        <flux:spacer />
        <flux:button :href="route('admin.banner.create')" icon="plus" variant="primary">
            {{ __('admin.homepage.banner.add_new') }}
        </flux:button>
    </flux:header>

    <main class="p-6">
        @if($banners->isEmpty())
            <div class="text-center py-12">
                <div class="mx-auto h-12 w-12 text-gray-400">
                    <i class="fas fa-photo-video text-3xl"></i>
                </div>
                <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('admin.homepage.banner.no_banners') }}</h3>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ __('admin.homepage.banner.get_started') }}</p>
                <div class="mt-6">
                    <flux:button :href="route('admin.banner.create')" icon="plus" variant="primary">
                        {{ __('admin.homepage.banner.create_banner') }}
                    </flux:button>
                </div>
            </div>
        @else
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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
                        @foreach($banners as $banner)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-3">
                                        @if($banner->image_path)
                                            <img src="{{ asset($banner->image_path) }}" alt="{{ $banner->title }}" class="h-10 w-10 rounded object-cover">
                                        @endif
                                        <div>
                                            <div class="font-medium text-gray-900 dark:text-gray-100">{{ $banner->title }}</div>
                                            <div class="text-sm text-gray-500">{{ Str::limit($banner->description, 50) }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($banner->is_active)
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
                                    {{ $banner->order }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.banner.edit', $banner) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">
                                            {{ __('Edit') }}
                                        </a>
                                        <form action="{{ route('admin.banner.destroy', $banner) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300" onclick="return confirm('{{ __('Are you sure you want to delete this banner?') }}')">
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
    </main>
</x-backend.layouts.app>

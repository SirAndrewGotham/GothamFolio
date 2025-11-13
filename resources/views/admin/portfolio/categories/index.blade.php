<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Portfolio Categories') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-zinc-800 sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-medium">Portfolio Categories</h3>
                        <a href="{{ route('admin.portfolio.categories.create') }}" class="btn btn-primary">
                            {{ __('Add New Category') }}
                        </a>
                    </div>

                    @if($categories->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-700">
                                <thead class="bg-zinc-50 dark:bg-zinc-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-300 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-300 uppercase tracking-wider">Cover</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-300 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-zinc-800 divide-y divide-zinc-200 dark:divide-zinc-700">
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-zinc-900 dark:text-zinc-100">{{ $category->name }}</div>
                                                @if($category->description)
                                                    <div class="text-sm text-zinc-500 dark:text-zinc-400">{{ Str::limit($category->description, 50) }}</div>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if($category->cover)
                                                    <img src="{{ Storage::url($category->cover) }}" alt="{{ $category->name }}" class="w-16 h-16 object-cover rounded">
                                                @else
                                                    <div class="w-16 h-16 bg-zinc-200 dark:bg-zinc-700 rounded flex items-center justify-center">
                                                        <i class="fas fa-image text-zinc-400"></i>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $category->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $category->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                                @if($category->is_featured)
                                                    <span class="ml-2 px-2 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded-full">Featured</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <a href="{{ route('admin.portfolio.categories.edit', $category) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                                <form action="{{ route('admin.portfolio.categories.destroy', $category) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $categories->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <i class="fas fa-folder-open text-4xl text-zinc-400 mb-4"></i>
                            <h4 class="text-lg font-medium text-zinc-600 dark:text-zinc-400">No portfolio categories found</h4>
                            <p class="text-zinc-500 dark:text-zinc-500 mt-2">Create your first portfolio category to get started.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>

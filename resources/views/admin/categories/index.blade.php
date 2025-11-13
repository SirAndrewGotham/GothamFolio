<x-backend.layouts.app :title="__('Categories')">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Categories</h1>
        <div class="flex space-x-3">
            <a href="{{ route('admin.categories.index', ['filter' => 'all']) }}" class="btn btn-gray {{ request('filter', 'all') === 'all' ? 'btn-primary' : 'btn-gray' }}">All</a>
            <a href="{{ route('admin.categories.index', ['filter' => 'gallery']) }}" class="btn {{ request('filter') === 'gallery' ? 'btn-primary' : 'btn-gray' }}">Gallery Categories</a>
            <a href="{{ route('admin.categories.index', ['filter' => 'available']) }}" class="btn {{ request('filter') === 'available' ? 'btn-primary' : 'btn-gray' }}">Available</a>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                Create Category
            </a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Galleries
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Status
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($categories as $category)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $category->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $category->galleries_count }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs rounded-full {{ $category->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $category->is_active ? 'Active' : 'Inactive' }}
                        </span>
                        @if($category->is_featured)
                            <span class="ml-2 px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Featured</span>
                        @endif
                        @if($category->galleries_count > 0)
                            <span class="ml-2 px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Gallery</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('admin.categories.show', $category) }}" class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                        <a href="{{ route('admin.categories.edit', $category) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline">
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
</x-backend.layouts.app>

<x-backend.layouts.app :title="$category->name">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">{{ $category->name }}</h1>
            <div class="flex space-x-3">
                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-secondary">Edit</a>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-gray">Back to List</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-lg font-semibold mb-3">Category Details</h2>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Name</dt>
                            <dd class="text-sm">{{ $category->name }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Slug</dt>
                            <dd class="text-sm">{{ $category->slug }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                            <dd class="text-sm">
                                <span class="px-2 py-1 text-xs rounded-full {{ $category->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $category->is_active ? 'Active' : 'Inactive' }}
                                </span>
                                @if($category->is_featured)
                                    <span class="ml-2 px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Featured</span>
                                @endif
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Created</dt>
                            <dd class="text-sm">{{ $category->created_at->format('M d, Y H:i') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Updated</dt>
                            <dd class="text-sm">{{ $category->updated_at->format('M d, Y H:i') }}</dd>
                        </div>
                    </dl>
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-3">Description</h2>
                    <div class="prose prose-sm max-w-none">
                        {{ $category->description ?? 'No description provided.' }}
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-semibold mb-3">Translations</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold text-sm mb-2">English</h3>
                        <p class="text-sm"><strong>Name:</strong> {{ $category->getTranslation('name', 'en') }}</p>
                        <p class="text-sm"><strong>Description:</strong> {{ $category->getTranslation('description', 'en') ?? 'N/A' }}</p>
                    </div>
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold text-sm mb-2">Esperanto</h3>
                        <p class="text-sm"><strong>Name:</strong> {{ $category->getTranslation('name', 'eo') }}</p>
                        <p class="text-sm"><strong>Description:</strong> {{ $category->getTranslation('description', 'eo') ?? 'N/A' }}</p>
                    </div>
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold text-sm mb-2">Russian</h3>
                        <p class="text-sm"><strong>Name:</strong> {{ $category->getTranslation('name', 'ru') }}</p>
                        <p class="text-sm"><strong>Description:</strong> {{ $category->getTranslation('description', 'ru') ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-semibold mb-3">Galleries in this Category ({{ $category->galleries->count() }})</h2>
                @if($category->galleries->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
                        @foreach($category->galleries as $gallery)
                            <div class="border rounded-lg p-3">
                                <h3 class="text-sm font-medium">{{ $gallery->title }}</h3>
                                <p class="text-xs text-gray-500">{{ $gallery->images_count }} images</p>
                                <p class="text-xs text-gray-500">{{ $gallery->year }}</p>
                                <a href="{{ route('admin.galleries.show', $gallery) }}" class="text-xs text-blue-600 hover:text-blue-900 mt-2 inline-block">View Gallery</a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 mt-4">No galleries in this category yet.</p>
                @endif
            </div>
        </div>
    </div>
</x-backend.layouts.app>

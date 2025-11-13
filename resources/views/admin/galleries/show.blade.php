<x-backend.layouts.app :title="$gallery->title">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">{{ $gallery->title }}</h1>
            <div class="flex space-x-3">
                <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-secondary">Edit</a>
                <a href="{{ route('admin.galleries.index') }}" class="btn btn-gray">Back to List</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-lg font-semibold mb-3">Gallery Details</h2>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Title</dt>
                            <dd class="text-sm">{{ $gallery->title }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Slug</dt>
                            <dd class="text-sm">{{ $gallery->slug }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Year</dt>
                            <dd class="text-sm">{{ $gallery->year ?? 'Not set' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                            <dd class="text-sm">
                                <span class="px-2 py-1 text-xs rounded-full {{ $gallery->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $gallery->is_published ? 'Published' : 'Draft' }}
                                </span>
                                @if($gallery->is_featured)
                                    <span class="ml-2 px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Featured</span>
                                @endif
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Order</dt>
                            <dd class="text-sm">{{ $gallery->order ?? 'Not set' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Created</dt>
                            <dd class="text-sm">{{ $gallery->created_at->format('M d, Y H:i') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Updated</dt>
                            <dd class="text-sm">{{ $gallery->updated_at->format('M d, Y H:i') }}</dd>
                        </div>
                    </dl>
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-3">Description</h2>
                    <div class="prose prose-sm max-w-none">
                        {{ $gallery->description ?? 'No description provided.' }}
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-semibold mb-3">Translations</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold text-sm mb-2">English</h3>
                        <p class="text-sm"><strong>Title:</strong> {{ $gallery->getTranslation('title', 'en') }}</p>
                        <p class="text-sm"><strong>Description:</strong> {{ $gallery->getTranslation('description', 'en') ?? 'N/A' }}</p>
                    </div>
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold text-sm mb-2">Esperanto</h3>
                        <p class="text-sm"><strong>Title:</strong> {{ $gallery->getTranslation('title', 'eo') }}</p>
                        <p class="text-sm"><strong>Description:</strong> {{ $gallery->getTranslation('description', 'eo') ?? 'N/A' }}</p>
                    </div>
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold text-sm mb-2">Russian</h3>
                        <p class="text-sm"><strong>Title:</strong> {{ $gallery->getTranslation('title', 'ru') }}</p>
                        <p class="text-sm"><strong>Description:</strong> {{ $gallery->getTranslation('description', 'ru') ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center mt-6">
                <h2 class="text-lg font-semibold">Images ({{ $gallery->images->count() }})</h2>
                <div class="flex space-x-3">
                    <a href="{{ route('admin.galleries.images.create', $gallery) }}" class="btn btn-primary">
                        Upload Single Image
                    </a>
                    <a href="{{ route('admin.galleries.images.create-multiple', $gallery) }}" class="btn btn-primary">
                        Upload Multiple Images
                    </a>
                    <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-secondary">
                        Manage Images
                    </a>
                </div>
            </div>

            @if($gallery->images->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
                    @foreach($gallery->images as $image)
                        <div class="border rounded-lg p-3">
                            <div class="aspect-w-16 aspect-h-9 mb-3">
                                <img src="{{ asset('storage/' . $image->file_path) }}" alt="{{ $image->title }}"
                                     class="w-full h-32 object-cover rounded">
                            </div>
                            <h3 class="text-sm font-medium">{{ $image->title }}</h3>
                            <p class="text-xs text-gray-500">{{ $image->file_name }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 mt-4">No images in this gallery yet.</p>
            @endif
        </div>
    </div>
</x-backend.layouts.app>

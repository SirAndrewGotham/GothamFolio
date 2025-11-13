<x-backend.layouts.app :title="'Images - ' . $gallery->title">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Images in {{ $gallery->title }}</h1>
        <div class="flex space-x-3">
            <a href="{{ route('admin.galleries.images.create', $gallery) }}" class="btn btn-primary">
                Add Image
            </a>
            <a href="{{ route('admin.galleries.index') }}" class="btn btn-gray">
                Back to Galleries
            </a>
        </div>
    </div>

    @if($images->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($images as $image)
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('storage/' . $image->file_path) }}" alt="{{ $image->title }}"
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">{{ $image->title }}</h3>
                        <p class="text-sm text-gray-600">{{ $image->file_name }}</p>
                        <div class="flex justify-between items-center mt-3">
                    <span class="text-xs {{ $image->is_published ? 'text-green-600' : 'text-gray-600' }}">
                        {{ $image->is_published ? 'Published' : 'Draft' }}
                    </span>
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.galleries.images.edit', [$gallery, $image]) }}"
                                   class="text-blue-600 hover:text-blue-800 text-sm">Edit</a>
                                <form action="{{ route('admin.galleries.images.destroy', [$gallery, $image]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 text-sm"
                                            onclick="return confirm('Delete this image?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $images->links() }}
        </div>
    @else
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <p class="text-gray-500">No images in this gallery yet.</p>
            <a href="{{ route('admin.galleries.images.create', $gallery) }}" class="btn btn-primary mt-4">
                Add First Image
            </a>
        </div>
    @endif
</x-backend.layouts.app>

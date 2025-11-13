<x-backend.layouts.app :title="'Upload Images - ' . $gallery->title">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Upload Images to {{ $gallery->title }}</h1>

        <form action="{{ route('admin.galleries.images.store-multiple', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="bg-white rounded-lg shadow p-6 space-y-6">
                <div>
                    <label for="images" class="block text-sm font-medium text-gray-700">Select Images *</label>
                    <input type="file" name="images[]" id="images" multiple required accept="image/*"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <p class="text-xs text-gray-500 mt-1">Hold Ctrl/Cmd to select multiple images</p>
                </div>

                <div class="mb-4">
                    <label for="title_prefix_en" class="block text-sm font-medium text-gray-700 mb-1">Title Prefix (English)</label>
                    <input type="text" name="title_prefix:en" id="title_prefix_en" placeholder="e.g., Photo - "
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="title_prefix_eo" class="block text-sm font-medium text-gray-700 mb-1">Title Prefix (Esperanto)</label>
                    <input type="text" name="title_prefix:eo" id="title_prefix_eo" placeholder="e.g., Foto - "
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="title_prefix_ru" class="block text-sm font-medium text-gray-700 mb-1">Title Prefix (Russian)</label>
                    <input type="text" name="title_prefix:ru" id="title_prefix_ru" placeholder="e.g., Фото - "
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="is_published" id="is_published" value="1" checked
                           class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="is_published" class="ml-2 text-sm text-gray-700">Publish all images</label>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Upload Images</button>
                </div>
            </div>
        </form>
    </div>
</x-backend.layouts.app>

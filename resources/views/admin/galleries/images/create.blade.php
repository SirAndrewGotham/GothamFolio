<x-backend.layouts.app :title="__('Upload Image')">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Upload Image to {{ $gallery->title }}</h1>
            <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-gray">Back to List</a>
        </div>

        <form action="{{ route('admin.galleries.images.store', $gallery) }}" method="POST"
              enctype="multipart/form-data">
            @csrf

            <div class="bg-white rounded-lg shadow p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h2 class="text-lg font-semibold mb-4">Image & Basic Info</h2>

                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Select a
                                File</label>
                            <input type="file" name="image" id="image" required accept="image/*"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class=" mb-4">
                            <label for="title_en" class="block text-sm font-medium text-gray-700 mb-1">Title (English)</label>
                            <input type="text" name="title:en" id="title_en" value="{{ old('title:en') }}" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('title:en')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="title_eo" class="block text-sm font-medium text-gray-700 mb-1">Title
                                (Esperanto)</label>
                            <input type="text" name="title:eo" id="title_eo" value="{{ old('title:eo') }}" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('title:eo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="title_ru" class="block text-sm font-medium text-gray-700 mb-1">Title
                                (Russian)</label>
                            <input type="text" name="title:ru" id="title_ru" value="{{ old('title:ru') }}" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('title:ru')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Year</label>
                            <input type="number" name="year" id="year" value="{{ old('year') }}" min="1900"
                                   max="{{ date('Y') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('year')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="camera_model" class="block text-sm font-medium text-gray-700 mb-1">Camera
                                Model</label>
                            <input type="text" name="camera_model" id="camera_model" value="{{ old('camera_model') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('camera_model')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="camera_settings" class="block text-sm font-medium text-gray-700 mb-1">Camera
                                Settings</label>
                            <input type="text" name="camera_settings" id="camera_settings"
                                   value="{{ old('camera_settings') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('camera_settings')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                            <input type="text" name="location" id="location" value="{{ old('location') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('location')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold mb-4">Status & Description</h2>

                        <div class="mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_published" value="1"
                                       {{ old('is_published', 1) ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Published</span>
                            </label>
                        </div>

                        <div class="mb-4">
                            <label for="description_en" class="block text-sm font-medium text-gray-700 mb-1">Description
                                (English)</label>
                            <textarea name="description:en" id="description_en" rows="3"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description:en') }}</textarea>
                            @error('description:en')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description_eo" class="block text-sm font-medium text-gray-700 mb-1">Description
                                (Esperanto)</label>
                            <textarea name="description:eo" id="description_eo" rows="3"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description:eo') }}</textarea>
                            @error('description:eo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description_ru" class="block text-sm font-medium text-gray-700 mb-1">Description
                                (Russian)</label>
                            <textarea name="description:ru" id="description_ru" rows="3"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description:ru') }}</textarea>
                            @error('description:ru')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="order" class="block text-sm font-medium text-gray-700 mb-1">Order</label>
                            <input type="number" name="order" id="order" value="{{ old('order') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('order')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-gray">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        Upload Image
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-backend.layouts.app>

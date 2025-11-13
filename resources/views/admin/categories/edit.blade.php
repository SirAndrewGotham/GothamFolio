<x-backend.layouts.app :title="__('Edit Category')">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Edit Category: {{ $category->name }}</h1>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-gray">Back to List</a>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h2 class="text-lg font-semibold mb-4">Basic Information</h2>

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name
                                (English)</label>
                            <input type="text" name="name:en" id="name"
                                   value="{{ old('name:en', $category->getTranslation('name', 'en')) }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                   required>
                            @error('name:en')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="name_eo" class="block text-sm font-medium text-gray-700 mb-1">Name
                                (Esperanto)</label>
                            <input type="text" name=" name:eo" id="name_eo"
                            value="{{ old('name:eo', $category->getTranslation('name', 'eo')) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2
                            focus:ring-blue-500" required>
                            @error('name:eo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="name_ru" class="block text-sm font-medium text-gray-700 mb-1">Name
                                (Russian)</label>
                            <input type="text" name="name:ru" id="name_ru"
                                   value="{{ old('name:ru', $category->getTranslation('name', 'ru')) }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                   required>
                            @error('name:ru')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="cover" class="block text-sm font-medium text-gray-700 mb-1">Cover Image
                                URL</label>
                            <input type="text" name="cover" id="cover" value="{{ old('cover', $category->cover) }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('cover')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold mb-4">Status & Description</h2>

                        <div class="mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" value="1"
                                       {{ old('is_active', $category->is_active) ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Active</span>
                            </label>
                        </div>

                        <div class="mb-4">
                            <label class="flex items-center">
                            <input type="checkbox" name="is_featured" value="1"
                                   {{ old('is_featured', $category->is_featured) ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Featured</span>
                            </label>
                        </div>

                        <div class="mb-4">
                            <label for="description_en" class="block text-sm font-medium text-gray-700 mb-1">Description
                                (English)</label>
                            <textarea name="description:en" id="description_en" rows="3"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description:en', $category->getTranslation('description', 'en')) }}</textarea>
                            @error('description:en')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description_eo" class="block text-sm font-medium text-gray-700 mb-1">Description
                                (Esperanto)</label>
                            <textarea name="description:eo" id="description_eo" rows="3"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description:eo', $category->getTranslation('description', 'eo')) }}</textarea>
                            @error('description:eo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description_ru" class="block text-sm font-medium text-gray-700 mb-1">Description
                                (Russian)</label>
                            <textarea name="description:ru" id="description_ru" rows="3"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description:ru', $category->getTranslation('description', 'ru')) }}</textarea>
                            @error('description:ru')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-gray">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</x-backend.layouts.app>

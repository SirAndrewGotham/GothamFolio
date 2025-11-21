@php
    use Illuminate\Support\Facades\Storage;
@endphp

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Image upload functionality
            const fileInput = document.getElementById('image');
            const previewContainer = document.getElementById('image-preview');
            const previewImage = document.getElementById('preview-image');
            const removeButton = document.getElementById('remove-image');
            const dropZone = document.querySelector('label[for="image"]');

            // Handle file selection
            fileInput.addEventListener('change', function (e) {
                handleFileSelection(e.target.files[0]);
            });

            // Handle drag and drop
            dropZone.addEventListener('dragover', function (e) {
                e.preventDefault();
                dropZone.classList.add('border-blue-500', 'bg-blue-50');
            });

            dropZone.addEventListener('dragleave', function (e) {
                e.preventDefault();
                dropZone.classList.remove('border-blue-500', 'bg-blue-50');
            });

            dropZone.addEventListener('drop', function (e) {
                e.preventDefault();
                dropZone.classList.remove('border-blue-500', 'bg-blue-50');

                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    handleFileSelection(files[0]);
                    fileInput.files = files; // Set the file input to the dropped file
                }
            });

            // Handle remove button click
            removeButton.addEventListener('click', function () {
                fileInput.value = '';
                previewImage.src = '';
                previewContainer.classList.add('hidden');
            });

            // Function to handle file selection (used by both change and drop events)
            function handleFileSelection(file) {
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        previewImage.src = e.target.result;
                        previewContainer.classList.remove('hidden');
                    }
                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
@endpush

<x-backend.layouts.app :title="__('admin.image.upload_image')">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">{{ __('admin.image.upload_image') }} {{ __('admin.gallery.images_in', ['gallery' => $gallery->title]) }}</h1>
            <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-gray">{{ __('admin.image.back_to_list') }}</a>
        </div>

        <form action="{{ route('admin.galleries.images.store', $gallery) }}" method="POST"
              enctype="multipart/form-data">
            @csrf

            <div class="bg-white rounded-lg shadow p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h2 class="text-lg font-semibold mb-4">{{ __('admin.image.image_info') }}</h2>

                        <!-- Beautiful Image Upload -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-3">{{ __('admin.gallery.click_to_upload') }}</label>

                            <div class="relative group">
                                <div class="flex items-center justify-center w-full">
                                    <label for="image"
                                           class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer border-gray-300 hover:border-blue-400 transition-colors duration-200 group-hover:border-blue-400 bg-gray-50">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-3 text-gray-500 group-hover:text-blue-500 transition-colors duration-200"
                                                 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 group-hover:text-blue-600 transition-colors duration-200">
                                                <span class="font-semibold">{{ __('admin.gallery.click_to_upload') }}</span> {{ __('admin.gallery.drag_and_drop') }}
                                            </p>
                                            <p class="text-xs text-gray-500">{{ __('admin.gallery.image_formats') }}</p>
                                        </div>
                                        <input id="image" name="image" type="file" class="hidden" accept="image/*" required/>
                                    </label>
                                </div>

                                <!-- Preview container -->
                                <div id="image-preview" class="hidden mt-4">
                                    <div class="relative inline-block">
                                        <img id="preview-image" class="w-32 h-32 object-cover rounded-lg shadow-md border border-gray-200" src="" alt="Preview">
                                        <button type="button" id="remove-image" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 shadow-md hover:bg-red-600 transition-colors duration-200">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        @php
                            $activeLanguages = \App\Models\Language::active()->ordered()->get();
                        @endphp

                        @foreach($activeLanguages as $language)
                            <div class="mb-4">
                                <label for="title_{{ $language->code }}" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('admin.image.title_for_language', ['language' => $language->name_english]) }}
                                </label>
                                <input type="text" name="title[{{ $language->code }}]" id="title_{{ $language->code }}"
                                       value="{{ old('title.' . $language->code) }}" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @error('title.' . $language->code)
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach

                        <div class="mb-4">
                            <label for="year" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.gallery.year') }}</label>
                            <input type="number" name="year" id="year" value="{{ old('year') }}" min="1900"
                                   max="{{ date('Y') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('year')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="camera_model" class="block text-sm font-medium text-gray-700 mb-1">
                                {{ __('admin.image.camera_model') }}
                            </label>
                            <input type="text" name="camera_model" id="camera_model" value="{{ old('camera_model') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('camera_model')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="camera_settings" class="block text-sm font-medium text-gray-700 mb-1">
                                {{ __('admin.image.camera_settings') }}
                            </label>
                            <input type="text" name="camera_settings" id="camera_settings"
                                   value="{{ old('camera_settings') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('camera_settings')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="location" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.image.location') }}</label>
                            <input type="text" name="location" id="location" value="{{ old('location') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('location')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold mb-4">{{ __('admin.image.status_description') }}</h2>

                        <div class="mb-4">
                            <label class="flex items-center">
                                <input type="hidden" name="is_published" value="0">
                                <input type="checkbox" name="is_published" value="1"
                                       {{ old('is_published', 1) == 1 ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">{{ __('admin.image.published') }}</span>
                            </label>
                        </div>

                        @foreach($activeLanguages as $language)
                            <div class="mb-4">
                                <label for="description_{{ $language->code }}" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('admin.image.description_for_language', ['language' => $language->name_english]) }}
                                </label>
                                <textarea name="description[{{ $language->code }}]" id="description_{{ $language->code }}" rows="3"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description.' . $language->code) }}</textarea>
                                @error('description.' . $language->code)
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach

                        <div class="mb-4">
                            <label for="order" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.image.order') }}</label>
                            <input type="number" name="order" id="order" value="{{ old('order') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('order')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-gray">{{ __('admin.image.cancel_button') }}</a>
                    <button type="submit" class="btn btn-primary">{{ __('admin.image.upload_button') }}</button>
                </div>
            </div>
        </form>
    </div>
</x-backend.layouts.app>

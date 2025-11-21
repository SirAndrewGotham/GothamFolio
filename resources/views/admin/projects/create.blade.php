<x-backend.layouts.app :title="__('admin.portfolio.projects.create_project')">
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Cover image functionality
            const fileInput = document.getElementById('image');
            const previewContainer = document.getElementById('image-preview');
            const previewImage = document.getElementById('preview-image');
            const removeButton = document.getElementById('remove-image');

            // Handle file selection for cover image
            fileInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        previewImage.src = e.target.result;
                        previewContainer.classList.remove('hidden');
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Handle remove button for cover image
            removeButton.addEventListener('click', function () {
                fileInput.value = '';
                previewContainer.classList.add('hidden');
                previewImage.src = '';
            });

            // Drag and drop for cover image
            const dropZone = fileInput.parentElement;
            dropZone.addEventListener('dragover', function (e) {
                e.preventDefault();
                dropZone.classList.add('border-indigo-500', 'bg-indigo-50', 'dark:bg-indigo-900/20');
            });

            dropZone.addEventListener('dragleave', function (e) {
                e.preventDefault();
                dropZone.classList.remove('border-indigo-500', 'bg-indigo-50', 'dark:bg-indigo-900/20');
            });

            dropZone.addEventListener('drop', function (e) {
                e.preventDefault();
                dropZone.classList.remove('border-indigo-500', 'bg-indigo-50', 'dark:bg-indigo-900/20');

                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files;
                    const event = new Event('change');
                    fileInput.dispatchEvent(event);
                }
            });

            // Project images functionality
            const projectImagesInput = document.getElementById('project_images');
            const projectImagesPreviewContainer = document.getElementById('project-images-preview');

            projectImagesInput.addEventListener('change', function (e) {
                const files = e.target.files;
                projectImagesPreviewContainer.innerHTML = '';

                if (files.length > 0) {
                    projectImagesPreviewContainer.classList.remove('hidden');

                    Array.from(files).forEach((file, index) => {
                        if (file.type.startsWith('image/')) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const previewItem = document.createElement('div');
                                previewItem.className = 'relative group';
                                previewItem.innerHTML = `
                                    <img src="${e.target.result}" class="w-full h-32 object-cover rounded-lg shadow-md border border-zinc-200 dark:border-zinc-600" alt="Preview ${index + 1}">
                                    <button type="button" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 shadow-md hover:bg-red-600 transition-colors duration-200 remove-project-image" data-index="${index}">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                `;
                                projectImagesPreviewContainer.appendChild(previewItem);
                            };
                            reader.readAsDataURL(file);
                        }
                    });
                } else {
                    projectImagesPreviewContainer.classList.add('hidden');
                }
            });

            // Remove individual project image
            projectImagesPreviewContainer.addEventListener('click', function (e) {
                if (e.target.closest('.remove-project-image')) {
                    const button = e.target.closest('.remove-project-image');
                    const index = parseInt(button.getAttribute('data-index'));

                    // Remove the preview item
                    button.closest('.relative').remove();

                    // Remove the file from the input
                    const dt = new DataTransfer();
                    const files = projectImagesInput.files;

                    for (let i = 0; i < files.length; i++) {
                        if (i !== index) {
                            dt.items.add(files[i]);
                        }
                    }

                    projectImagesInput.files = dt.files;

                    // Hide container if no images left
                    if (dt.files.length === 0) {
                        projectImagesPreviewContainer.classList.add('hidden');
                    }
                }
            });

            // Drag and drop for project images
            const projectImagesDropZone = projectImagesInput.parentElement;
            projectImagesDropZone.addEventListener('dragover', function (e) {
                e.preventDefault();
                projectImagesDropZone.classList.add('border-indigo-500', 'bg-indigo-50', 'dark:bg-indigo-900/20');
            });

            projectImagesDropZone.addEventListener('dragleave', function (e) {
                e.preventDefault();
                projectImagesDropZone.classList.remove('border-indigo-500', 'bg-indigo-50', 'dark:bg-indigo-900/20');
            });

            projectImagesDropZone.addEventListener('drop', function (e) {
                e.preventDefault();
                projectImagesDropZone.classList.remove('border-indigo-500', 'bg-indigo-50', 'dark:bg-indigo-900/20');

                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    // Create a new FileList with existing and new files
                    const dt = new DataTransfer();

                    // Add existing files
                    for (let i = 0; i < projectImagesInput.files.length; i++) {
                        dt.items.add(projectImagesInput.files[i]);
                    }

                    // Add new files from drop
                    for (let i = 0; i < files.length; i++) {
                        dt.items.add(files[i]);
                    }

                    projectImagesInput.files = dt.files;
                    const event = new Event('change');
                    projectImagesInput.dispatchEvent(event);
                }
            });
        });
    </script>
@endpush


    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('admin.portfolio.projects.create_project') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-zinc-800 sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-6">
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-gray">{{ __('admin.portfolio.projects.back_to_list') }}</a>
                    </div>

                    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Basic Information -->
                            <div class="md:col-span-2">
                                <h3 class="text-lg font-medium mb-4">{{ __('admin.portfolio.projects.basic_information') }}</h3>
                            </div>

                            <!-- Project Type -->
                            <div>
                                <label for="project_type_id"
                                       class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.project_type') }}
                                    *</label>
                                <select name="project_type_id" id="project_type_id" required
                                        class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                                    <option value="">{{ __('admin.portfolio.projects.select_project_type') }}</option>
                                    @foreach($projectTypes as $type)
                                        <option
                                            value="{{ $type->id }}" {{ old('project_type_id') == $type->id ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('project_type_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Year -->
                            <div>
                                <label for="year" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.year') }}
                                    *</label>
                                <input type="number" name="year" id="year" required min="2000" max="{{ date('Y') }}"
                                       class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white"
                                       value="{{ old('year', date('Y')) }}">
                                @error('year')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.status') }}
                                    *</label>
                                <select name="status" id="status" required
                                        class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                                    <option value="">{{ __('admin.portfolio.projects.select_status') }}</option>
                                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>
                                        {{ __('admin.portfolio.projects.completed') }}
                                    </option>
                                    <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>
                                        {{ __('admin.portfolio.projects.in_progress') }}
                                    </option>
                                    <option value="planned" {{ old('status') == 'planned' ? 'selected' : '' }}>{{ __('admin.portfolio.projects.planned') }}
                                    </option>
                                </select>
                                @error('status')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Duration -->
                            <div>
                                <label for="duration"
                                       class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.duration') }}</label>
                                <input type="text" name="duration" id="duration"
                                       class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white"
                                       value="{{ old('duration') }}" placeholder="e.g., 3 months">
                                @error('duration')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Translation Section -->
                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <h3 class="text-lg font-medium mb-6">{{ __('admin.portfolio.projects.translations') }}</h3>

                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <!-- Name Translations -->
                                <div class="md:col-span-1">
                                    <h4 class="text-md font-medium text-zinc-700 dark:text-zinc-300 mb-4">{{ __('admin.portfolio.projects.project_names') }}</h4>
                                    @if($languages && count($languages) > 0)
                                        @foreach($languages as $language)
                                            <div class="mb-4">
                                                <label for="name_{{ $language->code }}"
                                                       class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ strtoupper($language->code) }}
                                                    Name @if($language->code === 'en')
                                                        *
                                                    @endif</label>
                                                <input type="text" name="name[{{ $language->code }}]"
                                                       id="name_{{ $language->code }}"
                                                       @if($language->code === 'en')required @endif
                                                       class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white"
                                                       value="{{ old('name.' . $language->code) }}">
                                                @error('name.' . $language->code)
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="mb-4">
                                            <label for="name_en"
                                                   class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">EN
                                                Name *</label>
                                            <input type="text" name="name[en]" id="name_en" required
                                                   class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white"
                                                   value="{{ old('name.en') }}">
                                            @error('name.en')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    @endif
                                </div>

                                <!-- Description Translations -->
                                <div class="md:col-span-1">
                                    <h4 class="text-md font-medium text-zinc-700 dark:text-zinc-300 mb-4">{{ __('admin.portfolio.projects.project_descriptions') }}</h4>
                                    @if($languages && count($languages) > 0)
                                        @foreach($languages as $language)
                                            <div class="mb-4">
                                                <label for="description_{{ $language->code }}"
                                                       class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ strtoupper($language->code) }}
                                                    Description</label>
                                                <textarea name="description[{{ $language->code }}]"
                                                          id="description_{{ $language->code }}" rows="3"
                                                          class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">{{ old('description.' . $language->code) }}</textarea>
                                                @error('description.' . $language->code)
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="mb-4">
                                            <label for="description_en"
                                                   class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">EN Description</label>
                                            <textarea name="description[en]" id="description_en" rows="3"
                                                      class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">{{ old('description.en') }}</textarea>
                                            @error('description.en')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Media & Links Section -->
                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <h3 class="text-lg font-medium mb-6">{{ __('admin.portfolio.projects.media_links') }}</h3>

                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <!-- Project Image - Enhanced Design -->
                                <div class="md:col-span-2">
                                    <label for="image"
                                           class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-3">{{ __('admin.portfolio.projects.project_cover_image') }}</label>

                                    <div class="relative group">
                                        <div class="flex items-center justify-center w-full">
                                            <label for="image"
                                                   class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer border-zinc-300 dark:border-zinc-600 hover:border-indigo-400 dark:hover:border-indigo-500 transition-colors duration-200 group-hover:border-indigo-400 dark:group-hover:border-indigo-500 bg-zinc-50 dark:bg-zinc-700/50">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg
                                                        class="w-8 h-8 mb-3 text-zinc-500 group-hover:text-indigo-500 dark:text-zinc-400 dark:group-hover:text-indigo-400 transition-colors duration-200"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 16">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="2"
                                                              d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                    </svg>
                                                    <p class="mb-2 text-sm text-zinc-500 dark:text-zinc-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors duration-200">
                                                        <span class="font-semibold">{{ __('admin.portfolio.projects.click_to_upload') }}</span> {{ __('admin.portfolio.projects.drag_and_drop') }}
                                                    </p>
                                                    <p class="text-xs text-zinc-500 dark:text-zinc-400">{{ __('admin.portfolio.projects.image_formats') }}</p>
                                                </div>
                                                <input id="image" name="image" type="file" class="hidden"
                                                       accept="image/*"/>
                                            </label>
                                        </div>

                                        <!-- Preview container (will be populated by JavaScript) -->
                                        <div id="image-preview" class="hidden mt-4">
                                            <div class="relative inline-block">
                                                <img id="preview-image"
                                                     class="w-32 h-32 object-cover rounded-lg shadow-md border border-zinc-200 dark:border-zinc-600"
                                                     src="" alt="Preview">
                                                <button type="button" id="remove-image"
                                                        class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 shadow-md hover:bg-red-600 transition-colors duration-200">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    @error('image')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror

                                    <p class="mt-3 text-sm text-zinc-700 dark:text-zinc-400">
                                        <span class="font-medium text-indigo-600 dark:text-indigo-400">{{ __('admin.portfolio.projects.pro_tip') }}</span>
                                        {{ __('admin.portfolio.projects.cover_image_tip') }}
                                    </p>
                                </div>

                                <!-- URLs -->
                                <div>
                                    <label for="demo_url"
                                           class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.demo_url') }}</label>
                                    <input type="url" name="demo_url" id="demo_url"
                                           class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white"
                                           value="{{ old('demo_url') }}" placeholder="https://">
                                    @error('demo_url')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="github_url"
                                           class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.github_url') }}</label>
                                    <input type="url" name="github_url" id="github_url"
                                           class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white"
                                           value="{{ old('github_url') }}" placeholder="https://">
                                    @error('github_url')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Status & Categories Section -->
                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <h3 class="text-lg font-medium mb-6">{{ __('admin.portfolio.projects.status_categories') }}</h3>

                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <!-- Status Flags -->
                                <div>
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input type="checkbox" name="is_active" id="is_active" value="1"
                                                   {{ old('is_active', true) ? 'checked' : '' }}
                                                   class="rounded border-zinc-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600">
                                            <label for="is_active"
                                                   class="ml-2 text-sm font-medium text-zinc-700 dark:text-zinc-300">Active</label>
                                        </div>
                                        @error('is_active')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror

                                        <div class="flex items-center">
                                            <input type="checkbox" name="featured" id="featured" value="1"
                                                   {{ old('featured') ? 'checked' : '' }}
                                                   class="rounded border-zinc-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600">
                                            <label for="featured"
                                                   class="ml-2 text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.featured') }}</label>
                                        </div>
                                        @error('featured')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Categories -->
                                <div>
                                    <label for="categories"
                                           class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.categories') }}</label>
                                    <select name="categories[]" id="categories" multiple
                                            class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                                        @foreach($categories as $category)
                                            <option
                                                value="{{ $category->id }}" {{ in_array($category->id, old('categories', [])) ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('categories')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Project Images Section -->
                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <h3 class="text-lg font-medium mb-6">{{ __('admin.portfolio.projects.project_gallery_images') }}</h3>

                            <div class="md:col-span-2">
                                <label for="project_images"
                                       class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-3">{{ __('admin.portfolio.projects.project_images') }}</label>

                                <div class="relative group">
                                    <div class="flex items-center justify-center w-full">
                                        <label for="project_images"
                                               class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer border-zinc-300 dark:border-zinc-600 hover:border-indigo-400 dark:hover:border-indigo-500 transition-colors duration-200 group-hover:border-indigo-400 dark:group-hover:border-indigo-500 bg-zinc-50 dark:bg-zinc-700/50">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg
                                                    class="w-8 h-8 mb-3 text-zinc-500 group-hover:text-indigo-500 dark:text-zinc-400 dark:group-hover:text-indigo-400 transition-colors duration-200"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="2"
                                                          d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-zinc-500 dark:text-zinc-400 group-hover:text-indigo-700 dark:group-hover:text-indigo-400 transition-colors duration-200">
                                                    <span class="font-semibold">{{ __('admin.portfolio.projects.click_to_upload') }}</span> {{ __('admin.portfolio.projects.drag_and_drop') }}
                                                    {{ __('admin.portfolio.projects.multiple_images') }}
                                                </p>
                                                <p class="text-xs text-zinc-500 dark:text-zinc-400">{{ __('admin.portfolio.projects.image_formats') }}</p>
                                            </div>
                                            <input id="project_images" name="project_images[]" type="file"
                                                   class="hidden" accept="image/*" multiple/>
                                        </label>
                                    </div>

                                    <!-- Preview container for multiple images -->
                                    <div id="project-images-preview"
                                         class="hidden mt-4 grid grid-cols-2 md:grid-cols-4 gap-4">
                                        <!-- Preview images will be added here by JavaScript -->
                                    </div>
                                </div>

                                @error('project_images')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror

                                <p class="mt-3 text-sm text-zinc-500 dark:text-zinc-400">
                                    <span class="font-medium text-indigo-600 dark:text-indigo-400">{{ __('admin.portfolio.projects.pro_tip') }}</span>
                                    {{ __('admin.portfolio.projects.gallery_images_tip') }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <div class="flex justify-end space-x-3">
                                <a href="{{ route('admin.projects.index') }}" class="btn btn-gray">{{ __('admin.portfolio.projects.cancel') }}</a>
                                <button type="submit" class="btn btn-primary">{{ __('admin.portfolio.projects.create_project') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>

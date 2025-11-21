@php
    use Illuminate\Support\Facades\Storage;
@endphp

<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('admin.portfolio.projects.edit') }}
        </h2>
    </x-slot>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Cover image functionality
                const fileInput = document.getElementById('image');
                const previewContainer = document.getElementById('image-preview');
                const previewImage = document.getElementById('preview-image');
                const removeButton = document.getElementById('remove-image');

                if (fileInput && previewContainer && previewImage && removeButton) {
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

                    // Drag and drop for cover image - Target the LABEL element, not the input's parent
                    const dropZone = document.querySelector('label[for="image"]');
                    if (dropZone) {
                        console.log('Drop zone found:', dropZone);

                        // dragover - prevent default
                        dropZone.addEventListener('dragover', function (e) {
                            e.preventDefault(); // Prevents browser default
                            dropZone.classList.add('border-indigo-500', 'bg-indigo-50', 'dark:bg-indigo-900/20');
                            console.log('Drag over');
                        });

                        // dragleave - prevent default
                        dropZone.addEventListener('dragleave', function (e) {
                            e.preventDefault(); // Prevents browser default
                            dropZone.classList.remove('border-indigo-500', 'bg-indigo-50', 'dark:bg-indigo-900/20');
                            console.log('Drag leave');
                        });

                        // drop - prevent default (MOST IMPORTANT)
                        dropZone.addEventListener('drop', function (e) {
                            e.preventDefault(); // Prevents browser from opening file
                            console.log('Drop event, files:', e.dataTransfer.files);
                            dropZone.classList.remove('border-indigo-500', 'bg-indigo-50', 'dark:bg-indigo-900/20');

                            const files = e.dataTransfer.files;
                            if (files.length > 0) {
                                fileInput.files = files;

                                // MANUALLY UPDATE PREVIEW FOR DRAGGED FILES
                                const file = files[0];
                                if (file && file.type.startsWith('image/')) {
                                    const reader = new FileReader();
                                    reader.onload = function (e) {
                                        previewImage.src = e.target.result;
                                        previewContainer.classList.remove('hidden');
                                        console.log('Preview updated for dragged file');
                                    };
                                    reader.readAsDataURL(file);
                                }

                                // Also dispatch change event for other listeners
                                const event = new Event('change');
                                fileInput.dispatchEvent(event);
                                console.log('File assigned to input and change event dispatched');
                            }
                        });
                    } else {
                        console.log('Drop zone not found');
                    }
                } else {
                    console.log('Image elements not found:', {
                        fileInput: !!fileInput,
                        previewContainer: !!previewContainer,
                        previewImage: !!previewImage,
                        removeButton: !!removeButton
                    });
                }

                // Additional safety: prevent default on entire document for dragover/drop
                document.addEventListener('dragover', function(e) {
                    if (e.target.closest('label[for="image"]')) {
                        e.preventDefault();
                    }
                });

                document.addEventListener('drop', function(e) {
                    if (e.target.closest('label[for="image"]')) {
                        e.preventDefault();
                    }
                });
            });
        </script>
    @endpush

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-zinc-800 sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-6">
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-gray">{{ __('admin.portfolio.projects.back_to_list') }}</a>
                    </div>

                    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- 1. BASIC INFORMATION SECTION -->
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div class="md:col-span-2">
                                <h3 class="text-lg font-medium mb-4">{{ __('admin.portfolio.projects.basic_information') }}</h3>
                            </div>

                            <!-- Project Type -->
                            <div>
                                <label for="project_type_id" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.project_type') }} *</label>
                                <select name="project_type_id" id="project_type_id" required class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                                <option value="">{{ __('admin.portfolio.projects.select_project_type') }}</option>
                                @foreach($projectTypes as $type)
                                    <option value="{{ $type->id }}" {{ old('project_type_id', $project->project_type_id) == $type->id ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                    @endforeach
                                    </select>
                            </div>

                            <!-- Year (with future dates allowed) -->
                            <div>
                                <label for="year" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.year') }} *</label>
                                <input type="number" name="year" id="year" required min="2000" max="2030"
                                       class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white"
                                       value="{{ old('year', $project->year) }}">
                            </div>

                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.status') }} *</label>
                                <select name="status" id="status" required class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                                    <option value="">{{ __('admin.portfolio.projects.select_status') }}</option>
                                    <option value="active" {{ old('status', $project->status) == 'active' ? 'selected' : '' }}>{{ __('admin.portfolio.projects.active') }}</option>
                                    <option value="completed" {{ old('status', $project->status) == 'completed' ? 'selected' : '' }}>{{ __('admin.portfolio.projects.completed') }}</option>
                                    <option value="in_progress" {{ old('status', $project->status) == 'in_progress' ? 'selected' : '' }}>{{ __('admin.portfolio.projects.in_progress') }}</option>
                                    <option value="planned" {{ old('status', $project->status) == 'planned' ? 'selected' : '' }}>{{ __('admin.portfolio.projects.planned') }}</option>
                                </select>
                            </div>

                            <!-- Duration -->
                            <div>
                                <label for="duration" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.duration') }}</label>
                                <input type="text" name="duration" id="duration" class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white" value="{{ old('duration', $project->duration) }}" placeholder="e.g., 3 months">
                            </div>
                        </div>

                        <!-- 2. URLS SECTION -->
                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <h3 class="text-lg font-medium mb-6">{{ __('admin.portfolio.projects.project_urls') }}</h3>

                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <!-- Demo URL -->
                                <div>
                                    <label for="demo_url" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.demo_url') }}</label>
                                    <input type="url" name="demo_url" id="demo_url" class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white" value="{{ old('demo_url', $project->demo_url) }}" placeholder="https://">
                                </div>

                                <!-- GitHub URL -->
                                <div>
                                    <label for="github_url" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.github_url') }}</label>
                                    <input type="url" name="github_url" id="github_url" class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white" value="{{ old('github_url', $project->github_url) }}" placeholder="https://">
                                </div>
                            </div>
                        </div>

                        <!-- 3. STATUS FLAGS SECTION -->
                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <h3 class="text-lg font-medium mb-6">{{ __('admin.portfolio.projects.status_settings') }}</h3>

                            <div class="space-y-4">
                                <!-- Active Status -->
                                <div class="flex items-center">
                                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $project->is_active) ? 'checked' : '' }} class="rounded border-zinc-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600">
                                    <label for="is_active" class="ml-2 text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.active') }}</label>
                                </div>

                                <!-- Featured Status -->
                                <div class="flex items-center">
                                    <input type="checkbox" name="featured" id="featured" value="1" {{ old('featured', $project->featured) ? 'checked' : '' }} class="rounded border-zinc-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600">
                                    <label for="featured" class="ml-2 text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('admin.portfolio.projects.featured') }}</label>
                                </div>
                            </div>
                        </div>

                        <!-- 4. COVER IMAGE SECTION -->
                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <h3 class="text-lg font-medium mb-6">{{ __('admin.portfolio.projects.project_cover_image') }}</h3>

                            <div class="md:col-span-2">
                                <!-- Current Image Preview -->
                                @if($project->image)
                                    <div class="mb-4">
                                        <p class="text-sm text-zinc-500 dark:text-zinc-400 mb-2">{{ __('admin.general.current_image') }}</p>
                                        <img src="{{ Storage::url($project->image) }}" alt="{{ $project->getTranslation('name', 'en') }}" class="w-48 h-36 object-cover rounded-lg shadow-md border border-zinc-200 dark:border-zinc-600">
                                    </div>
                                @endif

                                <div class="relative group">
                                    <div class="flex items-center justify-center w-full">
                                        <label for="image" class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer border-zinc-300 dark:border-zinc-600 hover:border-indigo-400 dark:hover:border-indigo-500 transition-colors duration-200 group-hover:border-indigo-400 dark:group-hover:border-indigo-500 bg-zinc-50 dark:bg-zinc-700/50">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-3 text-zinc-500 group-hover:text-indigo-500 dark:text-zinc-400 dark:group-hover:text-indigo-400 transition-colors duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-zinc-500 dark:text-zinc-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors duration-200">
                                                    <span class="font-semibold">{{ __('admin.portfolio.projects.click_to_upload') }}</span> {{ __('admin.portfolio.projects.drag_and_drop') }}
                                                </p>
                                                <p class="text-xs text-zinc-500 dark:text-zinc-400">{{ __('admin.portfolio.projects.image_formats') }}</p>
                                            </div>
                                            <input id="image" name="image" type="file" class="hidden" accept="image/*"/>
                                        </label>
                                    </div>

                                    <!-- New image preview container -->
                                    <div id="image-preview" class="hidden mt-4">
                                        <div class="relative inline-block">
                                            <img id="preview-image" class="w-32 h-32 object-cover rounded-lg shadow-md border border-zinc-200 dark:border-zinc-600" src="" alt="Preview">
                                            <button type="button" id="remove-image" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 shadow-md hover:bg-red-600 transition-colors duration-200">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                @error('image')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- 5. TRANSLATIONS SECTION -->
                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <h3 class="text-lg font-medium mb-6">{{ __('admin.portfolio.projects.translations') }}</h3>

                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <!-- Name Translations -->
                                <div class="md:col-span-1">
                                    <h4 class="text-md font-medium text-zinc-700 dark:text-zinc-300 mb-4">{{ __('admin.portfolio.projects.project_names') }}</h4>
                                    @foreach($activeLanguages as $language)
                                        <div class="mb-4">
                                            <label for="name_{{ $language->code }}" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
                                                {{ strtoupper($language->code) }} Name @if($language->code === 'en')* @endif
                                            </label>
                                            <input type="text" name="name[{{ $language->code }}]" id="name_{{ $language->code }}"
                                                   @if($language->code === 'en') required @endif
                                                   class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white"
                                                   value="{{ old('name.' . $language->code, $project->getTranslation('name', $language->code)) }}">
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Description Translations -->
                                <div class="md:col-span-1">
                                    <h4 class="text-md font-medium text-zinc-700 dark:text-zinc-300 mb-4">{{ __('admin.portfolio.projects.project_descriptions') }}</h4>
                                    @foreach($activeLanguages as $language)
                                        <div class="mb-4">
                                            <label for="description_{{ $language->code }}" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
                                                {{ strtoupper($language->code) }} Description
                                            </label>
                                            <textarea name="description[{{ $language->code }}]" id="description_{{ $language->code }}" rows="3"
                                                      class="mt-1 block w-full rounded-md border-zinc-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">{{ old('description.' . $language->code, $project->getTranslation('description', $language->code)) }}</textarea>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- 6. SUBMIT BUTTONS -->
                        <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-700">
                            <div class="flex justify-end space-x-3">
                                <a href="{{ route('admin.projects.index') }}" class="btn btn-gray">{{ __('admin.portfolio.projects.cancel') }}</a>
                                <button type="submit" class="btn btn-primary">{{ __('admin.portfolio.projects.update_project') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>

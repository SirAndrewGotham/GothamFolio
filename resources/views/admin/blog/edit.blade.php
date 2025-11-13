@php
    use Illuminate\Support\Facades\Storage;
@endphp

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Featured image functionality
            const featuredImageInput = document.getElementById('featured_image');
            const featuredPreviewContainer = document.getElementById('featured-image-preview');
            const featuredPreviewImage = document.getElementById('preview-featured-image');
            const removeFeaturedButton = document.getElementById('remove-featured-image');

            // Handle file selection for featured image
            featuredImageInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        featuredPreviewImage.src = e.target.result;
                        featuredPreviewContainer.classList.remove('hidden');
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Handle remove button for featured image
            removeFeaturedButton.addEventListener('click', function () {
                featuredImageInput.value = '';
                featuredPreviewContainer.classList.add('hidden');
                featuredPreviewImage.src = '';
            });

            // Drag and drop for featured image
            const featuredDropZone = featuredImageInput.parentElement;
            featuredDropZone.addEventListener('dragover', function (e) {
                e.preventDefault();
                featuredDropZone.classList.add('border-blue-500', 'bg-blue-50', 'dark:bg-blue-900/20');
            });

            featuredDropZone.addEventListener('dragleave', function (e) {
                e.preventDefault();
                featuredDropZone.classList.remove('border-blue-500', 'bg-blue-50', 'dark:bg-blue-900/20');
            });

            featuredDropZone.addEventListener('drop', function (e) {
                e.preventDefault();
                featuredDropZone.classList.remove('border-blue-500', 'bg-blue-50', 'dark:blue-900/20');

                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    featuredImageInput.files = files;
                    const event = new Event('change');
                    featuredImageInput.dispatchEvent(event);
                }
            });
        });
    </script>
@endpush

<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('admin.blog.posts.edit_post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.title_label') }}</label>
                                <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.language_label') }}</label>
                                <div class="mt-1 p-2 bg-gray-100 dark:bg-gray-700 rounded-md text-gray-900 dark:text-gray-100">
                                    {{ $post->language->name_native }} ({{ $post->language->name_english }})
                                </div>
                                <input type="hidden" name="language_id" value="{{ $post->language_id }}">
                            </div>

                            <div>
                                <label for="user_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.author_label') }}</label>
                                <input type="hidden" name="user_id" value="{{ old('user_id', $post->user_id) }}">
                                <input type="text" value="{{ $post->author->name }}" disabled class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 dark:bg-gray-600 dark:border-gray-600 dark:text-white">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="excerpt" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.excerpt') }}</label>
                            <textarea name="excerpt" id="excerpt" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('excerpt', $post->excerpt) }}</textarea>
                        </div>

                        <div class="mb-6">
                            <div class="mb-6">
                                <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.content') }}</label>
                                <textarea name="content" id="content" rows="10" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('content', $post->content) }}</textarea>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
{{--                            <div>--}}
{{--                                <label for="featured_image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.featured_image') }}</label>--}}
{{--                                <input type="file" name="featured_image" id="featured_image" accept="image/*" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">--}}
{{--                            </div>--}}

                            <div class="md:col-span-3">
                                <label for="featured_image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">{{ __('admin.blog.posts.featured_image') }}</label>

                                <!-- Current Image Preview -->
                                @if($post->featured_image)
                                    <div class="mb-4">
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">{{ __('admin.general.current_image') }}</p>
                                        <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-48 h-36 object-cover rounded-lg shadow-md border border-gray-200 dark:border-gray-600">
                                    </div>
                                @endif

                                <div class="relative group">
                                    <div class="flex items-center justify-center w-full">
                                        <label for="featured_image" class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer border-gray-300 dark:border-gray-600 hover:border-blue-400 dark:hover:border-blue-500 transition-colors duration-200 group-hover:border-blue-400 dark:group-hover:border-blue-500 bg-gray-50 dark:bg-gray-700/50">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-3 text-gray-500 group-hover:text-blue-500 dark:text-gray-400 dark:group-hover:text-blue-400 transition-colors duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8 m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-200">
                                                    <span class="font-semibold">{{ __('admin.portfolio.projects.click_to_upload') }}</span> {{ __('admin.portfolio.projects.drag_and_drop') }}
                                                </p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ __('admin.portfolio.projects.image_formats') }}</p>
                                            </div>
                                            <input id="featured_image" name="featured_image" type="file" class="hidden" accept="image/*"/>
                                        </label>
                                    </div>

                                    <!-- New image preview container -->
                                    <div id="featured-image-preview" class="hidden mt-4">
                                        <div class="relative inline-block">
                                            <img id="preview-featured-image" class="w-32 h-32 object-cover rounded-lg shadow-md border border-gray-200 dark:border-gray-600" src="" alt="Preview">
                                            <button type="button" id="remove-featured-image" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 shadow-md hover:bg-red-600 transition-colors duration-200">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                @error('featured_image')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="published_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.publish_date') }}</label>
                                <input type="datetime-local" name="published_at" id="published_at" value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <input type="checkbox" name="is_published" id="is_published" value="1" {{ old('is_published', $post->is_published) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="is_published" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.published') }}</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured', $post->is_featured) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="is_featured" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.featured') }}</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" name="allow_comments" id="allow_comments" value="1" {{ old('allow_comments', $post->allow_comments) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="allow_comments" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.allow_comments') }}</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" name="allow_anonymous_comments" id="allow_anonymous_comments" value="1" {{ old('allow_anonymous_comments', $post->allow_anonymous_comments) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="allow_anonymous_comments" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.allow_anonymous_comments') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div>
                                <label for="meta_title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.meta_title') }}</label>
                                <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $post->meta_title) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            </div>

                            <div class="md:col-span-2">
                                <label for="meta_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.meta_description') }}</label>
                                <textarea name="meta_description" id="meta_description" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('meta_description', $post->meta_description) }}</textarea>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="meta_keywords" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.meta_keywords') }}</label>
                                    <input type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords', $post->meta_keywords) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="comma, separated, keywords">
                                </div>
                            </div>

                            <div class="flex justify-end space-x-4">
                                <a href="{{ route('admin.posts.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                    {{ __('admin.blog.posts.cancel') }}
                                    </a>
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        {{ __('admin.blog.posts.update') }}
                                    </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>

<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('admin.blog.posts.translate_post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.posts.store-translation', $post) }}" method="POST">
                        @csrf

                        <div class="mb-6">
                            <h3 class="text-lg font-semibold">{{ __('admin.blog.translating', ['title' => $post->title]) }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('admin.blog.original_language', ['language' => $post->language->name_native]) }}</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.title_label') }}</label>
                                <input type="text" name="title" id="title" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="{{ $post->title }}">
                            </div>

                            <div>
                                <label for="language_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.language_label') }}</label>
                                @if($availableLanguages->count() > 1)
                                    <select name="language_id" id="language_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                        <option value="">{{ __('Select Language') }}</option>
                                        @foreach($availableLanguages as $language)
                                            <option value="{{ $language->id }}">{{ $language->name_native }} ({{ $language->name_english }})</option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="hidden" name="language_id" value="{{ $availableLanguages->first()->id }}">
                                    <div class="mt-1 p-2 bg-gray-100 dark:bg-gray-700 rounded-md">
                                        {{ $availableLanguages->first()->name_native }} ({{ $availableLanguages->first()->name_english }})
                                    </div>
                                @endif
                            </div>

                            <div>
                                <label for="user_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.author_label') }}</label>
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input type="text" value="{{ auth()->user()->name }}" disabled class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 dark:bg-gray-600 dark:border-gray-600 dark:text-white">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="excerpt" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.excerpt') }}</label>
                            <textarea name="excerpt" id="excerpt" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ $post->excerpt }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.content') }}</label>
{{--                            <textarea name="content" id="content" rows="10" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ $post->content }}</textarea>--}}
                            <tinymce-editor
                                :model-value="old('content', $post->content ?? '')"
                                id="content"
                                name="content"
                                :config="{
            height: 600,
            menubar: 'file edit view insert format tools table help',
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table wordcount help',
            toolbar: 'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media table | code help'
        }"
                                @update:model-value="content = $event"
                            ></tinymce-editor>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div>
                                <label for="featured_image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.featured_image') }}</label>
                                <input type="url" name="featured_image" id="featured_image" value="{{ $post->featured_image }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            </div>

                            <div>
                                <label for="published_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.publish_date') }}</label>
                                <input type="datetime-local" name="published_at" id="published_at" value="{{ $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <input type="checkbox" name="is_published" id="is_published" value="1" {{ $post->is_published ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="is_published" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.published') }}</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ $post->is_featured ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="is_featured" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.featured') }}</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" name="allow_comments" id="allow_comments" value="1" {{ $post->allow_comments ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="allow_comments" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.allow_comments') }}</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" name="allow_anonymous_comments" id="allow_anonymous_comments" value="1" {{ $post->allow_anonymous_comments ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="allow_anonymous_comments" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.allow_anonymous_comments') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div>
                                <label for="meta_title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.meta_title') }}</label>
                                <input type="text" name="meta_title" id="meta_title" value="{{ $post->meta_title }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            </div>

                            <div class="md:col-span-2">
                                <label for="meta_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.meta_description') }}</label>
                                <textarea name="meta_description" id="meta_description" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ $post->meta_description }}</textarea>
                            </div>

                            <div class="md:col-span-3">
                                <label for="meta_keywords" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.meta_keywords') }}</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" value="{{ $post->meta_keywords }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="comma, separated, keywords">
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('admin.posts.show', $post) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('admin.blog.posts.cancel') }}
                                </a>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    {{ __('admin.blog.posts.create_translation') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>

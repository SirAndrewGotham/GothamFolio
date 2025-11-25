<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('admin.blog.posts.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold">{{ __('admin.blog.posts.title') }}</h3>
                        <a href="{{ route('admin.posts.create') }}"
                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('admin.blog.posts.create_new') }}
                        </a>
                    </div>

                    @if($posts->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white dark:bg-gray-700">
                                <thead>
                                <tr>
                                    <th class="px-4 py-2">{{ __('admin.blog.posts.post_id') }}</th>
                                    <th class="px-4 py-2">{{ __('admin.blog.posts.categories') }}</th>
                                    <th class="px-4 py-2">{{ __('admin.blog.posts.title_label') }}</th>
                                    <th class="px-4 py-2">{{ __('admin.blog.posts.languages') }}</th>
                                    <th class="px-4 py-2">{{ __('admin.blog.posts.status_label') }}</th>
                                    <th class="px-4 py-2">{{ __('admin.blog.posts.actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $postId => $postGroup)
                                    @php
                                        // Get current admin UI language or default to English
                                        $adminLanguage = app()->getLocale();
                                        $defaultLanguage = 'en';

                                        // Try to find post in admin UI language first
                                        $displayPost = $postGroup->firstWhere('language.code', $adminLanguage);

                                        // If not found, try default language
                                        if (!$displayPost) {
                                            $displayPost = $postGroup->firstWhere('language.code', $defaultLanguage);
                                        }

                                        // If still not found, use the first post
                                        if (!$displayPost) {
                                            $displayPost = $postGroup->first();
                                        }
                                    @endphp
                                    <tr>
                                        <td class="px-4 py-2">{{ $postId }}</td>
                                        <td class="px-4 py-2">
                                            @if($displayPost->categories->count() > 0)
                                                @foreach($displayPost->categories as $category)
                                                    <span
                                                        class="inline-block bg-gray-200 dark:bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">
                                                        {{ $category->name }}
                                                    </span>
                                                @endforeach
                                            @else
                                                <span
                                                    class="text-gray-500 dark:text-gray-400">{{ __('admin.blog.posts.no_categories') }}</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2">{{ $displayPost->title }}</td>
                                        <td class="px-4 py-2">
                                            @foreach($activeLanguages as $language)
                                                @php
                                                    $translation = $postGroup->firstWhere('language_id', $language->id);
                                                @endphp
                                                @if($translation)
                                                    <span
                                                        class="inline-block bg-green-200 dark:bg-green-800 rounded-full px-3 py-1 text-sm font-semibold text-green-800 dark:text-green-200 mr-2 mb-2">
                                                            {{ $language->code }}: {{ $translation->is_published ? __('admin.blog.posts.published') : __('admin.blog.posts.draft') }}
                                                        </span>
                                                @else
                                                    <span
                                                        class="inline-block bg-gray-200 dark:bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-600 dark:text-gray-400 mr-2 mb-2"
                                                        title="{{ __('admin.blog.posts.translation_not_available') }}">
                                                        {{ $language->code }}: {{ __('admin.blog.posts.not_available') }}
                                                    </span>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="px-4 py-2">
                                            @if($postGroup->where('is_published', true)->count() > 0)
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ __('admin.blog.posts.published') }}</span>
                                            @else
                                                <span
                                                    class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ __('admin.blog.posts.draft') }}</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('admin.posts.show', $displayPost) }}"
                                                   class="bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">
                                                    {{ __('admin.blog.posts.view_action') }}
                                                </a>
                                                <a href="{{ route('admin.posts.edit', $displayPost) }}"
                                                   class="bg-yellow-500 hover:bg-yellow-700 text-white px-3 py-1 rounded text-sm">
                                                    {{ __('admin.blog.posts.edit_action') }}
                                                </a>
                                                <form action="{{ route('admin.posts.destroy', $displayPost) }}"
                                                      method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded text-sm"
                                                            onclick="return confirm('{{ __('admin.blog.posts.confirm_delete_group') }}')">
                                                        {{ __('admin.blog.posts.delete_action') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-8">
                            <p class="text-gray-500 dark:text-gray-400">{{ __('admin.blog.posts.no_posts') }}</p>
                            <a href="{{ route('admin.posts.create') }}"
                               class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('admin.blog.posts.create_first') }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>

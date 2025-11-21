<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('admin.blog.posts.show_post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold">{{ $post->title }}</h3>
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white px-3 py-1 rounded text-sm whitespace-nowrap">
                                {{ __('admin.blog.posts.edit_action') }}
                            </a>
                            @if($missingLanguages->count() > 0)
                                <a href="{{ route('admin.posts.translate', $post) }}" class="bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm whitespace-nowrap">
                                    {{ __('admin.blog.posts.translate_post') }}
                                </a>
                            @endif
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline-flex">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded text-sm whitespace-nowrap" onclick="return confirm('{{ __('admin.blog.posts.confirm_delete') }}')">
                                    {{ __('admin.blog.posts.delete_action') }}
                                </button>
                            </form>
                            <a href="{{ route('admin.posts.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white px-3 py-1 rounded text-sm whitespace-nowrap">
                                {{ __('admin.blog.posts.back_to_list') }}
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h4 class="font-semibold text-lg mb-2">{{ __('admin.blog.posts.post_information') }}</h4>
                            <dl class="space-y-2">
                                <div>
                                    <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.post_id') }}:</dt>
                                    <dd class="text-gray-900 dark:text-gray-100">{{ $post->post_id }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.language_label') }}:</dt>
                                    <dd class="text-gray-900 dark:text-gray-100">{{ $post->language->name }} ({{ $post->language->code }})</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.author_label') }}:</dt>
                                    <dd class="text-gray-900 dark:text-gray-100">{{ $post->author->name }}</dd>
                                    </div>
                                    <div>
                                        <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.status_label') }}:</dt>
                                        <dd class="text-gray-900 dark:text-gray-100">
                                            @if($post->is_published)
                                                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ __('admin.blog.posts.published') }}</span>
                                            @else
                                                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ __('admin.blog.posts.draft') }}</span>
                                            @endif
                                            @if($post->is_featured)
                                                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ml-2">{{ __('admin.blog.posts.featured') }}</span>
                                            @endif
                                        </dd>
                                    </div>
                                    <div>
                                        <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.publish_date') }}:</dt>
                                        <dd class="text-gray-900 dark:text-gray-100">{{ $post->published_at ? $post->published_at->format('Y-m-d H:i') : __('admin.blog.posts.not_published') }}</dd>
                                    </div>
                                    <div>
                                        <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.read_time') }}:</dt>
                                        <dd class="text-gray-900 dark:text-gray-100">{{ $post->read_time }} {{ __('admin.blog.posts.minutes') }}</dd>
                                    </div>
                                    <div>
                                        <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.views') }}:</dt>
                                        <dd class="text-gray-900 dark:text-gray-100">{{ $post->views_count }}</dd>
                                    </div>
                            </dl>
                        </div>

                        <div>
                            <h4 class="font-semibold text-lg mb-2">{{ __('admin.blog.posts.translations') }}</h4>
                            @if($translations->count() > 1)
                                <ul class="space-y-2">
                                    @foreach($translations as $translation)
                                        <li class="flex items-center justify-between">
                                            <span class="text-gray-900 dark:text-gray-100">
                                                {{ $translation->language->name }} ({{ $translation->language->code }})
                                                @if($translation->id === $post->id)
                                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ml-2">{{ __('admin.blog.posts.current') }}</span>
                                                @endif
                                            </span>
                                            <a href="{{ route('admin.posts.show', $translation) }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600 text-sm">
                                                {{ __('admin.blog.posts.view_action') }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-gray-500 dark:text-gray-400">{{ __('admin.blog.posts.no_translations') }}</p>
                                <a href="{{ route('admin.posts.create') }}?post_id={{ $post->post_id }}" class="mt-2 inline-block bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">
                                    {{ __('admin.blog.posts.add_translation') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    @if($post->featured_image)
                        <div class="mb-6">
                            <h4 class="font-semibold text-lg mb-2">{{ __('admin.blog.posts.featured_image') }}</h4>
                            <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="max-w-full h-auto rounded-lg shadow-md">
                        </div>
                    @endif

                    <div class="mb-6">
                        <h4 class="font-semibold text-lg mb-2">{{ __('admin.blog.posts.excerpt') }}</h4>
                        <p class="text-gray-700 dark:text-gray-300">{{ $post->excerpt }}</p>
                    </div>

                    <div class="mb-6">
                        <h4 class="font-semibold text-lg mb-2">{{ __('admin.blog.posts.content') }}</h4>
                            <div class="prose dark:prose-invert max-w-none">
                                {!! $post->content !!}
                            </div>
                    </div>

                    @if($post->categories->count() > 0)
                        <div class="mb-6">
                            <h4 class="font-semibold text-lg mb-2">{{ __('admin.blog.posts.categories') }}</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($post->categories as $category)
                                    <span class="bg-gray-200 dark:bg-gray-600 text-gray-800 dark:text-gray-200 px-3 py-1 rounded-full text-sm">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($post->tags->count() > 0)
                        <div class="mb-6">
                            <h4 class="font-semibold text-lg mb-2">{{ __('admin.blog.posts.tags') }}</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($post->tags as $tag)
                                    <span class="bg-blue-200 dark:bg-blue-600 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">
                                        {{ $tag->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-lg mb-2">{{ __('admin.blog.posts.meta_information') }}</h4>
                            <dl class="space-y-2">
                                <div>
                                    <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.meta_title') }}:</dt>
                                    <dd class="text-gray-900 dark:text-gray-100">{{ $post->meta_title ?: __('admin.blog.posts.not_set') }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.meta_description') }}:</dt>
                                    <dd class="text-gray-900 dark:text-gray-100">{{ $post->meta_description ?: __('admin.blog.posts.not_set') }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.meta_keywords') }}:</dt>
                                    <dd class="text-gray-900 dark:text-gray-100">{{ $post->meta_keywords ?: __('admin.blog.posts.not_set') }}</dd>
                                </div>
                            </dl>
                        </div>

                        <div>
                            <h4 class="font-semibold text-lg mb-2">{{ __('admin.blog.posts.comment_settings') }}</h4>
                            <dl class="space-y-2">
                                <div>
                                    <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.allow_comments') }}:</dt>
                                    <dd class="text-gray-900 dark:text-gray-100">{{ $post->allow_comments ? __('admin.blog.posts.yes') : __('admin.blog.posts.no') }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-700 dark:text-gray-300">{{ __('admin.blog.posts.allow_anonymous_comments') }}:</dt>
                                    <dd class="text-gray-900 dark:text-gray-100">{{ $post->allow_anonymous_comments ? __('admin.blog.posts.yes') : __('admin.blog.posts.no') }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <h4 class="font-semibold text-lg mb-4">{{ __('admin.blog.posts.table_of_contents') }}</h4>
                        @if(!empty($post->toc))
                            <ul class="space-y-1">
                                @foreach($post->toc as $item)
                                    <li class="pl-{{ ($item['level'] - 2) * 4 }}">
                                        <a href="#{{ $item['id'] }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600">
                                            {{ $item['text'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-500 dark:text-gray-400">{{ __('admin.blog.posts.no_toc') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>

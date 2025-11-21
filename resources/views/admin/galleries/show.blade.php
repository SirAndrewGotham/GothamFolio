@php
    use Illuminate\Support\Facades\Storage;
    $activeLanguages = \App\Models\Language::active()->ordered()->get();
    $currentLocale = app()->getLocale();
@endphp

<x-backend.layouts.app :title="$gallery->title">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">{{ $gallery->title }}</h1>
            <div class="flex space-x-3">
                <a href="{{ route('admin.galleries.edit', $gallery) }}"
                   class="btn btn-secondary">{{ __('admin.gallery.edit') }}</a>
                <a href="{{ route('admin.galleries.index') }}"
                   class="btn btn-gray">{{ __('admin.gallery.back_to_list') }}</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-lg font-semibold mb-3">{{ __('admin.gallery.gallery_details') }}</h2>

                    <!-- Cover Image Display -->
                    @if($gallery->cover_image)
                        <div class="mb-4">
                            <dt class="text-sm font-medium text-gray-500">{{ __('admin.gallery.cover_image') }}</dt>
                            <dd class="text-sm mt-1">
                                <img src="{{ asset('storage/' . $gallery->cover_image) }}" alt="{{ $gallery->title }}"
                                     class="w-48 h-32 object-cover rounded-lg shadow-md border border-gray-200">
                            </dd>
                        </div>
                    @endif

                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">{{ __('admin.gallery.title') }}</dt>
                            <dd class="text-sm">{{ $gallery->title }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">{{ __('admin.gallery.slug') }}</dt>
                            <dd class="text-sm">{{ $gallery->slug }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">{{ __('admin.gallery.year') }}</dt>
                            <dd class="text-sm">{{ $gallery->year ?? __('admin.general.not_set') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">{{ __('admin.gallery.status') }}</dt>
                            <dd class="text-sm">
                        <span
                            class="px-2 py-1 text-xs rounded-full {{ $gallery->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $gallery->is_published ? __('admin.gallery.published') : __('admin.gallery.draft') }}
                        </span>
                                @if($gallery->is_featured)
                                    <span
                                        class="ml-2 px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">{{ __('admin.gallery.featured_status') }}</span>
                                @endif
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">{{ __('admin.gallery.order') }}</dt>
                            <dd class="text-sm">{{ $gallery->order ?? __('admin.general.not_set') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">{{ __('admin.gallery.created') }}</dt>
                            <dd class="text-sm">{{ $gallery->created_at->format('M d, Y H:i') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">{{ __('admin.gallery.updated') }}</dt>
                            <dd class="text-sm">{{ $gallery->updated_at->format('M d, Y H:i') }}</dd>
                        </div>
                    </dl>
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-3">{{ __('admin.gallery.description') }}</h2>
                    <div class="prose prose-sm max-w-none">
                        {{ $gallery->description ?? __('admin.gallery.no_description') }}
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-lg font-semibold mb-3">{{ __('admin.gallery.translations') }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach($activeLanguages as $language)
                        @if($language->code !== $currentLocale)
                            <div class="border rounded-lg p-4">
                                <h3 class="font-semibold text-sm mb-2">{{ $language->name_english }}</h3>
                                <p class="text-sm"><strong>{{ __('admin.gallery.title') }}
                                        :</strong> {{ $gallery->getTranslation('title', $language->code) ?? 'N/A' }}</p>
                                <p class="text-sm"><strong>{{ __('admin.gallery.description') }}
                                        :</strong> {{ $gallery->getTranslation('description', $language->code) ?? 'N/A' }}
                                </p>
                            </div>
                        @endif
                    @endforeach

                    {{-- Show message if no other translations available --}}
                    @if($activeLanguages->where('code', '!=', $currentLocale)->isEmpty())
                        <div class="col-span-full text-center text-gray-500 py-4">
                            {{ __('admin.gallery.no_other_translations') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="flex justify-between items-center mt-6">
            <h2 class="text-lg font-semibold">{{ __('admin.gallery.images_in', ['gallery' => $gallery->title]) }}
                ({{ $gallery->images->count() }})</h2>
            <div class="flex space-x-3">
                <a href="{{ route('admin.galleries.images.create', $gallery) }}" class="btn btn-primary">
                    {{ __('admin.gallery.add_image') }}
                </a>
                <a href="{{ route('admin.galleries.images.create-multiple', $gallery) }}" class="btn btn-primary">
                    {{ __('admin.gallery.upload_multiple') }}
                </a>
                <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-secondary">
                    {{ __('admin.gallery.manage_images') }}
                </a>
            </div>
        </div>

        @if($gallery->images->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
                @foreach($gallery->images as $image)
                    <div class="border rounded-lg p-3">
                        <div class="aspect-w-16 aspect-h-9 mb-3">
                            <img src="{{ asset('storage/' . $image->file_path) }}" alt="{{ $image->title }}"
                                 class="w-full h-32 object-cover rounded">
                        </div>
                        <h3 class="text-sm font-medium">{{ $image->title }}</h3>
                        <p class="text-xs text-gray-500">{{ $image->file_name }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 mt-4">{{ __('admin.gallery.no_images') }}</p>
        @endif
    </div>
    </div>
</x-backend.layouts.app>

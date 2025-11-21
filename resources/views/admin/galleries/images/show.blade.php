@php
    use Illuminate\Support\Facades\Storage;
    $activeLanguages = \App\Models\Language::active()->ordered()->get();
    $currentLocale = app()->getLocale();
@endphp

<x-backend.layouts.app :title="'Image - ' . $image->title">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">{{ $image->title }}</h1>
            <div class="flex space-x-3">
                <a href="{{ route('admin.galleries.images.edit', [$gallery, $image]) }}" class="btn btn-secondary">Edit</a>
                <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-gray">Back to List</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-lg font-semibold mb-3">Image</h2>
                    <img src="{{ asset('storage/' . $image->file_path) }}" alt="{{ $image->title }}"
                         class="w-full h-64 object-cover rounded-lg">
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-3">Image Details</h2>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Title</dt>
                            <dd class="text-sm">{{ $image->title }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Gallery</dt>
                            <dd class="text-sm">{{ $gallery->title }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">File Name</dt>
                            <dd class="text-sm">{{ $image->file_name }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">File Size</dt>
                            <dd class="text-sm">{{ number_format($image->file_size / 1024, 1) }} KB</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Dimensions</dt>
                            <dd class="text-sm">{{ $image->width }} × {{ $image->height }} px</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Year</dt>
                            <dd class="text-sm">{{ $image->year ?? 'Not set' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                            <dd class="text-sm">
                                <span class="px-2 py-1 text-xs rounded-full {{ $image->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $image->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Camera Model</dt>
                            <dd class="text-sm">{{ $image->camera_model ?? 'Not set' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Location</dt>
                            <dd class="text-sm">{{ $image->location ?? 'Not set' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Created</dt>
                            <dd class="text-sm">{{ $image->created_at->format('M d, Y H:i') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Updated</dt>
                            <dd class="text-sm">{{ $image->updated_at->format('M d, Y H:i') }}</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-semibold mb-3">Description</h2>
                <div class="prose prose-sm max-w-none">
                    {{ $image->description ?? 'No description provided.' }}
                </div>
            </div>

            <div>
                <h2 class="text-lg font-semibold mb-3">{{ __('admin.gallery.translations') }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach($activeLanguages as $language)
                        @if($language->code !== $currentLocale)
                            <div class="border rounded-lg p-4">
                                <h3 class="font-semibold text-sm mb-2">{{ $language->name_english }}</h3>
                                <p class="text-sm"><strong>{{ __('admin.gallery.title') }}:</strong> {{ $image->getTranslation('title', $language->code) ?? 'N/A' }}</p>
                                <p class="text-sm"><strong>{{ __('admin.gallery.description') }}:</strong> {{ $image->getTranslation('description', $language->code) ?? 'N/A' }}</p>
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

            @if($image->camera_settings)
                <div>
                    <h2 class="text-lg font-semibold mb-3">Camera Settings</h2>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <pre class="text-sm whitespace-pre-wrap">{{ $image->camera_settings }}</pre>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-backend.layouts.app>

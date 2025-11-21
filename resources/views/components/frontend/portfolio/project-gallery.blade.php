@props(['project', 'limit' => null, 'class' => ''])

@if($project->images->count() > 0)
    <div class="project-gallery {{ $class }}">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($project->images->take($limit ?? $project->images->count()) as $image)
                <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <img
                        src="{{ Storage::url($image->image_path) }}"
                        alt="{{ $image->alt_text ?: $project->name }}"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                        loading="lazy"
                    >

                    @if($image->alt_text)
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-opacity duration-300 flex items-end">
                            <div class="p-3 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-sm">{{ $image->alt_text }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        @if($limit && $project->images->count() > $limit)
            <div class="mt-4 text-center">
                <p class="text-sm text-gray-500">{{ __('portfolio.gallery.more_images', ['count' => $project->images->count() - $limit]) }}</p>
            </div>
        @endif
    </div>
@else
    <div class="text-center py-8 text-gray-500">
        <svg class="w-12 h-12 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <p>{{ __('portfolio.gallery.no_images') }}</p>
    </div>
@endif

@props([
    'project',
    'alt',
    'lazy' => true,
    'class' => ''
])

@php
    $images = $project->image_urls;
    $hasValidImages = !empty($images);
@endphp

    <!-- Debug: Check project data -->
@php
    // dd($project); // Uncomment to see full project data
    \Log::debug('Project data: ' . $project->toJson());
@endphp

@if($hasValidImages)
    <picture class="{{ $class }}">
        <!-- WebP sources with responsive breakpoints -->
        <source media="(min-width: 1280px)" srcset="{{ $images['xl']['webp'] }}" type="image/webp">
        <source media="(min-width: 1024px)" srcset="{{ $images['lg']['webp'] }}" type="image/webp">
        <source media="(min-width: 768px)" srcset="{{ $images['md']['webp'] }}" type="image/webp">
        <source srcset="{{ $images['sm']['webp'] }}" type="image/webp">

        <!-- JPEG fallback sources -->
        <source media="(min-width: 1280px)" srcset="{{ $images['xl']['jpg'] }}" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="{{ $images['lg']['jpg'] }}" type="image/jpeg">
        <source media="(min-width: 768px)" srcset="{{ $images['md']['jpg'] }}" type="image/jpeg">
        <source srcset="{{ $images['sm']['jpg'] }}" type="image/jpeg">

        <!-- Fallback img element -->
        <img
            src="{{ $images['xl']['jpg'] }}"
            alt="{{ $alt }}"
            {{ $lazy ? 'loading="lazy"' : 'loading="eager"' }}
            class="w-full h-full object-cover"
            {{ $attributes }}
        >
    </picture>
@else
    <!-- Default fallback image -->
    <div class="w-full h-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center {{ $class }}">
        <i class="fas fa-image text-4xl text-gray-400"></i>
    </div>
@endif

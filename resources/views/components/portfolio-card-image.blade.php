@props([
    'projectSlug',
    'alt',
    'imageType' => 'card',
    'lazy' => true,
    'class' => ''
])

@php
//    $imageService = app(\App\Services\PortfolioImageService::class);
//    $images = $imageService->getProjectImageUrls($projectSlug, $imageType);
    // Look up project by slug to get ID
    $project = \App\Models\Project::where('slug', $projectSlug)->first();
    $projectId = $project ? $project->id : null;

    if ($projectId) {
        try {
            $imageService = app(\App\Services\ImageService::class);
            $images = $imageService->getImageUrls('project', $projectId, $projectId, $imageType);
        } catch (\Exception $e) {
            $oldService = app(\App\Services\PortfolioImageService::class);
            $images = $oldService->getProjectImageUrls($projectId, $imageType);
        }
    } else {
        $images = [];
    }

    // Fallback to default image if none found
    if (empty($images)) {
        $images = [
            'xl' => ['webp' => '/images/default-project.webp', 'jpg' => '/images/default-project.jpg'],
            'lg' => ['webp' => '/images/default-project.webp', 'jpg' => '/images/default-project.jpg'],
            'md' => ['webp' => '/images/default-project.webp', 'jpg' => '/images/default-project.jpg'],
            'sm' => ['webp' => '/images/default-project.webp', 'jpg' => '/images/default-project.jpg'],
        ];
    }
@endphp

<picture class="{{ $class }}">
    <!-- WebP sources with responsive breakpoints -->
    <source
        media="(min-width: 1280px)"
        srcset="{{ $images['xl']['webp'] }}"
        type="image/webp">
    <source
        media="(min-width: 1024px)"
        srcset="{{ $images['lg']['webp'] }}"
        type="image/webp">
    <source
        media="(min-width: 768px)"
        srcset="{{ $images['md']['webp'] }}"
        type="image/webp">
    <source
        srcset="{{ $images['sm']['webp'] }}"
        type="image/webp">

    <!-- JPEG fallback sources -->
    <source
        media="(min-width: 1280px)"
        srcset="{{ $images['xl']['jpg'] }}"
        type="image/jpeg">
    <source
        media="(min-width: 1024px)"
        srcset="{{ $images['lg']['jpg'] }}"
        type="image/jpeg">
    <source
        media="(min-width: 768px)"
        srcset="{{ $images['md']['jpg'] }}"
        type="image/jpeg">
    <source
        srcset="{{ $images['sm']['jpg'] }}"
        type="image/jpeg">

    <!-- Fallback img element -->
    <img
        src="{{ $images['xl']['jpg'] }}"
        alt="{{ $alt }}"
        {{ $lazy ? 'loading="lazy"' : 'loading="eager"' }}
        class="w-full h-full object-cover transition-transform duration-300"
        {{ $attributes }}
    >
</picture>

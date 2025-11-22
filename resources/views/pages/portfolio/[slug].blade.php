@php
    use App\Models\Category;
    use App\Models\Project;
    $locale = App::getLocale();
    $slug = request()->route('slug');
    $viewPath = "pages.portfolio.projects.{$slug}.{$locale}";

    // Fetch the project
    $project = Project::where('slug', $slug)
        ->active()
        ->withCurrentTranslations()
        ->first();

    if (!$project) {
        abort(404);
    }
@endphp

@if(View::exists($viewPath))
    @include($viewPath, ['project' => $project])
@else
    @php
        $fallbackPath = "pages.portfolio.projects.{$slug}.en";
    @endphp

    @if(View::exists($fallbackPath))
        @include($fallbackPath, ['project' => $project])
    @else
        <x-frontend.portfolio.missing />
    @endif
@endif

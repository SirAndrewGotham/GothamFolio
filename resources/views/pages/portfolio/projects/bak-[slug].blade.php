@php
    use App\Models\Category;
    $locale = App::getLocale();
    $slug = request()->route('slug');
    $viewPath = "pages.portfolio.projects.{$slug}.{$locale}";
@endphp

@if(View::exists($viewPath))
    @include($viewPath)
@else
    @php
        $fallbackPath = "pages.portfolio.laravel.en";
    @endphp

    @if(View::exists($fallbackPath))
        @include($fallbackPath)
    @else
        @include('pages.competences.missing');
    @endif
@endif

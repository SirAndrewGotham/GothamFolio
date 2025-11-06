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
        $fallbackPath = "pages.portfolio.projects.{$slug}.en";
    @endphp

    @if(View::exists($fallbackPath))
        @include($fallbackPath)
    @else
        <x-frontend.portfolio.missing />
    @endif
@endif

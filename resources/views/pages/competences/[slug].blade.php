@php
    use App\Models\Category;
    $locale = App::getLocale();

    $slug = request()->route('slug');
    // Get the category by slug
    $category = Category::whereHas('competences')->where('slug', $slug)->first();

    if($category)
    {
        $viewPath = "pages.competences.categories";
    } else {
        $viewPath = "pages.competences.competences.{$slug}.{$locale}";
    }
@endphp

@if(View::exists($viewPath))
    @include($viewPath)
@else
    @php
        $fallbackPath = "pages.competences.competences.{$slug}.en";
    @endphp

    @if(View::exists($fallbackPath))
        @include($fallbackPath)
    @else
        <x-frontend.competences.missing />
    @endif
@endif


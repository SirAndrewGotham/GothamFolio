@php
    use App\Models\Category;
    $locale = App::getLocale();

    $slug = request()->route('slug');
    // Get the category by slug
    $category = Category::whereHas('competences')->where('slug', $slug)->first();

    if($category)
    {
//        dd($category);
        $viewPath = "pages.competences.categories";
//        dd([
//    'viewPath' => $viewPath,
//    'viewExists' => View::exists($viewPath),
//    'category' => $category
//]);
//        dd($viewPath);
    } else {
        $viewPath = "pages.competences.competences.{$slug}.{$locale}";
    }

//    $viewPath = "pages.competences.competences.{$slug}.{$locale}";
@endphp

@if(View::exists($viewPath))
    @include($viewPath)
@else
    @php
        $fallbackPath = "pages.competences.missing";
    @endphp

    @if(View::exists($fallbackPath))
        @include($fallbackPath)
    @else
        <div class="text-center py-20">
            <p class="text-gray-500">Competence Category content not available.</p>
        </div>
    @endif
@endif


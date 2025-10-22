@php
    $locale = App::getLocale();
    $viewPath = "pages.documents.cookies.{$locale}";
@endphp

@if(View::exists($viewPath))
    @include($viewPath)
@else
    @php
        $fallbackPath = "pages.documents.cookies.en";
    @endphp

    @if(View::exists($fallbackPath))
        @include($fallbackPath)
    @else
        <div class="text-center py-20">
            <p class="text-gray-500">Resume content not available.</p>
        </div>
    @endif
@endif

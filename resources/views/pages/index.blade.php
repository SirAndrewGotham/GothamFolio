<x-frontend.layouts.app>
    @if(config('gothamfolio.banner') === 'on')
        <x-frontend.index.banner />
    @endif

    @if(config('gothamfolio.features') === 'on')
        <x-frontend.index.features />
    @endif

    @if(config('gothamfolio.resume') === 'on')
        <div class="section-divider my-16 w-full"></div>
        <x-frontend.index.resume />
    @endif

    @if(config('gothamfolio.portfolio') === 'on')
        <div class="section-divider my-16 w-full"></div>
        <x-frontend.index.portfolio />
    @endif

    @if(config('gothamfolio.galleries') === 'on')
        <div class="section-divider my-16 w-full"></div>
        <x-frontend.index.galleries />
    @endif

    @if(config('gothamfolio.blog') === 'on')
        <div class="section-divider my-16 w-full"></div>
        <x-frontend.index.blog />
    @endif

    @if(config('gothamfolio.contacts') === 'on')
        <div class="section-divider my-16 w-full"></div>
        <x-frontend.index.contacts />
    @endif
</x-frontend.layouts.app>

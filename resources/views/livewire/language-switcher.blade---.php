<div class="relative" x-data="{ open: false }" wire:ignore>
    <button @click="open = !open" class="flex items-center space-x-1 px-3 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
        @if($currentLanguage)
            @if($currentLanguage->emoji)
                <!-- 1. Emoji flag -->
                <span class="mr-1">{!! $currentLanguage->emoji !!}</span>
            @elseif($currentLanguage->flag_svg)
                <!-- 2. SVG flag -->
                <span class="mr-1 flex items-center justify-center w-4 h-4">
                    {!! $currentLanguage->flag_svg !!}
                </span>
            @else
                <!-- 3. Generic globe fallback -->
                <span class="mr-1 flex items-center justify-center w-4 h-4 text-gray-400">
                    <i class="fas fa-globe"></i>
                </span>
            @endif
            <span class="text-sm font-medium">{{ strtoupper($currentLanguage->code) }}</span>
        @endif
        <i class="fas fa-chevron-down text-xs ml-1"></i>
    </button>

    <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-2 w-64 bg-white dark:bg-gray-800 rounded-lg shadow-lg py-2 z-50 max-h-96 overflow-y-auto">
        @foreach($availableLanguages as $language)
            <button
                wire:click="changeLanguage('{{ $language->code }}')"
                @click="open = false"
                class="flex items-center w-full text-left px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors"
            >
                @if($language->emoji)
                    <!-- 1. Emoji flag -->
                    <span class="mr-3 text-lg">{!! $language->emoji !!}</span>
                @elseif($language->flag_svg)
                    <!-- 2. SVG flag -->
                    <span class="mr-3 flex items-center justify-center w-5 h-5">
                        {!! $language->flag_svg !!}
                    </span>
                @else
                    <!-- 3. Generic globe fallback -->
                    <span class="mr-3 w-5 h-5 flex items-center justify-center text-gray-400">
                        <i class="fas fa-globe"></i>
                    </span>
                @endif
                <div class="flex flex-col items-start flex-1">
                    <span class="font-medium text-sm">{{ $language->name_native }}</span>
                    <span class="text-xs text-gray-500 dark:text-gray-400">{{ $language->name_english }}</span>
                </div>
            </button>
        @endforeach
    </div>
</div>

<?php

use function Livewire\Volt\{state, mount};
use App\Services\LanguageService;

state([
    'currentLanguage' => null,
    'availableLanguages' => [],
]);

mount(function (LanguageService $languageService) {
    $this->currentLanguage = $languageService->getCurrentLanguage();
    $this->availableLanguages = $languageService->getAvailableLanguages();
});

$changeLanguage = function ($languageCode, LanguageService $languageService) {
    if ($languageService->setLanguage($languageCode)) {
        $this->currentLanguage = $languageService->getCurrentLanguage();
        $this->dispatch('languageChanged', $languageCode);

        // For Folio routing, we need to use a different approach
        // Instead of redirect()->back(), we'll refresh the page
        $this->js('window.location.reload()');
    }
};

?>

<div class="relative" x-data="{ open: false }">
    <button @click="open = !open" class="flex items-center space-x-1 px-3 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
        @if($currentLanguage)
            @if($currentLanguage->emoji)
                <span class="mr-1">{!! $currentLanguage->emoji !!}</span>
            @elseif($currentLanguage->flag_svg)
                <span class极-1 flex items-center justify-center w-4 h-4">
                {!! $currentLanguage->flag_svg !!}
                </span>
            @else
                <span class="mr-1 flex items-center justify-center w-4 h-4 text-gray-400">
                    <i class="fas fa-globe"></i>
                </span>
            @endif
            <span class="text-sm font-medium">{{ strtoupper($currentLanguage->code) }}</span>
        @endif
        <i class="fas fa-chevron-down text-xs ml-1"></i>
    </button>

    <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-2 w-64 bg-white dark:bg-gray-800 rounded-lg shadow-lg py极 z-50 max-h-96 overflow-y-auto">
        @foreach($availableLanguages as $language)
            <button
                wire:click="changeLanguage('{{ $language->code }}')"
                @click="open = false"
                class="flex items-center w-full text-left px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors"
            >
                @if($language->emoji)
                    <span class="mr-3 text-lg">{!! $language->emoji !!}</span>
                @elseif($language->flag_svg)
                    <span class="mr-3 flex items-center justify-center w-5 h-5">
                        {!! $language->flag_svg !!}
                    </span>
                @else
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

<header class="fixed w-full z-50 glass-effect py-4" wire:key="'header-' . {{ $current_locale ?? app()->getLocale() }}" x-data="{ mobileMenuOpen: false }">
    <div class="fluid-container flex justify-between items-center">
        <!-- Logo Component -->
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="flex items-center">
                <x-frontend.partials.logo size="default" />
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8 {{ ($is_rtl ?? (new \App\Services\LanguageService())->getApplicationIsRtl()) ? 'flex-row-reverse' : '' }}">
            <a href="{{ url('/') }}"
               class="font-medium hover:text-primary-500 transition-colors {{ request()->is('/') ? 'text-primary-500' : '' }}">
                {{ __('gothamfolio.navigation.home') }}
            </a>
            @if(config('gothamfolio.resume') === 'on')
                <a href="{{ url('/resume') }}"
                   class="font-medium hover:text-primary-500 transition-colors {{ request()->is('resume') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.resume') }}
                </a>
            @endif
            @if(config('gothamfolio.competences') === 'on')
                <a href="{{ url('/competences') }}"
                   class="font-medium hover:text-primary-500 transition-colors {{ request()->is('competences') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.competences') }}
                </a>
            @endif
            @if(config('gothamfolio.portfolio') === 'on')
                <a href="{{ url('/portfolio') }}"
                   class="font-medium hover:text-primary-500 transition-colors {{ request()->is('portfolio') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.portfolio') }}
                </a>
            @endif
            @if(config('gothamfolio.galleries') === 'on')
                <a href="{{ url('/galleries') }}"
                   class="font-medium hover:text-primary-500 transition-colors {{ request()->is('galleries') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.galleries') }}
                </a>
            @endif
            @if(config('gothamfolio.blog') === 'on')
                <a href="{{ url('/blog') }}"
                   class="font-medium hover:text-primary-500 transition-colors {{ request()->is('blog') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.blog') }}
                </a>
            @endif
            @if(config('gothamfolio.contacts') === 'on')
                <a href="{{ url('/contact') }}"
                   class="font-medium hover:text-primary-500 transition-colors {{ request()->is('contact') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.contact') }}
                </a>
            @endif
        </nav>

        <!-- Controls -->
        <div class="flex items-center space-x-4 {{ ($is_rtl ?? (new \App\Services\LanguageService())->getApplicationIsRtl()) ? 'flex-row-reverse' : '' }}">
            @if(\App\Models\Language::active()->count() > 1)
                <!-- Language Switcher -->
                <livewire:language-switcher-volt wire:key="language-switcher-{{ $current_locale ?? app()->getLocale() }}" />
            @endif

            <!-- Theme Toggle -->
            <button @click="toggleDarkMode" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                <i x-show="!darkMode" class="fas fa-moon"></i>
                <i x-show="darkMode" class="fas fa-sun"></i>
            </button>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" class="md:hidden absolute top-full left-0 w-full bg-white dark:bg-gray-900 shadow-lg py-4">
        <div class="fluid-container flex flex-col space-y-4">
            <a href="{{ url('/') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ ($is_rtl ?? (new \App\Services\LanguageService())->getApplicationIsRtl()) ? 'text-right' : '' }} {{ request()->is('/') ? 'text-primary-500' : '' }}">
                {{ __('gothamfolio.navigation.home') }}
            </a>
            @if(config('gothamfolio.resume') === 'on')
                <a href="{{ url('/resume') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ ($is_rtl ?? (new \App\Services\LanguageService())->getApplicationIsRtl()) ? 'text-right' : '' }} {{ request()->is('resume') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.resume') }}
                </a>
            @endif
            @if(config('gothamfolio.portfolio') === 'on')
                <a href="{{ url('/portfolio') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ ($is_rtl ?? (new \App\Services\LanguageService())->getApplicationIsRtl()) ? 'text-right' : '' }} {{ request()->is('portfolio') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.portfolio') }}
                </a>
            @endif
            @if(config('gothamfolio.galleries') === 'on')
                <a href="{{ url('/galleries') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ ($is_rtl ?? (new \App\Services\LanguageService())->getApplicationIsRtl()) ? 'text-right' : '' }} {{ request()->is('galleries') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.galleries') }}
                </a>
            @endif
            @if(config('gothamfolio.blog') === 'on')
                <a href="{{ url('/blog') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ ($is_rtl ?? (new \App\Services\LanguageService())->getApplicationIsRtl()) ? 'text-right' : '' }} {{ request()->is('blog') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.blog') }}
                </a>
            @endif
            @if(config('gothamfolio.contacts') === 'on')
                <a href="{{ url('/contact') }}" class="font-medium py-2 {{ ($is_rtl ?? (new \App\Services\LanguageService())->getApplicationIsRtl()) ? 'text-right' : '' }} {{ request()->is('contact') ? 'text-primary-500' : '' }}">
                    {{ __('gothamfolio.navigation.contact') }}
                </a>
            @endif
        </div>
    </div>
</header>

<!-- Spacer to prevent content from being hidden under fixed header -->
<div class="h-10"></div>

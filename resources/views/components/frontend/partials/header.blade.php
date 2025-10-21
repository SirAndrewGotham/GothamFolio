<header class="fixed w-full z-50 glass-effect py-4">
    <div class="fluid-container flex justify-between items-center">
        <!-- Logo Component -->
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="flex items-center">
                <x-frontend.partials.logo size="default" />
            </a>
        </div>
        <!-- Logo -->
{{--        <div class="flex items-center">--}}
{{--            <a href="{{ url('/') }}" class="flex items-center">--}}
{{--                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-lg">--}}
{{--                    A--}}
{{--                </div>--}}
{{--                <span class="{{ $is_rtl ? 'mr-2' : 'ml-2' }} text-xl font-bold gradient-text">AndrewGotham</span>--}}
{{--            </a>--}}
{{--        </div>--}}

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8 {{ $is_rtl ? 'flex-row-reverse' : '' }}">
            <a href="{{ url('/') }}"
               class="font-medium hover:text-primary-500 transition-colors {{ request()->is('/') ? 'text-primary-500' : '' }}">
                {{ __('navigation.home') }}
            </a>
            <a href="{{ url('/resume') }}"
               class="font-medium hover:text-primary-500 transition-colors {{ request()->is('resume') ? 'text-primary-500' : '' }}">
                {{ __('navigation.resume') }}
            </a>
            <a href="{{ url('/portfolio') }}"
               class="font-medium hover:text-primary-500 transition-colors {{ request()->is('portfolio') ? 'text-primary-500' : '' }}">
                {{ __('navigation.portfolio') }}
            </a>
            <a href="{{ url('/galleries') }}"
               class="font-medium hover:text-primary-500 transition-colors {{ request()->is('galleries') ? 'text-primary-500' : '' }}">
                {{ __('navigation.galleries') }}
            </a>
            <a href="{{ url('/blog') }}"
               class="font-medium hover:text-primary-500 transition-colors {{ request()->is('blog') ? 'text-primary-500' : '' }}">
                {{ __('navigation.blog') }}
            </a>
            <a href="{{ url('/contact') }}"
               class="font-medium hover:text-primary-500 transition-colors {{ request()->is('contact') ? 'text-primary-500' : '' }}">
                {{ __('navigation.contact') }}
            </a>
        </nav>

        <!-- Controls -->
        <div class="flex items-center space-x-4 {{ $is_rtl ? 'flex-row-reverse' : '' }}">
            <!-- Language Switcher -->
            <livewire:language-switcher-volt :wire:key="'language-switcher-' . $current_locale" />

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
            <a href="{{ url('/') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ $is_rtl ? 'text-right' : '' }} {{ request()->is('/') ? 'text-primary-500' : '' }}">
                {{ __('navigation.home') }}
            </a>
            <a href="{{ url('/resume') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ $is_rtl ? 'text-right' : '' }} {{ request()->is('resume') ? 'text-primary-500' : '' }}">
                {{ __('navigation.resume') }}
            </a>
            <a href="{{ url('/portfolio') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ $is_rtl ? 'text-right' : '' }} {{ request()->is('portfolio') ? 'text-primary-500' : '' }}">
                {{ __('navigation.portfolio') }}
            </a>
            <a href="{{ url('/galleries') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ $is_rtl ? 'text-right' : '' }} {{ request()->is('galleries') ? 'text-primary-500' : '' }}">
                {{ __('navigation.galleries') }}
            </a>
            <a href="{{ url('/blog') }}" class="font-medium py-2 border-b border-gray-200 dark:border-gray-700 {{ $is_rtl ? 'text-right' : '' }} {{ request()->is('blog') ? 'text-primary-500' : '' }}">
                {{ __('navigation.blog') }}
            </a>
            <a href="{{ url('/contact') }}" class="font-medium py-2 {{ $is_rtl ? 'text-right' : '' }} {{ request()->is('contact') ? 'text-primary-500' : '' }}">
                {{ __('navigation.contact') }}
            </a>
        </div>
    </div>
</header>

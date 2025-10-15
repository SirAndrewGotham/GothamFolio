<header class="fixed w-full z-50 glass-effect py-4">
    <div class="fluid-container flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-lg">
                A
            </div>
            <span class="ml-2 text-xl font-bold gradient-text">AndrewGotham</span>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8">
            <a href="/"
               :class="{'text-primary-500': activeSection === 'home'}"
               class="font-medium hover:text-primary-500 transition-colors"
               @click="scrollToSection('home')">Главная</a>
            <a href="/resume"
               class="font-medium hover:text-primary-500 transition-colors">Резюме</a>
            <a href="/works"
               class="font-medium hover:text-primary-500 transition-colors">Портфолио</a>
            <a href="/galleries"
               class="font-medium hover:text-primary-500 transition-colors">Галереи</a>
            <a href="/blog"
               class="font-medium hover:text-primary-500 transition-colors">Блог</a>
            <a href="/feedback"
               class="font-medium hover:text-primary-500 transition-colors">Контакты</a>
        </nav>

        <!-- Controls -->
        <div class="flex items-center space-x-4">
            <!-- Language Switcher -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center space-x-1 px-3 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <template x-if="currentLanguage === 'ru'">
                        <span class="mr-1">🇷🇺</span>
                    </template>
                    <template x-if="currentLanguage === 'en'">
                        <span class="mr-1">🇺🇸</span>
                    </template>
                    <template x-if="currentLanguage === 'eo'">
                        <span class="mr-1" style="color: #008000;">🏴</span>
                    </template>
                    <span x-text="currentLanguage.toUpperCase()"></span>
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>

                <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 rounded-lg shadow-lg py-2 z-50">
                    <button @click="changeLanguage('ru'); open = false" class="flex items-center w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <span class="mr-2">🇷🇺</span>
                        Русский
                    </button>
                    <button @click="changeLanguage('en'); open = false" class="flex items-center w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <span class="mr-2">🇺🇸</span>
                        English
                    </button>
                    <button @click="changeLanguage('eo'); open = false" class="flex items-center w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <span class="mr-2" style="color: #008000;">🏴</span>
                        Esperanto
                    </button>
                </div>
            </div>

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
            <a href="/"
               @click="scrollToSection('home')"
               class="font-medium py-2 border-b border-gray-200 dark:border-gray-700">Главная</a>
            <a href="/resume"
               class="font-medium py-2 border-b border-gray-200 dark:border-gray-700">Резюме</a>
            <a href="/works"
               class="font-medium py-2 border-b border-gray-200 dark:border-gray-700">Портфолио</a>
            <a href="/galleries"
               class="font-medium py-2 border-b border-gray-200 dark:border-gray-700">Галереи</a>
            <a href="/blog"
               class="font-medium py-2 border-b border-gray-200 dark:border-gray-700">Блог</a>
            <a href="/feedback"
               class="font-medium py-2">Обратная связь</a>
        </div>
    </div>
</header>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300" x-data="appData()">
        <div class="min-h-screen">
            <x-frontend.partials.header />

            <main class="w-full">
                {{ $slot }}
            </main>

            <x-frontend.partials.footer />
        </div>

        <script>
            function appData() {
                return {
                    darkMode: localStorage.getItem('darkMode') === 'true',
                    mobileMenuOpen: false,
                    currentLocale: '{{ app()->getLocale() }}',
                    init() {
                        document.querySelectorAll('.fade-in').forEach(element => {
                            element.classList.add('visible');
                        });
                        this.$watch('darkMode', value => {
                            localStorage.setItem('darkMode', value);
                            if (value) {
                                document.documentElement.classList.add('dark');
                            } else {
                                document.documentElement.classList.remove('dark');
                            }
                        });
                        if (this.darkMode) {
                            document.documentElement.classList.add('dark');
                        } else {
                            document.documentElement.classList.remove('dark');
                        }

                        // Close mobile menu on route change
                        Livewire.on('navigation-start', () => {
                            this.mobileMenuOpen = false;
                        });
                    },
                    toggleDarkMode() {
                        this.darkMode = !this.darkMode;
                    }
                }
            }
        </script>
        @fluxScripts
    </body>
</html>

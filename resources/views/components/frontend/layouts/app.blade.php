<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', $current_locale) }}"
      dir="{{ $direction }}"
      class="scroll-smooth {{ $is_rtl ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrew Gotham - Software Engineer, Web Developer and Photographer!</title>

{{--    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>👨‍💻</text></svg>">--}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dark .glass-effect {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #cbd5e1, transparent);
        }

        .dark .section-divider {
            background: linear-gradient(90deg, transparent, #475569, transparent);
        }

        .skill-bar {
            transition: width 1s ease-in-out;
        }

        .carousel-fade {
            transition: opacity 0.5s ease-in-out;
        }

        /* RTL-specific adjustments */
        .rtl .section-divider {
            background: linear-gradient(270deg, transparent, #cbd5e1, transparent);
        }

        .dark.rtl .section-divider {
            background: linear-gradient(270deg, transparent, #475569, transparent);
        }

        /* Ensure proper spacing in RTL */
        .rtl .ml-2 {
            margin-left: 0;
            margin-right: 0.5rem;
        }

        .rtl .mr-2 {
            margin-right: 0;
            margin-left: 0.5rem;
        }

        .rtl .ml-4 {
            margin-left: 0;
            margin-right: 1rem;
        }

        .rtl .mr-4 {
            margin-right: 0;
            margin-left: 1rem;
        }

        /* Text alignment for RTL */
        .rtl .text-right {
            text-align: left;
        }

        /* Flex order for RTL */
        .rtl .flex-row-reverse {
            flex-direction: row-reverse;
        }

        /* Add scroll padding to account for fixed header */
        html {
            scroll-padding-top: 6rem;
        }

        /* Alternative method for older browsers */
        :target::before {
            content: '';
            display: block;
            height: 6rem;
            margin-top: -6rem;
            visibility: hidden;
        }
    </style>

    @stack('section-styles')


</head>
<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300">
<div x-data="appData()" class="min-h-screen">
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
            activeSection: 'home',
            carouselActive: 0,
            carouselItems: 3,

            init() {
                // Set initial theme
                if (this.darkMode) {
                    document.documentElement.classList.add('dark');
                }

                /// Intersection Observer for section highlighting (only on home page)
                if (window.location.pathname === '/') {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                this.activeSection = entry.target.id;
                            }
                        });
                    }, { threshold: 0.5 });

                    document.querySelectorAll('section').forEach(section => {
                        observer.observe(section);
                    });

                    // Auto-rotate carousel (only on the home page)
                    setInterval(() => {
                        this.carouselActive = (this.carouselActive + 1) % this.carouselItems;
                    }, 7000);
                }

                // Fade in animation on scroll (works on all pages)
                const fadeElements = document.querySelectorAll('.fade-in');
                const fadeObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                        }
                    });
                }, { threshold: 0.1 });

                fadeElements.forEach(el => fadeObserver.observe(el));
            },
            toggleDarkMode() {
                this.darkMode = !this.darkMode;
                localStorage.setItem('darkMode', this.darkMode);
                if (this.darkMode) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            },
            scrollToSection(sectionId) {
                this.mobileMenuOpen = false;
                const element = document.getElementById(sectionId);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            },
            setCarousel(index) {
                this.carouselActive = index;
            }
        }
    }
</script>

@livewireScripts
@stack('scripts')
</body>
</html>

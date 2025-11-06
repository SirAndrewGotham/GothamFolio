<x-frontend.layouts.app>
    <!-- Main Content -->
    <main class="w-full pt-20" x-data="portfolioItemApp()" x-init="init()">
        <!-- Breadcrumbs -->
        <section class="py-6 bg-gray-50 dark:bg-gray-800/30 border-b border-gray-200 dark:border-gray-700">
            <div class="fluid-container">
                <nav class="flex fade-in" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="/" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Portfolio
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio/laravel" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Laravel Projects
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Chagan.su
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Project Hero Section -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Project Info -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Chagan.su</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Active Project
                                    </span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-users mr-1 text-xs"></i>
                                        Community
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Digital home for the Chagan community - preserving history, reuniting former residents
                                and honoring the unique heritage of the military town near the "Bear" airbase.
                            </p>

                            <!-- Project Stats -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Development Year</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">6 months</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Development Time</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Full-stack</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Project Type</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://chagan.su" target="_blank" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Visit Website</span>
                                </a>
                                <a href="https://github.com/SirAndrewGotham/chagan" target="_blank" class="inline-flex items-center px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                                    <i class="fab fa-github mr-2"></i>
                                    <span>Source Code</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Project Case</span>
                                </button>
                            </div>
                        </div>

                        <!-- Project Icon -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-landmark text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Gallery -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Project Gallery</h2>

                    <!-- Main Gallery -->
                    <div class="project-gallery main mb-8 fade-in">
                        <div class="gallery-item h-96" @click="openLightbox(0)">
                            <img src="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Chagan.su Main Page" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                <div class="opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-search-plus text-white text-2xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="gallery-item h-44" @click="openLightbox(1)">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Residents Catalog" class="w-full h-full object-cover">
                            </div>
                            <div class="gallery-item h-44" @click="openLightbox(2)">
                                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Photo Archive" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Secondary Gallery -->
                    <div class="project-gallery secondary fade-in">
                        <div class="gallery-item h-64" @click="openLightbox(3)">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Mobile Version" class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-item h-64" @click="openLightbox(4)">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Community Forum" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Details -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Project Description -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-primary-500 mr-3"></i>
                                    About the Project
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Chagan.su</strong> is a modern web platform created to preserve history
                                        and reunite the community of former residents of the Chagan military town,
                                        located near the strategic "Bear" airbase.
                                    </p>
                                    <p>
                                        The project represents a complete modernization of the original chagan.ru website,
                                        which had been functioning since 2004 but became technologically outdated. The new platform
                                        is built on a modern Laravel stack using Livewire, Alpine.js and Tailwind CSS.
                                    </p>
                                    <p>
                                        The main mission of the project is to create a digital home for the Chagan community,
                                        where memories find their home and history finds its voice.
                                    </p>
                                </div>
                            </div>

                            <!-- Key Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-primary-500 mr-3"></i>
                                    Key Features
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Core Modules</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Residents catalog with advanced search</li>
                                            <li>Digital archive of photos and documents</li>
                                            <li>Platform for stories and memories</li>
                                            <li>Community forum</li>
                                            <li>Events and meetings calendar</li>
                                            <li>Multilingual support</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Technical Features</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Modern Laravel 12 + Livewire stack</li>
                                            <li>Responsive design for all devices</li>
                                            <li>Caching system for performance</li>
                                            <li>Secure authentication system</li>
                                            <li>Image and media optimization</li>
                                            <li>Full-content search</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Development Process -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-primary-500 mr-3"></i>
                                    Development Process
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Analysis and Design</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Study of legacy system, design of new architecture,
                                                creation of technical specifications and design mockups.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Backend Development</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                API creation, business logic implementation, development of
                                                authentication system and content management modules.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Frontend Development</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Creation of responsive interfaces, implementation of interactive elements
                                                with Livewire, integration with backend API.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Migration and Launch</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Data migration from legacy system, comprehensive testing,
                                                deployment to production server, performance monitoring.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Technologies Used -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-primary-500 mr-2"></i>
                                    Technologies
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'laravel']) }}" class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-lg text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                                Laravel 12
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'php']) }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                                                PHP 8.3
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'mysql']) }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:bg-orange-200 dark:hover:bg-orange-800/50 transition-colors">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'livewire']) }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                                                Livewire
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'tailwind']) }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:bg-cyan-200 dark:hover:bg-cyan-800/50 transition-colors">
                                                Tailwind CSS
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'alpinejs']) }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                Alpine.js
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Infrastructure</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'docker']) }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                                Docker
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'nginx']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
                                                Nginx
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'redis']) }}" class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm hover:bg-yellow-200 dark:hover:bg-yellow-800/50 transition-colors">
                                                Redis
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Stats -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-primary-500 mr-2"></i>
                                    Project Statistics
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Development Time</span>
                                        <span class="font-semibold">6 months</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Commits</span>
                                        <span class="font-semibold">428</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Lines of Code</span>
                                        <span class="font-semibold">~25,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">System Modules</span>
                                        <span class="font-semibold">12</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Performance</span>
                                        <span class="font-semibold">92/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Challenges & Solutions -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-puzzle-piece text-primary-500 mr-2"></i>
                                    Solved Challenges
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Data migration from legacy system</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Creating complex search and filtering system</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Optimizing work with large volumes of media</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Implementing data privacy system</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Projects -->
                            <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Other Projects</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Explore other works from my portfolio
                                </p>
                                <a href="/portfolio" class="inline-flex items-center justify-center w-full px-4 py-2 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    <span>Back to Projects</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">Interested in a similar project?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Ready to discuss your ideas and create a solution that exceeds expectations.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Discuss Project</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>All Projects</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lightbox Modal -->
        <div x-show="lightboxOpen" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 p-4" x-cloak style="display: none;">
            <div class="relative max-w-6xl max-h-full">
                <button @click="lightboxOpen = false" class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>
                <img :src="lightboxImages[lightboxIndex]" :alt="'Image ' + (lightboxIndex + 1)" class="max-w-full max-h-full object-contain">
                <button @click="lightboxIndex = (lightboxIndex - 1 + lightboxImages.length) % lightboxImages.length"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-chevron-left text-2xl"></i>
                </button>
                <button @click="lightboxIndex = (lightboxIndex + 1) % lightboxImages.length"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-chevron-right text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Case Study Modal -->
        <div x-show="showCaseStudy" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showCaseStudy = false"></div>

                <!-- Modal panel -->
                <div class="relative inline-block w-full max-w-6xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Close button -->
                    <button @click="showCaseStudy = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Case Study Content -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Header -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Project Case: Chagan.su</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Preserving community history through modern technology</p>
                        </div>

                        <!-- Executive Summary -->
                        <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-primary-500 mr-3"></i>
                                Project Summary
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Project Goals</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Create modern platform for community history preservation</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Reunite former residents and preserve unique heritage</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Modernize legacy system with current technologies</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Key Results</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>92/100 performance score</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>3.2 second page load time</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-users text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>150% increase in user activity</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Challenges -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-primary-500 mr-3"></i>
                                Technical Challenges & Solutions
                            </h3>
                            <div class="space-y-6">
                                <!-- Challenge 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-primary-500">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Challenge: Legacy System Data Migration</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                The original chagan.ru system from 2004 used outdated data formats,
                                                lacked documentation, and had complex relationships between data entities.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Development of custom migration scripts</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Phased data migration with validation</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Backup creation and rollback capability</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Successful migration of 15+ years of community data with zero data loss
                                        </p>
                                    </div>
                                </div>

                                <!-- Challenge 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Challenge: Complex Search System Implementation</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Needed to implement powerful search allowing people finding by multiple criteria:
                                                years of residence, address, school, military unit, etc.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>MySQL full-text search implementation</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Complex filters with Livewire</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Query optimization and caching</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Fast and accurate search across thousands of records with sub-second response times
                                        </p>
                                    </div>
                                </div>

                                <!-- Challenge 3 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-purple-500">
                                    <h4 class="font-semibold text-lg mb-3 text-purple-600 dark:text-purple-400">Challenge: Media Content Optimization</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Large archive of historical photos and documents requiring optimization
                                                for web display while preserving quality and fast loading.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Automatic image optimization and compression</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Lazy loading implementation</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>CDN integration for media delivery</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            75% reduction in page load times while maintaining image quality
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project Impact -->
                        <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Project Impact & Results
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">150%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Increase in User Activity</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">92/100</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Performance Score</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">3.2s</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Average Page Load</div>
                                </div>
                            </div>
                        </div>

                        <!-- Lessons Learned -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-graduation-cap text-primary-500 mr-3"></i>
                                Lessons Learned
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Technical Insights</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Importance of comprehensive data migration planning</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Value of caching strategies for community platforms</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Benefits of modular architecture for future scalability</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Project Management</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Early stakeholder involvement is crucial for community projects</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Phased deployment reduces risk and improves user adoption</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Continuous feedback loops with community members</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Future Roadmap -->
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-road text-purple-500 mr-3"></i>
                                Future Development Roadmap
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-3 text-purple-600 dark:text-purple-400">Short-term (3-6 months)</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Mobile application development</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Enhanced photo recognition features</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Advanced search filters</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-3 text-purple-600 dark:text-purple-400">Long-term (6-12 months)</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>AI-powered content recommendations</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Integration with social networks</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Multimedia archive expansion</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @push('scripts')
        <script>
            function portfolioItemApp() {
                return {
                    lightboxOpen: false,
                    lightboxIndex: 0,
                    showCaseStudy: false,
                    lightboxImages: [
                        'https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
                    ],
                    openLightbox(index) {
                        this.lightboxIndex = index;
                        this.lightboxOpen = true;
                    },
                    init() {
                        // Initialize any animations or interactions
                        console.log('Portfolio item initialized');
                    }
                }
            }
        </script>
    @endpush

    @push('styles')
        <style>
            .project-gallery {
                display: grid;
                gap: 1rem;
            }
            .project-gallery.main {
                grid-template-columns: 2fr 1fr;
            }
            .project-gallery.secondary {
                grid-template-columns: 1fr 1fr;
            }
            .gallery-item {
                position: relative;
                border-radius: 0.75rem;
                overflow: hidden;
                cursor: pointer;
                transition: transform 0.3s ease;
            }
            .gallery-item:hover {
                transform: scale(1.02);
            }
            .tech-tag {
                transition: all 0.3s ease;
            }
            .fade-in {
                animation: fadeIn 0.6s ease-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .fluid-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 1rem;
            }
            @media (max-width: 768px) {
                .project-gallery.main,
                .project-gallery.secondary {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    @endpush
</x-frontend.layouts.app>

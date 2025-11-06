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
                                <a href="/portfolio/full-stack" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Full-stack Projects
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    GothamFolio Platform
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
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">GothamFolio Platform</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Active Project
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Full-featured platform for managing personal portfolio with integrated blogging system, galleries, and performance analytics.
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
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">3 months</div>
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
                                <a href="https://andrewgotham.ru" target="_blank" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>View Demo</span>
                                </a>
                                <a href="https://github.com/SirAndrewGotham/gothamfolio" target="_blank" class="inline-flex items-center px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
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
                                <i class="fas fa-laptop-code text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Details -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- Project Description -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-primary-500 mr-3"></i>
                                    About the Project
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>GothamFolio Platform</strong> is a modern web application developed to showcase professional skills and projects.
                                        The platform combines the functions of a personal website, blog, and content management system.
                                    </p>
                                    <p>
                                        The project was created from scratch using Laravel 12 and modern frontend technologies.
                                        The main task was to create a performant, scalable, and user-friendly platform that could
                                        adapt to different types of content.
                                    </p>
                                    <p>
                                        Special attention was paid to user experience, performance, and security.
                                        The platform supports multilingualism, responsive design, and is optimized for SEO.
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
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Core Features</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Dynamic project portfolio</li>
                                            <li>Integrated blogging system</li>
                                            <li>Photo galleries and works</li>
                                            <li>Comment and feedback system</li>
                                            <li>Multilingual support</li>
                                            <li>SEO optimization</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Technical Features</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Admin panel for content management</li>
                                            <li>Caching system for performance</li>
                                            <li>API for external service integration</li>
                                            <li>Visit analytics and behavior tracking</li>
                                            <li>Data backup system</li>
                                            <li>Automatic updates</li>
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
                                            <h3 class="font-semibold mb-2">Planning and Design</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Requirements analysis, technical specification creation, database architecture design,
                                                and user interface prototyping.
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
                                                API creation, business logic implementation, database setup, authentication
                                                and authorization system development.
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
                                                Responsive interface creation, interactive elements implementation with Livewire,
                                                backend API integration, performance optimization.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Testing and Launch</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Comprehensive functionality testing, bug fixing, production server deployment,
                                                performance monitoring.
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
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Tools</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'git']) }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                                Git
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'nginx']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
                                                Nginx
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'composer']) }}" class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm hover:bg-yellow-200 dark:hover:bg-yellow-800/50 transition-colors">
                                                Composer
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Technologies Used -->
                            {{--                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">--}}
                            {{--                                <h3 class="text-lg font-bold mb-4 flex items-center">--}}
                            {{--                                    <i class="fas fa-tools text-primary-500 mr-2"></i>--}}
                            {{--                                    Technologies--}}
                            {{--                                </h3>--}}
                            {{--                                <div class="space-y-3">--}}
                            {{--                                    <div>--}}
                            {{--                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>--}}
                            {{--                                        <div class="flex flex-wrap gap-2">--}}
                            {{--                                            <span class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-lg text-sm">--}}
                            {{--                                                Laravel 12--}}
                            {{--                                            </span>--}}
                            {{--                                            <span class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm">--}}
                            {{--                                                PHP 8.3--}}
                            {{--                                            </span>--}}
                            {{--                                            <span class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm">--}}
                            {{--                                                MySQL--}}
                            {{--                                            </span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div>--}}
                            {{--                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>--}}
                            {{--                                        <div class="flex flex-wrap gap-2">--}}
                            {{--                                            <span class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm">--}}
                            {{--                                                Livewire--}}
                            {{--                                            </span>--}}
                            {{--                                            <span class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm">--}}
                            {{--                                                Tailwind CSS--}}
                            {{--                                            </span>--}}
                            {{--                                            <span class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm">--}}
                            {{--                                                Alpine.js--}}
                            {{--                                            </span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div>--}}
                            {{--                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Tools</h4>--}}
                            {{--                                        <div class="flex flex-wrap gap-2">--}}
                            {{--                                            <span class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm">--}}
                            {{--                                                Git--}}
                            {{--                                            </span>--}}
                            {{--                                            <span class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm">--}}
                            {{--                                                Nginx--}}
                            {{--                                            </span>--}}
                            {{--                                            <span class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm">--}}
                            {{--                                                Composer--}}
                            {{--                                            </span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <!-- Project Stats -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-primary-500 mr-2"></i>
                                    Project Statistics
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Development Time</span>
                                        <span class="font-semibold">3 months</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Commits</span>
                                        <span class="font-semibold">247</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Lines of Code</span>
                                        <span class="font-semibold">~15,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Test Coverage</span>
                                        <span class="font-semibold">85%</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Performance</span>
                                        <span class="font-semibold">95/100</span>
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
                            <h2 class="text-3xl font-bold mb-4">Project Case: GothamFolio Platform</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Complete breakdown of the development process from idea to implementation</p>
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
                                            <span>Create modern platform for showcasing professional skills</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Integrate blog, portfolio and content management system</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Ensure high performance and SEO optimization</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Key Results</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>95/100 score in Google PageSpeed Insights</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Page load time less than 1.2 seconds</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-search text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>40% improvement in SEO metrics</span>
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
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Challenge: Media Content Performance Optimization</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Project galleries contained high-quality images, leading to slow page loading and high bandwidth consumption.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Lazy loading implementation for images</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Automatic WebP format generation</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Image preview caching</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            68% reduction in gallery loading time, 45% reduction in data transfer volume
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Results -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Results & Impact
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-green-500 mb-2">95%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">PageSpeed Score</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">1.2s</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Load Time</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">40%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Traffic Growth</div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                                Close Case
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                                Discuss Collaboration
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function portfolioItemApp() {
                return {
                    showCaseStudy: false,
                    init() {
                        // Close modal on escape key
                        document.addEventListener('keydown', (e) => {
                            if (e.key === 'Escape' && this.showCaseStudy) {
                                this.showCaseStudy = false;
                            }
                        });
                    }
                }
            }
        </script>
    </main>
</x-frontend.layouts.app>

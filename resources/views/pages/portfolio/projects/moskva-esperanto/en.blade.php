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
                                    Moskva Esperanto Community Web Site
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Project Hero Section -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Project Info -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Moskva Esperanto Community Web Site</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-clock mr-1 text-xs"></i>
                                        In Development
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Multilingual community platform for Moscow's Esperanto community featuring events, news, blogs, and member networking in Esperanto, Russian, and English.
                            </p>

                            <!-- Project Stats -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Development Year</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-language"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">3 Languages</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Multilingual</div>
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
                                <button disabled class="inline-flex items-center px-6 py-3 bg-gray-300 dark:bg-gray-600 text-gray-500 dark:text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Launching Soon</span>
                                </button>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-green-500 text-green-500 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Project Plan</span>
                                </button>
                            </div>
                        </div>

                        <!-- Project Icon -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-green-500 to-blue-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-globe-europe text-4xl"></i>
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
                                    <i class="fas fa-info-circle text-green-500 mr-3"></i>
                                    About the Project
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Moskva Esperanto Community Web Site</strong> is a comprehensive community platform designed specifically for Moscow's Esperanto-speaking community.
                                        The project aims to create a central hub for Esperanto enthusiasts to connect, share experiences, and organize events.
                                    </p>
                                    <p>
                                        Built with modern web technologies, the platform supports multiple languages (Esperanto, Russian, English) and provides
                                        a complete suite of community management tools including event organization, news publishing, member networking, and content sharing.
                                    </p>
                                    <p>
                                        The platform emphasizes user-friendly design, accessibility, and community engagement while maintaining the cultural
                                        and linguistic values of the Esperanto movement.
                                    </p>
                                </div>
                            </div>

                            <!-- Key Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-green-500 mr-3"></i>
                                    Platform Features
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-green-600 dark:text-green-400">Community Core</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Multilingual content (Esperanto, Russian, English)</li>
                                            <li>Event calendar with registration system</li>
                                            <li>News and announcement management</li>
                                            <li>Member blogs and articles</li>
                                            <li>Photo galleries from events</li>
                                            <li>Interactive contact forms</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-green-600 dark:text-green-400">User Management</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Role-based permissions (Visitor, Member, Editor, Admin)</li>
                                            <li>Member directory and profiles</li>
                                            <li>Content moderation system</li>
                                            <li>Event registration tracking</li>
                                            <li>Multi-level membership system</li>
                                            <li>Learning resources section</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Development Process -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-green-500 mr-3"></i>
                                    Development Phases
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Foundation & Structure</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Laravel setup, database architecture, basic page structure, multilingual foundation,
                                                and core navigation system implementation.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Core Functionality</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                News system, event management, contact forms, user authentication,
                                                and basic content management features.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Community Features</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Blog system with comments, photo galleries, member profiles,
                                                membership management, and community interaction tools.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Enhancements & Polish</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Language switcher optimization, search functionality, performance tuning,
                                                and additional interactive features for better user experience.
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
                                    <i class="fas fa-tools text-green-500 mr-2"></i>
                                    Technology Stack
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/laravel') }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:underline">
                                                Laravel 12
                                            </a>
                                            <a href="{{ url('competences/php') }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:underline">
                                                PHP 8.3
                                            </a>
                                            <a href="{{ url('competences/mysql') }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:underline">
                                                SQLite/MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/livewire') }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:underline">
                                                Livewire
                                            </a>
                                            <a href="{{ url('competences/tailwind-css') }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:underline">
                                                Tailwind CSS
                                            </a>
                                            <a href="{{ url('competences/alpine-js') }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:underline">
                                                Alpine.js
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Features</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/multilingual') }}" class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm hover:underline">
                                                Multilingual
                                            </a>
                                            <a href="{{ url('competences/laravel-folio') }}" class="tech-tag px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm hover:underline">
                                                Laravel Folio Pages
                                            </a>
                                            <a href="{{ url('competences/livewire-volt') }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:underline">
                                                Volt Components
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Scope -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-project-diagram text-green-500 mr-2"></i>
                                    Project Scope
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Development Time</span>
                                        <span class="font-semibold">3-4 months</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Languages</span>
                                        <span class="font-semibold">Esperanto, RU, EN</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">User Roles</span>
                                        <span class="font-semibold">4 Levels</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Target Audience</span>
                                        <span class="font-semibold">Esperanto Community</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Special Features -->
                            <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Esperanto Community Focus</h3>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-language text-green-500 mr-2 mt-0.5"></i>
                                        <span>Trilingual interface support</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-users text-blue-500 mr-2 mt-0.5"></i>
                                        <span>Community event management</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-graduation-cap text-purple-500 mr-2 mt-0.5"></i>
                                        <span>Learning resources section</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-camera text-yellow-500 mr-2 mt-0.5"></i>
                                        <span>Event photo galleries</span>
                                    </li>
                                </ul>
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
                    <h2 class="text-3xl font-bold mb-6">Interested in community platforms?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Let's discuss how a custom community website can benefit your organization.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Discuss Project</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-green-500 text-green-500 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>All Projects</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Plan Modal -->
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

                    <!-- Project Plan Content -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Header -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Project Plan: Moskva Esperanto Community Web Site</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Comprehensive community platform for Moscow's Esperanto speakers</p>
                        </div>

                        <!-- Executive Summary -->
                        <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-green-500 mr-3"></i>
                                Project Vision
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                To create a vibrant digital home for Moscow's Esperanto community that facilitates connection,
                                knowledge sharing, and event organization while preserving the international spirit of Esperanto.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Core Objectives</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Centralize community information and events</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Facilitate member connections and content sharing</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Provide multilingual access to community resources</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Key Features</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-calendar text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Event management with registration</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-newspaper text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Multilingual news and blog system</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-camera text-purple-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Photo galleries from community events</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Implementation -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-green-500 mr-3"></i>
                                Technical Implementation
                            </h3>
                            <div class="space-y-6">
                                <!-- Implementation 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-green-500">
                                    <h4 class="font-semibold text-lg mb-3 text-green-600 dark:text-green-400">Multilingual Architecture</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Language Support</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Esperanto (primary)</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Russian (local)</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>English (international)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-blue-600 dark:text-blue-400">Implementation</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Language switcher with flags and language names, consistent navigation across all languages,
                                                and culturally appropriate content for each audience.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Implementation 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">User Role System</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Permission Levels</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-user text-gray-500 mr-2 mt-0.5"></i>
                                                    <span>Visitors: Public content access</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-user-friends text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Members: Content creation</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-edit text-blue-500 mr-2 mt-0.5"></i>
                                                    <span>Editors: Content moderation</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-cog text-purple-500 mr-2 mt-0.5"></i>
                                                    <span>Admins: Full system access</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-blue-600 dark:text-blue-400">Features</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Granular permission control, member directory with privacy options,
                                                event registration tracking, and content moderation tools.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Success Metrics -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Success Metrics
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-green-500 mb-2">80%+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Member Engagement</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">3</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Supported Languages</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">100%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Mobile Responsive</div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg font-medium transition-colors">
                                Close Plan
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-green-500 text-green-500 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg font-medium transition-colors">
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

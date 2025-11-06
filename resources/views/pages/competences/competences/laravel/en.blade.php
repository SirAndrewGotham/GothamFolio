<x-frontend.layouts.app>
    <!-- Main Content -->
    <main class="w-full pt-20">
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
                                <a href="/competences" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Competences
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Backend Development
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="py-12 bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Icon and Basic Info -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-red-500 to-pink-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-laravel text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Laravel</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Primary Tool
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Full-stack PHP framework for elegant web development with expressive syntax. My primary tool since 2015.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">95%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">9+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Experience since Laravel 5</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v12.x</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Current Version</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- About Laravel -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-red-500 mr-3"></i>
                                    About Laravel
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel</strong> is a modern full-stack web application framework for PHP,
                                        combining power, elegance, and ease of use. Created by Taylor Otwell,
                                        Laravel follows MVC (Model-View-Controller) principles and provides developers with a rich set
                                        of tools for creating scalable and maintainable applications.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Elegant Syntax</strong> — expressive and intuitive code</li>
                                        <li><strong>Rich Ecosystem</strong> — huge community and packages</li>
                                        <li><strong>Built-in Features</strong> — authentication, caching, queues out of the box</li>
                                        <li><strong>Excellent Documentation</strong> — one of the best in the industry</li>
                                        <li><strong>Active Record ORM</strong> — Eloquent for database work</li>
                                        <li><strong>Database Migrations</strong> — version control for database schema</li>
                                        <li><strong>Testing</strong> — built-in PHPUnit support</li>
                                    </ul>

                                    <h3>Recommended Use Cases</h3>
                                    <p>
                                        Laravel is ideal for a wide range of projects — from simple blogs and corporate websites
                                        to complex enterprise applications and API services. Especially effective for:
                                    </p>
                                    <ul>
                                        <li>Corporate portals and CRM systems</li>
                                        <li>Online stores and e-commerce platforms</li>
                                        <li>REST API for mobile applications</li>
                                        <li>Content Management Systems (CMS)</li>
                                        <li>Social networks and communities</li>
                                        <li>Analytics and reporting systems</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Laravel Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-red-500 mr-3"></i>
                                    My Laravel Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started working with Laravel in 2015 with version 5.0, when the framework had already become a mature tool
                                        with a powerful ecosystem. Since then, I have progressed from learning the basics to creating complex enterprise applications
                                        and participating in community open-source projects.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code-branch text-red-500 mr-2"></i>
                                                Legacy Project Migration
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                I have experience successfully migrating legacy projects from other frameworks (Yii/Yii2, CodeIgniter) to Laravel,
                                                as well as updating old Laravel versions to modern ones.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                                Building from Scratch
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                I develop full-fledged Laravel applications based on technical specifications,
                                                applying best practices and modern architectural approaches.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-red-500 mr-3"></i>
                                    My Laravel Experience
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I have been working with Laravel since 2015, starting with version 5.0. During this time, I have progressed from learning the basics
                                        to creating complex enterprise applications and participating in community open-source projects.
                                    </p>

                                    <h3>Specialized Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>RESTful API Development</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Legacy Code Migration to Laravel</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Updating Old Laravel Versions</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Building Applications from Scratch</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eloquent ORM and Relational Relationships</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Database Migrations and Seeders</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Blade Templating and Components</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Authentication and Authorization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Queues and Background Tasks</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testing with PHPUnit</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance Optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integration with External APIs</span>
                                        </div>
                                    </div>

                                    <h3>Key Projects</h3>
                                    <ul>
                                        <li><strong>GothamFolio</strong> — Personal portfolio on Laravel 10 with Livewire and Tailwind</li>
                                        <li><strong>Telescan Web</strong> — Analytics platform with microservice architecture</li>
                                        <li><strong>Corporate Portal for LLC "Taris"</strong> — Business process management system</li>
                                        <li><strong>API for Mobile Application</strong> — RESTful service with JWT authentication</li>
                                        <li><strong>Yii2 Project Migration</strong> — Transfer of corporate portal to Laravel</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Technical Details -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-red-500 mr-3"></i>
                                    Technical Details
                                </h2>
                                <div class="content-section">
                                    <h3>Architectural Features</h3>
                                    <p>
                                        Laravel follows clean architecture principles and Domain-Driven Design (DDD), providing flexible
                                        tools for creating maintainable applications. Key architectural components:
                                    </p>
                                    <ul>
                                        <li><strong>Service Container</strong> — powerful dependency injection system</li>
                                        <li><strong>Service Providers</strong> — centralized service registration</li>
                                        <li><strong>Middleware</strong> — HTTP request filtering</li>
                                        <li><strong>Events & Listeners</strong> — event-driven architecture</li>
                                        <li><strong>Jobs & Queues</strong> — background task processing</li>
                                    </ul>

                                    <h3>Ecosystem and Tools</h3>
                                    <p>
                                        I work with the entire Laravel ecosystem, including:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Livewire</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Eloquent</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Artisan CLI</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Migrations</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Blade</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Queues</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Telescope</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Horizon</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Socialite</span>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub Projects -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-red-500 mr-3"></i>
                                    GitHub Projects
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Some of my Laravel projects can be found on GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham on GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        My portfolio on this website features projects developed using Laravel.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-red-500 mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-red-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-red-500 to-pink-500"
                                                 data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">REST API</span>
                                            <span class="text-sm font-bold text-green-500">98%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="98%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Eloquent ORM</span>
                                            <span class="text-sm font-bold text-green-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Legacy Migration</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Performance</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-red-500 mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>9+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Laravel 12.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>30+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-certificate text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Certification: <strong>Laravel Certified</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code-branch text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Legacy Migration: <strong>5+ projects</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-red-500 mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-red-500 transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-red-500 transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/livewire" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-red-500 transition-colors">Livewire</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-red-500 transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-red-500 to-pink-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Interested in collaboration?</h3>
                                <p class="text-sm mb-4">Ready to discuss your Laravel project</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-red-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Contact Me
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.app>

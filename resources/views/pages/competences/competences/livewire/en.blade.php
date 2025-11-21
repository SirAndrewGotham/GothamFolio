<x-frontend.layouts.app>
    @push('section-styles')
        <style>
            /* Alpine.js specific gradient that isn't in the main app.css */
            .alpine-gradient {
                background: linear-gradient(135deg, #8b5cf6 0%, #4c1d95 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Skill bar animation
            document.addEventListener('DOMContentLoaded', function () {
                const skillBars = document.querySelectorAll('.skill-bar-inner');

                skillBars.forEach(bar => {
                    const width = bar.getAttribute('data-width');
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 100);
                });
            });
        </script>
@endpush

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
                                    <a href="/competences/frontend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Frontend Development
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Livewire
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-pink-50 to-rose-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#fb7185] to-[#ec4899] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-bolt text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 livewire-gradient">Livewire</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Advanced Proficiency
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Full-stack framework for Laravel with dynamic UI. Creating reactive applications without leaving the Laravel ecosystem.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">92%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Professional Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-code-branch"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.x</div>
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
                                <!-- About Livewire -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#fb7185] mr-3"></i>
                                        About Livewire
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Livewire</strong> is a full-stack framework for Laravel that makes building dynamic interfaces simple,
                                            without leaving the comfort of Laravel. It allows you to create reactive components that feel modern and responsive,
                                            while writing mostly PHP and minimal JavaScript.
                                        </p>

                                        <h3>Core Philosophy & Benefits</h3>
                                        <ul>
                                            <li><strong>Laravel Native</strong> - Works seamlessly within the Laravel ecosystem</li>
                                            <li><strong>Minimal JavaScript</strong> - Write reactive UIs primarily in PHP</li>
                                            <li><strong>Real-time Updates</strong> - Automatic DOM updates without page refreshes</li>
                                            <li><strong>Component-Based</strong> - Reusable, self-contained UI components</li>
                                            <li><strong>Progressive Enhancement</strong> - Works with existing Laravel applications</li>
                                            <li><strong>Developer Experience</strong> - Excellent tooling and debugging capabilities</li>
                                        </ul>

                                        <h3>Ideal Use Cases</h3>
                                        <p>
                                            Livewire excels in scenarios where you want dynamic, app-like experiences:
                                        </p>
                                        <ul>
                                            <li>Dynamic forms with real-time validation</li>
                                            <li>Data tables with sorting, filtering, and pagination</li>
                                            <li>Dashboard widgets and real-time metrics</li>
                                            <li>Interactive search and filtering interfaces</li>
                                            <li>Multi-step wizards and complex workflows</li>
                                            <li>Admin panels and content management systems</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Livewire Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#fb7185] mr-3"></i>
                                        My Livewire Journey
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Started working with Livewire in 2021, immediately recognizing its potential for creating dynamic Laravel applications
                                            without the complexity of separate frontend frameworks. Over 3+ years, have built numerous production applications
                                            and mastered advanced Livewire patterns.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-pink-50 to-rose-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-layer-group text-[#fb7185] mr-2"></i>
                                                    Component Architecture
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Mastered component composition, state management, and lifecycle hooks
                                                    for building complex, maintainable Livewire applications.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-rocket text-purple-500 mr-2"></i>
                                                    Performance Optimization
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Implemented advanced optimization techniques including lazy loading,
                                                    debouncing, and efficient data handling in large-scale applications.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Technical Expertise -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#fb7185] mr-3"></i>
                                        Technical Expertise
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Deep understanding of Livewire's architecture and advanced features, combined with
                                            practical experience building production applications.
                                        </p>

                                        <h3>Core Livewire Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Component Development & Composition</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>State Management & Data Binding</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Lifecycle Hooks & Events</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Form Handling & Validation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>File Uploads & Media Handling</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Real-time Updates & Polling</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Nested Components & Slots</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Testing & Debugging</span>
                                            </div>
                                        </div>

                                        <h3>Advanced Features Mastered</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Lazy Loading</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Deferred Loading</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Query String</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">URL Attributes</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Event System</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">JavaScript Integration</span>
                                        </div>

                                        <h3>Performance & Optimization</h3>
                                        <ul>
                                            <li><strong>Eager/Lazy Loading</strong> - Strategic component loading for optimal performance</li>
                                            <li><strong>Debounced Actions</strong> - Preventing excessive server requests</li>
                                            <li><strong>Pagination & Caching</strong> - Efficient data handling in large datasets</li>
                                            <li><strong>Asset Optimization</strong> - Minimizing JavaScript payloads</li>
                                            <li><strong>Database Optimization</strong> - Efficient queries and indexing</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Integration & Ecosystem -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#fb7185] mr-3"></i>
                                        Integration & Ecosystem
                                    </h2>
                                    <div class="content-section">
                                        <h3>Laravel Ecosystem Integration</h3>
                                        <p>
                                            Extensive experience integrating Livewire with various Laravel ecosystem packages and tools:
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-blue-600 mb-2">Eloquent & Databases</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Complex data relationships, eager loading, model binding, and efficient query patterns.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-green-600 mb-2">Authentication & Authorization</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Laravel Sanctum, Jetstream, Fortify integration with Livewire components.
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Third-party Package Integration</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Alpine.js</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Tailwind CSS</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Laravel Debugbar</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Livewire UI</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Wire Elements</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Laravel Excel</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Laravel Media Library</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Laravel Nova</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Examples -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fab fa-github text-[#fb7185] mr-3"></i>
                                        Projects & Implementation
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Various Livewire projects showcasing different implementation patterns and use cases:
                                        </p>
                                        <div class="mt-4">
                                            <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                                <i class="fab fa-github mr-2"></i>
                                                <span>SirAndrewGotham on GitHub</span>
                                            </a>
                                        </div>
                                        <h3 class="mt-6">Notable Livewire Projects</h3>
                                        <ul>
                                            <li><strong>GothamFolio Platform</strong> - Personal portfolio with dynamic content management</li>
                                            <li><strong>E-commerce Admin Panel</strong> - Real-time inventory and order management</li>
                                            <li><strong>CRM Dashboard</strong> - Interactive analytics and customer management</li>
                                            <li><strong>Real-time Chat System</strong> - Livewire with Laravel Echo and WebSockets</li>
                                            <li><strong>Multi-step Form Applications</strong> - Complex workflows with state persistence</li>
                                            <li><strong>Data Visualization Dashboards</strong> - Real-time metrics and reporting</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#fb7185] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Livewire</span>
                                                <span class="text-sm font-bold text-[#fb7185]">92%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#fb7185] to-[#ec4899]"
                                                     data-width="92%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Component Architecture</span>
                                                <span class="text-sm font-bold text-green-500">95%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Performance Optimization</span>
                                                <span class="text-sm font-bold text-blue-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Ecosystem Integration</span>
                                                <span class="text-sm font-bold text-purple-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Real-time Features</span>
                                                <span class="text-sm font-bold text-orange-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#fb7185] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#fb7185] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-[#fb7185] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>Livewire 3.x</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#fb7185] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>25+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-bolt text-[#fb7185] w-5 mr-3"></i>
                                            <span class="text-sm">Components Built: <strong>100+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-sync-alt text-[#fb7185] w-5 mr-3"></i>
                                            <span class="text-sm">Real-time Apps: <strong>15+</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#fb7185] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-laravel text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#fb7185] transition-colors">Laravel</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#fb7185] transition-colors"></i>
                                        </a>
                                        <a href="/competences/alpinejs" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-js text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#fb7185] transition-colors">Alpine.js</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#fb7185] transition-colors"></i>
                                        </a>
                                        <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-wind text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#fb7185] transition-colors">Tailwind CSS</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#fb7185] transition-colors"></i>
                                        </a>
                                        <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-php text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#fb7185] transition-colors">PHP</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#fb7185] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#fb7185] to-[#ec4899] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Interested in Livewire Development?</h3>
                                    <p class="text-sm mb-4">Ready to discuss dynamic Laravel applications with Livewire</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-pink-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

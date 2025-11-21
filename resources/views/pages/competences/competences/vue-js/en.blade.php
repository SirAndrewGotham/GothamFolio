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
                                        Vue.js
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4fc08d] to-[#34495e] flex items-center justify-center text-white shadow-lg">
                                    <i class="fab fa-vuejs text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 vue-gradient">Vue.js</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-leaf mr-1"></i>
                                            Progressive Framework
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Progressive JavaScript framework for building user interfaces. Approachable, versatile, and performant framework for modern web development.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Professional Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-code-branch"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.x</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Composition API</div>
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
                                <!-- About Vue.js -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#4fc08d] mr-3"></i>
                                        About Vue.js
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Vue.js</strong> is a progressive JavaScript framework for building user interfaces.
                                            Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable.
                                            The core library focuses on the view layer only, and is easy to pick up and integrate with other libraries or existing projects.
                                        </p>

                                        <h3>Core Philosophy & Advantages</h3>
                                        <ul>
                                            <li><strong>Progressive Framework</strong> - Scalable from library to full-featured framework</li>
                                            <li><strong>Approachable</strong> - Easy to learn with HTML-based template syntax</li>
                                            <li><strong>Versatile</strong> - Powerful tooling for Single Page Applications</li>
                                            <li><strong>Performant</strong> - Virtual DOM and optimized rendering</li>
                                            <li><strong>Composition API</strong> - Better logic reuse and TypeScript support</li>
                                            <li><strong>Rich Ecosystem</strong> - Vue Router, Vuex/Pinia, Vue CLI, and more</li>
                                        </ul>

                                        <h3>Ideal Use Cases</h3>
                                        <p>
                                            Vue.js excels in various scenarios from simple enhancements to complex applications:
                                        </p>
                                        <ul>
                                            <li>Progressive enhancement of existing projects</li>
                                            <li>Single Page Applications (SPAs)</li>
                                            <li>Interactive dashboards and data visualization</li>
                                            <li>E-commerce interfaces and product catalogs</li>
                                            <li>Content management systems and admin panels</li>
                                            <li>Real-time applications and collaborative tools</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Vue.js Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#4fc08d] mr-3"></i>
                                        My Vue.js Journey
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Started working with Vue.js in 2020, initially with Vue 2 for small interactive components.
                                            Progressively adopted more advanced patterns and migrated to Vue 3 with Composition API.
                                            Over 4 years, have built various applications from simple widgets to complex SPAs.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-code-branch text-[#4fc08d] mr-2"></i>
                                                    Vue 2 to Vue 3 Migration
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Successfully migrated projects from Vue 2 Options API to Vue 3 Composition API,
                                                    leveraging improved TypeScript support and better code organization.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                                    Ecosystem Integration
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Integrated Vue with various backends including Laravel APIs,
                                                    building full-stack applications with modern development workflows.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Technical Expertise -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#4fc08d] mr-3"></i>
                                        Technical Expertise
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Solid understanding of Vue.js fundamentals combined with practical experience
                                            building production applications with modern development practices.
                                        </p>

                                        <h3>Core Vue.js Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Vue 3 Composition API</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Component Composition & Reusability</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Reactive State Management</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Vue Router for SPA Navigation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Form Handling & Validation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>API Integration & Data Fetching</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Directives & Custom Directives</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Testing with Vue Test Utils</span>
                                            </div>
                                        </div>

                                        <h3>Advanced Features & Patterns</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Composition API</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Teleport</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Suspense</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Provide/Inject</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Custom Hooks</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Slots</span>
                                        </div>

                                        <h3>Development Tools & Workflow</h3>
                                        <ul>
                                            <li><strong>Vue DevTools</strong> - Browser extension for debugging and inspection</li>
                                            <li><strong>Vite</strong> - Fast build tool and development server</li>
                                            <li><strong>TypeScript Integration</strong> - Type-safe Vue development</li>
                                            <li><strong>Vue CLI</strong> - Project scaffolding and configuration</li>
                                            <li><strong>Single File Components (SFC)</strong> - .vue files with template, script, and style</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Ecosystem & State Management -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#4fc08d] mr-3"></i>
                                        Ecosystem & State Management
                                    </h2>
                                    <div class="content-section">
                                        <h3>State Management Solutions</h3>
                                        <p>
                                            Experience with various state management patterns and libraries in the Vue ecosystem:
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-purple-600 mb-2">Pinia (Modern)</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Vue 3's recommended state management library with TypeScript support,
                                                    simpler API, and better development experience.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-blue-600 mb-2">Vuex (Legacy)</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Centralized state management for Vue 2 applications,
                                                    with experience in complex state patterns and modules.
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Vue Ecosystem Packages</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Vue Router</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Vuex/Pinia</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Vue I18n</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Vuelidate</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Vue Meta</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Vue Chart.js</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Vue Draggable</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Vue Toast</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Examples -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fab fa-github text-[#4fc08d] mr-3"></i>
                                        Projects & Implementation
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Various Vue.js projects showcasing different implementation patterns and use cases:
                                        </p>
                                        <div class="mt-4">
                                            <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                                <i class="fab fa-github mr-2"></i>
                                                <span>SirAndrewGotham on GitHub</span>
                                            </a>
                                        </div>
                                        <h3 class="mt-6">Notable Vue.js Projects</h3>
                                        <ul>
                                            <li><strong>Interactive Dashboard</strong> - Real-time metrics with Vue 3 and Chart.js</li>
                                            <li><strong>E-commerce Product Catalog</strong> - Filterable product listings with Vue Router</li>
                                            <li><strong>Admin Management Panel</strong> - CRUD operations with Pinia state management</li>
                                            <li><strong>Multi-step Form Application</strong> - Complex form workflows with validation</li>
                                            <li><strong>Real-time Collaboration Tool</strong> - Vue with WebSocket integration</li>
                                            <li><strong>Portfolio Website</strong> - SPA with dynamic content and animations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#4fc08d] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Vue.js</span>
                                                <span class="text-sm font-bold text-[#4fc08d]">78%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4fc08d] to-[#34495e]"
                                                     data-width="78%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Vue 3 & Composition API</span>
                                                <span class="text-sm font-bold text-green-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Vue Router & Navigation</span>
                                                <span class="text-sm font-bold text-blue-500">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">State Management</span>
                                                <span class="text-sm font-bold text-purple-500">70%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Ecosystem Integration</span>
                                                <span class="text-sm font-bold text-orange-500">72%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="72%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#4fc08d] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#4fc08d] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-[#4fc08d] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>Vue 3.x</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#4fc08d] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>20+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-sync-alt text-[#4fc08d] w-5 mr-3"></i>
                                            <span class="text-sm">Migration: <strong>Vue 2 → Vue 3</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-puzzle-piece text-[#4fc08d] w-5 mr-3"></i>
                                            <span class="text-sm">Components Built: <strong>50+</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#4fc08d] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-js text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4fc08d] transition-colors">JavaScript</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                        </a>
                                        <a href="/competences/typescript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-js-square text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4fc08d] transition-colors">TypeScript</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                        </a>
                                        <a href="/competences/html-css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-html5 text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4fc08d] transition-colors">HTML/CSS</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                        </a>
                                        <a href="/competences/react" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-react text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4fc08d] transition-colors">React</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">65% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#4fc08d] to-[#34495e] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Interested in Vue.js Development?</h3>
                                    <p class="text-sm mb-4">Ready to discuss modern Vue.js applications and SPAs</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-green-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

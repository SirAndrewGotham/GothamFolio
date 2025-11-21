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
            document.addEventListener('DOMContentLoaded', function() {
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
                                        Alpine.js
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="py-12 bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Icon and Basic Info -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-purple-500 to-indigo-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-mountain text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 alpine-gradient">Alpine.js</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bolt mr-1"></i>
                                            Lightweight & Reactive
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Minimalist JavaScript framework for adding interactivity to web pages.
                                Perfect for enhancing server-rendered HTML with reactive behavior.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">82%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-weight-hanging"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">~7KB</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Bundle Size</div>
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
                            <!-- About Alpine.js -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                    About Alpine.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Alpine.js</strong> is a rugged, minimal tool for composing behavior directly in your markup.
                                        Think of it like jQuery for the modern web. It offers the reactive and declarative nature of big
                                        frameworks like Vue or React at a much lower cost.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Minimal footprint</strong> - Only ~7KB gzipped</li>
                                        <li><strong>No build step required</strong> - Works directly in the browser</li>
                                        <li><strong>Declarative syntax</strong> - Write behavior directly in HTML</li>
                                        <li><strong>Reactive state</strong> - Automatic UI updates when data changes</li>
                                        <li><strong>Perfect for server-rendered apps</strong> - Enhances existing HTML</li>
                                        <li><strong>Progressive enhancement</strong> - Add interactivity incrementally</li>
                                        <li><strong>Familiar Vue-like syntax</strong> - Easy to learn for Vue developers</li>
                                    </ul>

                                    <h3>Ideal Use Cases</h3>
                                    <p>
                                        Alpine.js shines in scenarios where you need interactivity without the overhead of a full SPA:
                                    </p>
                                    <ul>
                                        <li>Enhancing server-rendered applications (Laravel, Django, Rails)</li>
                                        <li>Adding interactivity to static sites</li>
                                        <li>Building small to medium complexity components</li>
                                        <li>Prototyping and MVPs</li>
                                        <li>Legacy code enhancement</li>
                                        <li>Progressive enhancement of existing applications</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Alpine.js Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-purple-500 mr-3"></i>
                                    My Journey with Alpine.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started using Alpine.js in 2021 when looking for a lightweight solution to add interactivity
                                        to server-rendered Laravel applications. Since then, it has become my go-to tool for enhancing
                                        HTML with reactive behavior without the complexity of larger frameworks.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code text-purple-500 mr-2"></i>
                                                Laravel Integration
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Extensive experience integrating Alpine.js with Laravel applications,
                                                creating reactive components that work seamlessly with server-rendered Blade templates.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                                                Progressive Enhancement
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Successfully used Alpine.js to progressively enhance legacy applications,
                                                adding modern interactivity without complete rewrites.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                    My Experience with Alpine.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 3+ years of experience, I've used Alpine.js across various projects,
                                        from simple interactive elements to complex component-based interfaces.
                                    </p>

                                    <h3>Core Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Reactive state management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Component composition</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Event handling</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Form interactions</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dynamic content loading</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integration with Laravel/Livewire</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Custom directives</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance optimization</span>
                                        </div>
                                    </div>

                                    <h3>Technical Stack</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">x-data</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">x-show</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">x-bind</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">x-on</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">x-model</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">x-for</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">x-transition</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">x-effect</span>
                                    </div>

                                    <h3>Notable Projects</h3>
                                    <ul>
                                        <li><strong>Interactive Data Tables</strong> - Sortable, filterable tables with Alpine.js</li>
                                        <li><strong>Dynamic Form Builders</strong> - Forms that adapt based on user input</li>
                                        <li><strong>Modal Systems</strong> - Accessible modal dialogs with Alpine.js</li>
                                        <li><strong>Tab Interfaces</strong> - Responsive tab components without page reloads</li>
                                        <li><strong>Live Search</strong> - Real-time search with debounced input</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Technical Details -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-purple-500 mr-3"></i>
                                    Technical Details
                                </h2>
                                <div class="content-section">
                                    <h3>Architecture & Philosophy</h3>
                                    <p>
                                        Alpine.js follows a "progressive enhancement" philosophy, allowing you to add interactivity
                                        to existing HTML without a complete rewrite. Its architecture is designed to be:
                                    </p>
                                    <ul>
                                        <li><strong>Declarative</strong> - Define behavior directly in HTML attributes</li>
                                        <li><strong>Reactive</strong> - Automatic UI updates when data changes</li>
                                        <li><strong>Component-based</strong> - Encapsulate behavior in reusable components</li>
                                        <li><strong>Unobtrusive</strong> - Works alongside existing JavaScript</li>
                                        <li><strong>Extensible</strong> - Create custom directives and plugins</li>
                                    </ul>

                                    <h3>Key Directives</h3>
                                    <p>
                                        Alpine.js provides a set of directives that form the core of its functionality:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-data</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Defines a component's data and behavior
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-show</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Toggles element visibility based on expression
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-bind</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Dynamically sets HTML attributes
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-on</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Listens for DOM events and runs expressions
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-model</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Creates two-way data bindings
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-for</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Iterates over arrays to create DOM elements
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-transition</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Applies CSS transitions to elements
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-effect</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Runs code when dependencies change
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub Projects -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-purple-500 mr-3"></i>
                                    Projects on GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Some of my Alpine.js projects can be found on GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham on GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        I'm continuously adding new Alpine.js projects that demonstrate practical applications
                                        and best practices for using this lightweight framework.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-indigo-500"
                                                 data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Component Development</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">State Management</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Laravel Integration</span>
                                            <span class="text-sm font-bold text-red-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Performance Optimization</span>
                                            <span class="text-sm font-bold text-yellow-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-purple-500 mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Alpine.js 3.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-weight-hanging text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Bundle Size: <strong>~7KB</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Status: <strong>Active Development</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Learning Path -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-purple-500 mr-2"></i>
                                    Learning Path
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Basic directives (x-data, x-show)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Event handling (x-on)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Two-way binding (x-model)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Component composition</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Advanced state management</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Custom directives & plugins</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-purple-500 mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/livewire" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Livewire</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">JavaScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-purple-500 to-indigo-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Interested in collaboration?</h3>
                                <p class="text-sm mb-4">Ready to discuss your Alpine.js project</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-purple-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

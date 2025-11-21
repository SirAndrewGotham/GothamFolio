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
                                        JavaScript
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#f7df1e] to-[#f9a825] flex items-center justify-center text-gray-800 shadow-lg">
                                    <i class="fab fa-js text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 javascript-gradient">JavaScript</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Core Technology
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Frontend programming language for interactive web pages. The foundation of modern web development with 9+ years of professional experience.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center text-yellow-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">9+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Professional Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-code-branch"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">ES6+</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Modern Standards</div>
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
                                <!-- About JavaScript -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#f7df1e] mr-3"></i>
                                        About JavaScript
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>JavaScript</strong> is the programming language of the web, enabling interactive and dynamic user experiences.
                                            From simple DOM manipulations to complex single-page applications, JavaScript has evolved into a versatile language
                                            that powers modern web development across frontend, backend, and mobile platforms.
                                        </p>

                                        <h3>Key Features & Evolution</h3>
                                        <ul>
                                            <li><strong>ES6+ Modern Syntax</strong> - Arrow functions, classes, modules, destructuring</li>
                                            <li><strong>Asynchronous Programming</strong> - Promises, async/await, event loop</li>
                                            <li><strong>DOM Manipulation</strong> - Dynamic content updates and user interactions</li>
                                            <li><strong>Cross-platform</strong> - Browser, server (Node.js), mobile (React Native)</li>
                                            <li><strong>Rich Ecosystem</strong> - NPM packages, frameworks, and tools</li>
                                            <li><strong>Type Systems</strong> - TypeScript integration for large-scale applications</li>
                                        </ul>

                                        <h3>Professional Application</h3>
                                        <p>
                                            JavaScript is essential for creating modern web experiences:
                                        </p>
                                        <ul>
                                            <li>Interactive user interfaces and dynamic content</li>
                                            <li>Single Page Applications (SPAs) with frameworks</li>
                                            <li>Real-time features and WebSocket communications</li>
                                            <li>Form validation and user input processing</li>
                                            <li>API integrations and data visualization</li>
                                            <li>Progressive Web Apps (PWAs) and offline functionality</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My JavaScript Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#f7df1e] mr-3"></i>
                                        My JavaScript Journey
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Started with JavaScript in 2015, initially for basic DOM manipulations and form validations.
                                            Over 9+ years, progressed through jQuery era to modern ES6+ development, mastering frameworks
                                            and advanced JavaScript concepts for complex web applications.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-code text-[#f7df1e] mr-2"></i>
                                                    From jQuery to Modern JS
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Transitioned from jQuery-based development to modern vanilla JavaScript and frameworks,
                                                    embracing ES6+ features and modern development practices.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                                    Framework Evolution
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Worked with multiple JavaScript frameworks and libraries, adapting to ecosystem changes
                                                    while maintaining core JavaScript proficiency.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Technical Expertise -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#f7df1e] mr-3"></i>
                                        Technical Expertise
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Deep understanding of JavaScript fundamentals combined with practical experience across
                                            various frameworks and development scenarios.
                                        </p>

                                        <h3>Core JavaScript Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>ES6+ Modern Syntax</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Asynchronous Programming</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>DOM Manipulation & Events</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Object-Oriented & Functional Programming</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Error Handling & Debugging</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Performance Optimization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Browser APIs & Storage</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Module Systems & Bundlers</span>
                                            </div>
                                        </div>

                                        <h3>Advanced Concepts</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Closures</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Promises</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Async/Await</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Prototypes</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Event Loop</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Web Workers</span>
                                        </div>

                                        <h3>Development Tools & Environment</h3>
                                        <ul>
                                            <li><strong>Debugging</strong> - Chrome DevTools, browser consoles, debugging tools</li>
                                            <li><strong>Testing</strong> - Jest, Mocha, testing libraries and frameworks</li>
                                            <li><strong>Build Tools</strong> - Webpack, Vite, package managers (npm, yarn)</li>
                                            <li><strong>Linting</strong> - ESLint, Prettier for code quality</li>
                                            <li><strong>Type Systems</strong> - TypeScript for type-safe development</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Framework Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#f7df1e] mr-3"></i>
                                        Framework & Library Experience
                                    </h2>
                                    <div class="content-section">
                                        <h3>Modern Framework Proficiency</h3>
                                        <p>
                                            Experience with major JavaScript frameworks and libraries for different use cases:
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-green-600 mb-2">Vue.js Ecosystem</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Vue 2/3, Vue Router, Pinia/Vuex, Composition API. Building reactive and maintainable applications.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-blue-600 mb-2">React & Ecosystem</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    React Hooks, Context API, React Router, state management patterns.
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Additional Libraries & Tools</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">jQuery</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Axios</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Lodash</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Chart.js</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Alpine.js</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">D3.js</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Three.js</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">GSAP</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Examples -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fab fa-github text-[#f7df1e] mr-3"></i>
                                        Projects & GitHub
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Various JavaScript projects showcasing different aspects of the language and ecosystem:
                                        </p>
                                        <div class="mt-4">
                                            <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                                <i class="fab fa-github mr-2"></i>
                                                <span>SirAndrewGotham on GitHub</span>
                                            </a>
                                        </div>
                                        <h3 class="mt-6">Notable JavaScript Projects</h3>
                                        <ul>
                                            <li><strong>Interactive Dashboards</strong> - Real-time data visualization with Chart.js and D3.js</li>
                                            <li><strong>SPA Applications</strong> - Single Page Applications with Vue.js and React</li>
                                            <li><strong>Form Processors</strong> - Complex form handling with validation and dynamic fields</li>
                                            <li><strong>API Clients</strong> - JavaScript applications consuming REST and GraphQL APIs</li>
                                            <li><strong>Animation Projects</strong> - Interactive animations using GSAP and CSS transitions</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#f7df1e] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall JavaScript</span>
                                                <span class="text-sm font-bold text-[#f7df1e]">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#f7df1e] to-[#f9a825]"
                                                     data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">ES6+ Modern JS</span>
                                                <span class="text-sm font-bold text-green-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">DOM Manipulation</span>
                                                <span class="text-sm font-bold text-blue-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Async Programming</span>
                                                <span class="text-sm font-bold text-purple-500">82%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Frameworks</span>
                                                <span class="text-sm font-bold text-red-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#f7df1e] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#f7df1e] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>9+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-[#f7df1e] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>ES6+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#f7df1e] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>40+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-sync-alt text-[#f7df1e] w-5 mr-3"></i>
                                            <span class="text-sm">Frameworks: <strong>Vue, React</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-mobile-alt text-[#f7df1e] w-5 mr-3"></i>
                                            <span class="text-sm">Platforms: <strong>Web, Mobile</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#f7df1e] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/vue" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-vuejs text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#f7df1e] transition-colors">Vue.js</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f7df1e] transition-colors"></i>
                                        </a>
                                        <a href="/competences/html-css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-html5 text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#f7df1e] transition-colors">HTML/CSS</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f7df1e] transition-colors"></i>
                                        </a>
                                        <a href="/competences/typescript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-js-square text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#f7df1e] transition-colors">TypeScript</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f7df1e] transition-colors"></i>
                                        </a>
                                        <a href="/competences/nodejs" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-node-js text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#f7df1e] transition-colors">Node.js</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f7df1e] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#f7df1e] to-[#f9a825] rounded-xl shadow-lg p-6 text-gray-800 fade-in">
                                    <h3 class="text-lg font-bold mb-2">Interested in Collaboration?</h3>
                                    <p class="text-sm mb-4">Ready to discuss JavaScript projects and modern web development</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-yellow-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

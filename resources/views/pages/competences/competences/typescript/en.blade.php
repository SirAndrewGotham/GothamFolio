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
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- About TypeScript -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    About TypeScript
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>TypeScript</strong> is a strongly typed programming language that builds on JavaScript,
                                        giving you better tooling at any scale. It adds optional static types, classes, and modules
                                        to JavaScript, enabling developers to write more robust and maintainable code.
                                    </p>

                                    <h3>Key Benefits</h3>
                                    <ul>
                                        <li><strong>Type Safety</strong> - Catch errors at compile time rather than runtime</li>
                                        <li><strong>Enhanced IDE Support</strong> - Better autocompletion, refactoring, and navigation</li>
                                        <li><strong>Scalable Codebases</strong> - Manage large codebases with confidence</li>
                                        <li><strong>Modern JavaScript Features</strong> - Access to latest ECMAScript features</li>
                                        <li><strong>Gradual Adoption</strong> - Migrate JavaScript projects incrementally</li>
                                        <li><strong>Rich Ecosystem</strong> - Excellent framework and library support</li>
                                    </ul>

                                    <h3>Core Features</h3>
                                    <p>
                                        TypeScript introduces powerful features that enhance JavaScript development:
                                    </p>
                                    <ul>
                                        <li><strong>Static Typing</strong> - Optional type annotations and type inference</li>
                                        <li><strong>Interfaces and Types</strong> - Define object shapes and contracts</li>
                                        <li><strong>Generics</strong> - Create reusable, type-safe components</li>
                                        <li><strong>Decorators</strong> - Add metadata and modify class behavior</li>
                                        <li><strong>Namespaces and Modules</strong> - Better code organization</li>
                                        <li><strong>Advanced Tooling</strong> - Rich language service and compiler options</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My TypeScript Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-blue-500 mr-3"></i>
                                    My Journey with TypeScript
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started using TypeScript in 2020 when working on large-scale frontend applications
                                        that required better maintainability and developer experience. Over the past 3+ years,
                                        I've adopted TypeScript across various projects, from small utilities to enterprise applications.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fab fa-vuejs text-blue-500 mr-2"></i>
                                                Vue.js Integration
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Extensive experience with TypeScript in Vue.js applications,
                                                including Composition API and class components.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fab fa-react text-purple-500 mr-2"></i>
                                                React Development
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Comprehensive TypeScript integration with React hooks,
                                                context, and third-party library typings.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                    My Experience with TypeScript
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 3+ years of TypeScript experience, I've developed comprehensive expertise
                                        in type system design, tooling configuration, and framework integration across
                                        various project scales and complexities.
                                    </p>

                                    <h3>Specialized Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Advanced type system features</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Generic programming and constraints</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Declaration file creation and maintenance</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Compiler configuration and optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Framework-specific type patterns</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Migration strategies from JavaScript</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Build tool integration and optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance monitoring and debugging</span>
                                        </div>
                                    </div>

                                    <h3>Technology Integration</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Vue 3</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">React</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Node.js</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Nuxt.js</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Vite</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Webpack</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Jest</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">ESLint</span>
                                    </div>

                                    <h3>Type System Mastery</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Advanced Types</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Conditional types and infer keyword</li>
                                                <li>• Mapped types and key remapping</li>
                                                <li>• Template literal types</li>
                                                <li>• Recursive type definitions</li>
                                                <li>• Branded types and type guards</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Practical Patterns</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Discriminated unions</li>
                                                <li>• Builder and factory patterns</li>
                                                <li>• Dependency injection with types</li>
                                                <li>• State management typing</li>
                                                <li>• API client type generation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Framework Integration -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-blue-500 mr-3"></i>
                                    Framework Integration & Tooling
                                </h2>
                                <div class="content-section">
                                    <h3>Vue.js with TypeScript</h3>
                                    <p>
                                        I have extensive experience integrating TypeScript with Vue.js:
                                    </p>
                                    <ul>
                                        <li><strong>Composition API</strong> - Type-safe reactive state and composables</li>
                                        <li><strong>Class Components</strong> - Vue class component with decorators</li>
                                        <li><strong>Component Typing</strong> - Props, emits, and slots type definitions</li>
                                        <li><strong>Vuex/Pinia</strong> - Type-safe state management solutions</li>
                                        <li><strong>Vue Router</strong> - Typed route parameters and navigation</li>
                                        <li><strong>Custom Directives</strong> - Type-safe directive development</li>
                                    </ul>

                                    <h3>React with TypeScript</h3>
                                    <p>
                                        Comprehensive TypeScript integration in React ecosystems:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Hook Typing</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Type-safe custom hooks with proper generics and return types
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Context API</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Strongly typed context providers and consumers
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Component Patterns</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Generic components, HOCs, and render props with types
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">State Management</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Redux, Zustand, and other state libraries with TypeScript
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Migration & Best Practices -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-shipping-fast text-blue-500 mr-3"></i>
                                    Migration Strategies & Best Practices
                                </h2>
                                <div class="content-section">
                                    <h3>JavaScript to TypeScript Migration</h3>
                                    <p>
                                        I've successfully migrated numerous projects from JavaScript to TypeScript:
                                    </p>
                                    <ul>
                                        <li><strong>Incremental Migration</strong> - Gradual adoption with allowJs and checkJs</li>
                                        <li><strong>Declaration Files</strong> - Creating type definitions for existing JavaScript libraries</li>
                                        <li><strong>Build Pipeline Updates</strong> - Configuring TypeScript in existing build systems</li>
                                        <li><strong>Team Training</strong> - Educating teams on TypeScript concepts and benefits</li>
                                        <li><strong>Code Quality Improvement</strong> - Leveraging types to refactor and improve code</li>
                                    </ul>

                                    <h3>Development Best Practices</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Strict Configuration</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementing strict mode and comprehensive type checking
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Project Structure</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Organizing type definitions and module boundaries
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Performance Optimization</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Compiler configuration for optimal build times
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Tooling Integration</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                ESLint, Prettier, and testing frameworks with TypeScript
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Notable Migration Projects</h3>
                                    <ul>
                                        <li><strong>Large E-commerce Platform</strong> - Migrated Vue.js application with 100k+ LOC</li>
                                        <li><strong>Financial Dashboard</strong> - React application with complex state management</li>
                                        <li><strong>Real-time Collaboration Tool</strong> - Vue 3 Composition API migration</li>
                                        <li><strong>Legacy AngularJS Application</strong> - Modernization with TypeScript</li>
                                        <li><strong>Node.js Microservices</strong> - Backend service type safety implementation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Type System</span>
                                            <span class="text-sm font-bold text-purple-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Framework Integration</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tooling & Configuration</span>
                                            <span class="text-sm font-bold text-yellow-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Migration Experience</span>
                                            <span class="text-sm font-bold text-red-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code-branch text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fab fa-vuejs text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Frameworks: <strong>Vue & React</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-magic text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Migration: <strong>10+ projects</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tools text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Tooling: <strong>Advanced config</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- TypeScript Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-star text-blue-500 mr-2"></i>
                                    Advanced Features Used
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Generics & Conditional Types</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Mapped & Template Literal Types</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Declaration Merging</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Decorators & Metadata</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Project References</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-blue-500 mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">JavaScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-vuejs text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Vue.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/react" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-react text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">React</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/nodejs" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-node-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Node.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need TypeScript Expertise?</h3>
                                <p class="text-sm mb-4">Let's build type-safe, scalable applications</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

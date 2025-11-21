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
                                    <a href="/competences/api" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        API Development
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        GraphQL
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-pink-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-pink-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-project-diagram text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">GraphQL</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-code mr-1"></i>
                                            Query Language
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Modern query language for APIs with flexible data fetching and efficient client-server communication
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-server"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">APIs Built</div>
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
                                <!-- About GraphQL -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-pink-500 mr-3"></i>
                                        About GraphQL
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>GraphQL</strong> is a query language for APIs and a runtime for fulfilling those queries
                                            with your existing data. It provides a complete and understandable description of the data
                                            in your API, gives clients the power to ask for exactly what they need, and makes it easier
                                            to evolve APIs over time.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Flexible Data Fetching</strong> - Clients request exactly the data they need</li>
                                            <li><strong>Single Endpoint</strong> - One endpoint for all data operations</li>
                                            <li><strong>Strongly Typed Schema</strong> - Clear API contract with type validation</li>
                                            <li><strong>Reduced Over-fetching</strong> - No unnecessary data transferred</li>
                                            <li><strong>Real-time Updates</strong> - Built-in support for subscriptions</li>
                                            <li><strong>Developer Experience</strong> - Excellent tooling and introspection</li>
                                        </ul>

                                        <h3>Core Concepts</h3>
                                        <p>
                                            GraphQL introduces several fundamental concepts that differentiate it from traditional REST APIs:
                                        </p>
                                        <ul>
                                            <li><strong>Schema Definition Language (SDL)</strong> - Type system for defining API capabilities</li>
                                            <li><strong>Queries</strong> - Read operations for fetching data</li>
                                            <li><strong>Mutations</strong> - Write operations for modifying data</li>
                                            <li><strong>Subscriptions</strong> - Real-time data updates</li>
                                            <li><strong>Resolvers</strong> - Functions that fulfill data requests</li>
                                            <li><strong>Introspection</strong> - Self-documenting API capabilities</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My GraphQL Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-pink-500 mr-3"></i>
                                        My Journey with GraphQL
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I started working with GraphQL in 2020 when building complex frontend applications
                                            that required flexible data fetching capabilities. Over the past 3+ years, I've implemented
                                            GraphQL APIs for various projects, from small startups to enterprise applications.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-pink-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fab fa-laravel text-pink-500 mr-2"></i>
                                                    Laravel Lighthouse
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Extensive experience with Laravel Lighthouse for building
                                                    robust GraphQL APIs in PHP/Laravel ecosystems.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fab fa-react text-blue-500 mr-2"></i>
                                                    Frontend Integration
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Comprehensive experience integrating GraphQL with React,
                                                    Vue.js, and mobile applications.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-pink-500 mr-3"></i>
                                        My Experience with GraphQL
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 3+ years of hands-on GraphQL experience, I've developed comprehensive expertise
                                            in designing, implementing, and optimizing GraphQL APIs for various use cases and scales.
                                        </p>

                                        <h3>Specialized Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Schema design and optimization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Resolver implementation and batching</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Performance optimization and caching</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Authentication and authorization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Real-time subscriptions</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Error handling and validation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>File uploads and complex mutations</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>API versioning and evolution</span>
                                            </div>
                                        </div>

                                        <h3>Technology Stack</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Lighthouse</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Apollo</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">GraphQL Yoga</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Hasura</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Relay</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">URQL</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">GraphiQL</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Voyager</span>
                                        </div>

                                        <h3>Implementation Patterns</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <h4 class="font-bold text-pink-500 mb-2">Backend Patterns</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Resolver composition and middleware</li>
                                                    <li>• DataLoader for N+1 prevention</li>
                                                    <li>• Field-level permissions</li>
                                                    <li>• Custom directives and scalars</li>
                                                    <li>• Federation and microservices</li>
                                                </ul>
                                            </div>
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <h4 class="font-bold text-pink-500 mb-2">Frontend Patterns</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Query composition and fragments</li>
                                                    <li>• Optimistic UI updates</li>
                                                    <li>• Client-side state management</li>
                                                    <li>• Error boundary handling</li>
                                                    <li>• Real-time data synchronization</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Advanced Features -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-pink-500 mr-3"></i>
                                        Advanced Implementation Features
                                    </h2>
                                    <div class="content-section">
                                        <h3>Performance Optimization</h3>
                                        <p>
                                            I've implemented various performance optimization techniques for GraphQL APIs:
                                        </p>
                                        <ul>
                                            <li><strong>Query Complexity Analysis</strong> - Preventing expensive queries</li>
                                            <li><strong>Persisted Queries</strong> - Pre-approved query optimization</li>
                                            <li><strong>Query Caching</strong> - Multi-level caching strategies</li>
                                            <li><strong>Batching and Dataloader</strong> - Efficient database access patterns</li>
                                            <li><strong>Field-level Instrumentation</strong> - Performance monitoring and metrics</li>
                                            <li><strong>Query Planning</strong> - Optimized execution strategies</li>
                                        </ul>

                                        <h3>Security & Best Practices</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-pink-500 mb-2">Authentication</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    JWT, OAuth, and custom authentication middleware implementation
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-pink-500 mb-2">Authorization</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Field-level, role-based, and attribute-based access control
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-pink-500 mb-2">Validation</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Input validation, query depth limiting, and complexity analysis
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-pink-500 mb-2">Monitoring</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Query logging, performance metrics, and error tracking
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Real-world Applications -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-layer-group text-pink-500 mr-3"></i>
                                        Real-world Applications
                                    </h2>
                                    <div class="content-section">
                                        <h3>Use Case Implementations</h3>
                                        <p>
                                            I've successfully implemented GraphQL in various real-world scenarios:
                                        </p>
                                        <ul>
                                            <li><strong>E-commerce Platforms</strong> - Flexible product catalogs and shopping experiences</li>
                                            <li><strong>Social Networks</strong> - Real-time feeds and user interactions</li>
                                            <li><strong>Dashboard Applications</strong> - Customizable data visualizations and reports</li>
                                            <li><strong>Mobile Applications</strong> - Efficient data fetching for limited bandwidth</li>
                                            <li><strong>Microservices Architecture</strong> - API federation and service composition</li>
                                        </ul>

                                        <h3>Migration Strategies</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-pink-500 mb-2">REST to GraphQL</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Gradual migration strategies from REST APIs to GraphQL
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-pink-500 mb-2">Hybrid Approaches</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Maintaining both REST and GraphQL endpoints during transition
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-pink-500 mb-2">Legacy Integration</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Integrating GraphQL with existing legacy systems and databases
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-pink-500 mb-2">Incremental Adoption</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Phased rollout strategies for large-scale applications
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Notable Projects</h3>
                                        <ul>
                                            <li><strong>Enterprise CMS</strong> - GraphQL API for content management with real-time updates</li>
                                            <li><strong>Financial Dashboard</strong> - Flexible querying for complex financial data</li>
                                            <li><strong>E-learning Platform</strong> - Personalized learning paths and progress tracking</li>
                                            <li><strong>IoT Data Platform</strong> - Real-time sensor data subscriptions and queries</li>
                                            <li><strong>Multi-tenant SaaS</strong> - Isolated data access with shared schema</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-pink-500 mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-pink-500">78%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-pink-500 to-purple-500"
                                                     data-width="78%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Schema Design</span>
                                                <span class="text-sm font-bold text-purple-500">82%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Performance Optimization</span>
                                                <span class="text-sm font-bold text-blue-500">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Security Implementation</span>
                                                <span class="text-sm font-bold text-green-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Tooling & Ecosystem</span>
                                                <span class="text-sm font-bold text-yellow-500">76%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="76%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-pink-500 mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-pink-500 w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-server text-pink-500 w-5 mr-3"></i>
                                            <span class="text-sm">APIs Built: <strong>10+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-pink-500 w-5 mr-3"></i>
                                            <span class="text-sm">Schemas Designed: <strong>15+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-shield-alt text-pink-500 w-5 mr-3"></i>
                                            <span class="text-sm">Security: <strong>JWT & OAuth</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-bolt text-pink-500 w-5 mr-3"></i>
                                            <span class="text-sm">Real-time: <strong>Subscriptions</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Implementation Types -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-cubes text-pink-500 mr-2"></i>
                                        Implementation Types
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Monolithic GraphQL APIs</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Federated Microservices</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Hybrid REST/GraphQL</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-spinner text-xs"></i>
                                            </div>
                                            <span class="text-sm">Schema Stitching</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-clock text-xs"></i>
                                            </div>
                                            <span class="text-sm">GraphQL Mesh</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-pink-500 mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-code text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-pink-500 transition-colors">API Development</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-laravel text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-pink-500 transition-colors">Laravel</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/react" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-react text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-pink-500 transition-colors">React</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/performance" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-tachometer-alt text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-pink-500 transition-colors">Performance</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-pink-500 to-purple-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Need GraphQL API?</h3>
                                    <p class="text-sm mb-4">Let's build efficient, flexible APIs together</p>
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

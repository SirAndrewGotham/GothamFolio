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
                                    <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Backend Development
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel Telescope
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4A90E2] to-[#1e40af] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-search text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 telescope-gradient">Laravel Telescope</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bug mr-1"></i>
                                            Debugging Expert
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Debug assistant for monitoring requests, exceptions, and database queries. Elegant debug assistant for the Laravel framework.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
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
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v4.x</div>
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
                                <!-- About Laravel Telescope -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#4A90E2] mr-3"></i>
                                        About Laravel Telescope
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Laravel Telescope</strong> is an elegant debug assistant for the Laravel framework.
                                            Telescope provides insight into the requests coming into your application, exceptions, log entries,
                                            database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps, and more.
                                        </p>

                                        <h3>Core Monitoring Capabilities</h3>
                                        <ul>
                                            <li><strong>Request Monitoring</strong> - Incoming requests, responses, and headers</li>
                                            <li><strong>Database Queries</strong> - Query execution, bindings, and performance</li>
                                            <li><strong>Exception Tracking</strong> - Detailed exception information and stack traces</li>
                                            <li><strong>Log Entries</strong> - Application logs and context data</li>
                                            <li><strong>Job Monitoring</strong> - Queued jobs, failures, and processing times</li>
                                            <li><strong>Mail & Notifications</strong> - Outgoing emails and notification previews</li>
                                            <li><strong>Cache Operations</strong> - Cache hits, misses, and tags</li>
                                        </ul>

                                        <h3>Development Workflow Benefits</h3>
                                        <p>
                                            Telescope dramatically improves development and debugging efficiency:
                                        </p>
                                        <ul>
                                            <li>Real-time insight into application behavior</li>
                                            <li>Quick identification of performance bottlenecks</li>
                                            <li>Detailed error tracking and reproduction</li>
                                            <li>Database query optimization opportunities</li>
                                            <li>Queue job monitoring and troubleshooting</li>
                                            <li>Comprehensive application activity logging</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Telescope Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#4A90E2] mr-3"></i>
                                        My Telescope Journey
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Started integrating Telescope in 2020 for development and staging environments.
                                            Over 4+ years, have utilized Telescope extensively for debugging complex issues,
                                            performance optimization, and monitoring application behavior across various projects.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-bug text-[#4A90E2] mr-2"></i>
                                                    Complex Debugging
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Used Telescope to debug complex application issues including
                                                    memory leaks, N+1 queries, and race conditions in production-like environments.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-tachometer-alt text-purple-500 mr-2"></i>
                                                    Performance Optimization
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Leveraged Telescope metrics to identify and optimize
                                                    performance bottlenecks in database queries and application logic.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Technical Expertise -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#4A90E2] mr-3"></i>
                                        Technical Expertise
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Comprehensive experience with Telescope configuration, customization,
                                            and advanced debugging techniques across various application scenarios.
                                        </p>

                                        <h3>Core Telescope Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Environment Configuration</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Watcher Configuration & Customization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Database Query Analysis</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Exception Tracking & Debugging</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Performance Monitoring</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Custom Watcher Development</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Security & Access Control</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Data Pruning & Storage Management</span>
                                            </div>
                                        </div>

                                        <h3>Advanced Watchers & Features</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Request Watcher</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Query Watcher</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Exception Watcher</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Log Watcher</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Job Watcher</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Mail Watcher</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Notification Watcher</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Cache Watcher</span>
                                            <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Schedule Watcher</span>
                                        </div>

                                        <h3>Debugging & Analysis Techniques</h3>
                                        <ul>
                                            <li><strong>N+1 Query Detection</strong> - Identifying and optimizing inefficient database queries</li>
                                            <li><strong>Memory Leak Detection</strong> - Tracking memory usage patterns and leaks</li>
                                            <li><strong>Performance Profiling</strong> - Analyzing request and query performance</li>
                                            <li><strong>Exception Analysis</strong> - Detailed stack trace examination and reproduction</li>
                                            <li><strong>Request/Response Inspection</strong> - Headers, payloads, and status codes</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Environment Configuration -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#4A90E2] mr-3"></i>
                                        Environment Configuration
                                    </h2>
                                    <div class="content-section">
                                        <h3>Multi-Environment Setup</h3>
                                        <p>
                                            Experience configuring Telescope across different environments with appropriate security and performance considerations:
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-green-600 mb-2">Development Environment</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Full Telescope access with all watchers enabled for comprehensive
                                                    debugging and development workflow optimization.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-yellow-600 mb-2">Staging Environment</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Limited Telescope access with performance-focused watchers
                                                    for pre-production testing and optimization.
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Security & Access Control</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Gate Authorization</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Environment Restrictions</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">IP Whitelisting</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">User Authentication</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Data Filtering</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Sensitive Data</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Request Filtering</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Log Sanitization</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Performance & Customization -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-rocket text-[#4A90E2] mr-3"></i>
                                        Performance & Customization
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Advanced Telescope customization and performance optimization strategies:
                                        </p>

                                        <h3>Custom Watchers & Extensions</h3>
                                        <ul>
                                            <li><strong>Application-Specific Watchers</strong> - Custom watchers for business logic monitoring</li>
                                            <li><strong>Third-party Integration Watchers</strong> - Monitoring external API calls and services</li>
                                            <li><strong>Performance Metrics Watchers</strong> - Custom performance tracking and alerts</li>
                                            <li><strong>Business Logic Watchers</strong> - Domain-specific activity monitoring</li>
                                            <li><strong>Custom Tagging</strong> - Application-specific entry tagging and organization</li>
                                        </ul>

                                        <h3>Performance Optimization</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-600 mb-2">Storage Optimization</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Database pruning strategies</li>
                                                    <li>• Entry limits and retention policies</li>
                                                    <li>• Storage driver selection</li>
                                                    <li>• Batch processing configuration</li>
                                                </ul>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-green-600 mb-2">Watcher Optimization</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Selective watcher enabling</li>
                                                    <li>• Sampling rates configuration</li>
                                                    <li>• Memory usage optimization</li>
                                                    <li>• Performance impact monitoring</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3>Troubleshooting Experience</h3>
                                        <ul>
                                            <li><strong>Memory Issues</strong> - Resolving Telescope-related memory consumption</li>
                                            <li><strong>Performance Impact</strong> - Minimizing Telescope's effect on application performance</li>
                                            <li><strong>Database Optimization</strong> - Telescope database performance tuning</li>
                                            <li><strong>Configuration Issues</strong> - Resolving watcher and environment configuration problems</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#4A90E2] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Telescope</span>
                                                <span class="text-sm font-bold text-[#4A90E2]">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4A90E2] to-[#1e40af]"
                                                     data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Configuration & Setup</span>
                                                <span class="text-sm font-bold text-green-500">92%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Debugging & Analysis</span>
                                                <span class="text-sm font-bold text-blue-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Performance Optimization</span>
                                                <span class="text-sm font-bold text-purple-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Customization</span>
                                                <span class="text-sm font-bold text-orange-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#4A90E2] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#4A90E2] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-[#4A90E2] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>Telescope 4.x</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#4A90E2] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>20+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-bug text-[#4A90E2] w-5 mr-3"></i>
                                            <span class="text-sm">Issues Resolved: <strong>100+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-database text-[#4A90E2] w-5 mr-3"></i>
                                            <span class="text-sm">Queries Optimized: <strong>50+</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#4A90E2] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-laravel text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4A90E2] transition-colors">Laravel</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                        </a>
                                        <a href="/competences/debugging" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-bug text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4A90E2] transition-colors">Debugging</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                        </a>
                                        <a href="/competences/performance" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-tachometer-alt text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4A90E2] transition-colors">Performance</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                        </a>
                                        <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-database text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4A90E2] transition-colors">MySQL</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#4A90E2] to-[#1e40af] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Need Debugging Assistance?</h3>
                                    <p class="text-sm mb-4">Ready to implement comprehensive debugging with Laravel Telescope</p>
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

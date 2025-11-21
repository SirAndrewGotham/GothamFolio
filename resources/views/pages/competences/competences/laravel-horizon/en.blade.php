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
                        <!-- About Laravel Horizon -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#FF6B6B] mr-3"></i>
                                About Laravel Horizon
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Horizon</strong> provides a beautiful dashboard and code-driven
                                    configuration for your Laravel powered Redis queues.
                                    Horizon allows you to easily monitor key metrics of your queue system such as job
                                    throughput, runtime, and job failures.
                                </p>

                                <h3>Core Features & Benefits</h3>
                                <ul>
                                    <li><strong>Beautiful Dashboard</strong> - Real-time metrics and monitoring
                                        interface
                                    </li>
                                    <li><strong>Code-Driven Configuration</strong> - Version-controlled queue
                                        configuration
                                    </li>
                                    <li><strong>Metrics Monitoring</strong> - Throughput, runtime, and failure tracking
                                    </li>
                                    <li><strong>Job Management</strong> - Retry failed jobs, monitor recent jobs</li>
                                    <li><strong>Queue Balancing</strong> - Automatic and manual queue balancing
                                        strategies
                                    </li>
                                    <li><strong>Notifications</strong> - Slack and email notifications for queue issues
                                    </li>
                                </ul>

                                <h3>Key Monitoring Capabilities</h3>
                                <p>
                                    Horizon provides comprehensive insights into your queue system:
                                </p>
                                <ul>
                                    <li>Real-time job processing metrics and throughput</li>
                                    <li>Job runtime performance and bottlenecks identification</li>
                                    <li>Failed job tracking with detailed error information</li>
                                    <li>Queue workload distribution and balancing</li>
                                    <li>Historical performance data and trends</li>
                                    <li>Tag-based job organization and filtering</li>
                                </ul>
                            </div>
                        </div>

                        <!-- My Horizon Journey -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#FF6B6B] mr-3"></i>
                                My Horizon Journey
                            </h2>
                            <div class="content-section">
                                <p>
                                    Started implementing Laravel Horizon in 2020 for production applications requiring
                                    robust queue monitoring.
                                    Over 4+ years, have configured and maintained Horizon across various environments
                                    from single servers
                                    to multi-server production setups with complex queue architectures.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div
                                        class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-sliders-h text-[#FF6B6B] mr-2"></i>
                                            Production Configuration
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Extensive experience configuring Horizon for production environments
                                            with multiple queues, supervisors, and monitoring setups.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                            Performance Optimization
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Implemented queue optimization strategies using Horizon metrics
                                            to identify bottlenecks and improve job processing efficiency.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Expertise -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#FF6B6B] mr-3"></i>
                                Technical Expertise
                            </h2>
                            <div class="content-section">
                                <p>
                                    Comprehensive experience with Horizon configuration, monitoring, and optimization
                                    across various production scenarios and application architectures.
                                </p>

                                <h3>Core Horizon Skills</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Horizon Configuration & Environments</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Supervisor Configuration & Management</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Queue Balancing Strategies</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Metrics Monitoring & Analysis</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Failed Job Management</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Tag-based Job Organization</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Notification Configuration</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Security & Authentication Setup</span>
                                    </div>
                                </div>

                                <h3>Advanced Configuration Patterns</h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Multi-Environment</span>
                                    <span
                                        class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Auto-Scaling</span>
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Custom Metrics</span>
                                    <span
                                        class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Queue Prioritization</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Job Batching</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Performance Tuning</span>
                                </div>

                                <h3>Monitoring & Alerting</h3>
                                <ul>
                                    <li><strong>Real-time Dashboard</strong> - Live metrics and job processing status
                                    </li>
                                    <li><strong>Custom Metrics</strong> - Application-specific performance tracking</li>
                                    <li><strong>Failure Analysis</strong> - Detailed failed job inspection and debugging
                                    </li>
                                    <li><strong>Notification Systems</strong> - Slack, email, and custom notification
                                        channels
                                    </li>
                                    <li><strong>Health Checks</strong> - Queue health monitoring and alerting</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Production Deployment -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-server text-[#FF6B6B] mr-3"></i>
                                Production Deployment & DevOps
                            </h2>
                            <div class="content-section">
                                <h3>Deployment Strategies</h3>
                                <p>
                                    Experience deploying and maintaining Horizon in various production environments:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                    <div
                                        class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-green-600 mb-2">Single Server Setup</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Basic Horizon configuration for single-server applications
                                            with optimized queue processing and monitoring.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-purple-600 mb-2">Multi-Server Architecture</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Complex Horizon setups across multiple servers with
                                            load balancing and distributed queue processing.
                                        </p>
                                    </div>
                                </div>

                                <h3>DevOps Integration</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker</span>
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Redis</span>
                                    <span
                                        class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Supervisor</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">CI/CD</span>
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Monitoring</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Load Balancing</span>
                                    <span
                                        class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Alerting</span>
                                    <span
                                        class="px-3 py-2 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm text-center">Backups</span>
                                </div>
                            </div>
                        </div>

                        <!-- Performance Optimization -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-rocket text-[#FF6B6B] mr-3"></i>
                                Performance & Optimization
                            </h2>
                            <div class="content-section">
                                <p>
                                    Various Horizon optimization strategies and performance tuning implementations:
                                </p>

                                <h3>Optimization Strategies</h3>
                                <ul>
                                    <li><strong>Queue Configuration</strong> - Optimal process counts and memory limits
                                    </li>
                                    <li><strong>Balance Strategies</strong> - Auto, simple, and custom balancing
                                        approaches
                                    </li>
                                    <li><strong>Memory Management</strong> - Preventing memory leaks in long-running
                                        processes
                                    </li>
                                    <li><strong>Job Chunking</strong> - Efficient processing of large datasets</li>
                                    <li><strong>Rate Limiting</strong> - Controlling job throughput for external APIs
                                    </li>
                                    <li><strong>Priority Queues</strong> - Ensuring critical jobs get processed first
                                    </li>
                                </ul>

                                <h3>Troubleshooting Experience</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-red-50 dark:bg-red-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-red-600 mb-2">Common Issues Resolved</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Memory exhaustion in queue workers</li>
                                            <li>• Stuck jobs and processing delays</li>
                                            <li>• Redis connection issues</li>
                                            <li>• Supervisor process management</li>
                                        </ul>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-green-600 mb-2">Performance Solutions</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Queue workload distribution</li>
                                            <li>• Job batching and chunking</li>
                                            <li>• Optimal Redis configuration</li>
                                            <li>• Monitoring and alerting setup</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Proficiency Card -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#FF6B6B] mr-2"></i>
                                Proficiency Level
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Overall Horizon</span>
                                        <span class="text-sm font-bold text-[#FF6B6B]">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div
                                            class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF6B6B] to-[#e11d48]"
                                            data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Configuration</span>
                                        <span class="text-sm font-bold text-green-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Monitoring & Metrics</span>
                                        <span class="text-sm font-bold text-blue-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="82%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Performance Optimization</span>
                                        <span class="text-sm font-bold text-purple-500">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Production Deployment</span>
                                        <span class="text-sm font-bold text-orange-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="75%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Facts -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#FF6B6B] mr-2"></i>
                                Quick Facts
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Version: <strong>Horizon 5.x</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Projects: <strong>15+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-server text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Environments: <strong>Production</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-database text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Redis: <strong>Required</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Related Competences -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#FF6B6B] mr-2"></i>
                                Related Competences
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">Laravel
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                                <a href="/competences/redis"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-red-600 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-database text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">Redis
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                                <a href="/competences/queues"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-tasks text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">Queue
                                            Systems
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                                <a href="/competences/devops"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-server text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">DevOps
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Call to Action -->
                        <div
                            class="bg-gradient-to-r from-[#FF6B6B] to-[#e11d48] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Need Queue Monitoring?</h3>
                            <p class="text-sm mb-4">Ready to implement robust queue monitoring with Laravel Horizon</p>
                            <a href="/contact"
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-red-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

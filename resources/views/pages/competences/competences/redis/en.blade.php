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
                                        Redis
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#DC382D] to-[#A61C1C] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-bolt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Redis</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-memory mr-1"></i>
                                            In-Memory Data Store
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                In-memory data structure store used as database, cache, and message broker for high-performance applications.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-[#DC382D] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">82%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#DC382D] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Experience since Redis 4.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#DC382D] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v7.2+</div>
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
                            <!-- About Redis -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#DC382D] mr-3"></i>
                                    About Redis
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Redis</strong> (Remote Dictionary Server) is an open-source, in-memory data structure store
                                        used as a database, cache, and message broker. It supports various data structures such as strings,
                                        hashes, lists, sets, and more, providing exceptional performance for real-time applications.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>In-Memory Performance</strong> — Sub-millisecond response times for data operations</li>
                                        <li><strong>Rich Data Structures</strong> — Strings, hashes, lists, sets, sorted sets, streams</li>
                                        <li><strong>Persistence Options</strong> — RDB snapshots and AOF logging for data durability</li>
                                        <li><strong>Replication & High Availability</strong> — Master-slave replication and Redis Sentinel</li>
                                        <li><strong>Pub/Sub Messaging</strong> — Real-time message broadcasting capabilities</li>
                                        <li><strong>Atomic Operations</strong> — Thread-safe operations on complex data structures</li>
                                        <li><strong>Lua Scripting</strong> — Server-side script execution for complex operations</li>
                                    </ul>

                                    <h3>Recommended Use Cases</h3>
                                    <p>
                                        Redis excels in scenarios requiring high-speed data access and real-time processing:
                                    </p>
                                    <ul>
                                        <li>Application caching and session storage</li>
                                        <li>Real-time analytics and leaderboards</li>
                                        <li>Message queues and job processing</li>
                                        <li>Rate limiting and API throttling</li>
                                        <li>Geospatial data and location-based services</li>
                                        <li>Real-time chat and notification systems</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Redis Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#DC382D] mr-3"></i>
                                    My Redis Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started working with Redis in 2019 to improve application performance through caching and session management.
                                        Since then, I've progressed from basic key-value caching to implementing complex data structures,
                                        pub/sub systems, and Redis Cluster for high-availability applications.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-[#DC382D] mr-2"></i>
                                                Performance Optimization
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementing Redis caching strategies that reduced database load by 80%
                                                and improved application response times by 5x in high-traffic scenarios.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-exchange-alt text-blue-500 mr-2"></i>
                                                Real-time Systems
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Building real-time features using Redis Pub/Sub for live notifications,
                                                chat systems, and real-time dashboard updates across multiple applications.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#DC382D] mr-3"></i>
                                    My Redis Experience
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 4+ years of Redis experience, I've implemented various caching strategies,
                                        real-time systems, and performance optimizations across multiple web applications,
                                        significantly improving response times and scalability.
                                    </p>

                                    <h3>Specialized Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Application Caching Strategies</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Session Storage and Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Pub/Sub Messaging Systems</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Data Structure Optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Redis CLI and Administration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance Monitoring</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Lua Scripting for Complex Operations</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Persistence Configuration (RDB/AOF)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Security and Access Control</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integration with Laravel/Lumen</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Cluster and Sentinel Setup</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Memory Optimization</span>
                                        </div>
                                    </div>

                                    <h3>Key Projects</h3>
                                    <ul>
                                        <li><strong>High-Traffic E-commerce Platform</strong> — Redis caching reduced page load times from 2s to 200ms</li>
                                        <li><strong>Real-time Analytics Dashboard</strong> — Redis streams for real-time data processing</li>
                                        <li><strong>Session Clustering</strong> — Distributed session storage across multiple application servers</li>
                                        <li><strong>Message Queue System</strong> — Redis for background job processing and task queues</li>
                                        <li><strong>API Rate Limiting</strong> — Redis-based rate limiting for public APIs</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Data Structures & Patterns -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#DC382D] mr-3"></i>
                                    Data Structures & Patterns
                                </h2>
                                <div class="content-section">
                                    <h3>Common Redis Data Structures</h3>
                                    <p>
                                        Expertise in leveraging Redis's rich data structures for optimal performance:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Strings & Hashes</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Simple caching, counters, and object storage with field-level operations
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Lists & Sets</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Message queues, activity feeds, and unique collections
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Sorted Sets</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Leaderboards, priority queues, and time-series data
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Streams & Pub/Sub</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Real-time messaging, event sourcing, and log processing
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Common Integration Patterns</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Cache</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Session Driver</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Queue Driver</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Broadcasting</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Rate Limiting</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Real-time Features</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#DC382D] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#DC382D]">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#DC382D] to-[#A61C1C]"
                                                 data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Caching Strategies</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Data Structures</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Pub/Sub Systems</span>
                                            <span class="text-sm font-bold text-blue-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Performance Tuning</span>
                                            <span class="text-sm font-bold text-purple-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#DC382D] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Redis 7.2+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-memory text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Performance Gain: <strong>5x faster</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-database text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">DB Load Reduction: <strong>80%</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#DC382D] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                    <a href="/competences/nginx" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-server text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">Nginx</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#DC382D] to-[#A61C1C] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need performance optimization?</h3>
                                <p class="text-sm mb-4">Ready to discuss Redis implementation</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#DC382D] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

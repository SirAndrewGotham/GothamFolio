<x-frontend.layouts.app>
    <!-- Main Content -->
    <main class="w-full pt-20" x-data="portfolioItemApp()" x-init="init()">
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
                                <a href="/portfolio" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Portfolio
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio/laravel" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Laravel Projects
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Telescan Web
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Project Hero Section -->
        <section class="py-12 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Project Info -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Telescan Web</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Active Development
                                    </span>
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-cloud mr-1 text-xs"></i>
                                        Web Platform
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Modern web platform for sewer pipeline television inspection.
                                Full-featured replacement for desktop application with enhanced
                                cloud capabilities and collaborative access.
                            </p>

                            <!-- Project Stats -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2023-2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Development Period</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">8+ months</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Development Time</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Full-stack</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Project Type</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <button @click="showDemo = true" class="inline-flex items-center px-6 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-play mr-2"></i>
                                    <span>Demo Version</span>
                                </button>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Project Case</span>
                                </button>
                            </div>
                        </div>

                        <!-- Project Icon -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-globe text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Key Advantages -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Key Advantages of Web Version</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mx-auto mb-6">
                                <i class="fas fa-cloud text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Cloud Architecture</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Access from any browser without additional software installation.
                                All data securely stored in the cloud with automatic backup.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-6">
                                <i class="fas fa-users text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Collaboration</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Multi-user access to projects. Team can work on the same project
                                simultaneously from different devices and locations.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mx-auto mb-6">
                                <i class="fas fa-sync-alt text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">API-Oriented</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Full-featured REST API for integration with other systems.
                                Easy integration with CRM, ERP and other corporate solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Details -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- Project Description -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-indigo-500 mr-3"></i>
                                    About the Project
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Telescan Web</strong> is a modern web platform representing a
                                        full-featured web version of the popular desktop application for sewer
                                        pipeline television inspection. The project was developed for TARIS company.
                                    </p>
                                    <p>
                                        The platform preserves all functions of the original Telescan, adding
                                        advantages of web technologies: cross-platform compatibility, instant
                                        updates, cloud data storage and enhanced collaboration capabilities.
                                    </p>
                                    <p>
                                        The main focus of the project is creating a performant and responsive
                                        web application capable of processing large volumes of video data and
                                        ensuring uninterrupted operation even with slow internet connection.
                                    </p>
                                </div>
                            </div>

                            <!-- API Architecture -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code text-indigo-500 mr-3"></i>
                                    API-Oriented Architecture
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-plug text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">RESTful API</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Full-featured REST API with 50+ endpoints for managing projects,
                                                users, video data and reports. API versioning support.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">WebSocket for Real-time</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Real-time notifications about video processing status, online user statuses,
                                                instant interface updates during collaborative work.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Security and Authorization</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                JWT authentication, OAuth2 for third-party integrations, role-based access model,
                                                protection against CSRF and XSS attacks.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Key Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-indigo-500 mr-3"></i>
                                    Key Features
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Core Modules</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Video upload and streaming playback</li>
                                            <li>Automatic pipe defect recognition</li>
                                            <li>Interactive markup and annotations</li>
                                            <li>Report generation in various formats</li>
                                            <li>Project and team management</li>
                                            <li>Notification and alert system</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Web-Specific Functions</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>PWA (Progressive Web App) support</li>
                                            <li>Offline work with synchronization</li>
                                            <li>Responsive design for all devices</li>
                                            <li>Integration with cloud storage</li>
                                            <li>Instant search across all data</li>
                                            <li>Advanced permission system</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Technologies Used -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-indigo-500 mr-2"></i>
                                    Technologies
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'laravel']) }}" class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm hover:bg-indigo-200 dark:hover:bg-indigo-800/50 transition-colors">
                                                Laravel 10
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'php']) }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                                                PHP 8.2
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'mysql']) }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:bg-orange-200 dark:hover:bg-orange-800/50 transition-colors">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'vuejs']) }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                                                Vue.js 3
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'tailwind']) }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:bg-cyan-200 dark:hover:bg-cyan-800/50 transition-colors">
                                                Tailwind CSS
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'pinia']) }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                Pinia
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">API & Real-time</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'api']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
                                                REST API
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'websocket']) }}" class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm hover:bg-yellow-200 dark:hover:bg-yellow-800/50 transition-colors">
                                                WebSocket
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'jwt']) }}" class="tech-tag px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm hover:bg-pink-200 dark:hover:bg-pink-800/50 transition-colors">
                                                JWT
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Stats -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-indigo-500 mr-2"></i>
                                    Project Statistics
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Development Time</span>
                                        <span class="font-semibold">8+ months</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Commits</span>
                                        <span class="font-semibold">842</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">API Endpoints</span>
                                        <span class="font-semibold">56</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Vue Components</span>
                                        <span class="font-semibold">47</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Performance</span>
                                        <span class="font-semibold">92/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Performance Metrics -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tachometer-alt text-indigo-500 mr-2"></i>
                                    Performance Metrics
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm text-gray-600 dark:text-gray-400">Page Load</span>
                                            <span class="text-sm font-semibold">1.2s</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 95%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm text-gray-600 dark:text-gray-400">Video Processing</span>
                                            <span class="text-sm font-semibold">2.8s</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-500 h-2 rounded-full" style="width: 88%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm text-gray-600 dark:text-gray-400">API Response</span>
                                            <span class="text-sm font-semibold">180ms</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-500 h-2 rounded-full" style="width: 92%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Client Info -->
                            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Client</h3>
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 rounded-lg bg-indigo-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">TARIS</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Diagnostic Equipment Manufacturer</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Leading Russian manufacturer of pipeline diagnostics and cleaning equipment
                                </p>
                                <a href="https://taris.ru" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Visit Website</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technical Innovation -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Technical Innovations</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-4">
                                    <i class="fas fa-video"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Streaming Video Processing</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Implemented technology for streaming processing of large inspection video files
                                using WebAssembly and Service Workers. Allows working with videos of any size
                                without full client-side download.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-4">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Offline-first Architecture</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Application works even without internet connection.
                                All changes are saved locally and synchronized when connection is restored.
                                Uses IndexedDB and Background Sync API.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-4">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <h3 class="text-xl font-semibold">AI Defect Analysis</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Integration with machine learning models for automatic recognition
                                and classification of pipe defects. System continuously learns from new data
                                and improves recognition accuracy.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-4">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h3 class="text-xl font-semibold">PWA as Native App</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Telescan Web installs as a native application on any device
                                through PWA technologies. Support for push notifications, full-screen mode
                                and access to device hardware capabilities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">Need a modern web platform?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Ready to create a performant and scalable web solution for your business.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Discuss Project</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-indigo-500 text-indigo-500 hover:bg-indigo-50 dark:hover:bg-indigo-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>All Projects</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Demo Modal -->
        <div x-show="showDemo" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showDemo = false"></div>

                <!-- Modal panel -->
                <div class="relative inline-block w-full max-w-2xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Close button -->
                    <button @click="showDemo = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Demo Content -->
                    <div class="text-center py-8">
                        <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white mx-auto mb-6">
                            <i class="fas fa-laptop-code text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Demo Available on Request</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            To get access to the Telescan Web demo version, please contact me.
                            I will provide test credentials and conduct a demonstration of the platform's capabilities.
                        </p>
                        <a href="/contact" class="inline-flex items-center px-6 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Request Demo</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Case Study Modal -->
        <div x-show="showCaseStudy" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showCaseStudy = false"></div>

                <!-- Modal panel -->
                <div class="relative inline-block w-full max-w-6xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Close button -->
                    <button @click="showCaseStudy = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Case Study Content -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Header -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Project Case: Telescan Web Platform</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Complete breakdown of the development process from desktop to web transformation</p>
                        </div>

                        <!-- Executive Summary -->
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-indigo-500 mr-3"></i>
                                Project Summary
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Project Goals</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Create web version of popular desktop application</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Provide cloud capabilities and collaborative features</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Implement API-first architecture for integrations</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Key Results</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>92/100 score in performance metrics</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Page load time under 1.2 seconds</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-code text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>56 API endpoints implemented</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Challenges -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-indigo-500 mr-3"></i>
                                Technical Challenges & Solutions
                            </h3>
                            <div class="space-y-6">
                                <!-- Challenge 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-indigo-500">
                                    <h4 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Challenge: Large Video File Processing in Browser</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Processing large video files (up to 10GB) in browser environment
                                                while maintaining responsive interface and performance.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>WebAssembly for video processing</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Service Workers for background processing</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Streaming video playback technology</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Video processing time reduced by 65% compared to desktop version
                                        </p>
                                    </div>
                                </div>

                                <!-- Challenge 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-indigo-500">
                                    <h4 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Challenge: Complex Desktop Business Logic in Web</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Recreating complex desktop application business logic
                                                in web environment while maintaining all functionality.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Microservices architecture with clear separation</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Vue.js 3 Composition API for complex state management</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Real-time collaboration with WebSocket</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            100% desktop functionality preserved with enhanced web capabilities
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Results -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Results & Impact
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-indigo-500 mb-2">92%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Performance Score</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">1.2s</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Load Time</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">56</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">API Endpoints</div>
                                </div>
                            </div>
                        </div>

                        <!-- API Strategy -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-code text-indigo-500 mr-3"></i>
                                API Strategy
                            </h3>
                            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6">
                                <p class="text-gray-600 dark:text-gray-400 mb-4">
                                    Key feature of the project is API-oriented approach:
                                </p>
                                <ul class="feature-list space-y-2 text-gray-600 dark:text-gray-400">
                                    <li>56 REST API endpoints with full OpenAPI documentation</li>
                                    <li>WebSocket for real-time notifications and collaboration</li>
                                    <li>GraphQL for complex reporting queries</li>
                                    <li>API versioning for backward compatibility</li>
                                    <li>Rate limiting and DDoS attack protection</li>
                                    <li>Detailed documentation with examples for developers</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors">
                                Close Case
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-indigo-500 text-indigo-500 hover:bg-indigo-50 dark:hover:bg-indigo-900/20 rounded-lg font-medium transition-colors">
                                Discuss Collaboration
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function portfolioItemApp() {
                return {
                    showCaseStudy: false,
                    showDemo: false,
                    init() {
                        // Close modal on escape key
                        document.addEventListener('keydown', (e) => {
                            if (e.key === 'Escape') {
                                if (this.showCaseStudy) this.showCaseStudy = false;
                                if (this.showDemo) this.showDemo = false;
                            }
                        });
                    }
                }
            }
        </script>
    </main>
</x-frontend.layouts.app>

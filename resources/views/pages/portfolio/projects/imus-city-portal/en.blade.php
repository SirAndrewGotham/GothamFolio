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
                                    IMUS City TV Inspection Module
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Project Hero Section -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Project Info -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">IMUS City TV Inspection Module</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Completed Project
                                    </span>
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-industry mr-1 text-xs"></i>
                                        Industrial Software
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Web service for managing and analyzing sewer network TV inspection data.
                                Integration with IMUS City system for automation of control and monitoring processes.
                            </p>

                            <!-- Project Stats -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2023</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Development Year</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center text-cyan-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">4 months</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Development Time</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Backend</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Project Type</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://taris.ru/programmnoe-obespechenie-telescan/web-servis-imus" target="_blank" class="inline-flex items-center px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Official Website</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Project Case</span>
                                </button>
                            </div>
                        </div>

                        <!-- Project Icon -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-search text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Gallery -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Project Gallery</h2>

                    <!-- Main Gallery -->
                    <div class="project-gallery main mb-8 fade-in">
                        <div class="gallery-item h-96" @click="openLightbox(0)">
                            <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="TV Inspection Module Interface" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                <div class="opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-search-plus text-white text-2xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="gallery-item h-44" @click="openLightbox(1)">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Inspection Data Analysis" class="w-full h-full object-cover">
                            </div>
                            <div class="gallery-item h-44" @click="openLightbox(2)">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Reports and Statistics" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Secondary Gallery -->
                    <div class="project-gallery secondary fade-in">
                        <div class="gallery-item h-64" @click="openLightbox(3)">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Integration with IMUS City" class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-item h-64" @click="openLightbox(4)">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Data Visualization" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Details -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Project Description -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    About the Project
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>IMUS City TV Inspection Module</strong> is a specialized web service for managing
                                        and analyzing sewer network TV inspection data. The project was developed for TARIS company -
                                        a leading Russian manufacturer of pipeline diagnostic equipment.
                                    </p>
                                    <p>
                                        The system provides a complete cycle of working with TV inspection data: from uploading
                                        and processing videos to generating reports and integration with the main IMUS City system.
                                    </p>
                                    <p>
                                        The main goal of the project is to automate the processes of monitoring and controlling
                                        the condition of sewer networks, which significantly increases the efficiency of urban
                                        infrastructure maintenance.
                                    </p>
                                </div>
                            </div>

                            <!-- Key Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-blue-500 mr-3"></i>
                                    Key Features
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Core Modules</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Upload and processing of TV inspection videos</li>
                                            <li>Automatic defect recognition</li>
                                            <li>Report and documentation generation</li>
                                            <li>Integration with IMUS City system</li>
                                            <li>Project and object management</li>
                                            <li>Inspection data visualization</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Technical Features</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>RESTful API for integration with external systems</li>
                                            <li>Support for various video data formats</li>
                                            <li>Automatic defect classification</li>
                                            <li>Notification and alert system</li>
                                            <li>Multi-user access with role model</li>
                                            <li>Data backup and recovery</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Development Process -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-blue-500 mr-3"></i>
                                    Development Process
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Requirements Analysis and Design</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Study of sewer network TV inspection specifics, analysis of existing company processes,
                                                system architecture design and API planning.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Backend Development</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                API creation, implementation of video data processing business logic,
                                                development of defect classification system and reporting modules.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Integration and Testing</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Integration with IMUS City system, comprehensive functionality testing,
                                                performance optimization and preparation for industrial operation.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Deployment and Support</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                System deployment on production servers, user training,
                                                technical support and improvements based on feedback.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Technologies Used -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-blue-500 mr-2"></i>
                                    Technologies
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'laravel']) }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                                                Laravel
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'php']) }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                                                PHP 8.1
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'mysql']) }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:bg-orange-200 dark:hover:bg-orange-800/50 transition-colors">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">API & Integration</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'api']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
                                                REST API
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'websocket']) }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                WebSocket
                                            </a>
                                            <span class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm">
                                                IMUS City API
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Infrastructure</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'docker']) }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                                Docker
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'nginx']) }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:bg-cyan-200 dark:hover:bg-cyan-800/50 transition-colors">
                                                Nginx
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'redis']) }}" class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm hover:bg-yellow-200 dark:hover:bg-yellow-800/50 transition-colors">
                                                Redis
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Stats -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                    Project Statistics
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Development Time</span>
                                        <span class="font-semibold">4 months</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Commits</span>
                                        <span class="font-semibold">287</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Lines of Code</span>
                                        <span class="font-semibold">~18,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">API Endpoints</span>
                                        <span class="font-semibold">24</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Performance</span>
                                        <span class="font-semibold">96/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Challenges & Solutions -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-puzzle-piece text-blue-500 mr-2"></i>
                                    Solved Challenges
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Integration with legacy IMUS City system</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Processing large volumes of video data</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Implementation of defect classification system</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Ensuring high API performance</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Client Info -->
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Client</h3>
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">TARIS</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Diagnostic Equipment Manufacturer</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Leading Russian manufacturer of pipeline diagnostic and cleaning equipment
                                </p>
                                <a href="https://taris.ru" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Visit Website</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Business Impact -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Business Impact</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-16 h-16 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mx-auto mb-4">
                                <i class="fas fa-chart-line text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Efficiency +40%</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Automation of TV inspection data processing reduced analysis time by 40%
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-16 h-16 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mx-auto mb-4">
                                <i class="fas fa-bug text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Accuracy 95%</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Automatic defect recognition system provides 95% classification accuracy
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-16 h-16 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-4">
                                <i class="fas fa-file-alt text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Reports in 5 minutes</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Comprehensive report generation reduced from several hours to 5 minutes
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
                    <h2 class="text-3xl font-bold mb-6">Interested in an industrial solution?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Ready to discuss your tasks and create a reliable solution for business process automation.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Discuss Project</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-blue-500 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>All Projects</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lightbox Modal -->
        <div x-show="lightboxOpen" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 p-4" x-cloak style="display: none;">
            <div class="relative max-w-6xl max-h-full">
                <button @click="lightboxOpen = false" class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>
                <img :src="lightboxImages[lightboxIndex]" :alt="'Image ' + (lightboxIndex + 1)" class="max-w-full max-h-full object-contain">
                <button @click="lightboxIndex = (lightboxIndex - 1 + lightboxImages.length) % lightboxImages.length"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-chevron-left text-2xl"></i>
                </button>
                <button @click="lightboxIndex = (lightboxIndex + 1) % lightboxImages.length"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-chevron-right text-2xl"></i>
                </button>
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
                            <h2 class="text-3xl font-bold mb-4">Project Case: IMUS City TV Inspection Module</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Industrial automation for sewer network diagnostics</p>
                        </div>

                        <!-- Executive Summary -->
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-blue-500 mr-3"></i>
                                Project Summary
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Project Goals</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Automate TV inspection data processing workflow</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Integrate with existing IMUS City infrastructure</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Implement automatic defect classification</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Key Results</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>40% reduction in data processing time</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>95% accuracy in defect classification</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-file-alt text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>5-minute report generation</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Challenges -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-blue-500 mr-3"></i>
                                Technical Challenges & Solutions
                            </h3>
                            <div class="space-y-6">
                                <!-- Challenge 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Challenge: Legacy System Integration</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                The existing IMUS City system used outdated protocols and data formats,
                                                requiring complex integration while maintaining backward compatibility.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Custom API adapter development</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Data format transformation layer</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Graceful fallback mechanisms</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Seamless integration with zero disruption to existing operations
                                        </p>
                                    </div>
                                </div>

                                <!-- Challenge 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-cyan-500">
                                    <h4 class="font-semibold text-lg mb-3 text-cyan-600 dark:text-cyan-400">Challenge: Large Volume Video Processing</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Processing hours of inspection video footage required significant computational
                                                resources and efficient storage management.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Asynchronous processing with queues</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Video compression and optimization</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Distributed storage architecture</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Processing time reduced by 60% with optimized resource usage
                                        </p>
                                    </div>
                                </div>

                                <!-- Challenge 3 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-indigo-500">
                                    <h4 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Challenge: Real-time Data Synchronization</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Multiple field teams needed real-time access to inspection data
                                                while maintaining data consistency across distributed systems.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>WebSocket implementation for real-time updates</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Optimistic locking for data consistency</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Conflict resolution mechanisms</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Real-time data synchronization with 99.9% uptime
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Architecture -->
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-sitemap text-indigo-500 mr-3"></i>
                                Technical Architecture
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-3 text-indigo-600 dark:text-indigo-400">Backend Components</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-server text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>Laravel RESTful API with 24 endpoints</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-database text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>MySQL with optimized indexing</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>Redis for caching and session management</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-exchange-alt text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>Queue system for background processing</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-3 text-purple-600 dark:text-purple-400">Integration Layer</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-plug text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Custom IMUS City API adapter</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-sync text-purple-500 mr-2 mt-0.5"></i>
                                            <span>WebSocket for real-time communication</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-shield-alt text-purple-500 mr-2 mt-0.5"></i>
                                            <span>JWT authentication and authorization</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-code text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Comprehensive API documentation</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Business Impact -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Business Impact & Results
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-green-500 mb-2">40%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Time Savings</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">95%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Accuracy Rate</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">5 min</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Report Generation</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-indigo-500 mb-2">24/7</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">System Availability</div>
                                </div>
                            </div>
                        </div>

                        <!-- Lessons Learned -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-graduation-cap text-blue-500 mr-3"></i>
                                Lessons Learned
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Technical Insights</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Importance of comprehensive API versioning strategy</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Value of asynchronous processing for video data</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Benefits of modular architecture for industrial systems</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Project Management</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Early stakeholder involvement crucial for industrial projects</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Phased deployment reduces operational risk</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Comprehensive testing essential for reliability</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @push('scripts')
        <script>
            function portfolioItemApp() {
                return {
                    lightboxOpen: false,
                    lightboxIndex: 0,
                    showCaseStudy: false,
                    lightboxImages: [
                        'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
                    ],
                    openLightbox(index) {
                        this.lightboxIndex = index;
                        this.lightboxOpen = true;
                    },
                    init() {
                        // Initialize any animations or interactions
                        console.log('IMUS City portfolio item initialized');
                    }
                }
            }
        </script>
    @endpush

    @push('styles')
        <style>
            .project-gallery {
                display: grid;
                gap: 1rem;
            }
            .project-gallery.main {
                grid-template-columns: 2fr 1fr;
            }
            .project-gallery.secondary {
                grid-template-columns: 1fr 1fr;
            }
            .gallery-item {
                position: relative;
                border-radius: 0.75rem;
                overflow: hidden;
                cursor: pointer;
                transition: transform 0.3s ease;
            }
            .gallery-item:hover {
                transform: scale(1.02);
            }
            .tech-tag {
                transition: all 0.3s ease;
            }
            .fade-in {
                animation: fadeIn 0.6s ease-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .fluid-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 1rem;
            }
            @media (max-width: 768px) {
                .project-gallery.main,
                .project-gallery.secondary {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    @endpush
</x-frontend.layouts.app>

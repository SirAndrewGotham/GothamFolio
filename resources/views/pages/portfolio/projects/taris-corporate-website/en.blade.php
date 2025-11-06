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
                                <a href="/portfolio/legacy" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Legacy Projects
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    TARIS Corporate Website
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Project Hero Section -->
        <section class="py-12 bg-gradient-to-br from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Project Info -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">TARIS Corporate Website</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Support & Development
                                    </span>
                                    <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-tools mr-1 text-xs"></i>
                                        Legacy System
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Technical support and development of corporate website on outdated Yii platform.
                                Stabilization of operation, critical bug fixes and creation of procedures for
                                long-term legacy code support.
                            </p>

                            <!-- Project Stats -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2022-2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Work Period</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                        <i class="fas fa-bug"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">50+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Bugs Fixed</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-3">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Yii 1.1</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Technology</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://taris.ru" target="_blank" class="inline-flex items-center px-6 py-3 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Visit Website</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Project Case</span>
                                </button>
                            </div>
                        </div>

                        <!-- Project Icon -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-building text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Challenge -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Technical Challenge</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-red-50 dark:bg-red-900/20 rounded-xl p-6 fade-in">
                            <h3 class="text-xl font-semibold mb-4 text-red-700 dark:text-red-300 flex items-center">
                                <i class="fas fa-exclamation-triangle mr-2"></i>
                                Initial State
                            </h3>
                            <ul class="feature-list space-y-3 text-gray-600 dark:text-gray-400">
                                <li>Outdated Yii 1.1 framework (released in 2008)</li>
                                <li>PHP 5.6 with deprecated functions and no typing</li>
                                <li>Accumulated critical errors and bugs</li>
                                <li>Code corruption from multiple developers' edits</li>
                                <li>Lack of documentation and support procedures</li>
                                <li>Security issues due to outdated components</li>
                            </ul>
                        </div>
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-xl p-6 fade-in">
                            <h3 class="text-xl font-semibold mb-4 text-green-700 dark:text-green-300 flex items-center">
                                <i class="fas fa-bullseye mr-2"></i>
                                Project Goals
                            </h3>
                            <ul class="feature-list space-y-3 text-gray-600 dark:text-gray-400">
                                <li>Stabilize operation without complete rewrite</li>
                                <li>Fix critical functionality errors</li>
                                <li>Create procedures for long-term support</li>
                                <li>Ensure work for unprepared users</li>
                                <li>Maintain visual appeal for visitors</li>
                                <li>Prepare ground for future migration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Details -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Project Description -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-amber-500 mr-3"></i>
                                    About the Project
                                </h2>
                                <div class="space-y-4 text-gray-600 dark:text-gray-400">
                                    <p>
                                        Corporate website of LLC "TARIS" — leading Russian manufacturer of
                                        equipment for pipeline diagnostics and cleaning. The website operates
                                        on outdated Yii 1.1 platform created over 10 years ago.
                                    </p>
                                    <p>
                                        Main goal of the original system — allow unprepared users without
                                        technical knowledge to create and edit website pages while maintaining
                                        visual appeal for visitors.
                                    </p>
                                    <p>
                                        Over time, numerous errors penetrated the system, technical debt
                                        accumulated, code corruption appeared. My task was to stabilize
                                        operation without radical platform changes.
                                    </p>
                                </div>
                            </div>

                            <!-- Key Solutions -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-wrench text-amber-500 mr-3"></i>
                                    Implemented Solutions
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-search text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Audit and Analysis</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Conducted deep analysis of codebase, identified critical failure points,
                                                defined correction priorities. Created technical debt and risk map.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-bug text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Bug Fixing</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Systematically fixed 50+ critical errors: image loading issues,
                                                content management system errors, security and performance problems.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Operation Stabilization</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Created monitoring, backup and recovery procedures. Implemented
                                                logging system for quick problem identification and resolution.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-book text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Documentation and Procedures</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Developed comprehensive documentation for system support,
                                                created clear update and troubleshooting procedures,
                                                prepared recommendations for future migration.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CMS Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-edit text-amber-500 mr-3"></i>
                                    Content Management System
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-amber-600 dark:text-amber-400">For Users</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Visual editor without HTML/CSS knowledge</li>
                                            <li>Drag-and-drop section management</li>
                                            <li>Intuitive media upload and management</li>
                                            <li>Change preview before publication</li>
                                            <li>SEO parameter management</li>
                                            <li>Access rights system for different departments</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-amber-600 dark:text-amber-400">Technical Features</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Automatic content backup</li>
                                            <li>Change rollback system (undo/redo)</li>
                                            <li>Caching for performance improvement</li>
                                            <li>Automatic image optimization</li>
                                            <li>Integration with external services</li>
                                            <li>Logging of all content changes</li>
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
                                    <i class="fas fa-tools text-amber-500 mr-2"></i>
                                    Technologies
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Main Stack</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 rounded-lg text-sm">
                                                Yii 1.1
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm">
                                                PHP 5.6
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm">
                                                MySQL
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm">
                                                jQuery
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm">
                                                Bootstrap 3
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm">
                                                TinyMCE
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Infrastructure</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm">
                                                Apache
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm">
                                                Linux
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm">
                                                Git
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Stats -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-amber-500 mr-2"></i>
                                    Project Statistics
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Work Period</span>
                                        <span class="font-semibold">2+ years</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Bugs Fixed</span>
                                        <span class="font-semibold">50+</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Content Pages</span>
                                        <span class="font-semibold">150+</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">CMS Users</span>
                                        <span class="font-semibold">12+</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Uptime</span>
                                        <span class="font-semibold">99.8%</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Legacy Challenges -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-exclamation-triangle text-amber-500 mr-2"></i>
                                    Legacy Code Problems
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Outdated PHP functions removed in new versions</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Lack of typing and modern coding practices</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Security issues due to outdated components</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Difficulties with dependency updates</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Client Info -->
                            <div class="bg-gradient-to-r from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Client</h3>
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 rounded-lg bg-amber-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-industry"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">LLC "TARIS"</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Diagnostic Equipment Manufacturer</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Leading Russian manufacturer of equipment for pipeline diagnostics and cleaning.
                                    Company with 20-year history and reputation as reliable partner.
                                </p>
                                <a href="https://taris.ru/about" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>About Company</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Results & Impact -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Work Results</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mx-auto mb-6">
                                <i class="fas fa-check-circle text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Stability 99.8%</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Critical errors eliminated, uninterrupted operation time increased
                                from 92% to 99.8%. Users can work without failures.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mx-auto mb-6">
                                <i class="fas fa-users text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">12+ Satisfied Users</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Marketers and content managers without technical knowledge successfully
                                manage website content through intuitive interface.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-6">
                                <i class="fas fa-road text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Migration Roadmap</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Created comprehensive roadmap for future migration
                                to modern platform with minimal risks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Legacy Maintenance Approach -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Legacy System Support Approach</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-500 mr-4">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3 class="text-xl font-semibold">System Analysis</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Deep understanding of original system architectural decisions,
                                identification of failure points and dependency map creation. Analysis
                                of business logic without access to original documentation.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-4">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Minimal Interventions</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                "Do no harm" principle when working with legacy code. Point fixes
                                instead of refactoring, preservation of original architecture,
                                minimal changes to achieve stabilization goals.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-4">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Security First</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Elimination of security vulnerabilities in outdated components,
                                implementation of modern security practices without changing
                                fundamental system architecture.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-4">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Documentation and Knowledge</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Creation of comprehensive documentation for future support,
                                knowledge transfer about system, preparation of procedures for
                                company's regular IT specialists.
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
                    <h2 class="text-3xl font-bold mb-6">Have a legacy project requiring support?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Ready to help stabilize operation of outdated systems and create migration plan to modern technologies.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Discuss Project</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-amber-500 text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>All Projects</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

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
                            <h2 class="text-3xl font-bold mb-4">Project Case: TARIS Corporate Website</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Legacy system support and stabilization approach</p>
                        </div>

                        <!-- Executive Summary -->
                        <div class="bg-gradient-to-r from-amber-50 to-orange-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-amber-500 mr-3"></i>
                                Project Summary
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Project Goals</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Stabilize legacy system without complete rewrite</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Fix critical functionality errors</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Create long-term support procedures</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Key Results</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>99.8% system uptime achieved</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>50+ critical bugs fixed</span>
                                        </li>
                                        <li class="fas fa-search text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Comprehensive documentation created</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Challenges -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-amber-500 mr-3"></i>
                                Technical Challenges & Solutions
                            </h3>
                            <div class="space-y-6">
                                <!-- Challenge 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-amber-500">
                                    <h4 class="font-semibold text-lg mb-3 text-amber-600 dark:text-amber-400">Challenge: Legacy Code Stabilization</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Outdated Yii 1.1 framework with PHP 5.6, accumulated technical debt,
                                                security vulnerabilities, and no documentation.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Systematic code audit and analysis</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Priority-based critical bug fixing</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Security vulnerability elimination</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            99.8% system stability achieved, all critical functionality restored,
                                            security improved without platform migration.
                                        </p>
                                    </div>
                                </div>

                                <!-- Challenge 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-orange-500">
                                    <h4 class="font-semibold text-lg mb-3 text-orange-600 dark:text-orange-400">Challenge: User-Friendly CMS for Non-Technical Users</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problem</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Complex interface requiring technical knowledge, frequent user errors,
                                                content corruption, and support requests.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solution</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Interface simplification and optimization</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Visual editor improvements</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>User training and documentation</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Result:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            12+ non-technical users successfully manage content, support requests
                                            reduced by 80%, content quality improved.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lessons Learned -->
                        <div class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-blue-500 mr-3"></i>
                                Lessons Learned
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-3 text-blue-600 dark:text-blue-400">Technical Insights</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Legacy systems can be effectively stabilized without complete rewrite</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Documentation is crucial for long-term legacy system support</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Minimal interventions often yield best results in legacy code</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-3 text-blue-600 dark:text-blue-400">Business Value</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-chart-line text-green-500 mr-2 mt-0.5"></i>
                                            <span>Legacy system support can extend platform life by 2-3 years</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-money-bill-wave text-green-500 mr-2 mt-0.5"></i>
                                            <span>Cost-effective alternative to immediate migration</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-user-check text-green-500 mr-2 mt-0.5"></i>
                                            <span>User satisfaction achievable even with outdated platforms</span>
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
                    showCaseStudy: false,
                    init() {
                        // Initialize any portfolio-specific functionality
                        this.animateOnScroll();
                    },
                    animateOnScroll() {
                        // Add scroll animations for portfolio items
                        const observer = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    entry.target.classList.add('animate-fade-in-up');
                                }
                            });
                        });

                        document.querySelectorAll('.fade-in').forEach((el) => {
                            observer.observe(el);
                        });
                    }
                }
            }
        </script>
    @endpush
</x-frontend.layouts.app>

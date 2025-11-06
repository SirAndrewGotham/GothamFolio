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
                                        Composer
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#885630] to-[#6d441f] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-box text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Composer</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-cubes mr-1"></i>
                                            PHP Dependency Manager
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Dependency manager for PHP with comprehensive package management and autoloading capabilities.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center text-[#885630] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#885630] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Experience since Composer 1.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#885630] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v2.6+</div>
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
                            <!-- About Composer -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#885630] mr-3"></i>
                                    About Composer
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Composer</strong> is the de facto standard dependency manager for the PHP programming language.
                                        It manages dependencies on a per-project basis, installing them in a directory inside your project.
                                        Composer also handles autoloading, making it easy to use third-party code in your applications.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Dependency Management</strong> — Declare and manage project dependencies efficiently</li>
                                        <li><strong>Autoloading</strong> — Automatic class loading with PSR-4 and PSR-0 standards</li>
                                        <li><strong>Version Constraints</strong> — Flexible version requirements and conflict resolution</li>
                                        <li><strong>Packagist Integration</strong> — Access to thousands of PHP packages</li>
                                        <li><strong>Script Automation</strong> — Run scripts during installation and updates</li>
                                        <li><strong>Platform Requirements</strong> — Define PHP version and extension requirements</li>
                                        <li><strong>Optimization</strong> — Classmap optimization for better performance</li>
                                    </ul>

                                    <h3>Common Use Cases</h3>
                                    <p>
                                        Composer is essential for modern PHP development:
                                    </p>
                                    <ul>
                                        <li>Managing framework dependencies (Laravel, Symfony, etc.)</li>
                                        <li>Installing and updating third-party libraries</li>
                                        <li>Setting up project-specific autoloading</li>
                                        <li>Managing development and production dependencies</li>
                                        <li>Creating and distributing PHP packages</li>
                                        <li>Automating deployment and build processes</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Composer Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#885630] mr-3"></i>
                                    My Composer Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started using Composer in 2017 with Laravel projects and quickly became proficient in dependency management,
                                        autoloading configuration, and package development. Over the years, I've managed complex dependency trees
                                        and optimized Composer workflows for production applications.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-project-diagram text-[#885630] mr-2"></i>
                                                Dependency Management
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Managing complex dependency trees in large-scale applications,
                                                resolving version conflicts, and optimizing dependency resolution.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                                Performance Optimization
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementing Composer optimizations like classmap generation
                                                and dependency caching to improve application performance.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#885630] mr-3"></i>
                                    My Composer Experience
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 5+ years of Composer experience, I've managed dependencies for numerous PHP projects,
                                        from simple websites to complex enterprise applications with hundreds of dependencies.
                                    </p>

                                    <h3>Specialized Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dependency Version Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>PSR-4 Autoloading Configuration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Composer Script Automation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Package Development & Publishing</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Private Repository Setup</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dependency Conflict Resolution</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance Optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Security Vulnerability Scanning</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CI/CD Integration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Platform Requirement Configuration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Custom Installer Development</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Monorepo Management</span>
                                        </div>
                                    </div>

                                    <h3>Key Projects</h3>
                                    <ul>
                                        <li><strong>Large E-commerce Platform</strong> — Managed 150+ dependencies with complex version constraints</li>
                                        <li><strong>Microservices Architecture</strong> — Coordinated dependencies across multiple Composer projects</li>
                                        <li><strong>Custom Package Development</strong> — Created and maintained internal Composer packages</li>
                                        <li><strong>Legacy Project Migration</strong> — Migrated from manual dependency management to Composer</li>
                                        <li><strong>CI/CD Pipeline Optimization</strong> — Integrated Composer with automated deployment systems</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Advanced Composer Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#885630] mr-3"></i>
                                    Advanced Composer Features
                                </h2>
                                <div class="content-section">
                                    <h3>Advanced Configuration</h3>
                                    <p>
                                        Expertise in advanced Composer features and configurations:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#885630] mb-2">Scripts & Events</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Post-install, post-update, and custom script automation
                                                for deployment and development workflows.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#885630] mb-2">Custom Installers</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Creating custom installers for non-standard package types
                                                and framework-specific installation requirements.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#885630] mb-2">Repository Management</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Private Satis repositories, VCS repositories, and package
                                                repository configuration for enterprise environments.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#885630] mb-2">Platform Configuration</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Defining PHP version requirements, extension dependencies,
                                                and environment-specific configurations.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Performance Optimization</h3>
                                    <p>
                                        Techniques for optimizing Composer performance:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Classmap Optimization</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">APCu Caching</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Parallel Install</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Prefer Dist</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Version Constraints</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Dependency Caching</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Package Development -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cube text-[#885630] mr-3"></i>
                                    Package Development
                                </h2>
                                <div class="content-section">
                                    <h3>Creating Composer Packages</h3>
                                    <p>
                                        Experience in developing and maintaining Composer packages for internal and public use:
                                    </p>
                                    <ul>
                                        <li><strong>Package Structure</strong> — Proper package organization with namespaces and autoloading</li>
                                        <li><strong>Versioning</strong> — Semantic versioning and tag management</li>
                                        <li><strong>Testing</strong> — PHPUnit integration and continuous testing</li>
                                        <li><strong>Documentation</strong> — README files and API documentation</li>
                                        <li><strong>Distribution</strong> — Packagist publication and private repository setup</li>
                                        <li><strong>Maintenance</strong> — Version updates and dependency management</li>
                                    </ul>

                                    <h3>Package Types Developed</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Laravel Service Providers</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API Client Libraries</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Utility Packages</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Development Tools</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Code Quality Tools</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Framework Integrations</span>
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
                                    <i class="fas fa-chart-bar text-[#885630] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#885630]">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#885630] to-[#6d441f]"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Dependency Management</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Autoloading</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Package Development</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Performance</span>
                                            <span class="text-sm font-bold text-purple-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#885630] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>5+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Composer 2.6+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>40+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cubes text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Dependencies: <strong>1000+ managed</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-box-open text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Packages: <strong>10+ developed</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#885630] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#885630] transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#885630] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#885630] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#885630] transition-colors"></i>
                                    </a>
                                    <a href="/competences/git" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#f05032] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-git-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#885630] transition-colors">Git</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#885630] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#885630] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#885630] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#885630] to-[#6d441f] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need dependency management?</h3>
                                <p class="text-sm mb-4">Ready to discuss Composer implementation</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#885630] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

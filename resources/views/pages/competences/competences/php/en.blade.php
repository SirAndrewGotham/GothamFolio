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
                                        PHP
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
                        <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#777BB4] to-[#4F5B93] flex items-center justify-center text-white shadow-lg">
                            <i class="fab fa-php text-4xl"></i>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">PHP</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-history mr-1"></i>
                                            Since 1998
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Server-side programming language that has evolved from simple scripts to modern enterprise applications
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#777BB4] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">70%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#777BB4] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">25+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Experience since PHP 3.3</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#777BB4] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v8.3/8.4</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Current Versions</div>
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
                            <!-- PHP Evolution -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#777BB4] mr-3"></i>
                                    PHP Evolution and My Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>PHP</strong> is a language I have observed and used since its inception.
                                        Starting with PHP 3.3 in 1998, I have gone through all major milestones of the language's development -
                                        from simple HTML generation scripts to creating complex object-oriented systems.
                                    </p>

                                    <h3>Historical Perspective</h3>
                                    <div class="space-y-6 mt-6">
                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 3.3 (1998)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">Beginning of the Journey</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                First PHP projects: simple websites, guest books, feedback forms.
                                                Working in procedural style, embedding PHP in HTML.
                                            </p>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 4 (2000-2008)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">Zend Engine</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Introduction of Zend Engine, first attempts at OOP. Development of more complex applications,
                                                beginning work with databases through mysql_* functions.
                                            </p>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 5 (2004-2015)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">Real OOP</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Full-fledged object-oriented model, exceptions, namespaces.
                                                Transition to PDO for database work, emergence of first frameworks.
                                            </p>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 7+ (2015-Present)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">Modern Era</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Significant performance improvement, scalar types, return types,
                                                spaceship operator, null coalescing operator. Working with modern frameworks.
                                            </p>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 8.x (2020-Present)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">JIT and Modern Features</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Attributes, union types, match expression, nullsafe operator, JIT compilation.
                                                Active development on PHP 8.3 and testing PHP 8.4.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Legacy Code Expertise -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-archive text-[#777BB4] mr-3"></i>
                                    Legacy Code Work and Migration
                                </h2>
                                <div class="content-section">
                                    <p>
                                        One of my key specializations is working with legacy code and adapting it
                                        to modern development standards. This includes both supporting old projects
                                        and their complete migration to modern technologies.
                                    </p>

                                    <h3>Approach to Legacy Code</h3>
                                    <ul>
                                        <li><strong>Analysis and Understanding</strong> — deep study of existing codebase without documentation</li>
                                        <li><strong>Refactoring</strong> — gradual code improvement without breaking functionality</li>
                                        <li><strong>Safe Migration</strong> — transferring functionality while preserving business logic</li>
                                        <li><strong>Testing</strong> — creating tests for legacy code before making changes</li>
                                    </ul>

                                    <h3>Typical Migration Scenarios</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#777BB4] mb-2">Procedural → OOP</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Converting procedural code to object-oriented architecture
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#777BB4] mb-2">Custom Framework → Laravel</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Migration from custom solutions to modern frameworks
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#777BB4] mb-2">PHP 5.x → PHP 8.x</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Updating PHP versions with adaptation of outdated syntax
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#777BB4] mb-2">mysql_* → PDO/Eloquent</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Replacing outdated database functions with modern approaches
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Real Migration Examples</h3>
                                    <ul>
                                        <li><strong>E-commerce site on PHP 5.3</strong> → complete overhaul to Laravel 10 while preserving all business processes</li>
                                        <li><strong>Corporate portal</strong> → migration from custom framework to modern architecture</li>
                                        <li><strong>API service</strong> → refactoring procedural code into RESTful API with auto-documentation</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Modern PHP Development -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-rocket text-[#777BB4] mr-3"></i>
                                    Modern PHP Development
                                </h2>
                                <div class="content-section">
                                    <h3>Modern Practices and Tools</h3>
                                    <p>
                                        Despite experience with legacy code, I actively use and promote modern
                                        approaches to PHP development:
                                    </p>
                                    <ul>
                                        <li><strong>Composer</strong> — dependency management and class autoloading</li>
                                        <li><strong>PSR Standards</strong> — following community standards</li>
                                        <li><strong>Type Declarations</strong> — strict typing for code reliability</li>
                                        <li><strong>Testing</strong> — PHPUnit, Pest for automated testing</li>
                                        <li><strong>Static Analysis</strong> — PHPStan, Psalm for error detection</li>
                                        <li><strong>Containerization</strong> — Docker for development and production environments</li>
                                    </ul>

                                    <h3>Key Competencies in Modern PHP</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Object-Oriented Programming</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Namespaces and Autoloading</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Working with Exceptions and Errors</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Modern PHP 8.x Features</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integration with Frontend Technologies</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance Optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Web Application Security</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>REST API Development</span>
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
                                    <i class="fas fa-chart-bar text-[#777BB4] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#777BB4]">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#777BB4] to-[#4F5B93]"
                                                 data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Legacy Code</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Modern PHP 8.x</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Code Migration</span>
                                            <span class="text-sm font-bold text-purple-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#777BB4] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#777BB4] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>25+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#777BB4] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>PHP 8.3/8.4</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#777BB4] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-history text-[#777BB4] w-5 mr-3"></i>
                                        <span class="text-sm">With PHP: <strong>since 1998</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#777BB4] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#777BB4] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#777BB4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#777BB4] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#777BB4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/composer" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-box text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#777BB4] transition-colors">Composer</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#777BB4] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Back to Competences -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 text-center fade-in">
                                <h3 class="font-semibold mb-3">All Competences</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Explore the full spectrum of my technical skills and competences
                                </p>
                                <a href="/competences" class="inline-flex items-center px-4 py-2 bg-[#777BB4] hover:bg-[#4F5B93] text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    <span>Back to Competences List</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.app>

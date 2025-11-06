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
                                <a href="/competences/testing" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Testing
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Test Driven Development
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="py-12 bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Icon and Basic Info -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#8B5CF6] to-[#7C3AED] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-sync-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">TDD</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-code mr-1"></i>
                                            Red-Green-Refactor
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Test Driven Development methodology for creating robust, maintainable code through the Red-Green-Refactor cycle.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#8B5CF6] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#8B5CF6] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">TDD Practice</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#8B5CF6] mr-3">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">25+ projects</div>
                                        <div class="text-sm text.text-gray-600 dark:text-gray-400">TDD Implemented</div>
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
                            <!-- About TDD -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#8B5CF6] mr-3"></i>
                                    About Test Driven Development
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Test Driven Development (TDD)</strong> is a software development methodology where tests are written before the actual code.
                                        Following the Red-Green-Refactor cycle, TDD ensures code quality, reduces bugs, and creates a comprehensive test suite
                                        that serves as living documentation for the system.
                                    </p>

                                    <h3>The TDD Cycle</h3>
                                    <ul>
                                        <li><strong>Red</strong> — Write a failing test that defines the desired functionality</li>
                                        <li><strong>Green</strong> — Write the minimum code necessary to make the test pass</li>
                                        <li><strong>Refactor</strong> — Improve the code while keeping tests green</li>
                                    </ul>

                                    <h3>Key Benefits</h3>
                                    <ul>
                                        <li><strong>Better Design</strong> — Forces thinking about interface before implementation</li>
                                        <li><strong>Comprehensive Testing</strong> — Natural test coverage for all features</li>
                                        <li><strong>Regression Protection</strong> — Immediate feedback on breaking changes</li>
                                        <li><strong>Living Documentation</strong> — Tests serve as executable specifications</li>
                                        <li><strong>Confident Refactoring</strong> — Safe code modifications with test safety net</li>
                                        <li><strong>Reduced Debugging</strong> — Catch issues early in development cycle</li>
                                    </ul>

                                    <h3>TDD Mindset</h3>
                                    <p>
                                        TDD is more than a technique—it's a development philosophy:
                                    </p>
                                    <ul>
                                        <li>Write tests from the user's perspective</li>
                                        <li>Focus on behavior, not implementation</li>
                                        <li>Embrace incremental development</li>
                                        <li>Trust the feedback loop</li>
                                        <li>Value maintainability over cleverness</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My TDD Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#8B5CF6] mr-3"></i>
                                    My TDD Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I adopted TDD in 2019 after experiencing the pain of maintaining large, untested codebases.
                                        Starting with small projects, I gradually incorporated TDD into my workflow, eventually
                                        implementing it across enterprise applications and mentoring teams in TDD practices.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-graduation-cap text-[#8B5CF6] mr-2"></i>
                                                Team Mentoring
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Trained development teams in TDD methodologies,
                                                helping them transition from traditional testing to test-first approaches.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-building text-blue-500 mr-2"></i>
                                                Enterprise Adoption
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implemented TDD practices in large-scale enterprise applications,
                                                significantly reducing bug rates and improving code quality.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#8B5CF6] mr-3"></i>
                                    My TDD Experience
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 4+ years of TDD practice across 25+ projects, I've applied test-driven development
                                        to various domains including e-commerce, financial services, and API development,
                                        consistently delivering higher quality software with fewer production issues.
                                    </p>

                                    <h3>TDD Methodologies</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Classic TDD (Outside-In)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>London School TDD (Inside-Out)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Behavior Driven Development (BDD)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Acceptance Test Driven Development</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Test-Driven Database Development</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API-First TDD</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Legacy Code TDD Integration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Microservices TDD Approach</span>
                                        </div>
                                    </div>

                                    <h3>Key TDD Projects</h3>
                                    <ul>
                                        <li><strong>Financial Risk Calculator</strong> — TDD implementation with 95%+ test coverage</li>
                                        <li><strong>E-commerce Payment Gateway</strong> — Test-first development for critical financial operations</li>
                                        <li><strong>API Microservices Architecture</strong> — Contract-first TDD across multiple services</li>
                                        <li><strong>Legacy System Modernization</strong> — Gradual TDD adoption in existing codebase</li>
                                        <li><strong>Team TDD Training Program</strong> — Comprehensive TDD education and mentorship</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- TDD Techniques -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#8B5CF6] mr-3"></i>
                                    TDD Techniques & Patterns
                                </h2>
                                <div class="content-section">
                                    <h3>Advanced TDD Practices</h3>
                                    <p>
                                        Expertise in sophisticated TDD techniques and patterns:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Test Doubles Strategy</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Strategic use of mocks, stubs, and fakes
                                                to isolate units and define collaborations.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Transformation Priority</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Applying transformation priority premise
                                                to guide implementation choices during Green phase.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Triangulation</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Using multiple test examples to drive
                                                general solutions from specific cases.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Obvious Implementation</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Knowing when to skip small steps and
                                                implement the obvious solution directly.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>TDD Testing Strategies</h3>
                                    <p>
                                        Comprehensive testing approaches within TDD:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Unit Testing</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Integration Testing</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Acceptance Testing</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Contract Testing</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Property Testing</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Mutation Testing</span>
                                    </div>
                                </div>
                            </div>

                            <!-- TDD in Practice -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-hammer text-[#8B5CF6] mr-3"></i>
                                    TDD in Practice
                                </h2>
                                <div class="content-section">
                                    <h3>Real-World TDD Application</h3>
                                    <p>
                                        Practical experience applying TDD to various development scenarios:
                                    </p>
                                    <ul>
                                        <li><strong>Greenfield Projects</strong> — Starting with TDD from project inception</li>
                                        <li><strong>Brownfield Development</strong> — Introducing TDD to existing codebases</li>
                                        <li><strong>Legacy Code Integration</strong> — Using TDD to safely modify legacy systems</li>
                                        <li><strong>API Development</strong> — Contract-first API development with TDD</li>
                                        <li><strong>Database Operations</strong> — TDD for data access layers and migrations</li>
                                        <li><strong>Third-party Integrations</strong> — Testing external dependencies effectively</li>
                                    </ul>

                                    <h3>Challenges & Solutions</h3>
                                    <p>
                                        Overcoming common TDD adoption challenges:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Slow Test Execution</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Complex Dependencies</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Legacy Code Integration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Team Resistance</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testing UI Components</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Database Testing</span>
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
                                    <i class="fas fa-chart-bar text-[#8B5CF6] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#8B5CF6]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#8B5CF6] to-[#7C3AED]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Methodology</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Team Mentoring</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Legacy Integration</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Enterprise Adoption</span>
                                            <span class="text-sm font-bold text-purple-500">83%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="83%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#8B5CF6] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Teams Mentored: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bug text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Bug Reduction: <strong>70%+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Code Quality: <strong>High</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#8B5CF6] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/phpunit" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flask text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">PHPUnit</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pest-php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#7CFC00] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-vial text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">Pest PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/clean-code" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-broom text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">Clean Code</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#8B5CF6] to-[#7C3AED] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need TDD expertise?</h3>
                                <p class="text-sm mb-4">Ready to discuss test-driven development</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#8B5CF6] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

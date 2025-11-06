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
                                <a href="/competences/frontend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Frontend Development
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Tailwind CSS
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="py-12 bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Icon and Basic Info -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#06b6d4] to-[#0891b2] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-wind text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Tailwind CSS</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bolt mr-1"></i>
                                            Utility-First
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Utility-first CSS framework for rapid UI development with responsive design and modern workflow.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center text-[#06b6d4] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#06b6d4] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Experience since Tailwind 1.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#06b6d4] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.4+</div>
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
                            <!-- About Tailwind CSS -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#06b6d4] mr-3"></i>
                                    About Tailwind CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Tailwind CSS</strong> is a utility-first CSS framework that enables rapid UI development
                                        without writing custom CSS. Unlike traditional CSS frameworks, Tailwind provides low-level
                                        utility classes that let you build completely custom designs directly in your markup.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Utility-First Approach</strong> — Build complex designs without leaving HTML</li>
                                        <li><strong>Responsive by Default</strong> — Built-in responsive design utilities</li>
                                        <li><strong>Highly Customizable</strong> — Complete control over design system</li>
                                        <li><strong>Performance Optimized</strong> — PurgeCSS integration for minimal file size</li>
                                        <li><strong>Developer Experience</strong> — Excellent tooling and IntelliSense support</li>
                                        <li><strong>Component-Friendly</strong> — Perfect for component-based frameworks</li>
                                        <li><strong>Dark Mode Support</strong> — First-class dark mode implementation</li>
                                    </ul>

                                    <h3>Development Philosophy</h3>
                                    <p>
                                        Tailwind embraces a modern approach to CSS development:
                                    </p>
                                    <ul>
                                        <li>Constraints lead to consistency and faster development</li>
                                        <li>Utility classes are composable and predictable</li>
                                        <li>Design decisions are visible and searchable in markup</li>
                                        <li>No context switching between HTML and CSS files</li>
                                        <li>Design system is enforced through configuration</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Tailwind Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#06b6d4] mr-3"></i>
                                    My Tailwind CSS Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started using Tailwind CSS in 2019 with version 1.0, initially skeptical but quickly
                                        becoming a strong advocate after experiencing the productivity gains. Over 4+ years,
                                        I've progressed from basic utility usage to advanced configuration, plugin development,
                                        and establishing design systems across multiple organizations.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-palette text-[#06b6d4] mr-2"></i>
                                                Design Systems
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Created comprehensive design systems with custom configurations,
                                                ensuring visual consistency across large applications and teams.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-purple-500 mr-2"></i>
                                                Performance Optimization
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Optimized Tailwind builds with PurgeCSS, JIT mode,
                                                and custom configurations for optimal performance.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#06b6d4] mr-3"></i>
                                    My Tailwind CSS Experience
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 4+ years of Tailwind CSS experience across 40+ projects, I've built everything from
                                        simple marketing pages to complex enterprise applications, consistently delivering
                                        beautiful, responsive interfaces with exceptional development velocity.
                                    </p>

                                    <h3>Specialized Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Advanced Configuration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Custom Plugin Development</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Design System Implementation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Responsive Design Patterns</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dark Mode Implementation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance Optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Component Extraction</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integration with Frameworks</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Accessibility Best Practices</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Animation & Transitions</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Build Process Optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Team Training & Standards</span>
                                        </div>
                                    </div>

                                    <h3>Key Tailwind Projects</h3>
                                    <ul>
                                        <li><strong>Enterprise SaaS Platform</strong> — Comprehensive design system with 50+ components</li>
                                        <li><strong>E-commerce Redesign</strong> — Mobile-first responsive design with 60% faster development</li>
                                        <li><strong>Design System Library</strong> — Custom Tailwind configuration for brand consistency</li>
                                        <li><strong>Admin Dashboard</strong> — Complex layouts with dark mode and accessibility</li>
                                        <li><strong>Marketing Website</strong> — High-performance static site with animations</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Advanced Tailwind Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#06b6d4] mr-3"></i>
                                    Advanced Tailwind Features
                                </h2>
                                <div class="content-section">
                                    <h3>Advanced Configuration & Customization</h3>
                                    <p>
                                        Expertise in Tailwind's powerful customization capabilities:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Custom Design Systems</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Extending Tailwind with custom colors, spacing,
                                                typography scales, and component libraries.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Plugin Development</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Creating custom plugins for reusable utilities,
                                                components, and framework integrations.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">JIT Mode Optimization</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Leveraging Just-In-Time mode for unlimited
                                                utilities and dynamic class generation.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Performance Tuning</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Optimizing build processes, PurgeCSS configuration,
                                                and critical CSS extraction.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Modern Workflow Integration</h3>
                                    <p>
                                        Seamless integration with modern development tools:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">VSCode IntelliSense</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">PostCSS Config</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Mix</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Vite Integration</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Webpack Config</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">CI/CD Pipelines</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Design System & Components -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-layer-group text-[#06b6d4] mr-3"></i>
                                    Design Systems & Components
                                </h2>
                                <div class="content-section">
                                    <h3>Component Architecture</h3>
                                    <p>
                                        Building maintainable, scalable component systems with Tailwind:
                                    </p>
                                    <ul>
                                        <li><strong>Utility-First Components</strong> — Composable components using utility classes</li>
                                        <li><strong>@apply Directive</strong> — Extracting repeated utility patterns</li>
                                        <li><strong>Component Libraries</strong> — Building reusable component systems</li>
                                        <li><strong>Design Tokens</strong> — Consistent spacing, colors, and typography</li>
                                        <li><strong>Responsive Components</strong> — Mobile-first component design</li>
                                        <li><strong>Accessible Components</strong> — WCAG compliant interface elements</li>
                                    </ul>

                                    <h3>Integration Patterns</h3>
                                    <p>
                                        Experience integrating Tailwind with various frameworks and tools:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Laravel Blade Components</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vue.js Single File Components</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>React Functional Components</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Alpine.js Interactive Components</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Livewire Reactive Components</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Static Site Generators</span>
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
                                    <i class="fas fa-chart-bar text-[#06b6d4] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#06b6d4]">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#06b6d4] to-[#0891b2]"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Utility-First Development</span>
                                            <span class="text-sm font-bold text-green-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Responsive Design</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Custom Configuration</span>
                                            <span class="text-sm font-bold text-blue-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Performance</span>
                                            <span class="text-sm font-bold text-purple-500">87%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="87%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#06b6d4] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Tailwind 3.4+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>40+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-palette text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Design Systems: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-mobile-alt text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Responsive: <strong>100% mobile-first</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#06b6d4] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/alpine-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-mountain text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">Alpine.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/livewire" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-pink-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">Livewire</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">92% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-css3-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#06b6d4] to-[#0891b2] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need UI development expertise?</h3>
                                <p class="text-sm mb-4">Ready to discuss Tailwind CSS implementation</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#06b6d4] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

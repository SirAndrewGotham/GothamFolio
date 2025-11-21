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
            document.addEventListener('DOMContentLoaded', function() {
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
                                    <a href="/competences/frontend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Frontend Development
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Bootstrap
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-purple-500 to-violet-500 flex items-center justify-center text-white shadow-lg">
                                    <i class="fab fa-bootstrap text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Bootstrap</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-mobile-alt mr-1"></i>
                                            Responsive Design
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    The world's most popular CSS framework for developing responsive, mobile-first websites and applications
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">8+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                            <i class="fas fa-layer-group"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">100+</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Projects</div>
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
                                <!-- About Bootstrap -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                        About Bootstrap
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Bootstrap</strong> is the world's most popular front-end open source toolkit,
                                            featuring Sass variables and mixins, responsive grid system, extensive prebuilt components,
                                            and powerful JavaScript plugins. It helps developers build responsive, mobile-first projects
                                            on the web with ease and efficiency.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Rapid Development</strong> - Pre-built components and utilities accelerate development</li>
                                            <li><strong>Responsive Grid System</strong> - Mobile-first approach with breakpoint system</li>
                                            <li><strong>Cross-browser Compatibility</strong> - Consistent rendering across all modern browsers</li>
                                            <li><strong>Customizable</strong> - Extensive theming capabilities with Sass variables</li>
                                            <li><strong>Large Community</strong> - Vast ecosystem of resources and third-party components</li>
                                            <li><strong>Accessibility</strong> - Built with accessibility best practices in mind</li>
                                        </ul>

                                        <h3>Core Features</h3>
                                        <p>
                                            Bootstrap provides a comprehensive set of features for modern web development:
                                        </p>
                                        <ul>
                                            <li><strong>Responsive Grid System</strong> - 12-column fluid grid with multiple breakpoints</li>
                                            <li><strong>Pre-styled Components</strong> - Buttons, cards, modals, navbars, and more</li>
                                            <li><strong>Utility Classes</strong> - Spacing, typography, colors, and display utilities</li>
                                            <li><strong>JavaScript Plugins</strong> - Interactive components without custom JavaScript</li>
                                            <li><strong>Customization</strong> - Sass variables and mixins for complete design control</li>
                                            <li><strong>Icons</strong> - Bootstrap Icons library for consistent iconography</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Bootstrap Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-purple-500 mr-3"></i>
                                        My Journey with Bootstrap
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I started using Bootstrap in 2015 with version 3, and have followed its evolution through
                                            major releases including Bootstrap 4 and the current Bootstrap 5. Over 8+ years, I've used
                                            Bootstrap in countless projects, from simple landing pages to complex enterprise applications.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-code text-purple-500 mr-2"></i>
                                                    Version Evolution
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Deep experience across Bootstrap 3, 4, and 5, understanding
                                                    migration paths and new feature adoption.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-paint-brush text-blue-500 mr-2"></i>
                                                    Customization Expertise
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Extensive experience customizing Bootstrap themes and
                                                    creating unique designs while maintaining framework benefits.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                        My Experience with Bootstrap
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 8+ years of Bootstrap experience across 100+ projects, I've developed comprehensive
                                            expertise in leveraging Bootstrap's full potential while creating custom, brand-aligned designs.
                                        </p>

                                        <h3>Specialized Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Advanced grid system utilization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Custom component development</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Sass customization and theming</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>JavaScript plugin integration</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Responsive design optimization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Build tool integration (Webpack, Gulp)</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Performance optimization techniques</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Cross-browser compatibility testing</span>
                                            </div>
                                        </div>

                                        <h3>Framework Integration</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Bootstrap 5</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Bootstrap 4</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Bootstrap 3</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Sass</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">jQuery</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Webpack</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Gulp</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">NPM</span>
                                        </div>

                                        <h3>Component Mastery</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <h4 class="font-bold text-purple-500 mb-2">Layout Components</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Grid system and flexbox utilities</li>
                                                    <li>• Navigation bars and breadcrumbs</li>
                                                    <li>• Cards and jumbotrons</li>
                                                    <li>• Modals and tooltips</li>
                                                    <li>• Carousels and accordions</li>
                                                </ul>
                                            </div>
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <h4 class="font-bold text-purple-500 mb-2">Form Components</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Custom form controls</li>
                                                    <li>• Input groups and validation</li>
                                                    <li>• Select menus and range sliders</li>
                                                    <li>• Checkboxes and radio buttons</li>
                                                    <li>• File upload components</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Advanced Customization -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-purple-500 mr-3"></i>
                                        Advanced Customization & Theming
                                    </h2>
                                    <div class="content-section">
                                        <h3>Sass Customization</h3>
                                        <p>
                                            I have extensive experience customizing Bootstrap through Sass:
                                        </p>
                                        <ul>
                                            <li><strong>Variable Overrides</strong> - Customizing colors, spacing, and typography</li>
                                            <li><strong>Component Modifications</strong> - Extending and modifying existing components</li>
                                            <li><strong>Utility Generation</strong> - Creating custom utility classes</li>
                                            <li><strong>Mixins Usage</strong> - Leveraging Bootstrap's mixins for custom components</li>
                                            <li><strong>Modular Import</strong> - Importing only necessary components for optimization</li>
                                            <li><strong>Theme Creation</strong> - Building complete custom themes from scratch</li>
                                        </ul>

                                        <h3>Build Process Integration</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">Build Tools</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Integration with Webpack, Gulp, and other build systems for optimized output
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">Performance Optimization</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Tree-shaking unused components and optimizing CSS delivery
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">CDN Strategies</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Implementing CDN delivery with fallback strategies
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">Version Management</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Managing Bootstrap dependencies and version updates
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Real-world Applications -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-layer-group text-purple-500 mr-3"></i>
                                        Real-world Applications & Projects
                                    </h2>
                                    <div class="content-section">
                                        <h3>Project Types</h3>
                                        <p>
                                            I've successfully implemented Bootstrap in various real-world scenarios:
                                        </p>
                                        <ul>
                                            <li><strong>Corporate Websites</strong> - Professional business sites with consistent branding</li>
                                            <li><strong>E-commerce Platforms</strong> - Product catalogs and shopping interfaces</li>
                                            <li><strong>Admin Dashboards</strong> - Complex data visualization and management interfaces</li>
                                            <li><strong>Landing Pages</strong> - High-conversion marketing pages</li>
                                            <li><strong>Web Applications</strong> - Interactive single-page applications</li>
                                        </ul>

                                        <h3>Integration Patterns</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">Backend Integration</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Integration with Laravel, Django, and other backend frameworks
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">JavaScript Frameworks</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Usage with Vue.js, React, and other modern frontend frameworks
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">CMS Integration</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Implementation with WordPress, Joomla, and other content management systems
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">Progressive Web Apps</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Building PWAs with Bootstrap for mobile-first experiences
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Notable Projects</h3>
                                        <ul>
                                            <li><strong>Enterprise CRM System</strong> - Custom Bootstrap theme for large-scale business application</li>
                                            <li><strong>Educational Platform</strong> - Responsive learning management system</li>
                                            <li><strong>Healthcare Portal</strong> - Accessible patient management interface</li>
                                            <li><strong>E-commerce Marketplace</strong> - Multi-vendor platform with custom components</li>
                                            <li><strong>Government Portal</strong> - WCAG-compliant public service website</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-purple-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-violet-500"
                                                     data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Grid System & Layout</span>
                                                <span class="text-sm font-bold text-blue-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Customization & Theming</span>
                                                <span class="text-sm font-bold text-green-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Component Development</span>
                                                <span class="text-sm font-bold text-yellow-500">82%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="82%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Performance Optimization</span>
                                                <span class="text-sm font-bold text-red-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-purple-500 mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-purple-500 w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>8+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-layer-group text-purple-500 w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>100+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code-branch text-purple-500 w-5 mr-3"></i>
                                            <span class="text-sm">Versions: <strong>3, 4, 5</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-mobile-alt text-purple-500 w-5 mr-3"></i>
                                            <span class="text-sm">Approach: <strong>Mobile-First</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-paint-brush text-purple-500 w-5 mr-3"></i>
                                            <span class="text-sm">Themes: <strong>Custom & Premium</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bootstrap Versions -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-history text-purple-500 mr-2"></i>
                                        Version Experience
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Bootstrap 3 - Legacy Projects</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Bootstrap 4 - Flexbox & Cards</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Bootstrap 5 - jQuery Removal</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-spinner text-xs"></i>
                                            </div>
                                            <span class="text-sm">Bootstrap Icons Integration</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-clock text-xs"></i>
                                            </div>
                                            <span class="text-sm">Future Bootstrap 6</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-purple-500 mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-css3-alt text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-purple-500 transition-colors">CSS</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/sass" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-pink-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-sass text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-purple-500 transition-colors">Sass</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-js text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-purple-500 transition-colors">JavaScript</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/responsive-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-mobile-alt text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-purple-500 transition-colors">Responsive Design</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-purple-500 to-violet-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Need Bootstrap Expertise?</h3>
                                    <p class="text-sm mb-4">Let's build responsive, beautiful interfaces</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-purple-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

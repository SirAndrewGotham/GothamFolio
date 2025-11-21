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
                                        Laravel Breeze
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-sky-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#60A5FA] to-[#0ea5e9] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-wind text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 breeze-gradient">Laravel Breeze</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-rocket mr-1"></i>
                                            Rapid Development
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Minimalist starter kit for authentication with Blade, React or Vue. Lightweight authentication scaffolding for modern Laravel applications.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
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
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Professional Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-code-branch"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.x</div>
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
                                <!-- About Laravel Breeze -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#60A5FA] mr-3"></i>
                                        About Laravel Breeze
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Laravel Breeze</strong> is a minimal, simple implementation of all Laravel's authentication features.
                                            Breeze provides a wonderful starting point for building fresh Laravel applications with beautifully designed
                                            authentication scaffolding built with Tailwind CSS.
                                        </p>

                                        <h3>Core Features & Benefits</h3>
                                        <ul>
                                            <li><strong>Minimalist Approach</strong> - Clean, simple authentication without unnecessary complexity</li>
                                            <li><strong>Multiple Frontend Options</strong> - Blade, React, Vue, and API scaffolding options</li>
                                            <li><strong>Tailwind CSS Styling</strong> - Beautiful, modern design out of the box</li>
                                            <li><strong>Complete Authentication</strong> - Login, registration, password reset, email verification</li>
                                            <li><strong>Session-based Authentication</strong> - Traditional web application authentication</li>
                                            <li><strong>Easy Customization</strong> - Simple to extend and modify for project needs</li>
                                        </ul>

                                        <h3>Starter Kit Comparison</h3>
                                        <p>
                                            Breeze stands out among Laravel starter kits for its simplicity:
                                        </p>
                                        <ul>
                                            <li><strong>Breeze</strong> - Minimal authentication scaffolding</li>
                                            <li><strong>Jetstream</strong> - Full-featured application scaffolding with teams</li>
                                            <li><strong>Fortify</strong> - Headless authentication backend only</li>
                                            <li><strong>Sanctum</strong> - API token authentication for SPAs and mobile apps</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Breeze Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#60A5FA] mr-3"></i>
                                        My Breeze Journey
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Started using Laravel Breeze in 2021 for rapid prototyping and new project scaffolding.
                                            Over 3+ years, have implemented Breeze across various project types including traditional web applications,
                                            SPAs with Vue.js and React, and API-driven applications requiring quick authentication setup.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-blue-50 to-sky-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-bolt text-[#60A5FA] mr-2"></i>
                                                    Rapid Prototyping
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Used Breeze extensively for quick project starts and MVPs,
                                                    significantly reducing initial development time.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-palette text-purple-500 mr-2"></i>
                                                    Custom Styling
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Customized Breeze styling to match various design systems
                                                    while maintaining the underlying authentication logic.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Technical Expertise -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#60A5FA] mr-3"></i>
                                        Technical Expertise
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Comprehensive experience with Breeze installation, customization, and extension
                                            across different frontend technologies and project requirements.
                                        </p>

                                        <h3>Core Breeze Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Breeze Installation & Configuration</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Frontend Stack Selection (Blade/React/Vue)</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Authentication Flow Customization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Tailwind CSS Styling Modifications</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Email Verification Setup</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Password Reset Customization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Profile Management Enhancement</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Multi-stack Implementation</span>
                                            </div>
                                        </div>

                                        <h3>Frontend Stack Experience</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Blade Templates</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Vue.js</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">React</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Inertia.js</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Livewire</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">API Only</span>
                                        </div>

                                        <h3>Customization & Extension</h3>
                                        <ul>
                                            <li><strong>Design System Integration</strong> - Customizing Breeze to match project design systems</li>
                                            <li><strong>Additional Authentication Features</strong> - Extending beyond basic authentication</li>
                                            <li><strong>Multi-tenant Support</strong> - Adapting Breeze for multi-tenant applications</li>
                                            <li><strong>Social Authentication</strong> - Integrating social login providers</li>
                                            <li><strong>Enhanced Security</strong> - Adding additional security features and validation</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Implementation Patterns -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#60A5FA] mr-3"></i>
                                        Implementation Patterns
                                    </h2>
                                    <div class="content-section">
                                        <h3>Project-Specific Adaptations</h3>
                                        <p>
                                            Experience implementing Breeze across various project types and requirements:
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-green-600 mb-2">Traditional Web Apps</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Blade stack implementations for traditional server-rendered
                                                    applications with session-based authentication.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h4 class="font-semibold text-purple-600 mb-2">Modern SPAs</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Vue.js and React implementations for single-page applications
                                                    with modern frontend development workflows.
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Integration & Ecosystem</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Tailwind CSS</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Fortify Backend</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Sanctum API</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Socialite</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Livewire</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Inertia.js</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Alpine.js</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Vite</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Production & Best Practices -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-rocket text-[#60A5FA] mr-3"></i>
                                        Production & Best Practices
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Production-ready Breeze implementations with optimized performance and enhanced features:
                                        </p>

                                        <h3>Production Optimization</h3>
                                        <ul>
                                            <li><strong>Performance Tuning</strong> - Optimizing authentication flows for production</li>
                                            <li><strong>Security Hardening</strong> - Additional security measures beyond defaults</li>
                                            <li><strong>Custom Validation</strong> - Enhanced form validation and user experience</li>
                                            <li><strong>Email Template Customization</strong> - Branded email templates for authentication</li>
                                            <li><strong>Error Handling</strong> - Improved error messages and user feedback</li>
                                            <li><strong>Accessibility</strong> - Ensuring WCAG compliance in authentication flows</li>
                                        </ul>

                                        <h3>Development Workflow</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-600 mb-2">Rapid Development</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Quick project scaffolding</li>
                                                    <li>• Consistent authentication patterns</li>
                                                    <li>• Reduced boilerplate code</li>
                                                    <li>• Standardized project structure</li>
                                                </ul>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-green-600 mb-2">Team Collaboration</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Familiar project structure</li>
                                                    <li>• Consistent code patterns</li>
                                                    <li>• Easy onboarding for new developers</li>
                                                    <li>• Standardized authentication flows</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3>Custom Feature Implementation</h3>
                                        <ul>
                                            <li><strong>User Profile Enhancement</strong> - Extended profile management with additional fields</li>
                                            <li><strong>Multi-language Support</strong> - Internationalization of authentication interfaces</li>
                                            <li><strong>Dark Mode Support</strong> - Implementing dark mode in authentication flows</li>
                                            <li><strong>Advanced Form Validation</strong></li>
                                            <li><strong>Custom Middleware Integration</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#60A5FA] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Breeze</span>
                                                <span class="text-sm font-bold text-[#60A5FA]">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#60A5FA] to-[#0ea5e9]"
                                                     data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Blade Implementation</span>
                                                <span class="text-sm font-bold text-green-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Vue.js Implementation</span>
                                                <span class="text-sm font-bold text-blue-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">React Implementation</span>
                                                <span class="text-sm font-bold text-purple-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Customization</span>
                                                <span class="text-sm font-bold text-orange-500">82%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="82%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#60A5FA] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#60A5FA] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-[#60A5FA] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>Breeze 1.x</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#60A5FA] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>18+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-wind text-[#60A5FA] w-5 mr-3"></i>
                                            <span class="text-sm">Frontend Stacks: <strong>Blade, Vue, React</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-bolt text-[#60A5FA] w-5 mr-3"></i>
                                            <span class="text-sm">Rapid Starts: <strong>25+ projects</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#60A5FA] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-laravel text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Laravel</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                        </a>
                                        <a href="/competences/laravel-fortify" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-lock text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Laravel Fortify</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">82% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                        </a>
                                        <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-wind text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Tailwind CSS</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                        </a>
                                        <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-vuejs text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Vue.js</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">78% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#60A5FA] to-[#0ea5e9] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Need Rapid Authentication Setup?</h3>
                                    <p class="text-sm mb-4">Ready to kickstart your project with Laravel Breeze</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

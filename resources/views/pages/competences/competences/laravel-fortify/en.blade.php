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
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- About Laravel Fortify -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#3B82F6] mr-3"></i>
                                    About Laravel Fortify
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Fortify</strong> is a frontend agnostic authentication backend for Laravel.
                                        Fortify implements the authentication logic for your application, including features like login,
                                        registration, password reset, email verification, and more, without forcing you to use any
                                        particular frontend opinions or JavaScript framework.
                                    </p>

                                    <h3>Core Authentication Features</h3>
                                    <ul>
                                        <li><strong>User Registration</strong> - Complete user registration system with validation</li>
                                        <li><strong>Login & Logout</strong> - Secure authentication and session management</li>
                                        <li><strong>Password Reset</strong> - Email-based password reset functionality</li>
                                        <li><strong>Email Verification</strong> - Account verification through email confirmation</li>
                                        <li><strong>Two-Factor Authentication</strong> - Enhanced security with 2FA support</li>
                                        <li><strong>Profile Management</strong> - User profile updates and management</li>
                                        <li><strong>Account Deletion</strong> - Secure account deletion with confirmation</li>
                                    </ul>

                                    <h3>Headless Architecture Benefits</h3>
                                    <p>
                                        Fortify's headless approach provides several advantages:
                                    </p>
                                    <ul>
                                        <li>Complete freedom in frontend technology choice</li>
                                        <li>Consistent authentication logic across multiple frontends</li>
                                        <li>Easy integration with SPAs, mobile apps, and traditional web apps</li>
                                        <li>Flexible customization of authentication flows</li>
                                        <li>No frontend dependencies or opinions</li>
                                        <li>Perfect for API-driven applications</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Fortify Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#3B82F6] mr-3"></i>
                                    My Fortify Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Started working with Laravel Fortify in 2022 for headless authentication backends.
                                        Over 2+ years, have implemented Fortify across various projects including Vue.js SPAs,
                                        React applications, mobile app backends, and traditional web applications requiring
                                        custom authentication interfaces.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code text-[#3B82F6] mr-2"></i>
                                                Headless Backends
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Built multiple headless authentication backends serving
                                                various frontend applications with consistent security.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-shield-alt text-purple-500 mr-2"></i>
                                                Security Enhancement
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Enhanced Fortify implementations with additional security
                                                features and custom authentication workflows.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Technical Expertise -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#3B82F6] mr-3"></i>
                                    Technical Expertise
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Comprehensive experience with Fortify configuration, customization,
                                        and integration across various application architectures and frontend technologies.
                                    </p>

                                    <h3>Core Fortify Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Fortify Service Provider Configuration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Feature Customization & Extension</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Authentication Pipeline Customization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Two-Factor Authentication Setup</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Email Verification Implementation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Password Reset Customization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Profile Management Features</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Security Best Practices</span>
                                        </div>
                                    </div>

                                    <h3>Advanced Features & Customization</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">2FA Setup</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Email Verification</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Profile Updates</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Password Confirmation</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Account Recovery</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Browser Sessions</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">API Token Management</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Team Management</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Social Authentication</span>
                                    </div>

                                    <h3>Integration & Customization</h3>
                                    <ul>
                                        <li><strong>Frontend Agnostic Design</strong> - Integration with any frontend framework</li>
                                        <li><strong>Custom Authentication Responses</strong> - Tailored API responses for different clients</li>
                                        <li><strong>Extended User Profiles</strong> - Additional user data and profile fields</li>
                                        <li><strong>Multi-tenant Support</strong> - Authentication in multi-tenant applications</li>
                                        <li><strong>Custom Validation Rules</strong> - Extended validation for registration and profiles</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Frontend Integration -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#3B82F6] mr-3"></i>
                                    Frontend Integration
                                </h2>
                                <div class="content-section">
                                    <h3>Multi-Framework Experience</h3>
                                    <p>
                                        Experience integrating Fortify with various frontend technologies and frameworks:
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-green-600 mb-2">Vue.js & React SPAs</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Headless authentication backends for modern JavaScript SPAs
                                                with token-based authentication and session management.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-yellow-600 mb-2">Mobile Applications</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                API authentication for React Native and Flutter applications
                                                with secure token management and refresh mechanisms.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Integration Patterns</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Sanctum Integration</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Session Auth</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Token Auth</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">OAuth2</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Socialite</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Livewire</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Inertia.js</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Blade Templates</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Security & Production -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-shield-alt text-[#3B82F6] mr-3"></i>
                                    Security & Production
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Production-ready Fortify implementations with enhanced security features and best practices:
                                    </p>

                                    <h3>Security Enhancements</h3>
                                    <ul>
                                        <li><strong>Two-Factor Authentication</strong> - TOTP-based 2FA with recovery codes</li>
                                        <li><strong>Rate Limiting</strong> - Protection against brute force attacks</li>
                                        <li><strong>Password Policies</strong> - Strong password requirements and validation</li>
                                        <li><strong>Session Security</strong> - Secure session management and protection</li>
                                        <li><strong>Email Security</strong> - Secure email verification and password reset flows</li>
                                        <li><strong>Account Lockout</strong> - Protection against repeated failed attempts</li>
                                    </ul>

                                    <h3>Production Implementation</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-600 mb-2">Performance Optimization</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Database optimization for user queries</li>
                                                <li>• Caching strategies for authentication data</li>
                                                <li>• Efficient session storage management</li>
                                                <li>• Load balancing considerations</li>
                                            </ul>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-green-600 mb-2">Deployment Strategies</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Environment-specific configurations</li>
                                                <li>• Database migration strategies</li>
                                                <li>• Zero-downtime deployment procedures</li>
                                                <li>• Backup and recovery planning</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h3>Custom Features & Extensions</h3>
                                    <ul>
                                        <li><strong>Custom User Registration</strong> - Extended registration with additional fields</li>
                                        <li><strong>Social Authentication</strong> - Integration with social providers via Socialite</li>
                                        <li><strong>Multi-factor Options</strong> - Additional authentication factors and methods</li>
                                        <li><strong>Audit Logging</strong> - Comprehensive authentication event logging</li>
                                        <li><strong>Custom Middleware</strong> - Additional security and validation middleware</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#3B82F6] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Fortify</span>
                                            <span class="text-sm font-bold text-[#3B82F6]">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#3B82F6] to-[#1d4ed8]"
                                                 data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Configuration & Setup</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Feature Customization</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Security Implementation</span>
                                            <span class="text-sm font-bold text-purple-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Frontend Integration</span>
                                            <span class="text-sm font-bold text-orange-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#3B82F6] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#3B82F6] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>2+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#3B82F6] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Fortify 1.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#3B82F6] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>12+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#3B82F6] w-5 mr-3"></i>
                                        <span class="text-sm">Security Audits: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#3B82F6] w-5 mr-3"></i>
                                        <span class="text-sm">Frontend Integrations: <strong>6+ frameworks</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#3B82F6] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3B82F6] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel-sanctum" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3B82F6] transition-colors">Laravel Sanctum</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/security" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-lock text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3B82F6] transition-colors">Security</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3B82F6] transition-colors">API Development</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#3B82F6] to-[#1d4ed8] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need Headless Authentication?</h3>
                                <p class="text-sm mb-4">Ready to implement robust authentication with Laravel Fortify</p>
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

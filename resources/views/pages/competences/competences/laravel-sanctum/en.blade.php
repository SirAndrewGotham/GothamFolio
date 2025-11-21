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
            document.addEventListener('DOMContentLoaded', function () {
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
                            <!-- About Laravel Sanctum -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#10B981] mr-3"></i>
                                    About Laravel Sanctum
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Sanctum</strong> provides a featherweight authentication system for SPAs (single page applications),
                                        mobile applications, and simple token-based APIs. Sanctum allows each user of your application to generate
                                        multiple API tokens for their account with specific abilities.
                                    </p>

                                    <h3>Core Authentication Methods</h3>
                                    <ul>
                                        <li><strong>SPA Authentication</strong> - Session-based authentication for same-domain SPAs</li>
                                        <li><strong>API Token Authentication</strong> - Token-based authentication for mobile apps and third-party services</li>
                                        <li><strong>Ability-based Tokens</strong> - Fine-grained permissions for API tokens</li>
                                        <li><strong>CSRF Protection</strong> - Built-in protection for SPA authentication</li>
                                        <li><strong>Session Management</strong> - Laravel session integration for SPAs</li>
                                        <li><strong>Mobile App Support</strong> - Optimized for mobile application authentication</li>
                                    </ul>

                                    <h3>Key Advantages</h3>
                                    <p>
                                        Sanctum offers several benefits over traditional authentication methods:
                                    </p>
                                    <ul>
                                        <li>Lightweight and simple to implement</li>
                                        <li>No OAuth complexity for simple use cases</li>
                                        <li>Seamless integration with Laravel's session authentication</li>
                                        <li>Ability-based token permissions for fine-grained access control</li>
                                        <li>Excellent performance for high-traffic applications</li>
                                        <li>Built-in security features and best practices</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Sanctum Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#10B981] mr-3"></i>
                                    My Sanctum Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Started implementing Laravel Sanctum in 2021 for modern SPA applications and mobile app backends.
                                        Over 3+ years, have deployed Sanctum across various projects including Vue.js SPAs, React Native mobile apps,
                                        and third-party API integrations requiring secure authentication.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-globe text-[#10B981] mr-2"></i>
                                                SPA Applications
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implemented Sanctum for multiple Vue.js and React SPAs
                                                with session-based authentication and CSRF protection.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-mobile-alt text-blue-500 mr-2"></i>
                                                Mobile Backends
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Built secure API backends for React Native and Flutter
                                                applications using Sanctum's token-based authentication.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Technical Expertise -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#10B981] mr-3"></i>
                                    Technical Expertise
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Comprehensive experience with Sanctum configuration, implementation patterns,
                                        and security best practices across various application architectures.
                                    </p>

                                    <h3>Core Sanctum Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>SPA Authentication Configuration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API Token Generation & Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ability-based Token Permissions</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CSRF Protection Implementation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CORS Configuration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Mobile App Authentication</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Token Abilities & Scopes</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Security Best Practices</span>
                                        </div>
                                    </div>

                                    <h3>Implementation Patterns</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">SPA Session Auth</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">API Token Auth</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Mobile Auth</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Third-party API</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Multi-tenant</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Microservices</span>
                                    </div>

                                    <h3>Security & Best Practices</h3>
                                    <ul>
                                        <li><strong>Token Security</strong> - Secure token generation, storage, and transmission</li>
                                        <li><strong>CSRF Protection</strong> - Implementation and testing of CSRF protection</li>
                                        <li><strong>CORS Configuration</strong> - Proper CORS setup for cross-origin requests</li>
                                        <li><strong>Token Expiration</strong> - Token lifetime management and refresh strategies</li>
                                        <li><strong>Ability Management</strong> - Fine-grained permission systems and validation</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Integration Patterns -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#10B981] mr-3"></i>
                                    Integration Patterns
                                </h2>
                                <div class="content-section">
                                    <h3>Frontend Integration</h3>
                                    <p>
                                        Experience integrating Sanctum with various frontend frameworks and mobile platforms:
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-green-600 mb-2">Vue.js / React SPAs</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Session-based authentication with CSRF token management,
                                                automatic token refresh, and secure API communication.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-blue-600 mb-2">Mobile Applications</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Token-based authentication for React Native and Flutter apps
                                                with secure storage and token refresh mechanisms.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Backend Integration</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Fortify</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Laravel Breeze</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Jetstream</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Multi-guard</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Role-based</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Permission-based</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Multi-tenant</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Microservices</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Security & Production -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-shield-alt text-[#10B981] mr-3"></i>
                                    Security & Production
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Production-ready Sanctum implementations with security best practices and performance optimization:
                                    </p>

                                    <h3>Security Implementation</h3>
                                    <ul>
                                        <li><strong>Token Hashing</strong> - Secure token storage using Laravel's built-in hashing</li>
                                        <li><strong>HTTPS Enforcement</strong> - SSL/TLS requirements for production environments</li>
                                        <li><strong>Token Rotation</strong> - Regular token refresh and invalidation strategies</li>
                                        <li><strong>Rate Limiting</strong> - API rate limiting to prevent abuse and brute force attacks</li>
                                        <li><strong>Input Validation</strong> - Comprehensive validation of authentication requests</li>
                                        <li><strong>Logging & Monitoring</strong> - Security event logging and anomaly detection</li>
                                    </ul>

                                    <h3>Production Considerations</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-green-600 mb-2">Performance Optimization</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Database indexing for token lookups</li>
                                                <li>• Token caching strategies</li>
                                                <li>• Session storage optimization</li>
                                                <li>• Load balancing considerations</li>
                                            </ul>
                                        </div>
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-600 mb-2">Deployment Strategies</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Environment-specific configurations</li>
                                                <li>• Zero-downtime deployments</li>
                                                <li>• Database migration strategies</li>
                                                <li>• Backup and recovery procedures</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h3>Troubleshooting Experience</h3>
                                    <ul>
                                        <li><strong>CORS Issues</strong> - Resolving cross-origin resource sharing problems</li>
                                        <li><strong>CSRF Token Mismatches</strong> - Debugging and fixing CSRF protection issues</li>
                                        <li><strong>Token Validation Problems</strong> - Solving token verification and expiration issues</li>
                                        <li><strong>Session Management</strong> - Handling session persistence and security</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#10B981] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Sanctum</span>
                                            <span class="text-sm font-bold text-[#10B981]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#10B981] to-[#047857]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">SPA Authentication</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">API Token Auth</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Security Implementation</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Production Deployment</span>
                                            <span class="text-sm font-bold text-orange-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#10B981] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#10B981] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#10B981] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Sanctum 3.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#10B981] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#10B981] w-5 mr-3"></i>
                                        <span class="text-sm">Security Audits: <strong>10+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-mobile-alt text-[#10B981] w-5 mr-3"></i>
                                        <span class="text-sm">Mobile Apps: <strong>5+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#10B981] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10B981] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                    </a>
                                    <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10B981] transition-colors">API Development</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                    </a>
                                    <a href="/competences/security" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10B981] transition-colors">Security</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                    </a>
                                    <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-vuejs text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10B981] transition-colors">Vue.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#10B981] to-[#047857] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need Secure Authentication?</h3>
                                <p class="text-sm mb-4">Ready to implement robust authentication with Laravel Sanctum</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-green-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

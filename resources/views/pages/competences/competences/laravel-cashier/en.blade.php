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
                                    <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Backend Development
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel Cashier
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
                                    <i class="fas fa-credit-card text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Laravel Cashier</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-money-bill-wave mr-1"></i>
                                            Payment Processing
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Comprehensive subscription billing and payment management with Stripe and Paddle integration
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                            <i class="fas fa-cogs"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">2</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Payment Providers</div>
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
                                <!-- About Laravel Cashier -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                        About Laravel Cashier
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Laravel Cashier</strong> provides an expressive, fluent interface to Stripe's and Paddle's
                                            subscription billing services. It handles almost all of the boilerplate subscription billing
                                            code you dread writing, making subscription management simple and straightforward.
                                        </p>

                                        <h3>Key Benefits</h3>
                                        <ul>
                                            <li><strong>Simplified Subscription Management</strong> - Easy setup and management of recurring billing</li>
                                            <li><strong>Multiple Payment Providers</strong> - Support for both Stripe and Paddle</li>
                                            <li><strong>Built-in Invoice Handling</strong> - Automatic invoice generation and management</li>
                                            <li><strong>Webhook Integration</strong> - Seamless handling of payment events</li>
                                            <li><strong>Coupon & Discount Support</strong> - Comprehensive promotion system</li>
                                            <li><strong>Trial Period Management</strong> - Flexible trial configurations</li>
                                        </ul>

                                        <h3>Core Features</h3>
                                        <p>
                                            Laravel Cashier provides a comprehensive set of features for subscription-based applications:
                                        </p>
                                        <ul>
                                            <li>Subscription creation and management</li>
                                            <li>Multiple subscription plans and pricing tiers</li>
                                            <li>Automatic invoice generation and PDF download</li>
                                            <li>Payment method management and updates</li>
                                            <li>Subscription swapping and cancellation</li>
                                            <li>Webhook handling for payment events</li>
                                            <li>Tax and VAT calculation support</li>
                                            <li>Multi-currency billing support</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Cashier Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-purple-500 mr-3"></i>
                                        My Journey with Laravel Cashier
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I started working with Laravel Cashier in 2020 when implementing subscription-based
                                            revenue models for SaaS applications. Over the past 3+ years, I've integrated Cashier
                                            into various projects, from small startups to enterprise-level subscription platforms.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fab fa-stripe text-purple-500 mr-2"></i>
                                                    Stripe Integration
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Extensive experience with Stripe integration including
                                                    Payment Intents, Setup Intents, and advanced Stripe features.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-ship text-blue-500 mr-2"></i>
                                                    Paddle Implementation
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Practical experience with Paddle integration for
                                                    applications requiring VAT handling and global compliance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                        My Experience with Laravel Cashier
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 3+ years of hands-on experience implementing Laravel Cashier,
                                            I've developed comprehensive expertise in subscription billing systems
                                            and payment processing workflows.
                                        </p>

                                        <h3>Specialized Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Multi-tier subscription plans</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Custom billing cycle configuration</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Webhook event handling and security</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Payment method management</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Invoice customization and branding</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Tax and VAT calculation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Subscription analytics and reporting</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Dunning management and failed payment handling</span>
                                            </div>
                                        </div>

                                        <h3>Payment Provider Expertise</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <div class="flex items-center mb-3">
                                                    <div class="w-10 h-10 rounded-lg bg-indigo-500 flex items-center justify-center text-white mr-3">
                                                        <i class="fab fa-stripe text-lg"></i>
                                                    </div>
                                                    <h4 class="text-lg font-bold">Stripe</h4>
                                                </div>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Payment Intents API implementation</li>
                                                    <li>• Setup Intents for SCA compliance</li>
                                                    <li>• 3D Secure authentication flows</li>
                                                    <li>• Stripe Connect for marketplaces</li>
                                                    <li>• Radar fraud prevention</li>
                                                </ul>
                                            </div>
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <div class="flex items-center mb-3">
                                                    <div class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                        <i class="fas fa-ship text-lg"></i>
                                                    </div>
                                                    <h4 class="text-lg font-bold">Paddle</h4>
                                                </div>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• VAT and tax handling automation</li>
                                                    <li>• Global compliance management</li>
                                                    <li>• Subscription analytics and metrics</li>
                                                    <li>• Checkout customization</li>
                                                    <li>• License key generation</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3>Implementation Projects</h3>
                                        <ul>
                                            <li><strong>SaaS Platform</strong> - Multi-tier subscription with annual/monthly billing</li>
                                            <li><strong>Marketplace Application</strong> - Stripe Connect integration with split payments</li>
                                            <li><strong>Content Platform</strong> - Paddle integration with global tax compliance</li>
                                            <li><strong>Enterprise Software</strong> - Custom billing cycles and invoice workflows</li>
                                            <li><strong>Mobile App Backend</strong> - Subscription management API with webhooks</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Advanced Features -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-purple-500 mr-3"></i>
                                        Advanced Implementation Features
                                    </h2>
                                    <div class="content-section">
                                        <h3>Complex Billing Scenarios</h3>
                                        <p>
                                            Beyond basic subscription management, I've implemented advanced billing scenarios:
                                        </p>
                                        <ul>
                                            <li><strong>Usage-based Billing</strong> - Metered billing with Stripe Billing</li>
                                            <li><strong>Multi-currency Support</strong> - Dynamic currency conversion and pricing</li>
                                            <li><strong>Custom Invoice Workflows</strong> - Branded invoices with custom logic</li>
                                            <li><strong>Subscription Analytics</strong> - MRR, churn rate, and lifetime value tracking</li>
                                            <li><strong>Dunning Management</strong> - Automated failed payment recovery</li>
                                            <li><strong>Trial Extensions</strong> - Flexible trial period management</li>
                                        </ul>

                                        <h3>Security & Compliance</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">PCI Compliance</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Implementation of secure payment flows following PCI DSS requirements
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">SCA Compliance</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Strong Customer Authentication implementation for European customers
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">Webhook Security</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Secure webhook handling with signature verification and idempotency
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-purple-500 mb-2">Data Protection</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    GDPR-compliant payment data handling and customer information management
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- GitHub Projects -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fab fa-github text-purple-500 mr-3"></i>
                                        Projects on GitHub
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Some of my Laravel Cashier implementations and subscription management projects
                                            can be found on GitHub:
                                        </p>
                                        <div class="mt-4">
                                            <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                                <i class="fab fa-github mr-2"></i>
                                                <span>SirAndrewGotham on GitHub</span>
                                            </a>
                                        </div>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            I continuously explore new Cashier features and share implementation patterns
                                            for complex subscription billing scenarios.
                                        </p>
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
                                                <span class="text-sm font-bold text-purple-500">78%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-violet-500"
                                                     data-width="78%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Stripe Integration</span>
                                                <span class="text-sm font-bold text-indigo-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-indigo-500" data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Paddle Integration</span>
                                                <span class="text-sm font-bold text-blue-500">70%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="70%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Subscription Logic</span>
                                                <span class="text-sm font-bold text-green-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Payment Security</span>
                                                <span class="text-sm font-bold text-red-500">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="75%" style="width: 0%"></div>
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
                                            <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-credit-card text-purple-500 w-5 mr-3"></i>
                                            <span class="text-sm">Providers: <strong>Stripe & Paddle</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-purple-500 w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>12+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-shield-alt text-purple-500 w-5 mr-3"></i>
                                            <span class="text-sm">Compliance: <strong>PCI DSS & SCA</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-globe text-purple-500 w-5 mr-3"></i>
                                            <span class="text-sm">Currencies: <strong>Multi-currency</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Implementation Types -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-cubes text-purple-500 mr-2"></i>
                                        Implementation Types
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">SaaS Subscription Platforms</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Marketplace Payment Systems</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Content Paywalls</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-spinner text-xs"></i>
                                            </div>
                                            <span class="text-sm">Usage-based Billing</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-clock text-xs"></i>
                                            </div>
                                            <span class="text-sm">Enterprise Billing Systems</span>
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
                                        <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-laravel text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-purple-500 transition-colors">Laravel</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-code text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-purple-500 transition-colors">API Development</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/security" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-shield-alt text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-purple-500 transition-colors">Security</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">82% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/saas" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-indigo-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-cloud text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-purple-500 transition-colors">SaaS Development</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-purple-500 to-violet-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Need Subscription Billing?</h3>
                                    <p class="text-sm mb-4">Let's build your payment system with Laravel Cashier</p>
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

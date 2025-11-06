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
                                        Laravel Nova
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="py-12 bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Icon and Basic Info -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FF2D20] to-[#E62E1A] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-cogs text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Laravel Nova</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-crown mr-1"></i>
                                            Admin Panel
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Administrative panel for application data management with elegant interface and powerful customization.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-[#FF2D20] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#FF2D20] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">2+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Experience since Nova 3.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#FF2D20] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v4.0+</div>
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
                            <!-- About Laravel Nova -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#FF2D20] mr-3"></i>
                                    About Laravel Nova
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Nova</strong> is a beautifully designed administration panel for Laravel applications,
                                        providing a full-featured interface for managing your application's data. Built with Vue.js and
                                        Tailwind CSS, Nova offers powerful tools for resource management, metrics, and custom actions.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Rapid Development</strong> — Generate complete admin panels in minutes, not days</li>
                                        <li><strong>Eloquent Integration</strong> — Seamless integration with Laravel's Eloquent ORM</li>
                                        <li><strong>Customizable Interface</strong> — Tailor the admin panel to specific business needs</li>
                                        <li><strong>Powerful Metrics</strong> — Built-in dashboard with customizable metrics and charts</li>
                                        <li><strong>Action System</strong> — Execute bulk actions and custom operations on resources</li>
                                        <li><strong>Lens & Filters</strong> — Advanced data filtering and custom query interfaces</li>
                                        <li><strong>Authorization</strong> — Integrated with Laravel's authorization system</li>
                                    </ul>

                                    <h3>Ideal Use Cases</h3>
                                    <p>
                                        Laravel Nova excels in scenarios requiring sophisticated administration interfaces:
                                    </p>
                                    <ul>
                                        <li>Content Management Systems (CMS)</li>
                                        <li>E-commerce platform administration</li>
                                        <li>Customer Relationship Management (CRM)</li>
                                        <li>Data analytics and reporting dashboards</li>
                                        <li>Multi-tenant application administration</li>
                                        <li>Internal business process management</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Laravel Nova Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#FF2D20] mr-3"></i>
                                    My Laravel Nova Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started working with Laravel Nova in 2021 with version 3.0, implementing administration panels
                                        for various client projects. Since then, I've progressed from basic resource management to
                                        building complex custom tools, metrics, and integrated dashboards for enterprise applications.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-[#FF2D20] mr-2"></i>
                                                Custom Dashboards
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Developed sophisticated dashboards with custom metrics,
                                                real-time data visualization, and business intelligence features.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-cube text-blue-500 mr-2"></i>
                                                Custom Tools & Cards
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Created custom Nova tools and cards for specialized
                                                business operations and third-party integrations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#FF2D20] mr-3"></i>
                                    My Laravel Nova Experience
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 2+ years of Laravel Nova experience across multiple projects, I've built comprehensive
                                        administration interfaces for various business domains, from simple content management
                                        to complex enterprise resource planning systems.
                                    </p>

                                    <h3>Specialized Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Resource Management & CRUD</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Custom Metrics & Dashboards</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Action System Implementation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Lens & Advanced Filtering</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Custom Field Development</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Tool & Card Development</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Authorization & Permissions</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Relationship Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Search & Global Search</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Third-party Integrations</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance Optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Multi-tenancy Support</span>
                                        </div>
                                    </div>

                                    <h3>Key Nova Projects</h3>
                                    <ul>
                                        <li><strong>E-commerce Admin Panel</strong> — Complete product, order, and customer management</li>
                                        <li><strong>Content Management System</strong> — Multi-user content administration with workflows</li>
                                        <li><strong>Analytics Dashboard</strong> — Custom metrics and real-time business intelligence</li>
                                        <li><strong>CRM Integration</strong> — Nova interface for customer relationship management</li>
                                        <li><strong>Multi-tenant Application</strong> — Resource management for SaaS platform</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Nova Features & Customization -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-[#FF2D20] mr-3"></i>
                                    Nova Features & Customization
                                </h2>
                                <div class="content-section">
                                    <h3>Core Nova Components</h3>
                                    <p>
                                        Expertise in leveraging Nova's powerful component system:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Resources</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Eloquent model administration with fields,
                                                actions, filters, and authorization rules.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Metrics</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Value, trend, and partition metrics for
                                                dashboard analytics and business intelligence.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Actions</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Bulk operations and custom business logic
                                                executed on selected resources.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Lenses</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Custom query interfaces for complex data
                                                views and specialized reporting.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Custom Development</h3>
                                    <p>
                                        Advanced customization capabilities:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Custom Fields</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Custom Tools</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Custom Cards</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Resource Tools</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Filters</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Dashboards</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Integration & Extensibility -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-puzzle-piece text-[#FF2D20] mr-3"></i>
                                    Integration & Extensibility
                                </h2>
                                <div class="content-section">
                                    <h3>Third-party Integrations</h3>
                                    <p>
                                        Experience integrating Nova with various services and tools:
                                    </p>
                                    <ul>
                                        <li><strong>Payment Processors</strong> — Stripe, PayPal administration interfaces</li>
                                        <li><strong>Analytics Services</strong> — Google Analytics, Mixpanel dashboards</li>
                                        <li><strong>Communication Tools</strong> — Email, SMS, and notification management</li>
                                        <li><strong>File Storage</strong> — AWS S3, DigitalOcean Spaces file management</li>
                                        <li><strong>CRM Systems</strong> — HubSpot, Salesforce data synchronization</li>
                                        <li><strong>Monitoring Tools</strong> — Error tracking and performance monitoring</li>
                                    </ul>

                                    <h3>Custom Package Development</h3>
                                    <p>
                                        Creating reusable Nova components and packages:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Custom Field Packages</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Tool Integration Packages</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Metric Calculation Packages</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Action Template Packages</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Filter Component Packages</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dashboard Widget Packages</span>
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
                                    <i class="fas fa-chart-bar text-[#FF2D20] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#FF2D20]">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF2D20] to-[#E62E1A]"
                                                 data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Resource Management</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Custom Tools</span>
                                            <span class="text-sm font-bold text-green-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Metrics & Dashboards</span>
                                            <span class="text-sm font-bold text-blue-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Integration</span>
                                            <span class="text-sm font-bold text-purple-500">68%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="68%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#FF2D20] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>2+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Nova 4.0+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cube text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Custom Tools: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tachometer-alt text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Dashboards: <strong>10+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#FF2D20] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                    <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-vuejs text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Vue.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                    <a href="/competences/eloquent" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Eloquent ORM</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#FF2D20] to-[#E62E1A] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need admin panel development?</h3>
                                <p class="text-sm mb-4">Ready to discuss Laravel Nova implementation</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF2D20] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

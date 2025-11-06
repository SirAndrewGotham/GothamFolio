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
                                <a href="/competences/devops" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    DevOps
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Linux Server Administration
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="py-12 bg-gradient-to-br from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Icon and Basic Info -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FCC624] to-[#E95420] flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-linux text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Linux Server</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-server mr-1"></i>
                                            Remote Administration
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Expert remote server administration for web applications with focus on security, performance, and reliability in production environments.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-[#E95420] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">90%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#E95420] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Experience since Ubuntu 10.04</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#E95420] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">Ubuntu 22.04</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Current LTS</div>
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
                            <!-- About Linux Server Administration -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#E95420] mr-3"></i>
                                    About Linux Server Administration
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Linux Server Administration</strong> involves managing remote Linux systems for web applications,
                                        focusing on security, performance optimization, and reliable operation. With expertise in Ubuntu Server
                                        and CentOS, I specialize in remote server management through SSH, automation, and monitoring.
                                    </p>

                                    <h3>Key Remote Administration Skills</h3>
                                    <ul>
                                        <li><strong>SSH Management</strong> — Secure remote access and key-based authentication</li>
                                        <li><strong>Server Security Hardening</strong> — Firewall configuration, fail2ban, and security updates</li>
                                        <li><strong>Performance Monitoring</strong> — Resource usage tracking and optimization</li>
                                        <li><strong>Automated Deployment</strong> — Scripting and CI/CD pipeline integration</li>
                                        <li><strong>Backup Strategies</strong> — Automated backup systems and disaster recovery</li>
                                        <li><strong>Service Management</strong> — Systemd, process monitoring, and service optimization</li>
                                        <li><strong>Network Configuration</strong> — Remote network troubleshooting and optimization</li>
                                    </ul>

                                    <h3>Remote Server Use Cases</h3>
                                    <p>
                                        Specialized in managing remote servers for various web application scenarios:
                                    </p>
                                    <ul>
                                        <li>Production web application hosting and scaling</li>
                                        <li>Database server administration and optimization</li>
                                        <li>Load-balanced application clusters</li>
                                        <li>CI/CD pipeline and build servers</li>
                                        <li>Monitoring and logging infrastructure</li>
                                        <li>Reverse proxy and caching servers</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Linux Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#E95420] mr-3"></i>
                                    My Linux Server Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started with Linux desktop in 2012 with Ubuntu 10.04 and transitioned to server administration in 2014.
                                        Since then, I've managed dozens of remote servers for web applications, progressing from basic VPS management
                                        to complex multi-server architectures with automated deployment and monitoring.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-terminal text-[#E95420] mr-2"></i>
                                                Remote Server Management
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Extensive experience managing remote servers via SSH, including performance tuning,
                                                security hardening, and automated maintenance tasks for production environments.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-shield-alt text-blue-500 mr-2"></i>
                                                Security Hardening
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementing comprehensive security measures including firewall configuration,
                                                intrusion detection, and regular security updates for remote servers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#E95420] mr-3"></i>
                                    My Linux Server Experience
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 10+ years of Linux experience and 8+ years focused on server administration,
                                        I've managed remote servers for various web applications, from small business sites
                                        to high-traffic production systems requiring 99.9% uptime.
                                    </p>

                                    <h3>Remote Administration Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>SSH Configuration and Key Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Firewall Configuration (UFW/iptables)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Server Monitoring and Alerting</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Automated Backup Systems</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance Tuning and Optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Security Hardening and Updates</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bash Scripting and Automation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Docker and Container Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>SSL Certificate Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Database Server Administration</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Web Server Configuration (Nginx/Apache)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CI/CD Pipeline Integration</span>
                                        </div>
                                    </div>

                                    <h3>Key Server Projects</h3>
                                    <ul>
                                        <li><strong>High-Traffic E-commerce Platform</strong> — Managed Ubuntu servers handling 10k+ daily users</li>
                                        <li><strong>Microservices Architecture</strong> — Multiple Ubuntu servers with Docker and orchestration</li>
                                        <li><strong>Database Cluster</strong> — MySQL replication across multiple CentOS servers</li>
                                        <li><strong>CI/CD Infrastructure</strong> — Automated deployment servers for development teams</li>
                                        <li><strong>Monitoring Stack</strong> — Server monitoring with Prometheus and Grafana</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Technical Details -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#E95420] mr-3"></i>
                                    Technical Details
                                </h2>
                                <div class="content-section">
                                    <h3>Server Management Tools</h3>
                                    <p>
                                        Proficient with essential tools for remote Linux server administration:
                                    </p>
                                    <ul>
                                        <li><strong>SSH & SCP</strong> — Secure remote access and file transfer</li>
                                        <li><strong>Bash Scripting</strong> — Automation of server tasks and deployments</li>
                                        <li><strong>Cron Jobs</strong> — Scheduled task automation</li>
                                        <li><strong>Systemd</strong> — Service management and monitoring</li>
                                        <li><strong>Log Management</strong> — System and application log analysis</li>
                                        <li><strong>Package Management</strong> — apt, yum, and software updates</li>
                                    </ul>

                                    <h3>Monitoring and Security</h3>
                                    <p>
                                        Comprehensive monitoring and security implementation:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">htop/atop</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">UFW/Fail2ban</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Logwatch</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Prometheus</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Grafana</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SSL Certbot</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Server Architecture -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-network-wired text-[#E95420] mr-3"></i>
                                    Server Architecture Experience
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Experience with various server architectures and deployment strategies for remote management:
                                    </p>

                                    <h3>Architecture Patterns</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#E95420] mb-2">Single Server Setup</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Complete web stack on single VPS with Nginx, PHP-FPM, MySQL, and Redis
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#E95420] mb-2">Load Balanced Cluster</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Multiple application servers behind load balancer with shared database
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#E95420] mb-2">Microservices</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Dockerized services with API gateway and service discovery
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#E95420] mb-2">Database Replication</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Master-slave and master-master database replication setups
                                            </p>
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
                                    <i class="fas fa-chart-bar text-[#E95420] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#E95420]">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FCC624] to-[#E95420]"
                                                 data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Remote Administration</span>
                                            <span class="text-sm font-bold text-green-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Security Hardening</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Performance Tuning</span>
                                            <span class="text-sm font-bold text-blue-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Automation</span>
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
                                    <i class="fas fa-lightbulb text-[#E95420] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>10+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Distro: <strong>Ubuntu/CentOS</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Servers Managed: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Security: <strong>Hardened</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Uptime: <strong>99.9%+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#E95420] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/nginx" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-server text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#E95420] transition-colors">Nginx</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#E95420] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#E95420] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#E95420] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#E95420] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#E95420] transition-colors"></i>
                                    </a>
                                    <a href="/competences/aws" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-aws text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#E95420] transition-colors">AWS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#E95420] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#FCC624] to-[#E95420] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need server administration?</h3>
                                <p class="text-sm mb-4">Ready to discuss Linux server management</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#E95420] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

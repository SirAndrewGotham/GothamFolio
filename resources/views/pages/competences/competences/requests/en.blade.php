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
                            <!-- About Requests -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#44A5CB] mr-3"></i>
                                    About Requests
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Requests</strong> is an elegant and simple HTTP library for Python, built for human beings.
                                        It abstracts the complexities of making HTTP requests behind a beautiful, simple API so that you
                                        can focus on interacting with services and consuming data in your application.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Human-Friendly API</strong> - Simple, intuitive methods for all HTTP verbs</li>
                                        <li><strong>Automatic Content Decoding</strong> - Automatic decoding of JSON, text, and other content types</li>
                                        <li><strong>SSL Verification</strong> - Built-in SSL certificate verification</li>
                                        <li><strong>Connection Pooling</strong> - Efficient connection reuse with keep-alive</li>
                                        <li><strong>Authentication Support</strong> - Basic, Digest, OAuth, and custom authentication</li>
                                        <li><strong>Session Support</strong> - Persistent sessions with cookies and headers</li>
                                        <li><strong>Timeout Handling</strong> - Configurable timeouts for reliable applications</li>
                                    </ul>

                                    <h3>Core Features</h3>
                                    <p>
                                        Requests provides a comprehensive set of features for HTTP communication:
                                    </p>
                                    <ul>
                                        <li><strong>HTTP Methods</strong> - GET, POST, PUT, DELETE, PATCH, HEAD, OPTIONS</li>
                                        <li><strong>Parameter Handling</strong> - URL parameters, form data, JSON payloads</li>
                                        <li><strong>Header Management</strong> - Custom headers and automatic content-type detection</li>
                                        <li><strong>Cookie Support</strong> - Automatic cookie handling and session management</li>
                                        <li><strong>Redirect Handling</strong> - Automatic redirect following with configurable limits</li>
                                        <li><strong>Error Handling</strong> - Built-in exception hierarchy for different error types</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Requests Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#44A5CB] mr-3"></i>
                                    My Journey with Requests
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started using Requests in 2019 and it quickly became my go-to library for all HTTP operations in Python.
                                        Over 5+ years, I've used it in hundreds of projects ranging from simple API calls to complex web scraping
                                        applications and production backend systems. Its elegant API design has influenced how I think about library design.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-cloud text-[#44A5CB] mr-2"></i>
                                                API Integration
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Extensive experience integrating with REST APIs,
                                                web services, and third-party platforms across various industries.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-spider text-purple-500 mr-2"></i>
                                                Web Scraping
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Built robust web scraping systems with proper session management,
                                                rate limiting, and error handling using Requests.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#44A5CB] mr-3"></i>
                                    My Experience with Requests
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 5+ years of extensive experience, I've mastered Requests for various HTTP communication
                                        scenarios and integrated it with numerous applications and systems.
                                    </p>

                                    <h3>Core Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>All HTTP methods and verb usage</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Session management and cookie handling</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Authentication mechanisms</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Error handling and exception management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>File uploads and multipart form data</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Response parsing and content handling</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Proxy configuration and SSL verification</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance optimization and connection pooling</span>
                                        </div>
                                    </div>

                                    <h3>HTTP Features Mastered</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">GET/POST</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Sessions</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Authentication</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Error Handling</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">File Upload</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Proxies</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Streaming</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SSL/TLS</span>
                                    </div>

                                    <h3>Advanced Usage Patterns</h3>
                                    <ul>
                                        <li><strong>Rate Limiting</strong> - Implementing custom rate limiting for API consumption</li>
                                        <li><strong>Retry Logic</strong> - Building robust retry mechanisms with exponential backoff</li>
                                        <li><strong>Streaming Responses</strong> - Handling large responses with streaming</li>
                                        <li><strong>Custom Authentication</strong> - Implementing complex authentication flows</li>
                                        <li><strong>Middleware Patterns</strong> - Creating request/response middleware</li>
                                        <li><strong>Connection Pooling</strong> - Optimizing performance with connection reuse</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- HTTP Methods & Usage -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-exchange-alt text-[#44A5CB] mr-3"></i>
                                    HTTP Methods & Usage Patterns
                                </h2>
                                <div class="content-section">
                                    <h3>Common HTTP Methods</h3>
                                    <p>
                                        Extensive experience with all major HTTP methods and their appropriate use cases:
                                    </p>
                                    <ul>
                                        <li><strong>GET</strong> - Retrieving data from servers, API endpoints, and web resources</li>
                                        <li><strong>POST</strong> - Creating new resources, submitting forms, and API data creation</li>
                                        <li><strong>PUT/PATCH</strong> - Updating existing resources with complete or partial data</li>
                                        <li><strong>DELETE</strong> - Removing resources from servers and APIs</li>
                                        <li><strong>HEAD</strong> - Retrieving headers without response body for efficiency</li>
                                        <li><strong>OPTIONS</strong> - Discovering available methods and CORS preflight requests</li>
                                    </ul>

                                    <h3>Data Handling</h3>
                                    <p>
                                        Mastered various data formats and payload types:
                                    </p>
                                    <ul>
                                        <li><strong>JSON Payloads</strong> - Automatic serialization and deserialization</li>
                                        <li><strong>Form Data</strong> - URL-encoded form submission and file uploads</li>
                                        <li><strong>Query Parameters</strong> - Dynamic URL parameter construction</li>
                                        <li><strong>Multipart Forms</strong> - Complex form data with files and fields</li>
                                        <li><strong>Binary Data</strong> - Handling file downloads and binary content</li>
                                        <li><strong>Streaming Data</strong> - Processing large responses efficiently</li>
                                    </ul>

                                    <h3>Response Processing</h3>
                                    <p>
                                        Comprehensive response handling and processing:
                                    </p>
                                    <ul>
                                        <li>Status code checking and validation</li>
                                        <li>Content type detection and automatic parsing</li>
                                        <li>Header inspection and manipulation</li>
                                        <li>Cookie extraction and management</li>
                                        <li>Encoding detection and text conversion</li>
                                        <li>Response streaming for large datasets</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Advanced Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#44A5CB] mr-3"></i>
                                    Advanced Features & Techniques
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I have extensive experience with Requests' advanced features for building robust applications:
                                    </p>

                                    <h3>Session Management</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#44A5CB] mb-2">Persistent Sessions</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Using Session objects for connection pooling,
                                                cookie persistence, and header reuse across requests
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#44A5CB] mb-2">Authentication Flows</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementing complex authentication sequences
                                                with token refresh and credential management
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#44A5CB] mb-2">Adapter Configuration</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Customizing HTTPAdapter for connection pooling,
                                                retry strategies, and SSL configuration
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#44A5CB] mb-2">Middleware Patterns</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Creating pre-request and post-response hooks
                                                for logging, monitoring, and transformation
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Error Handling & Resilience</h3>
                                    <ul>
                                        <li><strong>Exception Hierarchy</strong> - Handling different exception types appropriately</li>
                                        <li><strong>Retry Mechanisms</strong> - Implementing intelligent retry logic with backoff</li>
                                        <li><strong>Circuit Breaker Patterns</strong> - Preventing cascade failures in distributed systems</li>
                                        <li><strong>Timeout Management</strong> - Configuring appropriate timeouts for different scenarios</li>
                                        <li><strong>SSL Verification</strong> - Managing SSL certificates and verification levels</li>
                                        <li><strong>Proxy Configuration</strong> - Working with HTTP and SOCKS proxies</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Integration Patterns -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-project-diagram text-[#44A5CB] mr-3"></i>
                                    Integration Patterns & Use Cases
                                </h2>
                                <div class="content-section">
                                    <h3>API Integration</h3>
                                    <p>
                                        Extensive experience integrating with various types of APIs:
                                    </p>
                                    <ul>
                                        <li><strong>REST APIs</strong> - CRUD operations with proper HTTP semantics</li>
                                        <li><strong>GraphQL</strong> - Sending queries and mutations to GraphQL endpoints</li>
                                        <li><strong>OAuth 2.0</strong> - Implementing OAuth flows for third-party services</li>
                                        <li><strong>Webhook Handling</strong> - Receiving and processing webhook notifications</li>
                                        <li><strong>Rate-Limited APIs</strong> - Respecting and handling API rate limits</li>
                                        <li><strong>Paginated APIs</strong> - Navigating through paginated API responses</li>
                                    </ul>

                                    <h3>Web Scraping & Automation</h3>
                                    <p>
                                        Built robust web scraping systems using Requests:
                                    </p>
                                    <ul>
                                        <li><strong>Session Management</strong> - Maintaining state across multiple requests</li>
                                        <li><strong>Form Submission</strong> - Automating form filling and submission</li>
                                        <li><strong>JavaScript Handling</strong> - Working with JavaScript-heavy sites</li>
                                        <li><strong>Rate Limiting</strong> - Implementing polite scraping with delays</li>
                                        <li><strong>Proxy Rotation</strong> - Using multiple proxies to avoid blocking</li>
                                        <li><strong>CAPTCHA Handling</strong> - Integrating with CAPTCHA solving services</li>
                                    </ul>

                                    <h3>Production Applications</h3>
                                    <ul>
                                        <li><strong>Microservices Communication</strong> - Service-to-service HTTP calls</li>
                                        <li><strong>Data Pipeline Integration</strong> - Fetching data from external sources</li>
                                        <li><strong>Monitoring & Health Checks</strong> - Periodic health check requests</li>
                                        <li><strong>File Download/Upload</strong> - Handling file transfers via HTTP</li>
                                        <li><strong>Webhook Implementations</strong> - Sending webhook notifications</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Performance & Best Practices -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#44A5CB] mr-3"></i>
                                    Performance & Best Practices
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I have extensive experience optimizing Requests usage for performance and reliability:
                                    </p>

                                    <h3>Performance Optimization</h3>
                                    <ul>
                                        <li><strong>Connection Pooling</strong> - Reusing connections with Session objects</li>
                                        <li><strong>Keep-Alive</strong> - Leveraging HTTP keep-alive for reduced latency</li>
                                        <li><strong>Streaming Responses</strong> - Handling large responses without memory issues</li>
                                        <li><strong>Concurrent Requests</strong> - Using threading or asyncio for parallel requests</li>
                                        <li><strong>DNS Caching</strong> - Implementing DNS caching for faster resolution</li>
                                        <li><strong>Compression</strong> - Using gzip and other compression methods</li>
                                    </ul>

                                    <h3>Security Best Practices</h3>
                                    <ul>
                                        <li><strong>SSL/TLS Verification</strong> - Proper certificate validation</li>
                                        <li><strong>Credential Management</strong> - Secure handling of API keys and tokens</li>
                                        <li><strong>Input Validation</strong> - Validating URLs and parameters before requests</li>
                                        <li><strong>Header Security</strong> - Setting appropriate security headers</li>
                                        <li><strong>Proxy Security</strong> - Secure proxy configuration and authentication</li>
                                    </ul>

                                    <h3>Reliability Patterns</h3>
                                    <ul>
                                        <li><strong>Retry Strategies</strong> - Exponential backoff and jitter</li>
                                        <li><strong>Circuit Breakers</strong> - Preventing cascade failures</li>
                                        <li><strong>Timeout Configuration</strong> - Appropriate timeouts for different scenarios</li>
                                        <li><strong>Error Classification</strong> - Distinguishing between retryable and non-retryable errors</li>
                                        <li><strong>Monitoring & Logging</strong> - Comprehensive request logging and metrics</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- GitHub Projects -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#44A5CB] mr-3"></i>
                                    Projects on GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Some of my projects using Requests can be found on GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham on GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        I continuously work on projects that demonstrate practical applications
                                        of Requests for API integration, web scraping, and HTTP communication.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#44A5CB] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#44A5CB]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#44A5CB] to-[#2D8BBA]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">API Integration</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Session Management</span>
                                            <span class="text-sm font-bold text-blue-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Error Handling</span>
                                            <span class="text-sm font-bold text-purple-500">87%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="87%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Performance</span>
                                            <span class="text-sm font-bold text-red-500">83%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="83%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#44A5CB] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#44A5CB] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>5+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#44A5CB] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Requests 2.31+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#44A5CB] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-plug text-[#44A5CB] w-5 mr-3"></i>
                                        <span class="text-sm">APIs Integrated: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#44A5CB] w-5 mr-3"></i>
                                        <span class="text-sm">Status: <strong>Expert Level</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Learning Path -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#44A5CB] mr-2"></i>
                                    Learning Path
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Basic HTTP methods</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Response handling</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Session management</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Authentication flows</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Advanced error handling</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Performance optimization</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#44A5CB] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-python text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Python</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                    </a>
                                    <a href="/competences/flask" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-gray-600 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flask text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Flask</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                    </a>
                                    <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#44A5CB] transition-colors">API Development</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                    </a>
                                    <a href="/competences/web-scraping" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-spider text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Web Scraping</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#44A5CB] to-[#2D8BBA] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Interested in collaboration?</h3>
                                <p class="text-sm mb-4">Ready to discuss your API integration project</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#44A5CB] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

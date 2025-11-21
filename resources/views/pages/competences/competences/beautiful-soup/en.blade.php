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
                                    <a href="/competences/data-science" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Data Science
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Beautiful Soup
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#3A833A] to-[#4CAF50] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-code text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 beautifulsoup-gradient">Beautiful Soup</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-spider mr-1"></i>
                                            Web Scraping
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Python library for pulling data out of HTML and XML files.
                                    Provides Pythonic idioms for iterating, searching, and modifying the parse tree.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#3A833A] mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#3A833A] mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#3A833A] mr-3">
                                            <i class="fas fa-file-code"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v4.12+</div>
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
                                <!-- About Beautiful Soup -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#3A833A] mr-3"></i>
                                        About Beautiful Soup
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Beautiful Soup</strong> is a Python library for pulling data out of HTML and XML files.
                                            It works with your favorite parser to provide idiomatic ways of navigating, searching,
                                            and modifying the parse tree. It commonly saves programmers hours or days of work.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Parser Flexibility</strong> - Works with multiple parsers (lxml, html5lib, html.parser)</li>
                                            <li><strong>Pythonic API</strong> - Intuitive methods for navigating and searching parse trees</li>
                                            <li><strong>Robust Error Handling</strong> - Gracefully handles malformed HTML</li>
                                            <li><strong>Powerful Search</strong> - Advanced filtering with CSS selectors and custom functions</li>
                                            <li><strong>Encoding Support</strong> - Automatic encoding detection and conversion</li>
                                            <li><strong>Modification Capabilities</strong> - Modify the parse tree and output cleaned HTML</li>
                                            <li><strong>Integration Friendly</strong> - Works seamlessly with requests, urllib, and other libraries</li>
                                        </ul>

                                        <h3>Core Features</h3>
                                        <p>
                                            Beautiful Soup provides comprehensive tools for HTML/XML processing:
                                        </p>
                                        <ul>
                                            <li><strong>Tree Navigation</strong> - Navigate up, down, and sideways through the parse tree</li>
                                            <li><strong>Search Methods</strong> - find(), find_all(), and CSS selector support</li>
                                            <li><strong>Attribute Access</strong> - Easy access to tag attributes and contents</li>
                                            <li><strong>String Search</strong> - Search for strings with regular expressions</li>
                                            <li><strong>Tree Modification</strong> - Add, remove, and modify tags and attributes</li>
                                            <li><strong>Output Formatting</strong> - Pretty-print and output clean HTML/XML</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Beautiful Soup Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#3A833A] mr-3"></i>
                                        My Journey with Beautiful Soup
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I started using Beautiful Soup in 2020 for web scraping projects and quickly appreciated
                                            its elegant API design. Over 4+ years, I've used it in dozens of projects ranging from
                                            simple data extraction to complex web scraping systems. Its intuitive approach to HTML
                                            parsing has made it my go-to library for web data extraction tasks.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-database text-[#3A833A] mr-2"></i>
                                                    Data Extraction
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Extensive experience extracting structured data from
                                                    websites, news portals, and e-commerce platforms.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-industry text-purple-500 mr-2"></i>
                                                    Production Scraping
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Built robust scraping systems with error handling,
                                                    rate limiting, and data validation for production use.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#3A833A] mr-3"></i>
                                        My Experience with Beautiful Soup
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 4+ years of extensive experience, I've mastered Beautiful Soup for various
                                            web scraping and HTML parsing scenarios across different domains and complexity levels.
                                        </p>

                                        <h3>Core Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>HTML parsing and navigation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Advanced search and filtering</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>CSS selector usage</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Data extraction patterns</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Error handling and robustness</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Parser selection and optimization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Integration with requests/selenium</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Performance optimization</span>
                                            </div>
                                        </div>

                                        <h3>Parsing Techniques</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">find/find_all</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">CSS Selectors</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Tree Navigation</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Regex Filters</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Attribute Access</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">String Search</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Parser Selection</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Encoding</span>
                                        </div>

                                        <h3>Advanced Usage Patterns</h3>
                                        <ul>
                                            <li><strong>Complex Data Extraction</strong> - Multi-level data extraction from nested structures</li>
                                            <li><strong>Dynamic Content Handling</strong> - Integration with Selenium for JavaScript-heavy sites</li>
                                            <li><strong>Data Validation</strong> - Implementing data quality checks during extraction</li>
                                            <li><strong>Incremental Scraping</strong> - Resuming interrupted scraping sessions</li>
                                            <li><strong>Custom Filters</strong> - Creating custom filter functions for complex matching</li>
                                            <li><strong>Performance Optimization</strong> - Optimizing parser selection and search patterns</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Parsing Techniques -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-sitemap text-[#3A833A] mr-3"></i>
                                        Parsing Techniques & Methods
                                    </h2>
                                    <div class="content-section">
                                        <h3>Search Methods</h3>
                                        <p>
                                            Extensive experience with Beautiful Soup's comprehensive search capabilities:
                                        </p>
                                        <ul>
                                            <li><strong>find() & find_all()</strong> - Primary methods for locating elements</li>
                                            <li><strong>CSS Selectors</strong> - Using select() and select_one() for CSS-style selection</li>
                                            <li><strong>Attribute Filtering</strong> - Filtering by attributes, classes, and custom data</li>
                                            <li><strong>Text Search</strong> - Finding elements by text content and patterns</li>
                                            <li><strong>Regular Expressions</strong> - Using regex patterns for complex matching</li>
                                            <li><strong>Custom Functions</strong> - Creating filter functions for advanced selection</li>
                                        </ul>

                                        <h3>Navigation Methods</h3>
                                        <p>
                                            Mastered tree navigation for complex document structures:
                                        </p>
                                        <ul>
                                            <li><strong>Parent Navigation</strong> - parent, parents properties for upward navigation</li>
                                            <li><strong>Sibling Navigation</strong> - next_sibling, previous_sibling for horizontal movement</li>
                                            <li><strong>Child Navigation</strong> - children, descendants for downward navigation</li>
                                            <li><strong>Tree Traversal</strong> - Using generators for efficient tree traversal</li>
                                            <li><strong>Content Access</strong> - Accessing text, strings, and stripped strings</li>
                                            <li><strong>Tag Properties</strong> - Working with name, attributes, and contents</li>
                                        </ul>

                                        <h3>Parser Selection</h3>
                                        <p>
                                            Experience with different parsers and their trade-offs:
                                        </p>
                                        <ul>
                                            <li><strong>lxml</strong> - Fast and lenient parser for most use cases</li>
                                            <li><strong>html.parser</strong> - Built-in parser, no external dependencies</li>
                                            <li><strong>html5lib</strong> - Most lenient parser for badly formed HTML</li>
                                            <li><strong>Parser Comparison</strong> - Understanding speed vs. robustness trade-offs</li>
                                            <li><strong>Custom Parser Configuration</strong> - Configuring parsers for specific needs</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Advanced Features -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#3A833A] mr-3"></i>
                                        Advanced Features & Techniques
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I have extensive experience with Beautiful Soup's advanced features for complex scraping scenarios:
                                        </p>

                                        <h3>Complex Data Extraction</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#3A833A] mb-2">Multi-level Extraction</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Extracting data from complex nested structures
                                                    with multiple levels of parent-child relationships
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#3A833A] mb-2">Conditional Logic</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Implementing complex conditional logic for
                                                    extracting data based on multiple criteria
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#3A833A] mb-2">Data Transformation</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Transforming extracted data into structured formats
                                                    like JSON, CSV, or database-ready formats
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#3A833A] mb-2">Error Recovery</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Implementing robust error recovery mechanisms
                                                    for handling malformed or changing HTML structures
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Performance Optimization</h3>
                                        <ul>
                                            <li><strong>Parser Selection</strong> - Choosing the right parser for performance needs</li>
                                            <li><strong>Efficient Searching</strong> - Optimizing search patterns for speed</li>
                                            <li><strong>Selective Parsing</strong> - Parsing only necessary parts of documents</li>
                                            <li><strong>Caching Strategies</strong> - Implementing caching for repeated requests</li>
                                            <li><strong>Memory Management</strong> - Handling large documents efficiently</li>
                                            <li><strong>Concurrent Processing</strong> - Using threading for parallel processing</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Integration Patterns -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-project-diagram text-[#3A833A] mr-3"></i>
                                        Integration Patterns & Use Cases
                                    </h2>
                                    <div class="content-section">
                                        <h3>Web Scraping Workflows</h3>
                                        <p>
                                            Extensive experience building complete web scraping solutions:
                                        </p>
                                        <ul>
                                            <li><strong>Requests Integration</strong> - Combining Beautiful Soup with requests for HTTP</li>
                                            <li><strong>Selenium Integration</strong> - Handling JavaScript-heavy sites with Selenium</li>
                                            <li><strong>Scrapy Integration</strong> - Using Beautiful Soup within Scrapy spiders</li>
                                            <li><strong>API Combination</strong> - Combining scraping with API data for comprehensive datasets</li>
                                            <li><strong>Data Pipelines</strong> - Building end-to-end data extraction and processing pipelines</li>
                                            <li><strong>Monitoring Systems</strong> - Creating monitoring systems for website changes</li>
                                        </ul>

                                        <h3>Common Use Cases</h3>
                                        <p>
                                            Applied Beautiful Soup to various real-world scenarios:
                                        </p>
                                        <ul>
                                            <li><strong>E-commerce Scraping</strong> - Product data, prices, reviews, and availability</li>
                                            <li><strong>News Aggregation</strong> - Extracting articles, headlines, and metadata</li>
                                            <li><strong>Social Media Monitoring</strong> - Public data from social platforms</li>
                                            <li><strong>Job Board Scraping</strong> - Job listings, requirements, and company information</li>
                                            <li><strong>Real Estate Data</strong> - Property listings, prices, and features</li>
                                            <li><strong>Financial Data</strong> - Stock prices, financial reports, and market data</li>
                                        </ul>

                                        <h3>Data Processing</h3>
                                        <ul>
                                            <li><strong>Data Cleaning</strong> - Cleaning and normalizing extracted data</li>
                                            <li><strong>Data Validation</strong> - Implementing validation rules for data quality</li>
                                            <li><strong>Data Transformation</strong> - Converting HTML data to structured formats</li>
                                            <li><strong>Data Storage</strong> - Storing extracted data in databases and files</li>
                                            <li><strong>Data Analysis</strong> - Preparing data for analysis and visualization</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Best Practices -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-shield-alt text-[#3A833A] mr-3"></i>
                                        Best Practices & Ethics
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I follow industry best practices and ethical guidelines for web scraping:
                                        </p>

                                        <h3>Technical Best Practices</h3>
                                        <ul>
                                            <li><strong>Robust Error Handling</strong> - Graceful handling of network and parsing errors</li>
                                            <li><strong>Rate Limiting</strong> - Respectful scraping with appropriate delays</li>
                                            <li><strong>User-Agent Rotation</strong> - Using realistic user agents and headers</li>
                                            <li><strong>Session Management</strong> - Efficient session and connection management</li>
                                            <li><strong>Data Validation</strong> - Validating extracted data for quality assurance</li>
                                            <li><strong>Logging & Monitoring</strong> - Comprehensive logging for debugging and monitoring</li>
                                        </ul>

                                        <h3>Ethical Scraping</h3>
                                        <ul>
                                            <li><strong>robots.txt Compliance</strong> - Respecting website scraping policies</li>
                                            <li><strong>Rate Limiting</strong> - Avoiding server overload with polite scraping</li>
                                            <li><strong>Terms of Service</strong> - Adhering to website terms and conditions</li>
                                            <li><strong>Data Usage</strong> - Using scraped data responsibly and legally</li>
                                            <li><strong>Attribution</strong> - Properly attributing data sources when required</li>
                                            <li><strong>Private Data</strong> - Avoiding scraping of private or sensitive information</li>
                                        </ul>

                                        <h3>Legal Considerations</h3>
                                        <ul>
                                            <li>Understanding copyright and database rights</li>
                                            <li>Complying with data protection regulations (GDPR, CCPA)</li>
                                            <li>Respecting intellectual property rights</li>
                                            <li>Understanding jurisdictional differences</li>
                                            <li>Seeking permission when appropriate</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- GitHub Projects -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fab fa-github text-[#3A833A] mr-3"></i>
                                        Projects on GitHub
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Some of my web scraping projects using Beautiful Soup can be found on GitHub:
                                        </p>
                                        <div class="mt-4">
                                            <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                                <i class="fab fa-github mr-2"></i>
                                                <span>SirAndrewGotham on GitHub</span>
                                            </a>
                                        </div>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            I continuously work on web scraping projects that demonstrate practical applications
                                            of Beautiful Soup for data extraction, monitoring, and automation tasks.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#3A833A] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-[#3A833A]">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#3A833A] to-[#4CAF50]"
                                                     data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">HTML Parsing</span>
                                                <span class="text-sm font-bold text-green-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">CSS Selectors</span>
                                                <span class="text-sm font-bold text-blue-500">82%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="82%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Data Extraction</span>
                                                <span class="text-sm font-bold text-purple-500">83%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="83%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Performance</span>
                                                <span class="text-sm font-bold text-red-500">78%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="78%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#3A833A] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#3A833A] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-[#3A833A] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>Beautiful Soup 4.12+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#3A833A] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>40+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-file-code text-[#3A833A] w-5 mr-3"></i>
                                            <span class="text-sm">Websites Scraped: <strong>100+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-rocket text-[#3A833A] w-5 mr-3"></i>
                                            <span class="text-sm">Status: <strong>Expert Level</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Learning Path -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-graduation-cap text-[#3A833A] mr-2"></i>
                                        Learning Path
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Basic HTML parsing</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">find() and find_all()</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">CSS selector usage</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Tree navigation</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Advanced filtering</span>
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
                                        <i class="fas fa-network-wired text-[#3A833A] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-python text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#3A833A] transition-colors">Python</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                        </a>
                                        <a href="/competences/requests" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-[#44A5CB] flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-globe text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#3A833A] transition-colors">Requests</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                        </a>
                                        <a href="/competences/selenium" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-desktop text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#3A833A] transition-colors">Selenium</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                        </a>
                                        <a href="/competences/pandas" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-table text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#3A833A] transition-colors">Pandas</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#3A833A] to-[#4CAF50] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Interested in collaboration?</h3>
                                    <p class="text-sm mb-4">Ready to discuss your web scraping project</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#3A833A] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

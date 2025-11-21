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
                            <!-- About Pandas -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#150458] mr-3"></i>
                                    About Pandas
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Pandas</strong> is an open-source data analysis and manipulation tool built on top of Python.
                                        It provides fast, flexible, and expressive data structures designed to make working with
                                        structured (tabular, multidimensional, potentially heterogeneous) and time series data
                                        both easy and intuitive.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>DataFrame Object</strong> - Two-dimensional labeled data structure with columns of potentially different types</li>
                                        <li><strong>Data Alignment</strong> - Automatic and explicit data alignment</li>
                                        <li><strong>Flexible Reshaping</strong> - Pivot tables, melting, and hierarchical indexing</li>
                                        <li><strong>Time Series Functionality</strong> - Date range generation, frequency conversion, moving window statistics</li>
                                        <li><strong>Powerful I/O Tools</strong> - Read/write from CSV, Excel, databases, and more</li>
                                        <li><strong>Missing Data Handling</strong> - Comprehensive handling of missing data</li>
                                        <li><strong>GroupBy Operations</strong> - Split-apply-combine operations on data sets</li>
                                    </ul>

                                    <h3>Core Data Structures</h3>
                                    <p>
                                        Pandas provides two primary data structures that make data manipulation intuitive:
                                    </p>
                                    <ul>
                                        <li><strong>Series</strong> - One-dimensional labeled array capable of holding any data type</li>
                                        <li><strong>DataFrame</strong> - Two-dimensional labeled data structure with columns of potentially different types</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Pandas Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#150458] mr-3"></i>
                                    My Journey with Pandas
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started using Pandas in 2020 as part of my data analytics journey. Over 4+ years,
                                        I've applied it across various domains including business intelligence, financial analysis,
                                        and scientific research. My experience ranges from simple data cleaning tasks to complex
                                        data transformation pipelines.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-chart-line text-[#150458] mr-2"></i>
                                                Data Analysis Projects
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Extensive experience in exploratory data analysis, statistical analysis,
                                                and creating data-driven insights using Pandas for various business domains.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-database text-purple-500 mr-2"></i>
                                                Data Pipeline Development
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Built robust data processing pipelines for ETL operations,
                                                data validation, and transformation workflows using Pandas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#150458] mr-3"></i>
                                    My Experience with Pandas
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 4+ years of hands-on experience, I've mastered Pandas for various data manipulation
                                        and analysis tasks across different industries and project types.
                                    </p>

                                    <h3>Core Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Data cleaning and preprocessing</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Data transformation and manipulation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Time series analysis</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>GroupBy operations and aggregations</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Merging and joining datasets</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Handling missing data</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance optimization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integration with visualization libraries</span>
                                        </div>
                                    </div>

                                    <h3>Technical Stack</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">DataFrames</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Series</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">GroupBy</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Pivot Tables</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Time Series</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">MultiIndex</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Merge/Join</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">I/O Operations</span>
                                    </div>

                                    <h3>Common Operations Mastered</h3>
                                    <ul>
                                        <li><strong>Data Cleaning</strong> - Handling missing values, data type conversion, outlier detection</li>
                                        <li><strong>Data Transformation</strong> - Filtering, sorting, grouping, aggregation operations</li>
                                        <li><strong>Time Series Analysis</strong> - Resampling, rolling windows, date/time operations</li>
                                        <li><strong>Data Integration</strong> - Merging multiple datasets, concatenation, joins</li>
                                        <li><strong>Performance Optimization</strong> - Vectorized operations, method chaining, memory optimization</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Real-world Applications -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-chart-bar text-[#150458] mr-3"></i>
                                    Real-world Applications
                                </h2>
                                <div class="content-section">
                                    <h3>Business Intelligence</h3>
                                    <p>
                                        Used Pandas extensively for business analytics, including sales analysis, customer segmentation,
                                        and performance metrics calculation. Created automated reporting systems that process raw data
                                        and generate actionable insights.
                                    </p>

                                    <h3>Financial Analysis</h3>
                                    <p>
                                        Applied Pandas for financial data analysis including stock price analysis, portfolio optimization,
                                        risk assessment, and time series forecasting. Implemented complex financial calculations and
                                        performance metrics.
                                    </p>

                                    <h3>Scientific Research</h3>
                                    <p>
                                        Utilized Pandas for processing and analyzing scientific data, including experimental results,
                                        sensor data, and research datasets. Created reproducible analysis workflows for academic research.
                                    </p>

                                    <h3>Data Pipeline Development</h3>
                                    <p>
                                        Built robust ETL pipelines using Pandas for data validation, transformation, and loading operations.
                                        Integrated with various data sources including databases, APIs, and file systems.
                                    </p>
                                </div>
                            </div>

                            <!-- Performance Optimization -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#150458] mr-3"></i>
                                    Performance & Optimization
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I have extensive experience optimizing Pandas operations for performance and memory efficiency:
                                    </p>
                                    <ul>
                                        <li><strong>Vectorized Operations</strong> - Utilizing NumPy-based operations for maximum performance</li>
                                        <li><strong>Method Chaining</strong> - Writing efficient and readable code using method chaining</li>
                                        <li><strong>Memory Optimization</strong> - Using appropriate data types to reduce memory usage</li>
                                        <li><strong>Parallel Processing</strong> - Implementing multiprocessing for large datasets</li>
                                        <li><strong>Categorical Data</strong> - Using categorical data types for memory efficiency</li>
                                        <li><strong>Query Optimization</strong> - Writing efficient queries and filters</li>
                                    </ul>

                                    <h3>Advanced Techniques</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#150458] mb-2">Custom Functions</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Creating and applying custom functions with apply(), map(), and vectorize()
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#150458] mb-2">Window Operations</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementing rolling, expanding, and exponential window operations
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#150458] mb-2">MultiIndex</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Working with hierarchical indices for complex data structures
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#150458] mb-2">Memory Management</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Optimizing data types and using sparse data structures
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub Projects -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#150458] mr-3"></i>
                                    Projects on GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Some of my Pandas projects can be found on GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham on GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        I continuously work on data analysis projects that demonstrate practical applications
                                        of Pandas for real-world problems and datasets.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#150458] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#150458]">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#150458] to-[#2D5B8F]"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Data Manipulation</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Time Series Analysis</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Performance Optimization</span>
                                            <span class="text-sm font-bold text-purple-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Data Integration</span>
                                            <span class="text-sm font-bold text-red-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#150458] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#150458] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#150458] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Pandas 2.1+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#150458] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-database text-[#150458] w-5 mr-3"></i>
                                        <span class="text-sm">Data Sources: <strong>CSV, Excel, SQL, JSON</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#150458] w-5 mr-3"></i>
                                        <span class="text-sm">Status: <strong>Active Development</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Learning Path -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#150458] mr-2"></i>
                                    Learning Path
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Basic DataFrame operations</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Data cleaning and preprocessing</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">GroupBy and aggregation</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Time series analysis</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Advanced performance optimization</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Custom extensions and plugins</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#150458] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-python text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#150458] transition-colors">Python</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                    </a>
                                    <a href="/competences/numpy" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-cube text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#150458] transition-colors">NumPy</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                    </a>
                                    <a href="/competences/matplotlib" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-area text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#150458] transition-colors">Matplotlib</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                    </a>
                                    <a href="/competences/sql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#150458] transition-colors">SQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#150458] to-[#2D5B8F] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Interested in collaboration?</h3>
                                <p class="text-sm mb-4">Ready to discuss your data analysis project</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#150458] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

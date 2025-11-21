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
                                        Matplotlib
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-blue-50 to-teal-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#11557C] to-[#2D5B8F] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-chart-line text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 matplotlib-gradient">Matplotlib</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-palette mr-1"></i>
                                            Data Visualization
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Comprehensive data visualization library for Python.
                                    Create static, animated, and interactive visualizations with publication-quality output.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#11557C] mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#11557C] mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#11557C] mr-3">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.7+</div>
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
                                <!-- About Matplotlib -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#11557C] mr-3"></i>
                                        About Matplotlib
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Matplotlib</strong> is a comprehensive library for creating static, animated, and interactive
                                            visualizations in Python. It provides a MATLAB-like interface and object-oriented API for embedding
                                            plots into applications using general-purpose GUI toolkits.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Publication Quality</strong> - High-quality output in various formats (PDF, SVG, PNG, etc.)</li>
                                            <li><strong>Customizable</strong> - Complete control over every element of the plot</li>
                                            <li><strong>Multiple Interfaces</strong> - pyplot (MATLAB-style) and object-oriented API</li>
                                            <li><strong>Wide Range of Plots</strong> - Line plots, scatter plots, bar charts, histograms, etc.</li>
                                            <li><strong>Interactive Features</strong> - Zoom, pan, and customize plots interactively</li>
                                            <li><strong>Extensible</strong> - Customize every aspect of plots and create new plot types</li>
                                            <li><strong>Integration</strong> - Works seamlessly with NumPy, Pandas, and Jupyter notebooks</li>
                                        </ul>

                                        <h3>Plotting Interfaces</h3>
                                        <p>
                                            Matplotlib provides multiple ways to create visualizations:
                                        </p>
                                        <ul>
                                            <li><strong>pyplot Interface</strong> - MATLAB-style state-based interface for quick plotting</li>
                                            <li><strong>Object-Oriented Interface</strong> - More control and flexibility for complex plots</li>
                                            <li><strong>pylab Interface</strong> - Combines pyplot and NumPy (less recommended)</li>
                                            <li><strong>Scripting Layer</strong> - Quick and easy plotting for exploratory data analysis</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Matplotlib Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#11557C] mr-3"></i>
                                        My Journey with Matplotlib
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I started using Matplotlib in 2021 as my primary data visualization tool for Python.
                                            Over 3+ years, I've created hundreds of plots for data analysis, scientific research,
                                            and business reporting. My experience ranges from quick exploratory plots to complex
                                            publication-quality figures.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-blue-50 to-teal-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-chart-bar text-[#11557C] mr-2"></i>
                                                    Data Analysis & Reporting
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Extensive experience creating visualizations for data exploration,
                                                    analysis reports, and business intelligence dashboards.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-graduation-cap text-purple-500 mr-2"></i>
                                                    Scientific Visualization
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Created publication-quality figures for scientific research,
                                                    including complex multi-panel plots and specialized visualizations.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#11557C] mr-3"></i>
                                        My Experience with Matplotlib
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 3+ years of hands-on experience, I've mastered Matplotlib for various
                                            data visualization tasks across different domains and project types.
                                        </p>

                                        <h3>Core Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Basic plot types (line, scatter, bar, histogram)</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Customizing plot aesthetics and styles</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Multiple subplots and figure layout</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Annotations and text formatting</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Color maps and color bars</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Plot saving and export formats</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Interactive plotting features</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Integration with Jupyter notebooks</span>
                                            </div>
                                        </div>

                                        <h3>Plot Types Mastered</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Line Plots</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Scatter Plots</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Bar Charts</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Histograms</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Pie Charts</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Box Plots</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Heatmaps</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Contour Plots</span>
                                        </div>

                                        <h3>Advanced Features</h3>
                                        <ul>
                                            <li><strong>Custom Styles</strong> - Creating and applying custom plot styles and rcParams</li>
                                            <li><strong>Animation</strong> - Creating animated plots and visualizations</li>
                                            <li><strong>3D Plotting</strong> - Basic 3D surface and scatter plots</li>
                                            <li><strong>GridSpec</strong> - Complex subplot arrangements using GridSpec</li>
                                            <li><strong>Custom Transformations</strong> - Applying custom coordinate transformations</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Plot Customization -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-paint-brush text-[#11557C] mr-3"></i>
                                        Plot Customization & Styling
                                    </h2>
                                    <div class="content-section">
                                        <h3>Aesthetic Customization</h3>
                                        <p>
                                            Extensive experience customizing every aspect of Matplotlib plots:
                                        </p>
                                        <ul>
                                            <li>Line styles, colors, and markers customization</li>
                                            <li>Axis limits, ticks, and labels formatting</li>
                                            <li>Legend customization and placement</li>
                                            <li>Grid lines and background styling</li>
                                            <li>Text annotations and mathematical expressions</li>
                                            <li>Color maps and color bar customization</li>
                                        </ul>

                                        <h3>Style Management</h3>
                                        <p>
                                            Mastered Matplotlib's style system for consistent and professional-looking plots:
                                        </p>
                                        <ul>
                                            <li>Using built-in styles (ggplot, seaborn, etc.)</li>
                                            <li>Creating custom style sheets</li>
                                            <li>Runtime configuration (rcParams)</li>
                                            <li>Color cycle customization</li>
                                            <li>Font and text property management</li>
                                        </ul>

                                        <h3>Publication Quality</h3>
                                        <p>
                                            Experience creating plots suitable for academic publications and professional reports:
                                        </p>
                                        <ul>
                                            <li>High-resolution output in various formats</li>
                                            <li>Proper sizing for different publication requirements</li>
                                            <li>Accessible color schemes and contrast</li>
                                            <li>Clear and informative labeling</li>
                                            <li>Multi-panel figure composition</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Integration & Workflow -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-project-diagram text-[#11557C] mr-3"></i>
                                        Integration & Workflow
                                    </h2>
                                    <div class="content-section">
                                        <h3>Data Science Workflow</h3>
                                        <p>
                                            Seamless integration with the Python data science ecosystem:
                                        </p>
                                        <ul>
                                            <li><strong>NumPy Integration</strong> - Direct plotting of NumPy arrays</li>
                                            <li><strong>Pandas Integration</strong> - Plotting directly from DataFrames and Series</li>
                                            <li><strong>Jupyter Integration</strong> - Interactive plotting in notebooks</li>
                                            <li><strong>Seaborn Integration</strong> - Using Matplotlib as backend for Seaborn</li>
                                            <li><strong>SciPy Integration</strong> - Visualizing scientific computations</li>
                                        </ul>

                                        <h3>Backend Systems</h3>
                                        <p>
                                            Experience with different Matplotlib backends for various use cases:
                                        </p>
                                        <ul>
                                            <li><strong>Agg Backend</strong> - For file output (PNG, PDF, SVG)</li>
                                            <li><strong>TkAgg Backend</strong> - For interactive Tkinter applications</li>
                                            <li><strong>WebAgg Backend</strong> - For web-based applications</li>
                                            <li><strong>Inline Backend</strong> - For Jupyter notebook display</li>
                                            <li><strong>Qt5Agg Backend</strong> - For PyQt/PySide applications</li>
                                        </ul>

                                        <h3>Export Formats</h3>
                                        <p>
                                            Mastered exporting plots in various formats for different purposes:
                                        </p>
                                        <ul>
                                            <li><strong>PNG/JPG</strong> - For web and digital presentations</li>
                                            <li><strong>PDF</strong> - For publications and print materials</li>
                                            <li><strong>SVG</strong> - For scalable vector graphics</li>
                                            <li><strong>EPS</strong> - For LaTeX documents</li>
                                            <li><strong>Interactive HTML</strong> - For web applications</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Advanced Techniques -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-magic text-[#11557C] mr-3"></i>
                                        Advanced Techniques
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I have extensive experience with advanced Matplotlib techniques for complex visualizations:
                                        </p>

                                        <h3>Custom Plot Elements</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#11557C] mb-2">Patches & Shapes</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Creating custom shapes, polygons, and geometric elements
                                                    using Matplotlib patches
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#11557C] mb-2">Custom Transformations</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Applying affine transformations and custom coordinate
                                                    systems for specialized visualizations
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#11557C] mb-2">Event Handling</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Implementing interactive features with mouse events,
                                                    key presses, and custom callbacks
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#11557C] mb-2">Animation</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Creating animated visualizations using FuncAnimation
                                                    and custom animation classes
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Specialized Plot Types</h3>
                                        <ul>
                                            <li><strong>Polar Plots</strong> - Circular coordinate system visualizations</li>
                                            <li><strong>Stream Plots</strong> - Vector field visualization</li>
                                            <li><strong>Quiver Plots</strong> - 2D field of arrows</li>
                                            <li><strong>Fill Between</strong> - Area filling between curves</li>
                                            <li><strong>Error Bars</strong> - Statistical uncertainty visualization</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- GitHub Projects -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fab fa-github text-[#11557C] mr-3"></i>
                                        Projects on GitHub
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Some of my Matplotlib visualization projects can be found on GitHub:
                                        </p>
                                        <div class="mt-4">
                                            <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                                <i class="fab fa-github mr-2"></i>
                                                <span>SirAndrewGotham on GitHub</span>
                                            </a>
                                        </div>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            I continuously work on data visualization projects that demonstrate practical applications
                                            of Matplotlib for exploratory data analysis, scientific research, and business reporting.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#11557C] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-[#11557C]">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#11557C] to-[#2D5B8F]"
                                                     data-width="75%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Plot Customization</span>
                                                <span class="text-sm font-bold text-green-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Multiple Subplots</span>
                                                <span class="text-sm font-bold text-blue-500">78%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Publication Quality</span>
                                                <span class="text-sm font-bold text-purple-500">72%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="72%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Interactive Features</span>
                                                <span class="text-sm font-bold text-red-500">70%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="70%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#11557C] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#11557C] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-[#11557C] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>Matplotlib 3.7+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#11557C] w-5 mr-3"></i>
                                            <span class="text-sm">Plots Created: <strong>500+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-palette text-[#11557C] w-5 mr-3"></i>
                                            <span class="text-sm">Plot Types: <strong>20+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-file-export text-[#11557C] w-5 mr-3"></i>
                                            <span class="text-sm">Export Formats: <strong>PNG, PDF, SVG</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Learning Path -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-graduation-cap text-[#11557C] mr-2"></i>
                                        Learning Path
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Basic plot types</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Plot customization</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Multiple subplots</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Style management</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-spinner text-xs"></i>
                                            </div>
                                            <span class="text-sm">Advanced customization</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-clock text-xs"></i>
                                            </div>
                                            <span class="text-sm">Interactive applications</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#11557C] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-python text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#11557C] transition-colors">Python</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                        </a>
                                        <a href="/competences/pandas" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-table text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#11557C] transition-colors">Pandas</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                        </a>
                                        <a href="/competences/numpy" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-[#4D77CB] flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-calculator text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#11557C] transition-colors">NumPy</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">78% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                        </a>
                                        <a href="/competences/seaborn" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-chart-pie text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#11557C] transition-colors">Seaborn</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">65% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#11557C] to-[#2D5B8F] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Interested in collaboration?</h3>
                                    <p class="text-sm mb-4">Ready to discuss your data visualization project</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#11557C] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

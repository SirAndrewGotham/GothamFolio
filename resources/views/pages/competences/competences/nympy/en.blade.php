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
                                        NumPy
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4D77CB] to-[#2D5B8F] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-calculator text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 numpy-gradient">NumPy</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-rocket mr-1"></i>
                                            High Performance
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Fundamental package for scientific computing with Python.
                                    Provides powerful N-dimensional array objects and mathematical functions.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#4D77CB] mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#4D77CB] mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#4D77CB] mr-3">
                                            <i class="fas fa-microchip"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.24+</div>
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
                                <!-- About NumPy -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#4D77CB] mr-3"></i>
                                        About NumPy
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>NumPy</strong> is the fundamental package for scientific computing in Python.
                                            It provides a powerful N-dimensional array object, sophisticated broadcasting functions,
                                            tools for integrating C/C++ and Fortran code, and useful linear algebra, Fourier transform,
                                            and random number capabilities.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>N-dimensional Array</strong> - Powerful data structure for numerical computations</li>
                                            <li><strong>Vectorized Operations</strong> - Fast element-wise operations without Python loops</li>
                                            <li><strong>Broadcasting</strong> - Smart handling of arrays with different shapes</li>
                                            <li><strong>Linear Algebra</strong> - Comprehensive linear algebra operations</li>
                                            <li><strong>Mathematical Functions</strong> - Extensive collection of mathematical operations</li>
                                            <li><strong>Memory Efficiency</strong> - Optimized memory usage for large arrays</li>
                                            <li><strong>Interoperability</strong> - Foundation for many scientific Python libraries</li>
                                        </ul>

                                        <h3>Core Features</h3>
                                        <p>
                                            NumPy's core functionality revolves around the ndarray object and its associated operations:
                                        </p>
                                        <ul>
                                            <li><strong>ndarray</strong> - Multidimensional homogeneous array with fixed-size items</li>
                                            <li><strong>Data Types</strong> - Rich set of numerical data types (int, float, complex, etc.)</li>
                                            <li><strong>Indexing & Slicing</strong> - Powerful array indexing and slicing capabilities</li>
                                            <li><strong>Universal Functions</strong> - Fast element-wise array functions (ufuncs)</li>
                                            <li><strong>Array Manipulation</strong> - Reshaping, joining, splitting arrays</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My NumPy Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#4D77CB] mr-3"></i>
                                        My Journey with NumPy
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I started using NumPy in 2020 as the foundation for my data science and scientific computing work.
                                            Over 4+ years, I've applied it across various domains including machine learning,
                                            numerical simulations, and data analysis pipelines. My experience ranges from basic array
                                            operations to advanced numerical computations.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-cube text-[#4D77CB] mr-2"></i>
                                                    Scientific Computing
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Extensive experience using NumPy for numerical simulations,
                                                    mathematical modeling, and scientific computations across various domains.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-brain text-purple-500 mr-2"></i>
                                                    Machine Learning Foundation
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Used NumPy as the computational backbone for implementing machine learning algorithms
                                                    and neural networks from scratch.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#4D77CB] mr-3"></i>
                                        My Experience with NumPy
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 4+ years of hands-on experience, I've mastered NumPy for various numerical computing
                                            tasks and integrated it with other scientific Python libraries.
                                        </p>

                                        <h3>Core Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Array creation and manipulation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Vectorized operations and broadcasting</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Linear algebra operations</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Mathematical and statistical functions</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Array indexing and slicing</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Memory optimization and performance</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Random number generation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Integration with other libraries</span>
                                            </div>
                                        </div>

                                        <h3>Technical Stack</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">ndarray</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Broadcasting</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Linear Algebra</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Ufuncs</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Indexing</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Random</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Fourier</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">I/O</span>
                                        </div>

                                        <h3>Advanced Operations Mastered</h3>
                                        <ul>
                                            <li><strong>Array Broadcasting</strong> - Smart handling of operations between arrays of different shapes</li>
                                            <li><strong>Structured Arrays</strong> - Working with complex data types and record arrays</li>
                                            <li><strong>Memory Mapping</strong> - Handling arrays too large to fit in memory</li>
                                            <li><strong>Custom ufuncs</strong> - Creating custom universal functions for specialized operations</li>
                                            <li><strong>Performance Optimization</strong> - Using NumPy's C API and optimization techniques</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Mathematical Operations -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-square-root-alt text-[#4D77CB] mr-3"></i>
                                        Mathematical Operations
                                    </h2>
                                    <div class="content-section">
                                        <h3>Linear Algebra</h3>
                                        <p>
                                            Extensive experience with NumPy's linear algebra capabilities including:
                                        </p>
                                        <ul>
                                            <li>Matrix operations (multiplication, inversion, decomposition)</li>
                                            <li>Eigenvalue and eigenvector computations</li>
                                            <li>Solving linear systems of equations</li>
                                            <li>Singular Value Decomposition (SVD)</li>
                                            <li>QR decomposition and Cholesky decomposition</li>
                                        </ul>

                                        <h3>Statistical Functions</h3>
                                        <p>
                                            Mastered statistical operations for data analysis:
                                        </p>
                                        <ul>
                                            <li>Descriptive statistics (mean, median, std, variance)</li>
                                            <li>Correlation and covariance calculations</li>
                                            <li>Histogram computation and binning</li>
                                            <li>Percentile and quantile calculations</li>
                                            <li>Random sampling and probability distributions</li>
                                        </ul>

                                        <h3>Fourier Transforms</h3>
                                        <p>
                                            Experience with signal processing using NumPy:
                                        </p>
                                        <ul>
                                            <li>Fast Fourier Transform (FFT) computations</li>
                                            <li>Frequency domain analysis</li>
                                            <li>Signal filtering and convolution operations</li>
                                            <li>Spectral analysis and power spectral density</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Performance & Optimization -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-tachometer-alt text-[#4D77CB] mr-3"></i>
                                        Performance & Optimization
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I have extensive experience optimizing NumPy operations for maximum performance:
                                        </p>
                                        <ul>
                                            <li><strong>Vectorization</strong> - Replacing Python loops with vectorized operations</li>
                                            <li><strong>Memory Layout</strong> - Understanding and optimizing array memory layout (C vs Fortran order)</li>
                                            <li><strong>In-place Operations</strong> - Using in-place operations to reduce memory allocation</li>
                                            <li><strong>Data Types</strong> - Choosing optimal data types for memory and performance</li>
                                            <li><strong>Broadcasting Rules</strong> - Leveraging broadcasting for efficient computations</li>
                                            <li><strong>Einsum</strong> - Using Einstein summation convention for complex operations</li>
                                        </ul>

                                        <h3>Advanced Techniques</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#4D77CB] mb-2">Stride Tricks</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Using as_strided and stride_tricks for advanced array manipulations
                                                    without memory duplication
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#4D77CB] mb-2">Memory Mapping</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Working with memory-mapped arrays for out-of-core computations
                                                    on large datasets
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#4D77CB] mb-2">Custom dtypes</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Creating custom data types for specialized numerical computations
                                                    and structured data
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#4D77CB] mb-2">Array Views</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Efficiently working with array views and understanding when
                                                    copies are created
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Integration with Ecosystem -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-project-diagram text-[#4D77CB] mr-3"></i>
                                        Integration with Python Ecosystem
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            NumPy serves as the foundation for many scientific Python libraries, and I have experience
                                            integrating it with:
                                        </p>

                                        <h3>Data Analysis</h3>
                                        <ul>
                                            <li><strong>Pandas</strong> - NumPy arrays as the underlying data structure</li>
                                            <li><strong>SciPy</strong> - Building on NumPy for advanced scientific computing</li>
                                            <li><strong>Matplotlib</strong> - Using NumPy arrays for data visualization</li>
                                        </ul>

                                        <h3>Machine Learning</h3>
                                        <ul>
                                            <li><strong>Scikit-learn</strong> - NumPy arrays for feature matrices and target vectors</li>
                                            <li><strong>TensorFlow/PyTorch</strong> - Interoperability with NumPy arrays</li>
                                            <li><strong>Keras</strong> - Using NumPy arrays for training data</li>
                                        </ul>

                                        <h3>Specialized Libraries</h3>
                                        <ul>
                                            <li><strong>OpenCV</strong> - Image processing with NumPy arrays</li>
                                            <li><strong>Astropy</strong> - Astronomical data analysis</li>
                                            <li><strong>NetworkX</strong> - Graph algorithms with adjacency matrices</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- GitHub Projects -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fab fa-github text-[#4D77CB] mr-3"></i>
                                        Projects on GitHub
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Some of my NumPy projects can be found on GitHub:
                                        </p>
                                        <div class="mt-4">
                                            <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                                <i class="fab fa-github mr-2"></i>
                                                <span>SirAndrewGotham on GitHub</span>
                                            </a>
                                        </div>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            I continuously work on scientific computing projects that demonstrate practical applications
                                            of NumPy for numerical analysis, simulations, and data processing.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#4D77CB] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-[#4D77CB]">78%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4D77CB] to-[#2D5B8F]"
                                                     data-width="78%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Array Operations</span>
                                                <span class="text-sm font-bold text-green-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Linear Algebra</span>
                                                <span class="text-sm font-bold text-blue-500">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Performance Optimization</span>
                                                <span class="text-sm font-bold text-purple-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Mathematical Functions</span>
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
                                        <i class="fas fa-lightbulb text-[#4D77CB] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#4D77CB] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-[#4D77CB] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>NumPy 1.24+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#4D77CB] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>20+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-cube text-[#4D77CB] w-5 mr-3"></i>
                                            <span class="text-sm">Dimensions: <strong>Up to N-D</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-rocket text-[#4D77CB] w-5 mr-3"></i>
                                            <span class="text-sm">Performance: <strong>C-optimized</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Learning Path -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-graduation-cap text-[#4D77CB] mr-2"></i>
                                        Learning Path
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Basic array operations</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Indexing and slicing</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Vectorized operations</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Broadcasting rules</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-spinner text-xs"></i>
                                            </div>
                                            <span class="text-sm">Advanced linear algebra</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-clock text-xs"></i>
                                            </div>
                                            <span class="text-sm">C API integration</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#4D77CB] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-python text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4D77CB] transition-colors">Python</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                        </a>
                                        <a href="/competences/pandas" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-table text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4D77CB] transition-colors">Pandas</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                        </a>
                                        <a href="/competences/matplotlib" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-chart-area text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4D77CB] transition-colors">Matplotlib</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                        </a>
                                        <a href="/competences/scipy" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-flask text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4D77CB] transition-colors">SciPy</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">65% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#4D77CB] to-[#2D5B8F] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Interested in collaboration?</h3>
                                    <p class="text-sm mb-4">Ready to discuss your scientific computing project</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#4D77CB] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
                                    <a href="/competences/photography" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Photography & Data Science
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Image Processing
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
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-image text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Image Processing</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-crop-alt mr-1"></i>
                                            Digital Manipulation
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Advanced digital image manipulation, enhancement, and processing techniques for photography and data science
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-tools"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">15+</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Techniques</div>
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
                                <!-- About Image Processing -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                        About Image Processing
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Image Processing</strong> encompasses a wide range of techniques for manipulating
                                            and analyzing digital images. From basic enhancements to complex computational algorithms,
                                            image processing bridges the gap between artistic photography and scientific data analysis.
                                        </p>

                                        <h3>Key Applications</h3>
                                        <ul>
                                            <li><strong>Photographic Enhancement</strong> - Color correction, noise reduction, and detail enhancement</li>
                                            <li><strong>Computational Photography</strong> - HDR, panorama stitching, and focus stacking</li>
                                            <li><strong>Medical Imaging</strong> - Analysis and enhancement of medical scans</li>
                                            <li><strong>Computer Vision</strong> - Feature detection, object recognition, and pattern analysis</li>
                                            <li><strong>Scientific Analysis</strong> - Microscopy, satellite imagery, and research data</li>
                                            <li><strong>Creative Effects</strong> - Artistic filters, compositing, and digital art creation</li>
                                        </ul>

                                        <h3>Core Processing Domains</h3>
                                        <p>
                                            My expertise spans multiple domains of image processing:
                                        </p>
                                        <ul>
                                            <li><strong>Spatial Domain Processing</strong> - Direct pixel manipulation and filtering</li>
                                            <li><strong>Frequency Domain Processing</strong> - Fourier analysis and frequency-based operations</li>
                                            <li><strong>Color Processing</strong> - Color space transformations and enhancement</li>
                                            <li><strong>Morphological Processing</strong> - Shape-based analysis and operations</li>
                                            <li><strong>Geometric Transformations</strong> - Rotation, scaling, and perspective correction</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Image Processing Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-blue-500 mr-3"></i>
                                        My Journey with Image Processing
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            My journey with image processing began 3+ years ago, combining my passion for photography
                                            with technical expertise in data analysis. Starting with basic photo editing, I've progressed
                                            to implementing complex algorithms for both artistic and scientific applications.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-camera text-blue-500 mr-2"></i>
                                                    Photography Focus
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Advanced photo editing, RAW processing, and creative manipulation
                                                    techniques for professional photography workflows.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-microscope text-purple-500 mr-2"></i>
                                                    Data Science Applications
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Algorithm development for image analysis, feature extraction,
                                                    and automated processing in scientific contexts.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                        My Experience with Image Processing
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 3+ years of practical experience, I've developed comprehensive skills
                                            in both artistic image manipulation and technical image analysis across
                                            various domains and applications.
                                        </p>

                                        <h3>Technical Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Color correction and grading</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Noise reduction and sharpening</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Image segmentation and masking</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Frequency domain analysis</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Morphological operations</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Feature detection and extraction</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Image registration and alignment</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Multi-spectral image processing</span>
                                            </div>
                                        </div>

                                        <h3>Tools & Technologies</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">OpenCV</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">PIL/Pillow</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Photoshop</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Lightroom</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">GIMP</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">NumPy</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">scikit-image</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">RAWTherapee</span>
                                        </div>

                                        <h3>Processing Techniques Mastered</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <h4 class="font-bold text-blue-500 mb-2">Enhancement Techniques</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Histogram equalization</li>
                                                    <li>• Contrast stretching</li>
                                                    <li>• Unsharp masking</li>
                                                    <li>• Frequency filtering</li>
                                                    <li>• Color space conversion</li>
                                                </ul>
                                            </div>
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <h4 class="font-bold text-blue-500 mb-2">Analysis Methods</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Edge detection</li>
                                                    <li>• Texture analysis</li>
                                                    <li>• Object recognition</li>
                                                    <li>• Pattern matching</li>
                                                    <li>• Morphological analysis</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Application Areas -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-layer-group text-blue-500 mr-3"></i>
                                        Application Areas & Projects
                                    </h2>
                                    <div class="content-section">
                                        <h3>Photography Applications</h3>
                                        <p>
                                            In photographic contexts, I've applied image processing to:
                                        </p>
                                        <ul>
                                            <li><strong>Professional Photo Editing</strong> - Advanced retouching and color grading for commercial photography</li>
                                            <li><strong>HDR Processing</strong> - Tone mapping and exposure fusion for high dynamic range images</li>
                                            <li><strong>Panorama Stitching</strong> - Seamless merging of multiple images into panoramic views</li>
                                            <li><strong>Focus Stacking</strong> - Combining multiple focal planes for extended depth of field</li>
                                            <li><strong>Astrophotography Processing</strong> - Stacking and enhancement of astronomical images</li>
                                        </ul>

                                        <h3>Data Science Applications</h3>
                                        <p>
                                            In scientific and analytical contexts, I've implemented:
                                        </p>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-500 mb-2">Medical Imaging</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Enhancement and analysis of medical scans for research applications
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-500 mb-2">Remote Sensing</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Processing satellite and aerial imagery for geographic analysis
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-500 mb-2">Quality Control</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Automated inspection and defect detection in manufacturing
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-500 mb-2">Document Analysis</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    OCR enhancement and document image processing
                                                </p>
                                            </div>
                                        </div>

                                        <h3>Notable Projects</h3>
                                        <ul>
                                            <li><strong>Automated Photo Culling System</strong> - AI-assisted selection of best images from photoshoots</li>
                                            <li><strong>Medical Image Enhancement</strong> - Algorithm development for improving diagnostic clarity</li>
                                            <li><strong>Satellite Image Analysis</strong> - Processing and classification of earth observation data</li>
                                            <li><strong>Artistic Style Transfer</strong> - Neural network implementation for creative image manipulation</li>
                                            <li><strong>Real-time Filter Application</strong> - Web-based image processing tools</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Technical Implementation -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-blue-500 mr-3"></i>
                                        Technical Implementation
                                    </h2>
                                    <div class="content-section">
                                        <h3>Algorithm Development</h3>
                                        <p>
                                            I've developed and implemented various image processing algorithms:
                                        </p>
                                        <ul>
                                            <li><strong>Custom Filter Kernels</strong> - Designing and applying convolution filters</li>
                                            <li><strong>Frequency Domain Operations</strong> - FFT-based filtering and analysis</li>
                                            <li><strong>Morphological Processing</strong> - Erosion, dilation, and shape analysis</li>
                                            <li><strong>Segmentation Algorithms</strong> - Thresholding, region growing, and watershed</li>
                                            <li><strong>Feature Detection</strong> - Corner detection, blob analysis, and edge finding</li>
                                        </ul>

                                        <h3>Performance Optimization</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-500 mb-2">Parallel Processing</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Multi-threading and GPU acceleration for large-scale image processing
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-500 mb-2">Memory Optimization</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Efficient handling of large image datasets and streaming processing
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-500 mb-2">Algorithm Optimization</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Mathematical optimization of processing algorithms for speed and quality
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-blue-500 mb-2">Quality Metrics</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Implementation of objective quality assessment for processed images
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
                                        <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-blue-500">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500"
                                                     data-width="75%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Photographic Processing</span>
                                                <span class="text-sm font-bold text-green-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Algorithm Development</span>
                                                <span class="text-sm font-bold text-purple-500">70%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Technical Analysis</span>
                                                <span class="text-sm font-bold text-yellow-500">72%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="72%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Tool Integration</span>
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
                                        <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-blue-500 w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-tools text-blue-500 w-5 mr-3"></i>
                                            <span class="text-sm">Techniques: <strong>15+ mastered</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-blue-500 w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>20+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-camera text-blue-500 w-5 mr-3"></i>
                                            <span class="text-sm">Domains: <strong>Photo & Science</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-blue-500 w-5 mr-3"></i>
                                            <span class="text-sm">Languages: <strong>Python</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Processing Domains -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-sitemap text-blue-500 mr-2"></i>
                                        Processing Domains
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Spatial Domain Processing</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Frequency Domain Analysis</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Color Space Manipulation</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-spinner text-xs"></i>
                                            </div>
                                            <span class="text-sm">Morphological Processing</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-clock text-xs"></i>
                                            </div>
                                            <span class="text-sm">3D Image Processing</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-blue-500 mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-camera text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-blue-500 transition-colors">Photography</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/data-science" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-chart-line text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-blue-500 transition-colors">Data Science</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-python text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-blue-500 transition-colors">Python</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/computer-vision" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-eye text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-blue-500 transition-colors">Computer Vision</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">68% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Need Image Processing?</h3>
                                    <p class="text-sm mb-4">Let's enhance and analyze your visual data</p>
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

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
                                        Photography
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Capture One
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
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#00A4EF] to-[#0078D7] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-camera text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 captureone-gradient">Capture One</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bolt mr-1"></i>
                                            Professional Workflow
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Professional RAW image processing and tethered shooting software. Industry choice for studio photography and demanding color work.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#00A4EF] mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#00A4EF] mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#00A4EF] mr-3">
                                            <i class="fas fa-images"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5K+</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Images Processed</div>
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
                                <!-- About Capture One -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#00A4EF] mr-3"></i>
                                        About Capture One
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Capture One</strong> is a professional-grade RAW image processing application
                                            developed by Phase One, renowned for its exceptional color reproduction, tethered shooting
                                            capabilities, and powerful editing tools. It's the preferred choice for commercial,
                                            fashion, and product photographers who demand the highest quality output.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Superior color science</strong> - Industry-leading color reproduction and skin tone rendering</li>
                                            <li><strong>Robust tethered shooting</strong> - Seamless camera control and instant preview</li>
                                            <li><strong>Layer-based editing</strong> - Non-destructive adjustments with masking capabilities</li>
                                            <li><strong>Session workflow</strong> - Project-based organization for commercial shoots</li>
                                            <li><strong>Camera-specific profiles</strong> - Optimized processing for different camera models</li>
                                            <li><strong>Speed and performance</strong> - Efficient handling of large image volumes</li>
                                        </ul>

                                        <h3>Recommended Applications</h3>
                                        <p>
                                            Capture One excels in professional photography environments and is particularly effective for:
                                        </p>
                                        <ul>
                                            <li>Commercial and product photography</li>
                                            <li>Fashion and portrait studios</li>
                                            <li>Architectural and real estate photography</li>
                                            <li>High-volume event photography</li>
                                            <li>Fine art and landscape photography</li>
                                            <li>Any workflow requiring precise color control</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Capture One Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#00A4EF] mr-3"></i>
                                        My Journey with Capture One
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I began using Capture One in 2020 to enhance my professional photography workflow,
                                            particularly for studio and commercial work. Over 4+ years, I've developed expertise
                                            in its advanced color grading tools and tethered shooting capabilities for demanding
                                            professional assignments.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-palette text-[#00A4EF] mr-2"></i>
                                                    Advanced Color Workflow
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Mastered Capture One's sophisticated color editing tools including Color Balance,
                                                    Skin Tone uniformity, and advanced curve adjustments for professional results.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-sliders-h text-purple-500 mr-2"></i>
                                                    Tethered Shooting
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Developed efficient tethered shooting workflows for studio sessions,
                                                    enabling real-time image review and adjustments during commercial shoots.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#00A4EF] mr-3"></i>
                                        My Experience with Capture One
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 4+ years of intensive Capture One use, I've processed thousands of images
                                            across various photography genres, developing efficient workflows for both
                                            individual projects and high-volume commercial assignments.
                                        </p>

                                        <h3>Specialized Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Advanced Color Grading</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Layer-based Adjustments</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Session & Catalog Management</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Style & Preset Creation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Camera Tethering Setup</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Detail Enhancement</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Lens Correction & Sharpening</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Batch Processing</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Color Profile Management</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Export & Delivery Workflows</span>
                                            </div>
                                        </div>

                                        <h3>Key Projects</h3>
                                        <ul>
                                            <li><strong>Product Photography Campaign</strong> - Tethered shooting and color grading for e-commerce client</li>
                                            <li><strong>Portrait Studio Sessions</strong> - Real-time editing and client review during shoots</li>
                                            <li><strong>Architectural Photography Series</strong> - Advanced color correction for interior spaces</li>
                                            <li><strong>Fashion Lookbook Production</strong> - Consistent color across multiple models and locations</li>
                                            <li><strong>Corporate Headshot Sessions</strong> - Efficient batch processing for large teams</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Technical Details -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#00A4EF] mr-3"></i>
                                        Technical Details
                                    </h2>
                                    <div class="content-section">
                                        <h3>Advanced Features</h3>
                                        <p>
                                            My Capture One workflow leverages professional features and techniques:
                                        </p>
                                        <ul>
                                            <li><strong>Color Editor</strong> - Precise HSL adjustments and skin tone uniformity</li>
                                            <li><strong>Layers & Masks</strong> - Local adjustments with brush, gradient, and radial masks</li>
                                            <li><strong>Styles & Presets</strong> - Custom recipe creation and batch application</li>
                                            <li><strong>Session Organization</strong> - Efficient file management for commercial shoots</li>
                                            <li><strong>Keyboard Shortcuts</strong> - Optimized workflow for speed and efficiency</li>
                                        </ul>

                                        <h3>Tool Mastery</h3>
                                        <p>
                                            I work with Capture One's comprehensive toolset, with particular expertise in:
                                        </p>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Color Balance</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Levels & Curves</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Layers Panel</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Clarity & Structure</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Skin Tone</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">LCC Tool</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Crop & Rotate</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Keywords</span>
                                            <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Proofing</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Gallery Link -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-images text-[#00A4EF] mr-3"></i>
                                        Photo Galleries
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Examples of my photography work processed with Capture One can be found in my galleries:
                                        </p>
                                        <div class="mt-4">
                                            <a href="/galleries" class="inline-flex items-center px-4 py-2 bg-[#00A4EF] hover:bg-[#0078D7] text-white rounded-lg font-medium transition-colors">
                                                <i class="fas fa-images mr-2"></i>
                                                <span>View Photo Galleries</span>
                                            </a>
                                        </div>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            My galleries showcase professional photography projects where Capture One's advanced
                                            color tools and processing capabilities were essential for achieving the final results.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#00A4EF] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-[#00A4EF]">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#00A4EF] to-[#0078D7]"
                                                     data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Color Grading</span>
                                                <span class="text-sm font-bold text-green-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Tethered Shooting</span>
                                                <span class="text-sm font-bold text-blue-500">78%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Workflow Efficiency</span>
                                                <span class="text-sm font-bold text-purple-500">82%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Session Management</span>
                                                <span class="text-sm font-bold text-yellow-500">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="75%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#00A4EF] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#00A4EF] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>4+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-camera text-[#00A4EF] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>Capture One Pro</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#00A4EF] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>60+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-images text-[#00A4EF] w-5 mr-3"></i>
                                            <span class="text-sm">Images Processed: <strong>5,000+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-usb text-[#00A4EF] w-5 mr-3"></i>
                                            <span class="text-sm">Tethered Shoots: <strong>25+</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#00A4EF] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/adobe-lightroom" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-[#31A8FF] flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-image text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Adobe Lightroom</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                        </a>
                                        <a href="/competences/photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-black flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-camera text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Photography</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                        </a>
                                        <a href="/competences/color-theory" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-red-500 to-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-palette text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Color Theory</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                        </a>
                                        <a href="/competences/studio-photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-gray-600 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-lightbulb text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Studio Photography</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#00A4EF] to-[#0078D7] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Professional Photo Work?</h3>
                                    <p class="text-sm mb-4">Available for commercial photography and editing projects</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#00A4EF] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

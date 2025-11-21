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
                                        Adobe Lightroom
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#31A8FF] to-[#2E8AE6] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-image text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 lightroom-gradient">Adobe Lightroom</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Featured Skill
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Professional photo editing and management software. My primary tool for digital photography workflow since 2007.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">90%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">15+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                            <i class="fas fa-images"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">100K+</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Photos Processed</div>
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
                                <!-- About Lightroom -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#31A8FF] mr-3"></i>
                                        About Adobe Lightroom
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Adobe Lightroom</strong> is a professional photo editing and management application
                                            that has become the industry standard for photographers worldwide. It provides a comprehensive
                                            workflow solution from importing and organizing to editing and exporting images.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Non-destructive editing</strong> - All changes are reversible and never alter original files</li>
                                            <li><strong>Powerful organization</strong> - Advanced catalog system with keywords, ratings, and collections</li>
                                            <li><strong>RAW processing</strong> - Superior handling of RAW files from all major camera manufacturers</li>
                                            <li><strong>Preset system</strong> - Save and apply editing styles across multiple images</li>
                                            <li><strong>Seamless integration</strong> - Works perfectly with Photoshop and other Adobe applications</li>
                                            <li><strong>Cloud synchronization</strong> - Access your photos across multiple devices</li>
                                        </ul>

                                        <h3>Recommended Applications</h3>
                                        <p>
                                            Lightroom is ideal for various photography workflows and is particularly effective for:
                                        </p>
                                        <ul>
                                            <li>Professional portrait and wedding photography</li>
                                            <li>Landscape and nature photography</li>
                                            <li>Event and sports photography with large volumes of images</li>
                                            <li>Commercial product photography</li>
                                            <li>Personal photography projects and archiving</li>
                                            <li>Photojournalism and documentary work</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Lightroom Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#31A8FF] mr-3"></i>
                                        My Journey with Lightroom
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I started using Adobe Lightroom in 2007 when this tool first appeared allowing transition to a serious digital photography. Over the past 15+ years, I've developed an efficient
                                            workflow that maximizes both creativity and productivity.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-swatchbook text-[#31A8FF] mr-2"></i>
                                                    Custom Presets & Workflows
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Developed extensive collections of custom presets for different photography genres
                                                    and lighting conditions, significantly speeding up my editing process.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-project-diagram text-purple-500 mr-2"></i>
                                                    Portfolio Management
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Managed multiple photography portfolios and client projects using Lightroom's
                                                    powerful catalog system and collection features.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#31A8FF] mr-3"></i>
                                        My Experience with Lightroom
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With over 15 years of experience, I've mastered both the technical and creative aspects
                                            of Adobe Lightroom, developing workflows that balance efficiency with artistic expression.
                                        </p>

                                        <h3>Specialized Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Advanced Color Grading</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>RAW File Processing</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Batch Processing & Presets</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Detail Enhancement & Sharpening</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Lens Correction & Transformations</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Local Adjustments & Masks</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Catalog Management & Organization</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Export Workflows for Different Media</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>HDR & Panorama Merging</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Performance Optimization</span>
                                            </div>
                                        </div>

                                        <h3>Key Projects</h3>
                                        <ul>
                                            <li><strong>Urban Exploration Portfolio</strong> - Developed consistent editing style across 500+ urban photography images</li>
                                            <li><strong>Wedding Photography Workflow</strong> - Created efficient editing pipeline for high-volume event photography</li>
                                            <li><strong>Product Photography Catalog</strong> - Managed and edited commercial product images with consistent color accuracy</li>
                                            <li><strong>Travel Photography Series</strong> - Processed and organized thousands of travel images with custom presets</li>
                                            <li><strong>Archival Digitization Project</strong> - Restored and enhanced historical photographs using advanced Lightroom techniques</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Technical Details -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#31A8FF] mr-3"></i>
                                        Technical Details
                                    </h2>
                                    <div class="content-section">
                                        <h3>Workflow Features</h3>
                                        <p>
                                            My Lightroom workflow incorporates advanced techniques and best practices for optimal results:
                                        </p>
                                        <ul>
                                            <li><strong>Custom Import Presets</strong> - Automated metadata application on import</li>
                                            <li><strong>Smart Collections</strong> - Dynamic organization based on image criteria</li>
                                            <li><strong>Virtual Copies</strong> - Multiple editing variations without duplicating files</li>
                                            <li><strong>Publish Services</strong> - Direct export to online platforms and social media</li>
                                            <li><strong>Plugin Integration</strong> - Extended functionality with third-party tools</li>
                                        </ul>

                                        <h3>Editing Toolkit</h3>
                                        <p>
                                            I work with the full range of Lightroom's editing tools, including:
                                        </p>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Tone Curve</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">HSL Panel</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Split Toning</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Radial Filters</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Graduated Filters</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Brush Adjustments</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Profile Corrections</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Lens Corrections</span>
                                            <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Transform Panel</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Gallery Link -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-images text-[#31A8FF] mr-3"></i>
                                        Photo Galleries
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Examples of my photography work processed with Adobe Lightroom can be found in my galleries:
                                        </p>
                                        <div class="mt-4">
                                            <a href="/galleries" class="inline-flex items-center px-4 py-2 bg-[#31A8FF] hover:bg-[#2E8AE6] text-white rounded-lg font-medium transition-colors">
                                                <i class="fas fa-images mr-2"></i>
                                                <span>View Photo Galleries</span>
                                            </a>
                                        </div>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            My galleries showcase various photography genres, all processed using my custom Lightroom workflows and presets.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#31A8FF] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-[#31A8FF]">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#31A8FF] to-[#2E8AE6]"
                                                     data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Color Grading</span>
                                                <span class="text-sm font-bold text-green-500">95%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Workflow Efficiency</span>
                                                <span class="text-sm font-bold text-blue-500">92%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Catalog Management</span>
                                                <span class="text-sm font-bold text-purple-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">RAW Processing</span>
                                                <span class="text-sm font-bold text-yellow-500">93%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="93%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#31A8FF] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#31A8FF] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>15+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-image text-[#31A8FF] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>Lightroom Classic</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#31A8FF] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>50+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-images text-[#31A8FF] w-5 mr-3"></i>
                                            <span class="text-sm">Photos Processed: <strong>10,000+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-swatchbook text-[#31A8FF] w-5 mr-3"></i>
                                            <span class="text-sm">Custom Presets: <strong>100+</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#31A8FF] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-black flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-camera text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Photography</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                        </a>
                                        <a href="/competences/adobe-photoshop" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-adobe text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Adobe Photoshop</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                        </a>
                                        <a href="/competences/color-theory" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-red-500 to-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-palette text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Color Theory</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                        </a>
                                        <a href="/competences/digital-imaging" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-desktop text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Digital Imaging</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#31A8FF] to-[#2E8AE6] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Interested in Collaboration?</h3>
                                    <p class="text-sm mb-4">Available for photography editing projects</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#31A8FF] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

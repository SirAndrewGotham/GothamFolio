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
                                    <a href="/competences/design" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Design
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Adobe Photoshop
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
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#31A8FF] to-[#001E36] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-paint-brush text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 photoshop-gradient">Adobe Photoshop</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Featured Skill
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Industry-standard image editing and graphic design software. My essential tool for creative projects since late 1990-ies.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">25+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                            <i class="fas fa-layer-group"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">500+</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Projects Completed</div>
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
                                <!-- About Photoshop -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#31A8FF] mr-3"></i>
                                        About Adobe Photoshop
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Adobe Photoshop</strong> is the industry-leading image editing and graphic design software
                                            that has defined digital creativity for decades. It provides unparalleled tools for photo manipulation,
                                            digital painting, graphic design, and compositing.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Layer-based editing</strong> - Non-destructive workflow with complete flexibility</li>
                                            <li><strong>Advanced selection tools</strong> - Precise masking and object isolation</li>
                                            <li><strong>Powerful retouching</strong> - Professional photo restoration and enhancement</li>
                                            <li><strong>Creative filters & effects</strong> - Endless possibilities for artistic expression</li>
                                            <li><strong>Typography tools</strong> - Advanced text manipulation and styling</li>
                                            <li><strong>3D capabilities</strong> - Basic 3D modeling and texturing</li>
                                        </ul>

                                        <h3>Recommended Applications</h3>
                                        <p>
                                            Photoshop excels in various creative domains and is particularly effective for:
                                        </p>
                                        <ul>
                                            <li>Professional photo retouching and manipulation</li>
                                            <li>Digital painting and illustration</li>
                                            <li>Web and UI design mockups</li>
                                            <li>Print design and layout</li>
                                            <li>Social media graphics and marketing materials</li>
                                            <li>Creative compositing and surreal art</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Photoshop Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#31A8FF] mr-3"></i>
                                        My Journey with Photoshop
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I began my Photoshop journey in late 1990-ies, initially focusing on photo retouching
                                            and gradually expanding into graphic design and digital art. Over 25+ years,
                                            I've developed a comprehensive skill set that spans both technical precision
                                            and creative expression.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-magic text-[#31A8FF] mr-2"></i>
                                                    Advanced Retouching
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Mastered professional retouching techniques including frequency separation,
                                                    dodge and burn, and advanced color correction for portrait and product photography.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-puzzle-piece text-purple-500 mr-2"></i>
                                                    Creative Compositing
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Developed expertise in complex photo compositing, blending multiple images
                                                    seamlessly with advanced masking and lighting techniques.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#31A8FF] mr-3"></i>
                                        My Experience with Photoshop
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 25+ years of intensive Photoshop use, I've tackled diverse projects
                                            ranging from simple photo edits to complex creative compositions and
                                            professional design work.
                                        </p>

                                        <h3>Specialized Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Advanced Layer Management</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Precision Masking & Selections</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Non-Destructive Editing</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Color Correction & Grading</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Photo Restoration</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Digital Painting & Illustration</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Smart Objects & Filters</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Typography & Text Effects</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Web & UI Design</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Action Creation & Automation</span>
                                            </div>
                                        </div>

                                        <h3>Key Projects</h3>
                                        <ul>
                                            <li><strong>Product Photography Enhancement</strong> - Professional retouching for e-commerce clients</li>
                                            <li><strong>Portrait Retouching Series</strong> - Natural yet polished portrait enhancements</li>
                                            <li><strong>Marketing Campaign Graphics</strong> - Social media visuals and advertising materials</li>
                                            <li><strong>Website UI Mockups</strong> - Detailed design comps for web development projects</li>
                                            <li><strong>Creative Digital Art</strong> - Surreal compositions and conceptual artwork</li>
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
                                        <h3>Advanced Techniques</h3>
                                        <p>
                                            My Photoshop workflow incorporates professional techniques and industry best practices:
                                        </p>
                                        <ul>
                                            <li><strong>Frequency Separation</strong> - Separating texture and color for precise retouching</li>
                                            <li><strong>Dodge & Burn</strong> - Advanced contrast and shape enhancement</li>
                                            <li><strong>Channel Masking</strong> - Complex selections using color channels</li>
                                            <li><strong>Blend If Sliders</strong> - Advanced layer blending controls</li>
                                            <li><strong>Custom Brushes & Patterns</strong> - Creating and managing custom assets</li>
                                        </ul>

                                        <h3>Tool Mastery</h3>
                                        <p>
                                            I work with Photoshop's comprehensive toolset, with particular expertise in:
                                        </p>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Pen Tool</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Layer Masks</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Adjustment Layers</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Healing Brush</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Content-Aware Fill</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Smart Objects</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Blending Modes</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Type Tool</span>
                                            <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Shape Layers</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Portfolio Link -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-briefcase text-[#31A8FF] mr-3"></i>
                                        Design Portfolio
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Examples of my Photoshop work can be found in my design portfolio:
                                        </p>
                                        <div class="mt-4">
                                            <a href="/works" class="inline-flex items-center px-4 py-2 bg-[#31A8FF] hover:bg-[#001E36] text-white rounded-lg font-medium transition-colors">
                                                <i class="fas fa-briefcase mr-2"></i>
                                                <span>View Design Portfolio</span>
                                            </a>
                                        </div>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            My portfolio showcases various design projects, photo manipulations, and creative works
                                            created using advanced Photoshop techniques.
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
                                                <span class="text-sm font-bold text-[#31A8FF]">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#31A8FF] to-[#001E36]"
                                                     data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Photo Retouching</span>
                                                <span class="text-sm font-bold text-green-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Graphic Design</span>
                                                <span class="text-sm font-bold text-blue-500">80%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Digital Painting</span>
                                                <span class="text-sm font-bold text-purple-500">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="75%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Compositing</span>
                                                <span class="text-sm font-bold text-yellow-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="88%" style="width: 0%"></div>
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
                                            <span class="text-sm">Experience: <strong>25+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-paint-brush text-[#31A8FF] w-5 mr-3"></i>
                                            <span class="text-sm">Version: <strong>Photoshop CC</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#31A8FF] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>900+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-layer-group text-[#31A8FF] w-5 mr-3"></i>
                                            <span class="text-sm">Files Created: <strong>200,000+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-clock text-[#31A8FF] w-5 mr-3"></i>
                                            <span class="text-sm">Hours Used: <strong>30,000+</strong></span>
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
                                        <a href="/competences/adobe-lightroom" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-[#31A8FF] flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-image text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Adobe Lightroom</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                        </a>
                                        <a href="/competences/illustrator" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-pen-nib text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Adobe Illustrator</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                        </a>
                                        <a href="/competences/graphic-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-palette text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Graphic Design</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                        </a>
                                        <a href="/competences/ui-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-desktop text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#31A8FF] transition-colors">UI/UX Design</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#31A8FF] to-[#001E36] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Interested in Collaboration?</h3>
                                    <p class="text-sm mb-4">Available for design and photo editing projects</p>
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

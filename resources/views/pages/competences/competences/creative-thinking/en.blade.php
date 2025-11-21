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
                                    <a href="/competences/soft-skills" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Soft Skills
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Creative Thinking
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-yellow-50 to-orange-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-yellow-400 to-orange-400 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-lightbulb text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Creative Thinking</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Featured Skill
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Innovative approach to problem-solving and design challenges through systematic creativity and outside-the-box thinking
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center text-yellow-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                            <i class="fas fa-project-diagram"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">150+</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Projects</div>
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
                                <!-- About Creative Thinking -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-yellow-500 mr-3"></i>
                                        About Creative Thinking
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Creative Thinking</strong> is the ability to approach problems and challenges from fresh perspectives,
                                            generating innovative solutions and breakthrough ideas. It combines imagination with systematic reasoning
                                            to transform complex challenges into opportunities for innovation and growth.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Innovation Generation</strong> - Create novel solutions to complex problems</li>
                                            <li><strong>Adaptive Problem-Solving</strong> - Navigate uncertainty with flexible thinking</li>
                                            <li><strong>Strategic Vision</strong> - See connections and opportunities others miss</li>
                                            <li><strong>User-Centric Design</strong> - Develop solutions that truly meet user needs</li>
                                            <li><strong>Cross-disciplinary Insights</strong> - Apply knowledge from diverse fields</li>
                                            <li><strong>Future-oriented Perspective</strong> - Anticipate trends and emerging needs</li>
                                        </ul>

                                        <h3>Core Principles</h3>
                                        <p>
                                            My approach to creative thinking is built on several foundational principles:
                                        </p>
                                        <ul>
                                            <li><strong>Divergent Thinking</strong> - Generating multiple solutions and perspectives</li>
                                            <li><strong>Associative Thinking</strong> - Connecting seemingly unrelated concepts</li>
                                            <li><strong>Abstraction</strong> - Seeing patterns and underlying structures</li>
                                            <li><strong>Experimentation</strong> - Testing ideas through rapid prototyping</li>
                                            <li><strong>Reframing</strong> - Viewing problems from different angles</li>
                                            <li><strong>Synthesis</strong> - Combining ideas to create novel solutions</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Creative Thinking Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-yellow-500 mr-3"></i>
                                        My Journey with Creative Thinking
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Over the past 10+ years, I've systematically developed my creative thinking abilities through
                                            diverse projects across multiple industries. From designing user interfaces to solving complex
                                            technical challenges, I've learned to harness creativity as a strategic tool for innovation.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-yellow-50 to-orange-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-brain text-yellow-500 mr-2"></i>
                                                    Method Development
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Developed systematic approaches to creativity including
                                                    design thinking, lateral thinking, and TRIZ methodologies.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-users text-blue-500 mr-2"></i>
                                                    Team Facilitation
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Extensive experience leading creative workshops and
                                                    brainstorming sessions for diverse teams and organizations.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-yellow-500 mr-3"></i>
                                        My Creative Thinking Experience
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With 10+ years of applying creative thinking across 150+ projects, I've developed
                                            comprehensive expertise in transforming abstract ideas into practical, innovative solutions.
                                        </p>

                                        <h3>Specialized Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Design Thinking methodology application</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Lateral thinking and paradigm shifting</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Creative facilitation and workshop design</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Ideation techniques and brainstorming methods</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Prototyping and rapid experimentation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Cross-disciplinary innovation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Visual thinking and concept mapping</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Innovation strategy development</span>
                                            </div>
                                        </div>

                                        <h3>Methodologies & Frameworks</h3>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Design Thinking</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Lateral Thinking</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">TRIZ</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">SCAMPER</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Six Thinking Hats</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Mind Mapping</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Brainstorming</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Storyboarding</span>
                                        </div>

                                        <h3>Creative Process Components</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <h4 class="font-bold text-yellow-500 mb-2">Idea Generation</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Divergent thinking techniques</li>
                                                    <li>• Analogical reasoning</li>
                                                    <li>• Random stimulus methods</li>
                                                    <li>• Forced connections</li>
                                                    <li>• Reverse thinking</li>
                                                </ul>
                                            </div>
                                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                                <h4 class="font-bold text-yellow-500 mb-2">Solution Development</h4>
                                                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                    <li>• Convergent thinking</li>
                                                    <li>• Prototyping and testing</li>
                                                    <li>• Iterative refinement</li>
                                                    <li>• Feasibility analysis</li>
                                                    <li>• Implementation planning</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Applied Creative Thinking -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-rocket text-yellow-500 mr-3"></i>
                                        Applied Creative Thinking
                                    </h2>
                                    <div class="content-section">
                                        <h3>Problem-Solving Applications</h3>
                                        <p>
                                            I've applied creative thinking to solve diverse challenges across various domains:
                                        </p>
                                        <ul>
                                            <li><strong>User Experience Design</strong> - Creating intuitive and engaging interfaces</li>
                                            <li><strong>Technical Architecture</strong> - Designing scalable and maintainable systems</li>
                                            <li><strong>Business Process Optimization</strong> - Streamlining workflows and operations</li>
                                            <li><strong>Product Innovation</strong> - Developing novel features and capabilities</li>
                                            <li><strong>Team Collaboration</strong> - Facilitating effective cross-functional work</li>
                                            <li><strong>Strategic Planning</strong> - Developing forward-looking roadmaps</li>
                                        </ul>

                                        <h3>Innovation Techniques</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-yellow-500 mb-2">Design Sprints</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Structured 5-day processes for solving big problems and testing new ideas
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-yellow-500 mb-2">Rapid Prototyping</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Quick creation of tangible representations to test and refine concepts
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-yellow-500 mb-2">User Journey Mapping</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Visualizing user experiences to identify pain points and opportunities
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-yellow-500 mb-2">Scenario Planning</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Exploring multiple future scenarios to build robust strategies
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Success Stories -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-trophy text-yellow-500 mr-3"></i>
                                        Creative Thinking Success Stories
                                    </h2>
                                    <div class="content-section">
                                        <h3>Notable Achievements</h3>
                                        <p>
                                            My creative thinking approach has led to significant innovations and breakthroughs:
                                        </p>
                                        <ul>
                                            <li><strong>E-commerce Platform Redesign</strong> - Increased conversion by 35% through innovative user flow design</li>
                                            <li><strong>Mobile App Innovation</strong> - Developed award-winning gesture-based navigation system</li>
                                            <li><strong>Enterprise Software</strong> - Created novel data visualization that reduced decision time by 60%</li>
                                            <li><strong>Startup Product Launch</strong> - Designed unique value proposition that secured Series A funding</li>
                                            <li><strong>Legacy System Modernization</strong> - Developed migration strategy that reduced costs by 45%</li>
                                        </ul>

                                        <h3>Innovation Impact</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-yellow-500 mb-2">Business Value</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Creative solutions that delivered measurable ROI and competitive advantage
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-yellow-500 mb-2">User Experience</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Innovative designs that significantly improved user satisfaction and engagement
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-yellow-500 mb-2">Technical Innovation</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Creative technical solutions that solved previously intractable problems
                                                </p>
                                            </div>
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-yellow-500 mb-2">Team Performance</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Creative collaboration methods that enhanced team productivity and morale
                                                </p>
                                            </div>
                                        </div>

{{--                                        <h3>Recognition & Awards</h3>--}}
{{--                                        <ul>--}}
{{--                                            <li><strong>Innovation Award 2022</strong> - For breakthrough user interface design</li>--}}
{{--                                            <li><strong>Design Excellence Prize</strong> - Creative solution for accessibility challenges</li>--}}
{{--                                            <li><strong>Industry Recognition</strong> - Featured in tech publications for innovative approaches</li>--}}
{{--                                            <li><strong>Client Testimonials</strong> - Consistently praised for creative problem-solving</li>--}}
{{--                                            <li><strong>Team Leadership</strong> - Recognized for fostering creative culture in organizations</li>--}}
{{--                                        </ul>--}}
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-yellow-500 mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-yellow-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-yellow-400 to-orange-400"
                                                     data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Idea Generation</span>
                                                <span class="text-sm font-bold text-blue-500">92%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Problem Reframing</span>
                                                <span class="text-sm font-bold text-green-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Innovation Facilitation</span>
                                                <span class="text-sm font-bold text-purple-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Cross-disciplinary Application</span>
                                                <span class="text-sm font-bold text-red-500">86%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="86%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-yellow-500 w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>10+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-yellow-500 w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>150+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-users text-yellow-500 w-5 mr-3"></i>
                                            <span class="text-sm">Workshops: <strong>50+ conducted</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-trophy text-yellow-500 w-5 mr-3"></i>
                                            <span class="text-sm">Awards: <strong>Innovation recognition</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-star text-yellow-500 w-5 mr-3"></i>
                                            <span class="text-sm">Status: <strong>Featured Competence</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Creative Thinking Tools -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-tools text-yellow-500 mr-2"></i>
                                        Creative Tools & Methods
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Design Thinking Process</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Lateral Thinking Techniques</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-check text-xs"></i>
                                            </div>
                                            <span class="text-sm">Mind Mapping & Visual Thinking</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-spinner text-xs"></i>
                                            </div>
                                            <span class="text-sm">TRIZ Methodology</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                                <i class="fas fa-clock text-xs"></i>
                                            </div>
                                            <span class="text-sm">Synectics Approach</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-yellow-500 mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/problem-solving" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-puzzle-piece text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-yellow-500 transition-colors">Problem Solving</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/design-thinking" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-palette text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-yellow-500 transition-colors">Design Thinking</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-users text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-yellow-500 transition-colors">Leadership</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">82% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/communication" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-comments text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-yellow-500 transition-colors">Communication</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-yellow-400 to-orange-400 rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Need Creative Solutions?</h3>
                                    <p class="text-sm mb-4">Let's innovate and solve challenges together</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-yellow-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

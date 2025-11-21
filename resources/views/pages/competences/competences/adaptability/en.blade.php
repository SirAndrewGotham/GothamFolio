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
                                        Adaptability
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FF5722] to-[#FF9800] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-exchange-alt text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 adaptability-gradient">Adaptability</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Key Strength
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Quick adaptation to new technologies, methodologies, and changing requirements. A cornerstone of my professional approach.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">92%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">12+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Professional Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-sync-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">50+ projects</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Adapted Successfully</div>
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
                                <!-- About Adaptability -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#FF5722] mr-3"></i>
                                        About Adaptability
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Adaptability</strong> is the ability to adjust to new conditions, technologies, and requirements quickly and effectively.
                                            In the fast-paced world of technology, this skill has been fundamental to my success across diverse projects and industries.
                                        </p>

                                        <h3>Core Principles</h3>
                                        <ul>
                                            <li><strong>Continuous Learning</strong> - Embracing new technologies and methodologies as opportunities</li>
                                            <li><strong>Flexible Mindset</strong> - Willingness to change approaches when circumstances demand</li>
                                            <li><strong>Resilience</strong> - Maintaining performance under changing conditions and pressure</li>
                                            <li><strong>Proactive Adjustment</strong> - Anticipating change and preparing accordingly</li>
                                            <li><strong>Cross-functional Application</strong> - Transferring skills across different domains and contexts</li>
                                        </ul>

                                        <h3>Professional Context</h3>
                                        <p>
                                            In my 12+ years of experience, adaptability has been crucial for:
                                        </p>
                                        <ul>
                                            <li>Transitioning between different technology stacks and frameworks</li>
                                            <li>Working with diverse teams and organizational cultures</li>
                                            <li>Responding to changing project requirements and scope</li>
                                            <li>Adopting new development methodologies and practices</li>
                                            <li>Navigating industry shifts and emerging technologies</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Adaptability Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#FF5722] mr-3"></i>
                                        My Adaptability Journey
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            My adaptability journey spans over 12 years of navigating technological evolution,
                                            organizational changes, and shifting market demands. This skill has enabled me to
                                            thrive in diverse environments and deliver consistent results.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-code-branch text-[#FF5722] mr-2"></i>
                                                    Technology Transitions
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Successfully transitioned through multiple technology eras - from PHP 3.3 to modern frameworks,
                                                    embracing new programming paradigms and development approaches.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-users text-blue-500 mr-2"></i>
                                                    Team & Culture Adaptation
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Worked effectively across startups, agencies, and enterprise environments,
                                                    adapting to different team structures, communication styles, and workflows.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Key Adaptability Scenarios -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#FF5722] mr-3"></i>
                                        Key Adaptability Scenarios
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Throughout my career, adaptability has been tested and proven in various challenging scenarios:
                                        </p>

                                        <h3>Technology Stack Evolution</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>PHP 3.3 → Modern PHP 8.x</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Procedural → Object-Oriented Programming</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Custom Frameworks → Laravel Ecosystem</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Monolithic → Microservices Architecture</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Traditional → Cloud-Native Development</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Adding Python & Data Science to skillset</span>
                                            </div>
                                        </div>

                                        <h3>Methodology & Process Adaptation</h3>
                                        <ul>
                                            <li><strong>Waterfall to Agile</strong> - Transitioned development processes to iterative, collaborative approaches</li>
                                            <li><strong>DevOps Integration</strong> - Adapted to CI/CD pipelines and automated deployment practices</li>
                                            <li><strong>Remote Collaboration</strong> - Mastered distributed team coordination and communication tools</li>
                                            <li><strong>Cross-functional Teams</strong> - Worked effectively with diverse skill sets and perspectives</li>
                                        </ul>

                                        <h3>Project & Requirement Flexibility</h3>
                                        <ul>
                                            <li><strong>Scope Changes</strong> - Successfully managed evolving project requirements without compromising quality</li>
                                            <li><strong>Technology Shifts</strong> - Adapted to mid-project technology stack changes</li>
                                            <li><strong>Team Restructuring</strong> - Maintained productivity through organizational changes</li>
                                            <li><strong>Market Adaptation</strong> - Pivoted project focus based on market feedback and trends</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Learning & Growth Approach -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-graduation-cap text-[#FF5722] mr-3"></i>
                                        Learning & Growth Approach
                                    </h2>
                                    <div class="content-section">
                                        <h3>Continuous Skill Development</h3>
                                        <p>
                                            My approach to maintaining high adaptability involves systematic learning and skill development:
                                        </p>
                                        <ul>
                                            <li><strong>Technology Monitoring</strong> - Regular tracking of emerging technologies and industry trends</li>
                                            <li><strong>Hands-on Experimentation</strong> - Building proof-of-concept projects with new tools</li>
                                            <li><strong>Community Engagement</strong> - Participating in tech communities and knowledge sharing</li>
                                            <li><strong>Formal & Informal Learning</strong> - Combining courses, certifications with practical application</li>
                                            <li><strong>Cross-training</strong> - Developing complementary skills across different domains</li>
                                        </ul>

                                        <h3>Adaptation Strategies</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#FF5722] mb-2">Incremental Adoption</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Gradually integrating new technologies while maintaining existing systems
                                                </p>
                                            </div>
                                            <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#FF5722] mb-2">Risk Management</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Assessing and mitigating risks during technology transitions
                                                </p>
                                            </div>
                                            <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#FF5722] mb-2">Knowledge Transfer</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Documenting and sharing learning experiences with teams
                                                </p>
                                            </div>
                                            <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                                <h4 class="font-semibold text-[#FF5722] mb-2">Feedback Integration</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Using feedback to refine adaptation approaches continuously
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
                                        <i class="fas fa-chart-bar text-[#FF5722] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Adaptability</span>
                                                <span class="text-sm font-bold text-[#FF5722]">92%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF5722] to-[#FF9800]"
                                                     data-width="92%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Technology Learning</span>
                                                <span class="text-sm font-bold text-green-500">95%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Process Adaptation</span>
                                                <span class="text-sm font-bold text-blue-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Team Flexibility</span>
                                                <span class="text-sm font-bold text-purple-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Change Management</span>
                                                <span class="text-sm font-bold text-orange-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#FF5722] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#FF5722] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>12+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-sync-alt text-[#FF5722] w-5 mr-3"></i>
                                            <span class="text-sm">Projects Adapted: <strong>50+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-[#FF5722] w-5 mr-3"></i>
                                            <span class="text-sm">Tech Stacks: <strong>10+ mastered</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-users text-[#FF5722] w-5 mr-3"></i>
                                            <span class="text-sm">Team Types: <strong>Startup to Enterprise</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-globe text-[#FF5722] w-5 mr-3"></i>
                                            <span class="text-sm">Industries: <strong>8+ domains</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#FF5722] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/problem-solving" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-puzzle-piece text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#FF5722] transition-colors">Problem Solving</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                        </a>
                                        <a href="/competences/continuous-learning" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-graduation-cap text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#FF5722] transition-colors">Continuous Learning</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                        </a>
                                        <a href="/competences/communication" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-comments text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#FF5722] transition-colors">Communication</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                        </a>
                                        <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-users text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#FF5722] transition-colors">Leadership</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#FF5722] to-[#FF9800] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Interested in Collaboration?</h3>
                                    <p class="text-sm mb-4">Ready to discuss how adaptability can benefit your project</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-orange-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

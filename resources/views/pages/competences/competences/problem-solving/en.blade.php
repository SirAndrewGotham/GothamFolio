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
                            <!-- About Problem Solving -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#FF9800] mr-3"></i>
                                    About Problem Solving
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Problem Solving</strong> is the systematic process of working through details
                                        of a problem to reach a solution. It combines analytical thinking, creativity,
                                        and practical implementation to overcome challenges and achieve desired outcomes.
                                        In the technology industry, this skill is paramount for innovation and progress.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Systematic approach</strong> - Structured methodology for tackling complex challenges</li>
                                        <li><strong>Creative innovation</strong> - Thinking beyond conventional solutions</li>
                                        <li><strong>Risk mitigation</strong> - Identifying and addressing potential issues proactively</li>
                                        <li><strong>Efficiency optimization</strong> - Finding better ways to achieve objectives</li>
                                        <li><strong>Adaptability</strong> - Adjusting strategies based on new information</li>
                                        <li><strong>Root cause analysis</strong> - Addressing underlying issues rather than symptoms</li>
                                    </ul>

                                    <h3>Professional Applications</h3>
                                    <p>
                                        Strong problem-solving skills are essential across all professional domains and are particularly critical for:
                                    </p>
                                    <ul>
                                        <li>Software architecture and system design</li>
                                        <li>Technical troubleshooting and debugging</li>
                                        <li>Project planning and risk management</li>
                                        <li>Process optimization and workflow improvement</li>
                                        <li>Innovation and product development</li>
                                        <li>Crisis management and contingency planning</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Problem Solving Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#FF9800] mr-3"></i>
                                    My Problem Solving Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Over 12+ years in technology and development, I've cultivated my problem-solving
                                        abilities through diverse challenges—from debugging complex legacy systems to
                                        architecting scalable solutions and optimizing business processes. Each challenge
                                        has refined my approach and expanded my toolkit.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-sitemap text-[#FF9800] mr-2"></i>
                                                Technical Architecture
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Designed and implemented scalable solutions for complex business problems,
                                                considering performance, maintainability, and future growth requirements.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tools text-blue-500 mr-2"></i>
                                                Legacy System Challenges
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Successfully navigated and modernized outdated systems, developing
                                                migration strategies that minimized disruption while maximizing value.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Approach -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#FF9800] mr-3"></i>
                                    My Problem Solving Approach
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I employ a structured yet flexible approach to problem-solving that combines
                                        analytical rigor with creative thinking. My methodology ensures comprehensive
                                        understanding and effective solution implementation.
                                    </p>

                                    <h3>Problem Solving Framework</h3>
                                    <div class="space-y-4 mt-4">
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Problem Definition</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Clearly articulate the problem, constraints, and desired outcomes. Separate symptoms from root causes.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Analysis & Research</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Gather data, identify patterns, and understand the context. Research similar problems and solutions.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Solution Generation</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Brainstorm multiple approaches, considering both conventional and innovative solutions.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Evaluation & Selection</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Assess solutions against criteria like feasibility, cost, time, and impact. Choose the optimal approach.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">5</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Implementation & Testing</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Execute the chosen solution, monitor results, and make adjustments as needed.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <h3>Specialized Techniques</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Root Cause Analysis</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Systems Thinking</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Design Thinking</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Agile Problem Solving</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Data-Driven Decision Making</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Lateral Thinking</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>First Principles Thinking</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Scenario Planning</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Success Stories -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-trophy text-[#FF9800] mr-3"></i>
                                    Problem Solving Success Stories
                                </h2>
                                <div class="content-section">
                                    <p>
                                        My problem-solving abilities have been instrumental in overcoming significant
                                        challenges across various projects and contexts:
                                    </p>
                                    <ul>
                                        <li><strong>Performance Optimization</strong> - Identified and resolved critical bottlenecks in a high-traffic e-commerce platform, reducing page load times by 65% through systematic analysis and targeted improvements</li>
                                        <li><strong>Legacy System Migration</strong> - Developed innovative migration strategy for 15-year-old system, enabling seamless transition to modern architecture while preserving business logic and data integrity</li>
                                        <li><strong>Cross-Platform Compatibility</strong> - Solved complex compatibility issues between different browser environments and devices, ensuring consistent user experience across all platforms</li>
                                        <li><strong>Database Scaling Challenge</strong> - Designed and implemented scalable database architecture that supported 10x growth in user base without performance degradation</li>
                                        <li><strong>Integration Complexity</strong> - Resolved intricate integration challenges between multiple third-party services, creating unified workflow that improved operational efficiency by 40%</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Tools & Methods -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#FF9800] mr-3"></i>
                                    Problem Solving Tools & Methods
                                </h2>
                                <div class="content-section">
                                    <h3>Analytical Tools</h3>
                                    <p>
                                        I leverage various analytical tools and frameworks to systematically approach problems:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm text-center">SWOT Analysis</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Fishbone Diagram</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">5 Whys Technique</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Pareto Analysis</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Decision Matrix</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Mind Mapping</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Cost-Benefit Analysis</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Flow Charts</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Gantt Charts</span>
                                    </div>

                                    <h3>Creative Techniques</h3>
                                    <p>
                                        For innovative solutions, I employ creative problem-solving methods:
                                    </p>
                                    <ul>
                                        <li><strong>Brainstorming Sessions</strong> - Generating diverse ideas without premature judgment</li>
                                        <li><strong>Reverse Thinking</strong> - Approaching problems from the opposite perspective</li>
                                        <li><strong>Analogous Thinking</strong> - Applying solutions from unrelated domains</li>
                                        <li><strong>Prototype & Iterate</strong> - Building quick prototypes to test concepts</li>
                                        <li><strong>Constraint Removal</strong> - Temporarily ignoring limitations to foster creativity</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#FF9800] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#FF9800]">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF9800] to-[#FB8C00]"
                                                 data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Analytical Thinking</span>
                                            <span class="text-sm font-bold text-green-500">96%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="96%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Creative Solutions</span>
                                            <span class="text-sm font-bold text-blue-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Technical Troubleshooting</span>
                                            <span class="text-sm font-bold text-purple-500">94%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="94%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Strategic Planning</span>
                                            <span class="text-sm font-bold text-yellow-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#FF9800] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#FF9800] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>12+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-puzzle-piece text-[#FF9800] w-5 mr-3"></i>
                                        <span class="text-sm">Problems Solved: <strong>500+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#FF9800] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>200+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-clock text-[#FF9800] w-5 mr-3"></i>
                                        <span class="text-sm">Avg. Resolution Time: <strong>65% faster</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-chart-line text-[#FF9800] w-5 mr-3"></i>
                                        <span class="text-sm">Success Rate: <strong>98%</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#FF9800] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/analytical-thinking" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-brain text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF9800] transition-colors">Analytical Thinking</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">94% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                    </a>
                                    <a href="/competences/innovation" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-lightbulb text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF9800] transition-colors">Innovation</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                    </a>
                                    <a href="/competences/critical-thinking" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-search text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF9800] transition-colors">Critical Thinking</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">92% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                    </a>
                                    <a href="/competences/decision-making" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-balance-scale text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF9800] transition-colors">Decision Making</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#FF9800] to-[#FB8C00] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Facing a Challenge?</h3>
                                <p class="text-sm mb-4">Let's apply systematic problem-solving to your project</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF9800] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Discuss Solutions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

</x-frontend.layouts.app>

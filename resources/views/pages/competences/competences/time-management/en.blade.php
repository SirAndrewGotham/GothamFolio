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
                                    <a href="/competences/soft-skills" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Soft Skills
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Time Management
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-gray-50 to-blue-gray-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#607D8B] to-[#455A64] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-clock text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 timemanagement-gradient">Time Management</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Featured Skill
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Efficient organization and prioritization of tasks and deadlines. Maximizing productivity through strategic planning and focused execution.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-[#607D8B] mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">90%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#607D8B] mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Professional Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#607D8B] mr-3">
                                            <i class="fas fa-check-double"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">98%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Deadline Success Rate</div>
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
                                <!-- About Time Management -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#607D8B] mr-3"></i>
                                        About Time Management
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Time Management</strong> is the process of organizing and planning how to
                                            divide your time between specific activities to maximize efficiency and productivity.
                                            In professional contexts, it involves strategic prioritization, deadline management,
                                            and workflow optimization to achieve optimal results.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Increased productivity</strong> - Accomplishing more in less time through efficient workflows</li>
                                            <li><strong>Reduced stress</strong> - Managing workload effectively to prevent overwhelm</li>
                                            <li><strong>Better decision-making</strong> - Allocating time to high-impact activities</li>
                                            <li><strong>Improved quality</strong> - Dedicating appropriate time to each task</li>
                                            <li><strong>Enhanced reputation</strong> - Consistently meeting deadlines and commitments</li>
                                            <li><strong>Work-life balance</strong> - Creating space for personal and professional growth</li>
                                        </ul>

                                        <h3>Professional Applications</h3>
                                        <p>
                                            Effective time management is crucial across all professional domains and is particularly essential for:
                                        </p>
                                        <ul>
                                            <li>Project planning and deadline management</li>
                                            <li>Multi-project coordination and task switching</li>
                                            <li>Meeting preparation and efficient collaboration</li>
                                            <li>Personal productivity and focus management</li>
                                            <li>Team workflow optimization and capacity planning</li>
                                            <li>Strategic planning and long-term goal achievement</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Time Management Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#607D8B] mr-3"></i>
                                        My Time Management Journey
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Over 10+ years in demanding technical roles, I've refined my time management
                                            approach through continuous learning and practical application. From early
                                            struggles with multitasking to mastering focused work and strategic planning,
                                            my journey has been one of constant improvement and adaptation.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-gray-50 to-blue-gray-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-bullseye text-[#607D8B] mr-2"></i>
                                                    Strategic Prioritization
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Developed systematic approaches to task prioritization that ensure
                                                    high-impact activities receive appropriate focus and resources.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-hourglass-half text-blue-500 mr-2"></i>
                                                    Deadline Mastery
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Achieved 98% on-time delivery rate across 200+ projects through
                                                    meticulous planning, buffer time allocation, and proactive risk management.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Time Management System -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#607D8B] mr-3"></i>
                                        My Time Management System
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            I employ a comprehensive time management system that combines proven methodologies
                                            with personal adaptations. This system ensures consistent productivity while
                                            maintaining flexibility for unexpected challenges and opportunities.
                                        </p>

                                        <h3>Core Framework</h3>
                                        <div class="space-y-4 mt-4">
                                            <div class="flex items-start">
                                                <div class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                    <span class="font-bold">1</span>
                                                </div>
                                                <div>
                                                    <h4 class="font-semibold">Strategic Planning</h4>
                                                    <p class="text-sm text-gray-600 dark:text-gray-400">Weekly and daily planning sessions to align tasks with goals and identify priorities.</p>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                    <span class="font-bold">2</span>
                                                </div>
                                                <div>
                                                    <h4 class="font-semibold">Task Prioritization</h4>
                                                    <p class="text-sm text-gray-600 dark:text-gray-400">Using Eisenhower Matrix and ABCDE method to categorize tasks by importance and urgency.</p>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                    <span class="font-bold">3</span>
                                                </div>
                                                <div>
                                                    <h4 class="font-semibold">Focused Execution</h4>
                                                    <p class="text-sm text-gray-600 dark:text-gray-400">Time blocking and Pomodoro technique for deep work and maintaining concentration.</p>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                    <span class="font-bold">4</span>
                                                </div>
                                                <div>
                                                    <h4 class="font-semibold">Review & Adaptation</h4>
                                                    <p class="text-sm text-gray-600 dark:text-gray-400">Daily and weekly reviews to assess progress and adjust strategies as needed.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <h3>Key Techniques</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Time Blocking</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Pomodoro Technique</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Eisenhower Matrix</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Getting Things Done (GTD)</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Eat That Frog</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>80/20 Principle</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Batch Processing</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Two-Minute Rule</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Success Stories -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-trophy text-[#607D8B] mr-3"></i>
                                        Time Management Success Stories
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            My time management expertise has consistently delivered exceptional results across diverse professional contexts:
                                        </p>
                                        <ul>
                                            <li><strong>Complex Project Delivery</strong> - Successfully managed 3 simultaneous major projects with overlapping deadlines, delivering all on time through meticulous time allocation and priority management</li>
                                            <li><strong>Team Productivity Transformation</strong> - Implemented time management system for 12-person team that increased overall productivity by 45% and reduced overtime by 60%</li>
                                            <li><strong>Emergency Response Efficiency</strong> - Coordinated critical system recovery under extreme time pressure, resolving major outage 40% faster than historical average through optimized task sequencing</li>
                                            <li><strong>Meeting Efficiency Improvement</strong> - Reduced meeting time by 50% across organization while improving decision quality through structured agenda management and time boxing</li>
                                            <li><strong>Personal Productivity Peak</strong> - Maintained consistent high-output performance while managing multiple roles, achieving 30% more deliverables than team average through effective time blocking</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Tools & Methods -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#607D8B] mr-3"></i>
                                        Time Management Tools & Methods
                                    </h2>
                                    <div class="content-section">
                                        <h3>Digital Tools</h3>
                                        <p>
                                            I leverage modern digital tools to enhance time management effectiveness:
                                        </p>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Google Calendar</span>
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Trello</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Notion</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Todoist</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Focus@Will</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">RescueTime</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Forest App</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Pomodone</span>
                                            <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Clockify</span>
                                        </div>

                                        <h3>Analytical Methods</h3>
                                        <p>
                                            I employ various analytical approaches to optimize time usage:
                                        </p>
                                        <ul>
                                            <li><strong>Time Auditing</strong> - Regular analysis of time expenditure to identify improvement opportunities</li>
                                            <li><strong>Productivity Metrics</strong> - Tracking key performance indicators related to time utilization</li>
                                            <li><strong>Interruption Management</strong> - Systematic approach to minimizing and handling disruptions</li>
                                            <li><strong>Energy Cycle Mapping</strong> - Aligning tasks with natural energy patterns for optimal performance</li>
                                            <li><strong>Buffer Time Calculation</strong> - Scientific approach to estimating and allocating contingency time</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#607D8B] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-[#607D8B]">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#607D8B] to-[#455A64]"
                                                     data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Task Prioritization</span>
                                                <span class="text-sm font-bold text-green-500">94%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="94%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Deadline Management</span>
                                                <span class="text-sm font-bold text-blue-500">92%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Focus Management</span>
                                                <span class="text-sm font-bold text-purple-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Multi-tasking Efficiency</span>
                                                <span class="text-sm font-bold text-yellow-500">85%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="85%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#607D8B] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#607D8B] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>10+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-clock text-[#607D8B] w-5 mr-3"></i>
                                            <span class="text-sm">Deadline Success: <strong>98%</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-tasks text-[#607D8B] w-5 mr-3"></i>
                                            <span class="text-sm">Projects Managed: <strong>200+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-chart-line text-[#607D8B] w-5 mr-3"></i>
                                            <span class="text-sm">Productivity Gain: <strong>45% avg.</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-hourglass text-[#607D8B] w-5 mr-3"></i>
                                            <span class="text-sm">Time Saved Weekly: <strong>10-15 hours</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#607D8B] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/project-management" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-tasks text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#607D8B] transition-colors">Project Management</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                        </a>
                                        <a href="/competences/organization" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-folder text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#607D8B] transition-colors">Organization</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                        </a>
                                        <a href="/competences/productivity" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-bolt text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#607D8B] transition-colors">Productivity</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">92% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                        </a>
                                        <a href="/competences/focus" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-bullseye text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#607D8B] transition-colors">Focus & Concentration</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#607D8B] to-[#455A64] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Need Time Optimization?</h3>
                                    <p class="text-sm mb-4">Let's discuss how effective time management can transform your productivity</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#607D8B] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                        <i class="fas fa-envelope mr-2"></i>
                                        Optimize Your Time
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

</x-frontend.layouts.app>

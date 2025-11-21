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
                            <!-- About Project Management -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#2196F3] mr-3"></i>
                                    About Project Management
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Project Management</strong> is the application of knowledge, skills, tools,
                                        and techniques to project activities to meet project requirements. In the technology
                                        sector, it involves coordinating complex technical work while managing scope, time,
                                        cost, quality, and stakeholder expectations.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Strategic alignment</strong> - Ensuring projects support business objectives</li>
                                        <li><strong>Risk mitigation</strong> - Proactive identification and management of potential issues</li>
                                        <li><strong>Resource optimization</strong> - Efficient allocation of team members and budget</li>
                                        <li><strong>Timely delivery</strong> - Meeting deadlines through effective planning and execution</li>
                                        <li><strong>Quality assurance</strong> - Maintaining high standards throughout project lifecycle</li>
                                        <li><strong>Stakeholder satisfaction</strong> - Keeping clients and team members engaged and informed</li>
                                    </ul>

                                    <h3>Professional Applications</h3>
                                    <p>
                                        Effective project management is crucial across various technical domains and is particularly essential for:
                                    </p>
                                    <ul>
                                        <li>Software development and implementation projects</li>
                                        <li>System migrations and infrastructure upgrades</li>
                                        <li>Product development and launch initiatives</li>
                                        <li>Digital transformation programs</li>
                                        <li>Team leadership and cross-functional coordination</li>
                                        <li>Client delivery and consulting engagements</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Project Management Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#2196F3] mr-3"></i>
                                    My Project Management Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Over 8+ years, I've evolved from technical contributor to project leader,
                                        managing increasingly complex projects across various industries. My journey
                                        has included formal project management training, hands-on experience with
                                        diverse methodologies, and continuous improvement through lessons learned.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-[#2196F3] mr-2"></i>
                                                Agile Transformation
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Led agile adoption across multiple teams, implementing Scrum and Kanban
                                                methodologies that improved delivery speed and team satisfaction.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-purple-500 mr-2"></i>
                                                Team Leadership
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Managed cross-functional teams of 5-15 members, fostering collaboration
                                                and ensuring alignment with project goals and client expectations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Approach -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#2196F3] mr-3"></i>
                                    My Project Management Approach
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I employ a flexible, adaptive approach to project management that combines
                                        proven methodologies with practical experience. My focus is on delivering
                                        value while maintaining team morale and stakeholder confidence.
                                    </p>

                                    <h3>Project Lifecycle Management</h3>
                                    <div class="space-y-4 mt-4">
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Initiation & Planning</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Define project scope, objectives, and success criteria. Develop detailed project plans, timelines, and resource allocation.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Execution & Monitoring</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Coordinate team activities, track progress against milestones, and maintain communication with stakeholders.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Risk & Quality Management</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Identify potential risks, implement mitigation strategies, and ensure quality standards are maintained.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Delivery & Closure</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Ensure successful project delivery, conduct post-implementation reviews, and capture lessons learned.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <h3>Methodologies & Frameworks</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Agile & Scrum</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kanban & Lean</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Waterfall & Hybrid</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>PRINCE2 Fundamentals</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>PMI Framework</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>SAFe Principles</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Success Stories -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-trophy text-[#2196F3] mr-3"></i>
                                    Project Management Success Stories
                                </h2>
                                <div class="content-section">
                                    <p>
                                        My project management expertise has been instrumental in delivering successful outcomes across diverse initiatives:
                                    </p>
                                    <ul>
                                        <li><strong>E-commerce Platform Migration</strong> - Managed 6-month migration project for major retail client, delivering on time and 15% under budget while maintaining 99.9% uptime throughout transition</li>
                                        <li><strong>Multi-team Agile Transformation</strong> - Led adoption of Scrum across 5 development teams, resulting in 40% faster delivery cycles and 25% improvement in team satisfaction scores</li>
                                        <li><strong>International SaaS Implementation</strong> - Coordinated cross-timezone team to deliver complex SaaS solution for global client, managing cultural differences and technical challenges</li>
                                        <li><strong>Legacy System Modernization</strong> - Directed 12-month modernization program that successfully replaced 15-year-old system with minimal business disruption</li>
                                        <li><strong>Startup Product Launch</strong> - Managed end-to-end product development and launch for tech startup, achieving market launch 3 months ahead of industry average timeline</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Tools & Techniques -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#2196F3] mr-3"></i>
                                    Project Management Tools & Techniques
                                </h2>
                                <div class="content-section">
                                    <h3>Management Tools</h3>
                                    <p>
                                        I leverage modern project management tools to enhance visibility, collaboration, and efficiency:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Jira</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Trello</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Asana</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Monday.com</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">MS Project</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Notion</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Slack</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">GitHub</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Figma</span>
                                    </div>

                                    <h3>Key Techniques</h3>
                                    <p>
                                        I employ various project management techniques to ensure success:
                                    </p>
                                    <ul>
                                        <li><strong>Stakeholder Analysis & Management</strong> - Identifying and engaging key stakeholders</li>
                                        <li><strong>Risk Register & Mitigation Planning</strong> - Proactive risk identification and response</li>
                                        <li><strong>Earned Value Management</strong> - Tracking project performance and progress</li>
                                        <li><strong>Resource Leveling & Allocation</strong> - Optimizing team and budget utilization</li>
                                        <li><strong>Change Control Process</strong> - Managing scope changes effectively</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#2196F3] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#2196F3]">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#2196F3] to-[#1976D2]"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Agile Methodologies</span>
                                            <span class="text-sm font-bold text-green-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Team Leadership</span>
                                            <span class="text-sm font-bold text-blue-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Budget Management</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Risk Management</span>
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
                                    <i class="fas fa-lightbulb text-[#2196F3] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#2196F3] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>8+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tasks text-[#2196F3] w-5 mr-3"></i>
                                        <span class="text-sm">Projects Managed: <strong>150+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#2196F3] w-5 mr-3"></i>
                                        <span class="text-sm">Team Size: <strong>5-15 members</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-dollar-sign text-[#2196F3] w-5 mr-3"></i>
                                        <span class="text-sm">Budget Range: <strong>$50K-$2M</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check-circle text-[#2196F3] w-5 mr-3"></i>
                                        <span class="text-sm">Success Rate: <strong>94%</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#2196F3] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flag text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2196F3] transition-colors">Leadership</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                    </a>
                                    <a href="/competences/communication-skills" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-comments text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2196F3] transition-colors">Communication</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">92% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                    </a>
                                    <a href="/competences/problem-solving" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-puzzle-piece text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2196F3] transition-colors">Problem Solving</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                    </a>
                                    <a href="/competences/teamwork" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-people-carry text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2196F3] transition-colors">Teamwork</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#2196F3] to-[#1976D2] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need Project Leadership?</h3>
                                <p class="text-sm mb-4">Let's discuss how effective project management can drive your success</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#2196F3] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Start Project Discussion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

</x-frontend.layouts.app>

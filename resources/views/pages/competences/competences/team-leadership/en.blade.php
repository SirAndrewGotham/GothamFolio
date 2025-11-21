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
                            <!-- About Team Leadership -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#9C27B0] mr-3"></i>
                                    About Team Leadership
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Team Leadership</strong> in technology involves guiding development teams
                                        to achieve technical excellence while fostering a collaborative and growth-oriented
                                        environment. It combines technical expertise with people skills to create high-performing
                                        teams that deliver exceptional results.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Enhanced team performance</strong> - Optimizing individual and collective contributions</li>
                                        <li><strong>Accelerated skill development</strong> - Mentoring team members to reach their potential</li>
                                        <li><strong>Improved collaboration</strong> - Fostering trust and effective communication</li>
                                        <li><strong>Higher retention rates</strong> - Creating environments where talent thrives</li>
                                        <li><strong>Better decision-making</strong> - Leveraging diverse perspectives and expertise</li>
                                        <li><strong>Increased innovation</strong> - Encouraging creativity and calculated risk-taking</li>
                                    </ul>

                                    <h3>Professional Applications</h3>
                                    <p>
                                        Effective team leadership is essential across various technical contexts and is particularly critical for:
                                    </p>
                                    <ul>
                                        <li>Software development team management</li>
                                        <li>Technical project leadership and coordination</li>
                                        <li>Mentoring junior and mid-level developers</li>
                                        <li>Cross-functional team collaboration</li>
                                        <li>Agile team facilitation and Scrum mastery</li>
                                        <li>Technical career development guidance</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Leadership Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#9C27B0] mr-3"></i>
                                    My Leadership Journey
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Over 6+ years in leadership roles, I've evolved from individual contributor to team lead,
                                        developing my leadership style through hands-on experience, formal training, and continuous
                                        learning. My journey has included mentoring developers, facilitating team growth, and
                                        creating environments where technical excellence flourishes.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-graduation-cap text-[#9C27B0] mr-2"></i>
                                                Mentorship Excellence
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Successfully mentored 40+ developers, with several advancing to senior
                                                and lead positions within their organizations through structured guidance.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                                Team Transformation
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Transformed struggling teams into high-performing units through clear
                                                vision setting, process improvement, and individual empowerment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Leadership Philosophy -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#9C27B0] mr-3"></i>
                                    My Leadership Philosophy
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I believe in servant leadership that empowers team members while maintaining
                                        clear direction and accountability. My approach focuses on creating an environment
                                        where technical talent can thrive and deliver exceptional results.
                                    </p>

                                    <h3>Leadership Principles</h3>
                                    <div class="space-y-4 mt-4">
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Lead by Example</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Demonstrate the technical excellence, work ethic, and collaborative spirit I expect from the team.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Empower & Delegate</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Trust team members with ownership and provide autonomy within clear boundaries.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Foster Growth</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Invest in team development through mentoring, training, and challenging opportunities.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Communicate Transparently</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Maintain open communication about goals, challenges, and successes.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <h3>Leadership Competencies</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Technical Mentoring</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Conflict Resolution</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Performance Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Strategic Planning</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Stakeholder Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Team Building</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Change Management</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Emotional Intelligence</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Success Stories -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-trophy text-[#9C27B0] mr-3"></i>
                                    Leadership Success Stories
                                </h2>
                                <div class="content-section">
                                    <p>
                                        My leadership approach has consistently delivered positive outcomes for teams and organizations:
                                    </p>
                                    <ul>
                                        <li><strong>Team Performance Turnaround</strong> - Transformed underperforming team of 8 developers into top-performing unit, increasing delivery velocity by 60% and reducing bug rates by 75% within 6 months</li>
                                        <li><strong>Mentorship Program Success</strong> - Established structured mentorship program that accelerated junior developer growth, with 5 team members promoted within 18 months</li>
                                        <li><strong>Cross-Functional Collaboration</strong> - Bridged gap between development and business teams, improving requirement clarity and reducing rework by 40%</li>
                                        <li><strong>Technical Debt Reduction</strong> - Led initiative that reduced technical debt by 70% while maintaining feature delivery through strategic planning and team alignment</li>
                                        <li><strong>Team Retention Improvement</strong> - Improved team retention from 65% to 92% through focused leadership development and career growth opportunities</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Leadership Tools & Methods -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#9C27B0] mr-3"></i>
                                    Leadership Tools & Methods
                                </h2>
                                <div class="content-section">
                                    <h3>Team Development Tools</h3>
                                    <p>
                                        I utilize various tools and frameworks to support team growth and effectiveness:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">1-on-1 Meetings</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Career Ladders</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Retrospectives</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Skill Matrices</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Feedback Systems</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Team Building</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Mentorship Programs</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">OKRs</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Performance Reviews</span>
                                    </div>

                                    <h3>Leadership Development Methods</h3>
                                    <p>
                                        I employ various approaches to develop leadership capabilities in teams:
                                    </p>
                                    <ul>
                                        <li><strong>Situational Leadership</strong> - Adapting leadership style to team maturity and context</li>
                                        <li><strong>Servant Leadership</strong> - Focusing on team needs and removing obstacles</li>
                                        <li><strong>Transformational Leadership</strong> - Inspiring teams to achieve exceptional results</li>
                                        <li><strong>Coaching & Mentoring</strong> - Developing individual capabilities and career paths</li>
                                        <li><strong>Agile Leadership</strong> - Facilitating self-organizing teams and continuous improvement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#9C27B0] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#9C27B0]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#9C27B0] to-[#7B1FA2]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Technical Mentoring</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Team Building</span>
                                            <span class="text-sm font-bold text-blue-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Performance Management</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Conflict Resolution</span>
                                            <span class="text-sm font-bold text-yellow-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#9C27B0] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#9C27B0] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>6+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#9C27B0] w-5 mr-3"></i>
                                        <span class="text-sm">Teams Led: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-user-graduate text-[#9C27B0] w-5 mr-3"></i>
                                        <span class="text-sm">Members Mentored: <strong>40+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#9C27B0] w-5 mr-3"></i>
                                        <span class="text-sm">Team Size: <strong>5-12 members</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-chart-line text-[#9C27B0] w-5 mr-3"></i>
                                        <span class="text-sm">Performance Improvement: <strong>60% avg.</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#9C27B0] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/project-management" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-tasks text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Project Management</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                    </a>
                                    <a href="/competences/communication-skills" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-comments text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Communication</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">92% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mentoring" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-graduation-cap text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Mentoring</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                    </a>
                                    <a href="/competences/emotional-intelligence" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-brain text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Emotional Intelligence</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#9C27B0] to-[#7B1FA2] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Need Team Leadership?</h3>
                                <p class="text-sm mb-4">Let's discuss how effective leadership can transform your team</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#9C27B0] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Discuss Leadership
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

</x-frontend.layouts.app>

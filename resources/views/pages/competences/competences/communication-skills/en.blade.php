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
                                        Communication Skills
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4CAF50] to-[#45a049] flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-comments text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 communication-gradient">Communication Skills</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Featured Skill
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Effective verbal and written communication with teams and clients. A cornerstone of successful collaboration and project delivery.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#4CAF50] mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">92%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#4CAF50] mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">12+ years</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Professional Experience</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#4CAF50] mr-3">
                                            <i class="fas fa-handshake"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">200+</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Projects Delivered</div>
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
                                <!-- About Communication Skills -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-[#4CAF50] mr-3"></i>
                                        About Communication Skills
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Communication Skills</strong> are the foundation of successful collaboration,
                                            project management, and client relationships in the professional world. Effective
                                            communication encompasses not just what we say, but how we say it, when we say it,
                                            and our ability to listen and understand others.
                                        </p>

                                        <h3>Key Advantages</h3>
                                        <ul>
                                            <li><strong>Clear project requirements</strong> - Reducing misunderstandings and rework</li>
                                            <li><strong>Strong team collaboration</strong> - Fostering productive working relationships</li>
                                            <li><strong>Effective client management</strong> - Building trust and managing expectations</li>
                                            <li><strong>Efficient problem-solving</strong> - Quickly addressing issues through clear dialogue</li>
                                            <li><strong>Professional presentations</strong> - Confidently conveying ideas and proposals</li>
                                            <li><strong>Cross-cultural adaptability</strong> - Working effectively in diverse environments</li>
                                        </ul>

                                        <h3>Professional Applications</h3>
                                        <p>
                                            Strong communication skills are essential across all professional contexts and are particularly critical for:
                                        </p>
                                        <ul>
                                            <li>Project management and team leadership</li>
                                            <li>Client consultations and requirement gathering</li>
                                            <li>Technical documentation and specifications</li>
                                            <li>Stakeholder presentations and progress reports</li>
                                            <li>Conflict resolution and negotiation</li>
                                            <li>Mentoring and knowledge sharing</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Communication Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-[#4CAF50] mr-3"></i>
                                        My Communication Journey
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Over 12+ years in the technology industry, I've developed and refined my communication
                                            skills through diverse roles—from individual contributor to team lead, and from technical
                                            specialist to client-facing consultant. Each role presented unique communication challenges
                                            that helped me grow and adapt my approach.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-users text-[#4CAF50] mr-2"></i>
                                                    Team Leadership
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Led development teams of 5-10 members, establishing clear communication channels,
                                                    regular check-ins, and effective feedback mechanisms that improved project outcomes.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-handshake text-blue-500 mr-2"></i>
                                                    Client Relations
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Managed client relationships across 50+ projects, translating technical concepts
                                                    into business value and ensuring alignment between technical delivery and client expectations.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-[#4CAF50] mr-3"></i>
                                        My Communication Experience
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            With over a decade of professional experience, I've honed my communication abilities
                                            across various contexts—from technical discussions with development teams to strategic
                                            conversations with C-level executives and practical explanations with end-users.
                                        </p>

                                        <h3>Specialized Skills</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Technical Documentation</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Client Presentation & Demos</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Requirements Gathering</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Team Coordination & Mentoring</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Stakeholder Management</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Conflict Resolution</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Cross-cultural Communication</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Active Listening</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Negotiation & Persuasion</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Feedback Delivery</span>
                                            </div>
                                        </div>

                                        <h3>Key Communication Contexts</h3>
                                        <ul>
                                            <li><strong>Technical Teams</strong> - Clear specifications, code reviews, and architectural discussions</li>
                                            <li><strong>Business Stakeholders</strong> - Translating technical capabilities into business value</li>
                                            <li><strong>International Clients</strong> - Adapting communication style for cultural differences</li>
                                            <li><strong>Project Management</strong> - Status reporting, risk communication, and milestone updates</li>
                                            <li><strong>User Training</strong> - Creating accessible documentation and conducting effective training sessions</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Communication Methods -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-[#4CAF50] mr-3"></i>
                                        Communication Methods & Tools
                                    </h2>
                                    <div class="content-section">
                                        <h3>Verbal Communication</h3>
                                        <p>
                                            I employ various verbal communication strategies tailored to different audiences and contexts:
                                        </p>
                                        <ul>
                                            <li><strong>One-on-one meetings</strong> - Personalized discussions for detailed feedback and mentoring</li>
                                            <li><strong>Team stand-ups</strong> - Efficient daily coordination and progress tracking</li>
                                            <li><strong>Client presentations</strong> - Structured demonstrations and progress reviews</li>
                                            <li><strong>Technical workshops</strong> - Interactive sessions for knowledge sharing</li>
                                            <li><strong>Stakeholder briefings</strong> - Concise executive summaries and recommendations</li>
                                        </ul>

                                        <h3>Written Communication</h3>
                                        <p>
                                            My written communication adapts to different formats and audiences:
                                        </p>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Technical Docs</span>
                                            <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Project Proposals</span>
                                            <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Email Communication</span>
                                            <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">API Documentation</span>
                                            <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Progress Reports</span>
                                            <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">User Guides</span>
                                            <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Meeting Minutes</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Code Comments</span>
                                            <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Specifications</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Success Stories -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-trophy text-[#4CAF50] mr-3"></i>
                                        Communication Success Stories
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Effective communication has been instrumental in several key project successes:
                                        </p>
                                        <ul>
                                            <li><strong>Multi-national E-commerce Platform</strong> - Coordinated between Russian development team and European stakeholders, delivering project 2 weeks ahead of schedule through clear requirement communication</li>
                                            <li><strong>Legacy System Migration</strong> - Successfully communicated technical constraints and migration strategy to non-technical stakeholders, securing buy-in for complex 18-month project</li>
                                            <li><strong>Startup Product Launch</strong> - Bridged communication gap between technical team and marketing department, ensuring product features were accurately represented in launch materials</li>
                                            <li><strong>Team Restructuring</strong> - Facilitated smooth transition during organizational changes through transparent communication and regular team updates</li>
                                            <li><strong>Client Crisis Management</strong> - Maintained client confidence during technical outage through honest, timely communication and clear recovery plan presentation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-[#4CAF50] mr-2"></i>
                                        Proficiency Level
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Overall Proficiency</span>
                                                <span class="text-sm font-bold text-[#4CAF50]">92%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4CAF50] to-[#45a049]"
                                                     data-width="92%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Written Communication</span>
                                                <span class="text-sm font-bold text-green-500">95%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Verbal Communication</span>
                                                <span class="text-sm font-bold text-blue-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Client Relations</span>
                                                <span class="text-sm font-bold text-purple-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Team Collaboration</span>
                                                <span class="text-sm font-bold text-yellow-500">94%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="94%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-[#4CAF50] mr-2"></i>
                                        Quick Facts
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-[#4CAF50] w-5 mr-3"></i>
                                            <span class="text-sm">Experience: <strong>12+ years</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-comments text-[#4CAF50] w-5 mr-3"></i>
                                            <span class="text-sm">Languages: <strong>Russian, English</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-[#4CAF50] w-5 mr-3"></i>
                                            <span class="text-sm">Projects: <strong>200+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-users text-[#4CAF50] w-5 mr-3"></i>
                                            <span class="text-sm">Teams Led: <strong>15+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-globe text-[#4CAF50] w-5 mr-3"></i>
                                            <span class="text-sm">International Clients: <strong>25+ countries</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-[#4CAF50] mr-2"></i>
                                        Related Competences
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-flag text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Leadership</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                        </a>
                                        <a href="/competences/project-management" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-tasks text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Project Management</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                        </a>
                                        <a href="/competences/teamwork" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-people-carry text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Teamwork</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                        </a>
                                        <a href="/competences/presentation" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-chart-bar text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Presentation Skills</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-[#4CAF50] to-[#45a049] rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Ready to Collaborate?</h3>
                                    <p class="text-sm mb-4">Let's discuss how clear communication can drive your project success</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#4CAF50] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                        <i class="fas fa-envelope mr-2"></i>
                                        Start Conversation
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

</x-frontend.layouts.app>

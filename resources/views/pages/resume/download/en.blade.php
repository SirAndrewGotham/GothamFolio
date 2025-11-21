<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrew Gotham - Professional Resume</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0ea5e9;
            --secondary-color: #8b5cf6;
            --accent-color: #e74c3c;
            --light-color: #f8fafc;
            --dark-color: #1e293b;
            --text-color: #334155;
            --light-text: #64748b;
            --border-color: #cbd5e1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f1f5f9;
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .telegram-icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .tagline {
            font-size: 1.2rem;
            font-weight: 300;
            margin-bottom: 20px;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 15px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin: 20px 0 30px;
        }

        .btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background-color: #0284c7;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .resume-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
        }

        .sidebar {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .main-content {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 8px;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .skills-list {
            list-style-type: none;
        }

        .skill-item {
            margin-bottom: 10px;
        }

        .skill-name {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .skill-bar {
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
        }

        .skill-level {
            height: 100%;
            background-color: var(--secondary-color);
            border-radius: 4px;
            transition: width 1s ease-in-out;
        }

        .education-item, .experience-item {
            margin-bottom: 20px;
        }

        .item-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .item-title {
            font-weight: 600;
            color: var(--primary-color);
        }

        .item-date {
            color: var(--light-text);
            font-style: italic;
        }

        .item-subtitle {
            color: var(--secondary-color);
            margin-bottom: 8px;
        }

        .item-description {
            color: var(--text-color);
        }

        .project-item {
            margin-bottom: 15px;
        }

        .project-title {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .project-description {
            color: var(--text-color);
        }

        .languages-list {
            list-style-type: none;
        }

        .language-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .language-name {
            font-weight: 500;
        }

        .language-level {
            color: var(--light-text);
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: var(--light-text);
            font-size: 0.9rem;
        }

        /* Print styles for PDF */
        @media print {
            body {
                background-color: white;
            }

            .btn-container {
                display: none;
            }

            header {
                background: var(--primary-color) !important;
                -webkit-print-color-adjust: exact;
            }

            .resume-content {
                display: block;
            }

            .sidebar, .main-content {
                box-shadow: none;
                padding: 0;
                margin-bottom: 20px;
            }

            .section {
                page-break-inside: avoid;
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .resume-content {
                grid-template-columns: 1fr;
            }

            .contact-info {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            h1 {
                font-size: 2rem;
            }
        }

        /* PDF-specific class to hide download button */
        .pdf-export .btn-container {
            display: none !important;
        }
    </style>
</head>
<body>
    <div class="container" id="resume-container">
        <header>
            <div class="header-content">
                <h1>Andrew Gotham</h1>
                <p class="tagline">Senior Full-Stack Developer & Software Engineer</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>andreogotema@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-telegram-plane"></i>
                        <span>@SirAndrewGotham</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Russia</span>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-github"></i>
                        <span>sirandrewgotham</span>
                    </div>
                </div>
            </div>
        </header>

        <div class="btn-container">
            <button id="downloadPdf" class="btn">
                <i class="fas fa-download"></i>
                Download Resume PDF
            </button>
        </div>

        <div class="resume-content">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Personal Info -->
                <div class="section">
                    <h2 class="section-title">Personal Info</h2>
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold">Andrew Gotham</h3>
                        <p class="text-primary-500">Senior Full-Stack Developer</p>
                    </div>
                </div>

                <!-- Skills -->
                <div class="section">
                    <h2 class="section-title">Technical Skills</h2>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-name">Laravel Framework</div>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">PHP</div>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">Vue.js / Livewire</div>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">MySQL/PostgreSQL</div>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 88%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">REST API</div>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 92%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">Tailwind CSS</div>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 88%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Languages -->
                <div class="section">
                    <h2 class="section-title">Languages</h2>
                    <ul class="languages-list">
                        <li class="language-item">
                            <span class="language-name">Russian</span>
                            <span class="language-level">C2</span>
                        </li>
                        <li class="language-item">
                            <span class="language-name">English</span>
                            <span class="language-level">C2</span>
                        </li>
                        <li class="language-item">
                            <span class="language-name">Esperanto</span>
                            <span class="language-level">C2</span>
                        </li>
                    </ul>
                </div>

                <!-- Tools & Technologies -->
                <div class="section">
                    <h2 class="section-title">Tools & Technologies</h2>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">Git</span>
                        <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">Docker</span>
                        <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">AWS</span>
                        <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">Nginx</span>
                        <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">PHPUnit</span>
                        <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">Pest</span>
                        <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">Swagger</span>
                        <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">Postman</span>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <!-- Experience -->
                <div class="section">
                    <h2 class="section-title">Work Experience</h2>

                    <div class="experience-item">
                        <div class="item-header">
                            <h3 class="item-title">Programming Engineer</h3>
                            <span class="item-date">2022 - April 1, 2025</span>
                        </div>
                        <div class="item-subtitle">Taris, Inc.</div>
                        <p class="item-description">
                            Development and support of high-load civil engineering web application for cities' utilities services.
                            Leading a team of 5 developers, implementing modern development practices.
                        </p>
                        <h4 class="font-semibold mt-3">Key Responsibilities and Achievements:</h4>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 mt-2">
                            <li>Development, architecture design, practical construction of the back-ends for the commercial services in Laravel</li>
                            <li>Development, design, construction of front-ends with Angular (at the initial stage of work)</li>
                            <li>Development, design, construction of the databases for the company's Web projects (PostgreSQL, MySQL, SQLite)</li>
                            <li>Projects' technical documentation for developers: API with Swagger</li>
                            <li>Automated testing (Pest, Unit), API testing via Postman, Insomnia</li>
                            <li>Access and authorization systems development for the API, including automated data collection systems (robots/drones)</li>
                            <li>Organization, configuration, administration of the remote (cloud) servers</li>
                            <li>DevOps (Ubuntu - Nginx - Postgres)</li>
                            <li>Github: development of the policies and rules for the team, code review, approval of commits, etc.</li>
                            <li>Development of the internal corporate rules, procedures, regulations for the Web development</li>
                            <li>Development planning: setting goals - control - execution of tasks</li>
                        </ul>
                    </div>

                    <div class="experience-item">
                        <div class="item-header">
                            <h3 class="item-title">Web Developer</h3>
                            <span class="item-date">before 2022</span>
                        </div>
                        <div class="item-subtitle">Private Contract Assignments</div>
                        <p class="item-description">
                            Creating websites and online stores for clients from various industries.
                            Working on projects from concept to launch and support.
                        </p>
                        <h4 class="font-semibold mt-3">Key Achievements:</h4>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 mt-2">
                            <li>Developed 15+ successful projects for clients from different business sectors</li>
                            <li>Implemented content management system for non-technical users</li>
                            <li>Optimized SEO metrics, increasing organic traffic by 200%</li>
                            <li>Integrated various third-party APIs for enhanced functionality</li>
                        </ul>
                    </div>
                </div>

                <!-- Education -->
                <div class="section">
                    <h2 class="section-title">Education</h2>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">D.Sc.</h3>
                            <span class="item-date">1988 - 1990</span>
                        </div>
                        <div class="item-subtitle">Moscow Mining Institute</div>
                        <p class="item-description">
                            Mining Engineer.<br />
                            Specialization: practical rock stability studies for underground works, computational analyses.
                        </p>
                    </div>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">B.Sc., M.Sc.</h3>
                            <span class="item-date">1980 - 1985</span>
                        </div>
                        <div class="item-subtitle">Moscow Mining Institute</div>
                        <p class="item-description">
                            Mining Engineer.
                            Specialization: practical rock stability studies for underground works.
                        </p>
                    </div>
                </div>

                <!-- Training -->
                <div class="section">
                    <h2 class="section-title">Competences Training</h2>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">Data Scientist/Analyst with Python</h3>
                            <span class="item-date">2025</span>
                        </div>
                        <div class="item-subtitle">GBOU DPO "Center Professional"</div>
                        <p class="item-description">
                            State-owned professional training school.
                            Certificate: Data Scientist, Data Engineer, Data Analyst with Python.
                        </p>
                    </div>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">Full-stack Web Developer</h3>
                            <span class="item-date">2022</span>
                        </div>
                        <div class="item-subtitle">GBOU DPO "Center Professional"</div>
                        <p class="item-description">
                            State-owned professional training school.
                            Certified as a full-stack web developer with competences in frontend and backend development, css frameworks, php programming, web development process.
                        </p>
                    </div>
                </div>

                <!-- Certificates -->
                <div class="section">
                    <h2 class="section-title">Certificates & Achievements</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-primary-500 mr-4">
                                <i class="fab fa-python"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Data Analyst with Python</h4>
                                <p class="text-gray-600 text-sm">Data Analyst Training Program • 2025</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-primary-500 mr-4">
                                <i class="fas fa-code"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Full Stack Web Developer</h4>
                                <p class="text-gray-600 text-sm">Full Stack Web Developer Training Program • 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>© 2025 Andrew Gotham. All rights reserved.</p>
        </footer>
    </div>

    <script>
        document.getElementById('downloadPdf').addEventListener('click', function() {
            // Add a class to hide the download button during PDF generation
            document.getElementById('resume-container').classList.add('pdf-export');

            const element = document.getElementById('resume-container');
            const opt = {
                margin: 10,
                filename: 'Andrew_Gotham_Resume.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: {
                    scale: 2,
                    useCORS: true,
                    logging: false
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            // Show loading state
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Generating PDF...';
            this.disabled = true;

            // Generate PDF
            html2pdf().set(opt).from(element).save().then(() => {
                // Remove the PDF export class and restore button state
                document.getElementById('resume-container').classList.remove('pdf-export');
                this.innerHTML = originalText;
                this.disabled = false;
            }).catch(error => {
                console.error('PDF generation error:', error);
                document.getElementById('resume-container').classList.remove('pdf-export');
                this.innerHTML = originalText;
                this.disabled = false;
                alert('Error generating PDF. Please try again.');
            });
        });

        // Animate skill bars on page load
        window.addEventListener('load', function() {
            const skillBars = document.querySelectorAll('.skill-level');
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
            });
        });
    </script>
</body>
</html>

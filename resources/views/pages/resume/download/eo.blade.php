<!DOCTYPE html>
<html lang="eo">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andreo Gotema - Profesia Kariertabelo</title>
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
                <h1>Andreo Gotema</h1>
                <p class="tagline">Spertplena Full-Stack Programisto kaj Programada Inĝeniero</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+7 (991) 873-9137</span>
                    </div>
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
                        <span>Rusio</span>
                    </div>
{{--                    <div class="contact-item">--}}
{{--                        <i class="fab fa-github"></i>--}}
{{--                        <span>SirAndrewGotham</span>--}}
{{--                    </div>--}}
                </div>
            </div>
        </header>

        <div class="btn-container">
            <button id="downloadPdf" class="btn">
                <i class="fas fa-download"></i>
                Elŝuti Kariertabelon PDF
            </button>
        </div>

        <div class="resume-content">
            <!-- Flanka Strio -->
            <div class="sidebar">
                <!-- Persona Informo -->
                <div class="section">
                    <h2 class="section-title">Persona Informo</h2>
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold">Andreo Gotema</h3>
                        <p class="text-primary-500">Spertplena Full-Stack Programisto</p>
                    </div>
                </div>

                <!-- Kapablecoj -->
                <div class="section">
                    <h2 class="section-title">Teknikaj Kapablecoj</h2>
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

                <!-- Lingvoj -->
                <div class="section">
                    <h2 class="section-title">Lingvoj</h2>
                    <ul class="languages-list">
                        <li class="language-item">
                            <span class="language-name">Rusa</span>
                            <span class="language-level">C2</span>
                        </li>
                        <li class="language-item">
                            <span class="language-name">Angla</span>
                            <span class="language-level">C2</span>
                        </li>
                        <li class="language-item">
                            <span class="language-name">Esperanto</span>
                            <span class="language-level">C2</span>
                        </li>
                    </ul>
                </div>

                <!-- Iloj kaj Teknologioj -->
                <div class="section">
                    <h2 class="section-title">Iloj kaj Teknologioj</h2>
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

            <!-- Ĉefa Enhavo -->
            <div class="main-content">
                <!-- Sperto -->
                <div class="section">
                    <h2 class="section-title">Labora Sperto</h2>

                    <div class="experience-item">
                        <div class="item-header">
                            <h3 class="item-title">Programada Inĝeniero</h3>
                            <span class="item-date">2022 - 1 Aprilo 2025</span>
                        </div>
                        <div class="item-subtitle">Taris, Inc.</div>
                        <p class="item-description">
                            Evoluigo kaj subteno de alteŝarĝa konstruinĝeniera reteja aplikaĵo por urbaj utilaj servoj.
                            Gvidado de teamo de 5 programistoj, efektivigado de modernaj evoluigaj praktikoj.
                        </p>
                        <h4 class="font-semibold mt-3">Ŝlosilaj Respondecoj kaj Atinigoj:</h4>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 mt-2">
                            <li>Evoluigo, arkitektura dezajno, praktika konstruado de backend-oj por komercaj servoj en Laravel</li>
                            <li>Evoluigo, dezajno, konstruado de frontend-oj kun Angular (en la komenca etapo de laboro)</li>
                            <li>Evoluigo, dezajno, konstruado de datumbazoj por la retejaj projektoj de la kompanio (PostgreSQL, MySQL, SQLite)</li>
                            <li>Teknika dokumentado de projektoj por programistoj: API kun Swagger</li>
                            <li>Aŭtomata testado (Pest, Unit), API-testado per Postman, Insomnia</li>
                            <li>Evoluigo de sistemoj por aliro kaj aŭtorizado por API, inkluzive de aŭtomataj datumkolektaj sistemoj (robotoj/senpilotaj aviadiloj)</li>
                            <li>Organizado, agordo, administrado de foraj (nubaj) serviloj</li>
                            <li>DevOps (Ubuntu - Nginx - Postgres)</li>
                            <li>Github: evoluigo de politikoj kaj reguloj por la teamo, koda revizio, aprobo de kommitoj, ktp.</li>
                            <li>Evoluigo de internaj korporaciaj reguloj, proceduroj, regularoj por reteja evoluigo</li>
                            <li>Planado de evoluigo: fiksado de celoj - kontrolo - plenumado de taskoj</li>
                        </ul>
                    </div>

                    <div class="experience-item">
                        <div class="item-header">
                            <h3 class="item-title">Reteja Programisto</h3>
                            <span class="item-date">antaŭ 2022</span>
                        </div>
                        <div class="item-subtitle">Privataj Kontraktaj Taskoj</div>
                        <p class="item-description">
                            Kreado de retejoj kaj retvendejoj por klientoj el diversaj industrioj.
                            Laboro pri projektoj de koncepto ĝis lanĉo kaj subteno.
                        </p>
                        <h4 class="font-semibold mt-3">Ŝlosilaj Atinigoj:</h4>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 mt-2">
                            <li>Evoluigis 15+ sukcesajn projektojn por klientoj el malsamaj komercaj sektoroj</li>
                            <li>Efektivigis enhavadministran sistemon por neteknikaj uzantoj</li>
                            <li>Optimumigis SEO-metrikojn, pliigante organikan trafikon je 200%</li>
                            <li>Integrigis diversajn triapartiajn API-ojn por plibonigita funkcieco</li>
                        </ul>
                    </div>
                </div>

                <!-- Edukado -->
                <div class="section">
                    <h2 class="section-title">Edukado</h2>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">D.Sc.</h3>
                            <span class="item-date">1988 - 1990</span>
                        </div>
                        <div class="item-subtitle">Moskova Mina Instituto</div>
                        <p class="item-description">
                            Mina Inĝeniero.<br />
                            Specialiĝo: praktikaj studoj pri roka stabileco por subteraj laboroj, komputaj analizoj.
                        </p>
                    </div>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">B.Sc., M.Sc.</h3>
                            <span class="item-date">1980 - 1985</span>
                        </div>
                        <div class="item-subtitle">Moskova Mina Instituto</div>
                        <p class="item-description">
                            Mina Inĝeniero.
                            Specialiĝo: praktikaj studoj pri roka stabileco por subteraj laboroj.
                        </p>
                    </div>
                </div>

                <!-- Trejnado -->
                <div class="section">
                    <h2 class="section-title">Kompetenteca Trejnado</h2>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">Data Scientist/Analizisto kun Python</h3>
                            <span class="item-date">2025</span>
                        </div>
                        <div class="item-subtitle">GBOU DPO "Centro Profesiulo"</div>
                        <p class="item-description">
                            Ŝtata profesia lernejo.
                            Atestilo: Data Scientist, Data Engineer, Data Analyst kun Python.
                        </p>
                    </div>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">Full-stack Reteja Programisto</h3>
                            <span class="item-date">2022</span>
                        </div>
                        <div class="item-subtitle">GBOU DPO "Centro Profesiulo"</div>
                        <p class="item-description">
                            Ŝtata profesia lernejo.
                            Atestita kiel full-stack reteja programisto kun kompetentecoj en frontend kaj backend evoluigo, CSS kadroj, PHP programado, reteja evoluiga procezo.
                        </p>
                    </div>
                </div>

                <!-- Atestiloj -->
                <div class="section">
                    <h2 class="section-title">Atestiloj kaj Atinigoj</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-primary-500 mr-4">
                                <i class="fab fa-python"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Data Analyst kun Python</h4>
                                <p class="text-gray-600 text-sm">Data Analyst Trejnada Programo • 2025</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-primary-500 mr-4">
                                <i class="fas fa-code"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Full Stack Reteja Programisto</h4>
                                <p class="text-gray-600 text-sm">Full Stack Web Developer Trejnada Programo • 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>Aŭtorrajto © 2025 Andreo Gotema. Ĉiuj rajtoj rezervitaj.</p>
        </footer>
    </div>

    <script>
        document.getElementById('downloadPdf').addEventListener('click', function() {
            // Add a class to hide the download button during PDF generation
            document.getElementById('resume-container').classList.add('pdf-export');

            const element = document.getElementById('resume-container');
            const opt = {
                margin: 10,
                filename: 'Andrew_Gotham_Kariertabelo.pdf',
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
            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Generante PDF...';
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
                alert('Eraro generante PDF. Bonvolu reprovi.');
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

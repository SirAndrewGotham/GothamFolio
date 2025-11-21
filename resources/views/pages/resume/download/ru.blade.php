<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Андрей Готэм - Профессиональное Резюме</title>
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
                <h1>Андрей Готэм</h1>
                <p class="tagline">Senior Full-Stack разработчик & Инженер-программист</p>
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
                        <span>Россия</span>
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
                Скачать резюме (PDF)
            </button>
        </div>

        <div class="resume-content">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Personal Info -->
                <div class="section">
                    <h2 class="section-title">Личная информация</h2>
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold">Андрей Готэм</h3>
                        <p class="text-primary-500">Senior Full-Stack разработчик</p>
                    </div>
                </div>

                <!-- Skills -->
                <div class="section">
                    <h2 class="section-title">Технические навыки</h2>
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
                    <h2 class="section-title">Языки</h2>
                    <ul class="languages-list">
                        <li class="language-item">
                            <span class="language-name">Русский</span>
                            <span class="language-level">C2</span>
                        </li>
                        <li class="language-item">
                            <span class="language-name">Английский</span>
                            <span class="language-level">C2</span>
                        </li>
                        <li class="language-item">
                            <span class="language-name">Эсперанто</span>
                            <span class="language-level">C2</span>
                        </li>
                    </ul>
                </div>

                <!-- Tools & Technologies -->
                <div class="section">
                    <h2 class="section-title">Инструменты и технологии</h2>
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
                    <h2 class="section-title">Опыт работы</h2>

                    <div class="experience-item">
                        <div class="item-header">
                            <h3 class="item-title">Инженер-программист</h3>
                            <span class="item-date">2022 - 1 апреля 2025</span>
                        </div>
                        <div class="item-subtitle">Taris, Inc.</div>
                        <p class="item-description">
                            Разработка и поддержка высоконагруженного веб-приложения для гражданского строительства для городских коммунальных служб.
                            Руководство командой из 5 разработчиков, внедрение современных практик разработки.
                        </p>
                        <h4 class="font-semibold mt-3">Ключевые обязанности и достижения:</h4>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 mt-2">
                            <li>Разработка, проектирование архитектуры, практическое построение бэкендов для коммерческих сервисов на Laravel</li>
                            <li>Разработка, дизайн, построение фронтендов с использованием Angular (на начальном этапе работы)</li>
                            <li>Разработка, проектирование, построение баз данных для веб-проектов компании (PostgreSQL, MySQL, SQLite)</li>
                            <li>Техническая документация проектов для разработчиков: API с Swagger</li>
                            <li>Автоматизированное тестирование (Pest, Unit), тестирование API через Postman, Insomnia</li>
                            <li>Разработка систем доступа и авторизации для API, включая системы автоматизированного сбора данных (роботы/дроны)</li>
                            <li>Организация, настройка, администрирование удаленных (облачных) серверов</li>
                            <li>DevOps (Ubuntu - Nginx - Postgres)</li>
                            <li>Github: разработка политик и правил для команды, код-ревью, утверждение коммитов и т.д.</li>
                            <li>Разработка внутренних корпоративных правил, процедур, регламентов для веб-разработки</li>
                            <li>Планирование разработки: постановка целей - контроль - выполнение задач</li>
                        </ul>
                    </div>

                    <div class="experience-item">
                        <div class="item-header">
                            <h3 class="item-title">Веб-разработчик</h3>
                            <span class="item-date">до 2022</span>
                        </div>
                        <div class="item-subtitle">Частные контрактные задания</div>
                        <p class="item-description">
                            Создание веб-сайтов и интернет-магазинов для клиентов из различных отраслей.
                            Работа над проектами от концепции до запуска и поддержки.
                        </p>
                        <h4 class="font-semibold mt-3">Ключевые достижения:</h4>
                        <ul class="list-disc list-inside text-gray-600 space-y-1 mt-2">
                            <li>Разработал 15+ успешных проектов для клиентов из разных бизнес-секторов</li>
                            <li>Реализовал систему управления контентом для нетехнических пользователей</li>
                            <li>Оптимизировал SEO-показатели, увеличив органический трафик на 200%</li>
                            <li>Интегрировал различные сторонние API для расширения функциональности</li>
                        </ul>
                    </div>
                </div>

                <!-- Education -->
                <div class="section">
                    <h2 class="section-title">Образование</h2>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">Аспирантура МГИ</h3>
                            <span class="item-date">1988 - 1990</span>
                        </div>
                        <div class="item-subtitle">Московский горный институт</div>
                        <p class="item-description">
                            Горный инженер.<br />
                            Специализация: практические исследования устойчивости горных пород для подземных работ, вычислительные анализы.
                        </p>
                    </div>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">Бакалавриат, магистратура</h3>
                            <span class="item-date">1980 - 1985</span>
                        </div>
                        <div class="item-subtitle">Московский горный институт</div>
                        <p class="item-description">
                            Горный инженер.
                            Специализация: практические исследования устойчивости горных пород для подземных работ.
                        </p>
                    </div>
                </div>

                <!-- Training -->
                <div class="section">
                    <h2 class="section-title">Обучение компетенциям</h2>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">Data Scientist/Аналитик с Python</h3>
                            <span class="item-date">2025</span>
                        </div>
                        <div class="item-subtitle">ГБОУ ДПО "Центр Профессионал"</div>
                        <p class="item-description">
                            Государственное учреждение профессионального обучения.
                            Сертификат: Data Scientist, Data Engineer, Data Analyst с Python.
                        </p>
                    </div>

                    <div class="education-item">
                        <div class="item-header">
                            <h3 class="item-title">Full-stack веб-разработчик</h3>
                            <span class="item-date">2022</span>
                        </div>
                        <div class="item-subtitle">ГБОУ ДПО "Центр Профессионал"</div>
                        <p class="item-description">
                            Государственное учреждение профессионального обучения.
                            Сертифицирован как full-stack веб-разработчик с компетенциями во фронтенд и бэкенд разработке, CSS фреймворках, программировании на PHP, процессе веб-разработки.
                        </p>
                    </div>
                </div>

                <!-- Certificates -->
                <div class="section">
                    <h2 class="section-title">Сертификаты и достижения</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-primary-500 mr-4">
                                <i class="fab fa-python"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Data Analyst с Python</h4>
                                <p class="text-gray-600 text-sm">Программа обучения Data Analyst • 2025</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center text-primary-500 mr-4">
                                <i class="fas fa-code"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Full Stack веб-разработчик</h4>
                                <p class="text-gray-600 text-sm">Программа обучения Full Stack Web Developer • 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>© 2025 Андрей Готэм. Все права защищены.</p>
        </footer>
    </div>

    <script>
        document.getElementById('downloadPdf').addEventListener('click', function() {
            // Add a class to hide the download button during PDF generation
            document.getElementById('resume-container').classList.add('pdf-export');

            const element = document.getElementById('resume-container');
            const opt = {
                margin: 10,
                filename: 'Эндрю_Готэм_Резюме.pdf',
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
            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Генерация PDF...';
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
                alert('Ошибка генерации PDF. Пожалуйста, попробуйте снова.');
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

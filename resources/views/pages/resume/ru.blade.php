<x-frontend.layouts.app>
    <div class="w-full pt-20">
        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto text-center fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Резюме Андрея Готэма</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto">
                        Senior Full-Stack разработчик с более чем 30-летним опытом в веб-разработке.
                        Специализация на создании современных, масштабируемых веб-приложений и backend API с использованием экосистемы Laravel.
                    </p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-briefcase text-primary-500 mr-2"></i>
                            <span>12+ лет опыта</span>
                        </div>
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-project-diagram text-primary-500 mr-2"></i>
                            <span>50+ завершенных проектов</span>
                        </div>
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-users text-primary-500 mr-2"></i>
                            <span>Командная разработка</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Содержимое резюме -->
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                    <!-- Боковая панель -->
                    <div class="lg:col-span-1 space-y-8 fade-in">
                        <!-- Личная информация -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 print:shadow-none">
                            <div class="text-center mb-6">
                                <div class="w-24 h-24 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-2xl mx-auto mb-4">
                                    A
                                </div>
                                <h2 class="text-xl font-bold">Андрей Готэм</h2>
                                <p class="text-primary-500">Senior Full-Stack разработчик</p>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <i class="fas fa-envelope text-primary-500 w-5 mr-3"></i>
                                    <a href="mailto:andreogotema@gmail.com" target="_blank" class="text-sm hover:text-primary-500">andreogotema@gmail.com</a>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-phone text-primary-500 w-5 mr-3"></i>
                                    <span class="text-sm">+7 (123) 456-78-90</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary-500 w-5 mr-3"></i>
                                    <span class="text-sm">Россия</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fab fa-github text-primary-500 w-5 mr-3"></i>
                                    <a href="https://github.com/sirandrewgotham" target="_blank" class="text-sm hover:text-primary-500">sirandrewgotham</a>
                                </div>
                            </div>
                        </div>

                        <!-- Ключевые показатели -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 print:shadow-none">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-primary-500 mr-2"></i>
                                Ключевые показатели
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Laravel</span>
                                        <span class="text-sm font-bold">95%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="95" style="width: 0"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">PHP</span>
                                        <span class="text-sm font-bold">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="90" style="width: 0"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span>Vue.js/Livewire</span>
                                        <span class="font-bold text-primary-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="85" style="width: 0"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <a href="/competences" class="flex items-center justify-center text-primary-500 hover:text-primary-600 font-medium text-sm">
                                    <span>Подробнее о компетенциях</span>
                                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Языки -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 print:shadow-none">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-language text-primary-500 mr-2"></i>
                                Языки
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span>Русский</span>
                                    <span class="text-primary-500 font-bold">C2</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Английский</span>
                                    <span class="text-primary-500 font-bold">C2</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Эсперанто</span>
                                    <span class="text-primary-500 font-bold">C2</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Основное содержимое -->
                    <div class="lg:col-span-3 space-y-8">
                        <!-- Секция опыта -->
                        <section id="experience" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <div class="flex items-center justify-between mb-6">
                                    <h2 class="text-2xl font-bold flex items-center">
                                        <i class="fas fa-briefcase text-primary-500 mr-3"></i>
                                        Опыт работы
                                    </h2>
                                    <a href="/resume/download" target="_blank" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                        <i class="fas fa-download mr-2"></i>
                                        <span>Скачать резюме (PDF)</span>
                                    </a>
                                </div>

                                <div class="space-y-8">
                                    <!-- Текущая работа -->
                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Инженер-программист</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">2022 - 1 апреля 2025</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium mb-3"><a href="https://taris.ru" target="_blank">Taris, Inc.</a></div>
                                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                                            Разработка и поддержка высоконагруженного веб-приложения для гражданского строительства для городских коммунальных служб.
                                            Руководство командой из 5 разработчиков, внедрение современных практик разработки.
                                        </p>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800 dark:text-gray-200">Ключевые обязанности и достижения:</h4>
                                            <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-1">
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
                                        <div class="mt-4 flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/laravel">Laravel</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/sanctum">Sanctum</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm">RESTfull API</span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/pest">Pest</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/postman">Postman</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/swagger">Swagger</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm">PostgreSQL</span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/python">Python</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/nginx">Nginx</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm">Интеграция поддержки Email/Telegram</span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/angular">Angular</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/typescript">Typescript</a></span>
                                        </div>
                                    </div>

                                    <!-- Предыдущая работа -->
                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Веб-разработчик</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">до 2022</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium mb-3">Частные контрактные задания</div>
                                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                                            Создание веб-сайтов и интернет-магазинов для клиентов из различных отраслей.
                                            Работа над проектами от концепции до запуска и поддержки.
                                        </p>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800 dark:text-gray-200">Ключевые достижения:</h4>
                                            <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>Разработал 15+ успешных проектов для клиентов из разных бизнес-секторов</li>
                                                <li>Реализовал систему управления контентом для нетехнических пользователей</li>
                                                <li>Оптимизировал SEO-показатели, увеличив органический трафик на 200%</li>
                                                <li>Интегрировал различные сторонние API для расширения функциональности</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Секция навыков -->
                        <section id="skills" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <div class="flex items-center justify-between mb-6">
                                    <h2 class="text-2xl font-bold flex items-center">
                                        <i class="fas fa-tools text-primary-500 mr-3"></i>
                                        Технические навыки
                                    </h2>
                                    <a href="/competences" class="text-primary-500 hover:text-primary-600 font-medium flex items-center text-sm">
                                        <span>Все компетенции</span>
                                        <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <!-- Backend навыки -->
                                    <div>
                                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                                            <i class="fas fa-server text-primary-500 mr-2"></i>
                                            <a href="/competences/backend" class="hover:text-primary-500 transition-colors group">
                                                Backend разработка
                                                <i class="fas fa-external-link-alt ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                            </a>
                                        </h3>
                                        <div class="space-y-4">
                                            <div>
                                                <div class="flex justify-between mb-1">
                                                    <span>Laravel Framework</span>
                                                    <span class="font-bold text-primary-500">95%</span>
                                                </div>
                                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                    <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="95" style="width: 0"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="flex justify-between mb-1">
                                                    <span>PHP</span>
                                                    <span class="font-bold text-primary-500">90%</span>
                                                </div>
                                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                    <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="90" style="width: 0"></div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>MySQL/PostgreSQL</span>
                                                        <span class="font-bold text-primary-500">88%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="88" style="width: 0"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>REST API</span>
                                                        <span class="font-bold text-primary-500">92%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="92" style="width: 0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Frontend навыки -->
                                        <div>
                                            <h3 class="text-lg font-semibold mb-4 flex items-center">
                                                <i class="fas fa-desktop text-primary-500 mr-2"></i>
                                                <a href="/competences/frontend" class="hover:text-primary-500 transition-colors group">
                                                    Frontend разработка
                                                    <i class="fas fa-external-link-alt ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                                </a>
                                            </h3>
                                            <div class="space-y-4">
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>Vue.js / Livewire</span>
                                                        <span class="font-bold text-primary-500">85%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="85" style="width: 0"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>Tailwind CSS</span>
                                                        <span class="font-bold text-primary-500">88%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="88" style="width: 0"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>Alpine.js</span>
                                                        <span class="font-bold text-primary-500">82%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="88" style="width: 0"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>JavaScript/TypeScript</span>
                                                        <span class="font-bold text-primary-500">80%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="88" style="width: 0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Инструменты и технологии -->
                                    <div class="mt-8">
                                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                                            <i class="fas fa-wrench text-primary-500 mr-2"></i>
                                            <a href="/competences/tools" class="hover:text-primary-500 transition-colors group">
                                                Инструменты и технологии
                                                <i class="fas fa-external-link-alt ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                            </a>
                                        </h3>
                                        <div class="flex flex-wrap gap-3">
                                            <a href="/competences/git" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Git</a>
                                            <a href="/competences/composer" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Composer</a>
                                            <a href="/competences/docker" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Docker</a>
                                            <a href="/competences/npm" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Npm/yarn</a>
                                            <a href="/competences/aws" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">AWS</a>
                                            <a href="/competences/yandex-cloud" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Yandex Cloud</a>
                                            <a href="/competences/nginx" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Nginx</a>
                                            <a href="/competences/phpunit" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">PHPUnit</a>
                                            <a href="/competences/pest" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Pest</a>
                                            <a href="/competences/db-management-tools" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Инструменты управления БД</a>
                                        </div>
                                    </div>

                                    <!-- CTA карточка для компетенций -->
                                    <div class="mt-8 bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 text-center">
                                        <h3 class="text-xl font-bold mb-2">Полный список компетенций</h3>
                                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                                            Более 50+ технологий, инструментов и методологий с подробным описанием уровня владения и примерами применения
                                        </p>
                                        <a href="/competences" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-list-check mr-2"></i>
                                            <span>Открыть все компетенции</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Секция обучения компетенциям -->
                        <section id="training" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-graduation-cap text-primary-500 mr-1"></i><i class="fas fa-tools text-primary-500 mr-3"></i>
                                    Обучение компетенциям
                                </h2>

                                <div class="space-y-6">
                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Data Scientist/Аналитик с Python</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">2025</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium"><a href="https://eduprof.mos.ru" target="_blank">ГБОУ ДПО "Центр Профессионал"</a></div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-2">
                                            Государственное учреждение профессионального обучения.
                                            Сертификат: Data Scientist, Data Engineer, Data Analyst с Python.
                                        </p>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Full-stack веб-разработчик</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">2022</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium"><a href="https://eduprof.mos.ru" target="_blank">ГБОУ ДПО "Центр Профессионал"</a></div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-2">
                                            Государственное учреждение профессионального обучения.
                                            Сертифицирован как full-stack веб-разработчик с компетенциями во фронтенд и бэкенд разработке, CSS фреймворках, программировании на PHP, процессе веб-разработки.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Секция образования -->
                        <section id="education" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-graduation-cap text-primary-500 mr-3"></i>
                                    Образование
                                </h2>

                                <div class="space-y-6">
                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Аспирантура МГИ</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">1988 - 1990</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium">Московский горный институт</div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-2">
                                            Горный инженер.<br />
                                            Специализация: практические исследования устойчивости горных пород для подземных работ, вычислительные анализы.
                                        </p>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Бакалавриат, магистратура</h3><br />
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">1980 - 1985</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium">Московский горный институт</div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-2">
                                            Горный инженер.
                                            Специализация: практические исследования устойчивости горных пород для подземных работ.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Секция сертификатов -->
                        <section id="certificates" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-award text-primary-500 mr-3"></i>
                                    Сертификаты и достижения
                                </h2>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                            <i class="fab fa-laravel"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Data Analyst с Python</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">Программа обучения Data Analyst • 2025</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                            <i class="fab fa-aws"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Full Stack веб-разработчик</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">Программа обучения Full Stack Web Developer • 2022</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>

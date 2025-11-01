<x-frontend.layouts.app>
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
                                        Компетенции
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                        Backend Development
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </section>

            <!-- Hero Section -->
            <section class="py-12 bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                            <!-- Icon and Basic Info -->
                            <div class="flex-shrink-0">
                                <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-red-500 to-pink-500 flex items-center justify-center text-white shadow-lg">
                                    <i class="fab fa-laravel text-4xl"></i>
                                </div>
                            </div>

                            <!-- Main Info -->
                            <div class="flex-grow text-center lg:text-left">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                    <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Laravel</h1>
                                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Основной инструмент
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                    Full-stack PHP фреймворк для элегантной веб-разработки с выразительным синтаксисом. Мой основной инструмент с 2015 года.
                                </p>

                                <!-- Stats -->
                                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-3">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">95%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">9+ лет</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с Laravel 5</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                            <i class="fas fa-code-branch"></i>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v12.x</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Текущая версия</div>
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
                                <!-- About Laravel -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-info-circle text-red-500 mr-3"></i>
                                        О Laravel
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            <strong>Laravel</strong> — это современный full-stack фреймворк для веб-приложений на PHP,
                                            который сочетает в себе мощь, элегантность и простоту использования. Созданный Тейлором Отвеллом,
                                            Laravel следует принципам MVC (Model-View-Controller) и предоставляет разработчикам богатый набор
                                            инструментов для создания масштабируемых и поддерживаемых приложений.
                                        </p>

                                        <h3>Ключевые преимущества</h3>
                                        <ul>
                                            <li><strong>Элегантный синтаксис</strong> — выразительный и интуитивно понятный код</li>
                                            <li><strong>Богатая экосистема</strong> — огромное сообщество и пакеты</li>
                                            <li><strong>Встроенные функции</strong> — аутентификация, кэширование, очереди из коробки</li>
                                            <li><strong>Отличная документация</strong> — одна из лучших в индустрии</li>
                                            <li><strong>Active Record ORM</strong> — Eloquent для работы с базами данных</li>
                                            <li><strong>Миграции баз данных</strong> — контроль версий для схемы БД</li>
                                            <li><strong>Тестирование</strong> — встроенная поддержка PHPUnit</li>
                                        </ul>

                                        <h3>Рекомендуемое применение</h3>
                                        <p>
                                            Laravel идеально подходит для широкого спектра проектов — от простых блогов и корпоративных сайтов
                                            до сложных enterprise-приложений и API-сервисов. Особенно эффективен для:
                                        </p>
                                        <ul>
                                            <li>Корпоративных порталов и CRM-систем</li>
                                            <li>Интернет-магазинов и e-commerce платформ</li>
                                            <li>REST API для мобильных приложений</li>
                                            <li>Систем управления контентом (CMS)</li>
                                            <li>Социальных сетей и сообществ</li>
                                            <li>Систем аналитики и отчетности</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- My Laravel Journey -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-road text-red-500 mr-3"></i>
                                        Мой путь с Laravel
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Я начал работать с Laravel в 2015 году с версии 5.0, когда фреймворк уже стал зрелым инструментом
                                            с мощной экосистемой. С тех пор я прошел путь от изучения основ до создания сложных enterprise-приложений
                                            и участия в open-source проектах сообщества.
                                        </p>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                            <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-code-branch text-red-500 mr-2"></i>
                                                    Миграция Legacy-проектов
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Имею опыт успешного переноса legacy-проектов с других фреймворков (Yii/Yii2, CodeIgniter) на Laravel,
                                                    а также обновления старых версий Laravel до современных.
                                                </p>
                                            </div>
                                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                                <h3 class="text-lg font-bold mb-3 flex items-center">
                                                    <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                                    Проектирование с нуля
                                                </h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Разрабатываю полноценные Laravel-приложения на основе технических спецификаций,
                                                    применяя лучшие практики и современные архитектурные подходы.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- My Experience -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-user-check text-red-500 mr-3"></i>
                                        Мой опыт с Laravel
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Работаю с Laravel с 2015 года, начиная с версии 5.0. За это время прошел путь от изучения основ
                                            до создания сложных enterprise-приложений и участия в open-source проектах сообщества.
                                        </p>

                                        <h3>Специализированные навыки</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>RESTful API разработка</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Миграция legacy-кода на Laravel</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Обновление старых версий Laravel</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Проектирование приложений с нуля</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Eloquent ORM и реляционные связи</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Миграции и сидеры баз данных</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Blade шаблонизатор и компоненты</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Аутентификация и авторизация</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Очереди и фоновые задачи</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Тестирование с PHPUnit</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Оптимизация производительности</span>
                                            </div>
                                            <div class="flex items-center">
                                                <i class="fas fa-check text-green-500 mr-2"></i>
                                                <span>Интеграция с внешними API</span>
                                            </div>
                                        </div>

                                        <h3>Ключевые проекты</h3>
                                        <ul>
                                            <li><strong>GothamFolio</strong> — личное портфолио на Laravel 10 с Livewire и Tailwind</li>
                                            <li><strong>Telescan Web</strong> — аналитическая платформа с микросервисной архитектурой</li>
                                            <li><strong>Корпоративный портал ООО «Тарис»</strong> — система управления бизнес-процессами</li>
                                            <li><strong>API для мобильного приложения</strong> — RESTful сервис с JWT аутентификацией</li>
                                            <li><strong>Миграция Yii2 проекта</strong> — перенос корпоративного портала на Laravel</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Technical Details -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fas fa-cogs text-red-500 mr-3"></i>
                                        Технические детали
                                    </h2>
                                    <div class="content-section">
                                        <h3>Архитектурные особенности</h3>
                                        <p>
                                            Laravel следует принципам чистой архитектуры и Domain-Driven Design (DDD), предоставляя гибкие
                                            инструменты для создания поддерживаемых приложений. Ключевые архитектурные компоненты:
                                        </p>
                                        <ul>
                                            <li><strong>Service Container</strong> — мощная система внедрения зависимостей</li>
                                            <li><strong>Service Providers</strong> — централизованная регистрация сервисов</li>
                                            <li><strong>Middleware</strong> — фильтрация HTTP-запросов</li>
                                            <li><strong>Events & Listeners</strong> — событийно-ориентированная архитектура</li>
                                            <li><strong>Jobs & Queues</strong> — обработка фоновых задач</li>
                                        </ul>

                                        <h3>Экосистема и инструменты</h3>
                                        <p>
                                            Работаю со всей экосистемой Laravel, включая:
                                        </p>
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Livewire</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Eloquent</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Artisan CLI</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Migrations</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Blade</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Queues</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Telescope</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Horizon</span>
                                            <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Socialite</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- GitHub Projects -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                                        <i class="fab fa-github text-red-500 mr-3"></i>
                                        Проекты на GitHub
                                    </h2>
                                    <div class="content-section">
                                        <p>
                                            Некоторые из моих Laravel проектов можно найти на GitHub:
                                        </p>
                                        <div class="mt-4">
                                            <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                                <i class="fab fa-github mr-2"></i>
                                                <span>SirAndrewGotham на GitHub</span>
                                            </a>
                                        </div>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            В моем портфолио на этом сайте представлены проекты, разработанные с использованием Laravel.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="space-y-6">
                                <!-- Proficiency Card -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-chart-bar text-red-500 mr-2"></i>
                                        Уровень владения
                                    </h3>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Общее владение</span>
                                                <span class="text-sm font-bold text-red-500">95%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-red-500 to-pink-500"
                                                     data-width="95%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">REST API</span>
                                                <span class="text-sm font-bold text-green-500">98%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="98%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Eloquent ORM</span>
                                                <span class="text-sm font-bold text-green-500">95%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Legacy Migration</span>
                                                <span class="text-sm font-bold text-blue-500">90%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between mb-1">
                                                <span class="text-sm">Performance</span>
                                                <span class="text-sm font-bold text-purple-500">88%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Facts -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-lightbulb text-red-500 mr-2"></i>
                                        Быстрые факты
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-red-500 w-5 mr-3"></i>
                                            <span class="text-sm">Опыт: <strong>9+ лет</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code text-red-500 w-5 mr-3"></i>
                                            <span class="text-sm">Версия: <strong>Laravel 12.x</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-project-diagram text-red-500 w-5 mr-3"></i>
                                            <span class="text-sm">Проектов: <strong>30+</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-certificate text-red-500 w-5 mr-3"></i>
                                            <span class="text-sm">Сертификат: <strong>Laravel Certified</strong></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code-branch text-red-500 w-5 mr-3"></i>
                                            <span class="text-sm">Legacy Migration: <strong>5+ проектов</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Related Competences -->
                                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                    <h3 class="text-lg font-bold mb-4 flex items-center">
                                        <i class="fas fa-network-wired text-red-500 mr-2"></i>
                                        Связанные компетенции
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                <i class="fab fa-php text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-red-500 transition-colors">PHP</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">95% владения</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-database text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-red-500 transition-colors">MySQL</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">88% владения</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/livewire" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-bolt text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-red-500 transition-colors">Livewire</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">85% владения</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                        </a>
                                        <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                            <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                                <i class="fas fa-wind text-sm"></i>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="font-medium group-hover:text-red-500 transition-colors">Tailwind CSS</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">90% владения</div>
                                            </div>
                                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Call to Action -->
                                <div class="bg-gradient-to-r from-red-500 to-pink-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                    <h3 class="text-lg font-bold mb-2">Интересует сотрудничество?</h3>
                                    <p class="text-sm mb-4">Готов обсудить ваш проект на Laravel</p>
                                    <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-red-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                        <i class="fas fa-envelope mr-2"></i>
                                        Связаться со мной
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
</x-frontend.layouts.app>

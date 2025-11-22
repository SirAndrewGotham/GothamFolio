<x-frontend.layouts.app>
    <!-- Основной контент -->
    <main class="w-full pt-20" x-data="portfolioItemApp()" x-init="init()">
        <!-- Хлебные крошки -->
        <section class="py-6 bg-gray-50 dark:bg-gray-800/30 border-b border-gray-200 dark:border-gray-700">
            <div class="fluid-container">
                <nav class="flex fade-in" aria-label="Хлебные крошки">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="/" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Портфолио
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio/laravel" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Проекты Laravel
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Модуль ТВ-инспекции IMUS City
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой раздела проекта -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Информация о проекте -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Модуль ТВ-инспекции IMUS City</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Завершенный проект
                                    </span>
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-industry mr-1 text-xs"></i>
                                        Промышленное ПО
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Веб-сервис для управления и анализа данных ТВ-инспекции канализационных сетей.
                                Интеграция с системой IMUS City для автоматизации процессов контроля и мониторинга.
                            </p>

                            <!-- Статистика проекта -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2023</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Год разработки</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center text-cyan-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">4 месяца</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Время разработки</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Backend</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Тип проекта</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Кнопки действий -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://taris.ru/programmnoe-obespechenie-telescan/web-servis-imus" target="_blank" class="inline-flex items-center px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Официальный сайт</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Кейс проекта</span>
                                </button>
                            </div>
                        </div>

                        <!-- Иконка проекта -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-search text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if($project->hasGalleryImages())
            <!-- Галерея проекта -->
            <section class="py-16">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="text-3xl font-bold mb-12 text-center fade-in">Галерея проекта</h2>

                        <!-- Основная галерея -->
                        <div class="project-gallery main mb-8 fade-in">
                            <div class="gallery-item h-96" @click="openLightbox(0)">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Интерфейс модуля ТВ-инспекции" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                    <div class="opacity-0 hover:opacity-100 transition-opacity duration-300">
                                        <i class="fas fa-search-plus text-white text-2xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="gallery-item h-44" @click="openLightbox(1)">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Анализ данных инспекции" class="w-full h-full object-cover">
                                </div>
                                <div class="gallery-item h-44" @click="openLightbox(2)">
                                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Отчеты и статистика" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>

                        <!-- Дополнительная галерея -->
                        <div class="project-gallery secondary fade-in">
                            <div class="gallery-item h-64" @click="openLightbox(3)">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Интеграция с IMUS City" class="w-full h-full object-cover">
                            </div>
                            <div class="gallery-item h-64" @click="openLightbox(4)">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Визуализация данных" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Детали проекта -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Основной контент -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Описание проекта -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    О проекте
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Модуль ТВ-инспекции IMUS City</strong> — это специализированный веб-сервис для управления
                                        и анализа данных ТВ-инспекции канализационных сетей. Проект разработан для компании TARIS —
                                        ведущего российского производителя оборудования для диагностики трубопроводов.
                                    </p>
                                    <p>
                                        Система обеспечивает полный цикл работы с данными ТВ-инспекции: от загрузки
                                        и обработки видео до формирования отчетов и интеграции с основной системой IMUS City.
                                    </p>
                                    <p>
                                        Основная цель проекта — автоматизация процессов мониторинга и контроля
                                        состояния канализационных сетей, что значительно повышает эффективность обслуживания
                                        городской инфраструктуры.
                                    </p>
                                </div>
                            </div>

                            <!-- Ключевые особенности -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-blue-500 mr-3"></i>
                                    Ключевые особенности
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Основные модули</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Загрузка и обработка видео ТВ-инспекции</li>
                                            <li>Автоматическое распознавание дефектов</li>
                                            <li>Формирование отчетов и документации</li>
                                            <li>Интеграция с системой IMUS City</li>
                                            <li>Управление проектами и объектами</li>
                                            <li>Визуализация данных инспекции</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Технические особенности</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>RESTful API для интеграции с внешними системами</li>
                                            <li>Поддержка различных форматов видео данных</li>
                                            <li>Автоматическая классификация дефектов</li>
                                            <li>Система уведомлений и оповещений</li>
                                            <li>Многопользовательский доступ с ролевой моделью</li>
                                            <li>Резервное копирование и восстановление данных</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Процесс разработки -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-blue-500 mr-3"></i>
                                    Процесс разработки
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Анализ требований и проектирование</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Изучение специфики ТВ-инспекции канализационных сетей, анализ существующих процессов компании,
                                                проектирование архитектуры системы и планирование API.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Разработка бэкенда</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Создание API, реализация бизнес-логики обработки видео данных,
                                                разработка системы классификации дефектов и модулей отчетности.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Интеграция и тестирование</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Интеграция с системой IMUS City, комплексное тестирование функциональности,
                                                оптимизация производительности и подготовка к промышленной эксплуатации.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Внедрение и поддержка</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Развертывание системы на рабочих серверах, обучение пользователей,
                                                техническая поддержка и доработки по обратной связи.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Используемые технологии -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-blue-500 mr-2"></i>
                                    Технологии
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'laravel']) }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                                                Laravel
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'php']) }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                                                PHP 8.1
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'mysql']) }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:bg-orange-200 dark:hover:bg-orange-800/50 transition-colors">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">API & Интеграция</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'api']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
                                                REST API
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'websocket']) }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                WebSocket
                                            </a>
                                            <span class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm">
                                                IMUS City API
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Инфраструктура</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'docker']) }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                                Docker
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'nginx']) }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:bg-cyan-200 dark:hover:bg-cyan-800/50 transition-colors">
                                                Nginx
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'redis']) }}" class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm hover:bg-yellow-200 dark:hover:bg-yellow-800/50 transition-colors">
                                                Redis
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Статистика проекта -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                    Статистика проекта
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Время разработки</span>
                                        <span class="font-semibold">4 месяца</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Коммиты</span>
                                        <span class="font-semibold">287</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Строк кода</span>
                                        <span class="font-semibold">~18,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">API эндпоинтов</span>
                                        <span class="font-semibold">24</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Производительность</span>
                                        <span class="font-semibold">96/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Решенные задачи -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-puzzle-piece text-blue-500 mr-2"></i>
                                    Решенные задачи
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Интеграция с устаревшей системой IMUS City</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Обработка больших объемов видео данных</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Реализация системы классификации дефектов</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Обеспечение высокой производительности API</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Информация о клиенте -->
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Клиент</h3>
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">TARIS</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Производитель диагностического оборудования</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Ведущий российский производитель оборудования для диагностики и очистки трубопроводов
                                </p>
                                <a href="https://taris.ru" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Посетить сайт</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Бизнес-эффект -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Бизнес-эффект</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-16 h-16 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mx-auto mb-4">
                                <i class="fas fa-chart-line text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Эффективность +40%</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Автоматизация обработки данных ТВ-инспекции сократила время анализа на 40%
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-16 h-16 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mx-auto mb-4">
                                <i class="fas fa-bug text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Точность 95%</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Система автоматического распознавания дефектов обеспечивает 95% точность классификации
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-16 h-16 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-4">
                                <i class="fas fa-file-alt text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Отчеты за 5 минут</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Формирование комплексных отчетов сократилось с нескольких часов до 5 минут
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Призыв к действию -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">Интересует промышленное решение?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Готов обсудить ваши задачи и создать надежное решение для автоматизации бизнес-процессов.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Обсудить проект</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-blue-500 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Все проекты</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        @if($project->hasGalleryImages())
            <!-- Модальное окно лайтбокса -->
            <div x-show="lightboxOpen" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 p-4" x-cloak style="display: none;">
            <div class="relative max-w-6xl max-h-full">
                <button @click="lightboxOpen = false" class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>
                <img :src="lightboxImages[lightboxIndex]" :alt="'Изображение ' + (lightboxIndex + 1)" class="max-w-full max-h-full object-contain">
                <button @click="lightboxIndex = (lightboxIndex - 1 + lightboxImages.length) % lightboxImages.length"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-chevron-left text-2xl"></i>
                </button>
                <button @click="lightboxIndex = (lightboxIndex + 1) % lightboxImages.length"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-chevron-right text-2xl"></i>
                </button>
            </div>
        </div>
        @endif

        <!-- Модальное окно кейса -->
        <div x-show="showCaseStudy" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Фоновое наложение -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showCaseStudy = false"></div>

                <!-- Панель модального окна -->
                <div class="relative inline-block w-full max-w-6xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Кнопка закрытия -->
                    <button @click="showCaseStudy = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Контент кейса -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Заголовок -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Кейс проекта: Модуль ТВ-инспекции IMUS City</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Промышленная автоматизация для диагностики канализационных сетей</p>
                        </div>

                        <!-- Краткое описание -->
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-blue-500 mr-3"></i>
                                Резюме проекта
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Цели проекта</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Автоматизировать процесс обработки данных ТВ-инспекции</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Интегрировать с существующей инфраструктурой IMUS City</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Реализовать автоматическую классификацию дефектов</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ключевые результаты</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Сокращение времени обработки данных на 40%</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>95% точность в классификации дефектов</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-file-alt text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Формирование отчетов за 5 минут</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Технические задачи -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-blue-500 mr-3"></i>
                                Технические задачи и решения
                            </h3>
                            <div class="space-y-6">
                                <!-- Задача 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Задача: Интеграция с устаревшей системой</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Существующая система IMUS City использовала устаревшие протоколы и форматы данных,
                                                требовавшие сложной интеграции при сохранении обратной совместимости.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Разработка пользовательского адаптера API</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Слой трансформации форматов данных</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Механизмы плавного отката</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Бесшовная интеграция без прерывания существующих операций
                                        </p>
                                    </div>
                                </div>

                                <!-- Задача 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-cyan-500">
                                    <h4 class="font-semibold text-lg mb-3 text-cyan-600 dark:text-cyan-400">Задача: Обработка больших объемов видео</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обработка часов видеозаписей инспекции требовала значительных вычислительных
                                                ресурсов и эффективного управления хранением.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Асинхронная обработка с очередями</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Сжатие и оптимизация видео</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Распределенная архитектура хранения</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Время обработки сокращено на 60% с оптимизированным использованием ресурсов
                                        </p>
                                    </div>
                                </div>

                                <!-- Задача 3 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-indigo-500">
                                    <h4 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Задача: Синхронизация данных в реальном времени</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Несколько полевых команд нуждались в доступе к данным инспекции в реальном времени
                                                при сохранении согласованности данных в распределенных системах.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Реализация WebSocket для обновлений в реальном времени</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Оптимистическая блокировка для согласованности данных</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Механизмы разрешения конфликтов</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Синхронизация данных в реальном времени с доступностью 99.9%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Техническая архитектура -->
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-sitemap text-indigo-500 mr-3"></i>
                                Техническая архитектура
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-3 text-indigo-600 dark:text-indigo-400">Backend компоненты</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-server text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>Laravel RESTful API с 24 эндпоинтами</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-database text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>MySQL с оптимизированной индексацией</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>Redis для кэширования и управления сессиями</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-exchange-alt text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>Система очередей для фоновой обработки</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-3 text-purple-600 dark:text-purple-400">Слой интеграции</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-plug text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Пользовательский адаптер API IMUS City</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-sync text-purple-500 mr-2 mt-0.5"></i>
                                            <span>WebSocket для общения в реальном времени</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-shield-alt text-purple-500 mr-2 mt-0.5"></i>
                                            <span>JWT аутентификация и авторизация</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-code text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Комплексная документация API</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Бизнес-эффект -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Бизнес-эффект и результаты
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-green-500 mb-2">40%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Экономия времени</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">95%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Точность</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">5 мин</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Формирование отчетов</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-indigo-500 mb-2">24/7</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Доступность системы</div>
                                </div>
                            </div>
                        </div>

                        <!-- Извлеченные уроки -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-graduation-cap text-blue-500 mr-3"></i>
                                Извлеченные уроки
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Технические инсайты</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Важность комплексной стратегии версионирования API</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Ценность асинхронной обработки для видео данных</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Преимущества модульной архитектуры для промышленных систем</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Управление проектом</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Раннее вовлечение стейкхолдеров критично для промышленных проектов</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Поэтапное развертывание снижает операционные риски</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Комплексное тестирование необходимо для надежности</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @push('scripts')
        <script>
            function portfolioItemApp() {
                return {
                    lightboxOpen: false,
                    lightboxIndex: 0,
                    showCaseStudy: false,
                    lightboxImages: [
                        'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
                    ],
                    openLightbox(index) {
                        this.lightboxIndex = index;
                        this.lightboxOpen = true;
                    },
                    init() {
                        // Инициализация анимаций или взаимодействий
                        console.log('Портфолио IMUS City инициализировано');
                    }
                }
            }
        </script>
    @endpush

    @push('styles')
        <style>
            .project-gallery {
                display: grid;
                gap: 1rem;
            }
            .project-gallery.main {
                grid-template-columns: 2fr 1fr;
            }
            .project-gallery.secondary {
                grid-template-columns: 1fr 1fr;
            }
            .gallery-item {
                position: relative;
                border-radius: 0.75rem;
                overflow: hidden;
                cursor: pointer;
                transition: transform 0.3s ease;
            }
            .gallery-item:hover {
                transform: scale(1.02);
            }
            .tech-tag {
                transition: all 0.3s ease;
            }
            .fade-in {
                animation: fadeIn 0.6s ease-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .fluid-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 1rem;
            }
            @media (max-width: 768px) {
                .project-gallery.main,
                .project-gallery.secondary {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    @endpush
</x-frontend.layouts.app>

<x-frontend.layouts.app>
    <!-- Основной контент -->
    <main class="w-full pt-20" x-data="portfolioItemApp()" x-init="init()">
        <!-- Хлебные крошки -->
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
                                    Telescan Web
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция проекта -->
        <section class="py-12 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Информация о проекте -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Telescan Web</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Активная разработка
                                    </span>
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-cloud mr-1 text-xs"></i>
                                        Веб-платформа
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Современная веб-платформа для телеинспекции канализационных трубопроводов.
                                Полнофункциональная замена десктопного приложения с расширенными
                                облачными возможностями и коллективным доступом.
                            </p>

                            <!-- Статистика проекта -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2023-2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Период разработки</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">8+ месяцев</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Время разработки</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Full-stack</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Тип проекта</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Кнопки действий -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <button @click="showDemo = true" class="inline-flex items-center px-6 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-play mr-2"></i>
                                    <span>Демо-версия</span>
                                </button>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Кейс проекта</span>
                                </button>
                            </div>
                        </div>

                        <!-- Иконка проекта -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-globe text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ключевые преимущества -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Ключевые преимущества веб-версии</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mx-auto mb-6">
                                <i class="fas fa-cloud text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Облачная архитектура</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Доступ из любого браузера без установки дополнительного ПО.
                                Все данные безопасно хранятся в облаке с автоматическим резервным копированием.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-6">
                                <i class="fas fa-users text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Совместная работа</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Многопользовательский доступ к проектам. Команда может работать над одним проектом
                                одновременно с разных устройств и местоположений.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mx-auto mb-6">
                                <i class="fas fa-sync-alt text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">API-ориентированность</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Полнофункциональный REST API для интеграции с другими системами.
                                Легкая интеграция с CRM, ERP и другими корпоративными решениями.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Детали проекта -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Основной контент -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- Описание проекта -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-indigo-500 mr-3"></i>
                                    О проекте
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Telescan Web</strong> — это современная веб-платформа, представляющая собой
                                        полнофункциональную веб-версию популярного десктопного приложения для телеинспекции
                                        канализационных трубопроводов. Проект разработан для компании ТАРИС.
                                    </p>
                                    <p>
                                        Платформа сохраняет все функции оригинального Telescan, добавляя
                                        преимущества веб-технологий: кроссплатформенную совместимость, мгновенные
                                        обновления, облачное хранение данных и расширенные возможности совместной работы.
                                    </p>
                                    <p>
                                        Основной фокус проекта — создание производительного и отзывчивого
                                        веб-приложения, способного обрабатывать большие объемы видео данных и
                                        обеспечивать бесперебойную работу даже при медленном интернет-соединении.
                                    </p>
                                </div>
                            </div>

                            <!-- API Архитектура -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code text-indigo-500 mr-3"></i>
                                    API-ориентированная архитектура
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-plug text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">RESTful API</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Полнофункциональный REST API с 50+ эндпоинтами для управления проектами,
                                                пользователями, видео данными и отчетами. Поддержка версионирования API.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">WebSocket для реального времени</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Уведомления в реальном времени о статусе обработки видео, статусы пользователей онлайн,
                                                мгновенные обновления интерфейса при совместной работе.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Безопасность и авторизация</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                JWT аутентификация, OAuth2 для интеграций с третьими сторонами, ролевая модель доступа,
                                                защита от CSRF и XSS атак.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ключевые функции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-indigo-500 mr-3"></i>
                                    Ключевые функции
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Основные модули</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Загрузка видео и потоковое воспроизведение</li>
                                            <li>Автоматическое распознавание дефектов труб</li>
                                            <li>Интерактивная разметка и аннотации</li>
                                            <li>Генерация отчетов в различных форматах</li>
                                            <li>Управление проектами и командой</li>
                                            <li>Система уведомлений и оповещений</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Веб-специфичные функции</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Поддержка PWA (Progressive Web App)</li>
                                            <li>Оффлайн работа с синхронизацией</li>
                                            <li>Адаптивный дизайн для всех устройств</li>
                                            <li>Интеграция с облачными хранилищами</li>
                                            <li>Мгновенный поиск по всем данным</li>
                                            <li>Расширенная система разрешений</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Используемые технологии -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-indigo-500 mr-2"></i>
                                    Технологии
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Бэкенд</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'laravel']) }}" class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm hover:bg-indigo-200 dark:hover:bg-indigo-800/50 transition-colors">
                                                Laravel 10
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'php']) }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                                                PHP 8.2
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'mysql']) }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:bg-orange-200 dark:hover:bg-orange-800/50 transition-colors">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Фронтенд</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'vuejs']) }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                                                Vue.js 3
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'tailwind']) }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:bg-cyan-200 dark:hover:bg-cyan-800/50 transition-colors">
                                                Tailwind CSS
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'pinia']) }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                Pinia
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">API & Реальное время</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'api']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
                                                REST API
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'websocket']) }}" class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm hover:bg-yellow-200 dark:hover:bg-yellow-800/50 transition-colors">
                                                WebSocket
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'jwt']) }}" class="tech-tag px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm hover:bg-pink-200 dark:hover:bg-pink-800/50 transition-colors">
                                                JWT
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Статистика проекта -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-indigo-500 mr-2"></i>
                                    Статистика проекта
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Время разработки</span>
                                        <span class="font-semibold">8+ месяцев</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Коммиты</span>
                                        <span class="font-semibold">842</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">API эндпоинты</span>
                                        <span class="font-semibold">56</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Vue компоненты</span>
                                        <span class="font-semibold">47</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Производительность</span>
                                        <span class="font-semibold">92/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Метрики производительности -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tachometer-alt text-indigo-500 mr-2"></i>
                                    Метрики производительности
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm text-gray-600 dark:text-gray-400">Загрузка страницы</span>
                                            <span class="text-sm font-semibold">1.2с</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 95%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm text-gray-600 dark:text-gray-400">Обработка видео</span>
                                            <span class="text-sm font-semibold">2.8с</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-500 h-2 rounded-full" style="width: 88%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm text-gray-600 dark:text-gray-400">Ответ API</span>
                                            <span class="text-sm font-semibold">180мс</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-500 h-2 rounded-full" style="width: 92%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Информация о клиенте -->
                            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Клиент</h3>
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 rounded-lg bg-indigo-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">ТАРИС</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Производитель диагностического оборудования</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Ведущий российский производитель оборудования для диагностики и очистки трубопроводов
                                </p>
                                <a href="https://taris.ru" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Посетить сайт</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Технические инновации -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Технические инновации</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-4">
                                    <i class="fas fa-video"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Потоковая обработка видео</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Реализована технология потоковой обработки больших видеофайлов инспекции
                                с использованием WebAssembly и Service Workers. Позволяет работать с видео любого размера
                                без полной загрузки на клиентскую сторону.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-4">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Архитектура Offline-first</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Приложение работает даже без подключения к интернету.
                                Все изменения сохраняются локально и синхронизируются при восстановлении соединения.
                                Использует IndexedDB и Background Sync API.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-4">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <h3 class="text-xl font-semibold">AI анализ дефектов</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Интеграция с моделями машинного обучения для автоматического распознавания
                                и классификации дефектов труб. Система постоянно обучается на новых данных
                                и улучшает точность распознавания.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-4">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h3 class="text-xl font-semibold">PWA как нативное приложение</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Telescan Web устанавливается как нативное приложение на любое устройство
                                через технологии PWA. Поддержка push-уведомлений, полноэкранного режима
                                и доступа к аппаратным возможностям устройства.
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
                    <h2 class="text-3xl font-bold mb-6">Нужна современная веб-платформа?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Готов создать производительное и масштабируемое веб-решение для вашего бизнеса.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Обсудить проект</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-indigo-500 text-indigo-500 hover:bg-indigo-50 dark:hover:bg-indigo-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Все проекты</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Демо модальное окно -->
        <div x-show="showDemo" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Фоновое наложение -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showDemo = false"></div>

                <!-- Панель модального окна -->
                <div class="relative inline-block w-full max-w-2xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Кнопка закрытия -->
                    <button @click="showDemo = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Демо контент -->
                    <div class="text-center py-8">
                        <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white mx-auto mb-6">
                            <i class="fas fa-laptop-code text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Демо доступно по запросу</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Чтобы получить доступ к демо-версии Telescan Web, пожалуйста, свяжитесь со мной.
                            Я предоставлю тестовые учетные данные и проведу демонстрацию возможностей платформы.
                        </p>
                        <a href="/contact" class="inline-flex items-center px-6 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Запросить демо</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

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
                            <h2 class="text-3xl font-bold mb-4">Кейс проекта: Платформа Telescan Web</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Полный разбор процесса разработки от десктопного приложения до веб-трансформации</p>
                        </div>

                        <!-- Краткое резюме -->
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-indigo-500 mr-3"></i>
                                Резюме проекта
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Цели проекта</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Создать веб-версию популярного десктопного приложения</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Обеспечить облачные возможности и функции совместной работы</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Реализовать API-first архитектуру для интеграций</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ключевые результаты</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>92/100 баллов в метриках производительности</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Время загрузки страницы менее 1.2 секунд</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-code text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Реализовано 56 API эндпоинтов</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Технические вызовы -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-indigo-500 mr-3"></i>
                                Технические вызовы и решения
                            </h3>
                            <div class="space-y-6">
                                <!-- Вызов 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-indigo-500">
                                    <h4 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Вызов: Обработка больших видеофайлов в браузере</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обработка больших видеофайлов (до 10ГБ) в браузерной среде
                                                при сохранении отзывчивого интерфейса и производительности.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>WebAssembly для обработки видео</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Service Workers для фоновой обработки</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Технология потокового воспроизведения видео</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Время обработки видео сокращено на 65% по сравнению с десктопной версией
                                        </p>
                                    </div>
                                </div>

                                <!-- Вызов 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-indigo-500">
                                    <h4 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Вызов: Сложная десктопная бизнес-логика в вебе</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Воссоздание сложной бизнес-логики десктопного приложения
                                                в веб-среде при сохранении всей функциональности.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Микросервисная архитектура с четким разделением</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Vue.js 3 Composition API для сложного управления состоянием</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Совместная работа в реальном времени с WebSocket</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            100% функциональности десктопной версии сохранено с расширенными веб-возможностями
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Результаты -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Результаты и влияние
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-indigo-500 mb-2">92%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Оценка производительности</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">1.2с</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Время загрузки</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">56</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">API эндпоинты</div>
                                </div>
                            </div>
                        </div>

                        <!-- API стратегия -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-code text-indigo-500 mr-3"></i>
                                API стратегия
                            </h3>
                            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6">
                                <p class="text-gray-600 dark:text-gray-400 mb-4">
                                    Ключевая особенность проекта — API-ориентированный подход:
                                </p>
                                <ul class="feature-list space-y-2 text-gray-600 dark:text-gray-400">
                                    <li>56 REST API эндпоинтов с полной документацией OpenAPI</li>
                                    <li>WebSocket для уведомлений в реальном времени и совместной работы</li>
                                    <li>GraphQL для сложных запросов отчетности</li>
                                    <li>Версионирование API для обратной совместимости</li>
                                    <li>Ограничение частоты запросов и защита от DDoS атак</li>
                                    <li>Подробная документация с примерами для разработчиков</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Кнопки действий -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors">
                                Закрыть кейс
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-indigo-500 text-indigo-500 hover:bg-indigo-50 dark:hover:bg-indigo-900/20 rounded-lg font-medium transition-colors">
                                Обсудить сотрудничество
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function portfolioItemApp() {
                return {
                    showCaseStudy: false,
                    showDemo: false,
                    init() {
                        // Закрыть модальное окно по клавише Escape
                        document.addEventListener('keydown', (e) => {
                            if (e.key === 'Escape') {
                                if (this.showCaseStudy) this.showCaseStudy = false;
                                if (this.showDemo) this.showDemo = false;
                            }
                        });
                    }
                }
            }
        </script>
    </main>
</x-frontend.layouts.app>

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
            // Анимация полосы навыков
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

    <!-- Основной контент -->
    <main class="w-full pt-20">
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
                                <a href="/competences" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Компетенции
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences/api" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    API разработка
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        GraphQL
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-pink-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-pink-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-project-diagram text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">GraphQL</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-code mr-1"></i>
                                            Язык запросов
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Современный язык запросов для API с гибкой выборкой данных и эффективной клиент-серверной коммуникацией
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-server"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">API построено</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Основной контент -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Основной контент -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- О GraphQL -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-pink-500 mr-3"></i>
                                    О GraphQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>GraphQL</strong> - это язык запросов для API и среда выполнения для выполнения этих запросов
                                        с вашими существующими данными. Он предоставляет полное и понятное описание данных
                                        в вашем API, дает клиентам возможность запрашивать именно то, что им нужно, и упрощает
                                        эволюцию API с течением времени.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Гибкая выборка данных</strong> - Клиенты запрашивают именно те данные, которые им нужны</li>
                                        <li><strong>Единая конечная точка</strong> - Одна конечная точка для всех операций с данными</li>
                                        <li><strong>Строго типизированная схема</strong> - Четкий контракт API с проверкой типов</li>
                                        <li><strong>Снижение избыточной выборки</strong> - Никаких ненужных передаваемых данных</li>
                                        <li><strong>Обновления в реальном времени</strong> - Встроенная поддержка подписок</li>
                                        <li><strong>Опыт разработчика</strong> - Отличные инструменты и интроспекция</li>
                                    </ul>

                                    <h3>Основные концепции</h3>
                                    <p>
                                        GraphQL вводит несколько фундаментальных концепций, которые отличают его от традиционных REST API:
                                    </p>
                                    <ul>
                                        <li><strong>Язык определения схемы (SDL)</strong> - Система типов для определения возможностей API</li>
                                        <li><strong>Запросы</strong> - Операции чтения для получения данных</li>
                                        <li><strong>Мутации</strong> - Операции записи для изменения данных</li>
                                        <li><strong>Подписки</strong> - Обновления данных в реальном времени</li>
                                        <li><strong>Резолверы</strong> - Функции, которые выполняют запросы данных</li>
                                        <li><strong>Интроспекция</strong> - Самодокументируемые возможности API</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в GraphQL -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-pink-500 mr-3"></i>
                                    Мой путь в GraphQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал работать с GraphQL в 2020 году при создании сложных фронтенд-приложений,
                                        которые требовали гибких возможностей выборки данных. За последние 3+ года я реализовал
                                        GraphQL API для различных проектов, от небольших стартапов до корпоративных приложений.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-pink-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fab fa-laravel text-pink-500 mr-2"></i>
                                                Laravel Lighthouse
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Большой опыт работы с Laravel Lighthouse для построения
                                                надежных GraphQL API в экосистемах PHP/Laravel.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fab fa-react text-blue-500 mr-2"></i>
                                                Интеграция с фронтендом
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Всесторонний опыт интеграции GraphQL с React,
                                                Vue.js и мобильными приложениями.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-pink-500 mr-3"></i>
                                    Мой опыт с GraphQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея 3+ года практического опыта работы с GraphQL, я развил всестороннюю экспертизу
                                        в проектировании, реализации и оптимизации GraphQL API для различных случаев использования и масштабов.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Проектирование и оптимизация схем</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Реализация резолверов и пакетная обработка</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация производительности и кэширование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Аутентификация и авторизация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Подписки в реальном времени</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обработка ошибок и валидация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Загрузка файлов и сложные мутации</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Версионирование и эволюция API</span>
                                        </div>
                                    </div>

                                    <h3>Технологический стек</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Lighthouse</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Apollo</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">GraphQL Yoga</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Hasura</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Relay</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">URQL</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">GraphiQL</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Voyager</span>
                                    </div>

                                    <h3>Паттерны реализации</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-pink-500 mb-2">Бэкенд-паттерны</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Композиция резолверов и middleware</li>
                                                <li>• DataLoader для предотвращения N+1</li>
                                                <li>• Разрешения на уровне полей</li>
                                                <li>• Пользовательские директивы и скаляры</li>
                                                <li>• Федерация и микросервисы</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-pink-500 mb-2">Фронтенд-паттерны</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Композиция запросов и фрагменты</li>
                                                <li>• Оптимистичные обновления UI</li>
                                                <li>• Управление состоянием на клиенте</li>
                                                <li>• Обработка границ ошибок</li>
                                                <li>• Синхронизация данных в реальном времени</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Продвинутые возможности -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-pink-500 mr-3"></i>
                                    Продвинутые возможности реализации
                                </h2>
                                <div class="content-section">
                                    <h3>Оптимизация производительности</h3>
                                    <p>
                                        Я реализовал различные техники оптимизации производительности для GraphQL API:
                                    </p>
                                    <ul>
                                        <li><strong>Анализ сложности запросов</strong> - Предотвращение дорогостоящих запросов</li>
                                        <li><strong>Постоянные запросы</strong> - Оптимизация предварительно одобренных запросов</li>
                                        <li><strong>Кэширование запросов</strong> - Многоуровневые стратегии кэширования</li>
                                        <li><strong>Пакетная обработка и Dataloader</strong> - Эффективные паттерны доступа к БД</li>
                                        <li><strong>Инструментирование на уровне полей</strong> - Мониторинг производительности и метрики</li>
                                        <li><strong>Планирование запросов</strong> - Оптимизированные стратегии выполнения</li>
                                    </ul>

                                    <h3>Безопасность и лучшие практики</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Аутентификация</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация JWT, OAuth и пользовательского middleware аутентификации
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Авторизация</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Контроль доступа на уровне полей, на основе ролей и атрибутов
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Валидация</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Валидация входных данных, ограничение глубины запросов и анализ сложности
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Мониторинг</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Логирование запросов, метрики производительности и отслеживание ошибок
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Реальные приложения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-layer-group text-pink-500 mr-3"></i>
                                    Реальные приложения
                                </h2>
                                <div class="content-section">
                                    <h3>Реализации использования</h3>
                                    <p>
                                        Я успешно реализовал GraphQL в различных реальных сценариях:
                                    </p>
                                    <ul>
                                        <li><strong>E-commerce платформы</strong> - Гибкие каталоги продуктов и покупки</li>
                                        <li><strong>Социальные сети</strong> - Ленты в реальном времени и взаимодействия пользователей</li>
                                        <li><strong>Приложения с дашбордами</strong> - Настраиваемые визуализации данных и отчеты</li>
                                        <li><strong>Мобильные приложения</strong> - Эффективная выборка данных для ограниченной пропускной способности</li>
                                        <li><strong>Архитектура микросервисов</strong> - Федерация API и композиция сервисов</li>
                                    </ul>

                                    <h3>Стратегии миграции</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">REST в GraphQL</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Постепенные стратегии миграции из REST API в GraphQL
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Гибридные подходы</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Поддержка как REST, так и GraphQL конечных точек во время перехода
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Интеграция с legacy</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Интеграция GraphQL с существующими legacy-системами и базами данных
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2>Постепенное внедрение</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Стратегии поэтапного развертывания для крупномасштабных приложений
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Значительные проекты</h3>
                                    <ul>
                                        <li><strong>Корпоративная CMS</strong> - GraphQL API для управления контентом с обновлениями в реальном времени</li>
                                        <li><strong>Финансовый дашборд</strong> - Гибкие запросы для сложных финансовых данных</li>
                                        <li><strong>Платформа электронного обучения</strong> - Персонализированные пути обучения и отслеживание прогресса</li>
                                        <li><strong>Платформа данных IoT</strong> - Подписки и запросы данных с датчиков в реальном времени</li>
                                        <li><strong>Мультитенантное SaaS</strong> - Изолированный доступ к данным с общей схемой</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-pink-500 mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-pink-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-pink-500 to-purple-500"
                                                 data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Проектирование схем</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Оптимизация производительности</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Реализация безопасности</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Инструменты и экосистема</span>
                                            <span class="text-sm font-bold text-yellow-500">76%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="76%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-pink-500 mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-server text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">API построено: <strong>10+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">Схем спроектировано: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">Безопасность: <strong>JWT & OAuth</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bolt text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">Реальное время: <strong>Подписки</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Типы реализации -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-cubes text-pink-500 mr-2"></i>
                                    Типы реализации
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Монолитные GraphQL API</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Федеративные микросервисы</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Гибридные REST/GraphQL</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Сшивание схем</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">GraphQL Mesh</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-pink-500 mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-pink-500 transition-colors">API разработка</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-pink-500 transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/react" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-react text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-pink-500 transition-colors">React</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/performance" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-tachometer-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-pink-500 transition-colors">Производительность</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-pink-500 to-purple-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужен GraphQL API?</h3>
                                <p class="text-sm mb-4">Давайте построим эффективные, гибкие API вместе</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-pink-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

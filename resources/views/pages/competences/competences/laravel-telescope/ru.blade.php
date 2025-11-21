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
            .telescope-gradient {
                background: linear-gradient(135deg, #4A90E2 0%, #1e40af 100%);
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

    <!-- Основной контент -->
    <main class="w-full pt-20">
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
                                <a href="/competences" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Компетенции
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Backend Разработка
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel Telescope
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой раздел -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4A90E2] to-[#1e40af] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-search text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 telescope-gradient">Laravel Telescope</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bug mr-1"></i>
                                            Эксперт по отладке
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Помощник по отладке для мониторинга запросов, исключений и запросов к базе данных. Элегантный помощник по отладке для фреймворка Laravel.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Профессиональный опыт</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v4.x</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Текущая версия</div>
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
                            <!-- О Laravel Telescope -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#4A90E2] mr-3"></i>
                                    О Laravel Telescope
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Telescope</strong> — это элегантный помощник по отладке для фреймворка Laravel.
                                        Telescope предоставляет информацию о запросах, поступающих в ваше приложение, исключениях, записях логов,
                                        запросах к базе данных, задачах в очередях, почте, уведомлениях, операциях с кэшем, запланированных задачах, дампах переменных и многом другом.
                                    </p>

                                    <h3>Основные возможности мониторинга</h3>
                                    <ul>
                                        <li><strong>Мониторинг запросов</strong> - Входящие запросы, ответы и заголовки</li>
                                        <li><strong>Запросы к базе данных</strong> - Выполнение запросов, привязки и производительность</li>
                                        <li><strong>Отслеживание исключений</strong> - Подробная информация об исключениях и трассировка стека</li>
                                        <li><strong>Записи логов</strong> - Логи приложения и контекстные данные</li>
                                        <li><strong>Мониторинг задач</strong> - Задачи в очередях, сбои и время обработки</li>
                                        <li><strong>Почта и уведомления</strong> - Исходящие письма и предварительный просмотр уведомлений</li>
                                        <li><strong>Операции с кэшем</strong> - Попадания в кэш, промахи и теги</li>
                                    </ul>

                                    <h3>Преимущества для рабочего процесса разработки</h3>
                                    <p>
                                        Telescope значительно улучшает эффективность разработки и отладки:
                                    </p>
                                    <ul>
                                        <li>Мониторинг поведения приложения в реальном времени</li>
                                        <li>Быстрое выявление узких мест производительности</li>
                                        <li>Детальное отслеживание и воспроизведение ошибок</li>
                                        <li>Возможности оптимизации запросов к базе данных</li>
                                        <li>Мониторинг и устранение неполадок задач в очередях</li>
                                        <li>Комплексное логирование активности приложения</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с Telescope -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#4A90E2] mr-3"></i>
                                    Мой путь с Telescope
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Начал интегрировать Telescope в 2020 году для сред разработки и тестирования.
                                        За 4+ года активно использовал Telescope для отладки сложных проблем,
                                        оптимизации производительности и мониторинга поведения приложения в различных проектах.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-bug text-[#4A90E2] mr-2"></i>
                                                Сложная отладка
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использовал Telescope для отладки сложных проблем приложения, включая
                                                утечки памяти, N+1 запросы и состояния гонки в средах, приближенных к продакшену.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-purple-500 mr-2"></i>
                                                Оптимизация производительности
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использовал метрики Telescope для выявления и оптимизации
                                                узких мест производительности в запросах к базе данных и логике приложения.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Техническая экспертиза -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#4A90E2] mr-3"></i>
                                    Техническая экспертиза
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Комплексный опыт работы с конфигурацией Telescope, настройкой
                                        и продвинутыми техниками отладки в различных сценариях приложений.
                                    </p>

                                    <h3>Основные навыки работы с Telescope</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Конфигурация окружений</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка и кастомизация вотчеров</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Анализ запросов к базе данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Отслеживание и отладка исключений</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Мониторинг производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка кастомных вотчеров</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Безопасность и контроль доступа</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Очистка данных и управление хранилищем</span>
                                        </div>
                                    </div>

                                    <h3>Продвинутые вотчеры и функции</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Request Watcher</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Query Watcher</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Exception Watcher</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Log Watcher</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Job Watcher</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Mail Watcher</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Notification Watcher</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Cache Watcher</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Schedule Watcher</span>
                                    </div>

                                    <h3>Техники отладки и анализа</h3>
                                    <ul>
                                        <li><strong>Обнаружение N+1 запросов</strong> - Выявление и оптимизация неэффективных запросов к БД</li>
                                        <li><strong>Обнаружение утечек памяти</strong> - Отслеживание паттернов использования памяти и утечек</li>
                                        <li><strong>Профилирование производительности</strong> - Анализ производительности запросов и запросов к БД</li>
                                        <li><strong>Анализ исключений</strong> - Детальное изучение трассировки стека и воспроизведение</li>
                                        <li><strong>Инспекция запросов/ответов</strong> - Заголовки, полезные нагрузки и коды состояния</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Конфигурация окружений -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#4A90E2] mr-3"></i>
                                    Конфигурация окружений
                                </h2>
                                <div class="content-section">
                                    <h3>Настройка для нескольких окружений</h3>
                                    <p>
                                        Опыт настройки Telescope в различных окружениях с учетом соответствующих требований безопасности и производительности:
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-green-600 mb-2">Окружение разработки</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Полный доступ к Telescope со всеми включенными вотчерами для комплексной
                                                отладки и оптимизации рабочего процесса разработки.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-yellow-600 mb-2">Тестовое окружение</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Ограниченный доступ к Telescope с вотчерами, ориентированными на производительность,
                                                для предпродакшенного тестирования и оптимизации.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Безопасность и контроль доступа</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Gate Authorization</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Environment Restrictions</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">IP Whitelisting</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">User Authentication</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Data Filtering</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Sensitive Data</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Request Filtering</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Log Sanitization</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Производительность и кастомизация -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-rocket text-[#4A90E2] mr-3"></i>
                                    Производительность и кастомизация
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Продвинутые стратегии кастомизации Telescope и оптимизации производительности:
                                    </p>

                                    <h3>Кастомные вотчеры и расширения</h3>
                                    <ul>
                                        <li><strong>Вотчеры для конкретного приложения</strong> - Кастомные вотчеры для мониторинга бизнес-логики</li>
                                        <li><strong>Вотчеры интеграции с третьими сторонами</strong> - Мониторинг вызовов внешних API и сервисов</li>
                                        <li><strong>Вотчеры метрик производительности</strong> - Кастомное отслеживание производительности и оповещения</li>
                                        <li><strong>Вотчеры бизнес-логики</strong> - Мониторинг активности, специфичной для домена</li>
                                        <li><strong>Кастомная тегировка</strong> - Тегировка и организация записей для конкретного приложения</li>
                                    </ul>

                                    <h3>Оптимизация производительности</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-600 mb-2">Оптимизация хранилища</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Стратегии очистки базы данных</li>
                                                <li>• Лимиты записей и политики хранения</li>
                                                <li>• Выбор драйвера хранилища</li>
                                                <li>• Конфигурация пакетной обработки</li>
                                            </ul>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-green-600 mb-2">Оптимизация вотчеров</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Выборочное включение вотчеров</li>
                                                <li>• Настройка частоты выборки</li>
                                                <li>• Оптимизация использования памяти</li>
                                                <li>• Мониторинг влияния на производительность</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h3>Опыт устранения неполадок</h3>
                                    <ul>
                                        <li><strong>Проблемы с памятью</strong> - Решение проблем потребления памяти, связанных с Telescope</li>
                                        <li><strong>Влияние на производительность</strong> - Минимизация влияния Telescope на производительность приложения</li>
                                        <li><strong>Оптимизация базы данных</strong> - Настройка производительности базы данных Telescope</li>
                                        <li><strong>Проблемы конфигурации</strong> - Решение проблем с настройкой вотчеров и окружений</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#4A90E2] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение Telescope</span>
                                            <span class="text-sm font-bold text-[#4A90E2]">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4A90E2] to-[#1e40af]"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Конфигурация и настройка</span>
                                            <span class="text-sm font-bold text-green-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Отладка и анализ</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Оптимизация производительности</span>
                                            <span class="text-sm font-bold text-purple-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Кастомизация</span>
                                            <span class="text-sm font-bold text-orange-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#4A90E2] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Telescope 4.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Проектов: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bug text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Решено проблем: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-database text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Оптимизировано запросов: <strong>50+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#4A90E2] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4A90E2] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                    </a>
                                    <a href="/competences/debugging" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bug text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4A90E2] transition-colors">Отладка</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                    </a>
                                    <a href="/competences/performance" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-tachometer-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4A90E2] transition-colors">Производительность</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4A90E2] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#4A90E2] to-[#1e40af] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна помощь с отладкой?</h3>
                                <p class="text-sm mb-4">Готовы внедрить комплексную отладку с Laravel Telescope</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

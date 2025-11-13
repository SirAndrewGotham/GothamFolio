<x-frontend.layouts.app>
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
                                    Бэкенд-разработка
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Redis
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#DC382D] to-[#A61C1C] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-bolt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Redis</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-memory mr-1"></i>
                                            In-Memory хранилище данных
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                In-memory хранилище структур данных, используемое как база данных, кэш и брокер сообщений для высокопроизводительных приложений.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-[#DC382D] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">82%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#DC382D] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с Redis 4.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#DC382D] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v7.2+</div>
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
                            <!-- О Redis -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#DC382D] mr-3"></i>
                                    О Redis
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Redis</strong> (Remote Dictionary Server) — это хранилище структур данных в оперативной памяти с открытым исходным кодом,
                                        используемое как база данных, кэш и брокер сообщений. Он поддерживает различные структуры данных, такие как строки,
                                        хэши, списки, множества и другие, обеспечивая исключительную производительность для приложений реального времени.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>In-Memory производительность</strong> — Время отклика менее миллисекунды для операций с данными</li>
                                        <li><strong>Богатые структуры данных</strong> — Строки, хэши, списки, множества, упорядоченные множества, потоки</li>
                                        <li><strong>Опции сохранности</strong> — RDB снапшоты и AOF логирование для сохранности данных</li>
                                        <li><strong>Репликация и высокая доступность</strong> — Мастер-слейв репликация и Redis Sentinel</li>
                                        <li><strong>Pub/Sub messaging</strong> — Возможности трансляции сообщений в реальном времени</li>
                                        <li><strong>Атомарные операции</strong> — Потокобезопасные операции со сложными структурами данных</li>
                                        <li><strong>Lua скрипты</strong> — Выполнение скриптов на стороне сервера для сложных операций</li>
                                    </ul>

                                    <h3>Рекомендуемые случаи использования</h3>
                                    <p>
                                        Redis превосходно подходит для сценариев, требующих высокоскоростного доступа к данным и обработки в реальном времени:
                                    </p>
                                    <ul>
                                        <li>Кэширование приложений и хранение сессий</li>
                                        <li>Аналитика в реальном времени и таблицы лидеров</li>
                                        <li>Очереди сообщений и обработка заданий</li>
                                        <li>Ограничение частоты запросов и API throttling</li>
                                        <li>Геопространственные данные и сервисы на основе местоположения</li>
                                        <li>Системы чата и уведомлений в реальном времени</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в Redis -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#DC382D] mr-3"></i>
                                    Мой путь в Redis
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал работать с Redis в 2019 году для улучшения производительности приложений через кэширование и управление сессиями.
                                        С тех пор я перешел от базового кэширования ключ-значение к реализации сложных структур данных,
                                        систем pub/sub и Redis Cluster для высокодоступных приложений.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-[#DC382D] mr-2"></i>
                                                Оптимизация производительности
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация стратегий кэширования Redis, которые снизили нагрузку на базу данных на 80%
                                                и улучшили время отклика приложения в 5 раз в сценариях с высокой нагрузкой.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-exchange-alt text-blue-500 mr-2"></i>
                                                Системы реального времени
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создание функций реального времени с использованием Redis Pub/Sub для живых уведомлений,
                                                систем чата и обновлений панелей управления в реальном времени в нескольких приложениях.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#DC382D] mr-3"></i>
                                    Мой опыт работы с Redis
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 4 лет опыта работы с Redis, я реализовал различные стратегии кэширования,
                                        системы реального времени и оптимизации производительности в нескольких веб-приложениях,
                                        значительно улучшив время отклика и масштабируемость.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стратегии кэширования приложений</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Хранение и управление сессиями</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Системы Pub/Sub messaging</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация структур данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Redis CLI и администрирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Мониторинг производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Lua скрипты для сложных операций</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Конфигурация сохранности (RDB/AOF)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Безопасность и управление доступом</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с Laravel/Lumen</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка Cluster и Sentinel</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация памяти</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты</h3>
                                    <ul>
                                        <li><strong>Высоконагруженная E-commerce платформа</strong> — Кэширование Redis сократило время загрузки страниц с 2с до 200мс</li>
                                        <li><strong>Панель аналитики в реальном времени</strong> — Redis streams для обработки данных в реальном времени</li>
                                        <li><strong>Кластеризация сессий</strong> — Распределенное хранение сессий на нескольких серверах приложений</li>
                                        <li><strong>Система очередей сообщений</strong> — Redis для фоновой обработки заданий и очередей задач</li>
                                        <li><strong>Ограничение частоты API запросов</strong> — Ограничение частоты на основе Redis для публичных API</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Структуры данных и паттерны -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#DC382D] mr-3"></i>
                                    Структуры данных и паттерны
                                </h2>
                                <div class="content-section">
                                    <h3>Распространенные структуры данных Redis</h3>
                                    <p>
                                        Опыт использования богатых структур данных Redis для оптимальной производительности:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Строки и хэши</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Простое кэширование, счетчики и хранение объектов с операциями на уровне полей
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Списки и множества</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Очереди сообщений, ленты активности и уникальные коллекции
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Упорядоченные множества</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Таблицы лидеров, приоритетные очереди и данные временных рядов
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Потоки и Pub/Sub</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обмен сообщениями в реальном времени, event sourcing и обработка логов
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Распространенные паттерны интеграции</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Cache</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Session Driver</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Queue Driver</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Broadcasting</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Rate Limiting</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Функции реального времени</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#DC382D] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#DC382D]">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#DC382D] to-[#A61C1C]"
                                                 data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Стратегии кэширования</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Структуры данных</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Системы Pub/Sub</span>
                                            <span class="text-sm font-bold text-blue-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Настройка производительности</span>
                                            <span class="text-sm font-bold text-purple-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#DC382D] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Redis 7.2+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-memory text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Прирост производительности: <strong>в 5 раз быстрее</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-database text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Снижение нагрузки на БД: <strong>80%</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#DC382D] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                    <a href="/competences/nginx" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-server text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">Nginx</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#DC382D] to-[#A61C1C] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна оптимизация производительности?</h3>
                                <p class="text-sm mb-4">Готов обсудить реализацию Redis</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#DC382D] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

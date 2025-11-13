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
                                        MySQL
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-orange-500 to-amber-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-database text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">MySQL</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-database mr-1"></i>
                                            Основная база данных
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Система управления реляционными базами данных для надежных, масштабируемых приложений. Мой основной выбор базы данных для веб-проектов.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
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
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">8+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с MySQL 5.5</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v8.0</div>
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
                            <!-- О MySQL -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-orange-500 mr-3"></i>
                                    О MySQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>MySQL</strong> — самая популярная в мире система управления реляционными базами данных с открытым исходным кодом (RDBMS),
                                        известная своей надежностью, производительностью и простотой использования. Приобретенная Oracle Corporation,
                                        MySQL продолжает оставаться лучшим выбором для веб-приложений, работая на всем: от небольших веб-сайтов
                                        до крупномасштабных корпоративных систем.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Высокая производительность</strong> — оптимизирована для рабочих нагрузок с интенсивным чтением</li>
                                        <li><strong>Масштабируемость</strong> — обрабатывает большие наборы данных и высокий трафик</li>
                                        <li><strong>Надежность</strong> — соответствие ACID и целостность данных</li>
                                        <li><strong>Кросс-платформенность</strong> — работает на различных операционных системах</li>
                                        <li><strong>Сильное сообщество</strong> — обширная документация и поддержка</li>
                                        <li><strong>Безопасность</strong> — надежный контроль доступа и шифрование</li>
                                        <li><strong>Репликация</strong> — настройки master-slave и master-master</li>
                                    </ul>

                                    <h3>Рекомендуемые сценарии использования</h3>
                                    <p>
                                        MySQL идеально подходит для широкого спектра приложений, особенно эффективна для:
                                    </p>
                                    <ul>
                                        <li>Веб-приложений и систем управления контентом</li>
                                        <li>Платформ электронной коммерции и интернет-магазинов</li>
                                        <li>Хранилищ данных и бизнес-аналитики</li>
                                        <li>Систем логирования и аналитики</li>
                                        <li>CRM и ERP систем</li>
                                        <li>Бэкендов мобильных приложений</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в MySQL -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-orange-500 mr-3"></i>
                                    Мой путь в MySQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал работать с MySQL в 2015 году вместе с моим путешествием в Laravel, начиная с версии 5.5.
                                        За эти годы я продвинулся от базовых операций CRUD до проектирования сложных архитектур баз данных,
                                        оптимизации запросов и реализации расширенных функций, таких как репликация и партиционирование.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-sitemap text-orange-500 mr-2"></i>
                                                Архитектура баз данных
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Я проектирую нормализованные схемы баз данных с правильными отношениями, индексами
                                                и ограничениями для обеспечения целостности данных и производительности.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-blue-500 mr-2"></i>
                                                Оптимизация производительности
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Я специализируюсь на оптимизации запросов, настройке индексов и конфигурации базы данных
                                                для эффективной обработки высоконагруженных приложений.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-orange-500 mr-3"></i>
                                    Мой опыт работы с MySQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 8 лет опыта работы с MySQL, я работал над различными проектами, от небольших приложений
                                        до корпоративных систем, требующих высокой доступности и производительности.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Проектирование и нормализация баз данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация запросов и индексирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Хранимые процедуры и функции</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Миграция и версионирование баз данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стратегии резервного копирования и восстановления</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Безопасность и контроль доступа</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Репликация и высокая доступность</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Мониторинг и настройка производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с Laravel Eloquent</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Операции импорта/экспорта данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление транзакциями</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Партиционирование и шардирование</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты</h3>
                                    <ul>
                                        <li><strong>Telescan Web Analytics</strong> — Высоконагруженная аналитическая платформа с оптимизированными MySQL-запросами</li>
                                        <li><strong>Корпоративный портал для ООО "Тарис"</strong> — Сложная система управления бизнес-процессами</li>
                                        <li><strong>Платформа электронной коммерции</strong> — Интернет-магазин с управлением запасами и заказами</li>
                                        <li><strong>CRM система</strong> — Управление взаимоотношениями с клиентами с отчетностью</li>
                                        <li><strong>Системы управления контентом</strong> — Множество реализаций CMS с бэкендом на MySQL</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Технические детали -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-orange-500 mr-3"></i>
                                    Технические детали
                                </h2>
                                <div class="content-section">
                                    <h3>Архитектура и особенности</h3>
                                    <p>
                                        MySQL следует клиент-серверной архитектуре и поддерживает различные механизмы хранения,
                                        причем InnoDB является механизмом по умолчанию и наиболее широко используемым, обеспечивающим соответствие ACID.
                                    </p>
                                    <ul>
                                        <li><strong>Механизмы хранения</strong> — InnoDB, MyISAM, Memory, Archive</li>
                                        <li><strong>Соответствие ACID</strong> — Полная поддержка транзакций с InnoDB</li>
                                        <li><strong>Индексирование</strong> — B-деревья, полнотекстовые, пространственные индексы</li>
                                        <li><strong>Репликация</strong> — Асинхронная и полусинхронная репликация</li>
                                        <li><strong>Партиционирование</strong> — Диапазонное, списковое, хэш- и ключевое партиционирование</li>
                                    </ul>

                                    <h3>Инструменты и экосистема</h3>
                                    <p>
                                        Я работаю с полной экосистемой MySQL, включая:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">MySQL Workbench</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">phpMyAdmin</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Migrations</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Eloquent ORM</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">MySQL CLI</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Performance Schema</span>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub проекты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-orange-500 mr-3"></i>
                                    Проекты на GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих проектов с реализациями баз данных MySQL можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Мое портфолио включает различные проекты, разработанные с MySQL в качестве основного решения для базы данных.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-orange-500 mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-orange-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-orange-500 to-amber-500"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Оптимизация запросов</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Проектирование БД</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Настройка производительности</span>
                                            <span class="text-sm font-bold text-blue-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Безопасность</span>
                                            <span class="text-sm font-bold text-purple-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-orange-500 mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>8+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>MySQL 8.0</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-database text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Основная БД: <strong>Да</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-sync-alt text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Репликация: <strong>Реализована</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-orange-500 mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-orange-500 transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-orange-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-orange-500 transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-orange-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/rest-api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-orange-500 transition-colors">REST API</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-orange-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-orange-500 transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-orange-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-orange-500 to-amber-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                                <p class="text-sm mb-4">Готов обсудить ваши потребности в базе данных</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-orange-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

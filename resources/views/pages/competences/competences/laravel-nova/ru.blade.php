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
                                        Laravel Nova
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FF2D20] to-[#E62E1A] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-cogs text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Laravel Nova</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-crown mr-1"></i>
                                            Админ-панель
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Административная панель для управления данными приложения с элегантным интерфейсом и мощными возможностями кастомизации.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-[#FF2D20] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#FF2D20] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">2+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с Nova 3.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#FF2D20] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v4.0+</div>
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
                            <!-- О Laravel Nova -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#FF2D20] mr-3"></i>
                                    О Laravel Nova
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Nova</strong> — это красиво разработанная административная панель для приложений на Laravel,
                                        предоставляющая полнофункциональный интерфейс для управления данными вашего приложения. Построенная на Vue.js и
                                        Tailwind CSS, Nova предлагает мощные инструменты для управления ресурсами, метрик и пользовательских действий.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Быстрая разработка</strong> — Генерация готовых админ-панелей за минуты, а не дни</li>
                                        <li><strong>Интеграция с Eloquent</strong> — Бесшовная интеграция с Eloquent ORM от Laravel</li>
                                        <li><strong>Настраиваемый интерфейс</strong> — Адаптация админ-панели под конкретные бизнес-потребности</li>
                                        <li><strong>Мощные метрики</strong> — Встроенная панель управления с настраиваемыми метриками и графиками</li>
                                        <li><strong>Система действий</strong> — Выполнение массовых операций и пользовательских действий с ресурсами</li>
                                        <li><strong>Линзы и фильтры</strong> — Расширенная фильтрация данных и пользовательские интерфейсы запросов</li>
                                        <li><strong>Авторизация</strong> — Интегрирована с системой авторизации Laravel</li>
                                    </ul>

                                    <h3>Идеальные сценарии использования</h3>
                                    <p>
                                        Laravel Nova превосходно подходит для сценариев, требующих сложных административных интерфейсов:
                                    </p>
                                    <ul>
                                        <li>Системы управления контентом (CMS)</li>
                                        <li>Администрирование платформ электронной коммерции</li>
                                        <li>Управление взаимоотношениями с клиентами (CRM)</li>
                                        <li>Панели аналитики данных и отчетности</li>
                                        <li>Администрирование мультитенантных приложений</li>
                                        <li>Управление внутренними бизнес-процессами</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в Laravel Nova -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#FF2D20] mr-3"></i>
                                    Мой путь в Laravel Nova
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал работать с Laravel Nova в 2021 году с версии 3.0, внедряя административные панели
                                        для различных клиентских проектов. С тех пор я продвинулся от базового управления ресурсами до
                                        создания сложных пользовательских инструментов, метрик и интегрированных панелей управления для корпоративных приложений.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-[#FF2D20] mr-2"></i>
                                                Пользовательские панели управления
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разрабатывал сложные панели управления с пользовательскими метриками,
                                                визуализацией данных в реальном времени и функциями бизнес-аналитики.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-cube text-blue-500 mr-2"></i>
                                                Пользовательские инструменты и карточки
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создавал пользовательские инструменты и карточки Nova для специализированных
                                                бизнес-операций и интеграций со сторонними сервисами.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#FF2D20] mr-3"></i>
                                    Мой опыт работы с Laravel Nova
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 2 лет опыта работы с Laravel Nova в различных проектах, я создавал комплексные
                                        административные интерфейсы для различных бизнес-доменов, от простого управления контентом
                                        до сложных систем планирования корпоративных ресурсов.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление ресурсами и CRUD</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пользовательские метрики и панели управления</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Реализация системы действий</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Линзы и расширенная фильтрация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка пользовательских полей</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка инструментов и карточек</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Авторизация и разрешения</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление отношениями</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Поиск и глобальный поиск</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграции со сторонними сервисами</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Поддержка мультитенантности</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты на Nova</h3>
                                    <ul>
                                        <li><strong>Админ-панель для электронной коммерции</strong> — Полное управление товарами, заказами и клиентами</li>
                                        <li><strong>Система управления контентом</strong> — Многопользовательское администрирование контента с рабочими процессами</li>
                                        <li><strong>Аналитическая панель управления</strong> — Пользовательские метрики и бизнес-аналитика в реальном времени</li>
                                        <li><strong>Интеграция с CRM</strong> — Интерфейс Nova для управления взаимоотношениями с клиентами</li>
                                        <li><strong>Мультитенантное приложение</strong> — Управление ресурсами для SaaS-платформы</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Возможности и кастомизация Nova -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-[#FF2D20] mr-3"></i>
                                    Возможности и кастомизация Nova
                                </h2>
                                <div class="content-section">
                                    <h3>Основные компоненты Nova</h3>
                                    <p>
                                        Опыт использования мощной компонентной системы Nova:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Ресурсы</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Администрирование моделей Eloquent с полями,
                                                действиями, фильтрами и правилами авторизации.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Метрики</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Значения, тренды и секционные метрики для
                                                аналитики на панели управления и бизнес-аналитики.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Действия</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Массовые операции и пользовательская бизнес-логика,
                                                выполняемые над выбранными ресурсами.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Линзы</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Пользовательские интерфейсы запросов для сложных
                                                представлений данных и специализированной отчетности.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Пользовательская разработка</h3>
                                    <p>
                                        Возможности расширенной кастомизации:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Пользовательские поля</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Пользовательские инструменты</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Пользовательские карточки</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Инструменты ресурсов</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Фильтры</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Панели управления</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Интеграция и расширяемость -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-puzzle-piece text-[#FF2D20] mr-3"></i>
                                    Интеграция и расширяемость
                                </h2>
                                <div class="content-section">
                                    <h3>Интеграции со сторонними сервисами</h3>
                                    <p>
                                        Опыт интеграции Nova с различными сервисами и инструментами:
                                    </p>
                                    <ul>
                                        <li><strong>Платежные системы</strong> — Административные интерфейсы для Stripe, PayPal</li>
                                        <li><strong>Сервисы аналитики</strong> — Панели управления для Google Analytics, Mixpanel</li>
                                        <li><strong>Инструменты коммуникации</strong> — Управление email, SMS и уведомлениями</li>
                                        <li><strong>Файловые хранилища</strong> — Управление файлами в AWS S3, DigitalOcean Spaces</li>
                                        <li><strong>CRM-системы</strong> — Синхронизация данных с HubSpot, Salesforce</li>
                                        <li><strong>Инструменты мониторинга</strong> — Отслеживание ошибок и мониторинг производительности</li>
                                    </ul>

                                    <h3>Разработка пользовательских пакетов</h3>
                                    <p>
                                        Создание переиспользуемых компонентов и пакетов для Nova:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пакеты пользовательских полей</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пакеты интеграции инструментов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пакеты расчета метрик</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пакеты шаблонов действий</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пакеты компонентов фильтров</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пакеты виджетов панели управления</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#FF2D20] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#FF2D20]">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF2D20] to-[#E62E1A]"
                                                 data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Управление ресурсами</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Пользовательские инструменты</span>
                                            <span class="text-sm font-bold text-green-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Метрики и панели управления</span>
                                            <span class="text-sm font-bold text-blue-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интеграция</span>
                                            <span class="text-sm font-bold text-purple-500">68%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="68%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#FF2D20] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>2+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Nova 4.0+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cube text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Пользовательские инструменты: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tachometer-alt text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Панели управления: <strong>10+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#FF2D20] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                    <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-vuejs text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Vue.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                    <a href="/competences/eloquent" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Eloquent ORM</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#FF2D20] to-[#E62E1A] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна разработка админ-панели?</h3>
                                <p class="text-sm mb-4">Готов обсудить реализацию на Laravel Nova</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF2D20] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

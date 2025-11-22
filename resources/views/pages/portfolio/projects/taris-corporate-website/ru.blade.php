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
                                <a href="/portfolio/legacy" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Legacy проекты
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Корпоративный сайт ТАРИС
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция проекта -->
        <section class="py-12 bg-gradient-to-br from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Информация о проекте -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Корпоративный сайт ТАРИС</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Поддержка и разработка
                                    </span>
                                    <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-tools mr-1 text-xs"></i>
                                        Legacy система
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Техническая поддержка и разработка корпоративного сайта на устаревшей платформе Yii.
                                Стабилизация работы, исправление критических ошибок и создание процедур для
                                долгосрочной поддержки legacy кода.
                            </p>

                            <!-- Статистика проекта -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2022-2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Период работы</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                        <i class="fas fa-bug"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">50+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Исправлено ошибок</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-3">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Yii 1.1</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Технология</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Кнопки действий -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://taris.ru" target="_blank" class="inline-flex items-center px-6 py-3 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Посетить сайт</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Кейс проекта</span>
                                </button>
                            </div>
                        </div>

                        <!-- Иконка проекта -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-building text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Технический вызов -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Технический вызов</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-red-50 dark:bg-red-900/20 rounded-xl p-6 fade-in">
                            <h3 class="text-xl font-semibold mb-4 text-red-700 dark:text-red-300 flex items-center">
                                <i class="fas fa-exclamation-triangle mr-2"></i>
                                Исходное состояние
                            </h3>
                            <ul class="feature-list space-y-3 text-gray-600 dark:text-gray-400">
                                <li>Устаревший фреймворк Yii 1.1 (выпущен в 2008)</li>
                                <li>PHP 5.6 с устаревшими функциями и без типизации</li>
                                <li>Накопившиеся критические ошибки и баги</li>
                                <li>Повреждение кода от правок множества разработчиков</li>
                                <li>Отсутствие документации и процедур поддержки</li>
                                <li>Проблемы безопасности из-за устаревших компонентов</li>
                            </ul>
                        </div>
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-xl p-6 fade-in">
                            <h3 class="text-xl font-semibold mb-4 text-green-700 dark:text-green-300 flex items-center">
                                <i class="fas fa-bullseye mr-2"></i>
                                Цели проекта
                            </h3>
                            <ul class="feature-list space-y-3 text-gray-600 dark:text-gray-400">
                                <li>Стабилизировать работу без полной переработки</li>
                                <li>Исправить критические ошибки функциональности</li>
                                <li>Создать процедуры для долгосрочной поддержки</li>
                                <li>Обеспечить работу для неподготовленных пользователей</li>
                                <li>Сохранить визуальную привлекательность для посетителей</li>
                                <li>Подготовить почву для будущей миграции</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Детали проекта -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Основной контент -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Описание проекта -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-amber-500 mr-3"></i>
                                    О проекте
                                </h2>
                                <div class="space-y-4 text-gray-600 dark:text-gray-400">
                                    <p>
                                        Корпоративный сайт ООО "ТАРИС" — ведущего российского производителя
                                        оборудования для диагностики и очистки трубопроводов. Сайт работает
                                        на устаревшей платформе Yii 1.1, созданной более 10 лет назад.
                                    </p>
                                    <p>
                                        Основная цель оригинальной системы — позволить неподготовленным пользователям без
                                        технических знаний создавать и редактировать страницы сайта, сохраняя
                                        визуальную привлекательность для посетителей.
                                    </p>
                                    <p>
                                        Со временем в систему проникли многочисленные ошибки, накопился технический долг,
                                        появилось повреждение кода. Моя задача состояла в стабилизации
                                        работы без радикальных изменений платформы.
                                    </p>
                                </div>
                            </div>

                            <!-- Ключевые решения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-wrench text-amber-500 mr-3"></i>
                                    Реализованные решения
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-search text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Аудит и анализ</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Проведен глубокий анализ кодовой базы, выявлены критические точки отказа,
                                                определены приоритеты исправления. Создана карта технического долга и рисков.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-bug text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Исправление ошибок</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Систематически исправлено 50+ критических ошибок: проблемы загрузки изображений,
                                                ошибки системы управления контентом, проблемы безопасности и производительности.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Стабилизация работы</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Созданы процедуры мониторинга, резервного копирования и восстановления. Реализована
                                                система логирования для быстрого выявления и решения проблем.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-book text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Документация и процедуры</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Разработана комплексная документация для поддержки системы,
                                                созданы четкие процедуры обновления и устранения неполадок,
                                                подготовлены рекомендации для будущей миграции.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Особенности CMS -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-edit text-amber-500 mr-3"></i>
                                    Система управления контентом
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-amber-600 dark:text-amber-400">Для пользователей</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Визуальный редактор без знания HTML/CSS</li>
                                            <li>Управление разделами перетаскиванием</li>
                                            <li>Интуитивная загрузка и управление медиа</li>
                                            <li>Предварительный просмотр изменений перед публикацией</li>
                                            <li>Управление SEO-параметрами</li>
                                            <li>Система прав доступа для разных отделов</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-amber-600 dark:text-amber-400">Технические особенности</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Автоматическое резервное копирование контента</li>
                                            <li>Система отката изменений (undo/redo)</li>
                                            <li>Кэширование для улучшения производительности</li>
                                            <li>Автоматическая оптимизация изображений</li>
                                            <li>Интеграция с внешними сервисами</li>
                                            <li>Логирование всех изменений контента</li>
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
                                    <i class="fas fa-tools text-amber-500 mr-2"></i>
                                    Технологии
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Основной стек</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 rounded-lg text-sm">
                                                Yii 1.1
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm">
                                                PHP 5.6
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm">
                                                MySQL
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm">
                                                jQuery
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm">
                                                Bootstrap 3
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm">
                                                TinyMCE
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Инфраструктура</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm">
                                                Apache
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm">
                                                Linux
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm">
                                                Git
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Статистика проекта -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-amber-500 mr-2"></i>
                                    Статистика проекта
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Период работы</span>
                                        <span class="font-semibold">2+ года</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Исправлено ошибок</span>
                                        <span class="font-semibold">50+</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Страниц контента</span>
                                        <span class="font-semibold">150+</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Пользователей CMS</span>
                                        <span class="font-semibold">12+</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Аптайм</span>
                                        <span class="font-semibold">99.8%</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Проблемы legacy кода -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-exclamation-triangle text-amber-500 mr-2"></i>
                                    Проблемы legacy кода
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Устаревшие функции PHP, удаленные в новых версиях</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Отсутствие типизации и современных практик кодирования</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Проблемы безопасности из-за устаревших компонентов</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Сложности с обновлением зависимостей</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Информация о клиенте -->
                            <div class="bg-gradient-to-r from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Клиент</h3>
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 rounded-lg bg-amber-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-industry"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">ООО "ТАРИС"</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Производитель диагностического оборудования</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Ведущий российский производитель оборудования для диагностики и очистки трубопроводов.
                                    Компания с 20-летней историей и репутацией надежного партнера.
                                </p>
                                <a href="https://taris.ru/about" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>О компании</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Результаты и влияние -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Результаты работы</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mx-auto mb-6">
                                <i class="fas fa-check-circle text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Стабильность 99.8%</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Критические ошибки устранены, время бесперебойной работы увеличено
                                с 92% до 99.8%. Пользователи могут работать без сбоев.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mx-auto mb-6">
                                <i class="fas fa-users text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">12+ довольных пользователей</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Маркетологи и контент-менеджеры без технических знаний успешно
                                управляют контентом сайта через интуитивный интерфейс.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-6">
                                <i class="fas fa-road text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">План миграции</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Создан комплексный план для будущей миграции
                                на современную платформу с минимальными рисками.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Подход к поддержке legacy систем -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Подход к поддержке legacy систем</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-500 mr-4">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Анализ системы</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Глубокое понимание оригинальных архитектурных решений системы,
                                выявление точек отказа и создание карты зависимостей. Анализ
                                бизнес-логики без доступа к оригинальной документации.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-4">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Минимальные вмешательства</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Принцип "не навреди" при работе с legacy кодом. Точечные исправления
                                вместо рефакторинга, сохранение оригинальной архитектуры,
                                минимальные изменения для достижения целей стабилизации.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-4">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Безопасность прежде всего</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Устранение уязвимостей безопасности в устаревших компонентах,
                                внедрение современных практик безопасности без изменения
                                фундаментальной архитектуры системы.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-4">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Документация и знания</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Создание комплексной документации для будущей поддержки,
                                передача знаний о системе, подготовка процедур для
                                регулярных IT-специалистов компании.
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
                    <h2 class="text-3xl font-bold mb-6">Есть legacy проект, требующий поддержки?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Готов помочь стабилизировать работу устаревших систем и создать план миграции на современные технологии.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Обсудить проект</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-amber-500 text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Все проекты</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

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

                    <!-- Содержимое кейса -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Заголовок -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Кейс проекта: Корпоративный сайт ТАРИС</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Подход к поддержке и стабилизации legacy системы</p>
                        </div>

                        <!-- Краткое описание -->
                        <div class="bg-gradient-to-r from-amber-50 to-orange-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-amber-500 mr-3"></i>
                                Резюме проекта
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Цели проекта</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Стабилизировать legacy систему без полной переработки</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Исправить критические ошибки функциональности</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Создать процедуры долгосрочной поддержки</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ключевые результаты</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Достигнуто 99.8% времени бесперебойной работы системы</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Исправлено 50+ критических ошибок</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-search text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Создана комплексная документация</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Технические проблемы -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-amber-500 mr-3"></i>
                                Технические проблемы и решения
                            </h3>
                            <div class="space-y-6">
                                <!-- Проблема 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-amber-500">
                                    <h4 class="font-semibold text-lg mb-3 text-amber-600 dark:text-amber-400">Проблема: Стабилизация legacy кода</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Устаревший фреймворк Yii 1.1 с PHP 5.6, накопленный технический долг,
                                                уязвимости безопасности и отсутствие документации.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Системный аудит и анализ кода</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Приоритетное исправление критических ошибок</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Устранение уязвимостей безопасности</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Достигнута 99.8% стабильность системы, восстановлена вся критическая функциональность,
                                            улучшена безопасность без миграции платформы.
                                        </p>
                                    </div>
                                </div>

                                <!-- Проблема 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-orange-500">
                                    <h4 class="font-semibold text-lg mb-3 text-orange-600 dark:text-orange-400">Проблема: Удобная CMS для нетехнических пользователей</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Сложный интерфейс, требующий технических знаний, частые ошибки пользователей,
                                                повреждение контента и запросы в поддержку.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Упрощение и оптимизация интерфейса</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Улучшения визуального редактора</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Обучение пользователей и документация</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            12+ нетехнических пользователей успешно управляют контентом, запросы
                                            в поддержку сокращены на 80%, качество контента улучшено.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Извлеченные уроки -->
                        <div class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-blue-500 mr-3"></i>
                                Извлеченные уроки
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-3 text-blue-600 dark:text-blue-400">Технические инсайты</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Legacy системы можно эффективно стабилизировать без полной переработки</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Документация критически важна для долгосрочной поддержки legacy систем</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Минимальные вмешательства часто дают лучшие результаты в legacy коде</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-3 text-blue-600 dark:text-blue-400">Бизнес-ценность</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-chart-line text-green-500 mr-2 mt-0.5"></i>
                                            <span>Поддержка legacy систем может продлить жизнь платформы на 2-3 года</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-money-bill-wave text-green-500 mr-2 mt-0.5"></i>
                                            <span>Экономически эффективная альтернатива немедленной миграции</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-user-check text-green-500 mr-2 mt-0.5"></i>
                                            <span>Удовлетворенность пользователей достижима даже с устаревшими платформами</span>
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
                    showCaseStudy: false,
                    init() {
                        // Инициализация функциональности для портфолио
                        this.animateOnScroll();
                    },
                    animateOnScroll() {
                        // Добавление анимаций при скролле для элементов портфолио
                        const observer = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    entry.target.classList.add('animate-fade-in-up');
                                }
                            });
                        });

                        document.querySelectorAll('.fade-in').forEach((el) => {
                            observer.observe(el);
                        });
                    }
                }
            }
        </script>
    @endpush
</x-frontend.layouts.app>

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
                                    Проекты на Laravel
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Платформа GothamFolio
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция проекта -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Информация о проекте -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Платформа GothamFolio</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Активный проект
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Полнофункциональная платформа для управления личным портфолио с интегрированной блог-системой, галереями и аналитикой производительности.
                            </p>

                            <!-- Статистика проекта -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Год разработки</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">3 месяца</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Время разработки</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
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
                                <a href="https://andrewgotham.ru" target="_blank" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Посмотреть демо</span>
                                </a>
                                <a href="https://github.com/SirAndrewGotham/gothamfolio" target="_blank" class="inline-flex items-center px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                                    <i class="fab fa-github mr-2"></i>
                                    <span>Исходный код</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Кейс проекта</span>
                                </button>
                            </div>
                        </div>

                        <!-- Иконка проекта -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-laptop-code text-4xl"></i>
                            </div>
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
                                    <i class="fas fa-info-circle text-primary-500 mr-3"></i>
                                    О проекте
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Платформа GothamFolio</strong> — это современное веб-приложение, разработанное для демонстрации профессиональных навыков и проектов.
                                        Платформа сочетает в себе функции личного сайта, блога и системы управления контентом.
                                    </p>
                                    <p>
                                        Проект был создан с нуля с использованием Laravel 12 и современных фронтенд-технологий.
                                        Основной задачей было создание производительной, масштабируемой и удобной платформы, которая могла бы
                                        адаптироваться к различным типам контента.
                                    </p>
                                    <p>
                                        Особое внимание было уделено пользовательскому опыту, производительности и безопасности.
                                        Платформа поддерживает мультиязычность, адаптивный дизайн и оптимизирована для SEO.
                                    </p>
                                </div>
                            </div>

                            <!-- Ключевые особенности -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-primary-500 mr-3"></i>
                                    Ключевые особенности
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Основные функции</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Динамическое портфолио проектов</li>
                                            <li>Интегрированная блог-система</li>
                                            <li>Фотогалереи и работы</li>
                                            <li>Система комментариев и обратной связи</li>
                                            <li>Поддержка мультиязычности</li>
                                            <li>SEO-оптимизация</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Технические особенности</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Админ-панель для управления контентом</li>
                                            <li>Система кэширования для производительности</li>
                                            <li>API для интеграции с внешними сервисами</li>
                                            <li>Аналитика посещений и отслеживание поведения</li>
                                            <li>Система резервного копирования данных</li>
                                            <li>Автоматические обновления</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Процесс разработки -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-primary-500 mr-3"></i>
                                    Процесс разработки
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Планирование и дизайн</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Анализ требований, создание технического задания, проектирование архитектуры базы данных,
                                                и прототипирование пользовательского интерфейса.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Бэкенд-разработка</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Создание API, реализация бизнес-логики, настройка базы данных, разработка системы
                                                аутентификации и авторизации.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Фронтенд-разработка</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Создание адаптивного интерфейса, реализация интерактивных элементов с Livewire,
                                                интеграция с бэкенд API, оптимизация производительности.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Тестирование и запуск</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Комплексное тестирование функциональности, исправление ошибок, развертывание на продакшен-сервере,
                                                мониторинг производительности.
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
                                    <i class="fas fa-tools text-primary-500 mr-2"></i>
                                    Технологии
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Бэкенд</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-lg text-sm">
                                                Laravel 12
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm">
                                                PHP 8.3
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm">
                                                MySQL
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Фронтенд</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm">
                                                Livewire
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm">
                                                Tailwind CSS
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm">
                                                Alpine.js
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Инструменты</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm">
                                                Git
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm">
                                                Nginx
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm">
                                                Composer
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Статистика проекта -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-primary-500 mr-2"></i>
                                    Статистика проекта
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Время разработки</span>
                                        <span class="font-semibold">3 месяца</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Коммиты</span>
                                        <span class="font-semibold">247</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Строк кода</span>
                                        <span class="font-semibold">~15,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Покрытие тестами</span>
                                        <span class="font-semibold">85%</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Производительность</span>
                                        <span class="font-semibold">95/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные проекты -->
                            <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Другие проекты</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Исследуйте другие работы из моего портфолио
                                </p>
                                <a href="/portfolio" class="inline-flex items-center justify-center w-full px-4 py-2 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    <span>Назад к проектам</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Призыв к действию -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">Заинтересованы в похожем проекте?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Готов обсудить ваши идеи и создать решение, которое превзойдет ожидания.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Обсудить проект</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
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

                <!-- Модальная панель -->
                <div class="relative inline-block w-full max-w-6xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Кнопка закрытия -->
                    <button @click="showCaseStudy = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Контент кейса -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Заголовок -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Кейс проекта: Платформа GothamFolio</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Полный разбор процесса разработки от идеи до реализации</p>
                        </div>

                        <!-- Краткое описание -->
                        <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-primary-500 mr-3"></i>
                                Резюме проекта
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Цели проекта</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Создать современную платформу для демонстрации профессиональных навыков</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Интегрировать блог, портфолио и систему управления контентом</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Обеспечить высокую производительность и SEO-оптимизацию</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ключевые результаты</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>95/100 баллов в Google PageSpeed Insights</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Время загрузки страницы менее 1.2 секунд</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-search text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>40% улучшение SEO-метрик</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Технические вызовы -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-primary-500 mr-3"></i>
                                Технические вызовы и решения
                            </h3>
                            <div class="space-y-6">
                                <!-- Вызов 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-primary-500">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Вызов: Оптимизация производительности медиаконтента</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Галереи проектов содержали изображения высокого качества, что приводило к медленной загрузке страниц и высокому потреблению трафика.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Реализация ленивой загрузки для изображений</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Автоматическая генерация формата WebP</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Кэширование превью изображений</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            68% сокращение времени загрузки галереи, 45% сокращение объема передачи данных
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
                                    <div class="text-3xl font-bold text-green-500 mb-2">95%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">PageSpeed Score</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">1.2с</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Время загрузки</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">40%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Рост трафика</div>
                                </div>
                            </div>
                        </div>

                        <!-- Кнопки действий -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                                Закрыть кейс
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
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
                    init() {
                        // Закрыть модальное окно по клавише Escape
                        document.addEventListener('keydown', (e) => {
                            if (e.key === 'Escape' && this.showCaseStudy) {
                                this.showCaseStudy = false;
                            }
                        });
                    }
                }
            }
        </script>
    </main>
</x-frontend.layouts.app>

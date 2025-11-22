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
                                <a href="/portfolio/full-stack" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Full-stack проекты
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Платформа сообщества Gotham Forum
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой раздела проекта -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Информация о проекте -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Сообщество Gotham Forum</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-clock mr-1 text-xs"></i>
                                        В планах
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Платформа сообщества форума нового поколения с продвинутой геймификацией, взаимодействием в реальном времени и современной архитектурой для создания ярких онлайн-сообществ.
                            </p>

                            <!-- Статистика проекта -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Фаза планирования</div>
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
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Сообщество</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Тип платформы</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Кнопки действий -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <button disabled class="inline-flex items-center px-6 py-3 bg-gray-300 dark:bg-gray-600 text-gray-500 dark:text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Скоро будет</span>
                                </button>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-blue-500 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Концепция проекта</span>
                                </button>
                            </div>
                        </div>

                        <!-- Иконка проекта -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-users text-4xl"></i>
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
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    О проекте
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Gotham Forum Community</strong> — это амбициозная платформа форума нового поколения, предназначенная для революции в вовлечении онлайн-сообществ.
                                        Проект направлен на объединение лучших функций традиционного программного обеспечения для форумов с современными веб-технологиями и продвинутыми системами геймификации.
                                    </p>
                                    <p>
                                        Эта платформа будет включать сложную экосистему стимулирования пользователей, взаимодействие в реальном времени и модульную архитектуру, которая позволяет
                                        сообществам масштабироваться от небольших групп по интересам до крупномасштабных платформ с миллионами пользователей.
                                    </p>
                                    <p>
                                        Особый акцент делается на пользовательском опыте, оптимизации производительности и создании яркой экосистемы, где участники сообщества
                                        естественным образом мотивированы к участию и взаимодействию.
                                    </p>
                                </div>
                            </div>

                            <!-- Ключевые особенности -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-blue-500 mr-3"></i>
                                    Планируемые функции
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Функции сообщества</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Продвинутые ветки обсуждений с вложенными комментариями</li>
                                            <li>Чат и уведомления в реальном времени</li>
                                            <li>Группы пользователей и системы разрешений</li>
                                            <li>Приватные сообщения и сети пользователей</li>
                                            <li>Инструменты модерации контента</li>
                                            <li>Поддержка многоязычных сообществ</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Система геймификации</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Многоуровневая система очков и репутации</li>
                                            <li>Достижения и значки</li>
                                            <li>Уровни пользователей и прогрессия</li>
                                            <li>Таблицы лидеров и рейтинги</li>
                                            <li>Виртуальная экономика с тратимыми очками</li>
                                            <li>Сезонные события и испытания</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Процесс разработки -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-blue-500 mr-3"></i>
                                    План разработки
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Исследование и проектирование архитектуры</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Анализ существующих платформ форумов, создание технических спецификаций, проектирование архитектуры базы данных,
                                                и планирование структуры API с современными практиками разработки.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Разработка основной платформы</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Разработка backend API на Laravel, система аутентификации пользователей, базовая функциональность форума,
                                                и административные элементы управления для управления сообществом.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Внедрение системы геймификации</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Интеграция продвинутой системы очков и репутации, разработка механизма достижений,
                                                отслеживание прогресса пользователя и внедрение виртуальной экономики.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Функции реального времени и оптимизация</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Интеграция WebSocket для взаимодействия в реальном времени, оптимизация производительности,
                                                адаптивность для мобильных устройств и комплексное тестирование перед запуском.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Планируемые технологии -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-blue-500 mr-2"></i>
                                    Планируемые технологии
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/laravel') }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:underline">
                                                Laravel 12
                                            </a>
                                            <a href="{{ url('competences/php') }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:underline">
                                                PHP 8.3
                                            </a>
                                            <a href="{{ url('competences/mysql') }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:underline">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/livewire') }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:underline">
                                                Livewire
                                            </a>
                                            <a href="{{ url('competences/tailwind-css') }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:underline">
                                                Tailwind CSS
                                            </a>
                                            <a href="{{ url('competences/alpine-js') }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:underline">
                                                Alpine.js
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Real-time & APIs</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/websockets') }}" class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm hover:underline">
                                                WebSockets
                                            </a>
                                            <a href="{{ url('competences/rest-api') }}" class="tech-tag px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm hover:underline">
                                                REST API
                                            </a>
                                            <a href="{{ url('competences/redis') }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:underline">
                                                Redis
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Масштаб проекта -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                    Масштаб проекта
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Примерная продолжительность</span>
                                        <span class="font-semibold">6-9 месяцев</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Фаза разработки</span>
                                        <span class="font-semibold">Планирование</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Размер команды</span>
                                        <span class="font-semibold">2-3 разработчика</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Целевые пользователи</span>
                                        <span class="font-semibold">Менеджеры сообществ</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Основные инновации -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Фокус на инновациях</h3>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-bolt text-yellow-500 mr-2 mt-0.5"></i>
                                        <span>Продвинутые системы геймификации</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-rocket text-green-500 mr-2 mt-0.5"></i>
                                        <span>Взаимодействие пользователей в реальном времени</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chart-line text-purple-500 mr-2 mt-0.5"></i>
                                        <span>Масштабируемая микросервисная архитектура</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-mobile-alt text-blue-500 mr-2 mt-0.5"></i>
                                        <span>Возможности Progressive Web App</span>
                                    </li>
                                </ul>
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
                    <h2 class="text-3xl font-bold mb-6">Интересуют платформы для сообществ?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Давайте обсудим, как современные технологии форумов могут преобразовать взаимодействие в вашем сообществе.
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

        <!-- Модальное окно концепции проекта -->
        <div x-show="showCaseStudy"
             @keydown.escape.window="showCaseStudy = false"
             role="dialog"
             aria-modal="true"
             aria-labelledby="modal-title"
             x-transition:enter="transition ease-out duration-300"
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

                    <!-- Контент концепции -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Заголовок -->
                        <div class="text-center mb-8">
                            <h2 id="modal-title" class="text-3xl font-bold mb-4">Концепция проекта: Сообщество Gotham Forum</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Видение платформы вовлечения сообществ нового поколения</p>
                        </div>

                        <!-- Краткое описание -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-blue-500 mr-3"></i>
                                Видение
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                Создать наиболее вовлекающую, масштабируемую и многофункциональную платформу сообщества, которая сочетает современные веб-технологии
                                с проверенными стратегиями вовлечения сообществ, устанавливая новые стандарты для программного обеспечения онлайн-форумов.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Основные цели</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Революционизировать вовлечение пользователей через продвинутую геймификацию</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Обеспечить бесшовные возможности взаимодействия в реальном времени</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Создать масштабируемую архитектуру для сообществ любого размера</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Целевое воздействие</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Увеличить участие пользователей на 300%</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Сократить время отклика платформы до менее 100 мс</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-users text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Поддерживать сообщества от 100 до 1 млн+ пользователей</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Технические инновации -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-blue-500 mr-3"></i>
                                Технические инновации
                            </h3>
                            <div class="space-y-6">
                                <!-- Инновация 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Продвинутый механизм геймификации</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Функции</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Многовалютная система репутации</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Динамическая система достижений</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Сезонные события и испытания</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Инновация</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Самобалансирующаяся экономика, которая адаптируется к поведению сообщества и предотвращает инфляцию,
                                                создавая устойчивые циклы вовлечения.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Инновация 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-purple-500">
                                    <h4 class="font-semibold text-lg mb-3 text-purple-600 dark:text-purple-400">Система взаимодействия в реальном времени</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Возможности</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Обновления веток в реальном времени</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Мгновенные уведомления</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Индикаторы присутствия</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Технология</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация WebSocket с резервным вариантом HTTP long-polling, обеспечивая бесшовный
                                                опыт в реальном времени на всех устройствах и условиях сети.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Кнопки действий -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors">
                                Закрыть концепцию
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-blue-500 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg font-medium transition-colors">
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
                        // Запуск анимаций при скролле
                        this.animateOnScroll();
                    },
                    animateOnScroll() {
                        const observer = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    entry.target.classList.add('visible');
                                }
                            });
                        });

                        document.querySelectorAll('.fade-in').forEach((el) => {
                            observer.observe(el);
                        });
                }
            }
        </script>
    </main>
</x-frontend.layouts.app>

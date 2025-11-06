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
                                    Laravel проекты
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Chagan.su
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой секция проекта -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Информация о проекте -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Chagan.su</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Активный проект
                                    </span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-users mr-1 text-xs"></i>
                                        Сообщество
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Цифровой дом для сообщества Чаган - сохранение истории, воссоединение бывших жителей
                                и увековечивание уникального наследия военного городка рядом с авиабазой "Медведь".
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
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">6 месяцев</div>
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
                                <a href="https://chagan.su" target="_blank" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Посетить сайт</span>
                                </a>
                                <a href="https://github.com/SirAndrewGotham/chagan" target="_blank" class="inline-flex items-center px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
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
                                <i class="fas fa-landmark text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Галерея проекта -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Галерея проекта</h2>

                    <!-- Основная галерея -->
                    <div class="project-gallery main mb-8 fade-in">
                        <div class="gallery-item h-96" @click="openLightbox(0)">
                            <img src="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Главная страница Chagan.su" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                <div class="opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-search-plus text-white text-2xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="gallery-item h-44" @click="openLightbox(1)">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Каталог жителей" class="w-full h-full object-cover">
                            </div>
                            <div class="gallery-item h-44" @click="openLightbox(2)">
                                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Фотоархив" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Вторичная галерея -->
                    <div class="project-gallery secondary fade-in">
                        <div class="gallery-item h-64" @click="openLightbox(3)">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Мобильная версия" class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-item h-64" @click="openLightbox(4)">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Форум сообщества" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                    <i class="fas fa-info-circle text-primary-500 mr-3"></i>
                                    О проекте
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Chagan.su</strong> - это современная веб-платформа, созданная для сохранения истории
                                        и воссоединения сообщества бывших жителей военного городка Чаган,
                                        расположенного рядом со стратегической авиабазой "Медведь".
                                    </p>
                                    <p>
                                        Проект представляет собой полную модернизацию оригинального сайта chagan.ru,
                                        который функционировал с 2004 года, но устарел технологически. Новая платформа
                                        построена на современном стеке Laravel с использованием Livewire, Alpine.js и Tailwind CSS.
                                    </p>
                                    <p>
                                        Главная миссия проекта - создать цифровой дом для сообщества Чаган,
                                        где воспоминания находят свой дом, а история находит свой голос.
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
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Основные модули</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Каталог жителей с расширенным поиском</li>
                                            <li>Цифровой архив фото и документов</li>
                                            <li>Платформа для историй и воспоминаний</li>
                                            <li>Форум сообщества</li>
                                            <li>Календарь событий и встреч</li>
                                            <li>Поддержка многозначности</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Технические особенности</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Современный стек Laravel 12 + Livewire</li>
                                            <li>Адаптивный дизайн для всех устройств</li>
                                            <li>Система кэширования для производительности</li>
                                            <li>Безопасная система аутентификации</li>
                                            <li>Оптимизация изображений и медиа</li>
                                            <li>Полнотекстовый поиск по контенту</li>
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
                                            <h3 class="font-semibold mb-2">Анализ и дизайн</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Изучение legacy-системы, проектирование новой архитектуры,
                                                создание технического задания и дизайн-макетов.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Backend разработка</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Создание API, реализация бизнес-логики, разработка
                                                системы аутентификации и модулей управления контентом.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Frontend разработка</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Создание адаптивных интерфейсов, реализация интерактивных элементов
                                                с Livewire, интеграция с backend API.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Миграция и запуск</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Миграция данных из legacy-системы, комплексное тестирование,
                                                развертывание на продакшн-сервере, мониторинг производительности.
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
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'laravel']) }}" class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-lg text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                                Laravel 12
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'php']) }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                                                PHP 8.3
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'mysql']) }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:bg-orange-200 dark:hover:bg-orange-800/50 transition-colors">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'livewire']) }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                                                Livewire
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'tailwind']) }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:bg-cyan-200 dark:hover:bg-cyan-800/50 transition-colors">
                                                Tailwind CSS
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'alpinejs']) }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                Alpine.js
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Инфраструктура</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'docker']) }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                                Docker
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'nginx']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
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
                                    <i class="fas fa-chart-bar text-primary-500 mr-2"></i>
                                    Статистика проекта
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Время разработки</span>
                                        <span class="font-semibold">6 месяцев</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Коммиты</span>
                                        <span class="font-semibold">428</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Строк кода</span>
                                        <span class="font-semibold">~25,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Модули системы</span>
                                        <span class="font-semibold">12</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Производительность</span>
                                        <span class="font-semibold">92/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Решенные задачи -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-puzzle-piece text-primary-500 mr-2"></i>
                                    Решенные задачи
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Миграция данных из legacy-системы</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Создание сложной системы поиска и фильтрации</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Оптимизация работы с большими объемами медиа</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Реализация системы конфиденциальности данных</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные проекты -->
                            <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Другие проекты</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Изучите другие работы из моего портфолио
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
                            <h2 class="text-3xl font-bold mb-4">Кейс проекта: Chagan.su</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Сохранение истории сообщества через современные технологии</p>
                        </div>

                        <!-- Краткое описание -->
                        <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-primary-500 mr-3"></i>
                                Краткое описание проекта
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Цели проекта</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Создать современную платформу для сохранения истории сообщества</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Воссоединить бывших жителей и сохранить уникальное наследие</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Модернизировать legacy-систему современными технологиями</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ключевые результаты</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Оценка производительности 92/100</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Время загрузки страницы 3.2 секунды</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-users text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Увеличение активности пользователей на 150%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Технические задачи -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-primary-500 mr-3"></i>
                                Технические задачи и решения
                            </h3>
                            <div class="space-y-6">
                                <!-- Задача 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-primary-500">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Задача: Миграция данных из legacy-системы</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Оригинальная система chagan.ru с 2004 года использовала устаревшие форматы данных,
                                                не имела документации и имела сложные связи между сущностями данных.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Разработка кастомных скриптов миграции</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Поэтапная миграция данных с валидацией</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Создание резервных копий и возможность отката</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Успешная миграция 15+ лет данных сообщества с нулевой потерей данных
                                        </p>
                                    </div>
                                </div>

                                <!-- Задача 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Задача: Реализация сложной системы поиска</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Необходимо было реализовать мощный поиск, позволяющий находить людей по множеству критериев:
                                                годы проживания, адрес, школа, воинская часть и т.д.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Реализация полнотекстового поиска MySQL</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Сложные фильтры с Livewire</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Оптимизация запросов и кэширование</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Быстрый и точный поиск по тысячам записей с временем ответа менее секунды
                                        </p>
                                    </div>
                                </div>

                                <!-- Задача 3 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-purple-500">
                                    <h4 class="font-semibold text-lg mb-3 text-purple-600 dark:text-purple-400">Задача: Оптимизация медиаконтента</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Большой архив исторических фото и документов требовал оптимизации
                                                для веб-отображения при сохранении качества и быстрой загрузки.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Автоматическая оптимизация и сжатие изображений</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Реализация ленивой загрузки</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Интеграция CDN для доставки медиа</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Сокращение времени загрузки страниц на 75% при сохранении качества изображений
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Влияние проекта -->
                        <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Влияние и результаты проекта
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">150%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Рост активности пользователей</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">92/100</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Оценка производительности</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">3.2с</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Средняя загрузка страницы</div>
                                </div>
                            </div>
                        </div>

                        <!-- Извлеченные уроки -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-graduation-cap text-primary-500 mr-3"></i>
                                Извлеченные уроки
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Технические инсайты</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Важность комплексного планирования миграции данных</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Ценность стратегий кэширования для платформ сообществ</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Преимущества модульной архитектуры для будущей масштабируемости</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Управление проектом</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Раннее вовлечение стейкхолдеров критично для проектов сообществ</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Поэтапное развертывание снижает риски и улучшает адаптацию пользователей</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Непрерывные циклы обратной связи с членами сообщества</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Дорожная карта развития -->
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-road text-purple-500 mr-3"></i>
                                Дорожная карта будущего развития
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-3 text-purple-600 dark:text-purple-400">Краткосрочная (3-6 месяцев)</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Разработка мобильного приложения</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Улучшенные функции распознавания фото</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Расширенные фильтры поиска</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-3 text-purple-600 dark:text-purple-400">Долгосрочная (6-12 месяцев)</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Рекомендации контента на основе ИИ</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Интеграция с социальными сетями</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Расширение мультимедийного архива</span>
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
                        'https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
                    ],
                    openLightbox(index) {
                        this.lightboxIndex = index;
                        this.lightboxOpen = true;
                    },
                    init() {
                        // Инициализация анимаций или интерактивных элементов
                        console.log('Портфолио проект инициализирован');
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

<x-frontend.layouts.app>
    <!-- Main Content -->
    <main class="w-full pt-20">
        <!-- Breadcrumbs -->
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
                                <a href="/works" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Портфолио
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/works?category=laravel" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Laravel проекты
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        GothamFolio Platform
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Project Hero Section -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Project Info -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">GothamFolio Platform</h1>
                                <div class="flex items-center space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-circle mr-1 text-xs"></i>
                                            Активный проект
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Полнофункциональная платформа для управления персональным портфолио с интегрированной
                                системой блогинга, галереями и аналитикой производительности.
                            </p>

                            <!-- Project Stats -->
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
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Срок разработки</div>
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

                            <!-- Action Buttons -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://gothamfolio.test" target="_blank" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
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

                        <!-- Project Icon -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-laptop-code text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Gallery -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Галерея проекта</h2>

                    <!-- Main Gallery -->
                    <div class="project-gallery main mb-8 fade-in">
                        <div class="gallery-item h-96" @click="openLightbox(0)">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Главная страница GothamFolio" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                <div class="opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-search-plus text-white text-2xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="gallery-item h-44" @click="openLightbox(1)">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Админ панель" class="w-full h-full object-cover">
                            </div>
                            <div class="gallery-item h-44" @click="openLightbox(2)">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Блог раздел" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Secondary Gallery -->
                    <div class="project-gallery secondary fade-in">
                        <div class="gallery-item h-64" @click="openLightbox(3)">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Мобильная версия" class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-item h-64" @click="openLightbox(4)">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Галерея проектов" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Details -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Project Description -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-primary-500 mr-3"></i>
                                    О проекте
                                </h2>
                                <div class="space-y-4 text-gray-600 dark:text-gray-400">
                                    <p>
                                        GothamFolio Platform — это современное веб-приложение, разработанное для демонстрации
                                        профессиональных навыков и проектов. Платформа объединяет в себе функции персонального
                                        сайта, блога и системы управления контентом.
                                    </p>
                                    <p>
                                        Проект был создан с нуля с использованием Laravel 10 и современных фронтенд-технологий.
                                        Основной задачей было создание производительной, масштабируемой и удобной в использовании
                                        платформы, которая могла бы адаптироваться под различные типы контента.
                                    </p>
                                    <p>
                                        Особое внимание уделено пользовательскому опыту, производительности и безопасности.
                                        Платформа поддерживает мультиязычность, адаптивный дизайн и оптимизирована для SEO.
                                    </p>
                                </div>
                            </div>

                            <!-- Key Features -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-primary-500 mr-3"></i>
                                    Ключевые возможности
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Основные функции</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Динамическое портфолио проектов</li>
                                            <li>Интегрированная система блогинга</li>
                                            <li>Галереи фотографий и работ</li>
                                            <li>Система комментариев и обратной связи</li>
                                            <li>Мультиязычная поддержка</li>
                                            <li>SEO-оптимизация</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Технические особенности</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Админ-панель для управления контентом</li>
                                            <li>Система кэширования для производительности</li>
                                            <li>API для интеграции с внешними сервисами</li>
                                            <li>Аналитика посещений и поведения</li>
                                            <li>Резервное копирование данных</li>
                                            <li>Автоматическое обновление</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Development Process -->
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
                                            <h3 class="font-semibold mb-2">Планирование и проектирование</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Анализ требований, создание технического задания, проектирование архитектуры
                                                базы данных и пользовательских интерфейсов.
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
                                                Создание API, реализация бизнес-логики, настройка базы данных,
                                                разработка системы аутентификации и авторизации.
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
                                                Создание адаптивных интерфейсов, реализация интерактивных элементов,
                                                интеграция с backend API, оптимизация производительности.
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
                                                Комплексное тестирование функциональности, исправление ошибок,
                                                развертывание на продакшн-сервере, мониторинг производительности.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Technologies Used -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-primary-500 mr-2"></i>
                                    Технологии
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                                <span class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-lg text-sm">
                                                    Laravel 10
                                                </span>
                                            <span class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm">
                                                    PHP 8.2
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

                            <!-- Project Stats -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-primary-500 mr-2"></i>
                                    Статистика проекта
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Срок разработки</span>
                                        <span class="font-semibold">3 месяца</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Количество коммитов</span>
                                        <span class="font-semibold">247</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Строк кода</span>
                                        <span class="font-semibold">~15,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Тестовое покрытие</span>
                                        <span class="font-semibold">85%</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Производительность</span>
                                        <span class="font-semibold">95/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Challenges & Solutions -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-puzzle-piece text-primary-500 mr-2"></i>
                                    Решенные задачи
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Оптимизация загрузки изображений в галереях</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Реализация системы кэширования для высоких нагрузок</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Интеграция мультиязычности без потери SEO</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Создание адаптивного дизайна для всех устройств</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Projects -->
                            <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Другие проекты</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Изучите другие работы из моего портфолио
                                </p>
                                <a href="/works" class="inline-flex items-center justify-center w-full px-4 py-2 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    <span>К списку проектов</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">Заинтересованы в подобном проекте?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Готов обсудить ваши идеи и создать решение, которое превзойдет ожидания.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Обсудить проект</span>
                        </a>
                        <a href="/works" class="inline-flex items-center px-8 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Все проекты</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Lightbox Modal -->
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

    <!-- Case Study Modal -->
    <div x-show="showCaseStudy" x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showCaseStudy = false"></div>

            <!-- Modal panel -->
            <div class="relative inline-block w-full max-w-6xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                <!-- Close button -->
                <button @click="showCaseStudy = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>

                <!-- Case Study Content -->
                <div class="max-h-[80vh] overflow-y-auto">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold mb-4">Кейс проекта: GothamFolio Platform</h2>
                        <p class="text-xl text-gray-600 dark:text-gray-400">Полный разбор процесса разработки от идеи до реализации</p>
                    </div>

                    <!-- Executive Summary -->
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
                                        <span>Создание современной платформы для демонстрации профессиональных навыков</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Интеграция блога, портфолио и системы управления контентом</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Обеспечение высокой производительности и SEO-оптимизации</span>
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
                                        <span>Время загрузки страницы менее 1.2 секунды</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-search text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Улучшение SEO-показателей на 40%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Problem Statement -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-exclamation-triangle text-orange-500 mr-3"></i>
                            Проблема и вызовы
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-white dark:bg-gray-700 rounded-lg p-6 border border-orange-200 dark:border-orange-800">
                                <h4 class="font-semibold mb-3 text-orange-600 dark:text-orange-400">Исходная ситуация</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    До разработки GothamFolio использовались разрозненные решения: отдельный блог на WordPress,
                                    портфолио на Behance и GitHub для проектов. Это создавало проблемы с:
                                </p>
                                <ul class="mt-3 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Отсутствием единого брендинга</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Сложностью управления контентом</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Низкой производительностью</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="bg-white dark:bg-gray-700 rounded-lg p-6 border border-blue-200 dark:border-blue-800">
                                <h4 class="font-semibold mb-3 text-blue-600 dark:text-blue-400">Технические вызовы</h4>
                                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-database text-blue-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Оптимизация работы с большими объемами медиа-контента</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-mobile-alt text-blue-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Создание полностью адаптивного интерфейса</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-globe text-blue-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Реализация мультиязычности без дублирования контента</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-shield-alt text-blue-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Обеспечение безопасности пользовательских данных</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Solution Architecture -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-architecture text-purple-500 mr-3"></i>
                            Архитектура решения
                        </h3>

                        <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 mb-6">
                            <h4 class="font-semibold mb-4 text-lg">Технический стек</h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <h5 class="font-medium mb-2 text-primary-600 dark:text-primary-400">Backend</h5>
                                    <div class="space-y-2 text-sm">
                                        <div class="flex items-center justify-between">
                                            <span>Laravel 10</span>
                                            <span class="px-2 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded text-xs">Основной фреймворк</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span>PHP 8.2</span>
                                            <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded text-xs">Язык программирования</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span>MySQL 8.0</span>
                                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded text-xs">База данных</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium mb-2 text-primary-600 dark:text-primary-400">Frontend</h5>
                                    <div class="space-y-2 text-sm">
                                        <div class="flex items-center justify-between">
                                            <span>Livewire</span>
                                            <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded text-xs">Динамический UI</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span>Tailwind CSS</span>
                                            <span class="px-2 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded text-xs">Стилизация</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span>Alpine.js</span>
                                            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded text-xs">Интерактивность</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium mb-2 text-primary-600 dark:text-primary-400">Инфраструктура</h5>
                                    <div class="space-y-2 text-sm">
                                        <div class="flex items-center justify-between">
                                            <span>Nginx</span>
                                            <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded text-xs">Веб-сервер</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span>Redis</span>
                                            <span class="px-2 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded text-xs">Кэширование</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span>Docker</span>
                                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded text-xs">Контейнеризация</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Database Schema -->
                        <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border border-gray-200 dark:border-gray-600">
                            <h4 class="font-semibold mb-4 text-lg">Архитектура базы данных</h4>
                            <div class="overflow-x-auto">
                                    <pre class="text-sm bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto">
<span class="text-blue-400">// Основные таблицы системы</span>
<span class="text-yellow-400">users</span>           (id, name, email, password, role, created_at)
<span class="text-yellow-400">posts</span>           (id, title, slug, content, excerpt, user_id, status, published_at)
<span class="text-yellow-400">projects</span>        (id, title, description, technologies, github_url, demo_url, status)
<span class="text-yellow-400">categories</span>      (id, name, slug, description)
<span class="text-yellow-400">tags</span>           (id, name, slug)
<span class="text-yellow-400">media</span>          (id, filename, original_name, path, mime_type, size)
<span class="text-yellow-400">comments</span>       (id, content, user_id, post_id, parent_id, status)

<span class="text-blue-400">// Связующие таблицы</span>
<span class="text-yellow-400">post_category</span>   (post_id, category_id)
<span class="text-yellow-400">post_tag</span>       (post_id, tag_id)
<span class="text-yellow-400">project_technology</span> (project_id, technology_id)</pre>
                            </div>
                        </div>
                    </div>

                    <!-- Development Process -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-code-branch text-green-500 mr-3"></i>
                            Процесс разработки
                        </h3>

                        <div class="space-y-6">
                            <!-- Phase 1 -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white mr-4">
                                    <span class="font-bold">1</span>
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-semibold text-lg mb-2">Фаза 1: Планирование и проектирование (2 недели)</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600 dark:text-gray-400">
                                        <div>
                                            <h5 class="font-medium mb-1">Анализ требований</h5>
                                            <ul class="space-y-1">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Определение функциональных требований</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Исследование целевой аудитории</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-1">Техническое проектирование</h5>
                                            <ul class="space-y-1">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Проектирование архитектуры БД</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Создание wireframe и макетов</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Phase 2 -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4">
                                    <span class="font-bold">2</span>
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-semibold text-lg mb-2">Фаза 2: Backend разработка (6 недель)</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600 dark:text-gray-400">
                                        <div>
                                            <h5 class="font-medium mb-1">Основная функциональность</h5>
                                            <ul class="space-y-1">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Система аутентификации и авторизации</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>CRUD операции для постов и проектов</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-1">Дополнительные модули</h5>
                                            <ul class="space-y-1">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Система комментариев и обратной связи</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>API для внешних интеграций</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Phase 3 -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center text-white mr-4">
                                    <span class="font-bold">3</span>
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-semibold text-lg mb-2">Фаза 3: Frontend разработка (4 недели)</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600 dark:text-gray-400">
                                        <div>
                                            <h5 class="font-medium mb-1">Пользовательский интерфейс</h5>
                                            <ul class="space-y-1">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Адаптивная верстка всех страниц</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Интерактивные элементы с Livewire</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-1">Оптимизация</h5>
                                            <ul class="space-y-1">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Оптимизация загрузки изображений</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5 text-xs"></i>
                                                    <span>Реализация lazy loading</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Challenges & Solutions -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-puzzle-piece text-red-500 mr-3"></i>
                            Технические вызовы и решения
                        </h3>

                        <div class="space-y-6">
                            <!-- Challenge 1 -->
                            <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-red-500">
                                <h4 class="font-semibold text-lg mb-3 text-red-600 dark:text-red-400">Вызов: Оптимизация производительности при работе с медиа-контентом</h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Галереи проектов содержали высококачественные изображения, что приводило
                                            к медленной загрузке страниц и высокому потреблению трафика.
                                        </p>
                                    </div>
                                    <div>
                                        <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                        <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                <span>Реализация lazy loading для изображений</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                <span>Автоматическая генерация WebP формата</span>
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
                                        Снижение времени загрузки галерей на 68%, уменьшение объема передаваемых данных на 45%
                                    </p>
                                </div>
                            </div>

                            <!-- Challenge 2 -->
                            <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Вызов: Реализация мультиязычности без дублирования контента</h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Проблема</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Традиционные подходы к мультиязычности создавали дублирование контента
                                            и сложности с поддержкой SEO для разных языковых версий.
                                        </p>
                                    </div>
                                    <div>
                                        <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Решение</h5>
                                        <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                <span>Использование Laravel localization</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                <span>Динамические SEO-метатеги для каждой языковой версии</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                <span>Автоматическое определение языка пользователя</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                    <h5 class="font-medium mb-2 text-sm">Результат:</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Поддержка 3 языков (русский, английский, эсперанто) с сохранением SEO-рейтинга для каждой версии
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Results & Impact -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-chart-line text-green-500 mr-3"></i>
                            Результаты и влияние
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                <div class="text-3xl font-bold text-green-500 mb-2">95%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Google PageSpeed Score</div>
                                <div class="text-xs text-gray-500 mt-2">Оптимизация производительности</div>
                            </div>
                            <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                <div class="text-3xl font-bold text-blue-500 mb-2">1.2с</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Время загрузки</div>
                                <div class="text-xs text-gray-500 mt-2">Среднее время загрузки страницы</div>
                            </div>
                            <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                <div class="text-3xl font-bold text-purple-500 mb-2">40%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Рост трафика</div>
                                <div class="text-xs text-gray-500 mt-2">Увеличение органического трафика</div>
                            </div>
                        </div>

                        <div class="mt-6 bg-white dark:bg-gray-700 rounded-xl p-6">
                            <h4 class="font-semibold mb-4">Ключевые достижения</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600 dark:text-gray-400">
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                        <span>Создание единой платформы вместо 3 разрозненных систем</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                        <span>Упрощение процесса управления контентом на 60%</span>
                                    </li>
                                </ul>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                        <span>Улучшение пользовательского опыта на всех устройствах</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                        <span>Снижение затрат на хостинг на 35%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Lessons Learned -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-graduation-cap text-yellow-500 mr-3"></i>
                            Извлеченные уроки
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-yellow-50 dark:bg-yellow-900/20 rounded-xl p-6 border border-yellow-200 dark:border-yellow-800">
                                <h4 class="font-semibold mb-3 text-yellow-600 dark:text-yellow-400">Что сработало хорошо</h4>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-thumbs-up text-green-500 mr-2 mt-0.5"></i>
                                        <span>Использование Livewire для динамических интерфейсов</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-thumbs-up text-green-500 mr-2 mt-0.5"></i>
                                        <span>Ранняя оптимизация производительности</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-thumbs-up text-green-500 mr-2 mt-0.5"></i>
                                        <span>Компонентный подход к разработке</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-6 border border-blue-200 dark:border-blue-800">
                                <h4 class="font-semibold mb-3 text-blue-600 dark:text-blue-400">Что можно улучшить</h4>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-lightbulb text-blue-500 mr-2 mt-0.5"></i>
                                        <span>Более раннее внедрение тестирования</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-lightbulb text-blue-500 mr-2 mt-0.5"></i>
                                        <span>Использование TypeScript для фронтенда</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-lightbulb text-blue-500 mr-2 mt-0.5"></i>
                                        <span>Более детальная документация API</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Future Enhancements -->
                    <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-4 flex items-center">
                            <i class="fas fa-rocket text-primary-500 mr-3"></i>
                            Планы по развитию
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600 dark:text-gray-400">
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-plus text-green-500 mr-2 mt-0.5"></i>
                                    <span>Интеграция с системой аналитики</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-plus text-green-500 mr-2 mt-0.5"></i>
                                    <span>Добавление системы подписок на новости</span>
                                </li>
                            </ul>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-plus text-green-500 mr-2 mt-0.5"></i>
                                    <span>Создание мобильного приложения</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-plus text-green-500 mr-2 mt-0.5"></i>
                                    <span>Интеграция с социальными сетями</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
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
</x-frontend.layouts.app>

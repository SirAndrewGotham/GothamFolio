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
                            <a href="/portfolio/full-stack" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                Full-stack проекты
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Веб-сайт Московского сообщества Эсперанто
                                </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Герой-секция проекта -->
    <section class="py-12 bg-gradient-to-br from-green-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                    <!-- Информация о проекте -->
                    <div class="flex-grow">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                            <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Веб-сайт Московского сообщества Эсперанто</h1>
                            <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-clock mr-1 text-xs"></i>
                                        В разработке
                                    </span>
                            </div>
                        </div>
                        <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                            Многоязычная платформа для Московского сообщества Эсперанто с мероприятиями, новостями, блогами и сетью участников на эсперанто, русском и английском языках.
                        </p>

                        <!-- Статистика проекта -->
                        <div class="flex flex-wrap gap-6">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div>
                                    <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Год разработки</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                    <i class="fas fa-language"></i>
                                </div>
                                <div>
                                    <div class="text-lg font-bold text-gray-800 dark:text-gray-200">3 языка</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Многоязычный</div>
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
                            <button disabled class="inline-flex items-center px-6 py-3 bg-gray-300 dark:bg-gray-600 text-gray-500 dark:text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                <i class="fas fa-external-link-alt mr-2"></i>
                                <span>Скоро запуск</span>
                            </button>
                            <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-green-500 text-green-500 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg font-medium transition-colors">
                                <i class="fas fa-file-alt mr-2"></i>
                                <span>План проекта</span>
                            </button>
                        </div>
                    </div>

                    <!-- Иконка проекта -->
                    <div class="flex-shrink-0">
                        <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-green-500 to-blue-500 flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-globe-europe text-4xl"></i>
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
                                <i class="fas fa-info-circle text-green-500 mr-3"></i>
                                О проекте
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Веб-сайт Московского сообщества Эсперанто</strong> — это комплексная платформа, созданная специально для московского сообщества говорящих на эсперанто.
                                    Проект направлен на создание центрального узла для энтузиастов эсперанто, чтобы они могли общаться, делиться опытом и организовывать мероприятия.
                                </p>
                                <p>
                                    Построенная на современных веб-технологиях, платформа поддерживает несколько языков (эсперанто, русский, английский) и предоставляет
                                    полный набор инструментов для управления сообществом, включая организацию мероприятий, публикацию новостей, сеть участников и обмен контентом.
                                </p>
                                <p>
                                    Платформа делает акцент на удобном дизайне, доступности и вовлечении сообщества, сохраняя при этом культурные
                                    и лингвистические ценности движения эсперанто.
                                </p>
                            </div>
                        </div>

                        <!-- Ключевые особенности -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-star text-green-500 mr-3"></i>
                                Функции платформы
                            </h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="feature-list space-y-3">
                                    <h3 class="font-semibold text-lg mb-3 text-green-600 dark:text-green-400">Основы сообщества</h3>
                                    <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                        <li>Многоязычный контент (эсперанто, русский, английский)</li>
                                        <li>Календарь мероприятий с системой регистрации</li>
                                        <li>Управление новостями и объявлениями</li>
                                        <li>Блоги и статьи участников</li>
                                        <li>Фотогалереи с мероприятий</li>
                                        <li>Интерактивные контактные формы</li>
                                    </ul>
                                </div>
                                <div class="feature-list space-y-3">
                                    <h3 class="font-semibold text-lg mb-3 text-green-600 dark:text-green-400">Управление пользователями</h3>
                                    <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                        <li>Разрешения на основе ролей (Посетитель, Участник, Редактор, Админ)</li>
                                        <li>Каталог и профили участников</li>
                                        <li>Система модерации контента</li>
                                        <li>Отслеживание регистраций на мероприятия</li>
                                        <li>Многоуровневая система членства</li>
                                        <li>Раздел с учебными ресурсами</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Процесс разработки -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-code-branch text-green-500 mr-3"></i>
                                Этапы разработки
                            </h2>
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                        <span class="text-sm font-bold">1</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold mb-2">Основа и структура</h3>
                                        <p class="text-gray-600 dark:text-gray-400">
                                            Настройка Laravel, архитектура базы данных, базовая структура страниц, многоязычный фундамент,
                                            и реализация основной системы навигации.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                        <span class="text-sm font-bold">2</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold mb-2">Основная функциональность</h3>
                                        <p class="text-gray-600 dark:text-gray-400">
                                            Система новостей, управление мероприятиями, контактные формы, аутентификация пользователей,
                                            и основные функции управления контентом.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                        <span class="text-sm font-bold">3</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold mb-2">Функции сообщества</h3>
                                        <p class="text-gray-600 dark:text-gray-400">
                                            Система блогов с комментариями, фотогалереи, профили участников,
                                            управление членством и инструменты для взаимодействия в сообществе.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                        <span class="text-sm font-bold">4</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold mb-2">Улучшения и полировка</h3>
                                        <p class="text-gray-600 dark:text-gray-400">
                                            Оптимизация переключателя языков, функциональность поиска, настройка производительности,
                                            и дополнительные интерактивные функции для улучшения пользовательского опыта.
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
                                <i class="fas fa-tools text-green-500 mr-2"></i>
                                Технологический стек
                            </h3>
                            <div class="space-y-3">
                                <div>
                                    <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Бэкенд</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <a href="{{ url('competences/laravel') }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:underline">
                                            Laravel 12
                                        </a>
                                        <a href="{{ url('competences/php') }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:underline">
                                            PHP 8.3
                                        </a>
                                        <a href="{{ url('competences/mysql') }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:underline">
                                            SQLite/MySQL
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Фронтенд</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <a href="{{ url('competences/livewire') }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:underline">
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
                                    <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Функции</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <a href="{{ url('competences/multilingual') }}" class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm hover:underline">
                                            Многоязычный
                                        </a>
                                        <a href="{{ url('competences/laravel-folio') }}" class="tech-tag px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm hover:underline">
                                            Laravel Folio Pages
                                        </a>
                                        <a href="{{ url('competences/livewire-volt') }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:underline">
                                            Volt Components
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Масштаб проекта -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-project-diagram text-green-500 mr-2"></i>
                                Масштаб проекта
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Время разработки</span>
                                    <span class="font-semibold">3-4 месяца</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Языки</span>
                                    <span class="font-semibold">Эсперанто, RU, EN</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Роли пользователей</span>
                                    <span class="font-semibold">4 уровня</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Целевая аудитория</span>
                                    <span class="font-semibold">Сообщество Эсперанто</span>
                                </div>
                            </div>
                        </div>

                        <!-- Специальные возможности -->
                        <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 fade-in">
                            <h3 class="font-semibold mb-3">Фокус на сообществе Эсперанто</h3>
                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                <li class="flex items-start">
                                    <i class="fas fa-language text-green-500 mr-2 mt-0.5"></i>
                                    <span>Поддержка трехъязычного интерфейса</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-users text-blue-500 mr-2 mt-0.5"></i>
                                    <span>Управление мероприятиями сообщества</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-graduation-cap text-purple-500 mr-2 mt-0.5"></i>
                                    <span>Раздел с учебными ресурсами</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-camera text-yellow-500 mr-2 mt-0.5"></i>
                                    <span>Фотогалереи мероприятий</span>
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
                    Давайте обсудим, как пользовательский веб-сайт сообщества может принести пользу вашей организации.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="inline-flex items-center px-8 py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>Обсудить проект</span>
                    </a>
                    <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-green-500 text-green-500 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg font-medium transition-colors">
                        <i class="fas fa-eye mr-2"></i>
                        <span>Все проекты</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Модальное окно плана проекта -->
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

                <!-- Содержимое плана проекта -->
                <div class="max-h-[80vh] overflow-y-auto">
                    <!-- Заголовок -->
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold mb-4">План проекта: Веб-сайт Московского сообщества Эсперанто</h2>
                        <p class="text-xl text-gray-600 dark:text-gray-400">Комплексная платформа для московских говорящих на эсперанто</p>
                    </div>

                    <!-- Краткое описание -->
                    <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                        <h3 class="text-xl font-bold mb-4 flex items-center">
                            <i class="fas fa-lightbulb text-green-500 mr-3"></i>
                            Видение проекта
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Создать vibrant цифровой дом для Московского сообщества Эсперанто, который способствует общению,
                            обмену знаниями и организации мероприятий, сохраняя при этом международный дух эсперанто.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold mb-2">Основные цели</h4>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Централизовать информацию и мероприятия сообщества</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Способствовать связям между участниками и обмену контентом</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Обеспечить многоязычный доступ к ресурсам сообщества</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Ключевые функции</h4>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-calendar text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Управление мероприятиями с регистрацией</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-newspaper text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Многоязычная система новостей и блогов</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-camera text-purple-500 mr-2 mt-1 flex-shrink-0"></i>
                                        <span>Фотогалереи с мероприятий сообщества</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Техническая реализация -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-cogs text-green-500 mr-3"></i>
                            Техническая реализация
                        </h3>
                        <div class="space-y-6">
                            <!-- Реализация 1 -->
                            <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-green-500">
                                <h4 class="font-semibold text-lg mb-3 text-green-600 dark:text-green-400">Многоязычная архитектура</h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Поддержка языков</h5>
                                        <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                <span>Эсперанто (основной)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                <span>Русский (локальный)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                <span>Английский (международный)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h5 class="font-medium mb-2 text-blue-600 dark:text-blue-400">Реализация</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Переключатель языков с флагами и названиями языков, единообразная навигация на всех языках,
                                            и культурно соответствующее содержание для каждой аудитории.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Реализация 2 -->
                            <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Система ролей пользователей</h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Уровни разрешений</h5>
                                        <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                            <li class="flex items-start">
                                                <i class="fas fa-user text-gray-500 mr-2 mt-0.5"></i>
                                                <span>Посетители: Доступ к публичному контенту</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-user-friends text-green-500 mr-2 mt-0.5"></i>
                                                <span>Участники: Создание контента</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-edit text-blue-500 mr-2 mt-0.5"></i>
                                                <span>Редакторы: Модерация контента</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-cog text-purple-500 mr-2 mt-0.5"></i>
                                                <span>Админы: Полный доступ к системе</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h5 class="font-medium mb-2 text-blue-600 dark:text-blue-400">Функции</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Детальный контроль разрешений, каталог участников с настройками конфиденциальности,
                                            отслеживание регистраций на мероприятия и инструменты модерации контента.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Метрики успеха -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-chart-line text-green-500 mr-3"></i>
                            Метрики успеха
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                <div class="text-3xl font-bold text-green-500 mb-2">80%+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Вовлеченность участников</div>
                            </div>
                            <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                <div class="text-3xl font-bold text-blue-500 mb-2">3</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Поддерживаемых языка</div>
                            </div>
                            <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                <div class="text-3xl font-bold text-purple-500 mb-2">100%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Адаптивность для мобильных</div>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопки действий -->
                    <div class="mt-8 flex justify-center space-x-4">
                        <button @click="showCaseStudy = false" class="px-6 py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg font-medium transition-colors">
                            Закрыть план
                        </button>
                        <a href="/contact" class="px-6 py-3 border border-green-500 text-green-500 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg font-medium transition-colors">
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

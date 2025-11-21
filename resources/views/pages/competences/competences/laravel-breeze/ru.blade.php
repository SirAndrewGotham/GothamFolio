[x-frontend.layouts.app]
@push('section-styles')
    <style>
        /* Alpine.js specific gradient that isn't in the main app.css */
        .alpine-gradient {
            background: linear-gradient(135deg, #8b5cf6 0%, #4c1d95 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Анимация полосы навыков
        document.addEventListener('DOMContentLoaded', function() {
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
                            <a href="/competences/frontend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                Frontend разработка
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel Breeze
                                    </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Герой раздел -->
    <section class="py-12 bg-gradient-to-br from-sky-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                    <!-- Иконка и основная информация -->
                    <div class="flex-shrink-0">
                        <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#60A5FA] to-[#0ea5e9] flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-wind text-4xl"></i>
                        </div>
                    </div>

                    <!-- Основная информация -->
                    <div class="flex-grow text-center lg:text-left">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                            <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 breeze-gradient">Laravel Breeze</h1>
                            <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-rocket mr-1"></i>
                                            Быстрая разработка
                                        </span>
                            </div>
                        </div>
                        <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                            Минималистичный стартовый набор для аутентификации с Blade, React или Vue. Легковесные строительные леса для аутентификации современных приложений Laravel.
                        </p>

                        <!-- Статистика -->
                        <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ года</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Профессиональный опыт</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                    <i class="fas fa-code-branch"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.x</div>
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
                        <!-- О Laravel Breeze -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#60A5FA] mr-3"></i>
                                О Laravel Breeze
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Breeze</strong> - это минималистичная, простая реализация всех функций аутентификации Laravel.
                                    Breeze предоставляет отличную отправную точку для создания новых приложений Laravel с красиво оформленными
                                    строительными лесами для аутентификации, построенными с помощью Tailwind CSS.
                                </p>

                                <h3>Основные возможности и преимущества</h3>
                                <ul>
                                    <li><strong>Минималистичный подход</strong> - Чистая, простая аутентификация без ненужной сложности</li>
                                    <li><strong>Множество вариантов фронтенда</strong> - Варианты Blade, React, Vue и API</li>
                                    <li><strong>Стилизация Tailwind CSS</strong> - Красивый, современный дизайн из коробки</li>
                                    <li><strong>Полная аутентификация</strong> - Вход, регистрация, сброс пароля, подтверждение email</li>
                                    <li><strong>Аутентификация на основе сессий</strong> - Традиционная аутентификация веб-приложений</li>
                                    <li><strong>Простая настройка</strong> - Легко расширяется и модифицируется под нужды проекта</li>
                                </ul>

                                <h3>Сравнение стартовых наборов</h3>
                                <p>
                                    Breeze выделяется среди стартовых наборов Laravel своей простотой:
                                </p>
                                <ul>
                                    <li><strong>Breeze</strong> - Минимальные строительные леса для аутентификации</li>
                                    <li><strong>Jetstream</strong> - Полнофункциональные строительные леса приложения с командами</li>
                                    <li><strong>Fortify</strong> - Бекенд аутентификации без интерфейса</li>
                                    <li><strong>Sanctum</strong> - Аутентификация по API-токенам для SPA и мобильных приложений</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь с Breeze -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#60A5FA] mr-3"></i>
                                Мой путь с Breeze
                            </h2>
                            <div class="content-section">
                                <p>
                                    Начал использовать Laravel Breeze в 2021 году для быстрого прототипирования и создания строительных лесов новых проектов.
                                    За более чем 3+ года реализовал Breeze в различных типах проектов, включая традиционные веб-приложения,
                                    SPA с Vue.js и React, а также приложения, управляемые API, требующие быстрой настройки аутентификации.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-blue-50 to-sky-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-bolt text-[#60A5FA] mr-2"></i>
                                            Быстрое прототипирование
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Активно использовал Breeze для быстрого старта проектов и MVP,
                                            значительно сокращая начальное время разработки.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-palette text-purple-500 mr-2"></i>
                                            Пользовательская стилизация
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Настраивал стилизацию Breeze в соответствии с различными дизайн-системами,
                                            сохраняя при этом базовую логику аутентификации.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Технический опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#60A5FA] mr-3"></i>
                                Технический опыт
                            </h2>
                            <div class="content-section">
                                <p>
                                    Всесторонний опыт установки, настройки и расширения Breeze
                                    в различных фронтенд-технологиях и требованиях проектов.
                                </p>

                                <h3>Основные навыки Breeze</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Установка и конфигурация Breeze</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Выбор стека фронтенда (Blade/React/Vue)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка потока аутентификации</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Модификации стилизации Tailwind CSS</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка подтверждения email</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка сброса пароля</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Улучшение управления профилем</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Реализация в нескольких стеках</span>
                                    </div>
                                </div>

                                <h3>Опыт работы со стеком фронтенда</h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Blade шаблоны</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Vue.js</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">React</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Inertia.js</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Livewire</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Только API</span>
                                </div>

                                <h3>Настройка и расширение</h3>
                                <ul>
                                    <li><strong>Интеграция дизайн-системы</strong> - Настройка Breeze в соответствии с дизайн-системами проекта</li>
                                    <li><strong>Дополнительные функции аутентификации</strong> - Расширение базовой аутентификации</li>
                                    <li><strong>Поддержка мультитенантности</strong> - Адаптация Breeze для мультитенантных приложений</li>
                                    <li><strong>Социальная аутентификация</strong> - Интеграция провайдеров социального входа</li>
                                    <li><strong>Улучшенная безопасность</strong> - Добавление дополнительных функций безопасности и валидации</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Шаблоны реализации -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#60A5FA] mr-3"></i>
                                Шаблоны реализации
                            </h2>
                            <div class="content-section">
                                <h3>Адаптации для конкретных проектов</h3>
                                <p>
                                    Опыт реализации Breeze в различных типах проектов и требований:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-green-600 mb-2">Традиционные веб-приложения</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Реализации стека Blade для традиционных серверно-рендерящихся
                                            приложений с аутентификацией на основе сессий.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-purple-600 mb-2">Современные SPA</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Реализации Vue.js и React для одностраничных приложений
                                            с современными рабочими процессами фронтенд-разработки.
                                        </p>
                                    </div>
                                </div>

                                <h3>Интеграция и экосистема</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Tailwind CSS</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Fortify Backend</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Sanctum API</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Socialite</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Livewire</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Inertia.js</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Alpine.js</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Vite</span>
                                </div>
                            </div>
                        </div>

                        <!-- Продакшен и лучшие практики -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-rocket text-[#60A5FA] mr-3"></i>
                                Продакшен и лучшие практики
                            </h2>
                            <div class="content-section">
                                <p>
                                    Готовые к продакшену реализации Breeze с оптимизированной производительностью и улучшенными функциями:
                                </p>

                                <h3>Оптимизация для продакшена</h3>
                                <ul>
                                    <li><strong>Настройка производительности</strong> - Оптимизация потоков аутентификации для продакшена</li>
                                    <li><strong>Усиление безопасности</strong> - Дополнительные меры безопасности сверх стандартных</li>
                                    <li><strong>Пользовательская валидация</strong> - Улучшенная валидация форм и пользовательский опыт</li>
                                    <li><strong>Настройка шаблонов email</strong> - Брендированные шаблоны email для аутентификации</li>
                                    <li><strong>Обработка ошибок</strong> - Улучшенные сообщения об ошибках и обратная связь с пользователем</li>
                                    <li><strong>Доступность</strong> - Обеспечение соответствия WCAG в потоках аутентификации</li>
                                </ul>

                                <h3>Рабочий процесс разработки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-600 mb-2">Быстрая разработка</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Быстрое создание строительных лесов проекта</li>
                                            <li>• Последовательные шаблоны аутентификации</li>
                                            <li>• Сокращение шаблонного кода</li>
                                            <li>• Стандартизированная структура проекта</li>
                                        </ul>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-green-600 mb-2">Командная работа</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Знакомая структура проекта</li>
                                            <li>• Последовательные шаблоны кода</li>
                                            <li>• Легкое введение новых разработчиков</li>
                                            <li>• Стандартизированные потоки аутентификации</li>
                                        </ul>
                                    </div>
                                </div>

                                <h3>Реализация пользовательских функций</h3>
                                <ul>
                                    <li><strong>Улучшение профиля пользователя</strong> - Расширенное управление профилем с дополнительными полями</li>
                                    <li><strong>Поддержка мультиязычности</strong> - Интернационализация интерфейсов аутентификации</li>
                                    <li><strong>Поддержка темной темы</strong> - Реализация темного режима в потоках аутентификации</li>
                                    <li><strong>Расширенная валидация форм</strong></li>
                                    <li><strong>Интеграция пользовательских middleware</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карточка уровня владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#60A5FA] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее по Breeze</span>
                                        <span class="text-sm font-bold text-[#60A5FA]">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#60A5FA] to-[#0ea5e9]"
                                             data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Реализация на Blade</span>
                                        <span class="text-sm font-bold text-green-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Реализация на Vue.js</span>
                                        <span class="text-sm font-bold text-blue-500">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Реализация на React</span>
                                        <span class="text-sm font-bold text-purple-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Настройка</span>
                                        <span class="text-sm font-bold text-orange-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#60A5FA] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#60A5FA] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#60A5FA] w-5 mr-3"></i>
                                    <span class="text-sm">Версия: <strong>Breeze 1.x</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#60A5FA] w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>18+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-wind text-[#60A5FA] w-5 mr-3"></i>
                                    <span class="text-sm">Стеки фронтенда: <strong>Blade, Vue, React</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-bolt text-[#60A5FA] w-5 mr-3"></i>
                                    <span class="text-sm">Быстрые старты: <strong>25+ проектов</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#60A5FA] mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Laravel</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                </a>
                                <a href="/competences/laravel-fortify" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-lock text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Laravel Fortify</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">82% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                </a>
                                <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-wind text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Tailwind CSS</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                </a>
                                <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-vuejs text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Vue.js</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">78% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-[#60A5FA] to-[#0ea5e9] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Нужна быстрая настройка аутентификации?</h3>
                            <p class="text-sm mb-4">Готовы начать ваш проект с Laravel Breeze</p>
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

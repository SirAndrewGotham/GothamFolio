<x-frontend.layouts.app>
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
            // Анимация шкалы навыков
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
                                        Alpine.js
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-purple-500 to-indigo-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-mountain text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 alpine-gradient">Alpine.js</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bolt mr-1"></i>
                                            Легковесный и реактивный
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Минималистичный JavaScript фреймворк для добавления интерактивности на веб-страницы.
                                Идеально подходит для улучшения серверно-рендеренного HTML реактивным поведением.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">82%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-weight-hanging"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">~7KB</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Размер бандла</div>
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
                            <!-- О Alpine.js -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                    О Alpine.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Alpine.js</strong> — это надежный минималистичный инструмент для создания поведения прямо в вашей разметке.
                                        Представьте его как jQuery для современного веба. Он предлагает реактивную и декларативную природу больших
                                        фреймворков, таких как Vue или React, но с гораздо меньшими затратами.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Минимальный размер</strong> - Всего ~7KB в gzip</li>
                                        <li><strong>Не требует сборки</strong> - Работает прямо в браузере</li>
                                        <li><strong>Декларативный синтаксис</strong> - Пишите поведение прямо в HTML</li>
                                        <li><strong>Реактивное состояние</strong> - Автоматическое обновление UI при изменении данных</li>
                                        <li><strong>Идеален для серверно-рендеренных приложений</strong> - Улучшает существующий HTML</li>
                                        <li><strong>Прогрессивное улучшение</strong> - Добавляйте интерактивность постепенно</li>
                                        <li><strong>Знакомый Vue-подобный синтаксис</strong> - Легко изучается для Vue-разработчиков</li>
                                    </ul>

                                    <h3>Идеальные сценарии использования</h3>
                                    <p>
                                        Alpine.js превосходен в сценариях, где вам нужна интерактивность без накладных расходов полноценного SPA:
                                    </p>
                                    <ul>
                                        <li>Улучшение серверно-рендеренных приложений (Laravel, Django, Rails)</li>
                                        <li>Добавление интерактивности на статические сайты</li>
                                        <li>Создание компонентов малой и средней сложности</li>
                                        <li>Прототипирование и MVP</li>
                                        <li>Улучшение легаси-кода</li>
                                        <li>Прогрессивное улучшение существующих приложений</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в Alpine.js -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-purple-500 mr-3"></i>
                                    Мой путь с Alpine.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать Alpine.js в 2021 году, когда искал легковесное решение для добавления интерактивности
                                        в серверно-рендеренные Laravel приложения. С тех пор он стал моим основным инструментом для улучшения
                                        HTML реактивным поведением без сложности больших фреймворков.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code text-purple-500 mr-2"></i>
                                                Интеграция с Laravel
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обширный опыт интеграции Alpine.js с Laravel приложениями,
                                                создания реактивных компонентов, которые бесшовно работают с серверно-рендеренными Blade шаблонами.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                                                Прогрессивное улучшение
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Успешно использовал Alpine.js для прогрессивного улучшения легаси-приложений,
                                                добавляя современную интерактивность без полной перезаписи кода.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                    Мой опыт работы с Alpine.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Более чем за 3 года опыта я использовал Alpine.js в различных проектах,
                                        от простых интерактивных элементов до сложных компонентных интерфейсов.
                                    </p>

                                    <h3>Основные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Реактивное управление состоянием</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Композиция компонентов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обработка событий</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Взаимодействие с формами</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Динамическая загрузка контента</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с Laravel/Livewire</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пользовательские директивы</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация производительности</span>
                                        </div>
                                    </div>

                                    <h3>Технический стек</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">x-data</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">x-show</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">x-bind</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">x-on</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">x-model</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">x-for</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">x-transition</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">x-effect</span>
                                    </div>

                                    <h3>Значимые проекты</h3>
                                    <ul>
                                        <li><strong>Интерактивные таблицы данных</strong> - Сортируемые, фильтруемые таблицы с Alpine.js</li>
                                        <li><strong>Динамические конструкторы форм</strong> - Формы, адаптирующиеся под пользовательский ввод</li>
                                        <li><strong>Системы модальных окон</strong> - Доступные модальные диалоги с Alpine.js</li>
                                        <li><strong>Интерфейсы с вкладками</strong> - Адаптивные компоненты вкладок без перезагрузки страницы</li>
                                        <li><strong>Живой поиск</strong> - Поиск в реальном времени с дебаунсингом ввода</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Технические детали -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-purple-500 mr-3"></i>
                                    Технические детали
                                </h2>
                                <div class="content-section">
                                    <h3>Архитектура и философия</h3>
                                    <p>
                                        Alpine.js следует философии "прогрессивного улучшения", позволяя добавлять интерактивность
                                        в существующий HTML без полной перезаписи. Его архитектура разработана для того, чтобы быть:
                                    </p>
                                    <ul>
                                        <li><strong>Декларативной</strong> - Определяйте поведение прямо в HTML атрибутах</li>
                                        <li><strong>Реактивной</strong> - Автоматическое обновление UI при изменении данных</li>
                                        <li><strong>Компонентно-ориентированной</strong> - Инкапсулируйте поведение в переиспользуемых компонентах</li>
                                        <li><strong>Ненавязчивой</strong> - Работает вместе с существующим JavaScript</li>
                                        <li><strong>Расширяемой</strong> - Создавайте пользовательские директивы и плагины</li>
                                    </ul>

                                    <h3>Ключевые директивы</h3>
                                    <p>
                                        Alpine.js предоставляет набор директив, которые формируют основу его функциональности:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-data</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Определяет данные и поведение компонента
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-show</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Переключает видимость элемента на основе выражения
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-bind</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Динамически устанавливает HTML атрибуты
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-on</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Слушает DOM события и выполняет выражения
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-model</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создает двустороннюю привязку данных
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-for</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Итерируется по массивам для создания DOM элементов
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-transition</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Применяет CSS переходы к элементам
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-effect</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Выполняет код при изменении зависимостей
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Проекты на GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-purple-500 mr-3"></i>
                                    Проекты на GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих проектов с Alpine.js можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Я постоянно добавляю новые проекты с Alpine.js, которые демонстрируют практические применения
                                        и лучшие практики использования этого легковесного фреймворка.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-indigo-500"
                                                 data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Разработка компонентов</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Управление состоянием</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интеграция с Laravel</span>
                                            <span class="text-sm font-bold text-red-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Оптимизация производительности</span>
                                            <span class="text-sm font-bold text-yellow-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-purple-500 mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Alpine.js 3.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-weight-hanging text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Размер бандла: <strong>~7KB</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Статус: <strong>Активная разработка</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Путь обучения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-purple-500 mr-2"></i>
                                    Путь обучения
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Базовые директивы (x-data, x-show)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Обработка событий (x-on)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Двусторонняя привязка (x-model)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Композиция компонентов</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Продвинутое управление состоянием</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Пользовательские директивы и плагины</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Смежные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-purple-500 mr-2"></i>
                                    Смежные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/livewire" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Livewire</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">JavaScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-purple-500 to-indigo-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                                <p class="text-sm mb-4">Готов обсудить ваш проект с Alpine.js</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-purple-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

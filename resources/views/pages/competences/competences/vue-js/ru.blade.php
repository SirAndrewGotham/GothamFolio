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
            // Skill bar animation
            document.addEventListener('DOMContentLoaded', function () {
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
                                    Фронтенд-разработка
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Vue.js
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4fc08d] to-[#34495e] flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-vuejs text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 vue-gradient">Vue.js</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-leaf mr-1"></i>
                                            Прогрессивный фреймворк
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Прогрессивный JavaScript фреймворк для создания пользовательских интерфейсов. Доступный, универсальный и производительный фреймворк для современной веб-разработки.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Профессиональный опыт</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.x</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Composition API</div>
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
                            <!-- О Vue.js -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#4fc08d] mr-3"></i>
                                    О Vue.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Vue.js</strong> - это прогрессивный JavaScript фреймворк для создания пользовательских интерфейсов.
                                        В отличие от других монолитных фреймворков, Vue разработан с нуля для постепенного внедрения.
                                        Основная библиотека фокусируется только на слое представления и легко осваивается и интегрируется с другими библиотеками или существующими проектами.
                                    </p>

                                    <h3>Основная философия и преимущества</h3>
                                    <ul>
                                        <li><strong>Прогрессивный фреймворк</strong> - Масштабируется от библиотеки до полнофункционального фреймворка</li>
                                        <li><strong>Доступный</strong> - Легко изучается с HTML-синтаксисом шаблонов</li>
                                        <li><strong>Универсальный</strong> - Мощные инструменты для одностраничных приложений</li>
                                        <li><strong>Производительный</strong> - Виртуальный DOM и оптимизированный рендеринг</li>
                                        <li><strong>Composition API</strong> - Лучшее переиспользование логики и поддержка TypeScript</li>
                                        <li><strong>Богатая экосистема</strong> - Vue Router, Vuex/Pinia, Vue CLI и многое другое</li>
                                    </ul>

                                    <h3>Идеальные сценарии использования</h3>
                                    <p>
                                        Vue.js превосходно работает в различных сценариях от простых улучшений до сложных приложений:
                                    </p>
                                    <ul>
                                        <li>Прогрессивное улучшение существующих проектов</li>
                                        <li>Одностраничные приложения (SPA)</li>
                                        <li>Интерактивные панели управления и визуализация данных</li>
                                        <li>Интерфейсы электронной коммерции и каталоги продуктов</li>
                                        <li>Системы управления контентом и административные панели</li>
                                        <li>Приложения реального времени и инструменты совместной работы</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с Vue.js -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#4fc08d] mr-3"></i>
                                    Мой путь с Vue.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Начал работать с Vue.js в 2020 году, изначально с Vue 2 для небольших интерактивных компонентов.
                                        Постепенно осваивал более продвинутые паттерны и перешел на Vue 3 с Composition API.
                                        За 4+ года построил различные приложения от простых виджетов до сложных SPA.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code-branch text-[#4fc08d] mr-2"></i>
                                                Миграция с Vue 2 на Vue 3
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Успешно мигрировал проекты с Vue 2 Options API на Vue 3 Composition API,
                                                используя улучшенную поддержку TypeScript и лучшую организацию кода.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                                Интеграция экосистемы
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Интегрировал Vue с различными бэкендами, включая Laravel API,
                                                создавая полнофункциональные приложения с современными рабочими процессами разработки.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Техническая экспертиза -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#4fc08d] mr-3"></i>
                                    Техническая экспертиза
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Прочное понимание основ Vue.js в сочетании с практическим опытом
                                        создания производственных приложений с современными практиками разработки.
                                    </p>

                                    <h3>Основные навыки Vue.js</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vue 3 Composition API</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Композиция и переиспользуемость компонентов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Реактивное управление состоянием</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vue Router для навигации в SPA</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обработка и валидация форм</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция API и получение данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Директивы и пользовательские директивы</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование с Vue Test Utils</span>
                                        </div>
                                    </div>

                                    <h3>Продвинутые возможности и паттерны</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Composition API</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Teleport</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Suspense</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Provide/Inject</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Пользовательские хуки</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Слоты</span>
                                    </div>

                                    <h3>Инструменты разработки и рабочий процесс</h3>
                                    <ul>
                                        <li><strong>Vue DevTools</strong> - Расширение браузера для отладки и инспекции</li>
                                        <li><strong>Vite</strong> - Быстрый инструмент сборки и сервер разработки</li>
                                        <li><strong>Интеграция TypeScript</strong> - Типобезопасная разработка на Vue</li>
                                        <li><strong>Vue CLI</strong> - Создание проекта и конфигурация</li>
                                        <li><strong>Однофайловые компоненты (SFC)</strong> - .vue файлы с шаблоном, скриптом и стилями</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Экосистема и управление состоянием -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#4fc08d] mr-3"></i>
                                    Экосистема и управление состоянием
                                </h2>
                                <div class="content-section">
                                    <h3>Решения для управления состоянием</h3>
                                    <p>
                                        Опыт работы с различными паттернами и библиотеками управления состоянием в экосистеме Vue:
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-purple-600 mb-2">Pinia (Современный)</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Рекомендуемая библиотека управления состоянием для Vue 3 с поддержкой TypeScript,
                                                более простым API и лучшим опытом разработки.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-blue-600 mb-2">Vuex (Устаревший)</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Централизованное управление состоянием для приложений Vue 2,
                                                с опытом работы со сложными паттернами состояния и модулями.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Пакеты экосистемы Vue</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Vue Router</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Vuex/Pinia</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Vue I18n</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Vuelidate</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Vue Meta</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Vue Chart.js</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Vue Draggable</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Vue Toast</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Примеры проектов -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#4fc08d] mr-3"></i>
                                    Проекты и реализации
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Различные проекты на Vue.js, демонстрирующие различные паттерны реализации и сценарии использования:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <h3 class="mt-6">Значительные проекты на Vue.js</h3>
                                    <ul>
                                        <li><strong>Интерактивная панель управления</strong> - Метрики в реальном времени с Vue 3 и Chart.js</li>
                                        <li><strong>Каталог продуктов электронной коммерции</strong> - Фильтруемые списки продуктов с Vue Router</li>
                                        <li><strong>Административная панель управления</strong> - CRUD операции с управлением состоянием Pinia</li>
                                        <li><strong>Многошаговое формное приложение</strong> - Сложные рабочие процессы форм с валидацией</li>
                                        <li><strong>Инструмент совместной работы в реальном времени</strong> - Vue с интеграцией WebSocket</li>
                                        <li><strong>Сайт-портфолио</strong> - SPA с динамическим контентом и анимациями</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#4fc08d] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение Vue.js</span>
                                            <span class="text-sm font-bold text-[#4fc08d]">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4fc08d] to-[#34495e]"
                                                 data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Vue 3 & Composition API</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Vue Router & Навигация</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Управление состоянием</span>
                                            <span class="text-sm font-bold text-purple-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интеграция экосистемы</span>
                                            <span class="text-sm font-bold text-orange-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#4fc08d] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Vue 3.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-sync-alt text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Миграция: <strong>Vue 2 → Vue 3</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-puzzle-piece text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Построено компонентов: <strong>50+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#4fc08d] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4fc08d] transition-colors">JavaScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                    </a>
                                    <a href="/competences/typescript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js-square text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4fc08d] transition-colors">TypeScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                    </a>
                                    <a href="/competences/html-css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-html5 text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4fc08d] transition-colors">HTML/CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                    </a>
                                    <a href="/competences/react" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-react text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4fc08d] transition-colors">React</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">65% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#4fc08d] to-[#34495e] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Интересует разработка на Vue.js?</h3>
                                <p class="text-sm mb-4">Готов обсудить современные приложения на Vue.js и SPA</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-green-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

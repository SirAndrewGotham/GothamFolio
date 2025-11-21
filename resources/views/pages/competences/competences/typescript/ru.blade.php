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
    <section class="py-16">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Основной контент -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- О TypeScript -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                О TypeScript
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>TypeScript</strong> - это строго типизированный язык программирования, который строится на JavaScript,
                                    предоставляя лучшие инструменты для любого масштаба. Он добавляет опциональные статические типы, классы и модули
                                    в JavaScript, позволяя разработчикам писать более надежный и поддерживаемый код.
                                </p>

                                <h3>Ключевые преимущества</h3>
                                <ul>
                                    <li><strong>Типобезопасность</strong> - Обнаружение ошибок во время компиляции, а не выполнения</li>
                                    <li><strong>Улучшенная поддержка IDE</strong> - Лучшее автодополнение, рефакторинг и навигация</li>
                                    <li><strong>Масштабируемость кодовой базы</strong> - Уверенное управление большими кодовыми базами</li>
                                    <li><strong>Современные возможности JavaScript</strong> - Доступ к последним функциям ECMAScript</li>
                                    <li><strong>Постепенное внедрение</strong> - Поэтапная миграция проектов с JavaScript</li>
                                    <li><strong>Богатая экосистема</strong> - Отличная поддержка фреймворков и библиотек</li>
                                </ul>

                                <h3>Основные возможности</h3>
                                <p>
                                    TypeScript представляет мощные функции, которые улучшают разработку на JavaScript:
                                </p>
                                <ul>
                                    <li><strong>Статическая типизация</strong> - Опциональные аннотации типов и вывод типов</li>
                                    <li><strong>Интерфейсы и типы</strong> - Определение форм объектов и контрактов</li>
                                    <li><strong>Дженерики</strong> - Создание переиспользуемых типобезопасных компонентов</li>
                                    <li><strong>Декораторы</strong> - Добавление метаданных и модификация поведения классов</li>
                                    <li><strong>Пространства имен и модули</strong> - Лучшая организация кода</li>
                                    <li><strong>Продвинутые инструменты</strong> - Богатый языковой сервис и опции компилятора</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь с TypeScript -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-blue-500 mr-3"></i>
                                Мой путь с TypeScript
                            </h2>
                            <div class="content-section">
                                <p>
                                    Я начал использовать TypeScript в 2020 году при работе над крупномасштабными фронтенд-приложениями,
                                    которые требовали лучшей поддерживаемости и опыта разработки. За последние 3+ года
                                    я внедрил TypeScript в различных проектах, от небольших утилит до корпоративных приложений.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fab fa-vuejs text-blue-500 mr-2"></i>
                                            Интеграция с Vue.js
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Обширный опыт работы с TypeScript в приложениях Vue.js,
                                            включая Composition API и классовые компоненты.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fab fa-react text-purple-500 mr-2"></i>
                                            Разработка на React
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Комплексная интеграция TypeScript с React hooks,
                                            context и типами сторонних библиотек.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Мой опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                Мой опыт с TypeScript
                            </h2>
                            <div class="content-section">
                                <p>
                                    Имея 3+ года опыта работы с TypeScript, я развил комплексные знания
                                    в проектировании системы типов, настройке инструментов и интеграции фреймворков
                                    в проектах различного масштаба и сложности.
                                </p>

                                <h3>Специализированные навыки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Продвинутые возможности системы типов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Обобщенное программирование и ограничения</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Создание и поддержка файлов объявлений</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Конфигурация и оптимизация компилятора</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Специфические для фреймворков шаблоны типов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Стратегии миграции с JavaScript</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Интеграция и оптимизация инструментов сборки</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Мониторинг производительности и отладка</span>
                                    </div>
                                </div>

                                <h3>Интеграция технологий</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Vue 3</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">React</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Node.js</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Nuxt.js</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Vite</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Webpack</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Jest</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">ESLint</span>
                                </div>

                                <h3>Мастерство системы типов</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                        <h4 class="font-bold text-blue-500 mb-2">Продвинутые типы</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Условные типы и ключевое слово infer</li>
                                            <li>• Сопоставленные типы и переименование ключей</li>
                                            <li>• Типы шаблонных литералов</li>
                                            <li>• Рекурсивные определения типов</li>
                                            <li>• Брендированные типы и защитники типов</li>
                                        </ul>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                        <h4 class="font-bold text-blue-500 mb-2">Практические шаблоны</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Размеченные объединения</li>
                                            <li>• Шаблоны строителя и фабрики</li>
                                            <li>• Внедрение зависимостей с типами</li>
                                            <li>• Типизация управления состоянием</li>
                                            <li>• Генерация типов для API-клиентов</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Интеграция с фреймворками -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-blue-500 mr-3"></i>
                                Интеграция с фреймворками и инструменты
                            </h2>
                            <div class="content-section">
                                <h3>Vue.js с TypeScript</h3>
                                <p>
                                    У меня обширный опыт интеграции TypeScript с Vue.js:
                                </p>
                                <ul>
                                    <li><strong>Composition API</strong> - Типобезопасное реактивное состояние и композабли</li>
                                    <li><strong>Классовые компоненты</strong> - Vue class component с декораторами</li>
                                    <li><strong>Типизация компонентов</strong> - Определения типов для props, emits и slots</li>
                                    <li><strong>Vuex/Pinia</strong> - Типобезопасные решения для управления состоянием</li>
                                    <li><strong>Vue Router</strong> - Типизированные параметры маршрутов и навигация</li>
                                    <li><strong>Пользовательские директивы</strong> - Разработка типобезопасных директив</li>
                                </ul>

                                <h3>React с TypeScript</h3>
                                <p>
                                    Комплексная интеграция TypeScript в экосистемах React:
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Типизация хуков</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Типобезопасные пользовательские хуки с правильными дженериками и типами возврата
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Context API</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Строго типизированные провайдеры и потребители контекста
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Шаблоны компонентов</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Обобщенные компоненты, HOC и render props с типами
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Управление состоянием</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Redux, Zustand и другие библиотеки состояния с TypeScript
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Миграция и лучшие практики -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-shipping-fast text-blue-500 mr-3"></i>
                                Стратегии миграции и лучшие практики
                            </h2>
                            <div class="content-section">
                                <h3>Миграция с JavaScript на TypeScript</h3>
                                <p>
                                    Я успешно мигрировал множество проектов с JavaScript на TypeScript:
                                </p>
                                <ul>
                                    <li><strong>Постепенная миграция</strong> - Поэтапное внедрение с allowJs и checkJs</li>
                                    <li><strong>Файлы объявлений</strong> - Создание определений типов для существующих JavaScript библиотек</li>
                                    <li><strong>Обновление пайплайнов сборки</strong> - Настройка TypeScript в существующих системах сборки</li>
                                    <li><strong>Обучение команды</strong> - Обучение команд концепциям и преимуществам TypeScript</li>
                                    <li><strong>Улучшение качества кода</strong> - Использование типов для рефакторинга и улучшения кода</li>
                                </ul>

                                <h3>Лучшие практики разработки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Строгая конфигурация</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Реализация строгого режима и комплексной проверки типов
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Структура проекта</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Организация определений типов и границ модулей
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Оптимизация производительности</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Конфигурация компилятора для оптимального времени сборки
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Интеграция инструментов</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            ESLint, Prettier и фреймворки тестирования с TypeScript
                                        </p>
                                    </div>
                                </div>

                                <h3>Значительные проекты миграции</h3>
                                <ul>
                                    <li><strong>Крупная E-commerce платформа</strong> - Мигрированное Vue.js приложение с 100k+ LOC</li>
                                    <li><strong>Финансовая панель управления</strong> - React приложение со сложным управлением состоянием</li>
                                    <li><strong>Инструмент для совместной работы в реальном времени</strong> - Миграция на Vue 3 Composition API</li>
                                    <li><strong>Устаревшее AngularJS приложение</strong> - Модернизация с TypeScript</li>
                                    <li><strong>Node.js микросервисы</strong> - Реализация типобезопасности бэкенд-сервисов</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карточка уровня владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее владение</span>
                                        <span class="text-sm font-bold text-blue-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500"
                                             data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Система типов</span>
                                        <span class="text-sm font-bold text-purple-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Интеграция с фреймворками</span>
                                        <span class="text-sm font-bold text-green-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Инструменты и конфигурация</span>
                                        <span class="text-sm font-bold text-yellow-500">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="78%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Опыт миграции</span>
                                        <span class="text-sm font-bold text-red-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="75%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-blue-500 w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code-branch text-blue-500 w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>25+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fab fa-vuejs text-blue-500 w-5 mr-3"></i>
                                    <span class="text-sm">Фреймворки: <strong>Vue & React</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-magic text-blue-500 w-5 mr-3"></i>
                                    <span class="text-sm">Миграция: <strong>10+ проектов</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-tools text-blue-500 w-5 mr-3"></i>
                                    <span class="text-sm">Инструменты: <strong>Продвинутая настройка</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Возможности TypeScript -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-star text-blue-500 mr-2"></i>
                                Используемые продвинутые возможности
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Дженерики и условные типы</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Сопоставленные и типы шаблонных литералов</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Слияние объявлений</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-spinner text-xs"></i>
                                    </div>
                                    <span class="text-sm">Декораторы и метаданные</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Ссылки на проекты</span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-blue-500 mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-js text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-blue-500 transition-colors">JavaScript</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                </a>
                                <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-vuejs text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-blue-500 transition-colors">Vue.js</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                </a>
                                <a href="/competences/react" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-react text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-blue-500 transition-colors">React</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                </a>
                                <a href="/competences/nodejs" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-node-js text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-blue-500 transition-colors">Node.js</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Нужна экспертиза TypeScript?</h3>
                            <p class="text-sm mb-4">Давайте создадим типобезопасные, масштабируемые приложения</p>
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

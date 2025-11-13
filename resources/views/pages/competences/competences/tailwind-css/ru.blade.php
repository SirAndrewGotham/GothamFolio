<x-frontend.layouts.app>
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
                                    Tailwind CSS
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#06b6d4] to-[#0891b2] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-wind text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Tailwind CSS</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                    <span class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-bolt mr-1"></i>
                                        Utility-First
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                CSS-фреймворк, основанный на утилитах, для быстрой разработки пользовательского интерфейса с адаптивным дизайном и современным рабочим процессом.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center text-[#06b6d4] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#06b6d4] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с Tailwind 1.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#06b6d4] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.4+</div>
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
                            <!-- О Tailwind CSS -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#06b6d4] mr-3"></i>
                                    О Tailwind CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Tailwind CSS</strong> — это CSS-фреймворк, основанный на утилитах, который позволяет быстро разрабатывать пользовательский интерфейс без написания кастомного CSS. В отличие от традиционных CSS-фреймворков, Tailwind предоставляет низкоуровневые утилитарные классы, которые позволяют создавать полностью кастомные дизайны прямо в разметке.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Подход Utility-First</strong> — Создавайте сложные дизайны, не покидая HTML</li>
                                        <li><strong>Адаптивность по умолчанию</strong> — Встроенные утилиты для адаптивного дизайна</li>
                                        <li><strong>Высокая степень кастомизации</strong> — Полный контроль над дизайн-системой</li>
                                        <li><strong>Оптимизация производительности</strong> — Интеграция с PurgeCSS для минимального размера файла</li>
                                        <li><strong>Опыт разработчика</strong> — Отличные инструменты и поддержка IntelliSense</li>
                                        <li><strong>Дружелюбность к компонентам</strong> — Идеально подходит для фреймворков, основанных на компонентах</li>
                                        <li><strong>Поддержка темной темы</strong> — Реализация темной темы первого класса</li>
                                    </ul>

                                    <h3>Философия разработки</h3>
                                    <p>
                                        Tailwind придерживается современного подхода к разработке на CSS:
                                    </p>
                                    <ul>
                                        <li>Ограничения ведут к согласованности и более быстрой разработке</li>
                                        <li>Утилитарные классы являются композируемыми и предсказуемыми</li>
                                        <li>Дизайн-решения видны и доступны для поиска в разметке</li>
                                        <li>Нет переключения контекста между HTML и CSS файлами</li>
                                        <li>Дизайн-система обеспечивается через конфигурацию</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в Tailwind -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#06b6d4] mr-3"></i>
                                    Мой путь в Tailwind CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать Tailwind CSS в 2019 году с версии 1.0, изначально скептически, но быстро стал активным сторонником после того, как ощутил прирост производительности. За более чем 4 года я прошел путь от базового использования утилит до расширенной конфигурации, разработки плагинов и внедрения дизайн-систем в нескольких организациях.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-palette text-[#06b6d4] mr-2"></i>
                                                Дизайн-системы
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создавал комплексные дизайн-системы с пользовательскими конфигурациями, обеспечивая визуальную согласованность в крупных приложениях и командах.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-purple-500 mr-2"></i>
                                                Оптимизация производительности
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Оптимизировал сборки Tailwind с помощью PurgeCSS, JIT-режима и пользовательских конфигураций для достижения оптимальной производительности.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#06b6d4] mr-3"></i>
                                    Мой опыт работы с Tailwind CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 4 лет опыта работы с Tailwind CSS в более чем 40 проектах, я создавал всё: от простых маркетинговых страниц до сложных корпоративных приложений, последовательно обеспечивая красивые, адаптивные интерфейсы с исключительной скоростью разработки.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Расширенная конфигурация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка кастомных плагинов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Внедрение дизайн-систем</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Паттерны адаптивного дизайна</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Реализация темной темы</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Извлечение компонентов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с фреймворками</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Лучшие практики доступности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Анимации и переходы</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация процесса сборки</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обучение команды и стандарты</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты на Tailwind</h3>
                                    <ul>
                                        <li><strong>Корпоративная SaaS-платформа</strong> — Комплексная дизайн-система с 50+ компонентами</li>
                                        <li><strong>Редизайн E-commerce</strong> — Адаптивный дизайн с мобильным подходом и разработкой на 60% быстрее</li>
                                        <li><strong>Библиотека дизайн-системы</strong> — Пользовательская конфигурация Tailwind для согласованности бренда</li>
                                        <li><strong>Админ-панель</strong> — Сложные макеты с темной темой и доступностью</li>
                                        <li><strong>Маркетинговый сайт</strong> — Высокопроизводительный статический сайт с анимациями</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Расширенные возможности Tailwind -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#06b6d4] mr-3"></i>
                                    Расширенные возможности Tailwind
                                </h2>
                                <div class="content-section">
                                    <h3>Расширенная конфигурация и кастомизация</h3>
                                    <p>
                                        Экспертиза в мощных возможностях кастомизации Tailwind:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Пользовательские дизайн-системы</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Расширение Tailwind пользовательскими цветами, отступами, типографскими шкалами и библиотеками компонентов.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Разработка плагинов</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создание пользовательских плагинов для переиспользуемых утилит, компонентов и интеграций с фреймворками.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Оптимизация JIT-режима</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использование Just-In-Time режима для неограниченного количества утилит и динамической генерации классов.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Настройка производительности</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Оптимизация процессов сборки, конфигурации PurgeCSS и извлечения критического CSS.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Интеграция в современный рабочий процесс</h3>
                                    <p>
                                        Бесшовная интеграция с современными инструментами разработки:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">VSCode IntelliSense</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">PostCSS Config</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Mix</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Vite Integration</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Webpack Config</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">CI/CD Pipelines</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Дизайн-системы и компоненты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-layer-group text-[#06b6d4] mr-3"></i>
                                    Дизайн-системы и компоненты
                                </h2>
                                <div class="content-section">
                                    <h3>Архитектура компонентов</h3>
                                    <p>
                                        Создание сопровождаемых, масштабируемых систем компонентов с Tailwind:
                                    </p>
                                    <ul>
                                        <li><strong>Компоненты Utility-First</strong> — Композируемые компоненты с использованием утилитарных классов</li>
                                        <li><strong>Директива @apply</strong> — Извлечение повторяющихся утилитарных паттернов</li>
                                        <li><strong>Библиотеки компонентов</strong> — Создание переиспользуемых систем компонентов</li>
                                        <li><strong>Дизайн-токены</strong> — Согласованные отступы, цвета и типографика</li>
                                        <li><strong>Адаптивные компоненты</strong> — Дизайн компонентов с мобильным подходом</li>
                                        <li><strong>Доступные компоненты</strong> — Элементы интерфейса, соответствующие WCAG</li>
                                    </ul>

                                    <h3>Паттерны интеграции</h3>
                                    <p>
                                        Опыт интеграции Tailwind с различными фреймворками и инструментами:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Компоненты Laravel Blade</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Однофайловые компоненты Vue.js</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Функциональные компоненты React</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интерактивные компоненты Alpine.js</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Реактивные компоненты Livewire</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Генераторы статических сайтов</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#06b6d4] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#06b6d4]">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#06b6d4] to-[#0891b2]"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Разработка Utility-First</span>
                                            <span class="text-sm font-bold text-green-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Адаптивный дизайн</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Пользовательская конфигурация</span>
                                            <span class="text-sm font-bold text-blue-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Производительность</span>
                                            <span class="text-sm font-bold text-purple-500">87%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="87%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#06b6d4] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Tailwind 3.4+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>40+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-palette text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Дизайн-системы: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-mobile-alt text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Адаптивность: <strong>100% mobile-first</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#06b6d4] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/alpine-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-mountain text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">Alpine.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/livewire" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-pink-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">Livewire</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">92% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-css3-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#06b6d4] to-[#0891b2] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна экспертиза в UI-разработке?</h3>
                                <p class="text-sm mb-4">Готов обсудить внедрение Tailwind CSS</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#06b6d4] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

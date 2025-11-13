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
                                <a href="/competences/testing" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Тестирование
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Pest PHP
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-lime-50 to-green-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#7CFC00] to-[#66CC00] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-vial text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Pest PHP</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-lime-100 dark:bg-lime-900/30 text-lime-700 dark:text-lime-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-heart mr-1"></i>
                                            Тестирование с удовольствием
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Элегантный PHP фреймворк для тестирования с выразительным синтаксисом, который делает тестирование приятным опытом.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-lime-100 dark:bg-lime-900/30 flex items-center justify-center text-[#7CFC00] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#7CFC00] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">2+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с Pest 1.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#7CFC00] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v2.8+</div>
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
                            <!-- О Pest PHP -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#7CFC00] mr-3"></i>
                                    О Pest PHP
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Pest PHP</strong> — это элегантный PHP фреймворк для тестирования с фокусом на простоте и опыте разработчика.
                                        Построенный на основе PHPUnit, Pest предоставляет красивый, выразительный тестовый API, который делает написание тестов
                                        приятным и читаемым. Созданный Нуну Мадуру, Pest привносит современные практики тестирования в PHP.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Выразительный синтаксис</strong> — Чистые, читаемые тестовые случаи с минимальным шаблонным кодом</li>
                                        <li><strong>Нулевая конфигурация</strong> — Работает из коробки с разумными настройками по умолчанию</li>
                                        <li><strong>Мощные утверждения</strong> — Богатый набор выразительных методов утверждения</li>
                                        <li><strong>Красивый вывод</strong> — Цветные, информативные результаты тестов и индикаторы прогресса</li>
                                        <li><strong>Экосистема плагинов</strong> — Расширяемая архитектура с плагинами сообщества</li>
                                        <li><strong>Параллельное тестирование</strong> — Встроенная поддержка запуска тестов параллельно</li>
                                        <li><strong>Инструменты миграции</strong> — Легкая миграция с PHPUnit на Pest</li>
                                    </ul>

                                    <h3>Философия тестирования</h3>
                                    <p>
                                        Pest придерживается философии тестирования, ориентированной на счастье и продуктивность разработчика:
                                    </p>
                                    <ul>
                                        <li>Тесты должны быть читаемыми и самодокументирующими</li>
                                        <li>Настройка тестирования должна быть минимальной и интуитивной</li>
                                        <li>Вывод тестов должен быть красивым и информативным</li>
                                        <li>Тестирование должно быть приятной частью разработки</li>
                                        <li>Современные возможности PHP должны использоваться полностью</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в Pest PHP -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#7CFC00] mr-3"></i>
                                    Мой путь в Pest PHP
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать Pest PHP в 2021 году после многолетнего опыта с PHPUnit, сразу оценив
                                        его элегантный синтаксис и улучшенный опыт разработчика. С тех пор я мигрировал несколько проектов
                                        с PHPUnit на Pest и реализовал комплексные стратегии тестирования, используя выразительные возможности Pest.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-lime-50 to-green-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-exchange-alt text-[#7CFC00] mr-2"></i>
                                                Экспертиза миграции
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Успешная миграция больших кодовых баз с PHPUnit на Pest,
                                                сохранение покрытия тестов при улучшении читаемости и поддерживаемости тестов.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                                Инновации в тестировании
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использование продвинутых возможностей Pest, таких как параллельное тестирование,
                                                пользовательские помощники и экосистема плагинов для оптимизации рабочих процессов тестирования.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#7CFC00] mr-3"></i>
                                    Мой опыт с Pest PHP
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 2 лет опыта работы с Pest PHP, я реализовал комплексные стратегии тестирования
                                        в различных проектах, от тестирования API до сложной логики приложений, используя
                                        выразительный синтаксис Pest для создания поддерживаемых и читаемых наборов тестов.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Выразительный тестовый синтаксис</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пользовательские помощники и расширения</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Провайдеры данных и наборы данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Конфигурация параллельного тестирования</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Миграция с PHPUnit</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API и интеграционное тестирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование баз данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пользовательские утверждения</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Организация и архитектура тестов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с CI/CD</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка плагинов</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые тестовые проекты</h3>
                                    <ul>
                                        <li><strong>Набор тестов Laravel API</strong> — Комплексное тестирование API с утверждениями HTTP Pest</li>
                                        <li><strong>Миграция e-commerce</strong> — Мигрировал 500+ тестов PHPUnit на Pest с улучшенной читаемостью</li>
                                        <li><strong>Настройка параллельного тестирования</strong> — Сократил время выполнения тестов на 60% с параллельным выполнением</li>
                                        <li><strong>Пользовательские тестовые помощники</strong> — Разработал проектно-специфичные помощники Pest для сложных утверждений</li>
                                        <li><strong>CI/CD пайплайн</strong> — Интегрировал тестирование Pest в рабочие процессы GitHub Actions</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Возможности Pest PHP -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-[#7CFC00] mr-3"></i>
                                    Продвинутые возможности Pest
                                </h2>
                                <div class="content-section">
                                    <h3>Основные возможности тестирования</h3>
                                    <p>
                                        Экспертиза в использовании мощных тестовых возможностей Pest:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#7CFC00] mb-2">Тестирование высшего порядка</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использование сообщений высшего порядка Pest для беглых,
                                                цепочечных тестовых утверждений и подготовок.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#7CFC00] mb-2">Наборы данных и провайдеры</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создание переиспользуемых наборов данных и провайдеров данных
                                                для комплексного покрытия тестов с минимальным кодом.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#7CFC00] mb-2">Пользовательские помощники</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разработка проектно-специфичных вспомогательных функций
                                                для упрощения сложных тестовых сценариев.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#7CFC00] mb-2">Экосистема плагинов</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использование и создание плагинов Pest для расширения
                                                возможностей тестирования для специфичных фреймворков.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Методологии тестирования</h3>
                                    <p>
                                        Продвинутые подходы к тестированию с Pest:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Модульное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Функциональное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Интеграционное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Тестирование API</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Тестирование БД</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Браузерное тестирование</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Pest vs PHPUnit -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-balance-scale text-[#7CFC00] mr-3"></i>
                                    Pest PHP vs PHPUnit
                                </h2>
                                <div class="content-section">
                                    <h3>Преимущества миграции</h3>
                                    <p>
                                        Опыт миграции с PHPUnit на Pest со значительными улучшениями:
                                    </p>
                                    <ul>
                                        <li><strong>Сокращение шаблонного кода</strong> — На 40-60% меньше кода при том же покрытии тестов</li>
                                        <li><strong>Улучшенная читаемость</strong> — Тесты читаются как спецификации на естественном языке</li>
                                        <li><strong>Более быстрая разработка</strong> — Более быстрое написание тестов с выразительным синтаксисом</li>
                                        <li><strong>Лучший вывод</strong> — Цветные, информативные результаты тестов и прогресс</li>
                                        <li><strong>Современные возможности</strong> — Параллельное тестирование, плагины и лучшая интеграция</li>
                                    </ul>

                                    <h3>Стратегия миграции</h3>
                                    <p>
                                        Проверенный подход для успешной миграции с PHPUnit на Pest:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Постепенная миграция</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Автоматизированные инструменты конвертации</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обучение команды и документация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обновления CI/CD пайплайнов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка пользовательских помощников</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Бенчмаркинг производительности</span>
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
                                    <i class="fas fa-chart-bar text-[#7CFC00] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#7CFC00]">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#7CFC00] to-[#66CC00]"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Архитектура тестов</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Экспертиза миграции</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Параллельное тестирование</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Разработка плагинов</span>
                                            <span class="text-sm font-bold text-purple-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#7CFC00] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>2+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Pest 2.8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-vial text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Мигрировано тестов: <strong>500+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bolt text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Ускорение: <strong>на 60% быстрее</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#7CFC00] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/phpunit" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flask text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#7CFC00] transition-colors">PHPUnit</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#7CFC00] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#7CFC00] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#7CFC00] transition-colors"></i>
                                    </a>
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#7CFC00] transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#7CFC00] transition-colors"></i>
                                    </a>
                                    <a href="/competences/git" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#f05032] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-git-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#7CFC00] transition-colors">Git</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#7CFC00] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#7CFC00] to-[#66CC00] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна экспертиза в тестировании?</h3>
                                <p class="text-sm mb-4">Готов обсудить внедрение Pest PHP</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#7CFC00] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

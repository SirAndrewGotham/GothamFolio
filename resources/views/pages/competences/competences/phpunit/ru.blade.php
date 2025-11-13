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
                                    PHPUnit
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#28A745] to-[#218838] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-flask text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">PHPUnit</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-shield-alt mr-1"></i>
                                            Промышленный стандарт
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Фреймворк для тестирования PHP с возможностями модульного и интеграционного тестирования для надежных приложений.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#28A745] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#28A745] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с PHPUnit 6</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#28A745] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v10.4+</div>
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
                            <!-- О PHPUnit -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#28A745] mr-3"></i>
                                    О PHPUnit
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>PHPUnit</strong> — это промышленный стандарт фреймворка для тестирования PHP, предоставляющий комплексный
                                        набор инструментов для написания и запуска модульных тестов. Как де-факто фреймворк для тестирования PHP,
                                        PHPUnit позволяет разработчикам писать надежные, поддерживаемые тесты, следуя архитектурному шаблону xUnit.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Промышленный стандарт</strong> — Наиболее широко используемый фреймворк для тестирования в экосистеме PHP</li>
                                        <li><strong>Комплексные утверждения</strong> — Обширный набор методов утверждения для всех тестовых сценариев</li>
                                        <li><strong>Тестовые дубликаты</strong> — Мощные возможности мокирования и заглушек с тестовыми дубликатами</li>
                                        <li><strong>Провайдеры данных</strong> — Гибкое тестирование на основе данных с провайдерами данных</li>
                                        <li><strong>Покрытие кода</strong> — Встроенный анализ покрытия кода и отчетность</li>
                                        <li><strong>Расширяемая архитектура</strong> — Пользовательские утверждения, слушатели и расширения</li>
                                        <li><strong>Интеграция с IDE</strong> — Отличная интеграция с PHPStorm, VSCode и другими IDE</li>
                                    </ul>

                                    <h3>Философия тестирования</h3>
                                    <p>
                                        PHPUnit следует установленным принципам тестирования программного обеспечения:
                                    </p>
                                    <ul>
                                        <li>Тесты должны быть изолированными и независимыми</li>
                                        <li>Тестировать поведение, а не реализацию</li>
                                        <li>Следовать шаблону Arrange-Act-Assert</li>
                                        <li>Писать тесты первыми с Test-Driven Development</li>
                                        <li>Поддерживать высокое покрытие тестов для критических путей</li>
                                        <li>Тесты должны быть быстрыми, надежными и поддерживаемыми</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в PHPUnit -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#28A745] mr-3"></i>
                                    Мой путь в PHPUnit
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать PHPUnit в 2017 году с PHPUnit 6, внедряя практики разработки через тестирование
                                        в различных проектах. За более чем 5 лет я прошел путь от написания базовых модульных тестов до
                                        архитектуры комплексных наборов тестов для корпоративных приложений и обучения команд лучшим практикам тестирования.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-industry text-[#28A745] mr-2"></i>
                                                Корпоративное тестирование
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разработал комплексные наборы тестов для крупномасштабных корпоративных приложений
                                                со сложной бизнес-логикой и требованиями интеграции.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-blue-500 mr-2"></i>
                                                Лидерство в команде
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обучал команды разработки методологиям тестирования,
                                                стандартам покрытия кода и практикам разработки через тестирование.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#28A745] mr-3"></i>
                                    Мой опыт с PHPUnit
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 5 лет опыта работы с PHPUnit, я реализовал стратегии тестирования по всему спектру
                                        PHP-приложений, от простых библиотек до сложных корпоративных систем, постоянно достигая
                                        высокого покрытия кода и надежности тестов.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка через тестирование (TDD)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Мок-объекты и тестовые дубликаты</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Провайдеры данных и тесты на основе данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Анализ покрытия кода</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пользовательские утверждения и расширения</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование баз данных и фикстуры</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API и интеграционное тестирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Организация и архитектура тестов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с CI/CD</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование legacy-кода</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Лучшие практики тестирования</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые тестовые проекты</h3>
                                    <ul>
                                        <li><strong>Платформа финансовых услуг</strong> — Комплексный набор тестов с покрытием кода 85%+</li>
                                        <li><strong>Миграция e-commerce</strong> — Рефакторинг legacy-кода через тестирование</li>
                                        <li><strong>API микросервисы</strong> — Интеграционное тестирование между несколькими сервисами</li>
                                        <li><strong>Разработка пакетов Laravel</strong> — Полное покрытие тестов для open-source пакетов</li>
                                        <li><strong>Программа обучения команды</strong> — Лучшие практики PHPUnit и воркшопы по TDD</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Продвинутые возможности PHPUnit -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#28A745] mr-3"></i>
                                    Продвинутые возможности PHPUnit
                                </h2>
                                <div class="content-section">
                                    <h3>Продвинутые техники тестирования</h3>
                                    <p>
                                        Экспертиза в продвинутых возможностях PHPUnit и методологиях тестирования:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#28A745] mb-2">Тестовые дубликаты и мокирование</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создание мок-объектов, заглушек и тестовых дубликатов
                                                для изоляции модулей и тестирования сложных зависимостей.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#28A745] mb-2">Тестирование на основе данных</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использование провайдеров данных для комплексного покрытия тестов
                                                с множественными сценариями ввода и граничными случаями.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#28A745] mb-2">Пользовательские утверждения</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разработка предметно-ориентированных утверждений для сложной
                                                бизнес-логики и пользовательских требований валидации.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#28A745] mb-2">Слушатели тестов</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация слушателей тестов для пользовательской отчетности,
                                                логирования и управления жизненным циклом выполнения тестов.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Методологии тестирования</h3>
                                    <p>
                                        Комплексные подходы к тестированию с PHPUnit:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Модульное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Интеграционное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Функциональное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Тестирование БД</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Тестирование API</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Тестирование производительности</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Покрытие кода и качество -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-chart-bar text-[#28A745] mr-3"></i>
                                    Покрытие кода и качество
                                </h2>
                                <div class="content-section">
                                    <h3>Стратегии покрытия кода</h3>
                                    <p>
                                        Реализация значимого покрытия кода с PHPUnit:
                                    </p>
                                    <ul>
                                        <li><strong>Покрытие строк</strong> — Обеспечение выполнения всех путей кода</li>
                                        <li><strong>Покрытие ветвей</strong> — Тестирование всех точек принятия решений в коде</li>
                                        <li><strong>Покрытие путей</strong> — Охват всех возможных путей выполнения</li>
                                        <li><strong>Мутационное тестирование</strong> — Обеспечение возможности тестов обнаруживать изменения кода</li>
                                    </ul>

                                    <h3>Метрики качества</h3>
                                    <p>
                                        Отслеживание и улучшение качества тестов:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Отчеты о покрытии тестов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Время выполнения тестов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Анализ падений тестов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Идентификация нестабильных тестов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Поддерживаемость тестов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Метрики сложности кода</span>
                                        </div>
                                    </div>

                                    <h3>Интеграция с инструментами качества</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Xdebug</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">PHPStan</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Psalm</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Infection PHP</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SonarQube</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">CodeClimate</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#28A745] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#28A745]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#28A745] to-[#218838]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Модульное тестирование</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интеграционное тестирование</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Архитектура тестов</span>
                                            <span class="text-sm font-bold text-blue-500">83%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="83%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Покрытие кода</span>
                                            <span class="text-sm font-bold text-purple-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#28A745] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>5+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>PHPUnit 10.4+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>30+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-vial text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Написано тестов: <strong>2000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Покрытие кода: <strong>85%+ в среднем</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#28A745] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/pest-php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#7CFC00] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-vial text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#28A745] transition-colors">Pest PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#28A745] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#28A745] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#28A745] transition-colors"></i>
                                    </a>
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#28A745] transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#28A745] transition-colors"></i>
                                    </a>
                                    <a href="/competences/tdd" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#28A745] transition-colors">TDD</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#28A745] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#28A745] to-[#218838] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна экспертиза в тестировании?</h3>
                                <p class="text-sm mb-4">Готов обсудить внедрение PHPUnit</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#28A745] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

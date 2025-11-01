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
                                <a href="/competences" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Компетенции
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Backend Development
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        PHP
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Icon and Basic Info -->
                        <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#777BB4] to-[#4F5B93] flex items-center justify-center text-white shadow-lg">
                            <i class="fab fa-php text-4xl"></i>
                        </div>
{{--                        <div class="flex-shrink-0">--}}
{{--                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#777BB4] to-[#4F5B93] flex items-center justify-center text-white shadow-lg">--}}
{{--                                <i class="fab fa-php text-4xl"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">PHP</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-history mr-1"></i>
                                            С 1998 года
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Серверный язык программирования, прошедший путь от простых скриптов до современных enterprise-приложений
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#777BB4] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">70%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#777BB4] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">25+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с PHP 3.3</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#777BB4] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v8.3/8.4</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Текущие версии</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- PHP Evolution -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#777BB4] mr-3"></i>
                                    Эволюция PHP и мой путь
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>PHP</strong> — это язык, который я наблюдал и использовал с момента его становления.
                                        Начиная с PHP 3.3 в 1998 году, я прошел через все основные вехи развития языка —
                                        от простых скриптов для генерации HTML до создания сложных объектно-ориентированных систем.
                                    </p>

                                    <h3>Историческая перспектива</h3>
                                    <div class="space-y-6 mt-6">
                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 3.3 (1998)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">Начало пути</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Первые проекты на PHP: простые веб-сайты, гостевые книги, формы обратной связи.
                                                Работа в procedural стиле, встраивание PHP в HTML.
                                            </p>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 4 (2000-2008)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">Zend Engine</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Внедрение Zend Engine, первые попытки ООП. Разработка более сложных приложений,
                                                начало работы с базами данных через mysql_* функции.
                                            </p>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 5 (2004-2015)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">Настоящее ООП</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Полноценная объектно-ориентированная модель, исключения, пространства имен.
                                                Переход на PDO для работы с базами данных, появление первых фреймворков.
                                            </p>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 7+ (2015-настоящее)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">Современная эра</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Значительное повышение производительности, скалярные типы, возвращаемые типы,
                                                spaceship operator, null coalescing operator. Работа с современными фреймворками.
                                            </p>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                                <h4 class="text-lg font-semibold">PHP 8.x (2020-настоящее)</h4>
                                                <span class="text-[#777BB4] font-medium bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full text-sm md:mt-1">JIT и современные возможности</span>
                                            </div>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Attributes, union types, match expression, nullsafe operator, JIT компиляция.
                                                Активная разработка на PHP 8.3 и тестирование PHP 8.4.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Legacy Code Expertise -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-archive text-[#777BB4] mr-3"></i>
                                    Работа с legacy кодом и миграция
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Одна из моих ключевых специализаций — работа с унаследованным кодом и его адаптация
                                        к современным стандартам разработки. Это включает в себя как поддержку старых проектов,
                                        так и их полную миграцию на современные технологии.
                                    </p>

                                    <h3>Подход к legacy коду</h3>
                                    <ul>
                                        <li><strong>Анализ и понимание</strong> — глубокое изучение существующей кодовой базы без документации</li>
                                        <li><strong>Рефакторинг</strong> — постепенное улучшение кода без нарушения функциональности</li>
                                        <li><strong>Безопасная миграция</strong> — перенос функциональности с сохранением бизнес-логики</li>
                                        <li><strong>Тестирование</strong> — создание тестов для legacy кода перед изменениями</li>
                                    </ul>

                                    <h3>Типичные сценарии миграции</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#777BB4] mb-2">Procedural → OOP</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Преобразование процедурного кода в объектно-ориентированную архитектуру
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#777BB4] mb-2">Custom Framework → Laravel</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Миграция самописных решений на современные фреймворки
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#777BB4] mb-2">PHP 5.x → PHP 8.x</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обновление версий PHP с адаптацией устаревшего синтаксиса
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#777BB4] mb-2">mysql_* → PDO/Eloquent</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Замена устаревших функций работы с БД на современные подходы
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Реальные примеры миграции</h3>
                                    <ul>
                                        <li><strong>Интернет-магазин на PHP 5.3</strong> → полная переработка на Laravel 10 с сохранением всех бизнес-процессов</li>
                                        <li><strong>Корпоративный портал</strong> → миграция с самописного фреймворка на современную архитектуру</li>
                                        <li><strong>API сервис</strong> → рефакторинг procedural кода в RESTful API с автодокументацией</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Modern PHP Development -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-rocket text-[#777BB4] mr-3"></i>
                                    Современная разработка на PHP
                                </h2>
                                <div class="content-section">
                                    <h3>Современные практики и инструменты</h3>
                                    <p>
                                        Несмотря на опыт работы с legacy кодом, я активно использую и продвигаю современные
                                        подходы к разработке на PHP:
                                    </p>
                                    <ul>
                                        <li><strong>Composer</strong> — управление зависимостями и автозагрузка классов</li>
                                        <li><strong>PSR стандарты</strong> — следование стандартам сообщества</li>
                                        <li><strong>Type declarations</strong> — строгая типизация для надежности кода</li>
                                        <li><strong>Тестирование</strong> — PHPUnit, Pest для автоматизированного тестирования</li>
                                        <li><strong>Статический анализ</strong> — PHPStan, Psalm для поиска ошибок</li>
                                        <li><strong>Контейнеризация</strong> — Docker для среды разработки и продакшена</li>
                                    </ul>

                                    <h3>Ключевые компетенции в современном PHP</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Объектно-ориентированное программирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пространства имен и автозагрузка</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Работа с исключениями и ошибками</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Современные функции PHP 8.x</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с frontend технологиями</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Безопасность веб-приложений</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>REST API разработка</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#777BB4] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#777BB4]">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#777BB4] to-[#4F5B93]"
                                                 data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Legacy Code</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Modern PHP 8.x</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Code Migration</span>
                                            <span class="text-sm font-bold text-purple-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#777BB4] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#777BB4] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>25+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#777BB4] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>PHP 8.3/8.4</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#777BB4] w-5 mr-3"></i>
                                        <span class="text-sm">Проектов: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-history text-[#777BB4] w-5 mr-3"></i>
                                        <span class="text-sm">С PHP: <strong>с 1998</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#777BB4] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#777BB4] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#777BB4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#777BB4] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#777BB4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/composer" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-box text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#777BB4] transition-colors">Composer</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#777BB4] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Back to Competences -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 text-center fade-in">
                                <h3 class="font-semibold mb-3">Все компетенции</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Изучите полный спектр моих технических навыков и компетенций
                                </p>
                                <a href="/competences" class="inline-flex items-center px-4 py-2 bg-[#777BB4] hover:bg-[#4F5B93] text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    <span>К списку компетенций</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.app>

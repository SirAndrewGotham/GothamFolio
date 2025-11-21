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
                                <a href="/competences/data-science" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Data Science
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Beautiful Soup
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#3A833A] to-[#4CAF50] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-code text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 beautifulsoup-gradient">Beautiful Soup</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-spider mr-1"></i>
                                            Веб-скрапинг
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Библиотека Python для извлечения данных из HTML и XML файлов.
                                Предоставляет идиоматические способы для итерации, поиска и модификации дерева разбора.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#3A833A] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#3A833A] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#3A833A] mr-3">
                                        <i class="fas fa-file-code"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v4.12+</div>
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
                            <!-- О Beautiful Soup -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#3A833A] mr-3"></i>
                                    О Beautiful Soup
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Beautiful Soup</strong> — это библиотека Python для извлечения данных из HTML и XML файлов.
                                        Она работает с вашим любимым парсером, предоставляя идиоматические способы навигации, поиска
                                        и модификации дерева разбора. Обычно она экономит программистам часы или дни работы.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Гибкость парсера</strong> - Работает с несколькими парсерами (lxml, html5lib, html.parser)</li>
                                        <li><strong>Pythonic API</strong> - Интуитивные методы для навигации и поиска в деревьях разбора</li>
                                        <li><strong>Надежная обработка ошибок</strong> - Грациозно обрабатывает некорректный HTML</li>
                                        <li><strong>Мощный поиск</strong> - Расширенная фильтрация с CSS селекторами и пользовательскими функциями</li>
                                        <li><strong>Поддержка кодировок</strong> - Автоматическое определение и конвертация кодировок</li>
                                        <li><strong>Возможности модификации</strong> - Модификация дерева разбора и вывод очищенного HTML</li>
                                        <li><strong>Дружелюбная интеграция</strong> - Бесшовно работает с requests, urllib и другими библиотеками</li>
                                    </ul>

                                    <h3>Основные возможности</h3>
                                    <p>
                                        Beautiful Soup предоставляет комплексные инструменты для обработки HTML/XML:
                                    </p>
                                    <ul>
                                        <li><strong>Навигация по дереву</strong> - Навигация вверх, вниз и в стороны по дереву разбора</li>
                                        <li><strong>Методы поиска</strong> - find(), find_all() и поддержка CSS селекторов</li>
                                        <li><strong>Доступ к атрибутам</strong> - Легкий доступ к атрибутам тегов и содержимому</li>
                                        <li><strong>Поиск строк</strong> - Поиск строк с регулярными выражениями</li>
                                        <li><strong>Модификация дерева</strong> - Добавление, удаление и модификация тегов и атрибутов</li>
                                        <li><strong>Форматирование вывода</strong> - Красивый вывод и генерация чистого HTML/XML</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в Beautiful Soup -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#3A833A] mr-3"></i>
                                    Мой путь с Beautiful Soup
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать Beautiful Soup в 2020 году для проектов веб-скрапинга и быстро оценил
                                        его элегантный дизайн API. За более чем 4 года я использовал его в десятках проектов, от
                                        простого извлечения данных до сложных систем веб-скрапинга. Его интуитивный подход к парсингу
                                        HTML сделал его моей основной библиотекой для задач извлечения веб-данных.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-database text-[#3A833A] mr-2"></i>
                                                Извлечение данных
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обширный опыт извлечения структурированных данных с
                                                веб-сайтов, новостных порталов и платформ электронной коммерции.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-industry text-purple-500 mr-2"></i>
                                                Промышленный скрапинг
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создавал надежные системы скрапинга с обработкой ошибок,
                                                ограничением частоты запросов и валидацией данных для промышленного использования.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#3A833A] mr-3"></i>
                                    Мой опыт работы с Beautiful Soup
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Более чем за 4 года обширного опыта я освоил Beautiful Soup для различных
                                        сценариев веб-скрапинга и парсинга HTML в разных доменах и уровнях сложности.
                                    </p>

                                    <h3>Основные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Парсинг и навигация по HTML</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Расширенный поиск и фильтрация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Использование CSS селекторов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Шаблоны извлечения данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обработка ошибок и надежность</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Выбор и оптимизация парсера</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с requests/selenium</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация производительности</span>
                                        </div>
                                    </div>

                                    <h3>Техники парсинга</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">find/find_all</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">CSS селекторы</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Навигация по дереву</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Regex фильтры</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Доступ к атрибутам</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Поиск строк</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Выбор парсера</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Кодировки</span>
                                    </div>

                                    <h3>Продвинутые паттерны использования</h3>
                                    <ul>
                                        <li><strong>Сложное извлечение данных</strong> - Многоуровневое извлечение данных из вложенных структур</li>
                                        <li><strong>Обработка динамического контента</strong> - Интеграция с Selenium для сайтов с большим количеством JavaScript</li>
                                        <li><strong>Валидация данных</strong> - Реализация проверок качества данных во время извлечения</li>
                                        <li><strong>Инкрементальный скрапинг</strong> - Возобновление прерванных сессий скрапинга</li>
                                        <li><strong>Пользовательские фильтры</strong> - Создание пользовательских функций фильтрации для сложного сопоставления</li>
                                        <li><strong>Оптимизация производительности</strong> - Оптимизация выбора парсера и шаблонов поиска</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Техники парсинга -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#3A833A] mr-3"></i>
                                    Техники парсинга и методы
                                </h2>
                                <div class="content-section">
                                    <h3>Методы поиска</h3>
                                    <p>
                                        Обширный опыт работы с комплексными возможностями поиска Beautiful Soup:
                                    </p>
                                    <ul>
                                        <li><strong>find() & find_all()</strong> - Основные методы для поиска элементов</li>
                                        <li><strong>CSS селекторы</strong> - Использование select() и select_one() для CSS-стиля выбора</li>
                                        <li><strong>Фильтрация по атрибутам</strong> - Фильтрация по атрибутам, классам и пользовательским данным</li>
                                        <li><strong>Поиск текста</strong> - Поиск элементов по текстовому содержимому и шаблонам</li>
                                        <li><strong>Регулярные выражения</strong> - Использование regex шаблонов для сложного сопоставления</li>
                                        <li><strong>Пользовательские функции</strong> - Создание функций фильтрации для расширенного выбора</li>
                                    </ul>

                                    <h3>Методы навигации</h3>
                                    <p>
                                        Освоена навигация по дереву для сложных структур документов:
                                    </p>
                                    <ul>
                                        <li><strong>Навигация к родителям</strong> - Свойства parent, parents для навигации вверх</li>
                                        <li><strong>Навигация к соседям</strong> - next_sibling, previous_sibling для горизонтального перемещения</li>
                                        <li><strong>Навигация к потомкам</strong> - children, descendants для навигации вниз</li>
                                        <li><strong>Обход дерева</strong> - Использование генераторов для эффективного обхода дерева</li>
                                        <li><strong>Доступ к содержимому</strong> - Доступ к тексту, строкам и очищенным строкам</li>
                                        <li><strong>Свойства тегов</strong> - Работа с именем, атрибутами и содержимым</li>
                                    </ul>

                                    <h3>Выбор парсера</h3>
                                    <p>
                                        Опыт работы с различными парсерами и их компромиссами:
                                    </p>
                                    <ul>
                                        <li><strong>lxml</strong> - Быстрый и снисходительный парсер для большинства случаев использования</li>
                                        <li><strong>html.parser</strong> - Встроенный парсер, без внешних зависимостей</li>
                                        <li><strong>html5lib</strong> - Самый снисходительный парсер для плохо сформированного HTML</li>
                                        <li><strong>Сравнение парсеров</strong> - Понимание компромиссов между скоростью и надежностью</li>
                                        <li><strong>Конфигурация пользовательского парсера</strong> - Настройка парсеров для конкретных нужд</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Продвинутые возможности -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#3A833A] mr-3"></i>
                                    Продвинутые возможности и техники
                                </h2>
                                <div class="content-section">
                                    <p>
                                        У меня есть обширный опыт работы с продвинутыми возможностями Beautiful Soup для сложных сценариев скрапинга:
                                    </p>

                                    <h3>Сложное извлечение данных</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#3A833A] mb-2">Многоуровневое извлечение</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Извлечение данных из сложных вложенных структур
                                                с несколькими уровнями родительско-дочерних отношений
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#3A833A] mb-2">Условная логика</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация сложной условной логики для
                                                извлечения данных на основе нескольких критериев
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#3A833A] mb-2">Трансформация данных</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Преобразование извлеченных данных в структурированные форматы
                                                такие как JSON, CSV или форматы готовые для базы данных
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#3A833A] mb-2">Восстановление после ошибок</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация надежных механизмов восстановления после ошибок
                                                для обработки некорректных или изменяющихся HTML структур
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Оптимизация производительности</h3>
                                    <ul>
                                        <li><strong>Выбор парсера</strong> - Выбор правильного парсера для потребностей производительности</li>
                                        <li><strong>Эффективный поиск</strong> - Оптимизация шаблонов поиска для скорости</li>
                                        <li><strong>Выборочный парсинг</strong> - Парсинг только необходимых частей документов</li>
                                        <li><strong>Стратегии кэширования</strong> - Реализация кэширования для повторяющихся запросов</li>
                                        <li><strong>Управление памятью</strong> - Эффективная обработка больших документов</li>
                                        <li><strong>Параллельная обработка</strong> - Использование потоков для параллельной обработки</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Паттерны интеграции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-project-diagram text-[#3A833A] mr-3"></i>
                                    Паттерны интеграции и сценарии использования
                                </h2>
                                <div class="content-section">
                                    <h3>Рабочие процессы веб-скрапинга</h3>
                                    <p>
                                        Обширный опыт построения комплексных решений для веб-скрапинга:
                                    </p>
                                    <ul>
                                        <li><strong>Интеграция с Requests</strong> - Комбинирование Beautiful Soup с requests для HTTP</li>
                                        <li><strong>Интеграция с Selenium</strong> - Обработка сайтов с большим количеством JavaScript с Selenium</li>
                                        <li><strong>Интеграция с Scrapy</strong> - Использование Beautiful Soup внутри Scrapy пауков</li>
                                        <li><strong>Комбинация с API</strong> - Комбинирование скрапинга с данными API для комплексных наборов данных</li>
                                        <li><strong>Данные пайплайны</strong> - Построение сквозных пайплайнов извлечения и обработки данных</li>
                                        <li><strong>Системы мониторинга</strong> - Создание систем мониторинга для изменений на веб-сайтах</li>
                                    </ul>

                                    <h3>Распространенные сценарии использования</h3>
                                    <p>
                                        Применение Beautiful Soup в различных реальных сценариях:
                                    </p>
                                    <ul>
                                        <li><strong>Скрапинг электронной коммерции</strong> - Данные продуктов, цены, отзывы и доступность</li>
                                        <li><strong>Агрегация новостей</strong> - Извлечение статей, заголовков и метаданных</li>
                                        <li><strong>Мониторинг социальных сетей</strong> - Публичные данные с социальных платформ</li>
                                        <li><strong>Скрапинг досок объявлений</strong> - Списки вакансий, требования и информация о компаниях</li>
                                        <li><strong>Данные недвижимости</strong> - Списки объектов, цены и характеристики</li>
                                        <li><strong>Финансовые данные</strong> - Цены акций, финансовые отчеты и рыночные данные</li>
                                    </ul>

                                    <h3>Обработка данных</h3>
                                    <ul>
                                        <li><strong>Очистка данных</strong> - Очистка и нормализация извлеченных данных</li>
                                        <li><strong>Валидация данных</strong> - Реализация правил валидации для качества данных</li>
                                        <li><strong>Трансформация данных</strong> - Конвертация HTML данных в структурированные форматы</li>
                                        <li><strong>Хранение данных</strong> - Сохранение извлеченных данных в базы данных и файлы</li>
                                        <li><strong>Анализ данных</strong> - Подготовка данных для анализа и визуализации</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Лучшие практики -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-shield-alt text-[#3A833A] mr-3"></i>
                                    Лучшие практики и этика
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я следую отраслевым лучшим практикам и этическим рекомендациям для веб-скрапинга:
                                    </p>

                                    <h3>Технические лучшие практики</h3>
                                    <ul>
                                        <li><strong>Надежная обработка ошибок</strong> - Грациозная обработка сетевых и парсинговых ошибок</li>
                                        <li><strong>Ограничение частоты запросов</strong> - Уважительный скрапинг с соответствующими задержками</li>
                                        <li><strong>Ротация User-Agent</strong> - Использование реалистичных user agent и заголовков</li>
                                        <li><strong>Управление сессиями</strong> - Эффективное управление сессиями и соединениями</li>
                                        <li><strong>Валидация данных</strong> - Валидация извлеченных данных для обеспечения качества</li>
                                        <li><strong>Логирование и мониторинг</strong> - Комплексное логирование для отладки и мониторинга</li>
                                    </ul>

                                    <h3>Этичный скрапинг</h3>
                                    <ul>
                                        <li><strong>Соблюдение robots.txt</strong> - Уважение политик скрапинга веб-сайтов</li>
                                        <li><strong>Ограничение частоты запросов</strong> - Избежание перегрузки сервера с вежливым скрапингом</li>
                                        <li><strong>Условия использования</strong> - Соблюдение условий и положений веб-сайтов</li>
                                        <li><strong>Использование данных</strong> - Ответственное и законное использование извлеченных данных</li>
                                        <li><strong>Атрибуция</strong> - Правильное указание источников данных когда требуется</li>
                                        <li><strong>Приватные данные</strong> - Избежание скрапинга приватной или чувствительной информации</li>
                                    </ul>

                                    <h3>Юридические соображения</h3>
                                    <ul>
                                        <li>Понимание авторских прав и прав на базы данных</li>
                                        <li>Соблюдение регуляций защиты данных (GDPR, CCPA)</li>
                                        <li>Уважение прав интеллектуальной собственности</li>
                                        <li>Понимание различий юрисдикций</li>
                                        <li>Получение разрешения когда уместно</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Проекты на GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#3A833A] mr-3"></i>
                                    Проекты на GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих проектов веб-скрапинга с использованием Beautiful Soup можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Я постоянно работаю над проектами веб-скрапинга, которые демонстрируют практические применения
                                        Beautiful Soup для задач извлечения данных, мониторинга и автоматизации.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#3A833A] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#3A833A]">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#3A833A] to-[#4CAF50]"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Парсинг HTML</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">CSS селекторы</span>
                                            <span class="text-sm font-bold text-blue-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Извлечение данных</span>
                                            <span class="text-sm font-bold text-purple-500">83%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="83%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Производительность</span>
                                            <span class="text-sm font-bold text-red-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#3A833A] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Beautiful Soup 4.12+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>40+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-file-code text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">Сайтов отскраплено: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">Статус: <strong>Экспертный уровень</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Путь обучения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#3A833A] mr-2"></i>
                                    Путь обучения
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Базовый парсинг HTML</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">find() и find_all()</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Использование CSS селекторов</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Навигация по дереву</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Расширенная фильтрация</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Оптимизация производительности</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Смежные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#3A833A] mr-2"></i>
                                    Смежные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-python text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3A833A] transition-colors">Python</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                    </a>
                                    <a href="/competences/requests" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#44A5CB] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-globe text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3A833A] transition-colors">Requests</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                    </a>
                                    <a href="/competences/selenium" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-desktop text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3A833A] transition-colors">Selenium</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pandas" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-table text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3A833A] transition-colors">Pandas</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#3A833A] to-[#4CAF50] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                                <p class="text-sm mb-4">Готов обсудить ваш проект веб-скрапинга</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#3A833A] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
                        <!-- О Pandas -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#150458] mr-3"></i>
                                О Pandas
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Pandas</strong> - это инструмент с открытым исходным кодом для анализа и
                                    обработки данных, построенный на Python.
                                    Он предоставляет быстрые, гибкие и выразительные структуры данных, предназначенные
                                    для удобной и интуитивно понятной работы
                                    со структурированными (табличными, многомерными, потенциально гетерогенными) данными
                                    и данными временных рядов.
                                </p>

                                <h3>Ключевые преимущества</h3>
                                <ul>
                                    <li><strong>Объект DataFrame</strong> - Двумерная размеченная структура данных со
                                        столбцами потенциально разных типов
                                    </li>
                                    <li><strong>Выравнивание данных</strong> - Автоматическое и явное выравнивание
                                        данных
                                    </li>
                                    <li><strong>Гибкое преобразование</strong> - Сводные таблицы, преобразование и
                                        иерархическая индексация
                                    </li>
                                    <li><strong>Функциональность временных рядов</strong> - Генерация диапазонов дат,
                                        преобразование частоты, статистика скользящего окна
                                    </li>
                                    <li><strong>Мощные инструменты ввода/вывода</strong> - Чтение/запись из CSV, Excel,
                                        баз данных и других источников
                                    </li>
                                    <li><strong>Обработка пропущенных данных</strong> - Комплексная обработка
                                        пропущенных данных
                                    </li>
                                    <li><strong>Операции GroupBy</strong> - Операции разделения-применения-объединения
                                        на наборах данных
                                    </li>
                                </ul>

                                <h3>Основные структуры данных</h3>
                                <p>
                                    Pandas предоставляет две основные структуры данных, которые делают обработку данных
                                    интуитивно понятной:
                                </p>
                                <ul>
                                    <li><strong>Series</strong> - Одномерный размеченный массив, способный содержать
                                        данные любого типа
                                    </li>
                                    <li><strong>DataFrame</strong> - Двумерная размеченная структура данных со столбцами
                                        потенциально разных типов
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь с Pandas -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#150458] mr-3"></i>
                                Мой путь с Pandas
                            </h2>
                            <div class="content-section">
                                <p>
                                    Я начал использовать Pandas в 2020 году как часть моего пути в аналитике данных. За
                                    4+ года
                                    я применял его в различных областях, включая бизнес-аналитику, финансовый анализ
                                    и научные исследования. Мой опыт варьируется от простых задач очистки данных до
                                    сложных
                                    конвейеров преобразования данных.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div
                                        class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-chart-line text-[#150458] mr-2"></i>
                                            Проекты анализа данных
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Большой опыт в разведочном анализе данных, статистическом анализе
                                            и создании данныхх insights с использованием Pandas для различных
                                            бизнес-доменов.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-database text-purple-500 mr-2"></i>
                                            Разработка конвейеров данных
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Создание надежных конвейеров обработки данных для ETL-операций,
                                            валидации данных и рабочих процессов преобразования с использованием Pandas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Мой опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#150458] mr-3"></i>
                                Мой опыт работы с Pandas
                            </h2>
                            <div class="content-section">
                                <p>
                                    Имея более 4 лет практического опыта, я освоил Pandas для различных задач обработки
                                    и анализа данных в разных отраслях и типах проектов.
                                </p>

                                <h3>Ключевые навыки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Очистка и предобработка данных</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Преобразование и манипуляция данными</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Анализ временных рядов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Операции GroupBy и агрегации</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Объединение и соединение наборов данных</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Обработка пропущенных данных</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Оптимизация производительности</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Интеграция с библиотеками визуализации</span>
                                    </div>
                                </div>

                                <h3>Технический стек</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">DataFrames</span>
                                    <span
                                        class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Series</span>
                                    <span
                                        class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">GroupBy</span>
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Сводные таблицы</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Временные ряды</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">MultiIndex</span>
                                    <span
                                        class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Объединение/Соединение</span>
                                    <span
                                        class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Операции ввода/вывода</span>
                                </div>

                                <h3>Освоенные основные операции</h3>
                                <ul>
                                    <li><strong>Очистка данных</strong> - Обработка пропущенных значений, преобразование
                                        типов данных, обнаружение выбросов
                                    </li>
                                    <li><strong>Преобразование данных</strong> - Фильтрация, сортировка, группировка,
                                        агрегационные операции
                                    </li>
                                    <li><strong>Анализ временных рядов</strong> - Ресемплинг, скользящие окна, операции
                                        с датой/временем
                                    </li>
                                    <li><strong>Интеграция данных</strong> - Объединение нескольких наборов данных,
                                        конкатенация, соединения
                                    </li>
                                    <li><strong>Оптимизация производительности</strong> - Векторизованные операции,
                                        цепочки методов, оптимизация памяти
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Реальные приложения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-bar text-[#150458] mr-3"></i>
                                Реальные приложения
                            </h2>
                            <div class="content-section">
                                <h3>Бизнес-аналитика</h3>
                                <p>
                                    Активно использовал Pandas для бизнес-аналитики, включая анализ продаж, сегментацию
                                    клиентов
                                    и расчет метрик производительности. Создавал автоматизированные системы отчетности,
                                    которые обрабатывают сырые данные
                                    и генерируют практические insights.
                                </p>

                                <h3>Финансовый анализ</h3>
                                <p>
                                    Применял Pandas для анализа финансовых данных, включая анализ цен акций, оптимизацию
                                    портфеля,
                                    оценку рисков и прогнозирование временных рядов. Реализовывал сложные финансовые
                                    расчеты и
                                    метрики производительности.
                                </p>

                                <h3>Научные исследования</h3>
                                <p>
                                    Использовал Pandas для обработки и анализа научных данных, включая экспериментальные
                                    результаты,
                                    данные датчиков и исследовательские наборы данных. Создавал воспроизводимые рабочие
                                    процессы анализа для академических исследований.
                                </p>

                                <h3>Разработка конвейеров данных</h3>
                                <p>
                                    Создавал надежные ETL-конвейеры с использованием Pandas для операций валидации,
                                    преобразования и загрузки данных.
                                    Интегрировал с различными источниками данных, включая базы данных, API и файловые
                                    системы.
                                </p>
                            </div>
                        </div>

                        <!-- Оптимизация производительности -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-tachometer-alt text-[#150458] mr-3"></i>
                                Производительность и оптимизация
                            </h2>
                            <div class="content-section">
                                <p>
                                    У меня большой опыт оптимизации операций Pandas для производительности и
                                    эффективности использования памяти:
                                </p>
                                <ul>
                                    <li><strong>Векторизованные операции</strong> - Использование операций на основе
                                        NumPy для максимальной производительности
                                    </li>
                                    <li><strong>Цепочки методов</strong> - Написание эффективного и читаемого кода с
                                        использованием цепочек методов
                                    </li>
                                    <li><strong>Оптимизация памяти</strong> - Использование подходящих типов данных для
                                        уменьшения использования памяти
                                    </li>
                                    <li><strong>Параллельная обработка</strong> - Реализация многопроцессорной обработки
                                        для больших наборов данных
                                    </li>
                                    <li><strong>Категориальные данные</strong> - Использование категориальных типов
                                        данных для эффективности памяти
                                    </li>
                                    <li><strong>Оптимизация запросов</strong> - Написание эффективных запросов и
                                        фильтров
                                    </li>
                                </ul>

                                <h3>Продвинутые техники</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#150458] mb-2">Пользовательские функции</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Создание и применение пользовательских функций с apply(), map() и
                                            vectorize()
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#150458] mb-2">Оконные операции</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Реализация скользящих, расширяющихся и экспоненциальных оконных операций
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#150458] mb-2">MultiIndex</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Работа с иерархическими индексами для сложных структур данных
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#150458] mb-2">Управление памятью</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Оптимизация типов данных и использование разреженных структур данных
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Проекты на GitHub -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fab fa-github text-[#150458] mr-3"></i>
                                Проекты на GitHub
                            </h2>
                            <div class="content-section">
                                <p>
                                    Некоторые из моих проектов с Pandas можно найти на GitHub:
                                </p>
                                <div class="mt-4">
                                    <a href="https://github.com/SirAndrewGotham" target="_blank"
                                       class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                        <i class="fab fa-github mr-2"></i>
                                        <span>SirAndrewGotham на GitHub</span>
                                    </a>
                                </div>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Я постоянно работаю над проектами анализа данных, которые демонстрируют практическое
                                    применение
                                    Pandas для реальных проблем и наборов данных.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карточка уровня владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#150458] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее владение</span>
                                        <span class="text-sm font-bold text-[#150458]">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div
                                            class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#150458] to-[#2D5B8F]"
                                            data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Манипуляция данными</span>
                                        <span class="text-sm font-bold text-green-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Анализ временных рядов</span>
                                        <span class="text-sm font-bold text-blue-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Оптимизация производительности</span>
                                        <span class="text-sm font-bold text-purple-500">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Интеграция данных</span>
                                        <span class="text-sm font-bold text-red-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="82%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#150458] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#150458] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#150458] w-5 mr-3"></i>
                                    <span class="text-sm">Версия: <strong>Pandas 2.1+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#150458] w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>25+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-database text-[#150458] w-5 mr-3"></i>
                                    <span
                                        class="text-sm">Источники данных: <strong>CSV, Excel, SQL, JSON</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-rocket text-[#150458] w-5 mr-3"></i>
                                    <span class="text-sm">Статус: <strong>Активная разработка</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Путь обучения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-[#150458] mr-2"></i>
                                Путь обучения
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Базовые операции с DataFrame</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Очистка и предобработка данных</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">GroupBy и агрегация</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Анализ временных рядов</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-spinner text-xs"></i>
                                    </div>
                                    <span class="text-sm">Продвинутая оптимизация производительности</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Пользовательские расширения и плагины</span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#150458] mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/python"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-python text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#150458] transition-colors">Python
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                </a>
                                <a href="/competences/numpy"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-cube text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#150458] transition-colors">NumPy
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                </a>
                                <a href="/competences/matplotlib"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-chart-area text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#150458] transition-colors">
                                            Matplotlib
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                </a>
                                <a href="/competences/sql"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-database text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#150458] transition-colors">SQL</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div
                            class="bg-gradient-to-r from-[#150458] to-[#2D5B8F] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                            <p class="text-sm mb-4">Готов обсудить ваш проект анализа данных</p>
                            <a href="/contact"
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#150458] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

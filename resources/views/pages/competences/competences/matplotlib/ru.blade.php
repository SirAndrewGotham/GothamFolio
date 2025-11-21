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
                            <a href="/"
                               class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences"
                                   class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Компетенции
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences/data-science"
                                   class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Data Science
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Matplotlib
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой раздел -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-teal-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div
                                class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#11557C] to-[#2D5B8F] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-chart-line text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 matplotlib-gradient">
                                    Matplotlib</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span
                                            class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-palette mr-1"></i>
                                            Визуализация данных
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Комплексная библиотека для визуализации данных на Python.
                                Создавайте статические, анимированные и интерактивные визуализации с качеством,
                                подходящим для публикаций.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#11557C] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#11557C] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт работы</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#11557C] mr-3">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.7+</div>
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
                            <!-- О Matplotlib -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#11557C] mr-3"></i>
                                    О Matplotlib
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Matplotlib</strong> — это комплексная библиотека для создания
                                        статических, анимированных и интерактивных
                                        визуализаций на Python. Она предоставляет MATLAB-подобный интерфейс и
                                        объектно-ориентированный API для встраивания
                                        графиков в приложения с использованием универсальных GUI тулкитов.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Качество публикаций</strong> - Высококачественный вывод в различных
                                            форматах (PDF, SVG, PNG и т.д.)
                                        </li>
                                        <li><strong>Настраиваемость</strong> - Полный контроль над каждым элементом
                                            графика
                                        </li>
                                        <li><strong>Множественные интерфейсы</strong> - pyplot (в стиле MATLAB) и
                                            объектно-ориентированный API
                                        </li>
                                        <li><strong>Широкий диапазон графиков</strong> - Линейные графики, диаграммы
                                            рассеяния, столбчатые диаграммы, гистограммы и т.д.
                                        </li>
                                        <li><strong>Интерактивные функции</strong> - Масштабирование, панорамирование и
                                            настройка графиков в интерактивном режиме
                                        </li>
                                        <li><strong>Расширяемость</strong> - Настройка каждого аспекта графиков и
                                            создание новых типов графиков
                                        </li>
                                        <li><strong>Интеграция</strong> - Бесшовная работа с NumPy, Pandas и Jupyter
                                            notebooks
                                        </li>
                                    </ul>

                                    <h3>Интерфейсы построения графиков</h3>
                                    <p>
                                        Matplotlib предоставляет несколько способов создания визуализаций:
                                    </p>
                                    <ul>
                                        <li><strong>Интерфейс pyplot</strong> - Основанный на состоянии интерфейс в
                                            стиле MATLAB для быстрого построения графиков
                                        </li>
                                        <li><strong>Объектно-ориентированный интерфейс</strong> - Больше контроля и
                                            гибкости для сложных графиков
                                        </li>
                                        <li><strong>Интерфейс pylab</strong> - Объединяет pyplot и NumPy (менее
                                            рекомендуется)
                                        </li>
                                        <li><strong>Скриптовый слой</strong> - Быстрое и простое построение графиков для
                                            разведочного анализа данных
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с Matplotlib -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#11557C] mr-3"></i>
                                    Мой путь с Matplotlib
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать Matplotlib в 2021 году в качестве моего основного
                                        инструмента визуализации данных для Python.
                                        За 3+ года я создал сотни графиков для анализа данных, научных исследований
                                        и бизнес-отчетности. Мой опыт варьируется от быстрых разведочных графиков до
                                        сложных
                                        фигур качества публикаций.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div
                                            class="bg-gradient-to-br from-blue-50 to-teal-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-chart-bar text-[#11557C] mr-2"></i>
                                                Анализ данных и отчетность
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Большой опыт создания визуализаций для исследования данных,
                                                аналитических отчетов и информационных панелей бизнес-аналитики.
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-graduation-cap text-purple-500 mr-2"></i>
                                                Научная визуализация
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создавал фигуры качества публикаций для научных исследований,
                                                включая сложные многопанельные графики и специализированные
                                                визуализации.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#11557C] mr-3"></i>
                                    Мой опыт работы с Matplotlib
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 3 лет практического опыта, я освоил Matplotlib для различных
                                        задач визуализации данных в разных областях и типах проектов.
                                    </p>

                                    <h3>Ключевые навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Основные типы графиков (линейные, рассеяния, столбчатые, гистограммы)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка эстетики и стилей графиков</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Множественные подграфики и макет фигуры</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Аннотации и форматирование текста</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Цветовые карты и цветовые шкалы</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Сохранение графиков и форматы экспорта</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интерактивные функции построения графиков</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с Jupyter notebooks</span>
                                        </div>
                                    </div>

                                    <h3>Освоенные типы графиков</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span
                                            class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Линейные графики</span>
                                        <span
                                            class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Диаграммы рассеяния</span>
                                        <span
                                            class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Столбчатые диаграммы</span>
                                        <span
                                            class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Гистограммы</span>
                                        <span
                                            class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Круговые диаграммы</span>
                                        <span
                                            class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Боксплоты</span>
                                        <span
                                            class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Тепловые карты</span>
                                        <span
                                            class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Контурные графики</span>
                                    </div>

                                    <h3>Продвинутые функции</h3>
                                    <ul>
                                        <li><strong>Пользовательские стили</strong> - Создание и применение
                                            пользовательских стилей графиков и rcParams
                                        </li>
                                        <li><strong>Анимация</strong> - Создание анимированных графиков и визуализаций
                                        </li>
                                        <li><strong>3D графики</strong> - Базовые 3D поверхности и диаграммы рассеяния
                                        </li>
                                        <li><strong>GridSpec</strong> - Сложные компоновки подграфиков с использованием
                                            GridSpec
                                        </li>
                                        <li><strong>Пользовательские преобразования</strong> - Применение
                                            пользовательских преобразований координат
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Настройка и стилизация графиков -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-paint-brush text-[#11557C] mr-3"></i>
                                    Настройка и стилизация графиков
                                </h2>
                                <div class="content-section">
                                    <h3>Эстетическая настройка</h3>
                                    <p>
                                        Большой опыт настройки каждого аспекта графиков Matplotlib:
                                    </p>
                                    <ul>
                                        <li>Стили линий, цвета и маркеры</li>
                                        <li>Пределы осей, форматирование меток и делений</li>
                                        <li>Настройка и размещение легенды</li>
                                        <li>Стилизация линий сетки и фона</li>
                                        <li>Текстовые аннотации и математические выражения</li>
                                        <li>Цветовые карты и настройка цветовой шкалы</li>
                                    </ul>

                                    <h3>Управление стилями</h3>
                                    <p>
                                        Освоение системы стилей Matplotlib для создания последовательных и
                                        профессионально выглядящих графиков:
                                    </p>
                                    <ul>
                                        <li>Использование встроенных стилей (ggplot, seaborn и т.д.)</li>
                                        <li>Создание пользовательских таблиц стилей</li>
                                        <li>Конфигурация во время выполнения (rcParams)</li>
                                        <li>Настройка цветового цикла</li>
                                        <li>Управление шрифтами и текстовыми свойствами</li>
                                    </ul>

                                    <h3>Качество публикаций</h3>
                                    <p>
                                        Опыт создания графиков, подходящих для академических публикаций и
                                        профессиональных отчетов:
                                    </p>
                                    <ul>
                                        <li>Высококачественный вывод в различных форматах</li>
                                        <li>Правильное масштабирование для различных требований публикаций</li>
                                        <li>Доступные цветовые схемы и контраст</li>
                                        <li>Четкая и информативная маркировка</li>
                                        <li>Компоновка многопанельных фигур</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Интеграция и рабочий процесс -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-project-diagram text-[#11557C] mr-3"></i>
                                    Интеграция и рабочий процесс
                                </h2>
                                <div class="content-section">
                                    <h3>Рабочий процесс Data Science</h3>
                                    <p>
                                        Бесшовная интеграция с экосистемой Data Science на Python:
                                    </p>
                                    <ul>
                                        <li><strong>Интеграция с NumPy</strong> - Прямое построение графиков из массивов
                                            NumPy
                                        </li>
                                        <li><strong>Интеграция с Pandas</strong> - Построение графиков непосредственно
                                            из DataFrames и Series
                                        </li>
                                        <li><strong>Интеграция с Jupyter</strong> - Интерактивное построение графиков в
                                            блокнотах
                                        </li>
                                        <li><strong>Интеграция с Seaborn</strong> - Использование Matplotlib в качестве
                                            бэкенда для Seaborn
                                        </li>
                                        <li><strong>Интеграция с SciPy</strong> - Визуализация научных вычислений</li>
                                    </ul>

                                    <h3>Бэкенд-системы</h3>
                                    <p>
                                        Опыт работы с различными бэкендами Matplotlib для разных случаев использования:
                                    </p>
                                    <ul>
                                        <li><strong>Бэкенд Agg</strong> - Для вывода в файлы (PNG, PDF, SVG)</li>
                                        <li><strong>Бэкенд TkAgg</strong> - Для интерактивных приложений Tkinter</li>
                                        <li><strong>Бэкенд WebAgg</strong> - Для веб-приложений</li>
                                        <li><strong>Бэкенд Inline</strong> - Для отображения в Jupyter notebook</li>
                                        <li><strong>Бэкенд Qt5Agg</strong> - Для приложений PyQt/PySide</li>
                                    </ul>

                                    <h3>Форматы экспорта</h3>
                                    <p>
                                        Освоение экспорта графиков в различных форматах для разных целей:
                                    </p>
                                    <ul>
                                        <li><strong>PNG/JPG</strong> - Для веб-сайтов и цифровых презентаций</li>
                                        <li><strong>PDF</strong> - Для публикаций и печатных материалов</li>
                                        <li><strong>SVG</strong> - Для масштабируемой векторной графики</li>
                                        <li><strong>EPS</strong> - Для документов LaTeX</li>
                                        <li><strong>Интерактивный HTML</strong> - Для веб-приложений</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Продвинутые техники -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-magic text-[#11557C] mr-3"></i>
                                    Продвинутые техники
                                </h2>
                                <div class="content-section">
                                    <p>
                                        У меня большой опыт работы с продвинутыми техниками Matplotlib для сложных
                                        визуализаций:
                                    </p>

                                    <h3>Пользовательские элементы графиков</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#11557C] mb-2">Фигуры и формы</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создание пользовательских форм, многоугольников и геометрических
                                                элементов
                                                с использованием патчей Matplotlib
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#11557C] mb-2">Пользовательские
                                                преобразования</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Применение аффинных преобразований и пользовательских систем координат
                                                для специализированных визуализаций
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#11557C] mb-2">Обработка событий</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация интерактивных функций с событиями мыши,
                                                нажатиями клавиш и пользовательскими обратными вызовами
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#11557C] mb-2">Анимация</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создание анимированных визуализаций с использованием FuncAnimation
                                                и пользовательских классов анимации
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Специализированные типы графиков</h3>
                                    <ul>
                                        <li><strong>Полярные графики</strong> - Визуализации в круговой системе
                                            координат
                                        </li>
                                        <li><strong>Графики потока</strong> - Визуализация векторных полей</li>
                                        <li><strong>Quiver графики</strong> - 2D поле стрелок</li>
                                        <li><strong>Fill Between</strong> - Заполнение области между кривыми</li>
                                        <li><strong>Полосы ошибок</strong> - Визуализация статистической
                                            неопределенности
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Проекты на GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#11557C] mr-3"></i>
                                    Проекты на GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих проектов визуализации с Matplotlib можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank"
                                           class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Я постоянно работаю над проектами визуализации данных, которые демонстрируют
                                        практическое применение
                                        Matplotlib для разведочного анализа данных, научных исследований и
                                        бизнес-отчетности.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#11557C] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#11557C]">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div
                                                class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#11557C] to-[#2D5B8F]"
                                                data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Настройка графиков</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Множественные подграфики</span>
                                            <span class="text-sm font-bold text-blue-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Качество публикаций</span>
                                            <span class="text-sm font-bold text-purple-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="72%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интерактивные функции</span>
                                            <span class="text-sm font-bold text-red-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="70%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#11557C] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Matplotlib 3.7+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Создано графиков: <strong>500+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-palette text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Типы графиков: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-file-export text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Форматы экспорта: <strong>PNG, PDF, SVG</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Путь обучения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#11557C] mr-2"></i>
                                    Путь обучения
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Основные типы графиков</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Настройка графиков</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Множественные подграфики</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Управление стилями</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Продвинутая настройка</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Интерактивные приложения</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#11557C] mr-2"></i>
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
                                            <div class="font-medium group-hover:text-[#11557C] transition-colors">
                                                Python
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pandas"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-table text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#11557C] transition-colors">
                                                Pandas
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                    </a>
                                    <a href="/competences/numpy"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#4D77CB] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-calculator text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#11557C] transition-colors">
                                                NumPy
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                    </a>
                                    <a href="/competences/seaborn"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-pie text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#11557C] transition-colors">
                                                Seaborn
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">65% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div
                                class="bg-gradient-to-r from-[#11557C] to-[#2D5B8F] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                                <p class="text-sm mb-4">Готов обсудить ваш проект по визуализации данных</p>
                                <a href="/contact"
                                   class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#11557C] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

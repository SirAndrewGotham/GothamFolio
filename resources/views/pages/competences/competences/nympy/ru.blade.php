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
                                        NumPy
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой раздел -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div
                                class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4D77CB] to-[#2D5B8F] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-calculator text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 numpy-gradient">NumPy</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span
                                            class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-rocket mr-1"></i>
                                            Высокая производительность
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Фундаментальный пакет для научных вычислений на Python.
                                Предоставляет мощные N-мерные массивы и математические функции.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#4D77CB] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#4D77CB] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт работы</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#4D77CB] mr-3">
                                        <i class="fas fa-microchip"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.24+</div>
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
                            <!-- О NumPy -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#4D77CB] mr-3"></i>
                                    О NumPy
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>NumPy</strong> - это фундаментальный пакет для научных вычислений в
                                        Python.
                                        Он предоставляет мощный N-мерный массив, сложные функции broadcasting,
                                        инструменты для интеграции кода C/C++ и Fortran, а также полезные возможности
                                        линейной алгебры, преобразования Фурье и генерации случайных чисел.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>N-мерный массив</strong> - Мощная структура данных для численных
                                            вычислений
                                        </li>
                                        <li><strong>Векторизованные операции</strong> - Быстрые поэлементные операции
                                            без циклов Python
                                        </li>
                                        <li><strong>Broadcasting</strong> - Умное обращение с массивами разных форм</li>
                                        <li><strong>Линейная алгебра</strong> - Комплексные операции линейной алгебры
                                        </li>
                                        <li><strong>Математические функции</strong> - Обширная коллекция математических
                                            операций
                                        </li>
                                        <li><strong>Эффективность памяти</strong> - Оптимизированное использование
                                            памяти для больших массивов
                                        </li>
                                        <li><strong>Совместимость</strong> - Основа для многих научных библиотек Python
                                        </li>
                                    </ul>

                                    <h3>Основные функции</h3>
                                    <p>
                                        Основная функциональность NumPy вращается вокруг объекта ndarray и связанных с
                                        ним операций:
                                    </p>
                                    <ul>
                                        <li><strong>ndarray</strong> - Многомерный однородный массив с элементами
                                            фиксированного размера
                                        </li>
                                        <li><strong>Типы данных</strong> - Богатый набор числовых типов данных (int,
                                            float, complex и т.д.)
                                        </li>
                                        <li><strong>Индексация и срезы</strong> - Мощные возможности индексации и срезов
                                            массивов
                                        </li>
                                        <li><strong>Универсальные функции</strong> - Быстрые поэлементные функции
                                            массивов (ufuncs)
                                        </li>
                                        <li><strong>Манипуляция массивами</strong> - Изменение формы, объединение,
                                            разделение массивов
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с NumPy -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#4D77CB] mr-3"></i>
                                    Мой путь с NumPy
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать NumPy в 2020 году как основу для моей работы в data science
                                        и научных вычислениях.
                                        За 4+ года я применял его в различных областях, включая машинное обучение,
                                        численное моделирование и конвейеры анализа данных. Мой опыт варьируется от
                                        базовых операций
                                        с массивами до продвинутых численных вычислений.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div
                                            class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-cube text-[#4D77CB] mr-2"></i>
                                                Научные вычисления
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Большой опыт использования NumPy для численного моделирования,
                                                математического моделирования и научных вычислений в различных областях.
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-brain text-purple-500 mr-2"></i>
                                                Основа машинного обучения
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использовал NumPy как вычислительную основу для реализации алгоритмов
                                                машинного обучения и нейронных сетей с нуля.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#4D77CB] mr-3"></i>
                                    Мой опыт работы с NumPy
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 4 лет практического опыта, я освоил NumPy для различных задач
                                        численных вычислений и интегрировал его с другими научными библиотеками Python.
                                    </p>

                                    <h3>Ключевые навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Создание и манипуляция массивами</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Векторизованные операции и broadcasting</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Операции линейной алгебры</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Математические и статистические функции</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Индексация и срезы массивов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация памяти и производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Генерация случайных чисел</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с другими библиотеками</span>
                                        </div>
                                    </div>

                                    <h3>Технический стек</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span
                                            class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">ndarray</span>
                                        <span
                                            class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Broadcasting</span>
                                        <span
                                            class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Линейная алгебра</span>
                                        <span
                                            class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Ufuncs</span>
                                        <span
                                            class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Индексация</span>
                                        <span
                                            class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Случайные числа</span>
                                        <span
                                            class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Фурье</span>
                                        <span
                                            class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Ввод/вывод</span>
                                    </div>

                                    <h3>Освоенные продвинутые операции</h3>
                                    <ul>
                                        <li><strong>Broadcasting массивов</strong> - Умное обращение с операциями между
                                            массивами разных форм
                                        </li>
                                        <li><strong>Структурированные массивы</strong> - Работа со сложными типами
                                            данных и массивами записей
                                        </li>
                                        <li><strong>Отображение памяти</strong> - Обработка массивов, слишком больших
                                            для размещения в памяти
                                        </li>
                                        <li><strong>Пользовательские ufuncs</strong> - Создание пользовательских
                                            универсальных функций для специализированных операций
                                        </li>
                                        <li><strong>Оптимизация производительности</strong> - Использование C API NumPy
                                            и техник оптимизации
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Математические операции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-square-root-alt text-[#4D77CB] mr-3"></i>
                                    Математические операции
                                </h2>
                                <div class="content-section">
                                    <h3>Линейная алгебра</h3>
                                    <p>
                                        Большой опыт работы с возможностями линейной алгебры NumPy, включая:
                                    </p>
                                    <ul>
                                        <li>Операции с матрицами (умножение, инверсия, разложение)</li>
                                        <li>Вычисления собственных значений и векторов</li>
                                        <li>Решение систем линейных уравнений</li>
                                        <li>Сингулярное разложение (SVD)</li>
                                        <li>QR-разложение и разложение Холецкого</li>
                                    </ul>

                                    <h3>Статистические функции</h3>
                                    <p>
                                        Освоение статистических операций для анализа данных:
                                    </p>
                                    <ul>
                                        <li>Описательная статистика (среднее, медиана, стандартное отклонение,
                                            дисперсия)
                                        </li>
                                        <li>Расчет корреляции и ковариации</li>
                                        <li>Вычисление гистограмм и бининг</li>
                                        <li>Расчет процентилей и квантилей</li>
                                        <li>Случайная выборка и распределения вероятностей</li>
                                    </ul>

                                    <h3>Преобразования Фурье</h3>
                                    <p>
                                        Опыт обработки сигналов с использованием NumPy:
                                    </p>
                                    <ul>
                                        <li>Вычисления быстрого преобразования Фурье (FFT)</li>
                                        <li>Анализ в частотной области</li>
                                        <li>Фильтрация сигналов и операции свертки</li>
                                        <li>Спектральный анализ и спектральная плотность мощности</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Производительность и оптимизация -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#4D77CB] mr-3"></i>
                                    Производительность и оптимизация
                                </h2>
                                <div class="content-section">
                                    <p>
                                        У меня большой опыт оптимизации операций NumPy для максимальной
                                        производительности:
                                    </p>
                                    <ul>
                                        <li><strong>Векторизация</strong> - Замена циклов Python векторизованными
                                            операциями
                                        </li>
                                        <li><strong>Расположение памяти</strong> - Понимание и оптимизация расположения
                                            памяти массивов (C vs Fortran порядок)
                                        </li>
                                        <li><strong>Операции на месте</strong> - Использование операций на месте для
                                            уменьшения выделения памяти
                                        </li>
                                        <li><strong>Типы данных</strong> - Выбор оптимальных типов данных для памяти и
                                            производительности
                                        </li>
                                        <li><strong>Правила broadcasting</strong> - Использование broadcasting для
                                            эффективных вычислений
                                        </li>
                                        <li><strong>Einsum</strong> - Использование соглашения Эйнштейна для сложных
                                            операций
                                        </li>
                                    </ul>

                                    <h3>Продвинутые техники</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#4D77CB] mb-2">Трюки с шагами</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использование as_strided и stride_tricks для продвинутых манипуляций с
                                                массивами
                                                без дублирования памяти
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#4D77CB] mb-2">Отображение памяти</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Работа с memory-mapped массивами для вычислений вне ядра
                                                на больших наборах данных
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#4D77CB] mb-2">Пользовательские dtypes</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создание пользовательских типов данных для специализированных численных
                                                вычислений
                                                и структурированных данных
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#4D77CB] mb-2">Представления массивов</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Эффективная работа с представлениями массивов и понимание того,
                                                когда создаются копии
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Интеграция с экосистемой -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-project-diagram text-[#4D77CB] mr-3"></i>
                                    Интеграция с экосистемой Python
                                </h2>
                                <div class="content-section">
                                    <p>
                                        NumPy служит основой для многих научных библиотек Python, и у меня есть опыт
                                        интеграции с:
                                    </p>

                                    <h3>Анализ данных</h3>
                                    <ul>
                                        <li><strong>Pandas</strong> - Массивы NumPy как основная структура данных</li>
                                        <li><strong>SciPy</strong> - Построение на основе NumPy для продвинутых научных
                                            вычислений
                                        </li>
                                        <li><strong>Matplotlib</strong> - Использование массивов NumPy для визуализации
                                            данных
                                        </li>
                                    </ul>

                                    <h3>Машинное обучение</h3>
                                    <ul>
                                        <li><strong>Scikit-learn</strong> - Массивы NumPy для матриц признаков и целевых
                                            векторов
                                        </li>
                                        <li><strong>TensorFlow/PyTorch</strong> - Совместимость с массивами NumPy</li>
                                        <li><strong>Keras</strong> - Использование массивов NumPy для обучающих данных
                                        </li>
                                    </ul>

                                    <h3>Специализированные библиотеки</h3>
                                    <ul>
                                        <li><strong>OpenCV</strong> - Обработка изображений с массивами NumPy</li>
                                        <li><strong>Astropy</strong> - Анализ астрономических данных</li>
                                        <li><strong>NetworkX</strong> - Алгоритмы на графах с матрицами смежности</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Проекты на GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#4D77CB] mr-3"></i>
                                    Проекты на GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих проектов с NumPy можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank"
                                           class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Я постоянно работаю над проектами научных вычислений, которые демонстрируют
                                        практическое применение
                                        NumPy для численного анализа, моделирования и обработки данных.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#4D77CB] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#4D77CB]">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div
                                                class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4D77CB] to-[#2D5B8F]"
                                                data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Операции с массивами</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Линейная алгебра</span>
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
                                            <span class="text-sm font-bold text-purple-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Математические функции</span>
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
                                    <i class="fas fa-lightbulb text-[#4D77CB] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#4D77CB] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#4D77CB] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>NumPy 1.24+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#4D77CB] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cube text-[#4D77CB] w-5 mr-3"></i>
                                        <span class="text-sm">Размерности: <strong>До N-мерных</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#4D77CB] w-5 mr-3"></i>
                                        <span
                                            class="text-sm">Производительность: <strong>C-оптимизированная</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Путь обучения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#4D77CB] mr-2"></i>
                                    Путь обучения
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Базовые операции с массивами</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Индексация и срезы</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Векторизованные операции</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Правила broadcasting</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Продвинутая линейная алгебра</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Интеграция с C API</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#4D77CB] mr-2"></i>
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
                                            <div class="font-medium group-hover:text-[#4D77CB] transition-colors">
                                                Python
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pandas"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-table text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4D77CB] transition-colors">
                                                Pandas
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                    </a>
                                    <a href="/competences/matplotlib"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-area text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4D77CB] transition-colors">
                                                Matplotlib
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                    </a>
                                    <a href="/competences/scipy"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flask text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4D77CB] transition-colors">
                                                SciPy
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">65% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div
                                class="bg-gradient-to-r from-[#4D77CB] to-[#2D5B8F] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                                <p class="text-sm mb-4">Готов обсудить ваш проект научных вычислений</p>
                                <a href="/contact"
                                   class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#4D77CB] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

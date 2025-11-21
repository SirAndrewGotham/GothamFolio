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
                                    Наука о данных
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Scikit-learn
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой раздел -->
        <section class="py-12 bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div
                                class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#F7931E] to-[#FFB347] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-brain text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 sklearn-gradient">
                                    Scikit-learn</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span
                                            class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-robot mr-1"></i>
                                            Машинное обучение
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Простые и эффективные инструменты для прогнозного анализа данных.
                                Построена на NumPy, SciPy и matplotlib для машинного обучения на Python.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-[#F7931E] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">70%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#F7931E] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#F7931E] mr-3">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.3+</div>
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
                            <!-- О Scikit-learn -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#F7931E] mr-3"></i>
                                    О Scikit-learn
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Scikit-learn</strong> — это бесплатная библиотека машинного обучения для
                                        Python.
                                        Она включает различные алгоритмы классификации, регрессии и кластеризации,
                                        включая
                                        метод опорных векторов, случайные леса, градиентный бустинг, k-средних и DBSCAN,
                                        и предназначена для взаимодействия с числовыми и научными библиотеками Python NumPy и SciPy.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Простой и последовательный API</strong> - Легко изучать и использовать для разных алгоритмов
                                        </li>
                                        <li><strong>Полная документация</strong> - Многочисленные примеры и руководства
                                        </li>
                                        <li><strong>Построена на NumPy/SciPy</strong> - Эффективные численные вычисления
                                        </li>
                                        <li><strong>Открытый исходный код</strong> - Коммерческое использование по лицензии BSD</li>
                                        <li><strong>Широкий охват алгоритмов</strong> - Классификация, регрессия,
                                            кластеризация, снижение размерности
                                        </li>
                                        <li><strong>Оценка моделей</strong> - Полноценные инструменты для валидации и выбора моделей
                                        </li>
                                        <li><strong>Предобработка данных</strong> - Извлечение признаков, нормализация и
                                            преобразование
                                        </li>
                                    </ul>

                                    <h3>Основные возможности</h3>
                                    <p>
                                        Scikit-learn предоставляет инструменты для всего рабочего процесса машинного обучения:
                                    </p>
                                    <ul>
                                        <li><strong>Классификация</strong> - Определение категории объекта
                                        </li>
                                        <li><strong>Регрессия</strong> - Предсказание непрерывного значения</li>
                                        <li><strong>Кластеризация</strong> - Автоматическая группировка похожих объектов</li>
                                        <li><strong>Снижение размерности</strong> - Уменьшение количества случайных переменных
                                        </li>
                                        <li><strong>Выбор модели</strong> - Сравнение, валидация и выбор параметров
                                        </li>
                                        <li><strong>Предобработка</strong> - Извлечение и нормализация признаков</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с Scikit-learn -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#F7931E] mr-3"></i>
                                    Мой путь с Scikit-learn
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать Scikit-learn в 2021 году как основную библиотеку машинного обучения для
                                        проектов на Python.
                                        За 3+ года я применял её в различных областях, включая прогнозное моделирование,
                                        сегментацию клиентов и обнаружение аномалий. Мой опыт варьируется от простых задач
                                        классификации до сложных методов ансамблей и оптимизации гиперпараметров.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div
                                            class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-chart-line text-[#F7931E] mr-2"></i>
                                                Прогнозное моделирование
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Большой опыт создания и развертывания прогнозных моделей
                                                для задач классификации и регрессии в различных бизнес-доменах.
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-purple-500 mr-2"></i>
                                                Аналитика клиентов
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Применял алгоритмы кластеризации для сегментации клиентов
                                                и системы рекомендаций для электронной коммерции.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#F7931E] mr-3"></i>
                                    Мой опыт работы с Scikit-learn
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 3 лет практического опыта, я освоил Scikit-learn для различных
                                        задач машинного обучения и интегрировал его с экосистемой науки о данных Python.
                                    </p>

                                    <h3>Ключевые навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Алгоритмы классификации</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Модели регрессии</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Методы кластеризации</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оценка и валидация моделей</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Инженерия и отбор признаков</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка гиперпараметров</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Создание конвейеров</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стратегии перекрёстной проверки</span>
                                        </div>
                                    </div>

                                    <h3>Экспертиза в алгоритмах</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span
                                            class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Случайный лес</span>
                                        <span
                                            class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">SVM</span>
                                        <span
                                            class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">K-средних</span>
                                        <span
                                            class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Линейные модели</span>
                                        <span
                                            class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">XGBoost</span>
                                        <span
                                            class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">PCA</span>
                                        <span
                                            class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">KNN</span>
                                        <span
                                            class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Сетчатый поиск</span>
                                    </div>

                                    <h3>Рабочий процесс машинного обучения</h3>
                                    <ul>
                                        <li><strong>Предобработка данных</strong> - Обработка пропущенных значений, кодирование
                                            категориальных переменных, масштабирование признаков
                                        </li>
                                        <li><strong>Инженерия признаков</strong> - Создание новых признаков, полиномиальные признаки, условия взаимодействия
                                        </li>
                                        <li><strong>Обучение модели</strong> - Обучение различных алгоритмов с надлежащей валидацией
                                        </li>
                                        <li><strong>Оценка модели</strong> - Использование соответствующих метрик для разных типов задач
                                        </li>
                                        <li><strong>Оптимизация гиперпараметров</strong> - Сетчатый поиск, случайный поиск,
                                            и байесовская оптимизация
                                        </li>
                                        <li><strong>Развертывание модели</strong> - Сохранение и загрузка моделей для промышленного использования
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Категории алгоритмов -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#F7931E] mr-3"></i>
                                    Категории алгоритмов
                                </h2>
                                <div class="content-section">
                                    <h3>Обучение с учителем</h3>
                                    <p>
                                        Большой опыт работы с алгоритмами классификации и регрессии:
                                    </p>
                                    <ul>
                                        <li><strong>Линейные модели</strong> - Логистическая регрессия, линейная регрессия,
                                            ридж, лассо
                                        </li>
                                        <li><strong>Метод опорных векторов</strong> - Классификация и регрессия
                                            с разными ядрами
                                        </li>
                                        <li><strong>Методы на основе деревьев</strong> - Деревья решений, случайные леса,
                                            градиентный бустинг
                                        </li>
                                        <li><strong>Наивный Байес</strong> - Гауссовский, мультиномиальный и варианты Бернулли
                                        </li>
                                        <li><strong>K-ближайших соседей</strong> - Классификация и регрессия</li>
                                        <li><strong>Нейронные сети</strong> - Многослойный перцептрон для классификации и
                                            регрессии
                                        </li>
                                    </ul>

                                    <h3>Обучение без учителя</h3>
                                    <p>
                                        Опыт работы с кластеризацией и снижением размерности:
                                    </p>
                                    <ul>
                                        <li><strong>Кластеризация</strong> - K-средних, DBSCAN, иерархическая кластеризация,
                                            Гауссовские смеси
                                        </li>
                                        <li><strong>Снижение размерности</strong> - PCA, t-SNE, UMAP, методы отбора признаков
                                        </li>
                                        <li><strong>Обнаружение аномалий</strong> - Изолирующий лес, локальный фактор выбросов
                                        </li>
                                        <li><strong>Оценка плотности</strong> - Оценка плотности ядра</li>
                                    </ul>

                                    <h3>Выбор и оценка модели</h3>
                                    <p>
                                        Освоены методы валидации и выбора моделей:
                                    </p>
                                    <ul>
                                        <li>Стратегии перекрёстной проверки (k-блочная, стратифицированная, для временных рядов)</li>
                                        <li>Настройка гиперпараметров (сетчатый поиск, случайный поиск)</li>
                                        <li>Метрики производительности (точность, точность, полнота, F1, ROC-AUC)</li>
                                        <li>Кривые обучения и кривые валидации</li>
                                        <li>Анализ важности признаков</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Инженерия признаков и предобработка -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#F7931E] mr-3"></i>
                                    Инженерия признаков и предобработка
                                </h2>
                                <div class="content-section">
                                    <p>
                                        У меня большой опыт работы с возможностями предобработки и инженерии признаков Scikit-learn:
                                    </p>

                                    <h3>Предобработка данных</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Масштабирование и нормализация</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                StandardScaler, MinMaxScaler, RobustScaler,
                                                и методы нормализации для разных распределений данных
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Кодирование категориальных
                                                переменных</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                OneHotEncoder, LabelEncoder, OrdinalEncoder
                                                для обработки категориальных признаков
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Обработка пропущенных значений</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                SimpleImputer, KNNImputer для разных
                                                стратегий работы с пропущенными данными
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Преобразование признаков</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                PolynomialFeatures, FunctionTransformer
                                                для создания новых признаков
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Конвейеры и рабочий процесс</h3>
                                    <p>
                                        Опыт построения надежных конвейеров машинного обучения:
                                    </p>
                                    <ul>
                                        <li><strong>Создание конвейеров</strong> - Объединение шагов предобработки и моделирования
                                        </li>
                                        <li><strong>ColumnTransformer</strong> - Применение разных преобразований к разным столбцам
                                        </li>
                                        <li><strong>FeatureUnion</strong> - Комбинирование нескольких методов извлечения признаков
                                        </li>
                                        <li><strong>Пользовательские преобразователи</strong> - Создание пользовательских шагов предобработки
                                        </li>
                                        <li><strong>Сохранение модели</strong> - Сохранение и загрузка целых конвейеров
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Реальные приложения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-chart-bar text-[#F7931E] mr-3"></i>
                                    Реальные приложения
                                </h2>
                                <div class="content-section">
                                    <h3>Бизнес-приложения</h3>
                                    <p>
                                        Применял Scikit-learn для решения реальных бизнес-задач в различных областях:
                                    </p>
                                    <ul>
                                        <li><strong>Прогнозирование оттока клиентов</strong> - Модели классификации для
                                            прогнозирования оттока клиентов
                                        </li>
                                        <li><strong>Прогнозирование продаж</strong> - Модели временных рядов и регрессии для
                                            прогнозирования спроса
                                        </li>
                                        <li><strong>Оценка кредитного риска</strong> - Классификация для решений об одобрении кредитов
                                        </li>
                                        <li><strong>Сегментация клиентов</strong> - Кластеризация для разработки маркетинговой стратегии
                                        </li>
                                        <li><strong>Системы рекомендаций</strong> - Коллаборативная фильтрация и
                                            рекомендации на основе контента
                                        </li>
                                        <li><strong>Обнаружение мошенничества</strong> - Обнаружение аномалий для финансовых
                                            транзакций
                                        </li>
                                    </ul>

                                    <h3>Отраслевые проекты</h3>
                                    <ul>
                                        <li><strong>Электронная коммерция</strong> - Рекомендация продуктов и прогнозирование жизненной ценности клиента
                                        </li>
                                        <li><strong>Здравоохранение</strong> - Прогнозирование заболеваний и риска повторной госпитализации пациентов
                                        </li>
                                        <li><strong>Финансы</strong> - Прогнозирование цен на акции и оптимизация портфеля
                                        </li>
                                        <li><strong>Маркетинг</strong> - Сегментация клиентов и оптимизация кампаний
                                        </li>
                                        <li><strong>Производство</strong> - Прогнозное обслуживание и контроль качества
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Оценка и оптимизация модели -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#F7931E] mr-3"></i>
                                    Оценка и оптимизация модели
                                </h2>
                                <div class="content-section">
                                    <p>
                                        У меня большой опыт работы с методами оценки моделей и оптимизации гиперпараметров:
                                    </p>

                                    <h3>Метрики оценки</h3>
                                    <ul>
                                        <li><strong>Классификация</strong> - Точность, точность, полнота, F1-мера,
                                            ROC-AUC, матрица ошибок
                                        </li>
                                        <li><strong>Регрессия</strong> - MAE, MSE, RMSE, R², объясненная дисперсия</li>
                                        <li><strong>Кластеризация</strong> - Силуэтный коэффициент, индекс Калински-Харабаса,
                                            индекс Дэвиса-Болдина
                                        </li>
                                        <li><strong>Перекрёстная проверка</strong> - K-блочная, стратифицированная, для временных рядов и
                                            группированная перекрёстная проверка
                                        </li>
                                    </ul>

                                    <h3>Оптимизация гиперпараметров</h3>
                                    <ul>
                                        <li><strong>GridSearchCV</strong> - Полный перебор по заданным значениям параметров
                                        </li>
                                        <li><strong>RandomizedSearchCV</strong> - Случайный поиск по распределениям параметров
                                        </li>
                                        <li><strong>Байесовская оптимизация</strong> - Использование интеграции scikit-optimize и Optuna
                                        </li>
                                        <li><strong>Кривые обучения</strong> - Диагностика компромисса смещение-дисперсия</li>
                                        <li><strong>Кривые валидации</strong> - Настройка отдельных гиперпараметров</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Проекты на GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#F7931E] mr-3"></i>
                                    Проекты на GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих проектов по машинному обучению с использованием Scikit-learn можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank"
                                           class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Я постоянно работаю над проектами машинного обучения, которые демонстрируют практические приложения
                                        Scikit-learn для классификации, регрессии, кластеризации и других задач МО.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#F7931E] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#F7931E]">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div
                                                class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#F7931E] to-[#FFB347]"
                                                data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Классификация</span>
                                            <span class="text-sm font-bold text-green-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="75%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Регрессия</span>
                                            <span class="text-sm font-bold text-blue-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="72%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Кластеризация</span>
                                            <span class="text-sm font-bold text-purple-500">68%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="68%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Оценка модели</span>
                                            <span class="text-sm font-bold text-red-500">73%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="73%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#F7931E] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Scikit-learn 1.3+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cogs text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Алгоритмы: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Статус: <strong>Активное изучение</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Путь обучения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#F7931E] mr-2"></i>
                                    Путь обучения
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Базовая классификация и регрессия</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Метрики оценки моделей</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Предобработка признаков</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Алгоритмы кластеризации</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Ансамблевые методы</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Интеграция нейронных сетей</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#F7931E] mr-2"></i>
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
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                Python
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pandas"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-table text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                Pandas
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                    <a href="/competences/numpy"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#4D77CB] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-calculator text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                NumPy
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                    <a href="/competences/matplotlib"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#11557C] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-line text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                Matplotlib
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div
                                class="bg-gradient-to-r from-[#F7931E] to-[#FFB347] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                                <p class="text-sm mb-4">Готов обсудить ваш проект машинного обучения</p>
                                <a href="/contact"
                                   class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#F7931E] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

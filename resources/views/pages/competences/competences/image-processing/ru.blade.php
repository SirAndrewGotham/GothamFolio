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
                                <a href="/competences/photography" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Фотография и Наука о Данных
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Обработка Изображений
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-image text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Обработка Изображений</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-crop-alt mr-1"></i>
                                            Цифровая обработка
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Продвинутые методы цифрового манипулирования, улучшения и обработки изображений для фотографии и науки о данных
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">15+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Техник</div>
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
                            <!-- О обработке изображений -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    О обработке изображений
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Обработка изображений</strong> охватывает широкий спектр методов для манипулирования
                                        и анализа цифровых изображений. От базовых улучшений до сложных вычислительных алгоритмов,
                                        обработка изображений соединяет художественную фотографию и научный анализ данных.
                                    </p>

                                    <h3>Ключевые применения</h3>
                                    <ul>
                                        <li><strong>Улучшение фотографий</strong> - Коррекция цвета, шумоподавление и улучшение деталей</li>
                                        <li><strong>Вычислительная фотография</strong> - HDR, склейка панорам и фокус-стекинг</li>
                                        <li><strong>Медицинская визуализация</strong> - Анализ и улучшение медицинских снимков</li>
                                        <li><strong>Компьютерное зрение</strong> - Обнаружение особенностей, распознавание объектов и анализ паттернов</li>
                                        <li><strong>Научный анализ</strong> - Микроскопия, спутниковые снимки и исследовательские данные</li>
                                        <li><strong>Креативные эффекты</strong> - Художественные фильтры, композитинг и создание цифрового искусства</li>
                                    </ul>

                                    <h3>Основные области обработки</h3>
                                    <p>
                                        Моя экспертиза охватывает несколько областей обработки изображений:
                                    </p>
                                    <ul>
                                        <li><strong>Обработка в пространственной области</strong> - Прямое манипулирование пикселями и фильтрация</li>
                                        <li><strong>Обработка в частотной области</strong> - Анализ Фурье и операции на основе частот</li>
                                        <li><strong>Обработка цвета</strong> - Преобразования цветового пространства и улучшение</li>
                                        <li><strong>Морфологическая обработка</strong> - Анализ на основе формы и операции</li>
                                        <li><strong>Геометрические преобразования</strong> - Поворот, масштабирование и коррекция перспективы</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в обработке изображений -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-blue-500 mr-3"></i>
                                    Мой путь в обработке изображений
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Мой путь в обработке изображений начался более 3 лет назад, объединив мою страсть к фотографии
                                        с техническими знаниями в анализе данных. Начиная с базового редактирования фото, я продвинулся
                                        до реализации сложных алгоритмов для художественных и научных приложений.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-camera text-blue-500 mr-2"></i>
                                                Фотография
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Продвинутое редактирование фото, обработка RAW и техники творческого манипулирования
                                                для профессиональных рабочих процессов фотографии.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-microscope text-purple-500 mr-2"></i>
                                                Приложения в науке о данных
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разработка алгоритмов для анализа изображений, извлечения признаков
                                                и автоматизированной обработки в научных контекстах.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                    Мой опыт в обработке изображений
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 3 лет практического опыта, я развил комплексные навыки
                                        как в художественном манипулировании изображениями, так и в техническом анализе изображений
                                        в различных областях и приложениях.
                                    </p>

                                    <h3>Технические навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Коррекция и градация цвета</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Шумоподавление и повышение резкости</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Сегментация изображений и маскирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Анализ в частотной области</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Морфологические операции</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обнаружение и извлечение признаков</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Регистрация и выравнивание изображений</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Мультиспектральная обработка изображений</span>
                                        </div>
                                    </div>

                                    <h3>Инструменты & Технологии</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">OpenCV</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">PIL/Pillow</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Photoshop</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Lightroom</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">GIMP</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">NumPy</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">scikit-image</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">RAWTherapee</span>
                                    </div>

                                    <h3>Освоенные техники обработки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Техники улучшения</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Эквализация гистограммы</li>
                                                <li>• Растяжение контраста</li>
                                                <li>• Нерезкое маскирование</li>
                                                <li>• Частотная фильтрация</li>
                                                <li>• Преобразование цветового пространства</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Методы анализа</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Детектирование границ</li>
                                                <li>• Анализ текстуры</li>
                                                <li>• Распознавание объектов</li>
                                                <li>• Сопоставление паттернов</li>
                                                <li>• Морфологический анализ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Области применения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-layer-group text-blue-500 mr-3"></i>
                                    Области применения & Проекты
                                </h2>
                                <div class="content-section">
                                    <h3>Приложения в фотографии</h3>
                                    <p>
                                        В фотографических контекстах я применял обработку изображений для:
                                    </p>
                                    <ul>
                                        <li><strong>Профессиональное редактирование фото</strong> - Продвинутое ретуширование и цветокоррекция для коммерческой фотографии</li>
                                        <li><strong>HDR обработка</strong> - Тонмаппинг и слияние экспозиций для изображений с высоким динамическим диапазоном</li>
                                        <li><strong>Склейка панорам</strong> - Бесшовное объединение нескольких изображений в панорамные виды</li>
                                        <li><strong>Фокус-стекинг</strong> - Объединение нескольких фокальных плоскостей для расширенной глубины резкости</li>
                                        <li><strong>Обработка астрофотографии</strong> - Стекинг и улучшение астрономических изображений</li>
                                    </ul>

                                    <h3>Приложения в науке о данных</h3>
                                    <p>
                                        В научных и аналитических контекстах я реализовал:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Медицинская визуализация</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Улучшение и анализ медицинских снимков для исследовательских приложений
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Дистанционное зондирование</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обработка спутниковых и аэрофотоснимков для географического анализа
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Контроль качества</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Автоматизированный осмотр и обнаружение дефектов в производстве
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Анализ документов</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Улучшение OCR и обработка изображений документов
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Значимые проекты</h3>
                                    <ul>
                                        <li><strong>Автоматизированная система отбора фото</strong> - AI-помощник в выборе лучших изображений с фотосессий</li>
                                        <li><strong>Улучшение медицинских изображений</strong> - Разработка алгоритмов для улучшения диагностической ясности</li>
                                        <li><strong>Анализ спутниковых снимков</strong> - Обработка и классификация данных наблюдения Земли</li>
                                        <li><strong>Перенос художественного стиля</strong> - Реализация нейросетей для творческого манипулирования изображениями</li>
                                        <li><strong>Применение фильтров в реальном времени</strong> - Веб-инструменты для обработки изображений</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Техническая реализация -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-blue-500 mr-3"></i>
                                    Техническая реализация
                                </h2>
                                <div class="content-section">
                                    <h3>Разработка алгоритмов</h3>
                                    <p>
                                        Я разрабатывал и реализовывал различные алгоритмы обработки изображений:
                                    </p>
                                    <ul>
                                        <li><strong>Пользовательские фильтрующие ядра</strong> - Проектирование и применение сверточных фильтров</li>
                                        <li><strong>Операции в частотной области</strong> - Фильтрация и анализ на основе БПФ</li>
                                        <li><strong>Морфологическая обработка</strong> - Эрозия, дилатация и анализ формы</li>
                                        <li><strong>Алгоритмы сегментации</strong> - Пороговая обработка, рост областей и водораздел</li>
                                        <li><strong>Детектирование признаков</strong> - Обнаружение углов, анализ blob'ов и поиск границ</li>
                                    </ul>

                                    <h3>Оптимизация производительности</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Параллельная обработка</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Многопоточность и GPU-ускорение для крупномасштабной обработки изображений
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Оптимизация памяти</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Эффективная работа с большими наборами данных изображений и потоковая обработка
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Оптимизация алгоритмов</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Математическая оптимизация алгоритмов обработки для скорости и качества
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Метрики качества</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация объективной оценки качества для обработанных изображений
                                            </p>
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
                                    <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500"
                                                 data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Фотографическая обработка</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Разработка алгоритмов</span>
                                            <span class="text-sm font-bold text-purple-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Технический анализ</span>
                                            <span class="text-sm font-bold text-yellow-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интеграция инструментов</span>
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
                                    <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tools text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Техники: <strong>15+ освоено</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-camera text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Области: <strong>Фото & Наука</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Языки: <strong>Python</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Области обработки -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-sitemap text-blue-500 mr-2"></i>
                                    Области обработки
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Обработка в пространственной области</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Анализ в частотной области</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Манипулирование цветовым пространством</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Морфологическая обработка</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">3D обработка изображений</span>
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
                                    <a href="/competences/photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-camera text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Фотография</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/data-science" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-line text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Наука о данных</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-python text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Python</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/computer-vision" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-eye text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Компьютерное зрение</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">68% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна обработка изображений?</h3>
                                <p class="text-sm mb-4">Давайте улучшим и проанализируем ваши визуальные данные</p>
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

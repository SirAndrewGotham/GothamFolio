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
                                    Фотография
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Adobe Lightroom
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#31A8FF] to-[#2E8AE6] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-image text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 lightroom-gradient">Adobe Lightroom</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Ключевой навык
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Профессиональное программное обеспечение для редактирования и управления фотографиями. Мой основной инструмент для цифровой фотографии с 2007 года.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">90%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">15+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-images"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">100тыс.+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Обработанных фото</div>
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
                            <!-- О программе Lightroom -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#31A8FF] mr-3"></i>
                                    О Adobe Lightroom
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Adobe Lightroom</strong> — это профессиональное приложение для редактирования и управления фотографиями,
                                        ставшее отраслевым стандартом для фотографов по всему миру. Оно предоставляет комплексное
                                        решение рабочего процесса от импорта и организации до редактирования и экспорта изображений.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Недestructive редактирование</strong> — Все изменения обратимы и никогда не изменяют исходные файлы</li>
                                        <li><strong>Мощная организация</strong> — Продвинутая система каталогов с ключевыми словами, рейтингами и коллекциями</li>
                                        <li><strong>Обработка RAW</strong> — Превосходная работа с RAW-файлами от всех основных производителей камер</li>
                                        <li><strong>Система пресетов</strong> — Сохранение и применение стилей редактирования к нескольким изображениям</li>
                                        <li><strong>Бесперебойная интеграция</strong> — Идеально работает с Photoshop и другими приложениями Adobe</li>
                                        <li><strong>Облачная синхронизация</strong> — Доступ к вашим фотографиям на нескольких устройствах</li>
                                    </ul>

                                    <h3>Рекомендуемые области применения</h3>
                                    <p>
                                        Lightroom идеален для различных рабочих процессов фотографии и особенно эффективен для:
                                    </p>
                                    <ul>
                                        <li>Профессиональной портретной и свадебной фотографии</li>
                                        <li>Пейзажной и природной фотографии</li>
                                        <li>Событийной и спортивной фотографии с большими объемами изображений</li>
                                        <li>Коммерческой предметной фотографии</li>
                                        <li>Личных фотопроектов и архивирования</li>
                                        <li>Фоторепортажей и документальной работы</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с Lightroom -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#31A8FF] mr-3"></i>
                                    Мой путь с Lightroom
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать Adobe Lightroom в 2007 году, когда этот редактор вышел в свет, открыв более широкие возможности цифровой фотографии. За последние 15+ лет я разработал эффективный
                                        рабочий процесс, который максимизирует как творчество, так и продуктивность.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-swatchbook text-[#31A8FF] mr-2"></i>
                                                Пользовательские пресеты и рабочие процессы
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разработал обширные коллекции пользовательских пресетов для различных жанров фотографии
                                                и условий освещения, значительно ускорив процесс редактирования.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-project-diagram text-purple-500 mr-2"></i>
                                                Управление портфолио
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Управлял несколькими фотопортфолио и клиентскими проектами, используя
                                                мощную систему каталогов и функции коллекций Lightroom.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#31A8FF] mr-3"></i>
                                    Мой опыт работы с Lightroom
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 8 лет опыта, я освоил как технические, так и творческие аспекты
                                        Adobe Lightroom, разработав рабочие процессы, которые балансируют эффективность с художественным выражением.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Продвинутое цветокоррекция</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обработка RAW-файлов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пакетная обработка и пресеты</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Улучшение деталей и резкости</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Коррекция объектива и трансформации</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Локальные корректировки и маски</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление каталогами и организация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Рабочие процессы экспорта для разных медиа</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Слияние HDR и панорам</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация производительности</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты</h3>
                                    <ul>
                                        <li><strong>Портфолио Urban Exploration</strong> — Разработал единый стиль редактирования для 500+ изображений городской фотографии</li>
                                        <li><strong>Рабочий процесс свадебной фотографии</strong> — Создал эффективный конвейер редактирования для событийной фотографии с большими объемами</li>
                                        <li><strong>Каталог предметной фотографии</strong> — Управлял и редактировал коммерческие изображения продуктов с точной цветопередачей</li>
                                        <li><strong>Серия travel-фотографии</strong> — Обработал и организовал тысячи travel-изображений с пользовательскими пресетами</li>
                                        <li><strong>Проект оцифровки архивов</strong> — Восстановил и улучшил исторические фотографии с использованием продвинутых техник Lightroom</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Технические детали -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#31A8FF] mr-3"></i>
                                    Технические детали
                                </h2>
                                <div class="content-section">
                                    <h3>Особенности рабочего процесса</h3>
                                    <p>
                                        Мой рабочий процесс в Lightroom включает передовые техники и лучшие практики для оптимальных результатов:
                                    </p>
                                    <ul>
                                        <li><strong>Пользовательские пресеты импорта</strong> — Автоматическое применение метаданных при импорте</li>
                                        <li><strong>Умные коллекции</strong> — Динамическая организация на основе критериев изображения</li>
                                        <li><strong>Виртуальные копии</strong> — Множественные варианты редактирования без дублирования файлов</li>
                                        <li><strong>Сервисы публикации</strong> — Прямой экспорт на онлайн-платформы и социальные сети</li>
                                        <li><strong>Интеграция плагинов</strong> — Расширенная функциональность с помощью сторонних инструментов</li>
                                    </ul>

                                    <h3>Инструменты редактирования</h3>
                                    <p>
                                        Я работаю с полным набором инструментов редактирования Lightroom, включая:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Тоновая кривая</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Панель HSL</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Раздельное тонирование</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Радиальные фильтры</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Градиентные фильтры</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Кистевые корректировки</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Коррекция профилей</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Коррекция объектива</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Панель трансформации</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Ссылка на галерею -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-images text-[#31A8FF] mr-3"></i>
                                    Фотогалереи
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Примеры моих фотографий, обработанных в Adobe Lightroom, можно найти в моих галереях:
                                    </p>
                                    <div class="mt-4">
                                        <a href="/galleries" class="inline-flex items-center px-4 py-2 bg-[#31A8FF] hover:bg-[#2E8AE6] text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-images mr-2"></i>
                                            <span>Посмотреть фотогалереи</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Мои галереи демонстрируют различные жанры фотографии, все обработанные с использованием моих пользовательских рабочих процессов и пресетов Lightroom.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#31A8FF] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#31A8FF]">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#31A8FF] to-[#2E8AE6]"
                                                 data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Цветокоррекция</span>
                                            <span class="text-sm font-bold text-green-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Эффективность рабочего процесса</span>
                                            <span class="text-sm font-bold text-blue-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Управление каталогами</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Обработка RAW</span>
                                            <span class="text-sm font-bold text-yellow-500">93%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="93%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#31A8FF] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>15+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-image text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Lightroom Classic</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-images text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Обработано фото: <strong>10,000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-swatchbook text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Пользовательских пресетов: <strong>100+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#31A8FF] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-black flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-camera text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Фотография</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/adobe-photoshop" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-adobe text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Adobe Photoshop</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/color-theory" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-red-500 to-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-palette text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Теория цвета</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/digital-imaging" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-desktop text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Цифровая обработка изображений</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#31A8FF] to-[#2E8AE6] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                                <p class="text-sm mb-4">Доступен для проектов по редактированию фотографий</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#31A8FF] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
            .captureone-gradient {
                background: linear-gradient(135deg, #00A4EF 0%, #0078D7 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Анимация полосы навыков
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
                                        Capture One
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#00A4EF] to-[#0078D7] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-camera text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 captureone-gradient">Capture One</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bolt mr-1"></i>
                                            Профессиональный рабочий процесс
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Профессиональное программное обеспечение для обработки RAW-изображений и съемки по кабелю. Отраслевой выбор для студийной фотографии и сложной цветокоррекции.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#00A4EF] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#00A4EF] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#00A4EF] mr-3">
                                        <i class="fas fa-images"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5K+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Обработанных изображений</div>
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
                            <!-- О Capture One -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#00A4EF] mr-3"></i>
                                    О Capture One
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Capture One</strong> — это профессиональное приложение для обработки RAW-изображений,
                                        разработанное Phase One, известное своим превосходным воспроизведением цветов, возможностями
                                        съемки по кабелю и мощными инструментами редактирования. Это предпочтительный выбор для коммерческих,
                                        модных и продуктовых фотографов, которые требуют высочайшего качества вывода.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Превосходная цветовая наука</strong> - Лучшее в отрасли воспроизведение цвета и тонов кожи</li>
                                        <li><strong>Надежная съемка по кабелю</strong> - Бесшовный контроль камеры и мгновенный предпросмотр</li>
                                        <li><strong>Слоевое редактирование</strong> - Неразрушающие корректировки с возможностями маскирования</li>
                                        <li><strong>Рабочий процесс сессий</strong> - Проектная организация для коммерческих съемок</li>
                                        <li><strong>Профили для конкретных камер</strong> - Оптимизированная обработка для разных моделей камер</li>
                                        <li><strong>Скорость и производительность</strong> - Эффективная обработка больших объемов изображений</li>
                                    </ul>

                                    <h3>Рекомендуемые области применения</h3>
                                    <p>
                                        Capture One превосходно работает в профессиональных фотографических средах и особенно эффективен для:
                                    </p>
                                    <ul>
                                        <li>Коммерческой и продуктовой фотографии</li>
                                        <li>Модных и портретных студий</li>
                                        <li>Архитектурной и недвижимой фотографии</li>
                                        <li>Масштабной событийной фотографии</li>
                                        <li>Художественной и пейзажной фотографии</li>
                                        <li>Любых рабочих процессов, требующих точного контроля цвета</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с Capture One -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#00A4EF] mr-3"></i>
                                    Мой путь с Capture One
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать Capture One в 2020 году для улучшения своего профессионального фотографического рабочего процесса,
                                        особенно для студийной и коммерческой работы. За 4+ года я развил экспертизу
                                        в его продвинутых инструментах цветокоррекции и возможностях съемки по кабелю для требовательных
                                        профессиональных заданий.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-palette text-[#00A4EF] mr-2"></i>
                                                Продвинутый цветовой рабочий процесс
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Освоил сложные инструменты цветового редактирования Capture One, включая Color Balance,
                                                унификацию тонов кожи и продвинутые корректировки кривых для профессиональных результатов.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-sliders-h text-purple-500 mr-2"></i>
                                                Съемка по кабелю
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разработал эффективные рабочие процессы съемки по кабелю для студийных сессий,
                                                позволяющие просматривать и корректировать изображения в реальном времени во время коммерческих съемок.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#00A4EF] mr-3"></i>
                                    Мой опыт работы с Capture One
                                </h2>
                                <div class="content-section">
                                    <p>
                                        За 4+ года интенсивного использования Capture One я обработал тысячи изображений
                                        в различных жанрах фотографии, разработав эффективные рабочие процессы как для
                                        индивидуальных проектов, так и для масштабных коммерческих заданий.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Продвинутая цветокоррекция</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Слоевые корректировки</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление сессиями и каталогами</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Создание стилей и пресетов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка съемки по кабелю</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Улучшение детализации</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Коррекция объектива и повышение резкости</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Пакетная обработка</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление цветовыми профилями</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Рабочие процессы экспорта и доставки</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты</h3>
                                    <ul>
                                        <li><strong>Кампания продуктной фотографии</strong> - Съемка по кабелю и цветокоррекция для e-commerce клиента</li>
                                        <li><strong>Студийные портретные сессии</strong> - Редактирование в реальном времени и просмотр клиентом во время съемок</li>
                                        <li><strong>Серия архитектурной фотографии</strong> - Продвинутая цветокоррекция для интерьерных пространств</li>
                                        <li><strong>Производство модного лукабука</strong> - Единообразный цвет across нескольких моделей и локаций</li>
                                        <li><strong>Корпоративные портретные сессии</strong> - Эффективная пакетная обработка для больших команд</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Технические детали -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#00A4EF] mr-3"></i>
                                    Технические детали
                                </h2>
                                <div class="content-section">
                                    <h3>Продвинутые функции</h3>
                                    <p>
                                        Мой рабочий процесс в Capture One использует профессиональные функции и техники:
                                    </p>
                                    <ul>
                                        <li><strong>Color Editor</strong> - Точные HSL-корректировки и унификация тонов кожи</li>
                                        <li><strong>Слои и маски</strong> - Локальные корректировки с кистями, градиентными и радиальными масками</li>
                                        <li><strong>Стили и пресеты</strong> - Создание пользовательских рецептов и пакетное применение</li>
                                        <li><strong>Организация сессий</strong> - Эффективное управление файлами для коммерческих съемок</li>
                                        <li><strong>Горячие клавиши</strong> - Оптимизированный рабочий процесс для скорости и эффективности</li>
                                    </ul>

                                    <h3>Владение инструментами</h3>
                                    <p>
                                        Я работаю с комплексным набором инструментов Capture One, с особой экспертизой в:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Color Balance</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Levels & Curves</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Layers Panel</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Clarity & Structure</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Skin Tone</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">LCC Tool</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Crop & Rotate</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Keywords</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Proofing</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Ссылка на галерею -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-images text-[#00A4EF] mr-3"></i>
                                    Фотогалереи
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Примеры моих фотографических работ, обработанных в Capture One, можно найти в моих галереях:
                                    </p>
                                    <div class="mt-4">
                                        <a href="/galleries" class="inline-flex items-center px-4 py-2 bg-[#00A4EF] hover:bg-[#0078D7] text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-images mr-2"></i>
                                            <span>Посмотреть фотогалереи</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Мои галереи демонстрируют профессиональные фотографические проекты, где продвинутые
                                        цветовые инструменты и возможности обработки Capture One были необходимы для достижения конечных результатов.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#00A4EF] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#00A4EF]">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#00A4EF] to-[#0078D7]"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Цветокоррекция</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Съемка по кабелю</span>
                                            <span class="text-sm font-bold text-blue-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Эффективность рабочего процесса</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Управление сессиями</span>
                                            <span class="text-sm font-bold text-yellow-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#00A4EF] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-camera text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Capture One Pro</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>60+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-images text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Обработанных изображений: <strong>5,000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-usb text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Съемок по кабелю: <strong>25+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#00A4EF] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/adobe-lightroom" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#31A8FF] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-image text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Adobe Lightroom</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-black flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-camera text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Фотография</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/color-theory" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-red-500 to-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-palette text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Теория цвета</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/studio-photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-gray-600 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-lightbulb text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Студийная фотография</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#00A4EF] to-[#0078D7] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Профессиональная фото работа?</h3>
                                <p class="text-sm mb-4">Доступен для коммерческой фотографии и проектов редактирования</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#00A4EF] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

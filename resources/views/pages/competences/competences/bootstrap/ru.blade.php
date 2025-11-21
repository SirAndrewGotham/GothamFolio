[x-frontend.layouts.app]
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
                            <a href="/competences/frontend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                Frontend-разработка
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Bootstrap
                                    </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Герой-секция -->
    <section class="py-12 bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-900">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                    <!-- Иконка и основная информация -->
                    <div class="flex-shrink-0">
                        <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-purple-500 to-violet-500 flex items-center justify-center text-white shadow-lg">
                            <i class="fab fa-bootstrap text-4xl"></i>
                        </div>
                    </div>

                    <!-- Основная информация -->
                    <div class="flex-grow text-center lg:text-left">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                            <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Bootstrap</h1>
                            <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-mobile-alt mr-1"></i>
                                            Адаптивный дизайн
                                        </span>
                            </div>
                        </div>
                        <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                            Самый популярный в мире CSS-фреймворк для создания адаптивных, mobile-first веб-сайтов и приложений
                        </p>

                        <!-- Статистика -->
                        <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">8+ лет</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">100+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Проектов</div>
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
                        <!-- О Bootstrap -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                О Bootstrap
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Bootstrap</strong> — это самый популярный в мире инструментарий с открытым исходным кодом для фронтенд-разработки,
                                    включающий переменные и миксины Sass, адаптивную сетку, обширные предварительно созданные компоненты
                                    и мощные JavaScript-плагины. Он помогает разработчикам с легкостью и эффективностью создавать адаптивные, mobile-first проекты в вебе.
                                </p>

                                <h3>Ключевые преимущества</h3>
                                <ul>
                                    <li><strong>Быстрая разработка</strong> - Готовые компоненты и утилиты ускоряют разработку</li>
                                    <li><strong>Адаптивная сетка</strong> - Mobile-first подход с системой брейкпоинтов</li>
                                    <li><strong>Кроссбраузерная совместимость</strong> - Единообразный рендеринг во всех современных браузерах</li>
                                    <li><strong>Настраиваемость</strong> - Обширные возможности темизации с помощью переменных Sass</li>
                                    <li><strong>Большое сообщество</strong> - Огромная экосистема ресурсов и сторонних компонентов</li>
                                    <li><strong>Доступность</strong> - Создан с учетом лучших практик доступности</li>
                                </ul>

                                <h3>Основные возможности</h3>
                                <p>
                                    Bootstrap предоставляет комплексный набор функций для современной веб-разработки:
                                </p>
                                <ul>
                                    <li><strong>Адаптивная сетка</strong> - 12-колоночная fluid-сетка с несколькими брейкпоинтами</li>
                                    <li><strong>Предварительно стилизованные компоненты</strong> - Кнопки, карточки, модальные окна, навбары и многое другое</li>
                                    <li><strong>Утилитарные классы</strong> - Утилиты для отступов, типографики, цветов и отображения</li>
                                    <li><strong>JavaScript-плагины</strong> - Интерактивные компоненты без написания кастомного JavaScript</li>
                                    <li><strong>Кастомизация</strong> - Переменные и миксины Sass для полного контроля над дизайном</li>
                                    <li><strong>Иконки</strong> - Библиотека Bootstrap Icons для единообразной иконографии</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь с Bootstrap -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-purple-500 mr-3"></i>
                                Мой путь с Bootstrap
                            </h2>
                            <div class="content-section">
                                <p>
                                    Я начал использовать Bootstrap в 2015 году с версии 3 и следил за его развитием через
                                    основные выпуски, включая Bootstrap 4 и текущий Bootstrap 5. За 8+ лет я использовал
                                    Bootstrap в бесчисленных проектах, от простых лендингов до сложных корпоративных приложений.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-code text-purple-500 mr-2"></i>
                                            Эволюция версий
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Глубокий опыт работы с Bootstrap 3, 4 и 5, понимание
                                            путей миграции и внедрения новых функций.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-paint-brush text-blue-500 mr-2"></i>
                                            Экспертиза в кастомизации
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Обширный опыт кастомизации тем Bootstrap и
                                            создания уникальных дизайнов с сохранением преимуществ фреймворка.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Мой опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                Мой опыт работы с Bootstrap
                            </h2>
                            <div class="content-section">
                                <p>
                                    Более 8 лет опыта работы с Bootstrap в 100+ проектах позволили мне развить всестороннюю
                                    экспертизу в использовании полного потенциала Bootstrap при создании кастомных дизайнов, соответствующих бренду.
                                </p>

                                <h3>Специализированные навыки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Продвинутое использование сетки</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Разработка кастомных компонентов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Кастомизация и темизация Sass</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Интеграция JavaScript-плагинов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Оптимизация адаптивного дизайна</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Интеграция с инструментами сборки (Webpack, Gulp)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Техники оптимизации производительности</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Тестирование кроссбраузерной совместимости</span>
                                    </div>
                                </div>

                                <h3>Интеграция с фреймворками</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Bootstrap 5</span>
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Bootstrap 4</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Bootstrap 3</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Sass</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">jQuery</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Webpack</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Gulp</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">NPM</span>
                                </div>

                                <h3>Владение компонентами</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                        <h4 class="font-bold text-purple-500 mb-2">Компоненты макета</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Система сетки и утилиты flexbox</li>
                                            <li>• Навигационные панели и хлебные крошки</li>
                                            <li>• Карточки и джамботроны</li>
                                            <li>• Модальные окна и подсказки</li>
                                            <li>• Карусели и аккордеоны</li>
                                        </ul>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                        <h4 class="font-bold text-purple-500 mb-2">Компоненты форм</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Кастомные элементы управления</li>
                                            <li>• Группы ввода и валидация</li>
                                            <li>• Выпадающие меню и ползунки</li>
                                            <li>• Чекбоксы и радиокнопки</li>
                                            <li>• Компоненты загрузки файлов</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Продвинутая кастомизация -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-purple-500 mr-3"></i>
                                Продвинутая кастомизация и темизация
                            </h2>
                            <div class="content-section">
                                <h3>Кастомизация Sass</h3>
                                <p>
                                    У меня большой опыт кастомизации Bootstrap через Sass:
                                </p>
                                <ul>
                                    <li><strong>Переопределение переменных</strong> - Настройка цветов, отступов и типографики</li>
                                    <li><strong>Модификация компонентов</strong> - Расширение и изменение существующих компонентов</li>
                                    <li><strong>Генерация утилит</strong> - Создание кастомных утилитарных классов</li>
                                    <li><strong>Использование миксинов</strong> - Использование миксинов Bootstrap для кастомных компонентов</li>
                                    <li><strong>Модульный импорт</strong> - Импорт только необходимых компонентов для оптимизации</li>
                                    <li><strong>Создание тем</strong> - Создание полных кастомных тем с нуля</li>
                                </ul>

                                <h3>Интеграция в процесс сборки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Инструменты сборки</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Интеграция с Webpack, Gulp и другими системами сборки для оптимизированного вывода
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Оптимизация производительности</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Tree-shaking неиспользуемых компонентов и оптимизация доставки CSS
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Стратегии CDN</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Реализация доставки через CDN со стратегиями отката
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Управление версиями</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Управление зависимостями Bootstrap и обновлениями версий
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Реальные приложения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-layer-group text-purple-500 mr-3"></i>
                                Реальные приложения и проекты
                            </h2>
                            <div class="content-section">
                                <h3>Типы проектов</h3>
                                <p>
                                    Я успешно внедрял Bootstrap в различных реальных сценариях:
                                </p>
                                <ul>
                                    <li><strong>Корпоративные сайты</strong> - Профессиональные бизнес-сайты с единообразным брендингом</li>
                                    <li><strong>E-commerce платформы</strong> - Каталоги товаров и интерфейсы покупок</li>
                                    <li><strong>Административные панели</strong> - Сложные интерфейсы визуализации и управления данными</li>
                                    <li><strong>Лендинги</strong> - Маркетинговые страницы с высокой конверсией</li>
                                    <li><strong>Веб-приложения</strong> - Интерактивные одностраничные приложения</li>
                                </ul>

                                <h3>Паттерны интеграции</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Бэкенд-интеграция</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Интеграция с Laravel, Django и другими бэкенд-фреймворками
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">JavaScript-фреймворки</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Использование с Vue.js, React и другими современными фронтенд-фреймворками
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Интеграция с CMS</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Внедрение в WordPress, Joomla и другие системы управления контентом
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Прогрессивные веб-приложения</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Создание PWA с Bootstrap для mobile-first взаимодействий
                                        </p>
                                    </div>
                                </div>

                                <h3>Значимые проекты</h3>
                                <ul>
                                    <li><strong>Корпоративная CRM-система</strong> - Кастомная тема Bootstrap для крупномасштабного бизнес-приложения</li>
                                    <li><strong>Образовательная платформа</strong> - Адаптивная система управления обучением</li>
                                    <li><strong>Медицинский портал</strong> - Доступный интерфейс управления пациентами</li>
                                    <li><strong>E-commerce маркетплейс</strong> - Мультивендорная платформа с кастомными компонентами</li>
                                    <li><strong>Правительственный портал</strong> - Соответствующий WCAG сайт государственных услуг</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карточка уровня владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее владение</span>
                                        <span class="text-sm font-bold text-purple-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-violet-500"
                                             data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Система сетки и макет</span>
                                        <span class="text-sm font-bold text-blue-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Кастомизация и темизация</span>
                                        <span class="text-sm font-bold text-green-500">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Разработка компонентов</span>
                                        <span class="text-sm font-bold text-yellow-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Оптимизация производительности</span>
                                        <span class="text-sm font-bold text-red-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-purple-500 mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>8+ лет</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-layer-group text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>100+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code-branch text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Версии: <strong>3, 4, 5</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-mobile-alt text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Подход: <strong>Mobile-First</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-paint-brush text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Темы: <strong>Кастомные и премиум</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Версии Bootstrap -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-history text-purple-500 mr-2"></i>
                                Опыт работы с версиями
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Bootstrap 3 - Легаси проекты</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Bootstrap 4 - Flexbox и карточки</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Bootstrap 5 - Удаление jQuery</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-spinner text-xs"></i>
                                    </div>
                                    <span class="text-sm">Интеграция Bootstrap Icons</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Будущий Bootstrap 6</span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-purple-500 mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-css3-alt text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">CSS</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                                <a href="/competences/sass" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-pink-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-sass text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">Sass</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                                <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-js text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">JavaScript</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                                <a href="/competences/responsive-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-mobile-alt text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">Адаптивный дизайн</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-purple-500 to-violet-500 rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Нужна экспертиза по Bootstrap?</h3>
                            <p class="text-sm mb-4">Давайте создадим адаптивные, красивые интерфейсы</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-purple-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

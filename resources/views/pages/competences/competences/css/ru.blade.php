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
                <nav class="flex fade-in" aria-label="Хлебные крошки">
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
                                    Frontend разработка
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        CSS
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-css3-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">CSS</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-paint-brush mr-1"></i>
                                            Веб-стилизация
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Каскадные таблицы стилей для создания красивых, адаптивных и доступных веб-интерфейсов с современными техниками верстки и анимациями
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">12+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">200+</div>
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
                            <!-- О CSS -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    О CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>CSS (Cascading Style Sheets)</strong> - это язык, используемый для описания представления веб-страниц,
                                        включая цвета, макет и шрифты. Он позволяет отделить представление от содержания,
                                        улучшая доступность контента и предоставляя большую гибкость и контроль в определении характеристик представления.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Разделение ответственности</strong> - Отделение стилей от HTML-структуры</li>
                                        <li><strong>Адаптивный дизайн</strong> - Создание макетов, работающих на всех размерах устройств</li>
                                        <li><strong>Поддерживаемость</strong> - Централизованная стилизация для согласованных систем дизайна</li>
                                        <li><strong>Производительность</strong> - Эффективные возможности рендеринга и анимации</li>
                                        <li><strong>Доступность</strong> - Улучшенный пользовательский опыт для всех пользователей</li>
                                        <li><strong>Кроссбраузерная совместимость</strong> - Единообразный рендеринг на всех платформах</li>
                                    </ul>

                                    <h3>Современные возможности CSS</h3>
                                    <p>
                                        У меня большой опыт работы с современными спецификациями и функциями CSS:
                                    </p>
                                    <ul>
                                        <li><strong>CSS Grid Layout</strong> - Двухмерная система макетов для сложных интерфейсов</li>
                                        <li><strong>Flexbox</strong> - Одномерная модель макета для выравнивания компонентов</li>
                                        <li><strong>Пользовательские свойства (CSS переменные)</strong> - Динамические значения и темизация</li>
                                        <li><strong>CSS анимации и переходы</strong> - Плавные взаимодействия и микро-взаимодействия</li>
                                        <li><strong>CSS фильтры и режимы наложения</strong> - Визуальные эффекты и креативная стилизация</li>
                                        <li><strong>Контейнерные запросы</strong> - Компонентный адаптивный дизайн</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в CSS -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-blue-500 mr-3"></i>
                                    Мой путь в CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Мой путь в CSS начался более 12 лет назад, начиная с CSS2 и развиваясь через CSS3 и современные спецификации.
                                        Я стал свидетелем и адаптировался к крупным изменениям в веб-стилизации, от табличных макетов до современных систем CSS Grid и Flexbox.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-history text-blue-500 mr-2"></i>
                                                Опыт эволюции
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Глубокое понимание эволюции CSS от базовой стилизации до современных
                                                систем макетов и продвинутых визуальных эффектов.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-mobile-alt text-purple-500 mr-2"></i>
                                                Экспертиза в адаптивности
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Большой опыт создания адаптивных дизайнов, которые работают
                                                безупречно на всех устройствах и размерах экранов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                    Мой опыт с CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        С 12+ годами опыта CSS в 200+ проектах, я освоил как фундаментальные концепции,
                                        так и передовые техники для создания исключительных пользовательских интерфейсов и опыта.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Продвинутые системы макетов (Grid & Flexbox)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Архитектура CSS и методологии (BEM, SMACSS)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Сложные анимации и переходы</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Техники оптимизации производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стратегии кроссбраузерной совместимости</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стилизация, ориентированная на доступность</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Препроцессоры CSS (Sass, Less)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Современные возможности CSS и полифиллы</span>
                                        </div>
                                    </div>

                                    <h3>Системы макетов и дизайна</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">CSS Grid</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Flexbox</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">CSS Переменные</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Анимации</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Трансформации</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Медиазапросы</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Контейнерные запросы</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Viewport единицы</span>
                                    </div>

                                    <h3>Продвинутые техники</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Техники верстки</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Сложные области шаблонов Grid</li>
                                                <li>• Продвинутое выравнивание Flexbox</li>
                                                <li>• Реализации CSS Subgrid</li>
                                                <li>• Многоколоночные макеты</li>
                                                <li>• Контроль соотношения сторон</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Визуальные эффекты</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Пользовательские формы clip-path</li>
                                                <li>• Фоновые фильтры и режимы наложения</li>
                                                <li>• Сложные градиентные паттерны</li>
                                                <li>• 3D трансформации и перспектива</li>
                                                <li>• Анимации, управляемые прокруткой</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Современные возможности CSS -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-blue-500 mr-3"></i>
                                    Современные возможности и техники CSS
                                </h2>
                                <div class="content-section">
                                    <h3>CSS Grid и системы макетов</h3>
                                    <p>
                                        У меня большой опыт работы с современными системами макетов:
                                    </p>
                                    <ul>
                                        <li><strong>CSS Grid</strong> - Сложные двухмерные макеты с точным контролем</li>
                                        <li><strong>Flexbox</strong> - Одномерные макеты для выравнивания компонентов</li>
                                        <li><strong>Многоколоночный макет</strong> - Потоки контента в стиле газет</li>
                                        <li><strong>CSS Subgrid</strong> - Возможности выравнивания вложенных сеток</li>
                                        <li><strong>Контейнерные запросы</strong> - Компонентный адаптивный дизайн</li>
                                        <li><strong>Логические свойства</strong> - Направленно-независимые системы макетов</li>
                                    </ul>

                                    <h3>Анимация и взаимодействие</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">CSS анимации</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Анимации по ключевым кадрам для сложного моушн-дизайна и микро-взаимодействий
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Переходы</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Плавные изменения состояний и hover-эффекты с функциями времени
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Трансформации</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                2D и 3D трансформации для креативных визуальных эффектов
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Поведение прокрутки</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Плавная прокрутка, привязка прокрутки и анимации, управляемые прокруткой
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Производительность и лучшие практики -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-blue-500 mr-3"></i>
                                    Производительность и лучшие практики
                                </h2>
                                <div class="content-section">
                                    <h3>Стратегии оптимизации</h3>
                                    <p>
                                        Я применяю комплексные техники оптимизации CSS:
                                    </p>
                                    <ul>
                                        <li><strong>Критический CSS</strong> - Встроенные стили для быстрого рендеринга</li>
                                        <li><strong>Минификация CSS</strong> - Уменьшение размера файла для быстрой загрузки</li>
                                        <li><strong>Эффективные селекторы</strong> - Оптимизация производительности селекторов</li>
                                        <li><strong>Архитектура CSS</strong> - Масштабируемая и поддерживаемая организация кода</li>
                                        <li><strong>Прогрессивное улучшение</strong> - Грациозная деградация для старых браузеров</li>
                                        <li><strong>Мониторинг производительности</strong> - Измерение и оптимизация производительности рендеринга</li>
                                    </ul>

                                    <h3>Методологии и архитектура</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Методология BEM</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Block Element Modifier для масштабируемой и поддерживаемой архитектуры CSS
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">SMACSS</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Scalable and Modular Architecture для организации CSS
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">ITCSS</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Inverted Triangle CSS для управляемой специфичности и организации
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">OOCSS</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Object-Oriented CSS для переиспользуемых и гибких компонентов
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Значительные проекты оптимизации</h3>
                                    <ul>
                                        <li><strong>E-commerce платформа</strong> - Уменьшил размер CSS бандла на 60% через оптимизацию</li>
                                        <li><strong>Новостной портал</strong> - Внедрил критический CSS для 40% ускорения начального рендеринга</li>
                                        <li><strong>Веб-приложение</strong> - Создал поддерживаемую архитектуру CSS для большой команды</li>
                                        <li><strong>Мобильное приложение</strong> - Оптимизировал анимации для производительности 60fps</li>
                                        <li><strong>Дизайн-система</strong> - Построил масштабируемую основу CSS для корпоративных продуктов</li>
                                    </ul>
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
                                            <span class="text-sm font-bold text-blue-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Системы макетов</span>
                                            <span class="text-sm font-bold text-purple-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Анимации и эффекты</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Производительность</span>
                                            <span class="text-sm font-bold text-yellow-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Кроссбраузерная поддержка</span>
                                            <span class="text-sm font-bold text-red-500">86%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="86%" style="width: 0%"></div>
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
                                        <span class="text-sm">Опыт: <strong>12+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code-branch text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>200+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-layer-group text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Системы макетов: <strong>Grid & Flexbox</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-magic text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Анимации: <strong>Продвинутый CSS</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tachometer-alt text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Производительность: <strong>Оптимизирована</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Спецификации CSS -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-file-code text-blue-500 mr-2"></i>
                                    Спецификации CSS
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">CSS Grid Layout (Уровень 1, 2, 3)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Flexbox (Все версии)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Пользовательские свойства CSS</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Контейнерные запросы</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Вложенность CSS (Уровень 1)</span>
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
                                    <a href="/competences/html" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-html5 text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">HTML</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/sass" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-pink-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-sass text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Sass</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">JavaScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/responsive-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-mobile-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Адаптивный дизайн</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна экспертиза в CSS?</h3>
                                <p class="text-sm mb-4">Давайте создадим красивые, производительные интерфейсы</p>
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

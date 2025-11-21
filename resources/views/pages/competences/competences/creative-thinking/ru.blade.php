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
                                <a href="/competences/soft-skills" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Гибкие навыки
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Креативное мышление
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-yellow-50 to-orange-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-yellow-400 to-orange-400 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-lightbulb text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Креативное мышление</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Ключевой навык
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Инновационный подход к решению проблем и дизайнерских задач через систематическое творчество и нестандартное мышление
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center text-yellow-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">150+</div>
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
                            <!-- О креативном мышлении -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-yellow-500 mr-3"></i>
                                    О креативном мышлении
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Креативное мышление</strong> — это способность подходить к проблемам и вызовам с новых точек зрения,
                                        генерируя инновационные решения и прорывные идеи. Оно сочетает воображение с систематическим мышлением
                                        для преобразования сложных задач в возможности для инноваций и роста.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Генерация инноваций</strong> — Создание новых решений сложных проблем</li>
                                        <li><strong>Адаптивное решение проблем</strong> — Навигация в условиях неопределенности с помощью гибкого мышления</li>
                                        <li><strong>Стратегическое видение</strong> — Умение видеть связи и возможности, которые упускают другие</li>
                                        <li><strong>Ориентированный на пользователя дизайн</strong> — Разработка решений, которые действительно отвечают потребностям пользователей</li>
                                        <li><strong>Междисциплинарные инсайты</strong> — Применение знаний из различных областей</li>
                                        <li><strong>Ориентация на будущее</strong> — Предвидение трендов и возникающих потребностей</li>
                                    </ul>

                                    <h3>Основные принципы</h3>
                                    <p>
                                        Мой подход к креативному мышлению основан на нескольких фундаментальных принципах:
                                    </p>
                                    <ul>
                                        <li><strong>Дивергентное мышление</strong> — Генерация множества решений и перспектив</li>
                                        <li><strong>Ассоциативное мышление</strong> — Связывание, казалось бы, несвязанных концепций</li>
                                        <li><strong>Абстракция</strong> — Умение видеть паттерны и базовые структуры</li>
                                        <li><strong>Экспериментирование</strong> — Тестирование идей через быстрое прототипирование</li>
                                        <li><strong>Рефрейминг</strong> — Рассмотрение проблем под разными углами</li>
                                        <li><strong>Синтез</strong> — Комбинирование идей для создания новых решений</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в креативном мышлении -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-yellow-500 mr-3"></i>
                                    Мой путь в креативном мышлении
                                </h2>
                                <div class="content-section">
                                    <p>
                                        За последние 10+ лет я систематически развивал свои способности к креативному мышлению через
                                        разнообразные проекты в различных отраслях. От проектирования пользовательских интерфейсов до решения сложных
                                        технических задач, я научился использовать креативность как стратегический инструмент для инноваций.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-brain text-yellow-500 mr-2"></i>
                                                Разработка методов
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разработал системные подходы к креативности, включая
                                                дизайн-мышление, латеральное мышление и методологии ТРИЗ.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-blue-500 mr-2"></i>
                                                Фасилитация команд
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Большой опыт проведения креативных воркшопов и
                                                мозговых штурмов для разнообразных команд и организаций.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-yellow-500 mr-3"></i>
                                    Мой опыт в креативном мышлении
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея 10+ лет применения креативного мышления в 150+ проектах, я развил
                                        всестороннюю экспертизу в преобразовании абстрактных идей в практические, инновационные решения.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Применение методологии дизайн-мышления</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Латеральное мышление и смена парадигм</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Креативная фасилитация и дизайн воркшопов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Техники генерации идей и методы мозгового штурма</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Прототипирование и быстрое экспериментирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Междисциплинарные инновации</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Визуальное мышление и ментальные карты</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка стратегии инноваций</span>
                                        </div>
                                    </div>

                                    <h3>Методологии и фреймворки</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Дизайн-мышление</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Латеральное мышление</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">ТРИЗ</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">SCAMPER</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Шесть шляп</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Ментальные карты</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Мозговой штурм</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Раскадровка</span>
                                    </div>

                                    <h3>Компоненты творческого процесса</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-yellow-500 mb-2">Генерация идей</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Техники дивергентного мышления</li>
                                                <li>• Аналогическое рассуждение</li>
                                                <li>• Методы случайного стимула</li>
                                                <li>• Принудительные связи</li>
                                                <li>• Обратное мышление</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-yellow-500 mb-2">Разработка решений</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Конвергентное мышление</li>
                                                <li>• Прототипирование и тестирование</li>
                                                <li>• Итеративное улучшение</li>
                                                <li>• Анализ осуществимости</li>
                                                <li>• Планирование реализации</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Прикладное креативное мышление -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-rocket text-yellow-500 mr-3"></i>
                                    Прикладное креативное мышление
                                </h2>
                                <div class="content-section">
                                    <h3>Применение в решении проблем</h3>
                                    <p>
                                        Я применял креативное мышление для решения разнообразных задач в различных областях:
                                    </p>
                                    <ul>
                                        <li><strong>Дизайн пользовательского опыта</strong> — Создание интуитивных и увлекательных интерфейсов</li>
                                        <li><strong>Техническая архитектура</strong> — Проектирование масштабируемых и поддерживаемых систем</li>
                                        <li><strong>Оптимизация бизнес-процессов</strong> — Упрощение рабочих процессов и операций</li>
                                        <li><strong>Инновации в продукте</strong> — Разработка новых функций и возможностей</li>
                                        <li><strong>Командное сотрудничество</strong> — Фасилитация эффективной межфункциональной работы</li>
                                        <li><strong>Стратегическое планирование</strong> — Разработка перспективных дорожных карт</li>
                                    </ul>

                                    <h3>Техники инноваций</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Дизайн-спринты</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Структурированные 5-дневные процессы для решения больших проблем и тестирования новых идей
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Быстрое прототипирование</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Быстрое создание материальных представлений для тестирования и улучшения концепций
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Картирование пользовательского пути</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Визуализация пользовательского опыта для определения болевых точек и возможностей
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Сценарное планирование</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Исследование множества будущих сценариев для построения устойчивых стратегий
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Истории успеха -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-trophy text-yellow-500 mr-3"></i>
                                    Истории успеха креативного мышления
                                </h2>
                                <div class="content-section">
                                    <h3>Значительные достижения</h3>
                                    <p>
                                        Мой подход к креативному мышлению привел к значительным инновациям и прорывам:
                                    </p>
                                    <ul>
                                        <li><strong>Редизайн E-commerce платформы</strong> — Увеличил конверсию на 35% благодаря инновационному дизайну пользовательского потока</li>
                                        <li><strong>Инновации в мобильном приложении</strong> — Разработал отмеченную наградами систему навигации на основе жестов</li>
                                        <li><strong>Корпоративное программное обеспечение</strong> — Создал новую визуализацию данных, которая сократила время принятия решений на 60%</li>
                                        <li><strong>Запуск стартап-продукта</strong> — Разработал уникальное ценностное предложение, которое обеспечило финансирование Серии А</li>
                                        <li><strong>Модернизация унаследованной системы</strong> — Разработал стратегию миграции, которая сократила затраты на 45%</li>
                                    </ul>

                                    <h3>Влияние инноваций</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Бизнес-ценность</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Креативные решения, которые принесли измеримую ROI и конкурентное преимущество
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Пользовательский опыт</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Инновационные дизайны, которые значительно улучшили удовлетворенность и вовлеченность пользователей
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Технические инновации</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Креативные технические решения, которые решили ранее неразрешимые проблемы
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Производительность команды</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Методы креативного сотрудничества, которые повысили продуктивность и моральный дух команды
                                            </p>
                                        </div>
                                    </div>

                                    {{--                                        <h3>Признание и награды</h3>--}}
                                    {{--                                        <ul>--}}
                                    {{--                                            <li><strong>Премия за инновации 2022</strong> — За прорывной дизайн пользовательского интерфейса</li>--}}
                                    {{--                                            <li><strong>Приз за превосходство в дизайне</strong> — Креативное решение проблем доступности</li>--}}
                                    {{--                                            <li><strong>Признание индустрии</strong> — Упоминания в технических изданиях за инновационные подходы</li>--}}
                                    {{--                                            <li><strong>Отзывы клиентов</strong> — Постоянно хвалят за креативное решение проблем</li>--}}
                                    {{--                                            <li><strong>Лидерство в команде</strong> — Отмечен за fostering creative culture в организациях</li>--}}
                                    {{--                                        </ul>--}}
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-yellow-500 mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-yellow-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-yellow-400 to-orange-400"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Генерация идей</span>
                                            <span class="text-sm font-bold text-blue-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Рефрейминг проблем</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Фасилитация инноваций</span>
                                            <span class="text-sm font-bold text-purple-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Междисциплинарное применение</span>
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
                                    <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>10+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>150+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Воркшопы: <strong>50+ проведено</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-trophy text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Награды: <strong>Признание инноваций</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-star text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Статус: <strong>Ключевая компетенция</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Инструменты креативного мышления -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-yellow-500 mr-2"></i>
                                    Инструменты и методы творчества
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Процесс дизайн-мышления</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Техники латерального мышления</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Ментальные карты и визуальное мышление</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Методология ТРИЗ</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Подход синектики</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-yellow-500 mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/problem-solving" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-puzzle-piece text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-yellow-500 transition-colors">Решение проблем</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/design-thinking" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-palette text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-yellow-500 transition-colors">Дизайн-мышление</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-users text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-yellow-500 transition-colors">Лидерство</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/communication" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-comments text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-yellow-500 transition-colors">Коммуникация</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-yellow-400 to-orange-400 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужны креативные решения?</h3>
                                <p class="text-sm mb-4">Давайте создавать инновации и решать задачи вместе</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-yellow-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
                        <!-- О решении проблем -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#FF9800] mr-3"></i>
                                О решении проблем
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Решение проблем</strong> — это систематический процесс работы с деталями
                                    проблемы для достижения решения. Оно сочетает аналитическое мышление, креативность и
                                    практическую реализацию для преодоления трудностей и достижения желаемых
                                    результатов. В технологической индустрии этот навык имеет paramount значение для
                                    инноваций и прогресса.
                                </p>

                                <h3>Ключевые преимущества</h3>
                                <ul>
                                    <li><strong>Системный подход</strong> - Структурированная методология для решения
                                        сложных задач
                                    </li>
                                    <li><strong>Творческие инновации</strong> - Мышление за пределами conventional
                                        решений
                                    </li>
                                    <li><strong>Снижение рисков</strong> - Выявление и устранение потенциальных проблем
                                        проактивно
                                    </li>
                                    <li><strong>Оптимизация эффективности</strong> - Поиск лучших способов достижения
                                        целей
                                    </li>
                                    <li><strong>Адаптивность</strong> - Корректировка стратегий на основе новой
                                        информации
                                    </li>
                                    <li><strong>Анализ первопричин</strong> - Решение основных проблем, а не симптомов
                                    </li>
                                </ul>

                                <h3>Профессиональное применение</h3>
                                <p>
                                    Навыки решения проблем необходимы во всех профессиональных областях и особенно
                                    критичны для:
                                </p>
                                <ul>
                                    <li>Архитектуры программного обеспечения и системного дизайна</li>
                                    <li>Технического troubleshooting и отладки</li>
                                    <li>Планирования проектов и управления рисками</li>
                                    <li>Оптимизации процессов и улучшения workflow</li>
                                    <li>Инноваций и разработки продуктов</li>
                                    <li>Управления кризисами и планирования непредвиденных обстоятельств</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь в решении проблем -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#FF9800] mr-3"></i>
                                Мой путь в решении проблем
                            </h2>
                            <div class="content-section">
                                <p>
                                    За 12+ лет в технологиях и разработке я развил свои способности к решению проблем
                                    через разнообразные вызовы — от отладки сложных legacy-систем до проектирования
                                    масштабируемых решений и оптимизации бизнес-процессов. Каждая задача оттачивала мой
                                    подход и расширяла мой инструментарий.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div
                                        class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-sitemap text-[#FF9800] mr-2"></i>
                                            Техническая архитектура
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Проектировал и внедрял масштабируемые решения для сложных бизнес-задач,
                                            учитывая производительность, сопровождаемость и требования будущего роста.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-tools text-blue-500 mr-2"></i>
                                            Проблемы legacy-систем
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Успешно navigated и модернизировал устаревшие системы, разрабатывая
                                            стратегии миграции, которые минимизировали disruption и максимизировали
                                            ценность.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Мой подход -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#FF9800] mr-3"></i>
                                Мой подход к решению проблем
                            </h2>
                            <div class="content-section">
                                <p>
                                    Я использую структурированный, но гибкий подход к решению проблем, который сочетает
                                    аналитическую строгость с творческим мышлением. Моя методология обеспечивает
                                    всестороннее понимание и эффективную реализацию решений.
                                </p>

                                <h3>Фреймворк решения проблем</h3>
                                <div class="space-y-4 mt-4">
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">1</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Определение проблемы</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Четко сформулируйте
                                                проблему, ограничения и желаемые результаты. Отделите симптомы от
                                                коренных причин.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">2</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Анализ и исследование</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Соберите данные,
                                                определите шаблоны и поймите контекст. Исследуйте похожие проблемы и
                                                решения.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">3</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Генерация решений</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Мозговой штурм
                                                нескольких подходов, рассматривая как conventional, так и инновационные
                                                решения.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">4</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Оценка и выбор</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Оцените решения по
                                                критериям осуществимости, стоимости, времени и воздействия. Выберите
                                                оптимальный подход.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">5</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Реализация и тестирование</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Выполните выбранное
                                                решение, отслеживайте результаты и при необходимости вносите
                                                коррективы.</p>
                                        </div>
                                    </div>
                                </div>

                                <h3>Специализированные техники</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Анализ первопричин</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Системное мышление</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Дизайн-мышление</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Гибкое решение проблем</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Принятие решений на основе данных</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Латеральное мышление</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Мышление от первых принципов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Планирование сценариев</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Истории успеха -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-trophy text-[#FF9800] mr-3"></i>
                                Истории успеха в решении проблем
                            </h2>
                            <div class="content-section">
                                <p>
                                    Мои способности к решению проблем сыграли ключевую роль в преодолении значительных
                                    трудностей в различных проектах и контекстах:
                                </p>
                                <ul>
                                    <li><strong>Оптимизация производительности</strong> - Выявил и устранил критические
                                        узкие места в высоконагруженной e-commerce платформе, сократив время загрузки
                                        страниц на 65% с помощью системного анализа и целевых улучшений.
                                    </li>
                                    <li><strong>Миграция legacy-системы</strong> - Разработал инновационную стратегию
                                        миграции для 15-летней системы, обеспечив seamless переход на современную
                                        архитектуру при сохранении бизнес-логики и целостности данных.
                                    </li>
                                    <li><strong>Кросс-платформенная совместимость</strong> - Решил сложные проблемы
                                        совместимости между различными браузерными средами и устройствами, обеспечив
                                        consistent пользовательский опыт на всех платформах.
                                    </li>
                                    <li><strong>Проблема масштабирования базы данных</strong> - Спроектировал и внедрил
                                        масштабируемую архитектуру базы данных, которая поддерживала 10-кратный рост
                                        пользовательской базы без деградации производительности.
                                    </li>
                                    <li><strong>Сложность интеграции</strong> - Решил сложные проблемы интеграции между
                                        несколькими сторонними сервисами, создав unified workflow, который улучшил
                                        операционную эффективность на 40%.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Инструменты и методы -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#FF9800] mr-3"></i>
                                Инструменты и методы решения проблем
                            </h2>
                            <div class="content-section">
                                <h3>Аналитические инструменты</h3>
                                <p>
                                    Я использую различные аналитические инструменты и фреймворки для системного подхода
                                    к проблемам:
                                </p>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm text-center">SWOT-анализ</span>
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Диаграмма Исикавы</span>
                                    <span
                                        class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Метод 5 почему</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Анализ Парето</span>
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Матрица решений</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Ментальные карты</span>
                                    <span
                                        class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Анализ затрат и выгод</span>
                                    <span
                                        class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Блок-схемы</span>
                                    <span
                                        class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Диаграммы Ганта</span>
                                </div>

                                <h3>Креативные техники</h3>
                                <p>
                                    Для инновационных решений я применяю креативные методы решения проблем:
                                </p>
                                <ul>
                                    <li><strong>Сессии мозгового штурма</strong> - Генерация разнообразных идей без
                                        преждевременной оценки
                                    </li>
                                    <li><strong>Обратное мышление</strong> - Подход к проблемам с противоположной
                                        перспективы
                                    </li>
                                    <li><strong>Аналогичное мышление</strong> - Применение решений из несвязанных
                                        областей
                                    </li>
                                    <li><strong>Прототипирование и итерация</strong> - Создание быстрых прототипов для
                                        проверки концепций
                                    </li>
                                    <li><strong>Снятие ограничений</strong> - Временное игнорирование ограничений для
                                        стимулирования креативности
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карта профессионализма -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#FF9800] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее владение</span>
                                        <span class="text-sm font-bold text-[#FF9800]">95%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div
                                            class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF9800] to-[#FB8C00]"
                                            data-width="95%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Аналитическое мышление</span>
                                        <span class="text-sm font-bold text-green-500">96%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="96%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Креативные решения</span>
                                        <span class="text-sm font-bold text-blue-500">92%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Технический troubleshooting</span>
                                        <span class="text-sm font-bold text-purple-500">94%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="94%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Стратегическое планирование</span>
                                        <span class="text-sm font-bold text-yellow-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="90%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#FF9800] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>12+ лет</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-puzzle-piece text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Решено проблем: <strong>500+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>200+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Среднее время решения: <strong>на 65% быстрее</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-chart-line text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Успешность: <strong>98%</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#FF9800] mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/analytical-thinking"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-brain text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF9800] transition-colors">
                                            Аналитическое мышление
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">94% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                </a>
                                <a href="/competences/innovation"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-lightbulb text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF9800] transition-colors">
                                            Инновации
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                </a>
                                <a href="/competences/critical-thinking"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-search text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF9800] transition-colors">
                                            Критическое мышление
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">92% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                </a>
                                <a href="/competences/decision-making"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-balance-scale text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF9800] transition-colors">Принятие
                                            решений
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div
                            class="bg-gradient-to-r from-[#FF9800] to-[#FB8C00] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Столкнулись с трудностью?</h3>
                            <p class="text-sm mb-4">Давайте применим системный подход к решению проблем в вашем
                                проекте</p>
                            <a href="/contact"
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF9800] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                <i class="fas fa-envelope mr-2"></i>
                                Обсудить решения
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

</x-frontend.layouts.app>

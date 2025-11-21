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
                                <a href="/competences/soft-skills"
                                   class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Гибкие навыки
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Тайм-менеджмент
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-gray-50 to-blue-gray-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div
                                class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#607D8B] to-[#455A64] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-clock text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 timemanagement-gradient">
                                    Тайм-менеджмент</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span
                                            class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Ключевой навык
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Эффективная организация и расстановка приоритетов задач и сроков. Максимизация
                                продуктивности за счет стратегического планирования и сфокусированного выполнения.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-[#607D8B] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">90%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#607D8B] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Профессиональный опыт
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#607D8B] mr-3">
                                        <i class="fas fa-check-double"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">98%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Успешность сроков</div>
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
                            <!-- О тайм-менеджменте -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#607D8B] mr-3"></i>
                                    О тайм-менеджменте
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Тайм-менеджмент</strong> — это процесс организации и планирования
                                        распределения вашего времени между конкретными видами деятельности для
                                        максимизации эффективности и продуктивности.
                                        В профессиональном контексте это включает стратегическое расстановку
                                        приоритетов, управление сроками и оптимизацию рабочих процессов для достижения
                                        оптимальных результатов.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Повышенная продуктивность</strong> - достижение большего за меньшее
                                            время благодаря эффективным рабочим процессам
                                        </li>
                                        <li><strong>Снижение стресса</strong> - эффективное управление рабочей нагрузкой
                                            для предотвращения перегрузки
                                        </li>
                                        <li><strong>Лучшее принятие решений</strong> - выделение времени на
                                            высокоэффективные виды деятельности
                                        </li>
                                        <li><strong>Улучшенное качество</strong> - выделение соответствующего времени на
                                            каждую задачу
                                        </li>
                                        <li><strong>Улучшенная репутация</strong> - постоянное соблюдение сроков и
                                            обязательств
                                        </li>
                                        <li><strong>Баланс работы и личной жизни</strong> - создание пространства для
                                            личного и профессионального роста
                                        </li>
                                    </ul>

                                    <h3>Профессиональное применение</h3>
                                    <p>
                                        Эффективный тайм-менеджмент имеет решающее значение во всех профессиональных
                                        областях и особенно важен для:
                                    </p>
                                    <ul>
                                        <li>Планирования проектов и управления сроками</li>
                                        <li>Координации нескольких проектов и переключения между задачами</li>
                                        <li>Подготовки к встречам и эффективного сотрудничества</li>
                                        <li>Личной продуктивности и управления фокусом</li>
                                        <li>Оптимизации рабочих процессов команды и планирования загрузки</li>
                                        <li>Стратегического планирования и достижения долгосрочных целей</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в тайм-менеджменте -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#607D8B] mr-3"></i>
                                    Мой путь в тайм-менеджменте
                                </h2>
                                <div class="content-section">
                                    <p>
                                        За 10+ лет работы на требовательных технических должностях я отточил свой подход
                                        к тайм-менеджменту
                                        через непрерывное обучение и практическое применение. От ранних
                                        трудностей с многозадачностью до овладения сфокусированной работой и
                                        стратегическим планированием,
                                        мой путь был постоянным улучшением и адаптацией.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div
                                            class="bg-gradient-to-br from-gray-50 to-blue-gray-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-bullseye text-[#607D8B] mr-2"></i>
                                                Стратегическое планирование
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разработал системные подходы к расстановке приоритетов задач, которые
                                                гарантируют, что
                                                высокоэффективные виды деятельности получают соответствующее внимание и
                                                ресурсы.
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-hourglass-half text-blue-500 mr-2"></i>
                                                Мастерство сроков
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Достиг 98% показателя своевременной сдачи в более чем 200+ проектах
                                                благодаря
                                                тщательному планированию, выделению буферного времени и проактивному
                                                управлению рисками.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Моя система тайм-менеджмента -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#607D8B] mr-3"></i>
                                    Моя система тайм-менеджмента
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я использую комплексную систему тайм-менеджмента, которая сочетает проверенные
                                        методики
                                        с личными адаптациями. Эта система обеспечивает стабильную продуктивность,
                                        сохраняя
                                        гибкость для непредвиденных challenges и возможностей.
                                    </p>

                                    <h3>Основная структура</h3>
                                    <div class="space-y-4 mt-4">
                                        <div class="flex items-start">
                                            <div
                                                class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Стратегическое планирование</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Еженедельные и
                                                    ежедневные сессии планирования для согласования задач с целями и
                                                    определения приоритетов.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div
                                                class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Расстановка приоритетов задач</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Использование
                                                    матрицы Эйзенхауэра и метода ABCDE для категоризации задач по
                                                    важности и срочности.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div
                                                class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Сфокусированное выполнение</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Временные блоки и
                                                    техника Pomodoro для углубленной работы и поддержания
                                                    концентрации.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div
                                                class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Обзор и адаптация</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Ежедневные и
                                                    еженедельные обзоры для оценки прогресса и корректировки стратегий
                                                    по мере необходимости.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <h3>Ключевые техники</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Временные блоки</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Техника Pomodoro</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Матрица Эйзенхауэра</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Getting Things Done (GTD)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eat That Frog</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Принцип 80/20</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Групповая обработка</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Правило двух минут</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Истории успеха -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-trophy text-[#607D8B] mr-3"></i>
                                    Истории успеха в тайм-менеджменте
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Мой опыт в тайм-менеджменте неизменно приносил исключительные результаты в
                                        различных профессиональных контекстах:
                                    </p>
                                    <ul>
                                        <li><strong>Сдача сложных проектов</strong> - Успешно управлял 3 одновременными
                                            крупными проектами с пересекающимися сроками, сдал все вовремя благодаря
                                            тщательному распределению времени и управлению приоритетами
                                        </li>
                                        <li><strong>Трансформация продуктивности команды</strong> - Внедрил систему
                                            тайм-менеджмента для команды из 12 человек, что увеличило общую
                                            продуктивность на 45% и сократило сверхурочные на 60%
                                        </li>
                                        <li><strong>Эффективность реагирования на чрезвычайные ситуации</strong> -
                                            Координировал критическое восстановление системы в условиях экстремального
                                            временного давления, устранил крупный сбой на 40% быстрее исторического
                                            среднего показателя благодаря оптимизированной последовательности задач
                                        </li>
                                        <li><strong>Улучшение эффективности встреч</strong> - Сократил время встреч на
                                            50% по всей организации при одновременном улучшении качества решений
                                            благодаря структурированному управлению повесткой дня и тайм-боксингу
                                        </li>
                                        <li><strong>Пик личной продуктивности</strong> - Сохранял стабильную высокую
                                            производительность при управлении несколькими ролями, достиг на 30% больше
                                            результатов, чем в среднем по команде, благодаря эффективному временному
                                            блокированию
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Инструменты и методы -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#607D8B] mr-3"></i>
                                    Инструменты и методы тайм-менеджмента
                                </h2>
                                <div class="content-section">
                                    <h3>Цифровые инструменты</h3>
                                    <p>
                                        Я использую современные цифровые инструменты для повышения эффективности
                                        тайм-менеджмента:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span
                                            class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Google Календарь</span>
                                        <span
                                            class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Trello</span>
                                        <span
                                            class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Notion</span>
                                        <span
                                            class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Todoist</span>
                                        <span
                                            class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Focus@Will</span>
                                        <span
                                            class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">RescueTime</span>
                                        <span
                                            class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Forest App</span>
                                        <span
                                            class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Pomodone</span>
                                        <span
                                            class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Clockify</span>
                                    </div>

                                    <h3>Аналитические методы</h3>
                                    <p>
                                        Я применяю различные аналитические подходы для оптимизации использования
                                        времени:
                                    </p>
                                    <ul>
                                        <li><strong>Аудит времени</strong> - Регулярный анализ затрат времени для
                                            выявления возможностей улучшения
                                        </li>
                                        <li><strong>Метрики продуктивности</strong> - Отслеживание ключевых показателей
                                            эффективности, связанных с использованием времени
                                        </li>
                                        <li><strong>Управление прерываниями</strong> - Системный подход к минимизации и
                                            обработке disruptions
                                        </li>
                                        <li><strong>Картирование энергетических циклов</strong> - Согласование задач с
                                            естественными энергетическими паттернами для оптимальной производительности
                                        </li>
                                        <li><strong>Расчет буферного времени</strong> - Научный подход к оценке и
                                            выделению резервного времени
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#607D8B] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#607D8B]">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div
                                                class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#607D8B] to-[#455A64]"
                                                data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Расстановка приоритетов</span>
                                            <span class="text-sm font-bold text-green-500">94%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="94%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Управление сроками</span>
                                            <span class="text-sm font-bold text-blue-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Управление фокусом</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Эффективность многозадачности</span>
                                            <span class="text-sm font-bold text-yellow-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="85%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#607D8B] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#607D8B] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>10+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-clock text-[#607D8B] w-5 mr-3"></i>
                                        <span class="text-sm">Успешность сроков: <strong>98%</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tasks text-[#607D8B] w-5 mr-3"></i>
                                        <span class="text-sm">Управлено проектов: <strong>200+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-chart-line text-[#607D8B] w-5 mr-3"></i>
                                        <span
                                            class="text-sm">Прирост продуктивности: <strong>45% в среднем</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-hourglass text-[#607D8B] w-5 mr-3"></i>
                                        <span class="text-sm">Сэкономлено времени в неделю: <strong>10-15 часов</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#607D8B] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/project-management"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-tasks text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#607D8B] transition-colors">
                                                Управление проектами
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                    </a>
                                    <a href="/competences/organization"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-folder text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#607D8B] transition-colors">
                                                Организация
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                    </a>
                                    <a href="/competences/productivity"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#607D8B] transition-colors">
                                                Продуктивность
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">92% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                    </a>
                                    <a href="/competences/focus"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bullseye text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#607D8B] transition-colors">Фокус
                                                и концентрация
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div
                                class="bg-gradient-to-r from-[#607D8B] to-[#455A64] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна оптимизация времени?</h3>
                                <p class="text-sm mb-4">Обсудим, как эффективный тайм-менеджмент может преобразовать
                                    вашу продуктивность</p>
                                <a href="/contact"
                                   class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#607D8B] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Оптимизируйте ваше время
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-frontend.layouts.app>

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
    <section class="py-16">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Основной контент -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- О лидерстве в команде -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#9C27B0] mr-3"></i>
                                О лидерстве в команде
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Лидерство в команде</strong> в технологиях включает руководство командами разработки
                                    для достижения технического совершенства при создании совместной и ориентированной на рост
                                    среды. Оно сочетает технический опыт с навыками работы с людьми для создания высокоэффективных
                                    команд, которые достигают выдающихся результатов.
                                </p>

                                <h3>Ключевые преимущества</h3>
                                <ul>
                                    <li><strong>Повышение производительности команды</strong> - Оптимизация индивидуального и коллективного вклада</li>
                                    <li><strong>Ускоренное развитие навыков</strong> - Наставничество членов команды для раскрытия их потенциала</li>
                                    <li><strong>Улучшенное сотрудничество</strong> - Формирование доверия и эффективной коммуникации</li>
                                    <li><strong>Более высокие показатели удержания</strong> - Создание сред, где таланты процветают</li>
                                    <li><strong>Лучшее принятие решений</strong> - Использование разнообразных перспектив и экспертизы</li>
                                    <li><strong>Повышение инновационности</strong> - Поощрение творчества и взвешенного риска</li>
                                </ul>

                                <h3>Профессиональное применение</h3>
                                <p>
                                    Эффективное лидерство в команде необходимо в различных технических контекстах и особенно критично для:
                                </p>
                                <ul>
                                    <li>Управления командами разработки ПО</li>
                                    <li>Лидерства и координации технических проектов</li>
                                    <li>Наставничества младших и средних разработчиков</li>
                                    <li>Сотрудничества межфункциональных команд</li>
                                    <li>Фасилитации гибких команд и Scrum-мастерства</li>
                                    <li>Руководства техническим карьерным развитием</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь лидерства -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#9C27B0] mr-3"></i>
                                Мой путь лидерства
                            </h2>
                            <div class="content-section">
                                <p>
                                    За 6+ лет на руководящих должностях я прошел путь от индивидуального исполнителя до тимлида,
                                    развивая свой стиль лидерства через практический опыт, формальное обучение и непрерывное
                                    развитие. Мой путь включал наставничество разработчиков, содействие росту команды и
                                    создание сред, где техническое совершенство процветает.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-graduation-cap text-[#9C27B0] mr-2"></i>
                                            Превосходство в наставничестве
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Успешно наставлял более 40 разработчиков, при этом несколько человек продвинулись до старших
                                            и ведущих позиций в своих организациях благодаря структурированному руководству.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                            Трансформация команды
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Преобразовал struggling команды в высокопроизводительные единицы через четкое
                                            видение, улучшение процессов и расширение возможностей сотрудников.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Моя философия лидерства -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#9C27B0] mr-3"></i>
                                Моя философия лидерства
                            </h2>
                            <div class="content-section">
                                <p>
                                    Я верю в сервисное лидерство, которое расширяет возможности членов команды, сохраняя
                                    четкое направление и подотчетность. Мой подход сосредоточен на создании среды,
                                    где технические таланты могут процветать и достигать выдающихся результатов.
                                </p>

                                <h3>Принципы лидерства</h3>
                                <div class="space-y-4 mt-4">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">1</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Лидерство на личном примере</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Демонстрирую техническое совершенство, рабочую этику и дух сотрудничества, которые ожидаю от команды.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">2</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Расширение прав и делегирование</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Доверяю членам команды владение и предоставляю автономию в четких границах.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">3</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Содействие росту</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Инвестирую в развитие команды через наставничество, обучение и сложные возможности.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">4</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Прозрачная коммуникация</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Поддерживаю открытую коммуникацию о целях, вызовах и успехах.</p>
                                        </div>
                                    </div>
                                </div>

                                <h3>Компетенции лидерства</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Техническое наставничество</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Разрешение конфликтов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Управление эффективностью</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Стратегическое планирование</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Управление стейкхолдерами</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Построение команды</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Управление изменениями</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Эмоциональный интеллект</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Истории успеха -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-trophy text-[#9C27B0] mr-3"></i>
                                Истории успеха лидерства
                            </h2>
                            <div class="content-section">
                                <p>
                                    Мой подход к лидерству последовательно приносил положительные результаты для команд и организаций:
                                </p>
                                <ul>
                                    <li><strong>Разворот производительности команды</strong> - Преобразовал неэффективную команду из 8 разработчиков в высокопроизводительное подразделение, увеличив скорость поставок на 60% и снизив количество ошибок на 75% за 6 месяцев</li>
                                    <li><strong>Успех программы наставничества</strong> - Создал структурированную программу наставничества, которая ускорила рост младших разработчиков, при этом 5 членов команды получили повышение в течение 18 месяцев</li>
                                    <li><strong>Межфункциональное сотрудничество</strong> - Преодолел разрыв между командами разработки и бизнеса, улучшив ясность требований и сократив переделку на 40%</li>
                                    <li><strong>Сокращение технического долга</strong> - Возглавил инициативу, которая сократила технический долг на 70% при сохранении поставки функций через стратегическое планирование и согласованность команды</li>
                                    <li><strong>Улучшение удержания команды</strong> - Улучшил удержание команды с 65% до 92% через целенаправленное развитие лидерства и возможности карьерного роста</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Инструменты и методы лидерства -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#9C27B0] mr-3"></i>
                                Инструменты и методы лидерства
                            </h2>
                            <div class="content-section">
                                <h3>Инструменты развития команды</h3>
                                <p>
                                    Я использую различные инструменты и фреймворки для поддержки роста и эффективности команды:
                                </p>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">1-на-1 встречи</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Карьерные лестницы</span>
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Ретроспективы</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Матрицы навыков</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Системы обратной связи</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Тимбилдинг</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Программы наставничества</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">OKR</span>
                                    <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Оценки эффективности</span>
                                </div>

                                <h3>Методы развития лидерства</h3>
                                <p>
                                    Я применяю различные подходы для развития лидерских способностей в командах:
                                </p>
                                <ul>
                                    <li><strong>Ситуационное лидерство</strong> - Адаптация стиля лидерства к зрелости и контексту команды</li>
                                    <li><strong>Сервисное лидерство</strong> - Фокус на потребностях команды и устранение препятствий</li>
                                    <li><strong>Трансформационное лидерство</strong> - Вдохновление команд на достижение исключительных результатов</li>
                                    <li><strong>Коучинг и наставничество</strong> - Развитие индивидуальных способностей и карьерных путей</li>
                                    <li><strong>Гибкое лидерство</strong> - Фасилитация самоорганизующихся команд и непрерывного улучшения</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карточка уровня владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#9C27B0] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее владение</span>
                                        <span class="text-sm font-bold text-[#9C27B0]">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#9C27B0] to-[#7B1FA2]"
                                             data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Техническое наставничество</span>
                                        <span class="text-sm font-bold text-green-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Построение команды</span>
                                        <span class="text-sm font-bold text-blue-500">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Управление эффективностью</span>
                                        <span class="text-sm font-bold text-purple-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Разрешение конфликтов</span>
                                        <span class="text-sm font-bold text-yellow-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#9C27B0] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>6+ лет</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Команд руководил: <strong>15+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-user-graduate text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Участников наставлял: <strong>40+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-rocket text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Размер команды: <strong>5-12 участников</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-chart-line text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Улучшение производительности: <strong>60% в среднем</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#9C27B0] mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/project-management" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-tasks text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Управление проектами</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">88% владения</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                </a>
                                <a href="/competences/communication-skills" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-comments text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Коммуникация</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">92% владения</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                </a>
                                <a href="/competences/mentoring" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-graduation-cap text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Наставничество</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% владения</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                </a>
                                <a href="/competences/emotional-intelligence" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-brain text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Эмоциональный интеллект</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% владения</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-[#9C27B0] to-[#7B1FA2] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Нужно лидерство команды?</h3>
                            <p class="text-sm mb-4">Обсудим, как эффективное лидерство может преобразовать вашу команду</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#9C27B0] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                <i class="fas fa-envelope mr-2"></i>
                                Обсудить лидерство
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

</x-frontend.layouts.app>

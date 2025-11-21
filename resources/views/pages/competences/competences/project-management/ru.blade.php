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
                        <!-- О управлении проектами -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#2196F3] mr-3"></i>
                                О управлении проектами
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Управление проектами</strong> - это применение знаний, навыков, инструментов
                                    и методов к проектным мероприятиям для соответствия требованиям проекта. В технологическом
                                    секторе это включает координацию сложной технической работы при управлении объемом, временем,
                                    стоимостью, качеством и ожиданиями стейкхолдеров.
                                </p>

                                <h3>Ключевые преимущества</h3>
                                <ul>
                                    <li><strong>Стратегическое соответствие</strong> - Обеспечение поддержки проектами бизнес-целей</li>
                                    <li><strong>Снижение рисков</strong> - Проактивное выявление и управление потенциальными проблемами</li>
                                    <li><strong>Оптимизация ресурсов</strong> - Эффективное распределение членов команды и бюджета</li>
                                    <li><strong>Своевременная поставка</strong> - Соблюдение сроков через эффективное планирование и выполнение</li>
                                    <li><strong>Обеспечение качества</strong> - Поддержание высоких стандартов на протяжении жизненного цикла проекта</li>
                                    <li><strong>Удовлетворенность стейкхолдеров</strong> - Поддержание вовлеченности и информированности клиентов и членов команды</li>
                                </ul>

                                <h3>Профессиональное применение</h3>
                                <p>
                                    Эффективное управление проектами критически важно в различных технических областях и особенно необходимо для:
                                </p>
                                <ul>
                                    <li>Проектов разработки и внедрения программного обеспечения</li>
                                    <li>Миграций систем и обновлений инфраструктуры</li>
                                    <li>Инициатив разработки и запуска продуктов</li>
                                    <li>Программ цифровой трансформации</li>
                                    <li>Лидерства в командах и кросс-функциональной координации</li>
                                    <li>Поставки клиентам и консалтинговых взаимодействий</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь в управлении проектами -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#2196F3] mr-3"></i>
                                Мой путь в управлении проектами
                            </h2>
                            <div class="content-section">
                                <p>
                                    За 8+ лет я прошел путь от технического специалиста до руководителя проектов,
                                    управляя все более сложными проектами в различных отраслях. Мой путь
                                    включал формальное обучение управлению проектами, практический опыт работы с
                                    разнообразными методологиями и постоянное улучшение через извлеченные уроки.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-rocket text-[#2196F3] mr-2"></i>
                                            Гибкая трансформация
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Руководил внедрением гибких методологий в нескольких командах, внедряя Scrum и Kanban,
                                            что улучшило скорость поставки и удовлетворенность команды.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-users text-purple-500 mr-2"></i>
                                            Лидерство в команде
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Управлял кросс-функциональными командами из 5-15 членов, способствуя сотрудничеству
                                            и обеспечивая соответствие целям проекта и ожиданиям клиентов.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Мой подход -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#2196F3] mr-3"></i>
                                Мой подход к управлению проектами
                            </h2>
                            <div class="content-section">
                                <p>
                                    Я применяю гибкий, адаптивный подход к управлению проектами, который сочетает
                                    проверенные методологии с практическим опытом. Моя цель - поставка
                                    ценности при поддержании морального духа команды и доверия стейкхолдеров.
                                </p>

                                <h3>Управление жизненным циклом проекта</h3>
                                <div class="space-y-4 mt-4">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">1</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Инициация и планирование</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Определение объема проекта, целей и критериев успеха. Разработка детальных планов проекта, временных графиков и распределения ресурсов.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">2</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Выполнение и мониторинг</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Координация деятельности команды, отслеживание прогресса по вехам и поддержание коммуникации со стейкхолдерами.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">3</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Управление рисками и качеством</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Выявление потенциальных рисков, внедрение стратегий снижения и обеспечение поддержания стандартов качества.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">4</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Поставка и закрытие</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Обеспечение успешной поставки проекта, проведение пост-внедренческих обзоров и фиксация извлеченных уроков.</p>
                                        </div>
                                    </div>
                                </div>

                                <h3>Методологии и фреймворки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Гибкие методологии и Scrum</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Kanban и Lean</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Водопад и гибридные подходы</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Основы PRINCE2</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Фреймворк PMI</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Принципы SAFe</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Истории успеха -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-trophy text-[#2196F3] mr-3"></i>
                                Истории успеха в управлении проектами
                            </h2>
                            <div class="content-section">
                                <p>
                                    Моя экспертиза в управлении проектами сыграла ключевую роль в успешной реализации разнообразных инициатив:
                                </p>
                                <ul>
                                    <li><strong>Миграция e-commerce платформы</strong> - Управлял 6-месячным проектом миграции для крупного розничного клиента, поставка вовремя и на 15% ниже бюджета при поддержании 99.9% доступности в течение перехода</li>
                                    <li><strong>Многокомандная гибкая трансформация</strong> - Руководил внедрением Scrum в 5 командах разработки, что привело к 40% ускорению циклов поставки и 25% улучшению показателей удовлетворенности команды</li>
                                    <li><strong>Международная реализация SaaS</strong> - Координировал команду в разных часовых поясах для поставки сложного SaaS-решения для глобального клиента, управляя культурными различиями и техническими вызовами</li>
                                    <li><strong>Модернизация legacy-системы</strong> - Руководил 12-месячной программой модернизации, которая успешно заменила 15-летнюю систему с минимальным disruption бизнеса</li>
                                    <li><strong>Запуск продукта стартапа</strong> - Управлял end-to-end разработкой и запуском продукта для технологического стартапа, достигнув выхода на рынок на 3 месяца раньше среднего отраслевого срока</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Инструменты и методы -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#2196F3] mr-3"></i>
                                Инструменты и методы управления проектами
                            </h2>
                            <div class="content-section">
                                <h3>Инструменты управления</h3>
                                <p>
                                    Я использую современные инструменты управления проектами для улучшения видимости, сотрудничества и эффективности:
                                </p>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Jira</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Trello</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Asana</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Monday.com</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">MS Project</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Notion</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Slack</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">GitHub</span>
                                    <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Figma</span>
                                </div>

                                <h3>Ключевые методы</h3>
                                <p>
                                    Я применяю различные методы управления проектами для обеспечения успеха:
                                </p>
                                <ul>
                                    <li><strong>Анализ и управление стейкхолдерами</strong> - Выявление и вовлечение ключевых стейкхолдеров</li>
                                    <li><strong>Реестр рисков и планирование снижения</strong> - Проактивное выявление рисков и реагирование</li>
                                    <li><strong>Управление освоенной стоимостью</strong> - Отслеживание производительности и прогресса проекта</li>
                                    <li><strong>Выравнивание и распределение ресурсов</strong> - Оптимизация использования команды и бюджета</li>
                                    <li><strong>Процесс управления изменениями</strong> - Эффективное управление изменениями объема</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карта профессионализма -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#2196F3] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее владение</span>
                                        <span class="text-sm font-bold text-[#2196F3]">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#2196F3] to-[#1976D2]"
                                             data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Гибкие методологии</span>
                                        <span class="text-sm font-bold text-green-500">92%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Лидерство в команде</span>
                                        <span class="text-sm font-bold text-blue-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Управление бюджетом</span>
                                        <span class="text-sm font-bold text-purple-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Управление рисками</span>
                                        <span class="text-sm font-bold text-yellow-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#2196F3] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>8+ лет</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-tasks text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Управлено проектов: <strong>150+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Размер команды: <strong>5-15 человек</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-dollar-sign text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Диапазон бюджета: <strong>$50K-$2M</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Успешность: <strong>94%</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#2196F3] mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-flag text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#2196F3] transition-colors">Лидерство</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                </a>
                                <a href="/competences/communication-skills" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-comments text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#2196F3] transition-colors">Коммуникация</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">92% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                </a>
                                <a href="/competences/problem-solving" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-puzzle-piece text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#2196F3] transition-colors">Решение проблем</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                </a>
                                <a href="/competences/teamwork" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-people-carry text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#2196F3] transition-colors">Командная работа</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-[#2196F3] to-[#1976D2] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Нужно руководство проектом?</h3>
                            <p class="text-sm mb-4">Давайте обсудим, как эффективное управление проектами может обеспечить ваш успех</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#2196F3] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                <i class="fas fa-envelope mr-2"></i>
                                Начать обсуждение проекта
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

</x-frontend.layouts.app>

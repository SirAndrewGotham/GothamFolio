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
            .communication-gradient {
                background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
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
                                <a href="/competences/soft-skills" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Гибкие навыки
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Коммуникативные навыки
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4CAF50] to-[#45a049] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-comments text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 communication-gradient">Коммуникативные навыки</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Ключевой навык
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Эффективная устная и письменная коммуникация с командами и клиентами. Основа успешного сотрудничества и реализации проектов.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#4CAF50] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">92%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#4CAF50] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">12+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Профессионального опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#4CAF50] mr-3">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">200+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Реализованных проектов</div>
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
                            <!-- О коммуникативных навыках -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#4CAF50] mr-3"></i>
                                    О коммуникативных навыках
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Коммуникативные навыки</strong> являются основой успешного сотрудничества,
                                        управления проектами и клиентских отношений в профессиональной среде. Эффективная
                                        коммуникация включает не только то, что мы говорим, но и как мы это говорим, когда мы это говорим,
                                        и нашу способность слушать и понимать других.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Четкие требования проекта</strong> - Снижение недопонимания и переделок</li>
                                        <li><strong>Сильное командное взаимодействие</strong> - Создание продуктивных рабочих отношений</li>
                                        <li><strong>Эффективное управление клиентами</strong> - Построение доверия и управление ожиданиями</li>
                                        <li><strong>Эффективное решение проблем</strong> - Быстрое решение вопросов через четкий диалог</li>
                                        <li><strong>Профессиональные презентации</strong> - Уверенная передача идей и предложений</li>
                                        <li><strong>Межкультурная адаптивность</strong> - Эффективная работа в разнообразных средах</li>
                                    </ul>

                                    <h3>Профессиональное применение</h3>
                                    <p>
                                        Сильные коммуникативные навыки необходимы во всех профессиональных контекстах и особенно критичны для:
                                    </p>
                                    <ul>
                                        <li>Управления проектами и лидерства в командах</li>
                                        <li>Консультаций с клиентами и сбора требований</li>
                                        <li>Технической документации и спецификаций</li>
                                        <li>Презентаций для стейкхолдеров и отчетов о прогрессе</li>
                                        <li>Разрешения конфликтов и переговоров</li>
                                        <li>Наставничества и обмена знаниями</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в коммуникации -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#4CAF50] mr-3"></i>
                                    Мой путь в развитии коммуникации
                                </h2>
                                <div class="content-section">
                                    <p>
                                        За 12+ лет в технологической индустрии я развивал и совершенствовал свои коммуникативные
                                        навыки через различные роли — от индивидуального исполнителя до лидера команды, и от технического
                                        специалиста до клиентоориентированного консультанта. Каждая роль представляла уникальные коммуникативные вызовы,
                                        которые помогли мне расти и адаптировать свой подход.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-[#4CAF50] mr-2"></i>
                                                Лидерство в командах
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Руководил командами разработчиков из 5-10 человек, устанавливая четкие каналы коммуникации,
                                                регулярные проверки и эффективные механизмы обратной связи, которые улучшали результаты проектов.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-handshake text-blue-500 mr-2"></i>
                                                Клиентские отношения
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Управлял клиентскими отношениями в 50+ проектах, переводя технические концепции
                                                в бизнес-ценность и обеспечивая соответствие между технической реализацией и ожиданиями клиентов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#4CAF50] mr-3"></i>
                                    Мой коммуникативный опыт
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Более чем за десятилетие профессионального опыта я отточил свои коммуникативные способности
                                        в различных контекстах — от технических обсуждений с командами разработчиков до стратегических
                                        бесед с руководителями высшего звена и практических объяснений для конечных пользователей.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Техническая документация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Клиентские презентации и демо</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Сбор требований</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Координация команд и наставничество</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление стейкхолдерами</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разрешение конфликтов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Межкультурная коммуникация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Активное слушание</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Переговоры и убеждение</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Предоставление обратной связи</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые контексты коммуникации</h3>
                                    <ul>
                                        <li><strong>Технические команды</strong> - Четкие спецификации, код-ревью и архитектурные обсуждения</li>
                                        <li><strong>Бизнес-стейкхолдеры</strong> - Перевод технических возможностей в бизнес-ценность</li>
                                        <li><strong>Международные клиенты</strong> - Адаптация стиля коммуникации к культурным различиям</li>
                                        <li><strong>Управление проектами</strong> - Отчеты о статусе, коммуникация рисков и обновления по вехам</li>
                                        <li><strong>Обучение пользователей</strong> - Создание доступной документации и проведение эффективных обучающих сессий</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Методы коммуникации -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#4CAF50] mr-3"></i>
                                    Методы и инструменты коммуникации
                                </h2>
                                <div class="content-section">
                                    <h3>Устная коммуникация</h3>
                                    <p>
                                        Я использую различные стратегии устной коммуникации, адаптированные к разным аудиториям и контекстам:
                                    </p>
                                    <ul>
                                        <li><strong>Индивидуальные встречи</strong> - Персонализированные обсуждения для детальной обратной связи и наставничества</li>
                                        <li><strong>Командные стендапы</strong> - Эффективная ежедневная координация и отслеживание прогресса</li>
                                        <li><strong>Клиентские презентации</strong> - Структурированные демонстрации и обзоры прогресса</li>
                                        <li><strong>Технические воркшопы</strong> - Интерактивные сессии для обмена знаниями</li>
                                        <li><strong>Брифинги для стейкхолдеров</strong> - Краткие исполнительные резюме и рекомендации</li>
                                    </ul>

                                    <h3>Письменная коммуникация</h3>
                                    <p>
                                        Моя письменная коммуникация адаптируется к разным форматам и аудиториям:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Техническая документация</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Проектные предложения</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Электронная почта</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">API документация</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Отчеты о прогрессе</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Пользовательские руководства</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Минуты встреч</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Комментарии в коде</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Спецификации</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Истории успеха -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-trophy text-[#4CAF50] mr-3"></i>
                                    Истории коммуникативного успеха
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Эффективная коммуникация сыграла ключевую роль в успехе нескольких важных проектов:
                                    </p>
                                    <ul>
                                        <li><strong>Многонациональная E-commerce платформа</strong> - Координация между российской командой разработчиков и европейскими стейкхолдерами, доставка проекта на 2 недели раньше срока благодаря четкой коммуникации требований</li>
                                        <li><strong>Миграция legacy-системы</strong> - Успешная коммуникация технических ограничений и стратегии миграции нетехническим стейкхолдерам, обеспечение поддержки сложного 18-месячного проекта</li>
                                        <li><strong>Запуск продукта стартапа</strong> - Преодоление коммуникационного разрыва между технической командой и маркетинговым отделом, обеспечение точного представления функций продукта в материалах запуска</li>
                                        <li><strong>Реструктуризация команды</strong> - Обеспечение плавного перехода во время организационных изменений через прозрачную коммуникацию и регулярные обновления команды</li>
                                        <li><strong>Управление клиентским кризисом</strong> - Сохранение доверия клиента во время технического сбоя через честную, своевременную коммуникацию и четкую презентацию плана восстановления</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#4CAF50] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#4CAF50]">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4CAF50] to-[#45a049]"
                                                 data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Письменная коммуникация</span>
                                            <span class="text-sm font-bold text-green-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Устная коммуникация</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Клиентские отношения</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Командное сотрудничество</span>
                                            <span class="text-sm font-bold text-yellow-500">94%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="94%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#4CAF50] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>12+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-comments text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Языки: <strong>Русский, Английский</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>200+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Команд руководил: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-globe text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Международные клиенты: <strong>25+ стран</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#4CAF50] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flag text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Лидерство</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                    </a>
                                    <a href="/competences/project-management" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-tasks text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Управление проектами</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                    </a>
                                    <a href="/competences/teamwork" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-people-carry text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Командная работа</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                    </a>
                                    <a href="/competences/presentation" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-bar text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Навыки презентации</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#4CAF50] to-[#45a049] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Готовы к сотрудничеству?</h3>
                                <p class="text-sm mb-4">Обсудим, как четкая коммуникация может обеспечить успех вашего проекта</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#4CAF50] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Начать обсуждение
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-frontend.layouts.app>

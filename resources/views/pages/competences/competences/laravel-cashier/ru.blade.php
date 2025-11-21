<x-frontend.layouts.app>
    @push('section-styles')
        <style>
            /* Специальный градиент для Alpine.js, которого нет в основном app.css */
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
                                <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Backend разработка
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel Cashier
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой раздел -->
        <section class="py-12 bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-purple-500 to-violet-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-credit-card text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Laravel Cashier</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-money-bill-wave mr-1"></i>
                                            Обработка платежей
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Комплексное управление подписками и платежами с интеграцией Stripe и Paddle
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">2</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Платежные системы</div>
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
                            <!-- О Laravel Cashier -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                    О Laravel Cashier
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Cashier</strong> предоставляет выразительный, беглый интерфейс к сервисам
                                        биллинга подписок Stripe и Paddle. Он обрабатывает почти весь шаблонный код биллинга подписок,
                                        который вы не хотите писать, делая управление подписками простым и понятным.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Упрощенное управление подписками</strong> - Легкая настройка и управление повторяющимися платежами</li>
                                        <li><strong>Множество платежных систем</strong> - Поддержка Stripe и Paddle</li>
                                        <li><strong>Встроенная обработка счетов</strong> - Автоматическое создание и управление счетами</li>
                                        <li><strong>Интеграция вебхуков</strong> - Бесшовная обработка платежных событий</li>
                                        <li><strong>Поддержка купонов и скидок</strong> - Комплексная система промо-акций</li>
                                        <li><strong>Управление пробными периодами</strong> - Гибкие конфигурации пробных периодов</li>
                                    </ul>

                                    <h3>Основные возможности</h3>
                                    <p>
                                        Laravel Cashier предоставляет комплексный набор функций для приложений на основе подписок:
                                    </p>
                                    <ul>
                                        <li>Создание и управление подписками</li>
                                        <li>Множество планов подписок и ценовых уровней</li>
                                        <li>Автоматическое создание счетов и загрузка PDF</li>
                                        <li>Управление и обновление платежных методов</li>
                                        <li>Смена и отмена подписок</li>
                                        <li>Обработка вебхуков для платежных событий</li>
                                        <li>Поддержка расчета налогов и НДС</li>
                                        <li>Поддержка многовалютного биллинга</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с Cashier -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-purple-500 mr-3"></i>
                                    Мой путь с Laravel Cashier
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал работать с Laravel Cashier в 2020 году при реализации моделей дохода на основе подписок
                                        для SaaS-приложений. За последние 3+ года я интегрировал Cashier в различные проекты,
                                        от небольших стартапов до корпоративных платформ подписок.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fab fa-stripe text-purple-500 mr-2"></i>
                                                Интеграция Stripe
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обширный опыт интеграции Stripe, включая
                                                Payment Intents, Setup Intents и расширенные функции Stripe.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-ship text-blue-500 mr-2"></i>
                                                Реализация Paddle
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Практический опыт интеграции Paddle для
                                                приложений, требующих обработки НДС и глобального соответствия.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                    Мой опыт с Laravel Cashier
                                </h2>
                                <div class="content-section">
                                    <p>
                                        С более чем 3-летним практическим опытом реализации Laravel Cashier,
                                        я развил комплексную экспертизу в системах биллинга подписок
                                        и рабочих процессах обработки платежей.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Многоуровневые планы подписок</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка пользовательских циклов биллинга</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обработка и безопасность событий вебхуков</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление платежными методами</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка и брендирование счетов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Расчет налогов и НДС</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Аналитика и отчетность по подпискам</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление взысканием и обработка неудачных платежей</span>
                                        </div>
                                    </div>

                                    <h3>Экспертиза в платежных системах</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <div class="flex items-center mb-3">
                                                <div class="w-10 h-10 rounded-lg bg-indigo-500 flex items-center justify-center text-white mr-3">
                                                    <i class="fab fa-stripe text-lg"></i>
                                                </div>
                                                <h4 class="text-lg font-bold">Stripe</h4>
                                            </div>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Реализация API Payment Intents</li>
                                                <li>• Setup Intents для соответствия SCA</li>
                                                <li>• Потоки аутентификации 3D Secure</li>
                                                <li>• Stripe Connect для маркетплейсов</li>
                                                <li>• Предотвращение мошенничества с Radar</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <div class="flex items-center mb-3">
                                                <div class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                    <i class="fas fa-ship text-lg"></i>
                                                </div>
                                                <h4 class="text-lg font-bold">Paddle</h4>
                                            </div>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Автоматизация обработки НДС и налогов</li>
                                                <li>• Управление глобальным соответствием</li>
                                                <li>• Аналитика и метрики подписок</li>
                                                <li>• Настройка оформления заказа</li>
                                                <li>• Генерация лицензионных ключей</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h3>Проекты реализации</h3>
                                    <ul>
                                        <li><strong>SaaS платформа</strong> - Многоуровневая подписка с годовым/месячным биллингом</li>
                                        <li><strong>Приложение маркетплейса</strong> - Интеграция Stripe Connect с разделением платежей</li>
                                        <li><strong>Контентная платформа</strong> - Интеграция Paddle с глобальным налоговым соответствием</li>
                                        <li><strong>Корпоративное ПО</strong> - Пользовательские циклы биллинга и рабочие процессы счетов</li>
                                        <li><strong>Бекенд мобильного приложения</strong> - API управления подписками с вебхуками</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Расширенные возможности -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-purple-500 mr-3"></i>
                                    Расширенные возможности реализации
                                </h2>
                                <div class="content-section">
                                    <h3>Сложные сценарии биллинга</h3>
                                    <p>
                                        Помимо базового управления подписками, я реализовал расширенные сценарии биллинга:
                                    </p>
                                    <ul>
                                        <li><strong>Биллинг по использованию</strong> - Измеряемый биллинг с Stripe Billing</li>
                                        <li><strong>Поддержка мультивалютности</strong> - Динамическая конвертация валют и ценообразование</li>
                                        <li><strong>Пользовательские рабочие процессы счетов</strong> - Брендированные счета с пользовательской логикой</li>
                                        <li><strong>Аналитика подписок</strong> - Отслеживание MRR, уровня оттока и пожизненной ценности</li>
                                        <li><strong>Управление взысканием</strong> - Автоматическое восстановление неудачных платежей</li>
                                        <li><strong>Расширения пробных периодов</strong> - Гибкое управление пробными периодами</li>
                                    </ul>

                                    <h3>Безопасность и соответствие</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Соответствие PCI</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация безопасных платежных потоков в соответствии с требованиями PCI DSS
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Соответствие SCA</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация строгой аутентификации клиентов для европейских клиентов
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Безопасность вебхуков</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Безопасная обработка вебхуков с проверкой подписи и идемпотентностью
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Защита данных</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обработка платежных данных в соответствии с GDPR и управление информацией о клиентах
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Проекты на GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-purple-500 mr-3"></i>
                                    Проекты на GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих реализаций Laravel Cashier и проектов управления подписками
                                        можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Я постоянно изучаю новые функции Cashier и делюсь шаблонами реализации
                                        для сложных сценариев биллинга подписок.
                                    </p>
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
                                            <span class="text-sm font-bold text-purple-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-violet-500"
                                                 data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интеграция Stripe</span>
                                            <span class="text-sm font-bold text-indigo-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-indigo-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интеграция Paddle</span>
                                            <span class="text-sm font-bold text-blue-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Логика подписок</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Безопасность платежей</span>
                                            <span class="text-sm font-bold text-red-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="75%" style="width: 0%"></div>
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
                                        <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-credit-card text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Провайдеры: <strong>Stripe & Paddle</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>12+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Соответствие: <strong>PCI DSS & SCA</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-globe text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Валюты: <strong>Мультивалютность</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Типы реализаций -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-cubes text-purple-500 mr-2"></i>
                                    Типы реализаций
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">SaaS платформы подписок</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Платежные системы маркетплейсов</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Платные стены контента</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Биллинг по использованию</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Корпоративные системы биллинга</span>
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
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">API разработка</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/security" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Безопасность</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/saas" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-indigo-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-cloud text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">SaaS разработка</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-purple-500 to-violet-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужен биллинг подписок?</h3>
                                <p class="text-sm mb-4">Давайте построим вашу платежную систему с Laravel Cashier</p>
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

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
                        <!-- О Laravel Horizon -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#FF6B6B] mr-3"></i>
                                О Laravel Horizon
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Horizon</strong> предоставляет красивую панель управления и конфигурацию через код для ваших очередей Redis на Laravel.
                                    Horizon позволяет легко отслеживать ключевые метрики вашей системы очередей, такие как пропускная способность заданий, время выполнения и сбои заданий.
                                </p>

                                <h3>Основные возможности и преимущества</h3>
                                <ul>
                                    <li><strong>Красивая панель управления</strong> - Интерфейс мониторинга и метрик в реальном времени</li>
                                    <li><strong>Конфигурация через код</strong> - Версионируемая конфигурация очередей</li>
                                    <li><strong>Мониторинг метрик</strong> - Отслеживание пропускной способности, времени выполнения и сбоев</li>
                                    <li><strong>Управление заданиями</strong> - Повторное выполнение неудачных заданий, мониторинг последних заданий</li>
                                    <li><strong>Балансировка очередей</strong> - Автоматические и ручные стратегии балансировки очередей</li>
                                    <li><strong>Уведомления</strong> - Уведомления через Slack и email о проблемах с очередями</li>
                                </ul>

                                <h3>Ключевые возможности мониторинга</h3>
                                <p>
                                    Horizon предоставляет всестороннюю информацию о вашей системе очередей:
                                </p>
                                <ul>
                                    <li>Метрики обработки заданий и пропускной способности в реальном времени</li>
                                    <li>Производительность и идентификация узких мест во времени выполнения заданий</li>
                                    <li>Отслеживание неудачных заданий с детальной информацией об ошибках</li>
                                    <li>Распределение и балансировка нагрузки очередей</li>
                                    <li>Исторические данные о производительности и тренды</li>
                                    <li>Организация и фильтрация заданий на основе тегов</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой опыт с Horizon -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#FF6B6B] mr-3"></i>
                                Мой опыт с Horizon
                            </h2>
                            <div class="content-section">
                                <p>
                                    Начал использовать Laravel Horizon в 2020 году для рабочих приложений, требующих надежного мониторинга очередей.
                                    За более чем 4 года настроил и поддерживал Horizon в различных средах, от одиночных серверов
                                    до многосерверных рабочих установок со сложными архитектурами очередей.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div
                                        class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-sliders-h text-[#FF6B6B] mr-2"></i>
                                            Рабочая конфигурация
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Большой опыт настройки Horizon для рабочих сред
                                            с несколькими очередями, супервизорами и настройками мониторинга.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                            Оптимизация производительности
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Реализовал стратегии оптимизации очередей с использованием метрик Horizon
                                            для выявления узких мест и повышения эффективности обработки заданий.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Технический опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#FF6B6B] mr-3"></i>
                                Технический опыт
                            </h2>
                            <div class="content-section">
                                <p>
                                    Всесторонний опыт работы с конфигурацией, мониторингом и оптимизацией Horizon
                                    в различных рабочих сценариях и архитектурах приложений.
                                </p>

                                <h3>Основные навыки работы с Horizon</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Конфигурация Horizon и среды</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Конфигурация и управление супервизорами</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Стратегии балансировки очередей</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Мониторинг и анализ метрик</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Управление неудачными заданиями</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Организация заданий на основе тегов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка уведомлений</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка безопасности и аутентификации</span>
                                    </div>
                                </div>

                                <h3>Расширенные шаблоны конфигурации</h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Мульти-среда</span>
                                    <span
                                        class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Автомасштабирование</span>
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Пользовательские метрики</span>
                                    <span
                                        class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Приоритизация очередей</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Пакетная обработка</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Тонкая настройка</span>
                                </div>

                                <h3>Мониторинг и оповещения</h3>
                                <ul>
                                    <li><strong>Панель управления в реальном времени</strong> - Живые метрики и статус обработки заданий</li>
                                    <li><strong>Пользовательские метрики</strong> - Отслеживание производительности для конкретного приложения</li>
                                    <li><strong>Анализ сбоев</strong> - Детальная проверка и отладка неудачных заданий</li>
                                    <li><strong>Системы уведомлений</strong> - Slack, email и пользовательские каналы уведомлений</li>
                                    <li><strong>Проверки здоровья</strong> - Мониторинг здоровья очередей и оповещения</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Рабочее развертывание -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-server text-[#FF6B6B] mr-3"></i>
                                Рабочее развертывание и DevOps
                            </h2>
                            <div class="content-section">
                                <h3>Стратегии развертывания</h3>
                                <p>
                                    Опыт развертывания и поддержки Horizon в различных рабочих средах:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                    <div
                                        class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-green-600 mb-2">Настройка на одном сервере</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Базовая конфигурация Horizon для приложений на одном сервере
                                            с оптимизированной обработкой очередей и мониторингом.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-purple-600 mb-2">Многосерверная архитектура</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Сложные настройки Horizon на нескольких серверах с
                                            балансировкой нагрузки и распределенной обработкой очередей.
                                        </p>
                                    </div>
                                </div>

                                <h3>Интеграция с DevOps</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker</span>
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Redis</span>
                                    <span
                                        class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Supervisor</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">CI/CD</span>
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Мониторинг</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Балансировка нагрузки</span>
                                    <span
                                        class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Оповещения</span>
                                    <span
                                        class="px-3 py-2 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm text-center">Резервные копии</span>
                                </div>
                            </div>
                        </div>

                        <!-- Оптимизация производительности -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-rocket text-[#FF6B6B] mr-3"></i>
                                Производительность и оптимизация
                            </h2>
                            <div class="content-section">
                                <p>
                                    Различные стратегии оптимизации Horizon и реализации тонкой настройки производительности:
                                </p>

                                <h3>Стратегии оптимизации</h3>
                                <ul>
                                    <li><strong>Конфигурация очередей</strong> - Оптимальное количество процессов и ограничения памяти</li>
                                    <li><strong>Стратегии балансировки</strong> - Автоматические, простые и пользовательские подходы к балансировке</li>
                                    <li><strong>Управление памятью</strong> - Предотвращение утечек памяти в долго работающих процессах</li>
                                    <li><strong>Разделение заданий</strong> - Эффективная обработка больших наборов данных</li>
                                    <li><strong>Ограничение скорости</strong> - Контроль пропускной способности заданий для внешних API</li>
                                    <li><strong>Приоритетные очереди</strong> - Обеспечение первоочередной обработки критических заданий</li>
                                </ul>

                                <h3>Опыт устранения неполадок</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-red-50 dark:bg-red-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-red-600 mb-2">Решенные распространенные проблемы</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Истощение памяти в воркерах очередей</li>
                                            <li>• Застрявшие задания и задержки обработки</li>
                                            <li>• Проблемы с подключением к Redis</li>
                                            <li>• Управление процессами Supervisor</li>
                                        </ul>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-green-600 mb-2">Решения для производительности</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Распределение нагрузки очередей</li>
                                            <li>• Пакетная обработка и разделение заданий</li>
                                            <li>• Оптимальная конфигурация Redis</li>
                                            <li>• Настройка мониторинга и оповещений</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Уровень владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#FF6B6B] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общий Horizon</span>
                                        <span class="text-sm font-bold text-[#FF6B6B]">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div
                                            class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF6B6B] to-[#e11d48]"
                                            data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Конфигурация</span>
                                        <span class="text-sm font-bold text-green-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Мониторинг и метрики</span>
                                        <span class="text-sm font-bold text-blue-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="82%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Оптимизация производительности</span>
                                        <span class="text-sm font-bold text-purple-500">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Рабочее развертывание</span>
                                        <span class="text-sm font-bold text-orange-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="75%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#FF6B6B] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Версия: <strong>Horizon 5.x</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>15+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-server text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Среды: <strong>Рабочие</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-database text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Redis: <strong>Обязателен</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Смежные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#FF6B6B] mr-2"></i>
                                Смежные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">Laravel
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                                <a href="/competences/redis"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-red-600 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-database text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">Redis
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                                <a href="/competences/queues"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-tasks text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">Системы очередей
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">88% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                                <a href="/competences/devops"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-server text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">DevOps
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div
                            class="bg-gradient-to-r from-[#FF6B6B] to-[#e11d48] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Нужен мониторинг очередей?</h3>
                            <p class="text-sm mb-4">Готов реализовать надежный мониторинг очередей с Laravel Horizon</p>
                            <a href="/contact"
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-red-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

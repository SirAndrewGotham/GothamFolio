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
                        <!-- О Laravel Octane -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                О Laravel Octane
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Octane</strong> - это высокопроизводительный сервер приложений для Laravel,
                                    который значительно ускоряет работу вашего приложения, сохраняя его загруженным в памяти
                                    между запросами. Построенный на базе Swoole и RoadRunner, Octane dramatically
                                    значительно сокращает накладные расходы на загрузку и позволяет вашему приложению обрабатывать тысячи
                                    запросов в секунду.
                                </p>

                                <h3>Ключевые преимущества</h3>
                                <ul>
                                    <li><strong>Значительное улучшение производительности</strong> - В 5-10 раз более быстрые времена отклика</li>
                                    <li><strong>Снижение использования памяти</strong> - Приложение остается загруженным в памяти</li>
                                    <li><strong>Обработка параллельных запросов</strong> - Построен на асинхронных PHP-движках</li>
                                    <li><strong>Нулевые накладные расходы на загрузку</strong> - Отсутствие загрузки фреймворка для каждого запроса</li>
                                    <li><strong>Поддержка WebSocket</strong> - Возможности реального времени с Swoole</li>
                                    <li><strong>Высокая параллельная обработка</strong> - Обработка тысяч одновременных подключений</li>
                                </ul>

                                <h3>Идеальные случаи использования</h3>
                                <p>
                                    Laravel Octane особенно полезен для:
                                </p>
                                <ul>
                                    <li>Высоконагруженных приложений и API</li>
                                    <li>Приложений реального времени, требующих WebSockets</li>
                                    <li>Микросервисов с высокими требованиями к параллельной обработке</li>
                                    <li>Приложений с тяжелыми процессами загрузки</li>
                                    <li>Систем, требующих времени отклика менее миллисекунды</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой опыт с Octane -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-purple-500 mr-3"></i>
                                Мой опыт работы с Laravel Octane
                            </h2>
                            <div class="content-section">
                                <p>
                                    Я начал изучать Laravel Octane в 2022 году при работе с высоконагруженными приложениями,
                                    которые требовали значительной оптимизации производительности. За последние 2+ года я
                                    внедрил Octane в различных рабочих средах, изучив тонкости
                                    серверов приложений и оптимизации производительности.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-server text-purple-500 mr-2"></i>
                                            Серверы приложений
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Опыт работы с серверами приложений Swoole и RoadRunner,
                                            понимание их различий и оптимальных случаев использования для каждого.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-chart-line text-blue-500 mr-2"></i>
                                            Оптимизация производительности
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Комплексное тестирование производительности и стратегии оптимизации,
                                            специально адаптированные для приложений на Octane.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Мой опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                Мой опыт работы с Laravel Octane
                            </h2>
                            <div class="content-section">
                                <p>
                                    Имея более 2 лет практического опыта работы с Laravel Octane, я разработал
                                    экспертизу в развертывании и оптимизации высокопроизводительных Laravel приложений
                                    с использованием современных серверов приложений.
                                </p>

                                <h3>Специализированные навыки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Конфигурация Swoole и RoadRunner</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Управление состоянием приложения</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Параллельное выполнение задач</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Обнаружение и предотвращение утечек памяти</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Мониторинг производительности и метрики</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Стратегии развертывания в production</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Реализация WebSocket с Swoole</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Пул соединений с базой данных</span>
                                    </div>
                                </div>

                                <h3>Технический стек</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Swoole</span>
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">RoadRunner</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">OpenSwoole</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">WebSockets</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Таймеры</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Параллелизм</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Кэширование</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Мониторинг</span>
                                </div>

                                <h3>Области оптимизации производительности</h3>
                                <ul>
                                    <li><strong>Время загрузки приложения</strong> - Сокращение накладных расходов на инициализацию фреймворка</li>
                                    <li><strong>Управление памятью</strong> - Предотвращение утечек памяти в долго работающих процессах</li>
                                    <li><strong>Соединения с базой данных</strong> - Реализация пула соединений и их повторного использования</li>
                                    <li><strong>Оптимизация кэширования</strong> - Использование стратегий кэширования в памяти</li>
                                    <li><strong>Параллельная обработка</strong> - Использование асинхронных возможностей для параллельных задач</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Проблемы внедрения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-exclamation-triangle text-yellow-500 mr-3"></i>
                                Проблемы внедрения и решения
                            </h2>
                            <div class="content-section">
                                <h3>Распространенные проблемы</h3>
                                <p>
                                    Внедрение Laravel Octane сопровождается определенными проблемами, которые требуют тщательного
                                    рассмотрения и экспертизы:
                                </p>
                                <ul>
                                    <li><strong>Управление состоянием</strong> - Обработка состояния приложения в долго работающих процессах</li>
                                    <li><strong>Утечки памяти</strong> - Выявление и предотвращение утечек памяти</li>
                                    <li><strong>Соединения с БД</strong> - Управление постоянными соединениями с базой данных</li>
                                    <li><strong>Изменения файлов</strong> - Обработка изменений кода в долго работающих серверах</li>
                                    <li><strong>Сторонние пакеты</strong> - Обеспечение совместимости с Octane</li>
                                </ul>

                                <h3>Мои решения</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Управление состоянием</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Реализована правильная изоляция состояния и процедуры очистки
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Оптимизация памяти</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Разработан мониторинг и стратегии автоматического перезапуска
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Стратегия развертывания</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Созданы процессы развертывания с нулевым временем простоя
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Мониторинг</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Внедрены комплексные проверки здоровья и метрики
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
                                    Некоторые из моих проектов и экспериментов с Laravel Octane можно найти на GitHub:
                                </p>
                                <div class="mt-4">
                                    <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                        <i class="fab fa-github mr-2"></i>
                                        <span>SirAndrewGotham на GitHub</span>
                                    </a>
                                </div>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Я постоянно экспериментирую с функциями Octane и делюсь insights о
                                    техниках оптимизации производительности для высоконагруженных Laravel приложений.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Уровень владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общий уровень</span>
                                        <span class="text-sm font-bold text-purple-500">72%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-violet-500"
                                             data-width="72%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Реализация на Swoole</span>
                                        <span class="text-sm font-bold text-blue-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Реализация на RoadRunner</span>
                                        <span class="text-sm font-bold text-green-500">70%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="70%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Оптимизация производительности</span>
                                        <span class="text-sm font-bold text-yellow-500">68%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="68%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Развертывание в production</span>
                                        <span class="text-sm font-bold text-red-500">65%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="65%" style="width: 0%"></div>
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
                                    <span class="text-sm">Опыт: <strong>2+ года</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-server text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Серверы: <strong>Swoole & RoadRunner</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>8+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-tachometer-alt text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Производительность: <strong>Улучшение в 5-10 раз</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-bolt text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Статус: <strong>Активная разработка</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Путь развития -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-purple-500 mr-2"></i>
                                Путь развития
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Базовая настройка Octane</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Реализация на Swoole & RoadRunner</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Тестирование и оптимизация производительности</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-spinner text-xs"></i>
                                    </div>
                                    <span class="text-sm">Продвинутые паттерны параллелизма</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Крупномасштабные развертывания</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Разработка кастомных серверов приложений</span>
                                </div>
                            </div>
                        </div>

                        <!-- Смежные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-purple-500 mr-2"></i>
                                Смежные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">Laravel</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                                <a href="/competences/performance" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-tachometer-alt text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">Производительность</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                                <a href="/competences/devops" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-server text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">DevOps</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                                <a href="/competences/websockets" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-broadcast-tower text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">WebSockets</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-purple-500 to-violet-500 rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Нужна высокая производительность?</h3>
                            <p class="text-sm mb-4">Обсудим оптимизацию вашего Laravel приложения</p>
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

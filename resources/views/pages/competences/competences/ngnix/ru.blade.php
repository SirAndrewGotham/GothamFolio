<x-frontend.layouts.app>
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
                                <a href="/competences/devops" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    DevOps
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Nginx
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#009639] to-[#007a2f] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-server text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Nginx</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bolt mr-1"></i>
                                            Высокая производительность
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Высокопроизводительный веб-сервер и обратный прокси для масштабируемых, надежных веб-приложений.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#009639] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#009639] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">6+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с Nginx 1.10</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#009639] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.24+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Текущая версия</div>
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
                            <!-- О Nginx -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#009639] mr-3"></i>
                                    О Nginx
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Nginx</strong> — это высокопроизводительный веб-сервер, обратный прокси и балансировщик нагрузки,
                                        известный своей стабильностью, богатым набором функций, простой конфигурацией и низким потреблением ресурсов.
                                        Он отлично справляется с одновременными подключениями и эффективно обслуживает статический контент.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Высокая производительность</strong> — Событийно-ориентированная архитектура обрабатывает тысячи одновременных подключений</li>
                                        <li><strong>Низкое использование памяти</strong> — Эффективное использование ресурсов даже при высокой нагрузке</li>
                                        <li><strong>Обратный прокси</strong> — Отлично подходит для балансировки нагрузки и маршрутизации приложений</li>
                                        <li><strong>Кэширование</strong> — Мощное кэширование статического и динамического контента</li>
                                        <li><strong>SSL/TLS терминация</strong> — Эффективное завершение SSL-соединений и управление</li>
                                        <li><strong>Перезапись URL</strong> — Гибкое манипулирование URL и перенаправление</li>
                                        <li><strong>Безопасность</strong> — Встроенные функции безопасности и ограничение частоты запросов</li>
                                    </ul>

                                    <h3>Рекомендуемые случаи использования</h3>
                                    <p>
                                        Nginx универсален и превосходно работает в различных сценариях:
                                    </p>
                                    <ul>
                                        <li>Веб-приложения и API с высокой нагрузкой</li>
                                        <li>Доставка статического контента и edge-серверы CDN</li>
                                        <li>Балансировка нагрузки между несколькими серверами приложений</li>
                                        <li>SSL-терминация и слой безопасности</li>
                                        <li>Обратный прокси для микросервисных архитектур</li>
                                        <li>Медиастриминг и раздача файлов</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в Nginx -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#009639] mr-3"></i>
                                    Мой путь в Nginx
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал работать с Nginx в 2017 году в качестве замены Apache для высоконагруженных Laravel приложений.
                                        С тех пор я прошел путь от базовой конфигурации веб-сервера до сложных настроек обратного прокси,
                                        балансировки нагрузки и оптимизации производительности для production-сред.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-random text-[#009639] mr-2"></i>
                                                Настройка обратного прокси
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Конфигурация Nginx в качестве обратного прокси для PHP-приложений,
                                                обработка SSL-терминации и маршрутизация запросов к бэкенд-сервисам.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-blue-500 mr-2"></i>
                                                Оптимизация производительности
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Настройка Nginx для максимальной производительности с использованием стратегий кэширования,
                                                оптимизации соединений и эффективной раздачи статических файлов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#009639] mr-3"></i>
                                    Мой опыт с Nginx
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 6 лет опыта работы с Nginx, я настраивал и оптимизировал веб-серверы для различных приложений,
                                        от простых веб-сайтов до сложных микросервисных архитектур, требующих высокой доступности и производительности.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Конфигурация обратного прокси</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стратегии балансировки нагрузки</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка и управление SSL/TLS</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тонкая настройка и оптимизация производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стратегии кэширования (Proxy, FastCGI)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Усиление безопасности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Перезапись и перенаправление URL</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Конфигурация виртуальных хостов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Контроль доступа и аутентификация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Gzip-сжатие</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Логирование и мониторинг</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с Docker</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты</h3>
                                    <ul>
                                        <li><strong>Высоконагруженные Laravel приложения</strong> — Nginx с PHP-FPM для оптимальной производительности</li>
                                        <li><strong>Микросервисная архитектура</strong> — Nginx в качестве API-шлюза и балансировщика нагрузки</li>
                                        <li><strong>E-commerce платформа</strong> — Кэширование и оптимизация SSL для лучшей производительности</li>
                                        <li><strong>Мультидоменный хостинг</strong> — Конфигурация виртуальных хостов для нескольких приложений</li>
                                        <li><strong>Раздача статических ресурсов</strong> — Оптимизированная раздача статических файлов с заголовками кэширования</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Технические детали -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#009639] mr-3"></i>
                                    Технические детали
                                </h2>
                                <div class="content-section">
                                    <h3>Основные возможности</h3>
                                    <p>
                                        Архитектура и возможности Nginx делают его идеальным для современных веб-приложений:
                                    </p>
                                    <ul>
                                        <li><strong>Событийно-ориентированная архитектура</strong> — Обрабатывает множество соединений в рамках одного процесса</li>
                                        <li><strong>Модульная конфигурация</strong> — Гибкая и поддерживаемая структура конфигурации</li>
                                        <li><strong>Поддержка HTTP/2 и HTTP/3</strong> — Поддержка современных протоколов для лучшей производительности</li>
                                        <li><strong>Прокси для WebSocket</strong> — Нативная обработка WebSocket-соединений</li>
                                        <li><strong>Модуль Stream</strong> — Балансировка нагрузки TCP и UDP</li>
                                    </ul>

                                    <h3>Распространенные конфигурации</h3>
                                    <p>
                                        Я работаю с различными конфигурациями и модулями Nginx:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">PHP-FPM</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Балансировка нагрузки</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SSL-терминация</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Кэширование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Перезапись URL</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Контроль доступа</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Проекты на GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#009639] mr-3"></i>
                                    Проекты на GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих проектов с конфигурациями Nginx можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Мое портфолио включает различные проекты, оптимизированные с помощью Nginx для продакшн-развертывания.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#009639] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#009639]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#009639] to-[#007a2f]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Обратный прокси</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Балансировка нагрузки</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Тонкая настройка</span>
                                            <span class="text-sm font-bold text-blue-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Безопасность</span>
                                            <span class="text-sm font-bold text-purple-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#009639] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>6+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Nginx 1.24+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>30+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-server text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">Конфигураций: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">SSL-сертификатов: <strong>20+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#009639] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#009639] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#009639] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#009639] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#009639] transition-colors"></i>
                                    </a>
                                    <a href="/competences/ssl" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-lock text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#009639] transition-colors">SSL/TLS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#009639] transition-colors"></i>
                                    </a>
                                    <a href="/competences/aws" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-aws text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#009639] transition-colors">AWS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#009639] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#009639] to-[#007a2f] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна оптимизация веб-сервера?</h3>
                                <p class="text-sm mb-4">Готов обсудить конфигурацию Nginx</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#009639] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

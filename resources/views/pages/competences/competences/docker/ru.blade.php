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
                                    Docker
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#2496ed] to-[#1d7dc2] flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-docker text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Docker</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-box mr-1"></i>
                                        Контейнеризация
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Платформа контейнеризации для развертывания приложений, обеспечивающая единообразие сред в разработке и продакшене.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#2496ed] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#2496ed] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с 2020 года</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#2496ed] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v24+</div>
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
                            <!-- О Docker -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#2496ed] mr-3"></i>
                                    О Docker
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Docker</strong> — это платформа, которая позволяет разработчикам упаковывать приложения в контейнеры — стандартизированные,
                                        исполняемые компоненты, которые объединяют исходный код приложения с библиотеками операционной системы и зависимостями,
                                        необходимыми для запуска этого кода в любой среде.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Единообразие</strong> — Одинаковая среда в разработке, тестировании и продакшене</li>
                                        <li><strong>Изоляция</strong> — Приложения работают в изолированных контейнерах без конфликтов</li>
                                        <li><strong>Переносимость</strong> — Запуск везде, где установлен Docker</li>
                                        <li><strong>Эффективность ресурсов</strong> — Легковесность по сравнению с виртуальными машинами</li>
                                        <li><strong>Быстрое развертывание</strong> — Быстрый запуск и масштабирование контейнеров</li>
                                        <li><strong>Контроль версий</strong> — Отслеживание версий образов контейнеров</li>
                                        <li><strong>Готовность к микросервисам</strong> — Идеально для микросервисной архитектуры</li>
                                    </ul>

                                    <h3>Рекомендуемые случаи использования</h3>
                                    <p>
                                        Docker необходим для современной разработки и развертывания приложений:
                                    </p>
                                    <ul>
                                        <li>Приложения с микросервисной архитектурой</li>
                                        <li>Автоматизация CI/CD пайплайнов</li>
                                        <li>Стандартизация сред разработки</li>
                                        <li>Масштабирование приложений и балансировка нагрузки</li>
                                        <li>Многокомпонентные приложения с зависимостями</li>
                                        <li>Модернизация legacy-приложений</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с Docker -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#2496ed] mr-3"></i>
                                    Мой путь с Docker
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал работать с Docker в 2020 году для контейнеризации Laravel-приложений и оптимизации рабочих процессов разработки.
                                        С тех пор я продвинулся от базовой контейнеризации до реализации многокомпонентных архитектур
                                        и оптимизации производительности контейнеров для продакшен-сред.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-layer-group text-[#2496ed] mr-2"></i>
                                                Среды разработки
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Создание единообразных сред разработки с помощью Docker Compose,
                                                обеспечение идентичных настроек для всех членов команды.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-green-500 mr-2"></i>
                                                Продакшен-развертывание
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Развертывание контейнеризированных приложений в продакшене с оптимизированными Dockerfile
                                                и эффективными стратегиями сборки образов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#2496ed] mr-3"></i>
                                    Мой опыт работы с Docker
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 3 лет опыта работы с Docker, я контейнеризировал различные приложения от простых веб-приложений
                                        до сложных микросервисных архитектур, уделяя внимание оптимизации, безопасности и поддерживаемости.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация Dockerfile</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Многокомпонентная настройка Docker Compose</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Основы оркестрации контейнеров</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация размера образов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление томами и данными</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Конфигурация сети</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Лучшие практики безопасности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с CI/CD</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Многоступенчатые сборки</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Конфигурация окружения</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Мониторинг производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Использование Docker Hub и реестров</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты</h3>
                                    <ul>
                                        <li><strong>Laravel микросервисы</strong> — Контейнеризированное Laravel API с отдельными сервисами для разных доменов</li>
                                        <li><strong>Full-stack приложение</strong> — Настройка Docker Compose с Nginx, PHP-FPM, MySQL и Redis</li>
                                        <li><strong>Среда разработки</strong> — Стандартизированная настройка Docker для командной разработки</li>
                                        <li><strong>CI/CD пайплайн</strong> — Автоматическая сборка и тестирование Docker-образов</li>
                                        <li><strong>Контейнеризация legacy-приложений</strong> — Миграция традиционных приложений на Docker</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Технические детали -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#2496ed] mr-3"></i>
                                    Технические детали
                                </h2>
                                <div class="content-section">
                                    <h3>Основные концепции</h3>
                                    <p>
                                        Мощность Docker исходит из его фундаментальных концепций, которые обеспечивают эффективную контейнеризацию:
                                    </p>
                                    <ul>
                                        <li><strong>Образы</strong> — Шаблоны только для чтения с приложением и зависимостями</li>
                                        <li><strong>Контейнеры</strong> — Запускаемые экземпляры образов</li>
                                        <li><strong>Dockerfile</strong> — Скрипт для сборки образов</li>
                                        <li><strong>Тома</strong> — Постоянное хранилище данных</li>
                                        <li><strong>Сети</strong> — Взаимодействие между контейнерами</li>
                                        <li><strong>Compose</strong> — Определение многоконтейнерных приложений</li>
                                    </ul>

                                    <h3>Инструменты и экосистема</h3>
                                    <p>
                                        Я работаю с комплексной экосистемой инструментов Docker:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker Compose</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker Hub</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker Swarm</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Portainer</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Многоступенчатые сборки</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker Registry</span>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub проекты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#2496ed] mr-3"></i>
                                    GitHub проекты
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих проектов с реализацией Docker можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Мое портфолио включает различные проекты, контейнеризированные с помощью Docker для единообразного развертывания.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#2496ed] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#2496ed]">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#2496ed] to-[#1d7dc2]"
                                                 data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Docker Compose</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Оптимизация образов</span>
                                            <span class="text-sm font-bold text-green-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Многоступенчатые сборки</span>
                                            <span class="text-sm font-bold text-blue-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Продакшен-развертывание</span>
                                            <span class="text-sm font-bold text-purple-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#2496ed] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Docker 24+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-box text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Контейнеры: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-server text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Многокомпонентные: <strong>10+ настроек</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#2496ed] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2496ed] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2496ed] transition-colors"></i>
                                    </a>
                                    <a href="/competences/nginx" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-server text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2496ed] transition-colors">Nginx</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2496ed] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2496ed] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2496ed] transition-colors"></i>
                                    </a>
                                    <a href="/competences/redis" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2496ed] transition-colors">Redis</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2496ed] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#2496ed] to-[#1d7dc2] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужны решения по контейнеризации?</h3>
                                <p class="text-sm mb-4">Готов обсудить реализацию Docker</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#2496ed] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

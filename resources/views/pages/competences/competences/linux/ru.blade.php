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
                                        Администрирование Linux серверов
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FCC624] to-[#E95420] flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-linux text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Linux Сервер</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-server mr-1"></i>
                                            Удаленное администрирование
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Экспертное удаленное администрирование серверов для веб-приложений с фокусом на безопасность, производительность и надежность в производственных средах.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-[#E95420] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">90%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#E95420] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с Ubuntu 10.04</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#E95420] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">Ubuntu 22.04</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Текущая LTS</div>
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
                            <!-- Об администрировании Linux серверов -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#E95420] mr-3"></i>
                                    Об администрировании Linux серверов
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Администрирование Linux серверов</strong> включает управление удаленными Linux-системами для веб-приложений,
                                        с фокусом на безопасность, оптимизацию производительности и надежную работу. С экспертизой в Ubuntu Server
                                        и CentOS, я специализируюсь на удаленном управлении серверами через SSH, автоматизации и мониторинге.
                                    </p>

                                    <h3>Ключевые навыки удаленного администрирования</h3>
                                    <ul>
                                        <li><strong>Управление SSH</strong> — Безопасный удаленный доступ и аутентификация по ключам</li>
                                        <li><strong>Защита серверов</strong> — Настройка firewall, fail2ban и обновления безопасности</li>
                                        <li><strong>Мониторинг производительности</strong> — Отслеживание использования ресурсов и оптимизация</li>
                                        <li><strong>Автоматическое развертывание</strong> — Скриптование и интеграция с CI/CD</li>
                                        <li><strong>Стратегии резервного копирования</strong> — Автоматические системы бэкапов и восстановление</li>
                                        <li><strong>Управление службами</strong> — Systemd, мониторинг процессов и оптимизация служб</li>
                                        <li><strong>Сетевая конфигурация</strong> — Удаленное устранение сетевых проблем и оптимизация</li>
                                    </ul>

                                    <h3>Сценарии использования удаленных серверов</h3>
                                    <p>
                                        Специализация на управлении удаленными серверами для различных сценариев веб-приложений:
                                    </p>
                                    <ul>
                                        <li>Хостинг и масштабирование рабочих веб-приложений</li>
                                        <li>Администрирование и оптимизация серверов баз данных</li>
                                        <li>Кластеры приложений с балансировкой нагрузки</li>
                                        <li>Серверы CI/CD и сборки</li>
                                        <li>Инфраструктура мониторинга и логирования</li>
                                        <li>Обратные прокси и кэширующие серверы</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в Linux -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#E95420] mr-3"></i>
                                    Мой путь в администрировании Linux серверов
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал с Linux desktop в 2012 году с Ubuntu 10.04 и перешел к администрированию серверов в 2014.
                                        С тех пор я управлял десятками удаленных серверов для веб-приложений, прогрессируя от базового управления VPS
                                        до сложных мультисерверных архитектур с автоматизированным развертыванием и мониторингом.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-terminal text-[#E95420] mr-2"></i>
                                                Удаленное управление серверами
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обширный опыт управления удаленными серверами через SSH, включая настройку производительности,
                                                защиту и автоматизированные задачи обслуживания для производственных сред.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-shield-alt text-blue-500 mr-2"></i>
                                                Защита серверов
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Внедрение комплексных мер безопасности, включая настройку firewall,
                                                обнаружение вторжений и регулярные обновления безопасности для удаленных серверов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#E95420] mr-3"></i>
                                    Мой опыт работы с Linux серверами
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея 10+ лет опыта работы с Linux и 8+ лет, сфокусированных на администрировании серверов,
                                        я управлял удаленными серверами для различных веб-приложений, от сайтов малого бизнеса
                                        до высоконагруженных производственных систем, требующих 99.9% времени доступности.
                                    </p>

                                    <h3>Навыки удаленного администрирования</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка SSH и управление ключами</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка firewall (UFW/iptables)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Мониторинг серверов и оповещения</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Автоматические системы резервного копирования</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка производительности и оптимизация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Защита серверов и обновления</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bash-скриптование и автоматизация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Docker и управление контейнерами</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление SSL-сертификатами</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Администрирование серверов баз данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Настройка веб-серверов (Nginx/Apache)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с CI/CD пайплайнами</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые серверные проекты</h3>
                                    <ul>
                                        <li><strong>Высоконагруженная платформа электронной коммерции</strong> — Управление серверами Ubuntu, обрабатывающими 10k+ пользователей в день</li>
                                        <li><strong>Микросервисная архитектура</strong> — Множество серверов Ubuntu с Docker и оркестрацией</li>
                                        <li><strong>Кластер баз данных</strong> — Репликация MySQL на нескольких серверах CentOS</li>
                                        <li><strong>Инфраструктура CI/CD</strong> — Серверы автоматизированного развертывания для команд разработки</li>
                                        <li><strong>Стек мониторинга</strong> — Мониторинг серверов с Prometheus и Grafana</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Технические детали -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#E95420] mr-3"></i>
                                    Технические детали
                                </h2>
                                <div class="content-section">
                                    <h3>Инструменты управления серверами</h3>
                                    <p>
                                        Владение основными инструментами для удаленного администрирования Linux серверов:
                                    </p>
                                    <ul>
                                        <li><strong>SSH & SCP</strong> — Безопасный удаленный доступ и передача файлов</li>
                                        <li><strong>Bash-скриптование</strong> — Автоматизация серверных задач и развертываний</li>
                                        <li><strong>Cron задачи</strong> — Автоматизация запланированных задач</li>
                                        <li><strong>Systemd</strong> — Управление службами и мониторинг</li>
                                        <li><strong>Управление логами</strong> — Анализ системных и прикладных логов</li>
                                        <li><strong>Управление пакетами</strong> — apt, yum и обновления ПО</li>
                                    </ul>

                                    <h3>Мониторинг и безопасность</h3>
                                    <p>
                                        Комплексная реализация мониторинга и безопасности:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">htop/atop</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">UFW/Fail2ban</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Logwatch</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Prometheus</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Grafana</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SSL Certbot</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Серверная архитектура -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-network-wired text-[#E95420] mr-3"></i>
                                    Опыт работы с серверными архитектурами
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Опыт работы с различными серверными архитектурами и стратегиями развертывания для удаленного управления:
                                    </p>

                                    <h3>Архитектурные паттерны</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#E95420] mb-2">Одиночный сервер</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Полный веб-стек на одном VPS с Nginx, PHP-FPM, MySQL и Redis
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#E95420] mb-2">Кластер с балансировкой нагрузки</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Множество серверов приложений за балансировщиком нагрузки с общей базой данных
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#E95420] mb-2">Микросервисы</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Докеризированные сервисы с API-шлюзом и обнаружением сервисов
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#E95420] mb-2">Репликация баз данных</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Настройки master-slave и master-master репликации баз данных
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#E95420] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#E95420]">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FCC624] to-[#E95420]"
                                                 data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Удаленное администрирование</span>
                                            <span class="text-sm font-bold text-green-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Защита серверов</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Настройка производительности</span>
                                            <span class="text-sm font-bold text-blue-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Автоматизация</span>
                                            <span class="text-sm font-bold text-purple-500">87%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="87%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#E95420] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>10+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Дистрибутив: <strong>Ubuntu/CentOS</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Управляемых серверов: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Безопасность: <strong>Усиленная</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#E95420] w-5 mr-3"></i>
                                        <span class="text-sm">Время доступности: <strong>99.9%+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#E95420] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/nginx" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-server text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#E95420] transition-colors">Nginx</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#E95420] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#E95420] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#E95420] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#E95420] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#E95420] transition-colors"></i>
                                    </a>
                                    <a href="/competences/aws" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-aws text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#E95420] transition-colors">AWS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#E95420] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#FCC624] to-[#E95420] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужно администрирование серверов?</h3>
                                <p class="text-sm mb-4">Готов обсудить управление Linux серверами</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#E95420] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

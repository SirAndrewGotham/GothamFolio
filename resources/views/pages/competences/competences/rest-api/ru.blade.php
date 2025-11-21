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
                                <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Бэкенд-разработка
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    REST API
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-emerald-50 to-green-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#10b981] to-[#059669] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-exchange-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">REST API</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-plug mr-1"></i>
                                            Разработка API
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Проектирование и разработка API для веб-сервисов с фокусом на масштабируемость, безопасность и удобство разработчиков.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#10b981] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#10b981] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыт с 2018 года</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#10b981] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">RESTful</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Архитектурный стиль</div>
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
                            <!-- О REST API -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#10b981] mr-3"></i>
                                    О разработке REST API
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>REST (Representational State Transfer)</strong> — это архитектурный стиль для проектирования сетевых приложений.
                                        RESTful API предоставляют стандартизированный способ взаимодействия систем через HTTP, используя безсостоятельные операции
                                        и стандартные HTTP методы для создания, чтения, обновления и удаления ресурсов.
                                    </p>

                                    <h3>Ключевые принципы</h3>
                                    <ul>
                                        <li><strong>Без состояния</strong> — Каждый запрос содержит всю информацию, необходимую для его обработки</li>
                                        <li><strong>Клиент-сервер</strong> — Разделение ответственности между клиентом и сервером</li>
                                        <li><strong>Кэшируемость</strong> — Ответы должны определять себя как кэшируемые или нет</li>
                                        <li><strong>Единообразный интерфейс</strong> — Последовательная идентификация и манипуляция ресурсами</li>
                                        <li><strong>Многоуровневая система</strong> — Архитектура может состоять из иерархических уровней</li>
                                        <li><strong>Код по требованию</strong> — Серверы могут расширять функциональность клиента</li>
                                    </ul>

                                    <h3>Распространенные случаи использования</h3>
                                    <p>
                                        REST API являются фундаментальными для современной веб-разработки:
                                    </p>
                                    <ul>
                                        <li>Бэкенды и сервисы мобильных приложений</li>
                                        <li>Коммуникация одностраничных приложений (SPA)</li>
                                        <li>Взаимодействие в микросервисной архитектуре</li>
                                        <li>Интеграции с третьими сторонами и партнерские API</li>
                                        <li>Внутренняя коммуникация между сервисами</li>
                                        <li>Публичные API для расширяемости платформы</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в REST API -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#10b981] mr-3"></i>
                                    Мой путь в REST API
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал разрабатывать REST API в 2018 году с Laravel для бэкендов мобильных приложений и SPA фронтендов.
                                        С тех пор я перешел от простых CRUD API к сложным системам с аутентификацией, ограничением частоты запросов,
                                        версионированием и комплексной документацией.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-emerald-50 to-green-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-mobile-alt text-[#10b981] mr-2"></i>
                                                Мобильные бэкенды
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Разработка надежных REST API для приложений iOS и Android,
                                                обработка аутентификации, push-уведомлений и офлайн-синхронизации.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-shield-alt text-blue-500 mr-2"></i>
                                                Безопасные API
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Реализация комплексных мер безопасности, включая JWT аутентификацию,
                                                ограничение частоты запросов, валидацию входных данных и управление API ключами.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#10b981] mr-3"></i>
                                    Мой опыт работы с REST API
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 5 лет опыта разработки REST API, я создавал API для различных приложений,
                                        начиная от простых внутренних инструментов до высоконагруженных публичных API, обслуживающих тысячи запросов в минуту.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Принципы RESTful дизайна</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Аутентификация и авторизация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стратегии версионирования API</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ограничение частоты запросов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Валидация и санитизация входных данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Обработка ошибок и статус-коды</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Документирование API (OpenAPI/Swagger)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование и автоматизация тестов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Оптимизация производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стратегии кэширования</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Реализация вебхуков</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Конфигурация API Gateway</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты API</h3>
                                    <ul>
                                        <li><strong>API платформы электронной коммерции</strong> — REST API для мобильного приложения и SPA с 50+ эндпоинтами</li>
                                        <li><strong>API CRM системы</strong> — Внутренний REST API с доступом на основе ролей</li>
                                        <li><strong>Интеграция платежных шлюзов</strong> — REST API для нескольких платежных провайдеров</li>
                                        <li><strong>API аналитической панели</strong> — Высокопроизводительный API для данных в реальном времени</li>
                                        <li><strong>API интеграции с третьими сторонами</strong> — Публичный API для партнерских интеграций</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Паттерны дизайна API -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#10b981] mr-3"></i>
                                    Дизайн API и паттерны
                                </h2>
                                <div class="content-section">
                                    <h3>Лучшие практики дизайна API</h3>
                                    <p>
                                        Следование отраслевым стандартам и лучшим практикам дизайна API:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#10b981] mb-2">Именование ресурсов</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Последовательные, множественные имена ресурсов с правильными HTTP методами
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#10b981] mb-2">Формат ответа</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Стандартизированные JSON ответы с правильными статус-кодами
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#10b981] mb-2">Обработка ошибок</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Последовательные ответы об ошибках с понятными сообщениями
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#10b981] mb-2">Версионирование</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Стратегии версионирования на основе URL и заголовков
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Методы аутентификации</h3>
                                    <p>
                                        Опыт работы с различными механизмами аутентификации API:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">JWT Токены</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">OAuth2</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">API Ключи</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Базовая аутентификация</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Sanctum</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Passport</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Документирование и тестирование -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-book text-[#10b981] mr-3"></i>
                                    Документирование и тестирование
                                </h2>
                                <div class="content-section">
                                    <h3>Документирование API</h3>
                                    <p>
                                        Комплексная документация API для удобства разработчиков:
                                    </p>
                                    <ul>
                                        <li><strong>OpenAPI/Swagger</strong> — Стандартизированная документация API</li>
                                        <li><strong>API Blueprint</strong> — Документация API на основе Markdown</li>
                                        <li><strong>Postman коллекции</strong> — Интерактивное тестирование и документация API</li>
                                        <li><strong>Документация Laravel API</strong> — Автоматическая генерация документации</li>
                                    </ul>

                                    <h3>Стратегии тестирования</h3>
                                    <p>
                                        Надежные подходы к тестированию для обеспечения надежности API:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Модульное тестирование контроллеров</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграционное тестирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Функциональное тестирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование производительности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование безопасности</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Нагрузочное тестирование</span>
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
                                    <i class="fas fa-chart-bar text-[#10b981] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#10b981]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#10b981] to-[#059669]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Дизайн API</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Безопасность</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Документирование</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Производительность</span>
                                            <span class="text-sm font-bold text-purple-500">83%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="83%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#10b981] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>5+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">Создано API: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">Эндпоинты: <strong>200+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-mobile-alt text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">Мобильные приложения: <strong>10+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">Безопасность: <strong>JWT/OAuth2</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#10b981] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10b981] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10b981] transition-colors"></i>
                                    </a>
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10b981] transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10b981] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10b981] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10b981] transition-colors"></i>
                                    </a>
                                    <a href="/competences/redis" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10b981] transition-colors">Redis</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10b981] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#10b981] to-[#059669] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна разработка API?</h3>
                                <p class="text-sm mb-4">Готов обсудить ваши требования к API</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#10b981] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

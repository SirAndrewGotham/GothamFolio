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
                        <!-- О библиотеке Requests -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#44A5CB] mr-3"></i>
                                О библиотеке Requests
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Requests</strong> - это элегантная и простая HTTP-библиотека для Python, созданная для людей.
                                    Она абстрагирует сложности выполнения HTTP-запросов за красивым, простым API, чтобы вы
                                    могли сосредоточиться на взаимодействии с сервисами и потреблении данных в вашем приложении.
                                </p>

                                <h3>Ключевые преимущества</h3>
                                <ul>
                                    <li><strong>Понятный API</strong> - Простые, интуитивные методы для всех HTTP-глаголов</li>
                                    <li><strong>Автоматическое декодирование контента</strong> - Автоматическое декодирование JSON, текста и других типов контента</li>
                                    <li><strong>SSL-верификация</strong> - Встроенная проверка SSL-сертификатов</li>
                                    <li><strong>Пул соединений</strong> - Эффективное повторное использование соединений с keep-alive</li>
                                    <li><strong>Поддержка аутентификации</strong> - Базовая, Digest, OAuth и пользовательская аутентификация</li>
                                    <li><strong>Поддержка сессий</strong> - Постоянные сессии с cookies и заголовками</li>
                                    <li><strong>Обработка таймаутов</strong> - Настраиваемые таймауты для надежных приложений</li>
                                </ul>

                                <h3>Основные возможности</h3>
                                <p>
                                    Requests предоставляет комплексный набор функций для HTTP-коммуникации:
                                </p>
                                <ul>
                                    <li><strong>HTTP-методы</strong> - GET, POST, PUT, DELETE, PATCH, HEAD, OPTIONS</li>
                                    <li><strong>Обработка параметров</strong> - URL-параметры, данные форм, JSON-полезные нагрузки</li>
                                    <li><strong>Управление заголовками</strong> - Пользовательские заголовки и автоматическое определение content-type</li>
                                    <li><strong>Поддержка cookies</strong> - Автоматическая обработка cookies и управление сессиями</li>
                                    <li><strong>Обработка редиректов</strong> - Автоматическое следование редиректам с настраиваемыми лимитами</li>
                                    <li><strong>Обработка ошибок</strong> - Встроенная иерархия исключений для различных типов ошибок</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь с Requests -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#44A5CB] mr-3"></i>
                                Мой путь с библиотекой Requests
                            </h2>
                            <div class="content-section">
                                <p>
                                    Я начал использовать Requests в 2019 году, и она быстро стала моей основной библиотекой для всех HTTP-операций в Python.
                                    За 5+ лет я использовал ее в сотнях проектов, от простых API-вызовов до сложных приложений
                                    веб-скрапинга и production backend-систем. Ее элегантный дизайн API повлиял на мое представление о дизайне библиотек.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-cloud text-[#44A5CB] mr-2"></i>
                                            Интеграция API
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Обширный опыт интеграции с REST API,
                                            веб-сервисами и сторонними платформами в различных отраслях.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-spider text-purple-500 mr-2"></i>
                                            Веб-скрапинг
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Создавал надежные системы веб-скрапинга с правильным управлением сессиями,
                                            ограничением частоты запросов и обработкой ошибок с использованием Requests.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Мой опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#44A5CB] mr-3"></i>
                                Мой опыт работы с Requests
                            </h2>
                            <div class="content-section">
                                <p>
                                    Имея 5+ лет обширного опыта, я освоил Requests для различных сценариев HTTP-коммуникации
                                    и интегрировал ее с многочисленными приложениями и системами.
                                </p>

                                <h3>Основные навыки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Все HTTP-методы и использование глаголов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Управление сессиями и обработка cookies</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Механизмы аутентификации</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Обработка ошибок и управление исключениями</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Загрузка файлов и multipart form data</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Парсинг ответов и обработка контента</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Конфигурация прокси и SSL-верификация</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Оптимизация производительности и пул соединений</span>
                                    </div>
                                </div>

                                <h3>Освоенные HTTP-функции</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">GET/POST</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Сессии</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Аутентификация</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Ошибки</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Загрузка файлов</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Прокси</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Стриминг</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SSL/TLS</span>
                                </div>

                                <h3>Продвинутые паттерны использования</h3>
                                <ul>
                                    <li><strong>Ограничение частоты запросов</strong> - Реализация пользовательского rate limiting для потребления API</li>
                                    <li><strong>Логика повторных попыток</strong> - Создание надежных механизмов повторных попыток с экспоненциальной задержкой</li>
                                    <li><strong>Стриминг ответов</strong> - Обработка больших ответов с помощью стриминга</li>
                                    <li><strong>Пользовательская аутентификация</strong> - Реализация сложных потоков аутентификации</li>
                                    <li><strong>Паттерны middleware</strong> - Создание промежуточного слоя для запросов/ответов</li>
                                    <li><strong>Пул соединений</strong> - Оптимизация производительности с повторным использованием соединений</li>
                                </ul>
                            </div>
                        </div>

                        <!-- HTTP-методы и паттерны использования -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-exchange-alt text-[#44A5CB] mr-3"></i>
                                HTTP-методы и паттерны использования
                            </h2>
                            <div class="content-section">
                                <h3>Основные HTTP-методы</h3>
                                <p>
                                    Обширный опыт работы со всеми основными HTTP-методами и их соответствующими случаями использования:
                                </p>
                                <ul>
                                    <li><strong>GET</strong> - Получение данных с серверов, API-эндпоинтов и веб-ресурсов</li>
                                    <li><strong>POST</strong> - Создание новых ресурсов, отправка форм и создание данных через API</li>
                                    <li><strong>PUT/PATCH</strong> - Обновление существующих ресурсов полными или частичными данными</li>
                                    <li><strong>DELETE</strong> - Удаление ресурсов с серверов и API</li>
                                    <li><strong>HEAD</strong> - Получение заголовков без тела ответа для эффективности</li>
                                    <li><strong>OPTIONS</strong> - Обнаружение доступных методов и CORS preflight запросы</li>
                                </ul>

                                <h3>Обработка данных</h3>
                                <p>
                                    Освоены различные форматы данных и типы полезных нагрузок:
                                </p>
                                <ul>
                                    <li><strong>JSON-полезные нагрузки</strong> - Автоматическая сериализация и десериализация</li>
                                    <li><strong>Данные форм</strong> - URL-encoded отправка форм и загрузка файлов</li>
                                    <li><strong>Параметры запроса</strong> - Динамическое построение URL-параметров</li>
                                    <li><strong>Multipart формы</strong> - Сложные данные форм с файлами и полями</li>
                                    <li><strong>Бинарные данные</strong> - Обработка загрузки файлов и бинарного контента</li>
                                    <li><strong>Стриминг данных</strong> - Эффективная обработка больших ответов</li>
                                </ul>

                                <h3>Обработка ответов</h3>
                                <p>
                                    Комплексная обработка и анализ ответов:
                                </p>
                                <ul>
                                    <li>Проверка и валидация статус-кодов</li>
                                    <li>Определение типа контента и автоматический парсинг</li>
                                    <li>Инспекция и манипуляция заголовками</li>
                                    <li>Извлечение и управление cookies</li>
                                    <li>Определение кодировки и преобразование текста</li>
                                    <li>Стриминг ответов для больших наборов данных</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Продвинутые возможности -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#44A5CB] mr-3"></i>
                                Продвинутые возможности и техники
                            </h2>
                            <div class="content-section">
                                <p>
                                    У меня есть обширный опыт работы с продвинутыми функциями Requests для создания надежных приложений:
                                </p>

                                <h3>Управление сессиями</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#44A5CB] mb-2">Постоянные сессии</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Использование объектов Session для пула соединений,
                                            сохранения cookies и повторного использования заголовков между запросами
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#44A5CB] mb-2">Потоки аутентификации</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Реализация сложных последовательностей аутентификации
                                            с обновлением токенов и управлением учетными данными
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#44A5CB] mb-2">Конфигурация адаптеров</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Настройка HTTPAdapter для пула соединений,
                                            стратегий повторных попыток и конфигурации SSL
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#44A5CB] mb-2">Паттерны middleware</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Создание pre-request и post-response хуков
                                            для логирования, мониторинга и трансформации
                                        </p>
                                    </div>
                                </div>

                                <h3>Обработка ошибок и отказоустойчивость</h3>
                                <ul>
                                    <li><strong>Иерархия исключений</strong> - Правильная обработка различных типов исключений</li>
                                    <li><strong>Механизмы повторных попыток</strong> - Реализация интеллектуальной логики повторных попыток с backoff</li>
                                    <li><strong>Паттерны Circuit Breaker</strong> - Предотвращение каскадных сбоев в распределенных системах</li>
                                    <li><strong>Управление таймаутами</strong> - Настройка соответствующих таймаутов для различных сценариев</li>
                                    <li><strong>SSL-верификация</strong> - Управление SSL-сертификатами и уровнями проверки</li>
                                    <li><strong>Конфигурация прокси</strong> - Работа с HTTP и SOCKS прокси</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Паттерны интеграции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-project-diagram text-[#44A5CB] mr-3"></i>
                                Паттерны интеграции и случаи использования
                            </h2>
                            <div class="content-section">
                                <h3>Интеграция API</h3>
                                <p>
                                    Обширный опыт интеграции с различными типами API:
                                </p>
                                <ul>
                                    <li><strong>REST API</strong> - CRUD-операции с правильной HTTP-семантикой</li>
                                    <li><strong>GraphQL</strong> - Отправка запросов и мутаций на GraphQL-эндпоинты</li>
                                    <li><strong>OAuth 2.0</strong> - Реализация OAuth-потоков для сторонних сервисов</li>
                                    <li><strong>Обработка вебхуков</strong> - Получение и обработка вебхук-уведомлений</li>
                                    <li><strong>API с ограничением частоты</strong> - Соблюдение и обработка ограничений частоты API</li>
                                    <li><strong>API с пагинацией</strong> - Навигация по пагинированным ответам API</li>
                                </ul>

                                <h3>Веб-скрапинг и автоматизация</h3>
                                <p>
                                    Создавал надежные системы веб-скрапинга с использованием Requests:
                                </p>
                                <ul>
                                    <li><strong>Управление сессиями</strong> - Поддержание состояния между множественными запросами</li>
                                    <li><strong>Отправка форм</strong> - Автоматизация заполнения и отправки форм</li>
                                    <li><strong>Обработка JavaScript</strong> - Работа с сайтами с большим количеством JavaScript</li>
                                    <li><strong>Ограничение частоты</strong> - Реализация вежливого скрапинга с задержками</li>
                                    <li><strong>Ротация прокси</strong> - Использование множественных прокси для избежания блокировок</li>
                                    <li><strong>Обработка CAPTCHA</strong> - Интеграция с сервисами решения CAPTCHA</li>
                                </ul>

                                <h3>Production-приложения</h3>
                                <ul>
                                    <li><strong>Коммуникация микросервисов</strong> - HTTP-вызовы между сервисами</li>
                                    <li><strong>Интеграция data pipeline</strong> - Получение данных из внешних источников</li>
                                    <li><strong>Мониторинг и health checks</strong> - Периодические health check запросы</li>
                                    <li><strong>Загрузка/выгрузка файлов</strong> - Обработка передачи файлов через HTTP</li>
                                    <li><strong>Реализация вебхуков</strong> - Отправка вебхук-уведомлений</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Производительность и лучшие практики -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-tachometer-alt text-[#44A5CB] mr-3"></i>
                                Производительность и лучшие практики
                            </h2>
                            <div class="content-section">
                                <p>
                                    У меня есть обширный опыт оптимизации использования Requests для производительности и надежности:
                                </p>

                                <h3>Оптимизация производительности</h3>
                                <ul>
                                    <li><strong>Пул соединений</strong> - Повторное использование соединений с объектами Session</li>
                                    <li><strong>Keep-Alive</strong> - Использование HTTP keep-alive для снижения задержки</li>
                                    <li><strong>Стриминг ответов</strong> - Обработка больших ответов без проблем с памятью</li>
                                    <li><strong>Конкурентные запросы</strong> - Использование threading или asyncio для параллельных запросов</li>
                                    <li><strong>DNS-кэширование</strong> - Реализация DNS-кэширования для более быстрого разрешения</li>
                                    <li><strong>Сжатие</strong> - Использование gzip и других методов сжатия</li>
                                </ul>

                                <h3>Лучшие практики безопасности</h3>
                                <ul>
                                    <li><strong>SSL/TLS-верификация</strong> - Правильная проверка сертификатов</li>
                                    <li><strong>Управление учетными данными</strong> - Безопасное хранение API-ключей и токенов</li>
                                    <li><strong>Валидация входных данных</strong> - Проверка URL и параметров перед запросами</li>
                                    <li><strong>Безопасность заголовков</strong> - Установка соответствующих security заголовков</li>
                                    <li><strong>Безопасность прокси</strong> - Безопасная конфигурация и аутентификация прокси</li>
                                </ul>

                                <h3>Паттерны надежности</h3>
                                <ul>
                                    <li><strong>Стратегии повторных попыток</strong> - Экспоненциальная задержка и jitter</li>
                                    <li><strong>Circuit Breakers</strong> - Предотвращение каскадных сбоев</li>
                                    <li><strong>Конфигурация таймаутов</strong> - Соответствующие таймауты для различных сценариев</li>
                                    <li><strong>Классификация ошибок</strong> - Различие между повторяемыми и неповторяемыми ошибками</li>
                                    <li><strong>Мониторинг и логирование</strong> - Комплексное логирование запросов и метрики</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Проекты на GitHub -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fab fa-github text-[#44A5CB] mr-3"></i>
                                Проекты на GitHub
                            </h2>
                            <div class="content-section">
                                <p>
                                    Некоторые из моих проектов с использованием Requests можно найти на GitHub:
                                </p>
                                <div class="mt-4">
                                    <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                        <i class="fab fa-github mr-2"></i>
                                        <span>SirAndrewGotham на GitHub</span>
                                    </a>
                                </div>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Я постоянно работаю над проектами, которые демонстрируют практические применения
                                    Requests для интеграции API, веб-скрапинга и HTTP-коммуникации.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карта профессионализма -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#44A5CB] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее владение</span>
                                        <span class="text-sm font-bold text-[#44A5CB]">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#44A5CB] to-[#2D8BBA]"
                                             data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Интеграция API</span>
                                        <span class="text-sm font-bold text-green-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Управление сессиями</span>
                                        <span class="text-sm font-bold text-blue-500">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Обработка ошибок</span>
                                        <span class="text-sm font-bold text-purple-500">87%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="87%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Производительность</span>
                                        <span class="text-sm font-bold text-red-500">83%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="83%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#44A5CB] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>5+ лет</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Версия: <strong>Requests 2.31+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>100+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-plug text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Интегрировано API: <strong>50+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-rocket text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Уровень: <strong>Эксперт</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Путь обучения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-[#44A5CB] mr-2"></i>
                                Путь обучения
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Основные HTTP-методы</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Обработка ответов</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Управление сессиями</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Потоки аутентификации</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Продвинутая обработка ошибок</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Оптимизация производительности</span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#44A5CB] mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-python text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Python</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                </a>
                                <a href="/competences/flask" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-gray-600 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-flask text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Flask</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                </a>
                                <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-code text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Разработка API</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                </a>
                                <a href="/competences/web-scraping" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-spider text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Веб-скрапинг</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-[#44A5CB] to-[#2D8BBA] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                            <p class="text-sm mb-4">Готов обсудить ваш проект интеграции API</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#44A5CB] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

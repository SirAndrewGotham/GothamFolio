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
                        <!-- О Laravel Sanctum -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#10B981] mr-3"></i>
                                О Laravel Sanctum
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Sanctum</strong> предоставляет облегченную систему аутентификации для SPA (одностраничных приложений),
                                    мобильных приложений и простых API на основе токенов. Sanctum позволяет каждому пользователю вашего приложения генерировать
                                    несколько API-токенов для своей учетной записи с определенными возможностями.
                                </p>

                                <h3>Основные методы аутентификации</h3>
                                <ul>
                                    <li><strong>Аутентификация SPA</strong> - Аутентификация на основе сессий для SPA в одном домене</li>
                                    <li><strong>Аутентификация API-токенов</strong> - Аутентификация на основе токенов для мобильных приложений и сторонних сервисов</li>
                                    <li><strong>Токены с возможностями</strong> - Детальные разрешения для API-токенов</li>
                                    <li><strong>Защита от CSRF</strong> - Встроенная защита для аутентификации SPA</li>
                                    <li><strong>Управление сессиями</strong> - Интеграция с сессиями Laravel для SPA</li>
                                    <li><strong>Поддержка мобильных приложений</strong> - Оптимизировано для аутентификации мобильных приложений</li>
                                </ul>

                                <h3>Ключевые преимущества</h3>
                                <p>
                                    Sanctum предлагает несколько преимуществ по сравнению с традиционными методами аутентификации:
                                </p>
                                <ul>
                                    <li>Легковесный и простой в реализации</li>
                                    <li>Отсутствие сложности OAuth для простых случаев использования</li>
                                    <li>Беспрерывная интеграция с сессионной аутентификацией Laravel</li>
                                    <li>Разрешения на основе возможностей токенов для детального контроля доступа</li>
                                    <li>Отличная производительность для высоконагруженных приложений</li>
                                    <li>Встроенные функции безопасности и лучшие практики</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой опыт с Sanctum -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#10B981] mr-3"></i>
                                Мой опыт с Sanctum
                            </h2>
                            <div class="content-section">
                                <p>
                                    Начал внедрять Laravel Sanctum в 2021 году для современных SPA-приложений и бэкендов мобильных приложений.
                                    За более чем 3+ года развернул Sanctum в различных проектах, включая SPA на Vue.js, мобильные приложения на React Native,
                                    и интеграции со сторонними API, требующие безопасной аутентификации.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-globe text-[#10B981] mr-2"></i>
                                            SPA-приложения
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Внедрил Sanctum для нескольких SPA на Vue.js и React
                                            с аутентификацией на основе сессий и защитой от CSRF.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-mobile-alt text-blue-500 mr-2"></i>
                                            Мобильные бэкенды
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Создал безопасные API-бэкенды для приложений на React Native и Flutter
                                            используя аутентификацию на основе токенов Sanctum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Технический опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#10B981] mr-3"></i>
                                Технический опыт
                            </h2>
                            <div class="content-section">
                                <p>
                                    Всесторонний опыт работы с конфигурацией Sanctum, шаблонами реализации,
                                    и лучшими практиками безопасности в различных архитектурах приложений.
                                </p>

                                <h3>Основные навыки Sanctum</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Конфигурация аутентификации SPA</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Генерация и управление API-токенами</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Разрешения токенов на основе возможностей</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Реализация защиты от CSRF</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Конфигурация CORS</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Аутентификация мобильных приложений</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Возможности и области токенов</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Лучшие практики безопасности</span>
                                    </div>
                                </div>

                                <h3>Шаблоны реализации</h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Сессионная аут. SPA</span>
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Аут. API-токенов</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Мобильная аут.</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Сторонние API</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Мультитенантность</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Микросервисы</span>
                                </div>

                                <h3>Безопасность и лучшие практики</h3>
                                <ul>
                                    <li><strong>Безопасность токенов</strong> - Безопасная генерация, хранение и передача токенов</li>
                                    <li><strong>Защита от CSRF</strong> - Реализация и тестирование защиты от CSRF</li>
                                    <li><strong>Конфигурация CORS</strong> - Правильная настройка CORS для кросс-доменных запросов</li>
                                    <li><strong>Срок действия токенов</strong> - Управление временем жизни токенов и стратегии обновления</li>
                                    <li><strong>Управление возможностями</strong> - Детальные системы разрешений и валидация</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Шаблоны интеграции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#10B981] mr-3"></i>
                                Шаблоны интеграции
                            </h2>
                            <div class="content-section">
                                <h3>Интеграция с фронтендом</h3>
                                <p>
                                    Опыт интеграции Sanctum с различными фронтенд-фреймворками и мобильными платформами:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-green-600 mb-2">Vue.js / React SPA</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Аутентификация на основе сессий с управлением CSRF-токенами,
                                            автоматическое обновление токенов и безопасная коммуникация с API.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-blue-600 mb-2">Мобильные приложения</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Аутентификация на основе токенов для приложений на React Native и Flutter
                                            с безопасным хранением и механизмами обновления токенов.
                                        </p>
                                    </div>
                                </div>

                                <h3>Интеграция с бэкендом</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Fortify</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Laravel Breeze</span>
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Jetstream</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Мульти-гварды</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Ролевая модель</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Разрешения</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Мультитенантность</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Микросервисы</span>
                                </div>
                            </div>
                        </div>

                        <!-- Безопасность и продакшен -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-shield-alt text-[#10B981] mr-3"></i>
                                Безопасность и продакшен
                            </h2>
                            <div class="content-section">
                                <p>
                                    Готовые к продакшену реализации Sanctum с лучшими практиками безопасности и оптимизацией производительности:
                                </p>

                                <h3>Реализация безопасности</h3>
                                <ul>
                                    <li><strong>Хеширование токенов</strong> - Безопасное хранение токенов с использованием встроенного хеширования Laravel</li>
                                    <li><strong>Принудительное использование HTTPS</strong> - Требования SSL/TLS для рабочих сред</li>
                                    <li><strong>Ротация токенов</strong> - Регулярное обновление и аннулирование токенов</li>
                                    <li><strong>Ограничение частоты запросов</strong> - Ограничение API для предотвращения злоупотреблений и атак перебором</li>
                                    <li><strong>Валидация входных данных</strong> - Комплексная валидация запросов аутентификации</li>
                                    <li><strong>Логирование и мониторинг</strong> - Логирование событий безопасности и обнаружение аномалий</li>
                                </ul>

                                <h3>Продакшен-соображения</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-green-600 mb-2">Оптимизация производительности</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Индексирование базы данных для поиска токенов</li>
                                            <li>• Стратегии кэширования токенов</li>
                                            <li>• Оптимизация хранения сессий</li>
                                            <li>• Соображения балансировки нагрузки</li>
                                        </ul>
                                    </div>
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-600 mb-2">Стратегии развертывания</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Конфигурации для конкретных сред</li>
                                            <li>• Развертывания с нулевым временем простоя</li>
                                            <li>• Стратегии миграции базы данных</li>
                                            <li>• Процедуры резервного копирования и восстановления</li>
                                        </ul>
                                    </div>
                                </div>

                                <h3>Опыт устранения неполадок</h3>
                                <ul>
                                    <li><strong>Проблемы с CORS</strong> - Решение проблем совместного использования ресурсов между источниками</li>
                                    <li><strong>Несоответствия CSRF-токенов</strong> - Отладка и исправление проблем защиты от CSRF</li>
                                    <li><strong>Проблемы валидации токенов</strong> - Решение проблем проверки и истечения срока действия токенов</li>
                                    <li><strong>Управление сессиями</strong> - Обработка сохранения сессий и безопасности</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Уровень владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#10B981] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общий Sanctum</span>
                                        <span class="text-sm font-bold text-[#10B981]">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#10B981] to-[#047857]"
                                             data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Аутентификация SPA</span>
                                        <span class="text-sm font-bold text-green-500">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Аутентификация API-токенов</span>
                                        <span class="text-sm font-bold text-blue-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Реализация безопасности</span>
                                        <span class="text-sm font-bold text-purple-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Развертывание в продакшен</span>
                                        <span class="text-sm font-bold text-orange-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#10B981] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>3+ года</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Версия: <strong>Sanctum 3.x</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>15+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Аудиты безопасности: <strong>10+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-mobile-alt text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Мобильные приложения: <strong>5+</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Смежные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#10B981] mr-2"></i>
                                Смежные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#10B981] transition-colors">Laravel</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                </a>
                                <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-code text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#10B981] transition-colors">Разработка API</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                </a>
                                <a href="/competences/security" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-shield-alt text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#10B981] transition-colors">Безопасность</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                </a>
                                <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-vuejs text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#10B981] transition-colors">Vue.js</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">78% уровень</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-[#10B981] to-[#047857] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Нужна безопасная аутентификация?</h3>
                            <p class="text-sm mb-4">Готов реализовать надежную аутентификацию с Laravel Sanctum</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-green-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

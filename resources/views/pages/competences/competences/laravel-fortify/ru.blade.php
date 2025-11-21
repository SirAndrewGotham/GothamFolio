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
    <section class="py-16">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Основной контент -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- О Laravel Fortify -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#3B82F6] mr-3"></i>
                                О Laravel Fortify
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Fortify</strong> - это бекенд аутентификации для Laravel, не зависящий от фронтенда.
                                    Fortify реализует логику аутентификации для вашего приложения, включая такие функции, как вход,
                                    регистрация, сброс пароля, подтверждение email и многое другое, не заставляя вас использовать
                                    какие-либо конкретные решения для фронтенда или JavaScript-фреймворки.
                                </p>

                                <h3>Основные функции аутентификации</h3>
                                <ul>
                                    <li><strong>Регистрация пользователей</strong> - Полная система регистрации пользователей с валидацией</li>
                                    <li><strong>Вход и выход</strong> - Безопасная аутентификация и управление сессиями</li>
                                    <li><strong>Сброс пароля</strong> - Функциональность сброса пароля по email</li>
                                    <li><strong>Подтверждение email</strong> - Подтверждение аккаунта через email</li>
                                    <li><strong>Двухфакторная аутентификация</strong> - Улучшенная безопасность с поддержкой 2FA</li>
                                    <li><strong>Управление профилем</strong> - Обновление и управление профилем пользователя</li>
                                    <li><strong>Удаление аккаунта</strong> - Безопасное удаление аккаунта с подтверждением</li>
                                </ul>

                                <h3>Преимущества headless-архитектуры</h3>
                                <p>
                                    Headless-подход Fortify предоставляет несколько преимуществ:
                                </p>
                                <ul>
                                    <li>Полная свобода в выборе фронтенд-технологий</li>
                                    <li>Последовательная логика аутентификации для нескольких фронтендов</li>
                                    <li>Легкая интеграция с SPA, мобильными приложениями и традиционными веб-приложениями</li>
                                    <li>Гибкая настройка потоков аутентификации</li>
                                    <li>Отсутствие зависимостей от фронтенда или навязывания решений</li>
                                    <li>Идеально для приложений на основе API</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь с Fortify -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#3B82F6] mr-3"></i>
                                Мой путь с Fortify
                            </h2>
                            <div class="content-section">
                                <p>
                                    Начал работать с Laravel Fortify в 2022 году для headless-бекендов аутентификации.
                                    За более чем 2+ года реализовал Fortify в различных проектах, включая SPA на Vue.js,
                                    приложения на React, бекенды для мобильных приложений и традиционные веб-приложения, требующие
                                    пользовательских интерфейсов аутентификации.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-code text-[#3B82F6] mr-2"></i>
                                            Headless-бекенды
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Создал несколько headless-бекендов аутентификации, обслуживающих
                                            различные фронтенд-приложения с последовательной безопасностью.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-shield-alt text-purple-500 mr-2"></i>
                                            Улучшение безопасности
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Улучшил реализации Fortify дополнительными функциями
                                            безопасности и пользовательскими рабочими процессами аутентификации.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Технический опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#3B82F6] mr-3"></i>
                                Технический опыт
                            </h2>
                            <div class="content-section">
                                <p>
                                    Комплексный опыт конфигурации, настройки и интеграции Fortify
                                    в различных архитектурах приложений и фронтенд-технологиях.
                                </p>

                                <h3>Основные навыки Fortify</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Конфигурация провайдера услуг Fortify</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка и расширение функций</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка пайплайна аутентификации</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка двухфакторной аутентификации</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Реализация подтверждения email</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка сброса пароля</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Функции управления профилем</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Лучшие практики безопасности</span>
                                    </div>
                                </div>

                                <h3>Расширенные функции и настройка</h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Настройка 2FA</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Подтверждение email</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Обновление профиля</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Подтверждение пароля</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Восстановление аккаунта</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Сессии браузера</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Управление API-токенами</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Управление командами</span>
                                    <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Социальная аутентификация</span>
                                </div>

                                <h3>Интеграция и настройка</h3>
                                <ul>
                                    <li><strong>Дизайн, не зависящий от фронтенда</strong> - Интеграция с любым фронтенд-фреймворком</li>
                                    <li><strong>Пользовательские ответы аутентификации</strong> - Настроенные API-ответы для разных клиентов</li>
                                    <li><strong>Расширенные профили пользователей</strong> - Дополнительные данные пользователя и поля профиля</li>
                                    <li><strong>Поддержка мультитенантности</strong> - Аутентификация в мультитенантных приложениях</li>
                                    <li><strong>Пользовательские правила валидации</strong> - Расширенная валидация для регистрации и профилей</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Интеграция с фронтендом -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#3B82F6] mr-3"></i>
                                Интеграция с фронтендом
                            </h2>
                            <div class="content-section">
                                <h3>Опыт работы с несколькими фреймворками</h3>
                                <p>
                                    Опыт интеграции Fortify с различными фронтенд-технологиями и фреймворками:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-green-600 mb-2">Vue.js & React SPA</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Headless-бекенды аутентификации для современных JavaScript SPA
                                            с токен-базированной аутентификацией и управлением сессиями.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-yellow-600 mb-2">Мобильные приложения</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            API-аутентификация для приложений React Native и Flutter
                                            с безопасным управлением токенами и механизмами обновления.
                                        </p>
                                    </div>
                                </div>

                                <h3>Шаблоны интеграции</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Интеграция Sanctum</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Сессионная аутентификация</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Токен-аутентификация</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">OAuth2</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Socialite</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Livewire</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Inertia.js</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Blade шаблоны</span>
                                </div>
                            </div>
                        </div>

                        <!-- Безопасность и продакшен -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-shield-alt text-[#3B82F6] mr-3"></i>
                                Безопасность и продакшен
                            </h2>
                            <div class="content-section">
                                <p>
                                    Готовые к продакшену реализации Fortify с улучшенными функциями безопасности и лучшими практиками:
                                </p>

                                <h3>Улучшения безопасности</h3>
                                <ul>
                                    <li><strong>Двухфакторная аутентификация</strong> - 2FA на основе TOTP с кодами восстановления</li>
                                    <li><strong>Ограничение частоты запросов</strong> - Защита от атак методом грубой силы</li>
                                    <li><strong>Политики паролей</strong> - Строгие требования к паролям и валидация</li>
                                    <li><strong>Безопасность сессий</strong> - Безопасное управление сессиями и защита</li>
                                    <li><strong>Безопасность email</strong> - Безопасные потоки подтверждения email и сброса пароля</li>
                                    <li><strong>Блокировка аккаунта</strong> - Защита от повторных неудачных попыток</li>
                                </ul>

                                <h3>Реализация в продакшене</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-600 mb-2">Оптимизация производительности</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Оптимизация базы данных для пользовательских запросов</li>
                                            <li>• Стратегии кэширования для данных аутентификации</li>
                                            <li>• Эффективное управление хранением сессий</li>
                                            <li>• Соображения по балансировке нагрузки</li>
                                        </ul>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-green-600 mb-2">Стратегии развертывания</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Конфигурации для конкретных окружений</li>
                                            <li>• Стратегии миграции базы данных</li>
                                            <li>• Процедуры развертывания без простоя</li>
                                            <li>• Планирование резервного копирования и восстановления</li>
                                        </ul>
                                    </div>
                                </div>

                                <h3>Пользовательские функции и расширения</h3>
                                <ul>
                                    <li><strong>Пользовательская регистрация</strong> - Расширенная регистрация с дополнительными полями</li>
                                    <li><strong>Социальная аутентификация</strong> - Интеграция с социальными провайдерами через Socialite</li>
                                    <li><strong>Многофакторные опции</strong> - Дополнительные факторы и методы аутентификации</li>
                                    <li><strong>Аудит-логирование</strong> - Комплексное логирование событий аутентификации</li>
                                    <li><strong>Пользовательские middleware</strong> - Дополнительные middleware безопасности и валидации</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карточка уровня владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#3B82F6] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее по Fortify</span>
                                        <span class="text-sm font-bold text-[#3B82F6]">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#3B82F6] to-[#1d4ed8]"
                                             data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Конфигурация и настройка</span>
                                        <span class="text-sm font-bold text-green-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Настройка функций</span>
                                        <span class="text-sm font-bold text-blue-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Реализация безопасности</span>
                                        <span class="text-sm font-bold text-purple-500">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Интеграция с фронтендом</span>
                                        <span class="text-sm font-bold text-orange-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="75%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#3B82F6] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>2+ года</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Версия: <strong>Fortify 1.x</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>12+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Аудиты безопасности: <strong>8+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Интеграции с фронтендом: <strong>6+ фреймворков</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#3B82F6] mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#3B82F6] transition-colors">Laravel</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                </a>
                                <a href="/competences/laravel-sanctum" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-shield-alt text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#3B82F6] transition-colors">Laravel Sanctum</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                </a>
                                <a href="/competences/security" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-lock text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#3B82F6] transition-colors">Безопасность</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                </a>
                                <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-code text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#3B82F6] transition-colors">API разработка</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-[#3B82F6] to-[#1d4ed8] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Нужна headless-аутентификация?</h3>
                            <p class="text-sm mb-4">Готовы реализовать надежную аутентификацию с Laravel Fortify</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

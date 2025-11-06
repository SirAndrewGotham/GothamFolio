<x-frontend.layouts.app>
    <!-- Main Content -->
    <main class="w-full pt-20">
        <!-- Breadcrumbs -->
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
                                    Backend Development
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Python
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Icon and Basic Info -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-python text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 python-gradient">Python</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-seedling mr-1"></i>
                                            Активно развиваю
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Универсальный язык программирования для веб-разработки, анализа данных и автоматизации.
                                Активно изучаю и применяю в проектах с 2023 года.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">70%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">1+ год</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Коммерческий опыт</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">Сертификат</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Data Analytics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- About Python -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    О Python
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Python</strong> — это высокоуровневый язык программирования общего назначения,
                                        который отличается простым и чистым синтаксисом, что делает его идеальным для начинающих
                                        и профессионалов. Благодаря огромной экосистеме библиотек, Python применяется в веб-разработке,
                                        анализе данных, машинном обучении, автоматизации и научных вычислениях.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Простой синтаксис</strong> — легко читаемый и понятный код</li>
                                        <li><strong>Многофункциональность</strong> — подходит для различных областей применения</li>
                                        <li><strong>Богатая экосистема</strong> — огромное количество библиотек и фреймворков</li>
                                        <li><strong>Кроссплатформенность</strong> — работает на разных операционных системах</li>
                                        <li><strong>Сильное сообщество</strong> — активная поддержка и развитие</li>
                                        <li><strong>Быстрое прототипирование</strong> — идеален для MVP и исследовательских проектов</li>
                                    </ul>

                                    <h3>Основные области применения</h3>
                                    <p>
                                        Python универсален и эффективен в различных сферах:
                                    </p>
                                    <ul>
                                        <li><strong>Веб-разработка</strong> — Django, FastAPI, Flask</li>
                                        <li><strong>Наука о данных</strong> — анализ, визуализация, машинное обучение</li>
                                        <li><strong>Автоматизация</strong> — скрипты, боты, системное администрирование</li>
                                        <li><strong>Научные вычисления</strong> — математическое моделирование, исследования</li>
                                        <li><strong>Разработка игр</strong> — прототипирование, инструменты</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Python Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-blue-500 mr-3"></i>
                                    Мой путь с Python
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Начал изучать Python в 2023 году, сосредоточившись на анализе данных и веб-разработке.
                                        Прошел сертификационный курс "Data Analytics with Python" в государственной школе Москвы,
                                        где изучил основы анализа данных, визуализации и прогнозирования.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                                Анализ Данных
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Изучил полный цикл анализа данных: сбор, очистка, анализ, визуализация
                                                и построение прогнозных моделей с использованием библиотек Pandas, NumPy, Matplotlib.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-globe text-green-500 mr-2"></i>
                                                Веб-разработка
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Освоил создание REST API с FastAPI и веб-приложений с Django.
                                                Изучаю лучшие практики Python для бэкенд-разработки.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                    Мой опыт с Python
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Активно развиваю навыки Python с 2023 года, применяя язык в различных проектах
                                        и постоянно расширяя знания через практику и обучение.
                                    </p>

                                    <h3>Основные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Основы языка и ООП</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Анализ данных с Pandas</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Визуализация с Matplotlib/Seaborn</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>REST API с FastAPI</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Веб-фреймворк Django</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Автоматизация скриптов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Работа с базами данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Основы машинного обучения</span>
                                        </div>
                                    </div>

                                    <h3>Технологический стек</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Pandas</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">NumPy</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">FastAPI</span>
                                        <span class="px-3 py-2 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-lg text-sm text-center">Django</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Matplotlib</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Seaborn</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Jupyter</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SQLAlchemy</span>
                                    </div>

                                    <h3>Текущие проекты изучения</h3>
                                    <ul>
                                        <li><strong>Углубленное изучение FastAPI</strong> — создание высокопроизводительных API</li>
                                        <li><strong>Машинное обучение</strong> — изучение Scikit-learn и основ нейронных сетей</li>
                                        <li><strong>Асинхронное программирование</strong> — освоение asyncio для веб-приложений</li>
                                        <li><strong>Тестирование</strong> — pytest и best practices для тестирования Python-кода</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Certificate Section -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-award text-yellow-500 mr-3"></i>
                                    Сертификация
                                </h2>
                                <div class="content-section">
                                    <div class="flex flex-col md:flex-row items-center gap-6">
                                        <div class="flex-shrink-0">
                                            <div class="w-20 h-20 rounded-xl bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center text-white">
                                                <i class="fas fa-certificate text-2xl"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold mb-2">Data Analytics with Python</h3>
                                            <p class="text-gray-600 dark:text-gray-400 mb-3">
                                                Государственная школа Москвы • 2023
                                            </p>
                                            <p>
                                                Комплексный курс, охватывающий полный цикл анализа данных: от сбора и очистки
                                                до визуализации и построения прогнозных моделей. Изучены основные библиотеки
                                                для работы с данными и статистического анализа.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub Projects -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-blue-500 mr-3"></i>
                                    Проекты на GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Некоторые из моих Python проектов можно найти на GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham на GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Постоянно добавляю новые Python проекты, отражающие мой прогресс в изучении языка
                                        и его применении в реальных задачах.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-blue-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500"
                                                 data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Анализ данных</span>
                                            <span class="text-sm font-bold text-green-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Веб-разработка</span>
                                            <span class="text-sm font-bold text-purple-500">65%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="65%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Автоматизация</span>
                                            <span class="text-sm font-bold text-yellow-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Библиотеки данных</span>
                                            <span class="text-sm font-bold text-red-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>1+ год</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Python 3.11+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Проектов: <strong>10+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-certificate text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Сертификат: <strong>Data Analytics</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Статус: <strong>Активно развиваю</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Learning Path -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                                    План развития
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Основы Python и ООП</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Анализ данных (Pandas, NumPy)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Визуализация (Matplotlib, Seaborn)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Веб-фреймворки (FastAPI, Django)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Машинное обучение</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Асинхронное программирование</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-blue-500 mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/data-science" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-line text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Data Science</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">65% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/sql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">SQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">API Development</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Интересует сотрудничество?</h3>
                                <p class="text-sm mb-4">Готов обсудить проекты с использованием Python</p>
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

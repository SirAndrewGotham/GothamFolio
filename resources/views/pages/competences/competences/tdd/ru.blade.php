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
                                <a href="/competences/testing" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Тестирование
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Разработка через тестирование
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#8B5CF6] to-[#7C3AED] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-sync-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">TDD</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                    <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-code mr-1"></i>
                                        Красный-Зеленый-Рефакторинг
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Методология разработки через тестирование для создания надежного, сопровождаемого кода через цикл Красный-Зеленый-Рефакторинг.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#8B5CF6] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#8B5CF6] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ года</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Практика TDD</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#8B5CF6] mr-3">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">25+ проектов</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Внедрено TDD</div>
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
                            <!-- О TDD -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#8B5CF6] mr-3"></i>
                                    О разработке через тестирование
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Разработка через тестирование (TDD)</strong> — это методология разработки программного обеспечения, где тесты пишутся до фактического кода.
                                        Следуя циклу Красный-Зеленый-Рефакторинг, TDD обеспечивает качество кода, уменьшает количество ошибок и создает комплексный набор тестов,
                                        который служит живой документацией для системы.
                                    </p>

                                    <h3>Цикл TDD</h3>
                                    <ul>
                                        <li><strong>Красный</strong> — Написание падающего теста, определяющего желаемую функциональность</li>
                                        <li><strong>Зеленый</strong> — Написание минимального кода, необходимого для прохождения теста</li>
                                        <li><strong>Рефакторинг</strong> — Улучшение кода при сохранении зеленых тестов</li>
                                    </ul>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Лучший дизайн</strong> — Заставляет думать об интерфейсе до реализации</li>
                                        <li><strong>Комплексное тестирование</strong> — Естественное покрытие тестами всех функций</li>
                                        <li><strong>Защита от регрессии</strong> — Мгновенная обратная связь о критических изменениях</li>
                                        <li><strong>Живая документация</strong> — Тесты служат исполняемыми спецификациями</li>
                                        <li><strong>Уверенный рефакторинг</strong> — Безопасные изменения кода с тестовой страховкой</li>
                                        <li><strong>Сокращение отладки</strong> — Раннее обнаружение проблем в цикле разработки</li>
                                    </ul>

                                    <h3>Мышление TDD</h3>
                                    <p>
                                        TDD — это больше, чем техника, это философия разработки:
                                    </p>
                                    <ul>
                                        <li>Писать тесты с точки зрения пользователя</li>
                                        <li>Фокусироваться на поведении, а не реализации</li>
                                        <li>Принимать инкрементальную разработку</li>
                                        <li>Доверять циклу обратной связи</li>
                                        <li>Ценить сопровождаемость выше умности</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в TDD -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#8B5CF6] mr-3"></i>
                                    Мой путь в TDD
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я принял TDD в 2019 году после переживания боли сопровождения больших непротестированных кодовых баз.
                                        Начиная с небольших проектов, я постепенно внедрял TDD в свой рабочий процесс, в конечном итоге
                                        реализуя его в корпоративных приложениях и обучая команды практикам TDD.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-graduation-cap text-[#8B5CF6] mr-2"></i>
                                                Обучение команд
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Обучал команды разработки методологиям TDD,
                                                помогая им перейти от традиционного тестирования к подходу "тесты-первыми".
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-building text-blue-500 mr-2"></i>
                                                Корпоративное внедрение
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Внедрял практики TDD в крупномасштабные корпоративные приложения,
                                                значительно снижая количество ошибок и улучшая качество кода.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#8B5CF6] mr-3"></i>
                                    Мой опыт TDD
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея более 4 лет практики TDD в более чем 25 проектах, я применял разработку через тестирование
                                        в различных областях, включая электронную коммерцию, финансовые услуги и разработку API,
                                        постоянно обеспечивая более высокое качество программного обеспечения с меньшим количеством проблем в продакшене.
                                    </p>

                                    <h3>Методологии TDD</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Классический TDD (Outside-In)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Лондонская школа TDD (Inside-Out)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка через поведение (BDD)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка через приемочные тесты</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Разработка через тестирование баз данных</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>TDD с API-первым подходом</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция TDD с унаследованным кодом</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Подход TDD для микросервисов</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты TDD</h3>
                                    <ul>
                                        <li><strong>Калькулятор финансовых рисков</strong> — Реализация TDD с покрытием тестами 95%+</li>
                                        <li><strong>Платежный шлюз для электронной коммерции</strong> — Разработка "тесты-первыми" для критических финансовых операций</li>
                                        <li><strong>Архитектура микросервисов API</strong> — TDD с контрактами-первыми для нескольких сервисов</li>
                                        <li><strong>Модернизация унаследованной системы</strong> — Постепенное внедрение TDD в существующую кодовую базу</li>
                                        <li><strong>Программа обучения TDD для команд</strong> — Комплексное образование и менторство по TDD</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Техники TDD -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#8B5CF6] mr-3"></i>
                                    Техники и шаблоны TDD
                                </h2>
                                <div class="content-section">
                                    <h3>Продвинутые практики TDD</h3>
                                    <p>
                                        Экспертиза в сложных техниках и шаблонах TDD:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Страгия тестовых двойников</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Стратегическое использование моков, стабов и фейков
                                                для изоляции модулей и определения коллабораций.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Приоритет трансформаций</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Применение premises приоритета трансформаций
                                                для руководства выбором реализации во время Зеленой фазы.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Триангуляция</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Использование нескольких примеров тестов для приведения
                                                общих решений из конкретных случаев.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Очевидная реализация</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Знание, когда пропускать маленькие шаги и
                                                реализовывать очевидное решение напрямую.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Стратегии тестирования в TDD</h3>
                                    <p>
                                        Комплексные подходы к тестированию в рамках TDD:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Модульное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Интеграционное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Приемочное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Контрактное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Свойственное тестирование</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Мутационное тестирование</span>
                                    </div>
                                </div>
                            </div>

                            <!-- TDD на практике -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-hammer text-[#8B5CF6] mr-3"></i>
                                    TDD на практике
                                </h2>
                                <div class="content-section">
                                    <h3>Применение TDD в реальных условиях</h3>
                                    <p>
                                        Практический опыт применения TDD к различным сценариям разработки:
                                    </p>
                                    <ul>
                                        <li><strong>Проекты с нуля</strong> — Начало с TDD с самого начала проекта</li>
                                        <li><strong>Развитие существующих систем</strong> — Внедрение TDD в существующие кодовые базы</li>
                                        <li><strong>Интеграция с унаследованным кодом</strong> — Использование TDD для безопасного изменения унаследованных систем</li>
                                        <li><strong>Разработка API</strong> — Разработка API с контрактами-первыми с использованием TDD</li>
                                        <li><strong>Операции с базами данных</strong> — TDD для слоев доступа к данным и миграций</li>
                                        <li><strong>Интеграции со сторонними сервисами</strong> — Эффективное тестирование внешних зависимостей</li>
                                    </ul>

                                    <h3>Проблемы и решения</h3>
                                    <p>
                                        Преодоление распространенных проблем внедрения TDD:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Медленное выполнение тестов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Сложные зависимости</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Интеграция с унаследованным кодом</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Сопротивление команды</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование UI-компонентов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Тестирование баз данных</span>
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
                                    <i class="fas fa-chart-bar text-[#8B5CF6] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#8B5CF6]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#8B5CF6] to-[#7C3AED]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Методология</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Обучение команд</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интеграция с legacy</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Корпоративное внедрение</span>
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
                                    <i class="fas fa-lightbulb text-[#8B5CF6] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>4+ года</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Обучал команд: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bug text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Снижение ошибок: <strong>70%+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Качество кода: <strong>Высокое</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#8B5CF6] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/phpunit" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flask text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">PHPUnit</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pest-php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#7CFC00] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-vial text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">Pest PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/clean-code" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-broom text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">Чистый код</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владения</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#8B5CF6] to-[#7C3AED] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна экспертиза в TDD?</h3>
                                <p class="text-sm mb-4">Готов обсудить разработку через тестирование</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#8B5CF6] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
                            <a href="/competences/soft-skills" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                Гибкие навыки
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Адаптивность
                                    </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Герой-секция -->
    <section class="py-12 bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                    <!-- Иконка и основная информация -->
                    <div class="flex-shrink-0">
                        <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FF5722] to-[#FF9800] flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-exchange-alt text-4xl"></i>
                        </div>
                    </div>

                    <!-- Основная информация -->
                    <div class="flex-grow text-center lg:text-left">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                            <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 adaptability-gradient">Адаптивность</h1>
                            <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Ключевой навык
                                        </span>
                            </div>
                        </div>
                        <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                            Быстрая адаптация к новым технологиям, методологиям и изменяющимся требованиям. Краеугольный камень моего профессионального подхода.
                        </p>

                        <!-- Статистика -->
                        <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">92%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">12+ лет</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Профессиональный опыт</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">50+ проектов</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Успешно адаптировано</div>
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
                        <!-- Об адаптивности -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#FF5722] mr-3"></i>
                                Об адаптивности
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Адаптивность</strong> — это способность быстро и эффективно приспосабливаться к новым условиям, технологиям и требованиям.
                                    В стремительном мире технологий этот навык стал фундаментальным для моего успеха в разнообразных проектах и отраслях.
                                </p>

                                <h3>Ключевые принципы</h3>
                                <ul>
                                    <li><strong>Непрерывное обучение</strong> — Восприятие новых технологий и методологий как возможностей</li>
                                    <li><strong>Гибкое мышление</strong> — Готовность менять подходы при изменении обстоятельств</li>
                                    <li><strong>Устойчивость</strong> — Сохранение производительности в условиях изменений и давления</li>
                                    <li><strong>Проактивная корректировка</strong> — Предвосхищение изменений и соответствующая подготовка</li>
                                    <li><strong>Кросс-функциональное применение</strong> — Перенос навыков в различные области и контексты</li>
                                </ul>

                                <h3>Профессиональный контекст</h3>
                                <p>
                                    За мои 12+ лет опыта адаптивность была решающей для:
                                </p>
                                <ul>
                                    <li>Перехода между различными технологическими стеками и фреймворками</li>
                                    <li>Работы с разнообразными командами и организационными культурами</li>
                                    <li>Реагирования на изменяющиеся требования проекта и его масштаб</li>
                                    <li>Принятия новых методологий разработки и практик</li>
                                    <li>Навигации в условиях отраслевых сдвигов и новых технологий</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь адаптивности -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#FF5722] mr-3"></i>
                                Мой путь адаптивности
                            </h2>
                            <div class="content-section">
                                <p>
                                    Мой путь адаптивности охватывает более 12 лет навигации по технологической эволюции,
                                    организационным изменениям и меняющимся рыночным запросам. Этот навык позволил мне
                                    преуспевать в различных средах и обеспечивать стабильные результаты.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-code-branch text-[#FF5722] mr-2"></i>
                                            Технологические переходы
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Успешный переход через несколько технологических эр — от PHP 3.3 к современным фреймворкам,
                                            с принятием новых парадигм программирования и подходов к разработке.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-users text-blue-500 mr-2"></i>
                                            Адаптация в команде и культуре
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Эффективная работа в стартапах, агентствах и корпоративных средах,
                                            адаптация к различным структурам команд, стилям общения и рабочим процессам.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ключевые сценарии адаптивности -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#FF5722] mr-3"></i>
                                Ключевые сценарии адаптивности
                            </h2>
                            <div class="content-section">
                                <p>
                                    На протяжении моей карьеры адаптивность проверялась и доказывалась в различных сложных сценариях:
                                </p>

                                <h3>Эволюция технологического стека</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>PHP 3.3 → Современный PHP 8.x</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Процедурное → Объектно-ориентированное программирование</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Кастомные фреймворки → Экосистема Laravel</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Монолитная → Микросервисная архитектура</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Традиционная → Cloud-Native разработка</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Добавление Python и Data Science в набор навыков</span>
                                    </div>
                                </div>

                                <h3>Адаптация методологий и процессов</h3>
                                <ul>
                                    <li><strong>От Waterfall к Agile</strong> — Переход процессов разработки к итеративным, совместным подходам</li>
                                    <li><strong>Интеграция DevOps</strong> — Адаптация к CI/CD пайплайнам и практикам автоматизированного развертывания</li>
                                    <li><strong>Удаленная коллаборация</strong> — Освоение координации распределенных команд и инструментов коммуникации</li>
                                    <li><strong>Кросс-функциональные команды</strong> — Эффективная работа с разнообразными наборами навыков и перспективами</li>
                                </ul>

                                <h3>Гибкость проекта и требований</h3>
                                <ul>
                                    <li><strong>Изменения масштаба</strong> — Успешное управление развивающимися требованиями проекта без ущерба для качества</li>
                                    <li><strong>Сдвиги в технологиях</strong> — Адаптация к изменениям технологического стека в середине проекта</li>
                                    <li><strong>Реструктуризация команды</strong> — Сохранение продуктивности через организационные изменения</li>
                                    <li><strong>Адаптация к рынку</strong> — Смена фокуса проекта на основе рыночных отзывов и трендов</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Подход к обучению и росту -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-graduation-cap text-[#FF5722] mr-3"></i>
                                Подход к обучению и росту
                            </h2>
                            <div class="content-section">
                                <h3>Непрерывное развитие навыков</h3>
                                <p>
                                    Мой подход к поддержанию высокой адаптивности включает систематическое обучение и развитие навыков:
                                </p>
                                <ul>
                                    <li><strong>Мониторинг технологий</strong> — Регулярное отслеживание новых технологий и отраслевых трендов</li>
                                    <li><strong>Практические эксперименты</strong> — Создание проектов-прототипов с новыми инструментами</li>
                                    <li><strong>Участие в сообществе</strong> — Участие в технических сообществах и обмен знаниями</li>
                                    <li><strong>Формальное и неформальное обучение</strong> — Сочетание курсов, сертификаций с практическим применением</li>
                                    <li><strong>Кросс-тренинг</strong> — Развитие дополнительных навыков в различных областях</li>
                                </ul>

                                <h3>Стратегии адаптации</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF5722] mb-2">Постепенное внедрение</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Постепенная интеграция новых технологий при сохранении существующих систем
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF5722] mb-2">Управление рисками</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Оценка и смягчение рисков во время технологических переходов
                                        </p>
                                    </div>
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF5722] mb-2">Передача знаний</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Документирование и обмен опытом обучения с командами
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF5722] mb-2">Интеграция обратной связи</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Использование обратной связи для постоянного совершенствования подходов к адаптации
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
                                <i class="fas fa-chart-bar text-[#FF5722] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общая адаптивность</span>
                                        <span class="text-sm font-bold text-[#FF5722]">92%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF5722] to-[#FF9800]"
                                             data-width="92%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Обучение технологиям</span>
                                        <span class="text-sm font-bold text-green-500">95%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Адаптация процессов</span>
                                        <span class="text-sm font-bold text-blue-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Гибкость в команде</span>
                                        <span class="text-sm font-bold text-purple-500">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Управление изменениями</span>
                                        <span class="text-sm font-bold text-orange-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#FF5722] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#FF5722] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>12+ лет</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-sync-alt text-[#FF5722] w-5 mr-3"></i>
                                    <span class="text-sm">Адаптировано проектов: <strong>50+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#FF5722] w-5 mr-3"></i>
                                    <span class="text-sm">Технологических стеков: <strong>10+ освоено</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users text-[#FF5722] w-5 mr-3"></i>
                                    <span class="text-sm">Типы команд: <strong>От стартапа до корпорации</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-globe text-[#FF5722] w-5 mr-3"></i>
                                    <span class="text-sm">Отрасли: <strong>8+ доменов</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#FF5722] mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/problem-solving" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-puzzle-piece text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF5722] transition-colors">Решение проблем</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% proficiency</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                </a>
                                <a href="/competences/continuous-learning" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-graduation-cap text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF5722] transition-colors">Непрерывное обучение</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">88% proficiency</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                </a>
                                <a href="/competences/communication" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-comments text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF5722] transition-colors">Коммуникация</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                </a>
                                <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-users text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF5722] transition-colors">Лидерство</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-[#FF5722] to-[#FF9800] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                            <p class="text-sm mb-4">Готовы обсудить, как адаптивность может принести пользу вашему проекту</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-orange-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

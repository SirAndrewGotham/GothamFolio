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
                                <a href="/competences/design" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Дизайн
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Adobe Photoshop
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#31A8FF] to-[#001E36] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-paint-brush text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 photoshop-gradient">Adobe Photoshop</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Ключевой навык
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Стандартное в отрасли программное обеспечение для редактирования изображений и графического дизайна. Основной инструмент для творческих проектов с концы 1990-х.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">25+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">500+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Завершенных проектов</div>
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
                            <!-- О Photoshop -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#31A8FF] mr-3"></i>
                                    О Adobe Photoshop
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Adobe Photoshop</strong> — это ведущее в отрасли программное обеспечение для редактирования изображений и графического дизайна,
                                        которое определяет цифровое творчество на протяжении десятилетий. Он предоставляет непревзойденные инструменты для обработки фотографий,
                                        цифровой живописи, графического дизайна и композитинга.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Редактирование на основе слоев</strong> — Неразрушающий рабочий процесс с полной гибкостью</li>
                                        <li><strong>Расширенные инструменты выделения</strong> — Точное маскирование и изоляция объектов</li>
                                        <li><strong>Мощное ретуширование</strong> — Профессиональное восстановление и улучшение фотографий</li>
                                        <li><strong>Креативные фильтры и эффекты</strong> — Бесконечные возможности для художественного выражения</li>
                                        <li><strong>Инструменты типографики</strong> — Расширенное манипулирование текстом и стилизация</li>
                                        <li><strong>Возможности 3D</strong> — Базовое 3D-моделирование и текстурирование</li>
                                    </ul>

                                    <h3>Рекомендуемые области применения</h3>
                                    <p>
                                        Photoshop превосходен в различных творческих областях и особенно эффективен для:
                                    </p>
                                    <ul>
                                        <li>Профессионального ретуширования и обработки фотографий</li>
                                        <li>Цифровой живописи и иллюстрации</li>
                                        <li>Макетов для веб-дизайна и дизайна интерфейсов</li>
                                        <li>Печатного дизайна и верстки</li>
                                        <li>Графики для социальных сетей и маркетинговых материалов</li>
                                        <li>Креативного композитинга и сюрреалистичного искусства</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь в Photoshop -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#31A8FF] mr-3"></i>
                                    Мой путь с Photoshop
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал свой путь в Photoshop в конце 1990-х, сначала сосредоточившись на ретушировании фотографий
                                        и постепенно расширяя навыки в области графического дизайна и цифрового искусства. За более чем 25 лет
                                        я развил комплексный набор навыков, охватывающий как техническую точность, так и творческое выражение.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-magic text-[#31A8FF] mr-2"></i>
                                                Продвинутое ретуширование
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Освоил профессиональные техники ретуши, включая частотное разложение,
                                                осветление и затемнение (Dodge & Burn) и расширенную цветокоррекцию для портретной и предметной фотографии.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-puzzle-piece text-purple-500 mr-2"></i>
                                                Креативный композитинг
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Развил опыт в сложном фотомонтаже, бесшовном объединении нескольких изображений
                                                с использованием продвинутых техник маскирования и работы со светом.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#31A8FF] mr-3"></i>
                                    Мой опыт работы с Photoshop
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Более чем за 25 лет интенсивного использования Photoshop я работал над разнообразными проектами,
                                        от простого редактирования фотографий до сложных творческих композиций и профессиональной дизайнерской работы.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Продвинутое управление слоями</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Точное маскирование и выделение</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Неразрушающее редактирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Цветокоррекция и цветоградирование</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Восстановление фотографий</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Цифровая живопись и иллюстрация</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Смарт-объекты и фильтры</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Типографика и текстовые эффекты</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Веб-дизайн и дизайн интерфейсов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Создание действий и автоматизация</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты</h3>
                                    <ul>
                                        <li><strong>Улучшение предметной фотографии</strong> — Профессиональное ретуширование для клиентов электронной коммерции</li>
                                        <li><strong>Серия ретуширования портретов</strong> — Естественное, но безупречное улучшение портретов</li>
                                        <li><strong>Графика для маркетинговых кампаний</strong> — Визуалы для социальных сетей и рекламные материалы</li>
                                        <li><strong>Макеты интерфейсов веб-сайтов</strong> — Детальные дизайн-макеты для проектов веб-разработки</li>
                                        <li><strong>Креативное цифровое искусство</strong> — Сюрреалистичные композиции и концептуальные работы</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Технические детали -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#31A8FF] mr-3"></i>
                                    Технические детали
                                </h2>
                                <div class="content-section">
                                    <h3>Продвинутые техники</h3>
                                    <p>
                                        Мой рабочий процесс в Photoshop включает профессиональные техники и лучшие практики отрасли:
                                    </p>
                                    <ul>
                                        <li><strong>Частотное разложение (Frequency Separation)</strong> — Разделение текстуры и цвета для точного ретуширования</li>
                                        <li><strong>Осветление и затемнение (Dodge & Burn)</strong> — Продвинутое усиление контраста и формы</li>
                                        <li><strong>Маскирование по каналам (Channel Masking)</strong> — Сложные выделения с использованием цветовых каналов</li>
                                        <li><strong>Ползунки "Наложить если" (Blend If Sliders)</strong> — Расширенное управление наложением слоев</li>
                                        <li><strong>Пользовательские кисти и узоры</strong> — Создание и управление пользовательскими ресурсами</li>
                                    </ul>

                                    <h3>Владение инструментами</h3>
                                    <p>
                                        Я работаю с комплексным набором инструментов Photoshop, с особым опытом в:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Перо (Pen Tool)</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Маски слоев</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Корректирующие слои</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Восстанавливающая кисть</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Заполнение с учетом содержимого</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Смарт-объекты</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Режимы наложения</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Текст</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Векторные фигуры</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Ссылка на портфолио -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-briefcase text-[#31A8FF] mr-3"></i>
                                    Портфолио дизайна
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Примеры моих работ в Photoshop можно найти в моем дизайнерском портфолио:
                                    </p>
                                    <div class="mt-4">
                                        <a href="/works" class="inline-flex items-center px-4 py-2 bg-[#31A8FF] hover:bg-[#001E36] text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-briefcase mr-2"></i>
                                            <span>Посмотреть портфолио дизайна</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Мое портфолио демонстрирует различные дизайнерские проекты, фото-манипуляции и творческие работы,
                                        созданные с использованием продвинутых техник Photoshop.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#31A8FF] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#31A8FF]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#31A8FF] to-[#001E36]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ретушь фотографий</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Графический дизайн</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Цифровая живопись</span>
                                            <span class="text-sm font-bold text-purple-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Композитинг</span>
                                            <span class="text-sm font-bold text-yellow-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#31A8FF] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>25+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-paint-brush text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>Photoshop CC</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>500+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-layer-group text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Создано файлов: <strong>200,000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-clock text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Часов использования: <strong>30,000+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Смежные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#31A8FF] mr-2"></i>
                                    Смежные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/adobe-lightroom" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#31A8FF] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-image text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Adobe Lightroom</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/illustrator" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-pen-nib text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Adobe Illustrator</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/graphic-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-palette text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Графический дизайн</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/ui-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-desktop text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">UI/UX дизайн</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% владение</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#31A8FF] to-[#001E36] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                                <p class="text-sm mb-4">Доступен для дизайнерских проектов и проектов по редактированию фотографий</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#31A8FF] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

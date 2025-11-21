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
                                        Adobe InDesign
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Герой-секция -->
        <section class="py-12 bg-gradient-to-br from-pink-50 to-rose-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Иконка и основная информация -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FF3366] to-[#FF6A8A] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-file-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Основная информация -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 indesign-gradient">Adobe InDesign</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-book mr-1"></i>
                                            Специалист по печати и верстке
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Программа для настольных издательских систем и дизайна макетов страниц. Профессиональный инструмент для создания готовых к печати документов и многостраничных публикаций.
                            </p>

                            <!-- Статистика -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-[#FF3366] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Уровень владения</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#FF3366] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5+ лет</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Опыта</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#FF3366] mr-3">
                                        <i class="fas fa-copy"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">100+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Созданных макетов</div>
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
                            <!-- О программе InDesign -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#FF3366] mr-3"></i>
                                    О Adobe InDesign
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Adobe InDesign</strong> — это отраслевой стандарт программного обеспечения для настольных издательских систем
                                        для создания профессиональных макетов как для печатных, так и для цифровых медиа. Он превосходно
                                        справляется со сложными многостраничными документами с точным типографским контролем и seamless
                                        интеграцией с другими приложениями Adobe Creative Cloud.
                                    </p>

                                    <h3>Ключевые преимущества</h3>
                                    <ul>
                                        <li><strong>Точная типографика</strong> — Расширенное форматирование текста и функции OpenType</li>
                                        <li><strong>Основные страницы</strong> — Единые шаблоны макетов на нескольких страницах</li>
                                        <li><strong>Сеточные системы</strong> — Профессиональная структура макета и выравнивание</li>
                                        <li><strong>Поддержка длинных документов</strong> — Книги, журналы и каталоги с оглавлением</li>
                                        <li><strong>Подготовка к печати</strong> — Комплексные инструменты предпечатной проверки и упаковки</li>
                                        <li><strong>Интерактивные документы</strong> — PDF-формы, кнопки и цифровые публикации</li>
                                    </ul>

                                    <h3>Рекомендуемые области применения</h3>
                                    <p>
                                        InDesign необходим для различных издательских проектов и особенно эффективен для:
                                    </p>
                                    <ul>
                                        <li>Брошюр, флаеров и маркетинговых материалов</li>
                                        <li>Журналов, газет и периодических изданий</li>
                                        <li>Книг, руководств и документации</li>
                                        <li>Корпоративных отчетов и годовых отчетов</li>
                                        <li>Каталогов продукции и прайс-листов</li>
                                        <li>Цифровых публикаций и интерактивных PDF-файлов</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Мой путь с InDesign -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#FF3366] mr-3"></i>
                                    Мой путь с InDesign
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Я начал использовать Adobe InDesign в 2019 году, чтобы дополнить свои дизайнерские навыки профессиональными
                                        возможностями верстки. За 5+ лет я развил экспертизу в создании готовых к печати
                                        документов и многостраничных публикаций для различных клиентов и проектов.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-pink-50 to-rose-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-book text-[#FF3366] mr-2"></i>
                                                Многостраничные публикации
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Развил экспертизу в создании сложных многостраничных документов, включая
                                                каталоги, руководства и корпоративные отчеты с единым стилем и навигацией.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-print text-purple-500 mr-2"></i>
                                                Подготовка к печати
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Освоил рабочие процессы подготовки к печати, включая управление цветом,
                                                предпечатные проверки и упаковку файлов для профессиональной печати.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Мой опыт -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#FF3366] mr-3"></i>
                                    Мой опыт работы с InDesign
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Имея 5+ лет опыта работы с InDesign, я создавал разнообразные проекты верстки,
                                        начиная от простых одностраничных флаеров и заканчивая сложными многоглавными книгами и
                                        интерактивными цифровыми публикациями.
                                    </p>

                                    <h3>Специализированные навыки</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Создание основных страниц</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Стили абзацев и символов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Сеточные системы и направляющие</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Создание и форматирование таблиц</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Размещение и связывание изображений</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Управление цветом</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Предпечатная проверка и упаковка</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Создание интерактивных PDF</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Генерация оглавления</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Экспорт для печати и веба</span>
                                        </div>
                                    </div>

                                    <h3>Ключевые проекты</h3>
                                    <ul>
                                        <li><strong>Дизайн каталога продукции</strong> — 48-страничный полноцветный каталог со спецификациями продуктов</li>
                                        <li><strong>Корпоративное руководство по стилю</strong> — Бренд-гайд с детальными спецификациями макета</li>
                                        <li><strong>Буклеты программ мероприятий</strong> — Многоязычные материалы мероприятий со сложной типографикой</li>
                                        <li><strong>Техническая документация</strong> — Пользовательские руководства с детальными диаграммами и таблицами</li>
                                        <li><strong>Маркетинговые брошюры</strong> — Различные печатные материалы для корпоративных клиентов</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Технические детали -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#FF3366] mr-3"></i>
                                    Технические детали
                                </h2>
                                <div class="content-section">
                                    <h3>Особенности рабочего процесса</h3>
                                    <p>
                                        Мой рабочий процесс в InDesign включает профессиональные издательские техники и отраслевые стандарты:
                                    </p>
                                    <ul>
                                        <li><strong>Управление стилями</strong> — Комплексные системы стилей абзацев и символов</li>
                                        <li><strong>Стили объектов</strong> — Единое форматирование для фреймов, линий и фигур</li>
                                        <li><strong>Библиотеки и фрагменты</strong> — Многоразовые элементы дизайна и ресурсы</li>
                                        <li><strong>Слияние данных</strong> — Автоматическое размещение контента для переменных данных</li>
                                        <li><strong>Функция книги</strong> — Управление несколькими документами для крупных публикаций</li>
                                    </ul>

                                    <h3>Владение инструментами</h3>
                                    <p>
                                        Я работаю с комплексным набором инструментов InDesign, с особой экспертизой в:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Инструмент «Текст»</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Инструменты фреймов</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Перо</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Создание таблиц</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Предпечатная проверка</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Панель «Страницы»</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Слои</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Образцы</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Эффекты</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Ссылка на портфолио -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-briefcase text-[#FF3366] mr-3"></i>
                                    Дизайн-портфолио
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Примеры моих работ по верстке в InDesign можно найти в моем дизайн-портфолио:
                                    </p>
                                    <div class="mt-4">
                                        <a href="/works" class="inline-flex items-center px-4 py-2 bg-[#FF3366] hover:bg-[#E61A52] text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-briefcase mr-2"></i>
                                            <span>Посмотреть дизайн-портфолио</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Мое портфолио демонстрирует различные проекты верстки, печатные материалы и публикации,
                                        созданные с использованием профессиональных техник и рабочих процессов InDesign.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Боковая панель -->
                        <div class="space-y-6">
                            <!-- Карточка уровня владения -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#FF3366] mr-2"></i>
                                    Уровень владения
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Общее владение</span>
                                            <span class="text-sm font-bold text-[#FF3366]">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF3366] to-[#FF6A8A]"
                                                 data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Типографика и верстка</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Подготовка к печати</span>
                                            <span class="text-sm font-bold text-blue-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Многостраничные документы</span>
                                            <span class="text-sm font-bold text-purple-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Интерактивные PDF</span>
                                            <span class="text-sm font-bold text-yellow-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Быстрые факты -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#FF3366] mr-2"></i>
                                    Быстрые факты
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Опыт: <strong>5+ лет</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-file-alt text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Версия: <strong>InDesign CC</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Проекты: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-copy text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Сверстано страниц: <strong>2,000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-print text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Печатных заданий: <strong>50+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Связанные компетенции -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#FF3366] mr-2"></i>
                                    Связанные компетенции
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/adobe-photoshop" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#31A8FF] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-paint-brush text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF3366] transition-colors">Adobe Photoshop</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF3366] transition-colors"></i>
                                    </a>
                                    <a href="/competences/adobe-illustrator" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-pen-nib text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF3366] transition-colors">Adobe Illustrator</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF3366] transition-colors"></i>
                                    </a>
                                    <a href="/competences/typography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-font text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF3366] transition-colors">Типографика</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF3366] transition-colors"></i>
                                    </a>
                                    <a href="/competences/print-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-print text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF3366] transition-colors">Печатный дизайн</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF3366] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Призыв к действию -->
                            <div class="bg-gradient-to-r from-[#FF3366] to-[#FF6A8A] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Нужна верстка?</h3>
                                <p class="text-sm mb-4">Доступен для проектов публикаций и печатного дизайна</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF3366] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

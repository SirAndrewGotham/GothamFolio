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
            // Skill bar animation
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
                        <!-- О TensorFlow -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#FF6F00] mr-3"></i>
                                О TensorFlow
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>TensorFlow</strong> - это комплексная платформа машинного обучения с открытым исходным кодом, разработанная Google.
                                    Она имеет всеобъемлющую, гибкую экосистему инструментов, библиотек и ресурсов сообщества, которая позволяет
                                    исследователям продвигать передовые технологии в ML, а разработчикам легко создавать и развертывать приложения на основе ML.
                                </p>

                                <h3>Ключевые преимущества</h3>
                                <ul>
                                    <li><strong>Гибкая архитектура</strong> - Развертывание вычислений на одном или нескольких CPU или GPU</li>
                                    <li><strong>Готовность к продакшену</strong> - Масштабирование от исследований до производства с тем же кодом</li>
                                    <li><strong>Интеграция с Keras</strong> - Высокоуровневый API для быстрого экспериментирования</li>
                                    <li><strong>Кроссплатформенность</strong> - Запуск на десктопах, кластерах, мобильных и периферийных устройствах</li>
                                    <li><strong>TensorBoard</strong> - Мощный инструмент визуализации для отладки моделей</li>
                                    <li><strong>Большое сообщество</strong> - Обширная документация, учебные пособия и предварительно обученные модели</li>
                                    <li><strong>Экосистема TF</strong> - TF Lite, TF.js, TF Extended для различных сценариев развертывания</li>
                                </ul>

                                <h3>Основные компоненты</h3>
                                <p>
                                    TensorFlow предоставляет полную экосистему для разработки машинного обучения:
                                </p>
                                <ul>
                                    <li><strong>TensorFlow Core</strong> - Низкоуровневый API для построения и обучения моделей</li>
                                    <li><strong>Keras</strong> - Высокоуровневый API нейронных сетей</li>
                                    <li><strong>TensorFlow Datasets</strong> - Коллекция готовых к использованию наборов данных</li>
                                    <li><strong>TensorBoard</strong> - Инструмент визуализации</li>
                                    <li><strong>TensorFlow Lite</strong> - Облегченное решение для мобильных и периферийных устройств</li>
                                    <li><strong>TensorFlow.js</strong> - JavaScript библиотека для обучения и развертывания</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Мой путь с TensorFlow -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#FF6F00] mr-3"></i>
                                Мой путь с TensorFlow
                            </h2>
                            <div class="content-section">
                                <p>
                                    Я начал изучать TensorFlow в 2022 году, чтобы расширить свои возможности машинного обучения в области глубокого обучения.
                                    За 2+ года я построил различные архитектуры нейронных сетей, от простых полносвязных сетей
                                    до сверточных и рекуррентных сетей. Мой опыт сосредоточен на практических приложениях и
                                    понимании основных принципов глубокого обучения.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-image text-[#FF6F00] mr-2"></i>
                                            Компьютерное зрение
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Строил CNN архитектуры для классификации изображений,
                                            обнаружения объектов и задач сегментации изображений.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-language text-purple-500 mr-2"></i>
                                            Обработка естественного языка
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Разрабатывал RNN и Transformer модели для классификации текста,
                                            анализа тональности и генерации последовательностей.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Мой опыт -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#FF6F00] mr-3"></i>
                                Мой опыт работы с TensorFlow
                            </h2>
                            <div class="content-section">
                                <p>
                                    Имея 2+ года практического опыта, я развил практические навыки в построении,
                                    обучении и развертывании нейронных сетей с использованием TensorFlow и Keras.
                                </p>

                                <h3>Ключевые навыки</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Построение нейронных сетей с Keras</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Предобработка данных и конвейеры</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Обучение и оценка моделей</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Настройка гиперпараметров</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Transfer learning</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Визуализация TensorBoard</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Сохранение и развертывание моделей</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Создание пользовательских слоев</span>
                                    </div>
                                </div>

                                <h3>Архитектуры нейронных сетей</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Полносвязные сети</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">CNN</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">RNN/LSTM</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Автокодировщики</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">GAN</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Transfer Learning</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Пользовательские слои</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Колбэки</span>
                                </div>

                                <h3>Рабочий процесс глубокого обучения</h3>
                                <ul>
                                    <li><strong>Подготовка данных</strong> - Загрузка, предобработка и аугментация данных</li>
                                    <li><strong>Архитектура модели</strong> - Проектирование архитектур нейронных сетей</li>
                                    <li><strong>Конфигурация обучения</strong> - Настройка оптимизаторов, функций потерь и метрик</li>
                                    <li><strong>Обучение модели</strong> - Обучение с валидацией и мониторингом</li>
                                    <li><strong>Оценка и настройка</strong> - Анализ производительности и оптимизация гиперпараметров</li>
                                    <li><strong>Развертывание</strong> - Сохранение моделей и развертывание для инференса</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Типы нейронных сетей -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-network-wired text-[#FF6F00] mr-3"></i>
                                Архитектуры нейронных сетей
                            </h2>
                            <div class="content-section">
                                <h3>Сверточные нейронные сети (CNN)</h3>
                                <p>
                                    Опыт построения CNN архитектур для задач компьютерного зрения:
                                </p>
                                <ul>
                                    <li><strong>Классификация изображений</strong> - Построение моделей для классификации изображений по категориям</li>
                                    <li><strong>Обнаружение объектов</strong> - Идентификация и локализация объектов на изображениях</li>
                                    <li><strong>Transfer Learning</strong> - Использование предобученных моделей типа VGG, ResNet, MobileNet</li>
                                    <li><strong>Аугментация данных</strong> - Применение преобразований для увеличения разнообразия данных</li>
                                    <li><strong>Извлечение признаков</strong> - Использование CNN как экстракторов признаков</li>
                                </ul>

                                <h3>Рекуррентные нейронные сети (RNN)</h3>
                                <p>
                                    Разрабатывал модели последовательностей для временных рядов и NLP задач:
                                </p>
                                <ul>
                                    <li><strong>LSTM сети</strong> - Обработка долгосрочных зависимостей в последовательностях</li>
                                    <li><strong>GRU сети</strong> - Узлы с управляемыми рекуррентными связями для эффективного моделирования последовательностей</li>
                                    <li><strong>Прогнозирование временных рядов</strong> - Предсказание будущих значений во временных данных</li>
                                    <li><strong>Генерация текста</strong> - Модели языка на уровне символов и слов</li>
                                    <li><strong>Анализ тональности</strong> - Классификация тональности текста с использованием RNN</li>
                                </ul>

                                <h3>Продвинутые архитектуры</h3>
                                <p>
                                    Опыт работы с более сложными конструкциями нейронных сетей:
                                </p>
                                <ul>
                                    <li><strong>Автокодировщики</strong> - Неконтролируемое обучение для снижения размерности</li>
                                    <li><strong>Генеративно-состязательные сети (GAN)</strong> - Генерация синтетических данных</li>
                                    <li><strong>Сиамские сети</strong> - Обучение метрикам схожести</li>
                                    <li><strong>Механизмы внимания</strong> - Фокус на релевантных частях входа</li>
                                    <li><strong>Пользовательские слои</strong> - Реализация специализированных компонентов нейронных сетей</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Экосистема TensorFlow -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cubes text-[#FF6F00] mr-3"></i>
                                Экосистема TensorFlow
                            </h2>
                            <div class="content-section">
                                <p>
                                    У меня есть опыт работы с различными компонентами экосистемы TensorFlow:
                                </p>

                                <h3>Keras API</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF6F00] mb-2">Sequential API</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Построение линейных стеков слоев для простых архитектур
                                            с удобным интерфейсом
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF6F00] mb-2">Functional API</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Создание сложных моделей с множественными входами, выходами
                                            и общими слоями
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF6F00] mb-2">Model Subclassing</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Реализация пользовательских моделей через наследование от tf.keras.Model
                                            для максимальной гибкости
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF6F00] mb-2">Пользовательские слои</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Создание пользовательских слоев через наследование от tf.keras.layers.Layer
                                            для специализированных операций
                                        </p>
                                    </div>
                                </div>

                                <h3>Инструменты и утилиты</h3>
                                <ul>
                                    <li><strong>TensorBoard</strong> - Визуализация метрик обучения, графов моделей и эмбеддингов</li>
                                    <li><strong>tf.data</strong> - Построение эффективных конвейеров ввода данных</li>
                                    <li><strong>TensorFlow Datasets</strong> - Доступ к предобработанным наборам данных</li>
                                    <li><strong>Чекпоинты моделей</strong> - Сохранение и восстановление прогресса обучения моделей</li>
                                    <li><strong>Колбэки</strong> - Настройка поведения обучения во время тренировки моделей</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Обучение и оптимизация -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-tachometer-alt text-[#FF6F00] mr-3"></i>
                                Обучение и оптимизация
                            </h2>
                            <div class="content-section">
                                <p>
                                    У меня есть опыт работы с различными техниками обучения и оптимизации моделей глубокого обучения:
                                </p>

                                <h3>Техники обучения</h3>
                                <ul>
                                    <li><strong>Оптимизаторы</strong> - Adam, SGD, RMSprop с различными расписаниями learning rate</li>
                                    <li><strong>Функции потерь</strong> - Категориальная кросс-энтропия, бинарная кросс-энтропия, MSE, пользовательские потери</li>
                                    <li><strong>Регуляризация</strong> - L1/L2 регуляризация, dropout, batch normalization</li>
                                    <li><strong>Ранняя остановка</strong> - Предотвращение переобучения через мониторинг валидационных метрик</li>
                                    <li><strong>Планирование learning rate</strong> - Корректировка learning rate во время обучения</li>
                                </ul>

                                <h3>Оптимизация производительности</h3>
                                <ul>
                                    <li><strong>GPU ускорение</strong> - Использование GPU ресурсов для более быстрого обучения</li>
                                    <li><strong>Оптимизация конвейеров данных</strong> - Использование tf.data для эффективной загрузки данных</li>
                                    <li><strong>Смешанная точность обучения</strong> - Использование float16 для более быстрых вычислений</li>
                                    <li><strong>Прунинг моделей</strong> - Уменьшение размера модели при сохранении производительности</li>
                                    <li><strong>Квантование</strong> - Уменьшение точности для более быстрого инференса</li>
                                </ul>

                                <h3>Transfer Learning</h3>
                                <p>
                                    Обширный опыт работы с transfer learning с использованием предобученных моделей:
                                </p>
                                <ul>
                                    <li>Тонкая настройка предобученных CNN моделей (VGG, ResNet, Inception)</li>
                                    <li>Извлечение признаков с использованием предобученных моделей</li>
                                    <li>Адаптация моделей к новым доменам и задачам</li>
                                    <li>Понимание когда и как применять transfer learning</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Реальные приложения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-bar text-[#FF6F00] mr-3"></i>
                                Реальные приложения
                            </h2>
                            <div class="content-section">
                                <h3>Проекты компьютерного зрения</h3>
                                <p>
                                    Применял TensorFlow для различных задач компьютерного зрения:
                                </p>
                                <ul>
                                    <li><strong>Классификация изображений</strong> - Построение моделей для классификации изображений по категориям</li>
                                    <li><strong>Обнаружение объектов</strong> - Идентификация и локализация объектов на изображениях</li>
                                    <li><strong>Сегментация изображений</strong> - Классификация на уровне пикселей для анализа изображений</li>
                                    <li><strong>Перенос стиля</strong> - Применение художественных стилей к изображениям</li>
                                    <li><strong>Генерация изображений</strong> - Создание новых изображений с использованием GAN</li>
                                </ul>

                                <h3>Обработка естественного языка</h3>
                                <p>
                                    Разрабатывал NLP приложения с использованием TensorFlow:
                                </p>
                                <ul>
                                    <li><strong>Классификация текста</strong> - Анализ тональности, классификация тем</li>
                                    <li><strong>Генерация текста</strong> - Создание связных текстовых последовательностей</li>
                                    <li><strong>Распознавание именованных сущностей</strong> - Идентификация сущностей в тексте</li>
                                    <li><strong>Машинный перевод</strong> - Построение моделей sequence-to-sequence</li>
                                    <li><strong>Суммаризация текста</strong> - Генерация резюме из длинных документов</li>
                                </ul>

                                <h3>Другие приложения</h3>
                                <ul>
                                    <li><strong>Прогнозирование временных рядов</strong> - Предсказание будущих значений во временных данных</li>
                                    <li><strong>Обнаружение аномалий</strong> - Идентификация необычных паттернов в данных</li>
                                    <li><strong>Рекомендательные системы</strong> - Построение нейронных рекомендательных систем</li>
                                    <li><strong>Обработка аудио</strong> - Распознавание речи и классификация аудио</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Проекты на GitHub -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fab fa-github text-[#FF6F00] mr-3"></i>
                                Проекты на GitHub
                            </h2>
                            <div class="content-section">
                                <p>
                                    Некоторые из моих проектов по глубокому обучению с использованием TensorFlow можно найти на GitHub:
                                </p>
                                <div class="mt-4">
                                    <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                        <i class="fab fa-github mr-2"></i>
                                        <span>SirAndrewGotham на GitHub</span>
                                    </a>
                                </div>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Я постоянно работаю над проектами глубокого обучения, которые демонстрируют практические приложения
                                    TensorFlow для компьютерного зрения, обработки естественного языка и других задач ИИ.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Боковая панель -->
                    <div class="space-y-6">
                        <!-- Карточка уровня владения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#FF6F00] mr-2"></i>
                                Уровень владения
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Общее владение</span>
                                        <span class="text-sm font-bold text-[#FF6F00]">65%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF6F00] to-[#FF8F00]"
                                             data-width="65%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Keras API</span>
                                        <span class="text-sm font-bold text-green-500">70%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="70%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">CNN архитектуры</span>
                                        <span class="text-sm font-bold text-blue-500">68%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="68%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">RNN/LSTM модели</span>
                                        <span class="text-sm font-bold text-purple-500">62%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="62%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Развертывание моделей</span>
                                        <span class="text-sm font-bold text-red-500">60%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="60%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Быстрые факты -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#FF6F00] mr-2"></i>
                                Быстрые факты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Опыт: <strong>2+ года</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Версия: <strong>TensorFlow 2.13+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Проекты: <strong>10+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-layer-group text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Архитектуры: <strong>8+ типов</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-rocket text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Статус: <strong>Активное изучение</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Путь обучения -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-[#FF6F00] mr-2"></i>
                                Путь обучения
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Базовые нейронные сети</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Keras Sequential API</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">CNN архитектуры</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Transfer learning</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-spinner text-xs"></i>
                                    </div>
                                    <span class="text-sm">Продвинутые RNN</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Продакшен развертывание</span>
                                </div>
                            </div>
                        </div>

                        <!-- Связанные компетенции -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#FF6F00] mr-2"></i>
                                Связанные компетенции
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-python text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6F00] transition-colors">Python</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% владения</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                </a>
                                <a href="/competences/scikit-learn" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-[#F7931E] flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-brain text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6F00] transition-colors">Scikit-learn</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% владения</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                </a>
                                <a href="/competences/numpy" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-[#4D77CB] flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-calculator text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6F00] transition-colors">NumPy</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">78% владения</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                </a>
                                <a href="/competences/matplotlib" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-[#11557C] flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-chart-line text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6F00] transition-colors">Matplotlib</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% владения</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Призыв к действию -->
                        <div class="bg-gradient-to-r from-[#FF6F00] to-[#FF8F00] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Заинтересованы в сотрудничестве?</h3>
                            <p class="text-sm mb-4">Готов обсудить ваш проект глубокого обучения</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF6F00] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

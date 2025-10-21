<x-frontend.layouts.app title="Обратная связь">
    <section class="py-16 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900 pt-20">
        <div class="fluid-container">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Обратная связь</h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                    Есть вопросы, предложения или хотите обсудить проект? Буду рад вас выслышать!
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="flex items-center">
                        <i class="fas fa-reply text-primary-500 mr-2"></i>
                        <span>Отвечаю в течение 24 часов</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-shield-alt text-primary-500 mr-2"></i>
                        <span>Конфиденциально и безопасно</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="feedback" class="py-16 w-full">
        <div class="fluid-container">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Contact Information (static) -->
                <div class="lg:col-span-1 fade-in">
                    <h2 class="text-2xl font-bold mb-6">Свяжитесь со мной</h2>

                    <div class="space-y-6 mb-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Email</h4>
                                <p class="text-gray-600 dark:text-gray-400">andreogotema@gmail.com</p>
                                <p class="text-sm text-gray-500 dark:text-gray-500 mt-1">Основной способ связи</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                <i class="fab fa-telegram"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Telegram</h4>
                                <p class="text-gray-600 dark:text-gray-400">@sirandrewgotham</p>
                                <p class="text-sm text-gray-500 dark:text-gray-500 mt-1">Быстрый ответ</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">WhatsApp</h4>
                                <p class="text-gray-600 dark:text-gray-400">+7 (123) 456-78-90</p>
                                <p class="text-sm text-gray-500 dark:text-gray-500 mt-1">Для сообщений</p>
                            </div>
                        </div>
                    </div>

{{--                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">--}}
{{--                        <h4 class="font-semibold mb-3">Частые вопросы</h4>--}}
{{--                        <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">--}}
{{--                            <li class="flex items-start">--}}
{{--                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>--}}
{{--                                <span>Сколько времени занимает ответ?</span>--}}
{{--                            </li>--}}
{{--                            <li class="flex items-start">--}}
{{--                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>--}}
{{--                                <span>Можно ли обсудить проект до заключения договора?</span>--}}
{{--                            </li>--}}
{{--                            <li class="flex items-start">--}}
{{--                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>--}}
{{--                                <span>Работаете ли вы с международными клиентами?</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                    <x-frontend.feedback.faq-accordion />


                </div>

                <!-- Feedback Form - Volt Component -->
                <div class="lg:col-span-2 fade-in">
                    <livewire:feedback-form />
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 dark:bg-gray-800/30 w-full">
        <div class="fluid-container">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h2 class="text-3xl font-bold mb-12">Другие способы связи</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                        <div class="w-12 h-12 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mx-auto mb-4">
                            <i class="fab fa-github text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">GitHub</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Посмотрите мои проекты и исходный код
                        </p>
                        <a href="https://github.com/sirandrewgotham" target="_blank" class="text-primary-500 hover:text-primary-600 font-medium">
                            Перейти на GitHub
                        </a>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                        <div class="w-12 h-12 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mx-auto mb-4">
                            <i class="fab fa-vk text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">ВКонтакте</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Свяжитесь со мной через социальную сеть
                        </p>
                        <a href="https://vk.com/andrewgotham" target="_blank" class="text-primary-500 hover:text-primary-600 font-medium">
                            Перейти в ВК
                        </a>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                        <div class="w-12 h-12 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mx-auto mb-4">
                            <i class="fas fa-comments text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Блог</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Оставьте комментарий к моим статьям
                        </p>
                        <a href="/blog" class="text-primary-500 hover:text-primary-600 font-medium">
                            Перейти в блог
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.layouts.app>

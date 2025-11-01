<x-frontend.layouts.app>
    <!-- Main Content -->
    <main class="w-full pt-20 min-h-screen flex items-center justify-center">
        <div class="fluid-container w-full">
            <div class="w-full text-center">
                <!-- Animated 404 Number -->
                <div class="fade-in mb-8">
                    <div class="relative inline-block">
                        <div class="text-9xl md:text-[12rem] font-bold gradient-text floating">
                            404
                        </div>
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-red-500 rounded-full animate-ping"></div>
                        <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-primary-500 rounded-full animate-pulse"></div>
                    </div>
                </div>

                <!-- Error Message -->
                <div class="fade-in mb-8" style="transition-delay: 0.2s;">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">
                        Страница не найдена
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mx-auto px-4">
                        К сожалению, запрашиваемая страница компетенций не существует или была перемещена.
                        Возможно, вы ввели неправильный адрес или страница была удалена.
                    </p>
                </div>

{{--                <!-- Search Suggestion -->--}}
{{--                <div class="fade-in mb-8" style="transition-delay: 0.4s;">--}}
{{--                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg mx-auto px-4">--}}
{{--                        <h3 class="text-lg font-semibold mb-3 flex items-center justify-center">--}}
{{--                            <i class="fas fa-search text-primary-500 mr-2"></i>--}}
{{--                            Попробуйте найти нужную информацию--}}
{{--                        </h3>--}}
{{--                        <div class="relative max-w-md mx-auto">--}}
{{--                            <input--}}
{{--                                type="text"--}}
{{--                                placeholder="Поиск по сайту..."--}}
{{--                                class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors"--}}
{{--                            >--}}
{{--                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <!-- Competence Request Form -->
                <div class="fade-in mb-8" style="transition-delay: 0.4s;">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg mx-auto px-4">
{{--                        <h3 class="text-lg font-semibold mb-4 flex items-center justify-center">--}}
{{--                            <i class="fas fa-envelope text-primary-500 mr-2"></i>--}}
{{--                            Не нашли нужную компетенцию?--}}
{{--                        </h3>--}}
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-center">
                            Возможно, эта компетенция еще не описана в системе,
                            или у меня есть другое решение на основе используемого стека технологий.
                            Напишите мне, и я обязательно рассмотрю ваш запрос!
                        </p>
                        <livewire:feedback-form hideCategory="true" defaultCategory="feedback" />
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="fade-in mb-8" style="transition-delay: 0.6s;">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full px-4">
                        <a href="/" class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-primary-500 to-blue-500 flex items-center justify-center text-white mb-4 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-home text-xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2">На главную</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Вернуться на домашнюю страницу</p>
                        </a>

                        <a href="/works" class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center text-white mb-4 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-briefcase text-xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2">Портфолио</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Посмотреть мои проекты</p>
                        </a>

                        <a href="/blog" class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white mb-4 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-newspaper text-xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2">Блог</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Читать статьи и заметки</p>
                        </a>
                    </div>
                </div>

                <!-- Contact CTA -->
                <div class="fade-in" style="transition-delay: 0.8s;">
                    <div class="bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-8 w-full px-4">
                        <h3 class="text-2xl font-bold mb-4">Нужна помощь?</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Если вы не можете найти то, что ищете, или у вас есть вопросы,
                            свяжитесь со мной напрямую.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="/feedback" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg pulse-glow">
                                <i class="fas fa-envelope mr-2"></i>
                                Написать сообщение
                            </a>
                            <a href="mailto:andreogotema@gmail.com" class="inline-flex items-center px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Отправить email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-frontend.layouts.app>

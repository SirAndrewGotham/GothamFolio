<section id="feedback" class="py-16 w-full">
    <div class="fluid-container">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Contact Information -->
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

                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                    <h4 class="font-semibold mb-3">Частые вопросы</h4>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                            <span>Сколько времени занимает ответ?</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                            <span>Можно ли обсудить проект до заключения договора?</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                            <span>Работаете ли вы с международными клиентами?</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feedback Form - Using Volt component -->
            <div class="lg:col-span-2 fade-in">
                @if(view()->exists('livewire.feedback-form'))
                    <livewire:feedback-form />
                @else
                    <!-- Fallback: Show the original form if Volt component doesn't exist -->
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold mb-6">Отправить сообщение</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Форма обратной связи временно недоступна. Пожалуйста, свяжитесь со мной напрямую по указанным контактам.
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

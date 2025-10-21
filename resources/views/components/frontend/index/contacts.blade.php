<section id="contacts" class="py-16 w-full">
    <div class="fluid-container">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 fade-in">Контакты</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-6">Свяжитесь со мной</h3>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Email</h4>
                            <p class="text-gray-600 dark:text-gray-400">andreogotema@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Телефон</h4>
                            <p class="text-gray-600 dark:text-gray-400">+7 (123) 456-78-90</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Адрес</h4>
                            <p class="text-gray-600 dark:text-gray-400">Россия</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="font-semibold mb-4">Социальные сети</h4>
                    <div class="flex space-x-4">
                        <a href="https://github.com/sirandrewgotham" target="_blank" class="w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://vk.com/sirandrewgotham" target="_blank" class="w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                            <i class="fab fa-vk"></i>
                        </a>
                        <a href="https://t.me/sirandrewgotham" target="_blank" class="w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-6">Отправить сообщение</h3>

                <form class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium mb-1">Имя</label>
                        <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors" placeholder="Ваше имя">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors" placeholder="your@email.com">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium mb-1">Тема</label>
                        <input type="text" id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors" placeholder="Тема сообщения">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium mb-1">Сообщение</label>
                        <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors" placeholder="Ваше сообщение"></textarea>
                    </div>

                    <button type="submit" class="w-full px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                        Отправить сообщение
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

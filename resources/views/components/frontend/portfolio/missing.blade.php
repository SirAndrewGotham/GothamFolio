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
                        {{ __('gothamfolio.missing.page_not_found') }}
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mx-auto px-4">
                        {{ __('gothamfolio.missing.portfolio_page_not_found_message') }}
                    </p>
                </div>

                <!-- Competence Request Form -->
                <div class="fade-in mb-8" style="transition-delay: 0.4s;">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg mx-auto px-4">
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-center">
                            {{ __('gothamfolio.missing.portfolio_not_described_message') }}
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
                            <h3 class="font-semibold mb-2">{{ __('gothamfolio.missing.back_to_main') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.missing.back_to_main_description') }}</p>
                        </a>

                        <a href="/portfolio" class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center text-white mb-4 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-briefcase text-xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2">{{ __('gothamfolio.missing.portfolio') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.missing.portfolio_description') }}</p>
                        </a>

                        <a href="/blog" class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white mb-4 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-newspaper text-xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2">{{ __('gothamfolio.missing.blog') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.missing.blog_description') }}</p>
                        </a>
                    </div>
                </div>

                <!-- Contact CTA -->
                <div class="fade-in" style="transition-delay: 0.8s;">
                    <div class="bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-8 w-full px-4">
                        <h3 class="text-2xl font-bold mb-4">{{ __('gothamfolio.missing.need_help') }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            {{ __('gothamfolio.missing.contact_message') }}
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="/feedback" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg pulse-glow">
                                <i class="fas fa-envelope mr-2"></i>
                                {{ __('gothamfolio.missing.write_message') }}
                            </a>
                            <a href="mailto:andreogotema@gmail.com" class="inline-flex items-center px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                                <i class="fas fa-paper-plane mr-2"></i>
                                {{ __('gothamfolio.missing.send_email') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-frontend.layouts.app>

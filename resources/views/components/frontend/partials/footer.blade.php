<footer class="bg-gray-900 text-gray-400 py-12 w-full">
    <div class="fluid-container">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <h4 class="text-white font-bold mb-4">{{ __('gothamfolio.footer.about_me') }}</h4>
                <p class="mb-4">
                    {{ __('gothamfolio.footer.about_me_text') }}
                </p>
                <a href="/resume" class="text-primary-500 hover:text-primary-400">{{ __('gothamfolio.footer.more_info') }}</a>
            </div>

            <div>
                <h4 class="text-white font-bold mb-4">{{ __('gothamfolio.footer.navigation') }}</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="/resume" class="hover:text-white transition-colors">
                            {{ __('gothamfolio.footer.resume') }}
                        </a>
                    </li>
                    <li>
                        <a href="/competences" class="hover:text-white transition-colors">
                            {{ __('gothamfolio.footer.competences') }}
                        </a>
                    </li>
                    <li>
                        <a href="/portfolio" class="hover:text-white transition-colors">
                            {{ __('gothamfolio.footer.portfolio') }}
                        </a>
                    </li>
                    <li>
                        <a href="/blog" class="hover:text-white transition-colors">
                            {{ __('gothamfolio.footer.blog') }}
                        </a>
                    </li>
                    <li>
                        <a href="/contact" class="hover:text-white transition-colors">
                            {{ __('gothamfolio.footer.contact_us') }}
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-4">{{ __('gothamfolio.footer.get_in_touch') }}</h4>
                <div class="space-y-2">
                    <p class="flex items-center">
                        <i class="fas fa-home mr-2"></i>
                        <span>{{ __('gothamfolio.footer.russia') }}</span>
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        <a href="mailto:andreogotema@gmail.com" class="hover:text-white">andreogotema@gmail.com</a>
                    </p>
                    <p class="flex items-center">
                        <i class="fab fa-whatsapp mr-2"></i>
                        <a href="https://wa.me/+77755569244" target="_blank" class="hover:text-white">{{ __('gothamfolio.footer.whatsapp_for_messages') }}</a>
                    </p>
                </div>
            </div>

            <div>
                <h4 class="text-white font-bold mb-4">{{ __('gothamfolio.footer.social_networks') }}</h4>
                <div class="flex space-x-4">
                    <a href="https://github.com/sirandrewgotham" target="_blank" class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://vk.com/sirandrewgotham" target="_blank" class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                        <i class="fab fa-vk"></i>
                    </a>
                    <a href="https://t.me/sirandrewgotham" target="_blank" class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                        <i class="fab fa-telegram"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-800 text-center">
            <p class="text-sm text-gray-400 opacity-75">{{ __('gothamfolio.footer.copyright') }}</p>
        </div>
    </div>
</footer>

<x-frontend.layouts.app title="{{ __('gothamfolio.documents.tos.title') }}">
    <!-- Main Content -->
    <main class="w-full pt-20">
        <!-- Breadcrumbs -->
        <section class="py-6 bg-gray-50 dark:bg-gray-800/30 border-b border-gray-200 dark:border-gray-700">
            <div class="fluid-container">
                <nav class="flex fade-in" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li><a href="/" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors"><i class="fas fa-home"></i></a></li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/documents" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">{{ __('gothamfolio.documents.title') }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">{{ __('gothamfolio.documents.tos.title') }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Document Header -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <div class="w-16 h-16 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mx-auto mb-6">
                        <i class="fas fa-file-contract text-2xl"></i>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ __('gothamfolio.documents.tos.title') }}</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-4">{{ __('gothamfolio.documents.tos.last_updated', ['date' => 'January 15, 2024']) }}</p>
                    <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <div class="flex items-center"><i class="fas fa-clock text-primary-500 mr-2"></i><span>{{ __('gothamfolio.documents.tos.reading_time', ['minutes' => 10]) }}</span></div>
                        <div class="flex items-center"><i class="fas fa-scale-balanced text-primary-500 mr-2"></i><span>{{ __('gothamfolio.documents.tos.legal_document') }}</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Document Content -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 md:p-12 fade-in">
                        <div class="document-content prose dark:prose-invert max-w-none">
                            <p class="text-lg mb-6">
                                {{ __('gothamfolio.documents.tos.introduction') }}
                            </p>

                            <h2>{{ __('gothamfolio.documents.tos.acceptance_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.acceptance_description') }}</p>

                            <h2>{{ __('gothamfolio.documents.tos.changes_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.changes_description') }}</p>

                            <h2>{{ __('gothamfolio.documents.tos.site_usage_heading') }}</h2>
                            <h3>{{ __('gothamfolio.documents.tos.permitted_usage_subheading') }}</h3>
                            <p>{{ __('gothamfolio.documents.tos.permitted_usage_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.tos.permitted_usage_item1') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.permitted_usage_item2') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.permitted_usage_item3') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.permitted_usage_item4') }}</li>
                            </ul>

                            <h3>{{ __('gothamfolio.documents.tos.forbidden_usage_subheading') }}</h3>
                            <p>{{ __('gothamfolio.documents.tos.forbidden_usage_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.tos.forbidden_usage_item1') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.forbidden_usage_item2') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.forbidden_usage_item3') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.forbidden_usage_item4') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.forbidden_usage_item5') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.forbidden_usage_item6') }}</li>
                            </ul>

                            <h2>{{ __('gothamfolio.documents.tos.intellectual_property_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.intellectual_property_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.tos.intellectual_property_item1') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.intellectual_property_item2') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.intellectual_property_item3') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.intellectual_property_item4') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.intellectual_property_item5') }}</li>
                            </ul>
                            <p>{{ __('gothamfolio.documents.tos.intellectual_property_ownership') }}</p>

                            <h2>{{ __('gothamfolio.documents.tos.user_content_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.user_content_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.tos.user_content_item1') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.user_content_item2') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.user_content_item3') }}</li>
                            </ul>

                            <h2>{{ __('gothamfolio.documents.tos.third_party_links_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.third_party_links_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.tos.third_party_links_item1') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.third_party_links_item2') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.third_party_links_item3') }}</li>
                            </ul>

                            <h2>{{ __('gothamfolio.documents.tos.limitation_liability_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.limitation_liability_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.tos.limitation_liability_item1') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.limitation_liability_item2') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.limitation_liability_item3') }}</li>
                                <li>{{ __('gothamfolio.documents.tos.limitation_liability_item4') }}</li>
                            </ul>

                            <h2>{{ __('gothamfolio.documents.tos.privacy_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.privacy_description', ['link' => '/documents/privacy']) }}</p>

                            <h2>{{ __('gothamfolio.documents.tos.termination_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.termination_description') }}</p>

                            <h2>{{ __('gothamfolio.documents.tos.governing_law_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.governing_law_description') }}</p>

                            <h2>{{ __('gothamfolio.documents.tos.contact_info_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.tos.contact_info_description') }}</p>
                            <div class="bg-gray-50 dark:bg-gray-700/50 p-6 rounded-lg mt-4">
                                <p><strong>{{ __('gothamfolio.documents.tos.email_label') }}:</strong> <a href="mailto:legal@andrewgotham.com" class="text-primary-500 hover:underline">legal@andrewgotham.com</a></p>
                                <p><strong>{{ __('gothamfolio.documents.tos.postal_address_label') }}:</strong> {{ __('gothamfolio.documents.tos.your_legal_address') }}</p>
                            </div>

                            <div class="mt-12 p-6 bg-primary-50 dark:bg-primary-900/20 rounded-lg border border-primary-200 dark:border-primary-800">
                                <h3 class="font-semibold text-primary-800 dark:text-primary-200 mb-2">{{ __('gothamfolio.documents.tos.important_note_heading') }}</h3>
                                <p class="text-primary-700 dark:text-primary-300">
                                    {{ __('gothamfolio.documents.tos.important_note_description') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Related Documents -->
                    <div class="mt-12 fade-in">
                        <h3 class="text-2xl font-bold mb-8 text-center">{{ __('gothamfolio.documents.other_documents') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <a href="/documents/privacy" class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4 class="text-lg font-semibold group-hover:text-primary-500 transition-colors">{{ __('gothamfolio.documents.privacy.title') }}</h4>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    {{ __('gothamfolio.documents.privacy.description') }}
                                </p>
                            </a>

                            <a href="/documents/cookies" class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                        <i class="fas fa-cookie"></i>
                                    </div>
                                    <h4 class="text-lg font-semibold group-hover:text-primary-500 transition-colors">{{ __('gothamfolio.documents.cookies.title') }}</h4>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    {{ __('gothamfolio.documents.cookies.description') }}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.app>

<x-frontend.layouts.app>
    <!-- Main Content -->
    <main class="w-full pt-20">
        <!-- Breadcrumbs -->
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
                                <a href="/documents" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    {{ __('gothamfolio.documents.title') }}
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        {{ __('gothamfolio.documents.policy.title') }}
                                    </span>
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
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ __('gothamfolio.documents.policy.title') }}</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-4">
                        {{ __('gothamfolio.documents.policy.last_updated', ['date' => 'January 15, 2024']) }}
                    </p>
                    <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <div class="flex items-center">
                            <i class="fas fa-clock text-primary-500 mr-2"></i>
                            <span>{{ __('gothamfolio.documents.policy.reading_time', ['minutes' => 8]) }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-file-alt text-primary-500 mr-2"></i>
                            <span>{{ __('gothamfolio.documents.policy.legal_document') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Document Content -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 md:p-12 fade-in">
                        <!-- Quick Navigation -->
                        <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                            <h3 class="font-semibold mb-4 text-gray-800 dark:text-gray-200">{{ __('gothamfolio.documents.policy.quick_navigation') }}:</h3>
                            <div class="flex flex-wrap gap-2">
                                <a href="#data-collection" class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-full text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                    {{ __('gothamfolio.documents.policy.data_collection_nav') }}
                                </a>
                                <a href="#data-usage" class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-full text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                    {{ __('gothamfolio.documents.policy.data_usage_nav') }}
                                </a>
                                <a href="#cookies" class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-full text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                    {{ __('gothamfolio.documents.policy.cookies_nav') }}
                                </a>
                                <a href="#rights" class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-full text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                    {{ __('gothamfolio.documents.policy.your_rights_nav') }}
                                </a>
                            </div>
                        </div>

                        <!-- Document Content -->
                        <div class="document-content prose dark:prose-invert max-w-none">
                            <p class="text-lg mb-6">
                                {{ __('gothamfolio.documents.policy.introduction') }}
                            </p>

                            <h2 id="data-collection">{{ __('gothamfolio.documents.policy.collection_heading') }}</h2>

                            <h3>{{ __('gothamfolio.documents.policy.personal_info_subheading') }}</h3>
                            <p>{{ __('gothamfolio.documents.policy.personal_info_description') }}</p>
                            <ul>
                                <li><strong>{{ __('gothamfolio.documents.policy.contact_data') }}:</strong> {{ __('gothamfolio.documents.policy.contact_data_details') }}</li>
                                <li><strong>{{ __('gothamfolio.documents.policy.professional_info') }}:</strong> {{ __('gothamfolio.documents.policy.professional_info_details') }}</li>
                                <li><strong>{{ __('gothamfolio.documents.policy.technical_data') }}:</strong> {{ __('gothamfolio.documents.policy.technical_data_details') }}</li>
                                <li><strong>{{ __('gothamfolio.documents.policy.usage_data') }}:</strong> {{ __('gothamfolio.documents.policy.usage_data_details') }}</li>
                            </ul>

                            <h3>{{ __('gothamfolio.documents.policy.automatic_collection_subheading') }}</h3>
                            <p>{{ __('gothamfolio.documents.policy.automatic_collection_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.policy.device_connection_data') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.browsing_history') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.site_interaction') }}</li>
                            </ul>

                            <h2 id="data-usage">{{ __('gothamfolio.documents.policy.usage_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.usage_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.policy.provide_improve_services') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.process_requests') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.personalize_experience') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.analyze_optimize_site') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.legal_obligations') }}</li>
                            </ul>

                            <h2 id="cookies">{{ __('gothamfolio.documents.policy.cookies_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.cookies_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.policy.remember_preferences') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.analyze_traffic') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.personalized_content') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.improve_functionality') }}</li>
                            </ul>
                            <p>{{ __('gothamfolio.documents.policy.manage_cookies_browser') }}</p>

                            <h2>{{ __('gothamfolio.documents.policy.data_protection_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.data_protection_description') }}</p>

                            <h2>{{ __('gothamfolio.documents.policy.third_party_sharing_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.third_party_sharing_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.policy.explicit_consent') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.legal_obligations_sharing') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.service_providers') }}</li>
                            </ul>

                            <h2 id="rights">{{ __('gothamfolio.documents.policy.your_rights_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.your_rights_description') }}</p>
                            <ul>
                                <li>{{ __('gothamfolio.documents.policy.access_personal_info') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.correct_inaccurate_data') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.delete_data') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.restrict_processing') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.data_portability') }}</li>
                                <li>{{ __('gothamfolio.documents.policy.object_to_processing') }}</li>
                            </ul>
                            <p>{{ __('gothamfolio.documents.policy.contact_for_rights', ['email' => 'privacy@andrewgotham.com']) }}</p>

                            <h2>{{ __('gothamfolio.documents.policy.data_retention_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.data_retention_description') }}</p>

                            <h2>{{ __('gothamfolio.documents.policy.international_transfer_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.international_transfer_description') }}</p>

                            <h2>{{ __('gothamfolio.documents.policy.third_party_links_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.third_party_links_description') }}</p>

                            <h2>{{ __('gothamfolio.documents.policy.policy_changes_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.policy_changes_description') }}</p>

                            <h2>{{ __('gothamfolio.documents.policy.contact_info_heading') }}</h2>
                            <p>{{ __('gothamfolio.documents.policy.contact_info_description') }}</p>
                            <div class="bg-gray-50 dark:bg-gray-700/50 p-6 rounded-lg mt-4">
                                <p><strong>{{ __('gothamfolio.documents.policy.email_label') }}:</strong> <a href="mailto:privacy@andrewgotham.com" class="text-primary-500 hover:underline">privacy@andrewgotham.com</a></p>
                                <p><strong>{{ __('gothamfolio.documents.policy.postal_address_label') }}:</strong> {{ __('gothamfolio.documents.policy.your_legal_address') }}</p>
                                <p><strong>{{ __('gothamfolio.documents.policy.phone_label') }}:</strong> {{ __('gothamfolio.documents.policy.your_contact_phone') }}</p>
                            </div>

                            <div class="mt-12 p-6 bg-primary-50 dark:bg-primary-900/20 rounded-lg border border-primary-200 dark:border-primary-800">
                                <h3 class="font-semibold text-primary-800 dark:text-primary-200 mb-2">{{ __('gothamfolio.documents.policy.consent_heading') }}</h3>
                                <p class="text-primary-700 dark:text-primary-300">
                                    {{ __('gothamfolio.documents.policy.consent_description') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Related Documents -->
                    <div class="mt-12 fade-in">
                        <h3 class="text-2xl font-bold mb-8 text-center">{{ __('gothamfolio.documents.other_documents') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <a href="/documents/tos" class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                        <i class="fas fa-file-contract"></i>
                                    </div>
                                    <h4 class="text-lg font-semibold group-hover:text-primary-500 transition-colors">{{ __('gothamfolio.documents.tos.title') }}</h4>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    {{ __('gothamfolio.documents.tos.description') }}
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

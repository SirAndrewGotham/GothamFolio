<x-frontend.layouts.app>
    <!-- Ĉefa Enhavo -->
    <main class="w-full pt-20" x-data="portfolioItemApp()" x-init="init()">
        <!-- Paneroj -->
        <section class="py-6 bg-gray-50 dark:bg-gray-800/30 border-b border-gray-200 dark:border-gray-700">
            <div class="fluid-container">
                <nav class="flex fade-in" aria-label="Paneroj">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="/" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Portfoliao
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio/laravel" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Laravel Projektoj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    IMUS City TV Inspektado Modulo
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Projekta Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Projekta Informo -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">IMUS City TV Inspektado Modulo</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Kompletita Projekto
                                    </span>
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-industry mr-1 text-xs"></i>
                                        Industria Softvaro
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                TTT-servo por administri kaj analizi TV-inspektadajn datumojn de kloakaj retoj.
                                Integriĝo kun IMUS City sistemo por aŭtomatigo de kontrolaj kaj monitoraj procezoj.
                            </p>

                            <!-- Projekta Statistikoj -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2023</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Disvolva Jaro</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center text-cyan-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">4 monatoj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Disvolva Tempo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Backend</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Projekta Tipo</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ago Butonoj -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://taris.ru/programmnoe-obespechenie-telescan/web-servis-imus" target="_blank" class="inline-flex items-center px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Oficiala Retejo</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Projekta Kazo</span>
                                </button>
                            </div>
                        </div>

                        <!-- Projekta Ikono -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-search text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if($project->hasGalleryImages())
            <!-- Projekta Galerio -->
            <section class="py-16">
                <div class="fluid-container">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="text-3xl font-bold mb-12 text-center fade-in">Projekta Galerio</h2>

                        <!-- Ĉefa Galerio -->
                        <div class="project-gallery main mb-8 fade-in">
                            <div class="gallery-item h-96" @click="openLightbox(0)">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="TV Inspektada Modula Interfaço" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                    <div class="opacity-0 hover:opacity-100 transition-opacity duration-300">
                                        <i class="fas fa-search-plus text-white text-2xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="gallery-item h-44" @click="openLightbox(1)">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Inspektada Datuma Analizo" class="w-full h-full object-cover">
                                </div>
                                <div class="gallery-item h-44" @click="openLightbox(2)">
                                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Raportoj kaj Statistiko" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>

                        <!-- Sekundara Galerio -->
                        <div class="project-gallery secondary fade-in">
                            <div class="gallery-item h-64" @click="openLightbox(3)">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Integriĝo kun IMUS City" class="w-full h-full object-cover">
                            </div>
                            <div class="gallery-item h-64" @click="openLightbox(4)">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Datuma Vizualigo" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Projekta Detaloj -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Ĉefa Enhavo -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Projekta Priskribo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    Pri la Projekto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>IMUS City TV Inspektado Modulo</strong> estas specialigita TTT-servo por administri
                                        kaj analizi TV-inspektadajn datumojn de kloakaj retoj. La projekto estis disvolvita por kompanio TARIS -
                                        ĉefa rusa produktanto de ekipaĵoj por tuba diagnozado.
                                    </p>
                                    <p>
                                        La sistemo provizas kompletan ciklon de laboro kun TV-inspektadaj datumoj: de alŝuto
                                        kaj prilaborado de videoj ĝis generado de raportoj kaj integriĝo kun la ĉefa IMUS City sistemo.
                                    </p>
                                    <p>
                                        La ĉefa celo de la projekto estas aŭtomatigi la procezojn de monitorado kaj kontrolado
                                        de la stato de kloakaj retoj, kiu signife pliigas la efikecon de urba
                                        infrastruktura prizorgado.
                                    </p>
                                </div>
                            </div>

                            <!-- Ĉefaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-blue-500 mr-3"></i>
                                    Ĉefaj Trajtoj
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Ĉefaj Moduloj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Alŝuto kaj prilaborado de TV-inspektadaj videoj</li>
                                            <li>Aŭtomata difektorekono</li>
                                            <li>Generado de raportoj kaj dokumentado</li>
                                            <li>Integriĝo kun IMUS City sistemo</li>
                                            <li>Projekta kaj objekta administrado</li>
                                            <li>Inspektada datuma vizualigo</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Teknikaj Trajtoj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>RESTful API por integriĝo kun eksteraj sistemoj</li>
                                            <li>Subteno de diversaj video-datumaj formatoj</li>
                                            <li>Aŭtomata difektoklasifiko</li>
                                            <li>Sciiga kaj alarmiga sistemo</li>
                                            <li>Pluruzanta aliro kun rola modelo</li>
                                            <li>Datumrezervado kaj restaŭrado</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Disvolva Procezo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-blue-500 mr-3"></i>
                                    Disvolva Procezo
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Postulata Analizo kaj Dezajno</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Studo de TV-inspektadaj specifaĵoj de kloakaj retoj, analizo de ekzistantaj kompaniaj procezoj,
                                                sistema arkitektura dezajno kaj API-planado.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Backend Disvolvado</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                API-kreado, efektivigo de video-datuma prilaborada negoca logiko,
                                                disvolvado de difektoklasifika sistemo kaj raportaj moduloj.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Integriĝo kaj Testado</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Integriĝo kun IMUS City sistemo, kompleta funkcia testado,
                                                efikeca optimumigo kaj preparado por industria operacio.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Disvastigo kaj Subteno</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Sistema disvastigo sur produktaj serviloj, uzanta trejnado,
                                                teknika subteno kaj plibonigoj bazitaj sur retrokuplo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankopanelo -->
                        <div class="space-y-6">
                            <!-- Uzataj Teknologioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-blue-500 mr-2"></i>
                                    Teknologioj
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'laravel']) }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                                                Laravel
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'php']) }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                                                PHP 8.1
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'mysql']) }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:bg-orange-200 dark:hover:bg-orange-800/50 transition-colors">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">API & Integriĝo</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'api']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
                                                REST API
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'websocket']) }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                WebSocket
                                            </a>
                                            <span class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm">
                                                IMUS City API
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Infrastrukturo</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'docker']) }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                                Docker
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'nginx']) }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:bg-cyan-200 dark:hover:bg-cyan-800/50 transition-colors">
                                                Nginx
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'redis']) }}" class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm hover:bg-yellow-200 dark:hover:bg-yellow-800/50 transition-colors">
                                                Redis
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Projekta Statistikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                    Projekta Statistiko
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Disvolva Tempo</span>
                                        <span class="font-semibold">4 monatoj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Kommitoj</span>
                                        <span class="font-semibold">287</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Linioj de Kodo</span>
                                        <span class="font-semibold">~18,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">API Finpunktoj</span>
                                        <span class="font-semibold">24</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Efikeco</span>
                                        <span class="font-semibold">96/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Solvitaj Defioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-puzzle-piece text-blue-500 mr-2"></i>
                                    Solvitaj Defioj
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Integriĝo kun malnova IMUS City sistemo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Prilaborado de grandaj volumoj de video-datumoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Efektivigo de difektoklasifika sistemo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Certigado de alta API-efikeco</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Klienta Informo -->
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Kliento</h3>
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">TARIS</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Diagnoza Ekipaĵa Produktanto</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Ĉefa rusa produktanto de ekipaĵoj por tuba diagnozado kaj purigado
                                </p>
                                <a href="https://taris.ru" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Viziti Retejon</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Negoca Efiko -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Negoca Efiko</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-16 h-16 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mx-auto mb-4">
                                <i class="fas fa-chart-line text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Efikeco +40%</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Aŭtomatigo de TV-inspektada datuma prilaborado reduktis analizan tempon je 40%
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-16 h-16 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mx-auto mb-4">
                                <i class="fas fa-bug text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Precizeco 95%</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Aŭtomata difektorekona sistemo provizas 95% klasifikan precizecon
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-16 h-16 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-4">
                                <i class="fas fa-file-alt text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Raportoj en 5 minutoj</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Kompleta raporta generado reduktiĝis de kelkaj horoj al 5 minutoj
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alvoko al Ago -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">Ĉu interesita pri industria solvo?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Preta diskuti viajn taskojn kaj krei fidindan solvon por negoca proceza aŭtomatigo.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Diskuti Projekton</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-blue-500 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Ĉiuj Projektoj</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        @if($project->hasGalleryImages())
            <!-- Lumskatola Modala Fenestro -->
            <div x-show="lightboxOpen" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 p-4" x-cloak style="display: none;">
            <div class="relative max-w-6xl max-h-full">
                <button @click="lightboxOpen = false" class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>
                <img :src="lightboxImages[lightboxIndex]" :alt="'Bildo ' + (lightboxIndex + 1)" class="max-w-full max-h-full object-contain">
                <button @click="lightboxIndex = (lightboxIndex - 1 + lightboxImages.length) % lightboxImages.length"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-chevron-left text-2xl"></i>
                </button>
                <button @click="lightboxIndex = (lightboxIndex + 1) % lightboxImages.length"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-chevron-right text-2xl"></i>
                </button>
            </div>
        </div>
        @endif

        <!-- Kazo-Modala Fenestro -->
        <div x-show="showCaseStudy" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Fona Supermeto -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showCaseStudy = false"></div>

                <!-- Modala Panelo -->
                <div class="relative inline-block w-full max-w-6xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Ferma Butono -->
                    <button @click="showCaseStudy = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Kazo-Enhavo -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Kapo -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Projekta Kazo: IMUS City TV Inspektado Modulo</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Industria aŭtomatigo por kloaka reta diagnozado</p>
                        </div>

                        <!-- Resuma Priskribo -->
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-blue-500 mr-3"></i>
                                Projekta Resumo
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Projektaj Celoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Aŭtomatigi TV-inspektadan datuman prilaboran fluon</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Integriĝi kun ekzistanta IMUS City infrastrukturo</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Efektivigi aŭtomatan difektoklasifikon</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ĉefaj Rezultoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>40% redukto en datuma prilabora tempo</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>95% precizeco en difektoklasifiko</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-file-alt text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>5-minuta raporta generado</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Teknikaj Defioj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-blue-500 mr-3"></i>
                                Teknikaj Defioj & Solvoj
                            </h3>
                            <div class="space-y-6">
                                <!-- Defio 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Defio: Malnova Sistema Integriĝo</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                La ekzistanta IMUS City sistemo uzis malmodernajn protokolojn kaj datumajn formatojn,
                                                postulante kompleksan integriĝon dum konservanta malantaïan kongruecon.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Propra API-adaptila disvolvado</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Datuma formata transforma tavolo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Graciaj rezervaj mekanismoj</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Seninterrompa integriĝo kun nula interrompo al ekzistantaj operacioj
                                        </p>
                                    </div>
                                </div>

                                <!-- Defio 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-cyan-500">
                                    <h4 class="font-semibold text-lg mb-3 text-cyan-600 dark:text-cyan-400">Defio: Granda Voluma Video-Prilaborado</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Prilaborado de horoj da inspektada video-materialo postulis signifajn komputajn
                                                rimedojn kaj efikan stokadministradon.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Asinkrona prilaborado kun vicoj</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Video-kunpremo kaj optimumigo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Distribuita stoka arkitekturo</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Prilabora tempo reduktita je 60% kun optimumigita rimeda uzo
                                        </p>
                                    </div>
                                </div>

                                <!-- Defio 3 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-indigo-500">
                                    <h4 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Defio: Realtempa Datuma Sinkronigo</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Multoblaj kampaj teamoj bezonis realteman aliron al inspektadaj datumoj
                                                dum konservanta datumkonsekvencon trans distribuitaj sistemoj.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>WebSocket-efektivigo por realtempaj ĝisdatigoj</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Optimisma ŝloso por datumkonsekvenco</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Konflikto-solvaj mekanismoj</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Realtempa datuma sinkronigo kun 99.9% disponebleco
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Teknika Arkitekturo -->
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-sitemap text-indigo-500 mr-3"></i>
                                Teknika Arkitekturo
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-3 text-indigo-600 dark:text-indigo-400">Backend Komponantoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-server text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>Laravel RESTful API kun 24 finpunktoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-database text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>MySQL kun optimumigita indeksado</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>Redis por kaŝmemoro kaj seanco-administrado</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-exchange-alt text-indigo-500 mr-2 mt-0.5"></i>
                                            <span>Vica sistemo por fona prilaborado</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-3 text-purple-600 dark:text-purple-400">Integriĝa Tavolo</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-plug text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Propra IMUS City API-adaptilo</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-sync text-purple-500 mr-2 mt-0.5"></i>
                                            <span>WebSocket por realtema komunikado</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-shield-alt text-purple-500 mr-2 mt-0.5"></i>
                                            <span>JWT aŭtentigo kaj aŭtorizado</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-code text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Kompleta API-dokumentado</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Negoca Efiko -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Negoca Efiko & Rezultoj
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-green-500 mb-2">40%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Tempo-Ŝparo</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">95%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Precizeco</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">5 min</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Raporta Generado</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-indigo-500 mb-2">24/7</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Sistema Disponebleco</div>
                                </div>
                            </div>
                        </div>

                        <!-- Lernitaj Lecionoj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-graduation-cap text-blue-500 mr-3"></i>
                                Lernitaj Lecionoj
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Teknikaj Komprenoj</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Graveco de kompleta API-versia strategio</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Valoro de asinkrona prilaborado por video-datumoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Avantaĝoj de modula arkitekturo por industriaj sistemoj</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Projekta Administrado</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Frua interesito-engaĝiĝo kritika por industriaj projektoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Fazita disvastigo reduktas operaciajn riskojn</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Kompleta testado esenca por fidindeco</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @push('scripts')
        <script>
            function portfolioItemApp() {
                return {
                    lightboxOpen: false,
                    lightboxIndex: 0,
                    showCaseStudy: false,
                    lightboxImages: [
                        'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
                    ],
                    openLightbox(index) {
                        this.lightboxIndex = index;
                        this.lightboxOpen = true;
                    },
                    init() {
                        // Inicialigi iujn ajn animaciojn aŭ interagojn
                        console.log('IMUS City portfoliao ero inicialigita');
                    }
                }
            }
        </script>
    @endpush

    @push('styles')
        <style>
            .project-gallery {
                display: grid;
                gap: 1rem;
            }
            .project-gallery.main {
                grid-template-columns: 2fr 1fr;
            }
            .project-gallery.secondary {
                grid-template-columns: 1fr 1fr;
            }
            .gallery-item {
                position: relative;
                border-radius: 0.75rem;
                overflow: hidden;
                cursor: pointer;
                transition: transform 0.3s ease;
            }
            .gallery-item:hover {
                transform: scale(1.02);
            }
            .tech-tag {
                transition: all 0.3s ease;
            }
            .fade-in {
                animation: fadeIn 0.6s ease-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .fluid-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 1rem;
            }
            @media (max-width: 768px) {
                .project-gallery.main,
                .project-gallery.secondary {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    @endpush
</x-frontend.layouts.app>

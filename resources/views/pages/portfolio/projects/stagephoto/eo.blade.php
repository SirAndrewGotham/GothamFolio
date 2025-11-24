<x-frontend.layouts.app>
    <!-- Ĉefa Enhavo -->
    <main class="w-full pt-20" x-data="portfolioItemApp()" x-init="init()">
        <!-- Paneroj -->
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
                                <a href="/portfolio" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Portfolio
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
                                    StagePhoto
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Projekta Hero-Sekcio -->
        <section class="py-12 bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Projekta Informo -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">StagePhoto</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        En Disvolviĝo
                                    </span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-users mr-1 text-xs"></i>
                                        Komunumo
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Kompleta cifereca platformo por fotado de vivaj prezentaĵoj — kuniganta fotistojn,
                                artistojn, scenejojn kaj spektantojn en ununura kreiva spaco.
                            </p>

                            <!-- Projekta Statistikoj -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Disvolviĝa Jaro</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">9 monatoj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Disvolviĝa Tempo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Full-stack</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Projekta Tipo</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Agaj Butonoj -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://stagephoto.ru" target="_blank" class="inline-flex items-center px-6 py-3 bg-purple-500 hover:bg-purple-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Viziti Retejon</span>
                                </a>
                                <a href="https://github.com/SirAndrewGotham/stagephoto" target="_blank" class="inline-flex items-center px-6 py-3 border border-purple-500 text-purple-500 hover:bg-purple-50 dark:hover:bg-purple-900/20 rounded-lg font-medium transition-colors">
                                    <i class="fab fa-github mr-2"></i>
                                    <span>Fonta Kodo</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Projekta Kazo</span>
                                </button>
                            </div>
                        </div>

                        <!-- Projekta Ikono -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-camera-retro text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projekta Detaloj -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Ĉefa Enhavo -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- Projekta Priskribo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                    Pri la Projekto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>StagePhoto</strong> estas moderna retplatformo dediĉita al fotado de vivaj prezentaĵoj,
                                        servante kiel centra nodo por fotistoj, artistoj, teatroj, muzikaj scenejoj kaj entuziasmuloj.
                                    </p>
                                    <p>
                                        La platformo transpontas la malinterspacon inter arta dokumentado kaj spektanta engaĝiĝo,
                                        kreante vibrantan komunumon ĉirkaŭ fotado de scenejaj artoj.
                                    </p>
                                    <p>
                                        La projekto reprezentas kompletan renovigon de la originala retejo stagephoto.ru,
                                        kiu funkcias ekde 2004 sed fariĝis teknologie malmoderna. La nova platformo
                                        estas konstruita sur moderna Laravel-stako uzante Livewire, Alpine.js kaj Tailwind CSS.
                                    </p>
                                </div>
                            </div>

                            <!-- Ĉefaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-purple-500 mr-3"></i>
                                    Ĉefaj Trajtoj
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-purple-600 dark:text-purple-400">Kernaj Moduloj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Datumbazo de prezentaĵoj kaj eventoj</li>
                                            <li>Fotistaj portfolioj kun etenditaj profiloj</li>
                                            <li>Sistemo por alŝuto kaj administrado de fotoj</li>
                                            <li>Altnivela serĉo kaj filtrado</li>
                                            <li>Socialaj trajtoj (ŝatoj, komentoj)</li>
                                            <li>Plurlingva subteno</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-purple-600 dark:text-purple-400">Teknikaj Trajtoj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Moderna Laravel 12 + Livewire-stako</li>
                                            <li>Responsiva dezajno por ĉiuj aparatoj</li>
                                            <li>Elasticsearch por altnivela serĉo</li>
                                            <li>CDN-integracio por medi-enhavo</li>
                                            <li>Redis-kaŝsistemo</li>
                                            <li>API por mobilaj aplikaĵoj</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Disvolviĝa Procezo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-purple-500 mr-3"></i>
                                    Disvolviĝa Procezo
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Analizo kaj Dezajno</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Studo de heredaĵa sistemo, dezajno de nova arkitekturo, kreado de teknika specifo,
                                                kaj dezajn-skizoj. Analizo de komunumaj bezonoj kaj difino de ĉefaj funkciaj postuloj.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Backend-Disvolviĝo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Kreado de API, realigo de negoca logiko, disvolviĝo de aŭtentiga sistemo,
                                                kaj moduloj de enhav-administrado. Integrado kun eksteraj servoj kaj efikeco-optimumigo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Frontend-Disvolviĝo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Kreado de responsiva interfaco, realigo de interaktivaj elementoj kun Livewire,
                                                integrado kun backend API. Fokuso sur uzulsperto kaj alirebleco por ĉiuj aparatoj.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Testado kaj Lanĉo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Kompleta testado de funkcieco, efikeco kaj sekureco. Datum-migrado
                                                el heredaĵa sistemo, disvastigo sur produktada servilo, efikeco-monitorado post lanĉo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Uzataj Teknologioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-purple-500 mr-2"></i>
                                    Teknologioj
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio?category=laravel') }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                Laravel 12
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'php']) }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                                                PHP 8.3
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'mysql']) }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:bg-orange-200 dark:hover:bg-orange-800/50 transition-colors">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'livewire']) }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                                                Livewire
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'tailwind']) }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:bg-cyan-200 dark:hover:bg-cyan-800/50 transition-colors">
                                                Tailwind CSS
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'alpinejs']) }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                Alpine.js
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Infrastrukturo</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'docker']) }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                                Docker
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'nginx']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
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
                                    <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                    Projekta Statistikoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Disvolviĝa Tempo</span>
                                        <span class="font-semibold">9 monatoj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Kommitoj</span>
                                        <span class="font-semibold">612</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Linioj de Kodo</span>
                                        <span class="font-semibold">~45,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Sistemaj Moduloj</span>
                                        <span class="font-semibold">15</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Efikeco</span>
                                        <span class="font-semibold">94/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Defioj kaj Solvoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-puzzle-piece text-purple-500 mr-2"></i>
                                    Solvitaj Defioj
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Datum-migrado el heredaĵa sistemo de 2004</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Realigo de kompleksa serĉa kaj filtra sistemo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Optimumigo de pritraktado de granda medi-enhavo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Elasticsearch-integracio por altnivela serĉo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Projektoj -->
                            <div class="bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Aliaj Projektoj</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Esploru aliajn verkojn el mia portfolio
                                </p>
                                <a href="/portfolio" class="inline-flex items-center justify-center w-full px-4 py-2 bg-purple-500 hover:bg-purple-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    <span>Reen al Projektoj</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alvoko al Ago -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">Ĉu interesata pri simila projekto?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Preta diskuti viajn ideojn kaj krei solvon kiu superas atendojn.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-purple-500 hover:bg-purple-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Diskuti Projekton</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-purple-500 text-purple-500 hover:bg-purple-50 dark:hover:bg-purple-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Ĉiuj Projektoj</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kazo-Modala Fenestro -->
        <div x-show="showCaseStudy"
             @keydown.escape.window="showCaseStudy = false"
             x-transition:enter="transition ease-out duration-300"
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
                            <h2 id="modal-title" class="text-3xl font-bold mb-4">Projekta Kazo: StagePhoto Platformo</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Kompleta analizo de la disvolviĝa procezo de heredaĵa sistemo al moderna platformo</p>
                        </div>

                        <!-- Resuma Priskribo -->
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-purple-500 mr-3"></i>
                                Projekta Resumo
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Projektaj Celoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Modernigi heredaĵan platformon de 2004</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Krei centran nodon por komunumo de fotistoj de vivaj prezentaĵoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Implementi altnivelan serĉon kaj socialajn trajtojn</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ĉefaj Rezultoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Poentaro 94/100 en efikecaj metrikoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Paĝo-ŝarga tempo sub 2.8 sekundoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-users text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>15+ sistemaj moduloj implementitaj</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Teknikaj Defioj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-purple-500 mr-3"></i>
                                Teknikaj Defioj kaj Solvoj
                            </h3>
                            <div class="space-y-6">
                                <!-- Defio 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-purple-500">
                                    <h4 class="font-semibold text-lg mb-3 text-purple-600 dark:text-purple-400">Defio: Heredaĵa Sistemo-Datum-Migrado</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Migrado de datumoj el sistemo de 2004 kun malmodernaj datumformatoj,
                                                sen dokumentado kaj kompleksa datumbazstrukturo prezentis signifajn teknikajn defiojn.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Propraj migrad-skriptoj kun laŭfaza aliro</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Mezaj niveloj de validigo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Implemento de reven-mekanismo</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Sukcesa migrado de 20+ jaroj de komunumaj datumoj kun 99.8% datum-integriteco
                                        </p>
                                    </div>
                                </div>

                                <!-- Defio 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-purple-500">
                                    <h4 class="font-semibold text-lg mb-3 text-purple-600 dark:text-purple-400">Defio: Kompleksa Serĉa Sistemo-Implementado</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Bezonis potencan serĉan sistemon por multoblaj kriterioj: prezentaĵa tipo,
                                                artisto, scenejo, dato, fotisto, ekipaĵo, ktp.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Elasticsearch-integracio por plenteksta serĉo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Realigo de kompleksaj filtriloj kun Livewire</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Mendo-optimumigo kaj rezulto-kaŝado</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Serĉa efikeco pliboniĝis je 300% kompare kun heredaĵa sistemo
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rezultoj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Rezultoj kaj Efiko
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">94%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Efikeca Poentaro</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">2.8s</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Ŝarga Tempo</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-pink-500 mb-2">15+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Sistemaj Moduloj</div>
                                </div>
                            </div>
                        </div>

                        <!-- Komunuma Efiko -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-users text-purple-500 mr-3"></i>
                                Komunuma Efiko
                            </h3>
                            <div class="bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6">
                                <p class="text-gray-600 dark:text-gray-400 mb-4">
                                    La lanĉo de la nova StagePhoto-platformo signife efikis la komunumon de fotistoj de vivaj prezentaĵoj:
                                </p>
                                <ul class="feature-list space-y-2 text-gray-600 dark:text-gray-400">
                                    <li>Kreita centrigita platformo por fotistoj de vivaj prezentaĵoj</li>
                                    <li>Simpligita serĉo kaj konekto inter fotistoj kaj artistoj</li>
                                    <li>Konservita kultura heredaĵo per cifereca dokumentado de prezentaĵoj</li>
                                    <li>Disvolvita profesia komunumo kun kunlaboraj eblecoj</li>
                                    <li>Provizitaj iloj por promocio kaj monetiĝo de fotista laboro</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Agaj Butonoj -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-purple-500 hover:bg-purple-600 text-white rounded-lg font-medium transition-colors">
                                Fermi Kazon
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-purple-500 text-purple-500 hover:bg-purple-50 dark:hover:bg-purple-900/20 rounded-lg font-medium transition-colors">
                                Diskuti Kunlaboron
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function portfolioItem() {
                return {
                    showCaseStudy: false
                }
            }
        </script>
    </main>
</x-frontend.layouts.app>

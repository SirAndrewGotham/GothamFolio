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
                                    Portfolioro
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio/laravel" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Laravel-projektoj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Chagan.su
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Projekta Hero-Sekcio -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Projekta Informo -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Chagan.su</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Aktiva Projekto
                                    </span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-users mr-1 text-xs"></i>
                                        Komunumo
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Cifereca hejmo por la Ĉagan-komunumo - konservante historion, reunuigante iamajn loĝantojn
                                kaj honorante la unikan heredaĵon de la armea urbeto apud la "Urso" aerbazo.
                            </p>

                            <!-- Projekta Statistiko -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Evoluiga Jaro</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">6 monatoj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Evoluiga Tempo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
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
                                <a href="https://chagan.su" target="_blank" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Viziti Retejon</span>
                                </a>
                                <a href="https://github.com/SirAndrewGotham/chagan" target="_blank" class="inline-flex items-center px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-landmark text-4xl"></i>
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
                            <img src="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Ĉefa Paĝo de Chagan.su" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                <div class="opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-search-plus text-white text-2xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="gallery-item h-44" @click="openLightbox(1)">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Loĝantaro-Katalogo" class="w-full h-full object-cover">
                            </div>
                            <div class="gallery-item h-44" @click="openLightbox(2)">
                                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Foto-Arkivo" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Sekundara Galerio -->
                    <div class="project-gallery secondary fade-in">
                        <div class="gallery-item h-64" @click="openLightbox(3)">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Mobila Versio" class="w-full h-full object-cover">
                        </div>
                        <div class="gallery-item h-64" @click="openLightbox(4)">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Komunuma Forumo" class="w-full h-full object-cover">
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
                                    <i class="fas fa-info-circle text-primary-500 mr-3"></i>
                                    Pri la Projekto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Chagan.su</strong> estas moderna retplatformo kreita por konservi historion
                                        kaj reunuigi la komunumon de iamaj loĝantoj de la armea urbeto Ĉagan,
                                        situanta apud la strategia "Urso" aerbazo.
                                    </p>
                                    <p>
                                        La projekto reprezentas kompletan modernigon de la originala retejo chagan.ru,
                                        kiu funkciis ekde 2004 sed fariĝis teknologie malmoderna. La nova platformo
                                        estas konstruita sur moderna Laravel-stako uzante Livewire, Alpine.js kaj Tailwind CSS.
                                    </p>
                                    <p>
                                        La ĉefa misio de la projekto estas krei ciferecan hejmon por la Ĉagan-komunumo,
                                        kie memoroj trovas sian hejmon kaj historio trovas sian voĉon.
                                    </p>
                                </div>
                            </div>

                            <!-- Ĉefaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-primary-500 mr-3"></i>
                                    Ĉefaj Trajtoj
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Ĉefaj Moduloj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Loĝantaro-katalogo kun progresinta serĉo</li>
                                            <li>Cifereca arkivo de fotoj kaj dokumentoj</li>
                                            <li>Platformo por rakontoj kaj memoroj</li>
                                            <li>Komunuma forumo</li>
                                            <li>Kalendaro de eventoj kaj kunvenoj</li>
                                            <li>Plurlingva subteno</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Teknikaj Trajtoj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Moderna Laravel 12 + Livewire-stako</li>
                                            <li>Responsiva dezajno por ĉiuj aparatoj</li>
                                            <li>Kaŝmemoriga sistemo por efikeco</li>
                                            <li>Sekura aŭtentiga sistemo</li>
                                            <li>Bildo- kaj media optimizado</li>
                                            <li>Tutteksta enhavo-serĉo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Evoluiga Procezo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-primary-500 mr-3"></i>
                                    Evoluiga Procezo
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Analizo kaj Dezajno</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Studo de hereda sistemo, dezajno de nova arkitekturo,
                                                kreado de teknikaj specifoj kaj dezajnaj maŭetoj.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Backend Evoluigo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                API-kreado, negoca logiko efektivigo, disvolviĝo de
                                                aŭtentiga sistemo kaj enhavo-administraj moduloj.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Frontend Evoluigo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Kreado de responsivaj interfacoj, efektivigo de interaktivaj elementoj
                                                kun Livewire, integriĝo kun backend API.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Migrado kaj Lanĉo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Datuma migrado el hereda sistemo, kompleta testado,
                                                disvastigo al produkcia servilo, efikeca monitorado.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flanka Stango -->
                        <div class="space-y-6">
                            <!-- Uzataj Teknologioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-primary-500 mr-2"></i>
                                    Teknologioj
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'laravel']) }}" class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-lg text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
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

                            <!-- Projekta Statistiko -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-primary-500 mr-2"></i>
                                    Projekta Statistiko
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Evoluiga Tempo</span>
                                        <span class="font-semibold">6 monatoj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Komandoj</span>
                                        <span class="font-semibold">428</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Linioj de Kodo</span>
                                        <span class="font-semibold">~25,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Sistemaj Moduloj</span>
                                        <span class="font-semibold">12</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Efikeco</span>
                                        <span class="font-semibold">92/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Solvitaj Defioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-puzzle-piece text-primary-500 mr-2"></i>
                                    Solvitaj Defioj
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Datuma migrado el hereda sistemo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Kreado de kompleksa serĉo- kaj filtra sistemo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Optimizado de laboro kun grandaj mediaj volumoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Efektivigo de datuma privateca sistemo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Projektoj -->
                            <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Aliaj Projektoj</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Esploru aliajn verkojn el mia portfolioro
                                </p>
                                <a href="/portfolio" class="inline-flex items-center justify-center w-full px-4 py-2 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors text-sm">
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
                    <h2 class="text-3xl font-bold mb-6">Ĉu vi interesiĝas pri simila projekto?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Preta diskuti viajn ideojn kaj krei solvon, kiu superos atendojn.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Diskuti Projekton</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
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

        <!-- Kazo-Studa Modala Fenestro -->
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

                    <!-- Kazo-Studa Enhavo -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Kapo -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Projekta Kazo: Chagan.su</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Konservante komunuman historion per modernaj teknologioj</p>
                        </div>

                        <!-- Resuma Priskribo -->
                        <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-primary-500 mr-3"></i>
                                Projekta Resumo
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Projektaj Celoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Krei modernan platformon por komunuma historia konservado</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Reunuigi iamajn loĝantojn kaj konservi unikan heredaĵon</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Modernigi heredan sistemon per nunaj teknologioj</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ĉefaj Rezultoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>92/100 efikeca poentaro</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>3.2 sekundoj paĝo-ŝarga tempo</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-users text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>150% kresko en uzula aktiveco</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Teknikaj Defioj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-primary-500 mr-3"></i>
                                Teknikaj Defioj & Solvoj
                            </h3>
                            <div class="space-y-6">
                                <!-- Defio 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-primary-500">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Defio: Hereda Sistemo-Datuma Migrado</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                La originala chagan.ru sistemo el 2004 uzis malmodernajn datumajn formatojn,
                                                mankis dokumentaron kaj havis kompleksajn rilatojn inter datumaj entoj.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Disvolviĝo de propraj migradaj skriptoj</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Faza datuma migrado kun validigo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Kreado de rezervkopioj kaj revenkapablo</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Sukcesa migrado de 15+ jaroj da komunumaj datumoj sen datuma perdo
                                        </p>
                                    </div>
                                </div>

                                <!-- Defio 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Defio: Kompleksa Serĉa Sistemo Efektivigo</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Bezonis efektivigi potencan serĉon permesantan trovi homojn laŭ multaj kriterioj:
                                                jaroj de loĝado, adreso, lernejo, armea unuo, ktp.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>MySQL tutteksta serĉo efektivigo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Kompleksaj filtriloj kun Livewire</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Mendo-optimizado kaj kaŝmemorigo</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Rapida kaj preciza serĉo tra miloj da rekordoj kun subsekundaj respondaj tempoj
                                        </p>
                                    </div>
                                </div>

                                <!-- Defio 3 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-purple-500">
                                    <h4 class="font-semibold text-lg mb-3 text-purple-600 dark:text-purple-400">Defio: Media Enhavo-Optimizado</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Granda arkivo de historiaj fotoj kaj dokumentoj postulis optimizadon
                                                por reta montrado dum konservante kvaliton kaj rapidan ŝargadon.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Aŭtomata bildo-optimizado kaj kunpremado</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Laza ŝargado efektivigo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>CDN-integriĝo por media liverado</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            75% redukto en paĝo-ŝargaj tempoj dum konservante bildan kvaliton
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Projekta Efiko -->
                        <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Projekta Efiko & Rezultoj
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">150%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Kresko en Uzula Aktiveco</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">92/100</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Efikeca Poentaro</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">3.2s</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Averaĝa Paĝo-Ŝargo</div>
                                </div>
                            </div>
                        </div>

                        <!-- Lernitaj Lecionoj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-graduation-cap text-primary-500 mr-3"></i>
                                Lernitaj Lecionoj
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Teknikaj Komprenoj</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Graveco de kompleksa datuma migrada planado</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Valoro de kaŝmemorigaj strategioj por komunumaj platformoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Avantaĝoj de modula arkitekturo por estonta skalebleco</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Projekta Administrado</h4>
                                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Frua interesito-engagado estas kritika por komunumaj projektoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Faza disvastigo reduktas riskon kaj plibonigas uzulan adoptadon</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Kontinuaj reago-cikloj kun komunumanoj</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Estonta Vojaĝmapo -->
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-road text-purple-500 mr-3"></i>
                                Estonta Disvolviĝa Vojaĝmapo
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-3 text-purple-600 dark:text-purple-400">Mallongtempa (3-6 monatoj)</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Mobila aplikaĵo-disvolviĝo</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Plibonigitaj foto-rekonaj trajtoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Progresintaj serĉaj filtriloj</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-3 text-purple-600 dark:text-purple-400">Longtempa (6-12 monatoj)</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>AI-povitaj enhavo-rekomendoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Integriĝo kun sociaj retoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-plus text-purple-500 mr-2 mt-0.5"></i>
                                            <span>Plurmedia arkivo-ekspansio</span>
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
                        'https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                        'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
                    ],
                    openLightbox(index) {
                        this.lightboxIndex = index;
                        this.lightboxOpen = true;
                    },
                    init() {
                        // Inicialigo de iuj animacioj aŭ interagoj
                        console.log('Portfolioro-projekto inicialigita');
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

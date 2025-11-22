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
                                    Portfoliao
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
                                    Telescan Web
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Projekta Hero-Sekcio -->
        <section class="py-12 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Projekta Informo -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Telescan Web</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Aktiva Disvolviĝo
                                    </span>
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-cloud mr-1 text-xs"></i>
                                        TTT-platformo
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Moderna TTT-platformo por televida inspektado de kloakaj tuboj.
                                Plenfunkcia anstataŭo por surtabla aplikaĵo kun plibonigitaj
                                nubaj kapabloj kaj kunlabora aliro.
                            </p>

                            <!-- Projekta Statistiko -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2023-2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Disvolviĝa Periodo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">8+ monatoj</div>
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

                            <!-- Ago-butonoj -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <button @click="showDemo = true" class="inline-flex items-center px-6 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-play mr-2"></i>
                                    <span>Demo-versio</span>
                                </button>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Projekta Kazo</span>
                                </button>
                            </div>
                        </div>

                        <!-- Projekta Ikono -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-globe text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ĉefaj Avantaĝoj -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Ĉefaj Avantaĝoj de TTT-versio</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mx-auto mb-6">
                                <i class="fas fa-cloud text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Nuba Arkitekturo</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Aliro el ĉiu retumilo sen aldona programaro.
                                Ĉiuj datumoj sekure konserviĝas en la nubo kun aŭtomata sekurkopio.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-6">
                                <i class="fas fa-users text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Kunlaboro</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Multuzanta aliro al projektoj. Teamo povas labori pri la sama projekto
                                samtempe de malsamaj aparatoj kaj lokoj.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mx-auto mb-6">
                                <i class="fas fa-sync-alt text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">API-orientita</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Plenfunkcia REST API por integriĝo kun aliaj sistemoj.
                                Facila integriĝo kun CRM, ERP kaj aliaj korporaciaj solvaĵoj.
                            </p>
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
                                    <i class="fas fa-info-circle text-indigo-500 mr-3"></i>
                                    Pri la Projekto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Telescan Web</strong> estas moderna TTT-platformo reprezentanta
                                        plenfunkcian TTT-version de populara surtabla aplikaĵo por televida
                                        inspektado de kloakaj tuboj. La projekto estis disvolvita por kompanio TARIS.
                                    </p>
                                    <p>
                                        La platformo konservas ĉiujn funkciojn de la originala Telescan, aldonante
                                        avantaĝojn de TTT-teknologioj: platformsendependa kongrueco, tujaj
                                        ĝisdatigoj, nuba datumkonservado kaj plibonigitaj kunlaboraj kapabloj.
                                    </p>
                                    <p>
                                        La ĉefa fokuso de la projekto estas krei efikan kaj respondeman
                                        TTT-aplikaĵon kapablan prilabori grandajn volumojn de videaj datumoj kaj
                                        certigi seninterrompan funkcion eĉ kun malrapida interreta konekto.
                                    </p>
                                </div>
                            </div>

                            <!-- API Arkitekturo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code text-indigo-500 mr-3"></i>
                                    API-orientita Arkitekturo
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-plug text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">RESTful API</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Plenfunkcia REST API kun 50+ finpunktoj por administri projektojn,
                                                uzantojn, videajn datumojn kaj raportojn. Subteno de API-versiado.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">WebSocket por Realtempo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Realtempaj sciigoj pri videa prilabora statuso, retaj uzantaj statusoj,
                                                tujaj interfacaj ĝisdatigoj dum kunlabora laboro.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Sekureco kaj Aŭtentigo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                JWT aŭtentigo, OAuth2 por triapartiaj integriĝoj, rol-bazita alira modelo,
                                                protekto kontraŭ CSRF kaj XSS atakoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ĉefaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-indigo-500 mr-3"></i>
                                    Ĉefaj Trajtoj
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Kernaj Moduloj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Videa alŝuto kaj fluonta ludado</li>
                                            <li>Aŭtomata rekono de tubaj difektoj</li>
                                            <li>Interaktiva markado kaj anotacioj</li>
                                            <li>Raportogenerado en diversaj formatoj</li>
                                            <li>Projekta kaj teama administrado</li>
                                            <li>Sciiga kaj alarmiga sistemo</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">TTT-specifaj Funkcioj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>PWA (Progressiva TTT-aplikaĵo) subteno</li>
                                            <li>Eksterreta laboro kun sinkronigo</li>
                                            <li>Responsiva dezajno por ĉiuj aparatoj</li>
                                            <li>Integriĝo kun nubaj konservejoj</li>
                                            <li>Tuja serĉo tra ĉiuj datumoj</li>
                                            <li>Altnivela permesa sistemo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Uzitaj Teknologioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-indigo-500 mr-2"></i>
                                    Teknologioj
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'laravel']) }}" class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm hover:bg-indigo-200 dark:hover:bg-indigo-800/50 transition-colors">
                                                Laravel 10
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'php']) }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:bg-red-200 dark:hover:bg-red-800/50 transition-colors">
                                                PHP 8.2
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'mysql']) }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:bg-orange-200 dark:hover:bg-orange-800/50 transition-colors">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'vuejs']) }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:bg-blue-200 dark:hover:bg-blue-800/50 transition-colors">
                                                Vue.js 3
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'tailwind']) }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:bg-cyan-200 dark:hover:bg-cyan-800/50 transition-colors">
                                                Tailwind CSS
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'pinia']) }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:bg-purple-200 dark:hover:bg-purple-800/50 transition-colors">
                                                Pinia
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">API & Realtempo</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('/portfolio', ['category' => 'api']) }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:bg-green-200 dark:hover:bg-green-800/50 transition-colors">
                                                REST API
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'websocket']) }}" class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm hover:bg-yellow-200 dark:hover:bg-yellow-800/50 transition-colors">
                                                WebSocket
                                            </a>
                                            <a href="{{ url('/portfolio', ['category' => 'jwt']) }}" class="tech-tag px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm hover:bg-pink-200 dark:hover:bg-pink-800/50 transition-colors">
                                                JWT
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Projekta Statistiko -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-indigo-500 mr-2"></i>
                                    Projekta Statistiko
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Disvolviĝa Tempo</span>
                                        <span class="font-semibold">8+ monatoj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Komandoj</span>
                                        <span class="font-semibold">842</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">API Finpunktoj</span>
                                        <span class="font-semibold">56</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Vue Komponantoj</span>
                                        <span class="font-semibold">47</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Efikeco</span>
                                        <span class="font-semibold">92/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Efikecaj Metrikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tachometer-alt text-indigo-500 mr-2"></i>
                                    Efikecaj Metrikoj
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm text-gray-600 dark:text-gray-400">Paĝa Ŝargo</span>
                                            <span class="text-sm font-semibold">1.2s</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 95%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm text-gray-600 dark:text-gray-400">Videa Prilaboro</span>
                                            <span class="text-sm font-semibold">2.8s</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-500 h-2 rounded-full" style="width: 88%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm text-gray-600 dark:text-gray-400">API Respondo</span>
                                            <span class="text-sm font-semibold">180ms</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-500 h-2 rounded-full" style="width: 92%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Klienta Informo -->
                            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Kliento</h3>
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 rounded-lg bg-indigo-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">TARIS</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Produktanto de Diagnostika Ekipaĵo</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Leda rusia produktanto de ekipaĵoj por tuba diagnozo kaj purigado
                                </p>
                                <a href="https://taris.ru" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Viziti Retejon</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Teknikaj Novigoj -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Teknikaj Novigoj</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-500 mr-4">
                                    <i class="fas fa-video"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Fluonta Videa Prilaboro</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Implementita teknologio por fluonta prilaboro de grandaj inspektaj videodosieroj
                                uzante WebAssembly kaj Service Workers. Permesas labori kun videoj de ajna grandeco
                                sen plena klienta elŝuto.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-4">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Eksterreta-unua Arkitekturo</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Aplikaĵo funkcias eĉ sen interreta konekto.
                                Ĉiuj ŝanĝoj konserviĝas loke kaj sinkroniĝas kiam konekto restariĝas.
                                Uzas IndexedDB kaj Background Sync API.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-4">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <h3 class="text-xl font-semibold">AI Difekta Analizo</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Integriĝo kun maŝinlernaj modeloj por aŭtomata rekono
                                kaj klasifikado de tubaj difektoj. Sistemo konstante lernas el novaj datumoj
                                kaj plibonigas rekonan precizecon.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-4">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h3 class="text-xl font-semibold">PWA kiel Denaska Aplikaĵo</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Telescan Web instaliĝas kiel denaska aplikaĵo sur ajna aparato
                                tra PWA-teknologioj. Subteno de push-sciigoj, tutekrana reĝimo
                                kaj aliro al aparataj kapabloj.
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
                    <h2 class="text-3xl font-bold mb-6">Ĉu vi bezonas modernan TTT-platformon?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Preta krei efikan kaj skaleblan TTT-solvon por via negoco.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Diskuti Projekton</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-indigo-500 text-indigo-500 hover:bg-indigo-50 dark:hover:bg-indigo-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Ĉiuj Projektoj</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Demo Modala Fenestro -->
        <div x-show="showDemo" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Fona Supermeto -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showDemo = false"></div>

                <!-- Modala Panelo -->
                <div class="relative inline-block w-full max-w-2xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Ferma Butono -->
                    <button @click="showDemo = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Demo Enhavo -->
                    <div class="text-center py-8">
                        <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white mx-auto mb-6">
                            <i class="fas fa-laptop-code text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Demo Havebla laŭ Peto</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Por ricevi aliron al la demo-versio de Telescan Web, bonvolu kontakti min.
                            Mi provizos testajn akreditilojn kaj faros demonstron de la platformaj kapabloj.
                        </p>
                        <a href="/contact" class="inline-flex items-center px-6 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Peti Demon</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kazo-Studo Modala Fenestro -->
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

                    <!-- Kazo-Studo Enhavo -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Kapo -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Projekta Kazo: Telescan Web Platformo</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Plena analizo de la disvolviĝa procezo de surtabla al TTT-transformo</p>
                        </div>

                        <!-- Resuma Priraporto -->
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-indigo-500 mr-3"></i>
                                Projekta Resumo
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Projektaj Celoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Krei TTT-version de populara surtabla aplikaĵo</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Provizi nubajn kapablojn kaj kunlaborajn trajtojn</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Implementi API-unuan arkitekturon por integriĝoj</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ĉefaj Rezultoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>92/100 poentoj en efikecaj metrikoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Paĝa ŝargtempo sub 1.2 sekundoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-code text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>56 API finpunktoj implementitaj</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Teknikaj Defioj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-indigo-500 mr-3"></i>
                                Teknikaj Defioj kaj Solvoj
                            </h3>
                            <div class="space-y-6">
                                <!-- Defio 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-indigo-500">
                                    <h4 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Defio: Grandaj Videa Dosierprilaboro en Retumilo</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Prilaboro de grandaj videodosieroj (ĝis 10GB) en retumila medio
                                                dum konservado de respondema interfaco kaj efikeco.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>WebAssembly por videa prilaboro</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Service Workers por fona prilaboro</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Fluonta videa ludada teknologio</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Videa prilabora tempo reduktita je 65% kompare kun surtabla versio
                                        </p>
                                    </div>
                                </div>

                                <!-- Defio 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-indigo-500">
                                    <h4 class="font-semibold text-lg mb-3 text-indigo-600 dark:text-indigo-400">Defio: Komplexa Surtabla Negoclogiko en TTT</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Rekreo de kompleksa surtabla aplikaĵa negoclogiko
                                                en TTT-medio dum konservado de ĉiuj funkcioj.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Mikroservo-arkitekturo kun klara disigo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Vue.js 3 Composition API por kompleksa stata administrado</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Realtempa kunlaboro kun WebSocket</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            100% surtabla funkcieco konservita kun plibonigitaj TTT-kapabloj
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
                                    <div class="text-3xl font-bold text-indigo-500 mb-2">92%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Efikeca Poentaro</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">1.2s</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Ŝargtempo</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">56</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">API Finpunktoj</div>
                                </div>
                            </div>
                        </div>

                        <!-- API Strategio -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-code text-indigo-500 mr-3"></i>
                                API Strategio
                            </h3>
                            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6">
                                <p class="text-gray-600 dark:text-gray-400 mb-4">
                                    Ŝlosila trajto de la projekto estas API-orientita aliro:
                                </p>
                                <ul class="feature-list space-y-2 text-gray-600 dark:text-gray-400">
                                    <li>56 REST API finpunktoj kun plena OpenAPI-dokumentado</li>
                                    <li>WebSocket por realtempaj sciigoj kaj kunlaboro</li>
                                    <li>GraphQL por kompleksaj raportaj mendoj</li>
                                    <li>API-versiado por retrokongruo</li>
                                    <li>Rapida limigo kaj protekto kontraŭ DDoS-atakoj</li>
                                    <li>Detala dokumentado kun ekzemploj por programistoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Ago-butonoj -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg font-medium transition-colors">
                                Fermi Kazon
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-indigo-500 text-indigo-500 hover:bg-indigo-50 dark:hover:bg-indigo-900/20 rounded-lg font-medium transition-colors">
                                Diskuti Kunlaboron
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function portfolioItemApp() {
                return {
                    showCaseStudy: false,
                    showDemo: false,
                    init() {
                        // Fermi modalan fenestron per Escape-klavo
                        document.addEventListener('keydown', (e) => {
                            if (e.key === 'Escape') {
                                if (this.showCaseStudy) this.showCaseStudy = false;
                                if (this.showDemo) this.showDemo = false;
                            }
                        });
                    }
                }
            }
        </script>
    </main>
</x-frontend.layouts.app>

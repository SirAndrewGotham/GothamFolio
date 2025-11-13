<x-frontend.layouts.app>
    <!-- Ĉefa Enhavo -->
    <main class="w-full pt-20">
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
                                <a href="/competences" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Kompetentoj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Backend Disvolviĝo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Redis
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#DC382D] to-[#A61C1C] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-bolt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Redis</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-memory mr-1"></i>
                                            En-Memora Datum-Konservejo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                En-memora datumstruktura konservejo uzata kiel datumbazo, kaŝmemoro kaj mesaĝa peranto por altrendimentaj aplikoj.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-[#DC382D] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">82%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Kompetent-Nivelo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#DC382D] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde Redis 4.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#DC382D] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v7.2+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nuna Versio</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ĉefa Enhavo -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Ĉefa Enhavo -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- Pri Redis -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#DC382D] mr-3"></i>
                                    Pri Redis
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Redis</strong> (Remote Dictionary Server) estas malfermkoda, en-memora datumstruktura konservejo
                                        uzata kiel datumbazo, kaŝmemoro kaj mesaĝa peranto. Ĝi subtenas diversajn datumstrukturojn kiel ĉenojn,
                                        haŝojn, listojn, arojn kaj pli, provizante esceptan rendimenton por realtempaj aplikoj.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>En-Memora Rendimento</strong> — Sub-milisekundaj respondtempoj por datumoperacioj</li>
                                        <li><strong>Riĉaj Datumstrukturoj</strong> — Ĉenoj, haŝoj, listoj, aroj, orditaj aroj, fluoj</li>
                                        <li><strong>Persistecaj Opcioj</strong> — RDB-fotaĵoj kaj AOF-protokolado por datumdaŭrigo</li>
                                        <li><strong>Replikado & Alta Havebleco</strong> — Majstro-sklava replikado kaj Redis Sentinel</li>
                                        <li><strong>Pub/Sub Mesaĝado</strong> — Realtempaj mesaĝdissendaj kapabloj</li>
                                        <li><strong>Atomaj Operacioj</strong> — Faden-sekuraj operacioj sur kompleksaj datumstrukturoj</li>
                                        <li><strong>Lua-Skriptado</strong> — Servila flanko-skripta ekzekuto por kompleksaj operacioj</li>
                                    </ul>

                                    <h3>Rekomenditaj Uzkazoj</h3>
                                    <p>
                                        Redis elstaras en scenaroj postulantaj altrapidan datumaliron kaj realteman prilaboron:
                                    </p>
                                    <ul>
                                        <li>Aplika kaŝmemorado kaj seanco-stokado</li>
                                        <li>Realtema analitiko kaj gvidtabloj</li>
                                        <li>Mesaĝvicoj kaj taskprilaborado</li>
                                        <li>Rato-limitado kaj API-regulado</li>
                                        <li>Geospacaj datumoj kaj loko-bazitaj servoj</li>
                                        <li>Realtemaj babiladoj kaj sciigsistemoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Redis-Vojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#DC382D] mr-3"></i>
                                    Mia Redis-Vojo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis labori kun Redis en 2019 por plibonigi aplikan rendimenton per kaŝmemorado kaj seanco-administrado.
                                        Ekde tiam, mi progresis de baza ŝlosilo-valora kaŝmemorado al efektivigo de kompleksaj datumstrukturoj,
                                        pub/sub sistemoj kaj Redis Cluster por alt-haveblecaj aplikoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-[#DC382D] mr-2"></i>
                                                Rendimento-Optimumigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efektivigado de Redis-kaŝmemoraj strategioj kiuj reduktis datumbazan ŝarĝon je 80%
                                                kaj plibonigis aplikan respondtempon je 5x en alt-trafikaj scenaroj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-exchange-alt text-blue-500 mr-2"></i>
                                                Realtempaj Sistemoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Konstruado de realtempaj trajtoj uzante Redis Pub/Sub por vivaj sciigoj,
                                                babiladaj sistemoj kaj realtempaj panel-ĝisdatigoj tra multoblaj aplikoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#DC382D] mr-3"></i>
                                    Mia Redis-Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 4+ jaroj da Redis-sperto, mi efektivigis diversajn kaŝmemorajn strategiojn,
                                        realtempajn sistemojn kaj rendiment-optimumigojn tra multoblaj retaplikoj,
                                        signife plibonigante respondtempojn kaj skaligeblon.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aplikaj Kaŝmemoraj Strategioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Seanco-Stokado kaj Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Pub/Sub Mesaĝadaj Sistemoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumstruktura Optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Redis CLI kaj Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimento-Monitorado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Lua-Skriptado por Kompleksaj Operacioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Persisteca Agordo (RDB/AOF)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Sekureco kaj Alir-Kontrolo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integrigo kun Laravel/Lumen</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Cluster kaj Sentinel Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Memoro-Optimumigo</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Alt-Trafika Komercreta Platformo</strong> — Redis-kaŝmemorado reduktis paĝo-ŝargtempojn de 2s al 200ms</li>
                                        <li><strong>Realtema Analitika Panelo</strong> — Redis-fluoj por realtema datumprilaborado</li>
                                        <li><strong>Seanca Cluster-igo</strong> — Distribuita seanco-stokado tra multoblaj aplikaĵaj serviloj</li>
                                        <li><strong>Mesaĝvica Sistemo</strong> — Redis por fona taskprilaborado kaj taskvicoj</li>
                                        <li><strong>API Rato-Limitado</strong> — Redis-bazita rato-limitado por publikaj API-oj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Datumstrukturoj & Ŝablonoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#DC382D] mr-3"></i>
                                    Datumstrukturoj & Ŝablonoj
                                </h2>
                                <div class="content-section">
                                    <h3>Oftaj Redis-Datumstrukturoj</h3>
                                    <p>
                                        Sperteco en utiligado de riĉaj datumstrukturoj de Redis por optimuma rendimento:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Ĉenoj & Haŝoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Simpla kaŝmemorado, nombriloj kaj objekto-stokado kun kampo-nivelaj operacioj
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Listoj & Aroj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Mesaĝvicoj, aktivecaj fluoj kaj unikaj kolektoj
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Orditaj Aroj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Gvidtabloj, prioritataj vicoj kaj temposeraj datumoj
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#DC382D] mb-2">Fluoj & Pub/Sub</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Realtema mesaĝado, event-fontado kaj protokolo-prilaborado
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Oftaj Integrigaj Ŝablonoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Kaŝmemoro</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Seanca Pelilo</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Vica Pelilo</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Dissendado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Rato-Limitado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Realtempaj Trajtoj</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetent-Nivelo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#DC382D] mr-2"></i>
                                    Kompetent-Nivelo
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#DC382D]">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#DC382D] to-[#A61C1C]"
                                                 data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Kaŝmemoraj Strategioj</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Datumstrukturoj</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Pub/Sub Sistemoj</span>
                                            <span class="text-sm font-bold text-blue-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Rendimento-Agordo</span>
                                            <span class="text-sm font-bold text-purple-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#DC382D] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Redis 7.2+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-memory text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">Rendimento-Gajno: <strong>5x pli rapida</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-database text-[#DC382D] w-5 mr-3"></i>
                                        <span class="text-sm">DB-Ŝarĝo-Redukto: <strong>80%</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#DC382D] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                    <a href="/competences/nginx" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-server text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#DC382D] transition-colors">Nginx</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#DC382D] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#DC382D] to-[#A61C1C] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas rendiment-optimumigon?</h3>
                                <p class="text-sm mb-4">Preta diskuti Redis-efektivigon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#DC382D] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Kontaktu Min
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.app>

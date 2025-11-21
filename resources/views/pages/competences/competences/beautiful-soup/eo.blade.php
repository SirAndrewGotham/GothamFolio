<x-frontend.layouts.app>
    @push('section-styles')
        <style>
            /* Alpine.js specific gradient that isn't in the main app.css */
            .alpine-gradient {
                background: linear-gradient(135deg, #8b5cf6 0%, #4c1d95 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Lertostria animacio por kapablecaj stangoj
            document.addEventListener('DOMContentLoaded', function() {
                const skillBars = document.querySelectorAll('.skill-bar-inner');

                skillBars.forEach(bar => {
                    const width = bar.getAttribute('data-width');
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 100);
                });
            });
        </script>
    @endpush

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
                                    Kapablecoj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences/data-science" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Data Science
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Beautiful Soup
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#3A833A] to-[#4CAF50] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-code text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 beautifulsoup-gradient">Beautiful Soup</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-spider mr-1"></i>
                                            TTT-Ŝrapado
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Python-biblioteko por eltiri datumojn el HTML kaj XML-dosieroj.
                                Provizas Python-idiomojn por ripeti, serĉi kaj modifi la analizan arbon.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#3A833A] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Lerteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#3A833A] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#3A833A] mr-3">
                                        <i class="fas fa-file-code"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v4.12+</div>
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
                            <!-- Pri Beautiful Soup -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#3A833A] mr-3"></i>
                                    Pri Beautiful Soup
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Beautiful Soup</strong> estas Python-biblioteko por eltiri datumojn el HTML kaj XML-dosieroj.
                                        Ĝi funkcias kun via preferata analizilo por provizi idiomajn manierojn navigi, serĉi,
                                        kaj modifi la analizan arbon. Ĝi kutime ŝparas programistojn horojn aŭ tagojn da laboro.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Analizila Fleksebleco</strong> - Funkcias kun multaj analiziloj (lxml, html5lib, html.parser)</li>
                                        <li><strong>Pythoneca API</strong> - Intuiciaj metodoj por navigado kaj serĉado en analizaj arboj</li>
                                        <li><strong>Robusta Erarprilaborado</strong> - Grace traktas misformitan HTML</li>
                                        <li><strong>Pova Serĉado</strong> - Altnivela filtrado kun CSS-elektiloj kaj propraj funkcioj</li>
                                        <li><strong>Kodiga Subteno</strong> - Aŭtomata koda detekto kaj konverto</li>
                                        <li><strong>Modifaj Kapabloj</strong> - Modifi la analizan arbon kaj eligi purigitan HTML</li>
                                        <li><strong>Integriĝa Amikeco</strong> - Funkcias senprobleme kun requests, urllib, kaj aliaj bibliotekoj</li>
                                    </ul>

                                    <h3>Kernaj Trajtoj</h3>
                                    <p>
                                        Beautiful Soup provizas kompleksajn ilojn por HTML/XML-prilaborado:
                                    </p>
                                    <ul>
                                        <li><strong>Arba Navigado</strong> - Navigi supren, malsupren kaj flanken tra la analiza arbo</li>
                                        <li><strong>Serĉaj Metodoj</strong> - find(), find_all(), kaj subteno por CSS-elektiloj</li>
                                        <li><strong>Atributa Aliro</strong> - Facila aliro al etikedaj atributoj kaj enhavo</li>
                                        <li><strong>Ĉena Serĉado</strong> - Serĉi ĉenojn per regulaj esprimoj</li>
                                        <li><strong>Arba Modifado</strong> - Aldoni, forigi kaj modifi etikedojn kaj atributojn</li>
                                        <li><strong>Eligformado</strong> - Bela presado kaj eligo de pura HTML/XML</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Beautiful Soup -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#3A833A] mr-3"></i>
                                    Mia Vojaĝo kun Beautiful Soup
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Beautiful Soup en 2020 por TTT-ŝrapadaj projektoj kaj rapide aprezis
                                        ĝian elegantan API-dizajnon. Dum pli ol 4 jaroj, mi uzis ĝin en dekoj da projektoj de
                                        simpla datumeltirado ĝis kompleksaj TTT-ŝrapadaj sistemoj. Ĝia intuicia aliro al HTML-
                                        analizado faris ĝin mia ĉefa biblioteko por TTT-datumeltiradaj taskoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-database text-[#3A833A] mr-2"></i>
                                                Datumeltirado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vasta sperto eltiri strukturitajn datumojn el
                                                TTT-ejoj, novaj portaloj kaj komercplatformoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-industry text-purple-500 mr-2"></i>
                                                Produkta Ŝrapado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Konstruis robustajn ŝrapadajn sistemojn kun erarprilaborado,
                                                ofteco-limitado kaj datumvalidigo por produkta uzo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#3A833A] mr-3"></i>
                                    Mia Sperto kun Beautiful Soup
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 4+ jaroj da vasta sperto, mi majstris Beautiful Soup por diversaj
                                        TTT-ŝrapadaj kaj HTML-analizaj scenaroj tra malsamaj domajnoj kaj komplekseco-niveloj.
                                    </p>

                                    <h3>Kernaj Kapablecoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>HTML-analizado kaj navigado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Altnivela serĉado kaj filtrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CSS-elektila uzo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumeltiradaj ŝablonoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Erarprilaborado kaj robusteco</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Analizila elekto kaj optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integriĝo kun requests/selenium</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimenta optimumigo</span>
                                        </div>
                                    </div>

                                    <h3>Analizaj Teknikoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">find/find_all</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">CSS-elektiloj</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Arba Navigado</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Regex-filtriloj</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Atributa Aliro</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Ĉena Serĉado</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Analizila Elekto</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Kodigo</span>
                                    </div>

                                    <h3>Altnivelaj Uzado-Ŝablonoj</h3>
                                    <ul>
                                        <li><strong>Kompleksa Datumeltirado</strong> - Multnivela datumeltirado el nestitaj strukturoj</li>
                                        <li><strong>Dinamika Enhavo-Prilaborado</strong> - Integriĝo kun Selenium por JavaScript-pezaj ejoj</li>
                                        <li><strong>Datumvalidigo</strong> - Implementado de datumkvalitaj kontroloj dum eltirado</li>
                                        <li><strong>Inkrementa Ŝrapado</strong> - Rekomencado de interrompitaj ŝrapadaj seancoj</li>
                                        <li><strong>Propraj Filtriloj</strong> - Kreado de propraj filtraj funkcioj por kompleksa kongruo</li>
                                        <li><strong>Rendimenta Optimumigo</strong> - Optimumigado de analizila elekto kaj serĉaj ŝablonoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Analizaj Teknikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#3A833A] mr-3"></i>
                                    Analizaj Teknikoj & Metodoj
                                </h2>
                                <div class="content-section">
                                    <h3>Serĉaj Metodoj</h3>
                                    <p>
                                        Vasta sperto kun la kompleksaj serĉaj kapabloj de Beautiful Soup:
                                    </p>
                                    <ul>
                                        <li><strong>find() & find_all()</strong> - Ĉefaj metodoj por lokalizi elementojn</li>
                                        <li><strong>CSS-elektiloj</strong> - Uzado de select() kaj select_one() por CSS-stila elekto</li>
                                        <li><strong>Atributa Filtrado</strong> - Filtrado laŭ atributoj, klasoj kaj propraj datumoj</li>
                                        <li><strong>Teksta Serĉado</strong> - Trovado de elementoj laŭ teksta enhavo kaj ŝablonoj</li>
                                        <li><strong>Regulaj Esprimoj</strong> - Uzado de regex-ŝablonoj por kompleksa kongruo</li>
                                        <li><strong>Propraj Funkcioj</strong> - Kreado de filtraj funkcioj por altnivela elekto</li>
                                    </ul>

                                    <h3>Navigaj Metodoj</h3>
                                    <p>
                                        Majstris arban navigadon por kompleksaj dokumentaj strukturoj:
                                    </p>
                                    <ul>
                                        <li><strong>Patra Navigado</strong> - parent, parents ecoj por supren navigado</li>
                                        <li><strong>Frata Navigado</strong> - next_sibling, previous_sibling por horizontala movado</li>
                                        <li><strong>Ida Navigado</strong> - children, descendants por malsupren navigado</li>
                                        <li><strong>Arba Trairo</strong> - Uzado de generatoroj por efika arba trairo</li>
                                        <li><strong>Enhava Aliro</strong> - Aliro al teksto, ĉenoj kaj senblankaj ĉenoj</li>
                                        <li><strong>Etikedaj Ecoj</strong> - Laborado kun nomo, atributoj kaj enhavo</li>
                                    </ul>

                                    <h3>Analizila Elekto</h3>
                                    <p>
                                        Sperto kun malsamaj analiziloj kaj iliaj kompromisoj:
                                    </p>
                                    <ul>
                                        <li><strong>lxml</strong> - Rapida kaj indulga analizilo por plej multaj uzkazoj</li>
                                        <li><strong>html.parser</strong> - Enkonstruita analizilo, sen eksteraj dependaĵoj</li>
                                        <li><strong>html5lib</strong> - Plej indulga analizilo por malbone formita HTML</li>
                                        <li><strong>Analizila Komparo</strong> - Kompreno de rapido vs. robusteco kompromisoj</li>
                                        <li><strong>Propra Analizila Agordo</strong> - Agordado de analiziloj por specifaj bezonoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Altnivelaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#3A833A] mr-3"></i>
                                    Altnivelaj Trajtoj & Teknikoj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi havas vastan sperton kun la altnivelaj trajtoj de Beautiful Soup por kompleksaj ŝrapadaj scenaroj:
                                    </p>

                                    <h3>Kompleksa Datumeltirado</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#3A833A] mb-2">Multnivela Eltirado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Eltiri datumojn el kompleksaj nestitaj strukturoj
                                                kun multaj niveloj de patro-ido-rilatoj
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#3A833A] mb-2">Kondiĉa Logiko</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementado de kompleksa kondiĉa logiko por
                                                eltiri datumojn bazitajn sur multaj kriterioj
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#3A833A] mb-2">Datumtransformado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Transformado de eltiritaj datumoj en strukturitajn formojn
                                                kiel JSON, CSV aŭ datumbaz-pretaj formoj
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#3A833A] mb-2">Erara Rekuperado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementado de robustaj eraraj rekuperaj mekanismoj
                                                por trakti misformitajn aŭ ŝanĝiĝantajn HTML-strukturojn
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Rendimenta Optimumigo</h3>
                                    <ul>
                                        <li><strong>Analizila Elekto</strong> - Elekti la ĝustan analizilon por rendimentaj bezonoj</li>
                                        <li><strong>Efika Serĉado</strong> - Optimumigado de serĉaj ŝablonoj por rapido</li>
                                        <li><strong>Selektiva Analizado</strong> - Analizado de nur necesaj partoj de dokumentoj</li>
                                        <li><strong>Kaŝstrategioj</strong> - Implementado de kaŝado por ripetitaj petoj</li>
                                        <li><strong>Memora Administrado</strong> - Traktado de grandaj dokumentoj efike</li>
                                        <li><strong>Samtempa Prilaborado</strong> - Uzado de fadenoj por paralela prilaborado</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Integriĝaj Ŝablonoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-project-diagram text-[#3A833A] mr-3"></i>
                                    Integriĝaj Ŝablonoj & Uzkazoj
                                </h2>
                                <div class="content-section">
                                    <h3>TTT-Ŝrapadaj Laborfluoj</h3>
                                    <p>
                                        Vasta sperto konstrui kompletojn TTT-ŝrapadajn solvojn:
                                    </p>
                                    <ul>
                                        <li><strong>Requests-Integriĝo</strong> - Kombinado de Beautiful Soup kun requests por HTTP</li>
                                        <li><strong>Selenium-Integriĝo</strong> - Traktado de JavaScript-pezaj ejoj kun Selenium</li>
                                        <li><strong>Scrapy-Integriĝo</strong> - Uzado de Beautiful Soup ene de Scrapy-araneoj</li>
                                        <li><strong>API-Kombino</strong> - Kombinado de ŝrapado kun API-datumoj por kompleksaj datumaroj</li>
                                        <li><strong>Datumaj Kondukilaroj</strong> - Konstruado de fin-al-finaj datumeltiradaj kaj prilaboraj kondukilaroj</li>
                                        <li><strong>Monitoraj Sistemoj</strong> - Kreado de monitoraj sistemoj por TTT-ejo-ŝanĝoj</li>
                                    </ul>

                                    <h3>Kutimaj Uzkazoj</h3>
                                    <p>
                                        Aplikis Beautiful Soup al diversaj realmondaj scenaroj:
                                    </p>
                                    <ul>
                                        <li><strong>Komercreta Ŝrapado</strong> - Produkt-datumoj, prezoj, recenzoj kaj havebleco</li>
                                        <li><strong>Nova Agregado</strong> - Eltirado de artikoloj, ĉeftitoloj kaj metadatumoj</li>
                                        <li><strong>Sociala Amaskomunikila Monitorado</strong> - Publikaj datumoj de socialaj platformoj</li>
                                        <li><strong>Laboranonca Ŝrapado</strong> - Laborlistigoj, postuloj kaj firma-informoj</li>
                                        <li><strong>Bienaj Datumoj</strong> - Propraj listigoj, prezoj kaj trajtoj</li>
                                        <li><strong>Financaj Datumoj</strong> - Akciaj prezoj, financaj raportoj kaj merkataj datumoj</li>
                                    </ul>

                                    <h3>Datumprilaborado</h3>
                                    <ul>
                                        <li><strong>Datumpurigado</strong> - Purigado kaj normaligado de eltiritaj datumoj</li>
                                        <li><strong>Datumvalidigo</strong> - Implementado de validigaj reguloj por datumkvalito</li>
                                        <li><strong>Datumtransformado</strong> - Konvertado de HTML-datumoj al strukturitaj formoj</li>
                                        <li><strong>Datumsorĉado</strong> - Konservado de eltiritaj datumoj en datumbazoj kaj dosieroj</li>
                                        <li><strong>Datumanalizado</strong> - Preparado de datumoj por analizado kaj videbligo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Bonaj Praktikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-shield-alt text-[#3A833A] mr-3"></i>
                                    Bonaj Praktikoj & Etiko
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi sekvas industriajn bonajn praktikojn kaj etikajn gvidliniojn por TTT-ŝrapado:
                                    </p>

                                    <h3>Teknikaj Bonaj Praktikoj</h3>
                                    <ul>
                                        <li><strong>Robusta Erarprilaborado</strong> - Grace traktado de retaj kaj analizaj eraroj</li>
                                        <li><strong>Ofteco-Limitado</strong> - Respekta ŝrapado kun taŭgaj prokrastoj</li>
                                        <li><strong>User-Agent-Rotacio</strong> - Uzado de realismaj user agent kaj kapoj</li>
                                        <li><strong>Seanca Administrado</strong> - Efika seanco kaj konekta administrado</li>
                                        <li><strong>Datumvalidigo</strong> - Validigado de eltiritaj datumoj por kvalitasekuro</li>
                                        <li><strong>Protokolado & Monitorado</strong> - Kompleksa protokolado por sencimigo kaj monitorado</li>
                                    </ul>

                                    <h3>Etika Ŝrapado</h3>
                                    <ul>
                                        <li><strong>robots.txt-Konformeco</strong> - Respekto de TTT-ejo-ŝrapadaj politikoj</li>
                                        <li><strong>Ofteco-Limitado</strong> - Evitado de servila troŝarĝo kun ĝentila ŝrapado</li>
                                        <li><strong>Uzkondiĉoj</strong> - Observado de TTT-ejo-termoj kaj kondiĉoj</li>
                                        <li><strong>Datumuzado</strong> - Responca kaj leĝa uzo de eltiritaj datumoj</li>
                                        <li><strong>Atribuo</strong> - Propera atribuo de datumfontoj kiam necese</li>
                                        <li><strong>Privataj Datumoj</strong> - Evitado de ŝrapado de privataj aŭ sentemaj informoj</li>
                                    </ul>

                                    <h3>Leĝaj Konsideroj</h3>
                                    <ul>
                                        <li>Kompreneco de aŭtorrajtoj kaj datumbaz-rajtoj</li>
                                        <li>Konformeco kun datumprotektaj reguloj (GDPR, CCPA)</li>
                                        <li>Respekto de intelektaj proprajrajtoj</li>
                                        <li>Kompreneco de jurisdikciaj diferencoj</li>
                                        <li>Serĉado de permeso kiam taŭga</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Projektoj ĉe GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#3A833A] mr-3"></i>
                                    Projektoj ĉe GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj TTT-ŝrapadaj projektoj uzantaj Beautiful Soup troveblas ĉe GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham ĉe GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mi konstante laboras pri TTT-ŝrapadaj projektoj kiuj pruvas praktikajn aplikojn
                                        de Beautiful Soup por datumeltiradaj, monitoraj kaj aŭtomatigaj taskoj.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Lerteco-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#3A833A] mr-2"></i>
                                    Nivelo de Lerteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Lerteco</span>
                                            <span class="text-sm font-bold text-[#3A833A]">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#3A833A] to-[#4CAF50]"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">HTML-Analizado</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">CSS-elektiloj</span>
                                            <span class="text-sm font-bold text-blue-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Datumeltirado</span>
                                            <span class="text-sm font-bold text-purple-500">83%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="83%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Rendimento</span>
                                            <span class="text-sm font-bold text-red-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#3A833A] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Beautiful Soup 4.12+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>40+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-file-code text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">TTT-ejoj Ŝrapitaj: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#3A833A] w-5 mr-3"></i>
                                        <span class="text-sm">Statuso: <strong>Eksperta Nivelo</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Lernovojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#3A833A] mr-2"></i>
                                    Lernovojo
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Baza HTML-analizado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">find() kaj find_all()</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">CSS-elektila uzo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Arba navigado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Altnivela filtrado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Rendimenta optimumigo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kapablecoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#3A833A] mr-2"></i>
                                    Rilataj Kapablecoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-python text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3A833A] transition-colors">Python</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                    </a>
                                    <a href="/competences/requests" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#44A5CB] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-globe text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3A833A] transition-colors">Requests</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                    </a>
                                    <a href="/competences/selenium" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-desktop text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3A833A] transition-colors">Selenium</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pandas" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-table text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#3A833A] transition-colors">Pandas</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3A833A] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#3A833A] to-[#4CAF50] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesita pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Preta diskuti vian TTT-ŝrapadan projekton</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#3A833A] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

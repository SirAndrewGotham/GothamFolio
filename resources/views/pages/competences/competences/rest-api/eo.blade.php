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
                                    REST API
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-emerald-50 to-green-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#10b981] to-[#059669] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-exchange-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">REST API</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-plug mr-1"></i>
                                            API Disvolviĝo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Projektado kaj disvolviĝo de API por retservoj kun fokuso sur skaligeblo, sekureco kaj programista sperto.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#10b981] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Kompetent-Nivelo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#10b981] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde 2018</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#10b981] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">RESTful</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Arkitektura Stilo</div>
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
                            <!-- Pri REST API -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#10b981] mr-3"></i>
                                    Pri REST API Disvolviĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>REST (Representational State Transfer)</strong> estas arkitektura stilo por projekti retajn aplikojn.
                                        RESTful API-oj provizas normigitan manieron por sistemoj komuniki super HTTP, uzante senstatajn operaciojn
                                        kaj normajn HTTP-metodojn por krei, legi, ĝisdatigi kaj forigi rimedojn.
                                    </p>

                                    <h3>Ĉefaj Principoj</h3>
                                    <ul>
                                        <li><strong>Senstata</strong> — Ĉiu peto enhavas ĉiun informon necesan por prilabori ĝin</li>
                                        <li><strong>Kliento-Servilo</strong> — Disigo de zorgoj inter kliento kaj servilo</li>
                                        <li><strong>Kaŝmemorebla</strong> — Respondoj devas difini sin kiel kaŝmemoreblaj aŭ ne</li>
                                        <li><strong>Unuforma Interfaco</strong> — Kohera rimed-identigo kaj manipulado</li>
                                        <li><strong>Tavola Sistemo</strong> — Arkitekturo povas konsisti el hierarkiaj tavoloj</li>
                                        <li><strong>Kodo laŭ Peto</strong> — Serviloj povas etendi klientan funkciecon</li>
                                    </ul>

                                    <h3>Oftaj Uzkazoj</h3>
                                    <p>
                                        REST API-oj estas fundamentaj por moderna reteja disvolviĝo:
                                    </p>
                                    <ul>
                                        <li>Mobilaj aplikaĵaj malantaŭaĵoj kaj servoj</li>
                                        <li>Unupaĝa Aplikaĵo (SPA) komunikado</li>
                                        <li>Mikroserva arkitektura komunikado</li>
                                        <li>Triapartaj integrigoj kaj partneraj API-oj</li>
                                        <li>Interna servo-al-servo komunikado</li>
                                        <li>Publikaj API-oj por platforma etendeblo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia REST API-Vojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#10b981] mr-3"></i>
                                    Mia REST API-Vojo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis disvolvi REST API-ojn en 2018 kun Laravel por mobilaj aplikaĵaj malantaŭaĵoj kaj SPA antaŭaĵoj.
                                        Ekde tiam, mi progresis de simplaj CRUD API-oj al kompleksaj sistemoj kun aŭtentigo, rato-limitado,
                                        versiado kaj komprenebla dokumentado.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-emerald-50 to-green-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-mobile-alt text-[#10b981] mr-2"></i>
                                                Mobilaj Malantaŭaĵoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvolviĝo de robustaj REST API-oj por iOS kaj Android aplikoj,
                                                prilaborante aŭtentigon, puŝ-sciigojn kaj malŝaltan sinkronigon.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-shield-alt text-blue-500 mr-2"></i>
                                                Sekuraj API-oj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efektivigo de kompreneblaj sekurecaj mezuroj inkluzive JWT aŭtentigon,
                                                rato-limitadon, eniga validigon kaj API-ŝlosilan administradon.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#10b981] mr-3"></i>
                                    Mia REST API-Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 5+ jaroj da REST API-disvolviĝa sperto, mi konstruis API-ojn por diversaj aplikoj
                                        de simplaj internaj iloj ĝis alt-trafikaj publikaj API-oj servante milojn da petoj po minuto.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>RESTful Dezajnaj Principoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aŭtentigo & Aŭtorizado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API Versiadaj Strategioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rato-Limitado kaj Drosado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eniga Validigo kaj Sanigado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eraro-Prilaborado kaj Status-Kodoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API-Dokumentado (OpenAPI/Swagger)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testado kaj Testa Aŭtomatigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimento-Optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kaŝmemoraj Strategioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Retkroca Efektivigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API-Pordega Agordo</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj API-Projektoj</h3>
                                    <ul>
                                        <li><strong>Komercreta Platforma API</strong> — REST API por mobilaj aplikoj kaj SPA kun 50+ finpunktoj</li>
                                        <li><strong>CRM-Sistema API</strong> — Interna REST API kun rolo-bazita alir-kontrolo</li>
                                        <li><strong>Paga Pordega Integrigo</strong> — REST API-oj por multoblaj paga provizantoj</li>
                                        <li><strong>Analiza Panel-API</strong> — Alt-rendimenta API por realtempaj datumoj</li>
                                        <li><strong>Triaparta Integriga API</strong> — Publika API por partneraj integrigoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- API-Dezajno & Ŝablonoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#10b981] mr-3"></i>
                                    API-Dezajno & Ŝablonoj
                                </h2>
                                <div class="content-section">
                                    <h3>API-Dezajnaj Bonaj Praktikoj</h3>
                                    <p>
                                        Sekvante industriajn normojn kaj bonajn praktikojn por API-dezajno:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#10b981] mb-2">Rimed-Nomado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kohera, plurala rimed-nomado kun ĝustaj HTTP-metodoj
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#10b981] mb-2">Responda Formato</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Normigitaj JSON-respondoj kun ĝustaj status-kodoj
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#10b981] mb-2">Eraro-Prilaborado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Koheraj eraro-respondoj kun signifoplenaj mesaĝoj
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#10b981] mb-2">Versiado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                URL- kaj kapo-bazitaj versiadaj strategioj
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Aŭtentigaj Metodoj</h3>
                                    <p>
                                        Sperto kun diversaj API-aŭtentigaj mekanismoj:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">JWT-Signoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">OAuth2</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">API-Ŝlosiloj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Baza Aŭtentigo</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Sanctum</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Passport</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Dokumentado & Testado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-book text-[#10b981] mr-3"></i>
                                    Dokumentado & Testado
                                </h2>
                                <div class="content-section">
                                    <h3>API-Dokumentado</h3>
                                    <p>
                                        Komprenebla API-dokumentado por programista sperto:
                                    </p>
                                    <ul>
                                        <li><strong>OpenAPI/Swagger</strong> — Normigita API-dokumentado</li>
                                        <li><strong>API Blueprint</strong> — Markdown-bazita API-dokumentado</li>
                                        <li><strong>Postman-Kolektoj</strong> — Interaktiva API-testado kaj dokumentado</li>
                                        <li><strong>Laravel API-Dokumentado</strong> — Aŭtomata dokumentado-generado</li>
                                    </ul>

                                    <h3>Testadaj Strategioj</h3>
                                    <p>
                                        Robustaj testadaj aliroj por API-fidindeco:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Unuopa Testado por Regiloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integriga Testado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Trajta Testado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimento-Testado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Sekureco-Testado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ŝarĝo-Testado</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetent-Nivelo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#10b981] mr-2"></i>
                                    Kompetent-Nivelo
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#10b981]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#10b981] to-[#059669]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">API-Dezajno</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Sekureco</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Dokumentado</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Rendimento</span>
                                            <span class="text-sm font-bold text-purple-500">83%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="83%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#10b981] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>5+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">API-oj Konstruitaj: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">Finpunktoj: <strong>200+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-mobile-alt text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">Mobilaj Aplikaĵoj: <strong>10+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#10b981] w-5 mr-3"></i>
                                        <span class="text-sm">Sekureco: <strong>JWT/OAuth2</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#10b981] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10b981] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10b981] transition-colors"></i>
                                    </a>
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10b981] transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10b981] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10b981] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10b981] transition-colors"></i>
                                    </a>
                                    <a href="/competences/redis" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#10b981] transition-colors">Redis</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10b981] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#10b981] to-[#059669] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas API-disvolviĝon?</h3>
                                <p class="text-sm mb-4">Preta diskuti viajn API-postulojn</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#10b981] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
                                <a href="/portfolio/legacy" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Legacy Projektoj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    TARIS Korporacia Retejo
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Projekta Hero-Sekcio -->
        <section class="py-12 bg-gradient-to-br from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Projekta Informo -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">TARIS Korporacia Retejo</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Subteno & Disvolviĝo
                                    </span>
                                    <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-tools mr-1 text-xs"></i>
                                        Legacy Sistemo
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Teknika subteno kaj disvolviĝo de korporacia retejo sur malmoderna Yii-platformo.
                                Stabiligo de operacio, kritikaj cim-riparoj kaj kreado de proceduroj por
                                longdaŭra subteno de legacy kodo.
                            </p>

                            <!-- Projekta Statistikoj -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2022-2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Labora Periodo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                        <i class="fas fa-bug"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">50+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Cimoj Riparitaj</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-3">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Yii 1.1</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Teknologio</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Agaj Butonoj -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://taris.ru" target="_blank" class="inline-flex items-center px-6 py-3 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Viziti Retejon</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Projekta Kazo</span>
                                </button>
                            </div>
                        </div>

                        <!-- Projekta Ikono -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-building text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Teknika Defio -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Teknika Defio</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-red-50 dark:bg-red-900/20 rounded-xl p-6 fade-in">
                            <h3 class="text-xl font-semibold mb-4 text-red-700 dark:text-red-300 flex items-center">
                                <i class="fas fa-exclamation-triangle mr-2"></i>
                                Komenca Stato
                            </h3>
                            <ul class="feature-list space-y-3 text-gray-600 dark:text-gray-400">
                                <li>Malmoderna Yii 1.1 kadro (eldonita en 2008)</li>
                                <li>PHP 5.6 kun malmodernaj funkcioj kaj sen tajpado</li>
                                <li>Amasiĝintaj kritikaj eraroj kaj cimoj</li>
                                <li>Kodo-difektiĝo de multoblaj programistaj redaktoj</li>
                                <li>Manko de dokumentado kaj subten-proceduroj</li>
                                <li>Sekurecaj problemoj pro malmodernaj komponantoj</li>
                            </ul>
                        </div>
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-xl p-6 fade-in">
                            <h3 class="text-xl font-semibold mb-4 text-green-700 dark:text-green-300 flex items-center">
                                <i class="fas fa-bullseye mr-2"></i>
                                Projektaj Celoj
                            </h3>
                            <ul class="feature-list space-y-3 text-gray-600 dark:text-gray-400">
                                <li>Stabiligi operacion sen kompleta reverko</li>
                                <li>Ripari kritikajn funkciajn erarojn</li>
                                <li>Krei procedurojn por longdaŭra subteno</li>
                                <li>Certigi laboron por nepreparitaj uzantoj</li>
                                <li>Konservi vidan allogecon por vizitantoj</li>
                                <li>Prepari grundon por estonta migrado</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projekta Detaloj -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Ĉefa Enhavo -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Projekta Priskribo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-amber-500 mr-3"></i>
                                    Pri la Projekto
                                </h2>
                                <div class="space-y-4 text-gray-600 dark:text-gray-400">
                                    <p>
                                        Korporacia retejo de LLC "TARIS" — ĉefa rusa fabrikanto de
                                        ekipaĵoj por dukto-diagnostiko kaj purigado. La retejo funkcias
                                        sur malmoderna Yii 1.1 platformo kreita antaŭ pli ol 10 jaroj.
                                    </p>
                                    <p>
                                        Ĉefa celo de la originala sistemo — permesi nepreparitajn uzantojn sen
                                        teknikaj scioj krei kaj redakti retejajn paĝojn dum konservado
                                        de vida allogeco por vizitantoj.
                                    </p>
                                    <p>
                                        Kun tempo, multnombraj eraroj penetris la sistemon, teknika ŝuldo
                                        amasiĝis, kodo-difektiĝo aperis. Mia tasko estis stabiligi
                                        operacion sen radikalaj platformaj ŝanĝoj.
                                    </p>
                                </div>
                            </div>

                            <!-- Ĉefaj Solvoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-wrench text-amber-500 mr-3"></i>
                                    Implementitaj Solvoj
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-search text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Revizio kaj Analizo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Kondukita profunda analizo de koda bazo, identigitaj kritikaj malsukces-punktoj,
                                                difinitaj korektaj prioritatoj. Kreita teknika ŝuldo kaj risko-mapo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-bug text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Cim-Riparado</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Sisteme riparitaj 50+ kritikaj eraroj: bildo-ŝargaj problemoj,
                                                eraroj de enhav-administra sistemo, sekurecaj kaj efikecaj problemoj.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Operacia Stabiligo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Kreitaj monitorado, rezerv-kopio kaj rekupero-proceduroj. Implementita
                                                enskriba sistemo por rapida problem-identigo kaj solvo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <i class="fas fa-book text-sm"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Dokumentado kaj Proceduroj</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Disvolvita kompleta dokumentado por sistemo-subteno,
                                                kreitaj klaraj ĝisdatigo kaj problem-solvado proceduroj,
                                                pretigitaj rekomendoj por estonta migrado.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CMS-Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-edit text-amber-500 mr-3"></i>
                                    Enhav-Administra Sistemo
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-amber-600 dark:text-amber-400">Por Uzantoj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Vidiga redaktilo sen HTML/CSS scio</li>
                                            <li>Ŝov-metia sekcio-administrado</li>
                                            <li>Intuicia medio-alŝuto kaj administrado</li>
                                            <li>Ŝanĝo-antavido antaŭ publikigo</li>
                                            <li>SEO-parametra administrado</li>
                                            <li>Alir-rajta sistemo por malsamaj fakoj</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-amber-600 dark:text-amber-400">Teknikaj Trajtoj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Aŭtomata enhav-rezervkopio</li>
                                            <li>Ŝanĝo-malavanco sistemo (undo/redo)</li>
                                            <li>Kaŝado por efikeco-plibonigo</li>
                                            <li>Aŭtomata bildo-optimumigo</li>
                                            <li>Integrado kun eksteraj servoj</li>
                                            <li>Enskribado de ĉiuj enhav-ŝanĝoj</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Uzataj Teknologioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-amber-500 mr-2"></i>
                                    Teknologioj
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Ĉefa Stako</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 rounded-lg text-sm">
                                                Yii 1.1
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm">
                                                PHP 5.6
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm">
                                                MySQL
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm">
                                                jQuery
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm">
                                                Bootstrap 3
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm">
                                                TinyMCE
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Infrastrukturo</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm">
                                                Apache
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm">
                                                Linux
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm">
                                                Git
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Projekta Statistikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-amber-500 mr-2"></i>
                                    Projekta Statistikoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Labora Periodo</span>
                                        <span class="font-semibold">2+ jaroj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Cimoj Riparitaj</span>
                                        <span class="font-semibold">50+</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Enhav-Paĝoj</span>
                                        <span class="font-semibold">150+</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">CMS-Uzantoj</span>
                                        <span class="font-semibold">12+</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Uptime</span>
                                        <span class="font-semibold">99.8%</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Legacy Defioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-exclamation-triangle text-amber-500 mr-2"></i>
                                    Legacy Kodo-Problemoj
                                </h3>
                                <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Malmodernaj PHP-funkcioj forigitaj en novaj versioj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Manko de tajpado kaj modernaj kodaj praktikoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Sekurecaj problemoj pro malmodernaj komponantoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-times text-red-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                        <span>Malfacilaĵoj kun dependaĵ-ĝisdatigoj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Klienta Informo -->
                            <div class="bg-gradient-to-r from-amber-50 to-orange-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Kliento</h3>
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 rounded-lg bg-amber-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-industry"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">LLC "TARIS"</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Diagnostika Ekipaĵ-Fabrikanto</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Ĉefa rusa fabrikanto de ekipaĵoj por dukto-diagnostiko kaj purigado.
                                    Kompanio kun 20-jara historio kaj reputacio kiel fidinda partnero.
                                </p>
                                <a href="https://taris.ru/about" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Pri Kompanio</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rezultoj kaj Efiko -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Laboraj Rezultoj</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mx-auto mb-6">
                                <i class="fas fa-check-circle text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Stabileco 99.8%</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Kritikaj eraroj forigitaj, seninterrompa operacia tempo pliigita
                                de 92% al 99.8%. Uzantoj povas labori sen malsukcesoj.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mx-auto mb-6">
                                <i class="fas fa-users text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">12+ Kontentaj Uzantoj</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Merkatikistoj kaj enhav-administrantoj sen teknikaj scioj sukcese
                                administras retejan enhavon per intuicia interfaco.
                            </p>
                        </div>
                        <div class="text-center fade-in">
                            <div class="w-20 h-20 rounded-2xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mx-auto mb-6">
                                <i class="fas fa-road text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Migrada Vojaĝplano</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Kreita kompleta vojaĝplano por estonta migrado
                                al moderna platformo kun minimumaj riskoj.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Legacy Subtena Aliro -->
        <section class="py-16 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold mb-12 text-center fade-in">Legacy Sistemo-Subtena Aliro</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-500 mr-4">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Sistemo-Analizo</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Profunda kompreno de originalaj sistemaj arkitekturaj decidoj,
                                identigo de malsukces-punktoj kaj dependaĵ-map-kreado. Analizo
                                de negoca logiko sen aliro al originala dokumentado.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-4">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Minimumaj Intervenoj</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Principio "ne damaĝu" dum laboro kun legacy kodo. Punkto-riparoj
                                anstataŭ refaktorado, konservado de originala arkitekturo,
                                minimumaj ŝanĝoj por atingi stabiligajn celojn.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-4">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Sekureco Unue</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Forigo de sekurecaj vundeblecoj en malmodernaj komponantoj,
                                implementado de modernaj sekurecaj praktikoj sen ŝanĝo
                                de fundamenta sistemo-arkitekturo.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 fade-in">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-4">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Dokumentado kaj Scio</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">
                                Kreado de kompleta dokumentado por estonta subteno,
                                sci-transdono pri sistemo, preparo de proceduroj por
                                regulaj IT-fakuloj de kompanio.
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
                    <h2 class="text-3xl font-bold mb-6">Ĉu havas legacy projekton bezonantan subtenon?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Preta helpi stabiligi operacion de malmodernaj sistemoj kaj krei migrad-planon al modernaj teknologioj.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Diskuti Projekton</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-amber-500 text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Ĉiuj Projektoj</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

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
                            <h2 class="text-3xl font-bold mb-4">Projekta Kazo: TARIS Korporacia Retejo</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Legacy sistemo-subteno kaj stabiliga aliro</p>
                        </div>

                        <!-- Resuma Priskribo -->
                        <div class="bg-gradient-to-r from-amber-50 to-orange-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-amber-500 mr-3"></i>
                                Projekta Resumo
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Projektaj Celoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Stabiligi legacy sistemon sen kompleta reverko</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Ripari kritikajn funkciajn erarojn</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Krei longdaŭrajn subten-procedurojn</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ĉefaj Rezultoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Atingita 99.8% sistemo-uptime</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>50+ kritikaj cimoj riparitaj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-search text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Kompleta dokumentado kreita</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Teknikaj Defioj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-amber-500 mr-3"></i>
                                Teknikaj Defioj kaj Solvoj
                            </h3>
                            <div class="space-y-6">
                                <!-- Defio 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-amber-500">
                                    <h4 class="font-semibold text-lg mb-3 text-amber-600 dark:text-amber-400">Defio: Legacy Kodo-Stabiligo</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Malmoderna Yii 1.1 kadro kun PHP 5.6, amasiĝinta teknika ŝuldo,
                                                sekurecaj vundeblecoj, kaj neniu dokumentado.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Sistema koda revizio kaj analizo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Prioriteta kritika cim-riparado</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Sekureca vundebleco-forigo</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Atingita 99.8% sistemo-stabileco, ĉiuj kritikaj funkciecoj restarigitaj,
                                            sekureco plibonigita sen platforma migrado.
                                        </p>
                                    </div>
                                </div>

                                <!-- Defio 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-orange-500">
                                    <h4 class="font-semibold text-lg mb-3 text-orange-600 dark:text-orange-400">Defio: Uzant-Amika CMS por Neteknikaj Uzantoj</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kompleksa interfaco postulanta teknikajn sciojn, oftaj uzant-eraroj,
                                                enhavo-difektiĝo, kaj subten-petoj.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Interfaco-simpligo kaj optimumigo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Vidiga redaktilo-plibonigoj</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Uzanto-trejnado kaj dokumentado</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            12+ neteknikaj uzantoj sukcese administras enhavon, subten-petoj
                                            reduktitaj je 80%, enhavo-kvalito plibonigita.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lernitaj Lecionoj -->
                        <div class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-blue-500 mr-3"></i>
                                Lernitaj Lecionoj
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-3 text-blue-600 dark:text-blue-400">Teknikaj Enrigardoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Legacy sistemoj povas esti efike stabiligitaj sen kompleta reverko</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Dokumentado estas kritike grava por longdaŭra legacy sistemo-subteno</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                            <span>Minimumaj intervenoj ofte donas plej bonajn rezultojn en legacy kodo</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-3 text-blue-600 dark:text-blue-400">Negoca Valoro</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-chart-line text-green-500 mr-2 mt-0.5"></i>
                                            <span>Legacy sistemo-subteno povas plilongigi platforman vivon je 2-3 jaroj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-money-bill-wave text-green-500 mr-2 mt-0.5"></i>
                                            <span>Kosto-efika alternativo al tuja migrado</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-user-check text-green-500 mr-2 mt-0.5"></i>
                                            <span>Uzanto-kontentigo atingebla eĉ kun malmodernaj platformoj</span>
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
                    showCaseStudy: false,
                    init() {
                        // Inicialigo de portfolio-specifa funkcieco
                        this.animateOnScroll();
                    },
                    animateOnScroll() {
                        // Aldono de rulum-animacioj por portfolio-elementoj
                        const observer = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    entry.target.classList.add('animate-fade-in-up');
                                }
                            });
                        });

                        document.querySelectorAll('.fade-in').forEach((el) => {
                            observer.observe(el);
                        });
                    }
                }
            }
        </script>
    @endpush
</x-frontend.layouts.app>

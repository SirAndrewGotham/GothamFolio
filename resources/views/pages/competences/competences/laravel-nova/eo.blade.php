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
                                    Kompetentecoj
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
                                        Laravel Nova
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FF2D20] to-[#E62E1A] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-cogs text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Laravel Nova</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-crown mr-1"></i>
                                            Admin Panelo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Administra panelo por aplikaĵa datumadministrado kun eleganta interfaco kaj potenca personecigo.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-[#FF2D20] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficia Nivelo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#FF2D20] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">2+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde Nova 3.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#FF2D20] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v4.0+</div>
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
                            <!-- Pri Laravel Nova -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#FF2D20] mr-3"></i>
                                    Pri Laravel Nova
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Nova</strong> estas bele desegnita administra panelo por Laravel-aplikaĵoj,
                                        provizanta plenfunkcian interfacon por administri la datumojn de via aplikaĵo. Konstruita per Vue.js kaj
                                        Tailwind CSS, Nova ofertas potencajn ilojn por resurso-administrado, metrikoj kaj personaj agoj.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Rapida Disvolviĝo</strong> — Generu kompletan administran panelon en minutoj, ne tagoj</li>
                                        <li><strong>Eloquent-Integriĝo</strong> — Senŝova integriĝo kun Eloquent ORM de Laravel</li>
                                        <li><strong>Personecigebla Interfaco</strong> — Tailor la administran panelon al specifaj negocaj bezonoj</li>
                                        <li><strong>Potencaj Metrikoj</strong> — Enkonstruita panelo kun personecigeblaj metrikoj kaj diagramoj</li>
                                        <li><strong>Ago-Sistemo</strong> — Plenumu amasajn operaciojn kaj personajn operaciojn sur rimedoj</li>
                                        <li><strong>Lensoj & Filtriloj</strong> — Altnivela datumfiltrilo kaj personaj query-interfacoj</li>
                                        <li><strong>Aŭtorizado</strong> — Integrita kun aŭtoriza sistemo de Laravel</li>
                                    </ul>

                                    <h3>Ideaj Uzkazoj</h3>
                                    <p>
                                        Laravel Nova bonegas en scenaroj kiuj postulas altnivelajn administrajn interfacojn:
                                    </p>
                                    <ul>
                                        <li>Enhavadministraj Sistemoj (CMS)</li>
                                        <li>Administrado de komercplatformoj</li>
                                        <li>Klientrilata Administrado (CRM)</li>
                                        <li>Datumanalizaj kaj raportaj paneloj</li>
                                        <li>Administrado de multluantaj aplikaĵoj</li>
                                        <li>Interna negocproceza administrado</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Laravel Nova Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#FF2D20] mr-3"></i>
                                    Mia Laravel Nova Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis labori kun Laravel Nova en 2021 kun versio 3.0, implementante administrajn panelojn
                                        por diversaj klientaj projektoj. Ekde tiam, mi progresis de baza resurso-administrado al
                                        konstruado de kompleksaj personaj iloj, metrikoj kaj integritaj paneloj por entreprenaj aplikaĵoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-[#FF2D20] mr-2"></i>
                                                Personaj Paneloj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvolvis altnivelajn panelojn kun personaj metrikoj,
                                                realtempaj datumoj kaj negocinteligentaj trajtoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-cube text-blue-500 mr-2"></i>
                                                Personaj Iloj & Kartoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreis personajn Nova-ilojn kaj kartojn por specializitaj
                                                negocoperacioj kaj triapartiaj integriĝoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#FF2D20] mr-3"></i>
                                    Mia Laravel Nova Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 2 jaroj da Laravel Nova sperto tra multaj projektoj, mi konstruis kompletajn
                                        administrajn interfacojn por diversaj negocdomajnoj, de simpla enhavadministrado
                                        al kompleksaj entreprenaj resurso-planadaj sistemoj.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Resurso-Administrado & CRUD</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Personaj Metrikoj & Paneloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ago-Sistemo-Implementado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Lensoj & Altnivela Filtrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Persona Kampo-Disvolviĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ilo & Karto-Disvolviĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aŭtorizado & Permesoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rilato-Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Serĉo & Tutmonda Serĉo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Triapartiaj Integriĝoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Agorda Optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Multluanta Subteno</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Nova-Projektoj</h3>
                                    <ul>
                                        <li><strong>Komerca Admin Panelo</strong> — Kompleta produkto-, mendo- kaj klient-administrado</li>
                                        <li><strong>Enhavadministra Sistemo</strong> — Multuzanta enhavadministrado kun laborkfluoj</li>
                                        <li><strong>Analiza Panelo</strong> — Personaj metrikoj kaj realtempa negocinteligento</li>
                                        <li><strong>CRM-Integriĝo</strong> — Nova-interfaco por klientrilata administrado</li>
                                        <li><strong>Multluanta Aplikaĵo</strong> — Resurso-administrado por SaaS-platformo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Nova Trajtoj & Personigado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-[#FF2D20] mr-3"></i>
                                    Nova Trajtoj & Personigado
                                </h2>
                                <div class="content-section">
                                    <h3>Kernaj Nova-Komponantoj</h3>
                                    <p>
                                        Sperto utiligante la potencan komponentan sistemon de Nova:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Rimedoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Eloquent-modela administrado kun kampoj,
                                                agoj, filtriloj kaj aŭtorizaj reguloj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Metrikoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Valoro, tendenco kaj partaj metrikoj por
                                                panelaj analizoj kaj negocinteligento.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Agoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Amasaj operacioj kaj persona negoclogiko
                                                plenumitaj sur elektitaj rimedoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#FF2D20] mb-2">Lensoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Personaj query-interfacoj por kompleksaj datumoj
                                                kaj specializitaj raportoj.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Persona Disvolviĝo</h3>
                                    <p>
                                        Altnivelaj personecigaj kapabloj:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Personaj Kampoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Personaj Iloj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Personaj Kartoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Rimedaj Iloj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Filtriloj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Paneloj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Integriĝo & Etendeblo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-puzzle-piece text-[#FF2D20] mr-3"></i>
                                    Integriĝo & Etendeblo
                                </h2>
                                <div class="content-section">
                                    <h3>Triapartiaj Integriĝoj</h3>
                                    <p>
                                        Sperto integriĝi Nova kun diversaj servoj kaj iloj:
                                    </p>
                                    <ul>
                                        <li><strong>Pagosistemoj</strong> — Administraj interfacoj por Stripe, PayPal</li>
                                        <li><strong>Analizaj Servoj</strong> — Paneloj por Google Analytics, Mixpanel</li>
                                        <li><strong>Komunikaj Iloj</strong> — Retpoŝto, SMS kaj sciiga administrado</li>
                                        <li><strong>Dosierkonservejoj</strong> — Dosieradministrado en AWS S3, DigitalOcean Spaces</li>
                                        <li><strong>CRM-Sistemoj</strong> — Datumsinkronigo kun HubSpot, Salesforce</li>
                                        <li><strong>Monitoraj Iloj</strong> — Erarsekrado kaj agorda monitorado</li>
                                    </ul>

                                    <h3>Persona Pakaĵa Disvolviĝo</h3>
                                    <p>
                                        Kreante reuzeblajn Nova-komponantojn kaj pakaĵojn:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Personaj Kampo-Pakaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ilo-Integriĝaj Pakaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Metriko-Kalkulaj Pakaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ago-Ŝablono Pakaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Filtrilo-Komponanto Pakaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Panela Fenestraĵo Pakaĵoj</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Proficia Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#FF2D20] mr-2"></i>
                                    Proficia Nivelo
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Proficio</span>
                                            <span class="text-sm font-bold text-[#FF2D20]">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF2D20] to-[#E62E1A]"
                                                 data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Rimed-Administrado</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Personaj Iloj</span>
                                            <span class="text-sm font-bold text-green-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Metrikoj & Paneloj</span>
                                            <span class="text-sm font-bold text-blue-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Integriĝo</span>
                                            <span class="text-sm font-bold text-purple-500">68%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="68%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#FF2D20] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>2+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Nova 4.0+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cube text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Personaj Iloj: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tachometer-alt text-[#FF2D20] w-5 mr-3"></i>
                                        <span class="text-sm">Paneloj: <strong>10+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentecoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#FF2D20] mr-2"></i>
                                    Rilataj Kompetentecoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                    <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-vuejs text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Vue.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                    <a href="/competences/eloquent" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Eloquent ORM</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF2D20] transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF2D20] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#FF2D20] to-[#E62E1A] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas admin-panela disvolviĝon?</h3>
                                <p class="text-sm mb-4">Preta diskuti Laravel Nova-implementadon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF2D20] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

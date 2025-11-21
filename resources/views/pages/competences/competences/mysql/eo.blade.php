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
                                        MySQL
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-orange-500 to-amber-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-database text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">MySQL</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-database mr-1"></i>
                                            Ĉefa Datumbazo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Rilata datumbaza administra sistemo por robustaj, skaleblaj aplikaĵoj. Mia ĉefa datumbaza elekto por retaj projektoj.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficia Nivelo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">8+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde MySQL 5.5</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v8.0</div>
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
                            <!-- Pri MySQL -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-orange-500 mr-3"></i>
                                    Pri MySQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>MySQL</strong> estas la plej populara en la mondo malfermitkoda rilata datumbaza administra sistemo (RDBMS),
                                        konata pro sia fidindeco, efikeco kaj facileco de uzo. Akiita de Oracle Corporation,
                                        MySQL daŭre estas elstara elekto por retaplikaĵoj, funkciigante ĉion de malgrandaj retejoj
                                        ĝis grandskalaj entreprenaj sistemoj.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Alta Efikeco</strong> — optimumigita por leg-intensaj laborŝarĝoj</li>
                                        <li><strong>Skalebleco</strong> — pritraktas grandajn datumaron kaj altan trafikon</li>
                                        <li><strong>Fidindeco</strong> — ACID-konformeco kaj datumintegreco</li>
                                        <li><strong>Krospatformeco</strong> — funkcias sur diversaj operacisistemoj</li>
                                        <li><strong>Forta Komunumo</strong> — ampleksa dokumentado kaj subteno</li>
                                        <li><strong>Sekureco</strong> — robusta alirkontrolo kaj ĉifrado</li>
                                        <li><strong>Replikado</strong> — master-slave kaj master-master agordoj</li>
                                    </ul>

                                    <h3>Rekomenditaj Uzkazoj</h3>
                                    <p>
                                        MySQL estas ideala por vasta gamo de aplikaĵoj, precipe efika por:
                                    </p>
                                    <ul>
                                        <li>Retaj aplikaĵoj kaj enhavadministraj sistemoj</li>
                                        <li>Komeraj platformoj kaj retvendejoj</li>
                                        <li>Datumbazaj magazenoj kaj negocinteligento</li>
                                        <li>Protokolaj kaj analizaj sistemoj</li>
                                        <li>CRM kaj ERP sistemoj</li>
                                        <li>Fonaĵoj de movilaj aplikaĵoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia MySQL Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-orange-500 mr-3"></i>
                                    Mia MySQL Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis labori kun MySQL en 2015 kune kun mia Laravel-vojaĝo, komencante per versio 5.5.
                                        Dum la jaroj, mi progresis de bazaj CRUD-operacioj al dezajnado de kompleksaj datumbazaj arkitekturoj,
                                        optimumigado de mendoj kaj efektivigado de altnivelaj trajtoj kiel replikado kaj partigado.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-sitemap text-orange-500 mr-2"></i>
                                                Datumbaza Arkitekturo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Mi dezajnas normaligitajn datumbazajn skemojn kun ĝustaj rilatoj, indeksoj,
                                                kaj limigoj por certigi datumintegreceon kaj efikecon.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-blue-500 mr-2"></i>
                                                Efikeca Optimumigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Mi specialiĝas pri mendo-optimumigo, indeksa agordado kaj datumbaza konfigurado
                                                por pritrakti alt-trafikajn aplikaĵojn efike.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-orange-500 mr-3"></i>
                                    Mia MySQL Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 8+ jaroj da MySQL-sperto, mi laboris pri diversaj projektoj de malgrandaj aplikaĵoj
                                        ĝis entreprenaj sistemoj postulantaj altan disponeblecon kaj efikecon.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumbaza Dezajno kaj Normaligo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Mendo-Optimumigo kaj Indeksado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Konservitaj Proceduroj kaj Funkcioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumbaza Migrado kaj Versiado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rezervkopi- kaj Rekuper-Strategioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Sekureco kaj Alirkontrolo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Replikado kaj Alta Disponebleco</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Efikeca Monitorado kaj Agordado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integrigo kun Laravel Eloquent</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datum-Import/Eksport-Operacioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Transakcia Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Partigado kaj Ŝardado</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Telescan Web Analytics</strong> — Alt-trafika analiza platformo kun optimumigitaj MySQL-mendoj</li>
                                        <li><strong>Korporacia Portalo por LLC "Taris"</strong> — Kompleksa negocproceza administra sistemo</li>
                                        <li><strong>Komerca Platformo</strong> — Retvendejo kun inventaro kaj mendo-administrado</li>
                                        <li><strong>CRM Sistemo</strong> — Klientrilata administrado kun raportado</li>
                                        <li><strong>Enhavadministraj Sistemoj</strong> — Multoblaj CMS-implementoj kun MySQL-fonaĵo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Teknikaj Detaloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-orange-500 mr-3"></i>
                                    Teknikaj Detaloj
                                </h2>
                                <div class="content-section">
                                    <h3>Arkitekturo kaj Trajtoj</h3>
                                    <p>
                                        MySQL sekvas klient-servilan arkitekturon kaj subtenas diversajn konservmotorojn,
                                        kun InnoDB estante la defaŭlta kaj plej vaste uzata motoro provizanta ACID-konformecon.
                                    </p>
                                    <ul>
                                        <li><strong>Konservmotoroj</strong> — InnoDB, MyISAM, Memory, Archive</li>
                                        <li><strong>ACID-Konformeco</strong> — Plena transakcia subteno kun InnoDB</li>
                                        <li><strong>Indeksado</strong> — B-arboj, plentekstaj, spacaj indeksoj</li>
                                        <li><strong>Replikado</strong> — Asinkrona kaj duonsinkrona replikado</li>
                                        <li><strong>Partigado</strong> — Rango, listo, haŝo kaj ŝlosila partigado</li>
                                    </ul>

                                    <h3>Iloj kaj Ekosistemo</h3>
                                    <p>
                                        Mi laboras kun la kompleta MySQL-ekosistemo, inkluzive:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">MySQL Workbench</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">phpMyAdmin</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Migrations</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Eloquent ORM</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">MySQL CLI</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Performance Schema</span>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub Projektoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-orange-500 mr-3"></i>
                                    GitHub Projektoj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj projektoj kun MySQL-datumbazaj implementoj troveblas sur GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham sur GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mia portfolio inkluzivas diversajn projektojn disvolvitajn kun MySQL kiel la ĉefa datumbaza solvo.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Proficia Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-orange-500 mr-2"></i>
                                    Proficia Nivelo
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Proficio</span>
                                            <span class="text-sm font-bold text-orange-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-orange-500 to-amber-500"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Mendo-Optimumigo</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Datumbaza Dezajno</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Efikeca Agordado</span>
                                            <span class="text-sm font-bold text-blue-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Sekureco</span>
                                            <span class="text-sm font-bold text-purple-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-orange-500 mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>8+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>MySQL 8.0</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-database text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Ĉefa DB: <strong>Jes</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-sync-alt text-orange-500 w-5 mr-3"></i>
                                        <span class="text-sm">Replikado: <strong>Implementita</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentecoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-orange-500 mr-2"></i>
                                    Rilataj Kompetentecoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-orange-500 transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-orange-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-orange-500 transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-orange-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/rest-api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-orange-500 transition-colors">REST API</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-orange-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-orange-500 transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-orange-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-orange-500 to-amber-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi interesiĝas pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Preta diskuti viajn datumbazajn bezonojn</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-orange-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

<x-frontend.layouts.app>
    <!-- Ĉefa Enhavo -->
    <main class="w-full pt-20">
        <!-- Paneroj -->
        <section class="py-6 bg-gray-50 dark:bg-gray-800/30 border-b border-gray-200 dark:border-gray-700">
            <div class="fluid-container">
                <nav class="flex fade-in" aria-label="Panero">
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
                                    Backend Development
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Ĉefa Sekcio -->
        <section class="py-12 bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-red-500 to-pink-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-laravel text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Laravel</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Ĉefa Ilo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Full-stack PHP-framework por eleganta reta disvolviĝo kun esprima sintakso. Mia ĉefa ilo ekde 2015.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">95%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Regado</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">9+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde Laravel 5</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v12.x</div>
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
                            <!-- Pri Laravel -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-red-500 mr-3"></i>
                                    Pri Laravel
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel</strong> estas moderna full-stack kadro por retaj aplikoj en PHP,
                                        kiu kombinas potencon, elegantecon kaj facilecon de uzo. Kreita de Taylor Otwell,
                                        Laravel sekvas la principojn de MVC (Modelo-Vido-Kontrolilo) kaj provizas programistojn per riĉa aro
                                        da iloj por krei skaleblajn kaj subteneblajn aplikojn.
                                    </p>

                                    <h3>Ŝlosilaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Eleganta Sintakso</strong> — esprima kaj intuicia kodo</li>
                                        <li><strong>Rika Ekosistemo</strong> — granda komunumo kaj pakaĵoj</li>
                                        <li><strong>Enkonstruitaj Funkcioj</strong> — aŭtentigo, kaŝmemoro, vicoj el la skatolo</li>
                                        <li><strong>Bonega Dokumentado</strong> — unu el la plej bonaj en la industrio</li>
                                        <li><strong>Active Record ORM</strong> — Eloquent por laboro kun datumbazoj</li>
                                        <li><strong>Migradoj de Datumbazoj</strong> — versia kontrolo por datumbaza skemo</li>
                                        <li><strong>Testado</strong> — enkonstruita subteno por PHPUnit</li>
                                    </ul>

                                    <h3>Rekomenditaj Uzkazoj</h3>
                                    <p>
                                        Laravel estas ideala por vasta gamo da projektoj — de simplaj blogoj kaj korporaciaj retejoj
                                        ĝis kompleksaj entreprenaj aplikoj kaj API-servoj. Precipe efika por:
                                    </p>
                                    <ul>
                                        <li>Korporaciaj portaloj kaj CRM-sistemoj</li>
                                        <li>Retejoj kaj e-commerca platformoj</li>
                                        <li>REST API por mobilaj aplikoj</li>
                                        <li>Sistemoj por Administrado de Enhavo (CMS)</li>
                                        <li>Socialaj retoj kaj komunumoj</li>
                                        <li>Sistemoj por analitiko kaj raportado</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Laravel -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-red-500 mr-3"></i>
                                    Mia Vojaĝo kun Laravel
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi ekis labori kun Laravel en 2015 kun versio 5.0, kiam la kadro jam fariĝis matura ilo
                                        kun potenca ekosistemo. Ekde tiam, mi progresis de lernado de la bazoj ĝis kreado de kompleksaj entreprenaj aplikoj
                                        kaj partopreno en open-source projektoj de la komunumo.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code-branch text-red-500 mr-2"></i>
                                                Migrado de Legacy-Projektoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Mi havas sperton pri sukcesa translokigo de legacy-projektoj de aliaj kadroj (Yii/Yii2, CodeIgniter) al Laravel,
                                                kaj ankaŭ pri ĝisdatigo de malnovaj versioj de Laravel al modernaj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                                Projektado de Nulo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Mi disvolvas plenvalorajn Laravel-aplikojn bazitajn sur teknikaj specifoj,
                                                aplikante plej bonajn praktikojn kaj modernajn arkitekturajn alirojn.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-red-500 mr-3"></i>
                                    Mia Sperto kun Laravel
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi laboras kun Laravel ekde 2015, komencante kun versio 5.0. Dum ĉi tiu tempo, mi progresis de lernado de la bazoj
                                        ĝis kreado de kompleksaj entreprenaj aplikoj kaj partopreno en open-source projektoj de la komunumo.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>RESTful API Disvolviĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Migrado de Legacy-kodo al Laravel</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ĝisdatigo de Malnovaj Versioj de Laravel</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Projektado de Aplikoj de Nulo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eloquent ORM kaj Rilataj Rilatoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Migradoj kaj Semiloj de Datumbazoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ŝablona Motoro Blade kaj Komponantoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aŭtentigo kaj Aŭtorizado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vicoj kaj Fonaj Taskoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testado kun PHPUnit</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Optimumigo de Efikeco</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integrigo kun Eksteraj API</span>
                                        </div>
                                    </div>

                                    <h3>Ŝlosilaj Projektoj</h3>
                                    <ul>
                                        <li><strong>GothamFolio</strong> — Persona portfolo en Laravel 10 kun Livewire kaj Tailwind</li>
                                        <li><strong>Telescan Web</strong> — Analitika platformo kun mikroserva arkitekturo</li>
                                        <li><strong>Korporacia Portalo por OOO "Taris"</strong> — Sistemo por administrado de negocprocezoj</li>
                                        <li><strong>API por Movabila Aplikajo</strong> — RESTful servo kun JWT aŭtentigo</li>
                                        <li><strong>Migrado de Yii2 Projekto</strong> — Translokigo de korporacia portalo al Laravel</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Teknikaj Detaloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-red-500 mr-3"></i>
                                    Teknikaj Detaloj
                                </h2>
                                <div class="content-section">
                                    <h3>Arkitekturaj Trajtoj</h3>
                                    <p>
                                        Laravel sekvas la principojn de pura arkitekturo kaj Domain-Driven Design (DDD), provizante flekseblajn
                                        ilojn por krei subteneblajn aplikojn. Ŝlosilaj arkitekturaj komponantoj:
                                    </p>
                                    <ul>
                                        <li><strong>Service Container</strong> — potenca sistemo de dependenco-enjekto</li>
                                        <li><strong>Service Providers</strong> — centrigita registrado de servoj</li>
                                        <li><strong>Middleware</strong> — filtrado de HTTP-petoj</li>
                                        <li><strong>Events & Listeners</strong> — okazaĵe direktita arkitekturo</li>
                                        <li><strong>Jobs & Queues</strong> — prilaborado de fonaj taskoj</li>
                                    </ul>

                                    <h3>Ekosistemo kaj Iloj</h3>
                                    <p>
                                        Mi laboras kun la tuta ekosistemo de Laravel, inkluzive:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Livewire</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Eloquent</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Artisan CLI</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Migradoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Blade</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Vicoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Telescope</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Horizon</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Socialite</span>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub-Projektoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-red-500 mr-3"></i>
                                    Projektoj sur GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj Laravel-projektoj troveblas sur GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham sur GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        En mia portfolio sur ĉi tiu retejo estas prezentitaj projektoj disvolvitaj uzante Laravel.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Regada Nivelo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-red-500 mr-2"></i>
                                    Nivelo de Regado
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Regado</span>
                                            <span class="text-sm font-bold text-red-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-red-500 to-pink-500"
                                                 data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">REST API</span>
                                            <span class="text-sm font-bold text-green-500">98%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="98%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Eloquent ORM</span>
                                            <span class="text-sm font-bold text-green-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Legacy-Migrado</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Efikeco</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-red-500 mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>9+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Laravel 12.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>30+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-certificate text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Atestilo: <strong>Laravel Certified</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code-branch text-red-500 w-5 mr-3"></i>
                                        <span class="text-sm">Legacy-Migrado: <strong>5+ projektoj</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-red-500 mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-red-500 transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% regado</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-red-500 transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% regado</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/livewire" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-red-500 transition-colors">Livewire</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% regado</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-red-500 transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% regado</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-red-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-red-500 to-pink-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesata pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Pretas diskuti vian projekton pri Laravel</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-red-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Kontakti Min
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.app>

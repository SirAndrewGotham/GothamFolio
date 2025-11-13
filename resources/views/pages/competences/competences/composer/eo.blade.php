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
                                    Composer
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#885630] to-[#6d441f] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-box text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Composer</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                    <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-cubes mr-1"></i>
                                        PHP Dependec Administrilo
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Dependec administrilo por PHP kun kompleta pakaĵadministrado kaj aŭtomata ŝarĝkapablo.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center text-[#885630] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#885630] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde Composer 1.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#885630] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v2.6+</div>
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
                            <!-- Pri Composer -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#885630] mr-3"></i>
                                    Pri Composer
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Composer</strong> estas la fakta norma dependeca administrilo por la programlingvo PHP.
                                        Ĝi administras dependecojn laŭ projekto, instalante ilin en dosierujo ene de via projekto.
                                        Composer ankaŭ traktas aŭtomatan ŝargadon, faciligante la uzon de tralia kodo en viaj aplikaĵoj.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Dependeca Administrado</strong> — Deklaru kaj administru projektajn dependecojn efike</li>
                                        <li><strong>Aŭtomata Ŝargado</strong> — Aŭtomata klasŝargado laŭ normoj PSR-4 kaj PSR-0</li>
                                        <li><strong>Versiaj Limigoj</strong> — Flekseblaj versiaj postuloj kaj konfliktsolvado</li>
                                        <li><strong>Packagist Integrigo</strong> — Aliro al miloj da PHP-pakaĵoj</li>
                                        <li><strong>Skripta Aŭtomatigo</strong> — Rulu skriptojn dum instalado kaj ĝisdatigoj</li>
                                        <li><strong>Platformaj Postuloj</strong> — Difinu PHP-versiajn kaj etendaĵajn postulojn</li>
                                        <li><strong>Optimumigo</strong> — Klasmapa optimumigo por pli bona efikeco</li>
                                    </ul>

                                    <h3>Oftaj Uzkazoj</h3>
                                    <p>
                                        Composer estas esenca por moderna PHP-disvolviĝo:
                                    </p>
                                    <ul>
                                        <li>Administrado de kadraj dependecoj (Laravel, Symfony, ktp.)</li>
                                        <li>Instalado kaj ĝisdatigo de traliaj bibliotekoj</li>
                                        <li>Agordo de projekto-specifa aŭtomata ŝargado</li>
                                        <li>Administrado de disvolviĝaj kaj produktaj dependecoj</li>
                                        <li>Kreado kaj distribuo de PHP-pakaĵoj</li>
                                        <li>Aŭtomatigo de deplojaj kaj konstruaj procezoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Composer -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#885630] mr-3"></i>
                                    Mia Vojaĝo kun Composer
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Composer en 2017 kun Laravel-projektoj kaj rapide fariĝis kompetenta pri dependeca administrado,
                                        aŭtomata ŝargagordo kaj pakaĵa disvolviĝo. Dum la jaroj, mi administris kompleksajn dependecajn arbojn
                                        kaj optimumigis Composer-laborfluojn por produktaj aplikaĵoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-project-diagram text-[#885630] mr-2"></i>
                                                Dependeca Administrado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Administrado de kompleksaj dependecaj arboj en grandskalaj aplikaĵoj,
                                                solvado de versiaj konfliktoj kaj optimumigo de dependeca solvado.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                                Efikeca Optimumigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementado de Composer-optimumigoj kiel klasmapa generado
                                                kaj dependeca kaŝmemorado por plibonigi aplikaĵan efikecon.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#885630] mr-3"></i>
                                    Mia Composer Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 5 jaroj da Composer-sperto, mi administris dependecojn por multnombraj PHP-projektoj,
                                        de simplaj retejoj ĝis kompleksaj entreprenaj aplikaĵoj kun centoj da dependecoj.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dependeca Versia Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>PSR-4 Aŭtomata Ŝargagordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Composer Skripta Aŭtomatigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Pakaĵa Disvolviĝo & Publikado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Privata Deponeja Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dependeca Konfliktsolvado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Efikeca Optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Sekureca Vulnerableca Skandado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CI/CD Integrigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Platforma Postula Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propra Instalilo-Disvolviĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Monorepo Administrado</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Granda E-comerca Platformo</strong> — Administris 150+ dependecojn kun kompleksaj versiaj limigoj</li>
                                        <li><strong>Mikroservo Arkitekturo</strong> — Kunordigis dependecojn tra multoblaj Composer-projektoj</li>
                                        <li><strong>Propra Pakaĵa Disvolviĝo</strong> — Kreis kaj prizorgis internajn Composer-pakaĵojn</li>
                                        <li><strong>Legacia Projekta Migrado</strong> — Migris de mana dependeca administrado al Composer</li>
                                        <li><strong>CI/CD Dukto Optimumigo</strong> — Integris Composer kun aŭtomataj deplojaj sistemoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Altnivelaj Composer Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#885630] mr-3"></i>
                                    Altnivelaj Composer Trajtoj
                                </h2>
                                <div class="content-section">
                                    <h3>Altnivela Agordo</h3>
                                    <p>
                                        Spertuleco pri altnivelaj Composer-trajtoj kaj agordoj:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#885630] mb-2">Skriptoj & Eventoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Post-instalado, post-ĝisdatigo kaj propra skripta aŭtomatigo
                                                por deplojaj kaj disvolviĝaj laborfluoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#885630] mb-2">Propraj Instaliloj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreado de propraj instaliloj por nestandardaj pakaĵtipoj
                                                kaj kadro-specifaj instalaj postuloj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#885630] mb-2">Deponeja Administrado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Privataj Satis-deponejoj, VCS-deponejoj kaj pakaĵa
                                                deponeja agordo por entreprenaj medioj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#885630] mb-2">Platforma Agordo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Difinado de PHP-versiaj postuloj, etendaĵaj dependecoj,
                                                kaj medio-specifaj agordoj.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Efikeca Optimumigo</h3>
                                    <p>
                                        Teknikoj por optimumigi Composer-efikecon:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Klasmapa Optimumigo</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">APCu Kaŝmemorado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Paralela Instalado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Preferi Dist</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Versiaj Limigoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Dependeca Kaŝmemorado</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Pakaĵa Disvolviĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cube text-[#885630] mr-3"></i>
                                    Pakaĵa Disvolviĝo
                                </h2>
                                <div class="content-section">
                                    <h3>Kreado de Composer-pakaĵoj</h3>
                                    <p>
                                        Sperto en disvolvado kaj prizorgado de Composer-pakaĵoj por interna kaj publika uzo:
                                    </p>
                                    <ul>
                                        <li><strong>Pakaĵa Strukturo</strong> — Ĝusta pakaĵa organizado kun nomspacoj kaj aŭtomata ŝargado</li>
                                        <li><strong>Versiado</strong> — Semantika versiado kaj etikeda administrado</li>
                                        <li><strong>Testado</strong> — PHPUnit-integrigo kaj kontinua testado</li>
                                        <li><strong>Dokumentado</strong> — README-dosieroj kaj API-dokumentado</li>
                                        <li><strong>Distribuo</strong> — Packagist-publikigo kaj privata deponeja agordo</li>
                                        <li><strong>Prizorgado</strong> — Versiaj ĝisdatigoj kaj dependeca administrado</li>
                                    </ul>

                                    <h3>Disvolvitaj Pakaĵtipoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Laravel Servo Provizantoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API-klientaj bibliotekoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Utilaĵaj Pakaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Disvolviĝaj Iloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kodkvalitaj Iloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kadraj Integrigoj</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Kompetenteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#885630] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#885630]">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#885630] to-[#6d441f]"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Dependeca Administrado</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Aŭtomata Ŝargado</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Pakaĵa Disvolviĝo</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Efikeco</span>
                                            <span class="text-sm font-bold text-purple-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#885630] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>5+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Composer 2.6+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>40+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cubes text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Dependecoj: <strong>1000+ administritaj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-box-open text-[#885630] w-5 mr-3"></i>
                                        <span class="text-sm">Pakaĵoj: <strong>10+ disvolvitaj</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#885630] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#885630] transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#885630] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#885630] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#885630] transition-colors"></i>
                                    </a>
                                    <a href="/competences/git" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#f05032] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-git-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#885630] transition-colors">Git</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#885630] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#885630] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#885630] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#885630] to-[#6d441f] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas dependecan administradon?</h3>
                                <p class="text-sm mb-4">Preta diskuti Composer-implementon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#885630] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

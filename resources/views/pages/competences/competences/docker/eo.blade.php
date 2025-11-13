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
                                <a href="/competences/devops" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    DevOps
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Docker
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#2496ed] to-[#1d7dc2] flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-docker text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Docker</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-box mr-1"></i>
                                        Ujigado
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Ujigada platformo por aplikaĵa disvastigo, ebligante konsekvencajn mediojn tra disvolviĝo kaj produktado.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#2496ed] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#2496ed] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde 2020</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#2496ed] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v24+</div>
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
                            <!-- Pri Docker -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#2496ed] mr-3"></i>
                                    Pri Docker
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Docker</strong> estas platformo kiu ebligas disvolvistojn paki aplikaĵojn en ujojn - normigitajn,
                                        ruleblajn komponantojn kiuj kombinas aplikaĵan fontkodon kun la operaciumaj bibliotekoj kaj dependecoj
                                        necesaj por ruli tiun kodon en iu ajn medio.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Konsekvenco</strong> — Sama medio tra disvolviĝo, testado kaj produktado</li>
                                        <li><strong>Izolado</strong> — Aplikaĵoj funkcias en izolitaj ujoj sen konfliktoj</li>
                                        <li><strong>Porteblo</strong> — Rulu ie ajn kie Docker estas instalita</li>
                                        <li><strong>Rimeda Efikeco</strong> — Malpeza kompare kun virtualaj maŝinoj</li>
                                        <li><strong>Rapida Disvastigo</strong> — Rapida ujo-startigo kaj skalado</li>
                                        <li><strong>Versia Kontrolo</strong> — Spuri versiojn de ujo-bildoj</li>
                                        <li><strong>Preteco por Mikroservoj</strong> — Ideala por mikroserva arkitekturo</li>
                                    </ul>

                                    <h3>Rekomenditaj Uzkazoj</h3>
                                    <p>
                                        Docker estas esenca por moderna aplikaĵa disvolviĝo kaj disvastigo:
                                    </p>
                                    <ul>
                                        <li>Mikroservaj arkitekturaj aplikaĵoj</li>
                                        <li>Aŭtomatigo de CI/CD duktoj</li>
                                        <li>Normigo de disvolviĝaj medioj</li>
                                        <li>Aplikaĵa skalado kaj ŝarĝekvilibrado</li>
                                        <li>Plurservaj aplikaĵoj kun dependecoj</li>
                                        <li>Modernigo de heredaĵaj aplikaĵoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Docker -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#2496ed] mr-3"></i>
                                    Mia Vojaĝo kun Docker
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis labori kun Docker en 2020 por ujigi Laravel-aplikaĵojn kaj plibonigi disvolviĝajn laborfluojn.
                                        Ekde tiam, mi progresis de baza ujigado al efektivigado de plurservaj arkitekturoj
                                        kaj optimumigado de uja efikeco por produktaj medioj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-layer-group text-[#2496ed] mr-2"></i>
                                                Disvolviĝaj Medioj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreado de konsekvencaj disvolviĝaj medioj kun Docker Compose,
                                                certigante ke ĉiuj teamanoj laboras kun identaj agordoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-green-500 mr-2"></i>
                                                Produkta Disvastigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvastigado de ujigitaj aplikaĵoj al produkta medio kun optimumigitaj Dockerfile-oj
                                                kaj efikaj bild-konstruaj strategioj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#2496ed] mr-3"></i>
                                    Mia Docker Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 3 jaroj da Docker-sperto, mi ujigis diversajn aplikaĵojn de simplaj retaplikaĵoj
                                        ĝis kompleksaj mikroservaj arkitekturoj, fokusante al optimumigo, sekureco kaj subteneblo.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dockerfile Optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Docker Compose Plurserva Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bazoj de Uja Orkestrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bild-granda Optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Voluma kaj Datuma Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Reta Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Sekurecaj Bonaj Praktikoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CI/CD Integrigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Plurstadaj Konstruoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Media Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Efikeca Kontrolado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Docker Hub kaj Registreja Uzado</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Laravel Mikroservoj</strong> — Ujigita Laravel API kun apartaj servoj por malsamaj domajnoj</li>
                                        <li><strong>Plen-staka Aplikaĵo</strong> — Docker Compose-agordo kun Nginx, PHP-FPM, MySQL kaj Redis</li>
                                        <li><strong>Disvolviĝa Medio</strong> — Normigita Docker-agordo por teama disvolviĝo</li>
                                        <li><strong>CI/CD Dukto</strong> — Aŭtomata Docker-bilda konstruado kaj testado</li>
                                        <li><strong>Heredaĵa Aplikaĵa Ujigado</strong> — Migrado de tradiciaj aplikaĵoj al Docker</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Teknikaj Detaloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#2496ed] mr-3"></i>
                                    Teknikaj Detaloj
                                </h2>
                                <div class="content-section">
                                    <h3>Kernaj Konceptoj</h3>
                                    <p>
                                        La potenco de Docker venas de ĝiaj fundamentaj konceptoj kiuj ebligas efikan ujigadon:
                                    </p>
                                    <ul>
                                        <li><strong>Bildoj</strong> — Nurleĝeblaj ŝablonoj kun aplikaĵo kaj dependecoj</li>
                                        <li><strong>Ujoj</strong> — Ruleblaj ekzempleroj de bildoj</li>
                                        <li><strong>Dockerfile</strong> — Skripto por konstrui bildojn</li>
                                        <li><strong>Volumoj</strong> — Daŭra datumstokado</li>
                                        <li><strong>Retoj</strong> — Komunikado inter ujoj</li>
                                        <li><strong>Compose</strong> — Pluruja aplikaĵa difino</li>
                                    </ul>

                                    <h3>Iloj kaj Ekosistemo</h3>
                                    <p>
                                        Mi laboras kun la kompleta ila ekosistemo de Docker:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker Compose</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker Hub</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker Swarm</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Portainer</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Plurstadaj Konstruoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker Registry</span>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub Projektoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#2496ed] mr-3"></i>
                                    GitHub Projektoj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj projektoj kun Docker-efektivigoj troveblas sur GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham sur GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mia portfolio inkluzivas diversajn projektojn ujigitajn per Docker por konsekvenca disvastigo.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Kompetenteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#2496ed] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#2496ed]">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#2496ed] to-[#1d7dc2]"
                                                 data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Docker Compose</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Bilda Optimumigo</span>
                                            <span class="text-sm font-bold text-green-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Plurstadaj Konstruoj</span>
                                            <span class="text-sm font-bold text-blue-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Produkta Disvastigo</span>
                                            <span class="text-sm font-bold text-purple-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#2496ed] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Docker 24+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-box text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Ujoj: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-server text-[#2496ed] w-5 mr-3"></i>
                                        <span class="text-sm">Plurservaj: <strong>10+ agordoj</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#2496ed] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2496ed] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2496ed] transition-colors"></i>
                                    </a>
                                    <a href="/competences/nginx" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-server text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2496ed] transition-colors">Nginx</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2496ed] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2496ed] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2496ed] transition-colors"></i>
                                    </a>
                                    <a href="/competences/redis" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#2496ed] transition-colors">Redis</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2496ed] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#2496ed] to-[#1d7dc2] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas ujigajn solvojn?</h3>
                                <p class="text-sm mb-4">Preta diskuti Docker-efektivigon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#2496ed] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
                                    Nginx
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero-Sekcio -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#009639] to-[#007a2f] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-server text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Nginx</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bolt mr-1"></i>
                                            Alta Efikeco
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Alt-efikeca retservilo kaj inversa prokura servilo por skaleblaj, fidindaj retejoj.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#009639] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#009639] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">6+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde Nginx 1.10</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#009639] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.24+</div>
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
                            <!-- Pri Nginx -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#009639] mr-3"></i>
                                    Pri Nginx
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Nginx</strong> estas alt-efikeca retservilo, inversa prokura servilo kaj elŝarĝa balancilo
                                        konata pro sia stabileco, riĉa trajtararo, simpla agordo kaj malalta resurso-konsumo.
                                        Ĝi bonege traktas samtempajn konektojn kaj servas statikan enhavon efike.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Alta Efikeco</strong> — Okazaĵo-direktita arkitekturo traktas milojn da samtempaj konektoj</li>
                                        <li><strong>Malalta Memoruzo</strong> — Efika resurso-utiligo eĉ sub peza ŝarĝo</li>
                                        <li><strong>Inversa Prokura Servilo</strong> — Bonega por elŝarĝa balancado kaj aplikaĵa enkursigado</li>
                                        <li><strong>Kaŝmemorado</strong> — Povuma statika kaj dinamika enhavo-kaŝmemorado</li>
                                        <li><strong>SSL/TLS Fino</strong> — Efika SSL-finigado kaj administrado</li>
                                        <li><strong>URL-rewriting</strong> — Fleksebla URL-manipulado kaj redirektado</li>
                                        <li><strong>Sekureco</strong> — Enkonstruitaj sekurecaj trajtoj kaj rapideco-limigo</li>
                                    </ul>

                                    <h3>Rekomenditaj Uzkazoj</h3>
                                    <p>
                                        Nginx estas multflanka kaj bonegas en diversaj scenaroj:
                                    </p>
                                    <ul>
                                        <li>Retaplikaĵoj kaj API-oj kun alta trafiko</li>
                                        <li>Statika enhavo-dono kaj CDN-randaj serviloj</li>
                                        <li>Elŝarĝa balancado trans multoblaj aplikaĵaj serviloj</li>
                                        <li>SSL-finigado kaj sekureca tavolo</li>
                                        <li>Inversa prokura servilo por mikroservaj arkitekturoj</li>
                                        <li>Media fluigo kaj dosia servo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Nginx-Vojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#009639] mr-3"></i>
                                    Mia Nginx-Vojo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis labori kun Nginx en 2017 kiel anstataŭaĵo por Apache en alt-trafikaj Laravel-aplikaĵoj.
                                        Ekde tiam, mi progresis de bazaj retservilaj agordoj al altnivelaj inversaj prokuraj aranĝoj,
                                        elŝarĝa balancado, kaj efikeco-optimumigo por produktaj medioj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-random text-[#009639] mr-2"></i>
                                                Inversa Prokura Agordo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Agordado de Nginx kiel inversa prokura servilo por PHP-aplikaĵoj,
                                                traktado de SSL-finigado, kaj enkursigado de petoj al fonservoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-blue-500 mr-2"></i>
                                                Efikeco-Optimumigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Agordado de Nginx por maksimuma efikeco kun kaŝmemoraj strategioj,
                                                konekto-optimumigo, kaj efika statika dosia servo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#009639] mr-3"></i>
                                    Mia Nginx-Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 6 jaroj da Nginx-sperto, mi agordis kaj optimumigis retservilojn por diversaj aplikaĵoj,
                                        de simplaj retejoj ĝis kompleksaj mikroservaj arkitekturoj postulantaj altan disponeblecon kaj efikecon.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Inversa Prokura Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Elŝarĝaj Balancaj Strategioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>SSL/TLS Agordo kaj Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Efikeco-Agordado kaj Optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kaŝmemoraj Strategioj (Prokura, FastCGI)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Sekureca Fortikigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>URL-rewriting kaj Redirektado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Virtuala Gastiganto-Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aliro-Kontrolo kaj Aŭtentigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Gzip-Kunpremado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Protokolado kaj Monitorado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Docker-Integrigo</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Alt-trafikaj Laravel Aplikaĵoj</strong> — Nginx kun PHP-FPM por optimuma efikeco</li>
                                        <li><strong>Mikroserva Arkitekturo</strong> — Nginx kiel API-pordego kaj elŝarĝa balancilo</li>
                                        <li><strong>Komercreta Platformo</strong> — Kaŝmemorado kaj SSL-optimumigo por pli bona efikeco</li>
                                        <li><strong>Multdomena Gastigado</strong> — Virtuala gastiganto-agordo por multoblaj aplikaĵoj</li>
                                        <li><strong>Statika Akira Dono</strong> — Optimumigita statika dosia servo kun kaŝmemoraj kapoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Teknikaj Detaloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#009639] mr-3"></i>
                                    Teknikaj Detaloj
                                </h2>
                                <div class="content-section">
                                    <h3>Kernaj Trajtoj</h3>
                                    <p>
                                        La arkitekturo kaj trajtoj de Nginx faras ĝin ideala por modernaj retejoj:
                                    </p>
                                    <ul>
                                        <li><strong>Okazaĵo-direktita Arkitekturo</strong> — Traktas multoblajn konektojn ene de ununura procezo</li>
                                        <li><strong>Modula Agordo</strong> — Fleksebla kaj prizorgata agordo-strukturo</li>
                                        <li><strong>HTTP/2 kaj HTTP/3 Subteno</strong> — Subteno por modernaj protokoloj por pli bona efikeco</li>
                                        <li><strong>WebSocket Prokura Servilo</strong> — Denaska WebSocket-konekta traktado</li>
                                        <li><strong>Stream-Modulo</strong> — TCP kaj UDP elŝarĝa balancado</li>
                                    </ul>

                                    <h3>Oftaj Agordoj</h3>
                                    <p>
                                        Mi laboras kun diversaj Nginx-agordoj kaj moduloj:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">PHP-FPM</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Elŝarĝa Balancado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SSL-Finigado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Kaŝmemorado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">URL-rewriting</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Aliro-Kontrolo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub-Projektoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#009639] mr-3"></i>
                                    GitHub-Projektoj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj projektoj kun Nginx-agordoj troveblas sur GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham sur GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mia portfolio inkluzivas diversajn projektojn optimumigitajn per Nginx por produktaj enplektadoj.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetenteco-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#009639] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#009639]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#009639] to-[#007a2f]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Inversa Prokura Servilo</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Elŝarĝa Balancado</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Efikeco-Agordado</span>
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
                                    <i class="fas fa-lightbulb text-[#009639] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>6+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Nginx 1.24+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>30+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-server text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">Agordoj: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#009639] w-5 mr-3"></i>
                                        <span class="text-sm">SSL-atestiloj: <strong>20+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#009639] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#009639] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#009639] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#009639] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#009639] transition-colors"></i>
                                    </a>
                                    <a href="/competences/ssl" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-lock text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#009639] transition-colors">SSL/TLS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#009639] transition-colors"></i>
                                    </a>
                                    <a href="/competences/aws" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-aws text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#009639] transition-colors">AWS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#009639] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#009639] to-[#007a2f] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas retservilan optimumigon?</h3>
                                <p class="text-sm mb-4">Preta diskuti Nginx-agordon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#009639] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

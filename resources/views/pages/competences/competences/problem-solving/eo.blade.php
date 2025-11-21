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
            document.addEventListener('DOMContentLoaded', function () {
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
    <section class="py-16">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Ĉefa Enhavo -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- Pri Problemo-Solvado -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#FF9800] mr-3"></i>
                                Pri Problemo-Solvado
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Problemo-Solvado</strong> estas la sistema procezo labori tra detaloj
                                    de problemo por atingi solvon. Ĝi kombinas analizan pensadon, kreivon,
                                    kaj praktikan efektivigon por superi defiojn kaj atingi deziratajn rezultojn.
                                    En la teknologia industrio, ĉi tiu kapablo estas escepte grava por novigado kaj
                                    progreso.
                                </p>

                                <h3>Ĉefaj Avantaĝoj</h3>
                                <ul>
                                    <li><strong>Sistema aliro</strong> - Struktura metodologio por trakti kompleksajn
                                        defiojn
                                    </li>
                                    <li><strong>Krea novigado</strong> - Pensi preter konvenciaj solvoj</li>
                                    <li><strong>Riziko-malpliigado</strong> - Identigi kaj trakti eblajn problemojn
                                        antaŭageme
                                    </li>
                                    <li><strong>Efikeco-optimumigo</strong> - Trovi pli bonajn manierojn atingi celojn
                                    </li>
                                    <li><strong>Adaptiĝemo</strong> - Ĝustigi strategiojn bazitajn sur novaj informoj
                                    </li>
                                    <li><strong>Radika-kaŭza analizo</strong> - Trakti subkuŝantajn aferojn anstataŭ
                                        simptomojn
                                    </li>
                                </ul>

                                <h3>Profesiaj Aplikoj</h3>
                                <p>
                                    Fortaj problemo-solvado-kapabloj estas esencaj tra ĉiuj profesiaj domajnoj kaj estas
                                    aparte kritikaj por:
                                </p>
                                <ul>
                                    <li>Programara arkitekturo kaj sistemo-dizajno</li>
                                    <li>Tehnika troubleshotado kaj sencimigado</li>
                                    <li>Projekta planado kaj riska administrado</li>
                                    <li>Procezo-optimumigo kaj laborfluo-plibonigo</li>
                                    <li>Novigado kaj produkto-disvolviĝo</li>
                                    <li>Kriza administrado kaj kontingentplanado</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Problemo-Solvada Vojaĝo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#FF9800] mr-3"></i>
                                Mia Problemo-Solvada Vojaĝo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Dum 12+ jaroj en teknologio kaj disvolviĝo, mi kultivis miajn
                                    problemo-solvado-kapablojn
                                    tra diversaj defioj—de sencimigado de kompleksaj heredaĵaj sistemoj ĝis
                                    arkitekturado de skaleblaj solvoj kaj optimumigo de komercaj procezoj. Ĉiu defio
                                    rafinis mian aliron kaj vastigis mian ilaron.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div
                                        class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-sitemap text-[#FF9800] mr-2"></i>
                                            Tehnika Arkitekturo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Dizajnis kaj efektivigis skaleblajn solvojn por kompleksaj komercaj
                                            problemoj,
                                            konsiderante agadkapablon, subtenindecon kaj postulojn de estonta kresko.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-tools text-blue-500 mr-2"></i>
                                            Heredaĵaj Sistemo-Defioj
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Sukcese navigis kaj modernigis malnoviĝintajn sistemojn, disvolvante
                                            migradstrategiojn kiuj minimumigis interrompon samtempe maksimumigante
                                            valoron.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mia Aliro -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#FF9800] mr-3"></i>
                                Mia Problemo-Solvada Aliro
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi aplikas strukturitan tamen flekseblan aliron al problemo-solvado kiu kombinas
                                    analizan rigorecon kun krea pensado. Mia metodologio certigas komprenon kaj efikan
                                    solvon efektivigon.
                                </p>

                                <h3>Problemo-Solvada Kadro</h3>
                                <div class="space-y-4 mt-4">
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">1</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Problemo-Difino</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Klare artikulu la
                                                problemon, limigojn, kaj deziratajn rezultojn. Disigu simptomojn de
                                                radikaj kaŭzoj.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">2</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Analizo & Esplorado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Kolektu datumojn,
                                                identigu ŝablonojn, kaj komprenu la kuntekston. Esploru similajn
                                                problemojn kaj solvojn.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">3</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Solvo-Generado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Sturmcerbumu plurajn
                                                alirojn, konsiderante kaj konvenciajn kaj novigajn solvojn.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">4</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Taksado & Elekto</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Taksu solvojn laŭ
                                                kriterioj kiel farebleco, kosto, tempo, kaj efiko. Elektu la optimalan
                                                aliron.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 rounded-full bg-[#FF9800] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">5</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Efektivigo & Testado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Efektivigu la elektitan
                                                solvon, monitoru rezultojn, kaj faru ĝustigojn laŭbezone.</p>
                                        </div>
                                    </div>
                                </div>

                                <h3>Specialigitaj Teknikoj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Radika-Kaŭza Analizo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Sistemo-Pensado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Dizajno-Pensado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Movipova Problemo-Solvado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Datum-bazita Decido-Farado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Flanka Pensado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Pensado de Unuaj Principoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Scenaro-Planado</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sukcesaj Rakontoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-trophy text-[#FF9800] mr-3"></i>
                                Problemo-Solvadaj Sukcesaj Rakontoj
                            </h2>
                            <div class="content-section">
                                <p>
                                    Miaj problemo-solvado-kapabloj estis instrumentaj por superi signifajn
                                    defiojn tra diversaj projektoj kaj kuntekstoj:
                                </p>
                                <ul>
                                    <li><strong>Agadkapablo-Optimumigo</strong> - Identigis kaj solvis kritajn
                                        malliberigaĵojn en alt-traŝarĝa komerca platformo, reduktante paĝo-ŝargajn
                                        tempojn je 65% tra sistema analizo kaj celitaj plibonigoj
                                    </li>
                                    <li><strong>Heredaĵa Sistemo-Migrado</strong> - Disvolvis novigan migradstrategion
                                        por 15-jara sistemo, ebligante seninterrompan transiron al moderna arkitekturo
                                        dum konservante komercan logikon kaj datumintegrecon
                                    </li>
                                    <li><strong>Kruc-Platforma Kongrueco</strong> - Solvis kompleksajn kongruecajn
                                        aferojn inter malsamaj retumilaj medioj kaj aparatoj, certigante konsekvencan
                                        uzantosperton tra ĉiuj platformoj
                                    </li>
                                    <li><strong>Datumbaza Skalada Defio</strong> - Dizajnis kaj efektivigis skaleblan
                                        datumbazan arkitekturon kiu subtenis 10x kreskon en uzantaro sen
                                        agadkapablo-difektiĝo
                                    </li>
                                    <li><strong>Integriĝa Komplekseco</strong> - Solvis malsimplajn integriĝajn defiojn
                                        inter multoblaj triapartiaj servoj, kreante unuigitan laborfluon kiu plibonigis
                                        operacian efikecon je 40%
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Iloj & Metodoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#FF9800] mr-3"></i>
                                Problemo-Solvadaj Iloj & Metodoj
                            </h2>
                            <div class="content-section">
                                <h3>Analizaj Iloj</h3>
                                <p>
                                    Mi utiligas diversajn analizajn ilojn kaj kadrojn por sisteme aliri problemojn:
                                </p>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm text-center">SWOT-Analizo</span>
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Fiŝosta Diagramo</span>
                                    <span
                                        class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">5 Kialoj Tekniko</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Pareto-Analizo</span>
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Decida Matrico</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Menta Mapado</span>
                                    <span
                                        class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Kosto-Avantaĝo-Analizo</span>
                                    <span
                                        class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Fluo-Diagramoj</span>
                                    <span
                                        class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Gantt-Diagramoj</span>
                                </div>

                                <h3>Kreaj Teknikoj</h3>
                                <p>
                                    Por novigaj solvoj, mi aplikas kread-problemo-solvadajn metodojn:
                                </p>
                                <ul>
                                    <li><strong>Sturmcerbumaj Seancoj</strong> - Generi diversajn ideojn sen antaŭa juĝo
                                    </li>
                                    <li><strong>Inversa Pensado</strong> - Aliri problemojn el la kontraŭa perspektivo
                                    </li>
                                    <li><strong>Analoga Pensado</strong> - Apliki solvojn el nerilataj domajnoj</li>
                                    <li><strong>Prototipo & Ripetado</strong> - Konstrui rapidajn prototipojn por testi
                                        konceptojn
                                    </li>
                                    <li><strong>Limigo-Forigo</strong> - Provizore ignori limigojn por stimuli kreivon
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Flanka Stango -->
                    <div class="space-y-6">
                        <!-- Kompetenteca Karto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#FF9800] mr-2"></i>
                                Kompetenteca Nivelo
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Ĝenerala Kompetenteco</span>
                                        <span class="text-sm font-bold text-[#FF9800]">95%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div
                                            class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF9800] to-[#FB8C00]"
                                            data-width="95%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Analiza Pensado</span>
                                        <span class="text-sm font-bold text-green-500">96%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="96%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Kreaj Solvoj</span>
                                        <span class="text-sm font-bold text-blue-500">92%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Tehnika Troubleshotado</span>
                                        <span class="text-sm font-bold text-purple-500">94%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="94%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Strategia Planado</span>
                                        <span class="text-sm font-bold text-yellow-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="90%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#FF9800] mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>12+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-puzzle-piece text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Solvitaj Problemoj: <strong>500+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Projektoj: <strong>200+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Av. Solva Tempo: <strong>65% pli rapida</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-chart-line text-[#FF9800] w-5 mr-3"></i>
                                    <span class="text-sm">Sukcesa Indicento: <strong>98%</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentecoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#FF9800] mr-2"></i>
                                Rilataj Kompetentecoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/analytical-thinking"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-brain text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF9800] transition-colors">Analiza
                                            Pensado
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">94% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                </a>
                                <a href="/competences/innovation"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-lightbulb text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF9800] transition-colors">Novigado
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                </a>
                                <a href="/competences/critical-thinking"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-search text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF9800] transition-colors">Kritika
                                            Pensado
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">92% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                </a>
                                <a href="/competences/decision-making"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-balance-scale text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF9800] transition-colors">
                                            Decido-Farado
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF9800] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div
                            class="bg-gradient-to-r from-[#FF9800] to-[#FB8C00] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu vi alfrontas defion?</h3>
                            <p class="text-sm mb-4">Ni apliku sisteman problemo-solvadon al via projekto</p>
                            <a href="/contact"
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF9800] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                <i class="fas fa-envelope mr-2"></i>
                                Diskuti Solvojn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

</x-frontend.layouts.app>

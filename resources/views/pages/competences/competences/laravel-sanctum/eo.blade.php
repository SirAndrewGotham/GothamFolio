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
            // Lerteca strio-animacio
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
                        <!-- Pri Laravel Sanctum -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#10B981] mr-3"></i>
                                Pri Laravel Sanctum
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Sanctum</strong> provizas plumezan aŭtentigan sistemon por SPA (unu-paĝaj aplikaĵoj),
                                    movilaj aplikaĵoj, kaj simplaj API-oj bazitaj sur ĵetonoj. Sanctum permesas al ĉiu uzanto de via aplikaĵo generi
                                    plurajn API-ĵetonojn por sia konto kun specifaj kapabloj.
                                </p>

                                <h3>Kernaj Aŭtentigaj Metodoj</h3>
                                <ul>
                                    <li><strong>SPA Aŭtentigo</strong> - Seanco-bazita aŭtentigo por sam-domajnaj SPA</li>
                                    <li><strong>API-Ĵetona Aŭtentigo</strong> - Ĵetono-bazita aŭtentigo por movilaj aplikaĵoj kaj triapartaj servoj</li>
                                    <li><strong>Kapablo-bazitaj Ĵetonoj</strong> - Fajngrajnitaj permesoj por API-ĵetonoj</li>
                                    <li><strong>CSRF-Protekto</strong> - Enkonstruita protekto por SPA-aŭtentigo</li>
                                    <li><strong>Seanco-Administrado</strong> - Laravel-seanca integrigo por SPA</li>
                                    <li><strong>Movila Aplikaĵa Subteno</strong> - Optimumigita por movila aplikaĵa aŭtentigo</li>
                                </ul>

                                <h3>Ŝlosilaj Avantaĝoj</h3>
                                <p>
                                    Sanctum ofertas plurajn avantaĝojn kompare kun tradiciaj aŭtentigaj metodoj:
                                </p>
                                <ul>
                                    <li>Malpeza kaj simpla implementi</li>
                                    <li>Nenia OAuth-komplekseco por simplaj uzkazoj</li>
                                    <li>Seninterrompa integrigo kun Laravel's seanco-aŭtentigo</li>
                                    <li>Kapablo-bazitaj ĵetonaj permesoj por fajngrajnita alir-kontrolo</li>
                                    <li>Elstara rendimento por alt-trafikaj aplikaĵoj</li>
                                    <li>Enkonstruitaj sekurecaj trajtoj kaj bonaj praktikoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Sanctum-Vojo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#10B981] mr-3"></i>
                                Mia Sanctum-Vojo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Ekinplementis Laravel Sanctum en 2021 por modernaj SPA-aplikaĵoj kaj movilaj aplikaĵaj malantaŭaĵoj.
                                    Dum pli ol 3+ jaroj, disvastigis Sanctum tra diversaj projektoj inkluzive de Vue.js SPA, React Native movilaj aplikaĵoj,
                                    kaj triapartaj API-integrigoj postulantaj sekuran aŭtentigon.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-globe text-[#10B981] mr-2"></i>
                                            SPA-Aplikaĵoj
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Implementis Sanctum por multoblaj Vue.js kaj React SPA
                                            kun seanco-bazita aŭtentigo kaj CSRF-protekto.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-mobile-alt text-blue-500 mr-2"></i>
                                            Movilaj Malantaŭaĵoj
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Konstruis sekurajn API-malantaŭaĵojn por React Native kaj Flutter
                                            aplikaĵoj uzante Sanctum's ĵetono-bazitan aŭtentigon.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Teknika Sperteco -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#10B981] mr-3"></i>
                                Teknika Sperteco
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kompleta sperto kun Sanctum-agordo, implementaj ŝablonoj,
                                    kaj sekurecaj bonaj praktikoj tra diversaj aplikaĵaj arkitekturoj.
                                </p>

                                <h3>Kernaj Sanctum-Kapabloj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>SPA-Aŭtentiga Agordo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>API-Ĵetona Generado & Administrado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Kapablo-bazitaj Ĵetonaj Permesoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>CSRF-Protekta Implementado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>CORS-Agordo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Movila Aplikaĵa Aŭtentigo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Ĵetonaj Kapabloj & Skopoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Sekurecaj Bonaj Praktikoj</span>
                                    </div>
                                </div>

                                <h3>Implementaj Ŝablonoj</h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">SPA Seanco Aŭt</span>
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">API Ĵetono Aŭt</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Movila Aŭt</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Triaparta API</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Plur-tenanteco</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Mikroservoj</span>
                                </div>

                                <h3>Sekureco & Bonaj Praktikoj</h3>
                                <ul>
                                    <li><strong>Ĵetona Sekureco</strong> - Sekura ĵetona generado, stokado kaj transsendo</li>
                                    <li><strong>CSRF-Protekto</strong> - Implementado kaj testado de CSRF-protekto</li>
                                    <li><strong>CORS-Agordo</strong> - Taŭga CORS-agordo por trans-devenaj petoj</li>
                                    <li><strong>Ĵetona Eksvalidiĝo</strong> - Ĵetona vivdaŭra administrado kaj refreŝigaj strategioj</li>
                                    <li><strong>Kapablo-Administrado</strong> - Fajngrajnitaj permesaj sistemoj kaj validigo</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Integrigaj Ŝablonoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#10B981] mr-3"></i>
                                Integrigaj Ŝablonoj
                            </h2>
                            <div class="content-section">
                                <h3>Antaŭaĵa Integrigo</h3>
                                <p>
                                    Sperto integrigi Sanctum kun diversaj antaŭaĵaj kadroj kaj movilaj platformoj:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-green-600 mb-2">Vue.js / React SPA</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Seanco-bazita aŭtentigo kun CSRF-ĵetona administrado,
                                            aŭtomata ĵetona refreŝigo kaj sekura API-komunikado.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-blue-600 mb-2">Movilaj Aplikaĵoj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Ĵetono-bazita aŭtentigo por React Native kaj Flutter aplikaĵoj
                                            kun sekura stokado kaj ĵetonaj refreŝigaj mekanismoj.
                                        </p>
                                    </div>
                                </div>

                                <h3>Malantaŭaĵa Integrigo</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Fortify</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Laravel Breeze</span>
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Jetstream</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Plur-gardisto</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Rolo-bazita</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Permeso-bazita</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Plur-tenanteco</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Mikroservoj</span>
                                </div>
                            </div>
                        </div>

                        <!-- Sekureco & Produktado -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-shield-alt text-[#10B981] mr-3"></i>
                                Sekureco & Produktado
                            </h2>
                            <div class="content-section">
                                <p>
                                    Produkte pretaj Sanctum-implementoj kun sekurecaj bonaj praktikoj kaj rendimenta optimumigo:
                                </p>

                                <h3>Sekureca Implementado</h3>
                                <ul>
                                    <li><strong>Ĵetona Hashado</strong> - Sekura ĵetona stokado uzante Laravel's enkonstruitan hash-adon</li>
                                    <li><strong>HTTPS-Devigo</strong> - SSL/TLS-postuloj por produktaj medioj</li>
                                    <li><strong>Ĵetona Rotacio</strong> - Regula ĵetona refreŝigo kaj malvalidigaj strategioj</li>
                                    <li><strong>Rapid-Limigo</strong> - API-rapida limigo por preventi misuzon kaj perfortajn atakojn</li>
                                    <li><strong>Eniga Validigo</strong> - Kompleta validigo de aŭtentigaj petoj</li>
                                    <li><strong>Protokolado & Monitorado</strong> - Sekureca evento-protokolado kaj anomalio-detectado</li>
                                </ul>

                                <h3>Produktaj Konsideroj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-green-600 mb-2">Rendimenta Optimumigo</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Datumbaza indeksado por ĵetona serĉado</li>
                                            <li>• Ĵetonaj kaŝmemoraj strategioj</li>
                                            <li>• Seanco-stokada optimumigo</li>
                                            <li>• Elŝarĝa ekvilibrigada konsideroj</li>
                                        </ul>
                                    </div>
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-600 mb-2">Disvastigaj Strategioj</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Medio-specifaj agordoj</li>
                                            <li>• Nul-ĉesaj disvastigoj</li>
                                            <li>• Datumbazaj migradaj strategioj</li>
                                            <li>• Rezervkopiado kaj rekuperaj proceduroj</li>
                                        </ul>
                                    </div>
                                </div>

                                <h3>Problemsolva Sperto</h3>
                                <ul>
                                    <li><strong>CORS-Problemoj</strong> - Solvante trans-devenajn resurso-kunhavajn problemojn</li>
                                    <li><strong>CSRF-Ĵetonaj Mismatchoj</strong> - Sencimigado kaj riparado de CSRF-protektaj problemoj</li>
                                    <li><strong>Ĵetonaj Validigaj Problemoj</strong> - Solvante ĵetonan verifikadon kaj eksvalidiĝajn problemojn</li>
                                    <li><strong>Seanco-Administrado</strong> - Traktado de seanco-persisto kaj sekureco</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Flankopaneloj -->
                    <div class="space-y-6">
                        <!-- Lerteca Nivelo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#10B981] mr-2"></i>
                                Lerteca Nivelo
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Entuta Sanctum</span>
                                        <span class="text-sm font-bold text-[#10B981]">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#10B981] to-[#047857]"
                                             data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">SPA-Aŭtentigo</span>
                                        <span class="text-sm font-bold text-green-500">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">API-Ĵetona Aŭt</span>
                                        <span class="text-sm font-bold text-blue-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Sekureca Implementado</span>
                                        <span class="text-sm font-bold text-purple-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Produkta Disvastigo</span>
                                        <span class="text-sm font-bold text-orange-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#10B981] mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Versio: <strong>Sanctum 3.x</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Projektoj: <strong>15+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Sekurecaj Aŭditadoj: <strong>10+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-mobile-alt text-[#10B981] w-5 mr-3"></i>
                                    <span class="text-sm">Movilaj Aplikaĵoj: <strong>5+</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentecoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#10B981] mr-2"></i>
                                Rilataj Kompetentecoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#10B981] transition-colors">Laravel</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                </a>
                                <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-code text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#10B981] transition-colors">API-Disvolviĝo</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                </a>
                                <a href="/competences/security" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-shield-alt text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#10B981] transition-colors">Sekureco</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                </a>
                                <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-vuejs text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#10B981] transition-colors">Vue.js</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">78% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#10B981] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div class="bg-gradient-to-r from-[#10B981] to-[#047857] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu Vi Bezonas Sekuran Aŭtentigon?</h3>
                            <p class="text-sm mb-4">Preta implementi fortikan aŭtentigon kun Laravel Sanctum</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-green-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

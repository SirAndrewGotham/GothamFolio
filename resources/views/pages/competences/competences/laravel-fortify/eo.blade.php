<x-frontend.layouts.app>
    @push('section-styles')
        <style>
            /* Alpine.js specifa gradiento kiu ne estas en la ĉefa app.css */
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
            // Lertostria animacio
            document.addEventListener('DOMContentLoaded', function() {
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
                        <!-- Pri Laravel Fortify -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#3B82F6] mr-3"></i>
                                Pri Laravel Fortify
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Fortify</strong> estas frontend-sendependa aŭtentika backend por Laravel.
                                    Fortify implementas la aŭtentikan logikon por via aplikaĵo, inkluzive trajtojn kiel ensaluto,
                                    registriĝo, pasvorta restarigo, retpoŝta kontrolado, kaj pli, sen devigi vin uzi iujn
                                    apartajn frontend-decidojn aŭ JavaScript-kadron.
                                </p>

                                <h3>Kernaj Aŭtentikaj Trajtoj</h3>
                                <ul>
                                    <li><strong>Uzanto-Registriĝo</strong> - Kompleta uzanto-registriĝa sistemo kun validigo</li>
                                    <li><strong>Ensaluto & Elsaltado</strong> - Sekura aŭtentiko kaj seanco-administrado</li>
                                    <li><strong>Pasvorta Restarigo</strong> - Retpoŝte bazita pasvorta restariga funkcieco</li>
                                    <li><strong>Retpoŝta Kontrolado</strong> - Konto-kontrolado tra retpoŝta konfirmo</li>
                                    <li><strong>Dufaktora Aŭtentiko</strong> - Plibonigita sekureco kun 2FA-subteno</li>
                                    <li><strong>Profila Administrado</strong> - Uzanto-profila ĝisdatigo kaj administrado</li>
                                    <li><strong>Konto-Forigo</strong> - Sekura konto-forigo kun konfirmo</li>
                                </ul>

                                <h3>Avantaĝoj de Senkapa Arkitekturo</h3>
                                <p>
                                    La senkapa aliro de Fortify provizas plurajn avantaĝojn:
                                </p>
                                <ul>
                                    <li>Plena libereco en frontend-teknologia elekto</li>
                                    <li>Kohera aŭtentika logiko tra multaj frontend-oj</li>
                                    <li>Facila integrigo kun SPA-oj, mobilaj aplikaĵoj kaj tradiciaj retaplikaĵoj</li>
                                    <li>Fleksebla agordado de aŭtentikaj fluoj</li>
                                    <li>Neniuj frontend-dependecoj aŭ decidado</li>
                                    <li>Perfekta por API-pelitaj aplikaĵoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Fortify Vojaĝo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#3B82F6] mr-3"></i>
                                Mia Fortify Vojaĝo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Komencis labori kun Laravel Fortify en 2022 por senkapaj aŭtentikaj backend-oj.
                                    Dum pli ol 2+ jaroj, implementis Fortify tra diversaj projektoj inkluzive de Vue.js SPA-oj,
                                    React-aplikaĵoj, mobilaj aplikaĵaj backend-oj, kaj tradiciaj retaplikaĵoj postulantaj
                                    proprajn aŭtentikajn interfacojn.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-code text-[#3B82F6] mr-2"></i>
                                            Senkapaj Backend-oj
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Konstruis multoblajn senkapajn aŭtentikajn backend-ojn servante
                                            diversajn frontend-aplikaĵojn kun kohera sekureco.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-shield-alt text-purple-500 mr-2"></i>
                                            Sekureca Plibonigo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Plibonigis Fortify-implementojn per aldona sekureco
                                            trajtoj kaj propraj aŭtentikaj laborfluoj.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Teknika Kompetenteco -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#3B82F6] mr-3"></i>
                                Teknika Kompetenteco
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kompleta sperto kun Fortify-agordo, proprado,
                                    kaj integrigo tra diversaj aplikaĵaj arkitekturoj kaj frontend-teknologioj.
                                </p>

                                <h3>Kernaj Fortify Kapabloj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Fortify Servo-Provizanto Agordo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Trajto-Agordo & Etendo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Aŭtentika Pipeline-Agordo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Dufaktora Aŭtentiko-Agordo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Retpoŝta Kontrolado-Implemento</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Pasvorta Restarigo-Agordo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Profila Administrado-Trajtoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Sekurecaj Plej Bonaj Praktikoj</span>
                                    </div>
                                </div>

                                <h3>Altnivelaj Trajtoj & Agordado</h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">2FA-Agordo</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Retpoŝta Kontrolado</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Profila Ĝisdatigo</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Pasvorta Konfirmo</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Konto-Restaŭrado</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Retumilo-Seancoj</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">API-Ĵetona Administrado</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Teamo-Administrado</span>
                                    <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Socia Aŭtentiko</span>
                                </div>

                                <h3>Integrigo & Agordado</h3>
                                <ul>
                                    <li><strong>Frontend-Sendependa Dezajno</strong> - Integrigo kun iu ajn frontend-kadro</li>
                                    <li><strong>Propraj Aŭtentikaj Respondoj</strong> - Tajloritaj API-respondoj por diversaj klientoj</li>
                                    <li><strong>Etenditaj Uzanto-Profiloj</strong> - Aldonaj uzanto-datumoj kaj profilaj kampoj</li>
                                    <li><strong>Multluanta Subteno</strong> - Aŭtentiko en multluantaj aplikaĵoj</li>
                                    <li><strong>Propraj Validigaj Reguloj</strong> - Etendita validigo por registriĝo kaj profiloj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Frontend Integrigo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#3B82F6] mr-3"></i>
                                Frontend Integrigo
                            </h2>
                            <div class="content-section">
                                <h3>Multkadra Sperto</h3>
                                <p>
                                    Sperto integrigi Fortify kun diversaj frontend-teknologioj kaj kadroj:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-green-600 mb-2">Vue.js & React SPA-oj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Senkapaj aŭtentikaj backend-oj por modernaj JavaScript SPA-oj
                                            kun ĵetone bazita aŭtentiko kaj seanco-administrado.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-yellow-600 mb-2">Mobilaj Aplikaĵoj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            API-aŭtentiko por React Native kaj Flutter aplikaĵoj
                                            kun sekura ĵetona administrado kaj refreŝigaj mekanismoj.
                                        </p>
                                    </div>
                                </div>

                                <h3>Integrigaj Ŝablonoj</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Sanctum Integrigo</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Seanca Aŭtentiko</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Ĵetona Aŭtentiko</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">OAuth2</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Socialite</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Livewire</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Inertia.js</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Blade Ŝablonoj</span>
                                </div>
                            </div>
                        </div>

                        <!-- Sekureco & Produktado -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-shield-alt text-[#3B82F6] mr-3"></i>
                                Sekureco & Produktado
                            </h2>
                            <div class="content-section">
                                <p>
                                    Pretaj por produktado Fortify-implementoj kun plibonigitaj sekurecaj trajtoj kaj plej bonaj praktikoj:
                                </p>

                                <h3>Sekurecaj Plibonigoj</h3>
                                <ul>
                                    <li><strong>Dufaktora Aŭtentiko</strong> - TOTP-bazita 2FA kun restaŭraj kodoj</li>
                                    <li><strong>Rapida Limigo</strong> - Protekto kontraŭ krudfortaj atakoj</li>
                                    <li><strong>Pasvortaj Politikoj</strong> - Fortaj pasvortaj postuloj kaj validigo</li>
                                    <li><strong>Seanca Sekureco</strong> - Sekura seanco-administrado kaj protekto</li>
                                    <li><strong>Retpoŝta Sekureco</strong> - Sekuraj retpoŝta kontrolado kaj pasvorta restarigo-fluoj</li>
                                    <li><strong>Konto-Barado</strong> - Protekto kontraŭ ripetitaj malsukcesaj provoj</li>
                                </ul>

                                <h3>Produktada Implemento</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-600 mb-2">Efikeca Optimumigo</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Datumbaza optimumigo por uzantaj mendoj</li>
                                            <li>• Kaŝstrategioj por aŭtentikaj datumoj</li>
                                            <li>• Efika seanco-stokada administrado</li>
                                            <li>• Ŝarĝ-ekvilibraj konsideroj</li>
                                        </ul>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-green-600 mb-2">Disvolviĝaj Strategioj</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Medio-specifaj agordoj</li>
                                            <li>• Datumbazaj migradaj strategioj</li>
                                            <li>• Nul-paŭzaj disvolviĝaj proceduroj</li>
                                            <li>• Rezerva kaj restaŭra planado</li>
                                        </ul>
                                    </div>
                                </div>

                                <h3>Propraj Trajtoj & Etendoj</h3>
                                <ul>
                                    <li><strong>Propra Uzanto-Registriĝo</strong> - Etendita registriĝo kun aldonaĵaj kampoj</li>
                                    <li><strong>Socia Aŭtentiko</strong> - Integrigo kun sociaj provizantoj tra Socialite</li>
                                    <li><strong>Multfaktoraj Opcioj</strong> - Aldonaj aŭtentikaj faktoroj kaj metodoj</li>
                                    <li><strong>Aŭdita Protokolado</strong> - Kompleta aŭtentika eventa protokolado</li>
                                    <li><strong>Propra Middleware</strong> - Aldonaj sekurecaj kaj validigaj middleware</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Flankopanelo -->
                    <div class="space-y-6">
                        <!-- Kompetenteco Karto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#3B82F6] mr-2"></i>
                                Nivelo de Kompetenteco
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Entuta Fortify</span>
                                        <span class="text-sm font-bold text-[#3B82F6]">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#3B82F6] to-[#1d4ed8]"
                                             data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Agordo & Preparado</span>
                                        <span class="text-sm font-bold text-green-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Trajto-Agordo</span>
                                        <span class="text-sm font-bold text-blue-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Sekureca Implemento</span>
                                        <span class="text-sm font-bold text-purple-500">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Frontend Integrigo</span>
                                        <span class="text-sm font-bold text-orange-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="75%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#3B82F6] mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>2+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Versio: <strong>Fortify 1.x</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Projektoj: <strong>12+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Sekurecaj Aŭditadoj: <strong>8+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users text-[#3B82F6] w-5 mr-3"></i>
                                    <span class="text-sm">Frontend Integrigoj: <strong>6+ kadroj</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#3B82F6] mr-2"></i>
                                Rilataj Kompetentoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#3B82F6] transition-colors">Laravel</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                </a>
                                <a href="/competences/laravel-sanctum" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-shield-alt text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#3B82F6] transition-colors">Laravel Sanctum</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                </a>
                                <a href="/competences/security" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-lock text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#3B82F6] transition-colors">Sekureco</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                </a>
                                <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-code text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#3B82F6] transition-colors">API Disvolviĝo</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#3B82F6] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div class="bg-gradient-to-r from-[#3B82F6] to-[#1d4ed8] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu Vi Bezonas Senkapan Aŭtentikon?</h3>
                            <p class="text-sm mb-4">Pretas implementi robustan aŭtentikon kun Laravel Fortify</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

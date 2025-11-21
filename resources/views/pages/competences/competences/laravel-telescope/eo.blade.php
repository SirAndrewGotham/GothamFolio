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
            .telescope-gradient {
                background: linear-gradient(135deg, #4A90E2 0%, #1e40af 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Skill bar animation
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
                                        Laravel Telescope
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4A90E2] to-[#1e40af] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-search text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 telescope-gradient">Laravel Telescope</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bug mr-1"></i>
                                            Seneraraĵa Specialist
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Senerariga asistanto por monitorado de petoj, esceptoj kaj datumbazaj mendoj. Eleganta senerariga asistanto por la Laravel-kadro.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Profesia Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v4.x</div>
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
                            <!-- Pri Laravel Telescope -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#4A90E2] mr-3"></i>
                                    Pri Laravel Telescope
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Telescope</strong> estas eleganta senerariga asistanto por la Laravel-kadro.
                                        Telescope provizas komprenon pri la petoj venantaj en vian aplikaĵon, esceptojn, protokolerojn,
                                        datumbazajn mendojn, vicigitajn taskojn, poŝton, sciigojn, kaŝmemoroperaciojn, planitajn taskojn, variablajn elĵetojn kaj pli.
                                    </p>

                                    <h3>Kernaj Monitorado-Kapabloj</h3>
                                    <ul>
                                        <li><strong>Peto-Monitorado</strong> - Envenantaj petoj, respondoj kaj kaplinioj</li>
                                        <li><strong>Datumbazaj Mendoj</strong> - Mendo-plenumado, ligaĵoj kaj efikeco</li>
                                        <li><strong>Escepto-Sekvado</strong> - Detalita escepta informo kaj stakaj spuroj</li>
                                        <li><strong>Protokoleroj</strong> - Aplikaĵaj protokoloj kaj kuntekstaj datumoj</li>
                                        <li><strong>Tasko-Monitorado</strong> - Vicigitaj taskoj, malsukcesoj kaj prilaboraj tempoj</li>
                                        <li><strong>Poŝto & Sciigoj</strong> - Eligantaj retpoŝtoj kaj sciigaj antaŭrigardoj</li>
                                        <li><strong>Kaŝmemoroperacioj</strong> - Kaŝmemoraj trafoj, maltrafoj kaj etikedoj</li>
                                    </ul>

                                    <h3>Disvolviĝo-Laborkursaj Avantaĝoj</h3>
                                    <p>
                                        Telescope draste plibonigas disvolviĝan kaj senerarigan efikecon:
                                    </p>
                                    <ul>
                                        <li>Realtempa kompreno pri aplikaĵa konduto</li>
                                        <li>Rapida identigo de efikecaj botelkoloj</li>
                                        <li>Detala eraro-sekvado kaj reproduktado</li>
                                        <li>Datumbaza mendo-optimumigaj ŝancoj</li>
                                        <li>Vico-tasko monitorado kaj problemosolvado</li>
                                        <li>Kompleta aplikaĵ-aktiveca protokolado</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Telescope-Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#4A90E2] mr-3"></i>
                                    Mia Telescope-Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Ekinte integrigi Telescope en 2020 por disvolviĝaj kaj testaj medioj.
                                        Dum 4+ jaroj, uzis Telescope amplekse por senerarigi kompleksajn problemojn,
                                        efikeco-optimumigon kaj monitoradon de aplikaĵa konduto tra diversaj projektoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-bug text-[#4A90E2] mr-2"></i>
                                                Kompleksa Senerarigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Uzis Telescope por senerarigi kompleksajn aplikaĵajn problemojn inkluzive
                                                memoraj likoj, N+1 mendojn kaj konkurstaton en produkt-similaj medioj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-tachometer-alt text-purple-500 mr-2"></i>
                                                Efikeco-Optimumigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Utiligis Telescope-metrikojn por identigi kaj optimumigi
                                                efikecajn botelkolojn en datumbazaj mendoj kaj aplikaĵa logiko.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Teknika Spertulo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#4A90E2] mr-3"></i>
                                    Teknika Spertulo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kompleta sperto kun Telescope-agordo, personecigo,
                                        kaj altnivelaj senerarigaj teknikoj tra diversaj aplikaĵaj scenaroj.
                                    </p>

                                    <h3>Kernaj Telescope-Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Media Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Observilo-Agordo & Personecigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumbaza Mendo-Analizo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Escepto-Sekvado & Senerarigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Efikeco-Monitorado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propra Observilo-Disvolviĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Sekureco & Aliro-Kontrolo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datuma Prunado & Konserveja Administrado</span>
                                        </div>
                                    </div>

                                    <h3>Altnivelaj Observiloj & Trajtoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Peto-Observilo</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Mendo-Observilo</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Escepto-Observilo</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Protokolo-Observilo</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Tasko-Observilo</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Poŝto-Observilo</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Sciigo-Observilo</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Kaŝmemoro-Observilo</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Plano-Observilo</span>
                                    </div>

                                    <h3>Senerarigaj & Analizaj Teknikoj</h3>
                                    <ul>
                                        <li><strong>N+1 Mendo-Detekto</strong> - Identigado kaj optimumigo de neefikaj datumbazaj mendoj</li>
                                        <li><strong>Memora Lik-Detekto</strong> - Sekvado de memoruzadaj ŝablonoj kaj likoj</li>
                                        <li><strong>Efikeco-Profilado</strong> - Analizado de peto- kaj mendo-efikeco</li>
                                        <li><strong>Escepto-Analizo</strong> - Detala staka spuro-ekzameno kaj reproduktado</li>
                                        <li><strong>Peto/Respondo-Inspektado</strong> - Kaplinioj, utilaj ŝarĝoj kaj statkodoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Media Agordo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#4A90E2] mr-3"></i>
                                    Media Agordo
                                </h2>
                                <div class="content-section">
                                    <h3>Plurmedia Aĝusto</h3>
                                    <p>
                                        Sperto agordi Telescope tra diversaj medioj kun taŭgaj sekurecaj kaj efikecaj konsideroj:
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-green-600 mb-2">Disvolviĝa Medio</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Plena Telescope-aliro kun ĉiuj observiloj ebligitaj por kompleta
                                                senerarigo kaj disvolviĝo-laborkursa optimumigo.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-yellow-600 mb-2">Testa Medio</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Limigita Telescope-aliro kun efikeco-fokusaj observiloj
                                                por antaŭprodukta testado kaj optimumigo.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Sekureco & Aliro-Kontrolo</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Pordego-Rajtigo</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Mediaj Limigoj</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">IP-Blanklistado</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Uzanto-Aŭtentigo</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Datuma Filtrado</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Sentivaj Datumoj</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Peto-Filtrado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Protokolo-Sanigo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Efikeco & Personecigo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-rocket text-[#4A90E2] mr-3"></i>
                                    Efikeco & Personecigo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Altnivelaj Telescope-personecigaj kaj efikeco-optimumigaj strategioj:
                                    </p>

                                    <h3>Propraj Observiloj & Etendaĵoj</h3>
                                    <ul>
                                        <li><strong>Aplikaĵo-Specifaj Observiloj</strong> - Propraj observiloj por negoca logiko-monitorado</li>
                                        <li><strong>Observiloj por Tria-Partia Integrigo</strong> - Monitorado de eksteraj API-vokoj kaj servoj</li>
                                        <li><strong>Efikeco-Metrikaj Observiloj</strong> - Propra efikeco-sekvado kaj avertoj</li>
                                        <li><strong>Negoca Logiko-Observiloj</strong> - Domajno-specifa aktiveco-monitorado</li>
                                        <li><strong>Propra Etikedado</strong> - Aplikaĵo-specifa enskriba etikedado kaj organizado</li>
                                    </ul>

                                    <h3>Efikeco-Optimumigo</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-600 mb-2">Konservejo-Optimumigo</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Datumbazaj prunadaj strategioj</li>
                                                <li>• Ensribaj limoj kaj retenaj politikoj</li>
                                                <li>• Konserveja stirilo-elekto</li>
                                                <li>• Amas-prilabora agordo</li>
                                            </ul>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-green-600 mb-2">Observilo-Optimumigo</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Selektiva observilo-ebligado</li>
                                                <li>• Specimen-preta agordo</li>
                                                <li>• Memoruzo-optimumigo</li>
                                                <li>• Efikeco-efiko-monitorado</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h3>Problemsolvada Sperto</h3>
                                    <ul>
                                        <li><strong>Memoraj Problemoj</strong> - Solvado de Telescope-rilata memor-konsumado</li>
                                        <li><strong>Efikeco-Efiko</strong> - Minimumigado de Telescope-efiko sur aplikaĵa efikeco</li>
                                        <li><strong>Datumbaza Optimumigo</strong> - Telescope-datumbaza efikeco-ĝustigo</li>
                                        <li><strong>Agordaj Problemoj</strong> - Solvado de observilaj kaj mediaj agordaj problemoj</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetenteco-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#4A90E2] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Telescope</span>
                                            <span class="text-sm font-bold text-[#4A90E2]">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4A90E2] to-[#1e40af]"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Agordo & Aĝusto</span>
                                            <span class="text-sm font-bold text-green-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Senerarigo & Analizo</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Efikeco-Optimumigo</span>
                                            <span class="text-sm font-bold text-purple-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Personecigo</span>
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
                                    <i class="fas fa-lightbulb text-[#4A90E2] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Telescope 4.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bug text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Solvitaj Problemoj: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-database text-[#4A90E2] w-5 mr-3"></i>
                                        <span class="text-sm">Optimumigitaj Mendoj: <strong>50+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#4A90E2] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4A90E2] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                    </a>
                                    <a href="/competences/debugging" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bug text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4A90E2] transition-colors">Senerarigo</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                    </a>
                                    <a href="/competences/performance" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-tachometer-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4A90E2] transition-colors">Efikeco</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                    </a>
                                    <a href="/competences/mysql" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-database text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4A90E2] transition-colors">MySQL</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4A90E2] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#4A90E2] to-[#1e40af] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu bezonas senerarigan helpon?</h3>
                                <p class="text-sm mb-4">Pretas implementi kompletan senerarigon kun Laravel Telescope</p>
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

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
    <section class="py-16">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Ĉefa Enhavo -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- Pri Pandas -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#150458] mr-3"></i>
                                Pri Pandas
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Pandas</strong> estas malfermkoda ilo por datum-analizo kaj manipulado
                                    konstruita sur Python.
                                    Ĝi provizas rapidajn, flekseblajn kaj esprimivajn datumstrukturojn desegnitajn por
                                    faciligi kaj intuiciigi laboron kun
                                    strukturitaj (tabelaj, multidimensiaj, eble heterogenaj) kaj temposeraj datumoj.
                                </p>

                                <h3>Ĉefaj Avantaĝoj</h3>
                                <ul>
                                    <li><strong>DataFrame-Objekto</strong> - Dudimensia etikedita datumstrukturo kun
                                        kolumnoj de eble malsamaj tipoj
                                    </li>
                                    <li><strong>Datuma Ĝustigo</strong> - Aŭtomata kaj eksplicita datum-ĝustigo</li>
                                    <li><strong>Fleksebla Reshapado</strong> - Pivot-tabeloj, fandado kaj hierarkia
                                        indeksado
                                    </li>
                                    <li><strong>Temposera Funkcieco</strong> - Datum-intervala generado, frekvenca
                                        konverto, movanta fenestra statistiko
                                    </li>
                                    <li><strong>Potencaj I/O-Iloj</strong> - Legado/skribado el CSV, Excel, datumbazoj,
                                        kaj pli
                                    </li>
                                    <li><strong>Mankantaj Datumoj</strong> - Kompleta pritraktado de mankantaj datumoj
                                    </li>
                                    <li><strong>GroupBy-Operacioj</strong> - Dividu-apliku-kunigu operacioj sur
                                        datum-aroj
                                    </li>
                                </ul>

                                <h3>Kernaj Datumstrukturoj</h3>
                                <p>
                                    Pandas provizas du ĉefajn datumstrukturojn kiuj faras datum-manipuladon intuicia:
                                </p>
                                <ul>
                                    <li><strong>Series</strong> - Unudimensia etikedita tabelo kapabla teni iun ajn
                                        datumtipon
                                    </li>
                                    <li><strong>DataFrame</strong> - Dudimensia etikedita datumstrukturo kun kolumnoj de
                                        eble malsamaj tipoj
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Vojaĝo kun Pandas -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#150458] mr-3"></i>
                                Mia Vojaĝo kun Pandas
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi komencis uzi Pandas en 2020 kiel parto de mia datuma analiza vojaĝo. Dum 4+
                                    jaroj,
                                    mi aplikis ĝin tra diversaj domajnoj inkluzive de negoca inteligenteco, financa
                                    analizo,
                                    kaj scienca esplorado. Mia sperto varias de simplaj datum-purigaj taskoj ĝis
                                    kompleksaj
                                    datum-transformaj pipeline-oj.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div
                                        class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-chart-line text-[#150458] mr-2"></i>
                                            Datum-Analizaj Projektoj
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Vasta sperto en esplora datum-analizo, statistika analizo,
                                            kaj kreado de datum-povigitaj komprenoj uzante Pandas por diversaj negocaj
                                            domajnoj.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-database text-purple-500 mr-2"></i>
                                            Datum-Pipeline Disvolviĝo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Konstruis fortikajn datum-prilaborajn pipeline-ojn por ETL-operacioj,
                                            datum-validadon, kaj transformajn laborkurzojn uzante Pandas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mia Sperto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#150458] mr-3"></i>
                                Mia Sperto kun Pandas
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kun 4+ jaroj da praktika sperto, mi majstris Pandas por diversaj datum-manipuladaj
                                    kaj analizaj taskoj tra malsamaj industrioj kaj projekto-tipoj.
                                </p>

                                <h3>Kernaj Kapabloj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Datuma purigado kaj antaŭprilaborado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Datuma transformado kaj manipulado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Temposera analizo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>GroupBy-operacioj kaj agregadoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Kunfandado kaj kunigo de datum-aroj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Pritraktado de mankantaj datumoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Efikeca optimumigo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Integriĝo kun vidigaj bibliotekoj</span>
                                    </div>
                                </div>

                                <h3>Teknika Stako</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">DataFrames</span>
                                    <span
                                        class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Series</span>
                                    <span
                                        class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">GroupBy</span>
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Pivot-Tabeloj</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Temposerioj</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">MultiIndex</span>
                                    <span
                                        class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Kunfandado/Kunigo</span>
                                    <span
                                        class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">I/O-Operacioj</span>
                                </div>

                                <h3>Majstritaj Kutimaj Operacioj</h3>
                                <ul>
                                    <li><strong>Datuma Purigado</strong> - Pritraktado de mankantaj valoroj, datumtipa
                                        konverto, ekstremvalora detekto
                                    </li>
                                    <li><strong>Datuma Transformado</strong> - Filtrado, ordigo, grupigo, agregaj
                                        operacioj
                                    </li>
                                    <li><strong>Temposera Analizo</strong> - Resamplado, rulantaj fenestroj,
                                        dato/tempo-operacioj
                                    </li>
                                    <li><strong>Datuma Integriĝo</strong> - Kunfandado de multoblaj datum-aroj,
                                        konkatenado, kunigoj
                                    </li>
                                    <li><strong>Efikeca Optimumigo</strong> - Vektorigitaj operacioj, metod-ĉenado,
                                        memora optimumigo
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Realmondaj Aplikoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-bar text-[#150458] mr-3"></i>
                                Realmondaj Aplikoj
                            </h2>
                            <div class="content-section">
                                <h3>Negoca Inteligenteco</h3>
                                <p>
                                    Uzis Pandas extensive por negoca analitiko, inkluzive de venda analizo, klienta
                                    segmentado,
                                    kaj performancaj metrikaj kalkuloj. Kreis aŭtomatajn raportadajn sistemojn kiuj
                                    prilaboras krudajn datumojn
                                    kaj generas agindajn komprenojn.
                                </p>

                                <h3>Financa Analizo</h3>
                                <p>
                                    Aplikis Pandas por financa datum-analizo inkluzive de stock-preza analizo, portfolia
                                    optimumigo,
                                    riska takso, kaj temposera prognozado. Efektivigis kompleksajn financajn kalkulojn
                                    kaj
                                    performancajn metrikojn.
                                </p>

                                <h3>Scienca Esplorado</h3>
                                <p>
                                    Utiligis Pandas por prilaborado kaj analizado de sciencaj datumoj, inkluzive de
                                    eksperimentaj rezultoj,
                                    sensordatumoj, kaj esploraj datum-aroj. Kreis reprodukteblajn analizajn laborkurzojn
                                    por akademia esplorado.
                                </p>

                                <h3>Datum-Pipeline Disvolviĝo</h3>
                                <p>
                                    Konstruis fortikajn ETL-pipeline-ojn uzante Pandas por datum-validado, transformado,
                                    kaj ŝarĝaj operacioj.
                                    Integris kun diversaj datum-fontoj inkluzive de datumbazoj, API-oj, kaj
                                    dosiersistemoj.
                                </p>
                            </div>
                        </div>

                        <!-- Efikeco & Optimumigo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-tachometer-alt text-[#150458] mr-3"></i>
                                Efikeco & Optimumigo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi havas vastan sperton optimumigi Pandas-operaciojn por efikeco kaj memora efikeco:
                                </p>
                                <ul>
                                    <li><strong>Vektorigitaj Operacioj</strong> - Utiligado de NumPy-bazitaj operacioj
                                        por maksimuma efikeco
                                    </li>
                                    <li><strong>Metoda Ĉenado</strong> - Skribado de efika kaj legebla kodo uzante
                                        metod-ĉenadon
                                    </li>
                                    <li><strong>Memora Optimumigo</strong> - Uzado de taŭgaj datumtipoj por redukti
                                        memoruzadon
                                    </li>
                                    <li><strong>Paralela Prilaborado</strong> - Efektivigado de multipla prilaborado por
                                        grandaj datum-aroj
                                    </li>
                                    <li><strong>Kategoriaj Datumoj</strong> - Uzado de kategoriaj datumtipoj por memora
                                        efikeco
                                    </li>
                                    <li><strong>Mendo-Optimumigo</strong> - Skribado de efikaj mendoj kaj filtriloj</li>
                                </ul>

                                <h3>Altnivelaj Teknikoj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#150458] mb-2">Propraj Funkcioj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kreado kaj aplikado de propraj funkcioj kun apply(), map(), kaj vectorize()
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#150458] mb-2">Fenestraj Operacioj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Efektivigado de rulantaj, vastiĝantaj kaj eksponentaj fenestraj operacioj
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#150458] mb-2">MultiIndex</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Laboro kun hierarkiaj indeksoj por kompleksaj datumstrukturoj
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#150458] mb-2">Memora Administrado</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Optimumigado de datumtipoj kaj uzado de maldensaj datumstrukturoj
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Projektoj sur GitHub -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fab fa-github text-[#150458] mr-3"></i>
                                Projektoj sur GitHub
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kelkaj el miaj Pandas-projektoj troveblas sur GitHub:
                                </p>
                                <div class="mt-4">
                                    <a href="https://github.com/SirAndrewGotham" target="_blank"
                                       class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                        <i class="fab fa-github mr-2"></i>
                                        <span>SirAndrewGotham sur GitHub</span>
                                    </a>
                                </div>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Mi daŭre laboras pri datum-analizaj projektoj kiuj pruvas praktikajn aplikojn
                                    de Pandas por realmondaj problemoj kaj datum-aroj.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Flanka Strio -->
                    <div class="space-y-6">
                        <!-- Kompetenteca Karto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#150458] mr-2"></i>
                                Nivelo de Kompetenteco
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Ĝenerala Kompetenteco</span>
                                        <span class="text-sm font-bold text-[#150458]">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div
                                            class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#150458] to-[#2D5B8F]"
                                            data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Datuma Manipulado</span>
                                        <span class="text-sm font-bold text-green-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Temposera Analizo</span>
                                        <span class="text-sm font-bold text-blue-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Efikeca Optimumigo</span>
                                        <span class="text-sm font-bold text-purple-500">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Datuma Integriĝo</span>
                                        <span class="text-sm font-bold text-red-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="82%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#150458] mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#150458] w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#150458] w-5 mr-3"></i>
                                    <span class="text-sm">Versio: <strong>Pandas 2.1+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#150458] w-5 mr-3"></i>
                                    <span class="text-sm">Projektoj: <strong>25+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-database text-[#150458] w-5 mr-3"></i>
                                    <span class="text-sm">Datum-fontoj: <strong>CSV, Excel, SQL, JSON</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-rocket text-[#150458] w-5 mr-3"></i>
                                    <span class="text-sm">Statuso: <strong>Aktiva Disvolviĝo</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Lernada Vojo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-[#150458] mr-2"></i>
                                Lernada Vojo
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Bazaj DataFrame-operacioj</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Datuma purigado kaj antaŭprilaborado</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">GroupBy kaj agregado</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Temposera analizo</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-spinner text-xs"></i>
                                    </div>
                                    <span class="text-sm">Altnivela efikeca optimumigo</span>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Propraj etendaĵoj kaj kromaĵoj</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#150458] mr-2"></i>
                                Rilataj Kompetentoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/python"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-python text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#150458] transition-colors">Python
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                </a>
                                <a href="/competences/numpy"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-cube text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#150458] transition-colors">NumPy
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                </a>
                                <a href="/competences/matplotlib"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-chart-area text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#150458] transition-colors">
                                            Matplotlib
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                </a>
                                <a href="/competences/sql"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-database text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#150458] transition-colors">SQL</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#150458] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div
                            class="bg-gradient-to-r from-[#150458] to-[#2D5B8F] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu interesata pri kunlaboro?</h3>
                            <p class="text-sm mb-4">Preta diskuti vian datum-analizan projekton</p>
                            <a href="/contact"
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#150458] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
    <main class="w-full pt-20">
        <!-- Paneroj -->
        <section class="py-6 bg-gray-50 dark:bg-gray-800/30 border-b border-gray-200 dark:border-gray-700">
            <div class="fluid-container">
                <nav class="flex fade-in" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="/"
                               class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences"
                                   class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Kompetentoj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences/data-science"
                                   class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Data Science
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        NumPy
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
                            <div
                                class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4D77CB] to-[#2D5B8F] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-calculator text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 numpy-gradient">NumPy</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span
                                            class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-rocket mr-1"></i>
                                            Alta Efikeco
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Fundamenta pakaĵo por scienca komputado kun Python.
                                Provizas potencajn N-dimensiajn aranĝojn kaj matematikajn funkciojn.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#4D77CB] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#4D77CB] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#4D77CB] mr-3">
                                        <i class="fas fa-microchip"></i>
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
                            <!-- Pri NumPy -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#4D77CB] mr-3"></i>
                                    Pri NumPy
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>NumPy</strong> estas la fundamenta pakaĵo por scienca komputado en
                                        Python.
                                        Ĝi provizas potencan N-dimensian aranĝobjekton, altnivelajn dissend-funkciojn,
                                        ilojn por integri C/C++ kaj Fortran-kodon, kaj utilajn linearan algebron,
                                        Fourier-transformon,
                                        kaj hazard-nombrajn kapablojn.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>N-dimensia Aranĝo</strong> - Potenca datumstrukturo por numeraj
                                            kalkuloj
                                        </li>
                                        <li><strong>Vektorigitaj Operacioj</strong> - Rapidaj element-specifaj operacioj
                                            sen Python-cikloj
                                        </li>
                                        <li><strong>Dissendo</strong> - Inteligenta pritraktado de aranĝoj kun malsamaj
                                            formoj
                                        </li>
                                        <li><strong>Lineara Algebro</strong> - Kompleksaj linearaj algebraj operacioj
                                        </li>
                                        <li><strong>Matematikaj Funkcioj</strong> - Vasta kolekto de matematikaj
                                            operacioj
                                        </li>
                                        <li><strong>Memora Efikeco</strong> - Optimumigita memoruzado por grandaj
                                            aranĝoj
                                        </li>
                                        <li><strong>Interfunkciebleco</strong> - Fundamento por multaj sciencaj
                                            Python-bibliotekoj
                                        </li>
                                    </ul>

                                    <h3>Kernaj Trajtoj</h3>
                                    <p>
                                        La ĉefa funkcieco de NumPy centriĝas ĉirkaŭ la ndarray-objekto kaj ĝiaj
                                        asociitaj operacioj:
                                    </p>
                                    <ul>
                                        <li><strong>ndarray</strong> - Multdimensia homogena aranĝo kun fiks-grandaj
                                            eroj
                                        </li>
                                        <li><strong>Datumtipoj</strong> - Riĉa aro de numeraj datumtipoj (int, float,
                                            complex, ktp.)
                                        </li>
                                        <li><strong>Indeksado & Tranĉado</strong> - Potencaj aranĝaj indeksado kaj
                                            tranĉado kapabloj
                                        </li>
                                        <li><strong>Universalaj Funkcioj</strong> - Rapidaj element-specifaj aranĝaj
                                            funkcioj (ufuncs)
                                        </li>
                                        <li><strong>Aranĝa Manipulado</strong> - Reshapado, kunigo, dividado de aranĝoj
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun NumPy -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#4D77CB] mr-3"></i>
                                    Mia Vojaĝo kun NumPy
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi NumPy en 2020 kiel la fundamenton por mia datuma scienco kaj
                                        scienca komputada laboro.
                                        Dum 4+ jaroj, mi aplikis ĝin tra diversaj domajnoj inkluzive de maŝina lernado,
                                        numeraj simulacioj, kaj datumaj analizaj pipeline-oj. Mia sperto varias de bazaj
                                        aranĝaj
                                        operacioj ĝis altnivelaj numeraj kalkuloj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div
                                            class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-cube text-[#4D77CB] mr-2"></i>
                                                Scienca Komputado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vasta sperto uzante NumPy por numeraj simulacioj,
                                                matematika modelado, kaj sciencaj kalkuloj tra diversaj domajnoj.
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-brain text-purple-500 mr-2"></i>
                                                Maŝina Lernada Fundamento
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Uzis NumPy kiel la komputadan spinon por efektivigi maŝin-lernajn
                                                algoritmojn
                                                kaj neŭrajn retojn de nulo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#4D77CB] mr-3"></i>
                                    Mia Sperto kun NumPy
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 4+ jaroj da praktika sperto, mi majstris NumPy por diversaj numeraj
                                        komputadaj
                                        taskoj kaj integris ĝin kun aliaj sciencaj Python-bibliotekoj.
                                    </p>

                                    <h3>Kernaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aranĝa kreado kaj manipulado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vektorigitaj operacioj kaj dissendo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Linearaj algebraj operacioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Matematikaj kaj statistikaj funkcioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aranĝa indeksado kaj tranĉado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Memora optimumigo kaj efikeco</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Hazarda nombra generado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integriĝo kun aliaj bibliotekoj</span>
                                        </div>
                                    </div>

                                    <h3>Teknika Stako</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span
                                            class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">ndarray</span>
                                        <span
                                            class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Dissendo</span>
                                        <span
                                            class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Lineara Algebro</span>
                                        <span
                                            class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Ufuncs</span>
                                        <span
                                            class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Indeksado</span>
                                        <span
                                            class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Hazarda</span>
                                        <span
                                            class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Fourier</span>
                                        <span
                                            class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">I/O</span>
                                    </div>

                                    <h3>Majstritaj Altnivelaj Operacioj</h3>
                                    <ul>
                                        <li><strong>Aranĝa Dissendo</strong> - Inteligenta pritraktado de operacioj
                                            inter aranĝoj de malsamaj formoj
                                        </li>
                                        <li><strong>Strukturitaj Aranĝoj</strong> - Laboro kun kompleksaj datumtipoj kaj
                                            rekordaj aranĝoj
                                        </li>
                                        <li><strong>Memora Mapado</strong> - Prilaborado de aranĝoj tro grandaj por
                                            enmemoriĝi
                                        </li>
                                        <li><strong>Propraj ufuncs</strong> - Kreado de propraj universalaj funkcioj por
                                            specialigitaj operacioj
                                        </li>
                                        <li><strong>Efikeca Optimumigo</strong> - Uzado de C API de NumPy kaj
                                            optimumigaj teknikoj
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Matematikaj Operacioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-square-root-alt text-[#4D77CB] mr-3"></i>
                                    Matematikaj Operacioj
                                </h2>
                                <div class="content-section">
                                    <h3>Lineara Algebro</h3>
                                    <p>
                                        Vasta sperto kun la linearaj algebraj kapabloj de NumPy inkluzive:
                                    </p>
                                    <ul>
                                        <li>Matricaj operacioj (multipliko, inversigo, malkomponaĵo)</li>
                                        <li>Eigen-valoraj kaj eigen-vektoraj kalkuloj</li>
                                        <li>Solvado de linearaj sistemoj de ekvacioj</li>
                                        <li>Singulara Valora Malkomponaĵo (SVD)</li>
                                        <li>QR-malkomponaĵo kaj Cholesky-malkomponaĵo</li>
                                    </ul>

                                    <h3>Statistikaj Funkcioj</h3>
                                    <p>
                                        Majstrado de statistikaj operacioj por datuma analizo:
                                    </p>
                                    <ul>
                                        <li>Priskriba statistiko (meznombro, mediano, std, varianco)</li>
                                        <li>Korelaciaj kaj kunvariancaj kalkuloj</li>
                                        <li>Histograma komputado kaj binado</li>
                                        <li>Percentilaj kaj kvantilaj kalkuloj</li>
                                        <li>Hazarda specimenado kaj probablaj distribuaĵoj</li>
                                    </ul>

                                    <h3>Fourier-Transformoj</h3>
                                    <p>
                                        Sperto pri signala prilaborado uzante NumPy:
                                    </p>
                                    <ul>
                                        <li>Rapidaj Fourier-Transformaj (FFT) kalkuloj</li>
                                        <li>Frekvenca domajna analizo</li>
                                        <li>Signala filtriĝo kaj konvoluciaj operacioj</li>
                                        <li>Spektra analizo kaj potenca spektra denseco</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Efikeco & Optimumigo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#4D77CB] mr-3"></i>
                                    Efikeco & Optimumigo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi havas vastan sperton optimumigi NumPy-operaciojn por maksimuma efikeco:
                                    </p>
                                    <ul>
                                        <li><strong>Vektorigo</strong> - Anstataŭigo de Python-cikloj per vektorigitaj
                                            operacioj
                                        </li>
                                        <li><strong>Memora Aranĝo</strong> - Kompreno kaj optimumigo de aranĝa memora
                                            aranĝo (C vs Fortran ordo)
                                        </li>
                                        <li><strong>Lokaj Operacioj</strong> - Uzado de lokaj operacioj por redukti
                                            memoran asignadon
                                        </li>
                                        <li><strong>Datumtipoj</strong> - Elekto de optimumaj datumtipoj por memoro kaj
                                            efikeco
                                        </li>
                                        <li><strong>Dissendaj Reguloj</strong> - Utiligado de dissendo por efikaj
                                            kalkuloj
                                        </li>
                                        <li><strong>Einsum</strong> - Uzado de Einstein-sumada konvencio por kompleksaj
                                            operacioj
                                        </li>
                                    </ul>

                                    <h3>Altnivelaj Teknikoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#4D77CB] mb-2">Paŝaj Artifikaĵoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Uzado de as_strided kaj stride_tricks por altnivelaj aranĝaj manipuladoj
                                                sen memora duplikato
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#4D77CB] mb-2">Memora Mapado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Laboro kun memore mapitaj aranĝoj por ekster-kernaj kalkuloj
                                                sur grandaj datum-aroj
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#4D77CB] mb-2">Propraj dtypes</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreado de propraj datumtipoj por specialigitaj numeraj kalkuloj
                                                kaj strukturitaj datumoj
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#4D77CB] mb-2">Aranĝaj Vidaĵoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efika laboro kun aranĝaj vidaĵoj kaj kompreno kiam
                                                kopioj estas kreitaj
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Integriĝo kun Ekosistemo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-project-diagram text-[#4D77CB] mr-3"></i>
                                    Integriĝo kun Python Ekosistemo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        NumPy servas kiel la fundamento por multaj sciencaj Python-bibliotekoj, kaj mi
                                        havas sperton
                                        integri ĝin kun:
                                    </p>

                                    <h3>Datuma Analizo</h3>
                                    <ul>
                                        <li><strong>Pandas</strong> - NumPy-aranĝoj kiel la subkuŝanta datumstrukturo
                                        </li>
                                        <li><strong>SciPy</strong> - Konstruado sur NumPy por altnivelaj sciencaj
                                            kalkuloj
                                        </li>
                                        <li><strong>Matplotlib</strong> - Uzado de NumPy-aranĝoj por datuma vidigo</li>
                                    </ul>

                                    <h3>Maŝina Lernado</h3>
                                    <ul>
                                        <li><strong>Scikit-learn</strong> - NumPy-aranĝoj por trajto-matricoj kaj
                                            cel-vektoroj
                                        </li>
                                        <li><strong>TensorFlow/PyTorch</strong> - Interfunkciebleco kun NumPy-aranĝoj
                                        </li>
                                        <li><strong>Keras</strong> - Uzado de NumPy-aranĝoj por trejnadaj datumoj</li>
                                    </ul>

                                    <h3>Specialigitaj Bibliotekoj</h3>
                                    <ul>
                                        <li><strong>OpenCV</strong> - Bilda prilaborado kun NumPy-aranĝoj</li>
                                        <li><strong>Astropy</strong> - Astronomia datuma analizo</li>
                                        <li><strong>NetworkX</strong> - Grafaj algoritmoj kun apudecaj matricoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Projektoj sur GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#4D77CB] mr-3"></i>
                                    Projektoj sur GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj NumPy-projektoj troveblas sur GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank"
                                           class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham sur GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mi daŭre laboras pri sciencaj komputadaj projektoj kiuj pruvas praktikajn
                                        aplikojn
                                        de NumPy por numera analizo, simulacioj, kaj datum-prilaborado.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flanka Strio -->
                        <div class="space-y-6">
                            <!-- Kompetenteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#4D77CB] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#4D77CB]">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div
                                                class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4D77CB] to-[#2D5B8F]"
                                                data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Aranĝaj Operacioj</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Lineara Algebro</span>
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
                                            <span class="text-sm font-bold text-purple-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Matematikaj Funkcioj</span>
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
                                    <i class="fas fa-lightbulb text-[#4D77CB] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#4D77CB] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#4D77CB] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>NumPy 1.24+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#4D77CB] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cube text-[#4D77CB] w-5 mr-3"></i>
                                        <span class="text-sm">Dimensioj: <strong>Ĝis N-dimensiaj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#4D77CB] w-5 mr-3"></i>
                                        <span class="text-sm">Efikeco: <strong>C-optimumigita</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Lernada Vojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#4D77CB] mr-2"></i>
                                    Lernada Vojo
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Bazaj aranĝaj operacioj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Indeksado kaj tranĉado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Vektorigitaj operacioj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Dissendaj reguloj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Altnivela lineara algebro</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">C API integriĝo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#4D77CB] mr-2"></i>
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
                                            <div class="font-medium group-hover:text-[#4D77CB] transition-colors">
                                                Python
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pandas"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-table text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4D77CB] transition-colors">
                                                Pandas
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                    </a>
                                    <a href="/competences/matplotlib"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-area text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4D77CB] transition-colors">
                                                Matplotlib
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                    </a>
                                    <a href="/competences/scipy"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flask text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4D77CB] transition-colors">
                                                SciPy
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">65% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4D77CB] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div
                                class="bg-gradient-to-r from-[#4D77CB] to-[#2D5B8F] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesata pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Preta diskuti vian sciencan komputadan projekton</p>
                                <a href="/contact"
                                   class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#4D77CB] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
                                    Datuma Scienco
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Scikit-learn
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div
                                class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#F7931E] to-[#FFB347] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-brain text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 sklearn-gradient">
                                    Scikit-learn</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span
                                            class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-robot mr-1"></i>
                                            Maŝina Lernado
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Simplaj kaj efikaj iloj por antaŭdira datum-analizo.
                                Konstruita sur NumPy, SciPy, kaj matplotlib por maŝina lernado en Python.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-[#F7931E] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">70%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficia Nivelo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#F7931E] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#F7931E] mr-3">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.3+</div>
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
                            <!-- Pri Scikit-learn -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#F7931E] mr-3"></i>
                                    Pri Scikit-learn
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Scikit-learn</strong> estas libera maŝinlerna biblioteko por
                                        Python.
                                        Ĝi inkluzivas diversajn klasifikajn, regresiajn kaj grupig-algoritmojn
                                        inkluzive
                                        subten-vektorajn maŝinojn, hazardajn arbarojn, gradientan plibonigon, k-mezn kaj DBSCAN,
                                        kaj estas desegnita por interagadi kun la Python-numeraj kaj sciencaj
                                        bibliotekoj NumPy kaj SciPy.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Simpla & Konsista API</strong> - Facila por lerni kaj uzi tra
                                            malsamaj algoritmoj
                                        </li>
                                        <li><strong>Kompleta Dokumentado</strong> - Etendaj ekzemploj kaj
                                            lerniloj
                                        </li>
                                        <li><strong>Konstruita sur NumPy/SciPy</strong> - Efikaj numeraj kalkuloj
                                        </li>
                                        <li><strong>Malfermita Kodo</strong> - Komerce uzebla sub BSD-permesilo</li>
                                        <li><strong>Vasta Algoritma Kovrado</strong> - Klasifikado, regresio,
                                            grupigo, dimensia redukto
                                        </li>
                                        <li><strong>Modela Taksado</strong> - Kompletaj iloj por modela validigo
                                            kaj elekto
                                        </li>
                                        <li><strong>Datum-Pretaŭtraktado</strong> - Trajta eltirado, normaligo kaj
                                            transformo
                                        </li>
                                    </ul>

                                    <h3>Kernaj Trajtoj</h3>
                                    <p>
                                        Scikit-learn provizas ilojn por la tuta maŝinlerna laborfluo:
                                    </p>
                                    <ul>
                                        <li><strong>Klasifikado</strong> - Identigado de kiu kategorio apartenas objekto
                                        </li>
                                        <li><strong>Regresio</strong> - Antaŭdiro de kontinua-valora atributo</li>
                                        <li><strong>Grupigo</strong> - Aŭtomata grupigo de similaj objektoj</li>
                                        <li><strong>Dimensia Redukto</strong> - Reduktado de la nombro de hazardaj
                                            variabloj
                                        </li>
                                        <li><strong>Modela Elekto</strong> - Komparado, validigado kaj elekto de
                                            parametroj
                                        </li>
                                        <li><strong>Pretraktado</strong> - Trajta eltirado kaj normaligo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Scikit-learn -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#F7931E] mr-3"></i>
                                    Mia Vojaĝo kun Scikit-learn
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Scikit-learn en 2021 kiel mian ĉefan maŝinlernan bibliotekon por
                                        Python-projektoj.
                                        Dum 3+ jaroj, mi aplikis ĝin tra diversaj domajnoj inkluzive antaŭdira modelado,
                                        klienta segmentado, kaj anomalio-detectado. Mia sperto varias de simplaj
                                        klasifikaj
                                        taskoj al kompleksaj ensemblop metodoj kaj hiperparametra optimumigo.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div
                                            class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-chart-line text-[#F7931E] mr-2"></i>
                                                Antaŭdira Modelado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vasta sperto konstruante kaj efektivigante antaŭdirajn modelojn
                                                por klasifikaj kaj regresiaj taskoj tra diversaj komercaj domajnoj.
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-purple-500 mr-2"></i>
                                                Klienta Analitiko
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Aplikis grupig-algoritmojn por klienta segmentado
                                                kaj rekomend-sistemoj por e-komercaj aplikaĵoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#F7931E] mr-3"></i>
                                    Mia Sperto kun Scikit-learn
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 3+ jaroj da praktika sperto, mi majstris Scikit-learn por diversaj
                                        maŝinlernaj taskoj kaj integris ĝin kun la pli vasta Python-datuma scienca
                                        ekosistemo.
                                    </p>

                                    <h3>Kernaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Klasifikaj algoritmoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Regresiaj modeloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Grupigaj teknikoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Modela taksado kaj validigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Trajta inĝenierado kaj elekto</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Hiperparametra agordado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kreado de pipelinoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kruc-validigaj strategioj</span>
                                        </div>
                                    </div>

                                    <h3>Algoritma Eksperteco</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span
                                            class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Hazarda Arbaro</span>
                                        <span
                                            class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">SVM</span>
                                        <span
                                            class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">K-mezn</span>
                                        <span
                                            class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Linearaj Modeloj</span>
                                        <span
                                            class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">XGBoost</span>
                                        <span
                                            class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">PCA</span>
                                        <span
                                            class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">KNN</span>
                                        <span
                                            class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Krada Serĉo</span>
                                    </div>

                                    <h3>Maŝinlernea Laborfluo</h3>
                                    <ul>
                                        <li><strong>Datum-Pretraktado</strong> - Traktado de mankantaj valoroj, kodado
                                            de kategoriaj variabloj, trajta skalo
                                        </li>
                                        <li><strong>Trajta Inĝenierado</strong> - Kreado de novaj trajtoj, polinomaj trajtoj, interagaj termoj
                                        </li>
                                        <li><strong>Modela Trejnado</strong> - Trejnado de diversaj algoritmoj kun taŭga
                                            validigo
                                        </li>
                                        <li><strong>Modela Taksado</strong> - Uzado de taŭgaj metrikoj por malsamaj
                                            problem-tipoj
                                        </li>
                                        <li><strong>Hiperparametra Optimumigo</strong> - Krada serĉo, hazarda serĉo,
                                            kaj Bajezia optimumigo
                                        </li>
                                        <li><strong>Modela Efektivigo</strong> - Konservado kaj ŝargado de modeloj por produktado
                                            uzo
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Algoritmaj Kategorioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#F7931E] mr-3"></i>
                                    Algoritmaj Kategorioj
                                </h2>
                                <div class="content-section">
                                    <h3>Supervizita Lernado</h3>
                                    <p>
                                        Vasta sperto kun klasifikaj kaj regresiaj algoritmoj:
                                    </p>
                                    <ul>
                                        <li><strong>Linearaj Modeloj</strong> - Logistika regresio, lineara regresio,
                                            ridge, lasso
                                        </li>
                                        <li><strong>Subten-Vektoraj Maŝinoj</strong> - Klasifikado kaj regresio
                                            kun malsamaj kernoj
                                        </li>
                                        <li><strong>Arb-bazitaj Metodoj</strong> - Decidaj arboj, hazardaj arbaroj,
                                            gradia plibonigo
                                        </li>
                                        <li><strong>Naiva Bajeso</strong> - Gausaj, multinomaj, kaj Bernoulli-variantoj
                                        </li>
                                        <li><strong>K-Plej Proksimaj Najbaroj</strong> - Klasifikado kaj regresio</li>
                                        <li><strong>Neŭralaj Retoj</strong> - Mult-tavola perceptrono por klasifikado kaj
                                            regresio
                                        </li>
                                    </ul>

                                    <h3>Nesupervizita Lernado</h3>
                                    <p>
                                        Sperto kun grupigo kaj dimensia redukto:
                                    </p>
                                    <ul>
                                        <li><strong>Grupigo</strong> - K-mezn, DBSCAN, hierarkia grupigo,
                                            Gausaj miksajoj
                                        </li>
                                        <li><strong>Dimensia Redukto</strong> - PCA, t-SNE, UMAP, trajto-elektaj metodoj
                                        </li>
                                        <li><strong>Anomalio-Detectado</strong> - Izola arbaro, loka outlier-faktoro
                                        </li>
                                        <li><strong>Denseco-Taksado</strong> - Kern-denseca taksado</li>
                                    </ul>

                                    <h3>Modela Elekto & Taksado</h3>
                                    <p>
                                        Majstritaj teknikoj por modela validigo kaj elekto:
                                    </p>
                                    <ul>
                                        <li>Kruc-validigaj strategioj (k-faldo, stratigita, temposerio)</li>
                                        <li>Hiperparametra agordado (krada serĉo, hazarda serĉo)</li>
                                        <li>Efikec-metrikoj (precizeco, precizeco, memorado, F1, ROC-AUC)</li>
                                        <li>Lernado-kurboj kaj validigo-kurboj</li>
                                        <li>Trajta graveco-analizo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Trajta Inĝenierado & Pretraktado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#F7931E] mr-3"></i>
                                    Trajta Inĝenierado & Pretraktado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi havas vastan sperton kun Scikit-learn-aj pretraktadaj kaj trajt-inĝenieraj
                                        kapabloj:
                                    </p>

                                    <h3>Datum-Pretraktado</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Skalado & Normaligo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                StandardScaler, MinMaxScaler, RobustScaler,
                                                kaj normaligaj teknikoj por malsamaj datum-distribuoj
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Kodado de Kategoriaj
                                                Variabloj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                OneHotEncoder, LabelEncoder, OrdinalEncoder
                                                por traktado de kategoriaj trajtoj
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Traktado de Mankantaj Valoroj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                SimpleImputer, KNNImputer por malsamaj
                                                strategioj pri mankantaj datumoj
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Trajta Transformado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                PolynomialFeatures, FunctionTransformer
                                                por krei novajn trajtojn
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Pipelinoj & Laborfluo</h3>
                                    <p>
                                        Sperto konstruantaj robustajn maŝinlernajn pipelinojn:
                                    </p>
                                    <ul>
                                        <li><strong>Pipelina Kreado</strong> - Ĉenado de pretraktadaj kaj modeligaj
                                            paŝoj
                                        </li>
                                        <li><strong>ColumnTransformer</strong> - Aplikado de malsamaj transformoj al
                                            malsamaj kolumnoj
                                        </li>
                                        <li><strong>FeatureUnion</strong> - Kombinado de multoblaj trajto-eltiradaj
                                            metodoj
                                        </li>
                                        <li><strong>Propraj Transformiloj</strong> - Kreado de propraj pretraktadaj paŝoj
                                        </li>
                                        <li><strong>Modela Persisto</strong> - Konservado kaj ŝargado de tutaj pipelinoj
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Real-mondaj Aplikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-chart-bar text-[#F7931E] mr-3"></i>
                                    Real-mondaj Aplikoj
                                </h2>
                                <div class="content-section">
                                    <h3>Komeraj Aplikoj</h3>
                                    <p>
                                        Aplikis Scikit-learn por solvi realajn komercajn problemojn tra diversaj domajnoj:
                                    </p>
                                    <ul>
                                        <li><strong>Antaŭdiro de Klienta Foriro</strong> - Klasifikaj modeloj por
                                            antaŭdiri klientan atrition
                                        </li>
                                        <li><strong>Vendo-Prognozo</strong> - Temposerioj kaj regresiaj modeloj por
                                            postulo-antavido
                                        </li>
                                        <li><strong>Kredito-Riska Taksado</strong> - Klasifikado por prunto-aprobaj
                                            decidoj
                                        </li>
                                        <li><strong>Klienta Segmentado</strong> - Grupigo por merkatada strategio
                                            evoluigo
                                        </li>
                                        <li><strong>Rekomend-Sistemoj</strong> - Kunlabora filtrado kaj
                                            enhavo-bazitaj rekomendoj
                                        </li>
                                        <li><strong>Frodo-Detectado</strong> - Anomalio-detectado por financaj
                                            transakcioj
                                        </li>
                                    </ul>

                                    <h3>Industriaj Projektoj</h3>
                                    <ul>
                                        <li><strong>E-komerco</strong> - Produkta rekomendo kaj antaŭdiro de vivdaŭra valoro de kliento
                                        </li>
                                        <li><strong>Sanservo</strong> - Malsano-antavido kaj risko de repreno de paciento
                                        </li>
                                        <li><strong>Financo</strong> - Stock-prezo-antavido kaj portfolia optimumigo
                                        </li>
                                        <li><strong>Merkatado</strong> - Klienta segmentado kaj kampanja optimumigo
                                        </li>
                                        <li><strong>Manufacturado</strong> - Antaŭdira prizorgado kaj kvalito-kontrolo
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Modela Taksado & Optimumigo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#F7931E] mr-3"></i>
                                    Modela Taksado & Optimumigo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi havas vastan sperton kun modelaj taksadoj kaj hiperparametraj optimumigaj
                                        teknikoj:
                                    </p>

                                    <h3>Taksadaj Metrikoj</h3>
                                    <ul>
                                        <li><strong>Klasifikado</strong> - Precizeco, precizeco, memorado, F1-poentaro,
                                            ROC-AUC, konfuz-matrico
                                        </li>
                                        <li><strong>Regresio</strong> - MAE, MSE, RMSE, R², klarigita varianco</li>
                                        <li><strong>Grupigo</strong> - Silueta poentaro, Calinski-Harabasz-indekso,
                                            Davies-Bouldin-indekso
                                        </li>
                                        <li><strong>Kruc-validigo</strong> - K-faldo, stratigita, temposerio, kaj
                                            grupigita kruc-validigo
                                        </li>
                                    </ul>

                                    <h3>Hiperparametra Optimumigo</h3>
                                    <ul>
                                        <li><strong>GridSearchCV</strong> - Ĉerpa serĉo super specifitaj parametraj
                                            valoroj
                                        </li>
                                        <li><strong>RandomizedSearchCV</strong> - Hazarda serĉo super parametraj
                                            distribuoj
                                        </li>
                                        <li><strong>Bajezia Optimumigo</strong> - Uzante scikit-optimize kaj Optuna
                                            integriĝo
                                        </li>
                                        <li><strong>Lernado-Kurboj</strong> - Diagnozado de bias-varianca komerco</li>
                                        <li><strong>Validigo-Kurboj</strong> - Agordado de individuaj hiperparametroj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- GitHub-Projektoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#F7931E] mr-3"></i>
                                    Projektoj sur GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj Scikit-learn maŝinlernaj projektoj troveblas sur GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank"
                                           class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham sur GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mi daŭre laboras pri maŝinlernaj projektoj kiuj pruvas praktikajn aplikaĵojn
                                        de Scikit-learn por klasifikado, regresio, grupigo, kaj aliaj ML-taskoj.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Proficia Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#F7931E] mr-2"></i>
                                    Proficia Nivelo
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Proficio</span>
                                            <span class="text-sm font-bold text-[#F7931E]">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div
                                                class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#F7931E] to-[#FFB347]"
                                                data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Klasifikado</span>
                                            <span class="text-sm font-bold text-green-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="75%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Regresio</span>
                                            <span class="text-sm font-bold text-blue-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="72%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Grupigo</span>
                                            <span class="text-sm font-bold text-purple-500">68%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="68%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Modela Taksado</span>
                                            <span class="text-sm font-bold text-red-500">73%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="73%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#F7931E] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Scikit-learn 1.3+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cogs text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Algoritmoj: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Statuso: <strong>Aktiva Lernado</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Lernado-Vojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#F7931E] mr-2"></i>
                                    Lernado-Vojo
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Baza klasifikado & regresio</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Modelaj taksad-metrikoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Trajta pretraktado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Grupigaj algoritmoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Ensemblop metodoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Neŭrala reto-integriĝo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#F7931E] mr-2"></i>
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
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                Python
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pandas"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-table text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                Pandas
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                    <a href="/competences/numpy"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#4D77CB] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-calculator text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                NumPy
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                    <a href="/competences/matplotlib"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#11557C] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-line text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                Matplotlib
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficienteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div
                                class="bg-gradient-to-r from-[#F7931E] to-[#FFB347] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesita pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Preta diskuti vian maŝinlernan projekton</p>
                                <a href="/contact"
                                   class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#F7931E] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

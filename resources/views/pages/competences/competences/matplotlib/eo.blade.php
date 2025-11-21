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
                                        Matplotlib
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-teal-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div
                                class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#11557C] to-[#2D5B8F] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-chart-line text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 matplotlib-gradient">
                                    Matplotlib</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span
                                            class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-palette mr-1"></i>
                                            Datuma Vizualigo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Kompleta biblioteko por datuma vizualigo en Python.
                                Kreu statikajn, animaciajn kaj interaktivajn vizualigojn kun publikeca kvalito.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#11557C] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#11557C] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#11557C] mr-3">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.7+</div>
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
                            <!-- Pri Matplotlib -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#11557C] mr-3"></i>
                                    Pri Matplotlib
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Matplotlib</strong> estas kompleta biblioteko por krei statikajn,
                                        animaciajn kaj interaktivajn
                                        vizualigojn en Python. Ĝi provizas MATLAB-similan interfacon kaj
                                        objekt-orientitan API por enkorpigi
                                        grafikaĵojn en aplikaĵojn uzante ĝeneralcelajn GUI-toolkit-ojn.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Publika Kvalito</strong> - Altkvalita eligo en diversaj formatoj
                                            (PDF, SVG, PNG, ktp.)
                                        </li>
                                        <li><strong>Agordebla</strong> - Plena kontrolo super ĉiu elemento de la
                                            grafikaĵo
                                        </li>
                                        <li><strong>Multoblaj Interfacoj</strong> - pyplot (MATLAB-stila) kaj
                                            objekt-orientita API
                                        </li>
                                        <li><strong>Vasta Gamo de Grafikaĵoj</strong> - Liniaj grafikaĵoj, disĵetaj
                                            grafikaĵoj, stangrafikaĵoj, histogramoj, ktp.
                                        </li>
                                        <li><strong>Interaktivaj Trajtoj</strong> - Zomi, panorami kaj agordi
                                            grafikaĵojn interaktive
                                        </li>
                                        <li><strong>Etendebla</strong> - Agordi ĉiun aspekton de grafikaĵoj kaj krei
                                            novajn tipojn de grafikaĵoj
                                        </li>
                                        <li><strong>Integriĝo</strong> - Senŝlime funkcias kun NumPy, Pandas kaj Jupyter
                                            kajeroj
                                        </li>
                                    </ul>

                                    <h3>Grafikaj Interfacoj</h3>
                                    <p>
                                        Matplotlib provizas plurajn manierojn krei vizualigojn:
                                    </p>
                                    <ul>
                                        <li><strong>pyplot Interfaco</strong> - MATLAB-stila stat-bazita interfaco por
                                            rapida grafikaĵado
                                        </li>
                                        <li><strong>Objekt-Orientita Interfaco</strong> - Pli da kontrolo kaj
                                            fleksebleco por kompleksaj grafikaĵoj
                                        </li>
                                        <li><strong>pylab Interfaco</strong> - Kombinas pyplot kaj NumPy (malpli
                                            rekomendata)
                                        </li>
                                        <li><strong>Skripta Tavolo</strong> - Rapida kaj facila grafikaĵado por esplora
                                            datuma analizo
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Matplotlib -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#11557C] mr-3"></i>
                                    Mia Vojaĝo kun Matplotlib
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Matplotlib en 2021 kiel mian ĉefan datuman vizualigan ilon por
                                        Python.
                                        Dum 3+ jaroj, mi kreis centojn da grafikaĵoj por datuma analizo, scienca
                                        esplorado,
                                        kaj negoca raportado. Mia sperto varias de rapidaj esploraj grafikaĵoj ĝis
                                        kompleksaj
                                        figuroj kun publikeca kvalito.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div
                                            class="bg-gradient-to-br from-blue-50 to-teal-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-chart-bar text-[#11557C] mr-2"></i>
                                                Datuma Analizo & Raportado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vasta sperto krei vizualigojn por datuma esplorado,
                                                analizaj raportoj, kaj negocaj inteligenco-tabeloj.
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-graduation-cap text-purple-500 mr-2"></i>
                                                Scienca Vizualigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreis publikec-kvalitajn figurojn por scienca esplorado,
                                                inkluzive kompleksajn mult-panelajn grafikaĵojn kaj specialigitajn
                                                vizualigojn.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#11557C] mr-3"></i>
                                    Mia Sperto kun Matplotlib
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 3+ jaroj da praktika sperto, mi majstris Matplotlib por diversaj
                                        datuman vizualigajn taskojn tra malsamaj domajnoj kaj projekto-tipoj.
                                    </p>

                                    <h3>Kernaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bazaj grafikaĵ-tipoj (linia, disĵeta, stanga, histogramo)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Agordado de grafikaĵaj estetikoj kaj stiloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Multoblaj subgrafikaĵoj kaj figura aranĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Anotaĵoj kaj tekstformatado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Koloraj mapoj kaj koloraj strioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Konservado de grafikaĵoj kaj eksportaj formatoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Interaktivaj grafikaĵaj trajtoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integriĝo kun Jupyter kajeroj</span>
                                        </div>
                                    </div>

                                    <h3>Majstritaj Grafikaĵ-Tipoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span
                                            class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Liniaj Grafikaĵoj</span>
                                        <span
                                            class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Disĵetaj Grafikaĵoj</span>
                                        <span
                                            class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Stangrafikaĵoj</span>
                                        <span
                                            class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Histogramoj</span>
                                        <span
                                            class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Tortaj Grafikaĵoj</span>
                                        <span
                                            class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Boksaj Grafikaĵoj</span>
                                        <span
                                            class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Varmaj Mapoj</span>
                                        <span
                                            class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Konturaj Grafikaĵoj</span>
                                    </div>

                                    <h3>Altanivelaj Trajtoj</h3>
                                    <ul>
                                        <li><strong>Propraj Stiloj</strong> - Kreado kaj aplikado de propraj grafikaĵaj
                                            stiloj kaj rcParams
                                        </li>
                                        <li><strong>Animacio</strong> - Kreado de animaciaj grafikaĵoj kaj vizualigoj
                                        </li>
                                        <li><strong>3D Grafikaĵado</strong> - Bazaj 3D surfacaj kaj disĵetaj grafikaĵoj
                                        </li>
                                        <li><strong>GridSpec</strong> - Kompleksaj subgrafikaĵaj aranĝoj uzante GridSpec
                                        </li>
                                        <li><strong>Propraj Transformoj</strong> - Aplikado de propraj koordinataj
                                            transformoj
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Grafikaĵa Agordado kaj Stiligado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-paint-brush text-[#11557C] mr-3"></i>
                                    Grafikaĵa Agordado kaj Stiligado
                                </h2>
                                <div class="content-section">
                                    <h3>Estetika Agordado</h3>
                                    <p>
                                        Vasta sperto agordi ĉiun aspekton de Matplotlib-grafikaĵoj:
                                    </p>
                                    <ul>
                                        <li>Liniaj stiloj, koloroj kaj markiloj</li>
                                        <li>Aksaj limoj, subdividoj kaj etikedoj</li>
                                        <li>Legenda agordado kaj lokigo</li>
                                        <li>Kradolinioj kaj fona stiligado</li>
                                        <li>Tekstaj anotaĵoj kaj matematikaj esprimoj</li>
                                        <li>Koloraj mapoj kaj kolorstria agordado</li>
                                    </ul>

                                    <h3>Stila Administrado</h3>
                                    <p>
                                        Majstrado de la stila sistemo de Matplotlib por konsekvencaj kaj profesiaj
                                        grafikaĵoj:
                                    </p>
                                    <ul>
                                        <li>Uzado de enkonstruitaj stiloj (ggplot, seaborn, ktp.)</li>
                                        <li>Kreado de propraj stiltabeloj</li>
                                        <li>Rultempa konfigurado (rcParams)</li>
                                        <li>Kolora cikla agordado</li>
                                        <li>Tipara kaj teksta propraĵa administrado</li>
                                    </ul>

                                    <h3>Publika Kvalito</h3>
                                    <p>
                                        Sperto krei grafikaĵojn taŭgajn por akademaj publikigaĵoj kaj profesiaj
                                        raportoj:
                                    </p>
                                    <ul>
                                        <li>Alt-distinga eligo en diversaj formatoj</li>
                                        <li>Taŭga grandeco por diversaj publikigaj postuloj</li>
                                        <li>Alireblaj koloraj skemoj kaj kontrasto</li>
                                        <li>Klara kaj informa etikedado</li>
                                        <li>Mult-panela figura komponado</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Integriĝo kaj Laborfluo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-project-diagram text-[#11557C] mr-3"></i>
                                    Integriĝo kaj Laborfluo
                                </h2>
                                <div class="content-section">
                                    <h3>Datuma Scienca Laborfluo</h3>
                                    <p>
                                        Senŝlima integriĝo kun la Python datuma scienca ekosistemo:
                                    </p>
                                    <ul>
                                        <li><strong>NumPy Integriĝo</strong> - Rekta grafikaĵado de NumPy-tabeloj</li>
                                        <li><strong>Pandas Integriĝo</strong> - Grafikaĵado rekte de DataFrames kaj
                                            Series
                                        </li>
                                        <li><strong>Jupyter Integriĝo</strong> - Interaktiva grafikaĵado en kajeroj</li>
                                        <li><strong>Seaborn Integriĝo</strong> - Uzado de Matplotlib kiel fono por
                                            Seaborn
                                        </li>
                                        <li><strong>SciPy Integriĝo</strong> - Vizualigo de sciencaj kalkuloj</li>
                                    </ul>

                                    <h3>Fonaj Sistemoj</h3>
                                    <p>
                                        Sperto kun diversaj Matplotlib-fonoj por diversaj uzo-kazoj:
                                    </p>
                                    <ul>
                                        <li><strong>Agg Fono</strong> - Por dosiera eligo (PNG, PDF, SVG)</li>
                                        <li><strong>TkAgg Fono</strong> - Por interaktivaj Tkinter-aplikaĵoj</li>
                                        <li><strong>WebAgg Fono</strong> - Por retaj aplikaĵoj</li>
                                        <li><strong>Inline Fono</strong> - Por Jupyter kajera montrado</li>
                                        <li><strong>Qt5Agg Fono</strong> - Por PyQt/PySide-aplikaĵoj</li>
                                    </ul>

                                    <h3>Eksportaj Formatoj</h3>
                                    <p>
                                        Majstrado eksporti grafikaĵojn en diversaj formatoj por diversaj celoj:
                                    </p>
                                    <ul>
                                        <li><strong>PNG/JPG</strong> - Por reto kaj ciferecaj prezentoj</li>
                                        <li><strong>PDF</strong> - Por publikigaĵoj kaj presaĵoj</li>
                                        <li><strong>SVG</strong> - Por skalebla vektora grafiko</li>
                                        <li><strong>EPS</strong> - Por LaTeX-dokumentoj</li>
                                        <li><strong>Interaktiva HTML</strong> - Por retaj aplikaĵoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Altanivelaj Teknikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-magic text-[#11557C] mr-3"></i>
                                    Altanivelaj Teknikoj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi havas vastan sperton kun altnivelaj Matplotlib-teknikoj por kompleksaj
                                        vizualigoj:
                                    </p>

                                    <h3>Propraj Grafikaĵaj Elementoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#11557C] mb-2">Plastroj & Formoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreado de propraj formoj, plurlateroj kaj geometriaj elementoj
                                                uzante Matplotlib-plastrojn
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#11557C] mb-2">Propraj Transformoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Aplikado de afinaj transformoj kaj propraj koordinataj
                                                sistemoj por specialigitaj vizualigoj
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#11557C] mb-2">Okaza Prilaborado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efektivigo de interaktivaj trajtoj kun musaj okazaĵoj,
                                                klavpremoj kaj propraj reaj vokoj
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#11557C] mb-2">Animacio</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreado de animaciaj vizualigoj uzante FuncAnimation
                                                kaj proprajn animaciajn klasojn
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Specialigitaj Grafikaĵ-Tipoj</h3>
                                    <ul>
                                        <li><strong>Polusaj Grafikaĵoj</strong> - Vizualigoj en cirkla koordinata
                                            sistemo
                                        </li>
                                        <li><strong>Fluaj Grafikaĵoj</strong> - Vektora kampa vizualigo</li>
                                        <li><strong>Sagaj Grafikaĵoj</strong> - 2D kampo de sagoj</li>
                                        <li><strong>Plenigo Inter</strong> - Areo-plenigo inter kurboj</li>
                                        <li><strong>Eraraj Stangoj</strong> - Statistika necerteca vizualigo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Projektoj sur GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#11557C] mr-3"></i>
                                    Projektoj sur GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj Matplotlib-vizualigaj projektoj troveblas sur GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank"
                                           class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham sur GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mi daŭre laboras pri datuman vizualigajn projektojn kiuj pruvas praktikajn
                                        aplikojn
                                        de Matplotlib por esplora datuma analizo, scienca esplorado, kaj negoca
                                        raportado.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flanka Strio -->
                        <div class="space-y-6">
                            <!-- Kompetenteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#11557C] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#11557C]">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div
                                                class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#11557C] to-[#2D5B8F]"
                                                data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Grafikaĵa Agordado</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Multoblaj Subgrafikaĵoj</span>
                                            <span class="text-sm font-bold text-blue-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Publika Kvalito</span>
                                            <span class="text-sm font-bold text-purple-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="72%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Interaktivaj Trajtoj</span>
                                            <span class="text-sm font-bold text-red-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="70%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#11557C] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Matplotlib 3.7+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Kreitaj Grafikaĵoj: <strong>500+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-palette text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Grafikaĵ-Tipoj: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-file-export text-[#11557C] w-5 mr-3"></i>
                                        <span class="text-sm">Eksportaj Formatoj: <strong>PNG, PDF, SVG</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Lernada Vojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#11557C] mr-2"></i>
                                    Lernada Vojo
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Bazaj grafikaĵ-tipoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Grafikaĵa agordado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Multoblaj subgrafikaĵoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Stila administrado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Altanivela agordado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Interaktivaj aplikaĵoj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#11557C] mr-2"></i>
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
                                            <div class="font-medium group-hover:text-[#11557C] transition-colors">
                                                Python
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pandas"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-table text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#11557C] transition-colors">
                                                Pandas
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                    </a>
                                    <a href="/competences/numpy"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#4D77CB] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-calculator text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#11557C] transition-colors">
                                                NumPy
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                    </a>
                                    <a href="/competences/seaborn"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-pie text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#11557C] transition-colors">
                                                Seaborn
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">65% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#11557C] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div
                                class="bg-gradient-to-r from-[#11557C] to-[#2D5B8F] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesata pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Preta diskuti vian datuman vizualigan projekton</p>
                                <a href="/contact"
                                   class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#11557C] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

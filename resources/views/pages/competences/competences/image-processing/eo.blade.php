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
                                <a href="/competences/photography" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Fotado & Datuma Scienco
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Bilda Prilaborado
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-image text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Bilda Prilaborado</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-crop-alt mr-1"></i>
                                            Cifereca Manipulado
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Altnivelaj ciferecaj bildmanipulado, plibonigo kaj prilaboraj teknikoj por fotado kaj datum-scienco
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Lerteca Nivelo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">15+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Teknikoj</div>
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
                            <!-- Pri Bilda Prilaborado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    Pri Bilda Prilaborado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Bilda Prilaborado</strong> ampleksas vastan gamon da teknikoj por manipulado
                                        kaj analizado de ciferecaj bildoj. De bazaj plibonigoj ĝis kompleksaj komputaj algoritmoj,
                                        bilda prilaborado ligas artan foton kaj sciencan datum-analizon.
                                    </p>

                                    <h3>Ĉefaj Aplikoj</h3>
                                    <ul>
                                        <li><strong>Fota Plibonigo</strong> - Kolorĝustigo, bruo-redukto kaj detal-plibonigo</li>
                                        <li><strong>Komputa Fotado</strong> - HDR, panoram-kunigo kaj fokusa stakado</li>
                                        <li><strong>Medicina Bildigo</strong> - Analizo kaj plibonigo de medicinaj skanoj</li>
                                        <li><strong>Komputila Vidado</strong> - Trajta detekto, objekta rekono kaj ŝablona analizo</li>
                                        <li><strong>Scienca Analizo</strong> - Mikroskopio, satelitaj bildoj kaj esplor-datumoj</li>
                                        <li><strong>Kreivaj Efektoj</strong> - Artaj filtriloj, kunmetado kaj cifereca arto-kreado</li>
                                    </ul>

                                    <h3>Kernaj Prilaboraj Domenoj</h3>
                                    <p>
                                        Mia kompetentoj kovras multajn domenojn de bilda prilaborado:
                                    </p>
                                    <ul>
                                        <li><strong>Spaca Domeno Prilaborado</strong> - Rekta rastrum-manipulado kaj filtrado</li>
                                        <li><strong>Frekvenca Domeno Prilaborado</strong> - Fourier-analizo kaj frekvenc-bazitaj operacioj</li>
                                        <li><strong>Kolora Prilaborado</strong> - Kolor-spacaj transformoj kaj plibonigo</li>
                                        <li><strong>Morfologia Prilaborado</strong> - Formo-bazita analizo kaj operacioj</li>
                                        <li><strong>Geometriaj Transformoj</strong> - Rotacio, skalado kaj perspektiva korekto</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Bilda Prilaborado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-blue-500 mr-3"></i>
                                    Mia Vojaĝo kun Bilda Prilaborado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mia vojaĝo kun bilda prilaborado komenciĝis antaŭ 3+ jaroj, kombinante mian pasion por fotado
                                        kun teknika kompetenteco en datum-analizo. Komencante per baza foto-redaktado, mi progresis
                                        al efektivigo de kompleksaj algoritmoj por kaj artaj kaj sciencaj aplikoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-camera text-blue-500 mr-2"></i>
                                                Fotada Fokuso
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Altnivela foto-redaktado, RAW-prilaborado, kaj kreivaj manipulado-teknikoj
                                                por profesiaj fotadaj laborfluoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-microscope text-purple-500 mr-2"></i>
                                                Datum-Sciencaj Aplikoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Algoritma evoluigo por bilda analizo, trajta eltirado,
                                                kaj aŭtomata prilaborado en sciencaj kuntekstoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                    Mia Sperto kun Bilda Prilaborado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 3+ jaroj da praktika sperto, mi evoluigis kompletajn kapablojn
                                        en kaj arta bild-manipulado kaj teknika bild-analizo tra
                                        diversaj domenoj kaj aplikoj.
                                    </p>

                                    <h3>Teknikaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kolorĝustigo kaj gradado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bruo-redukto kaj akrigado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bilda segmentado kaj maskado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Frekvenca domena analizo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Morfologiaj operacioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Trajta detekto kaj eltirado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bilda registrado kaj alineado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Multispektra bilda prilaborado</span>
                                        </div>
                                    </div>

                                    <h3>Iloj & Teknologioj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">OpenCV</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">PIL/Pillow</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Photoshop</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Lightroom</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">GIMP</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">NumPy</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">scikit-image</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">RAWTherapee</span>
                                    </div>

                                    <h3>Majstritaj Prilaboraj Teknikoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Plibonigaj Teknikoj</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Histograma egaligo</li>
                                                <li>• Kontrasta streĉado</li>
                                                <li>• Malklara maskado</li>
                                                <li>• Frekvenca filtrado</li>
                                                <li>• Kolor-spaca konverto</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Analizaj Metodoj</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Rando-detectado</li>
                                                <li>• Tekstura analizo</li>
                                                <li>• Objekta rekono</li>
                                                <li>• Ŝablona kongruo</li>
                                                <li>• Morfologia analizo</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Aplikaj Areoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-layer-group text-blue-500 mr-3"></i>
                                    Aplikaj Areoj & Projektoj
                                </h2>
                                <div class="content-section">
                                    <h3>Fotadaj Aplikoj</h3>
                                    <p>
                                        En fotadaj kuntekstoj, mi aplikis bildan prilaboradon por:
                                    </p>
                                    <ul>
                                        <li><strong>Profesia Foto-Redaktado</strong> - Altnivela retuŝado kaj kolor-gradado por komerca fotado</li>
                                        <li><strong>HDR Prilaborado</strong> - Ton-mapado kaj ekspozicia fuzio por bildoj kun alta dinamika gamo</li>
                                        <li><strong>Panoram-Kunigo</strong> - Sentavla kunfando de multoblaj bildoj en panoramajn vidojn</li>
                                        <li><strong>Fokusa Stakado</strong> - Kombinado de multoblaj fokusaj ebenoj por etendita profundakampo</li>
                                        <li><strong>Astrofotada Prilaborado</strong> - Stakado kaj plibonigo de astronomiaj bildoj</li>
                                    </ul>

                                    <h3>Datum-Sciencaj Aplikoj</h3>
                                    <p>
                                        En sciencaj kaj analizaj kuntekstoj, mi efektivigis:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Medicina Bildigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Plibonigo kaj analizo de medicinaj skanoj por esploraj aplikoj
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Fora Sondado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Prilaborado de satelitaj kaj aeraj bildoj por geografia analizo
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Kvalito-Kontrolo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Aŭtomata inspektado kaj difekto-detectado en fabrikado
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Dokumenta Analizo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                OCR-plibonigo kaj dokumenta bilda prilaborado
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Notindaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Aŭtomata Foto-Elektada Sistemo</strong> - AI-helpita elekto de plej bonaj bildoj de fotosesioj</li>
                                        <li><strong>Medicina Bilda Plibonigo</strong> - Algoritma evoluigo por plibonigi diagnozan klarecon</li>
                                        <li><strong>Satelita Bilda Analizo</strong> - Prilaborado kaj klasifikado de ter-observaj datumoj</li>
                                        <li><strong>Artisma Stilo-Transigo</strong> - Neŭra reto-efektivigo por kreiva bild-manipulado</li>
                                        <li><strong>Realtempa Filtrila Aplikado</strong> - Ret-bazitaj bildaj prilaboraj iloj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Teknika Efektivigo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-blue-500 mr-3"></i>
                                    Teknika Efektivigo
                                </h2>
                                <div class="content-section">
                                    <h3>Algoritma Evoluigo</h3>
                                    <p>
                                        Mi evoluigis kaj efektivigis diversajn bildajn prilaborajn algoritmojn:
                                    </p>
                                    <ul>
                                        <li><strong>Propraj Filtrilaj Kernoj</strong> - Dezajnado kaj aplikado de kunvolvaj filtriloj</li>
                                        <li><strong>Frekvencaj Domenaj Operacioj</strong> - FFT-bazita filtrado kaj analizo</li>
                                        <li><strong>Morfologia Prilaborado</strong> - Erozio, dilato kaj forma analizo</li>
                                        <li><strong>Segmentaj Algoritmoj</strong> - Sojlado, regiona kreskado kaj akvodislimo</li>
                                        <li><strong>Trajta Detekto</strong> - Angulo-detectado, blob-analizo kaj rando-trovado</li>
                                    </ul>

                                    <h3>Rendimenta Optimumigo</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Paralela Prilaborado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Multfadenado kaj GPU-akcelo por grandskala bilda prilaborado
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Memora Optimumigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efika prilaborado de grandaj bildaj datum-aroj kaj fluuma prilaborado
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Algoritma Optimumigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Matematika optimumigo de prilaboraj algoritmoj por rapido kaj kvalito
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Kvalito-Metrikoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efektivigo de objektiva kvalito-taksado por prilaboritaj bildoj
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Lerteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                    Lerteca Nivelo
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Lerteco</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500"
                                                 data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Fotada Prilaborado</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Algoritma Evoluigo</span>
                                            <span class="text-sm font-bold text-purple-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Teknika Analizo</span>
                                            <span class="text-sm font-bold text-yellow-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ila Integrigo</span>
                                            <span class="text-sm font-bold text-red-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tools text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Teknikoj: <strong>15+ majstritaj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-camera text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Domenoj: <strong>Foto & Scienco</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Lingvoj: <strong>Python</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Prilaboraj Domenoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-sitemap text-blue-500 mr-2"></i>
                                    Prilaboraj Domenoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Spaca Domeno Prilaborado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Frekvenca Domeno Analizo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Kolor-Spaca Manipulado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Morfologia Prilaborado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">3D Bilda Prilaborado</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-blue-500 mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-camera text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Fotado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/data-science" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-line text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Datuma Scienco</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-python text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Python</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/computer-vision" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-eye text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Komputila Vidado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">68% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas bildan prilaboradon?</h3>
                                <p class="text-sm mb-4">Ni plibonigu kaj analizu viajn vidajn datumojn</p>
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

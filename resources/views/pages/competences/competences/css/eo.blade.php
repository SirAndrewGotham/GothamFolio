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
            // Animacio de lertostangoj
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
                <nav class="flex fade-in" aria-label="Paneroj">
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
                                <a href="/competences/frontend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Frontend Disvolviĝo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        CSS
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
                                <i class="fab fa-css3-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">CSS</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-paint-brush mr-1"></i>
                                            TTT-stiligado
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Kaskadaj Stilfolioj por krei belajn, respondemajn kaj alireblajn TTT-interfacojn kun modernaj aranĝoteknikoj kaj animacioj
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
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">12+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">200+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Projektoj</div>
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
                            <!-- Pri CSS -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    Pri CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>CSS (Cascading Style Sheets)</strong> estas la lingvo uzata por priskribi la prezenton de TTT-paĝoj,
                                        inkluzive kolorojn, aranĝon kaj tiparojn. Ĝi ebligas la apartigon de prezento de enhavo,
                                        plibonigante enhavan alireblecon kaj provizante pli da fleksebleco kaj kontrolo en la specifo de prezentaj karakterizaĵoj.
                                    </p>

                                    <h3>Ŝlosilaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Apartigo de Zorgoj</strong> - Apartigi stiligadon de HTML-strukturo</li>
                                        <li><strong>Respondema Dezajno</strong> - Krei aranĝojn kiuj funkcias tra ĉiuj aparatgrandecoj</li>
                                        <li><strong>Subteneblo</strong> - Centrigita stiligado por konsekvencaj dezajnsistemoj</li>
                                        <li><strong>Rendimento</strong> - Efektivaj renderkapabloj kaj animaciokapabloj</li>
                                        <li><strong>Alirebleco</strong> - Plibonigita uzantosperto por ĉiuj uzantoj</li>
                                        <li><strong>Transretumila Kongrueco</strong> - Konsekvenca renderado trans platformoj</li>
                                    </ul>

                                    <h3>Modernaj CSS Trajtoj</h3>
                                    <p>
                                        Mi havas ampleksan sperton kun modernaj CSS-specifoj kaj trajtoj:
                                    </p>
                                    <ul>
                                        <li><strong>CSS Grid Layout</strong> - Dudimensia aranĝosistemo por kompleksaj interfacoj</li>
                                        <li><strong>Flexbox</strong> - Unudimensia aranĝomodelo por komponentalĝustigo</li>
                                        <li><strong>Propraj Propraĵoj (CSS Variabloj)</strong> - Dinamikaj valoroj kaj temigado</li>
                                        <li><strong>CSS-Animacioj & Transiroj</strong> - Glataj interagoj kaj mikro-interagoj</li>
                                        <li><strong>CSS-Filtriloj & Miksoreĝimoj</strong> - Vidaĵefektoj kaj kreiva stiligado</li>
                                        <li><strong>Ujokonsultoj</strong> - Komponent-bazita respondema dezajno</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia CSS-Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-blue-500 mr-3"></i>
                                    Mia Vojaĝo kun CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mia CSS-vojaĝo komenciĝis antaŭ pli ol 12 jaroj, komencante per CSS2 kaj evoluiĝante tra CSS3 kaj modernaj specifoj.
                                        Mi atestis kaj adaptiĝis al gravaj ŝanĝoj en TTT-stiligado, de tabel-bazitaj aranĝoj ĝis modernaj CSS Grid kaj Flexbox sistemoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-history text-blue-500 mr-2"></i>
                                                Evoluo-Sperto
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Profunda kompreno de CSS-evoluo de baza stiligado ĝis modernaj
                                                aranĝosistemoj kaj altnivelaj vidaĵefektoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-mobile-alt text-purple-500 mr-2"></i>
                                                Respondema Eksperteco
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Ampleksa sperto krei respondemajn dezajnojn kiuj funkcias
                                                senprobleme trans ĉiuj aparatoj kaj ekrangrandecoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                    Mia Sperto kun CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 12+ jaroj de CSS-sperto trans 200+ projektoj, mi majstris kaj fundamentajn konceptojn
                                        kaj pintajn teknikojn por krei esceptajn uzantajn interfacojn kaj spertojn.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Altnivelaj aranĝosistemoj (Grid & Flexbox)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CSS-arkitekturo kaj metodologio (BEM, SMACSS)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kompleksaj animacioj kaj transiroj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimentaj optimumigaj teknikoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Transretumilaj kongruecaj strategioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Alirebleco-fokusita stiligado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CSS-antataŭprocesiloj (Sass, Less)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Modernaj CSS-trajtoj kaj plenigiloj</span>
                                        </div>
                                    </div>

                                    <h3>Aranĝo & Dezajnosistemoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">CSS Grid</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Flexbox</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">CSS Variabloj</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Animacioj</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Transformoj</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Amaskomunikilaj Konsultoj</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Ujokonsultoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Viewport Unuoj</span>
                                    </div>

                                    <h3>Altnivelaj Teknikoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Aranĝoteknikoj</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Kompleksaj Grid-ŝablonareoj</li>
                                                <li>• Altnivelaj Flexbox-alĝustigoj</li>
                                                <li>• CSS Subgrid-implementadoj</li>
                                                <li>• Multkolumnaj aranĝoj</li>
                                                <li>• Aspekta proporcia kontrolo</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-blue-500 mb-2">Vidaĵefektoj</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Propraj clip-path-formoj</li>
                                                <li>• Fonfiltroj kaj miksoreĝimoj</li>
                                                <li>• Kompleksaj gradientaj ŝablonoj</li>
                                                <li>• 3D-transformoj kaj perspektivo</li>
                                                <li>• Rulumo-pelitaj animacioj</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modernaj CSS-Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-blue-500 mr-3"></i>
                                    Modernaj CSS-Trajtoj & Teknikoj
                                </h2>
                                <div class="content-section">
                                    <h3>CSS Grid & Aranĝosistemoj</h3>
                                    <p>
                                        Mi havas ampleksan sperton kun modernaj aranĝosistemoj:
                                    </p>
                                    <ul>
                                        <li><strong>CSS Grid</strong> - Kompleksaj dudimensiaj aranĝoj kun preciza kontrolo</li>
                                        <li><strong>Flexbox</strong> - Unudimensiaj aranĝoj por komponentalĝustigo</li>
                                        <li><strong>Multkolumna Aranĝo</strong> - Ĵurnalismaj enhavfluoj</li>
                                        <li><strong>CSS Subgrid</strong> - Nestitaj grid-alĝustigaj kapabloj</li>
                                        <li><strong>Ujokonsultoj</strong> - Komponent-bazita respondema dezajno</li>
                                        <li><strong>Logikaj Propraĵoj</strong> - Direkto-sendependaj aranĝosistemoj</li>
                                    </ul>

                                    <h3>Animacio & Interago</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">CSS-Animacioj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Ŝlosilkadraj animacioj por kompleksa movdezajno kaj mikro-interagoj
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Transiroj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Glataj statŝanĝoj kaj superŝvebaj efektoj kun tempaj funkcioj
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Transformoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                2D kaj 3D transformoj por kreivaj vidaĵefektoj
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">Ruluma Konduto</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Glata rulumado, ruluma snapping kaj rulumo-pelitaj animacioj
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rendimento & Bona Praktiko -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-blue-500 mr-3"></i>
                                    Rendimento & Bona Praktiko
                                </h2>
                                <div class="content-section">
                                    <h3>Optimumigaj Strategioj</h3>
                                    <p>
                                        Mi implementas kompreneblajn CSS-optimumigajn teknikojn:
                                    </p>
                                    <ul>
                                        <li><strong>Kritika CSS</strong> - Enliniaj super la faldo stiloj por pli rapida renderado</li>
                                        <li><strong>CSS-Minifado</strong> - Reduktante dosiergrandon por pli rapidaj elŝutoj</li>
                                        <li><strong>Efektivaj Selektiloj</strong> - Optimumigante selektilan rendimenton</li>
                                        <li><strong>CSS-Arkitekturo</strong> - Skalebla kaj subtenebla kodo-organizado</li>
                                        <li><strong>Progresiga Plibonigo</strong> - Graca degenerado por malnovaj retumiloj</li>
                                        <li><strong>Rendimento-Monitorado</strong> - Mezurante kaj optimumigante renderrendimenton</li>
                                    </ul>

                                    <h3>Metodologioj & Arkitekturo</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">BEM-Metodologio</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Block Element Modifier por skalebla kaj subtenebla CSS-arkitekturo
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">SMACSS</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Scalable and Modular Architecture por CSS-organizado
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">ITCSS</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Inverted Triangle CSS por administrita specifeco kaj organizado
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-500 mb-2">OOCSS</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Object-Oriented CSS por reuzeblaj kaj flekseblaj komponantoj
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Notindaj Optimumigaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Reta Komerca Platformo</strong> - Reduktita CSS-pakaĵgrando je 60% tra optimumigo</li>
                                        <li><strong>Nova Portalo</strong> - Implementis kritikan CSS por 40% pli rapida komenca renderado</li>
                                        <li><strong>TTT-Aplikaĵo</strong> - Kreis subteneblan CSS-arkitekturon por granda teamo</li>
                                        <li><strong>Mobila Aplikaĵo</strong> - Optimumigis animaciojn por 60fps-rendimento</li>
                                        <li><strong>Dezajnosistemo</strong> - Konstruis skaleblan CSS-fundaĵon por entreprenaj produktoj</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Kompetenteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Kompetenteco</span>
                                            <span class="text-sm font-bold text-blue-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Aranĝosistemoj</span>
                                            <span class="text-sm font-bold text-purple-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Animacioj & Efektoj</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Rendimento</span>
                                            <span class="text-sm font-bold text-yellow-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Transretumila Subteno</span>
                                            <span class="text-sm font-bold text-red-500">86%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="86%" style="width: 0%"></div>
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
                                        <span class="text-sm">Sperto: <strong>12+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code-branch text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>200+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-layer-group text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Aranĝosistemoj: <strong>Grid & Flexbox</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-magic text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Animacioj: <strong>Altnivela CSS</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tachometer-alt text-blue-500 w-5 mr-3"></i>
                                        <span class="text-sm">Rendimento: <strong>Optimumigita</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- CSS-Specifoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-file-code text-blue-500 mr-2"></i>
                                    CSS-Specifoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">CSS Grid Layout (Nivelo 1, 2, 3)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Flexbox (Ĉiuj versioj)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">CSS Propraj Propraĵoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Ujokonsultoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">CSS Nestado (Nivelo 1)</span>
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
                                    <a href="/competences/html" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-html5 text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">HTML</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/sass" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-pink-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-sass text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Sass</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">JavaScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/responsive-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-mobile-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-blue-500 transition-colors">Respondema Dezajno</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas CSS-ekspertecon?</h3>
                                <p class="text-sm mb-4">Ni kreu belajn, rendimentajn interfacojn</p>
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

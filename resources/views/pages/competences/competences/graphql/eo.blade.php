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
                                <a href="/competences/api" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    API-Disvolviĝo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        GraphQL
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-pink-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-pink-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-project-diagram text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">GraphQL</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-code mr-1"></i>
                                            Konsulta Lingvo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Moderna konsulta lingvo por API kun fleksebla datumpreno kaj efika klient-servila komunikado
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-server"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">API Konstruitaj</div>
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
                            <!-- Pri GraphQL -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-pink-500 mr-3"></i>
                                    Pri GraphQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>GraphQL</strong> estas konsulta lingvo por API kaj rulmedio por plenumado de tiuj konsultoj
                                        kun viaj ekzistantaj datumoj. Ĝi provizas kompletan kaj kompreneblan priskribon de la datumoj
                                        en via API, donas al klientoj la povon peti ekzakte kion ili bezonas, kaj faciligas
                                        la evoluadon de API tra tempo.
                                    </p>

                                    <h3>Ŝlosilaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Fleksebla Datumpreno</strong> - Klientoj petas ekzakte la datumojn kiujn ili bezonas</li>
                                        <li><strong>Unu Fina Punkto</strong> - Unu fina punkto por ĉiuj datumoperacioj</li>
                                        <li><strong>Forte Tajpita Skemo</strong> - Klara API-kontrakto kun tipa validigo</li>
                                        <li><strong>Reduktita Tro-Preno</strong> - Neniuj nenecesaj datumoj transdonitaj</li>
                                        <li><strong>Realtempaj Ĝisdatigoj</strong> - Enkonstruita subteno por abonoj</li>
                                        <li><strong>Disvolvista Sperto</strong> - Bonegaj iloj kaj enrigardo</li>
                                    </ul>

                                    <h3>Kernaj Konceptoj</h3>
                                    <p>
                                        GraphQL enkondukas plurajn fundamentajn konceptojn kiuj diferencigas ĝin de tradiciaj REST API:
                                    </p>
                                    <ul>
                                        <li><strong>Skemo-Defina Lingvo (SDL)</strong> - Tiosistemo por difini API-kapablojn</li>
                                        <li><strong>Konsultoj</strong> - Legoperacioj por preni datumojn</li>
                                        <li><strong>Mutaĵoj</strong> - Skriboperacioj por modifi datumojn</li>
                                        <li><strong>Abonoj</strong> - Realtempaj datumĝisdatigoj</li>
                                        <li><strong>Solvantoj</strong> - Funkcioj kiuj plenumas datumpetojn</li>
                                        <li><strong>Enrigardo</strong> - Mem-dokumentantaj API-kapabloj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia GraphQL-Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-pink-500 mr-3"></i>
                                    Mia Vojaĝo kun GraphQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis labori kun GraphQL en 2020 kiam konstruante kompleksajn antaŭpartajn aplikaĵojn
                                        kiuj postulis flekseblajn datumpreno-kapablojn. Dum la pasintaj 3+ jaroj, mi implementis
                                        GraphQL API por diversaj projektoj, de malgrandaj startup-oj ĝis entreprenaj aplikaĵoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-pink-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fab fa-laravel text-pink-500 mr-2"></i>
                                                Laravel Lighthouse
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Ampleksa sperto kun Laravel Lighthouse por konstrui
                                                fortikajn GraphQL API en PHP/Laravel ekosistemoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fab fa-react text-blue-500 mr-2"></i>
                                                Antaŭparta Integrigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Komprenebla sperto integrigi GraphQL kun React,
                                                Vue.js kaj mobilaj aplikaĵoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-pink-500 mr-3"></i>
                                    Mia Sperto kun GraphQL
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 3+ jaroj de praktika GraphQL-sperto, mi disvolvis kompreneblan ekspertecon
                                        en dezajnado, implementado kaj optimumigado de GraphQL API por diversaj uzkazoj kaj skaloj.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Skemo-dezajno kaj optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Solvanto-implementado kaj grupiĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimento-optimumigo kaj kaŝmemorado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aŭtentigo kaj rajtigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Realtempaj abonoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eraro-traktado kaj validigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dosier-alŝutoj kaj kompleksaj mutaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API-versiado kaj evoluo</span>
                                        </div>
                                    </div>

                                    <h3>Teknologia Stako</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Lighthouse</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Apollo</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">GraphQL Yoga</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Hasura</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Relay</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">URQL</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">GraphiQL</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Voyager</span>
                                    </div>

                                    <h3>Implementaj Ŝablonoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-pink-500 mb-2">Malantaŭpartaj Ŝablonoj</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Solvanto-komponado kaj meza programaro</li>
                                                <li>• DataLoader por N+1-prevento</li>
                                                <li>• Kampo-nivelaj permesoj</li>
                                                <li>• Propraj direktivoj kaj skalaroj</li>
                                                <li>• Federacio kaj mikroservoj</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-pink-500 mb-2">Antaŭpartaj Ŝablonoj</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Konsulto-komponado kaj fragmentoj</li>
                                                <li>• Optimismaj UI-ĝisdatigoj</li>
                                                <li>• Klient-flanka statadministrado</li>
                                                <li>• Eraro-lima traktado</li>
                                                <li>• Realtempa datum-sinkronigo</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Altnivelaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-pink-500 mr-3"></i>
                                    Altnivelaj Implementaj Trajtoj
                                </h2>
                                <div class="content-section">
                                    <h3>Rendimento-Optimumigo</h3>
                                    <p>
                                        Mi implementis diversajn rendimento-optimumigajn teknikojn por GraphQL API:
                                    </p>
                                    <ul>
                                        <li><strong>Konsulto-Komplekseco-Analizo</strong> - Preventante multekostajn konsultojn</li>
                                        <li><strong>Persistitaj Konsultoj</strong> - Antaŭ-aprobitaj konsulto-optimumigoj</li>
                                        <li><strong>Konsulto-Kaŝmemorado</strong> - Multnivelaj kaŝmemoraj strategioj</li>
                                        <li><strong>Grupiĝo kaj Dataloader</strong> - Efektivaj datumbazaj alirŝablonoj</li>
                                        <li><strong>Kampo-nivela Instrumentado</strong> - Rendimento-monitorado kaj mezuroj</li>
                                        <li><strong>Konsulto-Planado</strong> - Optimumigitaj efektivigaj strategioj</li>
                                    </ul>

                                    <h3>Sekureco & Bona Praktiko</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Aŭtentigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                JWT, OAuth, kaj propra aŭtentiga meza programaro implementado
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Rajtigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kampo-nivela, rolo-bazita, kaj atributo-bazita alirkontrolo
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Validigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Eniga validigo, konsulto-profundeca limigo, kaj komplekseco-analizo
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Monitorado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Konsulto-protokolado, rendimento-mezuroj, kaj eraro-spurado
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reala Mondaj Aplikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-layer-group text-pink-500 mr-3"></i>
                                    Reala Mondaj Aplikoj
                                </h2>
                                <div class="content-section">
                                    <h3>Uzkazo-Implementadoj</h3>
                                    <p>
                                        Mi sukcese implementis GraphQL en diversaj realaj scenaroj:
                                    </p>
                                    <ul>
                                        <li><strong>Reta Komercaj Platformoj</strong> - Flekseblaj produktkatalogoj kaj aĉetaj spertoj</li>
                                        <li><strong>Socialaj Retoj</strong> - Realtempaj fluoj kaj uzantaj interagoj</li>
                                        <li><strong>Panelaj Aplikoj</strong> - Alĝustigeblaj datum-vidigoj kaj raportoj</li>
                                        <li><strong>Mobilaj Aplikoj</strong> - Efektiva datumpreno por limigita bendolarĝo</li>
                                        <li><strong>Mikroserva Arkitekturo</strong> - API-federacio kaj servo-komponado</li>
                                    </ul>

                                    <h3>Migradaj Strategioj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">REST al GraphQL</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Gradaj migradaj strategioj de REST API al GraphQL
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Hibridaj Aliroj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Subtenante ambaŭ REST kaj GraphQL finajn punktojn dum transiro
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Hereda Integrigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Integrigante GraphQL kun ekzistantaj heredaj sistemoj kaj datumbazoj
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-pink-500 mb-2">Inkrementa Adopto</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Fazaj disvolvaj strategioj por grandskalaj aplikoj
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Notindaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Entreprena CMS</strong> - GraphQL API por enhavadministrado kun realtemptaj ĝisdatigoj</li>
                                        <li><strong>Financa Panelo</strong> - Flekseblaj konsultoj por kompleksaj financaj datumoj</li>
                                        <li><strong>E-lernada Platformo</strong> - Personigitaj lernovojoj kaj progreso-spurado</li>
                                        <li><strong>IoT-Datuma Platformo</strong> - Realtempaj sensordatumaj abonoj kaj konsultoj</li>
                                        <li><strong>Multluanta SaaS</strong> - Izolita datumaliro kun dividita skemo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Kompetenteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-pink-500 mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Kompetenteco</span>
                                            <span class="text-sm font-bold text-pink-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-pink-500 to-purple-500"
                                                 data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Skemo-Dezajno</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Rendimento-Optimumigo</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Sekureco-Implementado</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Iloj & Ekosistemo</span>
                                            <span class="text-sm font-bold text-yellow-500">76%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="76%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-pink-500 mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-server text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">API Konstruitaj: <strong>10+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">Skemoj Dezajnitaj: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">Sekureco: <strong>JWT & OAuth</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bolt text-pink-500 w-5 mr-3"></i>
                                        <span class="text-sm">Realtempo: <strong>Abonoj</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Implementaj Tipoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-cubes text-pink-500 mr-2"></i>
                                    Implementaj Tipoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Monolitaj GraphQL API</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Federaciaj Mikroservoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Hibridaj REST/GraphQL</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Skemo-Kudrado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">GraphQL Mesh</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-pink-500 mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-pink-500 transition-colors">API-Disvolviĝo</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-pink-500 transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/react" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-react text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-pink-500 transition-colors">React</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/performance" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-tachometer-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-pink-500 transition-colors">Rendimento</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-pink-500 to-purple-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas GraphQL API?</h3>
                                <p class="text-sm mb-4">Ni konstruu efektivajn, flekseblajn API kune</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-pink-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

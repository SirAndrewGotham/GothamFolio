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
                        <!-- Pri Laravel Octane -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                Pri Laravel Octane
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Octane</strong> estas altrendimenta aplikaĵ-servilo por Laravel
                                    kiu superŝargas vian aplikaĵan rendimenton tenante ĝin ŝargita en memoro
                                    inter petoj. Konstruita sur Swoole kaj RoadRunner, Octane draste
                                    reduktas ŝarĝan superon kaj ebligas vian aplikaĵon prilabori milojn
                                    da petoj sekunde.
                                </p>

                                <h3>Ŝlosilaj Avantaĝoj</h3>
                                <ul>
                                    <li><strong>Drasta Rendiment-pliboniĝo</strong> - 5-10x pli rapidaj respond-tempoj</li>
                                    <li><strong>Reduktita Memor-Uzo</strong> - Aplikaĵo restas ŝargita en memoro</li>
                                    <li><strong>Samtempa Pet-Prilaborado</strong> - Konstruita sur asinkronaj PHP-motoroj</li>
                                    <li><strong>Nula Ŝarĝa Supero</strong> - Nenia kadra ŝargo po peto</li>
                                    <li><strong>WebSocket-Subteno</strong> - Realtempaj kapabloj kun Swoole</li>
                                    <li><strong>Alta Samtempeco</strong> - Prilabori milojn da samtempaj konektoj</li>
                                </ul>

                                <h3>Ideaj Uzkazoj</h3>
                                <p>
                                    Laravel Octane estas aparte utila por:
                                </p>
                                <ul>
                                    <li>Alt-trafikaj aplikaĵoj kaj API-oj</li>
                                    <li>Realtempaj aplikaĵoj postulantaj WebSockets</li>
                                    <li>Mikroservoj kun altaj samtempecaj postuloj</li>
                                    <li>Aplikaĵoj kun pezaj ŝargaj procezoj</li>
                                    <li>Sistemoj postulantaj sub-milisekundajn respond-tempojn</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Vojaĝo kun Octane -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-purple-500 mr-3"></i>
                                Mia Vojaĝo kun Laravel Octane
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi komencis esplori Laravel Octane en 2022 kiam laborante pri alt-traficaj aplikaĵoj
                                    kiuj postulis signifan rendimentan optimumigon. Dum la pasintaj 2+ jaroj, mi
                                    implementis Octane en diversaj produktaj medioj, lernante la kompleksecojn
                                    de aplikaĵaj serviloj kaj rendimenta optimumigo.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-server text-purple-500 mr-2"></i>
                                            Aplikaĵaj Serviloj
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Sperto kun ambaŭ Swoole kaj RoadRunner aplikaĵaj serviloj,
                                            komprenante iliajn diferencojn kaj optimalajn uzkazojn por ĉiu.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-chart-line text-blue-500 mr-2"></i>
                                            Rendimenta Optimumigo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kompleta rendimenta testado kaj optimumigaj strategioj
                                            specife tajloritaj por Octane-povumitaj aplikaĵoj.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mia Sperto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                Mia Sperto kun Laravel Octane
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kun 2+ jaroj da manuma sperto kun Laravel Octane, mi disvolvis
                                    spertizon en disvastigado kaj optimumigo de alt-rendimentaj Laravel-aplikaĵoj
                                    uzante modernajn aplikaĵajn servilojn.
                                </p>

                                <h3>Specialigitaj Kapabloj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Swoole kaj RoadRunner agordo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Aplikaĵa stata administrado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Samtempa taska plenumado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Memor-filtrada detekto kaj preventado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Rendimenta monitorado kaj mezuroj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Produktaj disvastigaj strategioj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>WebSocket-implementado kun Swoole</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Datumbaza konekta kunigado</span>
                                    </div>
                                </div>

                                <h3>Teknika Stako</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Swoole</span>
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">RoadRunner</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">OpenSwoole</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">WebSockets</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Tikoj/Tempomezuriloj</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Samtempeco</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Kaŝmemorado</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Monitorado</span>
                                </div>

                                <h3>Rendimentaj Optimumigaj Areoj</h3>
                                <ul>
                                    <li><strong>Aplikaĵa Ŝarga Tempo</strong> - Reduktante kadran inicialigan superon</li>
                                    <li><strong>Memora Administrado</strong> - Preventante memor-filtradon en longdaŭraj procezoj</li>
                                    <li><strong>Datumbazaj Konektoj</strong> - Implementante konektan kunigadon kaj reuzon</li>
                                    <li><strong>Kaŝmemora Optimumigo</strong> - Utiligante en-memorajn kaŝmemorajn strategiojn</li>
                                    <li><strong>Samtempa Prilaborado</strong> - Utiligante asinkronajn kapablojn por paralelaj taskoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Implementaj Defioj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-exclamation-triangle text-yellow-500 mr-3"></i>
                                Implementaj Defioj & Solvaĵoj
                            </h2>
                            <div class="content-section">
                                <h3>Oftaj Defioj</h3>
                                <p>
                                    Implementado de Laravel Octane venas kun specifaj defioj kiuj postulas zorgeman
                                    konsideron kaj spertizon:
                                </p>
                                <ul>
                                    <li><strong>Stata Administrado</strong> - Traktado de aplikaĵa stato en longdaŭraj procezoj</li>
                                    <li><strong>Memoraj Filtradoj</strong> - Identigado kaj preventado de memoraj filtradoj</li>
                                    <li><strong>Datumbazaj Konektoj</strong> - Administrado de persistaj datumbazaj konektoj</li>
                                    <li><strong>Dosiaj Ŝanĝoj</strong> - Traktado de kodŝanĝoj en longdaŭraj serviloj</li>
                                    <li><strong>Triapartaj Pakaĵoj</strong> - Certigante kongruecon kun Octane</li>
                                </ul>

                                <h3>Miaj Solvaĵoj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Stata Administrado</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Implementis taŭgan statan izoladon kaj purigajn procedurojn
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Memora Optimumigo</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Disvolvis monitoradon kaj aŭtomatajn restartigajn strategiojn
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Disvastiga Strategio</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kreis nulan-ĉesan disvastigajn procezojn
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-purple-500 mb-2">Monitorado</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Implementis kompleksajn san-kontrolojn kaj mezurojn
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Projektoj sur GitHub -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fab fa-github text-purple-500 mr-3"></i>
                                Projektoj sur GitHub
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kelkaj el miaj Laravel Octane-projektoj kaj eksperimentoj troveblas sur GitHub:
                                </p>
                                <div class="mt-4">
                                    <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                        <i class="fab fa-github mr-2"></i>
                                        <span>SirAndrewGotham sur GitHub</span>
                                    </a>
                                </div>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Mi konstante eksperimentas kun Octane-funkcioj kaj dividas enrigardojn pri
                                    rendimentaj optimumigaj teknikoj por alt-ŝargaj Laravel-aplikaĵoj.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Flankopaneloj -->
                    <div class="space-y-6">
                        <!-- Lerteca Nivelo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                Lerteca Nivelo
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Entuta Lerteco</span>
                                        <span class="text-sm font-bold text-purple-500">72%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-violet-500"
                                             data-width="72%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Swoole-Implementado</span>
                                        <span class="text-sm font-bold text-blue-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">RoadRunner-Implementado</span>
                                        <span class="text-sm font-bold text-green-500">70%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="70%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Rendimenta Optimumigo</span>
                                        <span class="text-sm font-bold text-yellow-500">68%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="68%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Produkta Disvastigo</span>
                                        <span class="text-sm font-bold text-red-500">65%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="65%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-purple-500 mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>2+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-server text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Serviloj: <strong>Swoole & RoadRunner</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Projektoj: <strong>8+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-tachometer-alt text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Rendimento: <strong>5-10x pliboniĝo</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-bolt text-purple-500 w-5 mr-3"></i>
                                    <span class="text-sm">Statuso: <strong>Aktiva Disvolviĝo</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Lernovojo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-purple-500 mr-2"></i>
                                Disvolviĝa Vojo
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Baza Octane-Agordo & Konfiguro</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Swoole & RoadRunner-Implementado</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Rendimenta Testado & Optimumigo</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-spinner text-xs"></i>
                                    </div>
                                    <span class="text-sm">Altanivelaj Samtempecaj Ŝablonoj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Grandskalaj Produktaj Disvastigoj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Propra Aplikaĵa Servila Disvolviĝo</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentecoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-purple-500 mr-2"></i>
                                Rilataj Kompetentecoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">Laravel</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                                <a href="/competences/performance" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-tachometer-alt text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">Rendimento</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                                <a href="/competences/devops" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-server text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">DevOps</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                                <a href="/competences/websockets" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-broadcast-tower text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-purple-500 transition-colors">WebSockets</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div class="bg-gradient-to-r from-purple-500 to-violet-500 rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu Vi Bezonas Altan Rendimenton?</h3>
                            <p class="text-sm mb-4">Ni diskutu optimumigon de via Laravel-aplikaĵo</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-purple-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

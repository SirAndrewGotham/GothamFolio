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
            // Lertostria animacio por kapablecaj stangoj
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
                                    Kapablecoj
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
                                        Alpine.js
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-purple-500 to-indigo-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-mountain text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 alpine-gradient">Alpine.js</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bolt mr-1"></i>
                                            Malpeza & Reaktiva
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Minimumisma JavaScript-kadro por aldoni interagivecon al retpaĝoj.
                                Perfekta por plibonigi servile renderitan HTML per reaktiva konduto.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">82%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Lerteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-weight-hanging"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">~7KB</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Pakgrando</div>
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
                            <!-- Pri Alpine.js -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                    Pri Alpine.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Alpine.js</strong> estas robusta, minimuma ilo por komponi konduton rekte en via markado.
                                        Pensu pri ĝi kiel jQuery por la moderna reto. Ĝi ofertas la reaktivan kaj deklaran naturon de grandaj
                                        kadroj kiel Vue aŭ React je multe pli malalta kosto.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Minimuma piedsigno</strong> - Nur ~7KB kun gzip</li>
                                        <li><strong>Neniu konstrua paŝo necesa</strong> - Funkcias rekte en la retumilo</li>
                                        <li><strong>Deklarara sintakso</strong> - Skribu konduton rekte en HTML</li>
                                        <li><strong>Reaktiva stato</strong> - Aŭtomataj UI-ĝisdatigoj kiam datumoj ŝanĝiĝas</li>
                                        <li><strong>Perfekta por servile renderitaj aplikaĵoj</strong> - Plibonigas ekzistantan HTML</li>
                                        <li><strong>Progresiga plibonigo</strong> - Aldonu interagivecon laŭgrade</li>
                                        <li><strong>Familiar Vue-simila sintakso</strong> - Facile lernebla por Vue-disvolvistoj</li>
                                    </ul>

                                    <h3>Ideaj Uzkazoj</h3>
                                    <p>
                                        Alpine.js brilas en scenaroj kie vi bezonas interagivecon sen la superŝarĝo de plena SPA:
                                    </p>
                                    <ul>
                                        <li>Plibonigo de servile renderitaj aplikaĵoj (Laravel, Django, Rails)</li>
                                        <li>Aldono de interagiveco al statikaj retejoj</li>
                                        <li>Konstruado de malgrandaj ĝis mezaj komplekseckomponentoj</li>
                                        <li>Prototipado kaj MVP</li>
                                        <li>Plibonigo de hereda kodo</li>
                                        <li>Progresiga plibonigo de ekzistantaj aplikaĵoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Alpine.js -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-purple-500 mr-3"></i>
                                    Mia Vojaĝo kun Alpine.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Alpine.js en 2021 kiam serĉante malpezan solvon por aldoni interagivecon
                                        al servile renderitaj Laravel-aplikaĵoj. Ekde tiam, ĝi fariĝis mia ĉefa ilo por plibonigi
                                        HTML per reaktiva konduto sen la komplekseco de pli grandaj kadroj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code text-purple-500 mr-2"></i>
                                                Laravel-Integriĝo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vasta sperto integri Alpine.js kun Laravel-aplikaĵoj,
                                                kreante reaktivajn komponantojn kiuj funkcias senprobleme kun servile renderitaj ŝablonoj de Blade.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                                                Progresiga Plibonigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Sukcese uzis Alpine.js por progresige plibonigi heredajn aplikaĵojn,
                                                aldonante modernan interagivecon sen kompleta re-skribo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                    Mia Sperto kun Alpine.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 3+ jaroj da sperto, mi uzis Alpine.js tra diversaj projektoj,
                                        de simplaj interagivaj elementoj ĝis kompleksaj komponent-bazitaj interfacoj.
                                    </p>

                                    <h3>Kernaj Kapablecoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Reaktiva stata administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Komponenta komponado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Okaza prilaborado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Forminteragoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dinamika enhavo-ŝarĝado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integriĝo kun Laravel/Livewire</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propraj direktivoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimenta optimumigo</span>
                                        </div>
                                    </div>

                                    <h3>Teknika Stako</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">x-data</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">x-show</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">x-bind</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">x-on</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">x-model</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">x-for</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">x-transition</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">x-effect</span>
                                    </div>

                                    <h3>Notindaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Interagivaj Datumtabeloj</strong> - Ordeblaj, filtriblaj tabeloj kun Alpine.js</li>
                                        <li><strong>Dinamikaj Formkonstruiloj</strong> - Formoj kiuj adaptiĝas laŭ uzanto-enigo</li>
                                        <li><strong>Modalaj Sistemoj</strong> - Alireblaj modalaj dialogoj kun Alpine.js</li>
                                        <li><strong>Langetaj Interfacoj</strong> - Respondemaj langetaj komponantoj sen paĝo-reŝarĝo</li>
                                        <li><strong>Viva Serĉo</strong> - Realtempa serĉo kun malrapidigita enigo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Teknikaj Detaloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-purple-500 mr-3"></i>
                                    Teknikaj Detaloj
                                </h2>
                                <div class="content-section">
                                    <h3>Arkitekturo & Filozofio</h3>
                                    <p>
                                        Alpine.js sekvas "progresigan plibonigan" filozofion, permesante al vi aldoni interagivecon
                                        al ekzistanta HTML sen kompleta re-skribo. Ĝia arkitekturo estas desegnita por esti:
                                    </p>
                                    <ul>
                                        <li><strong>Deklarara</strong> - Difinu konduton rekte en HTML-atributoj</li>
                                        <li><strong>Reaktiva</strong> - Aŭtomataj UI-ĝisdatigoj kiam datumoj ŝanĝiĝas</li>
                                        <li><strong>Komponent-bazita</strong> - Enkapsulu konduton en reuzeblaj komponantoj</li>
                                        <li><strong>Neniu truda</strong> - Funkcias kune kun ekzistanta JavaScript</li>
                                        <li><strong>Etendebla</strong> - Kreu proprajn direktivojn kaj kromaĵojn</li>
                                    </ul>

                                    <h3>Ĉefaj Direktivoj</h3>
                                    <p>
                                        Alpine.js provizas aron de direktivoj kiuj formas la kernon de ĝia funkcieco:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-data</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Difinas la datumojn kaj konduton de komponanto
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-show</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Ŝaltas videblecon de elemento bazita sur esprimo
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-bind</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Dinamike agordas HTML-atributojn
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-on</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Aŭskultas DOM-okazaĵojn kaj rulas esprimojn
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-model</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreas du-direktajn datumbindojn
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-for</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Iteracias super tabeloj por krei DOM-elementojn
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-transition</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Aplikas CSS-transirojn al elementoj
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">x-effect</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Rulas kodon kiam dependaĵoj ŝanĝiĝas
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Projektoj ĉe GitHub -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-purple-500 mr-3"></i>
                                    Projektoj ĉe GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj Alpine.js-projektoj troveblas ĉe GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham ĉe GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mi konstante aldonas novajn Alpine.js-projektojn kiuj pruvas praktikajn aplikojn
                                        kaj bonajn praktikojn por uzi ĉi tiun malpezan kadron.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Lerteco-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                    Nivelo de Lerteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Lerteco</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-indigo-500"
                                                 data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Komponenta Disvolviĝo</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Stata Administrado</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Laravel-Integriĝo</span>
                                            <span class="text-sm font-bold text-red-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Rendimenta Optimumigo</span>
                                            <span class="text-sm font-bold text-yellow-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="75%" style="width: 0%"></div>
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
                                        <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Alpine.js 3.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-weight-hanging text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Pakgrando: <strong>~7KB</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Statuso: <strong>Aktiva Disvolviĝo</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Lernovojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-purple-500 mr-2"></i>
                                    Lernovojo
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Bazaj direktivoj (x-data, x-show)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Okaza prilaborado (x-on)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Du-direkta bindado (x-model)</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Komponenta komponado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Altnivela stata administrado</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Propraj direktivoj & kromaĵoj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kapablecoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-purple-500 mr-2"></i>
                                    Rilataj Kapablecoj
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
                                    <a href="/competences/livewire" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Livewire</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">JavaScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-purple-500 to-indigo-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesita pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Preta diskuti vian Alpine.js-projekton</p>
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

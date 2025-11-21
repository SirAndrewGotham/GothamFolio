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
            .livewire-gradient {
                background: linear-gradient(135deg, #fb7185 0%, #ec4899 100%);
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
                                <a href="/competences/frontend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Frontend Disvolviĝo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Livewire
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-pink-50 to-rose-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#fb7185] to-[#ec4899] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-bolt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 livewire-gradient">Livewire</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Altnivela Kompetenteco
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Plen-staka kadro por Laravel kun dinamika UI. Kreado de reakciaj aplikoj sen forlasi la Laravel-ekosistemon.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">92%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Profesia Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.x</div>
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
                            <!-- Pri Livewire -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#fb7185] mr-3"></i>
                                    Pri Livewire
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Livewire</strong> estas plen-staka kadro por Laravel kiu faciligas kreadon de dinamikaj interfacoj,
                                        sen forlasi la komforton de Laravel. Ĝi permesas krei reaktiajn komponantojn kiuj sentiĝas modernaj kaj respondemaj,
                                        dum skribante ĉefe PHP-on kaj minimuman JavaScript-on.
                                    </p>

                                    <h3>Ĉefa Filozofio & Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Laravel Denaska</strong> - Funkcias senŝove ene de la Laravel-ekosistemo</li>
                                        <li><strong>Minimuma JavaScript</strong> - Skribu reaktiajn UI-ojn ĉefe en PHP</li>
                                        <li><strong>Realtempaj Ĝisdatigoj</strong> - Aŭtomataj DOM-ĝisdatigoj sen paĝaj refreŝigoj</li>
                                        <li><strong>Komponanto-Bazita</strong> - Reuzeblaj, mem-sufiĉaj UI-komponantoj</li>
                                        <li><strong>Progresiva Plibonigo</strong> - Funkcias kun ekzistantaj Laravel-aplikoj</li>
                                        <li><strong>Disvolvisto-Sperto</strong> - Bonegaj iloj kaj senerarigaj kapabloj</li>
                                    </ul>

                                    <h3>Ideaj Uzkazoj</h3>
                                    <p>
                                        Livewire brilas en scenaroj kie vi volas dinamikajn, aplikaĵ-similajn spertojn:
                                    </p>
                                    <ul>
                                        <li>Dinamikaj formoj kun realtema validigo</li>
                                        <li>Datumaj tabeloj kun ordigo, filtrado kaj paĝigo</li>
                                        <li>Panelvidĝetoj kaj realtemetrikoj</li>
                                        <li>Interaktivaj serĉaj kaj filtradaj interfacoj</li>
                                        <li>Plurpaŝaj gvidiloj kaj kompleksaj laborkursoj</li>
                                        <li>Administraj paneloj kaj enhavadministraj sistemoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Livewire-Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#fb7185] mr-3"></i>
                                    Mia Livewire-Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Ekinte labori kun Livewire en 2021, tuj rekonante ĝian potencialon por krei dinamikajn Laravel-aplikojn
                                        sen la komplekseco de apartaj frontend-kadroj. Dum 3+ jaroj, konstruis multnombrajn produktadajn aplikojn
                                        kaj majstris altnivelajn Livewire-ŝablonojn.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-pink-50 to-rose-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-layer-group text-[#fb7185] mr-2"></i>
                                                Komponanto-Arkitekturo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Majstris komponantan komponadon, statan administradon kaj vivciklo-hokojn
                                                por konstrui kompleksajn, subteneblajn Livewire-aplikojn.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-purple-500 mr-2"></i>
                                                Efikeco-Optimumigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementis altnivelajn optimumigajn teknikojn inkluzive malrapidan ŝarĝadon,
                                                maloftecon kaj efikan datumtrakton en grandskalaj aplikoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Teknika Spertulo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#fb7185] mr-3"></i>
                                    Teknika Spertulo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Profunda kompreno de Livewire-arkitekturo kaj altnivelaj trajtoj, kombinita kun
                                        praktika sperto konstrui produktadajn aplikojn.
                                    </p>

                                    <h3>Kernaj Livewire-Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Komponanto-Disvolviĝo & Komponado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Stata Administrado & Datuma Ligado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vivciklo-Hokoj & Eventoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Formo-Traktado & Validigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dosiero-Alŝutoj & Medio-Traktado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Realtempaj Ĝisdatigoj & Enketado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Enestigitaj Komponantoj & Spacoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testado & Senerarigo</span>
                                        </div>
                                    </div>

                                    <h3>Majstritaj Altnivelaj Trajtoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Malrapida Ŝarĝado</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Prokrastita Ŝarĝado</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Query String</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">URL Atributoj</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Eventa Sistemo</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">JavaScript-Integrigo</span>
                                    </div>

                                    <h3>Efikeco & Optimumigo</h3>
                                    <ul>
                                        <li><strong>Avida/Malrapida Ŝarĝado</strong> - Strategia komponanto-ŝarĝado por optimuma efikeco</li>
                                        <li><strong>Maloftecitaj Agoj</strong> - Preventado de troaj servilaj petoj</li>
                                        <li><strong>Paĝigo & Kaŝmemorado</strong> - Efika datumtrakto en grandaj datumaroj</li>
                                        <li><strong>Aktivo-Optimumigo</strong> - Minimumigado de JavaScript-ŝarĝoj</li>
                                        <li><strong>Datumbaza Optimumigo</strong> - Efikaj mendoj kaj indeksoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Integrigo & Ekosistemo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#fb7185] mr-3"></i>
                                    Integrigo & Ekosistemo
                                </h2>
                                <div class="content-section">
                                    <h3>Laravel-Ekosistema Integrigo</h3>
                                    <p>
                                        Vasta sperto integrigante Livewire kun diversaj Laravel-ekosistemaj pakaĵoj kaj iloj:
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-blue-600 mb-2">Eloquent & Datumbazoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kompleksaj datumrilatoj, avida ŝarĝado, modelo-ligado kaj efikaj mendo-ŝablonoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-green-600 mb-2">Aŭtentigo & Rajtigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Laravel Sanctum, Jetstream, Fortify integrigo kun Livewire-komponantoj.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Tria-Partia Pakaĵa Integrigo</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Alpine.js</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Tailwind CSS</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Laravel Debugbar</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Livewire UI</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Wire Elements</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Laravel Excel</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Laravel Media Library</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Laravel Nova</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Projekto-Ekzemploj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#fb7185] mr-3"></i>
                                    Projektoj & Implemento
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Diversaj Livewire-projektoj montrantaj diversajn implementajn ŝablonojn kaj uzkazojn:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham sur GitHub</span>
                                        </a>
                                    </div>
                                    <h3 class="mt-6">Notindaj Livewire-Projektoj</h3>
                                    <ul>
                                        <li><strong>GothamFolio Platformo</strong> - Persona portfolio kun dinamika enhavadministrado</li>
                                        <li><strong>Reta Komerca Administra Panelo</strong> - Realtempa inventaro kaj mendo-administrado</li>
                                        <li><strong>CRM Panelo</strong> - Interaktiva analitiko kaj kliento-administrado</li>
                                        <li><strong>Realtempa Babilada Sistemo</strong> - Livewire kun Laravel Echo kaj WebSockets</li>
                                        <li><strong>Plurpaŝaj Formaj Aplikoj</strong> - Kompleksaj laborkursoj kun stata persisteco</li>
                                        <li><strong>Datuma Vizualiga Paneloj</strong> - Realtempaj metrikoj kaj raportado</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetenteco-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#fb7185] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Livewire</span>
                                            <span class="text-sm font-bold text-[#fb7185]">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#fb7185] to-[#ec4899]"
                                                 data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Komponanto-Arkitekturo</span>
                                            <span class="text-sm font-bold text-green-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Efikeco-Optimumigo</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ekosistema Integrigo</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Realtempaj Trajtoj</span>
                                            <span class="text-sm font-bold text-orange-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#fb7185] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#fb7185] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#fb7185] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Livewire 3.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#fb7185] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bolt text-[#fb7185] w-5 mr-3"></i>
                                        <span class="text-sm">Konstruitaj Komponantoj: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-sync-alt text-[#fb7185] w-5 mr-3"></i>
                                        <span class="text-sm">Realtempaj Aplikoj: <strong>15+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#fb7185] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#fb7185] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#fb7185] transition-colors"></i>
                                    </a>
                                    <a href="/competences/alpinejs" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#fb7185] transition-colors">Alpine.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#fb7185] transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#fb7185] transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#fb7185] transition-colors"></i>
                                    </a>
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#fb7185] transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#fb7185] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#fb7185] to-[#ec4899] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesata pri Livewire-Disvolviĝo?</h3>
                                <p class="text-sm mb-4">Pretas diskuti dinamikajn Laravel-aplikojn kun Livewire</p>
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

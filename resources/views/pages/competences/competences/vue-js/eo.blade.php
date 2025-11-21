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
                                    Antaŭparta Disvolviĝo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Vue.js
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4fc08d] to-[#34495e] flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-vuejs text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 vue-gradient">Vue.js</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-leaf mr-1"></i>
                                            Progresiva Kadro
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Progresiva JavaScript-kadro por konstrui uzant-interfacojn. Alirebla, multflanka kaj efika kadro por moderna reteja disvolviĝo.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Profesia Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.x</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Composition API</div>
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
                            <!-- Pri Vue.js -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#4fc08d] mr-3"></i>
                                    Pri Vue.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Vue.js</strong> estas progresiva JavaScript-kadro por konstrui uzant-interfacojn.
                                        Kontraste al aliaj monolitaj kadroj, Vue estas desegnita de la komenco por esti laŭgrade adoptata.
                                        La kernbiblioteko enfokusigas nur la prezento-tavolon kaj estas facile lernebla kaj integrebla kun aliaj bibliotekoj aŭ ekzistantaj projektoj.
                                    </p>

                                    <h3>Kerna Filozofio & Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Progresiva Kadro</strong> - Skalebla de biblioteko al plenfunkcia kadro</li>
                                        <li><strong>Alirebla</strong> - Facile lernebla kun HTML-bazita ŝablona sintakso</li>
                                        <li><strong>Multflanka</strong> - Povaj iloj por Unupagaj Aplikoj</li>
                                        <li><strong>Efika</strong> - Virtuala DOM kaj optimumigita renderado</li>
                                        <li><strong>Composition API</strong> - Pli bona logiko-reuzado kaj TypeScript-subteno</li>
                                        <li><strong>Riĉa Ekosistemo</strong> - Vue Router, Vuex/Pinia, Vue CLI kaj pli</li>
                                    </ul>

                                    <h3>Ideaj Uzkazoj</h3>
                                    <p>
                                        Vue.js bonegas en diversaj scenaroj de simplaj plibonigoj ĝis kompleksaj aplikoj:
                                    </p>
                                    <ul>
                                        <li>Progresiva plibonigo de ekzistantaj projektoj</li>
                                        <li>Unupagaj Aplikoj (SPA)</li>
                                        <li>Interaktivaj paneloj kaj datum-vizualigo</li>
                                        <li>Interfacoj de retkomerco kaj produkto-katalogoj</li>
                                        <li>Enhavo-administraj sistemoj kaj administraj paneloj</li>
                                        <li>Realtempaj aplikoj kaj kunlaboraj iloj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Vue.js -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#4fc08d] mr-3"></i>
                                    Mia Vojaĝo kun Vue.js
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Komencis labori kun Vue.js en 2020, komence kun Vue 2 por malgrandaj interaktivaj komponantoj.
                                        Laŭgrade adoptis pli altnivelajn ŝablonojn kaj transiris al Vue 3 kun Composition API.
                                        Dum 4+ jaroj, konstruis diversajn aplikojn de simplaj fenestraĵoj ĝis kompleksaj SPA.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code-branch text-[#4fc08d] mr-2"></i>
                                                Migrado de Vue 2 al Vue 3
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Sukcese migris projektojn de Vue 2 Options API al Vue 3 Composition API,
                                                utiligante plibonigitan TypeScript-subtenon kaj pli bonan kodo-organizon.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                                Ekosistemo-Integriĝo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Integris Vue kun diversaj malantaŭpartoj inkluzive Laravel API,
                                                konstruante plenŝtatajn aplikojn kun modernaj disvolviĝaj laborkuroj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Teknika Kompetenteco -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#4fc08d] mr-3"></i>
                                    Teknika Kompetenteco
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Solida kompreno de Vue.js-fundamentoj kombinita kun praktika sperto
                                        konstrui produktadajn aplikojn kun modernaj disvolviĝaj praktikoj.
                                    </p>

                                    <h3>Kernaj Vue.js-Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vue 3 Composition API</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Komponanto-Komponado & Reuzeblo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Reaktiva Stato-Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vue Router por SPA-Navigado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Formo-Priltraktado & Validado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API-Integriĝo & Datumo-Ekhavado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Direktivoj & Propraj Direktivoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testado kun Vue Test Utils</span>
                                        </div>
                                    </div>

                                    <h3>Altnivelaj Trajtoj & Ŝablonoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Composition API</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Teleport</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Suspense</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Provide/Inject</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Propraj Hokoj</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Ŝtopiloj</span>
                                    </div>

                                    <h3>Disvolviĝaj Iloj & Laborkuro</h3>
                                    <ul>
                                        <li><strong>Vue DevTools</strong> - Retumilo-etendaĵo por sencimigo kaj inspektado</li>
                                        <li><strong>Vite</strong> - Rapida konstru-ilo kaj disvolviĝa servilo</li>
                                        <li><strong>TypeScript-Integriĝo</strong> - Tip-sekura Vue-disvolviĝo</li>
                                        <li><strong>Vue CLI</strong> - Projekto-steligado kaj agordo</li>
                                        <li><strong>Unudosieraj Komponantoj (SFC)</strong> - .vue-dosieroj kun ŝablono, skripto kaj stilo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Ekosistemo & Stato-Administrado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#4fc08d] mr-3"></i>
                                    Ekosistemo & Stato-Administrado
                                </h2>
                                <div class="content-section">
                                    <h3>Stato-Administraj Solvoj</h3>
                                    <p>
                                        Sperto kun diversaj stato-administraj ŝablonoj kaj bibliotekoj en la Vue-ekosistemo:
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-purple-600 mb-2">Pinia (Moderna)</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Rekomendita stato-administra biblioteko por Vue 3 kun TypeScript-subteno,
                                                pli simpla API kaj pli bona disvolviĝa sperto.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-blue-600 mb-2">Vuex (Malnova)</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Centrigita stato-administrado por Vue 2-aplikoj,
                                                kun sperto en kompleksaj stato-ŝablonoj kaj moduloj.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Vue-Ekosistemaj Pakaĵoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Vue Router</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Vuex/Pinia</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Vue I18n</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Vuelidate</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Vue Meta</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Vue Chart.js</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Vue Draggable</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Vue Toast</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Projekto-Ekzemploj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#4fc08d] mr-3"></i>
                                    Projektoj & Implementado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Diversaj Vue.js-projektoj montrantaj diversajn implementad-ŝablonojn kaj uzkazojn:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham ĉe GitHub</span>
                                        </a>
                                    </div>
                                    <h3 class="mt-6">Notindaj Vue.js-Projektoj</h3>
                                    <ul>
                                        <li><strong>Interaktiva Panelo</strong> - Realtempaj metrikoj kun Vue 3 kaj Chart.js</li>
                                        <li><strong>Retkomerco-Produkto-Katalogo</strong> - Filtreblaj produkto-listoj kun Vue Router</li>
                                        <li><strong>Administra Administrada Panelo</strong> - CRUD-operacioj kun Pinia stato-administrado</li>
                                        <li><strong>Multpaŝa Formo-Aplikajo</strong> - Kompleksaj formo-laborkuroj kun validado</li>
                                        <li><strong>Realtempa Kunlabor-Ilo</strong> - Vue kun WebSocket-integríĝo</li>
                                        <li><strong>Portfolio-Retejo</strong> - SPA kun dinamika enhavo kaj animacioj</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetentec-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#4fc08d] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Vue.js</span>
                                            <span class="text-sm font-bold text-[#4fc08d]">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4fc08d] to-[#34495e]"
                                                 data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Vue 3 & Composition API</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Vue Router & Navigado</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Stato-Administrado</span>
                                            <span class="text-sm font-bold text-purple-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ekosistemo-Integriĝo</span>
                                            <span class="text-sm font-bold text-orange-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#4fc08d] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Vue 3.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-sync-alt text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Migrado: <strong>Vue 2 → Vue 3</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-puzzle-piece text-[#4fc08d] w-5 mr-3"></i>
                                        <span class="text-sm">Konstruitaj Komponantoj: <strong>50+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#4fc08d] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4fc08d] transition-colors">JavaScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                    </a>
                                    <a href="/competences/typescript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js-square text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4fc08d] transition-colors">TypeScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                    </a>
                                    <a href="/competences/html-css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-html5 text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4fc08d] transition-colors">HTML/CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                    </a>
                                    <a href="/competences/react" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-react text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4fc08d] transition-colors">React</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">65% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4fc08d] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#4fc08d] to-[#34495e] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesas Vue.js-disvolviĝo?</h3>
                                <p class="text-sm mb-4">Pretas diskuti modernajn Vue.js-aplikojn kaj SPA</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-green-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

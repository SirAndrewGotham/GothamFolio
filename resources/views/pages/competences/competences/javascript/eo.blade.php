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
                                <a href="/competences/frontend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Antaŭaĵa Evoluigo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        JavaScript
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#f7df1e] to-[#f9a825] flex items-center justify-center text-gray-800 shadow-lg">
                                <i class="fab fa-js text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 javascript-gradient">JavaScript</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Kern-Teĥnologio
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Programlingvo por interaktivaj retpaĝoj. La fundamento de moderna retevoluigo kun 9+ jaroj da profesia sperto.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center text-yellow-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Lerteca Nivelo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">9+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Profesia Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">ES6+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Modernaj Normoj</div>
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
                            <!-- Pri JavaScript -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#f7df1e] mr-3"></i>
                                    Pri JavaScript
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>JavaScript</strong> estas la programlingvo de la reto, ebligante interaktivan kaj dinamikan uzantosperton.
                                        De simplaj DOM-manipuladoj ĝis kompleksaj unupaĝaj aplikaĵoj, JavaScript evoluis en multflankan lingvon
                                        kiu potencas modernan retevoluigon tra antaŭaĵo, malantaŭaĵo kaj movilaj platformoj.
                                    </p>

                                    <h3>Ĉefaj Trajtoj & Evoluo</h3>
                                    <ul>
                                        <li><strong>ES6+ Moderna Sintakso</strong> - Sago-funkcioj, klasoj, moduloj, destructuring</li>
                                        <li><strong>Nesinkrona Programado</strong> - Promesoj, async/await, okazaĵ-ciklo</li>
                                        <li><strong>DOM Manipulado</strong> - Dinamika enhavo-ĝisdatigo kaj uzant-interagoj</li>
                                        <li><strong>Kruc-platforma</strong> - Retumilo, servilo (Node.js), movila (React Native)</li>
                                        <li><strong>Riĉa Ekosistemo</strong> - NPM-pakaĵoj, kadroj kaj iloj</li>
                                        <li><strong>Tipaj Sistemoj</strong> - TypeScript-integrado por grandskalaj aplikaĵoj</li>
                                    </ul>

                                    <h3>Profesia Apliko</h3>
                                    <p>
                                        JavaScript estas esenca por krei modernajn retspertojn:
                                    </p>
                                    <ul>
                                        <li>Interaktivaj uzant-interfacoj kaj dinamika enhavo</li>
                                        <li>Unupaĝaj Aplikaĵoj (SPA) kun kadroj</li>
                                        <li>Realtempaj trajtoj kaj WebSocket-komunikadoj</li>
                                        <li>Form-valido kaj uzant-eniga prilaborado</li>
                                        <li>API-integrado kaj datum-vizualigo</li>
                                        <li>Progresivaj Retaplikaĵoj (PWA) kaj senkonekta funkcieco</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia JavaScript Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#f7df1e] mr-3"></i>
                                    Mia JavaScript Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Komencis kun JavaScript en 2015, komence por bazaj DOM-manipuladoj kaj form-validadoj.
                                        Dum 9+ jaroj, progresis tra jQuery-epoko al moderna ES6+ evoluigo, majstrante kadrojn
                                        kaj altnivelajn JavaScript-konceptojn por kompleksaj retaplikaĵoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code text-[#f7df1e] mr-2"></i>
                                                De jQuery al Moderna JS
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Transiris de jQuery-bazita evoluigo al moderna vanila JavaScript kaj kadroj,
                                                alprenante ES6+ trajtojn kaj modernajn evoluigajn praktikojn.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                                Kadra Evoluo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Laboris kun multaj JavaScript-kadroj kaj bibliotekoj, adaptante al ekosistemaj ŝanĝoj
                                                dum konservante kernan JavaScript-kompetentecon.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Teknika Kompetenteco -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#f7df1e] mr-3"></i>
                                    Teknika Kompetenteco
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Profunda kompreno de JavaScript-fundamentoj kombinita kun praktika sperto tra
                                        diversaj kadroj kaj evoluigaj scenaroj.
                                    </p>

                                    <h3>Kernaj JavaScript-Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>ES6+ Moderna Sintakso</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Nesinkrona Programado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>DOM Manipulado & Okazaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Objekto-Orienta & Funkcia Programado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eraro-Traktado & Senerarigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimento-Optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Retumilo-APIoj & Konservejo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Modulaj Sistemoj & Pakaĵistoj</span>
                                        </div>
                                    </div>

                                    <h3>Altnivelaj Konceptoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Fermoj</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Promesoj</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Async/Await</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Prototipoj</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Okazaĵ-Ciklo</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Web Workers</span>
                                    </div>

                                    <h3>Evoluigaj Iloj & Medio</h3>
                                    <ul>
                                        <li><strong>Senerarigo</strong> - Chrome DevTools, retumilaj konzoloj, senerarigaj iloj</li>
                                        <li><strong>Testado</strong> - Jest, Mocha, testaj bibliotekoj kaj kadroj</li>
                                        <li><strong>Konstruaj Iloj</strong> - Webpack, Vite, pakaĵ-administriloj (npm, yarn)</li>
                                        <li><strong>Kontrolado</strong> - ESLint, Prettier por koda kvalito</li>
                                        <li><strong>Tipaj Sistemoj</strong> - TypeScript por tiposekura evoluigo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Kadra Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#f7df1e] mr-3"></i>
                                    Kadra & Biblioteka Sperto
                                </h2>
                                <div class="content-section">
                                    <h3>Moderna Kadra Kompetenteco</h3>
                                    <p>
                                        Sperto kun ĉefaj JavaScript-kadroj kaj bibliotekoj por diversaj uzkazoj:
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-green-600 mb-2">Vue.js Ekosistemo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vue 2/3, Vue Router, Pinia/Vuex, Composition API. Konstruado de reaktivaj kaj subteneblaj aplikaĵoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-blue-600 mb-2">React & Ekosistemo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                React Hooks, Context API, React Router, statadministraj ŝablonoj.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Aldonaj Bibliotekoj & Iloj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">jQuery</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Axios</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Lodash</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Chart.js</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Alpine.js</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">D3.js</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Three.js</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">GSAP</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Projekto-Ekzemploj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#f7df1e] mr-3"></i>
                                    Projektoj & GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Diversaj JavaScript-projektoj montrantaj diversajn aspektojn de la lingvo kaj ekosistemo:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham ĉe GitHub</span>
                                        </a>
                                    </div>
                                    <h3 class="mt-6">Notindaj JavaScript-Projektoj</h3>
                                    <ul>
                                        <li><strong>Interaktivaj Informtabeloj</strong> - Realtempa datum-vizualigo kun Chart.js kaj D3.js</li>
                                        <li><strong>SPA Aplikaĵoj</strong> - Unupaĝaj aplikaĵoj kun Vue.js kaj React</li>
                                        <li><strong>Formo-Procesiloj</strong> - Kompleksa formo-traktado kun valido kaj dinamikaj kampoj</li>
                                        <li><strong>API-Klientoj</strong> - JavaScript-aplikaĵoj konsumantaj REST kaj GraphQL APIojn</li>
                                        <li><strong>Animaciaj Projektoj</strong> - Interaktivaj animacioj uzante GSAP kaj CSS-transirojn</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Lerteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#f7df1e] mr-2"></i>
                                    Lerteca Nivelo
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta JavaScript</span>
                                            <span class="text-sm font-bold text-[#f7df1e]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#f7df1e] to-[#f9a825]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Moderna JS ES6+</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">DOM Manipulado</span>
                                            <span class="text-sm font-bold text-blue-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Nesinkrona Programado</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Kadroj</span>
                                            <span class="text-sm font-bold text-red-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#f7df1e] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#f7df1e] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>9+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#f7df1e] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>ES6+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#f7df1e] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>40+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-sync-alt text-[#f7df1e] w-5 mr-3"></i>
                                        <span class="text-sm">Kadroj: <strong>Vue, React</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-mobile-alt text-[#f7df1e] w-5 mr-3"></i>
                                        <span class="text-sm">Platformoj: <strong>Reto, Movila</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#f7df1e] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/vue" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-vuejs text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#f7df1e] transition-colors">Vue.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f7df1e] transition-colors"></i>
                                    </a>
                                    <a href="/competences/html-css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-html5 text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#f7df1e] transition-colors">HTML/CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f7df1e] transition-colors"></i>
                                    </a>
                                    <a href="/competences/typescript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js-square text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#f7df1e] transition-colors">TypeScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f7df1e] transition-colors"></i>
                                    </a>
                                    <a href="/competences/nodejs" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-node-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#f7df1e] transition-colors">Node.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f7df1e] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#f7df1e] to-[#f9a825] rounded-xl shadow-lg p-6 text-gray-800 fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesata pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Preta diskuti JavaScript-projektojn kaj modernan retevoluigon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-yellow-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

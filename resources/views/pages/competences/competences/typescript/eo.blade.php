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
    <section class="py-16">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Ĉefa Enhavo -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- Pri TypeScript -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                Pri TypeScript
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>TypeScript</strong> estas severe tipizita programlingvo kiu konstruiĝas sur JavaScript,
                                    donante al vi pli bonajn ilojn je iu ajn skalo. Ĝi aldonas nedevigajn statikajn tipojn, klasojn kaj modulojn
                                    al JavaScript, ebligante al programistoj skribi pli fortikan kaj subteneblan kodon.
                                </p>

                                <h3>Ĉefaj Avantaĝoj</h3>
                                <ul>
                                    <li><strong>Tipa Sekureco</strong> - Kapti erarojn dum kompilado anstataŭ dum rulado</li>
                                    <li><strong>Plibonigita IDE-Subteno</strong> - Pli bona aŭtkompletado, refaktorado kaj navigado</li>
                                    <li><strong>Skaleblaj Kodobazoj</strong> - Administri grandajn kodobazojn kun konfido</li>
                                    <li><strong>Modernaj JavaScript-Trajtoj</strong> - Aliro al la lastaj ECMAScript-trajtoj</li>
                                    <li><strong>Grada Adopto</strong> - Migri JavaScript-projektojn laŭgrade</li>
                                    <li><strong>Riĉa Ekosistemo</strong> - Bonega subteno de kadroj kaj bibliotekoj</li>
                                </ul>

                                <h3>Kernaj Trajtoj</h3>
                                <p>
                                    TypeScript enkondukas potencajn trajtojn kiuj plibonigas JavaScript-disvolviĝon:
                                </p>
                                <ul>
                                    <li><strong>Statica Tipizacio</strong> - Nedevigaj tipaj anotaĵoj kaj tipo-inferenco</li>
                                    <li><strong>Interfacoj kaj Tipoj</strong> - Difini objekto-formojn kaj kontraktojn</li>
                                    <li><strong>Generikoj</strong> - Krei reuzeblajn, tip-sekurajn komponantojn</li>
                                    <li><strong>Dekoracioj</strong> - Aldoni metadatumojn kaj modifi klas-konduton</li>
                                    <li><strong>Nomspacoj kaj Moduloj</strong> - Pli bona kodo-organizado</li>
                                    <li><strong>Altnivelaj Iloj</strong> - Riĉa lingvo-servo kaj kompililo-opcioj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Vojaĝo kun TypeScript -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-blue-500 mr-3"></i>
                                Mia Vojaĝo kun TypeScript
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi komencis uzi TypeScript en 2020 kiam laborante pri grandskalaj antaŭpartaj aplikoj
                                    kiuj postulis pli bonan subteneblecon kaj programista sperto. Dum la lastaj 3+ jaroj,
                                    mi adoptis TypeScript tra diversaj projektoj, de malgrandaj utilaĵoj ĝis entreprenaj aplikoj.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fab fa-vuejs text-blue-500 mr-2"></i>
                                            Vue.js-Integriĝo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Vasta sperto kun TypeScript en Vue.js-aplikoj,
                                            inkluzive Composition API kaj klas-komponantoj.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fab fa-react text-purple-500 mr-2"></i>
                                            React-Disvolviĝo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kompleta TypeScript-integríĝo kun React-hokoj,
                                            kunteksto kaj tipoj de triapartaj bibliotekoj.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mia Sperto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                Mia Sperto kun TypeScript
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kun 3+ jaroj da TypeScript-sperto, mi disvolvis kompletan kompetentecon
                                    en tipo-sistemo-dizajno, ilo-agordo kaj kadro-integríĝo tra
                                    diversaj projekto-skaloj kaj kompleksecoj.
                                </p>

                                <h3>Specialigitaj Kapabloj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Altnivelaj tipo-sistemaj trajtoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Generika programado kaj limigoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Deklaro-dosiera kreado kaj subteno</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Kompililo-agordo kaj optimumigo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Kadro-specifaj tipo-ŝablonoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Migrad-strategioj de JavaScript</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Konstru-ilo-integríĝo kaj optimumigo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Rendimenta kontrolado kaj sencimigo</span>
                                    </div>
                                </div>

                                <h3>Teknologio-Integriĝo</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Vue 3</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">React</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Node.js</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Nuxt.js</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Vite</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Webpack</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Jest</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">ESLint</span>
                                </div>

                                <h3>Tipo-Sistemo-Majstrado</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                        <h4 class="font-bold text-blue-500 mb-2">Altnivelaj Tipoj</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Kondiĉaj tipoj kaj infer-vorteto</li>
                                            <li>• Mapitaj tipoj kaj ŝlosilo-remapado</li>
                                            <li>• Ŝablonaliteralaj tipoj</li>
                                            <li>• Rekursivaj tipo-difinoj</li>
                                            <li>• Markitaj tipoj kaj tipo-gardistoj</li>
                                        </ul>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                        <h4 class="font-bold text-blue-500 mb-2">Praktikaj Ŝablonoj</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Diskriminaciaj unioj</li>
                                            <li>• Konstruisto kaj fabriko-ŝablonoj</li>
                                            <li>• Dependenco-injekcio kun tipoj</li>
                                            <li>• Stato-administra tipizacio</li>
                                            <li>• API-kliento tipo-generado</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kadro-Integriĝo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-blue-500 mr-3"></i>
                                Kadro-Integriĝo & Iloj
                            </h2>
                            <div class="content-section">
                                <h3>Vue.js kun TypeScript</h3>
                                <p>
                                    Mi havas vastan sperton integrigante TypeScript kun Vue.js:
                                </p>
                                <ul>
                                    <li><strong>Composition API</strong> - Tip-sekura reaktiva stato kaj composebloj</li>
                                    <li><strong>Klas-Komponantoj</strong> - Vue class component kun dekoracioj</li>
                                    <li><strong>Komponanto-Tipizacio</strong> - Propraĵoj, emit-oj kaj ŝtopiloj tipo-difinoj</li>
                                    <li><strong>Vuex/Pinia</strong> - Tip-sekuraj stato-administraj solvoj</li>
                                    <li><strong>Vue Router</strong> - Tipigitaj vojo-parametroj kaj navigado</li>
                                    <li><strong>Propraj Direktivoj</strong> - Tip-sekura direktivo-disvolviĝo</li>
                                </ul>

                                <h3>React kun TypeScript</h3>
                                <p>
                                    Kompleta TypeScript-integríĝo en React-ekosistemoj:
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Hoko-Tipizacio</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Tip-sekuraj propraj hokoj kun ĝustaj generikoj kaj reven-tipoj
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Context API</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Severe tipigitaj kunteksto-provizantoj kaj konsumantoj
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Komponanto-Ŝablonoj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Generikaj komponantoj, HOC-oj kaj render-props kun tipoj
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Stato-Administrado</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Redux, Zustand kaj aliaj stato-bibliotekoj kun TypeScript
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Migrado & Bonaj Praktikoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-shipping-fast text-blue-500 mr-3"></i>
                                Migrad-Strategioj & Bonaj Praktikoj
                            </h2>
                            <div class="content-section">
                                <h3>JavaScript al TypeScript-Migrado</h3>
                                <p>
                                    Mi sukcese migris multajn projektojn de JavaScript al TypeScript:
                                </p>
                                <ul>
                                    <li><strong>Grada Migrado</strong> - Laŭgrada adopto kun allowJs kaj checkJs</li>
                                    <li><strong>Deklaro-Dosieroj</strong> - Krei tipo-difinojn por ekzistantaj JavaScript-bibliotekoj</li>
                                    <li><strong>Konstru-Tubo-Ĝisdatigoj</strong> - Agordi TypeScript en ekzistantaj konstru-sistemoj</li>
                                    <li><strong>Team-Trejnado</strong> - Edukante teamojn pri TypeScript-konceptoj kaj avantaĝoj</li>
                                    <li><strong>Kodo-Kvalito-Plibonigo</strong> - Utiligante tipojn por refaktori kaj plibonigi kodon</li>
                                </ul>

                                <h3>Disvolviĝaj Bonaj Praktikoj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Strikta Agordo</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Implementado de strikta reĝimo kaj kompleta tipo-kontrolado
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Projekto-Strukturo</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Organizante tipo-difinojn kaj modul-limojn
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Rendimenta Optimumigo</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kompililo-agordo por optimumaj konstru-tempoj
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-blue-500 mb-2">Ilo-Integriĝo</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            ESLint, Prettier kaj test-kadroj kun TypeScript
                                        </p>
                                    </div>
                                </div>

                                <h3>Notindaj Migrad-Projektoj</h3>
                                <ul>
                                    <li><strong>Granda E-comerca Platformo</strong> - Migrita Vue.js-aplikajo kun 100k+ LOC</li>
                                    <li><strong>Financa Panelo</strong> - React-aplikajo kun kompleksa stato-administrado</li>
                                    <li><strong>Realtema Kunlabor-Ilo</strong> - Vue 3 Composition API-migrado</li>
                                    <li><strong>Malnova AngularJS-Aplikajo</strong> - Modernigo kun TypeScript</li>
                                    <li><strong>Node.js Mikroservoj</strong> - Malantaŭparta servo tipo-sekureco-implementado</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Flankmenuo -->
                    <div class="space-y-6">
                        <!-- Kompetentec-Karto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                Nivelo de Kompetenteco
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Tuta Kompetenteco</span>
                                        <span class="text-sm font-bold text-blue-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500"
                                             data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Tipo-Sistemo</span>
                                        <span class="text-sm font-bold text-purple-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Kadro-Integriĝo</span>
                                        <span class="text-sm font-bold text-green-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Iloj & Agordo</span>
                                        <span class="text-sm font-bold text-yellow-500">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="78%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Migrada Sperto</span>
                                        <span class="text-sm font-bold text-red-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="75%" style="width: 0%"></div>
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
                                    <i class="fas fa-code-branch text-blue-500 w-5 mr-3"></i>
                                    <span class="text-sm">Projektoj: <strong>25+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fab fa-vuejs text-blue-500 w-5 mr-3"></i>
                                    <span class="text-sm">Kadroj: <strong>Vue & React</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-magic text-blue-500 w-5 mr-3"></i>
                                    <span class="text-sm">Migrado: <strong>10+ projektoj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-tools text-blue-500 w-5 mr-3"></i>
                                    <span class="text-sm">Iloj: <strong>Altnivela agordo</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- TypeScript-Trajtoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-star text-blue-500 mr-2"></i>
                                Uzataj Altnivelaj Trajtoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Generikoj & Kondiĉaj Tipoj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Mapitaj & Ŝablonaliteralaj Tipoj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Deklaro-Kunfando</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-spinner text-xs"></i>
                                    </div>
                                    <span class="text-sm">Dekoracioj & Metadatumoj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Projekto-Referencoj</span>
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
                                <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-vuejs text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-blue-500 transition-colors">Vue.js</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                </a>
                                <a href="/competences/react" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-react text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-blue-500 transition-colors">React</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                </a>
                                <a href="/competences/nodejs" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-node-js text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-blue-500 transition-colors">Node.js</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div class="bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas TypeScript-kompetentecon?</h3>
                            <p class="text-sm mb-4">Ni konstruu tip-sekurajn, skaleblajn aplikojn</p>
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

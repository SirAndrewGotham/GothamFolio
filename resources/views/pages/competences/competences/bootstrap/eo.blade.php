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
                                    Frontend-Programado
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Bootstrap
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-purple-500 to-violet-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-bootstrap text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Bootstrap</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-mobile-alt mr-1"></i>
                                            Respondema Dizajno
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                La plej populara CSS-kadaro en la mondo por evoluigi respondemajn, poŝtelefon-unuajn retejojn kaj aplikaĵojn
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Lerteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">8+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">100+</div>
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
                            <!-- Pri Bootstrap -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                    Pri Bootstrap
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Bootstrap</strong> estas la plej populara antaŭa malfermkoda ilaro en la mondo,
                                        enhavanta Sass variablojn kaj miksilojn, respondeman retsistemon, ampleksajn antaŭkonstruitajn komponantojn,
                                        kaj potencajn JavaScript kromprogramojn. Ĝi helpas programistojn konstrui respondemajn, poŝtelefon-unuajn projektojn
                                        en la reto kun facileco kaj efikeco.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Rapida Evoluigo</strong> - Antaŭkonstruitaj komponantoj kaj utilaĵoj akcelas evoluigon</li>
                                        <li><strong>Respondema Retsistemo</strong> - Poŝtelefon-unua aliro kun interrompsistema sistemo</li>
                                        <li><strong>Krospanjla Kongrueco</strong> - Konstanta renderado tra ĉiuj modernaj retumiloj</li>
                                        <li><strong>Agordebla</strong> - Vastaj temigaj kapabloj kun Sass variabloj</li>
                                        <li><strong>Granda Komunumo</strong> - Vasta ekosistemo de rimedoj kaj triapartiaj komponantoj</li>
                                        <li><strong>Alirebleco</strong> - Konstruita kun alireblecaj bonaj praktikoj en menso</li>
                                    </ul>

                                    <h3>Kernaj Trajtoj</h3>
                                    <p>
                                        Bootstrap provizas kompletan aron de trajtoj por moderna reta evoluigo:
                                    </p>
                                    <ul>
                                        <li><strong>Respondema Retsistemo</strong> - 12-kolumna flua reto kun multoblaj interromppunktoj</li>
                                        <li><strong>Antaŭstilitaj Komponantoj</strong> - Butonoj, kartoj, modaloj, navigaciaj bretoj, kaj pli</li>
                                        <li><strong>Utilaj Klasoj</strong> - Spacigaj, tipografiaj, koloraj, kaj montraj utilaĵoj</li>
                                        <li><strong>JavaScript Kromprogramoj</strong> - Interaktivaj komponantoj sen propra JavaScript</li>
                                        <li><strong>Agordado</strong> - Sass variabloj kaj miksiloj por kompleta dizajna kontrolo</li>
                                        <li><strong>Ikonoj</strong> - Bootstrap Icons biblioteko por konsekvenca ikonografio</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Bootstrap -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-purple-500 mr-3"></i>
                                    Mia Vojaĝo kun Bootstrap
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Bootstrap en 2015 kun versio 3, kaj sekvis ĝian evoluon tra
                                        gravaj eldonoj inkluzive Bootstrap 4 kaj la nuna Bootstrap 5. Dum 8+ jaroj, mi uzis
                                        Bootstrap en sennombraj projektoj, de simplaj surteriĝaj paĝoj al kompleksaj entreprenaj aplikaĵoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code text-purple-500 mr-2"></i>
                                                Versia Evoluo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Profunda sperto tra Bootstrap 3, 4, kaj 5, komprenante
                                                migradajn vojojn kaj novajn trajtojn.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-paint-brush text-blue-500 mr-2"></i>
                                                Agordada Eksperteco
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vasta sperto agordante Bootstrap-etosojn kaj
                                                kreante unikajn dezajnojn dum konservante kadrajn avantaĝojn.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                    Mia Sperto kun Bootstrap
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 8+ jaroj da Bootstrap-sperto tra 100+ projektoj, mi evoluigis kompletan
                                        ekspertecon en utiligado de la plena potencialo de Bootstrap dum kreado de propraj, markokongruaj dezajnoj.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Altnivela retsistema utiligo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propra komponanta evoluigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Sass-agordado kaj temigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>JavaScript-kromprograma integrigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Respondema dizajna optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Konstruila integrigo (Webpack, Gulp)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimentaj optimumigaj teknikoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Krospanjla kongrueca testado</span>
                                        </div>
                                    </div>

                                    <h3>Kadra Integrigo</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Bootstrap 5</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Bootstrap 4</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Bootstrap 3</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Sass</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">jQuery</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Webpack</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Gulp</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">NPM</span>
                                    </div>

                                    <h3>Komponanta Majstrado</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-purple-500 mb-2">Aranĝaj Komponantoj</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Retsistemo kaj fleksoskatolaj utilaĵoj</li>
                                                <li>• Navigaciaj bretoj kaj paneroj</li>
                                                <li>• Kartoj kaj ĵumbotronoj</li>
                                                <li>• Modaloj kaj konsiletoj</li>
                                                <li>• Karuseloj kaj akordionoj</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-purple-500 mb-2">Formularaj Komponantoj</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Propraj formularaj kontroloj</li>
                                                <li>• Enigaj grupoj kaj validigo</li>
                                                <li>• Elektaj menuoj kaj glitiloj</li>
                                                <li>• Markobutonoj kaj radiobutonoj</li>
                                                <li>• Dosieralŝutaj komponantoj</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Altnivela Agordado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-purple-500 mr-3"></i>
                                    Altnivela Agordado & Temigo
                                </h2>
                                <div class="content-section">
                                    <h3>Sass-Agordado</h3>
                                    <p>
                                        Mi havas vastan sperton agordadi Bootstrap per Sass:
                                    </p>
                                    <ul>
                                        <li><strong>Variabla Superregado</strong> - Agordado de koloroj, spacigoj kaj tipografio</li>
                                        <li><strong>Komponanta Modifado</strong> - Etendado kaj modifado de ekzistantaj komponantoj</li>
                                        <li><strong>Utila Generado</strong> - Kreado de propraj utilaj klasoj</li>
                                        <li><strong>Miksila Uzado</strong> - Utiligado de Bootstrap-miksiloj por propraj komponantoj</li>
                                        <li><strong>Modula Importado</strong> - Importado de nur necesaj komponantoj por optimumigo</li>
                                        <li><strong>Temo-Kreado</strong> - Konstruado de kompletoj propraj temoj de nulo</li>
                                    </ul>

                                    <h3>Konstru-Proceza Integrigo</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Konstruaj Iloj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Integrigo kun Webpack, Gulp, kaj aliaj konstruaj sistemoj por optimumigita eligo
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Rendimenta Optimumigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Forigo de neuzataj komponantoj kaj optimumigo de CSS-liverado
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">CDN-Strategioj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efektivigo de CDN-liverado kun rezervstrategioj
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Versia Administrado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Administrado de Bootstrap-dependecoj kaj versiaj ĝisdatigoj
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Realmondaj Aplikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-layer-group text-purple-500 mr-3"></i>
                                    Realmondaj Aplikoj & Projektoj
                                </h2>
                                <div class="content-section">
                                    <h3>Projektaj Tipoj</h3>
                                    <p>
                                        Mi sukcese implementis Bootstrap en diversaj realmondaj scenaroj:
                                    </p>
                                    <ul>
                                        <li><strong>Korporaciaj Retejoj</strong> - Profesiaj negocaj ejoj kun konsekvenca markado</li>
                                        <li><strong>Komercretoj</strong> - Produktaj katalogoj kaj aĉetaj interfacoj</li>
                                        <li><strong>Administraj Paneloj</strong> - Kompleksaj datuma vidigado kaj administraj interfacoj</li>
                                        <li><strong>Surteriĝaj Paĝoj</strong> - Altkonversiaj merkataj paĝoj</li>
                                        <li><strong>Retaj Aplikaĵoj</strong> - Interaktivaj unupaqaj aplikaĵoj</li>
                                    </ul>

                                    <h3>Integrigaj Ŝablonoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Malantaŭa Integrigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Integrigo kun Laravel, Django, kaj aliaj malantaŭaj kadroj
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">JavaScript-Kadroj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Uzado kun Vue.js, React, kaj aliaj modernaj antaŭaj kadroj
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">CMS-Integrigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efektivigo kun WordPress, Joomla, kaj aliaj enhavadministraj sistemoj
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Progresivaj Retaj Aplikaĵoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Konstruado de PWA kun Bootstrap por poŝtelefon-unuaj spertoj
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Notindaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Entreprena CRM-Sistemo</strong> - Propra Bootstrap-etoso por grandskala negoca aplikaĵo</li>
                                        <li><strong>Eduka Platformo</strong> - Respondema lernadministra sistemo</li>
                                        <li><strong>Sana Portalo</strong> - Alirebla paciento-administra interfaco</li>
                                        <li><strong>Komercreta Merkato</strong> - Multvendista platformo kun propraj komponantoj</li>
                                        <li><strong>Registara Portalo</strong> - WCAG-kongrua publika servo-retejo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flanka Strio -->
                        <div class="space-y-6">
                            <!-- Lertostria Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                    Nivelo de Lerteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Lerteco</span>
                                            <span class="text-sm font-bold text-purple-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-violet-500"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Retsistemo & Aranĝo</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Agordado & Temigo</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Komponanta Evoluigo</span>
                                            <span class="text-sm font-bold text-yellow-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Rendimenta Optimumigo</span>
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
                                    <i class="fas fa-lightbulb text-purple-500 mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>8+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-layer-group text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code-branch text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Versioj: <strong>3, 4, 5</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-mobile-alt text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Alproksimiĝo: <strong>Poŝtelefon-Unua</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-paint-brush text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Etosoj: <strong>Propraj & Altkvalitaj</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Bootstrap Versioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-history text-purple-500 mr-2"></i>
                                    Versia Sperto
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Bootstrap 3 - Heredaj Projektoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Bootstrap 4 - Fleksoskatolo & Kartoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Bootstrap 5 - jQuery-Forigo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Bootstrap Icons Integrigo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Estonta Bootstrap 6</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-purple-500 mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-css3-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/sass" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-pink-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-sass text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Sass</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/javascript" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-js text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">JavaScript</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/responsive-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-mobile-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Respondema Dizajno</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-purple-500 to-violet-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas Bootstrap-ekspertecon?</h3>
                                <p class="text-sm mb-4">Ni kreu respondemajn, belajn interfacojn</p>
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

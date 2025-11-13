<x-frontend.layouts.app>
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
                                    Antaŭtaga Disvolviĝo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Tailwind CSS
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#06b6d4] to-[#0891b2] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-wind text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Tailwind CSS</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                    <span class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-bolt mr-1"></i>
                                        Utility-First
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Utila-unua CSS-kadro por rapida UI-disvolviĝo kun respondema dezajno kaj moderna laborfluo.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center text-[#06b6d4] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#06b6d4] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde Tailwind 1.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#06b6d4] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v3.4+</div>
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
                            <!-- Pri Tailwind CSS -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#06b6d4] mr-3"></i>
                                    Pri Tailwind CSS
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Tailwind CSS</strong> estas utila-unua CSS-kadro kiu ebligas rapidan UI-disvolviĝon
                                        sen skribi propran CSS. Malsame al tradiciaj CSS-kadroj, Tailwind provizas malaltnivelajn
                                        utilajn klasojn kiuj permesas konstrui tute proprajn dezajnojn rekte en via markado.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Utila-Unua Aliro</strong> — Konstruu kompleksajn dezajnojn sen forlasi HTML</li>
                                        <li><strong>Responema Defaŭlte</strong> — Konstruitaj respondemaj dezajnaj utilaĵoj</li>
                                        <li><strong>Alte Agordebla</strong> — Plena kontrolo super dezajna sistemo</li>
                                        <li><strong>Rendimento Optimigita</strong> — PurgeCSS-integrado por minimuma dosiergrando</li>
                                        <li><strong>Disvolvista Sperto</strong> — Bonegaj iloj kaj IntelliSense-subteno</li>
                                        <li><strong>Komponent-Amika</strong> — Perfekta por komponent-bazitaj kadroj</li>
                                        <li><strong>Malhela Reĝimo Subtenata</strong> — Unuaklasa malhela reĝimo efektivigo</li>
                                    </ul>

                                    <h3>Disvolva Filozofio</h3>
                                    <p>
                                        Tailwind alprenas modernan aliron al CSS-disvolviĝo:
                                    </p>
                                    <ul>
                                        <li>Limigoj kondukas al konsekvenco kaj pli rapida disvolviĝo</li>
                                        <li>Utilaj klasoj estas kunmeteblaj kaj antaŭvideblaj</li>
                                        <li>Dezajnaj decidoj estas videblaj kaj serĉeblaj en markado</li>
                                        <li>Ne kuntekstŝanĝo inter HTML kaj CSS-dosieroj</li>
                                        <li>Dezajna sistemo estas devigita per agordo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Tailwind Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#06b6d4] mr-3"></i>
                                    Mia Tailwind CSS Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Tailwind CSS en 2019 kun versio 1.0, komence skeptika sed rapide
                                        fariĝis forta advokato post sperti la produktivecajn gajnojn. Dum pli ol 4 jaroj,
                                        mi progresis de baza utilaĵa uzo al progresinta agordo, kromprograma disvolviĝo,
                                        kaj establo de dezajnaj sistemoj trans multaj organizoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-palette text-[#06b6d4] mr-2"></i>
                                                Dezajnaj Sistemoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreis kompreneblajn dezajnajn sistemojn kun propraj agordoj,
                                                certigante videblan konsekvencon trans grandaj aplikaĵoj kaj teamoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-purple-500 mr-2"></i>
                                                Rendimento-Optimigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Optimigis Tailwind-konstruaĵojn kun PurgeCSS, JIT-reĝimo,
                                                kaj propraj agordoj por optimuma rendimento.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#06b6d4] mr-3"></i>
                                    Mia Tailwind CSS Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 4 jaroj da Tailwind CSS sperto trans 40+ projektoj, mi konstruis ĉion de
                                        simplaj merkatikaj paĝoj al kompleksaj entreprenaj aplikaĵoj, konstante liverante
                                        belajn, respondemajn interfacojn kun escepta disvolva rapideco.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Progresinta Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propra Kromprograma Disvolviĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dezajna Sistemo Efektivigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Respondemaj Dezajnaj Ŝablonoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Malhela Reĝimo Efektivigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rendimento-Optimigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Komponenta Eltiro</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Integriĝo kun Kadroj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Alirebleco Plej Bonaj Praktikoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Animacioj & Transiroj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Konstrua Procezo-Optimigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Teamtrejnado & Normoj</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Tailwind-Projektoj</h3>
                                    <ul>
                                        <li><strong>Entreprena SaaS Platformo</strong> — Komprenebla dezajna sistemo kun 50+ komponentoj</li>
                                        <li><strong>Redezajno de Retbutiko</strong> — Movebla-unua respondema dezajno kun 60% pli rapida disvolviĝo</li>
                                        <li><strong>Dezajna Sistemo Biblioteko</strong> — Propra Tailwind-agordo por marka konsekvenco</li>
                                        <li><strong>Administra Panelo</strong> — Kompleksaj aranĝoj kun malhela reĝimo kaj alirebleco</li>
                                        <li><strong>Merkatika Retejo</strong> — Altrendimenta statika retejo kun animacioj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Progresintaj Tailwind-Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#06b6d4] mr-3"></i>
                                    Progresintaj Tailwind-Trajtoj
                                </h2>
                                <div class="content-section">
                                    <h3>Progresinta Agordo & Propraĵigo</h3>
                                    <p>
                                        Sperteco en la potencaj agordeblaj kapabloj de Tailwind:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Propraj Dezajnaj Sistemoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Etendante Tailwind kun propraj koloroj, spacigoj,
                                                tipografio-skaloj kaj komponentaj bibliotekoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Kromprograma Disvolviĝo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreante proprajn kromprogramojn por reuzeblaj utilaĵoj,
                                                komponentoj kaj kadraj integriĝoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">JIT-Reĝimo Optimigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Utiligante Just-In-Time reĝimon por senlimaj
                                                utilaĵoj kaj dinamika klasa generado.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#06b6d4] mb-2">Rendimento Agordado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Optimigante konstruajn procezojn, PurgeCSS-agordon,
                                                kaj kritikan CSS-eltiron.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Moderna Laborfluo Integriĝo</h3>
                                    <p>
                                        Senŝova integriĝo kun modernaj disvolvigaj iloj:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">VSCode IntelliSense</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">PostCSS Agordo</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Laravel Mix</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Vite Integriĝo</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Webpack Agordo</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">CI/CD Duktoj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Dezajnaj Sistemoj & Komponentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-layer-group text-[#06b6d4] mr-3"></i>
                                    Dezajnaj Sistemoj & Komponentoj
                                </h2>
                                <div class="content-section">
                                    <h3>Komponenta Arkitekturo</h3>
                                    <p>
                                        Konstruado de prizorgataj, skaleblaj komponentaj sistemoj kun Tailwind:
                                    </p>
                                    <ul>
                                        <li><strong>Utila-Unuaj Komponentoj</strong> — Kunmeteblaj komponentoj uzantaj utilajn klasojn</li>
                                        <li><strong>@apply Direktivo</strong> — Eltirado de ripetitaj utilaj ŝablonoj</li>
                                        <li><strong>Komponentaj Bibliotekoj</strong> — Konstruado de reuzeblaj komponentaj sistemoj</li>
                                        <li><strong>Dezajnaj Signoj</strong> — Konsekvenca spacigo, koloroj kaj tipografio</li>
                                        <li><strong>Respondemaj Komponentoj</strong> — Movebla-unua komponenta dezajno</li>
                                        <li><strong>Alireblaj Komponentoj</strong> — WCAG-konformaj interfacaj elementoj</li>
                                    </ul>

                                    <h3>Integriĝaj Ŝablonoj</h3>
                                    <p>
                                        Sperto integrigante Tailwind kun diversaj kadroj kaj iloj:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Laravel Blade-Komponentoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vue.js Unudosieraj Komponentoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>React Funkciaj Komponentoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Alpine.js Interaktivaj Komponentoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Livewire Reagaj Komponentoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Statikaj Retejaj Generatoroj</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetenteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#06b6d4] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#06b6d4]">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#06b6d4] to-[#0891b2]"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Utila-Unua Disvolviĝo</span>
                                            <span class="text-sm font-bold text-green-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Responema Dezajno</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Propra Agordo</span>
                                            <span class="text-sm font-bold text-blue-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Rendimento</span>
                                            <span class="text-sm font-bold text-purple-500">87%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="87%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#06b6d4] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Tailwind 3.4+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>40+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-palette text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Dezajnaj Sistemoj: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-mobile-alt text-[#06b6d4] w-5 mr-3"></i>
                                        <span class="text-sm">Responema: <strong>100% movebla-unua</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#06b6d4] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/alpine-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-mountain text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">Alpine.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/livewire" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-pink-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">Livewire</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">92% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                    <a href="/competences/css" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-css3-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#06b6d4] transition-colors">CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#06b6d4] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#06b6d4] to-[#0891b2] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas UI-disvolviĝan kompetentecon?</h3>
                                <p class="text-sm mb-4">Preta diskuti Tailwind CSS efektivigon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#06b6d4] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

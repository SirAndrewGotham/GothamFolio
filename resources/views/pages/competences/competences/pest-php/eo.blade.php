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
                                <a href="/competences/testing" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Testado
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Pest PHP
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero-Sekcio -->
        <section class="py-12 bg-gradient-to-br from-lime-50 to-green-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#7CFC00] to-[#66CC00] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-vial text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Pest PHP</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-lime-100 dark:bg-lime-900/30 text-lime-700 dark:text-lime-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-heart mr-1"></i>
                                            Testado kun Ĝojo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Eleganta PHP-testada kadro kun esprima sintakso kiu faras testadon amuza sperto.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-lime-100 dark:bg-lime-900/30 flex items-center justify-center text-[#7CFC00] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#7CFC00] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">2+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde Pest 1.0</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#7CFC00] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v2.8+</div>
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
                            <!-- Pri Pest PHP -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#7CFC00] mr-3"></i>
                                    Pri Pest PHP
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Pest PHP</strong> estas eleganta PHP-testada kadro kun fokuso al simpleco kaj programista sperto.
                                        Konstruita sur PHPUnit, Pest provizas belan, espriman testan API-on kiu faras test-skribadon
                                        amuza kaj legebla. Kreita de Nuno Maduro, Pest alportas modernajn testajn praktikojn al PHP.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Esprima Sintakso</strong> — Puraj, legeblaj test-kazoj kun minimuma ŝablona kodo</li>
                                        <li><strong>Nula Agordo</strong> — Funkcias tuj kun raciaj defaŭltaj agordoj</li>
                                        <li><strong>Povumaj Asertoj</strong> — Riĉa aro de esprimaj asert-metodoj</li>
                                        <li><strong>Bela Eligo</strong> — Koloraj, informaj test-rezultoj kaj progresindikiloj</li>
                                        <li><strong>Kromaĵa Ekosistemo</strong> — Etendebla arkitekturo kun komunumaj kromaĵoj</li>
                                        <li><strong>Paralela Testado</strong> — Enkonstruita subteno por paralela test-ruleado</li>
                                        <li><strong>Migradaj Iloj</strong> — Facila migrado de PHPUnit al Pest</li>
                                    </ul>

                                    <h3>Testa Filozofio</h3>
                                    <p>
                                        Pest adoptas testan filozofion fokusitan al programista feliĉo kaj produktiveco:
                                    </p>
                                    <ul>
                                        <li>Testoj devas esti legeblaj kaj mem-dokumentantaj</li>
                                        <li>Testa agordo devas esti minimuma kaj intuicia</li>
                                        <li>Testa eligo devas esti bela kaj informa</li>
                                        <li>Testado devas esti amuza parto de disvolviĝo</li>
                                        <li>Modernaj PHP-trajtoj devas esti plene utiligitaj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Pest PHP-Vojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#7CFC00] mr-3"></i>
                                    Mia Pest PHP-Vojo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Pest PHP en 2021 post jaroj da PHPUnit-sperto, tuj ŝatante
                                        ĝian elegantan sintakson kaj plibonigitan programistan sperton. Ekde tiam, mi migris plurajn projektojn
                                        de PHPUnit al Pest kaj implementis kompleksajn testajn strategiojn uzante la esprimajn trajtojn de Pest.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-lime-50 to-green-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-exchange-alt text-[#7CFC00] mr-2"></i>
                                                Migrada Eksperteco
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Sukcesa migrado de grandaj kodobazoj de PHPUnit al Pest,
                                                konservante test-kovradon dum plibonigante test-legiblecon kaj prizorgadon.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                                Testa Novigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Utiligante altnivelajn trajtojn de Pest kiel paralela testado,
                                                propraj helpiloj kaj kromaĵa ekosistemo por optimumigi testajn laborkurzojn.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#7CFC00] mr-3"></i>
                                    Mia Pest PHP-Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 2 jaroj da Pest PHP-sperto, mi implementis kompleksajn testajn strategiojn
                                        tra diversaj projektoj, de API-testado al kompleksa aplikaĵa logiko, utiligante
                                        la espriman sintakson de Pest por krei prizorgeblajn kaj legeblajn test-arojn.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Esprima Testa Sintakso</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propraj Helpiloj & Etendaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumprovizantoj & Datumaroj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Paralela Testa Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Migrado de PHPUnit</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API & Integriga Testado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumbaza Testado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propraj Asertoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testa Organizado & Arkitekturo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CI/CD-Integrigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Efikeco-Optimumigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kromaĵa Disvolviĝo</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Testaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Laravel API-Testaro</strong> — Kompleksa API-testado kun HTTP-asertoj de Pest</li>
                                        <li><strong>Komercreta Migrado</strong> — Migris 500+ PHPUnit-testojn al Pest kun plibonigita legibleco</li>
                                        <li><strong>Paralela Testa Agordo</strong> — Reduktita testaro-tempo je 60% kun paralela ekzekuto</li>
                                        <li><strong>Propraj Testaj Helpiloj</strong> — Disvolvis projekto-specifajn Pest-helpilojn por kompleksaj asertoj</li>
                                        <li><strong>CI/CD-Dukto</strong> — Integris Pest-testadon en GitHub Actions laborkurzojn</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Pest PHP-Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-[#7CFC00] mr-3"></i>
                                    Altnivelaj Pest-Trajtoj
                                </h2>
                                <div class="content-section">
                                    <h3>Ĉefaj Testaj Kapabloj</h3>
                                    <p>
                                        Eksperteco en utiligado de povumaj testaj trajtoj de Pest:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#7CFC00] mb-2">Altorda Testado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Uzante altordajn mesaĝojn de Pest por flua,
                                                ĉenebla testa asertado kaj aranĝado.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#7CFC00] mb-2">Datumaroj & Provizantoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreante reuzeblajn datumarojn kaj datumprovizantojn
                                                por kompleksa test-kovrado kun minimuma kodo.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#7CFC00] mb-2">Propraj Helpiloj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvolvante projekto-specifajn helpajn funkciojn
                                                por simpligi kompleksajn testajn scenarojn.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#7CFC00] mb-2">Kromaĵa Ekosistemo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Utiligante kaj kreante Pest-kromaĵojn por etendi
                                                testajn kapablojn por specifaj kadroj.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Testaj Metodologioj</h3>
                                    <p>
                                        Altnivelaj testaj aliroj kun Pest:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Unua Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Funkcia Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Integriga Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">API-Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Datumbaza Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Retumila Testado</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Pest vs PHPUnit -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-balance-scale text-[#7CFC00] mr-3"></i>
                                    Pest PHP vs PHPUnit
                                </h2>
                                <div class="content-section">
                                    <h3>Migradaj Avantaĝoj</h3>
                                    <p>
                                        Sperto migranta de PHPUnit al Pest kun signifaj plibonigoj:
                                    </p>
                                    <ul>
                                        <li><strong>Reduktita Ŝablona Kodo</strong> — 40-60% malpli da kodo por sama test-kovrado</li>
                                        <li><strong>Plibonigita Legibleco</strong> — Testoj legiĝas kiel specifoj en natura lingvo</li>
                                        <li><strong>Pli Rapida Disvolviĝo</strong> — Pli rapida test-skribado kun esprima sintakso</li>
                                        <li><strong>Pli Bona Eligo</strong> — Koloraj, informaj test-rezultoj kaj progreso</li>
                                        <li><strong>Modernaj Trajtoj</strong> — Paralela testado, kromaĵoj kaj pli bona integrigo</li>
                                    </ul>

                                    <h3>Migrada Strategio</h3>
                                    <p>
                                        Provita aliro por sukcesa migrado de PHPUnit al Pest:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Inkrementa Migrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aŭtomatigitaj Konvertaj Iloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Team-Trejnado & Dokumentado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CI/CD-Dukto-Ĝisdatigoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propra Helpila Disvolviĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Efikeca Komparado</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetenteco-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#7CFC00] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#7CFC00]">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#7CFC00] to-[#66CC00]"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Testa Arkitekturo</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Migrada Eksperteco</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Paralela Testado</span>
                                            <span class="text-sm font-bold text-blue-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Kromaĵa Disvolviĝo</span>
                                            <span class="text-sm font-bold text-purple-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#7CFC00] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>2+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Pest 2.8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-vial text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Testoj Migritaj: <strong>500+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bolt text-[#7CFC00] w-5 mr-3"></i>
                                        <span class="text-sm">Rapideca Plibonigo: <strong>60% pli rapide</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#7CFC00] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/phpunit" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flask text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#7CFC00] transition-colors">PHPUnit</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#7CFC00] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#7CFC00] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#7CFC00] transition-colors"></i>
                                    </a>
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#7CFC00] transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#7CFC00] transition-colors"></i>
                                    </a>
                                    <a href="/competences/git" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#f05032] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-git-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#7CFC00] transition-colors">Git</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#7CFC00] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#7CFC00] to-[#66CC00] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas testan ekspertecon?</h3>
                                <p class="text-sm mb-4">Preta diskuti Pest PHP-implementadon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#7CFC00] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

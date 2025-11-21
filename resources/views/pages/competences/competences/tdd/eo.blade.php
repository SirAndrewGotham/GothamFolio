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
                                    Testo-Disvolvita Disvolviĝo
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
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#8B5CF6] to-[#7C3AED] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-sync-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">TDD</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                    <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-code mr-1"></i>
                                        Ruĝa-Verda-Refaktorado
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Testo-Disvolvita Disvolviĝa metodologio por krei robustan, prizorgatan kodon per la Ruĝa-Verda-Refaktorada ciklo.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#8B5CF6] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#8B5CF6] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">TDD-Praktiko</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#8B5CF6] mr-3">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">25+ projektoj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">TDD Efektivigita</div>
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
                            <!-- Pri TDD -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#8B5CF6] mr-3"></i>
                                    Pri Testo-Disvolvita Disvolviĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Testo-Disvolvita Disvolviĝo (TDD)</strong> estas programara disvolviĝa metodologio kie testoj estas skribitaj antaŭ la efektiva kodo.
                                        Sekvante la Ruĝa-Verda-Refaktorada ciklon, TDD certigas kodkvaliton, reduktas cimojn, kaj kreas kompreneblan testsuiton
                                        kiu servas kiel vivantan dokumentaron por la sistemo.
                                    </p>

                                    <h3>La TDD-Ciklo</h3>
                                    <ul>
                                        <li><strong>Ruĝa</strong> — Skribu malsukcesan teston kiu difinas la deziratan funkciecon</li>
                                        <li><strong>Verda</strong> — Skribu la minimuman kodon necesan por sukcesigi la teston</li>
                                        <li><strong>Refaktorado</strong> — Plibonigu la kodon dum tenado de verdaj testoj</li>
                                    </ul>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Pli Bona Dezajno</strong> — Devigas pensi pri interfaco antaŭ efektivigo</li>
                                        <li><strong>Komprenebla Testado</strong> — Natura testkovrado por ĉiuj trajtoj</li>
                                        <li><strong>Regresa Protekto</strong> — Tuja reaginformo pri rompantaj ŝanĝoj</li>
                                        <li><strong>Vivanta Dokumentaro</strong> — Testoj servas kiel ruleblajn specifojn</li>
                                        <li><strong>Konfida Refaktorado</strong> — Sekuraj kodmodifoj kun testsendanĝereco</li>
                                        <li><strong>Reduktita Senerarigo</strong> — Kaptu problemojn frue en disvolviĝa ciklo</li>
                                    </ul>

                                    <h3>TDD-Mensostato</h3>
                                    <p>
                                        TDD estas pli ol tekniko — ĝi estas disvolviĝa filozofio:
                                    </p>
                                    <ul>
                                        <li>Skribu testojn el la uzantperspektivo</li>
                                        <li>Fokusiĝu al konduto, ne efektivigo</li>
                                        <li>Akceptu pliigantan disvolviĝon</li>
                                        <li>Fidu la reagciklon</li>
                                        <li>Valoru prizorgadon super lerteco</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia TDD-Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#8B5CF6] mr-3"></i>
                                    Mia TDD-Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi adoptis TDD en 2019 post sperti la doloron de prizorgado de grandaj, netestitaj kodaj bazoj.
                                        Startante per malgrandaj projektoj, mi grade enkondukis TDD en mian laborfluon, eventuale
                                        efektivigante ĝin trans entreprenaj aplikaĵoj kaj mentorante teamojn en TDD-praktikoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-graduation-cap text-[#8B5CF6] mr-2"></i>
                                                Team-Mentorado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Trejnis disvolviĝteamojn en TDD-metodologioj,
                                                helpante ilin transiri de tradicia testado al testoj-unuaj aliroj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-building text-blue-500 mr-2"></i>
                                                Entreprena Adopto
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efektivigis TDD-praktikojn en grandskalaj entreprenaj aplikaĵoj,
                                                signife reduktante cimajn indicojn kaj plibonigante kodkvaliton.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#8B5CF6] mr-3"></i>
                                    Mia TDD-Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 4 jaroj da TDD-praktiko trans 25+ projektoj, mi aplikis teston-disvolvitan disvolviĝon
                                        al diversaj domajnoj inkluzive de retkomerco, financaj servoj kaj API-disvolviĝo,
                                        konstante liverante pli altkvalitan programaron kun malpli da produktaj problemoj.
                                    </p>

                                    <h3>TDD-Metodologioj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Klasika TDD (Outside-In)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Londa Lernejo TDD (Inside-Out)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Konduto-Disvolvita Disvolviĝo (BDD)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aktepta Testo-Disvolvita Disvolviĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testo-Disvolvita Datumbaza Disvolviĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API-Unua TDD</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Heredita Koda TDD-Integriĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Mikroservoj TDD-Alproksimiĝo</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj TDD-Projektoj</h3>
                                    <ul>
                                        <li><strong>Financa Risko-Kalkulilo</strong> — TDD-efektivigo kun 95%+ testkovrado</li>
                                        <li><strong>Retkomerca Paga Pordego</strong> — Testoj-unua disvolviĝo por kritikaj financaj operacioj</li>
                                        <li><strong>API-Mikroservoj Arkitekturo</strong> — Kontraktoj-unua TDD trans multaj servoj</li>
                                        <li><strong>Heredita Sistemo Modernigo</strong> — Grada TDD-adopto en ekzistanta kodbazo</li>
                                        <li><strong>Team-TDD Trejnprogramo</strong> — Komprenebla TDD-edukado kaj mentorado</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- TDD-Teĥnikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#8B5CF6] mr-3"></i>
                                    TDD-Teĥnikoj & Ŝablonoj
                                </h2>
                                <div class="content-section">
                                    <h3>Progresintaj TDD-Praktikoj</h3>
                                    <p>
                                        Sperteco en altnivelaj TDD-teĥnikoj kaj ŝablonoj:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Testaj Duoblaj Strategioj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Strategia uzo de mokoj, ŝtopiloj kaj falsaĵoj
                                                por izoli unuojn kaj difini kunlaborojn.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Transforma Prioritato</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Aplikante transforman prioritaton premison
                                                por gvidi efektivigajn elektojn dum Verda fazo.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Triangulado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Uzante multoblajn testekzemplojn por peli
                                                ĝeneralajn solvojn el specifaj kazoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#8B5CF6] mb-2">Evidenta Efektivigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Sciante kiam preterpasi malgrandajn paŝojn kaj
                                                efektivigi la evidentan solvon rekte.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>TDD-Testaj Strategioj</h3>
                                    <p>
                                        Kompreneblaj testaj alproksimiĝoj ene de TDD:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Unua Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Integriga Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Aktepta Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Kontrakta Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Propra Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Muta Testado</span>
                                    </div>
                                </div>
                            </div>

                            <!-- TDD en Praktiko -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-hammer text-[#8B5CF6] mr-3"></i>
                                    TDD en Praktiko
                                </h2>
                                <div class="content-section">
                                    <h3>Reala-Monda TDD-Apliko</h3>
                                    <p>
                                        Praktika sperto aplikante TDD al diversaj disvolviĝaj scenaroj:
                                    </p>
                                    <ul>
                                        <li><strong>Verkampaj Projektoj</strong> — Startante kun TDD de projekta komenco</li>
                                        <li><strong>Brunkampa Disvolviĝo</strong> — Enkondukante TDD al ekzistantaj kodaj bazoj</li>
                                        <li><strong>Heredita Koda Integriĝo</strong> — Uzante TDD por sekure modifi heredatajn sistemojn</li>
                                        <li><strong>API-Disvolviĝo</strong> — Kontraktoj-unua API-disvolviĝo kun TDD</li>
                                        <li><strong>Datumbazaj Operacioj</strong> — TDD por datumalir-tavoloj kaj migradoj</li>
                                        <li><strong>Triapartiaj Integriĝoj</strong> — Testante eksterajn dependecojn efike</li>
                                    </ul>

                                    <h3>Defioj & Solvoj</h3>
                                    <p>
                                        Superante oftajn TDD-adoptajn defiojn:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Malrapida Test-Ekzekuto</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kompleksaj Dependecoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Heredita Koda Integriĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Team-Rezisto</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testado de UI-Komponentoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumbaza Testado</span>
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
                                    <i class="fas fa-chart-bar text-[#8B5CF6] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#8B5CF6]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#8B5CF6] to-[#7C3AED]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Metodologio</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Team-Mentorado</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Heredita Integriĝo</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Entreprena Adopto</span>
                                            <span class="text-sm font-bold text-purple-500">83%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="83%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#8B5CF6] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>25+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Teamoj Mentoritaj: <strong>8+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bug text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Cima Redukto: <strong>70%+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#8B5CF6] w-5 mr-3"></i>
                                        <span class="text-sm">Koda Kvalito: <strong>Alta</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#8B5CF6] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/phpunit" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flask text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">PHPUnit</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pest-php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#7CFC00] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-vial text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">Pest PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                    <a href="/competences/clean-code" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-broom text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#8B5CF6] transition-colors">Pura Kodo</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#8B5CF6] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#8B5CF6] to-[#7C3AED] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas TDD-kompetentecon?</h3>
                                <p class="text-sm mb-4">Preta diskuti teston-disvolvitan disvolviĝon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#8B5CF6] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

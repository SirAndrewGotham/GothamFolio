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
                                    PHPUnit
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero-Sekcio -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#28A745] to-[#218838] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-flask text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">PHPUnit</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-shield-alt mr-1"></i>
                                            Industria Normo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Testa kadro por PHP kun unuopaj kaj integraj testaj kapabloj por fortikaj, fidindaj aplikaĵoj.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#28A745] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#28A745] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde PHPUnit 6</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#28A745] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v10.4+</div>
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
                            <!-- Pri PHPUnit -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#28A745] mr-3"></i>
                                    Pri PHPUnit
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>PHPUnit</strong> estas la industria-norma testa kadro por PHP, provizante kompletan
                                        aron de iloj por skribi kaj ruli unuopajn testojn. Kiel la fakta testa kadro por PHP,
                                        PHPUnit ebligas programistojn skribi fidindajn, prizorgeblajn testojn sekvante la xUnit-arkitekturan ŝablonon.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Industria Normo</strong> — La plej vaste adoptita testa kadro en PHP-ekosistemo</li>
                                        <li><strong>Kompleksaj Asertoj</strong> — Vasta aro de asert-metodoj por ĉiuj testaj scenaroj</li>
                                        <li><strong>Testaj Duplikatoj</strong> — Povumaj mokado-kapabloj kaj ŝtopiloj kun testaj duplikatoj</li>
                                        <li><strong>Datumprovizantoj</strong> — Fleksebla datum-direktita testado kun datumprovizantoj</li>
                                        <li><strong>Koda Kovrado</strong> — Enkonstruita koda kovrado-analizo kaj raportado</li>
                                        <li><strong>Etendebla Arkitekturo</strong> — Propraj asertoj, aŭskultantoj kaj etendaĵoj</li>
                                        <li><strong>IDE-Integrigo</strong> — Bona integrigo kun PHPStorm, VSCode kaj aliaj IDE-oj</li>
                                    </ul>

                                    <h3>Testa Filozofio</h3>
                                    <p>
                                        PHPUnit sekvas establitajn programarajn testajn principojn:
                                    </p>
                                    <ul>
                                        <li>Testoj devas esti izolitaj kaj sendependaj</li>
                                        <li>Testu konduton, ne implementadon</li>
                                        <li>Sekvu la Aranĝu-Agu-Asertu ŝablonon</li>
                                        <li>Skribu testojn unue kun Testo-Direktita Disvolviĝo</li>
                                        <li>Mantu altan testan kovradon por kritikaj vojoj</li>
                                        <li>Testoj devas esti rapidaj, fidindaj kaj prizorgeblaj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia PHPUnit-Vojo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#28A745] mr-3"></i>
                                    Mia PHPUnit-Vojo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi PHPUnit en 2017 kun PHPUnit 6, implementante teston-direktitajn disvolviĝajn praktikojn
                                        tra diversaj projektoj. Dum pli ol 5 jaroj, mi progresis de skribado de bazaj unuopaj testoj al
                                        arkitekturado de kompleksaj test-aroj por entreprenaj aplikaĵoj kaj mentorado de teamoj pri testaj bonaj praktikoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-industry text-[#28A745] mr-2"></i>
                                                Entreprena Testado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvolvis kompleksajn test-arojn por grandskalaj entreprenaj aplikaĵoj
                                                kun kompleksa negoca logiko kaj integraj postuloj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-blue-500 mr-2"></i>
                                                Team-Gvidado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Mentoris disvolviĝajn teamojn pri testaj metodologioj,
                                                koda kovrado-normoj kaj teston-direktitaj disvolviĝaj praktikoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#28A745] mr-3"></i>
                                    Mia PHPUnit-Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 5 jaroj da PHPUnit-sperto, mi implementis testajn strategiojn tra la plena spektro
                                        de PHP-aplikaĵoj, de simplaj bibliotekoj al kompleksaj entreprenaj sistemoj, konstante atingante
                                        altan kovan kovradon kaj testan fidindecon.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testo-Direktita Disvolviĝo (TDD)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Mok-Objektoj & Testaj Duplikatoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumprovizantoj & Datum-Direktitaj Testoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Koda Kovrado-Analizo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propraj Asertoj & Etendaĵoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Datumbaza Testado & Fixturoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>API & Integra Testado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testa Organizado & Arkitekturo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Efikeca Testado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>CI/CD-Integrigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Legaca Koda Testado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testaj Bonaj Praktikoj</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Testaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Financa Serva Platformo</strong> — Kompleksa testa aro kun 85%+ koda kovrado</li>
                                        <li><strong>Komercreta Migrado</strong> — Testo-direktita refaktorado de legaca kodobazo</li>
                                        <li><strong>API-Mikroservoj</strong> — Integra testado trans multoblaj servoj</li>
                                        <li><strong>Laravel-Pakaĵa Disvolviĝo</strong> — Plena testa kovrado por malfermit-kodaj pakaĵoj</li>
                                        <li><strong>Team-Trejnada Programo</strong> — PHPUnit bonaj praktikoj kaj TDD-workshopoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Altnivelaj PHPUnit-Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#28A745] mr-3"></i>
                                    Altnivelaj PHPUnit-Trajtoj
                                </h2>
                                <div class="content-section">
                                    <h3>Altnivelaj Testaj Teknikoj</h3>
                                    <p>
                                        Eksperteco en altnivelaj trajtoj de PHPUnit kaj testaj metodologioj:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#28A745] mb-2">Testaj Duplikatoj & Mokado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreado de mok-objektoj, ŝtopiloj kaj testaj duplikatoj
                                                por izolado de unuopoj kaj testado de kompleksaj dependecoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#28A745] mb-2">Datum-Direktita Testado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Uzado de datumprovizantoj por kompleksa testa kovrado
                                                kun multoblaj enigaj scenaroj kaj randaj kazoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#28A745] mb-2">Propraj Asertoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvolvo de domajno-specifaj asertoj por kompleksa
                                                negoca logiko kaj propraj validigaj postuloj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#28A745] mb-2">Testaj Aŭskultantoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementado de testaj aŭskultantoj por propra raportado,
                                                protokolado kaj testa ekzekuto-vivcikla administrado.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Testaj Metodologioj</h3>
                                    <p>
                                        Kompleksaj testaj aliroj kun PHPUnit:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Unuopa Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Integra Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Funkcia Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Datumbaza Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">API-Testado</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Efikeca Testado</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Koda Kovrado & Kvalito -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-chart-bar text-[#28A745] mr-3"></i>
                                    Koda Kovrado & Kvalito
                                </h2>
                                <div class="content-section">
                                    <h3>Koda Kovrado-Strategioj</h3>
                                    <p>
                                        Implementado de signifoplena koda kovrado kun PHPUnit:
                                    </p>
                                    <ul>
                                        <li><strong>Linia Kovrado</strong> — Certigante ke ĉiuj kodaj vojoj estas ekzekutitaj</li>
                                        <li><strong>Branĉa Kovrado</strong> — Testante ĉiujn decidpunktojn en kodo</li>
                                        <li><strong>Voja Kovrado</strong> — Kovrante ĉiujn eblajn ekzekutajn vojojn</li>
                                        <li><strong>Muta Testado</strong> — Certigante ke testoj povas detekti kodajn ŝanĝojn</li>
                                    </ul>

                                    <h3>Kvalitaj Metrikoj</h3>
                                    <p>
                                        Spurante kaj plibonigante testan kvaliton:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testa Kovrado-Raportoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testa Ekzekuto-Tempo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testa Malsukceso-Analizo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Nestabila Testo-Identigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Testa Prizorgebleco</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Koda Komplekseco-Metrikoj</span>
                                        </div>
                                    </div>

                                    <h3>Integrigo kun Kvalitaj Iloj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Xdebug</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">PHPStan</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Psalm</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Infection PHP</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SonarQube</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">CodeClimate</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetenteco-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#28A745] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#28A745]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#28A745] to-[#218838]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Unuopa Testado</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Integra Testado</span>
                                            <span class="text-sm font-bold text-green-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Testa Arkitekturo</span>
                                            <span class="text-sm font-bold text-blue-500">83%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="83%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Koda Kovrado</span>
                                            <span class="text-sm font-bold text-purple-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#28A745] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>5+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>PHPUnit 10.4+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>30+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-vial text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Testoj Skribitaj: <strong>2000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-[#28A745] w-5 mr-3"></i>
                                        <span class="text-sm">Koda Kovrado: <strong>85%+ averaĝe</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#28A745] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/pest-php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#7CFC00] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-vial text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#28A745] transition-colors">Pest PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#28A745] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#28A745] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#28A745] transition-colors"></i>
                                    </a>
                                    <a href="/competences/php" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#777BB4] flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-php text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#28A745] transition-colors">PHP</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#28A745] transition-colors"></i>
                                    </a>
                                    <a href="/competences/tdd" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#28A745] transition-colors">TDD</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#28A745] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#28A745] to-[#218838] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas testan ekspertecon?</h3>
                                <p class="text-sm mb-4">Preta diskuti PHPUnit-implementadon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#28A745] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

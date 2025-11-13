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
                                <a href="/competences/tools" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Disvolviĝaj Iloj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Git Versia Kontrolo
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#f05032] to-[#c13c24] flex items-center justify-center text-white shadow-lg">
                                <i class="fab fa-git-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Git Versia Kontrolo</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                    <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-users mr-1"></i>
                                        Teama Kunlaboro
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Distribuita versia kontrolsistemo por spuri ŝanĝojn kun spertuleco en GitHub, korporaciaj politikoj, deponeja administrado kaj koda revizio.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-[#f05032] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">90%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#f05032] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">7+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto ekde 2016</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#f05032] mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">Git 2.40+</div>
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
                            <!-- Pri Git -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#f05032] mr-3"></i>
                                    Pri Git Versia Kontrolo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Git</strong> estas distribuita versia kontrolsistemo kiu ebligas efikan kunlaboron,
                                        kodan spuradon kaj projekto-administradon. Kun vasta sperto en GitHub-ekosistemo,
                                        mi establis korporaciajn versiajn kontrolpolitikojn kaj plibonigis disvolviĝajn laborfluojn.
                                    </p>

                                    <h3>Ĉefaj Spertulec-Areoj</h3>
                                    <ul>
                                        <li><strong>GitHub Platforma Majstrado</strong> — Deponeja administrado, teama kunlaboro kaj GitHub Actions</li>
                                        <li><strong>Korporacia Politika Disvolviĝo</strong> — Kreado kaj efektivigo de versiaj kontrolnormoj</li>
                                        <li><strong>Deponeja Arkitekturo</strong> — Agordo kaj prizorgado de kompleksaj deponejaj strukturoj</li>
                                        <li><strong>Koda Revizia Gvidado</strong> — Kondukado de zorgemaj, konstruaj kodaj revizioj</li>
                                        <li><strong>Branĉaj Strategioj</strong> — GitFlow, GitHub Flow kaj propraj laborfluaj efektivigoj</li>
                                        <li><strong>CI/CD Integrigo</strong> — Aŭtomataj testaj kaj disvastigaj duktoj</li>
                                        <li><strong>Teama Trejnado & Mentorado</strong> — Edukado de teamoj pri Git-bonaj praktikoj</li>
                                    </ul>

                                    <h3>Korporacia Efektivigo</h3>
                                    <p>
                                        Sukcese efektivigis Git versian kontrolon tra organizoj:
                                    </p>
                                    <ul>
                                        <li>Plurteamaj disvolviĝaj medioj</li>
                                        <li>Entrepren-grada deponeja sekureco</li>
                                        <li>Observaj kaj aŭditaj postuloj</li>
                                        <li>Malfermitkoda kontribua administrado</li>
                                        <li>Transfunkcia teama kunlaboro</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Korporaciaj Politikoj & Normoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-file-contract text-[#f05032] mr-3"></i>
                                    Korporaciaj Politikoj & Normoj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Disvolvis kaj efektivigis kompleksajn versiajn kontrolpolitikojn kiuj plibonigis kodkvaliton,
                                        plibonigis kunlaboron kaj establis klarajn disvolviĝajn laborfluojn tra organizoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-shield-alt text-[#f05032] mr-2"></i>
                                                Branĉa Protektado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efektivigis branĉoprotektajn regulojn, postulatajn reviziojn kaj statkontrolojn
                                                por subteni kodkvaliton kaj preventi rektajn kommitojn al ĉefaj branĉoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code-branch text-blue-500 mr-2"></i>
                                                Laborfluaj Normoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Establis GitFlow-ajn kaj feature branch laborfluojn kun klaraj nomkonvencioj,
                                                kommitmesaĝaj normoj kaj pull request-aj ŝablonoj.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Disvolvitaj Politikaj Areoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kommitmesaĝaj Normoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Branĉaj Nomkonvencioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Pull Request Gvidlinioj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kodaj Reviziaj Kontrol-listoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kunfandaj Strategiaj Difinoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eldonadministraj Proceduroj</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Deponeja Administrado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-database text-[#f05032] mr-3"></i>
                                    Deponeja Administrado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Vasta sperto en agordo, prizorgado kaj optimumigado de Git-deponejoj
                                        por projektoj de malgrandaj start-up'oj ĝis grandaj entreprenaj aplikaĵoj.
                                    </p>

                                    <h3>Deponeja Agordo & Prizorgado</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>GitHub Organiza Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Deponeja Ŝablona Kreado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Alir-Kontrolo & Permesoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Webhook Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Git LFS Efektivigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Deponeja Migrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Rezerva Kopiado & Katastrofa Rekuperado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Monorepo vs Polyrepo Strategioj</span>
                                        </div>
                                    </div>

                                    <h3>GitHub Ekosistemo</h3>
                                    <p>
                                        Kompleta sperto kun GitHub-trajtoj kaj integrigoj:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">GitHub Actions</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Projektoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Pakaĵoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">Paĝoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Codespaces</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Sekureco</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Koda Revizia Spertuleco -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-search text-[#f05032] mr-3"></i>
                                    Koda Revizia Gvidado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kondukis centojn da kodaj revizioj tra multaj teamoj, fokusante al kodkvalito,
                                        bonaj praktikoj, scienco-kunhavado kaj kontinua plibonigo.
                                    </p>

                                    <h3>Koda Revizia Aliro</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#f05032] mb-2">Kvalito-Fokuso</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Certigante kode legeblecon, subteneblecon kaj observadon de normoj
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#f05032] mb-2">Scienco-Kunhavado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Uzante reviziojn kiel instruajn ŝancojn kaj promociante bonajn praktikojn
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#f05032] mb-2">Konstrua Reago</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Provizado de agordebla, specifa reago kun ekzemploj kaj alternativoj
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-50 to-red-50 dark:from-gray-800 dark:to-gray-800 rounded-lg p-4">
                                            <h4 class="font-semibold text-[#f05032] mb-2">Proceza Plibonigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kontinue rafinante reviziajn procezojn bazitajn sur teama reago
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Reviziaj Fokus-Areoj</h3>
                                    <ul>
                                        <li><strong>Kodkvalito</strong> — Legebleco, simpleco kaj observado de SOLID-principoj</li>
                                        <li><strong>Sekureco</strong> — Identigado de potencialaj vundebloj kaj sekurecaj bonaj praktikoj</li>
                                        <li><strong>Efikeco</strong> — Optimumigado de datumbazaj mendoj, algoritmoj kaj rimena uzo</li>
                                        <li><strong>Testado</strong> — Certigado de adekvata testkovrado kaj testkvalito</li>
                                        <li><strong>Arkitekturo</strong> — Subtenado de pura arkitekturo kaj desegnaj ŝablonoj</li>
                                        <li><strong>Dokumentado</strong> — Kodaj komentoj, README-dosieroj kaj API-dokumentado</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Altnivelaj Git-Kapabloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#f05032] mr-3"></i>
                                    Altnivelaj Git-Kapabloj
                                </h2>
                                <div class="content-section">
                                    <h3>Altnivelaj Operacioj</h3>
                                    <p>
                                        Kompetenta en kompleksaj Git-operacioj kaj problem-solvaj scenaroj:
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Interaktiva Rebazado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ĉerizo-prenado de ŝanĝoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Konflikta Solvado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bisekcio por Cim-Ĉasado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Submodula Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Hokoj kaj Aŭtomatigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Staŝa Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Reflog Rekuperado</span>
                                        </div>
                                    </div>

                                    <h3>Iloj & Integrigoj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">GitHub CLI</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">GitKraken</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SourceTree</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-center text-sm">GitLab CI/CD</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Bitbucket</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Azure DevOps</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Kompetenteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#f05032] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#f05032]">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#f05032] to-[#c13c24]"
                                                 data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">GitHub Ekosistemo</span>
                                            <span class="text-sm font-bold text-green-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Kodaj Revizioj</span>
                                            <span class="text-sm font-bold text-green-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Politika Disvolviĝo</span>
                                            <span class="text-sm font-bold text-blue-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Teama Trejnado</span>
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
                                    <i class="fas fa-lightbulb text-[#f05032] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#f05032] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>7+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fab fa-github text-[#f05032] w-5 mr-3"></i>
                                        <span class="text-sm">Platformo: <strong>GitHub Spertulo</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#f05032] w-5 mr-3"></i>
                                        <span class="text-sm">Deponejoj: <strong>50+ administritaj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code-review text-[#f05032] w-5 mr-3"></i>
                                        <span class="text-sm">Kodaj Revizioj: <strong>500+ kondukitaj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#f05032] w-5 mr-3"></i>
                                        <span class="text-sm">Teamoj Trejnitaj: <strong>10+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#f05032] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#f05032] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f05032] transition-colors"></i>
                                    </a>
                                    <a href="/competences/docker" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-docker text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#f05032] transition-colors">Docker</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f05032] transition-colors"></i>
                                    </a>
                                    <a href="/competences/phpunit" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flask text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#f05032] transition-colors">PHPUnit</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f05032] transition-colors"></i>
                                    </a>
                                    <a href="/competences/team-leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-users-cog text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#f05032] transition-colors">Teama Gvidado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#f05032] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#f05032] to-[#c13c24] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas versian kontrolan spertulecon?</h3>
                                <p class="text-sm mb-4">Preta diskuti Git-laborfluojn kaj teaman kunlaboron</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#f05032] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

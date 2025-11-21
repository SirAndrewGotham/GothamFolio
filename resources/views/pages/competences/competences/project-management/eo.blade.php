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
            // Lertostria animacio por kapablecaj stangoj
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
                        <!-- Pri Projekta Administrado -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#2196F3] mr-3"></i>
                                Pri Projekta Administrado
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Projekta Administrado</strong> estas la apliko de scio, kapabloj, iloj,
                                    kaj teknikoj al projektaj aktivaĵoj por plenumi projektajn postulojn. En la teknologia
                                    sektoro, ĝi inkluzivas kunordigon de kompleksa teknika laboro dum administrado de amplekso, tempo,
                                    kosto, kvalito, kaj interesulaj atendoj.
                                </p>

                                <h3>Ĉefaj Avantaĝoj</h3>
                                <ul>
                                    <li><strong>Strategia vicigo</strong> - Certigante ke projektoj subtenas negocajn celojn</li>
                                    <li><strong>Riziko-malpliigado</strong> - Antaŭvidema identigo kaj administrado de eblaj problemoj</li>
                                    <li><strong>Rimedo-optimumigo</strong> - Efika atribuo de teamanoj kaj buĝeto</li>
                                    <li><strong>Ĝustatempa liverado</strong> - Plenumado de limdatoj tra efika planado kaj efektivigo</li>
                                    <li><strong>Kvalito-certigo</strong> - Subtenado de altaj normoj tra la projekta vivociklo</li>
                                    <li><strong>Interesula kontentigo</strong> - Tenado de klientoj kaj teamanoj engaĝitaj kaj informitaj</li>
                                </ul>

                                <h3>Profesiaj Aplikoj</h3>
                                <p>
                                    Efika projekta administrado estas kritika tra diversaj teknikaj domajnoj kaj estas aparte esenca por:
                                </p>
                                <ul>
                                    <li>Programara disvolviĝo kaj efektivigaj projektoj</li>
                                    <li>Sistemaj migradoj kaj infrastrukturaj ĝisdatigoj</li>
                                    <li>Produkta disvolviĝo kaj lanĉaj iniciatoj</li>
                                    <li>Ciferecaj transformaj programoj</li>
                                    <li>Teamgvidado kaj trans-funkcia kunordigo</li>
                                    <li>Klienta liverado kaj konsultaj engaĝiĝoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Projekta Administrada Vojaĝo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#2196F3] mr-3"></i>
                                Mia Projekta Administrada Vojaĝo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Dum 8+ jaroj, mi evoluis de teknika kontribuanto al projekta gvidanto,
                                    administrante pli kaj pli kompleksajn projektojn tra diversaj industrioj. Mia vojaĝo
                                    inkludis formalan projektan administradan trejnadon, manan sperton kun
                                    diversaj metodologioj, kaj kontinuan plibonigon tra lernitaj lecionoj.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-rocket text-[#2196F3] mr-2"></i>
                                            Movipa Transformo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kondukis movipan adopton trans multoblaj teamoj, efektivigante Scrum kaj Kanban
                                            metodologiojn kiuj plibonigis liveran rapidon kaj teaman kontentigon.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-users text-purple-500 mr-2"></i>
                                            Teamgvidado
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Administris trans-funkciajn teamojn de 5-15 membroj, flegante kunlaboron
                                            kaj certigante vicigon kun projektaj celoj kaj klientaj atendoj.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mia Aliro -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#2196F3] mr-3"></i>
                                Mia Projekta Administrada Aliro
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi aplikas flekseblan, adaptiĝeman aliron al projekta administrado kiu kombinas
                                    pruvitajn metodologiojn kun praktika sperto. Mia fokuso estas liveri
                                    valoron dum subtenanta teaman moralon kaj interesulan konfidon.
                                </p>

                                <h3>Projekta Vivociklo-Administrado</h3>
                                <div class="space-y-4 mt-4">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">1</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Komenco & Planado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Difinu projektan amplekson, celojn, kaj sukceskriteriojn. Disvolvu detalajn projektajn planojn, tempoliniojn, kaj rimedan atribuon.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">2</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Efektivigo & Monitorado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Kunordigu teamajn aktivaĵojn, spuru progreson kontraŭ mejloŝtonoj, kaj subtenu komunikadon kun interesuloj.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">3</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Riziko & Kvalito-Administrado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Identigu eblajn riskojn, efektivigu malpliigajn strategiojn, kaj certigu ke kvalitonormoj estas subtenataj.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#2196F3] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">4</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Liverado & Fermo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Certigu sukcesan projektan liveradon, konduku post-efektivigajn recenzojn, kaj kaptu lernitajn lecionojn.</p>
                                        </div>
                                    </div>
                                </div>

                                <h3>Metodologioj & Kadroj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Movipa & Scrum</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Kanban & Lean</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Akvofalo & Hibrida</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>PRINCE2 Fundamentoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>PMI Kadro</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>SAFe Principoj</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sukcesaj Rakontoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-trophy text-[#2196F3] mr-3"></i>
                                Projekta Administradaj Sukcesaj Rakontoj
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mia projekta administrada spertulo estis instrumenta en liverado de sukcesaj rezultoj tra diversaj iniciatoj:
                                </p>
                                <ul>
                                    <li><strong>Komerplatforma Migrado</strong> - Administris 6-monatan migradprojekton por ĉefa vendokliento, liverante ĝustatempe kaj 15% sub buĝeto dum subtenante 99.9% funkciotemon tra transiro</li>
                                    <li><strong>Plurteama Movipa Transformo</strong> - Kondukis adopton de Scrum trans 5 disvolviĝteamoj, rezultigante 40% pli rapidajn liverciklojn kaj 25% plibonigon en teamaj kontentigaj poentaroj</li>
                                    <li><strong>Internacia SaaS Efektivigo</strong> - Kunordigis trans-horzonan teamon por liveri kompleksan SaaS-solvon por tutmonda kliento, administrante kulturajn diferencojn kaj teknikajn defiojn</li>
                                    <li><strong>Heredaĵa Sistemo Modernigo</strong> - Direktis 12-monatan modernigan programon kiu sukcese anstataŭigis 15-jaran sistemon kun minimuma negoca interrompo</li>
                                    <li><strong>Startup Produkta Lanĉo</strong> - Administris de-komenco-al-fino produkton disvolviĝon kaj lanĉon por teknologia startup, atingante merkatan lanĉon 3 monatojn antaŭ ol industria averaĝa tempolinio</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Iloj & Teknikoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#2196F3] mr-3"></i>
                                Projekta Administradaj Iloj & Teknikoj
                            </h2>
                            <div class="content-section">
                                <h3>Administradaj Iloj</h3>
                                <p>
                                    Mi utiligas modernajn projektan administradajn ilojn por plibonigi videblecon, kunlaboron, kaj efikecon:
                                </p>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Jira</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Trello</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Asana</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Monday.com</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">MS Project</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Notion</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Slack</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">GitHub</span>
                                    <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Figma</span>
                                </div>

                                <h3>Ĉefaj Teknikoj</h3>
                                <p>
                                    Mi aplikas diversajn projektan administradajn teknikojn por certigi sukceson:
                                </p>
                                <ul>
                                    <li><strong>Interesula Analizo & Administrado</strong> - Identigante kaj engaĝigante ĉefajn interesulojn</li>
                                    <li><strong>Riziko-Registro & Malpliiga Planado</strong> - Antaŭvidema risko-identigo kaj respondo</li>
                                    <li><strong>Gajnita Valoro-Administrado</strong> - Spurado de projekta agado kaj progreso</li>
                                    <li><strong>Rimedo-Niveligo & Atribuo</strong> - Optimumigante teaman kaj buĝetan utiligadon</li>
                                    <li><strong>Ŝanĝo-Kontrola Procezo</strong> - Efektive administrante amplekso-ŝanĝojn</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Flanka Stango -->
                    <div class="space-y-6">
                        <!-- Kompetenteca Karto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#2196F3] mr-2"></i>
                                Kompetenteca Nivelo
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Ĝenerala Kompetenteco</span>
                                        <span class="text-sm font-bold text-[#2196F3]">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#2196F3] to-[#1976D2]"
                                             data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Movipaj Metodologioj</span>
                                        <span class="text-sm font-bold text-green-500">92%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="92%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Teamgvidado</span>
                                        <span class="text-sm font-bold text-blue-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Buĝeta Administrado</span>
                                        <span class="text-sm font-bold text-purple-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Riziko-Administrado</span>
                                        <span class="text-sm font-bold text-yellow-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#2196F3] mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>8+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-tasks text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Administritaj Projektoj: <strong>150+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Teamgrando: <strong>5-15 membroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-dollar-sign text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Buĝeta Intervalo: <strong>$50K-$2M</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-[#2196F3] w-5 mr-3"></i>
                                    <span class="text-sm">Sukcesa Indicento: <strong>94%</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentecoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#2196F3] mr-2"></i>
                                Rilataj Kompetentecoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-flag text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#2196F3] transition-colors">Gvidado</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                </a>
                                <a href="/competences/communication-skills" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-comments text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#2196F3] transition-colors">Komunikado</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">92% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                </a>
                                <a href="/competences/problem-solving" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-puzzle-piece text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#2196F3] transition-colors">Problemo-Solvado</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                </a>
                                <a href="/competences/teamwork" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-people-carry text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#2196F3] transition-colors">Kunlaboro</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#2196F3] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div class="bg-gradient-to-r from-[#2196F3] to-[#1976D2] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas projektan gvidadon?</h3>
                            <p class="text-sm mb-4">Ni diskutu kiel efika projekta administrado povas peli vian sukceson</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#2196F3] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                <i class="fas fa-envelope mr-2"></i>
                                Komenci Projektan Diskuton
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

</x-frontend.layouts.app>

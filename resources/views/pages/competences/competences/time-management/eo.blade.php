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
                                <a href="/competences/soft-skills" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Molaj Kapabloj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Tempadministrado
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-gray-50 to-blue-gray-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#607D8B] to-[#455A64] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-clock text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 timemanagement-gradient">Tempadministrado</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Elstara Kapablo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Efika organizado kaj prioritizigo de taskoj kaj limdatoj. Maksimumigado de produktiveco per strategia planado kaj fokusita realigo.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-[#607D8B] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">90%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#607D8B] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Profesia Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#607D8B] mr-3">
                                        <i class="fas fa-check-double"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">98%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sukceso-Raporto de Limdatoj</div>
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
                            <!-- Pri Tempadministrado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#607D8B] mr-3"></i>
                                    Pri Tempadministrado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Tempadministrado</strong> estas la procezo de organizado kaj planado kiel
                                        dividi vian tempon inter specifaj aktivecoj por maksimumigi efikecon kaj produktivecon.
                                        En profesiaj kuntekstoj, ĝi envolvas strategian prioritizigon, administradon de limdatoj,
                                        kaj optimumigon de laborkuro por atingi optimalajn rezultojn.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Pliigita produktiveco</strong> - Plenumado de pli en malpli da tempo per efikaj laborkuroj</li>
                                        <li><strong>Reduktita streso</strong> - Efika administrado de laborŝarĝo por preventi superŝarĝiĝon</li>
                                        <li><strong>Pli bona decidado</strong> - Asignado de tempo al alt-impactaj aktivecoj</li>
                                        <li><strong>Plibonigita kvalito</strong> - Dediĉado de taŭga tempo al ĉiu tasko</li>
                                        <li><strong>Plibonigita reputacio</strong> - Konstantaj plenumoj de limdatoj kaj devontigoj</li>
                                        <li><strong>Labor-vivo ekvilibro</strong> - Kreado de spaco por persona kaj profesia kresko</li>
                                    </ul>

                                    <h3>Profesiaj Aplikoj</h3>
                                    <p>
                                        Efika tempadministrado estas decide grava tra ĉiuj profesiaj domajnoj kaj estas aparte esenca por:
                                    </p>
                                    <ul>
                                        <li>Projekta planado kaj administrado de limdatoj</li>
                                        <li>Kunordigo de multaj projektoj kaj tasko-ŝanĝado</li>
                                        <li>Preparado de kunvenoj kaj efika kunlaborado</li>
                                        <li>Persona produktiveco kaj fokusa administrado</li>
                                        <li>Optimumigo de teama laborkuro kaj kapacita planado</li>
                                        <li>Strategia planado kaj atingado de longtempaj celoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo pri Tempadministrado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#607D8B] mr-3"></i>
                                    Mia Vojaĝo pri Tempadministrado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Dum 10+ jaroj en postulemaj teknikaj roloj, mi rafinis mian alproksimiĝon al tempadministrado
                                        per kontinua lernado kaj praktika aplikado. De fruaj
                                        luktoj kun multtaskado ĝis majstrado de fokusita laboro kaj strategia planado,
                                        mia vojaĝo estis daŭra pliboniĝo kaj adaptiĝo.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-gray-50 to-blue-gray-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-bullseye text-[#607D8B] mr-2"></i>
                                                Strategia Prioritizigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvolvis sistemajn alproksimiĝojn al taska prioritizigo kiuj certigas ke
                                                alt-impactaj aktivecoj ricevas taŭgan fokuson kaj rimedojn.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-hourglass-half text-blue-500 mr-2"></i>
                                                Limdato-Majstrado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Atingis 98% rapordon de ĝustatempa liverado tra 200+ projektoj per
                                                detala planado, asignado de bufro-tempo kaj antaŭvida risko-administrado.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sistemo de Tempadministrado -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#607D8B] mr-3"></i>
                                    Mia Sistemo de Tempadministrado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi uzas kompletan sistemon de tempadministrado kiu kombinas pruvitajn metodologiojn
                                        kun personaj adaptaĵoj. Ĉi tiu sistemo certigas konstantan produktivecon dum
                                        konservado de fleksebleco por neatenditaj defioj kaj ŝancoj.
                                    </p>

                                    <h3>Kerna Kadro</h3>
                                    <div class="space-y-4 mt-4">
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Strategia Planado</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Semajnaj kaj ĉiutagaj planadaj sesioj por vicigi taskojn kun celoj kaj identigi prioritatojn.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Tasko-Prioritizigo</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Uzante Eisenhower-Matricon kaj ABCDE-metodon por kategorizi taskojn laŭ graveco kaj urĝeco.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Fokusita Realigo</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Tempo-blokado kaj Pomodoro-tekniko por profunda laboro kaj subteno de koncentriĝo.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-8 h-8 rounded-full bg-[#607D8B] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                                <span class="font-bold">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold">Revizio & Adaptado</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Ĉiutagaj kaj semajnaj revizioj por taksi progreson kaj ĝustigi strategiojn laŭbezone.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Teknikoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Tempo-Blokado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Pomodoro-Techniko</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eisenhower-Matrico</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Getting Things Done (GTD)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eat That Frog</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>80/20-Principo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Grupa Prilaborado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Du-Minuta Regulo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sukces-Rakontoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-trophy text-[#607D8B] mr-3"></i>
                                    Sukces-Rakontoj pri Tempadministrado
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mia kompetenteco pri tempadministrado konstante liveris esceptajn rezultojn tra diversaj profesiaj kuntekstoj:
                                    </p>
                                    <ul>
                                        <li><strong>Liverado de Kompleksaj Projektoj</strong> - Sukcese administris 3 samtempajn ĉefajn projektojn kun interkovrantaj limdatoj, liverante ĉiujn ĝustatempe per detala temp-asignado kaj prioritata administrado</li>
                                        <li><strong>Transformo de Team-Productiveco</strong> - Implementis tempadministran sistemon por 12-persona teamo kiu pliigis totalan produktivecon je 45% kaj reduktis supertempajn laborojn je 60%</li>
                                        <li><strong>Efikeco de Kriz-Reago</strong> - Kunordigis kritikan sisteman restarigon sub ekstrema tempopremo, solvante gravan paneon 40% pli rapide ol historia mezumo per optimumigita tasko-sekvencado</li>
                                        <li><strong>Plibonigo de Kunvena Efikeco</strong> - Reduktis kunvenan tempon je 50% tra la organizo dum plibonigado de decida kvalito per strukturita tagordo-administrado kaj temp-skatolado</li>
                                        <li><strong>Pinto de Persona Productiveco</strong> - Subtenis konstantan alt-elfaran agadon dum administrado de multaj roloj, atingante 30% pli da liveraĵoj ol teama mezumo per efika tempo-blokado</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Iloj & Metodoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#607D8B] mr-3"></i>
                                    Iloj & Metodoj de Tempadministrado
                                </h2>
                                <div class="content-section">
                                    <h3>Digitaj Iloj</h3>
                                    <p>
                                        Mi utiligas modernajn digitajn ilojn por plibonigi efikecon de tempadministrado:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Google Kalendaro</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Trello</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Notion</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Todoist</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Focus@Will</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">RescueTime</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Forest App</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Pomodone</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Clockify</span>
                                    </div>

                                    <h3>Analizaj Metodoj</h3>
                                    <p>
                                        Mi aplikas diversajn analizajn alproksimiĝojn por optimumigi tempouzon:
                                    </p>
                                    <ul>
                                        <li><strong>Tempo-Aŭditado</strong> - Regula analizo de temp-elspezo por identigi oportunojn de plibonigo</li>
                                        <li><strong>Produktivecaj Metrikoj</strong> - Spurante ĉefajn agad-indikilojn rilatajn al tempoutilizado</li>
                                        <li><strong>Administrado de Interrompoj</strong> - Sistema alproksimiĝo por minimumigi kaj pritrakti interrompojn</li>
                                        <li><strong>Mapado de Energi-Cikloj</strong> - Vicigante taskojn kun naturaj energiaj ŝablonoj por optimala agado</li>
                                        <li><strong>Kalkulado de Bufro-Tempo</strong> - Scienca alproksimiĝo al taksi kaj asigni kontingentan tempon</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Kompetentec-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#607D8B] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-[#607D8B]">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#607D8B] to-[#455A64]"
                                                 data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tasko-Prioritizigo</span>
                                            <span class="text-sm font-bold text-green-500">94%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="94%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Limdato-Administrado</span>
                                            <span class="text-sm font-bold text-blue-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Fokusa Administrado</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Efikeco de Multtaskado</span>
                                            <span class="text-sm font-bold text-yellow-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#607D8B] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#607D8B] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>10+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-clock text-[#607D8B] w-5 mr-3"></i>
                                        <span class="text-sm">Sukceso de Limdatoj: <strong>98%</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-tasks text-[#607D8B] w-5 mr-3"></i>
                                        <span class="text-sm">Administritaj Projektoj: <strong>200+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-chart-line text-[#607D8B] w-5 mr-3"></i>
                                        <span class="text-sm">Gajno de Productiveco: <strong>45% mezv.</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-hourglass text-[#607D8B] w-5 mr-3"></i>
                                        <span class="text-sm">Savita Tempo Semajne: <strong>10-15 horoj</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#607D8B] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/project-management" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-tasks text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#607D8B] transition-colors">Projekta Administrado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                    </a>
                                    <a href="/competences/organization" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-folder text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#607D8B] transition-colors">Organizado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                    </a>
                                    <a href="/competences/productivity" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bolt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#607D8B] transition-colors">Productiveco</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">92% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                    </a>
                                    <a href="/competences/focus" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-bullseye text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#607D8B] transition-colors">Fokuso & Koncentriĝo</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#607D8B] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#607D8B] to-[#455A64] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas temp-optimumigon?</h3>
                                <p class="text-sm mb-4">Ni diskutu kiel efika tempadministrado povas transformi vian produktivecon</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#607D8B] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Optimumigu Vian Tempon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-frontend.layouts.app>

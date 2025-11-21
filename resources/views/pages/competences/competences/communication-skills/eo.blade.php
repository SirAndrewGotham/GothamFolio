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
            .communication-gradient {
                background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
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
                                <a href="/competences/soft-skills" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Molaj Kapabloj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Komunikaj Kapabloj
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#4CAF50] to-[#45a049] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-comments text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 communication-gradient">Komunikaj Kapabloj</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Elstara Kapablo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Efika parola kaj skriba komunikado kun teamoj kaj klientoj. Fundamenta por sukcesa kunlaboro kaj projekta realigo.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#4CAF50] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">92%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Lerteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#4CAF50] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">12+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Profesia Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#4CAF50] mr-3">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">200+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Realigitaj Projektoj</div>
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
                            <!-- Pri Komunikaj Kapabloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#4CAF50] mr-3"></i>
                                    Pri Komunikaj Kapabloj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Komunikaj Kapabloj</strong> estas la fundamento de sukcesa kunlaboro,
                                        projekta administrado kaj klientaj rilatoj en la profesia mondo. Efika
                                        komunikado inkluzivas ne nur kion ni diras, sed kiel ni diras ĝin, kiam ni diras ĝin,
                                        kaj nian kapablon aŭskulti kaj kompreni aliajn.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Klaraj projekto-postuloj</strong> - Reduktante miskomprenojn kaj refarojn</li>
                                        <li><strong>Forta teama kunlaboro</strong> - Flegante produktivajn laborrilatojn</li>
                                        <li><strong>Efika klienta administrado</strong> - Konstruante fidon kaj administrante atendojn</li>
                                        <li><strong>Efika problemo-solvado</strong> - Rapide traktante aferojn per klara dialogo</li>
                                        <li><strong>Profesiaj prezentoj</strong> - Konfidante transdonante ideojn kaj proponojn</li>
                                        <li><strong>Transkultura adaptiĝemo</strong> - Efike laborante en diversaj medioj</li>
                                    </ul>

                                    <h3>Profesiaj Aplikoj</h3>
                                    <p>
                                        Fortaj komunikaj kapabloj estas esencaj tra ĉiuj profesiai kuntekstoj kaj estas aparte kritikaj por:
                                    </p>
                                    <ul>
                                        <li>Projekta administrado kaj teama gvidado</li>
                                        <li>Klientaj konsultoj kaj postulo-kolektado</li>
                                        <li>Teknika dokumentado kaj specifoj</li>
                                        <li>Interesulaj prezentoj kaj progres-raportoj</li>
                                        <li>Konflikto-solvado kaj intertraktado</li>
                                        <li>Mentorado kaj scio-dividado</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Komunika Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#4CAF50] mr-3"></i>
                                    Mia Komunika Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Dum 12+ jaroj en la teknologia industrio, mi disvolvis kaj rafinis miajn komunikajn
                                        kapablojn tra diversaj roloj — de individua kontribuanto al teama gvidanto, kaj de teknika
                                        specialisto al klient-fasada konsultisto. Ĉiu rolo prezentis unikajn komunikajn defiojn
                                        kiuj helpis min kreski kaj adapti mian alproksimiĝon.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-[#4CAF50] mr-2"></i>
                                                Tema Gvidado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Gvidis disvolvajn teamojn de 5-10 membroj, establinte klarajn komunikajn kanalojn,
                                                regulajn kontrolojn kaj efikajn reago-meĥanismojn kiuj plibonigis projekto-rezultojn.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-handshake text-blue-500 mr-2"></i>
                                                Klientaj Rilatoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Administris klientajn rilatojn trans 50+ projektoj, tradukante teknikajn konceptojn
                                                en negocan valoron kaj certigante interkonsenton inter teknika liverado kaj klientaj atendoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#4CAF50] mr-3"></i>
                                    Mia Komunika Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol jardeko da profesia sperto, mi rafinis miajn komunikajn kapablojn
                                        tra diversaj kuntekstoj — de teknikaj diskutoj kun disvolvaj teamoj al strategiaj
                                        konversacioj kun ĉefgvidantoj kaj praktikaj klarigoj kun finaj uzantoj.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Teknika Dokumentado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Klientaj Prezentoj kaj Demoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Postulo-Kolektado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Tema Kunordigo kaj Mentorado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Interesula Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Konflikto-Solvado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Transkultura Komunikado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aktiva Aŭskultado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Intertraktado kaj Persvado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Reago-Donado</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Komunikaj Kuntekstoj</h3>
                                    <ul>
                                        <li><strong>Teknikaj Teamoj</strong> - Klaraj specifoj, kodaj recenzoj kaj arkitekturaj diskutoj</li>
                                        <li><strong>Negocaj Interesuloj</strong> - Tradukante teknikajn kapablojn en negocan valoron</li>
                                        <li><strong>Internaciaj Klientoj</strong> - Adaptante komunikan stilon por kulturaj diferencoj</li>
                                        <li><strong>Projekta Administrado</strong> - Status-raportoj, risko-komunikado kaj mejloŝtonaj ĝisdatigoj</li>
                                        <li><strong>Uzanto-Trejnado</strong> - Kreante alireblan dokumentaron kaj kondukante efikajn trejnajn seancojn</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Komunikaj Metodoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#4CAF50] mr-3"></i>
                                    Komunikaj Metodoj kaj Iloj
                                </h2>
                                <div class="content-section">
                                    <h3>Parola Komunikado</h3>
                                    <p>
                                        Mi aplikas diversajn parolajn komunikajn strategiojn tajloritajn al malsamaj aŭskultantoj kaj kuntekstoj:
                                    </p>
                                    <ul>
                                        <li><strong>Unu-al-unu kunvenoj</strong> - Personigitaj diskutoj por detalaj reagoj kaj mentorado</li>
                                        <li><strong>Temaj ĉiutagaj kunvenoj</strong> - Efika ĉiutaga kunordigo kaj progres-spurado</li>
                                        <li><strong>Klientaj prezentoj</strong> - Strukturaj pruvoj kaj progres-recenzoj</li>
                                        <li><strong>Teknikaj laborejoj</strong> - Interaktivaj seancoj por scio-dividado</li>
                                        <li><strong>Interesulaj informoj</strong> - Koncizaj ĉefgvidantaj resumoj kaj rekomendoj</li>
                                    </ul>

                                    <h3>Skriba Komunikado</h3>
                                    <p>
                                        Mia skriba komunikado adaptiĝas al malsamaj formatoj kaj aŭskultantoj:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Teknikaj Dokumentoj</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Projektaj Proponoj</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Retpoŝta Komunikado</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">API-Dokumentado</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Progres-Raportoj</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Uzantaj Gvidiloj</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Kunvenaj Notoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Kodaj Komentoj</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Specifoj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Sukcesaj Rakontoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-trophy text-[#4CAF50] mr-3"></i>
                                    Komunikaj Sukces-Rakontoj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Efika komunikado estis instrumenta en pluraj ĉefaj projekto-sukcesoj:
                                    </p>
                                    <ul>
                                        <li><strong>Multnacia Retkomerca Platformo</strong> - Kunordigis inter rusa disvolva teamo kaj eŭropaj interesuloj, liverante projekton 2 semajnojn antaŭ planita dato per klara postulo-komunikado</li>
                                        <li><strong>Hereda Sistemo-Migrado</strong> - Sukcese komunikis teknikajn limigojn kaj migrad-strategion al neteknikaj interesuloj, sekurigante subtenon por kompleksa 18-monata projekto</li>
                                        <li><strong>Startupa Produkto-Lanĉo</strong> - Transiris komunikan breĉon inter teknika teamo kaj merkatika fako, certigante precizan reprezentadon de produkto-trajtoj en lanĉaj materialoj</li>
                                        <li><strong>Tema Restrukturigo</strong> - Faciligis glatan transiron dum organizaj ŝanĝoj tra travidebla komunikado kaj regulaj teamaj ĝisdatigoj</li>
                                        <li><strong>Klienta Krizo-Administrado</strong> - Konservis klientan fidon dum teknika paneo tra honesta, ĝustatempa komunikado kaj klara rekupero-plana prezentado</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flanka Strio -->
                        <div class="space-y-6">
                            <!-- Lertostria Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#4CAF50] mr-2"></i>
                                    Nivelo de Lerteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Lerteco</span>
                                            <span class="text-sm font-bold text-[#4CAF50]">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#4CAF50] to-[#45a049]"
                                                 data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Skriba Komunikado</span>
                                            <span class="text-sm font-bold text-green-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Parola Komunikado</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Klientaj Rilatoj</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tema Kunlaboro</span>
                                            <span class="text-sm font-bold text-yellow-500">94%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="94%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#4CAF50] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>12+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-comments text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Lingvoj: <strong>Rusa, Angla</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>200+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Teamoj Gviditaj: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-globe text-[#4CAF50] w-5 mr-3"></i>
                                        <span class="text-sm">Internaciaj Klientoj: <strong>25+ landoj</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#4CAF50] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-flag text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Gvidado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                    </a>
                                    <a href="/competences/project-management" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-tasks text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Projekta Administrado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                    </a>
                                    <a href="/competences/teamwork" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-people-carry text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Tema Laboro</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                    </a>
                                    <a href="/competences/presentation" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-bar text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#4CAF50] transition-colors">Prezentaj Kapabloj</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#4CAF50] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#4CAF50] to-[#45a049] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu Preta por Kunlabori?</h3>
                                <p class="text-sm mb-4">Ni diskutu kiel klara komunikado povas gvidi vian projekton al sukceso</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#4CAF50] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Komenci Konversacion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-frontend.layouts.app>

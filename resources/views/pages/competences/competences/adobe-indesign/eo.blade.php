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
            // Lerteca strio-animacio
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
                                <a href="/competences/design" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Dezajno
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Adobe InDesign
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Heroa Sekcio -->
        <section class="py-12 bg-gradient-to-br from-pink-50 to-rose-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FF3366] to-[#FF6A8A] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-file-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 indesign-gradient">Adobe InDesign</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-book mr-1"></i>
                                            Presaĵo & Paĝaranĝa Specialisto
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Labortabla publikiga kaj paĝaranĝa dezajna programaro. Profesia ilo por krei prespretajn dokumentojn kaj multpaĝajn publikaĵojn.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-[#FF3366] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">75%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Lerteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#FF3366] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#FF3366] mr-3">
                                        <i class="fas fa-copy"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">100+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Kreitaj Paĝaranĝoj</div>
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
                            <!-- Pri InDesign -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#FF3366] mr-3"></i>
                                    Pri Adobe InDesign
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Adobe InDesign</strong> estas la industristandarda labortabla publikiga programaro
                                        por krei profesionalajn paĝaranĝojn por kaj presaĵaj kaj ciferecaj amaskomunikiloj. Ĝi bonege
                                        traktas kompleksajn multpaĝajn dokumentojn kun preciza tipografia kontrolo kaj seninterrompa
                                        integriĝo kun aliaj Adobe Creative Cloud aplikoj.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Preciza tipografio</strong> - Altnivela tekstformatado kaj OpenType-trajtoj</li>
                                        <li><strong>Ĉefpaĝoj</strong> - Konstistantaj paĝaranĝaj ŝablonoj tra multaj paĝoj</li>
                                        <li><strong>Kradaj sistemoj</strong> - Profesia paĝaranĝa strukturo kaj vicigo</li>
                                        <li><strong>Subteno por longaj dokumentoj</strong> - Libroj, revuoj, kaj katalogoj kun enhavtabeloj</li>
                                        <li><strong>Prespreparado</strong> - Kompletaj antaŭkontrolaj kaj pakitaj iloj</li>
                                        <li><strong>Interagaj dokumentoj</strong> - PDF-formularoj, butonoj, kaj ciferecaj publikaĵoj</li>
                                    </ul>

                                    <h3>Rekomenditaj Aplikoj</h3>
                                    <p>
                                        InDesign estas esenca por diversaj publikigaj projektoj kaj estas aparte efika por:
                                    </p>
                                    <ul>
                                        <li>Brosuroj, flugfolioj, kaj merkatikaj materialoj</li>
                                        <li>Revuoj, ĵurnaloj, kaj periodaĵoj</li>
                                        <li>Libroj, manlibroj, kaj dokumentaro</li>
                                        <li>Korporaciaj raportoj kaj jaraj deklaroj</li>
                                        <li>Produktokatalogoj kaj prezo-listo</li>
                                        <li>Ciferecaj publikaĵoj kaj interagaj PDF-oj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun InDesign -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#FF3366] mr-3"></i>
                                    Mia Vojaĝo kun InDesign
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Adobe InDesign en 2019 por kompletigi miajn dezajnajn kapablojn per profesiaj
                                        paĝaranĝaj kapabloj. Dum 5+ jaroj, mi evoluigis sperton en kreado de prespretaj
                                        dokumentoj kaj multpaĝaj publikaĵoj por diversaj klientoj kaj projektoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-pink-50 to-rose-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-book text-[#FF3366] mr-2"></i>
                                                Multpaĝaj Publikaĵoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Evoluigis sperton en kreado de kompleksaj multpaĝaj dokumentoj inkluzive
                                                katalogojn, manlibrojn, kaj korporaciajn raportojn kun konstanta stiligo kaj navigado.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-print text-purple-500 mr-2"></i>
                                                Presproduktado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Majstris prespreparajn laborfluojn inkluzive koloradministradon,
                                                antaŭkontrolojn, kaj pakadon de dosieroj por profesia presado.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#FF3366] mr-3"></i>
                                    Mia Sperto kun InDesign
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 5+ jaroj da InDesign-sperto, mi kreis diversajn paĝaranĝajn projektojn
                                        de simplaj unupaĝaj flugfolioj ĝis kompleksaj multĉapitraj libroj kaj
                                        interagaj ciferecaj publikaĵoj.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ĉefpaĝa Kreado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Paragrafaj & Karakteraj Stiloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kradaj & Gvidaj Sistemoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Tabela Kreado & Formatado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Bildo-Lokigo & Ligado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Koloradministrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Antaŭkontrolo & Pakado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Interaga PDF-Kreado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Enhavtabela Generado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eksporto por Presaĵo & Reto</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Produktokataloga Dezajno</strong> - 48-paĝa plenkolora katalogo kun produkto-specifaĵoj</li>
                                        <li><strong>Korporacia Identeca Manlibro</strong> - Varmarkaj gvidlinioj kun detalaj paĝaranĝaj specifaĵoj</li>
                                        <li><strong>Eventaj Programaj Broŝuroj</strong> - Plurlingvaj eventaj materialoj kun kompleksa tipografio</li>
                                        <li><strong>Teknika Dokumentaro</strong> - Uzantaj manlibroj kun detalaj diagramoj kaj tabeloj</li>
                                        <li><strong>Merkatikaj Brosuroj</strong> - Diversaj presaĵaj materialoj por korporaciaj klientoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Teknikaj Detaloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#FF3366] mr-3"></i>
                                    Teknikaj Detaloj
                                </h2>
                                <div class="content-section">
                                    <h3>Laborfluaj Trajtoj</h3>
                                    <p>
                                        Mia InDesign-laborfluo enhavas profesiajn publikigajn teknikojn kaj industriajn normojn:
                                    </p>
                                    <ul>
                                        <li><strong>Stiladministrado</strong> - Kompletaj paragrafaj kaj karakteraj stilaj sistemoj</li>
                                        <li><strong>Objekto-stiloj</strong> - Konstanta formatado por kadroj, linioj, kaj formoj</li>
                                        <li><strong>Bibliotekoj & Fragmentoj</strong> - Reuzeblaj dezajnaj elementoj kaj aktivaĵoj</li>
                                        <li><strong>Datum-Kunfando</strong> - Aŭtomata enhavo-lokigo por variablaj datumoj</li>
                                        <li><strong>Libro-Trajto</strong> - Multdokumenta administrado por grandaj publikaĵoj</li>
                                    </ul>

                                    <h3>Ilo-Majstrado</h3>
                                    <p>
                                        Mi laboras kun la kompleta ilaro de InDesign, kun aparta spertulo en:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Tipa Ilo</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Kadraj Iloj</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Plumo-Ilo</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Tabela Kreado</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Antaŭkontrolo</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Paĝa Panel</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Tavoloj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Kolorprovaĵoj</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Efektoj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Portfolia Ligilo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-briefcase text-[#FF3366] mr-3"></i>
                                    Dezajna Portfolia
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Ekzemploj de miaj InDesign-paĝaranĝaj verkoj troveblas en mia dezajna portfolio:
                                    </p>
                                    <div class="mt-4">
                                        <a href="/works" class="inline-flex items-center px-4 py-2 bg-[#FF3366] hover:bg-[#E61A52] text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-briefcase mr-2"></i>
                                            <span>Vidi Dezajnan Portfolion</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mia portfolio montras diversajn paĝaranĝajn projektojn, presaĵajn materialojn, kaj publikaĵojn
                                        kreitajn uzante profesiajn InDesign-teknikojn kaj laborfluojn.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankopanelo -->
                        <div class="space-y-6">
                            <!-- Lerteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#FF3366] mr-2"></i>
                                    Nivelo de Lerteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Lerteco</span>
                                            <span class="text-sm font-bold text-[#FF3366]">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF3366] to-[#FF6A8A]"
                                                 data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tipografio & Paĝaranĝo</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Presproduktado</span>
                                            <span class="text-sm font-bold text-blue-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Multpaĝaj Dokumentoj</span>
                                            <span class="text-sm font-bold text-purple-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="72%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Interagaj PDF-oj</span>
                                            <span class="text-sm font-bold text-yellow-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#FF3366] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>5+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-file-alt text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>InDesign CC</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>100+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-copy text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Paĝoj Dezajnitaj: <strong>2,000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-print text-[#FF3366] w-5 mr-3"></i>
                                        <span class="text-sm">Presaj Taskoj: <strong>50+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#FF3366] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/adobe-photoshop" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#31A8FF] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-paint-brush text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF3366] transition-colors">Adobe Photoshop</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF3366] transition-colors"></i>
                                    </a>
                                    <a href="/competences/adobe-illustrator" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-pen-nib text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF3366] transition-colors">Adobe Illustrator</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF3366] transition-colors"></i>
                                    </a>
                                    <a href="/competences/typography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-font text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF3366] transition-colors">Tipografio</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF3366] transition-colors"></i>
                                    </a>
                                    <a href="/competences/print-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-print text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF3366] transition-colors">Presa Dezajno</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF3366] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#FF3366] to-[#FF6A8A] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu bezonas paĝaranĝon?</h3>
                                <p class="text-sm mb-4">Disponebla por publikaĵaj kaj presdezajnaj projektoj</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF3366] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

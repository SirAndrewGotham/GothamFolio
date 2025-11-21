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
            .captureone-gradient {
                background: linear-gradient(135deg, #00A4EF 0%, #0078D7 100%);
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
                                <a href="/competences/photography" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Fotografado
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Capture One
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#00A4EF] to-[#0078D7] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-camera text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 captureone-gradient">Capture One</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-bolt mr-1"></i>
                                            Profesia Laborfluo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Profesia programaro por prilaborado de RAW-bildoj kaj kabla fotado. Industria elekto por studia fotografado kaj postulema kolorlaboro.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#00A4EF] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">80%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Lerteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#00A4EF] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">4+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#00A4EF] mr-3">
                                        <i class="fas fa-images"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5K+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Prilaboritaj Bildoj</div>
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
                            <!-- Pri Capture One -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#00A4EF] mr-3"></i>
                                    Pri Capture One
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Capture One</strong> estas profesia aplikaĵo por prilaborado de RAW-bildoj,
                                        disvolvita de Phase One, fama pro sia escepta kolorreproduktado, kapabloj de kabla fotado,
                                        kaj potencaj redaktaj iloj. Ĝi estas la preferata elekto por komercaj,
                                        modaj kaj produktaj fotografoj kiuj postulas la plej altan kvaliton de eligo.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Supera koloroscienco</strong> - Gvidindustria kolorreproduktado kaj haŭttona prilaborado</li>
                                        <li><strong>Robusta kabla fotado</strong> - Seninterrompa kameraa kontrolo kaj tuja antaŭrigardo</li>
                                        <li><strong>Tavol-bazita redaktado</strong> - Nedetruaj ĝustigoj kun maskaj kapabloj</li>
                                        <li><strong>Seanca laborfluo</strong> - Projekt-bazita organizado por komercaj fotadoj</li>
                                        <li><strong>Kamera-specifaj profiloj</strong> - Optimumigita prilaborado por malsamaj kameraj modeloj</li>
                                        <li><strong>Rapido kaj rendimento</strong> - Efika prilaborado de grandaj bildvolumoj</li>
                                    </ul>

                                    <h3>Rekomenditaj Aplikoj</h3>
                                    <p>
                                        Capture One elstaras en profesiai fotografiaj medioj kaj estas aparte efika por:
                                    </p>
                                    <ul>
                                        <li>Komerca kaj produkta fotografado</li>
                                        <li>Modaj kaj portretaj studioj</li>
                                        <li>Arkitektura kaj nemoveblaĵa fotografado</li>
                                        <li>Altvolumena eventa fotografado</li>
                                        <li>Belarta kaj pejzaĝa fotografado</li>
                                        <li>Ajna laborfluo postulanta precizan koloran kontrolon</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Capture One -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#00A4EF] mr-3"></i>
                                    Mia Vojaĝo kun Capture One
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Capture One en 2020 por plibonigi mian profesian fotografi-an laborfluon,
                                        precipe por studia kaj komerca laboro. Dum 4+ jaroj, mi disvolvis ekspertecon
                                        en ĝiaj altnivelaj kolorredaktaj iloj kaj kabla fotado-kapabloj por postulemaj
                                        profesiai taskoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-palette text-[#00A4EF] mr-2"></i>
                                                Altnivela Kolora Laborfluo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Majstris la sofistikitajn kolorredaktajn ilojn de Capture One inkluzive de Color Balance,
                                                haŭttona unuecigo kaj altnivelaj kurbo-ĝustigoj por profesiai rezultoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-sliders-h text-purple-500 mr-2"></i>
                                                Kabla Fotado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvolvis efikajn kablan fotadajn laborfluojn por studiaj seancoj,
                                                ebligante realtempajn bildajn recenzojn kaj ĝustigojn dum komercaj fotadoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#00A4EF] mr-3"></i>
                                    Mia Sperto kun Capture One
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 4+ jaroj da intensa Capture One-uzado, mi prilaboris milojn da bildoj
                                        tra diversaj fotografiaj ĝenroj, disvolvante efikajn laborfluojn por ambaŭ
                                        individuaj projektoj kaj altvolumenaj komercaj taskoj.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Altnivela Kolorĝustigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Tavol-bazitaj Ĝustigoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Seanco kaj Kataloga Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Stilo kaj Antaŭagordo-Kreado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kamera Kabla Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Detala Plibonigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Lensa Korektado kaj Akrigado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Amasa Prilaborado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kolora Profila Administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eksportaj kaj Liveraj Laborfluoj</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Produkta Fotografia Kampanjo</strong> - Kabla fotado kaj kolorĝustigo por retkomerca kliento</li>
                                        <li><strong>Studiaj Portretaj Seancoj</strong> - Realtempa redaktado kaj klienta recenzo dum fotadoj</li>
                                        <li><strong>Arkitektura Fotografia Serio</strong> - Altnivela kolorĝustigo por internaj spacoj</li>
                                        <li><strong>Moda Lookbook-Produktado</strong> - Konstanta koloro trans multoblaj modeloj kaj lokoj</li>
                                        <li><strong>Korporaciaj Portretaj Seancoj</strong> - Efika amasa prilaborado por grandaj teamoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Teknikaj Detaloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#00A4EF] mr-3"></i>
                                    Teknikaj Detaloj
                                </h2>
                                <div class="content-section">
                                    <h3>Altnivelaj Trajtoj</h3>
                                    <p>
                                        Mia Capture One-laborfluo utiligas profesiajn trajtojn kaj teknikojn:
                                    </p>
                                    <ul>
                                        <li><strong>Kolorredaktilo</strong> - Precizaj HSL-ĝustigoj kaj haŭttona unuecigo</li>
                                        <li><strong>Tavoloj kaj Maskoj</strong> - Lokaj ĝustigoj kun penikaj, gradientaj kaj radialaj maskoj</li>
                                        <li><strong>Stiloj kaj Antaŭagordoj</strong> - Propra recepto-kreado kaj amasa apliko</li>
                                        <li><strong>Seanco-Organizado</strong> - Efika dosieradministrado por komercaj fotadoj</li>
                                        <li><strong>Fulmoklavoj</strong> - Optimumigita laborfluo por rapido kaj efikeco</li>
                                    </ul>

                                    <h3>Ilomajstrado</h3>
                                    <p>
                                        Mi laboras kun la kompleta ilaro de Capture One, kun aparta eksperteco en:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Color Balance</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Levels & Curves</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Layers Panel</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Clarity & Structure</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Skin Tone</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">LCC Tool</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Crop & Rotate</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Keywords</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Proofing</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Galerio-Ligilo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-images text-[#00A4EF] mr-3"></i>
                                    Fotogalerioj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Ekzemploj de miaj fotografiaj laboroj prilaboritaj per Capture One troveblas en miaj galerioj:
                                    </p>
                                    <div class="mt-4">
                                        <a href="/galleries" class="inline-flex items-center px-4 py-2 bg-[#00A4EF] hover:bg-[#0078D7] text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-images mr-2"></i>
                                            <span>Vidi Fotogaleriojn</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Miaj galerioj montras profesiajn fotografiajn projektojn kie la altnivelaj
                                        koloraj iloj kaj prilaboraj kapabloj de Capture One estis esencaj por atingi la finajn rezultojn.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flanka Strio -->
                        <div class="space-y-6">
                            <!-- Lertostria Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#00A4EF] mr-2"></i>
                                    Nivelo de Lerteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Lerteco</span>
                                            <span class="text-sm font-bold text-[#00A4EF]">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#00A4EF] to-[#0078D7]"
                                                 data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Kolorĝustigo</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Kabla Fotado</span>
                                            <span class="text-sm font-bold text-blue-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Laborflua Efikeco</span>
                                            <span class="text-sm font-bold text-purple-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Seanco-Administrado</span>
                                            <span class="text-sm font-bold text-yellow-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#00A4EF] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-camera text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Capture One Pro</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>60+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-images text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Prilaboritaj Bildoj: <strong>5,000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-usb text-[#00A4EF] w-5 mr-3"></i>
                                        <span class="text-sm">Kablaj Fotadoj: <strong>25+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#00A4EF] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/adobe-lightroom" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#31A8FF] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-image text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Adobe Lightroom</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-black flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-camera text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Fotografado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/color-theory" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-red-500 to-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-palette text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Kolora Teorio</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/studio-photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-gray-600 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-lightbulb text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#00A4EF] transition-colors">Studia Fotografado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#00A4EF] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#00A4EF] to-[#0078D7] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Profesia Foto-Laboro?</h3>
                                <p class="text-sm mb-4">Disponebla por komerca fotografado kaj redaktaj projektoj</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#00A4EF] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

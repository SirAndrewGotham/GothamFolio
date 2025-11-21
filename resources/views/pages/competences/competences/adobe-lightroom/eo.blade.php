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
                                <a href="/competences/photography" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Fotografado
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Adobe Lightroom
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Heroa Sekcio -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#31A8FF] to-[#2E8AE6] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-image text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 lightroom-gradient">Adobe Lightroom</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Elstara Kapablo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Profesia foto-redaktado kaj administrada programaro. Mia ĉefa ilo por cifereca fotografado ekde 2007.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">90%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Lerteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">15+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-images"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10K+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Prilaboritaj Fotoj</div>
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
                            <!-- Pri Lightroom -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#31A8FF] mr-3"></i>
                                    Pri Adobe Lightroom
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Adobe Lightroom</strong> estas profesia foto-redaktado kaj administrada aplikaĵo
                                        kiu fariĝis la industrio-normo por fotografoj tutmonde. Ĝi provizas kompletan
                                        laborfluan solvon de importado kaj organizado ĝis redaktado kaj eksportado de bildoj.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Nedetrua redaktado</strong> - Ĉiuj ŝanĝoj estas inversigeblaj kaj neniam ŝanĝas originalajn dosierojn</li>
                                        <li><strong>Pova organizado</strong> - Altnivela kataloga sistemo kun ŝlosilvortoj, taksadoj, kaj kolektoj</li>
                                        <li><strong>RAW-prilaborado</strong> - Supera traktado de RAW-dosieroj de ĉiuj ĉefaj fotilaj fabrikantoj</li>
                                        <li><strong>Antaŭagordo-sistemo</strong> - Konservi kaj apliki redaktajn stilojn tra multaj bildoj</li>
                                        <li><strong>Seninterrompa integriĝo</strong> - Funkcias perfekte kun Photoshop kaj aliaj Adobe-aplikoj</li>
                                        <li><strong>Nuba sinkronigo</strong> - Aliri viajn fotojn tra multaj aparatoj</li>
                                    </ul>

                                    <h3>Rekomenditaj Aplikoj</h3>
                                    <p>
                                        Lightroom estas ideala por diversaj fotografaj laborfluoj kaj estas aparte efika por:
                                    </p>
                                    <ul>
                                        <li>Profesia portreta kaj edziĝa fotografado</li>
                                        <li>Pejzaĝa kaj natura fotografado</li>
                                        <li>Eventa kaj sporta fotografado kun grandaj volumoj de bildoj</li>
                                        <li>Komerca produkta fotografado</li>
                                        <li>Personaj fotografiaj projektoj kaj arkivado</li>
                                        <li>Fotoreportado kaj dokumenta laboro</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Lightroom -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#31A8FF] mr-3"></i>
                                    Mia Vojaĝo kun Lightroom
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis uzi Adobe Lightroom en 2007 kiam tiu ĉi fotoredaktada programo aperis kaj ebligis pli seriozan ciferecan fotografadon. Dum la pasintaj 15+ jaroj, mi evoluigis efikan
                                        laborfluon kiu maksimumigas kaj kreivon kaj produktivecon.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-swatchbook text-[#31A8FF] mr-2"></i>
                                                Propraj Antaŭagordoj & Laborfluoj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Evoluigis vastajn kolektojn de propraj antaŭagordoj por malsamaj fotografaj ĝenroj
                                                kaj lumkondiĉoj, signife rapidigante mian redaktan procezon.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-project-diagram text-purple-500 mr-2"></i>
                                                Portfolia Administrado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Administris multoblajn fotografiajn portfoliojn kaj klientajn projektojn uzante Lightroom's
                                                potencan katalogan sistemon kaj kolektajn trajtojn.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#31A8FF] mr-3"></i>
                                    Mia Sperto kun Lightroom
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 15 jaroj da sperto, mi majstris kaj la teknikajn kaj kreivajn aspektojn
                                        de Adobe Lightroom, evoluigante laborfluojn kiuj ekvilibrigas efikecon kun artisma esprimo.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Altnivela Kolor-Gradado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>RAW-Dosiera Prilaborado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Amasa Prilaborado & Antaŭagordoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Detala Plibonigo & Akrigado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Lenso-Korekto & Transformoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Lokaj Ĝustigoj & Maskoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kataloga Administrado & Organizado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Eksportaj Laborfluoj por Malsamaj Amaskomunikiloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>HDR & Panoramo-Kunfando</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Agado-Optimigo</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Urba Esplorada Portfolia</strong> - Evoluigis konsekvencan redaktan stilon tra 500+ urbaj fotografiaj bildoj</li>
                                        <li><strong>Edziĝa Fotografia Laborfluo</strong> - Kreis efikan redaktan tubaron por altvoluma eventa fotografado</li>
                                        <li><strong>Produkta Fotografia Katalogo</strong> - Administris kaj redaktis komercajn produkto-bildojn kun konsekvenca kolorprecizeco</li>
                                        <li><strong>Vojaĝa Fotografia Serio</strong> - Prilaboris kaj organizis milojn da vojaĝaj bildoj kun propraj antaŭagordoj</li>
                                        <li><strong>Arkiva Cifereciga Projekto</strong> - Restaŭris kaj plibonigis historiajn fotojn uzante altnivelajn Lightroom-teknikojn</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Teknikaj Detaloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#31A8FF] mr-3"></i>
                                    Teknikaj Detaloj
                                </h2>
                                <div class="content-section">
                                    <h3>Laborfluaj Trajtoj</h3>
                                    <p>
                                        Mia Lightroom-laborfluo enhavas altnivelajn teknikojn kaj bonajn praktikojn por optimalaj rezultoj:
                                    </p>
                                    <ul>
                                        <li><strong>Propraj Importaj Antaŭagordoj</strong> - Aŭtomata metadato-apliko je importado</li>
                                        <li><strong>Inteligentaj Kolektoj</strong> - Dinamika organizado bazita sur bildaj kriterioj</li>
                                        <li><strong>Virtualaj Kopioj</strong> - Multoblaj redaktaj variadoj sen duplikado de dosieroj</li>
                                        <li><strong>Publikaj Servoj</strong> - Rekta eksporto al retplatformoj kaj sociaj amaskomunikiloj</li>
                                        <li><strong>Kromaĵa Integriĝo</strong> - Etendita funkcieco kun triapartaj iloj</li>
                                    </ul>

                                    <h3>Redaktada Iltaro</h3>
                                    <p>
                                        Mi laboras kun la plena gamo de Lightroom's redaktaj iloj, inkluzive:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Tonkurbo</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">HSL-Panelo</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Dividita Tonado</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Radiaj Filtriloj</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Gradiaj Filtriloj</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Penikaj Ĝustigoj</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Profilaj Korektoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Lensaj Korektoj</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Transforma Panelo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Galeria Ligilo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-images text-[#31A8FF] mr-3"></i>
                                    Fotaj Galerioj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Ekzemploj de mia fotografia laboro prilaborita per Adobe Lightroom troveblas en miaj galerioj:
                                    </p>
                                    <div class="mt-4">
                                        <a href="/galleries" class="inline-flex items-center px-4 py-2 bg-[#31A8FF] hover:bg-[#2E8AE6] text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-images mr-2"></i>
                                            <span>Vidi Fotajn Galeriojn</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Miaj galerioj montras diversajn fotografajn ĝenrojn, ĉiuj prilaboritaj uzante miajn proprajn Lightroom-laborfluojn kaj antaŭagordojn.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankopanelo -->
                        <div class="space-y-6">
                            <!-- Lerteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#31A8FF] mr-2"></i>
                                    Nivelo de Lerteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Lerteco</span>
                                            <span class="text-sm font-bold text-[#31A8FF]">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#31A8FF] to-[#2E8AE6]"
                                                 data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Kolor-Gradado</span>
                                            <span class="text-sm font-bold text-green-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Laborflua Efikeco</span>
                                            <span class="text-sm font-bold text-blue-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Kataloga Administrado</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">RAW-Prilaborado</span>
                                            <span class="text-sm font-bold text-yellow-500">93%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="93%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#31A8FF] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>15+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-image text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Lightroom Classic</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-images text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Prilaboritaj Fotoj: <strong>10,000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-swatchbook text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Propraj Antaŭagordoj: <strong>100+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#31A8FF] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/photography" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-black flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-camera text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Fotografado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/adobe-photoshop" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-adobe text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Adobe Photoshop</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/color-theory" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-red-500 to-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-palette text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Kolor-Teorio</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/digital-imaging" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-desktop text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Cifereca Bildigo</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#31A8FF] to-[#2E8AE6] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesita pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Disponebla por foto-redaktaj projektoj</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#31A8FF] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

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
                                    Kapablecoj
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
                                        Adobe Photoshop
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#31A8FF] to-[#001E36] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-paint-brush text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 photoshop-gradient">Adobe Photoshop</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Elstara Kapableco
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Industria norma bildredaktado kaj grafika dezajna programaro. Mia esenca ilo por kreaj projektoj ekde fino de 1990-aj jaroj.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Lerteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">25+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#31A8FF] mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">500+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Kompletigitaj Projektoj</div>
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
                            <!-- Pri Photoshop -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#31A8FF] mr-3"></i>
                                    Pri Adobe Photoshop
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Adobe Photoshop</strong> estas la industria ĉefa bildredaktado kaj grafika dezajna programaro
                                        kiu difinis digitalan kreivon dum jardekoj. Ĝi provizas senkomparajn ilojn por fotomanipulado,
                                        cifereca pentrado, grafika dezajno, kaj kompostado.
                                    </p>

                                    <h3>Ĉefaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Tavol-bazita redaktado</strong> - Nedetrua laborfluo kun kompleta fleksebleco</li>
                                        <li><strong>Altnivelaj elekto-iloj</strong> - Preciza maskado kaj objekto-izolado</li>
                                        <li><strong>Pova retuŝado</strong> - Profesia fotorestaurado kaj plibonigo</li>
                                        <li><strong>Kreivaj filtriloj & efektoj</strong> - Senfinaj eblecoj por artesprimo</li>
                                        <li><strong>Tipografiaj iloj</strong> - Altnivela tekstmanipulado kaj stilizado</li>
                                        <li><strong>3D kapablecoj</strong> - Baza 3D-modelado kaj teksturizado</li>
                                    </ul>

                                    <h3>Rekomenditaj Aplikoj</h3>
                                    <p>
                                        Photoshop elstaras en diversaj kreaj domajnoj kaj estas aparte efika por:
                                    </p>
                                    <ul>
                                        <li>Profesia foto-retoŭŝado kaj manipulado</li>
                                        <li>Cifereca pentrado kaj ilustrado</li>
                                        <li>Retpaĝaj kaj UI-dezajnaj malnetoj</li>
                                        <li>Presdezajno kaj paĝaranĝo</li>
                                        <li>Socialmedia grafikaĵoj kaj marketingaj materialoj</li>
                                        <li>Kreiva kompostado kaj surreala arto</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Photoshop -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#31A8FF] mr-3"></i>
                                    Mia Vojaĝo kun Photoshop
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis mian Photoshop-vojaĝon en la fino de 1990-aj jaroj, komence enfokusigante foto-retoŭŝadon
                                        kaj grade vastigante en grafikdezajnon kaj ciferecan arton. Dum pli ol 25 jaroj,
                                        mi disvolvis kompletan kapablecaron kiu kovras kaj teknikan precizecon
                                        kaj kreivan esprimon.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-magic text-[#31A8FF] mr-2"></i>
                                                Altnivela Retuŝado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Majstris profesiajn retuŝoteknikojn inkluzive de frekvenca separado,
                                                heliĝo kaj bruligo, kaj altnivela kolorĝustigo por portreta kaj produkta fotografio.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-puzzle-piece text-purple-500 mr-2"></i>
                                                Kreiva Kompostado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvolvis spertemon en kompleksa fotokompostado, kunfandante multoblajn bildojn
                                                senkune kun altnivelaj maskado kaj lumteknikoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#31A8FF] mr-3"></i>
                                    Mia Sperto kun Photoshop
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 25+ jaroj de intensa Photoshop-uzado, mi pritraktis diversajn projektojn
                                        de simplaj bildredaktoj ĝis kompleksaj kreivaj komponaĵoj kaj
                                        profesia dezajna laboro.
                                    </p>

                                    <h3>Specialigitaj Kapablecoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Altnivela Tavol-administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Preciza Maskado & Elektoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Nedetrua Redaktado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kolorĝustigo & Gradado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Fotorestaurado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Cifereca Pentrado & Ilustrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Inteligentaj Objektoj & Filtriloj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Tipografio & Tekstefektoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Retejo & UI-Dezajno</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kreado de Agoj & Aŭtomatigo</span>
                                        </div>
                                    </div>

                                    <h3>Ĉefaj Projektoj</h3>
                                    <ul>
                                        <li><strong>Plibonigo de Produkta Fotografado</strong> - Profesia retuŝado por retkomercaj klientoj</li>
                                        <li><strong>Portreta Retuŝa Serio</strong> - Naturaj tamen poluritaj portretaj plibonigoj</li>
                                        <li><strong>Marketing-Kampanjaj Grafikaĵoj</strong> - Vidaĵoj por socialaj amaskomunikiloj kaj reklamaj materialoj</li>
                                        <li><strong>Retejo UI Malnetoj</strong> - Detalaj dezajnaj komponaĵoj por retejo-disvolvaj projektoj</li>
                                        <li><strong>Kreiva Cifereca Arto</strong> - Sursrealaj komponaĵoj kaj konceptaj artaĵoj</li>
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
                                    <h3>Altnivelaj Teknikoj</h3>
                                    <p>
                                        Mia Photoshop-laborfluo inkluzivas profesiajn teknikojn kaj industriajn bonajn praktikojn:
                                    </p>
                                    <ul>
                                        <li><strong>Frekvenca Separo</strong> - Apartigado de teksturo kaj koloro por preciza retuŝado</li>
                                        <li><strong>Heliĝo & Bruligo</strong> - Altnivela kontrasto kaj formo-plibonigo</li>
                                        <li><strong>Kanal-Maskado</strong> - Kompleksaj elektoj uzante kolorajn kanalojn</li>
                                        <li><strong>Kunfandaj Glitiloj</strong> - Altnivelaj tavol-kunfandaj kontroloj</li>
                                        <li><strong>Propraj Penikoj & Ŝablonoj</strong> - Kreado kaj administrado de propraj aktivaĵoj</li>
                                    </ul>

                                    <h3>Majstrado de Iloj</h3>
                                    <p>
                                        Mi laboras kun la kompleta ilaro de Photoshop, kun aparta spertemo en:
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Plumingo</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Tavol-Maskoj</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Ĝustigaj Tavoloj</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Saniga Peniko</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Enhav-Konscia Plenigo</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Inteligentaj Objektoj</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Kunfandaj Reĝimoj</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Tipa Ilo</span>
                                        <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Formaj Tavoloj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Portfolia Ligilo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-briefcase text-[#31A8FF] mr-3"></i>
                                    Dezajna Portfolio
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Ekzemploj de mia Photoshop-laboro troveblas en mia dezajna portfolio:
                                    </p>
                                    <div class="mt-4">
                                        <a href="/works" class="inline-flex items-center px-4 py-2 bg-[#31A8FF] hover:bg-[#001E36] text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-briefcase mr-2"></i>
                                            <span>Vidi Dezajnan Portfolion</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mia portfolio montras diversajn dezajnajn projektojn, fotomanipuladojn, kaj kreivajn verkojn
                                        kreitajn uzante altnivelajn Photoshop-teknikojn.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Lerteco-Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#31A8FF] mr-2"></i>
                                    Nivelo de Lerteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Lerteco</span>
                                            <span class="text-sm font-bold text-[#31A8FF]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#31A8FF] to-[#001E36]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Foto-Retuŝado</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Grafika Dezajno</span>
                                            <span class="text-sm font-bold text-blue-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Cifereca Pentrado</span>
                                            <span class="text-sm font-bold text-purple-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Kompostado</span>
                                            <span class="text-sm font-bold text-yellow-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="88%" style="width: 0%"></div>
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
                                        <span class="text-sm">Sperto: <strong>25+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-paint-brush text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Photoshop CC</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>500+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-layer-group text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Kreitaj Dosieroj: <strong>2,000+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-clock text-[#31A8FF] w-5 mr-3"></i>
                                        <span class="text-sm">Uzitaj Horoj: <strong>3,000+</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kapablecoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#31A8FF] mr-2"></i>
                                    Rilataj Kapablecoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/adobe-lightroom" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#31A8FF] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-image text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Adobe Lightroom</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/illustrator" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-pen-nib text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Adobe Illustrator</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/graphic-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-palette text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">Grafika Dezajno</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                    <a href="/competences/ui-design" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-desktop text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#31A8FF] transition-colors">UI/UX Dezajno</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#31A8FF] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#31A8FF] to-[#001E36] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesita pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Disponebla por dezajnaj kaj bildredaktaj projektoj</p>
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

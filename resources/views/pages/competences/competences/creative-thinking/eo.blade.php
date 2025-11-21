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
            // Animacio de lertostangoj
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
                <nav class="flex fade-in" aria-label="Paneroj">
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
                                        Kreema Penso
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-yellow-50 to-orange-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-yellow-400 to-orange-400 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-lightbulb text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Kreema Penso</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Elstara Kapablo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Noviga aliro al problem-solvado kaj dezajnoj defioj tra sistema kreemo kaj ekster-la-skato pensado
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center text-yellow-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">88%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">10+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">150+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Projektoj</div>
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
                            <!-- Pri Kreema Penso -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-yellow-500 mr-3"></i>
                                    Pri Kreema Penso
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Kreema Penso</strong> estas la kapablo aliri problemojn kaj defiojn de freskaj perspektivoj,
                                        generante novigajn solvojn kaj traborajn ideojn. Ĝi kombinas imagpovon kun sistema rezonado
                                        por transformi kompleksajn defiojn en ŝancojn por novigo kaj kresko.
                                    </p>

                                    <h3>Ŝlosilaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Noviga Generado</strong> - Krei novajn solvojn al kompleksaj problemoj</li>
                                        <li><strong>Adapta Problemo-Solvado</strong> - Navigi necertecon per fleksebla pensado</li>
                                        <li><strong>Strategia Vizio</strong> - Vidi konektojn kaj ŝancojn kiujn aliaj maltrafas</li>
                                        <li><strong>Uzanto-Centrita Dezajno</strong> - Disvolvi solvojn kiuj vere kontentigas uzantajn bezonojn</li>
                                        <li><strong>Transdisciplinaj Intuicioj</strong> - Apliki scion el diversaj kampoj</li>
                                        <li><strong>Estonteco-Orientita Perspektivo</strong> - Antaŭvidi tendencojn kaj aperantajn bezonojn</li>
                                    </ul>

                                    <h3>Kernaj Principoj</h3>
                                    <p>
                                        Mia aliro al kreema penso estas konstruita sur pluraj fundamentaj principoj:
                                    </p>
                                    <ul>
                                        <li><strong>Diverĝa Penso</strong> - Generi multoblajn solvojn kaj perspektivojn</li>
                                        <li><strong>Asocia Penso</strong> - Konekti ŝajne nerilatajn konceptojn</li>
                                        <li><strong>Abstraktado</strong> - Vidi ŝablonojn kaj subkuŝantajn strukturojn</li>
                                        <li><strong>Eksperimentado</strong> - Testi ideojn per rapida prototipado</li>
                                        <li><strong>Kadro-ŝanĝo</strong> - Vidi problemojn de malsamaj anguloj</li>
                                        <li><strong>Sintezo</strong> - Kombini ideojn por krei novajn solvojn</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Vojaĝo kun Kreema Penso -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-yellow-500 mr-3"></i>
                                    Mia Vojaĝo kun Kreema Penso
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Dum la pasintaj 10+ jaroj, mi sisteme disvolvis miajn kapablojn pri kreema penso tra
                                        diversaj projektoj trans multnombraj industrioj. De dezajnado de uzantaj interfacoj ĝis solvado de kompleksaj
                                        teknikaj defioj, mi lernis utiligi kreemon kiel strategian ilon por novigo.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-brain text-yellow-500 mr-2"></i>
                                                Metoda Disvolviĝo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Disvolvis sistemajn alirojn al kreemo inkluzive
                                                dezajno-penso, laterala pensado, kaj TRIZ metodologioj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-blue-500 mr-2"></i>
                                                Teamo Faciligado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Ampleksa sperto gvidante kreemajn laborejojn kaj
                                                cerbaj ŝtormoj sesioj por diversaj teamoj kaj organizoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-yellow-500 mr-3"></i>
                                    Mia Kreema Pensa Sperto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun 10+ jaroj de aplikado de kreema penso trans 150+ projektoj, mi disvolvis
                                        kompreneblan ekspertecon en transformado de abstraktaj ideoj en praktikajn, novigajn solvojn.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Dezajno-pensa metodologia apliko</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Laterala pensado kaj paradigma ŝanĝo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Kreema faciligado kaj laboreja dezajno</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Ideiĝaj teknikoj kaj cerbaj ŝtormoj metodoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Prototipado kaj rapida eksperimentado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Transdisciplinaj novigoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Vida pensado kaj koncepta mapado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Noviga strategia disvolviĝo</span>
                                        </div>
                                    </div>

                                    <h3>Metodologioj & Kadroj</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Dezajno-Penso</span>
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Laterala Penso</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">TRIZ</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">SCAMPER</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Ses Pensaj Ĉapeloj</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Mensa Mapado</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Cerba Ŝtormo</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Rakonta Tabulo</span>
                                    </div>

                                    <h3>Kreemaj Procezaj Komponantoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-yellow-500 mb-2">Ideo Generado</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Diverĝaj pensaj teknikoj</li>
                                                <li>• Analogia rezonado</li>
                                                <li>• Hazardaj stimulaj metodoj</li>
                                                <li>• Devigitaj konektoj</li>
                                                <li>• Inversa pensado</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <h4 class="font-bold text-yellow-500 mb-2">Solvo Disvolviĝo</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Konverĝa pensado</li>
                                                <li>• Prototipado kaj testado</li>
                                                <li>• Ripeta rafinado</li>
                                                <li>•Eblececa analizo</li>
                                                <li>• Efektiviga planado</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Aplikita Kreema Penso -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-rocket text-yellow-500 mr-3"></i>
                                    Aplikita Kreema Penso
                                </h2>
                                <div class="content-section">
                                    <h3>Problemo-Solvaj Aplikoj</h3>
                                    <p>
                                        Mi aplikis kreeman penson por solvi diversajn defiojn trans variaj domajnoj:
                                    </p>
                                    <ul>
                                        <li><strong>Uzanto-Sperta Dezajno</strong> - Krei intuitivajn kaj allogajn interfacojn</li>
                                        <li><strong>Teknika Arkitekturo</strong> - Dezajni skaleblajn kaj subteneblajn sistemojn</li>
                                        <li><strong>Negoca Procezo Optimumigo</strong> - Simpligi laborkurojn kaj operaciojn</li>
                                        <li><strong>Produkta Novigo</strong> - Disvolvi novajn trajtojn kaj kapablojn</li>
                                        <li><strong>Teama Kunlaborado</strong> - Faciligi efikan trans-funkcian laboron</li>
                                        <li><strong>Strategia Planado</strong> - Disvolvi antaŭvidajn vojmapojn</li>
                                    </ul>

                                    <h3>Novigaj Teknikoj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Dezajno-Sprintoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Strukturaj 5-tagaj procezoj por solvi grandajn problemojn kaj testi novajn ideojn
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Rapida Prototipado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Rapida kreado de tuŝeblaj reprezentoj por testi kaj rafini konceptojn
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Uzanto-Vojaĝa Mapado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Videbligante uzantajn spertojn por identigi dolorajn punktojn kaj ŝancojn
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Scenara Planado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Esplorante multoblajn estontajn scenarojn por konstrui fortikajn strategiojn
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sukcesaj Rakontoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-trophy text-yellow-500 mr-3"></i>
                                    Kreema Pensa Sukcesaj Rakontoj
                                </h2>
                                <div class="content-section">
                                    <h3>Notindaj Atinigoj</h3>
                                    <p>
                                        Mia kreema pensa aliro kondukis al signifaj novigoj kaj traboroj:
                                    </p>
                                    <ul>
                                        <li><strong>Redezeno de Reta Komerca Platformo</strong> - Pligrandigis konvertiĝon je 35% tra noviga uzanto-flua dezajno</li>
                                        <li><strong>Mobila Aplikaĵo Novigo</strong> - Disvolvis premiatan gesto-bazitan navigacian sistemon</li>
                                        <li><strong>Entreprena Programaro</strong> - Kreis novan datumaran vidigon kiu reduktis decid-tempon je 60%</li>
                                        <li><strong>Startup Produkto Lanĉo</strong> - Dezajnis unikan valorproponon kiu sekurigis Serio A financadon</li>
                                        <li><strong>Hereda Sistemo Modernigo</strong> - Disvolvis migradan strategion kiu reduktis kostojn je 45%</li>
                                    </ul>

                                    <h3>Noviga Efiko</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Negoca Valoro</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreemaj solvoj kiuj liveris mezureblan ROI kaj konkuran avantaĝon
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Uzanto-Sperto</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Novigaj dezajnoj kiuj signife plibonigis uzanto-kontentigon kaj engaĝiĝon
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Teknika Novigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreemaj teknikaj solvoj kiuj solvis antaŭe nesolveblajn problemojn
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-yellow-500 mb-2">Teama Efikeco</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Kreemaj kunlaboraj metodoj kiuj plibonigis teaman produktivecon kaj moralon
                                            </p>
                                        </div>
                                    </div>

                                    {{--                                        <h3>Rekono & Premioj</h3>--}}
                                    {{--                                        <ul>--}}
                                    {{--                                            <li><strong>Noviga Premio 2022</strong> - Por traboraj uzantaj interfacaj dezajnoj</li>--}}
                                    {{--                                            <li><strong>Dezajno-Ekscelenca Premio</strong> - Kreema solvo por alireblecaj defioj</li>--}}
                                    {{--                                            <li><strong>Industria Rekono</strong> - Prezentita en teknikaj publikaĵoj por novigaj aliroj</li>--}}
                                    {{--                                            <li><strong>Klientaj Atestoj</strong> - Konstante laŭdata por kreema problemo-solvado</li>--}}
                                    {{--                                            <li><strong>Teama Gvidado</strong> - Rekonita por subteno de kreema kulturo en organizoj</li>--}}
                                    {{--                                        </ul>--}}
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Kompetenteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-yellow-500 mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ĝenerala Kompetenteco</span>
                                            <span class="text-sm font-bold text-yellow-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-yellow-400 to-orange-400"
                                                 data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ideo Generado</span>
                                            <span class="text-sm font-bold text-blue-500">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Problemo Kadro-ŝanĝo</span>
                                            <span class="text-sm font-bold text-green-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Noviga Faciligado</span>
                                            <span class="text-sm font-bold text-purple-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Transdisciplinaj Aplikoj</span>
                                            <span class="text-sm font-bold text-red-500">86%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="86%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>10+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>150+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Laborejoj: <strong>50+ kondukitaj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-trophy text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Premioj: <strong>Noviga rekono</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-star text-yellow-500 w-5 mr-3"></i>
                                        <span class="text-sm">Statuso: <strong>Elstara Kompetento</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Kreemaj Pensaj Iloj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-yellow-500 mr-2"></i>
                                    Kreemaj Iloj & Metodoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Dezajno-Pensa Procezo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Laterealaj Pensaj Teknikoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Mensa Mapado & Vida Penso</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">TRIZ Metodologio</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Sinektika Aliro</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-yellow-500 mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/problem-solving" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-puzzle-piece text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-yellow-500 transition-colors">Problemo-Solvado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/design-thinking" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-palette text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-yellow-500 transition-colors">Dezajno-Penso</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-users text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-yellow-500 transition-colors">Gvidado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/communication" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-comments text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-yellow-500 transition-colors">Komunikado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-yellow-400 to-orange-400 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu vi bezonas kreemajn solvojn?</h3>
                                <p class="text-sm mb-4">Ni novigu kaj solvu defiojn kune</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-yellow-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

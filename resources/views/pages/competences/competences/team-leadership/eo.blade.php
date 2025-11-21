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
    <section class="py-16">
        <div class="fluid-container">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Ĉefa Enhavo -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- Pri Teama Gvidado -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#9C27B0] mr-3"></i>
                                Pri Teama Gvidado
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Teama Gvidado</strong> en teknologio implikas gvidi evoluig-teamojn
                                    por atingi teknikan bonecon dum kreskigado kunlabora kaj kresko-orientita
                                    medio. Ĝi kombinas teknikan sperton kun hom-kapabloj por krei alt-efikajn
                                    teamojn kiuj liveras esceptajn rezultojn.
                                </p>

                                <h3>Ĉefaj Avantaĝoj</h3>
                                <ul>
                                    <li><strong>Plibonigita teama efikeco</strong> - Optimumigante individuajn kaj kolektivajn kontribuojn</li>
                                    <li><strong>Akcelerita kapabla disvolviĝo</strong> - Mentorante teamanojn por atingi sian potencialon</li>
                                    <li><strong>Plibonigita kunlaborado</strong> - Fostante fidon kaj efikan komunikadon</li>
                                    <li><strong>Pli altaj retenado-indikoj</strong> - Kreante mediojn kie talentoj prosperas</li>
                                    <li><strong>Pli bona decidado</strong> - Utiligante diversajn perspektivojn kaj ekspertecon</li>
                                    <li><strong>Pliigita novigado</strong> - Kuraĝigante kreivon kaj kalkulitan risk-prenadon</li>
                                </ul>

                                <h3>Profesiaj Aplikoj</h3>
                                <p>
                                    Efika teama gvidado estas esenca tra diversaj teknikaj kuntekstoj kaj estas aparte kritika por:
                                </p>
                                <ul>
                                    <li>Programara evoluiga teama administrado</li>
                                    <li>Teknika projekta gvidado kaj kunordigo</li>
                                    <li>Mentorado de junaj kaj mez-nivelaj programistoj</li>
                                    <li>Transfunkcia teama kunlaborado</li>
                                    <li>Agila teama faciligado kaj Scrum-majstreco</li>
                                    <li>Teknika kariera disvolva gvidado</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Gvidada Vojaĝo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#9C27B0] mr-3"></i>
                                Mia Gvidada Vojaĝo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Dum 6+ jaroj en gvidaj roloj, mi evoluigis de individua kontribuanto al teamestro,
                                    disvolvante mian gvid-stilon per man-sperto, formala trejnado kaj kontinua
                                    lernado. Mia vojaĝo inkludis mentoradon de programistoj, faciligadon de teama kresko, kaj
                                    kreante mediojn kie teknika boneco floras.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-graduation-cap text-[#9C27B0] mr-2"></i>
                                            Mentorado-Ekscelento
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Sukcese mentoris 40+ programistojn, kun pluraj antaŭenirantaj al altrangaj
                                            kaj gvidaj pozicioj ene de siaj organizoj per strukturita gvidado.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                            Teamo-Transformo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Transformis luktantajn teamojn en alt-efikajn unuojn per klara
                                            vizio-agordado, procezo-plibonigo kaj individua potencigo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mia Gvidada Filozofio -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#9C27B0] mr-3"></i>
                                Mia Gvidada Filozofio
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi kredas je serva gvidado kiu potencigas teamanojn dum konservado
                                    klaran direkton kaj respondecon. Mia alproksimiĝo fokusiĝas je kreado de medio
                                    kie teknikaj talentoj povas prosperi kaj liveri esceptajn rezultojn.
                                </p>

                                <h3>Gvidado-Principoj</h3>
                                <div class="space-y-4 mt-4">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">1</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Gvidi per Ekzemplo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Montras la teknikajn bonecon, labor-etikon kaj kunlaboran spiriton kiun mi atendas de la teamo.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">2</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Potencigi & Delegi</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Fidas teamanojn kun posedrajto kaj provizas aŭtonomion ene de klaraj limoj.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">3</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Fostigi Kreskon</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Investas en teama disvolviĝo per mentorado, trejnado kaj defiaj ŝancoj.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-[#9C27B0] flex items-center justify-center text-white mr-4 mt-1 flex-shrink-0">
                                            <span class="font-bold">4</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Komuniki Travideble</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Maintemas malferman komunikadon pri celoj, defioj kaj sukcesoj.</p>
                                        </div>
                                    </div>
                                </div>

                                <h3>Gvidado-Kompetentoj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Teknika Mentorado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Konflikto-Solvado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Efikeco-Administrado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Strategia Planado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Interesito-Administrado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Teamo-Konstruado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Ŝanĝo-Administrado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Emocia Intelekto</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sukcesaj Rakontoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-trophy text-[#9C27B0] mr-3"></i>
                                Gvidado-Sukcesaj Rakontoj
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mia gvidada alproksimiĝo konstante liveris pozitivajn rezultojn por teamoj kaj organizoj:
                                </p>
                                <ul>
                                    <li><strong>Teamo-Efikeco Turniĝo</strong> - Transformis subefikantan teamon de 8 programistoj en pint-efikan unuon, pliigante liveran rapidecon je 60% kaj reduktante cimojn je 75% ene de 6 monatoj</li>
                                    <li><strong>Mentorado-Programa Sukceso</strong> - Establis strukturitan mentorad-programon kiu akcelis junan programistan kreskon, kun 5 teamanoj promociitaj ene de 18 monatoj</li>
                                    <li><strong>Transfunkcia Kunlaborado</strong> - Pontis malplenon inter evoluigaj kaj komercaj teamoj, plibonigante postulata klarecon kaj reduktante re-laboron je 40%</li>
                                    <li><strong>Teknika Ŝuldo-Redukto</strong> - Gvidis iniciato kiu reduktis teknikajn ŝuldojn je 70% dum mantenado de trajto-liverado per strategia planado kaj teama vicigo</li>
                                    <li><strong>Teamo-Retenado Plibonigo</strong> - Plibonigis teaman retenadon de 65% al 92% per fokusita gvidada disvolviĝo kaj kariera kresko-ŝancoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Gvidado-Iloj & Metodoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#9C27B0] mr-3"></i>
                                Gvidado-Iloj & Metodoj
                            </h2>
                            <div class="content-section">
                                <h3>Teamo-Disvolvaj Iloj</h3>
                                <p>
                                    Mi utiligas diversajn ilojn kaj kadrojn por subteni teaman kreskon kaj efikecon:
                                </p>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">1-sur-1 Kunvenoj</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Karieraj Ŝtuparoj</span>
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Retrospectivoj</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Kapablo-Matricoj</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Rimarkigo-Sistemoj</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Teamo-Konstruado</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Mentorado-Programoj</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">OKR-oj</span>
                                    <span class="px-3 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg text-sm text-center">Efikeco-Revizioj</span>
                                </div>

                                <h3>Gvidado-Disvolvaj Metodoj</h3>
                                <p>
                                    Mi aplikas diversajn alproksimiĝojn por disvolvi gvidado-kapablojn en teamoj:
                                </p>
                                <ul>
                                    <li><strong>Situacia Gvidado</strong> - Adaptante gvid-stilon al teama matureco kaj kunteksto</li>
                                    <li><strong>Serva Gvidado</strong> - Fokusante je teamaj bezonoj kaj forigante obstaklojn</li>
                                    <li><strong>Transforma Gvidado</strong> - Inspirante teamojn por atingi esceptajn rezultojn</li>
                                    <li><strong>Trejnado & Mentorado</strong> - Disvolvante individuajn kapablojn kaj karierajn vojojn</li>
                                    <li><strong>Agila Gvidado</strong> - Faciligante mem-organizantajn teamojn kaj kontinuan plibonigon</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Flankmenuo -->
                    <div class="space-y-6">
                        <!-- Proficio-Karto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#9C27B0] mr-2"></i>
                                Proficia Nivelo
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Tuta Proficio</span>
                                        <span class="text-sm font-bold text-[#9C27B0]">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#9C27B0] to-[#7B1FA2]"
                                             data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Teknika Mentorado</span>
                                        <span class="text-sm font-bold text-green-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Teamo-Konstruado</span>
                                        <span class="text-sm font-bold text-blue-500">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Efikeco-Administrado</span>
                                        <span class="text-sm font-bold text-purple-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="82%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Konflikto-Solvado</span>
                                        <span class="text-sm font-bold text-yellow-500">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-yellow-500" data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#9C27B0] mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>6+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Teamoj Gviditaj: <strong>15+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-user-graduate text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Membroj Mentoritaj: <strong>40+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-rocket text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Teamo-Grandeco: <strong>5-12 membroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-chart-line text-[#9C27B0] w-5 mr-3"></i>
                                    <span class="text-sm">Efikeco-Plibonigo: <strong>60% averaĝe</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#9C27B0] mr-2"></i>
                                Rilataj Kompetentoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/project-management" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-tasks text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Projekta Administrado</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">88% proficienteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                </a>
                                <a href="/competences/communication-skills" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-comments text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Komunikado</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">92% proficienteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                </a>
                                <a href="/competences/mentoring" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-graduation-cap text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Mentorado</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">90% proficienteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                </a>
                                <a href="/competences/emotional-intelligence" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-brain text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#9C27B0] transition-colors">Emocia Intelekto</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% proficienteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#9C27B0] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div class="bg-gradient-to-r from-[#9C27B0] to-[#7B1FA2] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu bezonas Team-Gvidadon?</h3>
                            <p class="text-sm mb-4">Ni diskutu kiel efika gvidado povas transformi vian teamon</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#9C27B0] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                <i class="fas fa-envelope mr-2"></i>
                                Diskuti Gvidadon
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

</x-frontend.layouts.app>

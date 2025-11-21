<x-frontend.layouts.app>
    @push('section-styles')
        <style>
            /* Alpine.js specifa gradiento kiu ne estas en la ĉefa app.css */
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
                                <a href="/competences/frontend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Frontend Disvolviĝo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel Breeze
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-sky-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#60A5FA] to-[#0ea5e9] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-wind text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 breeze-gradient">Laravel Breeze</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-rocket mr-1"></i>
                                            Rapida Disvolviĝo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Minimumisma starta kito por aŭtentigo kun Blade, React aŭ Vue. Malpeza aŭtentiga subkonstruaĵo por modernaj Laravel-aplikoj.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">85%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Profesia Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-code-branch"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.x</div>
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
                            <!-- Pri Laravel Breeze -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#60A5FA] mr-3"></i>
                                    Pri Laravel Breeze
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Breeze</strong> estas minimuma, simpla implemento de ĉiuj aŭtentigaj trajtoj de Laravel.
                                        Breeze provizas mirindan startpunkton por konstrui freŝajn Laravel-aplikojn kun bele desegnitaj
                                        aŭtentigaj subkonstruaĵoj konstruitaj per Tailwind CSS.
                                    </p>

                                    <h3>Kernaj Trajtoj & Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Minimumisma Aliro</strong> - Pura, simpla aŭtentigo sen nenecesa komplekseco</li>
                                        <li><strong>Multoblaj Frontend-opcioj</strong> - Blade, React, Vue, kaj API subkonstruaĵaj opcioj</li>
                                        <li><strong>Tailwind CSS Stiligo</strong> - Bela, moderna dezajno el la skatolo</li>
                                        <li><strong>Plena Aŭtentigo</strong> - Ensaluto, registriĝo, pasvorta restarigo, retpoŝta kontrolado</li>
                                        <li><strong>Seanca Aŭtentigo</strong> - Tradicia retaplika aŭtentigo</li>
                                        <li><strong>Facila Agordado</strong> - Simpla etendi kaj modifi por projektoj bezonoj</li>
                                    </ul>

                                    <h3>Starta Kito Komparo</h3>
                                    <p>
                                        Breeze elstaras inter Laravel startaj kitoj pro sia simpleco:
                                    </p>
                                    <ul>
                                        <li><strong>Breeze</strong> - Minimuma aŭtentiga subkonstruaĵo</li>
                                        <li><strong>Jetstream</strong> - Plentrajta aplika subkonstruaĵo kun teamoj</li>
                                        <li><strong>Fortify</strong> - Senkapa aŭtentiga backend nur</li>
                                        <li><strong>Sanctum</strong> - API-ĵetona aŭtentigo por SPA-j kaj mobilaj aplikaĵoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Breeze Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#60A5FA] mr-3"></i>
                                    Mia Breeze Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Ekuzis Laravel Breeze en 2021 por rapida prototipado kaj nova projekta subkonstruaĵo.
                                        Dum pli ol 3+ jaroj, implementis Breeze tra diversaj projektoj tipoj inkluzive de tradiciaj retaplikaĵoj,
                                        SPA-j kun Vue.js kaj React, kaj API-pelitaj aplikaĵoj postulantaj rapidan aŭtentigan agordon.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-sky-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-bolt text-[#60A5FA] mr-2"></i>
                                                Rapida Prototipado
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vaste uzis Breeze por rapidaj projektoj startoj kaj MVP-oj,
                                                signife reduktante komencan disvolviĝan tempon.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-palette text-purple-500 mr-2"></i>
                                                Propra Stiligo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Agordis Breeze stilon por kongrui kun diversaj dezajnaj sistemoj
                                                dum konservante la subestantan aŭtentigan logikon.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Teknika Kompetenteco -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#60A5FA] mr-3"></i>
                                    Teknika Kompetenteco
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kompleta sperto kun Breeze instalado, agordado, kaj etendo
                                        tra diversaj frontend-teknologioj kaj projektoj postuloj.
                                    </p>

                                    <h3>Kernaj Breeze Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Breeze Instalado & Agordado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Frontend-stako Elekto (Blade/React/Vue)</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aŭtentiga Fluo Agordado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Tailwind CSS Stiligo Modifoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Retpoŝta Kontrolado Agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Pasvorta Restarigo Agordado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Profila Administrado Plibonigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Mult-staka Implemento</span>
                                        </div>
                                    </div>

                                    <h3>Frontend-stako Sperto</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Blade Ŝablonoj</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Vue.js</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">React</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Inertia.js</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Livewire</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Nur API</span>
                                    </div>

                                    <h3>Agordado & Etendo</h3>
                                    <ul>
                                        <li><strong>Dezajna Sistemo Integrigo</strong> - Agordado de Breeze por kongrui kun projektoj dezajnaj sistemoj</li>
                                        <li><strong>Pliaj Aŭtentigaj Trajtoj</strong> - Etendado preter bazan aŭtentigon</li>
                                        <li><strong>Multluanta Subteno</strong> - Adaptado de Breeze por multluantaj aplikaĵoj</li>
                                        <li><strong>Socia Aŭtentigo</strong> - Integrigo de sociaj ensalutaj provizantoj</li>
                                        <li><strong>Plibonigita Sekureco</strong> - Aldono de pliaj sekurecaj trajtoj kaj validigo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Implementaj Ŝablonoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#60A5FA] mr-3"></i>
                                    Implementaj Ŝablonoj
                                </h2>
                                <div class="content-section">
                                    <h3>Projekto-Specifaj Adaptoj</h3>
                                    <p>
                                        Sperto implementi Breeze tra diversaj projektoj tipoj kaj postuloj:
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-green-600 mb-2">Tradiciaj Retaplikaĵoj</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Blade-stako implementoj por tradiciaj servilo-renderitaj
                                                aplikaĵoj kun seanca aŭtentigo.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h4 class="font-semibold text-purple-600 mb-2">Modernaj SPA-j</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vue.js kaj React implementoj por unupagaj aplikaĵoj
                                                kun modernaj frontend-disvolviĝaj laborfluoj.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Integrigo & Ekosistemo</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Tailwind CSS</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Fortify Backend</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Sanctum API</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Socialite</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Livewire</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Inertia.js</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Alpine.js</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Vite</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Produktado & Plej Bonaj Praktikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-rocket text-[#60A5FA] mr-3"></i>
                                    Produktado & Plej Bonaj Praktikoj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Pretaj por produktado Breeze implementoj kun optimigita efikeco kaj plibonigitaj trajtoj:
                                    </p>

                                    <h3>Produktada Optimumigo</h3>
                                    <ul>
                                        <li><strong>Efikeca Agordado</strong> - Optimumigo de aŭtentigaj fluoj por produktado</li>
                                        <li><strong>Sekureca Fortikigo</strong> - Pliaj sekurecaj mezuroj preter defaŭltoj</li>
                                        <li><strong>Propra Validigo</strong> - Plibonigita formulara validigo kaj uzanto-sperto</li>
                                        <li><strong>Retpoŝta Ŝablona Agordado</strong> - Markitaj retpoŝtaj ŝablonoj por aŭtentigo</li>
                                        <li><strong>Erara Traktado</strong> - Plibonigitaj erarmesaĝoj kaj uzanto-feedback</li>
                                        <li><strong>Alirebleco</strong> - Certigado de WCAG-konformeco en aŭtentigaj fluoj</li>
                                    </ul>

                                    <h3>Disvolviĝa Laborfluo</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-blue-600 mb-2">Rapida Disvolviĝo</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Rapida projekta subkonstruaĵo</li>
                                                <li>• Koheraj aŭtentigaj ŝablonoj</li>
                                                <li>• Reduktita biletara kodo</li>
                                                <li>• Normigita projekta strukturo</li>
                                            </ul>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-green-600 mb-2">Team-Kunlaborado</h4>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Familiara projekta strukturo</li>
                                                <li>• Koheraj kodaj ŝablonoj</li>
                                                <li>• Facila enkonduko por novaj disvolvantoj</li>
                                                <li>• Normigitaj aŭtentigaj fluoj</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h3>Propra Trajto Implemento</h3>
                                    <ul>
                                        <li><strong>Uzanto-Profilo Plibonigo</strong> - Etendita profila administrado kun pliaj kampoj</li>
                                        <li><strong>Multlingva Subteno</strong> - Internaciigo de aŭtentigaj interfacoj</li>
                                        <li><strong>Malhela Reĝimo Subteno</strong> - Implementado de malhela reĝimo en aŭtentigaj fluoj</li>
                                        <li><strong>Altnivela Formulara Validigo</strong></li>
                                        <li><strong>Propra Middleware Integrigo</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Flankopanelo -->
                        <div class="space-y-6">
                            <!-- Kompetenteco Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#60A5FA] mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Entuta Breeze</span>
                                            <span class="text-sm font-bold text-[#60A5FA]">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#60A5FA] to-[#0ea5e9]"
                                                 data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Blade Implemento</span>
                                            <span class="text-sm font-bold text-green-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Vue.js Implemento</span>
                                            <span class="text-sm font-bold text-blue-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">React Implemento</span>
                                            <span class="text-sm font-bold text-purple-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Agordado</span>
                                            <span class="text-sm font-bold text-orange-500">82%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="82%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#60A5FA] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#60A5FA] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#60A5FA] w-5 mr-3"></i>
                                        <span class="text-sm">Versio: <strong>Breeze 1.x</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#60A5FA] w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>18+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-wind text-[#60A5FA] w-5 mr-3"></i>
                                        <span class="text-sm">Frontend-stakoj: <strong>Blade, Vue, React</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bolt text-[#60A5FA] w-5 mr-3"></i>
                                        <span class="text-sm">Rapidaj Startoj: <strong>25+ projektoj</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#60A5FA] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                    </a>
                                    <a href="/competences/laravel-fortify" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-lock text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Laravel Fortify</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                    </a>
                                    <a href="/competences/tailwind" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-wind text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Tailwind CSS</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                    </a>
                                    <a href="/competences/vue-js" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-600 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-vuejs text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#60A5FA] transition-colors">Vue.js</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#60A5FA] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#60A5FA] to-[#0ea5e9] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu Vi Bezonas Rapidan Aŭtentigan Agordon?</h3>
                                <p class="text-sm mb-4">Pretas startigi vian projekton kun Laravel Breeze</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

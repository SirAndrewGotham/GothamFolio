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
                                <a href="/competences/soft-skills" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Molaj Kapabloj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Adaptiĝemo
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Heroa Sekcio -->
        <section class="py-12 bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#FF5722] to-[#FF9800] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-exchange-alt text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 adaptability-gradient">Adaptiĝemo</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-star mr-1"></i>
                                            Ĉefa Forto
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Rapida adaptiĝo al novaj teknologioj, metodologioj kaj ŝanĝiĝantaj postuloj. Ŝtono de mia profesia alproksimiĝo.
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">92%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Lerteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">12+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Profesia Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">50+ projektoj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sukcese Adaptitaj</div>
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
                            <!-- Pri Adaptiĝemo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#FF5722] mr-3"></i>
                                    Pri Adaptiĝemo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Adaptiĝemo</strong> estas la kapablo ĝustigi sin al novaj kondiĉoj, teknologioj kaj postuloj rapide kaj efike.
                                        En la rapida mondo de teknologio, ĉi tiu kapablo estis fundamenta por mia sukceso tra diversaj projektoj kaj industrioj.
                                    </p>

                                    <h3>Kernaj Principoj</h3>
                                    <ul>
                                        <li><strong>Daŭra Lernado</strong> - Alproprigi novajn teknologiojn kaj metodologiojn kiel ŝancojn</li>
                                        <li><strong>Fleksa Mensostato</strong> - Preteco ŝanĝi alproksimiĝojn kiam cirkonstancoj postulas</li>
                                        <li><strong>Rezistemo</strong> - Subtenado de agado sub ŝanĝiĝantaj kondiĉoj kaj premo</li>
                                        <li><strong>Antaŭsenca Ĝustigo</strong> - Antaŭvidi ŝanĝon kaj prepari laŭe</li>
                                        <li><strong>Transfunkcia Apliko</strong> - Translokado de kapabloj tra malsamaj domajnoj kaj kuntekstoj</li>
                                    </ul>

                                    <h3>Profesia Kunteksto</h3>
                                    <p>
                                        En miaj 12+ jaroj da sperto, adaptiĝemo estis decida por:
                                    </p>
                                    <ul>
                                        <li>Transiro inter malsamaj teknologiaj stakoj kaj kadroj</li>
                                        <li>Laboro kun diversaj teamoj kaj organizaj kulturoj</li>
                                        <li>Respondo al ŝanĝiĝantaj projektaj postuloj kaj amplekso</li>
                                        <li>Adopto de novaj evoluigaj metodologioj kaj praktikoj</li>
                                        <li>Navigado tra industriaj ŝanĝoj kaj aperantaj teknologioj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Adaptiĝema Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#FF5722] mr-3"></i>
                                    Mia Adaptiĝema Vojaĝo
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mia adaptiĝema vojaĝo ampleksas pli ol 12 jarojn de navigado tra teknologia evoluo,
                                        organizaj ŝanĝoj kaj ŝanĝiĝantaj merkataj postuloj. Ĉi tiu kapablo ebligis min
                                        prosperi en diversaj medioj kaj liveri konsekvencajn rezultojn.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-code-branch text-[#FF5722] mr-2"></i>
                                                Teknologiaj Transiroj
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Sukcese transiris tra multaj teknologiaj eraoj - de PHP 3.3 al modernaj kadroj,
                                                alprenante novajn programadajn paradigmojn kaj evoluigajn alproksimiĝojn.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-blue-500 mr-2"></i>
                                                Teamo kaj Kulturo Adaptiĝo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Efike laboris tra start-up'oj, agentejoj kaj entreprenaj medioj,
                                                adaptante al malsamaj teamstrukturoj, komunikstiloj kaj laborfluoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ĉefaj Adaptiĝemaj Scenaroj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#FF5722] mr-3"></i>
                                    Ĉefaj Adaptiĝemaj Scenaroj
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Tra mia kariero, adaptiĝemo estis testita kaj pruvita en diversaj defiaj scenaroj:
                                    </p>

                                    <h3>Evoluo de Teknologia Stako</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>PHP 3.3 → Moderna PHP 8.x</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Proceza → Objektema Programado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propraj Kadroj → Laravel Ekosistemo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Monolita → Mikroserva Arkitekturo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Tradicia → Nuba Evoluigo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Aldono de Python & Data Science al kapabloj</span>
                                        </div>
                                    </div>

                                    <h3>Adaptiĝo de Metodologio kaj Procezo</h3>
                                    <ul>
                                        <li><strong>Akvofalo al Agile</strong> - Transiro de evoluigaj procezoj al ripetaj, kunlaboraj alproksimiĝoj</li>
                                        <li><strong>DevOps Integrigo</strong> - Adaptiĝo al CI/CD tubaroj kaj aŭtomatigitaj disvolviĝaj praktikoj</li>
                                        <li><strong>Fora Kunlaboro</strong> - Majstrado de distribuita teamkoordinado kaj komunikaj iloj</li>
                                        <li><strong>Transfunkciaj Teamoj</strong> - Efika laboro kun diversaj kapabloj kaj perspektivoj</li>
                                    </ul>

                                    <h3>Projekta kaj Postula Fleksebleco</h3>
                                    <ul>
                                        <li><strong>Ŝanĝoj de Amplekso</strong> - Sukcese administri evoluigantajn projektajn postulojn sen kompromiti kvaliton</li>
                                        <li><strong>Teknologiaj Ŝanĝoj</strong> - Adaptiĝo al ŝanĝoj de teknologia stako dum projekto</li>
                                        <li><strong>Teama Restrukturigo</strong> - Subtenado de produktiveco tra organizaj ŝanĝoj</li>
                                        <li><strong>Merkata Adaptiĝo</strong> - Ŝanĝo de projekta fokuso bazita sur merkata feedback kaj tendencoj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Alproksimiĝo al Lernado kaj Kresko -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#FF5722] mr-3"></i>
                                    Alproksimiĝo al Lernado kaj Kresko
                                </h2>
                                <div class="content-section">
                                    <h3>Daŭra Kapabla Disvolviĝo</h3>
                                    <p>
                                        Mia alproksimiĝo al subtenado de alta adaptiĝemo inkluzivas sisteman lernadon kaj kapablan disvolviĝon:
                                    </p>
                                    <ul>
                                        <li><strong>Teknologia Monitorado</strong> - Regula sekvado de aperantaj teknologioj kaj industriaj tendencoj</li>
                                        <li><strong>Mana Eksperimentado</strong> - Konstruado de pruvo-de-koncepto projektoj kun novaj iloj</li>
                                        <li><strong>Komunuma Partopreno</strong> - Partopreno en teknikaj komunumoj kaj dividado de scio</li>
                                        <li><strong>Formala kaj Neformala Lernado</strong> - Kombinado de kursoj, atestiloj kun praktika apliko</li>
                                        <li><strong>Transa Trejnado</strong> - Disvolvado de komplementaj kapabloj tra malsamaj domajnoj</li>
                                    </ul>

                                    <h3>Adaptiĝaj Strategioj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#FF5722] mb-2">Inkrementa Adopto</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Laŭgrada integrigo de novaj teknologioj dum subtenado de ekzistantaj sistemoj
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#FF5722] mb-2">Riska Administrado</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Taksado kaj mildigo de riskoj dum teknologiaj transiroj
                                            </p>
                                        </div>
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#FF5722] mb-2">Sciotransdono</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Dokumentado kaj dividado de lernospertoj kun teamoj
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#FF5722] mb-2">Feedback Integrigo</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Uzado de feedback por konstante rafini adaptiĝajn alproksimiĝojn
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankopanelo -->
                        <div class="space-y-6">
                            <!-- Lerteca Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#FF5722] mr-2"></i>
                                    Nivelo de Lerteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Tuta Adaptiĝemo</span>
                                            <span class="text-sm font-bold text-[#FF5722]">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF5722] to-[#FF9800]"
                                                 data-width="92%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Teknologia Lernado</span>
                                            <span class="text-sm font-bold text-green-500">95%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="95%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Proceza Adaptiĝo</span>
                                            <span class="text-sm font-bold text-blue-500">90%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="90%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Teama Fleksebleco</span>
                                            <span class="text-sm font-bold text-purple-500">88%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="88%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Ŝanĝo Administrado</span>
                                            <span class="text-sm font-bold text-orange-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#FF5722] mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#FF5722] w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>12+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-sync-alt text-[#FF5722] w-5 mr-3"></i>
                                        <span class="text-sm">Adaptitaj Projektoj: <strong>50+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#FF5722] w-5 mr-3"></i>
                                        <span class="text-sm">Teknologiaj Stakoj: <strong>10+ majstritaj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-[#FF5722] w-5 mr-3"></i>
                                        <span class="text-sm">Teamaj Tipoj: <strong>Start-up al Entrepreno</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-globe text-[#FF5722] w-5 mr-3"></i>
                                        <span class="text-sm">Industrioj: <strong>8+ domajnoj</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#FF5722] mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/problem-solving" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-puzzle-piece text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF5722] transition-colors">Problemo-Solvado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">90% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                    </a>
                                    <a href="/competences/continuous-learning" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-graduation-cap text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF5722] transition-colors">Daŭra Lernado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">88% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                    </a>
                                    <a href="/competences/communication" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-comments text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF5722] transition-colors">Komunikado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                    </a>
                                    <a href="/competences/leadership" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-users text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF5722] transition-colors">Gvidado</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% lerteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF5722] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-[#FF5722] to-[#FF9800] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu interesita pri kunlaboro?</h3>
                                <p class="text-sm mb-4">Pretas diskuti kiel adaptiĝemo povas utiligi vian projekton</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-orange-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

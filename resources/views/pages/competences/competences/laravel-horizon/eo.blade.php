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
                        <!-- Pri Laravel Horizon -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#FF6B6B] mr-3"></i>
                                Pri Laravel Horizon
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Laravel Horizon</strong> provizas belan instrumentpanelon kaj kod-direktitan agordon por viaj Laravel-povitaj Redis-vicoj.
                                    Horizon permesas al vi facile monitori ŝlosilajn mezurojn de via vicosistemo kiel taska trafluo, rultempo kaj taskaj malsukcesoj.
                                </p>

                                <h3>Kernaj Trajtoj & Avantaĝoj</h3>
                                <ul>
                                    <li><strong>Bela Instrumentpanelo</strong> - Realtempaj mezuroj kaj monitora interfaco</li>
                                    <li><strong>Kod-Direktita Agordo</strong> - Versiokontrolita vico-agordo</li>
                                    <li><strong>Mezuro-Monitorado</strong> - Trafluo, rultempo kaj malsukcesa spurado</li>
                                    <li><strong>Taska Administrado</strong> - Ripetu malsukcesintajn taskojn, monitoru lastatempajn taskojn</li>
                                    <li><strong>Vico-Ekvilibrigado</strong> - Aŭtomataj kaj manaj ekvilibrigaj strategioj</li>
                                    <li><strong>Sciigoj</strong> - Slack kaj retpoŝtaj sciigoj por vico-problemoj</li>
                                </ul>

                                <h3>Ŝlosilaj Monitoraj Kapabloj</h3>
                                <p>
                                    Horizon provizas ampleksajn enrigardojn en vian vicosistemon:
                                </p>
                                <ul>
                                    <li>Realtempaj task-prilaboraj mezuroj kaj trafluo</li>
                                    <li>Task-rultempa efikeco kaj botelkol-identigo</li>
                                    <li>Malsukcesa taska spurado kun detalaj erarinformoj</li>
                                    <li>Vico-laborkarga distribuo kaj ekvilibrigado</li>
                                    <li>Historiaj efikec-datenoj kaj tendencoj</li>
                                    <li>Etiked-bazita task-organizado kaj filtrado</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Horizon-Vojo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#FF6B6B] mr-3"></i>
                                Mia Horizon-Vojo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Ekimplementis Laravel Horizon en 2020 por produktaj aplikoj postulantaj
                                    fortikan vico-monitoradon.
                                    Dum pli ol 4+ jaroj, agordis kaj prizorgis Horizon tra diversaj medioj
                                    de unuopaj serviloj
                                    al multservilaj produktaj aranĝoj kun kompleksaj vico-arkitekturoj.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div
                                        class="bg-gradient-to-br from-red-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-sliders-h text-[#FF6B6B] mr-2"></i>
                                            Produkta Agordo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Vasta sperto agordi Horizon por produktaj medioj
                                            kun multoblaj vicoj, superrigardantoj kaj monitoraj aranĝoj.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                            Efikeca Optimumigo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Implementis vico-optimumigajn strategiojn uzante Horizon-mezurojn
                                            por identigi botelkolojn kaj plibonigi task-prilaboran efikecon.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Teknika Sperteco -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#FF6B6B] mr-3"></i>
                                Teknika Sperteco
                            </h2>
                            <div class="content-section">
                                <p>
                                    Ampleksa sperto kun Horizon-agordo, monitorado kaj optimumigo
                                    tra diversaj produktaj scenaroj kaj aplikaj arkitekturoj.
                                </p>

                                <h3>Kernaj Horizon-Kapabloj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Horizon-Agordo & Medioj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Superrigardanto-Agordo & Administrado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Vico-Ekvilibrigaj Strategioj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Mezuro-Monitorado & Analizo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Malsukcesa Taska Administrado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Etiked-bazita Task-Organizado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Sciiga Agordo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Sekureca & Aŭtentiga Agordo</span>
                                    </div>
                                </div>

                                <h3>Altanivelaj Agordaj Ŝablonoj</h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Plur-Medio</span>
                                    <span
                                        class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Aŭtomata Skalado</span>
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Propraj Mezuroj</span>
                                    <span
                                        class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Vico-Prioritizado</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Task-Amasiĝo</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Efikeca Agordado</span>
                                </div>

                                <h3>Monitorado & Avertoj</h3>
                                <ul>
                                    <li><strong>Realtempa Instrumentpanelo</strong> - Vivantaj mezuroj kaj task-prilabora statuso</li>
                                    <li><strong>Propraj Mezuroj</strong> - Aplik-specifa efikeca spurado</li>
                                    <li><strong>Malsukcesa Analizo</strong> - Detala malsukcesa taska inspektado kaj sencimigo</li>
                                    <li><strong>Sciigaj Sistemoj</strong> - Slack, retpoŝto kaj propraj sciigaj kanaloj</li>
                                    <li><strong>Sano-Kontroloj</strong> - Vico-sana monitorado kaj avertado</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Produkta Disvastigo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-server text-[#FF6B6B] mr-3"></i>
                                Produkta Disvastigo & DevOps
                            </h2>
                            <div class="content-section">
                                <h3>Disvastigaj Strategioj</h3>
                                <p>
                                    Sperto disvastigi kaj prizorgi Horizon en diversaj produktaj medioj:
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                    <div
                                        class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-green-600 mb-2">Unu Servila Agordo</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Baza Horizon-agordo por unu-servilaj aplikoj
                                            kun optimumigita vico-prilaborado kaj monitorado.
                                        </p>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-purple-600 mb-2">Plur-Servila Arkitekturo</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kompleksaj Horizon-aranĝoj tra multaj serviloj kun
                                            elŝarĝa ekvilibrigado kaj distribuita vico-prilaborado.
                                        </p>
                                    </div>
                                </div>

                                <h3>DevOps-Integriĝo</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span
                                        class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Docker</span>
                                    <span
                                        class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Redis</span>
                                    <span
                                        class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Superrigardanto</span>
                                    <span
                                        class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">CI/CD</span>
                                    <span
                                        class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Monitorado</span>
                                    <span
                                        class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Elŝarĝa Ekvilibrigado</span>
                                    <span
                                        class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Avertado</span>
                                    <span
                                        class="px-3 py-2 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm text-center">Rezervaj Kopioj</span>
                                </div>
                            </div>
                        </div>

                        <!-- Efikeco & Optimumigo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-rocket text-[#FF6B6B] mr-3"></i>
                                Efikeco & Optimumigo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Diversaj Horizon-optimumigaj strategioj kaj efikec-agordaj implementoj:
                                </p>

                                <h3>Optimumigaj Strategioj</h3>
                                <ul>
                                    <li><strong>Vico-Agordo</strong> - Optimalaj proces-kvantoj kaj memlimoj</li>
                                    <li><strong>Ekvilibrigaj Strategioj</strong> - Aŭtomataj, simplaj kaj propraj ekvilibrigaj aliroj</li>
                                    <li><strong>Memora Administrado</strong> - Malhelpi memor-filtrado en longdaŭraj procezoj</li>
                                    <li><strong>Task-Dividado</strong> - Efika prilaborado de grandaj datenaroj</li>
                                    <li><strong>Rapid-Limigo</strong> - Kontroli taskan trafluon por eksteraj API-oj</li>
                                    <li><strong>Prioritataj Vicoj</strong> - Certigi ke kritikaj taskoj unue prilaboriĝas</li>
                                </ul>

                                <h3>Problemsolva Sperto</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-red-50 dark:bg-red-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-red-600 mb-2">Solvitaj Oftaj Problemoj</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Memorelspezo en vico-laboristoj</li>
                                            <li>• Blokitaj taskoj kaj prilaboraj prokrastoj</li>
                                            <li>• Redis-konektaj problemoj</li>
                                            <li>• Superrigardanta procesa administrado</li>
                                        </ul>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-green-600 mb-2">Efikecaj Solvaĵoj</h4>
                                        <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            <li>• Vico-laborkarga distribuo</li>
                                            <li>• Task-amasiĝo kaj dividado</li>
                                            <li>• Optimuma Redis-agordo</li>
                                            <li>• Monitora kaj averta agordo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Flankopaneloj -->
                    <div class="space-y-6">
                        <!-- Lerteca Nivelo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#FF6B6B] mr-2"></i>
                                Lerteca Nivelo
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Entuta Horizon</span>
                                        <span class="text-sm font-bold text-[#FF6B6B]">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div
                                            class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF6B6B] to-[#e11d48]"
                                            data-width="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Agordo</span>
                                        <span class="text-sm font-bold text-green-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="85%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Monitorado & Mezuroj</span>
                                        <span class="text-sm font-bold text-blue-500">82%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="82%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Efikeca Optimumigo</span>
                                        <span class="text-sm font-bold text-purple-500">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="78%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Produkta Disvastigo</span>
                                        <span class="text-sm font-bold text-orange-500">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-orange-500" data-width="75%"
                                             style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#FF6B6B] mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>4+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Versio: <strong>Horizon 5.x</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Projektoj: <strong>15+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-server text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Medioj: <strong>Produktaj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-database text-[#FF6B6B] w-5 mr-3"></i>
                                    <span class="text-sm">Redis: <strong>Nepra</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentecoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#FF6B6B] mr-2"></i>
                                Rilataj Kompetentecoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/laravel"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-laravel text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">Laravel
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">95% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                                <a href="/competences/redis"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-red-600 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-database text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">Redis
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                                <a href="/competences/queues"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-tasks text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">Vico-Sistemoj
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">88% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                                <a href="/competences/devops"
                                   class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-server text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6B6B] transition-colors">DevOps
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% lerteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6B6B] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div
                            class="bg-gradient-to-r from-[#FF6B6B] to-[#e11d48] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu Vi Bezonas Vico-Monitoradon?</h3>
                            <p class="text-sm mb-4">Preta implementi fortikan vico-monitoradon kun Laravel Horizon</p>
                            <a href="/contact"
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-red-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

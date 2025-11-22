<x-frontend.layouts.app>
    <!-- Ĉefa Enhavo -->
    <main class="w-full pt-20" x-data="portfolioItemApp()" x-init="init()">
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
                                <a href="/portfolio" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Portfoliao
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio/full-stack" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Full-stack Projektoj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    Gotham Forum Community Platform
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Projekta Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Projekta Informo -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Gotham Forum Community</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-clock mr-1 text-xs"></i>
                                        En Planado
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Sekv-generacia komunuma fora platformo kun altnivela ludiĝo, realtempaj interagoj, kaj moderna arkitekturo por krei vivajn retajn komunumojn.
                            </p>

                            <!-- Projekta Statistikoj -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Plana Fazo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Full-stack</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Projekta Tipo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Komunumo</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Platforma Tipo</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ago Butonoj -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <button disabled class="inline-flex items-center px-6 py-3 bg-gray-300 dark:bg-gray-600 text-gray-500 dark:text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Baldaŭ</span>
                                </button>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-blue-500 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Projekta Koncepto</span>
                                </button>
                            </div>
                        </div>

                        <!-- Projekta Ikono -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-users text-4xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projekta Detaloj -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <!-- Ĉefa Enhavo -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- Projekta Priskribo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    Pri la Projekto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Gotham Forum Community</strong> estas ambicia sekv-generacia fora platformo desegnita por revoluciigi retan komunuman engaĝiĝon.
                                        La projekto celas kombini la plej bonajn trajtojn de tradicia fora programaro kun modernaj ret-teknologioj kaj altnivelaj ludiĝaj sistemoj.
                                    </p>
                                    <p>
                                        Ĉi tiu platformo enhavos kompleksan uzulan stimulan ekosistemon, realtempajn interagojn, kaj modulan arkitekturon kiu permesas
                                        komunumojn skali de malgrandaj interesgrupoj al grandskalaj platformoj kun milionoj da uzantoj.
                                    </p>
                                    <p>
                                        Speciala emfazo estas metita sur uzanta sperto, efikeca optimumigo, kaj kreado de vivanta ekosistemo kie komunumanoj
                                        estas nature motivitaj kontribui kaj interagi.
                                    </p>
                                </div>
                            </div>

                            <!-- Ĉefaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-blue-500 mr-3"></i>
                                    Planitaj Trajtoj
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Komunumaj Trajtoj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Altnivelaj diskut-fadenoj kun nestitaj komentoj</li>
                                            <li>Realtempa babilado kaj sciigoj</li>
                                            <li>Uzantaj grupoj kaj permesaj sistemoj</li>
                                            <li>Privataj mesaĝoj kaj uzantaj retoj</li>
                                            <li>Enhavaj moderigaj iloj</li>
                                            <li>Plurlingva komunuma subteno</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Ludiĝa Sistemo</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Plurtavola poenta kaj reputacia sistemo</li>
                                            <li>Atinigoj kaj insignoj</li>
                                            <li>Uzantaj niveloj kaj progresado</li>
                                            <li>Gvidtabloj kaj rangigoj</li>
                                            <li>Virtua ekonomio kun elspezigeblaj poentoj</li>
                                            <li>Sezonaj eventoj kaj defioj</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Disvolva Procezo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-blue-500 mr-3"></i>
                                    Disvolva Plano
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Esplorado & Arkitektura Dezajno</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Analizo de ekzistantaj fora platformoj, kreado de teknikaj specifoj, datumbaza arkitektura dezajno,
                                                kaj API-struktura planado kun modernaj disvolvaj praktikoj.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Kerna Platforma Disvolvado</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Backend API-disvolvado kun Laravel, uzanta aŭtentiga sistemo, baza fora funkcieco,
                                                kaj administraj kontroloj por komunuma mastrumado.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Ludiĝa Sistema Implementado</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Altnivela poenta kaj reputacia sistemo integrado, atinga motoro disvolvado,
                                                uzanta progresado sekvado, kaj virtua ekonomio implementado.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Realtempaj Trajtoj & Optimumigo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                WebSocket-integrado por realtempaj interagoj, efikeca optimumigo,
                                                movebla respondemo, kaj kompleta testado antaŭ lanĉo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankopanelo -->
                        <div class="space-y-6">
                            <!-- Planitaj Teknologioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-blue-500 mr-2"></i>
                                    Planitaj Teknologioj
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/laravel') }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:underline">
                                                Laravel 12
                                            </a>
                                            <a href="{{ url('competences/php') }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:underline">
                                                PHP 8.3
                                            </a>
                                            <a href="{{ url('competences/mysql') }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:underline">
                                                MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/livewire') }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:underline">
                                                Livewire
                                            </a>
                                            <a href="{{ url('competences/tailwind-css') }}" class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm hover:underline">
                                                Tailwind CSS
                                            </a>
                                            <a href="{{ url('competences/alpine-js') }}" class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm hover:underline">
                                                Alpine.js
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Realtempa & API-oj</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/websockets') }}" class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm hover:underline">
                                                WebSockets
                                            </a>
                                            <a href="{{ url('competences/rest-api') }}" class="tech-tag px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm hover:underline">
                                                REST API
                                            </a>
                                            <a href="{{ url('competences/redis') }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:underline">
                                                Redis
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Projekta Skopo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-project-diagram text-blue-500 mr-2"></i>
                                    Projekta Skopo
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Proksimuma Daŭro</span>
                                        <span class="font-semibold">6-9 monatoj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Disvolva Fazo</span>
                                        <span class="font-semibold">Planado</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Teamgrando</span>
                                        <span class="font-semibold">2-3 disvolvantoj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Celaj Uzantoj</span>
                                        <span class="font-semibold">Komunumaj Administrantoj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Novigaj Fokusoj -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Noviga Fokuso</h3>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-bolt text-yellow-500 mr-2 mt-0.5"></i>
                                        <span>Altnivelaj ludiĝaj sistemoj</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-rocket text-green-500 mr-2 mt-0.5"></i>
                                        <span>Realtempaj uzantaj interagoj</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chart-line text-purple-500 mr-2 mt-0.5"></i>
                                        <span>Skalebla mikroserva arkitekturo</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-mobile-alt text-blue-500 mr-2 mt-0.5"></i>
                                        <span>Progressiva Reta Aplikaĵo kapabloj</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alvoko al Ago -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">Ĉu interesita pri komunumaj platformoj?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Ni diskutu kiel modernaj fora teknologioj povas transformi vian komunuman engaĝiĝon.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Diskuti Projekton</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-blue-500 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Ĉiuj Projektoj</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projekta Koncepta Modala Fenestro -->
        <div x-show="showCaseStudy"
             @keydown.escape.window="showCaseStudy = false"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Fona Supermeto -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showCaseStudy = false"></div>

                <!-- Modala Panelo -->
                <div class="relative inline-block w-full max-w-6xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Ferma Butono -->
                    <button @click="showCaseStudy = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Koncepta Enhavo -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Kapo -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Projekta Koncepto: Gotham Forum Community</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Vizio por sekv-generacia komunuma engaĝiĝa platformo</p>
                        </div>

                        <!-- Resuma Priskribo -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-blue-500 mr-3"></i>
                                Vizio-Aserto
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                Krei la plej engaĝigan, skaleblan, kaj trajto-riĉan komunuman platformon kiu kombinas modernajn ret-teknologiojn
                                kun pruvitaj komunumaj engaĝiĝaj strategioj, starigante novajn normojn por reta fora programaro.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Kernaj Celoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Revoluciigi uzantan engaĝiĝon per altnivela ludiĝo</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Provizi seninterrompajn realtempajn interagajn kapablojn</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Krei skaleblan arkitekturon por komunumoj de ĉiuj grandecoj</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Cela Efiko</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Plialtigi uzantan partoprenon je 300%</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Redukti platforman responstan tempon sub 100ms</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-users text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Subteni komunumojn de 100 ĝis 1M+ uzantoj</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Teknika Novigo -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-blue-500 mr-3"></i>
                                Teknika Novigo
                            </h3>
                            <div class="space-y-6">
                                <!-- Novigo 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Altnivela Ludiĝa Motoro</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Trajtoj</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Plurmona reputacia sistemo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Dinamika atinga sistemo</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Sezonaj eventoj kaj defioj</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Novigo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Memekvilibra ekonomio kiu adaptiĝas al komunuma konduto kaj preventas inflacion,
                                                kreante daŭrigeblajn engaĝiĝajn ciklojn.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Novigo 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-purple-500">
                                    <h4 class="font-semibold text-lg mb-3 text-purple-600 dark:text-purple-400">Realtempa Interaga Sistemo</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Kapabloj</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Vivaj fadenaj ĝisdatigoj</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Tujaj sciigoj</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Ĉeestaj indikiloj</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Teknologio</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                WebSocket-implementado kun rezerva HTTP long-polling, certigante seninterrompan
                                                realtempan sperton trans ĉiuj aparatoj kaj retkondiĉoj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ago Butonoj -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium transition-colors">
                                Fermi Koncepton
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-blue-500 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg font-medium transition-colors">
                                Diskuti Kunlaboron
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function portfolioItemApp() {
                return {
                    showCaseStudy: false,
                    showCaseStudy: false,
                    init() {
                        // Запуск анимаций при скролле
                        this.animateOnScroll();
                    },
                    animateOnScroll() {
                        const observer = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    entry.target.classList.add('visible');
                                }
                            });
                        });

                        document.querySelectorAll('.fade-in').forEach((el) => {
                            observer.observe(el);
                        });
                }
            }
        </script>
    </main>
</x-frontend.layouts.app>

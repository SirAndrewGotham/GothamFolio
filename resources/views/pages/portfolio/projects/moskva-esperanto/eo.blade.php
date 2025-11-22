<x-frontend.layouts.app>
    <!-- Ĉefa Enhavo -->
    <main class="w-full pt-20" x-data="portfolioItemApp()" x-init="init()">
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
                                <a href="/portfolio" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Portfolio
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
                                    Moskva Esperanto-Komunuma Retejo
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Projekta Hero-Sekcio -->
        <section class="py-12 bg-gradient-to-br from-green-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Projekta Informo -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Moskva Esperanto-Komunuma Retejo</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-clock mr-1 text-xs"></i>
                                        En Disvolviĝo
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Plurlingva komunuma platformo por la Moskva Esperanto-komunumo kun eventoj, novaĵoj, blogoj kaj membra reto en Esperanto, la rusa kaj la angla.
                            </p>

                            <!-- Projekta Statistikoj -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Disvolviĝa Jaro</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-language"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">3 Lingvoj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Plurlingva</div>
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
                            </div>

                            <!-- Agaj Butonoj -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <button disabled class="inline-flex items-center px-6 py-3 bg-gray-300 dark:bg-gray-600 text-gray-500 dark:text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Baldaŭ Lanĉota</span>
                                </button>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-green-500 text-green-500 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Projekta Plano</span>
                                </button>
                            </div>
                        </div>

                        <!-- Projekta Ikono -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-green-500 to-blue-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-globe-europe text-4xl"></i>
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
                                    <i class="fas fa-info-circle text-green-500 mr-3"></i>
                                    Pri la Projekto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Moskva Esperanto-Komunuma Retejo</strong> estas kompleta komunuma platformo desegnita specife por la Moskva Esperanto-parolanta komunumo.
                                        La projekto celas krei centran nodon por Esperanto-entuziasmuloj por konekti, dividi spertojn kaj organizi eventojn.
                                    </p>
                                    <p>
                                        Konstruita per modernaj retaj teknologioj, la platformo subtenas plurajn lingvojn (Esperanto, la rusa, la angla) kaj provizas
                                        kompletan aron de komunumadministraj iloj inkluzive de eventorganizado, novaĵpublikigo, membroretado kaj enhavdividado.
                                    </p>
                                    <p>
                                        La platformo emfazas uzul-amikan dezajnon, alireblecon kaj komunuman engaĝiĝon dum konservado de la kulturaj
                                        kaj lingvaj valoroj de la Esperanto-movado.
                                    </p>
                                </div>
                            </div>

                            <!-- Ĉefaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-green-500 mr-3"></i>
                                    Platformaj Trajtoj
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-green-600 dark:text-green-400">Komunuma Kerno</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Plurlingva enhavo (Esperanto, rusa, angla)</li>
                                            <li>Eventkalendaro kun registrada sistemo</li>
                                            <li>Novaĵoj kaj anonco-administrado</li>
                                            <li>Membraj blogoj kaj artikoloj</li>
                                            <li>Fotogalerioj de eventoj</li>
                                            <li>Interaktivaj kontakto-formularoj</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-green-600 dark:text-green-400">Uzul-Administrado</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Rol-bazitaj permesoj (Vizitanto, Membro, Redaktisto, Admin)</li>
                                            <li>Membro-direktorio kaj profiloj</li>
                                            <li>Enhava moderiga sistemo</li>
                                            <li>Eventa registrado-spurado</li>
                                            <li>Plurnivela membreca sistemo</li>
                                            <li>Lernoresurso-sekcio</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Disvolviĝa Procezo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-green-500 mr-3"></i>
                                    Disvolviĝaj Fazoj
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Fundo & Strukturo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Laravel-agordo, datumbaza arkitekturo, baza paĝstrukturo, plurlingva fundo,
                                                kaj kernavigada sistemo-implementado.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Kerna Funkcieco</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Novaĵsistemo, eventadministrado, kontakto-formularoj, uzul-aŭtentigo,
                                                kaj bazaj enhavadministraj trajtoj.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Komunumaj Trajtoj</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Blogosistemo kun komentoj, fotogalerioj, membraj profiloj,
                                                membreca administrado, kaj komunuminteragaj iloj.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Plibonigoj & Polurado</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Lingvoŝaltila optimizado, serĉfunkcieco, efikeco-ĝustigo,
                                                kaj aldona interaktivaj trajtoj por pli bona uzulsperto.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankobreto -->
                        <div class="space-y-6">
                            <!-- Uzataj Teknologioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-green-500 mr-2"></i>
                                    Teknologia Stako
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Backend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/laravel') }}" class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm hover:underline">
                                                Laravel 12
                                            </a>
                                            <a href="{{ url('competences/php') }}" class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm hover:underline">
                                                PHP 8.3
                                            </a>
                                            <a href="{{ url('competences/mysql') }}" class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm hover:underline">
                                                SQLite/MySQL
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Frontend</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/livewire') }}" class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm hover:underline">
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
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Trajtoj</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ url('competences/multilingual') }}" class="tech-tag px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm hover:underline">
                                                Plurlingva
                                            </a>
                                            <a href="{{ url('competences/laravel-folio') }}" class="tech-tag px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm hover:underline">
                                                Laravel Folio Pages
                                            </a>
                                            <a href="{{ url('competences/livewire-volt') }}" class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm hover:underline">
                                                Volt Components
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Projekta Skopo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-project-diagram text-green-500 mr-2"></i>
                                    Projekta Skopo
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Disvolviĝa Tempo</span>
                                        <span class="font-semibold">3-4 monatoj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Lingvoj</span>
                                        <span class="font-semibold">Esperanto, RU, EN</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Uzul-Roloj</span>
                                        <span class="font-semibold">4 Niveloj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Cela Aŭdantaro</span>
                                        <span class="font-semibold">Esperanto-Komunumo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Specialaj Trajtoj -->
                            <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Esperanto-Komunuma Fokuso</h3>
                                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <i class="fas fa-language text-green-500 mr-2 mt-0.5"></i>
                                        <span>Trilingva interfaco-subteno</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-users text-blue-500 mr-2 mt-0.5"></i>
                                        <span>Komunuma event-administrado</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-graduation-cap text-purple-500 mr-2 mt-0.5"></i>
                                        <span>Lernoresurso-sekcio</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-camera text-yellow-500 mr-2 mt-0.5"></i>
                                        <span>Eventaj fotogalerioj</span>
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
                    <h2 class="text-3xl font-bold mb-6">Ĉu interesata pri komunumaj platformoj?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Ni diskutu kiel propra komunuma retejo povas utiligi vian organizon.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Diskuti Projekton</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-green-500 text-green-500 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Ĉiuj Projektoj</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projekta Plana Modala Fenestro -->
        <div x-show="showCaseStudy" x-transition:enter="transition ease-out duration-300"
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

                    <!-- Projekta Plana Enhavo -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Kapo -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Projekta Plano: Moskva Esperanto-Komunuma Retejo</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Kompleta komunuma platformo por Moskvaj Esperanto-parolantoj</p>
                        </div>

                        <!-- Resuma Priskribo -->
                        <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-green-500 mr-3"></i>
                                Projekta Vizio
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                Krei vibrantan digitalan hejmon por la Moskva Esperanto-komunumo kiu faciligas konekton,
                                scio-dividadon kaj event-organizadon dum konservado de la internacia spirito de Esperanto.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Kernaj Celoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Centraligi komunuman informon kaj eventojn</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Faciligi membrokonektojn kaj enhavdividadon</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Provizi plurlingvan aliron al komunumaj rimedoj</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ĉefaj Trajtoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-calendar text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Eventadministrado kun registrado</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-newspaper text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Plurlingva novaĵa kaj bloga sistemo</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-camera text-purple-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Fotogalerioj de komunumaj eventoj</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Teknika Implementado -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-green-500 mr-3"></i>
                                Teknika Implementado
                            </h3>
                            <div class="space-y-6">
                                <!-- Implementado 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-green-500">
                                    <h4 class="font-semibold text-lg mb-3 text-green-600 dark:text-green-400">Plurlingva Arkitekturo</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Lingva Subteno</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Esperanto (ĉefa)</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Rusa (loka)</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Angla (internacia)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-blue-600 dark:text-blue-400">Implementado</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Lingvoŝaltilo kun flagoj kaj lingvaj nomoj, konsekvenca navigado tra ĉiuj lingvoj,
                                                kaj kulture taŭga enhavo por ĉiu aŭdantaro.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Implementado 2 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-semibold text-lg mb-3 text-blue-600 dark:text-blue-400">Uzul-Rola Sistemo</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Permesaj Niveloj</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-user text-gray-500 mr-2 mt-0.5"></i>
                                                    <span>Vizitantoj: Publika enhavo-aliro</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-user-friends text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Membroj: Enhav-kreado</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-edit text-blue-500 mr-2 mt-0.5"></i>
                                                    <span>Redaktistoj: Enhav-moderado</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-cog text-purple-500 mr-2 mt-0.5"></i>
                                                    <span>Adminoj: Plena sistemo-aliro</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-blue-600 dark:text-blue-400">Trajtoj</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Detala permes-kontrolo, membro-direktorio kun privatecaj opcioj,
                                                eventa registrado-spurado, kaj enhav-moderadaj iloj.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sukcesaj Metrikoj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Sukcesaj Metrikoj
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-green-500 mb-2">80%+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Membra Engaĝiĝo</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">3</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Subtenataj Lingvoj</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">100%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Movebla Respondemo</div>
                                </div>
                            </div>
                        </div>

                        <!-- Agaj Butonoj -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg font-medium transition-colors">
                                Fermi Planon
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-green-500 text-green-500 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg font-medium transition-colors">
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
                    init() {
                        // Закрыть модальное окно по клавише Escape
                        document.addEventListener('keydown', (e) => {
                            if (e.key === 'Escape' && this.showCaseStudy) {
                                this.showCaseStudy = false;
                            }
                        });

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
            }
        </script>
    </main>
</x-frontend.layouts.app>

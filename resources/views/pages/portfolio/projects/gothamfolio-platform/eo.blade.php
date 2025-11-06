<x-frontend.layouts.app>
    <!-- Ĉefa Enhavo -->
    <main class="w-full pt-20" x-data="portfolioItemApp()" x-init="init()">
        <!-- Panbretaj Vojoj -->
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
                                    Portfolioro
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/portfolio/laravel" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Laravel-Projektoj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                    GothamFolio Platformo
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Projekta Hero-Sekcio -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-start gap-8 fade-in">
                        <!-- Projekta Informo -->
                        <div class="flex-grow">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">GothamFolio Platformo</h1>
                                <div class="flex items-center space-x-4">
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                                        <i class="fas fa-circle mr-1 text-xs"></i>
                                        Aktiva Projekto
                                    </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Plenfunkcia platformo por administri personan portfolion kun integrita bloga sistemo, galerioj, kaj efikec-analitiko.
                            </p>

                            <!-- Projekta Statistikoj -->
                            <div class="flex flex-wrap gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">2024</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Evoluiga Jaro</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">3 monatoj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Evoluiga Tempo</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">Tuta-stako</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Projekta Tipo</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Agaj Butonoj -->
                            <div class="flex flex-wrap gap-4 mt-8">
                                <a href="https://andrewgotham.ru" target="_blank" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span>Vidi Demonstron</span>
                                </a>
                                <a href="https://github.com/SirAndrewGotham/gothamfolio" target="_blank" class="inline-flex items-center px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                                    <i class="fab fa-github mr-2"></i>
                                    <span>Fonta Kodo</span>
                                </a>
                                <button @click="showCaseStudy = true" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span>Projekta Kazo</span>
                                </button>
                            </div>
                        </div>

                        <!-- Projekta Ikono -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-laptop-code text-4xl"></i>
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
                                    <i class="fas fa-info-circle text-primary-500 mr-3"></i>
                                    Pri la Projekto
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>GothamFolio Platformo</strong> estas moderna retaplikacio evoluigita por montri profesiajn kapablojn kaj projektojn.
                                        La platformo kombinas la funkciojn de persona retejo, blogo, kaj enhav-administra sistemo.
                                    </p>
                                    <p>
                                        La projekto estis kreita de nulo uzante Laravel 12 kaj modernajn antaŭpartajn teknologiojn.
                                        La ĉefa tasko estis krei efikan, skaleblan, kaj uzant-amikan platformon kiu povus
                                        adaptiĝi al malsamaj tipoj de enhavo.
                                    </p>
                                    <p>
                                        Speciala atento estis donita al uzanto-sperto, efikeco, kaj sekureco.
                                        La platformo subtenas plurlingvecon, respondigan dezajnon, kaj estas optimigita por SEO.
                                    </p>
                                </div>
                            </div>

                            <!-- Ĉefaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-star text-primary-500 mr-3"></i>
                                    Ĉefaj Trajtoj
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Kernaj Trajtoj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Dinamika projekta portfolioro</li>
                                            <li>Integrita bloga sistemo</li>
                                            <li>Fotogalerioj kaj verkoj</li>
                                            <li>Komenta kaj retrokupla sistemo</li>
                                            <li>Plurlingva subteno</li>
                                            <li>SEO-optimizado</li>
                                        </ul>
                                    </div>
                                    <div class="feature-list space-y-3">
                                        <h3 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Teknikaj Trajtoj</h3>
                                        <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                            <li>Administra panelo por enhav-administrado</li>
                                            <li>Kaŝmemora sistemo por efikeco</li>
                                            <li>API por ekstera servo-integriĝo</li>
                                            <li>Vizit-analitiko kaj kondut-spurado</li>
                                            <li>Datum-rezerva sistemo</li>
                                            <li>Aŭtomataj ĝisdatigoj</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Evoluiga Procezo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-code-branch text-primary-500 mr-3"></i>
                                    Evoluiga Procezo
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Planado kaj Dezajno</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Postul-analizo, teknika specifo-kreado, datumbaza arkitekturo-dezajno,
                                                kaj uzanto-interfaca prototipado.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Malantaŭparta Evoluigo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                API-kreado, negoca logiko-implementado, datumbaza agordo, aŭtentikigo
                                                kaj aŭtorizado-sistemo-evoluigo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Antaŭparta Evoluigo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Respondiga interfaco-kreado, interaktivaj elementoj-implementado kun Livewire,
                                                malantaŭparta API-integriĝo, efikeco-optimizado.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                            <span class="text-sm font-bold">4</span>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">Testado kaj Lanĉo</h3>
                                            <p class="text-gray-600 dark:text-gray-400">
                                                Kompleta funkcieco-testado, cimoj-riparado, produktada servilo-disdono,
                                                efikeco-monitorado.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flankmenuo -->
                        <div class="space-y-6">
                            <!-- Uzitaj Teknologioj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-tools text-primary-500 mr-2"></i>
                                    Teknologioj
                                </h3>
                                <div class="space-y-3">
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Malantaŭparto</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-lg text-sm">
                                                Laravel 12
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm">
                                                PHP 8.3
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg text-sm">
                                                MySQL
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Antaŭparto</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm">
                                                Livewire
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg text-sm">
                                                Tailwind CSS
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm">
                                                Alpine.js
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-2 text-sm text-gray-500 dark:text-gray-400">Iloj</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="tech-tag px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm">
                                                Git
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm">
                                                Nginx
                                            </span>
                                            <span class="tech-tag px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm">
                                                Composer
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Projekta Statistikoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-primary-500 mr-2"></i>
                                    Projekta Statistikoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Evoluiga Tempo</span>
                                        <span class="font-semibold">3 monatoj</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Komisioj</span>
                                        <span class="font-semibold">247</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Linioj de Kodo</span>
                                        <span class="font-semibold">~15,000</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Testa Kovrado</span>
                                        <span class="font-semibold">85%</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Efikeco</span>
                                        <span class="font-semibold">95/100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Projektoj -->
                            <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 fade-in">
                                <h3 class="font-semibold mb-3">Aliaj Projektoj</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                    Esploru aliajn verkojn el mia portfolioro
                                </p>
                                <a href="/portfolio" class="inline-flex items-center justify-center w-full px-4 py-2 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors text-sm">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    <span>Reen al Projektoj</span>
                                </a>
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
                    <h2 class="text-3xl font-bold mb-6">Ĉu vi interesiĝas pri simila projekto?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Preta diskuti viajn ideojn kaj krei solvon kiu superas atendojn.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Diskuti Projekton</span>
                        </a>
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Ĉiuj Projektoj</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kazo-Studo Modala -->
        <div x-show="showCaseStudy" x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto" x-cloak style="display: none;">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!-- Fona supermeto -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showCaseStudy = false"></div>

                <!-- Modala panelo -->
                <div class="relative inline-block w-full max-w-6xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white dark:bg-gray-800 rounded-2xl shadow-xl sm:my-8 sm:align-middle sm:p-6">
                    <!-- Ferma butono -->
                    <button @click="showCaseStudy = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>

                    <!-- Kazo-Studo Enhavo -->
                    <div class="max-h-[80vh] overflow-y-auto">
                        <!-- Kapo -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-4">Projekta Kazo: GothamFolio Platformo</h2>
                            <p class="text-xl text-gray-600 dark:text-gray-400">Kompleta dispartigo de la evoluiga procezo de ideo al implementado</p>
                        </div>

                        <!-- Resuma Priskribo -->
                        <div class="bg-gradient-to-r from-primary-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-line text-primary-500 mr-3"></i>
                                Projekta Resumo
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold mb-2">Projektaj Celoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Krei modernan platformon por montri profesiajn kapablojn</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Integri blogon, portfolion kaj enhav-administran sistemon</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Certigi altan efikecon kaj SEO-optimizado</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-2">Ĉefaj Rezultoj</h4>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <i class="fas fa-rocket text-blue-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>95/100 poentaro en Google PageSpeed Insights</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-bolt text-yellow-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>Paĝo-ŝarĝa tempo malpli ol 1.2 sekundoj</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-search text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                                            <span>40% plibonigo en SEO-metrikoj</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Teknikaj Defioj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-puzzle-piece text-primary-500 mr-3"></i>
                                Teknikaj Defioj & Solvoj
                            </h3>
                            <div class="space-y-6">
                                <!-- Defio 1 -->
                                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-l-4 border-primary-500">
                                    <h4 class="font-semibold text-lg mb-3 text-primary-600 dark:text-primary-400">Defio: Aŭdvida Enhavo-Efikeco Optimizado</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-medium mb-2 text-gray-600 dark:text-gray-400">Problemo</h5>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Projektaj galerioj enhavis altkvalitajn bildojn, kondukante al malrapida paĝo-ŝarĝado kaj alta bendolarĝo-konsumo.
                                            </p>
                                        </div>
                                        <div>
                                            <h5 class="font-medium mb-2 text-green-600 dark:text-green-400">Solvo</h5>
                                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Malrapida ŝarĝado-implementado por bildoj</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Aŭtomata WebP-formato-generado</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <i class="fas fa-check text-green-500 mr-2 mt-0.5"></i>
                                                    <span>Bildo-antavido-kaŝmemorado</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 bg-gray-50 dark:bg-gray-600 rounded-lg">
                                        <h5 class="font-medium mb-2 text-sm">Rezulto:</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            68% redukto en galerio-ŝarĝa tempo, 45% redukto en datum-transiga volumo
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rezultoj -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                Rezultoj & Efiko
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-green-500 mb-2">95%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">PageSpeed Poentaro</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-blue-500 mb-2">1.2s</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Ŝarĝa Tempo</div>
                                </div>
                                <div class="text-center bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg">
                                    <div class="text-3xl font-bold text-purple-500 mb-2">40%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Trafiko-Kresko</div>
                                </div>
                            </div>
                        </div>

                        <!-- Agaj Butonoj -->
                        <div class="mt-8 flex justify-center space-x-4">
                            <button @click="showCaseStudy = false" class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                                Fermi Kazon
                            </button>
                            <a href="/contact" class="px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
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
                        // Fermi modalan per eskapa klavo
                        document.addEventListener('keydown', (e) => {
                            if (e.key === 'Escape' && this.showCaseStudy) {
                                this.showCaseStudy = false;
                            }
                        });
                    }
                }
            }
        </script>
    </main>
</x-frontend.layouts.app>

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
                                <a href="/competences/backend" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Backend Disvolviĝo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Laravel Cashier
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Sekcio -->
        <section class="py-12 bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Ikono kaj Baza Informo -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-r from-purple-500 to-violet-500 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-credit-card text-4xl"></i>
                            </div>
                        </div>

                        <!-- Ĉefa Informo -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0">Laravel Cashier</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-money-bill-wave mr-1"></i>
                                            Paga Procezo
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Kompleta abona fakturado kaj paga administrado kun Stripe kaj Paddle integrigo
                            </p>

                            <!-- Statistikoj -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">78%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Nivelo de Kompetenteco</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ jaroj</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Sperto</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">2</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Pago-Provizantoj</div>
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
                            <!-- Pri Laravel Cashier -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-purple-500 mr-3"></i>
                                    Pri Laravel Cashier
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Laravel Cashier</strong> provizas esprimriĉan, fluan interfacon al Stripe kaj Paddle
                                        abonaj fakturservoj. Ĝi traktas preskaŭ ĉiun ŝablonan abonan fakturan kodon
                                        kiun vi timas skribi, farante abonan administradon simpla kaj rekta.
                                    </p>

                                    <h3>Ŝlosilaj Avantaĝoj</h3>
                                    <ul>
                                        <li><strong>Simpligita Abona Administrado</strong> - Facila agordo kaj administrado de ripetantaj pagadoj</li>
                                        <li><strong>Multoblaj Pago-Provizantoj</strong> - Subteno por Stripe kaj Paddle</li>
                                        <li><strong>Enkonstruita Fakturo-Traktado</strong> - Aŭtomata fakturo-generado kaj administrado</li>
                                        <li><strong>Webhook Integrigo</strong> - Senŝua traktado de pagaj eventoj</li>
                                        <li><strong>Kupono & Rabata Subteno</strong> - Kompleta promocia sistemo</li>
                                        <li><strong>Prova Periodo Administrado</strong> - Flekseblaj provaj konfiguroj</li>
                                    </ul>

                                    <h3>Kernaj Trajtoj</h3>
                                    <p>
                                        Laravel Cashier provizas kompletan aron de trajtoj por abon-bazitaj aplikaĵoj:
                                    </p>
                                    <ul>
                                        <li>Abono-kreado kaj administrado</li>
                                        <li>Multoblaj abonaj planoj kaj preztavoloj</li>
                                        <li>Aŭtomata fakturo-generado kaj PDF-elŝuto</li>
                                        <li>Pago-metoda administrado kaj ĝisdatigoj</li>
                                        <li>Abona ŝanĝo kaj nuligo</li>
                                        <li>Webhook-traktado por pagaj eventoj</li>
                                        <li>Imposto kaj VAT-kalkula subteno</li>
                                        <li>Multvaluta faktura subteno</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mia Cashier Vojaĝo -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-purple-500 mr-3"></i>
                                    Mia Vojaĝo kun Laravel Cashier
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Mi komencis labori kun Laravel Cashier en 2020 kiam implementante abon-bazitajn
                                        enspezajn modelojn por SaaS-aplikaĵoj. Dum la lastaj 3+ jaroj, mi integris Cashier
                                        en diversajn projektojn, de malgrandaj startup-oj ĝis entrepren-nivelaj abonaj platformoj.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-purple-50 to-violet-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fab fa-stripe text-purple-500 mr-2"></i>
                                                Stripe Integrigo
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Vasta sperto kun Stripe integrigo inkluzive
                                                Payment Intents, Setup Intents kaj altnivelaj Stripe-trajtoj.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-ship text-blue-500 mr-2"></i>
                                                Paddle Implemento
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Praktika sperto kun Paddle integrigo por
                                                aplikaĵoj postulantaj VAT-traktadon kaj globalan konformecon.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mia Sperto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-purple-500 mr-3"></i>
                                    Mia Sperto kun Laravel Cashier
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kun pli ol 3 jaroj da praktika sperto implementante Laravel Cashier,
                                        mi disvolvis kompletan kompetentecon en abonaj faktursistemoj
                                        kaj pago-procezaj laborfluoj.
                                    </p>

                                    <h3>Specialigitaj Kapabloj</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Plurtavolaj abonaj planoj</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Propra fakturcikla agordo</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Webhook-eventa traktado kaj sekureco</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Pago-metoda administrado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Fakturo-agordo kaj markado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Imposto kaj VAT-kalkulado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Abona analitiko kaj raportado</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Persekuta administrado kaj malsukcesa pago-traktado</span>
                                        </div>
                                    </div>

                                    <h3>Pago-Provizanta Kompetenteco</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <div class="flex items-center mb-3">
                                                <div class="w-10 h-10 rounded-lg bg-indigo-500 flex items-center justify-center text-white mr-3">
                                                    <i class="fab fa-stripe text-lg"></i>
                                                </div>
                                                <h4 class="text-lg font-bold">Stripe</h4>
                                            </div>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• Payment Intents API implemento</li>
                                                <li>• Setup Intents por SCA-konformeco</li>
                                                <li>• 3D Secure aŭtentikaj fluoj</li>
                                                <li>• Stripe Connect por merkatejoj</li>
                                                <li>• Radar fraŭdo-preveno</li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                            <div class="flex items-center mb-3">
                                                <div class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                                    <i class="fas fa-ship text-lg"></i>
                                                </div>
                                                <h4 class="text-lg font-bold">Paddle</h4>
                                            </div>
                                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>• VAT kaj imposta traktada aŭtomatigo</li>
                                                <li>• Globala konformeca administrado</li>
                                                <li>• Abona analitiko kaj mezuroj</li>
                                                <li>• Kasa agordo</li>
                                                <li>• Licenco-ŝlosila generado</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h3>Implementaj Projektoj</h3>
                                    <ul>
                                        <li><strong>SaaS Platformo</strong> - Plurtavola abono kun jara/monata fakturdo</li>
                                        <li><strong>Merkateja Aplikaĵo</strong> - Stripe Connect integrigo kun dividitaj pagadoj</li>
                                        <li><strong>Enhava Platformo</strong> - Paddle integrigo kun globala imposta konformeco</li>
                                        <li><strong>Entreprena Softvaro</strong> - Propraj fakturcikloj kaj fakturfluoj</li>
                                        <li><strong>Mobila Aplikaĵo Backend</strong> - Abona administrada API kun webhook-oj</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Altnivelaj Trajtoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-purple-500 mr-3"></i>
                                    Altnivelaj Implementaj Trajtoj
                                </h2>
                                <div class="content-section">
                                    <h3>Kompleksaj Fakturscenaroj</h3>
                                    <p>
                                        Preter baza abona administrado, mi implementis altnivelajn fakturscenarojn:
                                    </p>
                                    <ul>
                                        <li><strong>Uzo-bazita Fakturdo</strong> - Mezurita fakturdo kun Stripe Billing</li>
                                        <li><strong>Multvaluta Subteno</strong> - Dinamika valuto-konvertado kaj prezigado</li>
                                        <li><strong>Propraj Fakturfluoj</strong> - Markitaj fakturoj kun propra logiko</li>
                                        <li><strong>Abona Analitiko</strong> - MRR, ĉesiga indico, kaj vivdaŭra valoro-spurado</li>
                                        <li><strong>Persekuta Administrado</strong> - Aŭtomata resanigo de malsukcesaj pagadoj</li>
                                        <li><strong>Prova Periodo Etendoj</strong> - Fleksebla prova perioda administrado</li>
                                    </ul>

                                    <h3>Sekureco & Konformeco</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">PCI-Konformeco</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implemento de sekuraj pagaj fluoj sekvante PCI DSS-postulojn
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">SCA-Konformeco</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Forta Klienta Aŭtentiko implemento por eŭropaj klientoj
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Webhook-Sekureco</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Sekura webhook-traktado kun subskriba kontrolo kaj sendependeco
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-purple-500 mb-2">Datumprotekto</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                GDPR-konforma pago-datumtraktado kaj klienta informa administrado
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- GitHub Projektoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-purple-500 mr-3"></i>
                                    Projektoj sur GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Kelkaj el miaj Laravel Cashier implementoj kaj abonaj administraj projektoj
                                        troveblas sur GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham sur GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        Mi konstante esploras novajn Cashier-trajtojn kaj dividas implementajn ŝablonojn
                                        por kompleksaj abonaj fakturscenaroj.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Flankopanelo -->
                        <div class="space-y-6">
                            <!-- Kompetenteco Karto -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-purple-500 mr-2"></i>
                                    Nivelo de Kompetenteco
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Entuta Kompetenteco</span>
                                            <span class="text-sm font-bold text-purple-500">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-purple-500 to-violet-500"
                                                 data-width="78%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Stripe Integrigo</span>
                                            <span class="text-sm font-bold text-indigo-500">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-indigo-500" data-width="85%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Paddle Integrigo</span>
                                            <span class="text-sm font-bold text-blue-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Abona Logiko</span>
                                            <span class="text-sm font-bold text-green-500">80%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="80%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Paga Sekureco</span>
                                            <span class="text-sm font-bold text-red-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="75%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rapidaj Faktoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-purple-500 mr-2"></i>
                                    Rapidaj Faktoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Sperto: <strong>3+ jaroj</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-credit-card text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Provizantoj: <strong>Stripe & Paddle</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Projektoj: <strong>12+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Konformeco: <strong>PCI DSS & SCA</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-globe text-purple-500 w-5 mr-3"></i>
                                        <span class="text-sm">Valutoj: <strong>Multvaluta</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Implementaj Tipoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-cubes text-purple-500 mr-2"></i>
                                    Implementaj Tipoj
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">SaaS Abonaj Platformoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Merkatejaj Pagaj Sistemoj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Enhavaj Pagobariloj</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Uzo-bazita Fakturdo</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Entreprenaj Faktursistemoj</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rilataj Kompetentoj -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-purple-500 mr-2"></i>
                                    Rilataj Kompetentoj
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/laravel" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-laravel text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Laravel</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">95% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-code text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">API Disvolviĝo</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/security" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-shield-alt text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">Sekureco</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">82% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                    <a href="/competences/saas" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-indigo-500 flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-cloud text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-purple-500 transition-colors">SaaS Disvolviĝo</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Alvoko al Ago -->
                            <div class="bg-gradient-to-r from-purple-500 to-violet-500 rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Ĉu Vi Bezonas Abonan Fakturon?</h3>
                                <p class="text-sm mb-4">Ni konstruu vian pagan sistemon kun Laravel Cashier</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-purple-600 font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

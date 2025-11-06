<x-frontend.layouts.app>
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
                                <a href="/documents" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Dokumentoj
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Privateca Politiko
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Dokumenta Kapo -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <div class="w-16 h-16 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mx-auto mb-6">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Privateca Politiko</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-4">
                        Lasta ĝisdatigo: 5 novembro 2025
                    </p>
                    <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <div class="flex items-center">
                            <i class="fas fa-clock text-primary-500 mr-2"></i>
                            <span>Tempo por legi: 8 minutoj</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-file-alt text-primary-500 mr-2"></i>
                            <span>Jura dokumento</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dokumenta Enhavo -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 md:p-12 fade-in">
                        <!-- Rapida Navigado -->
                        <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                            <h3 class="font-semibold mb-4 text-gray-800 dark:text-gray-200">Rapida navigado:</h3>
                            <div class="flex flex-wrap gap-2">
                                <a href="#data-collection" class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-full text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                    Kolektado de datumoj
                                </a>
                                <a href="#data-usage" class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-full text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                    Uzado
                                </a>
                                <a href="#cookies" class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-full text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                    Kuketoj
                                </a>
                                <a href="#rights" class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-full text-sm hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">
                                    Viaj rajtoj
                                </a>
                            </div>
                        </div>

                        <!-- Dokumenta Enhavo -->
                        <div class="document-content prose dark:prose-invert max-w-none">
                            <p class="text-lg mb-6">
                                Ĉi tiu Privateca Politiko priskribas kiel Andrew Gotham («ni», «nin», «nia») kolektas, uzas kaj protektas vian personan informon kiam vi uzas nian retejon kaj rilatajn servojn.
                            </p>

                            <h2 id="data-collection">1. Kolektado de Informo</h2>

                            <h3>1.1. Persona informo</h3>
                            <p>Ni povas kolekti la jenan personan informon:</p>
                            <ul>
                                <li><strong>Kontaktaj datumoj:</strong> nomo, retadreso, telefono numero</li>
                                <li><strong>Profesia informo:</strong> posteno, kompanio, labora sperto</li>
                                <li><strong>Teknikaj datumoj:</strong> IP-adreso, retumila tipo, aparataj datumoj</li>
                                <li><strong>Uzado-datumoj:</strong> informo pri kiel vi uzas nian retejon</li>
                            </ul>

                            <h3>1.2. Aŭtomata kolektado de datumoj</h3>
                            <p>Kiam vi vizitas nian retejon, ni aŭtomate kolektas:</p>
                            <ul>
                                <li>Datumojn pri via aparato kaj interreta konekto</li>
                                <li>Legadan historion kaj serĉajn mendojn</li>
                                <li>Informon pri via interago kun la retejo</li>
                            </ul>

                            <h2 id="data-usage">2. Uzado de Informo</h2>
                            <p>Ni uzas la kolektitan informon por:</p>
                            <ul>
                                <li>Provizi kaj plibonigi niajn servojn</li>
                                <li>Procesi petojn kaj mesaĝojn</li>
                                <li>Personigi la uzantan sperton</li>
                                <li>Analizi uzadon de la retejo kaj optimumigi ĝian funkcion</li>
                                <li>Observi jurajn devontigojn</li>
                            </ul>

                            <h2 id="cookies">3. Dosieroj Kuketoj kaj similaj teknologioj</h2>
                            <p>Ni uzas kuketojn por:</p>
                            <ul>
                                <li>Memori viajn preferojn kaj agordojn</li>
                                <li>Analizi trafikon kaj uzadon de la retejo</li>
                                <li>Provizi personigitan enhavon</li>
                                <li>Plibonigi la funkciecon de la retejo</li>
                            </ul>
                            <p>Vi povas administri agordojn pri kuketoj per via retumilo. Tamen, malŝaltado de kuketoj povas limigi la funkciecon de la retejo.</p>

                            <h2>4. Protektado de Datumoj</h2>
                            <p>Ni implementis konvenajn teknikajn kaj organizajn sekurecajn rimedojn por protekti vian personan informon kontraŭ neaŭtorizita aliro, ŝanĝo, malkaŝo aŭ detruo.</p>

                            <h2>5. Transdono de Datumoj al Triaĵoj</h2>
                            <p>Ni ne vendas aŭ transdonas vian personan informon al triaĵoj, escepte:</p>
                            <ul>
                                <li>Kun via eksplicita konsento</li>
                                <li>Por plenumi jurajn devontigojn</li>
                                <li>Al servaj provizantoj kiuj helpas nin pri la funkciado de la retejo (kondiĉe ke ili observas privatecon)</li>
                            </ul>

                            <h2 id="rights">6. Viaj Rajtoj</h2>
                            <p>Vi rajtas:</p>
                            <ul>
                                <li>Aliri vian personan informon</li>
                                <li>Korekti neprecizajn datumojn</li>
                                <li>Forigi viajn datumojn</li>
                                <li>Limigi prilaboradon</li>
                                <li>Porti datumojn</li>
                                <li>Objektii kontraŭ prilaborado</li>
                            </ul>
                            <p>Por realigi ĉi tiujn rajtojn, kontaktu nin ĉe: <a href="mailto:privacy@andrewgotham.com" class="text-primary-500 hover:underline">privacy@andrewgotham.com</a></p>

                            <h2>7. Konservado de Datumoj</h2>
                            <p>Ni konservas vian personan informon nur dum la tempo necesa por atingi la celojn por kiuj ĝi estis kolektita, aŭ por observi jurajn postulojn.</p>

                            <h2>8. Internacia Transdono de Datumoj</h2>
                            <p>Via informo povas esti prilaborata kaj konservata en landoj ekster via loĝlando. Ni certigas konvenan protekton dum internacia transdono de datumoj.</p>

                            <h2>9. Ligiloj al Triaĵaj Retejoj</h2>
                            <p>Nia retejo povas enhavi ligilojn al triaĵaj retejoj. Ni ne respondecas pri la privateca politiko aŭ enhavo de tiuj retejoj.</p>

                            <h2>10. Ŝanĝoj en la privateca politiko</h2>
                            <p>Ni povas periode ĝisdatigi ĉi tiun Privatecan Politikon. Pri signifaj ŝanĝoj ni sciigos vin per nia retejo aŭ retpoŝte.</p>

                            <h2>11. Kontaktaj Informoj</h2>
                            <p>Se vi havas demandojn pri ĉi tiu Privateca Politiko, bonvolu kontakti nin:</p>
                            <div class="bg-gray-50 dark:bg-gray-700/50 p-6 rounded-lg mt-4">
                                <p><strong>Retpoŝto:</strong> <a href="mailto:privacy@andrewgotham.com" class="text-primary-500 hover:underline">privacy@andrewgotham.com</a></p>
                                <p><strong>Poŝta adreso:</strong> [Via jura adreso]</p>
                                <p><strong>Telefono:</strong> [Via kontakta telefono]</p>
                            </div>

                            <div class="mt-12 p-6 bg-primary-50 dark:bg-primary-900/20 rounded-lg border border-primary-200 dark:border-primary-800">
                                <h3 class="font-semibold text-primary-800 dark:text-primary-200 mb-2">Konsento kun Kondiĉoj</h3>
                                <p class="text-primary-700 dark:text-primary-300">
                                    Uzante ĉi tiun retejon, vi konsentas kun la kondiĉoj de ĉi tiu Privateca Politiko. Se vi ne konsentas kun ĉi tiuj kondiĉoj, bonvolu ne uzi nian retejon.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Rilataj Dokumentoj -->
                    <div class="mt-12 fade-in">
                        <h3 class="text-2xl font-bold mb-8 text-center">Aliaj Dokumentoj</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <a href="/documents/tos" class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                        <i class="fas fa-file-contract"></i>
                                    </div>
                                    <h4 class="text-lg font-semibold group-hover:text-primary-500 transition-colors">Uzokondiĉoj</h4>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    Reguloj kaj kondiĉoj por uzo de la retejo kaj servoj de Andrew Gotham
                                </p>
                            </a>

                            <a href="/documents/cookies" class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                        <i class="fas fa-cookie"></i>
                                    </div>
                                    <h4 class="text-lg font-semibold group-hover:text-primary-500 transition-colors">Politiko pri Uzado de Kuketoj</h4>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    Detalaj informoj pri uzo de kuketoj sur nia retejo
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.app>

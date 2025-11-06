<x-frontend.layouts.app>
    <!-- Ĉefa Enhavo -->
    <main class="w-full pt-20">
        <!-- Paneroj -->
        <section class="py-6 bg-gray-50 dark:bg-gray-800/30 border-b border-gray-200 dark:border-gray-700">
            <div class="fluid-container">
                <nav class="flex fade-in" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li><a href="/" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors"><i class="fas fa-home"></i></a></li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/documents" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">Dokumentoj</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">Politiko pri Kuketoj</span>
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
                        <i class="fas fa-cookie-bite text-2xl"></i>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Politiko pri Uzado de Kuketoj</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-4">Lasta ĝisdatigo: 5 novembro 2025</p>
                    <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <div class="flex items-center"><i class="fas fa-clock text-primary-500 mr-2"></i><span>Tempo por legi: 6 minutoj</span></div>
                        <div class="flex items-center"><i class="fas fa-info-circle text-primary-500 mr-2"></i><span>Informa dokumento</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dokumenta Enhavo -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 md:p-12 fade-in">
                        <div class="document-content prose dark:prose-invert max-w-none">
                            <p class="text-lg mb-6">
                                Ĉi tiu Politiko pri Uzado de Kuketoj klarigas kio estas kuketoj, kiel ni ilin uzas sur la retejo Andrew Gotham, kaj kiel vi povas administri viajn agordojn.
                            </p>

                            <h2>1. Kio estas kuketoj?</h2>
                            <p>Kuketoj estas malgrandaj tekstaj dosieroj kiuj konserviĝas sur via aparato kiam vi vizitas retejojn. Ili estas vaste uzataj por certigi korektan funkcion de retejoj, memori uzantajn preferojn kaj kolekti analizajn informojn.</p>

                            <h2>2. Kiel ni uzas kuketojn</h2>
                            <p>Ni uzas kuketojn por la jenaj celoj:</p>

                            <h3>2.1. Esencaj Kuketoj (Nepraj)</h3>
                            <p>Ĉi tiuj kuketoj estas necesaj por baza funkcieco de la retejo:</p>
                            <ul>
                                <li>Certigi sekurecon de la retejo</li>
                                <li>Memori viajn privatecajn preferojn</li>
                                <li>Baza navigado tra la retejo</li>
                            </ul>

                            <h3>2.2. Funkciaj Kuketoj</h3>
                            <p>Ĉi tiuj kuketoj plibonigas la uzantan sperton:</p>
                            <ul>
                                <li>Memori elektitan temon (hela/malhela)</li>
                                <li>Konservi lingvajn preferojn</li>
                                <li>Memori staton de movebla menuo</li>
                            </ul>

                            <h3>2.3. Analizaj Kuketoj</h3>
                            <p>Ĉi tiuj kuketoj helpas nin kompreni kiel la retejo estas uzata:</p>
                            <ul>
                                <li>Analizo de paĝa vizitindico</li>
                                <li>Mezurado de enhava efikeco</li>
                                <li>Kompreno de uza konduto</li>
                            </ul>

                            <h2>3. Tipoj de uzataj kuketoj</h2>
                            <div class="overflow-x-auto">
                                <table class="cookie-table">
                                    <thead>
                                    <tr>
                                        <th>Nomo</th>
                                        <th>Tipo</th>
                                        <th>Celo</th>
                                        <th>Daŭro</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><strong>theme_preference</strong></td>
                                        <td>Funkcia</td>
                                        <td>Memoras elektitan koloran temon</td>
                                        <td>1 jaro</td>
                                    </tr>
                                    <tr>
                                        <td><strong>language_preference</strong></td>
                                        <td>Funkcia</td>
                                        <td>Konservas elektitan interfacan lingvon</td>
                                        <td>1 jaro</td>
                                    </tr>
                                    <tr>
                                        <td><strong>cookie_consent</strong></td>
                                        <td>Nepra</td>
                                        <td>Memoras vian konsenton kun la politiko pri kuketoj</td>
                                        <td>1 jaro</td>
                                    </tr>
                                    <tr>
                                        <td><strong>session_id</strong></td>
                                        <td>Nepra</td>
                                        <td>Certigas sekurecon de seanco</td>
                                        <td>Seanco</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2>4. Triaĵaj kuketoj</h2>
                            <p>Ni povas uzi kuketojn de la jenaj triaĵaj servoj:</p>
                            <ul>
                                <li><strong>Google Analytics</strong> — por analizi trafikon kaj uzon de la retejo</li>
                                <li><strong>Font Awesome</strong> — por montri ikonojn</li>
                                <li><strong>Google Fonts</strong> — por ŝargi tiparojn</li>
                            </ul>
                            <p>Bonvolu konsulti la privatecajn politikojn de ĉi tiuj servoj por plia informo.</p>

                            <h2>5. Administrado de kuketoj</h2>
                            <h3>5.1. Retumilaj agordoj</h3>
                            <p>Plej multaj retumiloj permesas administri kuketojn per siaj agordoj. Vi povas:</p>
                            <ul>
                                <li>Bloki ĉiujn aŭ iujn kuketojn</li>
                                <li>Forigi ekzistantajn kuketojn</li>
                                <li>Agordi sciigojn pri novaj kuketoj</li>
                            </ul>

                            <h3>5.2. Sekvoj de malŝaltado de kuketoj</h3>
                            <p>Se vi malŝaltos kuketojn, iuj funkcioj de la retejo povus fariĝi nedisponeblaj:</p>
                            <ul>
                                <li>Agordoj de temo kaj lingvo ne konserviĝos</li>
                                <li>Iuj interaktivaj elementoj povus funkcii nekorekte</li>
                                <li>Vi devos ĉiufoje reagordi preferojn</li>
                            </ul>

                            <h3>5.3. Instrukcioj por popularaj retumiloj</h3>
                            <ul>
                                <li><strong>Google Chrome:</strong> Agordoj → Privateco kaj sekureco → Kuketoj kaj aliaj retejaj datumoj</li>
                                <li><strong>Mozilla Firefox:</strong> Agordoj → Privateco kaj sekureco → Kuketoj kaj retejaj datumoj</li>
                                <li><strong>Safari:</strong> Agordoj → Privateco → Kuketoj kaj retejaj datumoj</li>
                                <li><strong>Microsoft Edge:</strong> Agordoj → Privateco, serĉado kaj servoj → Kuketoj kaj retejaj datumoj</li>
                            </ul>

                            <h2>6. Ŝanĝoj en la politiko pri kuketoj</h2>
                            <p>Ni povas periode ĝisdatigi ĉi tiun Politikon pri Uzado de Kuketoj. Aktuala versio ĉiam haveblas sur ĉi tiu paĝo.</p>

                            <h2>7. Kontaktaj Informoj</h2>
                            <p>Se vi havas demandojn pri uzo de kuketoj sur nia retejo, kontaktu nin:</p>
                            <div class="bg-gray-50 dark:bg-gray-700/50 p-6 rounded-lg mt-4">
                                <p><strong>Retpoŝto:</strong> <a href="mailto:privacy@andrewgotham.com" class="text-primary-500 hover:underline">privacy@andrewgotham.com</a></p>
                            </div>

                            <div class="mt-12 p-6 bg-primary-50 dark:bg-primary-900/20 rounded-lg border border-primary-200 dark:border-primary-800">
                                <h3 class="font-semibold text-primary-800 dark:text-primary-200 mb-2">Konsento pri uzo de kuketoj</h3>
                                <p class="text-primary-700 dark:text-primary-300">
                                    Daŭrigante uzi ĉi tiun retejon, vi konsentas pri uzo de kuketoj laŭ ĉi tiu Politiko.
                                    Vi povas ŝanĝi agordojn pri kuketoj iam ajn per agordoj de via retumilo.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Rilataj Dokumentoj -->
                    <div class="mt-12 fade-in">
                        <h3 class="text-2xl font-bold mb-8 text-center">Aliaj Dokumentoj</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <a href="/documents/privacy" class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4 class="text-lg font-semibold group-hover:text-primary-500 transition-colors">Privateca Politiko</h4>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Plena informo pri protekto de viaj datumoj</p>
                            </a>

                            <a href="/documents/tos" class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                        <i class="fas fa-file-contract"></i>
                                    </div>
                                    <h4 class="text-lg font-semibold group-hover:text-primary-500 transition-colors">Uzokondiĉoj</h4>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Reguloj por uzo de retejo kaj servoj</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.app>

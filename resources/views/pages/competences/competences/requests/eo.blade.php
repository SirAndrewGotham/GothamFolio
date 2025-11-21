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
            // Lertostria animacio por kapablecaj stangoj
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
                        <!-- Pri Requests -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#44A5CB] mr-3"></i>
                                Pri Requests
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>Requests</strong> estas eleganta kaj simpla HTTP-biblioteko por Python, konstruita por homoj.
                                    Ĝi abstraktas la kompleksecojn de farado de HTTP-petoj malantaŭ bela, simpla API por ke vi
                                    povu enfokusigi interagadon kun servoj kaj konsumadon de datumoj en via aplikaĵo.
                                </p>

                                <h3>Ĉefaj Avantaĝoj</h3>
                                <ul>
                                    <li><strong>Homa-Amika API</strong> - Simplaj, intuiciaj metodoj por ĉiuj HTTP-verboj</li>
                                    <li><strong>Aŭtomata Enhavo-Malkodado</strong> - Aŭtomata malkodado de JSON, teksto, kaj aliaj enhav-tipoj</li>
                                    <li><strong>SSL-Kontrolado</strong> - Enkonstruita SSL-atestila kontrolado</li>
                                    <li><strong>Konekto-Puŝado</strong> - Efika konekto-reuzado kun keep-alive</li>
                                    <li><strong>Aŭtentiko-Subteno</strong> - Baza, Digest, OAuth, kaj propra aŭtentiko</li>
                                    <li><strong>Seanco-Subteno</strong> - Persistaj seancoj kun kuketoj kaj kapoj</li>
                                    <li><strong>Tempolimo-Traktado</strong> - Agordeblaj tempolimoj por fidindaj aplikaĵoj</li>
                                </ul>

                                <h3>Kernaj Trajtoj</h3>
                                <p>
                                    Requests provizas kompletan aron de trajtoj por HTTP-komunikado:
                                </p>
                                <ul>
                                    <li><strong>HTTP-Metodoj</strong> - GET, POST, PUT, DELETE, PATCH, HEAD, OPTIONS</li>
                                    <li><strong>Parametro-Traktado</strong> - URL-parametroj, form-datumoj, JSON-ŝarĝoj</li>
                                    <li><strong>Kap-Administrado</strong> - Propraj kapoj kaj aŭtomata enhav-tipo-detetado</li>
                                    <li><strong>Kuketo-Subteno</strong> - Aŭtomata kuketo-traktado kaj seanco-administrado</li>
                                    <li><strong>Alidirektado-Traktado</strong> - Aŭtomata alidirektado-sequado kun agordeblaj limoj</li>
                                    <li><strong>Eraro-Traktado</strong> - Enkonstruita escepta hierarkio por malsamaj erar-tipoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia Requests Vojaĝo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#44A5CB] mr-3"></i>
                                Mia Vojaĝo kun Requests
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi komencis uzi Requests en 2019 kaj ĝi rapide fariĝis mia ĉefa biblioteko por ĉiuj HTTP-operacioj en Python.
                                    Dum 5+ jaroj, mi uzis ĝin en centoj da projektoj de simplaj API-vokoj ĝis kompleksaj retumado-aplikaĵoj
                                    kaj produktaj fonaĵaj sistemoj. Ĝia eleganta API-dizajno influis kiel mi pensas pri biblioteka dezajno.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-cloud text-[#44A5CB] mr-2"></i>
                                            API-Integriĝo
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Vasta sperto integriĝante kun REST API,
                                            retservoj, kaj triapartiaj platformoj tra diversaj industrioj.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-spider text-purple-500 mr-2"></i>
                                            Retumado
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Konstruis fortikajn retumado-sistemojn kun ĝusta seanco-administrado,
                                            ofteco-limo, kaj eraro-traktado uzante Requests.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mia Sperto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#44A5CB] mr-3"></i>
                                Mia Sperto kun Requests
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kun 5+ jaroj de vasta sperto, mi majstris Requests por diversaj HTTP-komunikado-scenaroj
                                    kaj integris ĝin kun multnombraj aplikaĵoj kaj sistemoj.
                                </p>

                                <h3>Kernaj Kapabloj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Ĉiuj HTTP-metodoj kaj verbo-uzado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Seanco-administrado kaj kuketo-traktado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Aŭtentiko-mekanismoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Eraro-traktado kaj escepto-administrado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Dosiero-alŝutoj kaj multipart form-datumoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Respondo-analizado kaj enhavo-traktado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Prokura agordo kaj SSL-kontrolado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Agado-optimumigo kaj konekto-puŝado</span>
                                    </div>
                                </div>

                                <h3>Majstritaj HTTP-Trajtoj</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">GET/POST</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">Seancoj</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">Aŭtentiko</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Eraro-Traktado</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">Dosiero-Alŝuto</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Prokuroj</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Fluigo</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">SSL/TLS</span>
                                </div>

                                <h3>Altanivelaj Uzado-Patternoj</h3>
                                <ul>
                                    <li><strong>Ofteco-Limo</strong> - Efektivigado de propra ofteco-limo por API-konsumado</li>
                                    <li><strong>Riprova Logiko</strong> - Konstruado de fortikaj riprovaj mekanismoj kun eksponenta malakcelo</li>
                                    <li><strong>Fluantaj Respondoj</strong> - Traktado de grandaj respondoj kun fluado</li>
                                    <li><strong>Propra Aŭtentiko</strong> - Efektivigado de kompleksaj aŭtentiko-fluoj</li>
                                    <li><strong>Mezprogramo-Patternoj</strong> - Kreado de peto/respondo mezprogramo</li>
                                    <li><strong>Konekto-Puŝado</strong> - Optimumigado de agado kun konekto-reuzado</li>
                                </ul>
                            </div>
                        </div>

                        <!-- HTTP-Metodoj & Uzado-Patternoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-exchange-alt text-[#44A5CB] mr-3"></i>
                                HTTP-Metodoj & Uzado-Patternoj
                            </h2>
                            <div class="content-section">
                                <h3>Oftaj HTTP-Metodoj</h3>
                                <p>
                                    Vasta sperto kun ĉiuj ĉefaj HTTP-metodoj kaj iliaj taŭgaj uzo-kazoj:
                                </p>
                                <ul>
                                    <li><strong>GET</strong> - Ricevado de datumoj de serviloj, API-finoj, kaj retaj rimedoj</li>
                                    <li><strong>POST</strong> - Kreado de novaj rimedoj, sendado de formoj, kaj API-datumo-kreado</li>
                                    <li><strong>PUT/PATCH</strong> - Ĝisdatigado de ekzistantaj rimedoj kun kompleta aŭ parta datumoj</li>
                                    <li><strong>DELETE</strong> - Forigo de rimedoj de serviloj kaj API</li>
                                    <li><strong>HEAD</strong> - Ricevado de kapoj sen responda korpo por efikeco</li>
                                    <li><strong>OPTIONS</strong> - Malkovrado de disponeblaj metodoj kaj CORS preflight petoj</li>
                                </ul>

                                <h3>Datumo-Traktado</h3>
                                <p>
                                    Majstritaj diversaj datumaj formatoj kaj ŝarĝo-tipoj:
                                </p>
                                <ul>
                                    <li><strong>JSON-Ŝarĝoj</strong> - Aŭtomata seriaĵo kaj mal-seriaĵo</li>
                                    <li><strong>Form-Datumoj</strong> - URL-kodita formo-sendo kaj dosiero-alŝutoj</li>
                                    <li><strong>Query-Parametroj</strong> - Dinamika URL-parametro-konstruado</li>
                                    <li><strong>Multipart Formoj</strong> - Kompleksaj formo-datumoj kun dosieroj kaj kampoj</li>
                                    <li><strong>Duumaj Datumoj</strong> - Traktado de dosiero-elŝutoj kaj duuma enhavo</li>
                                    <li><strong>Fluantaj Datumoj</strong> - Procesado de grandaj respondoj efike</li>
                                </ul>

                                <h3>Respondo-Procesado</h3>
                                <p>
                                    Kompleta respondo-traktado kaj procesado:
                                </p>
                                <ul>
                                    <li>Statuso-kodo-kontrolado kaj validigo</li>
                                    <li>Enhavo-tipo-detetado kaj aŭtomata analizado</li>
                                    <li>Kapo-inspektado kaj manipulado</li>
                                    <li>Kuketo-eltirado kaj administrado</li>
                                    <li>Kodigo-detetado kaj teksto-konvertado</li>
                                    <li>Respondo-fluado por grandaj datum-aroj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Altanivelaj Trajtoj & Teknikoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cogs text-[#44A5CB] mr-3"></i>
                                Altanivelaj Trajtoj & Teknikoj
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi havas vastan sperton kun Requests' altanivelaj trajtoj por konstrui fortikajn aplikaĵojn:
                                </p>

                                <h3>Seanco-Administrado</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#44A5CB] mb-2">Persistaj Seancoj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Uzado de Seanco-objektoj por konekto-puŝado,
                                            kuketo-persistado, kaj kapo-reuzado trans petoj
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#44A5CB] mb-2">Aŭtentiko-Fluoj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Efektivigado de kompleksaj aŭtentiko-sekvencoj
                                            kun ĵetono-refreŝigo kaj kredenciala administrado
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#44A5CB] mb-2">Adaptilo-Agordo</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Propra agordo de HTTPAdaptilo por konekto-puŝado,
                                            riprovaj strategioj, kaj SSL-agordo
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#44A5CB] mb-2">Mezprogramo-Patternoj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kreado de antaŭ-peto kaj post-respondo hokoj
                                            por protokolado, monitorado, kaj transformado
                                        </p>
                                    </div>
                                </div>

                                <h3>Eraro-Traktado & Rezistemo</h3>
                                <ul>
                                    <li><strong>Escepta Hierarkio</strong> - Traktado de malsamaj escepto-tipoj taŭge</li>
                                    <li><strong>Riprovaj Mekanismoj</strong> - Efektivigado de inteligenta ripova logiko kun malakcelo</li>
                                    <li><strong>Circuit Breaker Patternoj</strong> - Malhelpo de kaskadaj malsukcesoj en distribuitaj sistemoj</li>
                                    <li><strong>Tempolimo-Administrado</strong> - Agordado de taŭgaj tempolimoj por diversaj scenaroj</li>
                                    <li><strong>SSL-Kontrolado</strong> - Administrado de SSL-atestiloj kaj kontrolo-niveloj</li>
                                    <li><strong>Prokura Agordo</strong> - Laborado kun HTTP kaj SOCKS prokuroj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Integriĝo-Patternoj & Uzo-Kazoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-project-diagram text-[#44A5CB] mr-3"></i>
                                Integriĝo-Patternoj & Uzo-Kazoj
                            </h2>
                            <div class="content-section">
                                <h3>API-Integriĝo</h3>
                                <p>
                                    Vasta sperto integriĝante kun diversaj tipoj de API:
                                </p>
                                <ul>
                                    <li><strong>REST API</strong> - CRUD-operacioj kun ĝusta HTTP-semantiko</li>
                                    <li><strong>GraphQL</strong> - Sendado de demandoj kaj mutacioj al GraphQL-finoj</li>
                                    <li><strong>OAuth 2.0</strong> - Efektivigado de OAuth-fluoj por triapartiaj servoj</li>
                                    <li><strong>Rethoko-Traktado</strong> - Ricevado kaj procesado de rethoko-sciigoj</li>
                                    <li><strong>Ofteco-Limitaj API</strong> - Respektado kaj traktado de API ofteco-limoj</li>
                                    <li><strong>Paĝigitaj API</strong> - Navigado tra paĝigitaj API-respondoj</li>
                                </ul>

                                <h3>Retumado & Aŭtomatigo</h3>
                                <p>
                                    Konstruis fortikajn retumado-sistemojn uzante Requests:
                                </p>
                                <ul>
                                    <li><strong>Seanco-Administrado</strong> - Subtenado de stato trans multoblaj petoj</li>
                                    <li><strong>Formo-Sendo</strong> - Aŭtomatigo de formo-plenigo kaj sendo</li>
                                    <li><strong>JavaScript-Traktado</strong> - Laborado kun JavaScript-pezaj ejoj</li>
                                    <li><strong>Ofteco-Limo</strong> - Efektivigado de ĝentila retumado kun prokrastoj</li>
                                    <li><strong>Prokura Rulado</strong> - Uzado de multoblaj prokuroj por eviti blokadojn</li>
                                    <li><strong>CAPTCHA-Traktado</strong> - Integriĝo kun CAPTCHA-solvaj servoj</li>
                                </ul>

                                <h3>Produktaj Aplikaĵoj</h3>
                                <ul>
                                    <li><strong>Mikroservo-Komunikado</strong> - Servo-al-servo HTTP-vokoj</li>
                                    <li><strong>Datumo-Tubo-Integriĝo</strong> - Eltirado de datumoj de eksteraj fontoj</li>
                                    <li><strong>Monitorado & Sano-Kontroloj</strong> - Periodaj sano-kontrolaj petoj</li>
                                    <li><strong>Dosiero-Elŝuto/Alŝuto</strong> - Traktado de dosiero-transdono tra HTTP</li>
                                    <li><strong>Rethoko-Efektivigoj</strong> - Sendado de rethoko-sciigoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Agado & Plej Bonaj Praktikoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-tachometer-alt text-[#44A5CB] mr-3"></i>
                                Agado & Plej Bonaj Praktikoj
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi havas vastan sperton optimumigante Requests-uzadon por agado kaj fidindeco:
                                </p>

                                <h3>Agado-Optimumigo</h3>
                                <ul>
                                    <li><strong>Konekto-Puŝado</strong> - Reuzado de konektoj kun Seanco-objektoj</li>
                                    <li><strong>Keep-Alive</strong> - Utiligado de HTTP keep-alive por reduktita latenco</li>
                                    <li><strong>Fluantaj Respondoj</strong> - Traktado de grandaj respondoj sen memoraj problemoj</li>
                                    <li><strong>Samtempaj Petoj</strong> - Uzado de fadenigo aŭ asyncio por paralelaj petoj</li>
                                    <li><strong>DNS-Kaŝado</strong> - Efektivigado de DNS-kaŝado por pli rapida solvo</li>
                                    <li><strong>Kunpremo</strong> - Uzado de gzip kaj aliaj kunpremaj metodoj</li>
                                </ul>

                                <h3>Sekurecaj Plej Bonaj Praktikoj</h3>
                                <ul>
                                    <li><strong>SSL/TLS-Kontrolado</strong> - Ĝusta atestila validigo</li>
                                    <li><strong>Kredenciala Administrado</strong> - Sekura traktado de API-ŝlosiloj kaj ĵetonoj</li>
                                    <li><strong>Eniga Validigo</strong> - Validigado de URL kaj parametroj antaŭ petoj</li>
                                    <li><strong>Kap-Sekureco</strong> - Agordado de taŭgaj sekurecaj kapoj</li>
                                    <li><strong>Prokura Sekureco</strong> - Sekura prokura agordo kaj aŭtentiko</li>
                                </ul>

                                <h3>Fidindeco-Patternoj</h3>
                                <ul>
                                    <li><strong>Riprovaj Strategioj</strong> - Eksponenta malakcelo kaj jitter</li>
                                    <li><strong>Circuit Breakers</strong> - Malhelpo de kaskadaj malsukcesoj</li>
                                    <li><strong>Tempolimo-Agordo</strong> - Taŭgaj tempolimoj por diversaj scenaroj</li>
                                    <li><strong>Eraro-Klasifikado</strong> - Distingado inter riproveblaj kaj ne-riproveblaj eraroj</li>
                                    <li><strong>Monitorado & Protokolado</strong> - Kompleta peto-protokolado kaj metrikoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Projektoj sur GitHub -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fab fa-github text-[#44A5CB] mr-3"></i>
                                Projektoj sur GitHub
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kelkaj el miaj projektoj uzantaj Requests povas esti trovitaj sur GitHub:
                                </p>
                                <div class="mt-4">
                                    <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                        <i class="fab fa-github mr-2"></i>
                                        <span>SirAndrewGotham sur GitHub</span>
                                    </a>
                                </div>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Mi kontinue laboras pri projektoj kiuj montras praktikajn aplikojn
                                    de Requests por API-integriĝo, retumado, kaj HTTP-komunikado.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Flanka Stango -->
                    <div class="space-y-6">
                        <!-- Kompetenteca Karto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#44A5CB] mr-2"></i>
                                Kompetenteca Nivelo
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Ĝenerala Kompetenteco</span>
                                        <span class="text-sm font-bold text-[#44A5CB]">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#44A5CB] to-[#2D8BBA]"
                                             data-width="85%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">API-Integriĝo</span>
                                        <span class="text-sm font-bold text-green-500">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="90%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Seanco-Administrado</span>
                                        <span class="text-sm font-bold text-blue-500">88%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="88%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Eraro-Traktado</span>
                                        <span class="text-sm font-bold text-purple-500">87%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="87%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Agado</span>
                                        <span class="text-sm font-bold text-red-500">83%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="83%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#44A5CB] mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>5+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Versio: <strong>Requests 2.31+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Projektoj: <strong>100+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-plug text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Integritaj API: <strong>50+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-rocket text-[#44A5CB] w-5 mr-3"></i>
                                    <span class="text-sm">Nivelo: <strong>Eksperta Nivelo</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Lernado-Vojo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-[#44A5CB] mr-2"></i>
                                Lernado-Vojo
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Bazaj HTTP-metodoj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Respondo-traktado</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Seanco-administrado</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Aŭtentiko-fluoj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Altanivela eraro-traktado</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Agado-optimumigo</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentecoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#44A5CB] mr-2"></i>
                                Rilataj Kompetentecoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-python text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Python</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                </a>
                                <a href="/competences/flask" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-gray-600 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-flask text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Flask</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                </a>
                                <a href="/competences/api" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-code text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#44A5CB] transition-colors">API-Disvolviĝo</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">85% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                </a>
                                <a href="/competences/web-scraping" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-spider text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#44A5CB] transition-colors">Retumado</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">80% kompetenteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#44A5CB] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div class="bg-gradient-to-r from-[#44A5CB] to-[#2D8BBA] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu vi interesiĝas pri kunlaboro?</h3>
                            <p class="text-sm mb-4">Preta diskuti vian API-integriĝan projekton</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#44A5CB] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

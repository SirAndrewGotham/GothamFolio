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
            // Skill bar animation
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
                        <!-- Pri TensorFlow -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-info-circle text-[#FF6F00] mr-3"></i>
                                Pri TensorFlow
                            </h2>
                            <div class="content-section">
                                <p>
                                    <strong>TensorFlow</strong> estas tuteca malfermitkoda platformo por maŝina lernado disvolvita de Google.
                                    Ĝi havas kompletan, flekseblan ekosistemon de iloj, bibliotekoj kaj komunumaj rimedoj kiuj permesas
                                    esploristoj antaŭenigi la staton de la arto en ML kaj programistoj facile konstrui kaj efektivigi ML-povatajn aplikaĵojn.
                                </p>

                                <h3>Ĉefaj Avantaĝoj</h3>
                                <ul>
                                    <li><strong>Fleksebla Arkitekturo</strong> - Efektivigi komputadon al unu aŭ pluraj CPU-oj aŭ GPU-oj</li>
                                    <li><strong>Produktado-Preta</strong> - Skalado de esplorado al produktado kun la sama kodo</li>
                                    <li><strong>Keras-Integriĝo</strong> - Alt-nivela API por rapida eksperimentado</li>
                                    <li><strong>Kruc-Plataforma</strong> - Kuri sur labortabloj, grupoj, movilaj aparatoj kaj rando-aparatoj</li>
                                    <li><strong>TensorBoard</strong> - Pova vida ilaro por modela sencimigado</li>
                                    <li><strong>Granda Komunumo</strong> - Vasta dokumentado, lerniloj kaj antaŭtrejnitaj modeloj</li>
                                    <li><strong>TF-Ekosistemo</strong> - TF Lite, TF.js, TF Extended por malsamaj efektivigaj scenaroj</li>
                                </ul>

                                <h3>Kernaj Komponantoj</h3>
                                <p>
                                    TensorFlow provizas kompletan ekosistemon por maŝinlerna disvolviĝo:
                                </p>
                                <ul>
                                    <li><strong>TensorFlow Core</strong> - Malalt-nivela API por konstrui kaj trejni modelojn</li>
                                    <li><strong>Keras</strong> - Alt-nivela neŭraj retoj API</li>
                                    <li><strong>TensorFlow Datasets</strong> - Kolekto de pretaj datum-aroj</li>
                                    <li><strong>TensorBoard</strong> - Vida ilaro</li>
                                    <li><strong>TensorFlow Lite</strong> - Malpeza solvo por movilaj kaj rando-aparatoj</li>
                                    <li><strong>TensorFlow.js</strong> - JavaScript-biblioteko por trejnado kaj efektivigo</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mia TensorFlow-Vojaĝo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-road text-[#FF6F00] mr-3"></i>
                                Mia Vojaĝo kun TensorFlow
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi komencis lerni TensorFlow en 2022 por vastigi miajn maŝinlernajn kapablojn en profundan lernadon.
                                    Dum 2+ jaroj, mi konstruis diversajn neŭrajn retajn arkitekturojn, de simplaj antaŭeniraj retoj
                                    al konvoluciaj kaj rekursivaj retoj. Mia sperto fokusiĝas je praktikaj aplikoj kaj
                                    kompreno de la subkuŝantaj principoj de profunda lernado.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                    <div class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-image text-[#FF6F00] mr-2"></i>
                                            Komputila Vidado
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Konstruis CNN-arkitekturojn por bilda klasifikado,
                                            objekto-detectado kaj bilda segmentado-taskoj.
                                        </p>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                        <h3 class="text-lg font-bold mb-3 flex items-center">
                                            <i class="fas fa-language text-purple-500 mr-2"></i>
                                            Natura Lingvo-Prilitraktado
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Disvolvis RNN kaj Transformer-modelojn por teksta klasifikado,
                                            sentimento-analizo kaj sekvenco-generado.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mia Sperto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-user-check text-[#FF6F00] mr-3"></i>
                                Mia Sperto kun TensorFlow
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kun 2+ jaroj da man-sperto, mi disvolvis praktikajn kapablojn en konstruado,
                                    trejnado kaj efektivigo de neŭraj retoj uzante TensorFlow kaj Keras.
                                </p>

                                <h3>Kernaj Kapabloj</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Konstruado de neŭraj retoj kun Keras</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Datum-pretraktado kaj pipelinoj</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Modela trejnado kaj taksado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Hiperparametra agordado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Transdona lernado</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>TensorBoard-vidigo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Modela konservado kaj efektivigo</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-500 mr-2"></i>
                                        <span>Propra tavolo-kreado</span>
                                    </div>
                                </div>

                                <h3>Neŭra Reto-Arkitekturoj</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                    <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Densaj Retoj</span>
                                    <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">CNN-oj</span>
                                    <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">RNN/LSTM-oj</span>
                                    <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Aŭtokodigiloj</span>
                                    <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">GAN-oj</span>
                                    <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Transdona Lernado</span>
                                    <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Propraj Tavoloj</span>
                                    <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Rapelfunkcioj</span>
                                </div>

                                <h3>Profunda Lernada Laborfluo</h3>
                                <ul>
                                    <li><strong>Datum-Preparado</strong> - Ŝargado, pretraktado kaj pligrandigado de datumoj</li>
                                    <li><strong>Modela Arkitekturo</strong> - Dezajnado de neŭraj retaj arkitekturoj</li>
                                    <li><strong>Trejnada Konfigurado</strong> - Agordado de optimumigiloj, perdfunkcioj kaj metrikoj</li>
                                    <li><strong>Modela Trejnado</strong> - Trejnado kun validigo kaj monitorado</li>
                                    <li><strong>Taksado & Agordado</strong> - Analizado de efikeco kaj optimumigado de hiperparametroj</li>
                                    <li><strong>Efektivigo</strong> - Konservado de modeloj kaj efektivigo por inferenco</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Neŭraj Reto-Tipoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-network-wired text-[#FF6F00] mr-3"></i>
                                Neŭraj Reto-Arkitekturoj
                            </h2>
                            <div class="content-section">
                                <h3>Konvoluciaj Neŭraj Retoj (CNN)</h3>
                                <p>
                                    Sperto konstruanta CNN-arkitekturojn por komputilaj vidaj taskoj:
                                </p>
                                <ul>
                                    <li><strong>Bilda Klasifikado</strong> - Konstruado de modeloj por klasifiki bildojn en kategoriojn</li>
                                    <li><strong>Objekto-Detectado</strong> - Identigado kaj lokigo de objektoj ene de bildoj</li>
                                    <li><strong>Transdona Lernado</strong> - Uzado de antaŭtrejnitaj modeloj kiel VGG, ResNet, MobileNet</li>
                                    <li><strong>Datum-Pligrandigado</strong> - Aplikado de transformoj por pliigi datumaran diversecon</li>
                                    <li><strong>Trajto-Eltirado</strong> - Uzado de CNN-oj kiel trajto-eltiriloj</li>
                                </ul>

                                <h3>Rekursivaj Neŭraj Retoj (RNN)</h3>
                                <p>
                                    Disvolvis sekvencajn modelojn por tempaj serioj kaj NLP-taskoj:
                                </p>
                                <ul>
                                    <li><strong>LSTM-Retoj</strong> - Traktado de longtempaj dependecoj en sekvencoj</li>
                                    <li><strong>GRU-Retoj</strong> - Porditaj rekursivaj unuoj por efika sekvenca modelado</li>
                                    <li><strong>Tempa Serio-Antaŭdiro</strong> - Antaŭdirante estontajn valorojn en tempaj datumoj</li>
                                    <li><strong>Teksto-Generado</strong> - Karakter-nivelaj kaj vort-nivelaj lingvaj modeloj</li>
                                    <li><strong>Sentimento-Analizo</strong> - Klasifikado de teksta sentimento uzante RNN-ojn</li>
                                </ul>

                                <h3>Altanĝitaj Arkitekturoj</h3>
                                <p>
                                    Sperto kun pli kompleksaj neŭraj retaj dezajnoj:
                                </p>
                                <ul>
                                    <li><strong>Aŭtokodigiloj</strong> - Nekontrolita lernado por dimensia redukto</li>
                                    <li><strong>Generativaj Adversaj Retoj (GAN)</strong> - Generado de sintezaj datumoj</li>
                                    <li><strong>Siamezaj Retoj</strong> - Lernado de similecaj metrikoj</li>
                                    <li><strong>Atentaj Mekanismoj</strong> - Fokuso je gravaj partoj de enigo</li>
                                    <li><strong>Propraj Tavoloj</strong> - Efektivigado de specialigitaj neŭraj retaj komponantoj</li>
                                </ul>
                            </div>
                        </div>

                        <!-- TensorFlow-Ekosistemo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-cubes text-[#FF6F00] mr-3"></i>
                                TensorFlow-Ekosistemo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi havas sperton kun diversaj komponantoj de la TensorFlow-ekosistemo:
                                </p>

                                <h3>Keras-API</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                    <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF6F00] mb-2">Sekvenca API</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Konstruado de linearaj stakoj de tavoloj por simplaj arkitekturoj
                                            kun facile uzebla interfaco
                                        </p>
                                    </div>
                                    <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF6F00] mb-2">Funkcia API</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kreado de kompleksaj modeloj kun multoblaj enigoj, eligoj,
                                            kaj dividitaj tavoloj
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF6F00] mb-2">Modela Subklasado</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Efektivigado de propraj modeloj per subklasado de tf.keras.Model
                                            por maksimuma fleksebleco
                                        </p>
                                    </div>
                                    <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                        <h4 class="font-semibold text-[#FF6F00] mb-2">Propraj Tavoloj</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Kreado de propraj tavoloj per subklasado de tf.keras.layers.Layer
                                            por specialigitaj operacioj
                                        </p>
                                    </div>
                                </div>

                                <h3>Iloj & Utilaĵoj</h3>
                                <ul>
                                    <li><strong>TensorBoard</strong> - Vidigado de trejnadaj metrikoj, modelaj grafeoj kaj enigoj</li>
                                    <li><strong>tf.data</strong> - Konstruado de efikaj datum-enigaj pipelinoj</li>
                                    <li><strong>TensorFlow Datasets</strong> - Aliro al antaŭpretraktitaj datum-aroj</li>
                                    <li><strong>Modelaj Kontrolpunktoj</strong> - Konservado kaj restaŭrado de modela trejnada progreso</li>
                                    <li><strong>Rapelfunkcioj</strong> - Propraĵigo de trejnada konduto dum modela trejnado</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Trejnado & Optimumigo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-tachometer-alt text-[#FF6F00] mr-3"></i>
                                Trejnado & Optimumigo
                            </h2>
                            <div class="content-section">
                                <p>
                                    Mi havas sperton kun diversaj teknikoj por trejnado kaj optimumigado de profundaj lernadaj modeloj:
                                </p>

                                <h3>Trejnadaj Teknikoj</h3>
                                <ul>
                                    <li><strong>Optimumigiloj</strong> - Adam, SGD, RMSprop kun malsamaj lernado-rapidaj planoj</li>
                                    <li><strong>Perdfunkcioj</strong> - Kategoria krucentropio, duuma krucentropio, MSE, propraj perdoj</li>
                                    <li><strong>Reguligo</strong> - L1/L2-reguligo, dropout, bata normaligo</li>
                                    <li><strong>Frua Haltigo</strong> - Malhelpi troadaptadon per monitorado de validigaj metrikoj</li>
                                    <li><strong>Lernado-Rapida Planado</strong> - Ĝustigado de lernado-rapidoj dum trejnado</li>
                                </ul>

                                <h3>Efikeco-Optimumigo</h3>
                                <ul>
                                    <li><strong>GPU-Akcelado</strong> - Utiligado de GPU-rimedoj por pli rapida trejnado</li>
                                    <li><strong>Datum-Pipelina Optimumigo</strong> - Uzado de tf.data por efika datum-ŝargado</li>
                                    <li><strong>Miksita Precizeca Trejnado</strong> - Uzado de float16 por pli rapidaj kalkuloj</li>
                                    <li><strong>Modela Prunado</strong> - Reduktado de modela grandeco dum mantenado de efikeco</li>
                                    <li><strong>Kvantizado</strong> - Reduktado de precizeco por pli rapida inferenco</li>
                                </ul>

                                <h3>Transdona Lernado</h3>
                                <p>
                                    Vasta sperto kun transdona lernado uzante antaŭtrejnitajn modelojn:
                                </p>
                                <ul>
                                    <li>Fajna agordado de antaŭtrejnitaj CNN-modeloj (VGG, ResNet, Inception)</li>
                                    <li>Trajto-eltirado uzante antaŭtrejnitajn modelojn</li>
                                    <li>Adaptado de modeloj al novaj domajnoj kaj taskoj</li>
                                    <li>Kompreno kiam kaj kiel apliki transdonan lernadon</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Real-mondaj Aplikoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-chart-bar text-[#FF6F00] mr-3"></i>
                                Real-mondaj Aplikoj
                            </h2>
                            <div class="content-section">
                                <h3>Komputilaj Vidaj Projektoj</h3>
                                <p>
                                    Aplikis TensorFlow al diversaj komputilaj vidaj taskoj:
                                </p>
                                <ul>
                                    <li><strong>Bilda Klasifikado</strong> - Konstruado de modeloj por klasifiki bildojn en kategoriojn</li>
                                    <li><strong>Objekto-Detectado</strong> - Identigado kaj lokigo de objektoj en bildoj</li>
                                    <li><strong>Bilda Segmentado</strong> - Piksel-nivela klasifikado por bilda analizo</li>
                                    <li><strong>Stilo-Transdono</strong> - Aplikado de artaj stiloj al bildoj</li>
                                    <li><strong>Bilda Generado</strong> - Kreado de novaj bildoj uzante GAN-ojn</li>
                                </ul>

                                <h3>Natura Lingvo-Prilitraktado</h3>
                                <p>
                                    Disvolvis NLP-aplikaĵojn uzante TensorFlow:
                                </p>
                                <ul>
                                    <li><strong>Teksta Klasifikado</strong> - Sentimento-analizo, temo-klasifikado</li>
                                    <li><strong>Teksto-Generado</strong> - Kreado de koheraj tekstaj sekvencoj</li>
                                    <li><strong>Nomita Ento-Rekono</strong> - Identigado de entoj en teksto</li>
                                    <li><strong>Maŝina Tradukado</strong> - Konstruado de sekvenco-al-sekvenco modeloj</li>
                                    <li><strong>Teksta Resumado</strong> - Generado de resumoj el longaj dokumentoj</li>
                                </ul>

                                <h3>Aliaj Aplikoj</h3>
                                <ul>
                                    <li><strong>Tempa Serio-Antaŭdiro</strong> - Antaŭdirante estontajn valorojn en tempaj datumoj</li>
                                    <li><strong>Anomalio-Detectado</strong> - Identigado de nekutimaj ŝablonoj en datumoj</li>
                                    <li><strong>Rekomend-Sistemoj</strong> - Konstruado de neŭraj rekomendaj motoroj</li>
                                    <li><strong>Aŭdio-Prilitraktado</strong> - Parolo-rekono kaj aŭdio-klasifikado</li>
                                </ul>
                            </div>
                        </div>

                        <!-- GitHub-Projektoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                            <h2 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fab fa-github text-[#FF6F00] mr-3"></i>
                                Projektoj sur GitHub
                            </h2>
                            <div class="content-section">
                                <p>
                                    Kelkaj el miaj TensorFlow profundaj lernadaj projektoj troveblas sur GitHub:
                                </p>
                                <div class="mt-4">
                                    <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                        <i class="fab fa-github mr-2"></i>
                                        <span>SirAndrewGotham sur GitHub</span>
                                    </a>
                                </div>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Mi daŭre laboras pri profundaj lernadaj projektoj kiuj pruvas praktikajn aplikojn
                                    de TensorFlow por komputila vidado, natura lingvo-prilitraktado kaj aliaj AI-taskoj.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Flankmenuo -->
                    <div class="space-y-6">
                        <!-- Proficio-Karto -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-[#FF6F00] mr-2"></i>
                                Proficia Nivelo
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Tuta Proficio</span>
                                        <span class="text-sm font-bold text-[#FF6F00]">65%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                        <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF6F00] to-[#FF8F00]"
                                             data-width="65%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Keras-API</span>
                                        <span class="text-sm font-bold text-green-500">70%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="70%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">CNN-Arkitekturoj</span>
                                        <span class="text-sm font-bold text-blue-500">68%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="68%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">RNN/LSTM-Modeloj</span>
                                        <span class="text-sm font-bold text-purple-500">62%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="62%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Modela Efektivigo</span>
                                        <span class="text-sm font-bold text-red-500">60%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="60%" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Faktoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-lightbulb text-[#FF6F00] mr-2"></i>
                                Rapidaj Faktoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Sperto: <strong>2+ jaroj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-code text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Versio: <strong>TensorFlow 2.13+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-project-diagram text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Projektoj: <strong>10+</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-layer-group text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Arkitekturoj: <strong>8+ tipoj</strong></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-rocket text-[#FF6F00] w-5 mr-3"></i>
                                    <span class="text-sm">Statuso: <strong>Aktiva Lernado</strong></span>
                                </div>
                            </div>
                        </div>

                        <!-- Lernado-Vojo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-graduation-cap text-[#FF6F00] mr-2"></i>
                                Lernado-Vojo
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Bazaj neŭraj retoj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Keras Sekvenca API</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">CNN-arkitekturoj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="text-sm">Transdona lernado</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-spinner text-xs"></i>
                                    </div>
                                    <span class="text-sm">Altanĝitaj RNN-oj</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                        <i class="fas fa-clock text-xs"></i>
                                    </div>
                                    <span class="text-sm">Produktada efektivigo</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rilataj Kompetentoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-network-wired text-[#FF6F00] mr-2"></i>
                                Rilataj Kompetentoj
                            </h3>
                            <div class="space-y-2">
                                <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                        <i class="fab fa-python text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6F00] transition-colors">Python</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% proficienteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                </a>
                                <a href="/competences/scikit-learn" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-[#F7931E] flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-brain text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6F00] transition-colors">Scikit-learn</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">70% proficienteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                </a>
                                <a href="/competences/numpy" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-[#4D77CB] flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-calculator text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6F00] transition-colors">NumPy</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">78% proficienteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                </a>
                                <a href="/competences/matplotlib" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-[#11557C] flex items-center justify-center text-white mr-3">
                                        <i class="fas fa-chart-line text-sm"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="font-medium group-hover:text-[#FF6F00] transition-colors">Matplotlib</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">75% proficienteco</div>
                                    </div>
                                    <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Alvoko al Ago -->
                        <div class="bg-gradient-to-r from-[#FF6F00] to-[#FF8F00] rounded-xl shadow-lg p-6 text-white fade-in">
                            <h3 class="text-lg font-bold mb-2">Ĉu interesita pri kunlaboro?</h3>
                            <p class="text-sm mb-4">Preta diskuti vian profundan lernadan projekton</p>
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF6F00] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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

<x-frontend.layouts.app>
    <div class="w-full pt-20">
        <!-- Ĉefa Sekcio -->
        <section class="py-12 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto text-center fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Andreo Gotema Kariertabelo</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto">
                        Spertplena Full-Stack Programisto kun pli ol 30 jaroj da sperto en reteja evoluigo.
                        Specialiĝanta je kreado de modernaj, skaleblaj retejaj aplikaĵoj kaj backend API-oj uzante Laravel ekosistemon.
                    </p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-briefcase text-primary-500 mr-2"></i>
                            <span>12+ jaroj da sperto</span>
                        </div>
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-project-diagram text-primary-500 mr-2"></i>
                            <span>50+ kompletigitaj projektoj</span>
                        </div>
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-users text-primary-500 mr-2"></i>
                            <spanTeama evoluigo</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhavo de Kariertabelo -->
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                    <!-- Flanka Strio -->
                    <div class="lg:col-span-1 space-y-8 fade-in">
                        <!-- Persona Informo -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 print:shadow-none">
                            <div class="text-center mb-6">
                                <div class="w-24 h-24 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-2xl mx-auto mb-4">
                                    A
                                </div>
                                <h2 class="text-xl font-bold">Андрей Готэм</h2>
                                <p class="text-primary-500">Senior Full-Stack разработчик</p>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <i class="fas fa-envelope text-primary-500 w-5 mr-3"></i>
                                    <a href="mailto:andreogotema@gmail.com" target="_blank" class="text-xs hover:text-primary-500">andreogotema@gmail.com</a>
                                </div>
                                <div class="flex items-center">
                                    <i class="fab fa-telegram-plane text-primary-500 w-5 mr-3"></i>
                                    <a href="https://t.me/SirAndrewGotham" target="_blank" rel="noopener noreferrer" class="text-sm hover:text-primary-500">
                                        <span class="text-sm">@SirAndrewGotham</span>
                                    </a>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-brands fa-square-whatsapp text-primary-500 w-5 mr-3"></i>
                                    <a href="https://wa.me/+77755569244" target="_blank" rel="noopener noreferrer" class="text-sm hover:text-primary-500">
                                        <span class="text-sm">WhatsApp</span>
                                    </a>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary-500 w-5 mr-3"></i>
                                    <span class="text-sm">Россия</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fab fa-github text-primary-500 w-5 mr-3"></i>
                                    <a href="https://github.com/sirandrewgotham" target="_blank" class="text-sm hover:text-primary-500">sirandrewgotham</a>
                                </div>
                            </div>
                        </div>

                        <!-- Rapidaj Statistikoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 print:shadow-none">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-primary-500 mr-2"></i>
                                Ŝlosilaj Metrikoj
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">Laravel</span>
                                        <span class="text-sm font-bold">95%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="95" style="width: 0"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm">PHP</span>
                                        <span class="text-sm font-bold">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="90" style="width: 0"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span>Vue.js/Livewire</span>
                                        <span class="font-bold text-primary-500">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="85" style="width: 0"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <a href="/competences" class="flex items-center justify-center text-primary-500 hover:text-primary-600 font-medium text-sm">
                                    <span>Pli pri kompetentecoj</span>
                                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Lingvoj -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 print:shadow-none">
                            <h3 class="text-lg font-bold mb-4 flex items-center">
                                <i class="fas fa-language text-primary-500 mr-2"></i>
                                Lingvoj
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span>Rusa</span>
                                    <span class="text-primary-500 font-bold">C2</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Angla</span>
                                    <span class="text-primary-500 font-bold">C2</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Esperanto</span>
                                    <span class="text-primary-500 font-bold">C2</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ĉefa Enhavo -->
                    <div class="lg:col-span-3 space-y-8">
                        <!-- Sperta Sekcio -->
                        <section id="experience" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <div class="flex items-center justify-between mb-6">
                                    <h2 class="text-2xl font-bold flex items-center">
                                        <i class="fas fa-briefcase text-primary-500 mr-3"></i>
                                        Labora Sperto
                                    </h2>
                                    <a href="/resume/download" target="_blank" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                                        <i class="fas fa-download mr-2"></i>
                                        <span>Elŝuti Rekomenco PDF</span>
                                    </a>
                                </div>

                                <div class="space-y-8">
                                    <!-- Nuna Laboro -->
                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Programada Inĝeniero</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">2022 - 1 Aprilo 2025</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium mb-3"><a href="https://taris.ru" target="_blank">Taris, Inc.</a></div>
                                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                                            Evoluigo kaj subteno de alteŝarĝa konstruinĝeniera reteja aplikaĵo por urbaj utilaj servoj.
                                            Gvidado de teamo de 5 programistoj, efektivigado de modernaj evoluigaj praktikoj.
                                        </p>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800 dark:text-gray-200">Ŝlosilaj Respondecoj kaj Atinigoj:</h4>
                                            <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>Evoluigo, arkitektura dezajno, praktika konstruado de backend-oj por komercaj servoj en Laravel</li>
                                                <li>Evoluigo, dezajno, konstruado de frontend-oj kun Angular (en la komenca etapo de laboro)</li>
                                                <li>Evoluigo, dezajno, konstruado de datumbazoj por la retejaj projektoj de la kompanio (PostgreSQL, MySQL, SQLite)</li>
                                                <li>Teknika dokumentado de projektoj por programistoj: API kun Swagger</li>
                                                <li>Aŭtomata testado (Pest, Unit), API-testado per Postman, Insomnia</li>
                                                <li>Evoluigo de sistemoj por aliro kaj aŭtorizado por API, inkluzive de aŭtomataj datumkolektaj sistemoj (robotoj/senpilotaj aviadiloj)</li>
                                                <li>Organizado, agordo, administrado de foraj (nubaj) serviloj</li>
                                                <li>DevOps (Ubuntu - Nginx - Postgres)</li>
                                                <li>Github: evoluigo de politikoj kaj reguloj por la teamo, koda revizio, aprobo de kommitoj, ktp.</li>
                                                <li>Evoluigo de internaj korporaciaj reguloj, proceduroj, regularoj por reteja evoluigo</li>
                                                <li>Planado de evoluigo: fiksado de celoj - kontrolo - plenumado de taskoj</li>
                                            </ul>
                                        </div>
                                        <div class="mt-4 flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/laravel">Laravel</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/sanctum">Sanctum</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm">RESTfull API</span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/pest">Pest</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/postman">Postman</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/swagger">Swagger</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm">PostgreSQL</span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/python">Python</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/nginx">Nginx</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm">Integrigo de Email/Telegram Subteno</span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/angular">Angular</a></span>
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-full text-sm"><a href="/competences/typescript">Typescript</a></span>
                                        </div>
                                    </div>

                                    <!-- Antaŭa Laboro -->
                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Reteja Programisto</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">antaŭ 2022</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium mb-3">Privataj Kontraktaj Taskoj</div>
                                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                                            Kreado de retejoj kaj retvendejoj por klientoj el diversaj industrioj.
                                            Laboro pri projektoj de koncepto ĝis lanĉo kaj subteno.
                                        </p>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800 dark:text-gray-200">Ŝlosilaj Atinigoj:</h4>
                                            <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-1">
                                                <li>Evoluigis 15+ sukcesajn projektojn por klientoj el malsamaj komercaj sektoroj</li>
                                                <li>Efektivigis enhavadministran sistemon por neteknikaj uzantoj</li>
                                                <li>Optimumigis SEO-metrikojn, pliigante organikan trafikon je 200%</li>
                                                <li>Integrigis diversajn triapartiajn API-ojn por plibonigita funkcieco</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Kapableca Sekcio -->
                        <section id="skills" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <div class="flex items-center justify-between mb-6">
                                    <h2 class="text-2xl font-bold flex items-center">
                                        <i class="fas fa-tools text-primary-500 mr-3"></i>
                                        Teknikaj Kapablecoj
                                    </h2>
                                    <a href="/competences" class="text-primary-500 hover:text-primary-600 font-medium flex items-center text-sm">
                                        <span>Ĉiuj kompetentecoj</span>
                                        <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <!-- Backend Kapablecoj -->
                                    <div>
                                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                                            <i class="fas fa-server text-primary-500 mr-2"></i>
                                            <a href="/competences/backend" class="hover:text-primary-500 transition-colors group">
                                                Backend Evoluigo
                                                <i class="fas fa-external-link-alt ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                            </a>
                                        </h3>
                                        <div class="space-y-4">
                                            <div>
                                                <div class="flex justify-between mb-1">
                                                    <span>Laravel Framework</span>
                                                    <span class="font-bold text-primary-500">95%</span>
                                                </div>
                                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                    <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="95" style="width: 0"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="flex justify-between mb-1">
                                                    <span>PHP</span>
                                                    <span class="font-bold text-primary-500">90%</span>
                                                </div>
                                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                    <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="90" style="width: 0"></div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>MySQL/PostgreSQL</span>
                                                        <span class="font-bold text-primary-500">88%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="88" style="width: 0"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>REST API</span>
                                                        <span class="font-bold text-primary-500">92%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="92" style="width: 0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Frontend Kapablecoj -->
                                        <div>
                                            <h3 class="text-lg font-semibold mb-4 flex items-center">
                                                <i class="fas fa-desktop text-primary-500 mr-2"></i>
                                                <a href="/competences/frontend" class="hover:text-primary-500 transition-colors group">
                                                    Frontend Evoluigo
                                                    <i class="fas fa-external-link-alt ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                                </a>
                                            </h3>
                                            <div class="space-y-4">
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>Vue.js / Livewire</span>
                                                        <span class="font-bold text-primary-500">85%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="85" style="width: 0"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>Tailwind CSS</span>
                                                        <span class="font-bold text-primary-500">88%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="88" style="width: 0"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>Alpine.js</span>
                                                        <span class="font-bold text-primary-500">82%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="88" style="width: 0"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span>JavaScript/TypeScript</span>
                                                        <span class="font-bold text-primary-500">80%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                        <div class="skill-bar-inner bg-primary-500 h-2 rounded-full" data-width="88" style="width: 0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Iloj kaj Teknologioj -->
                                    <div class="mt-8">
                                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                                            <i class="fas fa-wrench text-primary-500 mr-2"></i>
                                            <a href="/competences/tools" class="hover:text-primary-500 transition-colors group">
                                                Iloj kaj Teknologioj
                                                <i class="fas fa-external-link-alt ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                            </a>
                                        </h3>
                                        <div class="flex flex-wrap gap-3">
                                            <a href="/competences/git" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Git</a>
                                            <a href="/competences/composer" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Composer</a>
                                            <a href="/competences/docker" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Docker</a>
                                            <a href="/competences/npm" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Npm/yarn</a>
                                            <a href="/competences/aws" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">AWS</a>
                                            <a href="/competences/yandex-cloud" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Yandex Cloud</a>
                                            <a href="/competences/nginx" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Nginx</a>
                                            <a href="/competences/phpunit" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">PHPUnit</a>
                                            <a href="/competences/pest" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">Pest</a>
                                            <a href="/competences/db-management-tools" class="px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 rounded-lg hover:bg-primary-200 dark:hover:bg-primary-800/50 transition-colors">DB Administraj Iloj</a>
                                        </div>
                                    </div>

                                    <!-- CTA Karto por Kompetentecoj -->
                                    <div class="mt-8 bg-gradient-to-r from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6 text-center">
                                        <h3 class="text-xl font-bold mb-2">Plena Listo de Kompetentecoj</h3>
                                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                                            Pli ol 50+ teknologioj, iloj kaj metodologioj kun detala priskribo de lernonivelo kaj aplikaj ekzemploj
                                        </p>
                                        <a href="/competences" class="inline-flex items-center px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                                            <i class="fas fa-list-check mr-2"></i>
                                            <span>Malfermi Ĉiujn Kompetentecojn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Kompetenteca Trejnada Sekcio -->
                        <section id="training" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-graduation-cap text-primary-500 mr-1"></i><i class="fas fa-tools text-primary-500 mr-3"></i>
                                    Kompetenteca Trejnado
                                </h2>

                                <div class="space-y-6">
                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Data Scientist/Analizisto kun Python</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">2025</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium"><a href="https://eduprof.mos.ru" target="_blank">GBOU DPO "Centro Profesiulo"</a></div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-2">
                                            Ŝtata profesia lernejo.
                                            Atestilo: Data Scientist, Data Engineer, Data Analyst kun Python.
                                        </p>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">Full-stack Reteja Programisto</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">2022</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium"><a href="https://eduprof.mos.ru" target="_blank">GBOU DPO "Centro Profesiulo"</a></div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-2">
                                            Ŝtata profesia lernejo.
                                            Atestita kiel full-stack reteja programisto kun kompetentecoj en frontend kaj backend evoluigo, CSS kadroj, PHP programado, reteja evoluiga procezo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Edukada Sekcio -->
                        <section id="education" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-graduation-cap text-primary-500 mr-3"></i>
                                    Edukado
                                </h2>

                                <div class="space-y-6">
                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">D.Sc.</h3>
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">1988 - 1990</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium">Moskova Mina Instituto</div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-2">
                                            Mina Inĝeniero.<br />
                                            Specialiĝo: praktikaj studoj pri roka stabileco por subteraj laboroj, komputaj analizoj.
                                        </p>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                            <h3 class="text-xl font-semibold">B.Sc., M.Sc.</h3><br />
                                            <span class="text-primary-500 font-medium bg-primary-50 dark:bg-primary-900/30 px-3 py-1 rounded-full text-sm md:mt-1">1980 - 1985</span>
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400 font-medium">Moskova Mina Instituto</div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-2">
                                            Mina Inĝeniero.
                                            Specialiĝo: praktikaj studoj pri roka stabileco por subteraj laboroj.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Atestila Sekcio -->
                        <section id="certificates" class="fade-in">
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 print:shadow-none">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-award text-primary-500 mr-3"></i>
                                    Atestiloj kaj Atinigoj
                                </h2>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                            <i class="fab fa-laravel"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Data Analyst kun Python</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">Data Analyst Trejnada Programo • 2025</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                                            <i class="fab fa-aws"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">Full Stack Reteja Programisto</h4>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">Full Stack Web Developer Trejnada Programo • 2022</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>

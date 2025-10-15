<section id="home" class="min-h-screen flex items-center pt-20 pb-16 overflow-hidden w-full">
    <div class="w-full relative">
        <!-- Carousel -->
        <div class="relative h-screen w-full">
            <!-- Carousel Item 1 -->
            <div x-show="carouselActive === 0" x-transition:enter="carousel-fade" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                 class="absolute inset-0 bg-cover bg-center bg-no-repeat w-full h-full"
                 style="background-image: url('{{ asset('assets/frontend/img/carousel/bg1.png') }}')">
                <div class="absolute inset-0 bg-black w-full h-full" style="background-color: rgba(0, 0, 0, 0.4);"></div>
                <div class="fluid-container h-full flex items-center">
                    <div class="w-full text-center text-white fade-in">
                        <h1 class="text-4xl md:text-6xl font-bold mb-6">
                            <span class="block">Любовь и забота</span>
                        </h1>
                        <p class="text-xl md:text-2xl mb-10 w-full max-w-4xl mx-auto">
                            Должен сказать, я люблю то, что делаю. Я всегда интересовался компьютерами, и занимался ими, и уже в середине 1980-х начал программировать, перейдя к Веб-разработкам, когда родился Интернет. И с тех пор я постоянно впитываю и применяю на практике новые технологии и способы их использования.
                        </p>
                        <a href="#resume" class="px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            Подробнее - в моем резюме
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 2 -->
            <div x-show="carouselActive === 1" x-transition:enter="carousel-fade" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                 class="absolute inset-0 bg-cover bg-center bg-no-repeat w-full h-full"
                 style="background-image: url('/assets/frontend/img/carousel/bg2.jpg')">
                <div class="absolute inset-0 bg-black w-full h-full" style="background-color: rgba(0, 0, 0, 0.4);"></div>
                <div class="fluid-container h-full flex items-center">
                    <div class="w-full text-center text-white fade-in">
                        <h1 class="text-4xl md:text-6xl font-bold mb-6">
                            <span class="block">Laravel - мой выбор</span>
                        </h1>
                        <p class="text-xl md:text-2xl mb-10 w-full max-w-4xl mx-auto">
                            Laravel - это фреймворк, который я выбрал для своих проектов. Его элегантный синтаксис, мощные возможности и активное сообщество делают его идеальным инструментом для создания современных веб-приложений.
                        </p>
                        <a href="#works" class="px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            Смотреть портфолио
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 3 -->
            <div x-show="carouselActive === 2" x-transition:enter="carousel-fade" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                 class="absolute inset-0 bg-cover bg-center bg-no-repeat w-full h-full"
                 style="background-image: url('/assets/frontend/img/carousel/bg3.jpg')">
                <div class="absolute inset-0 bg-black w-full h-full" style="background-color: rgba(0, 0, 0, 0.4);"></div>
                <div class="fluid-container h-full flex items-center">
                    <div class="w-full text-center text-white fade-in">
                        <h1 class="text-4xl md:text-6xl font-bold mb-6">
                            <span class="block">Качество и надежность</span>
                        </h1>
                        <p class="text-xl md:text-2xl mb-10 w-full max-w-4xl mx-auto">
                            Я стремлюсь создавать решения, которые не только красиво выглядят, но и работают безупречно. Каждый проект - это тщательно продуманная архитектура, чистый код и внимание к деталям.
                        </p>
                        <a href="#contacts" class="px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            Связаться со мной
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <div class="absolute bottom-10 left-0 right-0 flex justify-center space-x-3">
            <template x-for="i in carouselItems" :key="i">
                <button @click="setCarousel(i-1)"
                        class="w-3 h-3 rounded-full transition-colors"
                        :class="carouselActive === i-1 ? 'bg-white' : 'bg-white/50'"></button>
            </template>
        </div>
    </div>
</section>

<x-layout>
    <section class="bg-gray-200">
        <div class="swiper-container overflow-hidden relative">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide min-w-full flex flex-col items-start relative">
                    <img src="assets/images/test.jpg"
                        class="w-full h-[20vh] sm:h-[40vh] md:h-[50vh] lg:h-[60vh] object-cover">
                    <div
                        class="container mx-auto absolute top-[3%] sm:-top-[30%] md:top-[40%] lg:top-1/2 left-8 sm:left-16 md:left-24 lg:left-48 
           bg-white/90 p-4 w-[90%] sm:w-[80%] md:w-[60%] lg:w-[40%] 
           opacity-0 translate-y-10 transition-all duration-1000 ease-out contenu">
                        <h2 class="text-[14px] sm:text-xl md:text-2xl font-bold text-blue-900">
                            Forum international du développement
                        </h2>
                        <p class="mt-2 text-[12px] sm:text-sm md:text-lg text-gray-700 mb-3">
                            Les leaders mondiaux réunis pour discuter des solutions innovantes. Les leaders mondiaux
                            réunis pour discuter des solutions innovantes. Les leaders mondiaux réunis pour discuter des
                            solutions innovantes. Les leaders mondiaux réunis pour discuter des solutions innovantes.
                        </p>
                        <a href="#"
                            class="text-[12px] sm:text-sm md:text-lg mt-4 px-4 py-[2px] sm:px-5 sm:py-2 md:px-6 md:py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800">
                            En savoir plus
                        </a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide min-w-full flex flex-col items-start relative">
                    <img src="assets/images/test2.jpg"
                        class="w-full h-[20vh] sm:h-[40vh] md:h-[50vh] lg:h-[60vh] object-cover">
                    <div
                        class="container mx-auto absolute top-[3%] sm:-top-[30%] md:top-[40%] lg:top-1/2 left-8 sm:left-16 md:left-24 lg:left-48 
           bg-white/90 p-4 w-[90%] sm:w-[80%] md:w-[60%] lg:w-[40%] 
           opacity-0 translate-y-10 transition-all duration-1000 ease-out contenu">
                        <h2 class="text-[14px] sm:text-xl md:text-2xl font-bold text-blue-900">
                            Innovation et Technologie
                        </h2>
                        <p class="mt-2 text-[12px] sm:text-sm md:text-lg text-gray-700 mb-3">
                            Découvrez les dernières avancées technologiques pour un avenir durable.
                        </p>
                        <a href="#"
                            class="text-[12px] sm:text-sm md:text-lg mt-4 px-4 py-[2px] sm:px-5 sm:py-2 md:px-6 md:py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>

            <!-- Boutons de navigation -->
            <button class="swiper-button-prev text-white bg-gray-800/50 p-2 rounded-md hover:bg-gray-700"></button>
            <button class="swiper-button-next text-white bg-gray-800/50 p-2 rounded-md hover:bg-gray-700"></button>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="container mx-auto px-4 lg:grid lg:grid-cols-4 lg:gap-4 pt-2">
        <div
            class="p-4 border w-full mb-4 md:mx-3  lg:mx-5 md:mb-3 lg:mb-5 flex items-center gap-20 lg:grid lg:grid-cols-4 lg:gap-4 border-gray-300">
            <a href="#">
                <span class="border rounded-full p-3 text-[16px] border-blue-900">
                    <i class="fa-brands fa-facebook text-blue-900 hover:text-blue-800"></i>
                </span>
            </a>
            <a href="#">
                <span class="border rounded-full p-3 text-[16px] border-blue-900">
                    <i class="fa-brands fa-x-twitter  text-blue-900 hover:text-blue-800"></i>
                </span>
            </a>
            <a href="#">
                <span class="border rounded-full p-3 text-[16px] border-blue-900">
                    <i class="fa-brands fa-instagram  text-blue-900 hover:text-blue-800"></i>
                </span>
            </a>
            <a href="#">
                <span class="border rounded-full p-3 text-[16px] border-blue-900">
                    <i class="fa-brands fa-youtube  text-blue-900 hover:text-blue-800"></i>
                </span>
            </a>
        </div>
        <div class="p-4 border w-full mb-4 md:mx-3 lg:mx-5 md:mb-3 lg:mb-5 border-gray-300">
            <a href="#" class="flex items-center gap-6">
                <i class="fa-solid fa-photo-film text-3xl  text-blue-900 hover:text-blue-800 "></i>
                <div>
                    <h1 class="text-md font-bold">Banque mutimédia</h1>
                    <p class="text-sm">Voir les grands travaux su MTPTC</p>
                </div>
            </a>
        </div>
        <div class="p-4 border w-full mb-3 md:mx-3 lg:mx-5 md:mb-3 lg:mb-5 border-gray-300">
            <a href="#" class="flex items-center gap-6">
                <i class="fa-solid fa-envelope-open-text text-3xl  text-blue-900 hover:text-blue-800"></i>
                <div>
                    <h1 class="text-md font-bold">Appel d'offres</h1>
                    <p class="text-sm">Voir nos appels d'offres</p>
                </div>
            </a>
        </div>
        <div class="p-4 border w-full mb-3 md:mx-3 lg:mx-5 md:mb-3 lg:mb-5 border-gray-300">
            <a href="#" class="flex items-center gap-6">
                <i class="fa-solid fa-building text-3xl  text-blue-900 hover:text-blue-800"></i>
                <div>
                    <h1 class="text-md font-bold">Guide de construction et réparation</h1>
                    <p class="text-sm">Voir nos guides de construction et répations</p>
                </div>
            </a>
        </div>
    </section>
    <section class="mt-5">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row justify-between items-center border-b-[3px] border-black p-1">
                <div
                    class="flex items-center flex-col lg:flex-row lg:justify-start space-x-0 lg:space-x-4 text-center lg:text-left">
                    <h2 class="text-sm font-bold text-third_color uppercase">Actualités du MTPTC</h2>
                </div>
                <div
                    class="flex-col lg:flex-row items-center mt-4 lg:mt-0 space-y-2 lg:space-y-0 lg:space-x-4 flex  lg:flex ">
                    <i class="fa-solid fa-magnifying-glass text-sm leading-6"></i>
                    <a href="#" class="text-sm underline">Toutes l'actualités</a>
                </div>
            </div>
            <!--Actualités -->
            <div class="w-full grid grid-cols-1 md:grid-cols-2 mt-2 mb-10 ">
                <div class="flex gap-6 border-r-[1px] border-gray m-2">
                    <a href="">
                        <div class=" border-r-[1px] pr-3 ml-1 border-r-gray-200">
                            <img src="assets/images/cover.jpg"
                                class=" h-[14vh] sm:h-[50vh] md:h-[50vh]  lg:h-[18vh]  object-cover mb-2" />
                            <p class="text-[11px] italic font-bold">1/01/1804</p>
                            <h2 class="text-[14px] font-roboto font-bold">Visite du ministre</h2>
                        </div>
                    </a>
                    <div>
                        <div class="mb-4 border-b-[1px] border-gray p-1 ">
                            <p class="text-[11px] italic font-bold">1/01/1804</p>
                            <h2 class="text-[14px] font-roboto font-bold">Visite du ministre Visite du ministre Visite
                                du ministre </h2>
                        </div>
                        <div class="mb-5 border-b-[1px] border-gray p-1">
                            <p class="text-[11px] italic font-bold">1/01/1804</p>
                            <h2 class="text-[14px] font-roboto font-bold">Visite du ministre</h2>
                        </div>
                        <div class="mb-5 border-b-[1px] border-gray p-1">
                            <p class="text-[11px] italic font-bold">1/01/1804</p>
                            <h2 class="text-[14px] font-roboto font-bold">Visite du ministre</h2>
                        </div>
                    </div>
                </div>
                <div class="flex gap-6 border-r-[1px] border-gray m-2">
                    <a href="">
                        <div class=" border-r-[1px] pr-3 ml-1 border-r-gray-200">
                            <img src="assets/images/cover.jpg"
                                class=" h-[14vh] sm:h-[50vh] md:h-[50vh]  lg:h-[18vh]  object-cover mb-2" />
                            <p class="text-[11px] italic font-bold">1/01/1804</p>
                            <h2 class="text-[14px] font-roboto font-bold">Visite du ministre</h2>
                        </div>
                    </a>
                    <div>
                        <div class="mb-4 border-b-[1px] border-gray p-1 ">
                            <p class="text-[11px] italic font-bold">1/01/1804</p>
                            <h2 class="text-[14px] font-roboto font-bold">Visite du ministre Visite du ministre Visite
                                du ministre </h2>
                        </div>
                        <div class="mb-5 border-b-[1px] border-gray p-1">
                            <p class="text-[11px] italic font-bold">1/01/1804</p>
                            <h2 class="text-[14px] font-roboto font-bold">Visite du ministre</h2>
                        </div>
                        <div class="mb-5 border-b-[1px] border-gray p-1">
                            <p class="text-[11px] italic font-bold">1/01/1804</p>
                            <h2 class="text-[14px] font-roboto font-bold">Visite du ministre</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!--Nos Directions -->
            <div class="flex flex-col lg:flex-row justify-between items-center  p-2">
                <div
                    class="flex items-center flex-col lg:flex-row lg:justify-start space-x-0 lg:space-x-4 text-center lg:text-left">
                    <h2 class="text-sm font-bold text-third_color uppercase">Nos Directions</h2>
                </div>
                <div
                    class="flex-col lg:flex-row lg:items-center  mt-4 lg:mt-0 space-y-2 lg:space-y-0 lg:space-x-4 flex lg:flex ">
                    <ul class="flex flex-wrap items-center gap-2">
                        <li onclick="toggleImageDropdown('dg')"
                            class="px-2 bg-primary_color p-1 text-white rounded-full border-secondary_color cursor-pointer">
                            Direction
                            Générale</li>
                        <li onclick="toggleImageDropdown('da')"
                            class="px-2 p-1 text-black rounded-full border border-secondary_color hover:bg-primary_color hover:text-white cursor-pointer">
                            Direction
                            Administrative</li>
                        <li onclick="toggleImageDropdown('dtp')"
                            class="px-2 p-1 text-black rounded-full border border-secondary_color hover:bg-primary_color hover:text-white cursor-pointer">
                            Direction des Travaux
                            Publics</li>
                        <li onclick="toggleImageDropdown('ddt')"
                            class="px-2 p-1 text-black rounded-full border border-secondary_color hover:bg-primary_color hover:text-white cursor-pointer">
                            Direction des
                            Transports</li>
                        <li onclick="toggleImageDropdown('ddc')"
                            class="px-2 p-1 text-black rounded-full border border-secondary_color hover:bg-primary_color hover:text-white cursor-pointer">
                            Direction des
                            Communications</li>
                    </ul>
                </div>
            </div>
            <div class="">
                <div id="dg" class="min-w-full flex flex-col items-start relative direction">
                    <img src="assets/images/test.jpg"
                        class="w-full  h-[20vh] sm:h-[40vh] md:h-[50vh] lg:h-[60vh]  object-cover">
                    <div id="contenu"
                        class="container mx-auto flex  items-center absolute top-[30%] sm:-top-[30%] md:top-[40%] lg:top-1/2 left-8 sm:left-16 md:left-24 lg:left-48 bg-white/90 p-4 w-[90%] sm:w-[80%] md:w-[60%] lg:w-[40%] transition-transform duration-1000 ease-in-out">
                        <div>
                            <h2 class="text-[14px] sm:text-xl md:text-2xl font-bold text-blue-900">
                                Forum international du développement
                            </h2>
                            <p class="mt-2 text-[12px] sm:text-sm md:text-lg text-gray-700">
                                Les leaders mondiaux réunis pour discuter des solutions innovantes.
                            </p>
                        </div>
                        <div>
                            <a href="#"
                                class="absolute right-4 top-1/2 transform -translate-y-1/2  text-gray-700 p-2 rounded-md">
                                <i class="fa-solid fa-chevron-right text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="da" class="min-w-full  flex-col items-start relative hidden direction">
                    <img src="assets/images/test.jpg"
                        class="w-full  h-[20vh] sm:h-[40vh] md:h-[50vh] lg:h-[60vh]  object-cover">
                    <div id="contenu"
                        class="container mx-auto flex  items-center absolute top-[30%] sm:-top-[30%] md:top-[40%] lg:top-1/2 left-8 sm:left-16 md:left-24 lg:left-48 bg-white/90 p-4 w-[90%] sm:w-[80%] md:w-[60%] lg:w-[40%] transition-transform duration-1000 ease-in-out">
                        <div>
                            <h2 class="text-[14px] sm:text-xl md:text-2xl font-bold text-blue-900">
                                Forum international du développement
                            </h2>
                            <p class="mt-2 text-[12px] sm:text-sm md:text-lg text-gray-700">
                                Les leaders mondiaux réunis pour discuter des solutions da.
                            </p>
                        </div>
                        <div>
                            <a href="#"
                                class="absolute right-4 top-1/2 transform -translate-y-1/2  text-gray-700 p-2 rounded-md">
                                <i class="fa-solid fa-chevron-right text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="dtp" class="min-w-full  flex-col items-start relative hidden direction">
                    <img src="assets/images/test.jpg"
                        class="w-full  h-[20vh] sm:h-[40vh] md:h-[50vh] lg:h-[60vh]  object-cover">
                    <div id="contenu"
                        class="container mx-auto flex  items-center absolute top-[30%] sm:-top-[30%] md:top-[40%] lg:top-1/2 left-8 sm:left-16 md:left-24 lg:left-48 bg-white/90 p-4 w-[90%] sm:w-[80%] md:w-[60%] lg:w-[40%] transition-transform duration-1000 ease-in-out">
                        <div>
                            <h2 class="text-[14px] sm:text-xl md:text-2xl font-bold text-blue-900">
                                Forum international du développement
                            </h2>
                            <p class="mt-2 text-[12px] sm:text-sm md:text-lg text-gray-700">
                                Les leaders mondiaux réunis pour discuter des solutions innovantes dtp.
                            </p>
                        </div>
                        <div>
                            <a href="#"
                                class="absolute right-4 top-1/2 transform -translate-y-1/2  text-gray-700 p-2 rounded-md">
                                <i class="fa-solid fa-chevron-right text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="ddt" class="min-w-full  flex-col items-start relative hidden direction">
                    <img src="assets/images/test.jpg"
                        class="w-full  h-[20vh] sm:h-[40vh] md:h-[50vh] lg:h-[60vh]  object-cover">
                    <div id="contenu"
                        class="container mx-auto flex  items-center absolute top-[30%] sm:-top-[30%] md:top-[40%] lg:top-1/2 left-8 sm:left-16 md:left-24 lg:left-48 bg-white/90 p-4 w-[90%] sm:w-[80%] md:w-[60%] lg:w-[40%] transition-transform duration-1000 ease-in-out">
                        <div>
                            <h2 class="text-[14px] sm:text-xl md:text-2xl font-bold text-blue-900">
                                Forum international du développement
                            </h2>
                            <p class="mt-2 text-[12px] sm:text-sm md:text-lg text-gray-700">
                                Les leaders mondiaux réunis pour discuter des solutions innovantes ddt.
                            </p>
                        </div>
                        <div>
                            <a href="#"
                                class="absolute right-4 top-1/2 transform -translate-y-1/2  text-gray-700 p-2 rounded-md">
                                <i class="fa-solid fa-chevron-right text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="ddc" class="min-w-full  flex-col items-start relative hidden direction">
                    <img src="assets/images/test.jpg"
                        class="w-full  h-[20vh] sm:h-[40vh] md:h-[50vh] lg:h-[60vh]  object-cover">
                    <div id="contenu"
                        class="container mx-auto flex  items-center absolute top-[30%] sm:-top-[30%] md:top-[40%] lg:top-1/2 left-8 sm:left-16 md:left-24 lg:left-48 bg-white/90 p-4 w-[90%] sm:w-[80%] md:w-[60%] lg:w-[40%] transition-transform duration-1000 ease-in-out">
                        <div>
                            <h2 class="text-[14px] sm:text-xl md:text-2xl font-bold text-blue-900">
                                Forum international du développement
                            </h2>
                            <p class="mt-2 text-[12px] sm:text-sm md:text-lg text-gray-700">
                                Les leaders mondiaux réunis pour discuter des solutions innovantes ddc.
                            </p>
                        </div>
                        <div>
                            <a href="#"
                                class="absolute right-4 top-1/2 transform -translate-y-1/2  text-gray-700 p-2 rounded-md">
                                <i class="fa-solid fa-chevron-right text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </section>
    <section class="bg-gray-100 py-10 mt-5">
        <div class="container mx-auto">
            <h2 class="text-center text-2xl font-bold uppercase mb-10 text-third_color">Nos Partenaires</h2>
            <!-- Swiper Container -->
            <div class="swiper mySwiper mb-10">
                <div class="swiper-wrapper">
                    <!-- Exemple de logos -->
                    <div class="swiper-slide">
                        <a href="https://www.partenaire1.com" target="_blank">
                            <img src="logo1.png" alt="Partenaire 1" class="w-32 mx-auto">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.partenaire2.com" target="_blank">
                            <img src="logo2.png" alt="Partenaire 2" class="w-32 mx-auto">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.partenaire3.com" target="_blank">
                            <img src="logo3.png" alt="Partenaire 3" class="w-32 mx-auto">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.partenaire3.com" target="_blank">
                            <img src="logo3.png" alt="Partenaire 3" class="w-32 mx-auto">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.partenaire3.com" target="_blank">
                            <img src="logo3.png" alt="Partenaire 3" class="w-32 mx-auto">
                        </a>
                    </div>
                    <!-- Ajoute d'autres logos si nécessaire -->
                </div>
                <!-- Boutons de navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</x-layout>

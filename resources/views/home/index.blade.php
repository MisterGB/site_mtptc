<x-layout>
    <section class="bg-gray-200">
        <div class="overflow-hidden">
            <div id="carousel-inner" class="flex transition-transform duration-700 ease-in-out">
                <div class="min-w-full flex flex-col items-start relative">
                    <img src="assets/images/test.jpg"
                        class="w-full  h-[20vh] sm:h-[40vh] md:h-[50vh] lg:h-[60vh]  object-cover">
                    <div id="contenu"
                        class="container mx-auto absolute top-[3%] sm:-top-[30%] md:top-[40%] lg:top-1/2 left-8 sm:left-16 md:left-24 lg:left-48 bg-white/90 p-4 w-[90%] sm:w-[80%] md:w-[60%] lg:w-[40%] transition-transform duration-1000 ease-in-out">
                        <h2 class="text-[14px] sm:text-xl md:text-2xl font-bold text-blue-900">
                            Forum international du développement
                        </h2>
                        <p class="mt-2 text-[12px] sm:text-sm md:text-lg text-gray-700">
                            Les leaders mondiaux réunis pour discuter des solutions innovantes. Les leaders mondiaux
                            réunis pour discuter des solutions innovantes. Les leaders mondiaux réunis pour discuter des
                            solutions innovantes. Les leaders mondiaux réunis pour discuter des solutions innovantes.
                        </p>
                        <button
                            class="text-[12px] sm:text-sm md:text-lg mt-4 px-4 py-[2px] sm:px-5 sm:py-2 md:px-6 md:py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800">
                            En savoir plus
                        </button>
                    </div>
                </div>
                <!-- Boutons de navigation -->
                <button id="prev"
                    class="absolute left-4 top-1/3 transform -translate-y-1/2 bg-gray-800/50 text-white p-2 rounded-md hover:bg-gray-700">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button id="next"
                    class="absolute right-4 top-1/3 transform -translate-y-1/2 bg-gray-800/50 text-white p-2 rounded-md hover:bg-gray-700">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
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
            <div class="flex flex-col lg:flex-row justify-between items-center border-b-[3px] border-black p-2">
                <div
                    class="flex items-center flex-col lg:flex-row lg:justify-start space-x-0 lg:space-x-4 text-center lg:text-left">
                    <h2 class="text-sm font-bold text-third_color">Actualités du MTPTC</h2>
                </div>
                <div
                    class="flex-col lg:flex-row items-center mt-4 lg:mt-0 space-y-2 lg:space-y-0 lg:space-x-4 flex  lg:flex ">
                    <i class="fa-solid fa-magnifying-glass text-sm leading-6"></i>
                    <a href="#" class="text-sm underline">Toutes l'actualités</a>
                </div>
            </div>
            <div class="max-w-6xl grid grid-cols-1 md:grid-cols-2 mt-2 mb-96">
                <div class="flex gap-6">
                    <a href="">
                        <div class=" border-r-[1px] pr-3 border-r-gray-200">
                            <img src="assets/images/cover.jpg"
                                class=" h-[2vh] sm:h-[40vh] md:h-[50vh] lg:h-[18vh]  object-cover mb-2" />
                            <p class="text-[11px] italic font-bold">1/01/1804</p>
                            <h2 class="text-[14px] font-roboto font-bold">Visite du ministre</h2>
                        </div>
                    </a>
                    <div>
                        <h2>Annonces</h2>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </section>
</x-layout>

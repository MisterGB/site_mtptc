<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 p-0 bg-gray-100 font-roboto">
    <header class="bg-primary_color text-white">
        <div class="container mx-auto px-4 py-1">
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <div
                    class="flex items-center flex-col lg:flex-row lg:justify-start space-x-0 lg:space-x-4 text-center lg:text-left">
                    <img src="assets/logo/palmisteLogo.gif" class="pt-1 w-14 h-14" alt="Logo" />
                    <div>
                        <h1 class="text-2xl font-bold">MPTPC</h1>
                        <p class="text-sm">Ministère des Travaux Publics, Transports et Communications</p>
                    </div>
                </div>
                <div
                    class="flex-col lg:flex-row items-center mt-4 lg:mt-0 space-y-2 lg:space-y-0 lg:space-x-4 flex  lg:flex ">
                    <form action="/">
                        <div class="bg-white rounded-full">
                            <input type="text" placeholder="Recherche ..."
                                class="px-5 py-1 rounded-full border-none text-gray-500 focus:border-none ">
                            <button class=" text-gray-500 mr-3">
                                <i class="fa-solid fa-magnifying-glass text-sm leading-6"></i>
                            </button>
                        </div>
                    </form>
                    <div>
                        <button
                            class="inline-flex justify-center items-center w-full px-2 py-1 bg-gray-200 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "
                            id="dropdownMenuButton" onclick="toggleDropdown()" aria-expanded="false">
                            FR
                            <img src="https://flagcdn.com/w40/fr.png" alt="Drapeau français" class="w-4 h-4  ml-2">
                        </button>
                        <div id="dropdownMenu"
                            class="absolute  mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                            <ul class="py-1">
                                <li>
                                    <a href="/"
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <img src="https://flagcdn.com/w40/fr.png" alt="Drapeau français"
                                            class="w-5 h-5 mr-2">
                                        <span>Français</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/cr/"
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <img src="https://flagcdn.com/w40/ht.png" alt="Drapeau haïtien"
                                            class="w-5 h-5 mr-2">
                                        <span>Kreyòl Ayisyen</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue-800">
            <div class="container mx-auto lg:px-4">
                <button id="menu-toggle" class="text-white lg:hidden focus:outline-none hover:bg-primary_color">
                    <i class="fas fa-bars text-4xl p-1"></i>
                </button>
                <nav id="menu" class="lg:flex lg:space-x-20 lg:mt-2 flex-col lg:flex-row lg:items-center hidden">
                    <ul class="lg:flex lg:items-center sm:m-0 ">
                        <li class="lg:px-6 px-2 py-2 lg:mr-6 hover:bg-primary_color">
                            <a href="#">Acceuil</a>
                        </li>
                        <li class="lg:px-6 px-2 py-2 lg:mr-6 relative group hover:bg-primary_color">
                            <a href="#">Missions</a>
                            <ul
                                class="lg:absolute  opacity-80 top-10 left-0 right-0 lg:w-56 lg:hidden hidden group-hover:block bg-blue-800 hover:bg-primary_color ">
                                <li class=" py-2 hover:bg-blue-400 px-2">
                                    <a href="#">Mission 1</a>
                                </li>
                                <li class="py-2 hover:bg-blue-400 px-2">
                                    <a href="#">Mission 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="lg:px-6 px-2 py-2 lg:mr-6 hover:bg-primary_color">
                            <a href="#">Défis</a>
                        </li>
                        <li class="lg:px-6 px-2 py-2 lg:mr-6 hover:bg-primary_color">
                            <a href="#">Services</a>
                        </li>
                        <li class="lg:px-6 px-2 py-2 lg:mr-6 hover:bg-primary_color">
                            <a href="#">Projets</a>
                        </li>
                        <li class="lg:px-6 px-2 py-2 lg:mr-6 hover:bg-primary_color">
                            <a href="#">Partenaires</a>
                        </li>
                        <li class="lg:px-6 px-2 py-2 lg:mr-6 relative group hover:bg-primary_color">
                            <a href="#">Actualités</a>
                            <ul
                                class="lg:absolute  opacity-80 top-10 left-0 right-0 lg:w-56 lg:hidden hidden group-hover:block bg-blue-800 hover:bg-primary_color ">
                                <li class=" py-2 hover:bg-blue-400 px-2">
                                    <a href="#">Actualités 1</a>
                                </li>
                                <li class="py-2 hover:bg-blue-400 px-2">
                                    <a href="#">Actualités 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="lg:px-6 px-2 py-2 lg:mr-6 hover:bg-primary_color">
                            <a href="#">Recrutements</a>
                        </li>
                        <li class="lg:px-6 px-2 py-2 lg:mr-6 hover:bg-primary_color">
                            <a href="#">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="bg-gray-200">
        <div id="carousel" class="relative  mx-auto overflow-hidden">
            <!-- Conteneur des slides -->
            <div id="carousel-inner" class="flex transition-transform duration-700 ease-in-out">
                <!-- Slide 1 -->
                <div class="min-w-full flex flex-col items-center relative">
                    <img src="assets/images/test.jpg" class="w-full h-auto object-cover">
                    <div id="contenu"
                        class="absolute top-3/4 left-1/3 transform -translate-x-[55%] -translate-y-1/2 bg-white/70 p-4">
                        <h2 class="text-2xl font-bold text-blue-900">
                            Rencontre du président Leslie Voltaire avec le Ministre du MPTPC
                        </h2>
                        <p class="mt-2 text-gray-700">
                            Découvrez les dernières actions et engagements de notre ministère.
                        </p>
                        <button class="mt-4 px-6 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800">
                            En savoir plus
                        </button>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="min-w-full flex flex-col items-center relative">
                    <img src="assets/images/test2.jpg" class="w-full h-auto object-cover">
                    <div id="contenu"
                        class="absolute top-3/4 left-1/3 transform -translate-x-[55%] -translate-y-1/2 bg-white/70 p-4 rounded-lg">
                        <h2 class="text-2xl font-bold text-blue-900">
                            Conférence économique nationale
                        </h2>
                        <p class="mt-2 text-gray-700">
                            Les grandes réformes pour un avenir durable.
                        </p>
                        <button class="mt-4 px-6 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800">
                            En savoir plus
                        </button>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="min-w-full flex flex-col items-center relative">
                    <img src="assets/images/test3.jpg" class="w-full h-auto object-cover">
                    <div id="contenu"
                        class="absolute top-3/4 left-1/3 transform -translate-x-[55%] -translate-y-1/2 bg-white/70 p-4 rounded-lg">
                        <h2 class="text-2xl font-bold text-blue-900">
                            Forum international du développement
                        </h2>
                        <p class="mt-2 text-gray-700">
                            Les leaders mondiaux réunis pour discuter des solutions innovantes.
                        </p>
                        <button class="mt-4 px-6 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800">
                            En savoir plus
                        </button>
                    </div>
                </div>
            </div>

            <!-- Boutons de navigation -->
            <button id="prev"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800/50 text-white p-2 rounded-full hover:bg-gray-700">
                ◀
            </button>
            <button id="next"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800/50 text-white p-2 rounded-full hover:bg-gray-700">
                ▶
            </button>
        </div>
    </section>
</body>

</html>

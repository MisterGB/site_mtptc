<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 p-0  font-roboto">
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
                            class="absolute  mt-2  z-50 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
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
        <div class="bg-gray_color">
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
                                class="lg:absolute z-10  opacity-80 top-10 left-0 right-0 lg:w-56 lg:hidden hidden group-hover:block bg-primary_color   hover:bg-primary_color ">
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
                                class="lg:absolute z-10  opacity-80 top-10 left-0 right-0 lg:w-56 lg:hidden hidden group-hover:block bg-primary_color  hover:bg-primary_color ">
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
    <main>
        {{ $slot }}
    </main>
    <footer class="bg-gray-900 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Colonne 1 : Logo & Description -->
                <div>
                    <h2 class="text-xl font-bold">Mission</h2>
                    <p class="mt-2 text-gray-400 text-sm">
                        Votre partenaire en développement web et solutions digitales innovantes.
                    </p>
                </div>

                <!-- Colonne 2 : Liens utiles -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Liens utiles</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-blue-400">À propos</a></li>
                        <li><a href="#" class="hover:text-blue-400">Nos services</a></li>
                        <li><a href="#" class="hover:text-blue-400">Projets</a></li>
                        <li><a href="#" class="hover:text-blue-400">Contact</a></li>
                    </ul>
                </div>

                <!-- Colonne 3 : Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Nos services</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-blue-400">Développement Web</a></li>
                        <li><a href="#" class="hover:text-blue-400">Applications Mobiles</a></li>
                        <li><a href="#" class="hover:text-blue-400">Intelligence Artificielle</a></li>
                        <li><a href="#" class="hover:text-blue-400">SEO & Marketing</a></li>
                    </ul>
                </div>

                <!-- Colonne 4 : Contact -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Contact</h3>
                    <p class="text-gray-400 text-sm">Adresse : 29 Rue Toussaint Louverture, Delmas 33, Haiti</p>
                    <p class="text-gray-400 text-sm">Email : contact@mtptc.gouv.ht</p>
                    <p class="text-gray-400 text-sm">Téléphone : +509 1234 5678</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-blue-400 text-xl">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 text-xl">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 text-xl">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 text-xl">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Ligne de séparation -->
            <div class="border-t border-gray-700 mt-6 pt-4 text-center text-gray-400 text-sm">
                © 2025 MTPTC. Tous droits réservés.
                <br>
                <span class="text-gray-500">Site conçu par <a href="#"
                        class="text-gray-400 hover:underline">Media Dev Solutionss</a></span>
            </div>
        </div>
    </footer>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>

import "./bootstrap";

// Import Font Awesome's CSS
import "@fortawesome/fontawesome-free/css/all.min.css";

const menuToggle = document.getElementById("menu-toggle");
const menu = document.getElementById("menu");
menuToggle.addEventListener("click", () => {
    menu.classList.toggle("hidden"); // Affiche ou masque le menu
});

// Permet de fermer et ouvrir le menu lang
window.toggleDropdown = function () {
    const dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.classList.toggle("hidden");
};

// Fermer le menu si on clique en dehors
document.addEventListener("click", function (event) {
    const dropdown = document.getElementById("dropdownMenu");
    const button = document.getElementById("dropdownMenuButton");

    if (!dropdown.contains(event.target) && !button.contains(event.target)) {
        dropdown.classList.add("hidden");
    }
});
// Fin fonction
// Fontion pour affichage image de la partie direction
window.toggleImageDropdown = function (imageId) {
    // Masquer toutes les images
    document
        .querySelectorAll(".direction")
        .forEach((img) => img.classList.add("hidden"));

    // Afficher ou masquer l'image sélectionnée
    let img = document.getElementById(imageId);
    img.classList.toggle("hidden");
};
// Slide caroussel partenaires
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3, // Nombre de logos visibles
    spaceBetween: 30, // Espacement entre les logos
    loop: true, // Permet le défilement infini
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: false,
    },
    autoplay: {
        delay: 3000, // Change de slide toutes les 3 secondes
        disableOnInteraction: false,
    },
    breakpoints: {
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 4 },
    },
});
// Carousel
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".swiper-container", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        on: {
            slideChangeTransitionStart: function () {
                // Réinitialiser tous les blocs avant d'afficher le bon
                document.querySelectorAll(".contenu").forEach((el) => {
                    el.classList.remove("opacity-100", "translate-y-0");
                    el.classList.add("opacity-0", "translate-y-10");
                });
            },
            slideChangeTransitionEnd: function () {
                // Trouver le slide actif et appliquer l’animation
                let activeSlide = document.querySelector(
                    ".swiper-slide-active .contenu"
                );
                if (activeSlide) {
                    activeSlide.classList.add("opacity-100", "translate-y-0");
                    activeSlide.classList.remove("opacity-0", "translate-y-10");
                }
            },
        },
    });

    // Au chargement de la page, afficher le premier bloc
    setTimeout(() => {
        let firstContent = document.querySelector(
            ".swiper-slide-active .contenu"
        );
        if (firstContent) {
            firstContent.classList.add("opacity-100", "translate-y-0");
            firstContent.classList.remove("opacity-0", "translate-y-10");
        }
    }, 500);
});

//Ajouter un effet Smooth Scroll en JavaScript
document.addEventListener("DOMContentLoaded", function () {
    const backToTop = document.getElementById("backToTop");

    // Afficher / cacher le bouton en fonction du défilement
    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
            backToTop.style.display = "block";
        } else {
            backToTop.style.display = "none";
        }
    });

    // Animation pour remonter en haut en douceur
    backToTop.addEventListener("click", function (e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});

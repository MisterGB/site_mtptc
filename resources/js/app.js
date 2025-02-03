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

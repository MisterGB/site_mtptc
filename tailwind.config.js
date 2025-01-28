/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                primary_color: "#10162F",
                title_text: "#B21D0A",
                whiteText: "#ffffff",
                lightText: "#ccc",
                quatity_box: "#F0F2F2",
                footerBottom: "#2C3356",
            },
            fontFamily: {
                poppins: "'Poppins', serif",
                roboto: "'Roboto', serif ",
            },
        },
    },
    plugins: [],
};

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/**/*.vue",
        "./resources/views/components/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
              'primary': '#6B2E1F',
              'secondary': '#FACC15',
              'accent': '#FFE89C',
              'primary-dark': '#5E2205',
            },
            fontFamily: {
                poppins: ["Poppins"],
                nunito: ["Nunito"],
                latin: ["Charm"],
            },
            spacing: {
                21: "89px",
                19: "85px",
            },
        },
    },
    plugins: [],
};

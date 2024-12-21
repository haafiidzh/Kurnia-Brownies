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
              'primary': '#782d07',
              'secondary': '#FACC15',
            },
            fontFamily: {
                poppins: ["Poppins"],
            },
            spacing: {
                21: "89px",
                19: "77.5px",
            },
        },
    },
    plugins: [],
};

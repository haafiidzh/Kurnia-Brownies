/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./resources/**/*.vue",
    "./resources/views/components/**/*.blade.php",
    // "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        fontFamily: {
            poppins: ['Poppins'],
          },
          spacing: {
            '21': '89px',
            '19': '77.5px'
          },
    },
  },
  plugins: [
    // require('daisyui'),
  ],
}


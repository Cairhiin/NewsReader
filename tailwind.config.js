/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {
      borderWidth: {
        '16': '16px',
      },
      ringWidth: {
        '16': '16px',
      },
    },
  },
  plugins: [],
}

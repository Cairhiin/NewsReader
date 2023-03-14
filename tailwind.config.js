/** @type {import('tailwindcss').Config} */
module.exports = {
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

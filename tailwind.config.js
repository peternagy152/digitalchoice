/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "./*.{php,html,js},./assets/style/style/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "#fa4223",
        },
        secondary: "e0e0e0",
      },
    },
  },
  plugins: [],
};

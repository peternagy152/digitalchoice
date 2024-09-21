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
          DEFAULT: "#001A70",
        },
      },
    },
  },
  plugins: [],
};

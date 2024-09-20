module.exports = {
  content: [
    "./*.php", // Scans PHP files in the root directory
    "./**/*.php", // Scans PHP files in all subdirectories, except node_modules
    "./assets/js/**/*.js", // Scans JavaScript files inside the assets/js folder
    "./assets/style/**/*.css", // Scans CSS files inside the assets/style folder
    "!./node_modules/**/*", // Excludes node_modules
    "!./vendor/**/*", // Excludes vendor directories if using Composer
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};

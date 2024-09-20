/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}", "./*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "#fa4223",
        },
        secondary: "#222222",
        accent: "#3A96DB",
        muted: "#AAAAAA",
        buttonPrimary: "#001A70",
        buttonMenu: { DEFAULT: "#FAC63E" },
        buttonSecondary: "#2E86C9",
        buttonPrimaryHover: "#002B96",
        buttonMenuHover: "#FFD24D",
        buttonSecondaryHover: "#3A9CE3",
        menuColor: "#000F3D",
        coolGray: "#EDF1F4",
        monoBlack: "#1A1A1A",
        dateColor: "#AAAAAA",
        goldColor: "#B48965",
        lightGoldColor: "#EFE3B3",
      },

      screens: {
        xs: "501px",
        xl: "1280px",
        "1xl": "1300px",
        "2xl": "1536px",
        "3xl": "1536px",
        "4xl": "1440px",
      },
    },
  },
  plugins: [],
};

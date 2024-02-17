/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./index.php",
    "./users/**/*.{html,js,php}",
  ],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        color: {
          whity: "#efefef",
          primary: "#0059ff",
          accent: "#ffc639",
          secondary: "#393e46",
          dark: "#222831",
        },
      },
      screens: {
        pc: "1920px",
        laptop: "1366px",
        "tablet-l": "992px",
        hp: "576px",
        hmin: "425px",
        minni: "375px",
        mini: "320px",
      },
    },
  },
  plugins: [require("daisyui"), require("tailwind-scrollbar")],
  daisyui: {
    themes: ["light", "dark"],
  },
};

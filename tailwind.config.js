/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{jsp,js}"],
  theme: {
    extend: {
      colors: {
        "dark-brown": "#71403a",
        "light-brown": "#c6453f",
      },
      fontFamily: {
        caveat: ["Caveat"],
        poppin: ["Poppin"],
      },
      width: {
        100: "28rem",
      },
      maxWidth: {
        100: "28rem",
      },
    },
  },
  plugins: [],
};

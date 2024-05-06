/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      spacing: {
        "10%": "10%",
        "30%": "30%",
      },
      width: {
        "3/10": "30%",
        "5xl": "64rem",
        "6xl": "72rem",
      },
      maxWidth: {
        "3/10": "30%",
      },
      gridTemplateColumns: {  
        "18": "repeat(18, minmax(0, 1fr))",
      },
      gridColumn: {
        "span-17": "span 17 / span 17",
      },
    },
  },
  plugins: [],
};
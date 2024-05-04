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
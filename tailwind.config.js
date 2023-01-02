/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'norange': '#EA9010',
      'worange': '#FFF3E2',
      'dorange': '#151513',
      'ngray': '#C9C9C9',
      'wgray': '#F8F9FC',
      'dgray': '#444545',
      }
      
    },
  },
  plugins: [],
}



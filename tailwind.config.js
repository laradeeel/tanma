/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: { container: {
    center: true,
    padding: '16px'
  },screens: {
    sm: '480px',
    md: '768px',
    lg: '976px',
    xl: '1440px',
  },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
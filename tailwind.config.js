/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        forest: {
          darkest: '#081C15',  // Text color
          primary: '#355E3B',  // Primary color for buttons and links
          secondary: '#8A9A5B',  // Secondary background color
          tertiaryDark: '#014421',  // Tertiary color (used for button backgrounds)
          tertiaryLight: '#BCB88A',  // Lighter tertiary color (used for hover states)
        },
      },
    },
  },
  plugins: [],
}
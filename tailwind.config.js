/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        forest: {
          txtcol: '#081C15', 
          primary: '#355E3B',
          secondary: '#8A9A5B',
          tertiaryDark: '#014421', 
          tertiaryLight: '#BCB88A',
          light: '#BCB88A',
        },
      },
      backgroundImage: theme => ({
        'tertiary-gradient': `linear-gradient(135deg, ${theme('colors.forest.tertiaryDark')} 0%, ${theme('colors.forest.tertiaryLight')} 100%)`,
      }),
    },
  },
  plugins: [],
}
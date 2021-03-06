module.exports = {
  purge: {
    content: [
      'source/**/*.html',
      'source/**/*.md',
      'source/**/*.js',
      'source/**/*.php',
      'source/**/*.vue',
    ],
    options: {
      whitelist: [
        /language/,
        /hljs/,
        /blockquote/,
      ],
    },
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: '576px',
      md: '768px',
      lg: '992px',
      xl: '1200px'
    },
    extend: {
      maxWidth: {
        sidebar: '16rem',
        container: '90rem'
      },
      colors: {
        'teal-900': '#0d3331',
        'teal-700': '#20504f',
        'teal-500': '#38a89d',
        'teal-400': '#4dc0b5',
        'teal-300': '#64d5ca',
        'teal-200': '#a0f0ed',
        'teal-100': '#e8fffe',
      },
      fontFamily: {
        sans: [
          'Rubik',
          'system-ui',
          'BlinkMacSystemFont',
          '-apple-system',
          'Segoe UI',
          'Roboto',
          'Oxygen',
          'Ubuntu',
          'Cantarell',
          'Fira Sans',
          'Droid Sans',
          'Helvetica Neue',
          'sans-serif'
        ],
      }
    }
  },
  variants: {
    extend: {}
  },
  plugins: []
}

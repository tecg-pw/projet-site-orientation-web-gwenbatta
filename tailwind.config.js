/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        fontFamily: {
            body: ['Hind', 'sans-serif'],
            sans: ['Montserrat', 'sans-serif']
        },
        lineHeight: {
            '12': '3rem',
        },
        colors: {
            white : {
                100: '#FFFFFF'
            },
            yellow: {
                100: '#F9F7F2',
                600: '#F2CF67',
                800: '#B08C20',
            },
            green: {
                500: '#6F704D',
                700: '#4E6458'
            },
            orange: {
                200: '#FBF2E7',
                500: '#DA953A',
            }
        },
        extend: {},
    },
    plugins: [],
}

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                body: ['Hind', 'sans-serif'],
                sans: ['Montserrat', 'sans-serif']
            },
            lineHeight: {
                '8': '2rem', /* 32px */
                '10': '2.5rem',
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
                    200: 'rgba(78,100,88,0.7)',
                    500: '#6F704D',
                    700: '#4E6458'
                },
                grey: {
                    200: '#BFBFBF',
                },
                orange: {
                    100: '#FAF0E4',
                    200: '#FBF2E7',
                    500: '#DA953A',
                }
            },
        },
    },
    plugins: [],
}

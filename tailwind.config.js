/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.antlers.html',
        './resources/**/*.antlers.php',
        './content/**/*.md',
    ],

    theme: {
        extend: {
            colors: {
                raffia: '#eae2b7',
                casablanca: '#fcbf49',
                'gold-drop': '#f77f00',
                punch: '#d62828',
                woodsmoke: '#151718'
            },
            fontFamily: {
                extramile: ['extra_mileregular', 'sans-serif'],
                comicneue: ['Comic Neue', 'sans-serif']
            }
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],
};

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
                tacao: '#f2b476',
                raffia: '#eae2b7',
                casablanca: '#fcbf49',
                'gold-drop': '#f77f00',
                punch: '#d62828',
                woodsmoke: '#151718'
            },
            fontFamily: {
                extramile: ['extra_mileregular', 'sans-serif'],
                comicneue: ['Comic Neue', 'sans-serif']
            },
            typography: ({ theme }) => ({
                DEFAULT: {
                    css: {
                        '--tw-prose-body': theme('colors.woodsmoke'),
                        '--tw-prose-headings': theme('colors.woodsmoke'),
                        '--tw-prose-lead': theme('colors.woodsmoke'),
                        '--tw-prose-links': theme('colors.punch'),
                        '--tw-prose-bold': theme('colors.woodsmoke'),
                        '--tw-prose-counters': theme('colors.punch'),
                        '--tw-prose-bullets': theme('colors.punch'),
                        '--tw-prose-hr': theme('colors.punch'),
                        '--tw-prose-quotes': theme('colors.woodsmoke'),
                        '--tw-prose-quote-borders': theme('colors.punch'),
                    }
                }
            })
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],
};

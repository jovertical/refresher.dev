let colors = require('tailwindcss/colors');
let defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './resources/js/{pages,components}/**/*.svelte',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'media',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
};

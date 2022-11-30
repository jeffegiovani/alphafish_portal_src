const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './app/Units/Portal/resources/views/**/*.blade.php',
        './storage/framework/views/*.php',
        './app/Units/Portal/resources/js/**/*.js',
        './app/Units/Portal/resources/js/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            zIndex: {
                '75': 75,
                '100': 100,
                'auto': 'auto',
                '-10': '-1',
            },
            colors: {
                gray: colors.blueGray,
                orange: {
                    DEFAULT: '#EC6833',
                },
                blue: {
                    //lightest: '#abacac',
                    light: '#39A8E0',
                    DEFAULT: '#39A8E0',
                    dark: '#055B86',
                    //darkest: '#b7340d',
                },
                black: {
                    lightest: '#abacac',
                    light: '#58595b',
                    DEFAULT: '#10181D',
                    //dark: '#e05326',
                    //darkest: '#b7340d',
                },
                'wpp-color': {
                    DEFAULT: '#25d366',
                }
            }
        },
        fontFamily: {
            'serif': "'Domine', serif"
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
    corePlugins: {
        container: false,
    }
}

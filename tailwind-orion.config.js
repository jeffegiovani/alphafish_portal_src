
module.exports = {
    //mode: 'jit',
    purge: [
        './app/Units/Orion/resources/views/**/*.blade.php',
        './app/Units/Orion/resources/js/**/*.js',
        './app/Units/Orion/resources/js/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
        },
        fontFamily: {
            'sans': "'Nunito', 'Arial'",
            'serif': ['ui-serif', 'Georgia'],
            'mono': ['ui-monospace', 'SFMono-Regular']
        },
    },
    variants: {
        extend: {
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
    corePlugins: {
    }
}

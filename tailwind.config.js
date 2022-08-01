const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        light: {
            primary: '#304FFE',
            secondary: '#b0bec5',
            accent: '#8c9eff',
            error: '#b71c1c',
        },
    },

    plugins: 
    [require('@tailwindcss/forms'),
    require('flowbite/plugin')
],
};

const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Cera Pro', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                neutral: {},
                blue: {
                    500: '#0747A6',
                    400: '#0052CC', // Pacific Bridge (Primary Color)
                    300: '#0065FF',
                    200: '#2684FF',
                    100: '#4C9AFF',
                    75: '#B3D4FF',
                    50: '#DEEBFF',
                },
                yellow: {
                    500: '#CF9F02',
                    400: '#E2B203',
                    300: '#F5CD47',
                    200: '#F8E6A0',
                    100: '#FFF7D6',
                }
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
};

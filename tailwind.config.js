/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    //mode: 'jit',
    content: ['**/*.{html,php,js}'],
    darkMode: false,
    important: false,
    theme: {
        screens: {
            'min-sm': { min: '768px' },
            'min-lg': { min: '1025px' },
            '2xl': { max: '1535px' },
            xl: { max: '1279px' },
            lg: { max: '1024px' },
            md: { max: '991px' },
            sm: { max: '767px' },
            xs: { max: '500px' },
        },
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#000000',
                    light: '#F0F0F0',
                },
            },
            container: {
                center: true,
                padding: '1rem',
                screens: {
                    sm: '1270px',
                    md: '1270px',
                    lg: '1270px',
                    xl: '1270px',
                    '2xl': '1270px',
                },
            },
            fontFamily: {
                body: ['Satoshi', ...defaultTheme.fontFamily.sans],
                integral: ['Integral CF', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require('tailwindcss'), require('autoprefixer')],
};

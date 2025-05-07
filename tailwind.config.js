import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                en: ['Inter', 'sans-serif'],
                ch: ['Inter', 'sans-serif'],
                kh: ['Kantumruy', 'sans-serif'],
            },
        },
    },
    plugins: [],
};

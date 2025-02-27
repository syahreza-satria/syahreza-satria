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
                primary: ["Inter", "serif"],
                secondary: ["Archivo", "serif"],
            },
        },
    },
    plugins: [],
};

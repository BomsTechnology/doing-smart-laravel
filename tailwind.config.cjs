/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.ts",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Archivo"'],
            },
            colors: {
                "smart-blue": "#59a4da",
                "smart-blue-2": "#72abd3",
                "smart-black": "#232323",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};

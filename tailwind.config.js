/** @type {import('tailwindcss').Config} */
const plugin = require("tailwindcss/plugin");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        plugin(function ({ addVariant }) {
            addVariant("user-invalid", "&:user-invalid");
        }),
    ],
};

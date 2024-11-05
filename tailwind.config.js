/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    content: [
        "./src/**/*.{html,js}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "img-icon": "url('/public/images/img-icon.png')",
                "img-hero": "url('/public/images/img-hero.png')",
            },
        },
        screens: {
            xs: { min: "321px", max: "640px" },
            // => @media (min-width: 640px and max-width: 640px) { ... }

            sm: { min: "641px", max: "768px" },
            // => @media (min-width: 640px and max-width: 767px) { ... }

            md: { min: "769px", max: "1024px" },
            // => @media (min-width: 768px and max-width: 1023px) { ... }

            lg: { min: "1025px", max: "1280px" },
            // => @media (min-width: 1024px and max-width: 1279px) { ... }

            xl: { min: "1281px", max: "1535px" },
            // => @media (min-width: 1280px and max-width: 1535px) { ... }
        },
        fontFamily: {
            volkorn: ["Vollkorn", "serif"],
            karla: ["Karla", "serif"],
            sans: ["Figtree", ...defaultTheme.fontFamily.sans],
        },
    },
    corePlugins: {
        opacity: false,
    },
    plugins: [],
};

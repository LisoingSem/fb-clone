/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
    ],
    theme: {
        container: {
            center: true,
        },
        screens: {
            xs: "480px",
            sm: "578px",
            md: "680px",
            lg: "892px",
            xl: "1140px",
            "2xl": "1445px",
            "3xl": "1667px",
            "4xl": "19208px",
            "7roy" : "750px",
        },
    },
    darkMode: 'class',
    plugins: [
        require("daisyui"),
        require('tailwind-scrollbar'),
    ],
};

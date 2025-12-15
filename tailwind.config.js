/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/views/**/*.blade.php", "./resources/js/**/*.js"],
    theme: {
        extend: {
            colors: {
                primary: "#2765CA", // main blue
                "primary-dark": "#245bb5",
                secondary: "#37517e", // headings
                accent: "#5f57f3", // button accent
                muted: "#7c7b7b", // body text
                "section-bg": "#f3f5fa", // light section bg
            },
            fontFamily: {
                sans: [
                    '"Open Sans"',
                    "ui-sans-serif",
                    "system-ui",
                    "sans-serif",
                ],
                heading: ['"Jost"', "ui-sans-serif", "system-ui", "sans-serif"],
                display: [
                    '"Poppins"',
                    "ui-sans-serif",
                    "system-ui",
                    "sans-serif",
                ],
            },
        },
    },
    plugins: [],
};

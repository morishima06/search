const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        './storage/framework/views/*.php',
    ],

    theme: {
                extend: {
                    fontFamily: {
                        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                    },
                    animation: {
                        loader: "loader 2.3s linear infinite",
                      },
                    keyframes: {
                        loader: {
                        "0%": { transform: "rotate(0)"},
                        "100%": { transform: "rotate(360deg)" },
                        },
                    },
                },
            },

    plugins: [require('@tailwindcss/forms'),
              require('@tailwindcss/line-clamp'),
   ],
   
};

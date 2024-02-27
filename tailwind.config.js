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
                },
            },

    plugins: [require('@tailwindcss/forms'),
              require('@tailwindcss/line-clamp'),
   ],
   
};

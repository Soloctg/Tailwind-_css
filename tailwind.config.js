import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import colors from 'tailwindcss/colors';
import typography from '@tailwindcss/typography';
import flowbitePlugin from 'flowbite/plugin';
import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js'
    ],

    safelist: [
        'bg-red-600',
        'text-3xl',
        'lg:text-4xl',
    ],

    theme: {

        screens: {
            'sm': '700px',
            'md': '1000px',
            'lg': '1300px',
            'xl': '1600px',
        }

        colors: {
            extend: {
                'accent': colors.amber,
                'primary': '#5164f7',
                'saffron': {
                    '50': '#fefbe8',
                    '100': '#fdf7c4',
                    '200': '#fceb8c',
                    '300': '#f9d94b',
                    '400': '#f5c211',
                    '500': '#e5ac0d',
                    '600': '#c68508',
                    '700': '#9e5e0a',
                    '800': '#834a10',
                    '900': '#6f3d14',
                    '950': '#411f07'
                }
            }
        }


        extend: {

            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    //plugins: {
      //  tailwindcss: {},
       // autoprefixer: {},
    //},

    plugins: [
        forms,
        typography,
        flowbitePlugin,
        daisyui,
    ],
};

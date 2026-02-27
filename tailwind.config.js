import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import flowbitePlugin from 'flowbite/plugin'; //

/** @type {import('tailwindcss').Config} */
export default {
     presets: [
        ...
        require("./vendor/wireui/wireui/tailwind.config.js")
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js', //
         "./vendor/wireui/wireui/src/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/Components/**/*.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // Añadimos los colores que usas en tu sidebar
            colors: {
                'neutral-primary-soft': '#f9fafb', // Ajusta según el video de Fidel
                'neutral-tertiary': '#f3f4f6',
                'fg-brand': '#1a56db', // El azul característico
            }
        },
    },

    plugins: [
        forms, 
        typography, 
        flowbitePlugin //
    ],
};
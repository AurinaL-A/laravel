import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    theme: {
        extend: {
            colors: {
                'coffee-light': '#F2E8D5',   // Светлый бежевый
                'coffee-medium': '#C6976F',  // Средний кофейный
                'coffee-dark': '#8B4513',    // Темный шоколадный
                'coffee-cream': '#FFFAF0',   // Кремовый
            },
        },
    },

    plugins: [forms],
};

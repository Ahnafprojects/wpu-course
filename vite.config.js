import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss({
            config: {
                safelist: [
                    'bg-red-500',
                    'bg-green-500',
                    'bg-blue-500',
                    'bg-red-200',
                    'bg-blue-200', 
                    'bg-green-200',
                    'bg-red-100',
                    'bg-blue-100', 
                    'bg-green-100',
                    'text-gray-800',
                    'text-white',
                ],
                content: [
                    './resources/**/*.blade.php',
                    './resources/**/*.js',
                    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
                ],
                theme: {
                    extend: {},
                },
                plugins: [],
            }
        }),
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/css/style.css',
                'public/css/components.css',
                'resources/js/sliders.js',
                'resources/js/map.js',
            ],
            refresh: true,
        }),
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/sass/evans.scss',
                'resources/js/evans.js',
                'resources/js/dtables.js',
                'resources/sass/dtables.scss',
                
            ],
            refresh: true,
        }),
    ],
});

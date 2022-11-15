import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/contact.css',
                'resources/css/about.css',
                'resources/css/design.css',
                'resources/css/project.css',
                'resources/css/dasboard.css',
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/js/dasboard.js'
            ],
            refresh: true,
        }),
    ],
});

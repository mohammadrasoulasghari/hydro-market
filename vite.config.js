import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import html from '@rollup/plugin-html';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resourplugins: [html()],ces/js/app.js',
            ],
            refresh: true,
            plugins: [html()],
        }),
    ],
});

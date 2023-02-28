import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const host = 'news-site.test';

export default defineConfig({
    server: { 
        host, 
        hmr: { host } 
    }, 
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

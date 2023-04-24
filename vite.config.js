import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import purge from '@sakadda/vite-plugin-laravel-purgecss'

let path = require('path');

export default defineConfig({
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~inter': path.resolve(__dirname, 'node_modules/inter-ui/Inter (web latin)'),
            '@': path.resolve(__dirname, 'resources/assets'),
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/style.scss',
                'resources/js/app.js',],
            refresh: true,
        }),
        purge(),
    ],
});

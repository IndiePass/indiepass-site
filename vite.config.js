import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import purge from '@erbelion/vite-plugin-laravel-purgecss'

export default defineConfig({
    resolve: {
        alias: {
            '~inter': '/node_modules/inter-ui',
            '~@fortawesome': '/node_modules/@fortawesome',
            '@': '/resources/assets',
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/style.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        purge({
            templates: ['blade']
        })
    ],
});

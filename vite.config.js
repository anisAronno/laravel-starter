import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path'; // Import resolve from Node.js path module

export default defineConfig({
    resolve: {
        alias: {
          '@tailwind.config': resolve(__dirname, './tailwind.config.js'),
          '@': resolve(__dirname, '/resources'),
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});

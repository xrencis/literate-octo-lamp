import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";
import path from 'path';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/scss/index.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
          '@': path.resolve(__dirname, './resources/js'),
          '~': path.resolve(__dirname, './resources'),
        },
      },
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel([
            'resources/js/app.js',
            // per includere altri file CSS o JavaScript se necessario
        ]),
        vue(),
    ],
    build: {
        outDir: 'public/build',
    },
});
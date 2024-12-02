import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/css/media_style.css',
                'resources/css/product_style.css',
                'resources/css/category_style.css',
                'resources/css/login_style.css',
                'resources/css/basket_style.css',
                'resources/css/footer_style.css',
                'resources/css/carousel.css',
                'resources/css/bootstrap.css',

                'resources/js/carousel.js',
                'resources/js/hitCarouselInit.js',
                'resources/js/imageControl.js',
                'resources/js/addtoCard.js'
            ],
            refresh: true,
        }),
    ],
});

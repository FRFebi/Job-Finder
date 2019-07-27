const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    /* CSS */
    .sass('resources/assets/sass/main.scss', 'public/css/codebase.css')
    .sass('resources/assets/sass/codebase/themes/corporate.scss', 'public/css/themes/')
    .sass('resources/assets/sass/codebase/themes/earth.scss', 'public/css/themes/')
    .sass('resources/assets/sass/codebase/themes/elegance.scss', 'public/css/themes/')
    .sass('resources/assets/sass/codebase/themes/flat.scss', 'public/css/themes/')
    .sass('resources/assets/sass/codebase/themes/pulse.scss', 'public/css/themes/')

    /* JS */
    .js('resources/assets/js/laravel/app.js', 'public/js/laravel.app.js')
    .js('resources/assets/js/codebase/app.js', 'public/js/codebase.app.js')

    /* Tools */
    .browserSync('localhost:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });

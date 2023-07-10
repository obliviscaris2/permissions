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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/slick-carousel/slick/slick.min.js', 'public/js/slick.js');
mix.copy('node_modules/slick-carousel/slick/slick.css', 'public/css/slick.css');
mix.copy('node_modules/slick-carousel/slick/slick-theme.css', 'public/css/slick-theme.css');

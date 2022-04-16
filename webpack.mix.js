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

mix.js('resources/js/app.js', 'public/js').js( 'resources/js/nav_bar.js', 'public/js').js( 'resources/js/nav_btn.js', 'public/js')
.autoload( {"jquery":[ '$', 'window.jQuery'], } )
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/review.scss', 'public/css')
    .sass('resources/sass/review_header.scss', 'public/css')
    .sass('resources/sass/review_header_btns.scss', 'public/css')
    .sass('resources/sass/navbar.scss', 'public/css')
    .sass('resources/sass/nav_btn.scss', 'public/css')
    .sass('resources/sass/footer.scss', 'public/css');

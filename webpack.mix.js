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
    //全画面共通
    .js( 'resources/js/nav_bar.js', 'public/js')
    .js( 'resources/js/nav_btn.js', 'public/js')
    
    //投稿画面
    .js( 'resources/js/create_reviews_files.js', 'public/js')
    
    //ユーザー画面
    .js( 'resources/js/register.js', 'public/js')
    
    .autoload( {"jquery":[ '$', 'window.jQuery'], } )
    
    //全画面共通
    .sass('resources/sass/navbar.scss', 'public/css')
    .sass('resources/sass/nav_btn.scss', 'public/css')
    .sass('resources/sass/footer.scss', 'public/css')
        
    //投稿画面
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/review.scss', 'public/css')
    .sass('resources/sass/create_review_files.scss', 'public/css')
    .sass('resources/sass/review_header.scss', 'public/css')
    .sass('resources/sass/review_header_btns.scss', 'public/css')

    //アカウント画面
    .sass('resources/sass/account.scss', 'public/css')
    .sass('resources/sass/account_header.scss', 'public/css')
    .sass('resources/sass/register.scss', 'public/css');
let mix = require('laravel-mix');

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
mix.js('resources/assets/js/app.js', 'public/js')
   .extract(['vue', 'bootstrap', 'jquery', 'axios'])
   .sass('resources/assets/css/vendor.scss', 'public/css/vendor.css')
   .styles(['resources/assets/css/style.css','resources/assets/css/custom.css'],
    'public/css/style.css')
    .copyDirectory('resources/assets/images', 'public/images')
    .copyDirectory('./node_modules/font-awesome/fonts', 'public/fonts');
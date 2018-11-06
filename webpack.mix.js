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
/* 
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css'); */


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.combine(
    ["node_modules/jquery/dist/jquery.min.js"],
    "public/js/jquery.min.js"
);
mix.combine(
    ["node_modules/popper.js/dist/popper.min.js"],
    "public/js/popper.min.js"
);
mix.combine(
    ["node_modules/bootstrap/dist/bootstrap.min.js"],
    "public/js/bootstrap.min.js"
);

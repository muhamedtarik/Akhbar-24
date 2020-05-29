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

mix.js('resources/js/mobile/app.js', 'public/js/mobile')
    .sass('resources/sass/mobile/app.scss', 'public/css/mobile')
    .js('resources/js/desktop/app.js', 'public/js/desktop')
    .sass('resources/sass/desktop/app.scss', 'public/css/desktop');

if (mix.inProduction()) {
    mix.version();
}

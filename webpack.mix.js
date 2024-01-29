const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').js('resources/js/accordion/accordion.js','public/js/accordion/accordion.js' )
.js('resources/js/swiper1/swiper.js', 'public/js/swiper1/swiper.js')
.js('resources/js/header/header.js','public/js/header/header.js')
.js(['resources/js/input/submit.js', 'resources/js/input/disabled.js'],'public/js/input/input.js').js('resources/js/slide/responsive_slide.js','public/js/slide/responsive_slide.js')
.js('resources/js/swiper/double_config.js','public/js/swiper/double_config.js').js('resources/js/swiper/single_config.js','public/js/swiper/single_config.js')
.js('resources/js/upload/upload.js','public/js/upload/upload.js')
.js( 'resources/js/jquery/jquery.js', 'public/js/jquery' ).autoload( {
    "jquery": [ '$', 'window.jQuery' ],
} ).postCss("resources/css/app.css", "public/css").options({
    processCssUrls: false,
    postCss: [ tailwindcss('./tailwind.config.js') ],
}).version();

mix.webpackConfig({
    stats: {
        children: true,
    },
});

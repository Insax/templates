var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
       .sass('magnific-popup.scss')
       .sass('owl.carousel.scss')
       .sass('slider.scss')
       .sass('sweet-alert.scss')
       .browserify('smooth-scroll.js')
       .version([
            'css/app.css',
            'css/magnific-popup.css',
            'css/owl.carousel.css',
            'css/slider.css',
            'css/sweet-alert.css',
            'js/smooth-scroll.js'
            ]);
});

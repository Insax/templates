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
       .sass('bootstrap.scss')
       .sass('font-awesome.scss')
       .sass('magnific-popup.scss')
       .sass('owl.carousel.scss')
       .sass('settings.scss')
       .sass('sweet-alert.scss')
       .sass('youplay.scss')
       .sass('youplay-rtl.scss')
       .browserify('bootstrap.js')
       .browserify('jquery.hexagonprogress.js')
       .browserify('jquery.js')
       .browserify('shapes-polyfill.js')
       .browserify('smoothscroll.js')
       .browserify('sweet-alert.js')
       .browserify('validator.js')
       .browserify('youplay.js')
       .version([
            'css/app.css',
            'css/bootstrap.css',
            'css/font-awesome.css',
            'css/magnific-popup.css',
            'css/settings.css',
            'css/sweet-alert.css',
            'css/social-likes.min.css',
            'css/youplay.css',
            'css/youplay-rtl.css',
            'js/bootstrap.js',
            'js/html5shiv.min.js',
            'js/isotope.pkgd.min.js',
            'js/jarallax-video.js',
            'js/jarallax.js',
            'js/jquery.countdown.min.js',
            'js/jquery.hexagonprogress.js',
            'js/jquery.js',
            'js/jquery.magnific-popup.min.js',
            'js/jquery.themepunch.revolution.min.js',
            'js/jquery.themepunch.tools.min.js',
            'js/owl.carousel.min.js',
            'js/shapes-polyfill.js',
            'js/skrollr.min.js',
            'js/smoothscroll.js',
            'js/social-likes.min.js',
            'js/sweet-alert.js',
            'js/validator.js',
            'js/youplay.js'
            ]);
});

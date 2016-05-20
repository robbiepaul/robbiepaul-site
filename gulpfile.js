var elixir = require('laravel-elixir');


require('laravel-elixir-imagemin');

elixir.config.images = {
    folder: 'images/**',
    outputFolder: 'build/images'
};

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
    mix.styles([
        'bootstrap.min.css',
        'font-awesome.min.css',
        'open-iconic-bootstrap.min.css',
        'ogrid.css',
        'styles.css',

    ], 'public/build/css/everything.css');

    mix.scripts([
        "jquery-2.1.1.min.js",
        "jquery.pjax.js",
        "bootstrap.min.js",
        "jquery.transit.min.js",
        "modernizr.custom.js",
        "jquery.goup.min.js",
        "grid.js",
        "site.js"
    ], 'public/build/js/everything.js');

    mix.imagemin();
});

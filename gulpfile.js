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

elixir.config.sourcemaps = false;  // 关掉 source maps
elixir(function(mix) {
    mix.sass('app.scss');

    mix.copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/plugin/')

    mix.browserify('app.js');
});

const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir(mix => {
    mix.sass('app.scss');

    mix.webpack('app.js');
    // mix.browserify('app.js');

    mix.version(['css/app.css', 'js/app.js']);

    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap/');
});

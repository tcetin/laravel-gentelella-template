const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {

    mix.sass('app.scss')
       .webpack('app.js');

    mix.scripts([
        "jquery.js",
        "bootstrapp.js",
        "bootstrap-progressbar.js",
        "fastclick.js",
        "nprogress.js",
        "icheck.js",
        "custom.js"

    ]);

    mix.styles([
        "bootstrap.css",
        "font-awesome.css",
        "nprogress.css",
        "green.css",
        "bootstrap-progressbar-3.3.4.css",
        "custom.css"

    ]);
});

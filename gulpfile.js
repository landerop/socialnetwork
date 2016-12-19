const elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');

elixir.config.sourcemaps = true;
elixir.config.css.autoprefix.enabled = true;
elixir.config.css.autoprefix.options.browers = ['last 20 versions'];
elixir.config.css.autoprefix.options.cascade = true;

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

    mix.sass('app.scss', 'public/css/app.css')
       .webpack('app.js', 'public/js/app.js')

       .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/**', 'public/fonts/bootstrap')
       .copy('node_modules/font-awesome/fonts/**', 'public/fonts/font-awesome')

       .copy('resources/assets/img/**', 'public/img');

    // mix.browserSync({ proxy: 'localhost:8000' });

});

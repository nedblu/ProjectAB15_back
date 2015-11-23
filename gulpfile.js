
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

elixir.config.sourcemaps = false;

elixir(function (mix) {

    mix.styles('app-login.css', 'public/assets/css/app-login.css')
        .styles(['normalize.css', 'app.css'], 'public/assets/css/app.css');

    mix.scripts(['app.js'], 'public/assets/js/app.js')
        .scripts(['plugins.js'], 'public/assets/js/plugins.js')
        .scripts(['slide_app.js'], 'public/assets/js/slide_app.js');

});

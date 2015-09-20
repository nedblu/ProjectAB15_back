var elixir = require('laravel-elixir');
require('laravel-elixir-jade');
require('laravel-elixir-stylus');

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

elixir(function(mix) {

    mix.styles(['alertboxes.css','custom-login.css'], 'public/assets/css/app-login.css')
    	.styles(['main.css'], 'public/assets/css/app.css');

    mix.scripts(['app.js'], 'public/assets/js/app.js')
       .scripts(['plugins.js'], 'public/assets/js/plugins.js');

    mix.stylus('style.styl','public/assets/css/styles.css');

    mix.jade({
        search: '*.jade',
        src: '/assets/jade/'
    });

    mix.version([
        'assets/css/app-login.css',
        'assets/css/app.css',
        'public/assets/js/app.js',
        'assets/js/plugins.js'
    ]);
});

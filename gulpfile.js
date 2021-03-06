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
        .styles([
            
            'libs/bootstrap.min.css',
            'libs/styles.css',
            'libs/bootstrap-theme.min.css'

        
        ],'./public/css/libs.css')

            .scripts([

                'libs/jquery.min.js',
                'libs/bootstrap.min.js'



            ],'./public/js/libs.js')
});

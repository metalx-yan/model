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
<<<<<<< HEAD
       .webpack('app.js');
=======
<<<<<<< HEAD
       .webpack('app.js');
=======
       .webpack('app.js')
       .styles([
       		'503/style.css',      		
       	], 'public/css/maintenance.css')
       .version([
       		'css/maintenance.css'
       	]);
>>>>>>> a8c56e09facff8c567d2a575a6751f6e750a52ea
>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
});

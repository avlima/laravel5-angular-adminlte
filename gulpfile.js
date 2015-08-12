var elixir = require('laravel-elixir');
var bowerDir = 'vendor/bower_components/';
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
 // Copy jQuery dependencies
 mix.copy(bowerDir + 'jquery/dist/jquery.min.js', 'public/assets/js/jquery.min.js');
 mix.copy(bowerDir + 'jquery/dist/jquery.min.js', 'public/assets/js/jquery.js');
 mix.copy(bowerDir + 'jquery/dist/jquery.min.map', 'public/assets/js/jquery.min.map');

 // Copy Font Awesome dependencies
 mix.copy(bowerDir + 'font-awesome/fonts', 'public/assets/fonts');
 mix.copy(bowerDir + 'font-awesome/css/font-awesome.min.css', 'public/assets/css/font-awesome.min.css');

 // Copy Font Ion dependencies
 mix.copy(bowerDir + 'ionicons/fonts', 'public/assets/fonts');
 mix.copy(bowerDir + 'ionicons/css/ionicons.min.css', 'public/assets/css/ionicons.min.css');


 // Copy Angular dependencies
 mix.copy(bowerDir + 'angular/angular.min.js', 'public/assets/js/angular.min.js');
 mix.copy(bowerDir + 'angular/angular.min.js.map', 'public/assets/js/angular.min.js.map');
 mix.copy(bowerDir + 'angular-route/angular-route.min.js', 'public/assets/js/angular-route.min.js');
 mix.copy(bowerDir + 'angular-route/angular-route.min.js.map', 'public/assets/js/angular-route.min.js.map');
 mix.copy(bowerDir + 'angular-ui-router/release//angular-ui-router.min.js', 'public/assets/js/angular-ui-router.min.js');

 // Copy AdminLTE dependencies
 mix.copy(bowerDir + 'admin-lte/bootstrap/css/bootstrap.min.css', 'public/assets/css/bootstrap.min.css');
 mix.copy(bowerDir + 'admin-lte/dist/css/AdminLTE.min.css', 'public/assets/css/AdminLTE.min.css');
 mix.copy(bowerDir + 'admin-lte/dist/css/skins', 'public/assets/css/skins');
 mix.copy(bowerDir + 'admin-lte/bootstrap/js/bootstrap.min.js', 'public/assets/js/bootstrap.min.js');
 mix.copy(bowerDir + 'admin-lte/dist/js/app.min.js', 'public/assets/js/app.min.js');
});
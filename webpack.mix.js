const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
	'resources/js/jquery.min.js',
	'resources/js/bootstrap.bundle.min.js',
	'resources/js/sb-admin-2.js',
	'resources/js/jquery.easing.min.js',
	'resources/js/vue.js',
	'resources/js/axios.js',
	'resources/js/app.js',
	'resources/js/main.js',
	], 'public/js/app.js')
	.styles([
	'resources/css/sb-admin-2.min.css',
	'resources/css/style.css',
	], 'public/css/app.css')
	.styles([
	'resources/css/login.css'
	], 'public/css/home.css');
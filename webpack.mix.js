const mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/manage.js', 'public/js')
	.less('resources/assets/less/app.less', 'public/css')
	.less('resources/assets/less/manage.less', 'public/css');
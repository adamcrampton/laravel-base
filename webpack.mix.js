const mix = require('laravel-mix');

// Set up app and vendor JS.
mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/page.js', 'public/js')
	.js('resources/assets/js/manage.js', 'public/js')
	.extract(['vue', 'jquery', 'jquery-ui', 'bootstrap', 'venobox', 'lodash']);

// Compile LESS.
mix.less('resources/assets/less/app.less', 'public/css')
	.less('resources/assets/less/manage.less', 'public/css');

// Copy vendor assets.
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/vendor/bootstrap/css/bootstrap.min.css')
	.copy('node_modules/venobox/venobox/venobox.css', 'public/vendor/venobox/css');
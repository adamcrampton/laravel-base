const mix = require('laravel-mix');

// Set up app and vendor JS.
mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/page.js', 'public/js')
	.js('resources/assets/js/manage.js', 'public/js')
	.extract(['jquery', 'jquery-ui', 'bootstrap', 'lodash']);


// Compile LESS.
mix.less('resources/assets/less/app.less', 'public/css')
	.less('resources/assets/less/manage.less', 'public/css');

// Copy vendor CSS.
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/vendor/bootstrap/css/bootstrap.min.css')
	.copy('node_modules/venobox/venobox/venobox.css', 'public/vendor/venobox/css/venobox.css')
	.copy('node_modules/tabulator-tables/dist/css/tabulator_site.css', 'public/vendor/tabulator-tables/css/tabulator_site.css');
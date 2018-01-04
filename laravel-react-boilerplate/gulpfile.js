var elixir = require('laravel-elixir');
var config = elixir.config;

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
		mix
			.sass('app.scss')
			.browserify('main.jsx',
				config.get('public.js.outputFolder'),
				config.get('assets.js.folder'), {
				debug: !elixir.config.production
			});

		if (config.production)
			mix.version(['css/app.css', 'js/main.js']);
});

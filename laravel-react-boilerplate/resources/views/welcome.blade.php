<!DOCTYPE html>
<html>
	<head>
		<title>Laravel</title>

		<link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		@if ( Config::get('app.debug') )
		<link href="css/app.css" rel="stylesheet" type="text/css">
		@else
		<link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css">
		@endif

		<style>
			html, body {
				height: 100%;
			}

			body {
				margin: 0;
				padding: 0;
				width: 100%;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div id="react-it"></div>
			</div>
		</div>

		@if ( Config::get('app.debug') )
		<script type="text/javascript" src="js/main.js"></script>
		@else
		<script type="text/javascript" src="{{ elixir('js/main.js') }}"></script>
		@endif
	</body>
</html>

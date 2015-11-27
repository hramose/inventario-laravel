<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body, a {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #000;
				display: table;
				font-weight: 150;
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
				font-size: 72px;
				margin-bottom: 40px;
			}

			a {
				text-decoration: none;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Error 404</div>
				<h1>Página No Encontrada</h1>
				<h3><a href="{{ url ('/')}}">Regresar al Inicio</a></h3>
			</div>
		</div>
	</body>
</html>

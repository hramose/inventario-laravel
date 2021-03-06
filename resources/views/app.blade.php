<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	{!! Html::style('css/app.css') !!}
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">Inventario</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::guest())
					@else
					<li><a href="{{ url('/inicio') }}">Inicio</a></li>
					<li><a href="{{ url('/ayuda') }}">Ayuda</a></li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li><a href="{{ url('/auth/login') }}">Login</a></li>
					<!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
					@else
					{{-- Usuarios --}}
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/usuarios/create') }}">Agregar Usuario</a></li>
							<li><a href="{{ url('/usuarios') }}">Listar Usuarios</a></li>
						</ul>
					</li>
					{{-- Fin Usuarios --}}
					{{-- Marcas --}}
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Marcas<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/marcas/create') }}">Agregar Marca</a></li>
							<li><a href="{{ url('/marcas') }}">Listar Marcas</a></li>
						</ul>
					</li>
					{{-- Fin Marcas --}}
					{{-- Categorías --}}
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorías<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/categorias/create') }}">Agregar Categoría</a></li>
							<li><a href="{{ url('/categorias') }}">Listar Categorías</a></li>
						</ul>
					</li>
					{{-- Fin Categorías --}}
					{{-- Productos --}}
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/productos/create') }}">Agregar Producto</a></li>
							<li><a href="{{ url('/productos') }}">Listar Productos</a></li>
						</ul>
					</li>
					{{-- Fin Productos --}}
					{{-- Prestamos --}}
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prestamos<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/prestamos/create') }}">Agregar Prestamo</a></li>
							<li><a href="{{ url('/prestamos') }}">Listar Prestamos</a></li>
							<li><a href="{{ url('/prestamos/complete') }}">Listar Prestamos Completos</a></li>
							<li><a href="{{ url('/prestamos/incomplete') }}">Listar Prestamos Pendientes</a></li>
						</ul>
					</li>
					{{-- Fin Prestamos --}}
					{{-- Usuario --}}
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/auth/logout') }}">Salir</a></li>
						</ul>
					</li>
					{{-- Fin Usuario --}}
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

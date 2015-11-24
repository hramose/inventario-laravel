@extends('app')
@section('title')
Usuarios
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><span class="text-uppercase">Usuarios</span></div>
				@include('partials.successMessage')
				@include('usuarios.partials.filterForm')
				<div class="panel-body">
					<p>
						<a class="btn btn-default" href="{{ route('usuarios.create') }}" role="button"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Agregar Usuario</a>
					</p>

					@include('users.partials.table')

				</div>
			</div>
			{!! $users->render() !!}
			<div class="alert alert-info"><span class="badge">{{ $users->total() }}</span> Usuarios Encontrados</div>
		</div>
	</div>
</div>
@endsection

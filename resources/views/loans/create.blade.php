@extends('app')
@section('title')
Nueva Prestamo
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Prestamo</div>

				@include('partials.validateMessage')

				<div class="panel-body">
					{!! Form::open(['route' => 'prestamos.store', 'method' => 'POST']) !!}

					@include('loans.partials.fieldsCreate')

					<button type="submit" class="btn btn-default">Guardar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

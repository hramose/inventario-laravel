@extends('app')
@section('title')
Editar Prestamo
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Prestamo</div>

				@include('partials.validateMessage')

				<div class="panel-body">
					{!! Form::model($loan, ['route' => ['prestamos.update', $loan], 'method' => 'PUT']) !!}

					@include('loans.partials.fieldsEdit')

					<button type="submit" class="btn btn-default">Actualizar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

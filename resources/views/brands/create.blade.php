@extends('app')
@section('title')
Nueva Marca
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nueva Marca</div>

				@include('partials.validateMessage')

				<div class="panel-body">
					{!! Form::open(['route' => 'marca.store', 'method' => 'POST']) !!}

					@include('brands.partials.fields')

					<button type="submit" class="btn btn-default">Guardar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

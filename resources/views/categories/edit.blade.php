@extends('app')
@section('title')
Editar Categoría
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Categoría</div>

				@include('partials.validateMessage')

				<div class="panel-body">
					{!! Form::model($categorie, ['route' => ['categorias.update', $categorie], 'method' => 'PUT']) !!}

					@include('categories.partials.fields')

					<button type="submit" class="btn btn-default">Actualizar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

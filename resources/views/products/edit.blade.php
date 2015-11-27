@extends('app')
@section('title')
Editar Producto
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Producto</div>

				@include('partials.validateMessage')

				<div class="panel-body">
					{!! Form::model($product, ['route' => ['productos.update', $product], 'method' => 'PUT']) !!}

					@include('products.partials.fields')

					<button type="submit" class="btn btn-default">Actualizar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

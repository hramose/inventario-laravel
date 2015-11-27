@extends('app')
@section('title')
Productos
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><span class="text-uppercase">Productos</span></div>
				@include('partials.successMessage')
				@include('products.partials.filterForm')
				<div class="panel-body">
					<p>
						<a class="btn btn-default" href="{{ route('productos.create') }}" role="button"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Agregar Producto</a>
					</p>

					@include('products.partials.table')

				</div>
			</div>
			{!! $products->render() !!}
			<div class="alert alert-info"><span class="badge">{{ $products->total() }}</span> Productos Encontrados</div>
		</div>
	</div>
</div>
@endsection

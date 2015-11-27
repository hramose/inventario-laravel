@extends('app')
@section('title')
Usuarios
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><span class="text-uppercase">Categorias</span></div>
				@include('partials.successMessage')
				@include('categories.partials.filterForm')
				<div class="panel-body">
					<p>
						<a class="btn btn-default" href="{{ route('categorias.create') }}" role="button"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Agregar Categoria</a>
					</p>

					@include('categories.partials.table')

				</div>
			</div>
			{!! $categories->render() !!}
			<div class="alert alert-info"><span class="badge">{{ $categories->total() }}</span> Usuarios Encontrados</div>
		</div>
	</div>
</div>
@endsection

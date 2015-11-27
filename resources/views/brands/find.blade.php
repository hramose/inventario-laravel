@extends('app')
@section('title')
Marcas
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><span class="text-uppercase">Marcas (Busqueda)</span></div>
				@include('partials.successMessage')
				@include('brands.partials.filterForm')
				<div class="panel-body">
					<p>
						<a class="btn btn-default" href="{{ route('marcas.create') }}" role="button"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Nueva Categoría</a>
					</p>

					@include('brands.partials.table')

				</div>
			</div>
			{{-- {!! $users->render() !!} --}}
			{{-- <div class="alert alert-info"><span class="badge">{{ $users->total() }}</span> Usuarios Encontrados</div> --}}
		</div>
	</div>
</div>
@endsection

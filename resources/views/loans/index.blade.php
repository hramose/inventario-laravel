@extends('app')
@section('title')
Prestamos
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><span class="text-uppercase">Prestamos</span></div>
				@include('partials.successMessage')
				@include('loans.partials.filterForm')
				<div class="panel-body">
					<p>
						<a class="btn btn-default" href="{{ route('prestamos.create') }}" role="button"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Agregar Prestamo</a>
					</p>

					@include('loans.partials.table')

				</div>
			</div>
			{!! $loans->render() !!}
			<div class="alert alert-info"><span class="badge">{{ $loans->total() }}</span> Prestamos Encontrados</div>
		</div>
	</div>
</div>
@endsection

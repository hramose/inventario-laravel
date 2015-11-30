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
				{{-- @include('loans.partials.filterForm') --}}

				<p>
					<ul class="list-inline pull-right">
						<li><a href="{{ url('prestamos/') }}" class="btn btn-default"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;&nbsp;Todos</a></li>
						<li><a href="{{ url('prestamos/complete') }}" class="btn btn-default"><i class="glyphicon glyphicon-ok-sign"></i>&nbsp;&nbsp;&nbsp;Completados</a></li>
						<li><a href="{{ url('prestamos/incomplete') }}" class="btn btn-default"><i class="glyphicon glyphicon-remove-sign"></i>&nbsp;&nbsp;&nbsp;Incompletos</a></li>
						<li></li>
					</ul>
				</p>

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

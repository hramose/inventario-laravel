<div class="table-responsive">
	<table class="table  table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Producto</th>
				<th>Tipo</th>
				<th>Cantidad</th>
				<th>Descripción</th>
				<th>Fecha de prestamo</th>
				<th>Fecha de devolución</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($loans as $loan)
			<tr>
				<td>{{ $loan->id }}</td>
				<td>{{ $loan->products->nombre }}</td>
				<td>
					@if (strcmp ($loan->products->tipo, 'consumible' ) == 0 )
						Consumible
					@else
						No consumible
					@endif
				</td>
				<td>{{ $loan->cantidad }}</td>
				<td>{{ $loan->descripcion }}</td>
				<td>{{ $loan->inicio_prestamo }}</td>
				<td>
					@if (strcmp ($loan->fin_prestamo, 'Fecha no registrada' ) == 0 )
						<a class="btn btn-default text-center btn-sm  btn-sp" href="{{ url('prestamos/'. $loan->id .'/give-back') }}" onclick="return confirm('¿Seguro que desea registrar devolución?')"><i class="glyphicon glyphicon-calendar"></i>&nbsp;&nbsp;&nbsp;Registrar devolución</a>
					@else
						{{ $loan->fin_prestamo }}
					@endif
				</td>

				<td class="col-md-2">
					<ul class="list-inline  text-center">
						<li><a class="btn btn-default  btn-sm  btn-sp" href="{{ route('prestamos.edit', $loan) }}" onclick="return confirm('¿Seguro que desea editar?')"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;&nbsp;Editar</a></li>
						<li>@include('loans.partials.delete')</li>
					</ul>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

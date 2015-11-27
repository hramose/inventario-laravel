<div class="table-responsive">
	<table class="table  table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Serie</th>
				<th>Categoría</th>
				<th>Descripción</th>
				<th>Cantidad</th>
				<th>Tipo</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->nombre }}</td>
				<td>{{ $product->brands->nombre }}</td>
				<td>{{ $product->modelo }}</td>
				<td>{{ $product->serie }}</td>
				<td>{{ $product->categories->nombre }}</td>
				<td>{{ $product->descripcion }}</td>
				<td>{{ $product->cantidad }}</td>
				<td>
					@if (strcmp ($product->tipo, 'consumible' ) == 0 )
						Consumible
					@else
						No consumible
					@endif
				</td>
				<td class="col-md-2">
					<ul class="list-inline  text-center">
						<li><a class="btn btn-default  btn-sm  btn-sp" href="{{ route('productos.edit', $product) }}" onclick="return confirm('¿Seguro que desea editar?')"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;&nbsp;Editar</a></li>
						<li>@include('products.partials.delete')</li>
					</ul>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

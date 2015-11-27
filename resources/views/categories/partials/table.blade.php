<div class="table-responsive">
	<table class="table  table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categories as $categorie)
			<tr>
				<td>{{ $categorie->id }}</td>
				<td>{{ $categorie->nombre }}</td>
				<td>{{ $categorie->descripcion }}</td>
				<td class="col-md-2">
					<ul class="list-inline  text-center">
						<li><a class="btn btn-default  btn-sm  btn-sp" href="{{ route('categorias.edit', $categorie) }}" onclick="return confirm('¿Seguro que desea editar?')"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;&nbsp;Editar</a></li>
						<li>@include('categories.partials.delete')</li>
					</ul>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

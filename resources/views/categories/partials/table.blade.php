<div class="table-responsive">
	<table class="table  table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->nombre }}</td>
				<td>{{ $user->descripcion }}</td>
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

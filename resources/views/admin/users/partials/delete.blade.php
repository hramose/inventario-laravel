{!! Form::open(['route' => ['usuarios.destroy', $user], 'method' => 'DELETE']) !!}
<button type="submit" class="btn btn-default  btn-sm  btn-sp" onclick="return confirm('¿Seguro que desea eliminar?')" >
	<i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;&nbsp;Eliminar
</button>
{!! Form::close() !!}

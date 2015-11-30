<div class="form-group">
	{!! Form::label('nombre', 'Nombre'); !!}
	{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la marca']) !!}
</div>
<div class="form-group">
	{!! Form::label('descripcion', 'Descripción'); !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

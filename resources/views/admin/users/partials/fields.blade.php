<div class="form-group">
	{!! Form::label('name', 'Nombre'); !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'E-Mail Address'); !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Contraseña'); !!}
	{!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('password_confirmation', 'Confirme la Contraseña'); !!}
	{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('type', 'Tipo'); !!}
	{!! Form::select('type', ['usuario' => 'Usuario', 'administrador' => 'Aministrador'], null, ['class' => 'form-control']) !!}
</div>

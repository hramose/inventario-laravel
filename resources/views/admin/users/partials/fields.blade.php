<div class="form-group">
	{!! Form::label('name', 'Nombre'); !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'E-Mail Address'); !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('carnet', 'Carnet'); !!}
	{!! Form::text('carnet', null, ['class' => 'form-control']) !!}
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
	{!! Form::label('rol', 'Tipo'); !!}
	{!! Form::select('rol', ['user' => 'Usuario', 'admin' => 'Aministrador'], null, ['class' => 'form-control']) !!}
</div>

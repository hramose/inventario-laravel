<div class="form-group">
	{!! Form::hidden('cantidad', $loan->cantidad, ['class' => 'form-control', '', 'placeholder' => 'Ingrese cantidad a solicitar']) !!}
</div>
<div class="form-group">
	{!! Form::hidden('descripcion', $loan->descripcion, ['class' => 'form-control', '', 'placeholder' => 'Describa el prestamo']) !!}
</div>
<div class="form-group">
	{!! Form::hidden('inicio_prestamo', $loan->inicio_prestamo, ['class' => 'form-control', '', 'placeholder' => 'Ingrese la fecha en que se presto el producto']) !!}
</div>
<div class="form-group">
	{!! Form::label('fin_prestamo', 'Fecha de devolución'); !!}
	{!! Form::text('fin_prestamo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de devolución del producto']) !!}
</div>

<div class="form-group">
	{!! Form::label('products_id', 'Producto'); !!}
	{!! Form::select('products_id', $products, Input::old('products_id'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('cantidad', 'Cantidad'); !!}
	{!! Form::number('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese cantidad a solicitar']) !!}
</div>
<div class="form-group">
	{!! Form::label('descripcion', 'Descripción del prestamo'); !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Describa el prestamo']) !!}
</div>
<div class="form-group">
	{!! Form::label('inicio_prestamo', 'Fecha de prestamo'); !!}
	{!! Form::text('inicio_prestamo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha en que se presto el producto']) !!}
</div>
<div class="form-group">
	{!! Form::label('fin_prestamo', 'Fecha de devolución'); !!}
	{!! Form::text('fin_prestamo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de devolución del producto']) !!}
</div>

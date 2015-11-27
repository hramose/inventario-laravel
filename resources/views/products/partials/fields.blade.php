<div class="form-group">
	{!! Form::label('nombre', 'Nombre'); !!}
	{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
</div>
<div class="form-group">
	{!! Form::label('brands_id', 'Marca'); !!}
	{!! Form::select('brands_id', $brands, Input::old('brands_id'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('modelo', 'Modelo'); !!}
	{!! Form::text('modelo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el modelo del producto']) !!}
</div>
<div class="form-group">
	{!! Form::label('serie', 'Serie'); !!}
	{!! Form::text('serie', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la serie del producto']) !!}
</div>
<div class="form-group">
	{!! Form::label('categories_id', 'Categoría'); !!}
	{!! Form::select('categories_id', $categories, Input::old('categories_id'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('descripcion', 'Descripción'); !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Describa el producto']) !!}
</div>
<div class="form-group">
	{!! Form::label('cantidad', 'Cantidad'); !!}
	{!! Form::number('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese cantidad de producto a ingresar']) !!}
</div>
<div class="form-group">
	{!! Form::label('tipo', 'Tipo'); !!}
	{!! Form::select('tipo', ['consumible' => 'Consumible', 'no_consumible' => 'No Consumible'], null, ['class' => 'form-control']) !!}
</div>

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
//------------------------------------------------------------------------------
			$table->increments('id');
			$table->string('nombre');
			$table->string('marca');
			$table->string('modelo');
			$table->string('serie');
			$table->string('descripcion');
			$table->integer('cantidad');
			$table->enum('tipo', ['consumible','no_consumible']);
//------------------------------------------------------------------------------
			$table->integer('categories_id')->unsigned();
			$table->foreign('categories_id')->references('id')->on('categories');
//------------------------------------------------------------------------------
			$table->integer('brands_id')->unsigned();
			$table->foreign('brands_id')->references('id')->on('brands');
//------------------------------------------------------------------------------
			$table->softDeletes(); // Campo para borrado logico
			$table->timestamps();
//------------------------------------------------------------------------------
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}

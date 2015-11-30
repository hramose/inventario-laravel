<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('loans', function(Blueprint $table)
		{
//------------------------------------------------------------------------------
			$table->increments('id');
			$table->integer('cantidad');
			$table->string('descripcion');
			$table->date('inicio_prestamo');
			$table->date('fin_prestamo')->nullable();
//------------------------------------------------------------------------------
			$table->integer('products_id')->unsigned();
			$table->foreign('products_id')->references('id')->on('products');
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
		Schema::drop('loans');
	}

}

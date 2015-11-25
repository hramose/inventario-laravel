<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//------------------------------------------------------------------------------
		\DB::table('products')-> insert(array(
			'nombre' 				=> 'Producto 1',
			'marca' 				=> 'marca 1',
			'modelo' 				=> 'modelo 1',
			'serie' 				=> 'serie 1',
			'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
			'cantidad' 			=> 10,
			'tipo' 					=> 'consumible',
			'categories_id' => '1',
		));
//------------------------------------------------------------------------------
		\DB::table('products')-> insert(array(
			'nombre' 				=> 'Producto 2',
			'marca' 				=> 'marca 2',
			'modelo' 				=> 'modelo 2',
			'serie' 				=> 'serie 2',
			'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
			'cantidad' 			=> 10,
			'tipo' 					=> 'no_consumible',
			'categories_id' => '2',
		));
//------------------------------------------------------------------------------
	}

}

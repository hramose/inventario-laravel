<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategorieSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//------------------------------------------------------------------------------
		\DB::table('categories')-> insert(array(
			'nombre' 				=> 'Categoría Uno',
			'descripcion'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
		));
//------------------------------------------------------------------------------
		\DB::table('categories')-> insert(array(
			'nombre' 				=> 'Categoría Dos',
			'descripcion'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
		));
//------------------------------------------------------------------------------
	}

}

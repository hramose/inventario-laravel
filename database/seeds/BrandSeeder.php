<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BrandSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//------------------------------------------------------------------------------
		\DB::table('brands')-> insert(array(
			'nombre' 				=> 'Marca Uno',
			'descripcion'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
		));
//------------------------------------------------------------------------------
		\DB::table('brands')-> insert(array(
			'nombre' 				=> 'Marca Dos',
			'descripcion'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
		));
//------------------------------------------------------------------------------
	}

}

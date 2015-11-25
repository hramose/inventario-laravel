<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LoansSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//------------------------------------------------------------------------------
		\DB::table('loans')-> insert(array(
			'cantidad' 				=> '9',
			'descripcion' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
			'products_id' 		=> '1',
			'inicio_prestamo' => '2015-11-20',
		));
//------------------------------------------------------------------------------
		\DB::table('loans')-> insert(array(
			'cantidad' 				=> '1',
			'descripcion' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
			'products_id' 		=> '2',
			'inicio_prestamo' => '2015-11-20',
			'fin_prestamo' 		=> '2015-11-25',
		));
//------------------------------------------------------------------------------
	}

}

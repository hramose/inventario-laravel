<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//------------------------------------------------------------------------------
// Admin user
		\DB::table('users')-> insert(array(
			'name' 			=> 'Antonio',
			'carnet'		=> 'GE201101',
			'rol'				=> 'admin',
			'email'			=> 'sage393@gmail.com',
			'password' 	=> \Hash::make('yolo')
		));

		\DB::table('users')-> insert(array(
			'name' 			=> 'Nelson',
			'carnet'		=> 'RO201101',
			'rol'				=> 'admin',
			'email'			=> 'josuer8a@gmail.com',
			'password' 	=> \Hash::make('naruto')
		));
//------------------------------------------------------------------------------
// Normal user
		\DB::table('users')-> insert(array(
			'name' 			=> 'Fulano',
			'carnet'		=> 'FU201101',
			'rol'				=> 'user',
			'email'			=> 'fulanencio@gmail.com',
			'password' 	=> \Hash::make('fulano')
		));
//------------------------------------------------------------------------------
	}

}

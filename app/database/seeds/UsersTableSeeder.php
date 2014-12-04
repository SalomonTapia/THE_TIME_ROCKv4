<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user=array(['usuario'=>'Poncho', 'password'=> Hash::make('poncho'), 'conf_pass'=>'poncho',
		 'created_at'=> new DateTime,'updated_at'=> new DateTime]);
		DB::table('users')->insert($user);
	}

}
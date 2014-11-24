<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DiscographyesTableSeeder extends Seeder {

	public function run()
	{
		$discographye=array(['nombre'=>'All apologies', 'banda'=>'Nirvana', 'genero'=>'Rock',
		 'url'=>'www.nirvanafan.com', 'descripcion'=>'chido', 'imagen'=>'loca', 'created_at'=> new DateTime,'updated_at'=> new DateTime,
			'user_id'=>1]);
		DB::table('discographyes')->insert($discographye);
	}

}
<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ComentdsTableSeeder extends Seeder {

	public function run()
	{
		$commentd=array(['coment'=>'hola discografía', 'created_at'=> new DateTime,'updated_at'=> new DateTime,
			'user_id'=>1, 'discography_id'=>1]);
		DB::table('comentds')->insert($commentd);
	}

}
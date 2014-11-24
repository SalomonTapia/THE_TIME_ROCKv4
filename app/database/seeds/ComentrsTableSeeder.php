<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ComentrsTableSeeder extends Seeder {

	public function run()
	{
		$commentr=array(['coment'=>'hola noticias', 'created_at'=> new DateTime,'updated_at'=> new DateTime,
			'user_id'=>1, 'report_id'=>1]);
		DB::table('comentrs')->insert($commentr);
	}

}
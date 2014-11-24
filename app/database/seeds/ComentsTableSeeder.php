<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ComentsTableSeeder extends Seeder {

	public function run()
	{
		$comment=array(['coment'=>'hola', 'created_at'=> new DateTime,'updated_at'=> new DateTime,
			'user_id'=>1, 'occation_id'=>1]);
		DB::table('coments')->insert($comment);
	}

}
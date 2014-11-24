<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OccationsTableSeeder extends Seeder {

	public function run()
	{
		$occation=array(['nom_evento'=>'Concierto', 'lugar'=>'DF', 'desc_evento'=>'bien chido',
		 'created_at'=> new DateTime,'updated_at'=> new DateTime, 'user_id'=>1]);
		DB::table('occations')->insert($occation);
	}

}
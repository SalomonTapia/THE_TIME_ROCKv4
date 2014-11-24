<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ReportsTableSeeder extends Seeder {

	public function run()
	{
		$report=array(['nom_reporte'=>'Jojojojo', 'desc_reporte'=>'bien chido', 'created_at'=> new DateTime,'updated_at'=> new DateTime,
			'user_id'=>1]);
		DB::table('reports')->insert($report);
	}

}
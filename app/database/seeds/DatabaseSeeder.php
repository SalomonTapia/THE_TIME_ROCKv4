<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('UsersTableSeeder');
		/*$this->call('DiscographyesTableSeeder');
		$this->call('OccationsTableSeeder');
		$this->call('ReportsTableSeeder');
		$this->call('ComentsTableSeeder');
		$this->call('ComentdsTableSeeder');
		$this->call('ComentrsTableSeeder');*/
	}

}

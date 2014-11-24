<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscographyesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discographyes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('banda');
			$table->string('genero');
			$table->text('url');
			$table->text('descripcion');
			$table->string('imagen');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('discographyes');
	}

}

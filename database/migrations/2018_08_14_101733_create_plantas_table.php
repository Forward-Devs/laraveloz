<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlantasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plantas', function(Blueprint $table)
		{
			$table->integer('pID')->unsigned()->primary();
			$table->string('paX', 32);
			$table->string('paY', 32);
			$table->string('paZ', 32);
			$table->integer('pSegundos');
			$table->integer('pMinutos');
			$table->integer('pHoras');
			$table->integer('pEstado');
			$table->string('Plantador', 32);
			$table->integer('Creado');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plantas');
	}

}

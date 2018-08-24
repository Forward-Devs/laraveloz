<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCantidadVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cantidad_vehiculos', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('Cantidad', 11)->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cantidad_vehiculos');
	}

}

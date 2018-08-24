<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('propietario', 25);
			$table->integer('modelo');
			$table->integer('precio');
			$table->float('x', 10, 0);
			$table->float('y', 10, 0);
			$table->float('z', 10, 0);
			$table->float('a', 10, 0);
			$table->string('color1', 3);
			$table->string('color2', 3);
			$table->string('comprable', 1);
			$table->integer('moneda')->default(0);
			$table->integer('faccion')->default(0);
			$table->integer('trabajo')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehicles');
	}

}

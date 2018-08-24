<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrendasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prendas', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->primary();
			$table->string('Propietario', 32);
			$table->integer('Objeto');
			$table->integer('Slot');
			$table->integer('ObjUsed');
			$table->float('fOffsetX', 10, 0)->default(0.085);
			$table->float('fOffsetY', 10, 0)->default(0.017999);
			$table->float('fOffsetZ', 10, 0)->default(0.000999);
			$table->float('fRotX', 10, 0)->default(87.2);
			$table->float('fRotY', 10, 0)->default(88.1);
			$table->float('fRotZ', 10, 0)->default(-7.5);
			$table->float('fScaleX', 10, 0)->default(1);
			$table->float('fScaleY', 10, 0)->default(1);
			$table->float('fScaleZ', 10, 0)->default(1);
			$table->integer('ATH');
			$table->integer('Web')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prendas');
	}

}

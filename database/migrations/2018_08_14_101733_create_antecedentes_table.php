<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAntecedentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('antecedentes', function(Blueprint $table)
		{
			$table->integer('Id')->unsigned()->unique('Id');
			$table->text('Cargos', 65535);
			$table->integer('Condena');
			$table->string('Oficial', 24);
			$table->text('Datos', 65535);
			$table->string('Fecha', 32);
			$table->integer('UserID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('antecedentes');
	}

}

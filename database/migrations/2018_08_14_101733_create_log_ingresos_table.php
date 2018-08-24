<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogIngresosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_ingresos', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->primary();
			$table->string('Nombre', 32);
			$table->string('Pais', 32);
			$table->string('IP', 32);
			$table->string('Fecha', 32);
			$table->string('Host', 32);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_ingresos');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogTransaccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_transacciones', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->primary();
			$table->string('Fecha', 32);
			$table->string('Enviador', 32);
			$table->string('Receptor', 32);
			$table->string('Monto', 32);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_transacciones');
	}

}

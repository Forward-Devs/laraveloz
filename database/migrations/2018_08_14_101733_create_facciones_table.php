<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facciones', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('fecha', 32)->default('01/01/2016');
			$table->string('Nombre', 32);
			$table->integer('Integrantes')->default(0);
			$table->string('Lider', 32);
			$table->string('Rango1', 32);
			$table->string('Rango2', 32);
			$table->string('Rango3', 32);
			$table->string('Rango4', 32);
			$table->string('Rango5', 32);
			$table->string('Rango6', 32);
			$table->string('tipobanda', 32);
			$table->string('territorio', 32)->default('Ninguno');
			$table->integer('MaxIntegrantes')->default(20);
			$table->integer('Rango5Inv')->default(0);
			$table->integer('Rango5Exp')->default(0);
			$table->integer('Rango5Edi')->default(0);
			$table->integer('Rango4Inv')->default(0);
			$table->integer('Rango4Exp')->default(0);
			$table->integer('Rango4Edi')->default(0);
			$table->integer('Rango3Inv')->default(0);
			$table->integer('Rango3Exp')->default(0);
			$table->integer('Rango3Edi')->default(0);
			$table->integer('Rango2Inv')->default(0);
			$table->integer('Rango2Exp')->default(0);
			$table->integer('Rango2Edi')->default(0);
			$table->integer('Rango1Inv')->default(0);
			$table->integer('Rango1Exp')->default(0);
			$table->integer('Rango1Edi')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facciones');
	}

}

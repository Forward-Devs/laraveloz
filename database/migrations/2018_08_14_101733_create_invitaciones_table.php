<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvitacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitaciones', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->primary();
			$table->string('Activo', 3)->default('1');
			$table->string('Invitador', 26);
			$table->string('Invitado', 26);
			$table->integer('BandaID');
			$table->timestamp('Fecha')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invitaciones');
	}

}

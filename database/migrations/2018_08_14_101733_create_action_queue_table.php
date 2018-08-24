<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActionQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('action_queue', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->integer('faccj')->default(0);
			$table->string('user_ses', 24)->default('Nadie');
			$table->string('jugname', 24)->default('Nadie');
			$table->string('queue_params', 24)->default('nada');
			$table->integer('status')->default(0)->comment('0 sin atender, 1 atendido, 2 error');
			$table->string('Fecha', 24)->default('Desconocida');
			$table->integer('type')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('action_queue');
	}

}

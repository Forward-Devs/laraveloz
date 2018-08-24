<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_ventas', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('Vendedor', 24);
			$table->integer('arma')->default(0);
			$table->integer('precio')->default(0);
			$table->string('comprador', 24);
			$table->string('item', 10);
			$table->integer('cantidad');
			$table->string('fecha', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_ventas');
	}

}

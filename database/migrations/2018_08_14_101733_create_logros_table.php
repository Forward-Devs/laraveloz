<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logros', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->primary();
			$table->string('nombre', 32)->default('0');
			$table->string('fecha_nivel', 32)->default('0');
			$table->integer('sobre_ruedas')->default(0);
			$table->string('fecha_ruedas', 32)->default('0');
			$table->integer('automedicado')->default(0);
			$table->integer('nro_remedio')->default(0);
			$table->string('fecha_remedio', 32)->default('0');
			$table->integer('adicto_crack')->default(0);
			$table->integer('nro_crack')->default(0);
			$table->string('fecha_crack', 32)->default('0');
			$table->integer('medico')->default(0);
			$table->integer('nro_salvado')->default(0);
			$table->string('fecha_salvado', 32)->default('0');
			$table->integer('tortuga')->default(0);
			$table->string('fecha_tortuga', 32)->default('0');
			$table->integer('techo_propio')->default(0);
			$table->string('fecha_techo', 32)->default('0');
			$table->integer('iniciando_negocios')->default(0);
			$table->string('fecha_negocio', 32)->default('0');
			$table->integer('lugar_trabajo')->default(0);
			$table->string('fecha_trabajo', 32)->default('0');
			$table->integer('cerrajero')->default(0);
			$table->integer('nro_forzado')->default(0);
			$table->string('fecha_forzado', 32)->default('0');
			$table->integer('piloto_experto')->default(0);
			$table->integer('ganadas')->default(0);
			$table->string('fecha_ganadas', 32)->default('0');
			$table->integer('negocio_redondo')->default(0);
			$table->integer('cosecha')->default(0);
			$table->string('fecha_cosecha', 32)->default('0');
			$table->integer('marihuanero')->nullable()->default(0);
			$table->integer('porros')->default(0);
			$table->string('fecha_porros', 32)->default('0');
			$table->string('mensaje', 135)->default('Nada para decir.');
			$table->string('pais', 32)->default('Desconocido');
			$table->integer('mes')->default(0);
			$table->integer('dia')->default(0);
			$table->integer('ano')->default(0);
			$table->integer('mostrar_edad')->default(0);
			$table->integer('perfil')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logros');
	}

}

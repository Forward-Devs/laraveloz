<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropiedadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propiedades', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->primary();
			$table->integer('IDPropietario');
			$table->string('Propietario', 40)->index('Propietario');
			$table->integer('EnVenta');
			$table->integer('Precio');
			$table->integer('EnUso');
			$table->float('PosX', 10, 0);
			$table->float('PosY', 10, 0);
			$table->float('PosZ', 10, 0);
			$table->float('PosXS', 10, 0);
			$table->float('PosYS', 10, 0);
			$table->float('PosZS', 10, 0);
			$table->float('PosA', 10, 0);
			$table->float('PosAS', 10, 0);
			$table->integer('Nivel');
			$table->integer('Tipo');
			$table->integer('EnVentaPor');
			$table->integer('Interior');
			$table->integer('InteriorID');
			$table->integer('Abierta');
			$table->integer('Sprunk');
			$table->integer('Cerveza');
			$table->integer('Aquarius');
			$table->integer('Pizzas');
			$table->integer('Vino');
			$table->integer('AK47');
			$table->integer('M4');
			$table->integer('EscopetaNormal');
			$table->integer('EscopetaDeCombate');
			$table->integer('MP5');
			$table->integer('9mm');
			$table->integer('9mmSilenciada');
			$table->integer('DesertEagle');
			$table->integer('Rifle');
			$table->integer('Granada');
			$table->integer('Manopla');
			$table->integer('Cuchillo');
			$table->integer('Katana');
			$table->integer('Medicamentos');
			$table->integer('Crack');
			$table->integer('VW');
			$table->integer('Camara');
			$table->integer('Flores');
			$table->integer('Pala');
			$table->integer('BateDeBeisbol');
			$table->integer('PaloDeGolf');
			$table->float('GX', 10, 0);
			$table->float('GY', 10, 0);
			$table->float('GZ', 10, 0);
			$table->float('GA', 10, 0);
			$table->string('Localizacion', 80);
			$table->integer('Ganancias')->default(0);
			$table->integer('PaloDeBillar');
			$table->integer('ConsoladorRosa');
			$table->integer('VibradorBlanco');
			$table->integer('GranVibradorBlanco');
			$table->integer('VibradorPlateado');
			$table->integer('Baston');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('propiedades');
	}

}

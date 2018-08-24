<?php

use Illuminate\Database\Seeder;

class CantidadVehiculosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cantidad_vehiculos')->delete();
        
        \DB::table('cantidad_vehiculos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'Cantidad' => '103',
            ),
        ));
        
        
    }
}
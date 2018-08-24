<?php

use Illuminate\Database\Seeder;

class RegistrosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('registros')->delete();
        
        \DB::table('registros')->insert(array (
            0 => 
            array (
                'id' => 1,
                'Cantidad' => 12,
            ),
        ));
        
        
    }
}
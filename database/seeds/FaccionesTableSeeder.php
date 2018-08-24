<?php

use Illuminate\Database\Seeder;

class FaccionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('facciones')->delete();
        
        \DB::table('facciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fecha' => '01/01/2016',
                'Nombre' => 'S.A.P.D',
                'Integrantes' => 7,
                'Lider' => 'Hahn',
                'Rango1' => 'Cadete',
                'Rango2' => 'Oficial',
                'Rango3' => 'Cabo',
                'Rango4' => 'Sargento',
                'Rango5' => 'Teniente',
                'Rango6' => 'Lider',
                'tipobanda' => 'Policia',
                'territorio' => 'San Andreas',
                'MaxIntegrantes' => 40,
                'Rango5Inv' => 0,
                'Rango5Exp' => 0,
                'Rango5Edi' => 0,
                'Rango4Inv' => 0,
                'Rango4Exp' => 0,
                'Rango4Edi' => 0,
                'Rango3Inv' => 0,
                'Rango3Exp' => 0,
                'Rango3Edi' => 0,
                'Rango2Inv' => 0,
                'Rango2Exp' => 0,
                'Rango2Edi' => 0,
                'Rango1Inv' => 0,
                'Rango1Exp' => 0,
                'Rango1Edi' => 0,
            ),
        ));
        
        
    }
}
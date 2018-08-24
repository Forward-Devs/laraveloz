<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PropiedadesTableSeeder::class);
        $this->call(CantidadVehiculosTableSeeder::class);
        $this->call(FaccionesTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(RegistrosTableSeeder::class);
    }
}

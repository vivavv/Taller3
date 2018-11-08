<?php

use Illuminate\Database\Seeder;

class EstadosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([ 
            'nombre' => "En Alquiler",
        ]);
        DB::table('estados')->insert([ 
            'nombre' => "En Venta",
        ]);
        DB::table('estados')->insert([ 
            'nombre' => "Alquilada",
        ]);
        DB::table('estados')->insert([ 
            'nombre' => "Vendida",
        ]);
    }
}

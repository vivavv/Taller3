<?php

use Illuminate\Database\Seeder;

class UbicacionesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Valencia",
        ]);
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Caracas",
        ]);
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Lara",
        ]);
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Merida",
        ]);
                DB::table('ubicaciones')->insert([ 
            'nombre' => "Trujillo",
        ]);
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Tachira",
        ]);
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Amazonas",
        ]);
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Zulia",
        ]);
                DB::table('ubicaciones')->insert([ 
            'nombre' => "Maracay",
        ]);
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Guarico",
        ]);
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Apure",
        ]);
        DB::table('ubicaciones')->insert([ 
            'nombre' => "Sucre",
        ]);
    }
}

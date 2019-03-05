<?php

use Illuminate\Database\Seeder;

class gradoModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\grado::create(['grado' => 'Lactante']);
        App\Models\grado::create(['grado' => 'Maternal']);
        App\Models\grado::create(['grado' => 'Preescolar']);
        App\Models\grado::create(['grado' => 'Primero']);
        App\Models\grado::create(['grado' => 'Segundo']);
        App\Models\grado::create(['grado' => 'Tercero']);
        App\Models\grado::create(['grado' => 'Graduado']);

        App\Models\seccion::create(['seccion' => 'lactante I' , 'grado_id' => 1]);
        App\Models\seccion::create(['seccion' => 'lactante II' , 'grado_id' => 1]);
        App\Models\seccion::create(['seccion' => 'lactante III' , 'grado_id' => 1]);
        App\Models\seccion::create(['seccion' => 'lactante IV' , 'grado_id' => 1]);

        App\Models\seccion::create(['seccion' => 'Maternal I' , 'grado_id' => 2]);
        App\Models\seccion::create(['seccion' => 'Maternal II' , 'grado_id' => 2]);
        App\Models\seccion::create(['seccion' => 'Maternal III' , 'grado_id' => 2]);
        App\Models\seccion::create(['seccion' => 'Maternal IV' , 'grado_id' => 2]);

        App\Models\seccion::create(['seccion' => 'Preescolar I' , 'grado_id' => 3]);
        App\Models\seccion::create(['seccion' => 'Preescolar II' , 'grado_id' => 3]);
        App\Models\seccion::create(['seccion' => 'Preescolar III' , 'grado_id' => 3]);
        App\Models\seccion::create(['seccion' => 'Preescolar IV' , 'grado_id' => 3]);
        App\Models\seccion::create(['seccion' => 'Preescolar VIII' , 'grado_id' => 3]);

        App\Models\seccion::create(['seccion' => 'Primero A' , 'grado_id' => 4]);
        App\Models\seccion::create(['seccion' => 'Primero B' , 'grado_id' => 4]);

        App\Models\seccion::create(['seccion' => 'Segundo A' , 'grado_id' => 5]);
        App\Models\seccion::create(['seccion' => 'Segundo B' , 'grado_id' => 5]);

        App\Models\seccion::create(['seccion' => 'Tercero Unico' , 'grado_id' => 6]);
    }
}

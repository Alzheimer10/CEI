<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(estudianteModelSeeder::class);
        $this->call(representanteModelSeeder::class);
        $this->call(gradoModelSeeder::class);
        $this->call(seccionModelSeeder::class);
    }
}

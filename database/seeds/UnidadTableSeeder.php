<?php

use App\Unidad;
use Illuminate\Database\Seeder;

class UnidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidad         = new Unidad();
        $unidad->unidad = "Pieza";
        $unidad->save();

        $unidad         = new Unidad();
        $unidad->unidad = "Mililitro";
        $unidad->save();
    }
}

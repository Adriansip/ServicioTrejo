<?php

use App\Marca;
use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca        = new Marca();
        $marca->marca = "HP";
        $marca->save();

        $marca        = new Marca();
        $marca->marca = "Lexmark";
        $marca->save();

        $marca        = new Marca();
        $marca->marca = "Canon";
        $marca->save();
    }
}

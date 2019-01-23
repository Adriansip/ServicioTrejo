<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria            = new Categoria();
        $categoria->categoria = "consumibles";
        $categoria->save();

        $categoria            = new Categoria();
        $categoria->categoria = "impresoras";
        $categoria->save();

        $categoria            = new Categoria();
        $categoria->categoria = "dispositivos";
        $categoria->save();
    }
}

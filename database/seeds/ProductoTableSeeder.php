<?php

use App\Producto;
use Illuminate\Database\Seeder;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto              = new Producto();
        $producto->producto    = "Cartucho B/N";
        $producto->idCategoria = 1; //Categoria de consumibles
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 1; //Marca de HP
        $producto->descripcion = "Cartucho de tinta HP 670 50 ml";
        $producto->precio      = "210";
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Cartucho Color";
        $producto->idCategoria = 1; //Categoria de consumibles
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 1; //Marca de HP
        $producto->descripcion = "Cartucho de tinta HP 670 (RED) 50 ml";
        $producto->precio      = "210";
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Cartucho Color";
        $producto->idCategoria = 1; //Categoria de consumibles
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 1; //Marca de HP
        $producto->descripcion = "Cartucho de tinta HP 670 (Cyan) 50 ml";
        $producto->precio      = "210";
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Cartucho Color";
        $producto->idCategoria = 1; //Categoria de consumibles
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 1; //Marca de HP
        $producto->descripcion = "Cartucho de tinta HP 670 (Magenta) 50 ml";
        $producto->precio      = "210";
        $producto->save();

    }
}

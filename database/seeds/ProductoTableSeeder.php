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
        $producto->imagen      = 'cartuchos.jpg';
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Cartucho Color";
        $producto->idCategoria = 1; //Categoria de consumibles
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 1; //Marca de HP
        $producto->descripcion = "Cartucho de tinta HP 670 (RED) 50 ml";
        $producto->precio      = "210";
        $producto->imagen      = 'cartuchos.jpg';
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Cartucho Color";
        $producto->idCategoria = 1; //Categoria de consumibles
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 1; //Marca de HP
        $producto->descripcion = "Cartucho de tinta HP 670 (Cyan) 50 ml";
        $producto->precio      = "210";
        $producto->imagen      = 'cartuchos.jpg';
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Cartucho Color";
        $producto->idCategoria = 1; //Categoria de consumibles
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 1; //Marca de HP
        $producto->descripcion = "Cartucho de tinta HP 670 (Magenta) 50 ml";
        $producto->precio      = "210";
        $producto->imagen      = 'cartuchos.jpg';
        $producto->save();

        /*IMPRESORAS*/

        $producto              = new Producto();
        $producto->producto    = "Impresora B/N";
        $producto->idCategoria = 2; //Categoria de Impresoras
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 1; //Marca de HP
        $producto->descripcion = "Impresora de tinta HP";
        $producto->precio      = "2210";
        $producto->imagen      = 'impresoras.jpg';
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Impresora Color";
        $producto->idCategoria = 2; //Categoria de Impresoras
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 2; //Marca de Lexmark
        $producto->descripcion = "Impresora de tinta Lexmark";
        $producto->precio      = "1210";
        $producto->imagen      = 'impresoras.jpg';
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Impresora Mutifuncional";
        $producto->idCategoria = 2; //Categoria de Impresoras
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 2; //Marca de Lexmark
        $producto->descripcion = "Impresora de tinta Lexmark";
        $producto->precio      = "1700";
        $producto->imagen      = 'impresoras.jpg';
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Impresora Color";
        $producto->idCategoria = 2; //Categoria de Impresoras
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 2; //Marca de Lexmark
        $producto->descripcion = "Impresora de tinta Lexmark 670 (Magenta) 50 ml";
        $producto->precio      = "210";
        $producto->imagen      = 'impresoras.jpg';
        $producto->save();

        /*DISPOSITIVOS*/

        $producto              = new Producto();
        $producto->producto    = "Mouse inalambrico";
        $producto->idCategoria = 3; //Categoria de dispositivos
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 3; //Marca de Canon
        $producto->descripcion = "Mouse Tkin Pad";
        $producto->precio      = "460";
        $producto->imagen      = 'dispositivos.jpg';
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Mouse inalambrico";
        $producto->idCategoria = 3; //Categoria de dispositivos
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 3; //Marca de Canon
        $producto->descripcion = "Mouse Tkin Pad";
        $producto->precio      = "460";
        $producto->imagen      = 'dispositivos.jpg';
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Mouse inalambrico";
        $producto->idCategoria = 3; //Categoria de dispositivos
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 3; //Marca de Canon
        $producto->descripcion = "Mouse Tkin Pad";
        $producto->precio      = "460";
        $producto->imagen      = 'dispositivos.jpg';
        $producto->save();

        $producto              = new Producto();
        $producto->producto    = "Mouse inalambrico";
        $producto->idCategoria = 3; //Categoria de dispositivos
        $producto->idUnidad    = 1; //Unidad de pieza
        $producto->idMarca     = 3; //Marca de Canon
        $producto->descripcion = "Mouse Tkin Pad";
        $producto->precio      = "460";
        $producto->imagen      = 'dispositivos.jpg';
        $producto->save();
    }
}

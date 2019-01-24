<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Producto;
use Illuminate\Http\Request;
use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::where('idCategoria', 1)->get();
        $marcas    = Marca::all();

        return view('Productos.index', compact('productos', 'marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productosCategoria($idCategoria)
    {
        $productos = Producto::where('idCategoria', $idCategoria)->get();
        return view('Productos.categoria', compact('productos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscador($idCategoria, $idMarca, $precio, $dato)
    {
        $productos = null;
        if ($idMarca != '0') {
            if ($precio != '0') {
                if ($dato != '0') {
                    $productos = Producto::where('idCategoria', $idCategoria)
                        ->where('idMarca', $idMarca)
                        ->where('precio', '<=', $precio)
                        ->where(function ($q) use ($dato) {
                            $q->where('descripcion', 'like', ['%' . $dato . '%'])
                                ->orWhere('descripcion', 'like', ['%' . $dato . '%']);
                        })->get();
                } else {
                    $productos = Producto::where('idCategoria', $idCategoria)
                        ->where('idMarca', $idMarca)
                        ->where('precio', '<=', $precio)->get();
                }
            }
            if ($dato != '0') {
                $productos = Producto::where('idCategoria', $idCategoria)
                    ->where('idMarca', $idMarca)
                    ->where(function ($q) use ($dato) {
                        $q->where('producto', 'like', ['%' . $dato . '%'])
                            ->orWhere('descripcion', 'like', ['%' . $dato . '%']);
                    })->get();
            } else {
                $productos = Producto::where('idCategoria', $idCategoria)
                    ->where('idMarca', $idMarca)->get();
            }
        } else {
            if ($precio != '0') {
                if ($dato != '0') {
                    $productos = Producto::where('idCategoria', $idCategoria)
                        ->where('precio', '<=', $precio)
                        ->where(function ($q) use ($dato) {
                            $q->where('producto', 'like', ['%' . $dato . '%'])
                                ->orWhere('descripcion', 'like', ['%' . $dato . '%']);
                        })->get();
                } else {
                    $productos = Producto::where('idCategoria', $idCategoria)
                        ->where('precio', '<=', $precio)->get();
                }
            }

            if ($dato != '0') {
                $productos = Producto::where('idCategoria', $idCategoria)
                    ->where(function ($q) use ($dato) {
                        $q->where('producto', 'like', ['%' . $dato . '%'])
                            ->orWhere('descripcion', 'like', ['%' . $dato . '%']);
                    })->get();
            } else {
                $productos = Producto::where('idCategoria', $idCategoria)->get();
            }
        }

        if (count($productos) == 0) {
            Session::flash('message', '0 Resultados encontrados');
            Session::flash('class', 'warning');
        } else {
            Session::flash('message', count($productos) . ' Resultados encontrados');
            Session::flash('class', 'success');
        }

        return view('Productos.categoria', compact('productos'));

    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function edit($id)
    {
        //
    }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function update(Request $request, $id)
    {
        //
    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {
        //
    }
}

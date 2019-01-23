<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = ['producto', 'descripcion', 'idCategoria', 'idMarca', 'idUnidad', 'precio'];

    protected $primaryKey = 'idProducto';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'idMarca');
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'idUnidad');
    }

    public function solicitudes_producto()
    {
        return $this->belongsToMany(SolicitudProducto::class, 'idProducto');
    }
}

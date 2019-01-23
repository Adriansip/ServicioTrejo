<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudProducto extends Model
{
    protected $table = 'solicitud_productos';

    protected $fillable = ['folioSolicitud', 'idProducto', 'cantidad', 'idCliente', 'fechaSolicitud', 'observaciones', 'subtotal', 'adicional', 'total', 'idEstatus'];

    protected $primaryKey = 'idSolicitud';

    public function producto()
    {
        return $this->hasOne(Producto::class, 'idProducto');
    }

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'idCliente');
    }

    public function estatus()
    {
        return $this->hasOne(Estatus::class, 'idEstatus');
    }
}

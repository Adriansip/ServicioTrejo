<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    protected $table = 'estatus';

    protected $fillable = ['estatus'];

    protected $primaryKey = 'idEstatus';

    public function solicitud_producto()
    {
        return $this->belongsTo(SolicitudProducto::class, 'idEstatus');
    }

    public function solicitud_servicio()
    {
        return $this->belongsTo(SolicitudServicio::class, 'idEstatus');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudServicio extends Model
{
    protected $table = 'solicitud_servicios';

    protected $fillable = ['folioSolicitud', 'idServicio', 'idCliente', 'fechaSolicitud', 'observaciones', 'subtotal', 'adicional', 'total', 'idEstatus'];

    protected $primaryKey = 'idSolicitud';

    public function servicio()
    {
        return $this->hasOne(Servicio::class, 'idservicio');
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

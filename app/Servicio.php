<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    protected $fillable = ['servicio', 'descripcion', 'precio', 'observacion'];

    protected $primaryKey = 'idServicio';

    public function solicitudes_servicio()
    {
        return $this->belongsToMany(SolicitudServicio::class, 'idServicio');
    }
}

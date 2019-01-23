<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidades';

    protected $fillable = ['unidad'];

    protected $primaryKey = 'idUnidad';

    public function productos()
    {
        return $this->hasMany(Producto::class, 'idProducto');
    }
}

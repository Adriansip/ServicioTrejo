<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    protected $fillable = ['marca'];

    protected $primaryKey = 'idMarca';

    public function productos()
    {
        return $this->hasMany(Marca::class, 'idMarca');
    }
}

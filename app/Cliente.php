<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['nombre', 'email', 'telefono', 'idUsuario', 'idCiudad', 'direccion', 'RFC'];

    protected $primaryKey = 'idCliente';

    public function usuario()
    {
        return $this->hasOne(User::class, 'idUsuario', 'id');
    }

    public function ciudad()
    {
        return $this->hasOne(Ciudad::class, 'idCiudad');
    }
}

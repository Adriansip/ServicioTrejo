<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    protected $fillable = ['rol'];

    protected $primaryKey = 'idRol';

    public function usuarios()
    {
        return $this->hasMany(Users::class, 'idRol', 'id');
    }
}

<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rol()
    {
        return $this->hasOne(Rol::class, 'idRol');
    }

    public function hasRol($rol)
    {
        if ($this->rol()->where('rol', $rol)->first()) {
            return true;
        }
        return false;
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id', 'idUsuario');
    }
}

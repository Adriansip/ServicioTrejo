<?php

use App\Rol;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol      = new Rol();
        $rol->rol = 'admin';
        $rol->save();

        $rol      = new Rol();
        $rol->rol = 'cliente';
        $rol->save();
    }
}

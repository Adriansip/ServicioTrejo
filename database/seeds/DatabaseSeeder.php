<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Recuerda que hay que ejecutar uno a uno desde consola
        o comentar los que ya esten*/
        $this->call(RolTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(UnidadTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
    }
}

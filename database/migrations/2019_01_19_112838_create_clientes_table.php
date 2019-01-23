<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idCliente');
            $table->string('nombre');
            $table->string('email')->unique()->nullable();
            $table->string('telefono')->nullable();
            $table->integer('idUsuario')->unsigned()->nullable();
            $table->integer('idCiudad')->unsigned()->nullable();
            $table->text('direccion')->nullable();
            $table->string('RFC')->nullable();
            $table->timestamps();

            $table->foreign('idUsuario')
                ->references('id')->on('users')
                ->onDelete('set null');

            $table->foreign('idCiudad')
                ->references('idCiudad')->on('ciudades')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('clientes_id_foreign');
            $table->dropForeign('clientes_idCiudad_foreign');
        });

        Schema::dropIfExists('clientes');
    }
}

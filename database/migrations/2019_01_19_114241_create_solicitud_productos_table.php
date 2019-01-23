<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_productos', function (Blueprint $table) {
            $table->increments('idSolicitud');
            $table->string('folioSolicitud');
            $table->integer('idProducto')->unsigned()->nullable();
            $table->float('cantidad')->nullable();
            $table->integer('idCliente')->unsigned()->nullable();;
            $table->date('fechaSolicitud');
            $table->text('observaciones')->nullable();
            $table->float('subtotal')->nullable();
            $table->float('adicional')->nullable();
            $table->float('total')->nullable();
            $table->integer('idEstatus')->unsigned()->nullable();;
            $table->timestamps();

            $table->foreign('idProducto')
                ->references('idProducto')->on('productos')
                ->onDelete('set null');

            $table->foreign('idCliente')
                ->references('idCliente')->on('clientes')
                ->onDelete('set null');

            $table->foreign('idEstatus')
                ->references('idEstatus')->on('estatus')
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
        Schema::table('solicitud_productos', function (Blueprint $table) {
            $table->dropForeign('solicitud_productos_idProducto_foreign');
            $table->dropForeign('solicitud_productos_idCliente_foreign');
            $table->dropForeign('solicitud_productos_idEstatus_foreign');
        });

        Schema::dropIfExists('solicitud_productos');
    }
}

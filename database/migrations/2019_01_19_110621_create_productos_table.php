<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idProducto');
            $table->string('producto');
            $table->integer('idCategoria')->unsigned()->nullable();
            $table->integer('idUnidad')->unsigned()->nullable();
            $table->integer('idMarca')->unsigned()->nullable();
            $table->text('descripcion')->nullable();
            $table->float('precio')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();

            $table->foreign('idCategoria')
                ->references('idCategoria')->on('categorias')
                ->onDelete('set null');

            $table->foreign('idUnidad')
                ->references('idUnidad')->on('unidades')
                ->onDelete('set null');

            $table->foreign('idMarca')
                ->references('idMarca')->on('marcas')
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
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('productos_idCategoria_foreign');
            $table->dropForeign('productos_idUnidad_foreign');
            $table->dropForeign('productos_idMarca_foreign');
        });
        Schema::dropIfExists('productos');
    }
}

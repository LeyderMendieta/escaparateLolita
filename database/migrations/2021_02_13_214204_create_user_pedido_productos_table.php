<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPedidoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pedido_productos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user_pedido')->index();
            $table->integer('id_product')->index();
            $table->text('talla_selected');
            $table->text('color_selected');
            $table->integer('cantidad');
            $table->float("precio",50);
            $table->float("total",50);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_pedido_productos');
    }
}

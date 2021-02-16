<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->index();
            $table->integer('id_user_card')->index();
            $table->integer('id_user_address')->index();
            $table->integer("id_cupon")->index();
            $table->float("subtotal",50);
            $table->float("total",50);
            $table->integer("iva");
            $table->string("metodo_pago",100);
            $table->string("estado",50);
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
        Schema::dropIfExists('user_pedidos');
    }
}

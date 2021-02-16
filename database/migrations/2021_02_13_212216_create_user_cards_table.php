<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->index();
            $table->string("tipo",50);
            $table->bigInteger("numero");
            $table->integer("ccv");
            $table->string("pais",50);
            $table->string("nombre_tarjeta",100);
            $table->integer("mes_expiracion");
            $table->integer("ano_expiracion");
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
        Schema::dropIfExists('user_cards');
    }
}

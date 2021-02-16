<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->index();
            $table->string("tipo",20);
            $table->string("referencia",100);
            $table->string("direccion",100);
            $table->string("apartamento",50);
            $table->string("ciudad",50)->nullable(true);
            $table->string("pais",50);
            $table->integer("codigo_postal");
            $table->string("telefono");
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
        Schema::dropIfExists('user_addresses');
    }
}

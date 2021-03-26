<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string("tipo",50);
            $table->string("texto");
            $table->string("logo");
            $table->string("link");
            $table->boolean("visto")->default(0);
            $table->integer("id_usuario_lectura")->index()->nullable();
            $table->dateTime("fecha_lectura")->nullable();
            $table->integer("id_usuario_creacion")->index()->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}

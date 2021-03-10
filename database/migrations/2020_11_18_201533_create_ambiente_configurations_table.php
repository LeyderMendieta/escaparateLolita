<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbienteConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambiente_configurations', function (Blueprint $table) {
            $table->id();
            $table->text("url_embed_video_home");
            $table->text("imagen_video_home");
            $table->text("url_producto_2_home");
            $table->text("imagen_2_home");
            $table->text("url_producto_3_home");
            $table->text("imagen_3_home");
            $table->text("url_producto_5_home");
            $table->text("imagen_instagram_1_home");
            $table->text("imagen_instagram_2_home");
            $table->text("imagen_instagram_3_home");
            $table->text("imagen_instagram_4_home");
            $table->text("url_nueva_colleccion");
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
        Schema::dropIfExists('ambiente_configurations');
    }
}

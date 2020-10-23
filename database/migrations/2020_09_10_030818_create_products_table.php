<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('acceso_url', 100)->unique();
            $table->text("name");
            $table->text("descripcion");
            $table->float("precio_antes")->nullable(true);
            $table->float("precio_ahora")->nullable(true);
            $table->text("imagen_main");
            $table->text("imagen_secundaria");
            $table->text("imagen_1_180x180")->nullable(true);
            $table->text("imagen_1_960x1286")->nullable(true);
            $table->text("imagen_2_180x180")->nullable(true);
            $table->text("imagen_2_960x1286")->nullable(true);
            $table->text("imagen_3_180x180")->nullable(true);
            $table->text("imagen_3_960x1286")->nullable(true);
            $table->text("imagen_4_180x180")->nullable(true);
            $table->text("imagen_4_960x1286")->nullable(true);
            $table->text("sizes");
            $table->text("colores");
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
        Schema::dropIfExists('products');
    }
}

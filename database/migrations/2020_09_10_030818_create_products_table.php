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
            $table->text("politica_entrega");
            $table->text("entrega");
            $table->text("devoluciones");
            $table->float("precio_antes",50)->nullable(true);
            $table->float("precio_ahora",50)->nullable(true);
            $table->text("imagen_main")->nullable(true);
            $table->text("imagen_secundaria")->nullable(true);
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
            $table->text("categorias");
            $table->boolean("entallaje");
            $table->boolean("pieza_unica");
            $table->integer("stock");
            $table->integer("porcentaje_descuento")->nullable(true);
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

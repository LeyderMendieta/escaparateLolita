<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_products', function (Blueprint $table) {
            $table->id();
            $table->integer("id_producto")->index();
            $table->integer("rating");
            $table->text("comentario");
            $table->string("correo",150);
            $table->string("autor",150);
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
        Schema::dropIfExists('rating_products');
    }
}

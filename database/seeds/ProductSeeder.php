<?php

use App\Product;
use App\ProductPrices;
use App\ProductTarget;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $referencias = array();

        $i = 0;
        while($i < 25)
        {
            $product = Product::create([
                'acceso_url' => Str::random(20).Str::random(20),
                'name' => "producto ".Str::random(10),
                'descripcion' => Str::random(20)." ".Str::random(10)." estando a pesar de todo en el juego implicido",
                'precio_antes' => rand(10,100),
                'precio_ahora' => rand(100,1000),
                'imagen_main' => "product-17-300x410.jpg",
                'imagen_secundaria' => "product-15-300x410.jpg",
                'sizes' => '["M", "X", "L"]',
                'colores'=> '["azul", "verde", "rojo"]'
            ]);
            $i++;

            if($i < 6)
            {
                array_push($referencias,$product);
            }

        }

        foreach($referencias as $fila)
        {
            ProductTarget::create([
                'id_product' => $fila->id,
                'target_on' => 'reference_must_have'
            ]);
        }

    }
}

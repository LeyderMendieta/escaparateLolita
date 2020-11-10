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
                'imagen_1_180x180' => "product-19-180x180.jpg",
                'imagen_1_960x1286' => "product-19.jpg",
                'imagen_2_180x180' => "product-17-180x180.jpg",
                'imagen_2_960x1286' => "product-17.jpg",
                'imagen_3_180x180' => "product-13-180x180.jpg",
                'imagen_3_960x1286' => "product-13.jpg",
                'imagen_4_180x180' => "product-15-180x180.jpg",
                'imagen_4_960x1286' => "product-15.jpg",
                'sizes' => '["M", "X", "L"]',
                'colores'=> '["azul", "verde", "rojo"]',
                "entallaje" => true,
                "pieza_unica" => false,
                "stock" => 20
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

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
        $referenciasBrands = array();

        $product1 = Product::create([
            'acceso_url' => Str::random(20).Str::random(20),
            'name' => "Halter Bodysuit",
            'descripcion' => "General Delivery Information. US Standard: Within 3 working days – $5 or FREE when you spend over $200 US Premium: Order by 12pm Mon – Fri, for delivery the next working day – $10 We also offer the option to add a personalised gift message if you are looking to treat that certain someone. Simply choose the gift message option at checkout and your message will be presented on a branded pink card.",
            'imagen_main' => "must_have_2_175x235.jpg", //pendiente de Actualizacion
            'imagen_secundaria' => "must_have_2_175x235.jpg", //pendiente de Actualizacion
            'sizes' => json_encode(array('M','S')),
            'colores'=> json_encode(array('Blanco','Negro'))
        ]); 
        array_push($referencias,$product1);

        $product2 = Product::create([
            'acceso_url' => Str::random(20).Str::random(20),
            'name' => "Sexy Long Line Plunge Bra and Sexy Thong",
            'descripcion' => "General Delivery Information. US Standard: Within 3 working days – $5 or FREE when you spend over $200 US Premium: Order by 12pm Mon – Fri, for delivery the next working day – $10 We also offer the option to add a personalised gift message if you are looking to treat that certain someone. Simply choose the gift message option at checkout and your message will be presented on a branded pink card.",
            'imagen_main' => "must_have_2_175x235.jpg",
            'imagen_secundaria' => "must_have_2_175x235.jpg",
            'sizes' => json_encode(array('M','S')),
            'colores'=> json_encode(array('Blanco','Negro'))
        ]);
        array_push($referencias,$product2);

        $product3 = Product::create([
            'acceso_url' => Str::random(20).Str::random(20),
            'name' => "Smooth Raw Cut Hiphugger",
            'descripcion' => "General Delivery Information. US Standard: Within 3 working days – $5 or FREE when you spend over $200 US Premium: Order by 12pm Mon – Fri, for delivery the next working day – $10 We also offer the option to add a personalised gift message if you are looking to treat that certain someone. Simply choose the gift message option at checkout and your message will be presented on a branded pink card.",
            'imagen_main' => "must_have_3_175x235.jpg",
            'imagen_secundaria' => "must_have_3_175x235.jpg",
            'sizes' => json_encode(array('M','S')),
            'colores'=> json_encode(array('Naranja','Negro'))
        ]);
        array_push($referencias,$product3);

        $product4 = Product::create([
            'acceso_url' => Str::random(20).Str::random(20),
            'name' => "Strapless Bikini Top & Bottom",
            'descripcion' => "General Delivery Information. US Standard: Within 3 working days – $5 or FREE when you spend over $200 US Premium: Order by 12pm Mon – Fri, for delivery the next working day – $10 We also offer the option to add a personalised gift message if you are looking to treat that certain someone. Simply choose the gift message option at checkout and your message will be presented on a branded pink card.",
            'imagen_main' => "must_have_4_175x235.jpg",
            'imagen_secundaria' => "must_have_4_175x235.jpg",
            'sizes' => json_encode(array('M','S')),
            'colores'=> json_encode(array('Verde','Negro'))
        ]);
        array_push($referencias,$product4);

        $product5 = Product::create([
            'acceso_url' => Str::random(20).Str::random(20),
            'name' => "Crochet Lace Triangle Bralette",
            'descripcion' => "General Delivery Information. US Standard: Within 3 working days – $5 or FREE when you spend over $200 US Premium: Order by 12pm Mon – Fri, for delivery the next working day – $10 We also offer the option to add a personalised gift message if you are looking to treat that certain someone. Simply choose the gift message option at checkout and your message will be presented on a branded pink card.",
            'imagen_main' => "must_have_5_175x235.jpg",
            'imagen_secundaria' => "must_have_5_175x235.jpg",
            'sizes' => json_encode(array('M','S')),
            'colores'=> json_encode(array('Gris','Negro'))
        ]);
        array_push($referencias,$product5);

        foreach($referencias as $fila)
        {
            ProductTarget::create([
                'id_product' => $fila->id,
                'target_on' => 'reference_must_have'
            ]);
        }

        $i = 0;
        while($i < 25)
        {
            $product = Product::create([
                'acceso_url' => Str::random(20).Str::random(20),
                'name' => Str::random(20),
                'descripcion' => Str::random(150),
                'imagen_main' => "must_have_5_175x235.jpg",
                'imagen_secundaria' => "must_have_5_175x235.jpg",
                'sizes' => json_encode(array('L','S')),
                'colores'=> json_encode(array('Gris','Negro'))
            ]);
            $i++;
        }        
    }
}

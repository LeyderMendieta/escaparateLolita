<?php

use App\ProductBrand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        while($i < 8)
        {
            $i++;
            ProductBrand::create([
                'marca' => "Marca Nombre $i",
                'descripcion' => Str::random(200),
                "imagen" => "brand.png",
                "url" => "https://www.facebook.com/tumarcaqui/"
            ]);
            
        }
    }
}

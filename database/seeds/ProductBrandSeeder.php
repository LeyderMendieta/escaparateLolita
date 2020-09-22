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
        ProductBrand::create([
            'marca' => "Marca Nombre 1",
            'descripcion' => Str::random(200),
            "imagen" => "brand.png"
        ]);
        ProductBrand::create([
            'marca' => "Marca Nombre 2",
            'descripcion' => Str::random(200),
            "imagen" => "brand.png"
        ]);
        ProductBrand::create([
            'marca' => "Marca Nombre 3",
            'descripcion' => Str::random(200),
            "imagen" => "brand.png"
        ]);
        ProductBrand::create([
            'marca' => "Marca Nombre 4",
            'descripcion' => Str::random(200),
            "imagen" => "brand.png"
        ]);
        ProductBrand::create([
            'marca' => "Marca Nombre 5",
            'descripcion' => Str::random(200),
            "imagen" => "brand.png"
        ]);
        ProductBrand::create([
            'marca' => "Marca Nombre 6",
            'descripcion' => Str::random(200),
            "imagen" => "brand.png"
        ]);
        ProductBrand::create([
            'marca' => "Marca Nombre 7",
            'descripcion' => Str::random(200),
            "imagen" => "brand.png"
        ]);
        ProductBrand::create([
            'marca' => "Marca Nombre 8",
            'descripcion' => Str::random(200),
            "imagen" => "brand.png"
        ]);
    }
}

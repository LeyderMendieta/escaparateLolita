<?php

namespace Tests\Feature;

use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductPostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPostProduct()
    {
        $producto = factory(Product::class)->make();

        $response = $this->json('POST','/api/product',[
            'name' => $producto->name,
            'descripcion' => $producto->descripcion
        ]);

        $response->assertJsonStructure(['id','name','descripcion'])->assertStatus(201);

        $this->assertDatabaseHas('products',[
            'name' => $producto->name,
            'descripcion' => $producto->descripcion
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $wallet = Product::all();
        return response()->json($wallet, 200);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->descripcion = $request->descripcion;
        $product->save();

        return response()->json($product,201);
    }

    public function verProducto($producto)
    {
        return view("store.shop-single");
    }
}


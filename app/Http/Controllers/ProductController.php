<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($type)
    {
        $products = DB::table('products')
            ->join('product_targets', 'products.id', '=', 'product_targets.id_product')
            ->select('products.*','product_targets.target_on')
            ->where('product_targets.target_on', "reference_must_have")
            ->get();
        return response()->json($products, 200);
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


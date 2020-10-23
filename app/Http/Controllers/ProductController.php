<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index($type)
    {
        $products = DB::table('products')
            ->join('product_targets', 'products.id', '=', 'product_targets.id_product')
            ->select('products.*','product_targets.target_on')
            ->where('product_targets.target_on',$type)
            ->get();
        return response()->json($products, 200);
    }

    public function getProducts()
    {
        $products = Product::query()->orderBy('id', 'DESC')->paginate(10);

        return response()->json($products, 200);
    }

    public function getAllProducts()
    {
        $products = DB::table('products')->get();

        return response()->json($products, 200);
    }

    public function getBrands()
    {
        $brands = DB::table('product_brands')
            ->get();
        return response()->json($brands, 200);
    }

    public function guardarFile(Request $request)
    {
        $resultado = [];
        $uploaddir = __DIR__.'/../../../public/images/';

        $list_images = ["imagen_main","imagen_secundaria"];
        foreach($list_images as $fila)
        {
            $nameFile  = Str::random(20).date('dmymis').".".substr(strrchr(basename($_FILES[$fila]['name']), '.'), 1);
            $uploadfile = $uploaddir . $nameFile;
            
            if (move_uploaded_file($_FILES[$fila]['tmp_name'], $uploadfile)) {
                $resultado[$fila] = $nameFile;
            } else {
                $resultado[$fila] = "error";
            }
        }
        
        return response()->json(array("files"=> $resultado));
    }

    public function crearProducto(Request $request)
    {
        $producto = new Product();
        $producto->acceso_url = Str::random(20).Str::random(18).date('d');
        $producto->name = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio_antes = $request->precio_antes;
        $producto->precio_ahora = $request->precio_ahora;
        $producto->imagen_main = $request->imagen_main;
        $producto->imagen_secundaria = $request->imagen_secundaria;
        $producto->sizes = $request->tallas;
        $producto->colores = $request->colores;
        $producto->save();
                
        return response()->json(array("file"=> $producto));
    }

    public function viewProductDetail($product)
    {
        $products = DB::table('products')
            ->where('acceso_url',$product)
            ->get();
        return response()->json($products, 200);
    }

    public function verProducto($producto)
    {
        $product = DB::table('products')
            ->where('acceso_url',$producto)
            ->get();
        if(!isset($product[0])) return view("404");
        else return view("store.shop-single",["producto" => $producto,"info_product" => $product[0]]);
    }

    public function removeProduct($producto)
    {
        $removed = DB::table('products')->where('id', $producto)->delete();

        if($removed) $resultado = "success";
        else $resultado = "error";

        return response()->json(array("result"=>$resultado));
    }
}


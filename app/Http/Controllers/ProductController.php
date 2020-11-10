<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductTarget;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index($type)
    {
        $products = DB::table('products')
            ->join('product_targets', 'products.id', '=', 'product_targets.id_product')
            ->select('products.*','product_targets.target_on')
            ->where('product_targets.target_on',$type)->where("active",1)->limit(5)
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
        $products = DB::table('products')->orderBy('id', 'DESC')->get();

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

        $list_images = ["imagen_main","imagen_secundaria","producto_imagen_peque_1","producto_imagen_big_1","producto_imagen_peque_2","producto_imagen_big_2","producto_imagen_peque_3","producto_imagen_big_3","producto_imagen_peque_4","producto_imagen_big_4"];
        foreach($list_images as $fila)
        {
            if(isset($_FILES[$fila]['name']))
            {
                $nameFile  = Str::random(20).date('dmymis').".".substr(strrchr(basename($_FILES[$fila]['name']), '.'), 1);
                $uploadfile = $uploaddir . $nameFile;
                
                if (move_uploaded_file($_FILES[$fila]['tmp_name'], $uploadfile)) {
                    $resultado[$fila] = $nameFile;
                }
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
        $producto->sizes = $request->tallas;
        $producto->colores = $request->colores;
        $producto->entallaje = ($request->permite_entallaje == "true") ? 1 : 0;
        $producto->pieza_unica = ($request->unica_pieza == "true") ? 1 : 0;
        $producto->stock = $request->stock;
        
        $producto->imagen_main = $request->imagen_main;
        $producto->imagen_secundaria = $request->imagen_secundaria;
        $producto->imagen_1_180x180 = $request->producto_imagen_peque_1;
        $producto->imagen_1_960x1286 = $request->producto_imagen_big_1;
        $producto->imagen_2_180x180 = $request->producto_imagen_peque_2;
        $producto->imagen_2_960x1286 = $request->producto_imagen_big_2;
        $producto->imagen_3_180x180 = $request->producto_imagen_peque_3;
        $producto->imagen_3_960x1286 = $request->producto_imagen_big_3;
        $producto->imagen_4_180x180 = $request->producto_imagen_peque_4;
        $producto->imagen_4_960x1286 = $request->producto_imagen_big_4;

        $producto->save();
                
        return response()->json(array("producto"=> $producto));
    }

    public function editarProducto(Request $request)
    {
        $producto = Product::where("id",$request->id)->first();
        $producto->name = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio_antes = $request->precio_antes;
        $producto->precio_ahora = $request->precio_ahora;        
        $producto->sizes = $request->tallas;
        $producto->colores = $request->colores;
        $producto->entallaje = ($request->permite_entallaje == "true") ? 1 : 0;
        $producto->pieza_unica = ($request->unica_pieza == "true") ? 1 : 0;
        $producto->stock = $request->stock;

        if($request->imagen_main != "noset") $producto->imagen_main = $request->imagen_main;
        if($request->imagen_secundaria != "noset") $producto->imagen_secundaria = $request->imagen_secundaria;
        if($request->producto_imagen_peque_1 != "noset") $producto->imagen_1_180x180 = $request->producto_imagen_peque_1;
        if($request->producto_imagen_big_1 != "noset") $producto->imagen_1_960x1286 = $request->producto_imagen_big_1;
        if($request->producto_imagen_peque_2 != "noset") $producto->imagen_2_180x180 = $request->producto_imagen_peque_2;
        if($request->producto_imagen_big_2 != "noset") $producto->imagen_2_960x1286 = $request->producto_imagen_big_2;
        if($request->producto_imagen_peque_3 != "noset") $producto->imagen_3_180x180 = $request->producto_imagen_peque_3;
        if($request->producto_imagen_big_3 != "noset") $producto->imagen_3_960x1286 = $request->producto_imagen_big_3;
        if($request->producto_imagen_peque_4 != "noset") $producto->imagen_4_180x180 = $request->producto_imagen_peque_4;
        if($request->producto_imagen_big_4 != "noset") $producto->imagen_4_960x1286 = $request->producto_imagen_big_4;

        $producto->save();
                
        return response()->json(array("producto"=> $producto));
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

    public function actualizarProductosSugeridos(Request $request)
    {
        $updatingmasive = DB::table('product_targets')->where('target_on','reference_producto_sugerido')->delete();

        ProductTarget::create([
            'id_product' => $request->target1,
            'target_on' => 'reference_producto_sugerido'
        ]);

        ProductTarget::create([
            'id_product' => $request->target2,
            'target_on' => 'reference_producto_sugerido'
        ]);

        ProductTarget::create([
            'id_product' => $request->target3,
            'target_on' => 'reference_producto_sugerido'
        ]);

        ProductTarget::create([
            'id_product' => $request->target4,
            'target_on' => 'reference_producto_sugerido'
        ]);

        return response()->json(array("result"=>$updatingmasive));
    }

    public function actualizarProductosMustHave(Request $request)
    {
        $updatingmasive = DB::table('product_targets')->where('target_on','reference_must_have')->delete();

        ProductTarget::create([
            'id_product' => $request->target1,
            'target_on' => 'reference_must_have'
        ]);

        ProductTarget::create([
            'id_product' => $request->target2,
            'target_on' => 'reference_must_have'
        ]);

        ProductTarget::create([
            'id_product' => $request->target3,
            'target_on' => 'reference_must_have'
        ]);

        ProductTarget::create([
            'id_product' => $request->target4,
            'target_on' => 'reference_must_have'
        ]);

        ProductTarget::create([
            'id_product' => $request->target5,
            'target_on' => 'reference_must_have'
        ]);

        return response()->json(array("result"=>$updatingmasive));
    }
}


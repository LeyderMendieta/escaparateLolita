<?php

namespace App\Http\Controllers;

use App\ProductBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandsController extends Controller
{
    public function getAll()
    {
        $brands = DB::table('product_brands')->orderBy('id', 'DESC')->get();

        return response()->json($brands, 200);
    }

    public function viewBrandDetail($brand)
    {
        $brand_found = DB::table('product_brands')
        ->where('id',$brand)
        ->get();
                
        return response()->json(array("brand"=> $brand_found));
    }

    public function crear(Request $request)
    {
        $brand = new ProductBrand();

        $brand->marca = $request->nombre;
        $brand->descripcion = $request->descripcion;
        $brand->imagen = $request->imagen;
        $brand->url = $request->url;
        $brand->save();
                
        return response()->json(array("brand"=> $brand));
    }

    public function editar(Request $request)
    {
        $brand = ProductBrand::where("id",$request->id)->first();

        $brand->marca = $request->nombre;
        $brand->descripcion = $request->descripcion;
        if($request->imagen != "noset") $brand->imagen = $request->imagen;
        $brand->url = $request->url;
        $brand->save();
                
        return response()->json(array("brand"=> $brand));
    }

    public function remove($brand)
    {
        $removed = DB::table('product_brands')->where('id', $brand)->delete();

        if($removed) $resultado = "success";
        else $resultado = "error";

        return response()->json(array("result"=>$resultado));
    }
}

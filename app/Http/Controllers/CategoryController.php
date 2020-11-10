<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Category;
use Prophecy\Call\Call;

class CategoryController extends Controller
{
    public function getAll()
    {
        $products = DB::table('categories')->orderBy('id', 'DESC')->get();

        return response()->json($products, 200);
    }

    public function crear(Request $request)
    {
        $categoria = new Category();

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
                
        return response()->json(array("categoria"=> $categoria));
    }

    public function editar(Request $request)
    {
        $categoria = Category::where("id",$request->id)->first();

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
                
        return response()->json(array("categoria"=> $categoria));
    }

    public function remove($category)
    {
        $removed = DB::table('categories')->where('id', $category)->delete();

        if($removed) $resultado = "success";
        else $resultado = "error";

        return response()->json(array("result"=>$resultado));
    }

    public function viewCategoryDetail($category)
    {
        $categoria = DB::table('categories')
        ->where('id',$category)
        ->get();
                
        return response()->json(array("categoria"=> $categoria));
    }
}

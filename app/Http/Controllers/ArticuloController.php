<?php

namespace App\Http\Controllers;

use App\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloController extends Controller
{
    public function getAll()
    {
        $brands = DB::table('articulos')->orderBy('id', 'DESC')->get();

        return response()->json($brands, 200);
    }

    public function viewDetail($id)
    {
        $articulo = DB::table('articulos')
        ->where('id',$id)
        ->get();
                
        return response()->json(array("articulo"=> $articulo));
    }

    public function crear(Request $request)
    {
        $articulo = new Articulo();

        $articulo->titulo = $request->titulo;
        $articulo->descripcion = $request->descripcion;
        $articulo->url = $request->url;
        $articulo->save();
                
        return response()->json(array("articulo"=> $articulo));
    }

    public function editar(Request $request)
    {
        $articulo = Articulo::where("id",$request->id)->first();

        $articulo->titulo = $request->titulo;
        $articulo->descripcion = $request->descripcion;
        $articulo->url = $request->url;
        $articulo->save();
                
        return response()->json(array("articulo"=> $articulo));
    }

    public function remove($id)
    {
        $removed = DB::table('articulos')->where('id', $id)->delete();

        if($removed) $resultado = "success";
        else $resultado = "error";

        return response()->json(array("result"=>$resultado));
    }
}

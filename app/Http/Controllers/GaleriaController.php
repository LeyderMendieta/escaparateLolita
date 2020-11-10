<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Tags;
use App\Galeria;
use Prophecy\Call\Call;

class GaleriaController extends Controller
{
    public function getAllTags()
    {
        $results = DB::table('tags')->orderBy('id', 'DESC')->get();

        return response()->json($results, 200);
    }

    public function crearTag(Request $request)
    {
        $tag = new Tags();

        $tag->nombre = $request->nombre;
        $tag->descripcion = $request->descripcion;
        $tag->save();
                
        return response()->json(array("categoria"=> $tag));
    }

    public function editarTag(Request $request)
    {
        $tag = Tags::where("id",$request->id)->first();

        $tag->nombre = $request->nombre;
        $tag->descripcion = $request->descripcion;
        $tag->save();
                
        return response()->json(array("categoria"=> $tag));
    }

    public function removeTag($category)
    {
        $removed = DB::table('tags')->where('id', $category)->delete();

        if($removed) $resultado = "success";
        else $resultado = "error";

        return response()->json(array("result"=>$resultado));
    }

    public function viewTagDetail($tag)
    {
        $tags = DB::table('tags')
        ->where('id',$tag)
        ->get();
                
        return response()->json(array("categoria"=> $tags));
    }

    //------------------------- GALERIA

    public function getAllGaleria()
    {
        $results = DB::table('galerias')->orderBy('id', 'DESC')->get();

        return response()->json($results, 200);
    }

    public function crearGaleria(Request $request)
    {
        $galeria = new Galeria();

        $galeria->nombre = $request->nombre;
        $galeria->descripcion = $request->descripcion;
        $galeria->imagen = $request->imagen;
        $galeria->url = $request->url;
        $galeria->tags = $request->tags;
        $galeria->save();
                
        return response()->json(array("galeria"=> $galeria));
    }

    public function editarGaleria(Request $request)
    {
        $galeria = Galeria::where("id",$request->id)->first();

        $galeria->nombre = $request->nombre;
        $galeria->descripcion = $request->descripcion;
        if($request->imagen != "noset") $galeria->imagen = $request->imagen;
        $galeria->url = $request->url;
        $galeria->tags = $request->tags;
        $galeria->save();
                
        return response()->json(array("galeria"=> $galeria));
    }

    public function removeGaleria($galeria)
    {
        $removed = DB::table('galerias')->where('id', $galeria)->delete();

        if($removed) $resultado = "success";
        else $resultado = "error";

        return response()->json(array("result"=>$resultado));
    }

    public function viewGaleriaDetail($id)
    {
        $galeria = DB::table('galerias')
        ->where('id',$id)
        ->get();
                
        return response()->json(array("galeria"=> $galeria));
    }

    public function guardarFile(Request $request)
    {
        $resultado = [];
        $uploaddir = __DIR__.'/../../../public/images/';

        $list_images = ["imagen","imagen_send"];
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

    public function loadGalleryView(){
        $results = DB::table('galerias')->orderBy('id', 'DESC')->get();
        $tags = DB::table('tags')->orderBy('id', 'DESC')->get();
        return view('store.gallery',array("galerias" => $results,"tags" => $tags));
    }
}

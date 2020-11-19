<?php

namespace App\Http\Controllers;

use App\Product;
use App\AmbienteConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(view()->exists($id)){
            return view($id);
        }
        else
        {
            return view('404');
        }

     //   return view($id);
    }

    public function viewToImportProducts()
    {
        if(!isset($_GET["data_response"])){
            return view("admon.import-products");
        }
        else
        {
            return view("admon.import-products",array("data_response" => $_GET["data_response"]));
        }
    }

    public function loadAdmonPage($id = "dashboard")
    {
        if(view()->exists("admon.$id")){
            return view("admon.$id");
        }
        else
        {
            return view('404');
        }
    }

    public function addToModel($model)
    {
        if(view()->exists("admon.form.$model")){
            return view("admon.form.$model",array("token_editing" => ""));
        }
        else
        {
            return view('404');
        }
    }

    public function editToModel($model,$token)
    {
        if(view()->exists("admon.form.$model")){
            
            return view("admon.form.$model",array("token_editing" => $token));
        }
        else
        {
            return view('404');
        }
    }

    public function loadSettings()
    {
        $settings = AmbienteConfiguration::where("id",">",0)->get();

        return response()->json($settings);
    }

    public function updateSettings(Request $request)
    {
        $model = AmbienteConfiguration::where("id",">",0)->first();
        $model->url_embed_video_home = $request->url_embed_video;
        if($request->imagen_video != "noset") $model->imagen_video_home = $request->imagen_video;
        $model->url_producto_2_home = $request->url_producto_2;
        if($request->imagen_2 != "noset") $model->imagen_2_home = $request->imagen_2;
        $model->url_producto_3_home = $request->url_producto_3;
        if($request->imagen_3 != "noset") $model->imagen_3_home = $request->imagen_3;
        $model->url_producto_5_home = $request->url_producto_5;
        //----imagenes insta
        $model->url_nueva_colleccion = $request->url_nueva_collection;

        $model->save();

        return response()->json(array("settings"=> $model));

    }
}

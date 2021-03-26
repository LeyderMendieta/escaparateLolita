<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\AmbienteConfiguration;
use App\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
            if(isset($_COOKIE["USADM-OAUTH"]))
            {
                $user = User::where(["api_token" => $_COOKIE["USADM-OAUTH"],"graphDomain" => "Administrador"])->first();
                if($user) return view("admon.$id",["user_name" => $user->name]);
                else return view('500');
            }
            else 
            {
                return Redirect::to('admin/login/oauth');
                
            }
        }
        else
        {
            return view('404');
        }
    }

    public function loginUser($type)
    {
        if(isset($_COOKIE["USADM-OAUTH"]))
        {
            $user = User::where(["api_token" => $_COOKIE["USADM-OAUTH"],"graphDomain" => "Administrador"])->first();
            if($user) return Redirect::to('admon');
            else {
                if($type == "reset") return view('admon.resetPassword');
                else  return view('admon.login');
            }
        }
        else {
            if($type == "reset") return view('admon.resetPassword');
            else  return view('admon.login');
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

    public function viewDetailsModel($model,$token)
    {
        if(view()->exists("admon.details.$model")){
            return view("admon.details.$model",array("tokenAccess" => $token));
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

        $models = explode(",",$request->configurations);
        foreach($models as $fila)
        {
            $confVariable = Configuration::where("campo",$fila)->first();
            if($confVariable)
            {
                $confVariable->valor_caracter = $request->{$fila};
                $confVariable->save();
            }
        }

        return response()->json(array("settings"=> $model));

    }

    public function getUsers()
    {
        $users = DB::table('users')
            ->join('user_infos', 'users.id', '=', 'user_infos.id_user')
            ->select('user_infos.*', 'users.name','users.email' , 'users.graphDomain', 'users.created_at','users.AccessToken')
            ->get();
        return response()->json($users);
    }

    public function getTotalSect1()
    {
        $productTotal = DB::table("products")->count();
        $usersTotal = DB::table("users")->count();
        return response()->json(["products" => $productTotal,"users" => $usersTotal]);
    }
}

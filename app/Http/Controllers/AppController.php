<?php

namespace App\Http\Controllers;

use App\AmbienteConfiguration;
use App\Category;
use App\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function showHome()
    {
        $settings = AmbienteConfiguration::first();
        $categorias = Category::where("id",">",0)->get();
        return view('store.home',array("url_embed_video_home"=> $settings->url_embed_video_home, "imagen_video_home" => $settings->imagen_video_home, "imagen_2_home" => $settings->imagen_2_home, "url_producto_2_home" => $settings->url_producto_2_home, "imagen_3_home" => $settings->imagen_3_home, "url_producto_3_home" => $settings->url_producto_3_home,"url_producto_5_home" => $settings->url_producto_5_home,"categorias" => $categorias));
    }

    public function showShop()
    {
        $settings = AmbienteConfiguration::first();
        $max = DB::table('products')->orderBy('id', 'DESC')->max('precio_ahora');
        $min = DB::table('products')->orderBy('id', 'DESC')->min('precio_ahora');
        $min_price = (isset($_GET["min_price"])) ? $_GET["min_price"] : "undefined";
        $max_price = (isset($_GET["max_price"])) ? $_GET["max_price"] : "undefined";
        $search = (isset($_GET["s"])) ? $_GET["s"] : "undefined";
        $category = (isset($_GET["category"])) ? $_GET["category"] : "undefined";
        if($category != "undefined")
        {
            $categoria_result = Category::query()->where("id",$category)->get();
            $categoryText = $categoria_result[0]["nombre"];
        }
        else $categoryText = "";
        return view('store.shop',array("url_nueva_colleccion"=> $settings->url_nueva_colleccion,"min_price" => $min_price, "max_price" => $max_price, "search" => $search, "category" => $category, "categoryText" => $categoryText, "min_value_allow" => $min,"max_value_allow" => $max));
        
    }

    public function getConfigurationField($field)
    {
        if($field == "all")
        {
            $lasConfigurations = Configuration::where("id",">",0)->get();
            $configurations = [];
            foreach($lasConfigurations as $fila)
            {
                $configurations[$fila->campo] = ["valor_numerico" => $fila->valor_numerico, "valor_caracter" => $fila->valor_caracter];
            }
        }
        else $configurations = Configuration::where("campo","$field")->first();
        return response()->json($configurations);
    }
}

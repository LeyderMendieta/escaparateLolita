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
        $configuraciones = Configuration::where("campo","imagen_nueva_coleccion")->first();
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
        return view('store.shop',array("url_nueva_colleccion"=> $settings->url_nueva_colleccion, "imagen_nueva_coleccion" => $configuraciones->valor_caracter,"min_price" => $min_price, "max_price" => $max_price, "search" => $search, "category" => $category, "categoryText" => $categoryText, "min_value_allow" => $min,"max_value_allow" => $max));
        
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

    public function showRequestResponse($type)
    {
        if($type == "verificarCuenta-D95ACAD839799A0B085540510FD1A977351A5C2F")
        {
            $logo = "ti-email mr-1";
            $titulo = "Verificar Cuenta";
            $message = "Se ha enviado un mensaje para confirmar la cuenta, verifica tu bandeja de entrada y/o correo no deseado, para proceder con la verificación de la cuenta";
        }
        else if($type == "cuentaVerificadaSuccess-4B1DC2F3CBB785B7D5FEA655C6C4E0927B384A9B")
        {
            $logo = "ti-face-smile mr-1";
            $titulo = "Felicidades";
            $message = "Se ha confirmado tu correo electronico";
        }
        else
        {
            $logo = "ti-face-sad mr-1";
            $titulo = "Error";
            $message = "Page Not Found";
        }
        return view('message',array("titulo" => $titulo, "logo" => $logo, "message" => $message));
    }
}

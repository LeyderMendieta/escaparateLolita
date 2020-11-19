<?php

namespace App\Http\Controllers;

use App\AmbienteConfiguration;
use App\Category;
use Illuminate\Http\Request;

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
        return view('store.shop',array("url_nueva_colleccion"=> $settings->url_nueva_colleccion));
    }
}

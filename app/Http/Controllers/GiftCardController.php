<?php

namespace App\Http\Controllers;

use App\GiftCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GiftCardController extends Controller
{
    public function getAll()
    {
        $response = DB::table('gift_cards')->orderBy('id', 'DESC')->get();

        return response()->json($response, 200);
    }

    public function viewDetail($brand)
    {
        $response = DB::table('gift_cards')
        ->where('id',$brand)
        ->get();
                
        return response()->json(array("gift_card"=> $response));
    }

    public function crear(Request $request)
    {
        $object = new GiftCard();

        $object->nombre = $request->nombre;
        $object->valor = $request->valor;
        $object->etiquetas = $request->etiquetas;
        $object->color_hex = $request->color;
        $object->save();
                
        return response()->json(array("gift_card"=> $object));
    }

    public function editar(Request $request)
    {
        $object = GiftCard::where("id",$request->id)->first();

        $object->nombre = $request->nombre;
        $object->valor = $request->valor;
        $object->etiquetas = $request->etiquetas;
        $object->color_hex = $request->color;
        $object->save();
                
        return response()->json(array("gift_card"=> $object));
    }

    public function remove($brand)
    {
        $removed = DB::table('gift_cards')->where('id', $brand)->delete();

        if($removed) $resultado = "success";
        else $resultado = "error";

        return response()->json(array("result"=>$resultado));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;
use App\cartProduct;
use App\User;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getMyCart()
    {

        if(isset($_COOKIE["session_mycart"]))
        {
            return response()->json(array("cart" => $_COOKIE["session_mycart"]));
        }

        $session = (isset($_COOKIE["session_user"])) ? $_COOKIE["session_user"] : "null";
        
        $user = User::where('api_token',$session)->whereNotNull('api_token')->first();
        if($user)
        {            
            $mycart = cart::where("id_usuario",$user->id)->first();

            if(!$mycart)
            {                
                $mycart = cart::create([
                    "id_usuario" => $user->id
                ]);
            }

            $mycart->generateToken();

            //setcookie("session_mycart",$mycart->api_token,time()+36000,"/");       
        }
        else
        {
            
            $mycart = cart::create([
                "id_usuario" => 9999999
            ]);

            $mycart->generateToken();

            //setcookie("session_mycart",$mycart->api_token,time()+36000,"/");
        }

        return response()->json(array("cart" => $mycart->api_token));
        
    }

    public function getMyCartProducts()
    {
        if(!isset($_COOKIE["session_mycart"]))
        {
            return response()->json(array("error" => "Cart not found"));
        }
        
        $mycart = cart::where("api_token",$_COOKIE["session_mycart"])->first();
        if(!isset($mycart->id))
        {
            setcookie('session_mycart', '', time() - 3600, '/');
            return response()->json(array("error" => "Cart not found"));
        }

        $myproducts_cart = DB::select("SELECT t0.id,t0.cantidad,t1.name,t1.descripcion,t1.imagen_main,t2.price FROM cart_products t0 INNER JOIN products t1 ON t0.id_product=t1.id INNER JOIN product_prices t2 ON t0.id_product_price=t2.id AND t2.estado=1 WHERE t0.id_cart=".$mycart->id);

        $subtotal = 0;

        foreach($myproducts_cart as $fila)
        {
            $subtotal += $fila->price * $fila->cantidad;
        }

        return response()->json(array("products" => $myproducts_cart,"subtotal" => $subtotal,"items" => count($myproducts_cart)));
    }

    public function addProductToCart(Request $request)
    {
        if(!isset($_COOKIE["session_mycart"])) $error = "No Cart found";
        if($request->product_id == null || $request->product_id == "") $error = "Producto Necessary";
        if($request->product_price_id == null || $request->product_price_id == "") $error = "Producto Precio Necessary";
        if($request->cantidad == null || $request->cantidad == "") $error = "Producto Cantidad Necessary";

        if(isset($error)) return response()->json(array("error" => $error));
        

        $mycart = cart::where("api_token",$_COOKIE["session_mycart"])->first();

        $myproduct_added = cartProduct::create([
            "id_cart" => $mycart->id,
            "id_product" => $request->product_id,
            "id_product_price" => $request->product_price_id,
            "cantidad" => $request->cantidad
        ]);

        return response()->json($myproduct_added);
    }

    public function removeProductCart($id)
    {
        if(!isset($_COOKIE["session_mycart"])){
            $error = "No Cart found";
            return response()->json(array("error" => $error));
        }

        $result = DB::table('cart_products')->where('id', $id)->delete();

        return response()->json($result);

    }
}

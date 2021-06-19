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

        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";
        
        $user = User::where('api_token',$session)->whereNotNull('api_token')->first();
        if($user)
        {         
            $mycart = cart::create([
                "id_usuario" => $user->id
            ]);

            $mycart->generateToken();
            
        }
        else
        {
            
            $mycart = cart::create([
                "id_usuario" => 9999999
            ]);

            $mycart->generateToken();
        }

        $this->cleanCartsAndSetAbandonado();

        return response()->json(array("cart" => $mycart->api_token));
        
    }

    public function cleanCartsAndSetAbandonado()
    {
        $cartsYesterday = DB::select("SELECT * FROM carts WHERE DATE_FORMAT(created_at, '%j') < DATE_FORMAT(NOW(), '%j') ORDER BY `id` DESC");
        foreach($cartsYesterday as $fila)
        {
            if($fila->id_usuario == 9999999)
            {
                DB::table("carts")->where("id",$fila->id)->delete();
                DB::table("cart_products")->where("id_cart",$fila->id)->delete();
            }
            else
            {
                $contador = DB::table("cart_products")->where("id_cart",$fila->id)->count();
                if($contador == 0)
                {
                    DB::table("carts")->where("id",$fila->id)->delete();
                    DB::table("cart_products")->where("id_cart",$fila->id)->delete();
                }
            }
        }
    }

    public function getCartsAbandonados($session)
    {
        if($session != "full")
        {
            $user = User::where('api_token',$session)->whereNotNull('api_token')->first();
            $identificador = (isset($user->id)) ? $user->id : 0;
            $cartsAbandonados = DB::select("SELECT * FROM carts WHERE id_usuario='$identificador' AND DATE_FORMAT(created_at, '%j') < DATE_FORMAT(NOW(), '%j') ORDER BY `id` DESC");
        }
        else $cartsAbandonados = DB::select("SELECT * FROM carts WHERE DATE_FORMAT(created_at, '%j') < DATE_FORMAT(NOW(), '%j') ORDER BY `id` DESC");
        
        $result = array();
        $i = 0;
        foreach($cartsAbandonados as $filaAbandonado)
        {
            $user = User::where("id",$filaAbandonado->id_usuario)->first();

            $products_cart = DB::select("SELECT t0.id as cartId,t0.talla_selected,t0.color_selected,t0.cantidad,t1.* FROM cart_products t0 INNER JOIN products t1 ON t0.id_product=t1.id WHERE t0.id_cart=".$filaAbandonado->id);

            $result[$i] = array("user" => $user,"products" => $products_cart, "cart" => $filaAbandonado);
            $i++;
        }
        return response()->json($result);
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

        $myproducts_cart = DB::select("SELECT t0.id as cartId,t0.talla_selected,t0.color_selected,t0.cantidad,t1.* FROM cart_products t0 INNER JOIN products t1 ON t0.id_product=t1.id WHERE t0.id_cart=".$mycart->id);

        $subtotal = 0;

        foreach($myproducts_cart as $fila)
        {
            $subtotal += $fila->precio_ahora * $fila->cantidad;
        }

        $paises = DB::select("SELECT * FROM app_paises");
        $paymentsToken = DB::select("SELECT * FROM user_payment_tokens WHERE id_user='$mycart->id_usuario' AND activo=1");

        return response()->json(array("products" => $myproducts_cart,"subtotal" => $subtotal,"items" => count($myproducts_cart),"reference" => "Cart$mycart->id-USR$mycart->id_usuario", "paises" => $paises,"userPo" => $mycart->id_usuario, "paymentsData" => $paymentsToken, "address" => $_SERVER['REMOTE_ADDR']));
    }

    public function addProductToCart(Request $request)
    {   
        if(!isset($_COOKIE["session_mycart"])) $error = "No Cart found";
        if($request->product_id == null || $request->product_id == "") $error = "Producto Necessary";

        if(isset($error)) return response()->json(array("error" => $error));
        

        $mycart = cart::where("api_token",$_COOKIE["session_mycart"])->first();

        $myproduct_added = cartProduct::create([
            "id_cart" => $mycart->id,
            "id_product" => $request->product_id,
            "talla_selected" => $request->talla,
            "color_selected" => $request->color,
            "cantidad" => 1
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

        return $this->getMyCartProducts();

    }

    public function changeCantidadProducts(Request $request)
    {
        if(!isset($_COOKIE["session_mycart"])){
            $error = "No Cart found";
            return response()->json(array("error" => $error));
        }

        $mycart = cart::where("api_token",$_COOKIE["session_mycart"])->first();

        $cambios = 0;
        foreach($request->updates as $fila)
        {
            $cart = cartProduct::where(["id" => str_replace("cartproduct_","",$fila["producto"]),"id_cart" => $mycart->id])->first();
            if($cart)
            {
                $cart->cantidad = $fila["cantidad"];
                $cart->save();
                $cambios++;
            }
        }
       
        $result = "Se han echo $cambios Cambios";

        return $this->getMyCartProducts();
    }
}
